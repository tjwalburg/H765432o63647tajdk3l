<?php

namespace Hotel\Http\Controllers;

use Illuminate\Http\Request;

use Hotel\Http\Requests;

class HotelController extends Controller
{
    public function index(){
      return view('index');
    }

    public function rooms(){
      return view('rooms');
    }

    public function signin(){
      return view('signin');
    }

    public function reserva(){
      return view('reserva');
    }

    public function detalle(){
      return view('detalle');
    }
}
