@extends('layouts.app')
@section('content')
	
	<table class="table">
	  <thead>
	    <tr>
	      <th scope="col">Serial</th>
	      <th scope="col">Name</th>
	      <th scope="col">Email</th>
	      <th scope="col">Message</th>
	    </tr>
	  </thead>
	  <tbody>
	  	<?php $i=1; ?>
	  	@foreach($messages as $message)
		    <tr>	
		      <th><?=$i?></th>
		      <td>{{ $message->name }}</td>
		      <td>{{ $message->email }}</td>
		      <td>{{ $message->message }}</td>
		    </tr>
		<?php $i++;?>
	    @endforeach
	  </tbody>
	</table>
	
@endsection