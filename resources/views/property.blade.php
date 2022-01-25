@extends('layout.default')

    

    @section('contenu')
    
        <div class="mb-10 offset-md-2 col-lg-8 col-md-8 col-lg-8 col-sm-8 top-index"><br><br><br><br>
            <!-- <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="btn btn-secondary" href="{{ url('/admin') }}" role="button">Retour</a>
            </div> -->
            
            <!-- <div class="row mb-5 mt-10 text-end offset-md-3">
                <label class="col-md-3 col-form-label" for="image">Image :</label>
                <div class="col-lg-8 col-md-8 col-sm-8" style="justify-content:center;"> 
                    <p class="text-center">
                        <img class="mt-3 text-center" src="{{ url('storage/img/'.$property->image) }}" width="300px" height="300px" alt="image">
                    </p>
                </div>
            </div> -->
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                @php
                    $photos = json_decode($property->photos);
                @endphp
                <div class="carousel-indicators text-center">
                    @foreach($photos as $key => $photo )
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}"></button>
                    @endforeach
                </div>
                <div class="carousel-inner">
                    @foreach($photos as $key => $photo )
                        <div class="carousel-item {{$key == 0 ? 'active' : '' }}">
                            <img class="d-block w-100 mt-3" height="480px" src="{{ url('storage/photos/'.$photo) }}">
                        </div>
                    @endforeach
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <div class="mb-4">
                <a class="btn btn-secondary mt-5" href="{{ url('/home') }}" role="button">Retour</a>
            </div>
            <div class="row text-end form-group mt-5">
                <label class="col-sm-3 inline col-form-label" for="titre">Titre de l'annonce :</label>
                <div class="col-lg-8 col-md-8 col-sm-8">
                    <p class="text-center">{{ $property->titre }}</p>
                </div>
            </div>
            <div class="row mb-3 inline text-end">
                <label class="col-sm-3 col-form-label" for="description">Description :</label>
                <div class="col-lg-8 col-md-8 col-sm-8">
                    <p class="text-center">{{ $property->description }}</p>
                </div>
            </div>
            <div class="row mb-3 inline text-end">
                <label class="col-sm-3 col-form-label" for="capacite">Capacité :</label>
                <div class="col-lg-8 col-md-8 col-sm-8">
                    <p class="text-center">{{ $property->capacite }}</p>
                </div>
            </div>
            <div class="row mb-3 inline text-end">
                <label class="col-sm-3 col-form-label" for="capacite">Tarifs :</label>
                <div class="col-lg-8 col-md-8 col-sm-8">
                    <p class="text-center">{{ $property->tarifs }}</p>
                </div>
            </div>
            <div class="row mb-3 inline text-end">
                <label class="col-sm-3 col-form-label" for="capacite">Taxes de séjour :</label>
                <div class="col-lg-8 col-md-8 col-sm-8">
                    <p class="text-center">{{ $property->taxes_sejour }}</p>
                </div>
            </div>
            <div class="row mb-3 inline text-end">
                <label class="col-sm-3 col-form-label" for="capacite">options possibles :</label>
                <div class="col-lg-8 col-md-8 col-sm-8">
                    <p class="text-center">{{ $property->options_possibles }}</p>
                </div>
            </div>
            <div class="row mb-3 inline text-end">
                <label class="col-sm-3 col-form-label" for="capacite">Autre option :</label>
                <div class="col-lg-8 col-md-8 col-sm-8">
                    <p class="text-center">{{ $property->autre_option }}</p>
                </div>
            </div>
            <div class="row mb-3 inline text-end">
                <label class="col-sm-3 col-form-label" for="dates">Dates :</label>
                <div class="mb-3 offset-md-2" id="element"></div>
            </div>
            @php
                $tag = json_decode($property->tag);
            @endphp
            <div class="row mb-3 inline text-end">
                <label class="col-lg-3 col-md-3 col-sm-3 col-form-label">Tags :</label>
                <div class="col-8">
                    <div class="table-responsive-lg" style="height: 100px;"> 
                        <!-- Salle de bain -->
                            @php
                                if(in_array("seche-cheveux", $tag) || in_array("produit", $tag) || in_array("shampoing", $tag) 
                                    || in_array("douche-exterieure", $tag) || in_array("eau-chaude", $tag) || in_array("gel-douche", $tag))
                                {
                                    echo'<table class="table table-bordered">';
                                    echo'<div class="text-start"><b>Salle de bain</b></div>';
                                
                                    if(in_array("seche-cheveux", $tag))
                                    {
                                        echo '
                                                <tr style="justify-content:center;">
                                                    <td style="text-align:left;">
                                                        <div class="custom-control">
                                                            <label for="seche-cheveux">
                                                                <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"
                                                                    aria-hidden="true" role="presentation" focusable="false"
                                                                    style="display: inline; height: 24px; width: 24px; fill: currentcolor;">
                                                                    <path
                                                                        d="M14 27l-.005.2a4 4 0 0 1-3.789 3.795L10 31H4v-2h6l.15-.005a2 2 0 0 0 1.844-1.838L12 27zM10 1c.536 0 1.067.047 1.58.138l.38.077 17.448 3.64a2 2 0 0 1 1.585 1.792l.007.166v6.374a2 2 0 0 1-1.431 1.917l-.16.04-13.554 2.826 1.767 6.506a2 2 0 0 1-1.753 2.516l-.177.008H11.76a2 2 0 0 1-1.879-1.315l-.048-.15-1.88-6.769A9 9 0 0 1 10 1zm5.692 24l-1.799-6.621-1.806.378a8.998 8.998 0 0 1-1.663.233l-.331.008L11.76 25zM10 3a7 7 0 1 0 1.32 13.875l.331-.07L29 13.187V6.813L11.538 3.169A7.027 7.027 0 0 0 10 3zm0 2a5 5 0 1 1 0 10 5 5 0 0 1 0-10zm0 2a3 3 0 1 0 0 6 3 3 0 0 0 0-6z">
                                                                    </path>
                                                                </svg>
                                                                Sèche-cheveux
                                                            </label>
                                                        </div>
                                                    </td>
                                                </tr>
                                            ';
                                    }
                                    if(in_array("produit", $tag))
                                    {
                                        echo '
                                                <tr style="justify-content:center;">
                                                    <td style="text-align:left;">
                                                        <div class="custom-control">
                                                            <label for="produit">
                                                            <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" 
                                                                    aria-hidden="true" role="presentation" focusable="false" 
                                                                    style="display: inline; height: 24px; width: 24px; fill: currentcolor;">
                                                                    <path d="M16 1c4.258 0 7.606 4.443 7.968 10h.915a2 2 0 0 1 2 2l-.003.11-.01.11-1.777 16a2 2 0 0 1-1.829 1.774l-.159.006H8.895a2 2 0 0 1-1.964-1.621l-.024-.158L6.438 25H5a2 2 0 0 1-1.995-1.85L3 23v-9a5 5 0 0 1 4.783-4.995L8 9h.298C9.241 4.37 12.305 1 16 1zm7.993 20H17v2a2 2 0 0 1-1.85 1.995L15 25H8.45l.445 4h14.21zM15 21H5v2h10zm0-10H8a3 3 0 0 0-2.995 2.824L5 14v5h10zm9.883 2H17v6h7.215zM16 3c-2.512 0-4.805 2.433-5.654 6H15a2 2 0 0 1 1.995 1.85L17 11h4.963C21.624 6.453 19.005 3 16 3z">
                                                                </path></svg>
                                                                Produits de nettoyage
                                                            </label>
                                                        </div>
                                                    </td>
                                                </tr>
                                            ';
                                    }
                                    if(in_array("shampoing", $tag))
                                    {
                                        echo '
                                                <tr style="justify-content:center;">
                                                    <td style="text-align:left;">
                                                        <div class="custom-control">
                                                            <label for="shampoing">
                                                                <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"
                                                                    aria-hidden="true" role="presentation" focusable="false"
                                                                    style="display: inline; height: 24px; width: 24px; fill: currentcolor;">
                                                                    <path
                                                                        d="M20 1v2h-3v2h1a2 2 0 0 1 1.995 1.85L20 7v2a4 4 0 0 1 3.995 3.8L24 13v14a4 4 0 0 1-3.8 3.995L20 31h-8a4 4 0 0 1-3.995-3.8L8 27V13a4 4 0 0 1 3.8-3.995L12 9V7a2 2 0 0 1 1.85-1.995L14 5h1V3H8V1zm2 21H10v5a2 2 0 0 0 1.85 1.995L12 29h8a2 2 0 0 0 1.995-1.85L22 27zm0-6H10v4h12zm-2-5h-8a2 2 0 0 0-1.995 1.85L10 13v1h12v-1a2 2 0 0 0-2-2zm-2-4h-4v2h4z">
                                                                    </path>
                                                                </svg>
                                                                Shampooing
                                                            </label>
                                                        </div>
                                                    </td>
                                                </tr>
                                            ';
                                    }
                                    if(in_array("douche-exterieure", $tag))
                                    {
                                        echo '
                                                <tr style="justify-content:center;">
                                                    <td style="text-align:left;">
                                                        <div class="custom-control">
                                                            <label>
                                                            <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" 
                                                                    aria-hidden="true" role="presentation" focusable="false" 
                                                                    style="display: inline; height: 24px; width: 24px; fill: currentcolor;">
                                                                <path d="M7 1a3 3 0 0 0-2.995 2.824L4 4v27h2V4a1 1 0 0 1 .883-.993L7 3h11a1 1 0 0 1 .993.883L19 4v1h-5a1 1 0 0 0-.993.883L13 6v3h-3v2h19V9h-2V6a1 1 0 0 0-.883-.993L26 5h-5V4a3 3 0 0 0-2.824-2.995L18 1H7zm13 28a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm5 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-10 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm5-4a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm5 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-10 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm5-4a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm5 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-10 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm5-4a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm5 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-10 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm5-4a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-5 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm10 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2zM15 7h10v2H15V7z">
                                                                </path>
                                                            </svg>
                                                                Douche extérieure
                                                            </label>
                                                        </div>
                                                    </td>
                                                </tr>
                                            ';
                                    }
                                    if(in_array("eau-chaude", $tag))
                                    {
                                        echo '
                                                <tr style="justify-content:center;">
                                                    <td style="text-align:left;">
                                                        <div class="custom-control">
                                                            <label>
                                                                <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"
                                                                    aria-hidden="true" role="presentation" focusable="false"
                                                                    style="display: inline; height: 24px; width: 24px; fill: currentcolor;">
                                                                    <path
                                                                        d="M16 32c6.627 0 12-5.373 12-12 0-6.218-3.671-12.51-10.924-18.889L16 .18l-1.076.932C7.671 7.491 4 13.782 4 20c0 6.577 5.397 12 12 12zm0-2c-5.496 0-10-4.525-10-10 0-5.327 3.115-10.882 9.424-16.65l.407-.37.169-.149.576.518c6.043 5.526 9.156 10.855 9.407 15.977l.013.34L26 20c0 5.523-4.477 10-10 10zm-3.452-5.092a8.954 8.954 0 0 1 2.127-4.932l.232-.26.445-.462a6.973 6.973 0 0 0 1.827-4.416l.007-.306-.006-.307-.007-.11a6.03 6.03 0 0 0-2.009-.057 4.979 4.979 0 0 1-1.443 4.008 10.951 10.951 0 0 0-2.87 5.016 6.034 6.034 0 0 0 1.697 1.826zM16 26l.253-.005.25-.016-.003-.137c0-1.32.512-2.582 1.464-3.533a10.981 10.981 0 0 0 3.017-5.656 6.026 6.026 0 0 0-1.803-1.743 8.971 8.971 0 0 1-2.172 5.493l-.228.255-.444.462a6.96 6.96 0 0 0-1.827 4.415l-.006.276c.48.123.982.189 1.499.189z">
                                                                    </path>
                                                                </svg>
                                                                Eau chaude
                                                            </label>
                                                        </div>
                                                    </td>
                                                </tr>
                                            ';
                                    }
                                    if(in_array("gel-douche", $tag))
                                    {
                                        echo '
                                                <tr style="justify-content:center;">
                                                    <td style="text-align:left;">
                                                        <div class="custom-control">
                                                            <label for="presentation">
                                                            <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="presentation" focusable="false" style="display: inline; height: 24px; width: 24px; fill: currentcolor;">
                                                                <path d="M18 1v2h-7v2h1a2 2 0 0 1 1.995 1.85L14 7l.001 2.1a5.002 5.002 0 0 1 3.994 4.674L18 14v14a3 3 0 0 1-2.824 2.995L15 31H5a3 3 0 0 1-2.995-2.824L2 28V14a5.002 5.002 0 0 1 4-4.9V7a2 2 0 0 1 1.85-1.995L8 5h1V3H6V1h12zm-2 15.058c-1.143.147-2.085.595-3.577 1.552l-.348.225C9.64 19.424 8.293 19.995 6 19.995a9.003 9.003 0 0 1-2-.217V28a1 1 0 0 0 .883.993L5 29h10a1 1 0 0 0 .993-.883L16 28V16.058zM27 13a3 3 0 1 1 0 6 3 3 0 0 1 0-6zm-14-2H7a3 3 0 0 0-2.995 2.824L4 14v3.711a6.846 6.846 0 0 0 2 .284c1.633 0 2.64-.361 4.4-1.462l.638-.41c2.016-1.315 3.277-1.922 4.962-2.08V14a3 3 0 0 0-3-3zm14 4a1 1 0 1 0 0 2 1 1 0 0 0 0-2zM25 2a4 4 0 1 1 0 8 4 4 0 0 1 0-8zM12 7H8v2h4V7zm13-3a2 2 0 1 0 0 4 2 2 0 0 0 0-4z">
                                                                </path>
                                                            </svg>
                                                                Gel douche
                                                            </label>
                                                        </div>
                                                    </td>
                                                </tr>
                                            ';
                                    }
                                    echo'</table>';
                                }
                            @endphp
                        <!-- Chambre et linge -->
                        
                            @php
                                if(in_array("lave-linge", $tag) || in_array("equipements-base", $tag) || in_array("cintres", $tag) || in_array("draps", $tag)
                                    || in_array("store", $tag) || in_array("fer-a-repasser", $tag) || in_array("etendoir-a-linge", $tag) || in_array("coffre-fort", $tag) || in_array("armoire", $tag)
                                    )
                                {
                                    echo'<table class="table table-bordered">';
                                    echo'<div class="text-start"><b>Chambre et linge</b></div>';
                                    if(in_array("lave-linge", $tag))
                                    {
                                        echo '
                                                <tr style="justify-content:center;">
                                                    <td style="text-align:left;">
                                                        <div class="custom-control">
                                                            <label for="lave-linge">
                                                                <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"
                                                                    aria-hidden="true" role="presentation" focusable="false"
                                                                    style="display: inline; height: 24px; width: 24px; fill: currentcolor;">
                                                                    <path
                                                                        d="M28 2a2 2 0 0 1 1.995 1.85L30 4v24a2 2 0 0 1-1.85 1.995L28 30H4a2 2 0 0 1-1.995-1.85L2 28V4a2 2 0 0 1 1.85-1.995L4 2zm0 2H4v24h24zM16 7a9 9 0 1 1 0 18 9 9 0 0 1 0-18zm-5.841 7.5c-.342 0-.68.024-1.014.073a7 7 0 0 0 13.107 4.58 8.976 8.976 0 0 1-6.91-2.374l-.236-.23a6.966 6.966 0 0 0-4.947-2.049zM16 9a6.997 6.997 0 0 0-6.066 3.504l.225-.004c2.262 0 4.444.844 6.124 2.407l.237.229a6.979 6.979 0 0 0 4.948 2.05c.493 0 .98-.05 1.456-.151A7 7 0 0 0 16 9zM7 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z">
                                                                    </path>
                                                                </svg>
                                                                Lave-linge
                                                            </label>
                                                        </div>
                                                    </td>
                                                </tr>
                                            ';
                                    }
                                    if(in_array("equipements-base", $tag))
                                    {
                                        echo '
                                                <tr style="justify-content:center;">
                                                    <td style="text-align:left;">
                                                        <div class="custom-control">
                                                            <label for="equipements-base">
                                                                <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"
                                                                aria-hidden="true" role="presentation" focusable="false"
                                                                style="display: inline; height: 24px; width: 24px; fill: currentcolor;">
                                                                <path
                                                                    d="M11 1v7l1.898 20.819.007.174c-.025 1.069-.804 1.907-1.818 1.999a2 2 0 0 1-.181.008h-7.81l-.174-.008C1.86 30.87 1.096 30.018 1.096 29l.002-.09 1.907-21L3.001 1zm6 0l.15.005a2 2 0 0 1 1.844 1.838L19 3v7.123l-2 8V31h-2V18.123l.007-.163.02-.162.033-.16L16.719 11H13V1zm11 0a2 2 0 0 1 1.995 1.85L30 3v26a2 2 0 0 1-1.85 1.995L28 31h-7v-2h7v-2h-7v-2h7v-2h-7v-2h7v-2h-7v-2h7v-2h-7v-2h7v-2h-7V9h7V7h-7V5h7V3h-7V1zM9.088 9h-4.18L3.096 29l.058.002L10.906 29l-.004-.058zM17 3h-2v6h2zM9.002 3H5L5 7h4.004z">
                                                                </path>
                                                                </svg>
                                                                Équipements de base
                                                            </label>
                                                        </div>
                                                    </td>
                                                </tr>
                                            ';
                                    }
                                    if(in_array("cintres", $tag))
                                    {
                                        echo '
                                                <tr style="justify-content:center;">
                                                    <td style="text-align:left;">
                                                        <div class="custom-control">
                                                            <label for="cintres">
                                                                <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" 
                                                                    aria-hidden="true" role="presentation" focusable="false" 
                                                                    style="display: inline; height: 24px; width: 24px; fill: currentcolor;">
                                                                    <path d="M16 2a5 5 0 0 1 1.661 9.717 1.002 1.002 0 0 0-.653.816l-.008.126v.813l13.23 9.052a3 3 0 0 1 1.299 2.279l.006.197a3 3 0 0 1-3 3H3.465a3 3 0 0 1-1.694-5.476L15 13.472v-.813c0-1.211.724-2.285 1.816-2.757l.176-.07a3 3 0 1 0-3.987-3.008L13 7h-2a5 5 0 0 1 5-5zm0 13.211L2.9 24.175A1 1 0 0 0 3.465 26h25.07a1 1 0 0 0 .565-1.825z">
                                                                    </path>
                                                                </svg>
                                                                Cintres
                                                            </label>
                                                        </div>
                                                    </td>
                                                </tr>
                                            ';
                                    }
                                    if(in_array("draps", $tag))
                                    {
                                        echo '
                                                <tr style="justify-content:center;">
                                                    <td style="text-align:left;">
                                                        <div class="custom-control">
                                                            <label for="draps">
                                                                <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"
                                                                    aria-hidden="true" role="presentation" focusable="false"
                                                                    style="display: inline; height: 24px; width: 24px; fill: currentcolor;">
                                                                    <path
                                                                        d="M19.586 2a2 2 0 0 1 1.284.467l.13.119L29.414 11a2 2 0 0 1 .578 1.238l.008.176V25a5 5 0 0 1-4.783 4.995L25 30H4a2 2 0 0 1-1.995-1.85L2 28V7a5 5 0 0 1 4.783-4.995L7 2zM7 4a3 3 0 0 0-2.995 2.824L4 7v14a3 3 0 0 0 2.824 2.995L7 24h19v2H7a4.978 4.978 0 0 1-3-1v3h21a3 3 0 0 0 2.995-2.824L28 25v-3H6v-2h22v-6h-5a5 5 0 0 1-4.995-4.783L18 9V4zm20.586 8L20 4.415V9a3 3 0 0 0 2.824 2.995L23 12z">
                                                                    </path>
                                                                </svg>
                                                                Draps
                                                            </label>
                                                        </div>
                                                    </td>
                                                </tr>
                                            ';
                                    }
                                    if(in_array("store", $tag))
                                    {
                                        echo '
                                                <tr style="justify-content:center;">
                                                    <td style="text-align:left;">
                                                        <div class="custom-control">
                                                            <label for="store">
                                                                <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" 
                                                                    aria-hidden="true" role="presentation" focusable="false" 
                                                                    style="display: inline; height: 24px; width: 24px; fill: currentcolor;">
                                                                    <path d="M1 2V0h30v2h-2v18a2 2 0 0 1-1.85 1.995L27 22H17v2.171a3.001 3.001 0 1 1-2 0V22H5a2 2 0 0 1-1.995-1.85L3 20V2zm15 24a1 1 0 1 0 0 2 1 1 0 0 0 0-2zM27 2H5v18h22z">
                                                                    </path>
                                                                </svg>
                                                                Store
                                                            </label>
                                                        </div>
                                                    </td>
                                                </tr>
                                            ';
                                    }
                                    if(in_array("fer-a-repasser", $tag))
                                    {
                                        echo '
                                                <tr style="justify-content:center;">
                                                    <td style="text-align:left;">
                                                        <div class="custom-control">
                                                            <label for="fer-a-repasser">
                                                                <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"
                                                                    aria-hidden="true" role="presentation" focusable="false"
                                                                    style="display: inline; height: 24px; width: 24px; fill: currentcolor;">
                                                                    <path
                                                                        d="M12 28a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm4 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm4 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm-6-3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm4 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2zM16.027 3l.308.004a12.493 12.493 0 0 1 11.817 9.48l.07.3 1.73 7.782.027.144a2 2 0 0 1-1.83 2.285L28 23H2.247l-.15-.005a2 2 0 0 1-1.844-1.838L.247 21v-7l.004-.217a5 5 0 0 1 4.773-4.778L5.247 9h9V5h-14V3zm11.528 16H2.245l.002 2H28zM16.247 5.002V11h-11l-.177.005a3 3 0 0 0-2.818 2.819L2.247 14l-.001 3H27.11l-.84-3.783-.067-.28a10.494 10.494 0 0 0-9.596-7.921l-.292-.012z">
                                                                    </path>
                                                                </svg>
                                                                Fer à repasser
                                                            </label>
                                                        </div>
                                                    </td>
                                                </tr>
                                            ';
                                    }
                                    if(in_array("etendoir-a-linge", $tag))
                                    {
                                        echo '
                                                <tr style="justify-content:center;">
                                                    <td style="text-align:left;">
                                                        <div class="custom-control">
                                                            <label for="etendoir-a-linge">
                                                                <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" 
                                                                    aria-hidden="true" role="presentation" focusable="false" 
                                                                    style="display: inline; height: 24px; width: 24px; fill: currentcolor;">
                                                                    <path d="M16 2a5 5 0 0 1 1.661 9.717 1.002 1.002 0 0 0-.653.816l-.008.126v.813l13.23 9.052a3 3 0 0 1 1.299 2.279l.006.197a3 3 0 0 1-3 3H3.465a3 3 0 0 1-1.694-5.476L15 13.472v-.813c0-1.211.724-2.285 1.816-2.757l.176-.07a3 3 0 1 0-3.987-3.008L13 7h-2a5 5 0 0 1 5-5zm0 13.211L2.9 24.175A1 1 0 0 0 3.465 26h25.07a1 1 0 0 0 .565-1.825z">
                                                                    </path>
                                                                </svg>
                                                                Étendoir à linge
                                                            </label>
                                                        </div>
                                                    </td>
                                                </tr>
                                            ';
                                    }
                                    if(in_array("coffre-fort", $tag))
                                    {
                                        echo '
                                                <tr style="justify-content:center;">
                                                    <td style="text-align:left;">
                                                        <div class="custom-control">
                                                            <label for="coffre-fort">
                                                                <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" 
                                                                    aria-hidden="true" role="presentation" focusable="false" 
                                                                    style="display: inline; height: 24px; width: 24px; fill: currentcolor;">
                                                                    <path d="M25 2a5 5 0 0 1 4.995 4.783L30 7v18a5 5 0 0 1-4.783 4.995L25 30H7a5 5 0 0 1-4.995-4.783L2 25V7a5 5 0 0 1 4.783-4.995L7 2zm0 2H7a3 3 0 0 0-2.995 2.824L4 7v4l2-.001V6h20v20H6v-5.001L4 21v4a3 3 0 0 0 2.824 2.995L7 28h18a3 3 0 0 0 2.995-2.824L28 25V7a3 3 0 0 0-2.824-2.995zm-1 4H8v16h16zm-8 3a5 5 0 1 1 0 10 5 5 0 0 1 0-10zm0 2a3 3 0 1 0 0 6 3 3 0 0 0 0-6zm-10-.001L4 13v6l2-.001z">
                                                                    </path>
                                                                </svg>
                                                                Coffre-fort
                                                            </label>
                                                        </div>
                                                    </td>
                                                </tr>
                                            ';
                                    }
                                    if(in_array("armoire", $tag))
                                    {
                                        echo '
                                                <tr style="justify-content:center;">
                                                    <td style="text-align:left;">
                                                        <div class="custom-control">
                                                            <label for="armoire">
                                                            <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" 
                                                                    aria-hidden="true" role="presentation" focusable="false" 
                                                                    style="display: inline; height: 24px; width: 24px; fill: currentcolor;">
                                                                    <path d="M25 1a3 3 0 0 1 2.995 2.824L28 4v22a3 3 0 0 1-2.824 2.995L25 29v2h-2v-2H9v2H7v-2a3 3 0 0 1-2.995-2.824L4 26V4a3 3 0 0 1 2.824-2.995L7 1h18zm1 20H6v5a1 1 0 0 0 .883.993L7 27h18a1 1 0 0 0 .993-.883L26 26v-5zm-10 2a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm9-20h-8v16h9V4a1 1 0 0 0-.883-.993L25 3zM15 3H7a1 1 0 0 0-.993.883L6 4v15h9V3zm-3 8a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm8 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z">
                                                                </path>
                                                            </svg>
                                                                Espace de rangement pour les vêtements : armoire
                                                            </label>
                                                        </div>
                                                    </td>
                                                </tr>
                                            ';
                                    }
                                    echo'</table>';
                                }
                            @endphp
                        <!-- Divertissement -->
                            @php
                                if(in_array("tv", $tag) || in_array("sonos", $tag))
                                {
                                    echo'<table class="table table-bordered">';
                                    echo'<div class="text-start"><b>Divertissement</b></div>';
                                    if(in_array("tv", $tag))
                                    {
                                        echo '
                                                <tr style="justify-content:center;">
                                                    <td style="text-align:left;">
                                                        <div class="custom-control">
                                                            <label for="tv">
                                                                <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"
                                                                    aria-hidden="true" role="presentation" focusable="false"
                                                                    style="display: inline; height: 24px; width: 24px; fill: currentcolor;">
                                                                    <path
                                                                        d="M9 29v-2h2v-2H6a5 5 0 0 1-4.995-4.783L1 20V8a5 5 0 0 1 4.783-4.995L6 3h20a5 5 0 0 1 4.995 4.783L31 8v12a5 5 0 0 1-4.783 4.995L26 25h-5v2h2v2zm10-4h-6v2h6zm7-20H6a3 3 0 0 0-2.995 2.824L3 8v12a3 3 0 0 0 2.824 2.995L6 23h20a3 3 0 0 0 2.995-2.824L29 20V8a3 3 0 0 0-2.824-2.995z">
                                                                    </path>
                                                                </svg>
                                                                TV avec abonnement standard au câble
                                                            </label>
                                                        </div>
                                                    </td>
                                                </tr>
                                            ';
                                    }
                                    if(in_array("sonos", $tag))
                                    {
                                        echo '
                                                <tr style="justify-content:center;">
                                                    <td style="text-align:left;">
                                                        <div class="custom-control">
                                                            <label for="sonos">
                                                                <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" 
                                                                    aria-hidden="true" role="presentation" focusable="false" 
                                                                    style="display: inline; height: 24px; width: 24px; fill: currentcolor;">
                                                                    <path d="M24 1a5 5 0 0 1 4.995 4.783L29 6v20a5 5 0 0 1-4.783 4.995L24 31H8a5 5 0 0 1-4.995-4.783L3 26V6a5 5 0 0 1 4.783-4.995L8 1zm0 2H8a3 3 0 0 0-2.995 2.824L5 6v20a3 3 0 0 0 2.824 2.995L8 29h16a3 3 0 0 0 2.995-2.824L27 26V6a3 3 0 0 0-2.824-2.995zm-8 10a7 7 0 1 1 0 14 7 7 0 0 1 0-14zm0 2a5 5 0 1 0 0 10 5 5 0 0 0 0-10zm0 2a3 3 0 1 1 0 6 3 3 0 0 1 0-6zm0 2a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm0-14a3 3 0 1 1 0 6 3 3 0 0 1 0-6zm0 2a1 1 0 1 0 0 2 1 1 0 0 0 0-2z">
                                                                    </path>
                                                                </svg>
                                                                Système audio SONOS
                                                            </label>
                                                        </div>
                                                    </td>
                                                </tr>
                                            ';
                                    }
                                    echo'</table>';
                                }
                            @endphp
                        <!-- Chauffage et climatisation -->
                            @php
                                if(in_array("cheminee", $tag) || in_array("chauffage", $tag) || in_array("climatisation", $tag) || in_array("ventilateur", $tag))
                                {
                                    echo'<table class="table table-bordered">';
                                    echo'<div class="text-start"><b>Chauffage et climatisation</b></div>';
                                    if(in_array("cheminee", $tag))
                                    {
                                        echo '
                                                <tr style="justify-content:center;">
                                                    <td style="text-align:left;">
                                                        <div class="custom-control">
                                                            <label for="cheminee">
                                                                <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"
                                                                    aria-hidden="true" role="presentation" focusable="false"
                                                                    style="display: inline; height: 24px; width: 24px; fill: currentcolor;">
                                                                    <path
                                                                        d="m31 6v2h-1v23h-6v-18h-16v18h-6v-23h-1v-2zm-15.368 8.991.959.702c3.317 2.43 5.141 5.07 5.382 7.934l.02.287.005.207.002.138c0 3.183-2.698 5.741-6 5.741-3.168 0-5.789-2.358-5.988-5.387l-.01-.218-.002-.147c.004-1.629.557-3.29 1.64-4.985l.224-.34.677-.98 1.238.783zm12.368-6.991h-24v21h2v-16a2 2 0 0 1 1.697-1.977l.154-.018.149-.005h16a2 2 0 0 1 1.995 1.85l.005.15v16h2zm-12 17.355-.092.093c-.62.655-.908 1.233-.908 1.719 0 .428.413.833 1 .833s1-.405 1-.833c0-.445-.242-.968-.76-1.556l-.148-.163zm.351-7.315-1.766 3.562-1.466-.927-.152.265c-.534.96-.844 1.878-.937 2.749l-.023.289-.007.26.001.118c.025.92.408 1.761 1.024 2.403.14-1.137.86-2.237 2.097-3.324l.238-.203.64-.534.64.534c1.384 1.153 2.188 2.32 2.335 3.528a3.593 3.593 0 0 0 1.018-2.27l.007-.218-.006-.28c-.088-1.865-1.113-3.702-3.129-5.51l-.268-.236zm14.649-16.04v2h-30v-2z">
                                                                    </path>
                                                                </svg>
                                                                Cheminée
                                                            </label>
                                                        </div>
                                                    </td>
                                                </tr>
                                            ';
                                    }
                                    if(in_array("chauffage", $tag))
                                    {
                                        echo '
                                                <tr style="justify-content:center;">
                                                    <td style="text-align:left;">
                                                        <div class="custom-control">
                                                            <label for="chauffage">
                                                                <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"
                                                                    aria-hidden="true" role="presentation" focusable="false"
                                                                    style="display: inline; height: 24px; width: 24px; fill: currentcolor;">
                                                                    <path
                                                                        d="M16 0a5 5 0 0 1 4.995 4.783L21 5l.001 12.756.26.217a7.984 7.984 0 0 1 2.717 5.43l.017.304L24 24a8 8 0 1 1-13.251-6.036l.25-.209L11 5A5 5 0 0 1 15.563.019l.22-.014zm0 2a3 3 0 0 0-2.995 2.824L13 5v13.777l-.428.298a6 6 0 1 0 7.062.15l-.205-.15-.428-.298L19 11h-4V9h4V7h-4V5h4a3 3 0 0 0-3-3zm1 11v7.126A4.002 4.002 0 0 1 16 28a4 4 0 0 1-1-7.874V13zm-1 9a2 2 0 1 0 0 4 2 2 0 0 0 0-4z">
                                                                    </path>
                                                                </svg>
                                                                Chauffage
                                                            </label>
                                                        </div>
                                                    </td>
                                                </tr>
                                            ';
                                    }
                                    if(in_array("climatisation", $tag))
                                    {
                                        echo '
                                                <tr style="justify-content:center;">
                                                    <td style="text-align:left;">
                                                        <div class="custom-control">
                                                            <label for="climatisation">
                                                                <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"
                                                                    aria-hidden="true" role="presentation" focusable="false"
                                                                    style="display: inline; height: 24px; width: 24px; fill: currentcolor;">
                                                                    <path d="M17 1v4.03l4.026-2.324 1 1.732L17 7.339v6.928l6-3.464V5h2v4.648l3.49-2.014 1 1.732L26 11.381l4.026 2.325-1 1.732L24 12.535l-6 3.464 6 3.465 5.026-2.902 1 1.732L26 20.618l3.49 2.016-1 1.732L25 22.351V27h-2v-5.804l-6-3.465v6.929l5.026 2.902-1 1.732L17 26.97V31h-2v-4.031l-4.026 2.325-1-1.732L15 24.66v-6.929l-6 3.464V27H7v-4.65l-3.49 2.016-1-1.732 3.489-2.016-4.025-2.324 1-1.732 5.025 2.901 6-3.464-6-3.464-5.025 2.903-1-1.732L6 11.38 2.51 9.366l1-1.732L7 9.648V5h2v5.803l6 3.464V7.339L9.974 4.438l1-1.732L15 5.03V1z">
                                                                    </path>
                                                                </svg>
                                                                Climatisation
                                                            </label>
                                                        </div>
                                                    </td>
                                                </tr>
                                            ';
                                    }
                                    if(in_array("ventilateur", $tag))
                                    {
                                        echo '
                                                <tr style="justify-content:center;">
                                                    <td style="text-align:left;">
                                                        <div class="custom-control">
                                                            <label for="ventilateur">
                                                                <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"
                                                                    aria-hidden="true" role="presentation" focusable="false"
                                                                    style="display: inline; height: 24px; width: 24px; fill: currentcolor;">
                                                                    <path d="M20.332 3.082c1.495 2.243.961 5.546-1.387 9.907l-.112.188.172.182c.112.128.216.263.311.404l.227.38.14.017c.7.057 1.775-.115 2.868-.48.884-.294 1.78-.777 2.68-1.448l.66-.525a3 3 0 0 1 4.773 1.33l.115.442c.591 3.346.022 5.73-1.857 6.982-2.243 1.496-5.546.962-9.907-1.387a3.004 3.004 0 0 1-.27-.164l-.07.065c-.122.108-.249.21-.382.303l-.282.187-.01.542c-.016.696.156 1.68.489 2.678.294.884.778 1.78 1.448 2.68l.26.337.265.323a3 3 0 0 1-.36 4.228C19 31 17.947 31 17 31l-.535-.005-1.394-.104c-1.242-.177-2.564-.637-3.362-1.835-1.495-2.243-.961-5.546 1.387-9.907.046-.086.096-.169.15-.248a4.115 4.115 0 0 1-.37-.404.82.82 0 0 0-.172-.23.498.498 0 0 0-.217-.108c-.688-.103-1.85.065-3.035.46-.884.295-1.78.778-2.68 1.449l-.66.525a3 3 0 0 1-4.773-1.33l-.116-.443c-.59-3.345-.02-5.73 1.858-6.982 2.243-1.495 5.546-.96 9.907 1.387l.084.05c.313-.297.556-.503.73-.618l.203-.125.025-.211c.057-.7-.114-1.775-.479-2.868-.294-.884-.778-1.78-1.448-2.68l-.525-.661a3 3 0 0 1 1.33-4.772l.442-.116c3.346-.59 5.73-.021 6.982 1.858zm-5.315 16.796l-.16.219c-2.033 3.776-2.498 6.452-1.484 7.85C14.5 29.5 18 29.5 18.813 28.723c.377-.36.466-.892.189-1.317l-.359-.448c-.955-1.199-1.641-2.413-2.05-3.642-.354-1.06-.562-2.12-.59-3.023L16 20l-.137-.002a4.01 4.01 0 0 1-.638-.073l-.208-.047zm-10.93-6.36c-1.553 1.127-1.553 4.627-.777 5.44.359.377.891.466 1.316.189l.448-.359c1.2-.956 2.413-1.641 3.642-2.05 1.166-.39 2.332-.602 3.288-.592L12 16c0-.141.007-.28.022-.418l.075-.462-.16-.118c-3.776-2.033-6.452-2.498-7.85-1.484zm23.242-.356l-.448.359c-1.2.956-2.413 1.641-3.642 2.05-1.148.383-2.296.596-3.243.592-.01.258-.044.51-.101.752l-.068.251.191.141c3.776 2.033 6.452 2.498 7.85 1.484 1.554-1.127 1.554-4.627.777-5.44-.359-.377-.891-.466-1.316-.189zM16 14a2 2 0 1 0 0 4 2 2 0 0 0 0-4zM13.205 3.388c-.376.36-.465.892-.188 1.317l.36.447c.955 1.2 1.64 2.414 2.05 3.643.377 1.132.589 2.265.591 3.204l.542.04.295.053.212.052.095-.129c2.033-3.776 2.498-6.452 1.484-7.85-1.127-1.553-4.627-1.553-5.44-.777z">
                                                                    </path>
                                                                </svg>
                                                                Ventilateur de plafond
                                                            </label>
                                                        </div>
                                                    </td>
                                                </tr>
                                            ';
                                    }
                                    echo'</table>';
                                }
                            @endphp
                        <!-- Sécurité à la maison -->
                            @php
                                if(in_array("detecteur-de-fumee", $tag) || in_array("extincteur", $tag) || in_array("kit-secours", $tag))
                                {
                                    echo'<table class="table table-bordered">';
                                    echo '<div class="text-start"><b>Sécurité à la maison</b></div>';
                                    if(in_array("detecteur-de-fumee", $tag))
                                    {
                                        echo '
                                                <tr style="justify-content:center;">
                                                    <td style="text-align:left;">
                                                        <div class="custom-control">
                                                            <label for="detecteur-de-fumee">
                                                                <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"
                                                                    aria-hidden="true" role="presentation" focusable="false"
                                                                    style="display: inline; height: 24px; width: 24px; fill: currentcolor;">
                                                                    <path
                                                                        d="M16 1c8.284 0 15 6.716 15 15 0 8.284-6.716 15-15 15-8.284 0-15-6.716-15-15C1 7.716 7.716 1 16 1zm0 2C8.82 3 3 8.82 3 16s5.82 13 13 13 13-5.82 13-13S23.18 3 16 3zm-4.9 14a5.006 5.006 0 0 0 3.9 3.9v2.03A7.005 7.005 0 0 1 9.071 17zm9.8 0l2.029.001a7.005 7.005 0 0 1-5.928 5.928v-2.03A5.006 5.006 0 0 0 20.9 17zM16 13a3 3 0 1 1 0 6 3 3 0 0 1 0-6zm0 2a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm1.001-5.929A7.005 7.005 0 0 1 22.929 15H20.9A5.006 5.006 0 0 0 17 11.1zm-2.001 0v2.03A5.006 5.006 0 0 0 11.1 15H9.07A7.005 7.005 0 0 1 15 9.07zM23 8a1 1 0 1 1 0 2 1 1 0 0 1 0-2z">
                                                                    </path>
                                                                </svg>
                                                                Détecteur de fumée
                                                            </label>
                                                        </div>
                                                    </td>
                                                </tr>
                                            ';
                                    }
                                    if(in_array("extincteur", $tag))
                                    {
                                        echo '
                                                <tr style="justify-content:center;">
                                                    <td style="text-align:left;">
                                                        <div class="custom-control">
                                                            <label for="extincteur">
                                                                <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"
                                                                    aria-hidden="true" role="presentation" focusable="false"
                                                                    style="display: inline; height: 24px; width: 24px; fill: currentcolor;">
                                                                    <path
                                                                        d="M7 28H5V15c0-4.997 3.356-9.304 8.061-10.603A3 3 0 0 1 17.69 2.52l2.66-2.28 1.302 1.52L19.036 4H23v2h-4.17A3.008 3.008 0 0 1 17 7.83l.001.242a7.007 7.007 0 0 1 5.982 6.446l.013.24L23 15v15a2 2 0 0 1-1.85 1.995L21 32H11a2 2 0 0 1-1.995-1.85L9 30v-6H7zm9-18c-2.617 0-4.775 2.014-4.983 4.573l-.013.22L11 15v15h10V15.018l-.003-.206A5 5 0 0 0 16 10zm-2.654-3.6a9.002 9.002 0 0 0-6.342 8.327L7 15v7h2v-7.018l.005-.244A7.001 7.001 0 0 1 15 8.071v-.242a3.01 3.01 0 0 1-1.654-1.43zM16 4a1 1 0 1 0 0 2 1 1 0 0 0 0-2z">
                                                                    </path>
                                                                </svg>
                                                                Extincteur
                                                            </label>
                                                        </div>
                                                    </td>
                                                </tr>
                                            ';
                                    }
                                    if(in_array("kit-secours", $tag))
                                    {
                                        echo '
                                                <tr style="justify-content:center;">
                                                    <td style="text-align:left;">
                                                        <div class="custom-control">
                                                            <label for="kit-secours">
                                                                <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"
                                                                    aria-hidden="true" role="presentation" focusable="false"
                                                                    style="display: inline; height: 24px; width: 24px; fill: currentcolor;">
                                                                    <path
                                                                        d="M26 3a5 5 0 0 1 4.995 4.783L31 8v16a5 5 0 0 1-4.783 4.995L26 29H6a5 5 0 0 1-4.995-4.783L1 24V8a5 5 0 0 1 4.783-4.995L6 3zm0 2H6a3 3 0 0 0-2.995 2.824L3 8v16a3 3 0 0 0 2.824 2.995L6 27h20a3 3 0 0 0 2.995-2.824L29 24V8a3 3 0 0 0-2.824-2.995zm-7 4v4h4v6h-4v4h-6v-4.001L9 19v-6l4-.001V9zm-2.001 2h-2L15 14.999h-4.001V17L15 16.998 14.999 21h2L17 17h3.999v-2H17z">
                                                                    </path>
                                                                </svg>
                                                                Kit de premiers secours
                                                            </label>
                                                        </div>
                                                    </td>
                                                </tr>
                                            ';
                                    }
                                    echo'</table>';
                                }
                            @endphp
                        <!-- Internet et bureau -->
                        
                            @php
                                if(in_array("wifi", $tag) || in_array("espace-travail", $tag))
                                {
                                    echo'<table class="table table-bordered">';
                                    echo'<div class="text-start"><b>Internet et bureau</b></div>';
                                    if(in_array("wifi", $tag))
                                    {
                                        echo '
                                                <tr style="justify-content:center;">
                                                    <td style="text-align:left;">
                                                        <div class="custom-control">
                                                            <label for="wifi">
                                                                <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"
                                                                    aria-hidden="true" role="presentation" focusable="false"
                                                                    style="display: inline; height: 24px; width: 24px; fill: currentcolor;">
                                                                    <path
                                                                        d="m15.9999 20.33323c2.0250459 0 3.66667 1.6416241 3.66667 3.66667s-1.6416241 3.66667-3.66667 3.66667-3.66667-1.6416241-3.66667-3.66667 1.6416241-3.66667 3.66667-3.66667zm0 2c-.9204764 0-1.66667.7461936-1.66667 1.66667s.7461936 1.66667 1.66667 1.66667 1.66667-.7461936 1.66667-1.66667-.7461936-1.66667-1.66667-1.66667zm.0001-7.33323c3.5168171 0 6.5625093 2.0171251 8.0432368 4.9575354l-1.5143264 1.5127043c-1.0142061-2.615688-3.5549814-4.4702397-6.5289104-4.4702397s-5.5147043 1.8545517-6.52891042 4.4702397l-1.51382132-1.5137072c1.48091492-2.939866 4.52631444-4.9565325 8.04273174-4.9565325zm.0001-5.3332c4.9804693 0 9.3676401 2.540213 11.9365919 6.3957185l-1.4470949 1.4473863c-2.1746764-3.5072732-6.0593053-5.8431048-10.489497-5.8431048s-8.31482064 2.3358316-10.48949703 5.8431048l-1.44709488-1.4473863c2.56895177-3.8555055 6.95612261-6.3957185 11.93659191-6.3957185zm-.0002-5.3336c6.4510616 0 12.1766693 3.10603731 15.7629187 7.9042075l-1.4304978 1.4309874c-3.2086497-4.44342277-8.4328305-7.3351949-14.3324209-7.3351949-5.8991465 0-11.12298511 2.89133703-14.33169668 7.334192l-1.43047422-1.4309849c3.58629751-4.79760153 9.31155768-7.9032071 15.7621709-7.9032071z">
                                                                    </path>
                                                                </svg>
                                                                Wifi
                                                            </label>
                                                        </div>
                                                    </td>
                                                </tr>
                                            ';
                                    }
                                    if(in_array("espace-travail", $tag))
                                    {
                                        echo '
                                                <tr style="justify-content:center;">
                                                    <td style="text-align:left;">
                                                        <div class="custom-control">
                                                            <label for="espace-travail">
                                                                <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"
                                                                    aria-hidden="true" role="presentation" focusable="false"
                                                                    style="display: inline; height: 24px; width: 24px; fill: currentcolor;">
                                                                    <path
                                                                        d="M26 2a1 1 0 0 1 .922.612l.04.113 2 7a1 1 0 0 1-.847 1.269L28 11h-3v5h6v2h-2v13h-2l.001-2.536a3.976 3.976 0 0 1-1.73.527L25 29H7a3.982 3.982 0 0 1-2-.535V31H3V18H1v-2h5v-4a1 1 0 0 1 .883-.993L7 11h.238L6.086 8.406l1.828-.812L9.427 11H12a1 1 0 0 1 .993.883L13 12v4h10v-5h-3a1 1 0 0 1-.987-1.162l.025-.113 2-7a1 1 0 0 1 .842-.718L22 2h4zm1 16H5v7a2 2 0 0 0 1.697 1.977l.154.018L7 27h18a2 2 0 0 0 1.995-1.85L27 25v-7zm-16-5H8v3h3v-3zm14.245-9h-2.491l-1.429 5h5.349l-1.429-5z">
                                                                    </path>
                                                                </svg>
                                                                Espace de travail dédié
                                                            </label>
                                                        </div>
                                                    </td>
                                                </tr>
                                            ';
                                    }
                                    echo'</table>';
                                }
                            @endphp
                        
                        <!-- Cuisine et salle à manger -->
                        <!-- <table class="table table-bordered"> -->
                            @php
                                if(in_array("cuisine", $tag) || in_array("refrigerateur", $tag) || in_array("four-micro-onde", $tag) || in_array("equipement-cuisine", $tag) 
                                    || in_array("vaisselle-couverts", $tag) || in_array("mini-refrigerateur", $tag) || in_array("cuisiniere-induction", $tag) 
                                    || in_array("bouilloire-electrique", $tag) || in_array("grille-pain", $tag)
                                    || in_array("vers_a_vin", $tag) || in_array("ustensile-barbecue", $tag) || in_array("table-a-manger", $tag) || in_array("cuisiniere", $tag) || in_array("four", $tag)
                                    || in_array("cafetiere", $tag)
                                   )
                                {
                                    echo '<table class="table table-bordered">';
                                    echo '<div class="text-start"><b>Cuisine et salle à manger</b></div>';
                                    
                                    if(in_array("cuisine", $tag))
                                    {
                                        echo '
                                                <tr style="justify-content:center;">
                                                    <td style="text-align:left;">
                                                        <div class="custom-control">
                                                            <label for="cuisine">
                                                                <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"
                                                                    aria-hidden="true" role="presentation" focusable="false"
                                                                    style="display: inline; height: 24px; width: 24px; fill: currentcolor;">
                                                                    <path
                                                                        d="M26 1a5 5 0 0 1 5 5c0 6.389-1.592 13.187-4 14.693V31h-2V20.694c-2.364-1.478-3.942-8.062-3.998-14.349L21 6l.005-.217A5 5 0 0 1 26 1zm-9 0v18.118c2.317.557 4 3.01 4 5.882 0 3.27-2.183 6-5 6s-5-2.73-5-6c0-2.872 1.683-5.326 4-5.882V1zM2 1h1c4.47 0 6.934 6.365 6.999 18.505L10 21H3.999L4 31H2zm14 20c-1.602 0-3 1.748-3 4s1.398 4 3 4 3-1.748 3-4-1.398-4-3-4zM4 3.239V19h3.995l-.017-.964-.027-.949C7.673 9.157 6.235 4.623 4.224 3.364l-.12-.07zm19.005 2.585L23 6l.002.31c.045 4.321 1.031 9.133 1.999 11.39V3.17a3.002 3.002 0 0 0-1.996 2.654zm3.996-2.653v14.526C27.99 15.387 29 10.4 29 6a3.001 3.001 0 0 0-2-2.829z">
                                                                    </path>
                                                                </svg>
                                                                Cuisine
                                                            </label>
                                                        </div>
                                                    </td>
                                                </tr>
                                            ';
                                    }
                                    if(in_array("refrigerateur", $tag))
                                    {
                                        echo '
                                                <tr style="justify-content:center;">
                                                    <td style="text-align:left;">
                                                        <div class="custom-control">
                                                            <label for="refrigerateur">
                                                                <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"
                                                                    aria-hidden="true" role="presentation" focusable="false"
                                                                    style="display: inline; height: 24px; width: 24px; fill: currentcolor;">
                                                                    <path
                                                                        d="M25 1a2 2 0 0 1 1.995 1.85L27 3v26a2 2 0 0 1-1.85 1.995L25 31H7a2 2 0 0 1-1.995-1.85L5 29V3a2 2 0 0 1 1.85-1.995L7 1zm0 10H7v18h18zm-15 2a1 1 0 1 1 0 2 1 1 0 0 1 0-2zM25 3H7v6h18zM10 5a1 1 0 1 1 0 2 1 1 0 0 1 0-2z">
                                                                    </path>
                                                                </svg>
                                                                Réfrigérateur
                                                            </label>
                                                        </div>
                                                    </td>
                                                </tr>
                                            ';
                                    }
                                    if(in_array("four-micro-onde", $tag))
                                    {
                                        echo '
                                                <tr style="justify-content:center;">
                                                    <td style="text-align:left;">
                                                        <div class="custom-control">
                                                            <label for="four-micro-onde">
                                                                <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"
                                                                    aria-hidden="true" role="presentation" focusable="false"
                                                                    style="display: inline; height: 24px; width: 24px; fill: currentcolor;">
                                                                    <path
                                                                        d="M29 3a2 2 0 0 1 1.995 1.85L31 5v22a2 2 0 0 1-1.85 1.995L29 29H3a2 2 0 0 1-1.995-1.85L1 27V5a2 2 0 0 1 1.85-1.995L3 3zm0 2H3v22h26zm-6 2v18H5V7zm-2 2H7v14l3 .001a4.975 4.975 0 0 1-.992-2.721L9 20v-3h10v3a4.978 4.978 0 0 1-1 3.001L21 23zm-4 10h-6v1a3 3 0 0 0 2.65 2.98l.174.015L14 23a3 3 0 0 0 2.995-2.824L17 20zm9-8a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm0-4a1 1 0 1 1 0 2 1 1 0 0 1 0-2z">
                                                                    </path>
                                                                </svg>
                                                                Four à mico-ondes
                                                            </label>
                                                        </div>
                                                    </td>
                                                </tr>
                                            ';
                                    }
                                    if(in_array("equipement-cuisine", $tag))
                                    {
                                        echo '
                                                <tr style="justify-content:center;">
                                                    <td style="text-align:left;">
                                                        <div class="custom-control">
                                                            <label for="equipement-cuisine">
                                                                <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"
                                                                    aria-hidden="true" role="presentation" focusable="false"
                                                                    style="display: inline; height: 24px; width: 24px; fill: currentcolor;">
                                                                    <path
                                                                        d="M29 1v2c-7.18 0-13 5.82-13 13 0 7.077 5.655 12.833 12.693 12.996L29 29v2c-8.284 0-15-6.716-15-15 0-8.18 6.547-14.83 14.686-14.997zM3 1h2v6h2V1h2v6h2V1h2v9a5.002 5.002 0 0 1-3.999 4.9L9 31H7V14.9a5.01 5.01 0 0 1-3.978-4.444l-.017-.232L3 10zm26 6v2a7 7 0 0 0-.24 13.996L29 23v2a9 9 0 0 1-.265-17.996zM10.999 9h-6v.975l.005.176a3 3 0 0 0 5.99.025L11 10z">
                                                                    </path>
                                                                </svg>
                                                                Équipements de cuisine de base
                                                            </label>
                                                        </div>
                                                    </td>
                                                </tr>
                                            ';
                                    }
                                    if(in_array("vaisselle-couverts", $tag))
                                    {
                                        echo '
                                                <tr style="justify-content:center;">
                                                    <td style="text-align:left;">
                                                        <div class="custom-control">
                                                            <label for="vaisselle-couverts">
                                                                <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"
                                                                    aria-hidden="true" role="presentation" focusable="false"
                                                                    style="display: inline; height: 24px; width: 24px; fill: currentcolor;">
                                                                    <path
                                                                        d="M29 1v2c-7.18 0-13 5.82-13 13 0 7.077 5.655 12.833 12.693 12.996L29 29v2c-8.284 0-15-6.716-15-15 0-8.18 6.547-14.83 14.686-14.997zM3 1h2v6h2V1h2v6h2V1h2v9a5.002 5.002 0 0 1-3.999 4.9L9 31H7V14.9a5.01 5.01 0 0 1-3.978-4.444l-.017-.232L3 10zm26 6v2a7 7 0 0 0-.24 13.996L29 23v2a9 9 0 0 1-.265-17.996zM10.999 9h-6v.975l.005.176a3 3 0 0 0 5.99.025L11 10z">
                                                                    </path>
                                                                </svg>
                                                                Vaisselle et couverts
                                                            </label>
                                                        </div>
                                                    </td>
                                                </tr>
                                            ';
                                    }
                                    if(in_array("mini-refrigerateur", $tag))
                                    {
                                        echo '
                                                <tr style="justify-content:center;">
                                                    <td style="text-align:left;">
                                                        <div class="custom-control">
                                                            <label for="mini-refrigerateur">
                                                            <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" 
                                                                aria-hidden="true" role="presentation" focusable="false" 
                                                                style="display: inline; height: 24px; width: 24px; fill: currentcolor;">
                                                                <path d="M27 3a2 2 0 0 1 1.995 1.85L29 5v21a2 2 0 0 1-1.85 1.995L27 28h-1v2h-2v-2H8v2H6v-2H5a2 2 0 0 1-1.995-1.85L3 26V5a2 2 0 0 1 1.85-1.995L5 3zm0 12H5v11h4v-3a2 2 0 0 1 1.85-1.995L11 21v-3h2v3a2 2 0 0 1 1.995 1.85L15 23v3h2v-3a2 2 0 0 1 1.85-1.995L19 21v-3h2v3a2 2 0 0 1 1.995 1.85L23 23v3h4zm-14 8h-2v3h2zm8 0h-2v3h2zm6-18H5v8h22zM8 8a1 1 0 1 1 0 2 1 1 0 0 1 0-2z">
                                                                </path>
                                                            </svg>
                                                            Mini réfrigérateur
                                                            </label>
                                                        </div>
                                                    </td>
                                                </tr>
                                            ';
                                    }
                                    if(in_array("cuisiniere-induction", $tag))
                                    {
                                        echo '
                                                <tr style="justify-content:center;">
                                                    <td style="text-align:left;">
                                                        <div class="custom-control">
                                                            <label for="cuisiniere-induction">
                                                            <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" 
                                                                aria-hidden="true" role="presentation" focusable="false" 
                                                                style="display: inline; height: 24px; width: 24px; fill: currentcolor;">
                                                                <path d="M27 0a2 2 0 0 1 1.995 1.85L29 2v26a2 2 0 0 1-1.85 1.995L27 30H5a2 2 0 0 1-1.995-1.85L3 28V2A2 2 0 0 1 4.85.005L5 0zm0 2H5v26h22zm-3 22a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm-5.333 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm-5.334 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2zM8 24a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm13-10a4 4 0 1 1 0 8 4 4 0 0 1 0-8zm-10 0a4 4 0 1 1 0 8 4 4 0 0 1 0-8zm10 2a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-10 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zM21 4a4 4 0 1 1 0 8 4 4 0 0 1 0-8zM11 4a4 4 0 1 1 0 8 4 4 0 0 1 0-8zm10 2a2 2 0 1 0 0 4 2 2 0 0 0 0-4zM11 6a2 2 0 1 0 0 4 2 2 0 0 0 0-4z">
                                                                </path>
                                                            </svg>
                                                            Cuisinière à induction
                                                            </label>
                                                        </div>
                                                    </td>
                                                </tr>
                                            ';
                                    }
                                    if(in_array("bouilloire-electrique", $tag))
                                    {
                                        echo '
                                                <tr style="justify-content:center;">
                                                    <td style="text-align:left;">
                                                        <div class="custom-control">
                                                            <label for="bouilloire-electrique">
                                                                <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" 
                                                                    aria-hidden="true" role="presentation" focusable="false" 
                                                                    style="display: inline; height: 24px; width: 24px; fill: currentcolor;">
                                                                    <path d="M26 28v2H6v-2h20zM16 1a8.638 8.638 0 0 1 7.834 5H28a1 1 0 0 1 .997 1.076c-.295 3.873-1.576 6.45-3.894 7.564l.893 10.273a1 1 0 0 1-.88 1.08L25 26H7a1 1 0 0 1-1-.971l.004-.116L7.397 8.887c.026-.3.068-.597.124-.887H5a1 1 0 0 0-.993.883L4 9v10H2V9a3 3 0 0 1 2.824-2.995L5 6h3.165A8.638 8.638 0 0 1 16 1zm6.431 7H9.57a6.647 6.647 0 0 0-.138.7l-.041.36L8.09 24h15.819L22.61 9.06A6.67 6.67 0 0 0 22.431 8zm-5.45 3c-.147 2.02-1.163 4.144-2.7 5.783l-.231.238a6.96 6.96 0 0 0-1.984 3.98h-2.015a8.956 8.956 0 0 1 2.356-5.158l.228-.236c1.304-1.304 2.18-3.034 2.339-4.607h2.007zm4 0c.013.166.019.333.019.5-.001 2.164-1.054 4.508-2.72 6.283l-.23.238A6.967 6.967 0 0 0 16.28 21h-2.064a8.955 8.955 0 0 1 2.191-4.157l.228-.236C18.08 15.163 19 13.196 19 11.499a4.94 4.94 0 0 0-.026-.5h2.008zm5.907-3h-2.409c.04.207.073.418.098.63l.026.257.306 3.518c.98-.792 1.634-2.165 1.946-4.18L26.888 8zM16 3a6.633 6.633 0 0 0-5.552 3h11.104a6.635 6.635 0 0 0-5.043-2.98l-.275-.016L16 3z">
                                                                    </path>
                                                                </svg>
                                                                Bouilloire électrique
                                                            </label>
                                                        </div>
                                                    </td>
                                                </tr>
                                            ';
                                    }
                                    if(in_array("grille-pain", $tag))
                                    {
                                        echo '
                                                <tr style="justify-content:center;">
                                                    <td style="text-align:left;">
                                                        <div class="custom-control">
                                                            <label for="grille-pain">
                                                                <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" 
                                                                    aria-hidden="true" role="presentation" focusable="false" 
                                                                    style="display: inline; height: 24px; width: 24px; fill: currentcolor;">
                                                                    <path d="M20.929 2a3.929 3.929 0 0 1 3.929 3.929c0 .866-.286 1.705-.828 2.41l-.03.034V10a5 5 0 0 1 4.995 4.783L29 15v12a2 2 0 0 1-1.85 1.995L27 29h-1v1h-2v-1H8v1H6v-1H5a2 2 0 0 1-1.995-1.85L3 27V17H1v-2h2a5 5 0 0 1 4.783-4.995L8 10V8.38a3.932 3.932 0 0 1-.003-4.899l.143-.168.153-.162a3.929 3.929 0 0 1 2.556-1.145L11.07 2h9.858zM24 12H8a3 3 0 0 0-2.995 2.824L5 15v12h22V15a3 3 0 0 0-2.824-2.995L24 12zM8 23a1 1 0 1 1 0 2 1 1 0 0 1 0-2zM20.929 4H11.07a1.929 1.929 0 0 0-1.364 3.293 1 1 0 0 1 .284.576L10 8v1.999h12V8a1 1 0 0 1 .122-.479l.066-.105.08-.097.12-.128a1.929 1.929 0 0 0-1.308-3.185L20.929 4z">
                                                                    </path>
                                                                </svg>
                                                                Grille-pain
                                                            </label>
                                                        </div>
                                                    </td>
                                                </tr>
                                            ';
                                    }
                                    if(in_array("vers_a_vin", $tag))
                                    {
                                        echo '
                                                <tr style="justify-content:center;">
                                                    <td style="text-align:left;">
                                                        <div class="custom-control">
                                                            <label for="vers_a_vin">
                                                                <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" 
                                                                    aria-hidden="true" role="presentation" focusable="false" 
                                                                    style="display: inline; height: 24px; width: 24px; fill: currentcolor;">
                                                                    <path d="M9.238 3l-.203.408a20.366 20.366 0 0 0-1.69 5.01l-.007.032A9.001 9.001 0 0 1 10.16 8c2.262 0 4.444.844 6.124 2.407l.237.229a6.979 6.979 0 0 0 4.948 2.05 6.985 6.985 0 0 0 3.528-.951l-.002-.222c-.071-2.757-.746-5.456-2.03-8.105L22.762 3H9.238zm.92 7c-1.087 0-2.15.249-3.112.726C7.014 11.15 7 11.574 7 12a9 9 0 0 0 9 9c4.06 0 7.706-3.138 8.72-6.919a8.999 8.999 0 0 1-3.252.605 8.976 8.976 0 0 1-6.126-2.408l-.236-.228A6.967 6.967 0 0 0 10.159 10zm13.804-9l.284.523C26.079 4.913 27 8.41 27 12c0 5.4-4.528 10.398-10 10.95V29h6v2H9v-2h6v-6.045C9.394 22.45 5 17.738 5 12c0-3.591.92-7.087 2.754-10.477L8.038 1h15.924z">
                                                                    </path>
                                                                </svg>
                                                                Verres à vin    
                                                            </label>
                                                        </div>
                                                    </td>
                                                </tr>
                                            ';
                                    }
                                    if(in_array("ustensile-barbecue", $tag))
                                    {
                                        echo '
                                                <tr style="justify-content:center;">
                                                    <td style="text-align:left;">
                                                        <div class="custom-control">
                                                            <label for="ustensile-barbecue">
                                                                <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" 
                                                                    aria-hidden="true" role="presentation" focusable="false" 
                                                                    style="display: inline; height: 24px; width: 24px; fill: currentcolor;">
                                                                    <path d="M12.994 2h2c-.002 2.062-.471 3.344-1.765 5.424l-.753 1.183c-.867 1.391-1.278 2.301-1.418 3.393H9.043c.1-1.069.378-1.966.903-3H6c0 5.523 4.477 10 10 10 5.43 0 9.848-4.327 9.996-9.72L26 9l-3.765.001c-.704 1.177-1.05 2.014-1.177 2.999h-2.015c.15-1.613.708-2.836 1.91-4.728l.563-.88c1.116-1.791 1.477-2.784 1.478-4.393h2c-.002 1.919-.408 3.162-1.506 5L28 7v2c0 .682-.057 1.35-.166 2H30v2h-2.683a12.039 12.039 0 0 1-5.896 6.709l4.49 9.877-1.821.828-2.006-4.415H17V30h-2v-4H9.916L7.91 30.413l-1.82-.828 4.49-9.877A12.039 12.039 0 0 1 4.682 13H2v-2h2.166a12.058 12.058 0 0 1-.162-1.695L4 9V7h7.127l.389-.609c1.116-1.79 1.477-2.783 1.478-4.392zm-.56 18.461L10.824 24H15v-3.04a11.95 11.95 0 0 1-2.566-.498zM17 20.96v3.04h4.175l-1.609-3.538c-.684.213-1.395.366-2.126.453zm.994-18.96h2c-.002 2.063-.471 3.345-1.765 5.425l-.753 1.183c-.867 1.391-1.278 2.301-1.418 3.393h-2.015c.15-1.613.708-2.836 1.91-4.728l.563-.88c1.116-1.791 1.477-2.784 1.478-4.393z">
                                                                    </path>
                                                                </svg>
                                                                Ustensiles de barbecue
                                                            </label>
                                                                <span>Barbecue, charbon, brochettes en bambou ou en métal, etc.</span>
                                                        </div>
                                                    </td>
                                                </tr>
                                            ';
                                    }
                                    if(in_array("table-a-manger", $tag))
                                    {
                                        echo '
                                                <tr style="justify-content:center;">
                                                    <td style="text-align:left;">
                                                        <div class="custom-control">
                                                            <label for="table-a-manger">
                                                                <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" 
                                                                    aria-hidden="true" role="presentation" focusable="false" 
                                                                    style="display: inline; height: 24px; width: 24px; fill: currentcolor;">
                                                                    <path d="M31 9v21h-2v-7h-6v7h-2v-7a2 2 0 0 1 1.85-1.995L23 21h6V9h2zM3 9v12h6a2 2 0 0 1 1.995 1.85L11 23v7H9v-7H3v7H1V9h2zm14-2v2.083a6.002 6.002 0 0 1 4.996 5.692L22 15h5v2H17v13h-2V17H5v-2h5a6.002 6.002 0 0 1 5-5.917V7h2zm-1 4a4 4 0 0 0-3.995 3.8L12 15h8a4 4 0 0 0-4-4z">
                                                                    </path>
                                                                </svg>
                                                                Table à manger
                                                            </label>
                                                        </div>
                                                    </td>
                                                </tr>
                                            ';
                                    }
                                    if(in_array("cuisiniere", $tag))
                                    {
                                        echo '
                                                <tr style="justify-content:center;">
                                                    <td style="text-align:left;">
                                                        <div class="custom-control">
                                                            <label for="cuisiniere">
                                                            <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="presentation" focusable="false" style="display: inline; height: 24px; width: 24px; fill: currentcolor;">
                                                                <path d="M26 1a5 5 0 0 1 5 5c0 6.389-1.592 13.187-4 14.693V31h-2V20.694c-2.364-1.478-3.942-8.062-3.998-14.349L21 6l.005-.217A5 5 0 0 1 26 1zm-9 0v18.118c2.317.557 4 3.01 4 5.882 0 3.27-2.183 6-5 6s-5-2.73-5-6c0-2.872 1.683-5.326 4-5.882V1zM2 1h1c4.47 0 6.934 6.365 6.999 18.505L10 21H3.999L4 31H2zm14 20c-1.602 0-3 1.748-3 4s1.398 4 3 4 3-1.748 3-4-1.398-4-3-4zM4 3.239V19h3.995l-.017-.964-.027-.949C7.673 9.157 6.235 4.623 4.224 3.364l-.12-.07zm19.005 2.585L23 6l.002.31c.045 4.321 1.031 9.133 1.999 11.39V3.17a3.002 3.002 0 0 0-1.996 2.654zm3.996-2.653v14.526C27.99 15.387 29 10.4 29 6a3.001 3.001 0 0 0-2-2.829z">
                                                                </path>
                                                            </svg>
                                                                Cuisinière
                                                            </label>
                                                        </div>
                                                    </td>
                                                </tr>
                                            ';
                                    }
                                    if(in_array("four", $tag))
                                    {
                                        echo '
                                                <tr style="justify-content:center;">
                                                    <td style="text-align:left;">
                                                        <div class="custom-control">
                                                            <label for="four">
                                                                <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"
                                                                    aria-hidden="true" role="presentation" focusable="false"
                                                                    style="display: inline; height: 24px; width: 24px; fill: currentcolor;">
                                                                    <path
                                                                        d="M28 2a2 2 0 0 1 1.995 1.85L30 4v24a2 2 0 0 1-1.85 1.995L28 30H4a2 2 0 0 1-1.995-1.85L2 28V4a2 2 0 0 1 1.85-1.995L4 2zm0 10H4v16h24zm-2 2v12H6V14zm-2 2H8v8h16zm4-12H4v6h24zm-3 2a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm-6 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm-6 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2zM7 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z">
                                                                    </path>
                                                                </svg>Four
                                                            </label>
                                                        </div>
                                                    </td>
                                                </tr>
                                            ';
                                    }
                                    if(in_array("cafetiere", $tag))
                                    {
                                        echo '
                                                <tr style="justify-content:center;">
                                                    <td style="text-align:left;">
                                                        <div class="custom-control">
                                                            <label for="cafetiere">
                                                                <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"
                                                                    aria-hidden="true" role="presentation" focusable="false"
                                                                    style="display: inline; height: 24px; width: 24px; fill: currentcolor;">
                                                                    <path
                                                                        d="M25 2a1 1 0 0 1 .936.649l.034.108 1 4a1 1 0 0 1-.857 1.237L26 8h-9v2h-2V7.999H4.999v20l3 .001a5 5 0 0 1-.716-4.66l.102-.263 2.515-6.04-1.794-3.59a1 1 0 0 1 .779-1.44L9 12h14a1 1 0 0 1 .94 1.341l-.046.106L22.618 16H24a5 5 0 0 1 4.995 4.783L29 21v4h-2v-4a3 3 0 0 0-2.824-2.995L24 18h-1.5l2.115 5.077A4.998 4.998 0 0 1 24 28L27 28v2H4a1 1 0 0 1-.993-.883L3 29V3a1 1 0 0 1 .883-.993L4 2zM12.647 22a6.638 6.638 0 0 0-2.91.628l-.506 1.218a3 3 0 0 0-.194.682l-.028.235L9 25a3 3 0 0 0 2.824 2.995l.156.004 8.027.001.23-.01a3 3 0 0 0 2.603-2.023c-1.692-.121-2.93-.67-4.836-1.889l-.375-.243C15.493 22.44 14.452 22 12.647 22zm7.686-4h-8.667l-.913 2.188A9.062 9.062 0 0 1 12.647 20c2.188 0 3.515.52 5.75 1.95l.38.246c1.74 1.136 2.741 1.627 4.034 1.76l-.042-.11zm1.048-4H10.618l1 2h8.763zm2.837-10.001H4.999v2h19.719z">
                                                                    </path>
                                                                </svg>
                                                                Cafetière
                                                            </label>
                                                        </div>
                                                    </td>
                                                </tr>
                                            ';
                                    }
                                    echo '</table>';
                                }
                            @endphp
                        <!-- Extérieur -->
                            @php
                                if(in_array("patio-balcon", $tag) || in_array("arriere-cour", $tag) || in_array("mobilier-exterieur", $tag) || in_array("repas-plein-air", $tag) 
                                            || in_array("barbecue", $tag) || in_array("produits-plage", $tag) || in_array("kayak", $tag)
                                            )
                                {
                                    echo'<table class="table table-bordered">';
                                    echo'<div class="text-start"><b>Extérieur</b></div>';
                                    if(in_array("patio-balcon", $tag))
                                    {
                                        echo '
                                                <tr style="justify-content:center;">
                                                    <td style="text-align:left;">
                                                        <div class="custom-control">
                                                            <label for="patio-balcon">
                                                                <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"
                                                                    aria-hidden="true" role="presentation" focusable="false"
                                                                    style="display: inline; height: 24px; width: 24px; fill: currentcolor;">
                                                                    <path
                                                                        d="M23 1a2 2 0 0 1 1.995 1.85L25 3v16h4v2h-2v8h2v2H3v-2h2v-8H3v-2h4V3a2 2 0 0 1 1.85-1.995L9 1zM9 21H7v8h2zm4 0h-2v8h2zm4 0h-2v8h2zm4 0h-2v8h2zm4 0h-2v8h2zm-10-8H9v6h6zm8 0h-6v6h6zM15 3H9v8h6zm8 0h-6v8h6z">
                                                                    </path>
                                                                </svg>
                                                                Patio ou balcon
                                                            </label>
                                                        </div>
                                                    </td>
                                                </tr>
                                            ';
                                    }
                                    if(in_array("arriere-cour", $tag))
                                    {
                                        echo '
                                                <tr style="justify-content:center;">
                                                    <td style="text-align:left;">
                                                        <div class="custom-control">
                                                            <label for="arriere-cour">
                                                                <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"
                                                                    aria-hidden="true" role="presentation" focusable="false"
                                                                    style="display: inline; height: 24px; width: 24px; fill: currentcolor;">
                                                                    <path
                                                                        d="M16 1a5 5 0 0 1 5 5 5 5 0 0 1 0 10 5.002 5.002 0 0 1-4 4.9v4.287C18.652 23.224 21.153 22 23.95 22a8.94 8.94 0 0 1 3.737.814l.313.15.002 2.328A6.963 6.963 0 0 0 23.95 24c-3.542 0-6.453 2.489-6.93 5.869l-.02.15-.006.098a1 1 0 0 1-.876.876L16 31a1 1 0 0 1-.974-.77l-.02-.124C14.635 26.623 11.615 24 7.972 24a6.963 6.963 0 0 0-3.97 1.234l.002-2.314c1.218-.6 2.57-.92 3.968-.92 2.818 0 5.358 1.24 7.028 3.224V20.9a5.002 5.002 0 0 1-3.995-4.683L11 16l-.217-.005a5 5 0 0 1 0-9.99L11 6l.005-.217A5 5 0 0 1 16 1zm2.864 14.1c-.811.567-1.799.9-2.864.9s-2.053-.333-2.864-.9l-.062.232a3 3 0 1 0 5.851.001zM11 8a3 3 0 1 0 .667 5.926l.234-.062A4.977 4.977 0 0 1 11 11c0-1.065.333-2.053.9-2.864l-.232-.062A3.013 3.013 0 0 0 11 8zm10 0c-.228 0-.45.025-.667.074l-.234.062C20.667 8.947 21 9.935 21 11a4.977 4.977 0 0 1-.9 2.864l.232.062A3 3 0 1 0 21 8zm-5 0a3 3 0 1 0 0 6 3 3 0 0 0 0-6zm0-5a3 3 0 0 0-2.926 3.667l.062.234C13.947 6.333 14.935 6 16 6s2.053.333 2.864.9l.062-.232A3 3 0 0 0 16 3z">
                                                                    </path>
                                                                </svg>
                                                                Arrière-cour
                                                            </label>
                                                        </div>
                                                    </td>
                                                </tr>
                                            ';
                                    }
                                    if(in_array("mobilier-exterieur", $tag))
                                    {
                                        echo `
                                                <tr style="justify-content:center;">
                                                    <td style="text-align:left;">
                                                        <div class="custom-control">
                                                            <label for="mobilier-exterieur">
                                                                <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"
                                                                    aria-hidden="true" role="presentation" focusable="false"
                                                                    style="display: inline; height: 24px; width: 24px; fill: currentcolor;">
                                                                    <path d="M29 15v16h-2v-6h-6v6h-2v-6l.005-.15a2 2 0 0 1 1.838-1.844L21 23h6v-8zM5 15v8h6a2 2 0 0 1 1.995 1.85L13 25v6h-2v-6H5v6H3V15zM16 1a15 15 0 0 1 13.556 8.571 1 1 0 0 1-.79 1.423l-.113.006H17v8h8v2h-8v10h-2V21H7v-2h8v-8H3.347a1 1 0 0 1-.946-1.323l.043-.106A15 15 0 0 1 16 1zm0 2C11.71 3 7.799 5.097 5.402 8.468l-.197.284L5.042 9h21.915l-.162-.248a12.995 12.995 0 0 0-10.1-5.734l-.365-.014z">
                                                                    </path>
                                                                </svg>
                                                                Mobilier d extérieur
                                                            </label>
                                                        </div>
                                                    </td>
                                                </tr>
                                            `;
                                    }
                                    if(in_array("repas-plein-air", $tag))
                                    {
                                        echo '
                                                <tr style="justify-content:center;">
                                                    <td style="text-align:left;">
                                                        <div class="custom-control">
                                                            <label for="repas-plein-air">
                                                                <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"
                                                                    aria-hidden="true" role="presentation" focusable="false"
                                                                    style="display: inline; height: 24px; width: 24px; fill: currentcolor;">
                                                                    <path d="M29 15v16h-2v-6h-6v6h-2v-6l.005-.15a2 2 0 0 1 1.838-1.844L21 23h6v-8zM5 15v8h6a2 2 0 0 1 1.995 1.85L13 25v6h-2v-6H5v6H3V15zM16 1a15 15 0 0 1 13.556 8.571 1 1 0 0 1-.79 1.423l-.113.006H17v8h8v2h-8v10h-2V21H7v-2h8v-8H3.347a1 1 0 0 1-.946-1.323l.043-.106A15 15 0 0 1 16 1zm0 2C11.71 3 7.799 5.097 5.402 8.468l-.197.284L5.042 9h21.915l-.162-.248a12.995 12.995 0 0 0-10.1-5.734l-.365-.014z">
                                                                    </path>
                                                                </svg>
                                                                Espace repas en plein air
                                                            </label>
                                                        </div>
                                                    </td>
                                                </tr>
                                            ';
                                    }
                                    if(in_array("barbecue", $tag))
                                    {
                                        echo '
                                                <tr style="justify-content:center;">
                                                    <td style="text-align:left;">
                                                        <div class="custom-control">
                                                            <label for="barbecue">
                                                                <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"
                                                                    aria-hidden="true" role="presentation" focusable="false"
                                                                    style="display: inline; height: 24px; width: 24px; fill: currentcolor;">
                                                                    <path
                                                                        d="M12.994 2h2c-.002 2.062-.471 3.344-1.765 5.424l-.753 1.183c-.867 1.391-1.278 2.301-1.418 3.393H9.043c.1-1.069.378-1.966.903-3H6c0 5.523 4.477 10 10 10 5.43 0 9.848-4.327 9.996-9.72L26 9l-3.765.001c-.704 1.177-1.05 2.014-1.177 2.999h-2.015c.15-1.613.708-2.836 1.91-4.728l.563-.88c1.116-1.791 1.477-2.784 1.478-4.393h2c-.002 1.919-.408 3.162-1.506 5L28 7v2c0 .682-.057 1.35-.166 2H30v2h-2.683a12.039 12.039 0 0 1-5.896 6.709l4.49 9.877-1.821.828-2.006-4.415H17V30h-2v-4H9.916L7.91 30.413l-1.82-.828 4.49-9.877A12.039 12.039 0 0 1 4.682 13H2v-2h2.166a12.058 12.058 0 0 1-.162-1.695L4 9V7h7.127l.389-.609c1.116-1.79 1.477-2.783 1.478-4.392zm-.56 18.461L10.824 24H15v-3.04a11.95 11.95 0 0 1-2.566-.498zM17 20.96v3.04h4.175l-1.609-3.538c-.684.213-1.395.366-2.126.453zm.994-18.96h2c-.002 2.063-.471 3.345-1.765 5.425l-.753 1.183c-.867 1.391-1.278 2.301-1.418 3.393h-2.015c.15-1.613.708-2.836 1.91-4.728l.563-.88c1.116-1.791 1.477-2.784 1.478-4.393z">
                                                                    </path>
                                                                </svg>
                                                                Barbecue
                                                            </label>
                                                        </div>
                                                    </td>
                                                </tr>
                                            ';
                                    }
                                    if(in_array("produits-plage", $tag))
                                    {
                                        echo '
                                                <tr style="justify-content:center;">
                                                    <td style="text-align:left;">
                                                        <div class="custom-control">
                                                            <label for="produits-plage">
                                                                <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"
                                                                    aria-hidden="true" role="presentation" focusable="false"
                                                                    style="display: inline; height: 24px; width: 24px; fill: currentcolor;">
                                                                    <path d="m21.5371936.79901371c7.1880175 1.92602347 11.494866 9.23747869 9.7426084 16.43001709l-.0788157.3081628-.2588191.9659258-12.3525005-3.310178-3.857 14.14h-2.073l3.997-14.658-12.11647204-3.2462092.25881905-.9659258c1.95353809-7.29070343 9.44747649-11.61733078 16.73817989-9.66379269zm-15.87052693 20.20098629c2.209139 0 4 1.790861 4 4s-1.790861 4-4 4-4-1.790861-4-4 1.790861-4 4-4zm0 2c-1.1045695 0-2 .8954305-2 2s.8954305 2 2 2 2-.8954305 2-2-.8954305-2-2-2zm19.65915683-18.08358565.0562051.17389745c.7414212 2.34256671.7721409 5.3779941-.0104397 8.5029521l-.083862.3235661-.2500602.9331114 4.4483333 1.1920586.0336854-.1902377c.6822646-4.2118807-1.0077857-8.36292241-4.1938619-10.93534795zm-3.4573144-1.74209583-2.7528424 10.08862288 3.99 1.069.2502086-.9327495c1.2342523-4.60629235.4411768-8.82534729-1.4873662-10.22487338zm-1.9509888-.45024981c-2.2768126.37924219-4.8951798 3.45150567-6.1362066 7.78144189l-.0846967.3054909-.2509503.9329399 3.738 1.002zm-3.6637953-.26273744-.2191322.03588101c-3.8698651.66371945-7.25443966 3.26546734-8.8113326 7.03021387l-.12548156.31640439-.06677864.18116946 4.4836667 1.2019414.2500987-.933578c.8918782-3.32853504 2.5446834-6.12802789 4.4889596-7.83203213z">
                                                                    </path>
                                                                </svg>
                                                                Produits indispensables pour la plage
                                                            </label>
                                                            <span>Serviettes de plage, parasol, couverture de plage, matériel de plongée avec tuba</span>
                                                        </div>
                                                    </td>
                                                </tr>
                                            ';
                                    }
                                    if(in_array("kayak", $tag))
                                    {
                                        echo '
                                                <tr style="justify-content:center;">
                                                    <td style="text-align:left;">
                                                        <div class="custom-control">
                                                            <label for="kayak">
                                                                <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"
                                                                    aria-hidden="true" role="presentation" focusable="false"
                                                                    style="display: inline; height: 24px; width: 24px; fill: currentcolor;">
                                                                    <path d="M30.966 2.26a74.688 74.688 0 0 1-2.726 8.658c-1.632 4.262-3.45 7.415-5.846 10.061l1.46 1.46a3.477 3.477 0 0 1 3.949.459l2.155 2.146a3.475 3.475 0 0 1-4.766 5.054l-2.148-2.14a3.476 3.476 0 0 1-.605-4.104l-1.446-1.446c-4.67 4.397-11.375 7.38-18.833 8.58a1 1 0 0 1-1.134-1.21l.411-1.729c1.928-7.781 4.298-12.97 8.155-17.043L8.147 9.562a3.477 3.477 0 0 1-3.949-.458L2.044 6.958a3.475 3.475 0 0 1 4.765-5.055l2.149 2.14a3.476 3.476 0 0 1 .604 4.103l1.462 1.463C15.54 5.549 22.178 2.586 29.8 1.02a1 1 0 0 1 1.167 1.239zm-6.508 22.198a1.475 1.475 0 0 0-.101 1.974l2.1 2.112a1.475 1.475 0 0 0 2.188-1.974l-2.101-2.112a1.475 1.475 0 0 0-2.086 0zM11.006 12.422c-3.46 3.675-5.662 8.4-7.476 15.506l-.204.819.179-.035c6.388-1.287 12.064-3.963 16.074-7.72l-1.58-1.578-1.291 1.294a3.829 3.829 0 0 1-5.257.15l-.157-.15a3.829 3.829 0 0 1-.15-5.257L12.584 14l-1.578-1.578zM14 15.414l-1.291 1.294a1.829 1.829 0 0 0-.113 2.463l.113.123a1.829 1.829 0 0 0 2.463.112L16.586 18l-2.587-2.586zM28.6 3.3C22.8 4.7 16.9 7 12.4 11l8.5 8.5c3.715-4.078 5.706-9.306 7.238-14.568l.462-1.632zm-6.7 6.8a3.829 3.829 0 0 1 .148 5.256L20.914 16.5 19.5 15.086l.986-.985a1.829 1.829 0 0 0 .112-2.463l-.112-.123a1.829 1.829 0 0 0-2.463-.112L16.914 12.5 15.5 11.086l.986-.985a3.828 3.828 0 0 1 5.414 0zM3.457 3.458a1.475 1.475 0 0 0-.101 1.974l2.1 2.112A1.475 1.475 0 0 0 7.646 5.57L5.544 3.458a1.475 1.475 0 0 0-2.086 0z">
                                                                    </path>
                                                                </svg>
                                                                Kayak
                                                            </label>
                                                        </div>
                                                    </td>
                                                </tr>
                                            ';
                                    }
                                    echo'</table>';
                                }
                            @endphp
                        
                        <!-- Parking et installations -->
                            @php
                                if(in_array("ascenseur", $tag) || in_array("parking-gratuit", $tag) || in_array("piscine", $tag) || in_array("jacuzzi", $tag) || in_array("salon-privé", $tag)
                                )
                                {
                                    echo'<table class="table table-bordered">';
                                    echo'<div class="text-start"><b>Parking et installations</b></div>';
                                    if(in_array("ascenseur", $tag))
                                    {
                                        echo '
                                                <tr style="justify-content:center;">
                                                    <td style="text-align:left;">
                                                        <div class="custom-control">
                                                            <label for="ascenseur">
                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"
                                                                    aria-hidden="true" role="presentation" focusable="false"
                                                                    style="display: inline; height: 24px; width: 24px; fill: currentcolor;">
                                                                    <path d="M30 1a1 1 0 0 1 .993.883L31 2v28a1 1 0 0 1-.883.993L30 31H2a1 1 0 0 1-.993-.883L1 30V2a1 1 0 0 1 .883-.993L2 1zM3 3v26h12V3zm7 9v6.585l1.793-1.792 1.414 1.414-3.5 3.5a1 1 0 0 1-1.32.083l-.094-.083-3.5-3.5 1.414-1.414L8 18.585V12zm12.387-1.497a1 1 0 0 1 1.226 0l.094.083 3.5 3.5-1.414 1.414L24 13.707V20h-2v-6.293L20.207 15.5l-1.414-1.414 3.5-3.5zM17 29h12V3H17z">
                                                                    </path>
                                                                </svg>
                                                                Ascenseur
                                                            </label>
                                                        </div>
                                                    </td>
                                                </tr>
                                            ';
                                    }
                                    if(in_array("parking-gratuit", $tag))
                                    {
                                        echo '
                                                <tr style="justify-content:center;">
                                                    <td style="text-align:left;">
                                                        <div class="custom-control">
                                                            <label for="parking-gratuit">
                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"
                                                                    aria-hidden="true" role="presentation" focusable="false"
                                                                    style="display: inline; height: 24px; width: 24px; fill: currentcolor;">
                                                                    <path
                                                                        d="M26 19a1 1 0 1 1-2 0 1 1 0 0 1 2 0zM7 18a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm20.693-5l.42 1.119C29.253 15.036 30 16.426 30 18v9c0 1.103-.897 2-2 2h-2c-1.103 0-2-.897-2-2v-2H8v2c0 1.103-.897 2-2 2H4c-1.103 0-2-.897-2-2v-9c0-1.575.746-2.965 1.888-3.882L4.308 13H2v-2h3v.152l1.82-4.854A2.009 2.009 0 0 1 8.693 5h14.614c.829 0 1.58.521 1.873 1.297L27 11.151V11h3v2h-2.307zM6 25H4v2h2v-2zm22 0h-2v2h2v-2zm0-2v-5c0-1.654-1.346-3-3-3H7c-1.654 0-3 1.346-3 3v5h24zm-3-10h.557l-2.25-6H8.693l-2.25 6H25zm-15 7h12v-2H10v2z">
                                                                    </path>
                                                                </svg>
                                                                Parking gratuit sur place
                                                            </label>
                                                        </div>
                                                    </td>
                                                </tr>
                                            ';
                                    }
                                    if(in_array("piscine", $tag))
                                    {
                                        echo '
                                                <tr style="justify-content:center;">
                                                    <td style="text-align:left;">
                                                        <div class="custom-control">
                                                            <label for="piscine">
                                                                <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"
                                                                    aria-hidden="true" role="presentation" focusable="false"
                                                                    style="display: inline; height: 24px; width: 24px; fill: currentcolor;">
                                                                    <path
                                                                        d="M24 26c.988 0 1.945.351 2.671 1.009.306.276.71.445 1.142.483L28 27.5v2l-.228-.006a3.96 3.96 0 0 1-2.443-1.003A1.978 1.978 0 0 0 24 28c-.502 0-.978.175-1.328.491a3.977 3.977 0 0 1-2.67 1.009 3.977 3.977 0 0 1-2.672-1.009A1.978 1.978 0 0 0 16 28c-.503 0-.98.175-1.329.491a3.978 3.978 0 0 1-2.67 1.009 3.978 3.978 0 0 1-2.672-1.008A1.978 1.978 0 0 0 8 28c-.503 0-.98.175-1.33.491a3.96 3.96 0 0 1-2.442 1.003L4 29.5v-2l.187-.008a1.953 1.953 0 0 0 1.142-.483A3.975 3.975 0 0 1 8 26c.988 0 1.945.352 2.671 1.009.35.316.826.49 1.33.491.502 0 .979-.175 1.328-.492A3.974 3.974 0 0 1 16 26c.988 0 1.945.351 2.671 1.009.35.316.826.49 1.33.491.502 0 .979-.175 1.328-.491A3.975 3.975 0 0 1 23.999 26zm0-5c.988 0 1.945.351 2.671 1.009.306.276.71.445 1.142.483L28 22.5v2l-.228-.006a3.96 3.96 0 0 1-2.443-1.003A1.978 1.978 0 0 0 24 23c-.502 0-.978.175-1.328.491a3.977 3.977 0 0 1-2.67 1.009 3.977 3.977 0 0 1-2.672-1.009A1.978 1.978 0 0 0 16 23c-.503 0-.98.175-1.329.491a3.978 3.978 0 0 1-2.67 1.009 3.978 3.978 0 0 1-2.672-1.008A1.978 1.978 0 0 0 8 23c-.503 0-.98.175-1.33.491a3.96 3.96 0 0 1-2.442 1.003L4 24.5v-2l.187-.008a1.953 1.953 0 0 0 1.142-.483A3.975 3.975 0 0 1 8 21c.988 0 1.945.352 2.671 1.009.35.316.826.49 1.33.491.502 0 .979-.175 1.328-.492A3.974 3.974 0 0 1 16 21c.988 0 1.945.351 2.671 1.009.35.316.826.49 1.33.491.502 0 .979-.175 1.328-.491A3.975 3.975 0 0 1 23.999 21zM20 3a4 4 0 0 1 3.995 3.8L24 7v2h4v2h-4v5c.912 0 1.798.3 2.5.862l.171.147c.306.276.71.445 1.142.483L28 17.5v2l-.228-.006a3.96 3.96 0 0 1-2.443-1.003A1.978 1.978 0 0 0 24 18c-.502 0-.978.175-1.328.491a3.977 3.977 0 0 1-2.67 1.009 3.977 3.977 0 0 1-2.672-1.009A1.978 1.978 0 0 0 16 18c-.503 0-.98.175-1.329.491a3.978 3.978 0 0 1-2.67 1.009 3.978 3.978 0 0 1-2.672-1.008A1.978 1.978 0 0 0 8 18c-.503 0-.98.175-1.33.491a3.96 3.96 0 0 1-2.442 1.003L4 19.5v-2l.187-.008a1.953 1.953 0 0 0 1.142-.483A3.975 3.975 0 0 1 8 16c.988 0 1.945.352 2.671 1.009.35.316.826.49 1.33.491.502 0 .979-.175 1.328-.492a3.956 3.956 0 0 1 2.444-1.002L16 16v-5H4V9h12V7a2 2 0 0 0-3.995-.15L12 7h-2a4 4 0 0 1 7-2.645A3.985 3.985 0 0 1 20 3zm-2 13.523c.16.091.313.194.459.307l.212.179c.35.316.826.49 1.33.491.439 0 .86-.134 1.191-.38l.137-.111c.206-.187.431-.35.67-.486V11h-4zM20 5a2 2 0 0 0-1.995 1.85L18 7v2h4V7a2 2 0 0 0-2-2z">
                                                                    </path>
                                                                </svg>
                                                                Piscine
                                                            </label>
                                                        </div>
                                                    </td>
                                                </tr>
                                            ';
                                    }
                                    if(in_array("jacuzzi", $tag))
                                    {
                                        echo '
                                                <tr style="justify-content:center;">
                                                    <td style="text-align:left;">
                                                        <div class="custom-control">
                                                            <label for="jacuzzi">
                                                                <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"
                                                                    aria-hidden="true" role="presentation" focusable="false"
                                                                    style="display: inline; height: 24px; width: 24px; fill: currentcolor;">
                                                                    <path
                                                                        d="M9.5 2a4.5 4.5 0 0 1 3.527 7.295c.609.215 1.173.55 1.66.988l.191.182L17.414 13H31v2h-2v14a2 2 0 0 1-1.85 1.995L27 31H5a2 2 0 0 1-1.995-1.85L3 29V15H1v-2h2.1a5.009 5.009 0 0 1 2.955-3.608A4.5 4.5 0 0 1 9.5 2zm7.085 13H5v14h22V15h-7.586l3.293 3.294-1.414 1.414zM9.5 4a2.5 2.5 0 0 0-1 4.792V11H8a3.001 3.001 0 0 0-2.83 2h9.415l-1.121-1.121a3 3 0 0 0-1.923-.872L11.343 11H10.5V8.792A2.5 2.5 0 0 0 9.5 4zm15.486-3a6.957 6.957 0 0 1-1.803 4.07l-.445.463A8.971 8.971 0 0 0 20.354 11H18.35a10.975 10.975 0 0 1 3.202-7.118A4.961 4.961 0 0 0 22.974 1zm2.007 0h2.004a10.96 10.96 0 0 1-3.202 7.124A4.974 4.974 0 0 0 24.373 11h-2.012a6.97 6.97 0 0 1 1.804-4.064l.444-.462A8.958 8.958 0 0 0 26.993.999z">
                                                                    </path>
                                                                </svg>
                                                                Jacuzzi
                                                            </label>
                                                        </div>
                                                    </td>
                                                </tr>
                                            ';
                                    }
                                    if(in_array("salon-privé", $tag))
                                    {
                                        echo '
                                                <tr style="justify-content:center;">
                                                    <td style="text-align:left;">
                                                        <div class="custom-control">
                                                            <label for="salon-privé">
                                                                <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"
                                                                    aria-hidden="true" role="presentation" focusable="false"
                                                                    style="display: inline; height: 24px; width: 24px; fill: currentcolor;">
                                                                    <path d="M29 3a1 1 0 0 1 .96.718l.026.118 1 6a1 1 0 0 1-.872 1.158L30 11h-2v17h2v2h-6v-2h2V11h-2a1 1 0 0 1-.999-1.05l.013-.114 1-6a1 1 0 0 1 .865-.829L25 3zm-12 9a2 2 0 0 1 1.995 1.85L19 14v1h1a3 3 0 0 1 2.995 2.824L23 18v12h-2v-2H4v2H2V18a3 3 0 0 1 2.824-2.995L5 15h1v-1a2 2 0 0 1 1.697-1.977l.154-.018L8 12zm3 10H5a1 1 0 0 0-.993.883l-.007.1V26h17v-3a1 1 0 0 0-.77-.974l-.113-.02zm0-5h-1v3h1c.351 0 .688.06 1 .171V18a1 1 0 0 0-.883-.993zM6 17H5a1 1 0 0 0-.993.883L4 18v2.17c.25-.088.516-.144.791-.163L5 20h1zm11-3H8l-.001 6h9zm11.152-9h-2.305l-.667 4h3.639z">
                                                                    </path>
                                                                </svg>
                                                                Salon privé
                                                            </label>
                                                        </div>
                                                    </td>
                                                </tr>
                                            ';
                                    }
                                    echo'</table>';
                                }
                            @endphp
                            @php
                                if(in_array("arrivee-autonome", $tag) || in_array("boite-cle", $tag) || in_array("longue-duree", $tag) || in_array("camera", $tag) || in_array("petit-dej", $tag))
                                {
                                    echo'<table class="table table-bordered">';
                                    echo'<div class="text-start"><b>Services</b></div>';
                                    if(in_array("arrivee-autonome", $tag))
                                    {
                                        echo '
                                                <tr style="justify-content:center;">
                                                    <td style="text-align:left;">
                                                        <div class="custom-control">
                                                            <label for="arrivee-autonome">
                                                                <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"
                                                                    aria-hidden="true" role="presentation" focusable="false"
                                                                    style="display: inline; height: 24px; width: 24px; fill: currentcolor;">
                                                                    <path
                                                                        d="m16.8438 27.1562-.00005-3.39845-.2608465.0913211c-.9857292.3215073-2.0303948.5116467-3.1127817.5499306l-.4076218.0071983-.2927873-.0037049c-6.03236807-.1528291-10.89442655-5.0148222-11.04725775-11.0472069l-.00370495-.2927882.00370495-.2927873c.1528312-6.03236807 5.01488968-10.89442655 11.04725775-11.04725775l.2927873-.00370495.2927882.00370495c6.0323847.1528312 10.8943778 5.01488968 11.0472069 11.04725775l.0037049.2927873-.00663.3912275c-.0484899 1.4286741-.3615343 2.7917824-.8920452 4.0406989l-.1327748.2963236 7.90645 7.90705v5.5834h-5.5834l-4.12505-4.12545zm-6.5313-19.93745c1.708641 0 3.09375 1.38511367 3.09375 3.09375 0 1.7086436-1.3851064 3.09375-3.09375 3.09375-1.70863633 0-3.09375-1.385109-3.09375-3.09375 0-1.70863365 1.38511635-3.09375 3.09375-3.09375zm0 2.0625c-.56954635 0-1.03125.46170365-1.03125 1.03125 0 .5695521.46169942 1.03125 1.03125 1.03125.5695564 0 1.03125-.4616936 1.03125-1.03125 0-.56955058-.4616979-1.03125-1.03125-1.03125zm12.1147 15.81255 4.12455 4.12495h2.667v-2.667l-8.37295-8.37255.3697-.6775.1603998-.3074798c.56763-1.1397167.90791-2.4128858.9606815-3.761954l.0072187-.3697662-.0038197-.2688703c-.1397418-4.91222958-4.0963692-8.86881961-9.0086094-9.00856l-.2688709-.0038197-.2688703.0038197c-4.91222958.13974039-8.86881961 4.09633042-9.00856 9.00856l-.0038197.2688703.0038197.2688709c.14228112 5.0015536 4.24146819 9.0124291 9.2774303 9.0124291 1.4456308 0 2.8116781-.3298367 4.0293209-.9177001l.3012791-.1522999 1.5131-.7998-.00045 4.61975z">
                                                                    </path>
                                                                </svg>
                                                                Arrivée autonome
                                                            </label>
                                                        </div>
                                                    </td>
                                                </tr>
                                            ';
                                    }
                                    if(in_array("boite-cle", $tag))
                                    {
                                        echo '
                                                <tr style="justify-content:center;">
                                                    <td style="text-align:left;">
                                                        <div class="custom-control">
                                                            <label for="boite-cle">
                                                                <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"
                                                                    aria-hidden="true" role="presentation" focusable="false"
                                                                    style="display: inline; height: 24px; width: 24px; fill: currentcolor;">
                                                                    <path
                                                                        d="M25 2a5 5 0 0 1 4.995 4.783L30 7v18a5 5 0 0 1-4.783 4.995L25 30H7a5 5 0 0 1-4.995-4.783L2 25V7a5 5 0 0 1 4.783-4.995L7 2zm0 2H7a3 3 0 0 0-2.995 2.824L4 7v4l2-.001V6h20v20H6v-5.001L4 21v4a3 3 0 0 0 2.824 2.995L7 28h18a3 3 0 0 0 2.995-2.824L28 25V7a3 3 0 0 0-2.824-2.995zm-1 4H8v16h16zm-8 3a5 5 0 1 1 0 10 5 5 0 0 1 0-10zm0 2a3 3 0 1 0 0 6 3 3 0 0 0 0-6zm-10-.001L4 13v6l2-.001z">
                                                                    </path>
                                                                </svg>
                                                                Boîte à clé sécurisée
                                                            </label>
                                                        </div> 
                                                    </td>
                                                </tr>
                                            ';
                                    }
                                    if(in_array("longue-duree", $tag))
                                    {
                                        echo '
                                                <tr style="justify-content:center;">
                                                    <td style="text-align:left;">
                                                        <div class="custom-control">
                                                            <label for="longue-duree">
                                                                <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"
                                                                    aria-hidden="true" role="presentation" focusable="false"
                                                                    style="display: inline; height: 24px; width: 24px; fill: currentcolor;">
                                                                    <path
                                                                        d="m11.6667 0-.00095 1.666h8.667l.00055-1.666h2l-.00055 1.666 6.00065.00063c1.0543745 0 1.9181663.81587127 1.9945143 1.85073677l.0054857.14926323v15.91907c0 .4715696-.1664445.9258658-.4669028 1.2844692l-.1188904.1298308-8.7476886 8.7476953c-.3334303.3332526-.7723097.5367561-1.2381975.5778649l-.1758207.0077398h-12.91915c-2.68874373 0-4.88181754-2.1223321-4.99538046-4.7831124l-.00461954-.2168876v-21.66668c0-1.05436021.81587582-1.91815587 1.85073739-1.99450431l.14926261-.00548569 5.999-.00063.00095-1.666zm16.66605 11.666h-24.666v13.6673c0 1.5976581 1.24893332 2.9036593 2.82372864 2.9949072l.17627136.0050928 10.999-.0003.00095-5.6664c0-2.6887355 2.122362-4.8818171 4.7832071-4.9953804l.2168929-.0046196 5.66595-.0006zm-.081 8-5.58495.0006c-1.5977285 0-2.9037573 1.2489454-2.9950071 2.8237299l-.0050929.1762701-.00095 5.5864zm-18.586-16-5.999.00062v5.99938h24.666l.00065-5.99938-6.00065-.00062.00055 1.66733h-2l-.00055-1.66733h-8.667l.00095 1.66733h-2z">
                                                                    </path>
                                                                </svg>
                                                                Séjours longue durée autorisés
                                                            </label>
                                                        </div>
                                                    </td>
                                                </tr>
                                            ';
                                    }
                                    if(in_array("camera", $tag))
                                    {
                                        echo '
                                                <tr style="justify-content:center;">
                                                    <td style="text-align:left;">
                                                        <div class="custom-control">
                                                            <label for="camera">
                                                                <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" 
                                                                    aria-hidden="true" role="presentation" focusable="false" 
                                                                    style="display: inline; height: 24px; width: 24px; fill: currentcolor;">
                                                                    <path d="M2 6.242l2 2V16h3.1a4.998 4.998 0 0 1 1.763-2.894l1.428 1.428a3 3 0 1 0 4.175 4.175l1.428 1.428a4.997 4.997 0 0 1-2.978 1.78 5.002 5.002 0 0 1-4.7 4.078L8 26H4v4H2V20h2v4h4a3.001 3.001 0 0 0 2.872-2.13A5.004 5.004 0 0 1 7.1 18.002L4 18a2 2 0 0 1-1.995-1.85L2 16V6.242zm1.707-3.95l26 26-1.414 1.415-26-26 1.414-1.414zM7.242 3H23a2 2 0 0 1 1.994 1.85L25 5v1.522l5-1.999v11.954l-5-2V16a2 2 0 0 1-1.85 1.994L23 18h-.757l-2-2H23V5H9.242l-2-2zM28 7.476l-3 1.2v3.647l3 1.2V7.476z">
                                                                    </path>
                                                                </svg>
                                                                Caméras de surveillance extérieure et/ou dans les espaces communs
                                                            </label>
                                                        </div>
                                                    </td>
                                                </tr>
                                            ';
                                    }
                                    if(in_array("petit-dej", $tag))
                                    {
                                        echo '
                                                <tr style="justify-content:center;">
                                                    <td style="text-align:left;">
                                                        <div class="custom-control">
                                                            <label for="petit-dej">
                                                                <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" 
                                                                    aria-hidden="true" role="presentation" focusable="false" 
                                                                    style="display: inline; height: 24px; width: 24px; fill: currentcolor;">
                                                                    <path d="M2 31a1 1 0 0 1-1-1 9 9 0 0 1 17.945-1H21c.736 0 1.428-.265 1.971-.739a2.99 2.99 0 0 0 1.022-2.06L24 26V14H13v6h-2v-7a1 1 0 0 1 .883-.993L12 12h13a1 1 0 0 1 .993.883L26 13v2h4a1 1 0 0 1 .993.883L31 16v9a1 1 0 0 1-.883.993L30 26h-4a4.99 4.99 0 0 1-1.714 3.768 4.982 4.982 0 0 1-3.025 1.225L21 31zm3.85-6.637a7.003 7.003 0 0 0-2.693 4.154l-.058.301-.028.182h4.103zM10 23c-.823 0-1.612.142-2.346.403L9.254 29h1.491l1.6-5.598a6.968 6.968 0 0 0-1.854-.385l-.25-.013zm4.151 1.363L12.825 29h4.103l-.027-.182a6.999 6.999 0 0 0-2.75-4.455zM29 17h-3v7h3zM19.994 1c-.002 2.062-.471 3.344-1.765 5.424l-.753 1.183C16.61 8.998 16.198 9.908 16.058 11h-2.015c.15-1.613.708-2.836 1.91-4.728l.563-.88C17.632 3.6 17.993 2.607 17.994.998zm5 0c-.002 2.062-.471 3.344-1.765 5.424l-.753 1.183C21.61 8.998 21.198 9.908 21.058 11h-2.015c.15-1.613.708-2.836 1.91-4.728l.563-.88C22.632 3.6 22.993 2.607 22.994.998z">
                                                                    </path>
                                                                </svg>
                                                                Petit déjeuner
                                                            </label>
                                                            <span>Le petit déjeuner est inclus</span>
                                                        </div>
                                                    </td>
                                                </tr>
                                            ';
                                    }
                                    echo'</table>';
                                }
                            @endphp

                        <!-- Caractéristiques de l'emplacement -->
                            @php
                                if(in_array("entree-privee", $tag))
                                {
                                    echo'<table class="table table-bordered">';
                                    echo`<div class="text-start"><b>Caractéristiques de l'emplacement</b></div>`;
                                    if(in_array("entree-privee", $tag))
                                    {
                                        echo '
                                                <tr style="justify-content:center;">
                                                    <td style="text-align:left;">
                                                        <div class="custom-control">
                                                            <label for="entree-privee">
                                                                <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" 
                                                                    aria-hidden="true" role="presentation" focusable="false" 
                                                                    style="display: inline; height: 24px; width: 24px; fill: currentcolor;">
                                                                    <path d="M25 1a2 2 0 0 1 1.995 1.85L27 3l-.001 26H29v2H3v-2h1.999L5 3a2 2 0 0 1 1.85-1.995L7 1zm0 2H7l-.001 26h18zm-3 12a1 1 0 1 1 0 2 1 1 0 0 1 0-2z">
                                                                    </path>
                                                                </svg>
                                                                Entrée privée
                                                            </label>
                                                        </div>
                                                    </td>
                                                </tr>
                                            ';
                                    }
                                    echo'</table>';
                                }
                            @endphp
                        <!-- ........ -->
                            @php
                                if(in_array("detecteur-monoxyde", $tag))
                                {
                                    echo'<table class="table table-bordered">';
                                    echo'<div class="text-start"><b>...</b></div>';
                                    if(in_array("detecteur-monoxyde", $tag))
                                    {
                                        echo '
                                                <tr style="justify-content:center;">
                                                    <td style="text-align:left;">
                                                        <div class="custom-control">
                                                            <label for="detecteur-monoxyde">                           
                                                                <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" 
                                                                    aria-hidden="true" role="presentation" focusable="false" 
                                                                    style="display: block; height: 24px; width: 24px; fill: currentcolor;">
                                                                    <path d="M2.05 6.292L4 8.242V25a3 3 0 0 0 2.824 2.995L7 28h16.757l1.95 1.95c-.161.023-.325.038-.49.045L25 30H7a5 5 0 0 1-4.995-4.783L2 25V7c0-.24.017-.477.05-.708zm1.657-4l26 26-1.414 1.415-26-26 1.414-1.414zM25 2a5 5 0 0 1 4.995 4.783L30 7v18c0 .24-.017.476-.05.707L28 23.757V7a3 3 0 0 0-2.824-2.995L25 4H8.242l-1.95-1.95c.162-.023.325-.038.491-.045L7 2h18zM11.1 17a5.006 5.006 0 0 0 3.9 3.9v2.03A7.005 7.005 0 0 1 9.071 17h2.03zm5.9 4.243l1.352 1.352a6.954 6.954 0 0 1-1.351.334L17 21.243zM21.243 17l1.686.001c-.067.467-.18.919-.334 1.351L21.243 17zm-4.242-7.929A7.005 7.005 0 0 1 22.929 15H20.9A5.006 5.006 0 0 0 17 11.1l.001-2.029zm-7.596 4.577L10.757 15 9.071 15c.067-.467.18-.92.334-1.352zM15 9.071l-.001 1.686-1.35-1.352A6.954 6.954 0 0 1 15 9.07zM23 8a1 1 0 1 1 0 2 1 1 0 0 1 0-2z">
                                                                    </path>
                                                                </svg>
                                                                Détecteur de monoxyde de carbone
                                                            </label> 
                                                        </div>
                                                    </td>
                                                </tr>
                                            ';
                                    }
                                    echo'</table>';
                                }
                            @endphp
                        <br>
                    </div>
                </div>
            </div>
        </div>

    @endsection
    
    @section('scripts')
    <script>
            let dates = [];
            let oldDates = JSON.parse('{!! $property->dates !!}')

            var calendar = new ej.calendars.Calendar({
                isMultiSelection: false,
                values: oldDates.split(',')
            });
            calendar.appendTo('#element');

    </script>
    @endsection

