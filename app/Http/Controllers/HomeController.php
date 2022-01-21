<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /* public function __construct()
    {
        $this->middleware('auth');
    }
    */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $properties = Property::all() ;

        $properties->map(function ($property) {
            $property->photos = json_decode($property->photos);
            $property->tag = json_decode($property->tag);
            $property->dates = json_decode($property->dates);

            return $property;
        });

        $properties = json_encode($properties);

        //dd($properties, $_properties);

        //dd($properties);
        return view('home', compact('properties')) ;
    }

    public function details(int $id)
    {
        $property = Property::find($id);

        return view('property', compact('property'));
    }
}
