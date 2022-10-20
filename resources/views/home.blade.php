@extends('layouts.head')

@section('content')
<div class="container">
    <div class="row">
        <div class="akagali-content-right">
            <div class="col-sm-12">
                <h4><strong>IBIRI KUGANIRWAHO</strong> <span class="pull-right"><a href="/suggestions/suggest/{{$cell_id}}">Kanda Hano Uduhe Igitekerezo</a></h4></span>
                @if(count($topics) == 0)
                    <h5>There are no posts yet in this cell. <a href="/suggestions/suggest/{{$cell_id}}">Suggest</a> one.</h5>
                @endif
                @foreach($topics AS $topic)
                    <hr class="dotted">
                    <h2>{{$topic->title}}</h2>
                    <h5>
                        <span class="glyphicon glyphicon-time"></span>
                        Post by {{Akagari\User::userNames($topic->user_id)}}, Executive Secretary of {{Akagari\Cell::cellName($topic->cell_id)}}. 
                    </h5>
                    <h5>
                        <span class="label label-primary">{{date("D", strtotime($topic->created_at))}}</span>
                        <span class="label label-primary">{{date("F d, Y", strtotime($topic->created_at))}}</span>
                    </h5>
                    <br>
                    <p>
                        {{$topic->description}}
                    </p>
                    <p>
                        <hr class="dashed">
                        <a href="/comments/{{$topic->id}}" class="btn btn-default btn-sm">
                            <i class="fa fa-enveloppe"></i> Comments
                        </a>
                        <!-- <a href="/comments/{{$topic->id}}" class="btn btn-default btn-sm color-primary"> Read More >>> </a> -->
                    </p>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
