@extends('layouts.main')

@section('page_title','Korean Song Website')
@section('content')
<h1>Blog Korean Songs</h1>
<p></p>
<p></p>
@if(Session::has('message'))
    <div class="alert alert-success">
          {{ Session::get('message') }}
    </div>
@endif
      @forelse($blogkoreansong as $blog)
        <div class="row">
          <div class="col-md-12">
            <div class="panel panel-primary ">
              <div class="panel-heading">
                    <b>{{ $blog->title }}</b>
              </div>
              <div class="panel panel-body">
                    {{ $blog->detail }}
              </div>
              <div class="panel panel-footer">
                  <div class="row">
                      <div class="col-md-6 text-left">
                            Last Update : {{ $blog->updated_at->diffForHumans() }}
                      </div>
                      <div class="col-md-6 text-right">
                        {{ Html::link('#', 'Comment'  , array(
                          'class' => 'addComment',
                          'blog_id' => $blog->id
                        )  ) }}
                      </div>
                    </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Comment Section -->
        @forelse ($comments as $comment)
            @if ($blog->id == $comment->blog_id)
              <div class="row">
                  <div class="col-md-9 col-md-offset-3">
                    <div class="panel panel-info ">
                      <div class="panel panel-body">
                          {{ $comment->comment }}
                      </div>
                      <div class="panel panel-footer">
                          <div class="row">
                              <div class="col-md-6 text-left">
                                  By : {{ $comment->user_id }}
                              </div>
                              <div class="col-md-6 text-right">
                                  time : {{ $comment->updated_at->diffForHumans() }}
                              </div>
                          </div>
                      </div>
                    </div>
                  </div>
              </div>
            @endif
        @empty

        @endforelse
      @empty
        <div class="panel panel-danger">
          <div class="panel-heading">
                <b></b>
          </div>
          <div class="panel panel-body">
                No Content !
          </div>
          <div class="panel panel-footer">
          </div>
        </div>
      @endforelse
<div class="modal fade">
    <div class="modal-dialog">
      {{ Form::open(['method' => 'post', 'action' => 'CommentController@store']) }}
      {{ Form::hidden('blog_id','', array('id' => 'blog_id')) }}
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Comment</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                      <label for="comment">Comment</label>
                      {{ Form::textarea('comment', '', ['class' => 'form-control']) }}
                </div>
                <div class="form-group">
                      <label for="user">User ID</label>
                      {{ Form::number('user_id', '', ['class' => 'form-control']) }}
                </div>
            </div>
            <div class="modal-footer">
                  {{ Form::submit('save',['class' => 'btn btn-primary']) }}
            </div>
        </div>
      {{ Form::close() }}
    </div>
</div>{{-- add comment --}}

<style type="text/css">
.bgimg {
    background-image: url('/images/IMG_3909.png');
}
</style>
<div class="bgimg">
    div with background
</div>
@endsection
