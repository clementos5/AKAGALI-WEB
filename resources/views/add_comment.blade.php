@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Add comment</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="/comments/store">
                        {{ csrf_field() }}
                        <input type="hidden" name="topic_id" value="{{$topic}}" />
                        <div class="form-group">
                            <label for="title" class="col-md-4 control-label">Topic</label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control" name="topic" disabled value="{{ Akagari\Topic::topicTitle($topic) }}" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="comment" class="col-md-4 control-label">Comment</label>

                            <div class="col-md-6">
                                <textarea id="comment" class="form-control" name="comment_text" autofocus>{{ old('comment_text') }}</textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Add comment
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
