@extends('layouts.marketing-layout')

@section('content')
	<div style="padding:25px">
    	<h1 class="text-center">Book a Time with Me</h1>

    	<div>
    		<!-- Calendly inline widget begin -->
    		<div 
    			class="calendly-inline-widget" 
    			data-url="https://calendly.com/robert-anderson-fl" 
    			style="
    				min-width: 320px;
    				height: 650px;
    			"
    		></div>
    		
    		<script 
    			type="text/javascript" 
    			src="https://assets.calendly.com/assets/external/widget.js"
    		></script>
    		<!-- Calendly inline widget end -->
    	</div>
	</div>
@endsection