@extends('layouts.admin-layout')

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

	<a 
		href="/admin/album/create"
		class="text-center"
	>
		<h4>Create Album</h4>
	</a>

	<br>

	<div 
		class="text-center mx-auto"
		style="max-width:300px"
	>
		<h4 
			class="text-dark"
			style="margin-bottom:10px"
		>Search Albums</h4>

		@if(session()->has('search_text_failure'))
			<p 
				class="alert alert-danger text-center mx-auto"
				style="max-width:300px"
			>{{session('search_text_failure')}}</p>
		@endif

		<form
			method="POST"
			action="/admin/album/search"
		>
			@csrf
			<div class="input-group">
				<input 
					name="search_text"
					class="form-control d-inline-block"
					style="max-width:260px"
				/>

				<div class="input-group-append">
					<button
						type="submit"
						class="btn btn-info d-inline-block"
					>Go</button>
				</div>
			</div>
		</form>
	</div>
@endsection