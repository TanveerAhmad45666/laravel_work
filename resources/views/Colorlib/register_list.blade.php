@extends('../Layouts/layout')



@section("banner")
@endsection
@section("side_nav")
@endsection
@section("body-content")

	<div class="container">
		<div class="row">
			<table class="table table-hover">
			    <thead>
			        <tr>
			            <th>First Name</th>
			            <th>Last Name</th>
			            <th>Email</th>
			            <th>Address</th>
			            <th>City</th>
			            <th>Country</th>
			            <th>Zip_Code</th>
			            <th>Phone Number</th>      
			        </tr>
			    </thead>
			    <tbody>
			    	@foreach($data as $data)
			    	 
			    		<tr >
				            <td>{{ $data->first_name}}</td>
				            <td>{{ $data->last_name}}</td>
				            <td>{{ $data->email}}</td>
				            <td>{{ $data->address}}</td>
				            <td>{{ $data->city}}</td>
				            <td>{{ $data->country}}</td>
				            <td>{{ $data->zip_code}}</td>
				            <td>{{ $data->telephone}}</td>
				            <td><button type="button"> Edit</button></td>
				            <td><button type="button">Delete</button></td>
			        </tr>

			    	@endforeach

			    </tbody>
			</table>
		</div>
	</div>	


@endsection 