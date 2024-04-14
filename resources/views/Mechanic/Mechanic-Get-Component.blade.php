<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-md-12">
                @foreach ($Mechanic as $Mechani)
                <div class="card-mechanic" onclick="window.location='{{ route('location', ['id' => $Mechani['id']]) }}';">
                    <img src="./img/car-repair-mechanic-icon.png" alt="">
                    <div class="card-header">
                        <h4>{{ $Mechani['region'] }}</h4>
                    </div>
                    <div class="card-body-mechanic">
                        <button class="btn btn-mechanic">View Details</button>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /section -->
