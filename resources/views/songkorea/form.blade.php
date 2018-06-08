@extends('layouts.main')

@section('page_title','Korean Song Website')
@section('content')
  <h1>Korean Song Form</h1>
  <div class="panel panel-primary">
    <div class="panel-heading">
      @if(isset($songkorea))
        Edit Form
      @else
        Add Form
      @endif
    </div>
    @if(isset($songkorea))
      <!-- if update -->
        {{ Form::open(['method'=> 'put','route'=> ['songkorea.update',$songkorea->id] ]) }}
    @else
        {{ Form::open(['url'=> 'songkorea' ]) }}
    @endif
    <div class="panel panel-body">
      @if(count($errors) > 0)
        <div class="alert alert-danger">
          <ul>
            @foreach($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif
        <div class="row">
            <div class="col-md-2">
                {{ Form::label('namesong', 'Name Song') }}
            </div>
            <div class="col-md-5">
              @if(isset($songkorea->namesong))
                {{ Form::text('namesong',$songkorea->namesong, ['class'=>'form-control']) }}
              @else
                {{ Form::text('namesong','', ['class'=>'form-control']) }}
              @endif
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                {{ Form::label('artist', 'Artist') }}
            </div>
            <div class="col-md-5">
              @if(isset($songkorea->artist))
                {{ Form::text('artist',$songkorea->artist, ['class'=>'form-control']) }}
              @else
                {{ Form::text('artist','', ['class'=>'form-control']) }}
              @endif
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                {{ Form::label('durations', 'Durations') }}
            </div>
            <div class="col-md-5">
              @if(isset($songkorea->durations))
                {{ Form::text('durations',$songkorea->durations, ['class'=>'form-control']) }}
              @else
                {{ Form::text('durations','', ['class'=>'form-control']) }}
              @endif
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                {{ Form::label('about', 'About') }}
            </div>
            <div class="col-md-5">
              @if(isset($songkorea->about))
                {{ Form::textarea('about',$songkorea->about, ['class'=>'form-control']) }}
              @else
                {{ Form::textarea('about','', ['class'=>'form-control']) }}
              @endif
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                {{ Form::label('rating', 'Rating') }}
            </div>
            <div class="col-md-5">
              @if(isset($songkorea->artist))
                {{ Form::number('rating',$songkorea->artist, ['class'=>'form-control']) }}
              @else
                {{ Form::number('rating','', ['class'=>'form-control']) }}
              @endif
            </div>
        </div>
        <div class="row">
            <div class="col-md-5">
              {{ Form::submit('Save',['class'=> 'btn btn-primary']) }}
            </div>
        </div>
    </div>
    {{ Form::close() }}
  </div>
@endsection
