<?php

namespace App\Http\Controllers\userProfile;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Property;
use App\Models\Address;
use App\Models\Rent;
use App\Models\Sale;
use App\Models\Mortgage;
use App\Models\Image;
use App\Models\Approve;
use ResizeImage;

class PropertyController extends Controller
{
    public function addProperty()  {

        return view('userProfile.addProperty');
    }
    public function storeData(Request $request){

        $id=Auth::id();
        $userdata=User::find($id);
        $validateData=$request->validate([

            'title'=>'required',
            'property_type'=>'required',
            'price'=>'required',
            'city'=>'required',
            'deal_type'=>'required',
            'path' =>'required',
            'deed_path'=>'required'

        ]);

        $property =new Property();
        $property->title=$request->title;
        $property->bedroom=$request->bedroom;
        $property->bathroom=$request->bathroom;
        $property->kitchen=$request->kitchen;
        $property->area=$request->area;
        $property->floor=$request->floor;
        $property->deal_type=$request->deal_type;
        $property->description=$request->description;
        $property->approve=false;

        $userdata->property()->save($property);

        $address =new Address();
        $address->city=$request->city;
        $address->district=$request->district;
        $address->address_description=$request->address_description;

        $property->address()->save($address);

        if($request->deal_type=='rent')
        {
            $rent= new Rent();
            $rent->property_type=$request->property_type;
            $rent->price=$request->price;

            $property->rent()->save($rent);
        }
        else if($request->deal_type=='sale')
        {
            $sale= new Sale();
            $sale->property_type=$request->property_type;
            $sale->price=$request->price;
            $property->sale()->save($sale);
        }
        else
        {
            $mortgage= new Mortgage();
            $mortgage->property_type=$request->property_type;
            $mortgage->price=$request->price;
            $property->mortgage()->save($mortgage);
        }


        if ($request->hasFile('path')) {
            foreach ($request->file('path') as $file) {
                $imageName = date('YmdHi') . '_' . $file->getClientOriginalName();
                $file->move(public_path('/upload/image/'), $imageName);

                $image = new Image();
                $image->property_id = $property->id;
                $image->path = "/upload/image/" . $imageName;
                $image->save();
            }



        }

        if ($request->hasFile('deed_path')) {
            foreach ($request->file('deed_path') as $file) {
                $imageName = date('YmdHi') . '_' . $file->getClientOriginalName();
                $file->move(public_path('/upload/approve/'), $imageName);

                $image = new Approve();
                $image->property_id = $property->id;
                $image->deed_path = "/upload/approve/" . $imageName;
                $image->save();
            }

            return redirect()->back()->with('success','Your post wil approve as soon as passable!');

        }



    }
    public function propertyList(){
        $user = Auth::user();
        $userData = $user->property()->where('approve', '=', 1)->get();
        return view('userProfile.post.allPost',compact('userData'));
    }
    public function editPost($id){
        $post=Property::find($id);
        return view('userProfile.post.edit',compact('post'));
    }
    public function updatPost(Request $request, $id)
    {


            $user_id = Auth::id();

            // Find the property to update
            $property = Property::findOrFail($id);

            // Validate
            $validateData = $request->validate([
                'title' => 'required',
                'property_type' => 'required',
                'price' => 'required',
                'city' => 'required',
                'deal_type' => 'required',
                'path.*' => 'nullable|image|mimes:jpeg,png,jpg,gif'
            ]);

            // Update the property data
            $property->title = $request->title;
            $property->bedroom = $request->bedroom;
            $property->bathroom = $request->bathroom;
            $property->kitchen = $request->kitchen;
            $property->area = $request->area;
            $property->floor = $request->floor;
            $property->deal_type = $request->deal_type;
            $property->approve=false;
            $property->description = $request->description;

            // Update the address data
            $address = $property->address;
            $address->city = $request->city;
            $address->district = $request->district;
            $address->address_description = $request->address_description;

            // Update the price data based on the deal type
            if ($request->deal_type == 'rent') {
                $price = $property->rent;
                if (!$price) {
                    $price = new Rent();
                }
                $price->property_type = $request->property_type;
                $price->price = $request->price;
                $property->rent()->save($price);
            } else if ($request->deal_type == 'sale') {
                $price = $property->sale;
                if (!$price) {
                    $price = new Sale();
                }
                $price->property_type = $request->property_type;
                $price->price = $request->price;
                $property->sale()->save($price);

            } else {
                $price = $property->mortgage;
                if (!$price) {
                    $price = new Mortgage();
                }
                $price->property_type = $request->property_type;
                $price->price = $request->price;
                $property->mortgage()->save($price);
            }

            // Update the images
            if ($request->hasFile('path')) {
                foreach ($request->file('path') as $file) {
                    $imageName = date('YmdHi') . '_' . $file->getClientOriginalName();
                    $file->move(public_path('/upload/image/'), $imageName);

                    $image = new Image();
                    $image->property_id = $property->id;
                    $image->path = "/upload/image/" . $imageName;
                    $image->save();
                }
            }

            // Delete the selected images
            if ($request->has('delete_image')) {
                foreach ($request->input('delete_image') as $image_id) {
                    $image = Image::findOrFail($image_id);
                    $image->delete();
                }
            }

            $property->save();
            $address->save();


            return redirect()->back()->with('success', 'Your post wil approve as soon as passable!');
    }
    public function deletePost($id)
    {
        $post=Property::find($id);
        $post->delete();

        return redirect()->back()->with('flash','Post deleted successfully!');
    }
}

