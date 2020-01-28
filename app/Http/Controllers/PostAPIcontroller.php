<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostAPIcontroller extends Controller
{
    //
/**
     * @OA\Post(
     *     tags={"INSERT POSTS API"},
     *     path="/api/posts/",
     *     description="Insert Data",
     *     summary="insert POSTS",
     *     method="POST",
     *     operationId="Save POSTS",
     *     @OA\Response(
     *         response=201,
     *         description="success response",
     *         @OA\JsonContent(ref="#/components/schemas/SuccessResponse")
     *     ),
     *     @OA\Parameter(
     *         description="Book Title Name",
     *         in="query",
     *         name="title",
     *         required=true,
     *         @OA\Schema(
     *             type="string"
     *         )
     *     ),
     *     @OA\Parameter(
     *         description="Book Description",
     *         in="query",
     *         name="description",
     *         required=true,
     *         @OA\Schema(
     *             type="string"
     *         )
     *     ),
     *     @OA\Parameter(
     *         description="Book Price",
     *         in="query",
     *         name="price",
     *         required=true,
     *         @OA\Schema(
     *             type="string"
     *         )
     *     ),
     *         security={
     *         {"API-Key": {}}
     *     }
     *    
     * )
     * Its an Open API for POST CRUD
     */
    public function insert(Request $request)
    {
    	echo "api controller created";

    	$data = new Post;

    	$data->title = $request->input("title");
    	$data->description = $request->input("description");
    	$data->price = $request->input("price");
    	$data->save();
    	return response()->json($data);
    }

/**
 * @OA\Get(
 *     tags={"GET POST API"},
 *     path="/api/posts",
 *     description="List Of Books",
 *     summary="Books List",
 *     operationId="BooksList",
 *     @OA\Response(
 *         response=200,
 *         description="success response",
 *         @OA\JsonContent(ref="#/components/schemas/SuccessResponse")
 *     ),
 *     security={
 *         {"API-Key": {}}
 *     }
 * )
 * Its an Open API for Company
 */

    public function show()
    {
        //Post::post(); // Static Access 
        

        $data = Post::all();   //Post is the model name...

    	return response()->json($data);
    }


/**
     * @OA\Put(
     *     tags={"UPDATE POSTS API"},
     *     path="/api/posts/{id}/",
     *     description="Update Data",
     *     summary="updating the POSTS",
     *     method="PUT",
     *     operationId="Save POSTS",
     *     @OA\Response(
     *         response=201,
     *         description="success response",
     *         @OA\JsonContent(ref="#/components/schemas/SuccessResponse")
     *     ),
     *         @OA\Parameter(
     *         description="ID",
     *         in="path",
     *         name="id",
     *         required=true,
     *         @OA\Schema(
     *             type="string"
     *         )
     *     ),
     *     @OA\Parameter(
     *         description="Title Name",
     *         in="query",
     *         name="title",
     *         required=true,
     *         @OA\Schema(
     *             type="string"
     *         )
     *     ),
     *     @OA\Parameter(
     *         description="Book Description Name",
     *         in="query",
     *         name="description",
     *         required=true,
     *         @OA\Schema(
     *             type="string"
     *         )
     *     ),
     *     @OA\Parameter(
     *         description="Book Price",
     *         in="query",
     *         name="price",
     *         required=true,
     *         @OA\Schema(
     *             type="string"
     *         )
     *     ),
    *            security={
     *         {"API-Key": {}}
     *     }
     *    
     * )
     * Its an Open API for POST API CRUD
     */
    public function update(Request $request, $pid)
    {

       // Update::update();
    	$data = Post::find($pid);
    	$data->title = $request->input("title");
    	$data->description = $request->input("description");
    	$data->price = $request->input("price");

    	$data->save();
    	return response()->json($data);
    }




/**
     * @OA\Delete(
     *     tags={"Delete POSTS API"},
     *     path="/api/posts/{id}",
     *     description="Delete Data",
     *     summary="Deleting the POSTS",
     *     method="DELETE",
     *     operationId="Save POSTS",
     *     @OA\Response(
     *         response=201,
     *         description="success response",
     *         @OA\JsonContent(ref="#/components/schemas/SuccessResponse")
     *     ),
     *         @OA\Parameter(
     *         description="ID",
     *         in="path",
     *         name="id",
     *         required=true,
     *         @OA\Schema(
     *             type="string"
     *         )
     *     ),
         *            security={
     *         {"API-Key": {}}
     *     }
     *    
     * )
     * Its an Open API for POST API CRUD
     */
    

    public function delete($id)
    {
       // Delete::delete();
    	$data = Post::find($id)->delete();
        return var_dump($data);
    }
}
