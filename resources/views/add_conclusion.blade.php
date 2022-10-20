@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Add conclusion</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="/conclusions/store">
                        {{ csrf_field() }}
                        <input type="hidden" name="topic_id" value="{{$topic}}" />
                        <div class="form-group">
                            <label for="title" class="col-md-4 control-label">Topic</label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control" name="topic" disabled value="{{ Akagari\Topic::topicTitle($topic) }}" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="conclusion" class="col-md-4 control-label">Conclusion</label>

                            <div class="col-md-6">
                                <textarea id="conclusion" class="form-control" name="conclusion_text" autofocus>{{ old('conclusion_text') }}</textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Conclude
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
