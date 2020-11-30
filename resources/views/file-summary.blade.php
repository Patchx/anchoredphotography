@extends('layouts.default-layout')

@section('content')
<h1 class="text-center">File {{$file_id}}:</h1>

<br>

<img
	class="mx-auto"
	src="/i/{{$file_id}}"
>

@endsection