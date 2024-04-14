
<div class="section">
    <!-- container -->
    <div class="container">
        	<!-- section title -->
                <div class="form-group-search">
                    <div class="input-with-icon">
                        <i class="fa fa-search" aria-hidden="true"></i>
                        <input type="text"  name="" id="" placeholder="Search">
                    </div>
                </div>

                @foreach ($Feeds as $feed)
            <a href="">
                <div class="feed-wrapper">
                    <img src="{{ $feed['image'] }}" alt="Feed Image">

                    <div class="info">
                        <h6 class="service-title">{{ $feed['title'] }}</h6>
                        <p class="service-content">{{ $feed['description'] }}</p>
                        <div class="post">
                            <p>Posted on:</p>
                            {{-- <span>{{ date('jS F, Y', strtotime($feed['uploaded_on'])) }}</span> --}}
                            <h6>{{ $feed['category'] }}</h6>
                        </div>
                    </div>
                </div>
            </a>
            @endforeach


        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /section -->
