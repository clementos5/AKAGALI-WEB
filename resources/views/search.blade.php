@extends('layouts.head')

@section('content')
<div class="container">
    <div class="row">
        <div class="akagali-main">
            <div class="col-sm-12">
                <h4><strong style="font-family: 'Times New Roman', Times, serif;font-size: 110%; color: green"> HABONETSE  I{{ count($results) > 1 ? 'B':'G'}}ISUBIZO <b style="color: red">{{count($results)}} </b>{{ count($results) > 1 ? 'B':'K'}}IJYANYE NA  <b style=" color: red">{{$query}}</b></strong></h4>
                @if(count($results) == 0)
                    <h5>The search returned 0 responses</h5>
                @endif
                @foreach($results AS $result)
                    <hr class="dotted">
                    <h2><a href="/topics/cell/{{$result->id}}"> <div style="width: 100%; font-family: 'Times New Roman', Times, serif;font-size: 110%; color: blue">{{$result->name}}</div></a></h2>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
