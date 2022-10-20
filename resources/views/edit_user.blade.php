@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit user</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="/users/update">
                        {{ csrf_field() }}
                        <input type="hidden" name="_user" value="{{$user->id}}" />
                        <div class="form-group">
                            <label for="first_name" class="col-md-4 control-label">First name</label>

                            <div class="col-md-6">
                                <input id="first_name" type="text" class="form-control" name="first_name" value="{{ $user->first_name }}" required autofocus />
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="last_name" class="col-md-4 control-label">Last name</label>

                            <div class="col-md-6">
                                <input id="last_name" type="text" class="form-control" name="last_name" value="{{ $user->last_name }}" required  />
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label">Email</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ $user->email }}" required/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="phone_number" class="col-md-4 control-label">Phone number</label>

                            <div class="col-md-6">
                                <input id="phone_number" type="phone" class="form-control" name="phone_number" value="{{ $user->phone_number }}" required/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="user_type" class="col-md-4 control-label">User type</label>

                            <div class="col-md-6">
                                <select class="form-control" name="user_type">
                                    <option disabled="true" selected="true">Choose user type</option>
                                    <option value="sysadmin"  <?php if($user->user_type=='sysadmin'){echo 'selected';} ?>>System administrator</option>
                                    <option value="admin"  <?php if($user->user_type=='admin'){echo 'selected';} ?>>Admin</option>
                                    <option value="citizen" <?php if($user->user_type=='citizen'){echo 'selected';} ?>>Citizen</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="user_type" class="col-md-4 control-label">Cell</label>

                            <div class="col-md-6">
                                <select class="form-control" name="cell_id">
                                    <option disabled="true" selected="true">Choose user cell</option>
                                    @foreach($cells AS $cell)
                                        <option value="{{$cell->id}}" <?php if($user->cell_id==$cell->id){echo 'selected';} ?>>{{$cell->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Save changes
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
