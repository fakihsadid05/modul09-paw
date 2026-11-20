<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteController extends Controller
{
    public function index()
    {
        return "This is from Controller";
    }

    // Tambahkan method ini untuk 5.10
    public function profile($profileId)
    {
        return "This is Profile from Controller, profile id: ".$profileId;
    }
}
