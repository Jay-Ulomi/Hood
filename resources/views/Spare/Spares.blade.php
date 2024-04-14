     <!-- SECTION -->
     <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- Products tab & slick -->
                <div class="col-md-12">
                                <div class="products-slick-all" >
                                    	<!-- product -->
                                        @foreach ($SpareParts as $SparePart)
									    <div class="product" onclick="window.location='{{ route('Shop-Spare', ['id' => $SparePart['id']]) }}';" style="cursor: pointer;">
											<div class="product-img">
												<img src="{{ $SparePart['image1'] }}" alt="">
											</div>
											<div class="product-body">
												<p class="product-category">{{ $SparePart['name'] }}</p>
												<p class="product-price">{{ $SparePart['price'] }} </p>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"> Shop now</button>
											</div>
										</div>
										<!-- /product -->
                                        @endforeach
                            </div>
                            <!-- /tab -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /SECTION -->
