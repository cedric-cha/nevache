<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Agence Immobilière</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link rel="stylesheet" href="{{url('css/main.css')}}" type="text/css">
            
            
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js" integrity="sha512-qTXRIMyZIFb8iQcfjXWCO8+M5Tbc38Qi5WzdPOYZHIlZpzBHG3L3by84BBBOiRGiEb7KKtAOAs5qYdUiZiQNNQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        
        <meta name="description" content="Typescript UI Controls">
        <meta name="author" content="Syncfusion">
        <!--style reference from the Calendar component-->
        <link href="https://cdn.syncfusion.com/ej2/ej2-base/styles/material.css" rel="stylesheet">
        <link href="https://cdn.syncfusion.com/ej2/ej2-buttons/styles/material.css" rel="stylesheet">
        <link href="https://cdn.syncfusion.com/ej2/ej2-calendars/styles/material.css" rel="stylesheet">
        <script src="https://cdn.syncfusion.com/ej2/dist/ej2.min.js" type="text/javascript"></script> 
<!--          
        <script src = "ej/ej.web.all.min.js" ></script>  
        <script src = "ej/ej.webform.min.js" ></script>   -->
        
        
    </head>
    <body id="page-top">
        
        <!-- Navigation Masthead-->
        @include('includes.navbar')


        <!-- header-->
        @yield('header')
        

        <!-- Contenu-->
        @yield('contenu')


        <!-- contact-->
        @yield('contact')


        <!-- footer-->
        @yield('footer')


        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <!-- Core theme JS-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

        @yield('scripts')
        
    </body>
</html>


