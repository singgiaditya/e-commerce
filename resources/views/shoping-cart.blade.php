<!DOCTYPE html>
<html lang="en">
<head>
	<title>Shoping Cart</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="{{ asset("/assets/images/icons/favicon.png") }}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset("/assets/vendor/bootstrap/css/bootstrap.min.css") }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset("/assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css") }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset("/assets/fonts/iconic/css/material-design-iconic-font.min.css") }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset("/assets/fonts/linearicons-v1.0.0/icon-font.min.css") }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset("/assets/vendor/animate/animate.css") }}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{ asset("/assets/vendor/css-hamburgers/hamburgers.min.css") }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset("/assets/vendor/animsition/css/animsition.min.css") }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset("/assets/vendor/select2/select2.min.css") }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset("/assets/vendor/perfect-scrollbar/perfect-scrollbar.css") }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset("/assets/css/util.css") }}">
	<link rel="stylesheet" type="text/css" href="{{ asset("/assets/css/main.css") }}">
<!--===============================================================================================-->
</head>
<body class="animsition">
	
	<!-- Header -->
	<header class="header-v4">
		<!-- Header desktop -->
		<div class="container-menu-desktop">
			<!-- Topbar -->
			<div class="top-bar">
				<div class="content-topbar flex-sb-m h-full container">
					<div class="left-top-bar">
						Free shipping everyday
					</div>

					<div class="right-top-bar flex-w h-full">

						<a href="profile" class="flex-c-m trans-04 p-lr-25">
							My Account
						</a>

					</div>
				</div>
			</div>

			<div class="wrap-menu-desktop how-shadow1">
				<nav class="limiter-menu-desktop container">
					
					<!-- Logo desktop -->		
					<a href="{{ url("#") }}" class="logo">
						<img src="{{ asset("/assets/images/icons/logo-01.png") }}" alt="IMG-LOGO">
					</a>

					<!-- Menu desktop -->
					<div class="menu-desktop">
						<ul class="main-menu">
							<li>
								<a href="{{Route('/')}}">Home</a>
							</li>

							<li>
								<a href="{{ url("product.html") }}">Shop</a>
							</li>
						</ul>
					</div>	

					<!-- Icon header -->
					<div class="wrap-icon-header flex-w flex-r-m">
						<div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-modal-search">
							<i class="zmdi zmdi-search"></i>
						</div>
					</div>
				</nav>
			</div>	
		</div>

		<!-- Header Mobile -->
		<div class="wrap-header-mobile">
			<!-- Logo moblie -->		
			<div class="logo-mobile">
				<a href="{{ url("index.html") }}"><img src="{{ asset("/assets/images/icons/logo-01.png") }}" alt="IMG-LOGO"></a>
			</div>

			<!-- Icon header -->
			<div class="wrap-icon-header flex-w flex-r-m m-r-15">
				<div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 js-show-modal-search">
					<i class="zmdi zmdi-search"></i>
				</div>
			</div>

			<!-- Button show menu -->
			<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
			</div>
		</div>


		<!-- Menu Mobile -->
		<div class="menu-mobile">
			<ul class="topbar-mobile">
				<li>
					<div class="left-top-bar">
						Free shipping everyday
					</div>
				</li>
			</ul>

			<ul class="main-menu-m">
				<li>
					<a href="{{ route('/') }}">Home</a>
					<span class="arrow-main-menu-m">
						<i class="fa fa-angle-right" aria-hidden="true"></i>
					</span>
				</li>

				<li>
					<a href="#">Shop</a>
				</li>

				<li>
					<a href="profile">Shop</a>
				</li>
			</ul>
		</div>

		<!-- Modal Search -->
		<div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
			<div class="container-search-header">
				<button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
					<img src="{{ asset("/assets/images/icons/icon-close2.png") }}" alt="CLOSE">
				</button>

				<form class="wrap-search-header flex-w p-l-15">
					<button class="flex-c-m trans-04">
						<i class="zmdi zmdi-search"></i>
					</button>
					<input class="plh3" type="text" name="search" placeholder="Search...">
				</form>
			</div>
		</div>
	</header>

	<!-- Cart -->
	<div class="wrap-header-cart js-panel-cart">
		<div class="s-full js-hide-cart"></div>

		<div class="header-cart flex-col-l p-l-65 p-r-25">
			<div class="header-cart-title flex-w flex-sb-m p-b-8">
				<span class="mtext-103 cl2">
					Your Cart
				</span>

				<div class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-cart">
					<i class="zmdi zmdi-close"></i>
				</div>
			</div>
		</div>
	</div>


	<!-- breadcrumb -->
	<div class="container">
		<div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
			<a href="{{ url("index.html") }}" class="stext-109 cl8 hov-cl1 trans-04">
				Home
				<i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
			</a>

			<span class="stext-109 cl4">
				Shoping Cart
			</span>
		</div>
	</div>
		

	<!-- Shoping Cart -->
		<div class="container">
			<div class="row">
				<div class="col-lg-10 col-xl-7 m-lr-auto m-b-50">
					<div class="m-l-25 m-r--38 m-lr-0-xl">
						<div class="wrap-table-shopping-cart">
							<table class="table-shopping-cart">
								<tr class="table_head">
									<th class="column-1">Product</th>
									<th class="column-2"></th>
									<th class="column-3">Price</th>
									<th class="column-4">Quantity</th>
									<th class="column-5">Total</th>
								</tr>
								@php
									$totalPrice = 0;
								@endphp
								@foreach($cartItems as $item)
								@foreach($item->products as $product)
								@php
									$totalPrice += $product->price * $item->quantity
								@endphp
								<tr class="table_row">
								<input id="product_id" name="product_id" type="hidden" value="{{$product->id}}">
									<td class="column-1">
										<div class="how-itemcart1 js-delete-item">
											<img src="{{ asset('storage/images/' . $product->picture) }}" alt="IMG">
										</div>
									</td>
									<td class="column-2" id="product_title">{{$product->title}}</td>
									<td class="column-3">Rp.{{number_format($product->price, 2, ',', '.')}}</td>
									<td class="column-4">
										<div class="wrap-num-product flex-w m-l-auto m-r-0">
											<div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m quantity-button-down">
												<i class="fs-16 zmdi zmdi-minus"></i>
											</div>

											<input class="mtext-104 cl3 txt-center num-product" type="number" name="num-product1" value="{{$item->quantity}}">

											<div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m quantity-button-up">
												<i class="fs-16 zmdi zmdi-plus"></i>
											</div>
										</div>
									</td>
									<td class="column-5">Rp.{{number_format($product->price * $item->quantity, 2, ',', '.')}}</td>
								</tr>
								@endforeach
								@endforeach
							</table>
						</div>
					</div>
				</div>

				<div class="col-sm-10 col-lg-7 col-xl-5 m-lr-auto m-b-50">
					<div class="bor10 p-lr-40 p-t-30 p-b-40 m-l-63 m-r-40 m-lr-0-xl p-lr-15-sm">
						<h4 class="mtext-109 cl2 p-b-30">
							Cart Totals
						</h4>

						<div class="flex-w flex-t bor12 p-b-13">
							<div class="size-208">
								<span class="stext-110 cl2">
									Subtotal:
								</span>
							</div>

							<div class="size-209">
								<span class="mtext-110 cl2">
								Rp.{{number_format($totalPrice, 2, ',', '.')}}
								</span>
							</div>
						</div>

						<div class="flex-w flex-t bor12 p-t-15 p-b-30">
							<div class="size-208 w-full-ssm">
								<span class="stext-110 cl2">
									Shipping:
								</span>
							</div>
							<div class="size-209 p-r-18 p-r-0-sm w-full-ssm">
								
								<div class="">
								<textarea type="text" name="address" class="form-control"
                                    rows="3"
                                    required></textarea>
								</div>
							</div>
						</div>

						<div class="flex-w flex-t p-t-27 p-b-33">
							<div class="size-208">
								<span class="mtext-101 cl2">
									Total:
								</span>
							</div>

							<div class="size-209 p-t-1">
								<span class="mtext-110 cl2">
								Rp.{{number_format($totalPrice, 2, ',', '.')}}
								</span>
							</div>
						</div>

						<button class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer js-checkout">
							Proceed to Checkout
						</button>
					</div>
				</div>
			</div>
		</div>
	
		
	
		

	<!-- Footer -->
	<footer class="bg3 p-t-75 p-b-32">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-lg-3 p-b-50">
					<h4 class="stext-301 cl0 p-b-30">
						Categories
					</h4>

					<ul>
						<li class="p-b-10">
							<a href="{{ url("#") }}" class="stext-107 cl7 hov-cl1 trans-04">
								Women
							</a>
						</li>

						<li class="p-b-10">
							<a href="{{ url("#") }}" class="stext-107 cl7 hov-cl1 trans-04">
								Men
							</a>
						</li>

						<li class="p-b-10">
							<a href="{{ url("#") }}" class="stext-107 cl7 hov-cl1 trans-04">
								Shoes
							</a>
						</li>

						<li class="p-b-10">
							<a href="{{ url("#") }}" class="stext-107 cl7 hov-cl1 trans-04">
								Watches
							</a>
						</li>
					</ul>
				</div>

				<div class="col-sm-6 col-lg-3 p-b-50">
					<h4 class="stext-301 cl0 p-b-30">
						Help
					</h4>

					<ul>
						<li class="p-b-10">
							<a href="{{ url("#") }}" class="stext-107 cl7 hov-cl1 trans-04">
								Track Order
							</a>
						</li>

						<li class="p-b-10">
							<a href="{{ url("#") }}" class="stext-107 cl7 hov-cl1 trans-04">
								Returns 
							</a>
						</li>

						<li class="p-b-10">
							<a href="{{ url("#") }}" class="stext-107 cl7 hov-cl1 trans-04">
								Shipping
							</a>
						</li>

						<li class="p-b-10">
							<a href="{{ url("#") }}" class="stext-107 cl7 hov-cl1 trans-04">
								FAQs
							</a>
						</li>
					</ul>
				</div>

				<div class="col-sm-6 col-lg-3 p-b-50">
					<h4 class="stext-301 cl0 p-b-30">
						GET IN TOUCH
					</h4>

					<p class="stext-107 cl7 size-201">
						Any questions? Let us know in store at 8th floor, 379 Hudson St, New York, NY 10018 or call us on (+1) 96 716 6879
					</p>

					<div class="p-t-27">
						<a href="{{ url("#") }}" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
							<i class="fa fa-facebook"></i>
						</a>

						<a href="{{ url("#") }}" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
							<i class="fa fa-instagram"></i>
						</a>

						<a href="{{ url("#") }}" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
							<i class="fa fa-pinterest-p"></i>
						</a>
					</div>
				</div>

				<div class="col-sm-6 col-lg-3 p-b-50">
					<h4 class="stext-301 cl0 p-b-30">
						Newsletter
					</h4>

					<form>
						<div class="wrap-input1 w-full p-b-4">
							<input class="input1 bg-none plh1 stext-107 cl7" type="text" name="email" placeholder="email@example.com">
							<div class="focus-input1 trans-04"></div>
						</div>

						<div class="p-t-18">
							<button class="flex-c-m stext-101 cl0 size-103 bg1 bor1 hov-btn2 p-lr-15 trans-04">
								Subscribe
							</button>
						</div>
					</form>
				</div>
			</div>

			<div class="p-t-40">
				<div class="flex-c-m flex-w p-b-18">
					<a href="{{ url("#") }}" class="m-all-1">
						<img src="{{ asset("/assets/images/icons/icon-pay-01.png") }}" alt="ICON-PAY">
					</a>

					<a href="{{ url("#") }}" class="m-all-1">
						<img src="{{ asset("/assets/images/icons/icon-pay-02.png") }}" alt="ICON-PAY">
					</a>

					<a href="{{ url("#") }}" class="m-all-1">
						<img src="{{ asset("/assets/images/icons/icon-pay-03.png") }}" alt="ICON-PAY">
					</a>

					<a href="{{ url("#") }}" class="m-all-1">
						<img src="{{ asset("/assets/images/icons/icon-pay-04.png") }}" alt="ICON-PAY">
					</a>

					<a href="{{ url("#") }}" class="m-all-1">
						<img src="{{ asset("/assets/images/icons/icon-pay-05.png") }}" alt="ICON-PAY">
					</a>
				</div>

				<p class="stext-107 cl6 txt-center">
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a> &amp; distributed by <a href="https://themewagon.com" target="_blank">ThemeWagon</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

				</p>
			</div>
		</div>
	</footer>


	<!-- Back to top -->
	<div class="btn-back-to-top" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="zmdi zmdi-chevron-up"></i>
		</span>
	</div>

