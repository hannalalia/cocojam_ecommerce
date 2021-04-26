<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="https://kit.fontawesome.com/90de88b733.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="css/index.css">
  <title>Home</title>
  <style type="text/css">
    [v-cloak]{
      display: none;
    }
  </style>
</head>
<body>
<div id="app">
  <nav class="navbar-nav bg-success navbar-expand-sm">
  	<div class="container text-center clearfix">
      <div class="display-4 navbar-brand float-left text-light border border-light px-1 py-0 m-1">COCOJAM
      </div><!-- cocojam navbar brand -->
      <button class="navbar-toggler float-right" type="button" data-toggle="collapse" data-target="#toggleNav">
         <i class="fas fa-bars text-light navbar-toggler-icon"></i>
      </button>

      <div class="collapse navbar-collapse" id="toggleNav">
        <div class="navbar-nav ml-auto">
          <a class="nav-item nav-link text-light" href="index.php">Home</a>
          <a class="nav-item nav-link text-light" href="shop.php">Shop</a>
          <a class="nav-item nav-link text-light" href="contact.php">Contact Us</a>
          <a class="nav-item nav-link d-inline-block text-light" data-toggle="modal" data-target="#siginModal">
            <i class="fas fa-user d-none d-sm-inline-block text-light"></i>
            <span class="d-inline-block d-sm-none">Account</span>
          </a><!-- profile link -->
            <div class="modal fade" id="siginModal">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5>Account</h5>
                    <button type="button" class="close" data-dismiss="modal">
                      <span>&times;</span>
                    </button>
                  </div><!-- modal header -->
                  <form class="modal-body m-0">
                    <div class="form-group row">
                      <label class="col-4 col-sm-3 col-form-label" for="username">Username</label>
                      <input class="form-control col-7"type="text" name="username">
                    </div><!-- form group username -->
                    <div class="form-group row">
                      <label class="col-4 col-sm-3 col-form-label" for="password">Password</label>
                      <input class="form-control col-7"type="Password" name="password">
                    </div><!-- form group password -->
                    <div class="form-group row justify-content-center"> 
                      <input class="col-11 btn btn-success mt-2" type="Submit" name="" value="Log In">
                      <input class="col-11 btn btn-success mt-2" type="Submit" name="" value="Sign Up" >
                    </div><!-- form group buttons -->
                  </form><!-- modal body -->
                </div><!-- modal content -->
              </div><!-- modal dialog -->
            </div><!-- modal -->
        </div> <!-- navbar-nav -->
      </div> <!-- collapse navbar collapse -->
  	</div><!-- container -->
  </nav><!-- navbar-expand-sm -->
  <div class="nav bg-light" v-if="cart.length>0" v-cloak>
    <div class="container"> 
       <button class="btn float-right dropdown-toggle" id="cartDropdown" data-toggle="dropdown">
        <span>Cart</span>
        <span class="badge badge-danger badge-pill">{{cart.length}}</span>
      </button>
      <div class="dropdown-menu dropdown-menu-right">
        <div v-for="(item,index) in cart" :key="index">
          <div class="dropdown-item-text">
            <span class="badge badge-warning badge-pill">{{item.qty}}</span>
            <span>{{item.product.name}}</span>
            <b>{{item.qty * item.product.price | currency}}</b>
            <a href="#" @click.stop="deleteItem(index)" class="badge badge-danger">-</a>
          </div>    
        </div>
            <div class="container clearfix">
              <p class="float-left"><b>Total Quantity: </b><span>{{cartQty}}</span></p>
              <p class="float-right"><b>Total Amount: </b><span>{{cartTotal | currency}}</span></p><br><br>
              <a class="btn btn-success float-right" href="cart_overview.php">Checkout</a>
            </div>
      </div>
    </div>   
  </div><!-- cartnav -->
<!-- <h1>{{product.cocojam_small.name}}</h1>
<img :src="product.cocojam_small.image">
 -->