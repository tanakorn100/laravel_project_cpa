@extends('layouts.main')

@section('page_title','Korean Song Website')
@section('content')
<h1>List of Korean Songs</h1>
<p></p>
<p></p>
<table class="table table-warning">
  <thead>
      <tr>
        <th>ID</th>
        <th>Name song</th>
        <th>Artist</th>
        <th>Durations</th>
        <th>Rating</th>
        <th>Detail</th>
        <th>Update</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
      @forelse($songkorea as $song)
        <tr class="table-light">
          <td>{{ $song['id'] }}</td>
          <td>{{ $song['namesong'] }}</td>
          <td>{{ $song['artist'] }}</td>
          <td>{{ $song['durations'] }}</td>
          <td>{{ $song['rating'] }}</td>
          <td>{{ Html::link('songkorea/'.$song['id'],'',array('class'=>'glyphicon glyphicon-zoom-in')) }} </td>
          <td>{{ Html::link('songkorea/'.$song['id'],'',array('class'=>'glyphicon glyphicon-cog')) }} </td>
          <td>{{ Html::link('songkorea/'.$song['id'],'',array('class'=>'glyphicon glyphicon-trash')) }} </td>
        </tr>
      @empty
        <tr>
          <td colspan="6">No data</td>
        </tr>
      @endforelse
    </tbody>
</table>
<div class="row">
  <div class="col-xs-5">
      {{ Html::link('songkorea/create','Add Song', array(
        'class' => 'btn btn-primary'
      )) }}
  </div>
</div>

@endsection
