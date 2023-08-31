<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Property;
use App\Models\Image;

class HomeController extends Controller
{
    public function home()
    {
         $posts =Property::paginate(12)->where('approve',true);
        return view('frontend.index',compact('posts'));
    }
    public function index() {

        $userType= Auth()->user()->usertype;
        if(Auth::id())
        {

            if($userType =='user')
            {


                return view('userProfile.index');
            }
            else if($userType =='admin')
            {
                $propertise=Property::where('approve', false)->get();
                return view('dashboard.index',compact('propertise'));
            }
            else
            {
                return redirect()->back();
            }
        }
    }
    // public function userProfile()
    // {
    //     $id=Auth::user()->id;
    //     $userData=User::find($id);
    //     return view('frontend.index', compact('userData'));
    // }
    public function allUser()
    {
        // $users=User::whereHas('user_type','=','user')->all();

        $users = User::whereHas('property', function ($query) {
            $query->where('approve', true);
        })->get();
        return view('frontend.users',compact('users'));
    }
    public function singlePost($id)
    {

        $property= Property::find($id);
        $user=$property->user;
        $posts=$property->images()->get();

        return view('frontend.singlePost',compact('posts','property','user'));
    }
    public function userview($id)
    {
        $userData=User::find($id);
         $data = $userData->property()->where('approve', true)
        ->get();
        return view('frontend.userview.index',compact('userData','data'));
    }
    public function indexSale()
    {
        // $userData= Property::whereHas('sale', function ($query) {
        //     $query->where('deal_type', 'sale');
        // })->get();
        $userData = Property::whereHas('sale', function ($query) {
            $query->where('deal_type', 'sale');
        })
        ->where('approve', true)
        ->get();
        return view('frontend.sale',compact('userData'));
    }
    public function indexRent()
    {
        $userData= Property::whereHas('rent', function ($query) {
            $query->where('deal_type', 'rent');
        })
        ->where('approve', true)
        ->get();
        return view('frontend.rent',compact('userData'));
    }
    public function indexMortgage()
    {
        $userData= Property::whereHas('mortgage', function ($query) {
            $query->where('deal_type', 'mortgage');
        })
        ->where('approve', true)
        ->get();
        return view('frontend.mortgage',compact('userData'));
    }

    // public function userViewProfile($id){
    //      $userData=User::find($id);
    //      $data = $userData->property()->where('approve', true)
    //     ->where('approved', true)
    //     ->get();
    //     dd($data);
    //     return view('frontend.userview.index',compact('data'));
    // }
    public function userViewSale($id){
         // $posts=$userData->property()->where('deal_type','=','sale')->get();
         $userData=User::find($id);
         $data = $userData->property()->where('approve', true)
         ->where('deal_type', 'sale')
         ->where('user_id', $userData->id)
         ->get();
        return view('frontend.userview.userViewSale',compact('data','userData'));
    }
    public function userViewRent($id){
        $userData=User::find($id);
         $data = $userData->property()->where('approve', true)
         ->where('deal_type', 'rent')
         ->where('user_id', $userData->id)
         ->get();
        return view('frontend.userview.userViewRent',compact('data','userData'));
    }
    public function userViewMortgage($id){
        $userData=User::find($id);
        $data = $userData->property()->where('approve', true)
        ->where('deal_type', 'mortgage')
        ->where('user_id', $userData->id)
        ->get();
        return view('frontend.userview.userViewMortgage',compact('data','userData'));
    }

}
