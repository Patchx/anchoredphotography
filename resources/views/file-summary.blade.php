@extends('layouts.admin-layout')

@section('content')

<div class="text-center">
	<a 
		href="/admin/album/{{$image->album_id}}"
		class="btn btn-link"
	>Back to Album</a>

	<br><br>

	<form
		method="POST"
		action="/i/delete/{{$image->custom_id}}"
	>
		@csrf
		<button
			class="btn btn-danger"
		>Delete File</button>
	</form>
</div>

<br>

<img
	class="mx-auto d-block"
	style="max-width:450px"
	src="/i/{{$image->custom_id}}"
>

@endsection