@extends('layouts.app')
@section('content')
<body class="login-img3-body" style=" background: url(images/bgmg.jpg)">

    <div class="container">

      <form class="login-form" method="POST" action="{{ route('login') }}">  
      {{ csrf_field() }}      
        <div class="login-wrap">
            <p class="login-img"><i class="fa fa-user" aria-hidden="true"></i></i></p>
            <div class="input-group{{ $errors->has('email') ? ' has-error' : '' }}">
              <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></i></span>
              <input  class="form-control" placeholder="E-Mail yawe" id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>
                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
            <div class="input-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <span class="input-group-addon"><i class="fa fa-key" aria-hidden="true"></i></span>
                <input type="password" class="form-control" placeholder="Ijambo ry'urufunguzo" id="password"  name="password" required>
               @if ($errors->has('password'))
                 <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
                @endif
            </div>
            <label class="checkbox" style="margin-left: 8%;">
                <input type="checkbox" value="remember-me"  name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                <span class="pull-right"> <a class="btn btn-link" href="{{ route('password.request') }}"> Forgot Password?</a></span>
            </label>
            <button class="btn btn-primary btn-lg btn-block" type="submit">Injira</button>

            <a href="/register"> <center > Uri mushya kuri uru rubuga? &nbsp;<strong style="color: green;"> Iyandikishe </strong></center></a>
            <!-- <button class="btn btn-info btn-lg btn-block" type="submit">Signup</button> -->
        </div>
      </form>

    </div>


  </body>
@endsection