@extends('layouts.app', compact('properties'))

@section('content')
    <div class="container">
        <h1>Gestions des annonces</h1>
        <div class="d-flex align-items-start mt-5">
            <div class="nav flex-column nav-pills me-2" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="false">Liste des annonces</button>
                <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="true">Ajouter une annonce</button>
            </div>

           
            <div class="tab-content border-start" id="v-pills-tabContent">

            <!-- LISTE DES ANNONCES  -->
                <div class="tab-pane fade show active p-4" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                    <div class="row row-cols-1 row-cols-md-2 g-4">
                        @foreach($properties as $property)
                            <div class="col-md-3 mb-2">
                            <div class="card">
                                <img src="{{ url('storage/img/'.$property->image) }}" class="card-img-top">
                                <div class="card-body">
                                <h5 class="card-title">{{ $property->titre }}</h5>
                                <p class="card-text">{{ $property->description }}</p>
                                <div class="text-center">
                                    <a href="{{ url('edit-property', $property->id) }}" class="btn btn-warning mb-2 btn-sm">Modifier</a>
                                    <form id="delete-form" action="{{ route('delete',$property->id) }}" onsubmit="return confirm('Confirmer la suppression ?');" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger mb-2 btn-sm">Supprimer</button>
                                    </form>
                                </div>
                                </div>
                            </div>
                            </div>
                        @endforeach
                    </div>
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
            </div>
            
        </div>
    </div>
@endsection

@section('scripts')

@endsection

