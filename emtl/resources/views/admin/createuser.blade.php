@extends('admin.sidebar')

@section('bodycontent')
<br>
<div class="container-fluid">

	<div class="row">

		<div class="col-lg-8">
			<div class="card card-primary">
				<div class="card-header">
					<h3 class="card-title">Add Dealer</h3>
				</div>
				<!-- /.card-header -->
				<!-- form start -->
				<form role="form">
					<div class="card-body">

							<div class="form-group">
							<label>Select User Type</label>
							<select class="form-control">
								<option>option 1</option>
								<option>option 2</option>
								<option>option 3</option>
								<option>option 4</option>
								<option>option 5</option>
							</select>
						</div>



						<div class="form-group">
							<label>Choose</label>
							<select class="form-control">
								<option>option 1</option>
								<option>option 2</option>
								<option>option 3</option>
								<option>option 4</option>
								<option>option 5</option>
							</select>
						</div>

						
						<div class="form-group">
							<label for="exampleInputEmail1">Username</label>
							<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Username">
						</div>

						<div class="form-group">
							<label for="exampleInputPassword1">Password</label>
							<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
						</div>

						<div class="form-group">
							<label for="exampleInputPassword1">Re-type Password</label>
							<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
						</div>

					




						<button type="submit" class="btn btn-primary">Create</button>

						<button type="submit" class="btn btn-warning">Reset</button>

					</div>
					<!-- /.card-body -->

				</form>
			</div>
		</div>

		<div class="col-lg-4"></div>

	</div>




	<div class="card">
		<div class="card-header">
			<h3 class="card-title">DataTable with default features</h3>
		</div>
		<!-- /.card-header -->
		<div class="card-body">
			<div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
				<div class="row">
					<div class="col-sm-12 col-md-6">
						<div class="dataTables_length" id="example1_length">
							<label>
								Show 
								<select name="example1_length" aria-controls="example1" class="custom-select custom-select-sm form-control form-control-sm">
									<option value="10">10</option>
									<option value="25">25</option>
									<option value="50">50</option>
									<option value="100">100</option>
								</select>
								entries
							</label>
						</div>
					</div>
					<div class="col-sm-12 col-md-6">
						<div id="example1_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="example1"></label></div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<table id="example1" class="table table-bordered table-striped dataTable dtr-inline" role="grid" aria-describedby="example1_info">
							<thead>
								<tr role="row">
									<th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Rendering engine</th>
									<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Browser</th>
									<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Platform(s)</th>
									<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Engine version</th>
									<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">CSS grade</th>
								</tr>
							</thead>
							<tbody>
								<tr role="row" class="odd">
									<td tabindex="0" class="sorting_1">Gecko</td>
									<td>Firefox 1.0</td>
									<td>Win 98+ / OSX.2+</td>
									<td>1.7</td>
									<td>A</td>
								</tr>
								<tr role="row" class="even">
									<td tabindex="0" class="sorting_1">Gecko</td>
									<td>Firefox 1.5</td>
									<td>Win 98+ / OSX.2+</td>
									<td>1.8</td>
									<td>A</td>
								</tr>
								<tr role="row" class="odd">
									<td tabindex="0" class="sorting_1">Gecko</td>
									<td>Firefox 2.0</td>
									<td>Win 98+ / OSX.2+</td>
									<td>1.8</td>
									<td>A</td>
								</tr>
								<tr role="row" class="even">
									<td tabindex="0" class="sorting_1">Gecko</td>
									<td>Firefox 3.0</td>
									<td>Win 2k+ / OSX.3+</td>
									<td>1.9</td>
									<td>A</td>
								</tr>
								<tr role="row" class="odd">
									<td class="sorting_1" tabindex="0">Gecko</td>
									<td>Camino 1.0</td>
									<td>OSX.2+</td>
									<td>1.8</td>
									<td>A</td>
								</tr>
								<tr role="row" class="even">
									<td class="sorting_1" tabindex="0">Gecko</td>
									<td>Camino 1.5</td>
									<td>OSX.3+</td>
									<td>1.8</td>
									<td>A</td>
								</tr>
								<tr role="row" class="odd">
									<td class="sorting_1" tabindex="0">Gecko</td>
									<td>Netscape 7.2</td>
									<td>Win 95+ / Mac OS 8.6-9.2</td>
									<td>1.7</td>
									<td>A</td>
								</tr>
								<tr role="row" class="even">
									<td class="sorting_1" tabindex="0">Gecko</td>
									<td>Netscape Browser 8</td>
									<td>Win 98SE+</td>
									<td>1.7</td>
									<td>A</td>
								</tr>
								<tr role="row" class="odd">
									<td class="sorting_1" tabindex="0">Gecko</td>
									<td>Netscape Navigator 9</td>
									<td>Win 98+ / OSX.2+</td>
									<td>1.8</td>
									<td>A</td>
								</tr>
								<tr role="row" class="even">
									<td class="sorting_1" tabindex="0">Gecko</td>
									<td>Mozilla 1.0</td>
									<td>Win 95+ / OSX.1+</td>
									<td>1</td>
									<td>A</td>
								</tr>
							</tbody>
							<tfoot>
								<tr>
									<th rowspan="1" colspan="1">Rendering engine</th>
									<th rowspan="1" colspan="1">Browser</th>
									<th rowspan="1" colspan="1">Platform(s)</th>
									<th rowspan="1" colspan="1">Engine version</th>
									<th rowspan="1" colspan="1">CSS grade</th>
								</tr>
							</tfoot>
						</table>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12 col-md-5">
						<div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div>
					</div>
					<div class="col-sm-12 col-md-7">
						<div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
							<ul class="pagination">
								<li class="paginate_button page-item previous disabled" id="example1_previous"><a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>
								<li class="paginate_button page-item active"><a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
								<li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
								<li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="3" tabindex="0" class="page-link">3</a></li>
								<li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="4" tabindex="0" class="page-link">4</a></li>
								<li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="5" tabindex="0" class="page-link">5</a></li>
								<li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="6" tabindex="0" class="page-link">6</a></li>
								<li class="paginate_button page-item next" id="example1_next"><a href="#" aria-controls="example1" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /.card-body -->
	</div>

	
</div>





@endsection