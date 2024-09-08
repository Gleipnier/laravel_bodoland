<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function createPost(Request $request){
        $incomingFields = $request->validate([
            'title'=> 'required',
            'description'=> 'required',
            'document'=> 'required'
        ]);
        $incomingFields['title']= strip_tags($incomingFields['title']);
        $incomingFields['description']= strip_tags($incomingFields['description']);
        $incomingFields['document']= strip_tags($incomingFields['document']);
        Post::create($incomingFields);
        return view('admin.index');
    }

    public function updatePost(Request $request){
        $incomingFields = $request->validate([
            'title'=> 'required',
            'description'=> 'required',
            // 'document'=> 'required'
        ]);
        $editpost=Post::where('id',$request->id)->first();
        $editpost->title=$request->title;
        $editpost->description=$request->description;
        $editpost->document=$request->document;
        $editpost->save();
        // $incomingFields['title']= strip_tags($incomingFields['title']);
        // $incomingFields['description']= strip_tags($incomingFields['description']);
        // $incomingFields['document']= strip_tags($incomingFields['document']);
        // Post::create($incomingFields);
        return view('admin.index');
    }

    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->get();
        return view('posts.index', compact('posts'));
    }
    public function edit(Post $post)
    {
    return view('posts.newedit', compact('post'));
    }

    public function destroy($id) {
        // Fetch the post by id
        $post = Post::find($id);

        if (!$post) {
            return redirect()->route('posts.index')->with('error', 'Post not found');
        }

        // Delete the post
        $post->delete();
        if (Storage::exists('public/' . $post->document)) {
            Storage::delete('public/' . $post->document);
        }
        return redirect()->route('posts.index')->with('success', 'Post deleted successfully');
}
}
