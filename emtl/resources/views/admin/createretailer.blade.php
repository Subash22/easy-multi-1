@extends('admin.sidebar')

@section('bodycontent')
<br>
<div class="container-fluid">

	<!-- Displaying Error Messages-->
	@if ($errors->any())
	<div class="alert alert-danger alert-dismissible fade show" role="alert">		
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
		@foreach ($errors->all() as $error)
		<li>{{ $error }}</li>
		@endforeach
	</div>
	@endif

	<div class="card card-primary">
		<div class="card-header">
			<h3 class="card-title">Add Retailer</h3>
		</div>
		<!-- /.card-header -->
		<!-- form start -->


		<div class="card-body">	

			<form role="form" class="form-inline" method="post" action="{{ url('admin/user/add-retailer') }}">

				{{ csrf_field() }}					
				<div class="input-group mr-2">
					<label >Retailer Name</label>
					<input type="text" name="name" class="form-control ml-2" placeholder="Eg. ABC Traders" value="{{old('name')}}">
				</div>

				<div class="input-group mr-2">
					<label >Retailer Id</label>
					<input type="text" name="retailerid" class="form-control ml-2" placeholder="Eg. 1002345"  value="{{old('retailerid')}}">
				</div>



				<div class="form-group mr-2">
					<label>Dealer Id</label>
					<select class="form-control ml-2" name="dealer_id">
						<option>Choose Dealer ID</option>

						@foreach ($dealers as $dealer)
						<option value="{{$dealer->id}}">{{$dealer->name }} --{{$dealer->dealerid}}  </option>
						@endforeach
					</select>
				</div>




				<div class="mt-5 mb-5"></div>



				<div class="input-group mr-2">
					<label >Address</label>
					<input type="text" name="address" class="form-control ml-2" placeholder="Eg. Bharatpur" value="{{old('address')}}">
				</div>



				<div class="input-group mr-2">
					<label >Phone Number</label>
					<input type="text" name="phone" class="form-control ml-2" placeholder="Eg. 900010001" value="{{old('phone')}}">
				</div>	

				<div class="input-group mr-2">
					<label >Email</label>
					<input type="email" name="email" class="form-control ml-2" placeholder="Eg. 900010001" value="{{old('email')}}">
				</div>		

				<div class="ml-5 mt-3">

					<button type="submit" class="btn btn-primary">Add</button>

					<button type="submit" class="btn btn-warning">Reset</button>
				</div>


			</form>

		</div>
		<!-- /.card-body -->

	</div>





	<div class="card card-info">
		<div class="card-header">
			<h3 class="card-title font-weight-bold">List of Dealers</h3>
		</div>
		<div class="card-body">
			<div class="datatable-dashv1-list custom-datatable-overright">
				<div id="toolbar">
					<select class="form-control ml-2 dt-tb">
						<option value="">Export Basic</option>
						<option value="all">Export All</option>
						<option value="selected">Export Selected</option>
					</select>
				</div>
				<table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true"  data-resizable="true" data-cookie="true"
				data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">

				<thead>
					<tr>
						<th>SN</th>
						<th>Retailer Name</th>
						<th>Dealer Id</th>
						<th>Address</th>
						<th>Phone</th>
						<th>Email</th>
						<th>Remarks</th>
					</tr>
				</thead>
				<tbody>

					@foreach ($retailers as $retailer)
					<tr>
						<td>{{ $loop->iteration }}</td>
						<td>{{ $retailer->name }}</td>
						<td>{{ $retailer->dealer->name }}</td>
						<td>{{ $retailer->address }}</td>
						<td>{{ $retailer->phone }}</td>
						<td>{{ $retailer->email }}</td>
						
						<td>
							<a href="{{ route('retailerEdit',['id' => $retailer->id]) }}" class="btn btn-success btn-sm">Edit</a>

							<form class="form-inline d-inline" method="post" action="{{ route('retailerDelete', $retailer->id) }}" onclick="return confirm('Are you sure you want to delete this item?');"">
							@csrf
							<button type="submit" class="btn btn-danger btn-sm">Delete</button>
						</form>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
</div>



</div>





@endsection