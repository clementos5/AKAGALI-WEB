@extends('layouts.head')

@section('content')

<div class="clearfix"></div>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <nav class="navbar navbar-default">
              <div class="container-fluid">
                <div class="navbar-header">
                  <a class="navbar-brand" style="line-height: 10%;" href="/">Akagari</a>
                </div>
                <ul class="nav navbar-nav">
                  <li class="active"><a href="/topics">Topics</a></li>
                  <li><a href="/action_plans">Action plans</a></li>
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
            <strong style="color: green;">Ibitekerezo biri kuganirwaho</strong>
            @if(Auth::user()->user_type == 'admin')
                <span class="pull-right"><a href="/topics/create" title="Gushyira igitekerezo mu ruganiriro">Gushyira igitekerezo mu ruganiriro</a></span>
            @endif
            @if(count($topics) == 0)
                <div class="col-md-12">No topic found in this cell</div>
            @else
                @foreach($topics AS $topic)
                    <?php $conclusion = Akagari\Conclusion::wheretopic_id($topic->id)->first(); ?>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a href="/comments/{{$topic->id}}">{{$topic->title}}</a> 
                                <span class="pull-right"> 
                                    <a onclick="return confirm('Murashaka Gusiba iki kiganiro koko?');" href="/topics/destroy/{{$topic->id}}" class="btn btn-xs btn-danger" title="Gusiba Ikiganiro" style="background: green; ">
                                        <i class="fa fa-trash"></i> Gusiba Ikiganiro
                                        </a>
                                </span>
                        </div>
                        <div class="panel-body">
                            <div class="col-md-12" style="padding-bottom: 5px;">
                                {{$topic->description}} <br />
                                <div class="col-md-12" style="margin-top:5px;">
                                    <b>Yashyizweho:</b> {{$topic->start_date}} <br>
                                    <b>Izarangira:</b> {{$topic->end_date}}
                                </div>
                            </div>
                            @if(count($conclusion) != 0)
                                <div class="col-md-12" style="border-top: 1px solid #bcbcbc; ">
                                    <h4>Conclusion</h4>
                                    {{$conclusion->conclusion_text}}
                                </div>
                            @endif
                        </div>
                    </div>
                @endforeach
            @endif
            </div>
        </div>
    </div>
</div>
@endsection
