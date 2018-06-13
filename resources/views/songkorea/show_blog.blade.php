@extends('layouts.main')

@section('page_title','Korean Song Website')
@section('content')
  <h1>Korean Song Detail</h1>
  <div class="panel panel-success">
    <div class="panel-heading">
          <b>ID Song : {{ $blogkoreansong->id }} , {{ $blogkoreansong->title }}</b>
    </div>
    <div class="panel panel-body">
        <ul>
          <li><b>Title : {{ $blogkoreansong->title }} </b></li>
          <li>Detail : {{ $blogkoreansong->detail }} </li>
          <li>Status : {{ $blogkoreansong->deleted }} </li>
          <li>Create At : {{ $blogkoreansong->created_at }} ( {{ $blogkoreansong->created_at->diffForHumans() }} ) </li>
          <li>Last Update At : {{ $blogkoreansong->updated_at }} ( {{ $blogkoreansong->updated_at->diffForHumans() }} ) </li>
        </ul>
    </div>
  </div>
@endsection
