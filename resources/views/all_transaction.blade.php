@extends('page')

@section('content')
<h2 class="mt-3">Transaction Management</h2>
<nav aria-label="breadcrumb">
  	<ol class="breadcrumb">
    	<li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
    	<li class="breadcrumb-item active">Transaction List</li>	
  	</ol>
</nav>

<div class="mt-4 mb-4">
	@if(session()->has('success'))
	<div class="alert alert-success">
		{{ session()->get('success') }}
	</div>
	@endif
	<div class="card">
		<div class="card-header">
			<div class="row">
				<div class="col col-md-6">List of Transaction</div>
				<div class="col col-md-6">
					<a href="{{ route('all_transaction.add') }}" class="btn btn-success btn-sm float-end"><i class="fa fa-plus" aria-hidden="true"></i> Add New Transaction</a>
					<a href="{{ route('all_transaction.print') }}" class="btnprn btn btn-green btn-sm float-end " style="margin-right: 2%"><i class="fa fa-print" aria-hidden="true"></i> Print</a>
					
				</div>
			</div>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-striped table-bordered" id="all_transaction_table">
					<thead>
						<tr>
							<th>Name</th>
							<th>Address</th>
                            <th>Transaction Date</th>
							<th>Tilapia</th>
							<th>Ornamental</th>
							<th>Carp</th>
							<th>Beetle Fish</th>
							<th>Cat Fish</th>
							
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>



<script>
$(function(){

	var table = $('#all_transaction_table').DataTable({
		processing:true,
		serverSide:true,
		ajax:"{{ route('all_transaction.fetchall') }}",
		columns:[
			{
				data:'name',
				name:'name'
			},
			{
				data:'address',
				name:'address'
			},
            {
				data:'transaction_date',
				name:'transaction_date'
			},
			{
				data:'tilapia',
				name:'tilapia'
			},
			{
				data:'ornamental',
				name:'ornamental'
			},
			{
				data:'carp',
				name:'carp'
			},
			{
				data:'beetle_fish',
				name:'beetle_fish'
			},
			{
				data:'cat_fish',
				name:'cat_fish'
			},
			
			{
				data:'action',
				name:'action',
				orderable:false
			}
		]
	});

	$(document).on('click', '.delete', function(){

		var id = $(this).data('id');

		if(confirm("Are you sure you want to remove it?"))
		{
			window.location.href = "/all_transaction/delete/" + id;
		}

	});

})
</script>
	<script type="text/javascript">
		$(document).ready(function(){
		$('.btnprn').printPage();
		});
	</script>
	
@endsection