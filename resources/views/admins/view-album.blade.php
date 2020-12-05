@extends('layouts.default-layout')

@section('content')
<h1 class="text-center">Album {{$album->name}}</h1>

<br>

@if(session()->has('msg_failure'))
    <p 
    	class="alert alert-danger text-center mx-auto"
    	style="max-width:250px"
    >{{session('msg_failure')}}</p>

    <br>
@endif

<div class="text-center">
	<form
		method="POST"
		action="/admin/album/delete/{{$album->custom_id}}"
	>
		@csrf
		<button
			class="btn btn-danger"
		>Delete Album</button>
	</form>
</div>

@endsection