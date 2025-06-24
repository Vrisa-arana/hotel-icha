<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hotel;
use Illuminate\View\View; 

class HotelController extends Controller
{
    public function list(): View 
    { 
        $data = Hotel::all(); 
        return view('hotel.list', [ 'data' => $data ]); 
    } 

}
