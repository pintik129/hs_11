<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function store()
    {
    return view('posts');
    }
    public function create(Request $request)
    {
        $title = $request->input('title');
        $text = $request->input('text');
        //$item = new Posts();
        $item = new Post();
        $item->title = $title;
        $item->text = $text;
        if ($item->save()) {
            $result = redirect(route('home'));
        } else {
            $result = back();
        }
        return $result;
    }
    public function index()
    {
        $items = Post::all();
        return view('home', compact('items'));
    }


}

