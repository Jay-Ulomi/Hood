<!-- SECTION -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <!-- Product thumb imgs -->
            @foreach ($Spare as $SparePart )


            <div class="col-md-2">
                <div id="product-imgs">
                    <div class="product-preview">
                        <img src="{{ $SparePart['image1'] }}" alt="">
                    </div>
                    <div class="product-preview">
                        <img src="{{ $SparePart['image2'] }}" alt="">
                    </div>
                    <div class="product-preview">
                        <img src="{{ $SparePart['image1'] }}" alt="">
                    </div>
                    <div class="product-preview">
                        <img src="{{ $SparePart['image2'] }}" alt="">
                    </div>
                </div>
            </div>
            <!-- /Product thumb imgs -->

            <!-- Product main img -->
            <div class="col-md-5">
                <div id="product-main-img">
                    <div class="product-preview">
                        <img src="{{ $SparePart['image1'] }}" alt="">
                    </div>
                    <div class="product-preview">
                        <img src="{{ $SparePart['image2'] }}" alt="">
                    </div>
                    <div class="product-preview">
                        <img src="{{ $SparePart['image1'] }}" alt="">
                    </div>
                    <div class="product-preview">
                        <img src="{{ $SparePart['image2'] }}" alt="">
                    </div>
                </div>
            </div>
            <!-- /Product main img -->

            <!-- Product details -->
            <div class="col-md-5">
                <div class="product-details">
                    <h2 class="product-name">{{ $SparePart['name'] }}</h2>
                    <div class="product-data">
                        <i class="fa fa-calendar">
                            <span class="price">{{ $SparePart['date'] }}</span>
                        </i>
                        <i class="fa fa-tags">
                            <span>{{ $SparePart['price'] }} </span>
                        </i>
                    </div>
                    <div class="row">
                        <div class="col-xs-6">
                            <div class="subdata">
                                <div class="control-label">
                                    <label>Product Type</label>
                                </div>
                                <div class="span">
                                    <span>{{ $SparePart['type'] }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="subdata">
                                <div class="control-label">
                                    <label>Spare | Accessory status</label>
                                </div>
                                <div class="span">
                                    <span>{{ $SparePart['status'] }}</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-6">
                            <div class="subdata">
                                <div class="control-label">
                                    <label>Location</label>
                                </div>
                                <div class="span">
                                    <span>{{ $SparePart['location'] }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="details">
                        <p>{{ $SparePart['details'] }}</p>
                    </div>
					<div class="row">
                        <div class="col-xs-6">
                            <div class="subdata-btn">
                                <div class="control-label">
                                    <a onclick="window.location.href='{{ $SparePart['phone'] }}'">Call Seller</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="subdata-btn">
                                <div class="control-label">
                                    <a onclick="window.location.href='{{ $SparePart['phone'] }}'">Message Seller</a>
                                </div>
                            </div>
                        </div>
					</div>
					<div class="subdata-btn">
						<div class="control-label">
							<a>Buying Assistance</a>
						</div>
					</div>
					<ul class="main-nav nav navbar-nav navbar-left">
                        <li><a href="" ><i class="fa fa-share-square"></i></a></li>
						<li><a onclick="window.location.href='{{ $SparePart['phone'] }}'"><i class="fa fa-phone-square"></i></a></li>
					</ul>
                </div>
            </div>
            <!-- /Product details -->
        </div>
        @endforeach
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /SECTION -->
