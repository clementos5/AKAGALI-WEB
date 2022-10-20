@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Add action plan</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="/action_plans/store" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="cell" class="col-md-4 control-label">Cell</label>
                            
                            <div class="col-md-6">
                                <input type="hidden" name="cell_id" value="{{$cell}}" />
                                <input type="text" disabled class = "form-control" value="{{ Akagari\Cell::cellName($cell) }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="year" class="col-md-4 control-label">Year</label>

                            <div class="col-md-6">
                                <input id="year" type="number" class="form-control" name="year" value="{{ date('Y') }}" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Action plan</label>

                            <div class="col-md-6">
                                <input type="file" name="plan_url" class="form-control" />
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Add action plan
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
