@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Topics</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if(count($conclusions) == 0)
                        <div class="col-md-12">No topic found in this cell</div>
                    @else
                        <div class="col-md-12">
                            @foreach($conclusions AS $conclusion)
                                <div class="col-md-12">
                                    {{$conclusion->conclusion_text}} <br />
                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
