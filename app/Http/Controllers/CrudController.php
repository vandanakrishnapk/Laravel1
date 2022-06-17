<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class CrudController extends Controller
{
    public function index()
    {        
        $users=User::orderBy('username','asc')->limit(5)->get();
        // return $users;
        return view('index',compact('users'));
        
    }
    public function form()
    {
        return view('form');
    }
   
}
