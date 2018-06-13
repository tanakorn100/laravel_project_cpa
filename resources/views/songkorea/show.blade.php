@extends('layouts.main')

@section('page_title','Korean Song Website')
@section('content')
  <h1>Korean Song Detail</h1>
  <div class="panel panel-primary">
    <div class="panel-heading">
          <b>ID Song : {{ $songkorea->id }} , {{ $songkorea->namesong }}</b>
    </div>
    <div class="panel panel-body">
        <ul>
          <li><b>Name Song : {{ $songkorea->namesong }} </b></li>
          <li>Artist : {{ $songkorea->artist }} </li>
          <li>Duration : {{ $songkorea->durations }} </li>
          <li>About : {{ $songkorea->about }} </li>
          <li>Rating : {{ $songkorea->rating }} </li>
          <li>Create At : {{ $songkorea->created_at }} ( {{ $songkorea->created_at->diffForHumans() }} ) </li>
        </ul>
    </div>
  </div>
  <div class="row">
    <div class="col-xs-7 text-left">
        {{ Html::link('songkorea','Back', array(
          'class' => 'btn btn-danger'
        )) }}
    </div>
  </div>
@endsection
