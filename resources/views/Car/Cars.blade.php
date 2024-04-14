     <!-- SECTION -->
     <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- Products tab & slick -->
                <div class="col-md-12">
                                <div class="products-slick-all" >
                                    @foreach ($Cars as $car )
                                    <!-- product -->
                                    <div class="product" onclick="window.location='{{ route('Shop-Car', ['id' => $car['id']]) }}';" style="cursor: pointer;">
                                        <div class="product-img">
                                            <img src="{{ $car['image'] }}" alt="">
                                        </div>
                                        <div class="product-body">
                                            <h4 class="product-category">{{ $car['name'] }}</h4>
                                        <p class="product-price">{{ $car['price'] }} </p>
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
