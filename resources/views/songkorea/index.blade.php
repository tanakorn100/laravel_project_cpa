@extends('layouts.main')

@section('page_title','Korean Song Website')
@section('content')

<h1> Korean Song list</h1>

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
        <th></th>
        @auth
        <th>Detail</th>
        <th>Update</th>
        <th>Delete</th>
        @endauth
      </tr>
    </thead>
    <tbody>
      @forelse($songkorea as $song)
        <tr class="table-light" >
          <td align="center"> <img src="{{ $song['cover_album'] }}" class="img-responsive" style="max-width: 60px"> </td>
          <td>{{ $song['namesong'] }}</td>
          <td>{{ $song['artist'] }}</td>
          <td>{{ $song['durations'] }}</td>
          <td>{{ $song['rating'] }}</td>
          {{-- <th><a>
                    {{ Html::link('#', ''  , array(
                    'class' => 'playMusic glyphicon glyphicon-music',
                    'cover_album' => $song['cover_album'],
                    'music' => $song['image_path']
                  )  ) }}
          </a></th> --}}
          <td><a class="linkright" href="#existingcase?music=<?php echo $song['image_path']; ?>"</a></td>
            @auth
          <td>{{ Html::link('songkorea/'.$song['id'],'',array('class'=>'glyphicon glyphicon-zoom-in')) }} </td>
          <td>{{ Html::link('songkorea/'.$song['id'].'/edit','',array('class'=>'glyphicon glyphicon-cog')) }} </td>
          {{ Form::open(['route'=> ['songkorea.destroy',$song['id'],'method'=>'delete' ] ]) }}
          <input type="hidden" name="_method" value="delete">
          <td>{{ Form::submit('Delete',array('class'=>'btn btn-danger')) }} </td>
          {{ Form::close() }}
            @endauth
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
    @auth
      {{ Html::link('songkorea/create','Add Song', array(
        'class' => 'btn btn-primary'
      )) }}
      @endauth
  </div>

  <div class="col-xs-7 text-right">
      {{ Html::link('blog','Go to Blog', array(
        'class' => 'btn btn-success'
      )) }}
  </div>
</div>


@endsection
