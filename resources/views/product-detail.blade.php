<!DOCTYPE html>
<html lang="en">
<head>
	<title>Product Detail</title>
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
	<link rel="stylesheet" type="text/css" href="{{ asset("/assets/vendor/daterangepicker/daterangepicker.css") }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset("/assets/vendor/slick/slick.css") }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset("/assets/vendor/MagnificPopup/magnific-popup.css") }}">
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

						<a href="{{ route('profile') }}" class="flex-c-m trans-04 p-lr-25">
							My Account
						</a>

					</div>
				</div>
			</div>

			<div class="wrap-menu-desktop how-shadow1">
				<nav class="limiter-menu-desktop container">
					
					<!-- Logo desktop -->		
					<a href="{{ route('/')}}" class="logo">
						<img src="{{ asset("/assets/images/icons/logo-01.png") }}" alt="IMG-LOGO">
					</a>

					<!-- Menu desktop -->
					<div class="menu-desktop">
						<ul class="main-menu">
							<li>
								<a href="{{ route('/') }}">Home</a>
							</li>

							<li>
								<a href="#">Shop</a>
							</li>
						</ul>
					</div>	

					<!-- Icon header -->

						@isset($cartItems)
					<div class="wrap-icon-header flex-w flex-r-m">							
						<div class="flex-c-m h-full p-r-25 bor6">
							<div class="icon-header-item cl2 hov-cl1 trans-04 p-lr-11 icon-header-noti js-show-cart" data-notify="{{$cartItems->count()}}">
								<i class="zmdi zmdi-shopping-cart"></i>
							</div>
						</div>	
</div>		
					@endisset
					@empty($cartItems)
					<div class="wrap-icon-header flex-w flex-r-m">							
						<div class="flex-c-m h-full p-r-25 bor6">
							<div class="icon-header-item cl2 hov-cl1 trans-04 p-lr-11 icon-header-noti js-show-cart" data-notify="0">
								<i class="zmdi zmdi-shopping-cart"></i>
							</div>
						</div>
