<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin_panel.pages.login');
    }

    public function contacts()
    {
        return view('admin_panel.pages.contacts');
    }
}
