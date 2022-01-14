@extends('layouts.app', compact('properties'))

@section('content')
    <div class="container">
        <h1>Gestions des annonces</h1>
        <div class="d-flex align-items-start mt-5">
            <div class="nav flex-column nav-pills me-2" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Liste des annonces</button>
                <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Ajouter une annonce</button>
                <!-- <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Modifier les cercles</button> -->
            </div>

           
            <div class="tab-content border-start" id="v-pills-tabContent">

            <!-- LISTE DES ANNONCES  -->
                <div class="tab-pane fade show active p-4" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                    @foreach ($properties as $property)
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <p class="card-text">{{ $property->titre }}</p>
                                <a href="{{ url('edit-property', $property->id) }}" class="btn btn-warning">Modifier l'annonce</a>
                                
                                
                                <form id="delete-form" action="{{ route('delete', $property->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn btn-danger">Supprimer l'annonce</button>
                                </form>
                            
                            </div>
                        </div>
                    @endforeach
                </div>
                    
                <!-- AJOUTER UNE ANNONCE -->
                <div class="tab-pane fade p-4" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                    
                        <div class="alert alert-success" id="displayAlert" style="display: none">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                    <form action="{{ route('sauvegarde') }}" method="POST" enctype="multipart/form-data" id="storeProperty">
                        @csrf
                                @include('property-features')
                                <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    
                </div>
<!--                 
                <div class="tab-pane fade p-4" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                    It works !
                </div> -->
            </div>
            
        </div>
    </div>
@endsection
