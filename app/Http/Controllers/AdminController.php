<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {

    }

    public function contacts()
    {
        return view('admin_panel.pages.contacts');
    }
}
