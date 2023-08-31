<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;
use App\Models\Approve;

class ApproveController extends Controller
{
   public function propertyPost()
   {
    $propertise=Property::where('approve',false)->get();
    return view('dashboard.ApprovePost.approvePost',compact('propertise'));
   }

   public function propertyDetails($id){

    // $property = Property::find($id);
    // $images=$property->images();
    $property= Property::find($id);
    $image=$property->images()->get();
    $address=$property->address;
    return view('dashboard.ApprovePost.Details', compact('property','image','address'));
   }
   public function approvePost($id)
   {
        $property=Property::find($id);
        $property->approve=true;
        $property->save();
        // return route('property.post')->with('flash','Data approved succesfully');
        return redirect()->route('property.post')->with('flash', 'Data approved succesfully');
   }
}

