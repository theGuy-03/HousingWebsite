<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Footer;
use App\Models\User;

class FooterController extends Controller
{
    public function footer(){

        $footers=Footer::get();
        return view('dashboard.pages.footer',compact('footers'));
    }
    public function addfooter()
    {
        $footer=Footer::get();
        return view('dashboard.pages.addfooter', compact('footer'));
    }
    public function storeFooter(Request $request,$id){

        $data = User::findOrFail($id);

        $footer=$data->footer;
        if (!$footer) {
            $footer = new Footer();
            $footer->user_id = $data->id;
        }


        $footer->location=$request->location;
        $footer->opendays=$request->openDays;
        $footer->openHours=$request->openHours;
        $footer->email=$request->email;
        $footer->disclaimer=$request->disclaimer;
        $footer->phon1=$request->phone1;
        $footer->phon2=$request->phone2;
        $footer->instagramLink=$request->instagramLink;
        $footer->tweeterLink=$request->tweeterLink;
        $footer->facebookLink=$request->facebookLink;
        $footer->save();
        return redirect()->back()->with('flash','About Updated successfully!');
    }
}
