<!-- SECTION -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            @foreach ($Car as $CarData )
            <!-- Product thumb imgs -->
            <div class="col-md-2">
                <div id="product-imgs">
                    <div class="product-preview">
                        <img src="{{ $CarData['image'] }}" alt="">
                    </div>
                    <div class="product-preview">
                        <img src="{{ $CarData['image1'] }}" alt="">
                    </div>
                    <div class="product-preview">
                        <img src="{{ $CarData['image'] }}" alt="">
                    </div>
                    <div class="product-preview">
                        <img src="{{ $CarData['image1'] }}" alt="">
                    </div>
                </div>
            </div>
            <!-- /Product thumb imgs -->

            <!-- Product main img -->
            <div class="col-md-5">
                <div id="product-main-img" >
                    <div class="product-preview">
                        <img src="{{ $CarData['image'] }}" alt="">
                    </div>
                    <div class="product-preview">
                        <img src="{{ $CarData['image1'] }}" alt="">
                    </div>
                    <div class="product-preview">
                        <img src="{{ $CarData['image'] }}" alt="">
                    </div>
                    <div class="product-preview">
                        <img src="{{ $CarData['image1'] }}" alt="">
                    </div>
                </div>
            </div>
            <!-- /Product main img -->

            <!-- Product details -->
            <div class="col-md-5">
                <div class="product-details">
                    <h2 class="product-name">{{ $CarData['name'] }}</h2>
                    <div class="product-data">
                        <i class="fa fa-calendar">
                            <span class="price">{{ $CarData['date'] }}</span>
                        </i>
                        <i class="fa fa-tags">
                            <span>{{ $CarData['price'] }} </span>
                        </i>
                    </div>
                    <div class="row">
                        <div class="col-xs-6">
                            <div class="subdata">
                                <div class="control-label">
                                    <label>MILLAGE</label>
                                </div>
                                <div class="span">
                                    <span>{{ $CarData['milage'] }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="subdata">
                                <div class="control-label">
                                    <label>ENGINE SIZE (CC)</label>
                                </div>
                                <div class="span">
                                    <span>{{ $CarData['esize'] }}</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-6">
                            <div class="subdata">
                                <div class="control-label">
                                    <label>TRANSMISSION</label>
                                </div>
                                <div class="span">
                                    <span>{{ $CarData['trans'] }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="subdata">
                                <div class="control-label">
                                    <label>DRIVE</label>
                                </div>
                                <div class="span">
                                    <span>{{ $CarData['drivet'] }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="subdata">
                                <div class="control-label">
                                    <label>FUEL</label>
                                </div>
                                <div class="span">
                                    <span>{{ $CarData['fuel'] }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="subdata">
                                <div class="control-label">
                                    <label>COLOR</label>
                                </div>
                                <div class="span">
                                    <span>{{ $CarData['color'] }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="subdata">
                                <div class="control-label">
                                    <label>SERVICE HISTORY</label>
                                </div>
                                <div class="span">
                                    <span>{{ $CarData['service'] }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="subdata">
                                <div class="control-label">
                                    <label>CAR STATUS</label>
                                </div>
                                <div class="span">
                                    <span>{{ $CarData['status'] }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="subdata">
                                <div class="control-label">
                                    <label>LOCATION</label>
                                </div>
                                <div class="span">
                                    <span>{{ $CarData['region'] }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="subdata">
                                <div class="control-label">
                                    <label>INSPECTED BY HOOD</label>
                                </div>
                                <div class="span">
                                    <span></span>
                                </div>
                            </div>
                        </div>
                    </div>

					<div class="row">
                        <div class="col-xs-6">
                            <div class="subdata-btn">
                                <div class="control-label">
                                    <a onclick="window.location.href='{{ $CarData['phone'] }}'">Call Seller</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="subdata-btn">
                                <div class="control-label">
                                    <a  onclick="window.location.href='{{ $CarData['phone'] }}'">Message Seller</a>
                                </div>
                            </div>
                        </div>
					</div>
					<div class="subdata-btn">
						<div class="control-label">
							<a onclick="window.location.href='{{ $CarData['bussines_phone'] }}'">Buying Assistance</a>
						</div>
					</div>
					<ul class="main-nav nav navbar-nav navbar-left">
                        <li><a href="" ><i class="fa fa-share-square"></i></a></li>
						<li><a onclick="window.location.href='{{ $CarData['phone'] }}'"><i class="fa fa-phone-square"></i></a></li>
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