</div>
					@endempty
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

				@isset($cartItems)
					<div class="wrap-icon-header flex-w flex-r-m h-full">							
						<div class="flex-c-m h-full p-r-25 bor6">
							<div class="icon-header-item cl2 hov-cl1 trans-04 p-lr-11 icon-header-noti js-show-cart" data-notify="{{$cartItems->count()}}">
								<i class="zmdi zmdi-shopping-cart"></i>
							</div>
						</div>			
					@endisset
					@empty($cartItems)
					<div class="wrap-icon-header flex-w flex-r-m h-full">							
						<div class="flex-c-m h-full p-r-25 bor6">
							<div class="icon-header-item cl2 hov-cl1 trans-04 p-lr-11 icon-header-noti js-show-cart" data-notify="0">
								<i class="zmdi zmdi-shopping-cart"></i>
							</div>
						</div>
					@endempty

				
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
						Free shipping for everyday
					</div>
				</li>

				<li>
					<div class="right-top-bar flex-w h-full">

						<a href="profile" class="flex-c-m p-lr-10 trans-04">
							My Account
						</a>
					</div>
				</li>
			</ul>

			<ul class="main-menu-m">
				<li>
					<a href="{{route('/')}}">Home</a>

					<span class="arrow-main-menu-m">
						<i class="fa fa-angle-right" aria-hidden="true"></i>
					</span>
				</li>

				<li>
					<a href="#">Shop</a>
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
			
			<div class="header-cart-content flex-w js-pscroll">
				<ul class="header-cart-wrapitem w-full">
				@isset($cartItems)
					@foreach($cartItems as $item)
						@foreach($item->products as $product)
							<li class="header-cart-item flex-w flex-t m-b-12">
								<div class="header-cart-item-img js-delete-item">
								<input id="product_id" name="product_id" type="hidden" value="{{$product->id}}">
								<input id="product_title" name="product_title" type="hidden" value="{{$product->title}}">
									<img src="{{ asset('storage/images/' . $product->picture) }}" alt="IMG">
								</div>
								<div class="header-cart-item-txt p-t-8">
									<a href="{{ url("#") }}" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
										{{$product->title}}
									</a>

									<span class="header-cart-item-info">
										{{$item->quantity}} x RP.{{$product->price}}
									</span>
								</div>
							</li>
						@endforeach
					@endforeach
					@endisset

				</ul>
				
				<div class="w-full">

					<div class="header-cart-buttons flex-w w-full">
						<a href="checkout" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-b-10">
							Check Out
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- breadcrumb -->
	<div class="container">
		<div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
			<a href="{{route('/')}}" class="stext-109 cl8 hov-cl1 trans-04">
				Home
				<i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
			</a>

			<a href="#" class="stext-109 cl8 hov-cl1 trans-04">
				{{$product->category}}
				<i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
			</a>

			<span class="stext-109 cl4">
				{{$product->category}}
			</span>
		</div>
	</div>
		

	<!-- Product Detail -->
	<section class="sec-product-detail bg0 p-t-65 p-b-60">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-lg-7 p-b-30">
					<div class="p-l-25 p-r-30 p-lr-0-lg">
						<div class="wrap-slick3 flex-sb flex-w">
							<div class="wrap-slick3-dots"></div>
							<div class="wrap-slick3-arrows flex-sb-m flex-w"></div>

							<div class="slick3 gallery-lb">
								<div class="item-slick3" data-thumb="{{asset('storage/images/' . $product->picture)}}">
									<div class="wrap-pic-w pos-relative">
										<img src="{{ asset('storage/images/' . $product->picture) }}" alt="IMG-PRODUCT">

										<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="{{ asset('storage/images/' . $product->picture) }}">
											<i class="fa fa-expand"></i>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
					
				<div class="col-md-6 col-lg-5 p-b-30">
					<div class="p-r-50 p-t-5 p-lr-0-lg">
						<h4 class="mtext-105 cl2 js-name-detail p-b-14">
							{{$product->title}}
						</h4>

						<span class="mtext-106 cl2">
							{{$product->price}}
						</span>

						<p class="stext-102 cl3 p-t-23">
							{{$product->description}}
						</p>
						
						<!--  -->
						<div class="p-t-33">
							<div class="flex-w flex-r-m p-b-10">
								<div class="size-203 flex-c-m respon6">
									Size
								</div>

								<div class="size-204 respon6-next">
									<div class="rs1-select2 bor8 bg0">
										<select class="js-select2" name="time">
											<option>Choose an option</option>
											<option>Size S</option>
											<option>Size M</option>
											<option>Size L</option>
											<option>Size XL</option>
										</select>
										<div class="dropDownSelect2"></div>
									</div>
								</div>
							</div>

							<div class="flex-w flex-r-m p-b-10">
								<div class="size-203 flex-c-m respon6">
									Color
								</div>

								<div class="size-204 respon6-next">
									<div class="rs1-select2 bor8 bg0">
										<select class="js-select2" name="time">
											<option>Choose an option</option>
											<option>Red</option>
											<option>Blue</option>
											<option>White</option>
											<option>Grey</option>
										</select>
										<div class="dropDownSelect2"></div>
									</div>
								</div>
							</div>

							<div class="flex-w flex-r-m p-b-10">
								<div class="size-204 flex-w flex-m respon6-next">
									<div class="wrap-num-product flex-w m-r-20 m-tb-10">
										<div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
											<i class="fs-16 zmdi zmdi-minus"></i>
										</div>
										<input type="hidden" id="product-name" name="product-name" value="{{$product->title}}">
										<input type="hidden" id="product-id" name="product-id" value="{{$product->id}}">
										<input class="mtext-104 cl3 txt-center num-product" type="number" id="quantity" name="quantity" value="1">

										<div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
											<i class="fs-16 zmdi zmdi-plus"></i>
										</div>
									</div>
									<button class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart">
										Add to cart
									</button>
								</div>
							</div>	
						</div>

						<!--  -->
					</div>
				</div>
			</div>

			<div class="bor10 m-t-50 p-t-43 p-b-40">
				<!-- Tab01 -->
				<div class="tab01">
					<!-- Nav tabs -->
					<ul class="nav nav-tabs" role="tablist">
						<li class="nav-item p-b-10">
							<a class="nav-link" data-toggle="tab" href="{{ url("#reviews") }}" role="tab">Reviews ({{$reviews->count()}})</a>
						</li>
					</ul>

					<!-- Tab panes -->
					<div class="tab-content p-t-43">

						<!-- - -->
						<div class="tab-pane fade" id="reviews" role="tabpanel">
							<div class="row">
								<div class="col-sm-10 col-md-8 col-lg-6 m-lr-auto">
									<div class="p-b-30 m-lr-15-sm">
										<!-- Review -->
										@foreach($reviews as $review)
										<div class="flex-w flex-t p-b-68">

											<div class="wrap-pic-s size-109 bor0 of-hidden m-r-18 m-t-6">
												@isset($review->user->picture)
												<img src="{{ asset('storage/images/' . $review->user->picture) }}" alt="AVATAR">
												@endisset
												@empty($review->user->picture)
												<img src="https://thumbs.dreamstime.com/b/default-avatar-profile-image-vector-social-media-user-icon-potrait-182347582.jpg" alt="AVATAR">
												@endempty
											</div>

											<div class="size-207">
												<div class="flex-w flex-sb-m p-b-17">
													<span class="mtext-107 cl2 p-r-20">
														{{$review->user->name}}
													</span>
												
													<span class="fs-18 cl11">
													@for($i = 0; $i < 5; $i++)
													@if($review->rating > $i)
														<i class="zmdi zmdi-star"></i>
													@else
														<i class="zmdi zmdi-star-outline"></i>
													@endif
													@endfor
													</span>
												</div>

												<p class="stext-102 cl6">
													{{$review->comment}}
												</p>
											</div>
										</div>
										@endforeach
										
										<!-- Add review -->
										<form class="w-full" action="{{route('review')}}" method="post">
											@csrf
											<h5 class="mtext-108 cl2 p-b-7">
												Add a review
											</h5>
											<input type="hidden" name="product_id" value="{{$product->id}}">
											<div class="flex-w flex-m p-t-50 p-b-23">
												<span class="stext-102 cl3 m-r-16">
													Your Rating
												</span>

												<span class="wrap-rating fs-18 cl11 pointer">
													<i class="item-rating pointer zmdi zmdi-star-outline"></i>
													<i class="item-rating pointer zmdi zmdi-star-outline"></i>
													<i class="item-rating pointer zmdi zmdi-star-outline"></i>
													<i class="item-rating pointer zmdi zmdi-star-outline"></i>
													<i class="item-rating pointer zmdi zmdi-star-outline"></i>
													<input class="dis-none" type="number" name="rating">
												</span>
											</div>

											<div class="row p-b-25">
												<div class="col-12 p-b-5">
													<label class="stext-102 cl3" for="review">Your review</label>
													<textarea class="size-110 bor8 stext-102 cl2 p-lr-20 p-tb-10" id="comment" name="comment"></textarea>
												</div>
											</div>

											<button class="flex-c-m stext-101 cl0 size-112 bg7 bor11 hov-btn3 p-lr-15 trans-04 m-b-10" type="submit">
												Submit
											</button>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	<!-- Related Products -->
	<section class="sec-relate-product bg0 p-t-45 p-b-105">
		<div class="container">
			<div class="p-b-45">
				<h3 class="ltext-106 cl5 txt-center">
					Related Products
				</h3>
			</div>

			<!-- Slide2 -->
			<div class="wrap-slick2">
				<div class="slick2">
					@foreach($related as $item)
					<div class="item-slick2 p-l-15 p-r-15 p-t-15 p-b-15">
						<!-- Block2 -->
						<div class="block2">
							<div class="block2-pic hov-img0">
								<img src="{{ asset('/storage/images/' . $item->picture) }}" alt="IMG-PRODUCT">

								<button type="button" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04" data-toggle="modal" data-target="#exampleModal" data-product="{{$product}}">Quick View</button>
						
								
							</div>

							<div class="block2-txt flex-w flex-t p-t-14">
								<div class="block2-txt-child1 flex-col-l ">
									<a href="product/{{$item->id}}" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
										{{$item->title}}
									</a>

									<span class="stext-105 cl3">
										Rp.{{number_format($item->price , 2)}}
									</span>
								</div>
							</div>
						</div>
					</div>
					@endforeach

				</div>
			</div>
		</div>
	</section>
		

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

	<!-- Modal1 -->
	<div class="modal js-modal1 p-t-130 p-b-20" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="overlay-modal1 js-hide-modal1"></div>

		<div class="container">
			<div class="bg0 p-t-60 p-b-30 p-lr-15-lg how-pos3-parent">
				<button class="how-pos3 hov3 trans-04 js-hide-modal1" data-dismiss="modal">
					<img src="{{ asset("/assets/images/icons/icon-close.png") }}" alt="CLOSE">
				</button>

				<div class="row">
					<div class="col-md-6 col-lg-7 p-b-30">
						<div class="p-l-25 p-r-30 p-lr-0-lg">
							<div class="wrap-slick3 flex-sb flex-w">
								<div class="wrap-slick3-dots"></div>
								<div class="wrap-slick3-arrows flex-sb-m flex-w"></div>

								<div class="slick3 gallery-lb">
									<div class="item-slick3" data-thumb="">
										<div class="wrap-pic-w pos-relative">
											<img alt="IMG-PRODUCT" class="modal-img">

											<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04 modal-img-expand">
												<i class="fa fa-expand"></i>
											</a>
										</div>
									</div>

								</div>
							</div>
						</div>
					</div>
					
					<div class="col-md-6 col-lg-5 p-b-30">
						<div class="p-r-50 p-t-5 p-lr-0-lg">
							<h4 class="mtext-105 cl2 js-name-detail p-b-14 modal-title">
								nama product
							</h4>

							<span class="mtext-106 cl2 modal-price">
								price
							</span>

							<p class="stext-102 cl3 p-t-23 modal-description">
								description
							</p>
							
						
							<input id="product_id" name="product_id" type="hidden" value="">
							<div class="p-t-33">
								<div class="flex-w flex-r-m p-b-10">
									<div class="size-203 flex-c-m respon6">
										Size
									</div>

									<div class="size-204 respon6-next">
										<div class="rs1-select2 bor8 bg0">
											<select class="js-select2">
												<option>S</option>
												<option>M</option>
												<option>L</option>
												<option>XL</option>
											</select>
											<div class="dropDownSelect2"></div>
										</div>
									</div>
								</div>

								

								<div class="flex-w flex-r-m p-b-10">
									<div class="size-203 flex-c-m respon6">
										Color
									</div>

									<div class="size-204 respon6-next">
										<div class="rs1-select2 bor8 bg0">
											<select class="js-select2">
												<option>Red</option>
												<option>Blue</option>
												<option>White</option>
												<option>Grey</option>
											</select>
											<div class="dropDownSelect2"></div>
										</div>
									</div>
								</div>

								<div class="flex-w flex-r-m p-b-10">
									<div class="size-204 flex-w flex-m respon6-next">
										<div class="wrap-num-product flex-w m-r-20 m-tb-10">
											<div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
												<i class="fs-16 zmdi zmdi-minus"></i>
											</div>

											<input class="mtext-104 cl3 txt-center num-product" type="number" name="quantity" value="1" id="product_quantity">

											<div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
												<i class="fs-16 zmdi zmdi-plus"></i>
											</div>
										</div>
										<button class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail" >
											Add to cart
										</button>
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

