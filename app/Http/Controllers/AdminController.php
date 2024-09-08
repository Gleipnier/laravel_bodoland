<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function edit($id)
    {
        $editpost=Post::where('id',$id)->first();
        return view('admin.edit')->with('post',$editpost);
    }
}
