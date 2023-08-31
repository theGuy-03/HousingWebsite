<?php

namespace App\Http\Controllers\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Profile;

class SettingController extends Controller
{
    public function edit(){
        $id=Auth::id();
        $userProfileData =User::find($id);
        return view('userProfile.setting.changePassword', compact('userProfileData'));
    }//end method
    public function updateUserPassword(Request $request)
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

    //end method

    public function editprofileaccout()
    {
        $id=Auth::id();
        $userProfileData =User::find($id);
        return view('userProfile.setting.editUserProfile', compact('userProfileData'));
    }//end method
    public function updateUserProfile(Request $request,$id)
    {
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
        if($request->file('profile_image'))
        {
            $file=$request->file('profile_image');
            $filename= date('Ymd').$file->getClientOriginalName();

            $file->move(public_path('/upload/user'),$filename);
            $path="/upload/user/".$filename;
            $profile['profile_image']=$path;
        }
        $profile->address=$request->address;
        $profile->phone=$request->phone;
        $profile->save();
        // $data->profile()->save($profile);


        return redirect()->back()->with('flash','Profile edited successfully!');

    }//end method
    // public function photo(){
    //     return view('userProfile.setting.addProfilePhoto');
    // }
    // public function sasvephoto(Request $request){


    //             $id=Auth::id();
    //             $userdata=User::find($id);

    //           if($request->file('profile_image')){

    //             $profile= new Profile();
    //             $profile->address=$request->address;
    //             $profile->phone=$request->phone;

    //             if($request->file('profile_image'))
    //             {
    //                 $profileImage= $request->file('profile_image');
    //                 $imageName = date('YmdHi').$profileImage->getClientOriginalName();
    //                 $profileImage->move(public_path('upload/user'),$imageName);
    //                 $path="/upload/user/".$imageName;
    //                 $profile['profile_image']=$path;

    //             }

    //         $userdata->profile()->save($profile);
    //         return redirect()->back()->with('success','Form save successfuly!');
    //    }
    // }

    public function destroyAccoutn($id){

        $user = User::find(Auth::user()->id);
        $user->delete($user->id);
        return redirect()->route('register')->with('flash', 'Your account has been deleted!');

    }
}
