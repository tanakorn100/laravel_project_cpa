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
      @forelse($blogkoreansong as $song)
        <div class="row">
          <div class="col-md-12">
            <div class="panel panel-primary ">
              <div class="panel-heading">
                    <b>{{ $song->title }}</b>
              </div>
              <div class="panel panel-body">
                    {{ $song->detail }}
              </div>
              <div class="panel panel-footer text-right">
                  Last Update At : {{ $song->updated_at->diffForHumans() }}
              </div>
            </div>
          </div>
        </div>

        <!-- Comment Section -->
        @forelse ($comments as $comment)
            @if ($song->id == $comment->blog_id)
              <div class="row">
                  <div class="col-md-9 col-md-offset-3">
                    <div class="panel panel-info ">
                      <div class="panel panel-body">
                          {{ $comment->comment }}
                      </div>
                      <div class="panel panel-footer  text-right">
                        Comment At : {{ $comment->updated_at->diffForHumans() }}
                      </div>
                    </div>
                  </div>
              </div>
            @endif
        @empty

        @endforelse


      @empty
        <div class="panel panel-danger">s
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

@endsection
