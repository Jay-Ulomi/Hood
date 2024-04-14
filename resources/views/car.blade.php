
		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">Car</h3>
							<div class="section-nav">
								<a href="{{ route('cars.all') }}">View  all<i class="fa fa-arrow-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /section title -->

					<!-- Products tab & slick -->
					<div class="col-md-12">
						<div class="row">
							<div class="products-tabs">
								<!-- tab -->
								<div id="tab2" class="tab-pane fade in active">
									<div class="products-slick" data-nav="#slick-nav-2">
									<!-- product -->
                                    @foreach ($Cars as $car)
                                    <div class="product" onclick="window.location='{{ route('Shop-Car', ['id' => $car['id']]) }}';" style="cursor: pointer;">
                                        <div class="product-img">
                                            <img src="{{ $car['image'] }}" alt="">
                                        </div>
                                        <div class="product-body">
                                            <p class="product-category">{{ $car['name'] }}</p>
                                            <p class="product-price">{{ $car['price'] }} </p>
                                        </div>
                                        <div class="add-to-cart">
                                            <button class="add-to-cart-btn">Shop now</button>
                                        </div>
                                    </div>
                                    @endforeach
                                    <!-- /product -->

									</div>

								</div>
								<!-- /tab -->
							</div>
						</div>
					</div>
					</div>
					<!-- /Products tab & slick -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

