@extends('layouts.admin-layout')

@section('content')
<h1 class="text-center">Album {{$album->name}}</h1>

<br>

@if(session()->has('msg_success'))
    <p 
    	class="alert alert-success text-center mx-auto"
    	style="max-width:250px"
    >{{session('msg_success')}}</p>

    <br>
@endif

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
<br><br>

<h4 class="text-center">Upload File</h4>
<br>

<form
	method="POST"
	action="/admin/i/make-file"
	enctype="multipart/form-data"
	class="text-center"
>
	@csrf
	
	<input
		type="hidden"
		name="album_id"
		value="{{$album->custom_id}}"
	/>

	<input 
		type="file" 
		name="file"
	/>
	<br><br>

	<input 
		type="submit" 
		value="Upload"
	/>
</form>

<br><br>

<div class="mx-auto d-block text-center">
	@foreach($images as $image)
		<form
			method="POST"
			action="/i/delete/{{$image->custom_id}}"
		>
			@csrf
			<button
				class="btn btn-danger"
			>Delete File</button>
		</form>

		<div style="height:5px"></div>

		<a href="/admin/i/summary/{{$image->custom_id}}">
			<img
				src="{{$image->link()}}"
				style="max-width:350px"
			/>
		</a>

		<br><br>
	@endforeach
</div>

@endsection