@extends('layouts.app')
@section('content')
	
	<div class="row mt-5">
		<div class="col-2"></div>
		<div class="col-8">
			<form class="form" action="{{ route('contact-form-submit') }}" method="post">
				@csrf
			    <label for="name">Name</label>
			    <input type="text" class="form-control" id="name" name="name" placeholder="Your Name">
			    <label for="email">email</label>
			    <input type="email" class="form-control" id="email" name="email" placeholder="Your mail address">
			    <label for="message">Message</label>
			    <textarea type="text" class="form-control" id="message" name="message" placeholder="Your Message" rows="5"></textarea> <br>
			    <button type="submit" class="btn btn-primary btn-block">Send Message</button>
			</form>
		</div>
		<div class="col-2"></div>
	</div>
	
@endsection