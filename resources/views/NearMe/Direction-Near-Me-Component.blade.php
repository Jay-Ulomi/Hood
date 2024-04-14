@foreach ($NearMe as $Near )


<!-- /NAVIGATION -->
<div class="section">
    <!-- container -->
    <div class="container">
        <div class="mechanic-card" >
            <img src="./img/car-repair-mechanic-icon.png" class="card-img-top " alt="..."
            style=" height:100px;">
            <div class="card-body">
            <h5 class="card-title">Name: <strong>{{ $Near['gname'] }}</strong></h5>
            <p class="card-text">Region: <strong>{{ $Near['region'] }}</strong></p>
            <p class="card-text">Phone Number:<strong>{{ $Near['phone'] }}</strong></p>
            </div>
        </div>
        </div>
    </div>
<!--Land picture -->
<div style=" display: flex; justify-content: center; align-items: center;">
<div id="map" style="height: 200px; width: 50%;"></div>
</div>
       	<!-- section button -->
           <div class="section">
            <!-- container -->
            <div class="container">

            <div class="row">
              <div class="direction-map">
                  <!-- call -->
                  <div class="col-md-4">
                    <div class="direction" onclick="showRoute()">
                        <a href="#" >Show Route</a>
                        <i class="fa fa-share-square"></i>
                    </div>
                </div>
                <!-- /call -->

                <!-- call -->
                <div class="col-md-4 ">
                    <div class="direction"onclick="window.location='{{ $Near['phone']  }}';">
                        <a href="">Call</a>
                        <i class="fa fa-phone"></i>

                    </div>
                </div>
                <!-- /call -->
            </div>
            </div>
          </div>
        </div>

<!-- /section button -->

<div class="section">
    <!-- container -->
    <div class="container" onclick="window.location='{{ $Near['phone']  }}';">
        <button type="submit" class="btn btn-apply">Tap to call</button>
    </div>
</div>



<script>
    function showRoute() {

        var latitude ={{ $Near['latitude'] }};
        var longitude ={{$Near['longitude']}}

        var mapsUrl = "https://www.google.com/maps/dir/?api=1&destination=" + latitude + "," + longitude;

        window.open(mapsUrl, "_blank");
    }
</script>
@endforeach
