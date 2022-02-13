<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'GoldInvest') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Golden Investing - Universe Gold</title>
        <link rel="icon" type="image/x-icon" href="../assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="../../https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="../../https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <link href="../../https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="../../css/styles.css" rel="stylesheet" />
        
 
  <!-- Template Main CSS File -->
  <link href="../../assetss/css/style.css" rel="stylesheet">
  <style>
            input[type="email"]{ 
                text-align: right;
                float: right;
}
            
            input[type="password"] { 
                text-align: right;
                float: right;
}

}
 
        </style>
  
</head>
<body oncontextmenu="return false">


   <header>
 
       <h1 class="site-heading text-center text-faded d-none d-lg-block">
           <span class="site-heading-upper text-primary mb-3">Golden Investing</span>
           <span class="site-heading-lower">Universe Gold</span>
       </h1>
   </header>
   <!-- Navigation-->
  
   <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
       <div class="container">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
           <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <ul class="navbar-nav mx-auto">
                   <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="../../contact">إتصل بنا </a></li>
                   <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="../../about">الدورات </a></li>
                  
                   <li class="nav-item  px-lg-4"><a class="nav-link text-uppercase" href="/">الرئيسية </a></li>
                   
               
               </ul>
           </div>
       </div>
   </nav>
  
    <div id="app">
    
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
       
                           
             
</div>

        <main class="py-4">
                 
            @yield('content')
          
        </main>

 <h5><font color="brown">   </font></h5>
 
        <footer class="footer text-faded text-center py-2">
            <div class="container">جميع الحقوق محفوظة   © 2022   <p class="m-0 small"></p></div>
        </footer>
        
        <!-- Bootstrap core JS-->
        <script src="../../https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
      
</body>
</html>
