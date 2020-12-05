@extends('layouts.default-layout')

@section('content')

<div class="text-center">
	<form
		method="POST"
		action="/i/delete/{{$file_id}}"
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
	src="/i/{{$file_id}}"
>

@endsection