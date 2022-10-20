@extends('layouts.app')

@section('content')
<body class="login-img3-body" style=" background: url(images/bgmg.jpg)">

    <div class="container">

      <form class="login-form" method="POST" action="{{ route('register') }}"> 
      {{ csrf_field() }}       
        <div class="login-wrap">
            <p class="login-img"><i class="fa fa-user" aria-hidden="true"></i></p>
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-home" aria-hidden="true"></i></span>
                <select class="form-control" name="cell_id">
                    <option value="0" disabled selected>Hitamo akagali</option>
                    @foreach($cells AS $cell)
                        <option value="{{$cell->id}}" <?php if(isset($_POST['cell_id']) AND $_POST['cell_id'] == $cell->id){echo 'selected';}?>>{{$cell->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="input-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
              <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
              <input type="text" class="form-control" placeholder="Izina rya mbere" id="name"  name="first_name" value="{{ old('last_name') }}" required autofocus>
                @if ($errors->has('first_name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('first_name') }}</strong>
                    </span>
                @endif
            </div>
            <div class="input-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
              <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
              <input type="text" class="form-control" placeholder="Irindi zina" id="name"  name="last_name" value="{{ old('first_name') }}" required autofocus>
               @if ($errors->has('last_name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('last_name') }}</strong>
                    </span>
                @endif
            </div>
            <div class="input-group{{ $errors->has('phone_number') ? ' has-error' : '' }}">
              <span class="input-group-addon"><i class="fa fa-phone" aria-hidden="true"></i></span>
              <input type="text" class="form-control" placeholder="Nimero za Telefone" id="name"  name="phone_number" value="{{ old('phone_number') }}" required autofocus>
               @if ($errors->has('phone_number'))
                    <span class="help-block">
                        <strong>{{ $errors->first('phone_number') }}</strong>
                    </span>
                @endif
            </div>
           
            <div class="input-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <span class="input-group-addon"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                <input type="email" class="form-control" placeholder="E-mail yawe"  id="email" name="email" value="{{ old('email') }}" required autofocus>
                 @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
            <div class="input-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <span class="input-group-addon"><i class="fa fa-key" aria-hidden="true"></i></i></span>
                <input type="password" class="form-control" placeholder="Ijambo ry'Urufunguzo" id="password" name="password" required autofocus >
                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-key" aria-hidden="true"></i></span>
                <input type="password" class="form-control" placeholder="Subiramo jambo ry'urufunguzo" id="password-confirm" name="password_confirmation" required autofocus>
            </div>
            <!-- <label class="checkbox">
                <input type="checkbox" value="remember-me"> Remember me
            </label> -->
            <button class="btn btn-primary btn-lg btn-block" type="submit">Iyandikishe</button>
            <a href="/login"> <center > Usanzwe Ufite Konte? <strong style="color: green;"> Injira </strong></center></a>
            <!-- <button class="btn btn-info btn-lg btn-block" type="submit">HAVE ACCOUNT</button> -->
        </div>
      </form>
  </body>
@endsection
