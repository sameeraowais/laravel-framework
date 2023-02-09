@extends('layouts.app')
@section('content')
<!-- Order Details -->
<br>
<div style="margin-left: 400px;">
<div class="col-md-5 order-details">
						<div class="section-title text-center">
							<h3 class="title">Thank for your purchase</h3>
						</div>
                        <h6>{{$inv->customer_name}}</h6>
                        <h6>Order#{{$inv->id}}</h6>
                        <h6>{{$inv->date}}</h6>
						<div class="order-summary">
							<div class="order-col">
								<div><strong>PRODUCT</strong></div>
								<div><strong>TOTAL</strong></div>
							</div>
							<div class="order-products">
								<div class="order-col">
									<div>1x{{$inv->product_name}}</div>
									<div>${{$inv->price}}</div>
								</div>
							</div>
							<div class="order-col">
								<div>TAX</div>
								<div>${{$inv->tax}}</div>
							</div>
							<div class="order-col">
								<div><strong>TOTAL</strong></div>
								<div><strong class="order-total">${{$inv->net}}</strong></div>
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
		</div>
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
@endsection