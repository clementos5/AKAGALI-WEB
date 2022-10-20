@extends('layouts.app')

@section('content')
<div class="clearfix"></div>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-xs-offset-2">
            <nav class="navbar navbar-default">
              <div class="container-fluid">
                <div class="navbar-header">
                  <a class="navbar-brand" style="line-height: 10%;" href="/">Akagari app</a>
                </div>
                <ul class="nav navbar-nav">
                  <li><a href="/topics">Topics</a></li>
                  <li><a href="/action_plans">Action plans</a></li>
                  <li><a href="/suggestions">Suggestions</a></li>
                  <li class="active"><a href="/services">Services</a></li>
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
        <div class="col-md-8 col-xs-offset-2">
            @if(session('message'))
                <div class="alert alert-success">{{session('message')}}</div>
            @endif
            <div class="panel panel-default">
                <div class="panel-heading">
                    List of services | {{ Akagari\Cell::cellName(Auth::user()->cell_id) }}
                    @if(Auth::user()->user_type == 'admin')
                        <span class="pull-right"><a href="/services/create">Add a service</a></span>
                    @endif
                </div>
                <div class="panel-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Message</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $counter=0; ?>
                            @foreach($services AS $service)
                                <tr>
                                    <td>{{ ++$counter }}</td>
                                    <td>{{ $service->name }}</td>
                                    <td>{{ $service->description }}</td>
                                    <td>
                                        <a onclick="return confirm('Are you sure you want to delete this service?');" href="/services/destroy/{{$service->id}}" class="btn btn-xs btn-danger" title="Delete">
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