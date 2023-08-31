<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Validation\Rules;
use App\Models\User;
use App\Models\Profile;
use App\Models\Property;
use App\Models\Sale;
use App\Models\Rent;
use App\Models\Mortgage;

class AdminController extends Controller
{
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
    // Method Ended

    public function profile() {
        $id=Auth::user()->id;
        $adminData=User::find($id);

        return view('dashboard.admin_profile', compact('adminData'));
    }
    // Method Ended

    public function editProfile() {
        $id=Auth::user()->id;
        $editData=User::find($id);

        return view('dashboard.edit_profile', compact('editData'));
    }
    // Method Ended

    public function storeProfile(Request $request,$id) {
        // $id=Auth::user()->id;
        // $data=User::find($id);
         $data = user::findOrFail($id);

        $validateData=$request->validate([

            'name'=>'required',
            'username'=>'required',
            'email'=>'required',


        ]);
        $data->name=$request->name;
        $data->username=$request->username;
        $data->email=$request->email;
        $data->save();
        // $profile =new Profile();
        // $profile->phone=$request->phone;
        // $profile->address=$request->address;

        $profile=$data->profile;
        if (!$profile) {
            $profile = new Profile();
            $profile->user_id = $data->id;
        }
        if($request->file('profile_Image'))
        {
            $file=$request->file('profile_Image');
            $filename= date('Ymd').$file->getClientOriginalName();

            $file->move(public_path('/upload/admin_images'),$filename);
            $path="upload/admin_images/".$filename;
            $profile['profile_Image']=$path;
        }
        $profile->address=$request->address;
        $profile->phone=$request->phone;
        $profile->save();
        // $data->profile()->save($profile);


        return redirect()->route('admin.profile');
    }
    // Method Ended

    public function changePassword()
    {
        return view('dashboard.change_password');
    }
    // Method Ended
    public function updatePassword(Request $request)
    {
        $validatData =$request->validate([
            'oldPassword'=>'required',
            'newPassword'=>'required',
            'confirm_Password'=>'required |same:newPassword'

        ]);
        $hashedPassword=Auth::user()->password;
        if(Hash::check($request->oldPassword, $hashedPassword)){
            $users =User::find(Auth::id());
            $users->password= bcrypt($request->newPassword);
            $users->save();
            return back()->with('update_Password','Password change Successfully');
        }
        else{
             return back()->with('updatePassword','Old password is not match');
        }
    }
    // Method Ended

    public function alluser()
    {
        $users=User::all();
        return view('dashboard.pages.alluser', compact('users'));
    } // Method Ended
    public function addNewUser(){
        return view('dashboard.addUser');
    } // Method Ended
    public function storeNewUser(Request $request){

        // $validatData=$request->validate([
        //     'name' => 'required',
        //     'username'=>'required',
        //     'email' => 'required',
        //     'password' => 'required',
        //     'confirm_Password'=>'required |same:newPassword',
        // ]);

        $user = User::create([
            'name' => $request->name,
            'username' => $request->username,
            'profile_image' => $request->profile_image,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);


    return redirect()->route('all.user')->with('flash', 'User created successfully!');
    } // Method Ended
    public function allProperty()
    {
        $propertise=Property::where('approve', true)->get();
        return view('dashboard.pages.allProperty', compact('propertise'));
    }
    public function allSale()
    {
        $sales=Property::where('approve',true)
        ->where('deal_type','sale')->get();

        return view('dashboard.pages.allsale', compact('sales'));
    }
    public function allRent()
    {
        $rents=Property::where('approve',true)
        ->where('deal_type','rent')->get();
        return view('dashboard.pages.allRent', compact('rents'));
    }
    public function allMortgage()
    {
        $mortgages=Property::where('approve',true)
        ->where('deal_type','mortgage')->get();
        return view('dashboard.pages.allMortgage', compact('mortgages'));
    }
    public function deleteuserAccout($id)
    {
        if($id !=auth::user()->id){
            $user = User::find($id);
            $user->delete($user->id);
            return redirect()->back()->with('flash', 'User account has been deleted!');
        }
        else{
            return redirect()->back()->with('flash', 'You cant delete your own Account!');
        }
    }
    public function changeAuthority($id)
    {
        $user=User::find($id);
        return view('dashboard.pages.editUser', compact('user'));
    }
    public function updateUser(Request $request,$id)
    {
        if($id !=auth::user()->id){
            $user = User::find($id);
            $user->usertype=$request->usertype;
            $user->save();
            return redirect()->route('all.user')->with('flash', 'User updated successfully!');
        }
        else{
            return redirect()->route('all.user')->with('flash', 'You cant edit your own Account!');
        }
    }
    public function deletePost($id)
    {
        $property=Property::find($id);
        $property->delete($property->id);
        return redirect()->route('all.property')->with('delete', 'Post deleted successfully!');
    }
}
