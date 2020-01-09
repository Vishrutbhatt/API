<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostAPIcontroller extends Controller
{
    //

    public function index(Request $request)
    {
    	echo "api controller created";

  
    	$data = new Post;

    	$data->title = $request->input("title");
    	$data->description = $request->input("description");
    	$data->price = $request->input("price");
    	$data->save();
    	return response()->json($data);
    }


    public function show()
    {
    	$data = Post::all();   //Post is the model name...

    	return response()->json($data);
    }


    public function update(Request $req, $id)
    {
    	$data = Post::find($id);
    	$data->title = $req->input("title");
    	$data->description = $req->input("description");
    	$data->price = $req->input("price");

    	$data->save();
    	return response()->json($data);
    }

    public function delete(Request $req, $id)
    {
    	$data = Post::find($id);
    	$data->delete();
    	return response()->json($data);


    }
}
