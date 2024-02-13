<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Event;

/**
 * EventController
 */
class EventController extends Controller
{
        
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        $events = Event::latest()->paginate(6);
        return response()->json([
            "response" => [
                "status"    => 200,
                "message"   => "List Data Events"
            ],
            "data" => $events
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
        $event = Event::where('slug', $slug)->first();

        if($event) {

            return response()->json([
                "response" => [
                    "status"    => 200,
                    "message"   => "Detail Data Event"
                ],
                "data" => $event
            ], 200);

        } else {

            return response()->json([
                "response" => [
                    "status"    => 404,
                    "message"   => "Data Event Tidak Ditemukan!"
                ],
                "data" => null
            ], 404);

        }
    }

    
    /**
     * EventHomePage
     *
     * @return void
     */
    public function EventHomePage()
    {
        $events = Event::latest()->take(6)->get();
        return response()->json([
            "response" => [
                "status"    => 200,
                "message"   => "List Data Events Homepage"
            ],
            "data" => $events
        ], 200);
    }
}