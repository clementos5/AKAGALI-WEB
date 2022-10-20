@extends('layouts.app')

@section('content')
<div class="clearfix"></div>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <nav class="navbar navbar-default">
              <div class="container-fluid">
                <div class="navbar-header">
                  <a class="navbar-brand" style="line-height: 10%;" href="/">Akagari app</a>
                </div>
                <ul class="nav navbar-nav">
                  <li><a href="/topics">Topics</a></li>
                  <li class="active"><a href="/action_plans">Action plans</a></li>
                  <li><a href="/suggestions">Suggestions</a></li>
                  <li><a href="/services">Services</a></li>
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
        <div class="col-md-8 col-md-offset-2">
            <strong>Cells action plans</strong>
            @if(Auth::user()->user_type == 'admin')
                <span class="pull-right"><a href="/action_plans/create">Add action plan</a></span>
            @endif
            @if(count($action_plans) == 0)
                <div class="col-md-12">No action plan found in this cell</div>
            @else
                @foreach($action_plans AS $plan)
                    <div class="panel panel-default">
                        <div class="panel-heading">{{Akagari\Cell::cellName($plan->cell_id)}}</div>
                        <div class="panel-body">
                            <div class="col-md-12" style="padding-bottom: 5px;">
                                {{$plan->year}} | <a href="/{{$plan->plan_url}}">Preview / Download</a>
                            </div>
                            <div class="col-md-12" style="margin-top:5px;">
                                <b>Added on:</b> {{$plan->created_at}}
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
            </div>
        </div>
    </div>
</div>
@endsection
