<?php include('header.php'); ?>
<style type="text/css">
	.breadcrumb-item+.breadcrumb-item::before{
		content: '>'
	}
	.breadcrumb-item{
		text-align: center;
	}
</style>
<div class="container">
<!-- 	<h1 class="display-1">Testing Bootstrap Components</h1>
 -->	<!-- <div class="breadcrumb mt-5">
		<a class="breadcrumb-item text-decoration-none active" href="#">My Cart</a>
		<a class="breadcrumb-item text-decoration-none" href="#">Account</a>
		<a class="breadcrumb-item text-decoration-none" href="#">Payment</a>
		<a class="breadcrumb-item text-decoration-none" href="#">Complete</a>
		<input class="ml-auto form-control w-25" type="text" name="">
	</div> -->
<!-- 	<nav class="pagination justify-content-center mt-5">
		<li class="page-item"><a class="page-link" href="">Previus</a></li>
		<li class="page-item"><a class="page-link" href="">Next</a></li>
		<li class="page-item"><a class="page-link" href="">Payment Method</a></li>
		<li class="page-item"><a class="page-link" href="">Complete</a></li>
	</nav>
 -->
	<h1>sample data only/static</h1>

	<table class="table mt-5 table-responsive table-hover table-borderless text-center">
		<thead class="thead-light">
			<tr>
				<th>Order Number</th>
				<th>Product Name</th>
				<th>Description</th>
				<th>Quantity</th>
				<th>Price</th>
				<th></th>
			</tr>
		</thead>
		<tr>
			<td>1</td>
			<td>Tropical's Best Homemade Cocojam (Small)</td>
			<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</td>
			<td>2</td>
			<td>$500.00</td>
			<td><button class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="top" title="Remove"><span>&times;</span></button></td>
		</tr>
		<tr>
			<td>2</td>
			<td>Tropical's Best Homemade Cocojam (Large)</td>
			<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</td>
			<td>2</td>
			<td>$500.00</td>
			<td><button class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="top" title="Remove"><span>&times;</span></button></td>
		</tr>
		<tr class="thead-light">
			<th>Total:</th>
			<th></th>
			<th></th>
			<th>4</th>
			<th>$2000.00</th>
			<th></th>
		</tr>
	</table>

	<div class="progress my-4">
		<div class="progress-bar progress-bar-striped progress-bar-animated w-25 bg-warning">25%</div>
	</div>

	<div class="d-flex justify-content-between flex-wrap">
		<button class="btn btn-success">Previous</button>
		<a class="text-dark" href="">Skip</a>
		<button class="btn btn-success">Next</button>
	</div>
</div>

<?php include('footer.php')?>
<script type="text/javascript">
	$(function() {
		$('[data-toggle="tooltip"]').tooltip();
	});
</script>