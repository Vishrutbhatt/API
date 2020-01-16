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
        Show::show(); // Static Access 
         //Bar::baz();
    	$data = Post::all();   //Post is the model name...

    	return response()->json($data);
    }


    public function update(Request $request, $pid)
    {

        Update::update();
    	$data = Post::find($pid);
    	$data->title = $request->input("title");
    	$data->description = $request->input("description");
    	$data->price = $request->input("price");

    	$data->save();
    	return response()->json($data);
    }

    public function delete(Request $request, $pid)
    {
        Delete::delete();
    	$data = Post::find($pid);
    	$data->delete();
    	return response()->json($data);


    }
}
