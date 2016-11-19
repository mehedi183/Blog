@extends('layouts.master')
@section('title', 'Contact')
@section('content')
	<div class="row">
		<h3>Contact Me</h3>
		<hr>
		<div class="col-md-12">
			<form>
				<div class="form-group">
					<label for="email">Email address: </label>
					<input type="text" class="form-control" id="email" placeholder="Email">
				</div>
				<div class="form-group">
					<label for="subject">Subject: </label>
					<input type="text" class="form-control" id="subject" placeholder="subject">
				</div>
				<div class="form-group">
					<label for="message">Message: </label>
					<textarea class="form-control" id="message" rows="5" placeholder="Write your message here..."></textarea>
				</div>
				
				<button type="submit" class="btn btn-success" id="">Send Message</button>
			</form>
		</div>
	</div>
@endsection