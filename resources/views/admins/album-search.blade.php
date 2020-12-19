@extends('layouts.default-layout')

@section('content')
<h1 class="text-center">Albums</h1>

<br>

<div class="text-center">
	@foreach($albums as $album)
		<a
			href="/admin/album/{{$album->custom_id}}"
		><h3>{{$album->name}}</h3></a>

		<br>
	@endforeach
</div>

@endsection