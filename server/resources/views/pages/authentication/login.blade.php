@extends('layouts.authentication.master')
@section('title', 'Login-one')

@section('css')
@endsection

@section('style')
@endsection

@section('content')
<div class="container-fluid">
   <div class="row">
      <div class="col-xl-7"><img class="bg-img-cover bg-center" src="{{asset('assets/images/login/2.jpg')}}" alt="looginpage"></div>
      <div class="col-xl-5 p-0">
         <div class="login-card">
            <div>
               <div><a class="logo text-start" href="#"><img class="img-fluid for-light" src="{{asset('assets/images/logo/login.png')}}" alt="looginpage"><img class="img-fluid for-dark" src="{{asset('assets/images/logo/logo_dark.png')}}" alt="looginpage"></a></div>
               <div class="login-main">
                  <form class="theme-form" method="post" action="{{ route('login.perform') }}">
                     <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                     @include('layouts.partials.messages')
                     <h4>Нэвтрэх хэсэг</h4> 
                     <div class="form-group">
                        <label class="col-form-label">Имэйл хаяг</label>
                        <input class="form-control" type="email" name="email" value="{{ old('email') }}" placeholder="example@mail.com" required="required" autofocus>
                        @if ($errors->has('email'))
                           <span class="text-danger text-left">{{ $errors->first('email') }}</span>
                        @endif
                     </div>
                     <div class="form-group">
                        <label class="col-form-label">Нууц үг</label>
                        <input class="form-control" type="password" value="{{ old('password') }}" name="password" required="required" placeholder="*********">
                        @if ($errors->has('password'))
                           <span class="text-danger text-left">{{ $errors->first('password') }}</span>
                        @endif
                     </div>
                     <div class="form-group mb-0">
                        <button class="btn btn-primary btn-block" type="submit">Нэвтрэх</button>
                     </div>
                     {{ $errors->has('password') }}
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection

@section('script')
@endsection