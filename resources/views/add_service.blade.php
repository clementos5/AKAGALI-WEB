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
            <div class="panel panel-default">
                <div class="panel-heading">Add a service | {{ Akagari\Cell::cellName($cell_id) }}</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="/services/store">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="title" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus />
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="description" class="col-md-4 control-label">Description</label>

                            <div class="col-md-6">
                                <textarea id="description" class="form-control" name="description">{{ old('description') }}</textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Add service
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
