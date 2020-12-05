@extends('layouts.default-layout')

@section('content')
<h1 class="text-center">Admin Dashboard</h1>

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

<h4 class="text-center">Upload File Tester</h4>
<br>

<form
	method="POST"
	action="/i/make-file"
	enctype="multipart/form-data"
	class="text-center"
>
	@csrf
	
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

@endsection