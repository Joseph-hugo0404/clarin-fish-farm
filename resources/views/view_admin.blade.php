@extends('main')
@section('content')

<h2 class="mt-3">User Management</h2>
<nav aria-label="breadcrumb">
  	<ol class="breadcrumb">
    	<li class="breadcrumb-item active">Users' List</li>	
  	</ol>
</nav>

<div class="mt-4 mb-4">
	@if(session()->has('success'))
	<div class="alert alert-success">
		{{ session()->get('success') }}
	</div>
	@endif
		<h2 class="text-left" style="font-size: 15px">In this table, all the users that able to log in appear here!</h2>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered table-hover " id="view_admin_table">
					<thead class="table-primary">
						<tr>
                            
							<th>Name</th>
							<th>Email</th>
						</tr>
					</thead>
					<tbody>
						@if($data)
						@foreach ($data as $d)
						<tr>
							<td>{{$d->name ?? 'name'}}</td>
							<td>{{$d->email ?? 'email'}}</td>
						</tr>
						@endforeach
						@endif
					</tbody>
				</table>

			
			</div>
		</div>
</div>
<script>
</script>
@endsection