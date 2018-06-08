@extends('layouts.main')

@section('page_title','Hello page')
@section('content')
	<div class="panel panel-default">
		<div class="panel-heading">
			{{ $song->id }}
		</div>
		<div class="panel-body">
			{{ $song->name_song }}
		</div>
		<div class="panel-body">
			{{ $song->artist }}
		</div>
		<div class="panel-body">
			{{ $song->durations }}
		</div>
		</div>
@stop
