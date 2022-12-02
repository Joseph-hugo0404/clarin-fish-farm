@extends('main')

@section('content')
<h2 class="mt-3">Stock Management</h2>
<nav aria-label="breadcrumb">
  	<ol class="breadcrumb">
    	<li class="breadcrumb-item"><a href="/stock">Stock</a></li>
    	<li class="breadcrumb-item active"></li>	
  	</ol>
</nav>
<h2 class="text-left" style="font-size: 15px">In this table, all the stocks of Fish appear in here!</h2>
<hr>

<div class="mt-4 mb-4">
	@if(session()->has('success'))
	<div class="alert alert-success">
		{{ session()->get('success') }}
	</div>
	@endif
	<div class="card">
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered table-hover no-footer" id="stock_table">
					<thead class="table-primary">
						<tr> 
							<th>Tilapia Stocks</th>
							<th>Ornamental Stocks</th>
							
							<th>Carp Stocks</th>

							<th>Prawn Fish Stocks</th>

							<th>Cat Fish Stocks</th>
							<th>Date Added</th>

							<th>Action</th>
						</tr>
					</thead>
					<tbody></tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<script>
$(function(){
	var table = $('#stock_table').DataTable({
		processing:true,
		serverSide:true,
		seaching:false,
		paging:false,
		info:false,
		dom:'lrtip',
		ajax:"{{ route('stock.fetch_all') }}",
		columns:[
			
			{
				data:'tilapia_stock',
				name:'tilapia_stock'
			},
			
			{
				data:'ornamental_stock',
				name:'ornamental_stock'
			},
			
			{
				data:'carp_stock',
				name:'carp_stock'
			},
			
			{
				data:'beetle_fish_stock',
				name:'beetle_fish_stock'
			},
			
			{
				data:'cat_fish_stock',
				name:'cat_fish_stock'
			},
			
			{
				data:'date_added',
				name:'date_added'
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
			window.location.href = "stock/delete/" + id;
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