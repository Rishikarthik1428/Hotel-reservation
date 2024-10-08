<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- links -->
     <?php require('links.php');?>
    <link rel="stylesheet" href="css/common.css">
    <title>HOTEL -Rooms</title>
</head>
<body class="bg-light">
    <!-- header -->
    <?php require('header.php');?>
    <div class="my-5 px-4">
      <h2 class="fw-bold h-font text-center">OUR ROOMS</h2>
      <div class="h-line bg-dark"></div>
      
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-12 mb-lg-0 mb-4 px-lg-0">
          <nav class="navbar navbar-expand-lg navbar-light bg-white rounded shadow">
            <div class="container-fluid flex-lg-column align-items-stretch">
              <h4 class="mt-2">FILTERS</h4>
              <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#filterDropdown" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse flex-column align-items-stretch mt-2" id="filterDropdown">
                <div class="border bg-light p-3 rounded mb-3">
                  <h5 class="mb-3" style="font-size: 18px;">Chech Availability</h5>
                  <label  class="form-label">Check-In</label>
                  <input type="date" class="form-control shadow-none mb-3">
                  <label  class="form-label">Check-In</label>
                  <input type="date" class="form-control shadow-none">
                </div>
                <div class="border bg-light p-3 rounded mb-3">
                  <h5 class="mb-3" style="font-size: 18px;">Facilities</h5>
                  <div class="mb-2">
                    <input type="checkbox" id="f1" class="form-check-input shadow-none me-1">
                    <label  class="form-check-label" for="f1">Facility one</label>
                  </div>
                  <div class="mb-2">
                    <input type="checkbox" id="f2" class="form-check-input shadow-none me-1">
                    <label  class="form-check-label" for="f2">Facility two</label>
                  </div>
                  <div class="mb-2">
                    <input type="checkbox" id="f3" class="form-check-input shadow-none me-1">
                    <label  class="form-check-label" for="f3">Facility three</label>
                  </div>
                  <div class="mb-2">
                    <input type="checkbox" id="f4" class="form-check-input shadow-none me-1">
                    <label  class="form-check-label" for="f4">Facility four</label>
                  </div>
                </div>
                <div class="border bg-light p-3 rounded mb-3">
                  <h5 class="mb-3" style="font-size: 18px;">Guests</h5>
                  <div class="d-flex">
                    <div class="me-3">
                      <label class="form-label">Adults</label>
                      <input type="number" class="form-control shadow-none">
                    </div>
                    <div>
                      <label class="form-label">Childrens</label>
                      <input type="number" class="form-control shadow-none">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </nav>
        </div>
        <div class="col-lg-9 col-md-12 px-4">
          <div class="card mb-4 border-0 shadow">
            <div class="row g-0 p-3 align-items-center">
              <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                <img src="img/room1.png" class="img-fluid rounded">
              </div>
              <div class="col-md-5 px-lg-3 px-md-3 px-0">
                <h5 class="mb-3">Simple room</h5>
                <div class="features mb-3">
                      <h6 class="mb-1">Features</h6>
                      <span class="badge rounded-pill bg-light text-dark text-wrap mb-3">
                        2-Bedrooms
                      </span>
                      <span class="badge rounded-pill bg-light text-dark text-wrap mb-3">
                        2-Bathrooms
                      </span>
                      <span class="badge rounded-pill bg-light text-dark text-wrap mb-3">
                        1-Balconey
                      </span>
                      <span class="badge rounded-pill bg-light text-dark text-wrap mb-3">
                        3-Sofa
                      </span>
                </div>
                <div class="facilities mb-3">
                    <h6 class="mb-1">Facilities</h6>
                      <span class="badge rounded-pill bg-light text-dark text-wrap mb-3">
                        Television
                      </span>
                      <span class="badge rounded-pill bg-light text-dark text-wrap mb-3">
                        AC
                      </span>
                      <span class="badge rounded-pill bg-light text-dark text-wrap mb-3">
                        Room heater
                      </span>
                      <span class="badge rounded-pill bg-light text-dark text-wrap mb-3">
                        geyser
                      </span>
                </div>
                <div class="guests">
                    <h6 class="mb-1">Guests</h6>
                      <span class="badge rounded-pill bg-light text-dark text-wrap mb-3">
                        4 Adults
                      </span>
                      <span class="badge rounded-pill bg-light text-dark text-wrap mb-3">
                        2 Children
                      </span>                    
                  </div>
              </div>
              <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
                <h6 class="mb-4">₹2000 per Night</h6>
                  <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
                  <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More details</a>
                  <!-- <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
              </div>
            </div>
          </div>
          <div class="card mb-4 border-0 shadow">
            <div class="row g-0 p-3 align-items-center">
              <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                <img src="img/room1.png" class="img-fluid rounded">
              </div>
              <div class="col-md-5 px-lg-3 px-md-3 px-0">
                <h5 class="mb-3">Simple room</h5>
                <div class="features mb-3">
                      <h6 class="mb-1">Features</h6>
                      <span class="badge rounded-pill bg-light text-dark text-wrap mb-3">
                        2-Bedrooms
                      </span>
                      <span class="badge rounded-pill bg-light text-dark text-wrap mb-3">
                        2-Bathrooms
                      </span>
                      <span class="badge rounded-pill bg-light text-dark text-wrap mb-3">
                        1-Balconey
                      </span>
                      <span class="badge rounded-pill bg-light text-dark text-wrap mb-3">
                        3-Sofa
                      </span>
                </div>
                <div class="facilities mb-3">
                    <h6 class="mb-1">Facilities</h6>
                      <span class="badge rounded-pill bg-light text-dark text-wrap mb-3">
                        Television
                      </span>
                      <span class="badge rounded-pill bg-light text-dark text-wrap mb-3">
                        AC
                      </span>
                      <span class="badge rounded-pill bg-light text-dark text-wrap mb-3">
                        Room heater
                      </span>
                      <span class="badge rounded-pill bg-light text-dark text-wrap mb-3">
                        geyser
                      </span>
                </div>
                <div class="guests">
                    <h6 class="mb-1">Guests</h6>
                      <span class="badge rounded-pill bg-light text-dark text-wrap mb-3">
                        4 Adults
                      </span>
                      <span class="badge rounded-pill bg-light text-dark text-wrap mb-3">
                        2 Children
                      </span>                    
                  </div>
              </div>
              <div class="col-md-2 text-center">
                <h6 class="mb-4">₹2000 per Night</h6>
                  <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
                  <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More details</a>
                  <!-- <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
              </div>
            </div>
          </div>
          <div class="card mb-4 border-0 shadow">
            <div class="row g-0 p-3 align-items-center">
              <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                <img src="img/room1.png" class="img-fluid rounded">
              </div>
              <div class="col-md-5 px-lg-3 px-md-3 px-0">
                <h5 class="mb-3">Simple room</h5>
                <div class="features mb-3">
                      <h6 class="mb-1">Features</h6>
                      <span class="badge rounded-pill bg-light text-dark text-wrap mb-3">
                        2-Bedrooms
                      </span>
                      <span class="badge rounded-pill bg-light text-dark text-wrap mb-3">
                        2-Bathrooms
                      </span>
                      <span class="badge rounded-pill bg-light text-dark text-wrap mb-3">
                        1-Balconey
                      </span>
                      <span class="badge rounded-pill bg-light text-dark text-wrap mb-3">
                        3-Sofa
                      </span>
                </div>
                <div class="facilities mb-3">
                    <h6 class="mb-1">Facilities</h6>
                      <span class="badge rounded-pill bg-light text-dark text-wrap mb-3">
                        Television
                      </span>
                      <span class="badge rounded-pill bg-light text-dark text-wrap mb-3">
                        AC
                      </span>
                      <span class="badge rounded-pill bg-light text-dark text-wrap mb-3">
                        Room heater
                      </span>
                      <span class="badge rounded-pill bg-light text-dark text-wrap mb-3">
                        geyser
                      </span>
                </div>
                <div class="guests">
                    <h6 class="mb-1">Guests</h6>
                      <span class="badge rounded-pill bg-light text-dark text-wrap mb-3">
                        4 Adults
                      </span>
                      <span class="badge rounded-pill bg-light text-dark text-wrap mb-3">
                        2 Children
                      </span>                    
                  </div>
              </div>
              <div class="col-md-2 text-center">
                <h6 class="mb-4">₹2000 per Night</h6>
                  <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
                  <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More details</a>
                  <!-- <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- footer -->
    <?php require('footer.php'); ?>

</body>
</html>