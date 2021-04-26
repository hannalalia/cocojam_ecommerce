<?php include('header.php')?>
<div class="container">
<!-- 	<div class="row row-cols-1 row-cols-md-2">
		<div class="col">
			<div class="card shadow-lg m-3" >
				<img class="card-img-top img-fluid" src="images/cocojam.jpg">
				<section class="card-body">
					<dt class="card-title">{{product.cocojam_small.name}}</dt>
					<dd class="card-subtitle">{{product.cocojam_small.description}}</dd>
					<h1>${{product.cocojam_small.price}}</h1>
					<input class="btn btn-outline-success float-right" type="submit" name="" value="Add to Cart">
				</section>
			</div>
		</div>
		<div class="col">
			<div class="card shadow-lg m-3" >
				<img class="card-img-top img-fluid" src="images/cocojam.jpg">
				<section class="card-body">
					<dt class="card-title">{{product.cocojam_large.name}}</dt>
					<dd class="card-subtitle">{{product.cocojam_large.description}}</dd>
					<h1>${{product.cocojam_large.price}}</h1>
					<input class="btn btn-outline-success float-right" type="submit" name="" value="Add to Cart">
				</section>
			</div>
		</div>
	</div>
</div>
 -->

<div class="row row-cols-1 row-cols-md-2">
	<div class="col" v-for="item in product">
		<div class="card shadow-lg m-3">
			<img class="card-img-top img-fluid" src="images/cocojam.jpg">
			<section class="card-body">
				<dt class="card-title">{{item.name}}</dt>
				<dd class="card-subtitle">{{item.description}}</dd>
				<h1>{{item.price | currency}}</h1>
				<input class="btn btn-outline-success float-right" type="submit" name="" value="Add to Cart" @click="addItem(item)">
			</section>
		</div>
	</div>
</div>
<?php include('footer.php')?>