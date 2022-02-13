<!DOCTYPE html>
<html lang="en">
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
  <link href="assetss/css/style.css" rel="stylesheet">
  <style>
            input[type="email"]{ 
                text-align: right;
                float: right;
}
input[type="text"]{ 
                text-align: right;
                float: right;
}
            input[type="password"] { 
                text-align: right;
                float: right;
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
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="contact">إتصل بنا </a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="about">الدورات </a></li>
                       
                        <li class="nav-item  px-lg-4"><a class="nav-link text-uppercase" href="/">الرئيسية </a></li>
                        
                    
                    </ul>
                </div>
            </div>
        </nav>
      
        <section class="page-section cta">
         
         <div class="row">
               <div class="col-xl-9 mx-auto">
                   <div class="cta-inner bg-faded text-center rounded">
                       <h2 class="section-heading mb-4">
                       <h3><font color="brown">  إنشاء حساب جديد
</font></h3>
<h5><font color="brown"> :  مرحبا بكم في  موقعنا . الرجاء إدخال البيانات التالية.
</font></h5><br>
              <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                        <div class="col-md-6 offset-md-3">
                                <input id="name" type="text" placeholder="الإسم و اللقب"
                                class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" 
                                 required autocomplete="name" autofocus>
                                 @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                               
                            </div>
                        </div>

                        <div class="row mb-3">
                        <div class="col-md-6 offset-md-3">
                                <input id="email" type="email" placeholder="البريد الإلكتروني"
                                class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"
                                 required autocomplete="email">
                                 @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                        <div class="col-md-6 offset-md-3">
                        <input id="password" type="password" placeholder="كلمة المرور " class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                          @error('password')
                          <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                          </span>
                         @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                        <div class="col-md-6 offset-md-3">
                        <input id="password-confirm" type="password" placeholder="تأكيد كلمة المرور " class="form-control" name="password_confirmation" required autocomplete="new-password">
                              </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-3">
                                
                                <button type="submit" class="btn btn-primary">
                                   <font color="brown"> {{ __('أنشئ حسابي') }}</font>
                                </button>
                            </div>
                        </div>
                    </form>
                    <h6 class="mt-4" dir="rtl"><font color="brown"> هل أنت مسجل لدينا ؟  </font>
                   <a href="login" class="text-primary underline">  قم بتسجيل الدخول.</a> </h6>
                  
                </div>
            </div>
        </div>
    </div>
</div>
</div>
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
