<?php

namespace App\Http\Controllers;

use App\Models\Property;
use App\Http\Requests\StorePropertyRequest;
use App\Http\Requests\UpdatePropertyRequest;
use Illuminate\Support\Facades\File;

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
////////////////////////////////////////////
        $photos =  $request->file('photos');

        $Files = array();

        if($photos)
        {
            foreach ($photos as $photo) {
                $name = $photo->getClientOriginalName();
                $photo->move(storage_path('app/public/photos'), $name);
                $Files[] = $name;
            };
        }


        Property::create([
                'titre' => $request->titre,
                'image' => $image->getClientOriginalName(),
                'description' => $request->description,
                'capacite' => $request->capacite,
                'tarifs' => $request->tarifs ,
                'taxes_sejour' => $request->taxes_sejour,
                'options_possibles' =>  $request->options_possibles ,
                'autre_option' => $request->autre_option,
                'photos' => json_encode($Files ?? []),
                'tag' => json_encode($request->tag ?? []),
                'dates' => json_encode($request->dates ?? [])
        ]);
        return response()->json([
            'message' => 'Annonce enregistrée !',
            'redirect' => route('admin')
        ]);

        
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
            'tarifs' => $request->tarifs,
            'taxes_sejour' => $request->taxes_sejour,
            'options_possibles' => $request->options_possibles,
            'autre_option' => $request->autre_option,
            'tag' => json_encode($request->tag),
            'dates' => json_encode($request->dates)
        ];
        
        $image = $request->file('image');
        if ($image) {
            $image->move(storage_path('app/public/img'));
            $data['image'] = $image->getClientOriginalName();
        }

        $photos = $request->file('photos');

        if ($photos) {
            $Files = array();

            foreach ($photos as $photo) {
                $name = $photo->getClientOriginalName();
                $photo->move(storage_path('app/public/photos'), $name);
                $Files[] = $name;
            };


            $_photos  = json_decode($property->photos);

            $Files = array_merge($Files, $_photos);

            $data['photos'] =  json_encode($Files);
        }

        $property->update($data);

        return response()->json([
         'message' => 'Annonce mise  à jour !',
             'redirect' => route('edit', $property->id)
         ]);

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

    public function deletePhoto(int $property, int $photo)
    {
        $property = Property::find($property);
        $photos = json_decode($property->photos, true);

        File::delete(storage_path('app/public/photos/') . $photos[$photo]);

        unset($photos[$photo]);

        $property->update(['photos'  => json_encode($photos)]);

        return response()->json([
            'message' => 'Photo supprimée !',
            'redirect' => route('edit', $property->id)
        ]);
    }
}
