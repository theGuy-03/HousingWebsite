<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

use Illuminate\Http\Request;
use App\Models\About;
use App\Models\User;
use App\Mail\ContactUs;
use App\Models\Footer;

class AboutController extends Controller
{
    public function showAbout()
    {
        $about=About::first();
        return view('frontend.about',compact('about'));
    }
    public function showContact()
    {
        $footer=Footer::first();
        return view('frontend.contact',compact('footer'));
    }
    public function allabout()
    {
        $about=About::all();
      return  view('dashboard.pages.aboutPage',compact('about'));
    }
    public function addabout(Request $request)
    {
        return view('dashboard.addabout');
    }
    public function storeAbout(Request $request,$id)
    {

        $data = user::findOrFail($id);
        $validateData=$request->validate([

            'shortdi'=>'required',
            'longdi'=>'required',
            'quality'=>'required',
            'reliable'=>'required',
            'Easy'=>'required',
            'image'=>'required',

        ]);
        $about=$data->about;
        if (!$about) {
            $about = new About();
            $about->user_id = $data->id;
        }
        if($request->file('image'))
        {
            $file=$request->file('image');
            $filename= date('Ymd').$file->getClientOriginalName();

            $file->move(public_path('/upload/about/'),$filename);
            $path="/upload/about/".$filename;
            $about['image']=$path;
        }
        $about->shortdi=$request->shortdi;
        $about->longdi=$request->longdi;
        $about->quality=$request->quality;
        $about->reliable=$request->reliable;
        $about->Easy=$request->Easy;
        $about->save();
        return redirect()->back()->with('flash','About Updated Successfylly!');

    }
    public function contactUs(Request $request)
    {
        $data=$request([
            'name',
            'email',
            'subject',
            'message'
        ]);

        Mail::to('hananandar123@gmail.com')->send(new ContactUs($data));
        return redirect()->back()->with('flash','Massage Send Successfully!');
    }

    public function userviewAbout($id)
    {
        $userData=User::find($id);

        return view('frontend.userview.profileBody.userviewAbout',compact('userData'));
    }
}
