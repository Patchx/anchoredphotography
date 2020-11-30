@extends('layouts.default-layout')

@section('content')
<h1 class="text-center">Admin Dashboard</h1>

<br>

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