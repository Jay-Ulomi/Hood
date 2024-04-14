<div class="section">
    <!-- container -->
    <div class="container">
        <div class="mechanic-card" >
            <img src="./img/Audi.png" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">On Demand Garage Finder</h5>
            <p class="card-text">Find Garage Based on Your Requirements</p>
            </div>
        </div>
        <div class="card-body-content">
          <p >We are currently having a pool of approved mechanics in Dar es Salaam, Dodoma and Arusha</p>
          </div>
        </div>
    </div>
<!--Land picture -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- form -->
        <form action="{{ route('Show-Mechanic') }}" method="GET">
            <div class="form-group">
                <div class="form-wrapper">
                    <label for="region">Region</label>
                    <select name="region">
                        <option value="Not selected">Not selected</option>
                        <option value="Arusha">Arusha</option>
                        <option value="Dar es Salaam">Dar es Salaam</option>
                        <option value="Dodoma">Dodoma</option>
                    </select>
                </div>
                <div class="form-wrapper">
                    <label for="service">Service</label>
                    <select name="service">
                        <option value="Not selected">Not selected</option>
                        <option value="engine service">Engine Service</option>
                        <option value="car wash">Car Wash</option>
                        <option value="body service">Body Service</option>
                        <option value="towing cars">Towing Cars</option>
                        <option value="auto electric">Auto Electric</option>
                        <option value="ac Service">AC Service</option>
                    </select>
                </div>
                <div class="form-wrapper">
                    <label for="model">Car Model | Brand</label>
                    <select name="cars">
                        <option value="Not selected">Not selected</option>
                        <option value="Toyota">Toyota</option>
                        <option value="BMW">BMW</option>
                        <option value="Audi">Audi</option>
                        <option value="Benz">Benz</option>
                        <option value="Volkswagen">Volkswagen</option>
                        <option value="Nissan">Nissan</option>
                        <option value="Scannia">Scannia</option>
                        <option value="Yutong">Yutong</option>
                        <option value="Mitsubishi">Mitsubishi</option>
                        <option value="Hyundai">Hyundai</option>
                        <option value="Mazda">Mazda</option>
                        <option value="Isuzu">Isuzu</option>
                        <option value="Suzuki">Suzuki</option>
                        <option value="Subaru">Subaru</option>
                        <option value="Honda">Honda</option>
                        <option value="Peugeot">Peugeot</option>
                        <option value="Volvo">Volvo</option>
                        <option value="Jeep">Jeep</option>
                    </select>

                </div>
            </div>
            <button type="submit" class="btn btn-apply">Apply</button>
        </form>
        <!-- /form -->
        <div class="message">
            <p>If your region is not in the list, kindly contact us via our hotline.</p>
        </div>
        <button onclick="window.location.href='tel:+123456789'" class="btn btn-apply">Call Us</button>
    </div>
    <!-- /container -->
</div>
<!-- /section -->



