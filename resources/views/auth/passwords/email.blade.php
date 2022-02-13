@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h6><center><font color="brown">{{ __(':هل نسيت كلمة المرور ؟ يمكنك تغييرها الأن : فقط أدخل بريدك الإلكتروني') }}</font></center></h6></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                       
                    @csrf
                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" placeholder="البريد الإلكتروني" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                 <font color="brown">   {{ __('إرسال رابط إعادة تعيين كلمة المرور') }}</font>
                                </button>
                            </div>
                            <h6 class="mt-4" dir="rtl"><a href="../login" 
                            class="text-primary underline"><center>تسجيل الدخول  </center></a> </h6>
               
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
