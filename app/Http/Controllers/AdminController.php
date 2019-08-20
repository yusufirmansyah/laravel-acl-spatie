<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{

    // public function __construct()
    // {
    //     // $this->middleware('role:admin'); // middleware berdasarkan role
    //     $this->middleware('permission:delete post'); // middleware berdasarkan permission
    // }

    public function index()
    {
        return 'ok';
    }
}
