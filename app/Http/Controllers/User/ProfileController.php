<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class ProfileController extends Controller
{
    public function profile() {
        $user = Auth::user();
        $userData = $user->property()->where('approve', true)->get();
        return view('userProfile.index' ,compact('userData'));
    }
    public function setting() {
        return view('userProfile.setting');
    }
    public function about() {
        return view('userProfile.contact.about');
    }
    public function contact() {
        return view('userProfile.contact.contact');
    }

    public function allPost()
    {
        $user = Auth::user();
        $userData = $user->property()->where('approve', true)->get();
        return view('userProfile.post.allPost',compact('allPosts'));
    }
    public function salePost()
    {
        $user = Auth::user();
        $userData = $user->property()->where('deal_type', 'sale')->where('approve', true)->get();
        return view('userProfile.post.salePosts',compact('userData'));
    }
    public function rentPost()
    {
        $user = Auth::user();
        $userData = $user->property()->where('deal_type', 'rent')->where('approve', true)->get();
        return view('userProfile.post.rentPosts',compact('userData'));
    }
    public function mortgagePost()
    {
        $user = Auth::user();
        $userData = $user->property()->where('deal_type', 'mortgage')->where('approve', true)->get();
        return view('userProfile.post.mortgagePosts',Compact('userData'));
    }

}