<!--===============================================================================================-->	
	<script src="{{ asset("/assets/vendor/jquery/jquery-3.2.1.min.js") }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset("/assets/vendor/animsition/js/animsition.min.js") }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset("/assets/vendor/bootstrap/js/popper.js") }}"></script>
	<script src="{{ asset("/assets/vendor/bootstrap/js/bootstrap.min.js") }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset("/assets/vendor/select2/select2.min.js") }}"></script>
	<script src="{{ asset("/assets/vendor/sweetalert/sweetalert.min.js") }}"></script>
	<script>
		$(".js-select2").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});
		});
	
		$('.js-delete-item').each(function(event){
			$(this).on('click', function(){
				var nameProduct = $(this).parent().parent().find('#product_title').val();
				var idProduct =  $(this).parent().parent().find('#product_id').val();
				$.ajaxSetup({
					headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
					}
				});

				var postData = {
					product_id: idProduct
				}

				console.log(postData);

				$.ajax({
				type: "DELETE",
				url: "/",
				data: JSON.stringify(postData),
				contentType: "application/json; charset=utf-8",
				dataType: "json",
				success: function(data, status){
					swal(nameProduct, "is deleted", "success").then(function() {
            // Reload the window after the user clicks on the SweetAlert button
            location.reload();
        		});
				}
			});
			});
		});

		$('.num-product').each(function(event){
			$(this).on('change', function(){
				var idProduct =  $(this).parent().parent().parent().find('#product_id').val();
				var quantityProduct = $(this).parent().parent().parent().find('.num-product').val();
				$.ajaxSetup({
					headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
					}
				});

				var postData = {
					product_id: idProduct,
					quantity : quantityProduct
				}

				console.log(postData);

				$.ajax({
				type: "PUT",
				url: "/",
				data: JSON.stringify(postData),
				contentType: "application/json; charset=utf-8",
				dataType: "json",
				success: function(data, status){
					location.reload();
				}
			});
			});
		});
		
		$('.quantity-button-up').each(function(event){
			$(this).on('click', function(){
				var idProduct =  $(this).parent().parent().parent().find('#product_id').val();
				var quantityProduct = $(this).parent().parent().parent().find('.num-product').val();
				quantityProduct++;
				$.ajaxSetup({
					headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
					}
				});

				var postData = {
					product_id: idProduct,
					quantity : quantityProduct
				}

				console.log(postData);

				$.ajax({
				type: "PUT",
				url: "/",
				data: JSON.stringify(postData),
				contentType: "application/json; charset=utf-8",
				dataType: "json",
				success: function(data, status){
					location.reload();
				}
			});
			});
		});

		$('.quantity-button-down').each(function(event){
			$(this).on('click', function(){
				var idProduct =  $(this).parent().parent().parent().find('#product_id').val();
				var quantityProduct = $(this).parent().parent().parent().find('.num-product').val();
				$.ajaxSetup({
					headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
					}
				});

				var postData = {
					product_id: idProduct,
					quantity : quantityProduct-1
				}

				console.log(postData);

				$.ajax({
				type: "PUT",
				url: "/",
				data: JSON.stringify(postData),
				contentType: "application/json; charset=utf-8",
				dataType: "json",
				success: function(data, status){
					location.reload();
				}
			});
			});
		});
		$('.js-checkout').each(function(event){
			$(this).on('click', function(){
				var idProduct =  $('[id=product_id]');
				var idProductList = [];
				var quantity = document.getElementsByClassName("num-product");
				var quantityList = [];
				for (let i = 0; i < idProduct.length; i++) {
  					idProductList[i] = idProduct[i].value;
					quantityList[i] = quantity[i].value;
				}
				var address = document.getElementsByName("address");
				$.ajaxSetup({
					headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
					}
				});

				var postData = {
					product_id: idProductList,
					quantity : quantityList,
					address: address[0].value
				}

				console.log(postData);

				$.ajax({
				type: "POST",
				url: "checkout",
				data: JSON.stringify(postData),
				contentType: "application/json; charset=utf-8",
				dataType: "json",
				success: function(data, status){
					location.reload();
				}
			});
			});
		});
	</script>
<!--===============================================================================================-->
	<script src="{{ asset("/assets/vendor/MagnificPopup/jquery.magnific-popup.min.js") }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset("/assets/vendor/perfect-scrollbar/perfect-scrollbar.min.js") }}"></script>
	<script>
		$('.js-pscroll').each(function(){
			$(this).css('position','relative');
			$(this).css('overflow','hidden');
			var ps = new PerfectScrollbar(this, {
				wheelSpeed: 1,
				scrollingThreshold: 1000,
				wheelPropagation: false,
			});

			$(window).on('resize', function(){
				ps.update();
			})
		});
	</script>
<!--===============================================================================================-->
	<script src="{{ asset("/assets/js/main.js") }}"></script>

</body>
</html>