<!--===============================================================================================-->	
	<script src="{{ asset("/assets/vendor/jquery/jquery-3.2.1.min.js") }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset("/assets/vendor/animsition/js/animsition.min.js") }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset("/assets/vendor/bootstrap/js/popper.js") }}"></script>
	<script src="{{ asset("/assets/vendor/bootstrap/js/bootstrap.min.js") }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset("/assets/vendor/select2/select2.min.js") }}"></script>
	<script>
		$(".js-select2").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});
		})
	</script>
<!--===============================================================================================-->
	<script src="{{ asset("/assets/vendor/daterangepicker/moment.min.js") }}"></script>
	<script src="{{ asset("/assets/vendor/daterangepicker/daterangepicker.js") }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset("/assets/vendor/slick/slick.min.js") }}"></script>
	<script src="{{ asset("/assets/js/slick-custom.js") }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset("/assets/vendor/parallax100/parallax100.js") }}"></script>
	<script>
        $('.parallax100').parallax100();
	</script>
<!--===============================================================================================-->
	<script src="{{ asset("/assets/vendor/MagnificPopup/jquery.magnific-popup.min.js") }}"></script>
	<script>
		$('.gallery-lb').each(function() { // the containers for all your galleries
			$(this).magnificPopup({
		        delegate: 'a', // the selector for gallery item
		        type: 'image',
		        gallery: {
		        	enabled:true
		        },
		        mainClass: 'mfp-fade'
		    });
		});
	</script>
