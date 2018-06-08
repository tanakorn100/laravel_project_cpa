@extends('layouts.main')

@section('page_title','Hello page')
@section('content')
	<h1> {{-- $title --}} </h1>
	<p></p>
	<!--
	<div class="row">
		<div class="col-md-4">
			<span class="glyphicon glyphicon-home"></span>
			Here are 65 examples of long sentences ranging from the relatively brief 96 words to one of the longest sentences at 2,156 words.
		</div>
		<div class="col-md-4">
			Almost all of the really long sentences are under 1,000 words. The six longest sentences (1,000+ words) are mostly a curiosity, just to see what is possible.
		</div>
		<div class="col-md-4">
			I hope students of writing can study these sentences to find inspiration. My advice on how to learn from them? Try these three practices:
		</div>

	</div>

-->

	@foreach($songs as $song)
		<div class="panel panel-default">
			<div class="panel-heading">
				<a href="{{ url('Song/'. $song->id) }}"> {{ $song->name_song }} </a>
			</div>
			<div class="panel-body">{{ $song->artist }}</div>
			<div class="panel-body">{{ $song->durations }}</div>
		</div>
	@endforeach

@stop
