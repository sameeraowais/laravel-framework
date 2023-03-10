
@extends('layouts.app')

@section('content')

		<!-- BREADCRUMB -->
		<div id="breadcrumb" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<h3 class="breadcrumb-header">Checkout</h3>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /BREADCRUMB -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<div class="col-md-7">
						<!-- Billing Details -->
						<div class="billing-details">
							<div class="section-title">
								<h3 class="title">Billing address</h3>
							</div>


							<form method="POST" action="{{route('getinvoice')}}">
							@csrf <!-- for encrypt the data and then send it-->

							
							<div class="form-group">
								<input class="input" id="customer_name" name="customer_name" placeholder="Full Name">
							</div>
							<div class="form-group">

								<input class="input" type="email" id="email" name="email" placeholder="Email">
							</div>
							<div class="form-group">
								<input class="input" type="text" id="country" name="country" placeholder="Country">
							</div>
							<div class="form-group">
								<input class="input" type="text" id="city" name="city" placeholder="City">
							</div>
							<div class="form-group">
								<input class="input" type="text" name="code" name="code" placeholder="ZIP Code">
							</div>
							<div class="form-group">
								<inp"ut class="input" type="tel" id="mobile" name="mobile" placeholder="Mobile No.">
							</div>
                            <div class="order-notes">
								<textarea class="input" id="notes" name="notes" placeholder="Order Notes"></textarea>
						    </div>
							<!-- ------------------------------------------------------------ -->
							<div class="form-group">
								<input class="input" type="hidden" id="product_name" name="product_name" value="{{$products->name}}">
							</div>
							<div class="form-group">
								<input class="input" type="hidden" id="price" name="price" value="{{$products->price}}">
							</div>
							<!-- ------------------------------------------------------------ -->
							</br>
							<div class="input-checkbox">
							<input type="checkbox" id="terms">
							<label for="terms">
								<span></span>
								I've read and accept the <a href="#">terms & conditions</a>
							</label>
							</div>
							</br>
							<button type="submit" class="primary-btn order-submit">Place order</button>
							</form>
						</div>
						<!-- /Billing Details -->
					</div>

					<!-- Order Details -->
					<div class="col-md-5 order-details">
						<div class="section-title text-center">
							<h3 class="title">Your Order</h3>
						</div>
						<div class="order-summary">
							<div class="order-col">
								<div><strong>PRODUCT</strong></div>
								<div><strong>TOTAL</strong></div>
							</div>
							<div class="order-products">
								<div class="order-col">
									<div>1x{{$products->name}}</div>
									<div>${{$products->price}}</div>
								</div>
							</div>
							<div class="order-col">
								<div>TAX</div>
								<div><strong>${{$products->price*0.15}}</strong></div>
							</div>
							<div class="order-col">
								<div><strong>TOTAL</strong></div>
								<div><strong class="order-total">${{$products->price + $products->price*0.15}}</strong></div>
							</div>
						</div>
						<div class="payment-method">
							<div class="input-radio">
								<input type="radio" name="payment" id="payment-1">
								<label for="payment-1">
									<span></span>
									Direct Bank Transfer
								</label>
								<div class="caption">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								</div>
							</div>
							<div class="input-radio">
								<input type="radio" name="payment" id="payment-2">
								<label for="payment-2">
									<span></span>
									Cheque Payment
								</label>
								<div class="caption">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								</div>
							</div>
							<div class="input-radio">
								<input type="radio" name="payment" id="payment-3">
								<label for="payment-3">
									<span></span>
									Paypal System
								</label>
								<div class="caption">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								</div>
							</div>
						</div>
					</div>
					<!-- /Order Details -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

        @endsection