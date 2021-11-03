<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\hotel;

class HotelController extends Controller
{
    function index(){
        $hotel = hotel::all();
        return $hotel;
    }
    // use unique contrain before creating hotel this is a rember message.
    function store(Request $request){
        $hotel = hotel::create([
            'name'=>$request->name,
            'owner_name'=>$request->owner_name,
            'owner_phone_no'=>$request->owner_phone_no,
            'hotel_address'=>$request->address
        ]);
        return $hotel;
    }
}
