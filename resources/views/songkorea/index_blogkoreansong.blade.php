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
<table class="table table-warning">
  <thead>
      <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Create At</th>
        <th>Detail</th>
        <th>Update</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
      @forelse($blogkoreansong as $song)
        <tr class="table-light">
          <td>{{ $song['id'] }}</td>
          <td>{{ $song['title'] }}</td>
          <td>{{ $song['created_at'] }}</td>
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
  <div class="col-xs-5">
      {{ Html::link('songkorea/create','Add Song', array(
        'class' => 'btn btn-primary'
      )) }}
  </div>
</div>

@endsection
