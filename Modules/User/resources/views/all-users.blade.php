@extends('user::layouts.app')
@section('styles')
<!-- Datatable -->
<link href="{{url('vendor/datatables/css/jquery.dataTables.min.css')}}" rel="stylesheet">
<link rel="stylesheet" href="{{url('vendor/bootstrap-select/dist/css/bootstrap-select.min.css')}}">

@endsection




@section('contents')


<!--**********************************
            Content body start
        ***********************************-->
<div class="content-body">
	<!-- row -->
	<div class="container-fluid">

		<div class="row page-titles mx-0">
			<div class="col-sm-6 p-md-0">
				<div class="welcome-text">
					<h4>Users</h4>
				</div>
			</div>
			<div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="index.html">Home</a></li>
					<li class="breadcrumb-item active"><a href="javascript:void(0);">users</a></li>
					<li class="breadcrumb-item active"><a href="javascript:void(0);">All users</a></li>
				</ol>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-12">
				<ul class="nav nav-pills mb-3">
					<li class="nav-item"><a href="#list-view" data-toggle="tab"
							class="nav-link btn-primary mr-1 show active">List View</a></li>
					<li class="nav-item"><a href="#grid-view" data-toggle="tab" class="nav-link btn-primary">Grid
							View</a></li>
				</ul>
			</div>
			<div class="col-lg-12">
				<div class="row tab-content">
					<div id="list-view" class="tab-pane fade active show col-lg-12">

						<div class="card">
							<div class="card-header">
								<h4 class="card-title">All users </h4>
								<a href="{{url('add-user')}}" class="btn btn-primary">+ Add new</a>
							</div>
							<div class="card-body">
								<div class="table-responsive">
									<table id="example3" class="display" style="min-width: 845px">
										<thead>
											<tr>
												<th>#</th>
												<th>F.Name</th>
												<th>L.Name</th>
												<th>Email</th>
												<th>contact</th>
												<th>gender</th>
												<th>DOB</th>
												<th>Action</th>
											</tr>
										</thead>

										<tbody>
											@foreach($users as $user)
											<tr>
												<td><img src="{{url('/')}}"  class="rounded-circle" width="35" alt=""></td>
												{{-- <td> {{$loop->iteration}}</td> --}}
												<td>{{$user->firstname}}</td>
												<td>{{$user->lastname}}</td>
												<td>{{$user->email}}</td>
					
												<td>{{$user->phone}}</td>
												<td>
													{{$user->gender}}
													@if($user->gender=='1')
													Male
													@elseif($user->gender=='2')
													Female
													@elseif($user->gender=='3')
													Others
													@endif
												</td>
												
												<td>{{$user->dob}}</td>
												
												<td>
													<a href="{{url('edit-user/'.$user->id)}}"class="btn btn-sm btn-primary" ><i class="la la-pencil"></i></a>
													<a  class="btn btn-sm btn-danger" onClick="deleteItem(event,{{$user->id}})"><i class="la la-trash-o" ></i></a>
													<form id="delete-form_{{$user->id}}"   method="POST" action="{{url('delete-user/'.$user->id)}}" hidden>
														
													{{ csrf_field() }}
			

													<div class="form-group">
													<input type="submit" class="btn btn-sm btn-danger" value="Delete_user">

													</div>
													</form>

													<a href="{{url('view-profile/'.$user->id)}}" class="btn btn-info btn-lg"> User </a>
														
												</td>
												
											</tr>
											@endforeach


										</tbody>
										<tfoot>
											<tr>
												<th></th>
												<th>F.Name</th>
												<th>L.Name</th>
												<th>Email</th>
												
												<th>contact</th>
												<th>gender</th>
											
												<th>DOB</th>
												
												<th>Action</th>
											</tr>
										</tfoot>
									</table>
								</div>
							</div>
						</div>
					</div>

					
					<div id="grid-view" class="tab-pane fade col-lg-12">
						<div class="row">
							<div class="col-lg-4 col-md-6 col-sm-6 col-12">
								<div class="card card-profile">
									<div class="card-header justify-content-end pb-0">
										<div class="dropdown">
											<button class="btn btn-link" type="button" data-toggle="dropdown">
												<span class="dropdown-dots fs--1"></span>
											</button>
											<div class="dropdown-menu dropdown-menu-right border py-0">
												<div class="py-2">
													<a class="dropdown-item" href="javascript:void(0);">Edit</a>
													<a class="dropdown-item text-danger"
														href="javascript:void(0);">Delete</a>
												</div>
											</div>
										</div>
									</div>
									<div class="card-body pt-2">
										<div class="text-center">
											<div class="profile-photo">
												<img src="images/profile/small/pic2.jpg" width="100"
													class="img-fluid rounded-circle" alt="">
											</div>
											<h3 class="mt-4 mb-1">Alexander</h3>
											<p class="text-muted">M.COM., P.H.D.</p>
											<ul class="list-group mb-3 list-group-flush">
												<li class="list-group-item px-0 d-flex justify-content-between">
													<span class="mb-0">Gender :</span><strong>Male</strong>
												</li>
												<li class="list-group-item px-0 d-flex justify-content-between">
													<span class="mb-0">Phone No. :</span><strong>+01 123 456
														7890</strong>
												</li>
												<li class="list-group-item px-0 d-flex justify-content-between">
													<span class="mb-0">Email:</span><strong>info@example.com</strong>
												</li>
												<li class="list-group-item px-0 d-flex justify-content-between">
													<span class="mb-0">Address:</span><strong>#8901 Marmora
														Road</strong>
												</li>
											</ul>
											<a class="btn btn-outline-primary btn-rounded mt-3 px-4"
												href="user-profile.html">Read More</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-6 col-sm-6 col-12">
								<div class="card card-profile">
									<div class="card-header justify-content-end pb-0">
										<div class="dropdown">
											<button class="btn btn-link" type="button" data-toggle="dropdown">
												<span class="dropdown-dots fs--1"></span>
											</button>
											<div class="dropdown-menu dropdown-menu-right border py-0">
												<div class="py-2">
													<a class="dropdown-item" href="javascript:void(0);">Edit</a>
													<a class="dropdown-item text-danger"
														href="javascript:void(0);">Delete</a>
												</div>
											</div>
										</div>
									</div>
									<div class="card-body pt-2">
										<div class="text-center">
											<div class="profile-photo">
												<img src="images/profile/small/pic3.jpg" width="100"
													class="img-fluid rounded-circle" alt="">
											</div>
											<h3 class="mt-4 mb-1">Elizabeth</h3>
											<p class="text-muted">B.COM., M.COM.</p>
											<ul class="list-group mb-3 list-group-flush">
												<li class="list-group-item px-0 d-flex justify-content-between">
													<span class="mb-0">Gender :</span><strong>Female</strong>
												</li>
												<li class="list-group-item px-0 d-flex justify-content-between">
													<span class="mb-0">Phone No. :</span><strong>+01 123 456
														7890</strong>
												</li>
												<li class="list-group-item px-0 d-flex justify-content-between">
													<span class="mb-0">Email:</span><strong>info@example.com</strong>
												</li>
												<li class="list-group-item px-0 d-flex justify-content-between">
													<span class="mb-0">Address:</span><strong>#8901 Marmora
														Road</strong>
												</li>
											</ul>
											<a class="btn btn-outline-primary btn-rounded mt-3 px-4"
												href="user-profile.html">Read More</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-6 col-sm-6 col-12">
								<div class="card card-profile">
									<div class="card-header justify-content-end pb-0">
										<div class="dropdown">
											<button class="btn btn-link" type="button" data-toggle="dropdown">
												<span class="dropdown-dots fs--1"></span>
											</button>
											<div class="dropdown-menu dropdown-menu-right border py-0">
												<div class="py-2">
													<a class="dropdown-item" href="javascript:void(0);">Edit</a>
													<a class="dropdown-item text-danger"
														href="javascript:void(0);">Delete</a>
												</div>
											</div>
										</div>
									</div>
									<div class="card-body pt-2">
										<div class="text-center">
											<div class="profile-photo">
												<img src="images/profile/small/pic4.jpg" width="100"
													class="img-fluid rounded-circle" alt="">
											</div>
											<h3 class="mt-4 mb-1">Amelia</h3>
											<p class="text-muted">M.COM., P.H.D.</p>
											<ul class="list-group mb-3 list-group-flush">
												<li class="list-group-item px-0 d-flex justify-content-between">
													<span class="mb-0">Gender :</span><strong>Female</strong>
												</li>
												<li class="list-group-item px-0 d-flex justify-content-between">
													<span class="mb-0">Phone No. :</span><strong>+01 123 456
														7890</strong>
												</li>
												<li class="list-group-item px-0 d-flex justify-content-between">
													<span class="mb-0">Email:</span><strong>info@example.com</strong>
												</li>
												<li class="list-group-item px-0 d-flex justify-content-between">
													<span class="mb-0">Address:</span><strong>#8901 Marmora
														Road</strong>
												</li>
											</ul>
											<a class="btn btn-outline-primary btn-rounded mt-3 px-4"
												href="user-profile.html">Read More</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-6 col-sm-6 col-12">
								<div class="card card-profile">
									<div class="card-header justify-content-end pb-0">
										<div class="dropdown">
											<button class="btn btn-link" type="button" data-toggle="dropdown">
												<span class="dropdown-dots fs--1"></span>
											</button>
											<div class="dropdown-menu dropdown-menu-right border py-0">
												<div class="py-2">
													<a class="dropdown-item" href="javascript:void(0);">Edit</a>
													<a class="dropdown-item text-danger"
														href="javascript:void(0);">Delete</a>
												</div>
											</div>
										</div>
									</div>
									<div class="card-body pt-2">
										<div class="text-center">
											<div class="profile-photo">
												<img src="images/profile/small/pic5.jpg" width="100"
													class="img-fluid rounded-circle" alt="">
											</div>
											<h3 class="mt-4 mb-1">Charlotte</h3>
											<p class="text-muted">B.COM., M.COM.</p>
											<ul class="list-group mb-3 list-group-flush">
												<li class="list-group-item px-0 d-flex justify-content-between">
													<span class="mb-0">Gender :</span><strong>Female</strong>
												</li>
												<li class="list-group-item px-0 d-flex justify-content-between">
													<span class="mb-0">Phone No. :</span><strong>+01 123 456
														7890</strong>
												</li>
												<li class="list-group-item px-0 d-flex justify-content-between">
													<span class="mb-0">Email:</span><strong>info@example.com</strong>
												</li>
												<li class="list-group-item px-0 d-flex justify-content-between">
													<span class="mb-0">Address:</span><strong>#8901 Marmora
														Road</strong>
												</li>
											</ul>
											<a class="btn btn-outline-primary btn-rounded mt-3 px-4"
												href="user-profile.html">Read More</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-6 col-sm-6 col-12">
								<div class="card card-profile">
									<div class="card-header justify-content-end pb-0">
										<div class="dropdown">
											<button class="btn btn-link" type="button" data-toggle="dropdown">
												<span class="dropdown-dots fs--1"></span>
											</button>
											<div class="dropdown-menu dropdown-menu-right border py-0">
												<div class="py-2">
													<a class="dropdown-item" href="javascript:void(0);">Edit</a>
													<a class="dropdown-item text-danger"
														href="javascript:void(0);">Delete</a>
												</div>
											</div>
										</div>
									</div>
									<div class="card-body pt-2">
										<div class="text-center">
											<div class="profile-photo">
												<img src="images/profile/small/pic6.jpg" width="100"
													class="img-fluid rounded-circle" alt="">
											</div>
											<h3 class="mt-4 mb-1">Isabella</h3>
											<p class="text-muted">B.A, B.C.A</p>
											<ul class="list-group mb-3 list-group-flush">
												<li class="list-group-item px-0 d-flex justify-content-between">
													<span class="mb-0">Gender :</span><strong>Female</strong>
												</li>
												<li class="list-group-item px-0 d-flex justify-content-between">
													<span class="mb-0">Phone No. :</span><strong>+01 123 456
														7890</strong>
												</li>
												<li class="list-group-item px-0 d-flex justify-content-between">
													<span class="mb-0">Email:</span><strong>info@example.com</strong>
												</li>
												<li class="list-group-item px-0 d-flex justify-content-between">
													<span class="mb-0">Address:</span><strong>#8901 Marmora
														Road</strong>
												</li>
											</ul>
											<a class="btn btn-outline-primary btn-rounded mt-3 px-4"
												href="user-profile.html">Read More</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-6 col-sm-6 col-12">
								<div class="card card-profile">
									<div class="card-header justify-content-end pb-0">
										<div class="dropdown">
											<button class="btn btn-link" type="button" data-toggle="dropdown">
												<span class="dropdown-dots fs--1"></span>
											</button>
											<div class="dropdown-menu dropdown-menu-right border py-0">
												<div class="py-2">
													<a class="dropdown-item" href="javascript:void(0);">Edit</a>
													<a class="dropdown-item text-danger"
														href="javascript:void(0);">Delete</a>
												</div>
											</div>
										</div>
									</div>
									<div class="card-body pt-2">
										<div class="text-center">
											<div class="profile-photo">
												<img src="images/profile/small/pic7.jpg" width="100"
													class="img-fluid rounded-circle" alt="">
											</div>
											<h3 class="mt-4 mb-1">Sebastian</h3>
											<p class="text-muted">M.COM., P.H.D.</p>
											<ul class="list-group mb-3 list-group-flush">
												<li class="list-group-item px-0 d-flex justify-content-between">
													<span class="mb-0">Gender :</span><strong>Male</strong>
												</li>
												<li class="list-group-item px-0 d-flex justify-content-between">
													<span class="mb-0">Phone No. :</span><strong>+01 123 456
														7890</strong>
												</li>
												<li class="list-group-item px-0 d-flex justify-content-between">
													<span class="mb-0">Email:</span><strong>info@example.com</strong>
												</li>
												<li class="list-group-item px-0 d-flex justify-content-between">
													<span class="mb-0">Address:</span><strong>#8901 Marmora
														Road</strong>
												</li>
											</ul>
											<a class="btn btn-outline-primary btn-rounded mt-3 px-4"
												href="user-profile.html">Read More</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-6 col-sm-6 col-12">
								<div class="card card-profile">
									<div class="card-header justify-content-end pb-0">
										<div class="dropdown">
											<button class="btn btn-link" type="button" data-toggle="dropdown">
												<span class="dropdown-dots fs--1"></span>
											</button>
											<div class="dropdown-menu dropdown-menu-right border py-0">
												<div class="py-2">
													<a class="dropdown-item" href="javascript:void(0);">Edit</a>
													<a class="dropdown-item text-danger"
														href="javascript:void(0);">Delete</a>
												</div>
											</div>
										</div>
									</div>
									<div class="card-body pt-2">
										<div class="text-center">
											<div class="profile-photo">
												<img src="images/profile/small/pic8.jpg" width="100"
													class="img-fluid rounded-circle" alt="">
											</div>
											<h3 class="mt-4 mb-1">Olivia</h3>
											<p class="text-muted">B.COM., M.COM.</p>
											<ul class="list-group mb-3 list-group-flush">
												<li class="list-group-item px-0 d-flex justify-content-between">
													<span class="mb-0">Gender :</span><strong>Female</strong>
												</li>
												<li class="list-group-item px-0 d-flex justify-content-between">
													<span class="mb-0">Phone No. :</span><strong>+01 123 456
														7890</strong>
												</li>
												<li class="list-group-item px-0 d-flex justify-content-between">
													<span class="mb-0">Email:</span><strong>info@example.com</strong>
												</li>
												<li class="list-group-item px-0 d-flex justify-content-between">
													<span class="mb-0">Address:</span><strong>#8901 Marmora
														Road</strong>
												</li>
											</ul>
											<a class="btn btn-outline-primary btn-rounded mt-3 px-4"
												href="user-profile.html">Read More</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-6 col-sm-6 col-12">
								<div class="card card-profile">
									<div class="card-header justify-content-end pb-0">
										<div class="dropdown">
											<button class="btn btn-link" type="button" data-toggle="dropdown">
												<span class="dropdown-dots fs--1"></span>
											</button>
											<div class="dropdown-menu dropdown-menu-right border py-0">
												<div class="py-2">
													<a class="dropdown-item" href="javascript:void(0);">Edit</a>
													<a class="dropdown-item text-danger"
														href="javascript:void(0);">Delete</a>
												</div>
											</div>
										</div>
									</div>
									<div class="card-body pt-2">
										<div class="text-center">
											<div class="profile-photo">
												<img src="images/profile/small/pic9.jpg" width="100"
													class="img-fluid rounded-circle" alt="">
											</div>
											<h3 class="mt-4 mb-1">Emma</h3>
											<p class="text-muted">B.A, B.C.A</p>
											<ul class="list-group mb-3 list-group-flush">
												<li class="list-group-item px-0 d-flex justify-content-between">
													<span class="mb-0">Gender :</span><strong>Female</strong>
												</li>
												<li class="list-group-item px-0 d-flex justify-content-between">
													<span class="mb-0">Phone No. :</span><strong>+01 123 456
														7890</strong>
												</li>
												<li class="list-group-item px-0 d-flex justify-content-between">
													<span class="mb-0">Email:</span><strong>info@example.com</strong>
												</li>
												<li class="list-group-item px-0 d-flex justify-content-between">
													<span class="mb-0">Address:</span><strong>#8901 Marmora
														Road</strong>
												</li>
											</ul>
											<a class="btn btn-outline-primary btn-rounded mt-3 px-4"
												href="user-profile.html">Read More</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-6 col-sm-6 col-12">
								<div class="card card-profile">
									<div class="card-header justify-content-end pb-0">
										<div class="dropdown">
											<button class="btn btn-link" type="button" data-toggle="dropdown">
												<span class="dropdown-dots fs--1"></span>
											</button>
											<div class="dropdown-menu dropdown-menu-right border py-0">
												<div class="py-2">
													<a class="dropdown-item" href="javascript:void(0);">Edit</a>
													<a class="dropdown-item text-danger"
														href="javascript:void(0);">Delete</a>
												</div>
											</div>
										</div>
									</div>
									<div class="card-body pt-2">
										<div class="text-center">
											<div class="profile-photo">
												<img src="images/profile/small/pic10.jpg" width="100"
													class="img-fluid rounded-circle" alt="">
											</div>
											<h3 class="mt-4 mb-1">Jackson</h3>
											<p class="text-muted">M.COM., P.H.D.</p>
											<ul class="list-group mb-3 list-group-flush">
												<li class="list-group-item px-0 d-flex justify-content-between">
													<span class="mb-0">Gender :</span><strong>Male</strong>
												</li>
												<li class="list-group-item px-0 d-flex justify-content-between">
													<span class="mb-0">Phone No. :</span><strong>+01 123 456
														7890</strong>
												</li>
												<li class="list-group-item px-0 d-flex justify-content-between">
													<span class="mb-0">Email:</span><strong>info@example.com</strong>
												</li>
												<li class="list-group-item px-0 d-flex justify-content-between">
													<span class="mb-0">Address:</span><strong>#8901 Marmora
														Road</strong>
												</li>
											</ul>
											<a class="btn btn-outline-primary btn-rounded mt-3 px-4"
												href="user-profile.html">Read More</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
</div>
<!--**********************************
            Content body end
        ***********************************-->




<!--**********************************
           Support ticket button start
        ***********************************-->

<!--**********************************
           Support ticket button end
        ***********************************-->


</div>
@endsection

@section('scripts')
<script src="{{url('vendor/datatables/js/jquery.dataTables.min.js')}}"></script>
<script src="{{url('js/plugins-init/datatables.init.js')}}"></script>
<script src="{{url('vendor/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>

<script>
    function deleteItem(event, item_id) {
        let id = item_id;
        event.preventDefault();
		
			Swal.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!"
        }).then((result) => {
            if (result.isConfirmed) {
				
                document.getElementById('delete-form_'+id).submit();

                Swal.fire({
                    title: "Deleted!",
                    text: "Your file has been deleted.",
                    icon: "success"
                });
            }
        });
			
		
        
    }

</script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endsection