@extends('layouts.main')

@section('page_title','Korean Song Website')
@section('content')
<h1>List of Korean Songs</h1>
<p></p>
<p></p>

@if(Session::has('message'))
    <div class="alert alert-success">
          {{ Session::get('message') }}
    </div>
@endif
<table class="table table-hover">
  <thead>
      <tr>
        <th></th>
        <th>Name song</th>
        <th>Artist</th>
        <th>Durations</th>
        <th>Rating</th>
        <th >Music</th>
        <th>Detail</th>
        <th>Update</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
      @forelse($songkorea as $song)
        <tr class="table-light" >
          <td align="center"> <img src="{{ url($song['cover_album']) }}" class="img-responsive" style="max-width: 30px"> </td>
          <td>{{ $song['namesong'] }}</td>
          <td>{{ $song['artist'] }}</td>
          <td>{{ $song['durations'] }}</td>
          <td>{{ $song['rating'] }}</td>
          <td><audio controls><source src="{{ $song['image_path'] }}" type="audio/mpeg"></audio></td>
          <td>{{ Html::link('songkorea/'.$song['id'],'',array('class'=>'glyphicon glyphicon-zoom-in')) }} </td>
          <td>{{ Html::link('songkorea/'.$song['id'].'/edit','',array('class'=>'glyphicon glyphicon-cog')) }} </td>
          {{ Form::open(['route'=> ['songkorea.destroy',$song['id'],'method'=>'delete' ] ]) }}
          <input type="hidden" name="_method" value="delete">
          <td>{{ Form::submit('Delete',array('class'=>'btn btn-danger')) }} </td>
          {{ Form::close() }}
        </tr>
      @empty
        <tr>
          <td colspan="6">No data</td>
        </tr>
      @endforelse
    </tbody>
</table>
<div class="row">
  <div class="col-xs-5 text-left">
      {{ Html::link('songkorea/create','Add Song', array(
        'class' => 'btn btn-primary'
      )) }}
  </div>
  <div class="col-xs-7 text-right">
      {{ Html::link('blog','Go to Blog', array(
        'class' => 'btn btn-success'
      )) }}
  </div>
</div>

@endsection
