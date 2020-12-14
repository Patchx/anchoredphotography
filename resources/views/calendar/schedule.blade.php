@extends('layouts.default-layout')

@section('content')
<h1 class="text-center">Book a Time with Me</h1>

<div>
	<!-- Calendly inline widget begin -->
	<div class="calendly-inline-widget" data-url="https://calendly.com/robert-anderson-fl" style="min-width:320px;height:630px;"></div>
	<script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js"></script>
	<!-- Calendly inline widget end -->
</div>

@endsection