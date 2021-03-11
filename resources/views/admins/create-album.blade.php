@extends('layouts.admin-layout')

@section('content')
	<div 
		class="text-center mx-auto"
		style="max-width:300px"
	>
		<h1 class="text-center">Create Album</h1>

		<br>

		@if(session()->has('msg_failure'))
		    <p 
		    	class="alert alert-danger text-center mx-auto"
		    	style="max-width:250px"
		    >{{session('msg_failure')}}</p>

		    <br>
		@endif

		<h4 class="text-center">Album Name:</h4>
		<br>

		<div 
			class="text-center mx-auto"
			style="max-width:300px"
		>
			<form
				method="POST"
				action="/admin/album/create"
			>
				@csrf
				
				<input 
					name="album_name"
					class="form-control"
					maxlength="100" 
				/>
				<br>

				<button 
					type="submit"
					class="btn btn-info" 
				>Create</button>
			</form>
		</div>
	</div>
@endsection