<!--===============================================================================================-->
	<script src="{{ asset("/assets/vendor/isotope/isotope.pkgd.min.js") }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset("/assets/vendor/sweetalert/sweetalert.min.js") }}"></script>
	<script>
		$('.js-addwish-b2, .js-addwish-detail').on('click', function(e){
			e.preventDefault();
		});

		$('.js-addwish-b2').each(function(){
			var nameProduct = $(this).parent().parent().find('.js-name-b2').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");

				$(this).addClass('js-addedwish-b2');
				$(this).off('click');
			});
		});

		$('.js-addwish-detail').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.js-name-detail').html();

			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");

				$(this).addClass('js-addedwish-detail');
				$(this).off('click');
			});
		});

		/*---------------------------------------------*/

		$('.js-addcart-detail').each(function(event){
			$(this).on('click', function(){
				var nameProduct = $(this).parent().parent().parent().parent().find('.js-name-detail').text();
				var idProduct =  $(this).parent().parent().parent().parent().find('#product_id').val();
				var quantity = $(this).parent().parent().parent().parent().find('#product_quantity').val();
				$.ajaxSetup({
					headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
					}
				});

				var postData = {
					product_id: idProduct,
					quantity: quantity
				}

				console.log(postData);

				$.ajax({
				type: "POST",
				url: "/",
				data: JSON.stringify(postData),
				contentType: "application/json; charset=utf-8",
				dataType: "json",
				success: function(data, status){
					swal(nameProduct, "is added to cart!", "success").then(function() {
            			// Reload the window after the user clicks on the SweetAlert button
            			location.reload();
        			});
				}
			});
			});
		});

		$('.js-addcart').each(function(event){
			$(this).on('click', function(){
				var nameProduct = $(this).parent().parent().parent().parent().find('#product-name').val();
				var idProduct =  $(this).parent().parent().parent().parent().find('#product-id').val();
				var quantity = $(this).parent().parent().parent().parent().find('#quantity').val();
				$.ajaxSetup({
					headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
					}
				});

				var postData = {
					product_id: idProduct,
					quantity: quantity,
					name: nameProduct
				}

				console.log(postData);

				$.ajax({
				type: "POST",
				url: "/",
				data: JSON.stringify(postData),
				contentType: "application/json; charset=utf-8",
				dataType: "json",
				success: function(data, status){
					swal(nameProduct, "is added to cart!", "success").then(function() {
            			// Reload the window after the user clicks on the SweetAlert button
            			location.reload();
        			});
				}
			});
			});
		});

		$('.js-delete-item').each(function(event){
			$(this).on('click', function(){
				var nameProduct = $(this).find('#product_title').val();
				var idProduct =  $(this).find('#product_id').val();
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
	
	</script>
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
<script>
		$('#exampleModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var product = button.data('product') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  var img = "http://e-commerce.test/storage/images/"+product.picture
  modal.find('.modal-title').text(product.title)
  modal.find('.modal-price').text(product.price)
  modal.find('.modal-description').text(product.description)
  modal.find('#product_id').val(product.id);
  $(".modal-img").attr("src", img);
  $(".modal-img-expand").attr("href", img);
})
	</script>

	<script src="{{ asset("/assets/js/main.js") }}"></script>

</body>
</html>