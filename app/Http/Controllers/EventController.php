<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $data_event = \App\Event::all();
        return view('index',['data_event' => $data_event]);
    }
}
