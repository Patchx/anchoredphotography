@extends('layouts.admin-layout')

@section('content')
<h1 class="text-center">Calendly Integration Demo Page</h1>

<br>

<p class="text-center">Below is a demo of scheduling via a hyperlink:</p>

<br>

<div>
	<!-- Calendly link widget begin -->
	<link href="https://assets.calendly.com/assets/external/widget.css" rel="stylesheet">
	<script src="https://assets.calendly.com/assets/external/widget.js" type="text/javascript"></script>
	<p class="text-center">
		<a 
			href="" 
			onclick="Calendly.initPopupWidget({url: 'https://calendly.com/robert-anderson-fl'});return false;"
		>Schedule time with me</a>
		<!-- Calendly link widget end -->
	</p>
</div>

<br><br>

<p class="text-center">Below is a demo of an inline-embedded scheduler:</p>

<div>
	<!-- Calendly inline widget begin -->
	<div class="calendly-inline-widget" data-url="https://calendly.com/robert-anderson-fl" style="min-width:320px;height:630px;"></div>
	<script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js"></script>
	<!-- Calendly inline widget end -->
</div>

<br>

<div>
	<!-- Calendly badge widget begin -->
	<link href="https://assets.calendly.com/assets/external/widget.css" rel="stylesheet">
	<script src="https://assets.calendly.com/assets/external/widget.js" type="text/javascript"></script>
	<script type="text/javascript">Calendly.initBadgeWidget({ url: 'https://calendly.com/robert-anderson-fl', text: 'Schedule time with me', color: '#00a2ff', textColor: '#ffffff', branding: true });</script>
	<!-- Calendly badge widget end -->
</div>
@endsection