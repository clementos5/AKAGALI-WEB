@extends('layouts.app')

@section('content')
<div class="clearfix"></div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <nav class="navbar navbar-default">
              <div class="container-fluid">
                <div class="navbar-header">
                  <a class="navbar-brand" style="line-height: 10%;" href="/">Akagari app</a>
                </div>
                <ul class="nav navbar-nav">
                  <li class="active"><a href="/users">Users</a></li>
                  <li>
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                        Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
                </ul>
              </div>
            </nav>
        </div>
        <div class="clearfix"></div>
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">List of users</div>
                <div class="panel-body">
                    <div class="col-md-12">
                        <div class="col-md-4">Filter by</div>
                        <div class="col-md-8">
                            <form action="" method="POST">
                                <select class="form-control" name="filter">
                                    
                                </select>
                            </form>
                        </div>
                    </div>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Names</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Cell</th>
                                <th>User type</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $counter=0; ?>
                            @foreach($users AS $user)
                                <tr>
                                    <td>{{ ++$counter }}</td>
                                    <td>{{ $user->first_name }} {{ $user->last_name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->phone_number }}</td>
                                    <td>{{ Akagari\Cell::cellName($user->cell_id) }}</td>
                                    <td>{{ $user->user_type }}</td>
                                    <td>
                                        <a href="/users/{{$user->id}}/details" class="btn btn-xs btn-primary" title="Details">
                                            <i class="fa fa-list"></i>
                                        </a>
                                        <a href="/users/edit/{{$user->id}}" class="btn btn-xs btn-warning" title="Edit">
                                            <i class="fa fa-pencil"></i>
                                        </a>
                                        <a onclick="return confirm('Are you sure you want to delete this user?');" href="/users/destroy/{{$user->id}}" class="btn btn-xs btn-danger" title="Delete">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
