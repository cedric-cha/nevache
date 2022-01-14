<?php

namespace App\Http\Controllers;

use App\Models\Property;
use App\Http\Requests\StorePropertyRequest;
use App\Http\Requests\UpdatePropertyRequest;

class PropertyController extends Controller
{

    // Pour avoir l'accès en tant que connecté
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    Public function index(){
        
        $properties = Property::all() ;
        //dd($properties);
        return view('pages.admin.admin', compact('properties')) ;
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePropertyRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePropertyRequest $request)
    {
        $dates = explode(',', $request->dates);


        $image = $request->file('image');

        if (!$image) abort(404);

        $image->move(storage_path('app/public/img'), $image->getClientOriginalName());

        // Property = nom du model
        Property::create([
                'titre' => $request->titre,
                'image' => $image->getClientOriginalName(),
                'description' => $request->description,
                'capacite' => $request->capacite,
                'tag' => json_encode($request->tag ?? []),
                'dates' => json_encode($request->dates ?? [])
        ]);

        return response()->json([
            'message' => 'Annonce enregistrée !',
            'redirect' => route('admin')
        ]);

        // return back();
        
        /*return redirect()->route('/admin')
            ->with('Annonce enregistrée !');*/
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function show(Property $property)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
      $property = Property::find($id);
      //dd(in_array("shampoing", json_decode($property->tag)));

      //dd($property->dates, json_decode($property->dates));

      return view('edit-property', compact('property'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePropertyRequest  $request
     * @param  \App\Models\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePropertyRequest $request, $id)
    {

        $property = Property::find($id);

        $data = [
            'titre' => $request->titre,
            'description' => $request->description,
            'capacite' => $request->capacite,
            'tag' => json_encode($request->tag),
            'dates' => json_encode($request->dates)
        ];
        
        //
        $image = $request->file('image');

        if ($image) {
            $image->move(storage_path('app/public/img'));

            $data['image'] = $image->getClientOriginalName();
            
        }

        $property->update($data);

        return response()->json([
            'message' => 'Annonce enregistrée !',
            'redirect' => route('admin')
        ]);
        
        // return back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function delete(Property $property)
    {
        //
        //$property = Property::find($id);
        //dd($property);
        $property->delete();
        return back();
        
    }
}
