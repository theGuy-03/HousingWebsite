<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Property;

class SearchController extends Controller
{
    public function searchData(Request $request){

        $search=$request['search'] ?? "";
        if($search !="")
        {
            $posts=Property::where('title','LIKE',"%$search%" )->orWhere('deal_type','like',"%$search%")
            ->orWhereHas('address', function($query) use ($search){
               $query->where('city',"LIKe","%$search%");
            })
            ->orWhereHas('rent', function($query) use ($search){
                $query->where('price',"LIKe","%$search%");
             })
             ->orWhereHas('sale', function($query) use ($search){
                $query->where('price',"LIKe","%$search%");
             })
             ->orWhereHas('mortgage', function($query) use ($search){
                $query->where('price',"LIKe","%$search%");
             })
             ->orWhereHas('address', function($query) use ($search){
                $query->where('city',"LIKe","%$search%");
             })->get();
            // $posts=compact('property','search');
            // return view('frontend.search')->with($posts);
            if($search !="")
            {
                return view('frontend.search', compact('posts','search'));
            }
            else{
                return view('frontend.index');
            }
        }
        else{
            return view('frontend.index');
        }

    }
}
