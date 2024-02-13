<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Tag;

/**
 * TagController
 */
class TagController extends Controller
{
        
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        $tag = Tag::latest()->paginate(6);
        return response()->json([
            "response" => [
                "status"    => 200,
                "message"   => "List Data Tags"
            ],
            "data" => $tag
        ], 200);
    }
   
    /**
     * show
     *
     * @param  mixed $slug
     * @return void
     */
    public function show($slug)
    {
        $tag = Tag::where('slug', $slug)->first();

        if($tag) {

            return response()->json([
                "response" => [
                    "status"    => 200,
                    "message"   => "Detail Data Tag"
                ],
                "data" => $tag
            ], 200);

        } else {

            return response()->json([
                "response" => [
                    "status"    => 404,
                    "message"   => "Data Tag Tidak Ditemukan!"
                ],
                "data" => null
            ], 404);

        }
    }

}