<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;

/**
 * CategoryController
 */
class CategoryController extends Controller
{
        
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        $category = Category::latest()->paginate(6);
        return response()->json([
            "response" => [
                "status"    => 200,
                "message"   => "List Data Categorys"
            ],
            "data" => $category
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
        $category = Category::where('slug', $slug)->first();

        if($category) {

            return response()->json([
                "response" => [
                    "status"    => 200,
                    "message"   => "Detail Data Category"
                ],
                "data" => $category
            ], 200);

        } else {

            return response()->json([
                "response" => [
                    "status"    => 404,
                    "message"   => "Data Category Tidak Ditemukan!"
                ],
                "data" => null
            ], 404);

        }
    }

}