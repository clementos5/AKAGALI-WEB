@extends('layouts.head')

@section('content')
 <div class="panel-body">
              <div class="tab-content">

                <!-- Home -->
                        <div class="akagali-content-right">
                        <div class="col-sm-12">
                            <h2>{{ $topic_info->title }}</h2>
                            <hr class="dotted">
                            <h5><span class="glyphicon glyphicon-time"></span> Post by {{ Akagari\User::userNames($topic_info->user_id)}}, Executive Secretary of {{Akagari\User::userCell($topic_info->user_id)}}. </h5>
                            <h5>From <span class="label label-primary">{{$topic_info->start_date}}</span> to <span class="label label-primary">{{$topic_info->end_date}}</span></h5><br>
                            <p>{{ $topic_info->description }}</p>
                            <p><hr class="dashed">
                        </div>
                        <div class="col-sm-12">
                            <p><span class="badge">{{count($comments)}}</span> comments:</p><br>
                            @if(count($comments) == 0)
                                <div class="col-md-12">No comment found on this topic</div>
                            @else
                                @foreach($comments AS $comment)
                                    <div class="row">
                                        <div class="col-sm-2 text-center">
                                            <img src="/images/avatar.png" class="img-circle" height="65" width="65" alt="{{Akagari\User::userNames($comment->user_id)}} ">
                                        </div>
                                        <div class="col-sm-10">
                                            <h4> {{Akagari\User::userNames($comment->user_id)}} <small><b>said on:</b> {{$comment->created_at}}</small></h4>
                                            <p>{{$comment->comment_text}}</p>
                                        </div>
                                    </div>
                                  @endforeach
                             @endif
                            <h4>Leave a Comment:</h4>
                            <form method="POST" action="/comments/store">
                                {{ csrf_field() }}
                                <input type="hidden" name="topic_id" value="{{ $topic}}" />
                                <div class="form-group">
                                <textarea class="form-control" name="comment_text" rows="3" required></textarea>
                              </div>
                              <button type="submit" class="btn btn-success">Submit</button>
                            </form>
                            <br><br>
                                
                        </div>
                  </div>
             
          </div></p></div>
@endsection
