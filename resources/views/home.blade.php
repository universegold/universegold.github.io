<!DOCTYPE html>
<html dir="rtl">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Golden Investing - Universe Gold</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        
     
  <!-- Template Main CSS File -->
  <script>
     
    /*!
* Start Bootstrap - Business Casual v7.0.6 (https://startbootstrap.com/theme/business-casual)
* Copyright 2013-2021 Start Bootstrap
* Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-business-casual/blob/master/LICENSE)
*/
// Highlights current date on contact page
window.addEventListener('DOMContentLoaded', event => {
    const listHoursArray = document.body.querySelectorAll('.list-hours li');
    listHoursArray[new Date().getDay()].classList.add(('today'));
})

    </script>
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
                                      <font color="brown"> {{ __('?????????? ') }}</font>
                                    </a>

                                 <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                      <font color="brown">  {{ __('?????????? ???????????? ') }}</font>
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
                <a class="navbar-brand text-uppercase fw-bold d-lg-none" href="index.html">Start Bootstrap</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto">

                       <li class="nav-item active px-lg-4"><a class="nav-link text-uppercase" href="home">???????????????? </a></li>
                       <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="about-home">?????????????? </a></li> 
                        
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="contact-home">???????? ?????? </a></li>
                        
                    </ul>
                </div>
            </div>
        </nav>
    
    
        <section class="page-section clearfix">
            <div class="container">
                <div class="intro">
                    <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="assets/img/intro.jpg" alt="..." />
                    <div class="intro-text left-0 text-center bg-faded p-5 rounded">
                        <h1 class="section-heading mb-2">
                           <h3> <span class="section-heading-upper"><font color="brown">?????????? ???? ??????????????????  ????  ?????????? </font></span></h3>
                           <h3> <span class="section-heading-upper"><font color="brown">?????????? ???? ???????????? ???? ??????????????????</font></span></h3>
                           <h3> <span class="section-heading-upper"> <font color="brown"> ?????????? ???? ???????? ??????????????????</font></span></h3>
                           <h3> <span class="section-heading-upper"><font color="brown">?????????? ???? ???????? ??????????</font></span></h3>
                           
                         </h1>
                        <div class="intro-button mx-auto"><a class="btn btn-primary btn-xl" href="follow"><font color="brown" >?????????? ???????? </font></a></div>
                    </div>
                </div>
            </div>
        </section>


<section>
        <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
      
        <div class="row">
    
        <div class="col-lg-3">
             
               
               <div class="text-center  p-2 rounded">
               <a href="list-video-home-invest">  <img src="assets/img/1.png"  controls width="350"  height="250"></a>
           
                        <h1 class="section-heading mb-2">
                           <h5> <span class="section-heading-upper"><font color="gold">?????????? ???? ??????????????????   ????  ?????????? </font></span></h5>
                          
                         </h1>
            
               </div>
        </div>  
        
        <div class="col-lg-3">
             
               </a>
               <div class="text-center  p-2 rounded">
               <a href="list-video-home-budget">  <img src="assets/img/2.png"  controls width="350"  height="250"></a>
           
                        <h1 class="section-heading mb-2">
                           <h5> <span class="section-heading-upper"><font color="gold"> ?????????? ???? ???????????? ???? ?????????????????? </font></span></h5>
                          
                         </h1>
            
               </div>
        </div> 
      <div class="col-lg-3">
             
             </a>
             <div class="text-center  p-2 rounded">
             <a href="list-video-home-play">   <img src="assets/img/4.png"  controls width="350"  height="250"></a>
         
                      <h1 class="section-heading mb-2">
                         <h5> <span class="section-heading-upper"><font color="gold">?????????? ???? ???????? ??????????????????  </font></span></h5>
                        
                       </h1>
          
             </div>
      </div>
        <div class="col-lg-3">

               </a>
               <div class="text-center  p-2 rounded">
               <a href="list-video-home-money">  <img src="assets/img/3.png"  controls width="350"  height="250"></a>
           
                        <h1 class="section-heading mb-2">
                           <h5> <span class="section-heading-upper"><font color="gold">?????????? ???? ???????? ?????????? </font></span></h5>
                          
                         </h1>
              </div>
        </div> 
          
        </div>
           
      
        </div>
</section>

            <section class="page-section cta">
           
                <div class="row">
                    <div class="col-xl-9 mx-auto">
                        <div class="cta-inner bg-faded text-center rounded">
                            <h2 class="section-heading mb-4">
                               
                                <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <ul class="list-inline text-center">
                            
                            <li class="list-inline-item">
                                <a href="https://www.instagram.com/islem.derbelislem/">
                                    <span class="fa-stack fa-lg">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fab fa-instagram fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://www.whatsapp.com/">
                                    <span class="fa-stack fa-lg">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fab fa-whatsapp fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://www.facebook.com/messages/t/100006017102796">
                                    <span class="fa-stack fa-lg">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fab fa-facebook-messenger fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                        </ul>
                      
                    
                      
                </div>
            </div>
                            </h2>
                            <p class="mb-0">When you walk into our shop to start your day, we are dedicated to providing you with friendly service, a welcoming atmosphere, and above all else, excellent products made with the highest quality ingredients. If you are not satisfied, please let us know and we will do whatever we can to make things right!</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer class="footer text-faded text-center py-2">
            <div class="container">???????? ???????????? ????????????   ?? 2022   <p class="m-0 small"></p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
