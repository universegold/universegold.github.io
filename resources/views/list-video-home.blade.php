<!DOCTYPE html>
<html dir="rtl">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Golding Investing - Universe Gold</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        
 
  <!-- Template Main CSS File -->
  <link href="assetss/css/style.css" rel="stylesheet">

  <style>
     .dropdown-toggle{
  
 
    border-radius:0;
    float: right;
}

     </style>
    </head>
    <body oncontextmenu="return false">
    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="modif-user/{{ Auth::user()->id }}">
                                      <font color="brown"> {{ __('حسابي ') }}</font>
                                    </a>

                                  
                             
                                 <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                      <font color="brown">  {{ __('تسجيل الخروج ') }}</font>
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
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
                        
                    <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="home">الرئيسية </a></li>
                        <li class="nav-item active px-lg-4"><a class="nav-link text-uppercase" href="about-home">الدورات </a></li>
                       
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="contact-home">إتصل بنا </a></li>
                       
                    </ul>
                </div>
            </div>
        </nav>
        
<section>
        <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
      
        <div class="row">
    
      
        @foreach ($videos as $video)
        <div class="col-lg-3">
             
            
               <div class="text-center  p-2 rounded">
               @if($type==1)
               <a href="list-video/{{$video['id']}}">  <img src="assets/img/1.png"  controls width="350"  height="250"></a>
            @endif
            @if($type==2)
            <a href="list-video/{{$video['id']}}">  <img src="assets/img/2.png"  controls width="350"  height="250"></a>
            @endif
            @if($type==3)
            <a href="list-video/{{$video['id']}}"> <img src="assets/img/3.png"  controls width="350"  height="250"></a>
            @endif
            @if($type==4)
            <a href="list-video/{{$video['id']}}">  <img src="assets/img/4.png"  controls width="350"  height="250"></a>
            @endif
                        <h1 class="section-heading mb-2">
                       <h5> <span class="section-heading-upper"><font color="gold"> {{$video['nom']}} </font></span></h5>
                       
                         </h1>
            
               </div>
        </div>  
      
        
      @endforeach
       
             
               </div>
        </div>  
      
</section>

            
         <footer class="footer text-faded text-center py-2">
            <div class="container">جميع الحقوق محفوظة   © 2022   <p class="m-0 small"></p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
