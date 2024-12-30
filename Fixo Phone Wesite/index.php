 <?php
session_start();
?> 


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Fixo Phones Repairs</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="./style/style.scss">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  </head>

  <body style="font-family:'Poppins';">

  <?php
    if (isset($_SESSION["status"])) {
    ?> 
  <div class="alert alert-success alert-dismissible fade show" role="alert" delay="2000">
  
  <i class="bi bi-check-circle-fill"></i> &nbsp; <?php $status = $_SESSION["status"];
      echo $status;?> &nbsp; <strong>Your Form is Submitted Succesfully </strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
     <?php
      
      unset($status);
    }
    ?> 
    <marquee behavior="smooth" direction="left" style="background-color: #a81764; color:#fff; font-size: 2rem; letter-spacing: 3px; font-weight: 800; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">We Pick We Repair We Deliver</marquee>
    <!-- navbar -->
    <nav class="navbar navbar-expand-sm fixed">
      <div class="container-fluid">
        <a class="navbar-brand" href="javascript:void(0)">Logo</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#mynavbar"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mynavbar">
          <ul class="navbar-nav m-auto">
            <li class="nav-item">
              <a class="nav-link active" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="service.php">Service</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact Us</a>
            </li>
          </ul>
          <form class="d-flex">
            <!-- Button trigger modal -->
            <!-- Button trigger modal -->
            <button
              type="button"
              class="btn btn-1"
              data-bs-toggle="modal"
              data-bs-target="#exampleModal"
            >
              Book Now
            </button>

            <!-- Modal -->
            <div
              class="modal fade"
              id="exampleModal"
              tabindex="-1"
              aria-labelledby="exampleModalLabel"
              aria-hidden="true"
            >
              <div class="modal-dialog modal-dialog-scrollable modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <img src="" alt="img" />
                    <h1 class="modal-title fs-5" id="exampleModalLabel">
                      Get A Query
                    </h1>
                    <button
                      type="button"
                      class="btn-close"
                      data-bs-dismiss="modal"
                      aria-label="Close"
                    ></button>
                  </div>
                  <div class="modal-body">
                  <form action="save.php" method="POST">
                      <div class="row g-3">
                        <div class="col m-3">
                          <label class="text-lb" for="customer"
                            >Customer name</label
                          >
                          <input
                            type="text"
                            class="form-control m-2"
                            placeholder="First name"
                            aria-label="Customername"
                            name="name"
                            id="customer"
                            required
                          />
                        </div>
                        <div class="col m-3">
                          <label class="text-lb" for="phoneno">Phone No</label>
                          <input
                            type="number"
                            class="form-control m-2"
                            placeholder="+1231546"
                            aria-label="phoneno"
                            name="phno"
                            id="phoneno"
                            required
                          />
                        </div>
                      </div>
                      <div class="row g-3">
                        <div class="col m-3">
                          <label class="text-lb" for="pickup"
                            >Pickup Location</label
                          >
                          <input
                            type="text"
                            class="form-control m-2"
                            placeholder="Pickup Location"
                            aria-label="pickup"
                            id="pickup"
                            name="pickup"
                            required
                          />
                        </div>
                      </div>
                      <!-- Best way to reach-->
                      <div class="row g-3">
                        <div class="col m-3">
                          <label class="text-lb" for="best"
                            >Best way to Reach You</label
                          >
                          <select
                            class="form-select m-2"
                            aria-label="Select one"
                            id="best"
                            name="bestway"
                            required
                          >
                            <option selected>Open this select menu</option>
                            <option value="1">Text</option>
                            <option value="2">Call</option>
                            <option value="3">Both</option>
                          </select>
                        </div>
                      </div>

                      <!-- date and time -->
                      <div class="row g-2">
                        <div class="col m-3">
                          <label class="text-lb" for="time">Pickup Time</label>
                          <input
                            type="time"
                            class="form-control m-2"
                            placeholder="time"
                            aria-label="time"
                            name="time"
                            id="time"
                            required
                          />
                        </div>
                        <div class="col m-3">
                          <label class="text-lb" for="date">Pickup Date</label>
                          <input
                            type="date"
                            class="form-control m-2"
                            placeholder="date"
                            aria-label="date"
                            name="date"
                            id="date"
                            required
                          />
                        </div>
                      </div>

                      <!-- for Devices -->
                      
                      <div class="row g-3">
                        <div class="col m-3">
                          <label class="text-lb" for="best-1"
                            >Devices</label
                          >
                          <select
                            class="form-select m-2"
                            aria-label="Select one"
                            id="best-1"
                            required
                            name="device"
                          >
                            <option selected> Select Device</option>
                            <option value="1">Mobile</option>
                            <option value="2">Laptop</option>
                            <option value="3">Iphone</option>
                            <option value="4">Macbook</option>
                            <option value="5">iWatch</option>
                          </select>
                        </div>
                      </div>

                      <!-- Check boxes for issue -->
                      <div class="row g-3">
                        <div class="col m-3">
                        <label class="text-lb" for="best-1">What the Problem?</label>
                          <select
                            class="form-select m-2"
                            aria-label="Select one"
                            id="best-2"
                            required
                            name="problem"
                          >
                            <option selected>What the Problem?</option>
                            <option value="1">Screen Isssue</option>
                            <option value="2">Battery issue</option>
                            <option value="3">Charging Port Issue</option>
                            <option value="4">Software issue</option>
                            <option value="5">Water or Liquid Issue</option>
                            <option value="6">Speaker and Mic Issue</option>
                          </select>
                        </div>
                      </div>
                      <div class="row g-3">
                        <div class="col m-3">
                            <label class="text-lb m-2" for="msg">Message</label>
                            <textarea class="form-control m-2" id="msg" name="msg" placeholder="Message" rows="3"></textarea>
                        </div>
                      </div>

                      <!-- message -->
                    </form>
                  </div>
                  <div class="modal-footer">
                    <button
                      type="button"
                      class="btn btn-1"
                      data-bs-dismiss="modal"
                    >
                      Close
                    </button>
                    <button type="submit" class="btn btn-2">
                      Save changes
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </nav>

    <!-- home container -->
    <section id="home">
      <div class="container home">
        <img src="./images/main-bg.jpg" alt="main" style="width: 100%" />
        <div class="centered">
          <button
            type="button"
            class="btn btn-1"
            data-bs-toggle="modal"
            data-bs-target="#exampleModal"
          >
            <i class="fa fa-phone p-2"></i>Book Now
          </button>
        </div>
      </div>
      <!-- simple about us  -->
      <div class="container text-center">
        <div
          class="about pb-3"
          style="background-color: #740d57; color: #fff; padding-top: 50px"
        >
          <h1>What can we do</h1>
          <p class="text-center p-5">
            We provide fast, reliable repairs for mobile phones and laptops.
            Whether it's a cracked screen, battery issue, or software problem,
            out expert technicians quickly diagnose and fix your device using
            high-quailty parts. With affordable prices and a focus on customer
            satisfaction, we ensure your devices are back to working like
            new--often within the same day.
          </p>
          <button
            class="btn btn-1 m-2"
            data-bs-toggle="modal"
            data-bs-target="#exampleModal"
          >
            <i class="fa fa-phone p-2"></i>Get a Query
          </button>
        </div>
      </div>
      <!-- about -->
      <div class="container text-center align-items-center">
        <div
          class="services pb-3"
          style="background-color: #a81764; color: #fff; padding-top: 50px"
        >
          <h1>Services</h1>
          <div
            class="row g-3 flex-wrap justify-content-center align-items-center"
          >
            <div class="col m-3 p-3">
              <img
                class="img m-2"
                style="
                  width: 50%;
                  border-radius: 25px;
                  box-shadow: 2px -2px 50px 3px #fff;
                "
                src="./images/iphone.jpg"
                alt="iphone"
              />
              <h6
                class="mt-2 mb-2"
                style="font-size: 1.2rem; letter-spacing: 3px"
              >
                Iphone
              </h6>
            </div>
            <div class="col m-3 p-3">
              <img
                class="img m-2"
                style="
                  width: 50%;
                  border-radius: 25px;
                  box-shadow: 2px -2px 50px 3px #fff;
                "
                src="./images/samsung.jpg"
                alt="iphone"
              />
              <h6
                class="mt-2 mb-2"
                style="font-size: 1.2rem; letter-spacing: 3px"
              >
                Samsung
              </h6>
            </div>
            <div class="col m-3 p-3">
              <img
                class="img m-2"
                style="
                  width: 50%;
                  border-radius: 25px;
                  box-shadow: 2px -2px 50px 3px #fff;
                "
                src="./images/andriod.jpg"
                alt="iphone"
              />
              <h6
                class="mt-2 mb-2"
                style="font-size: 1.2rem; letter-spacing: 3px"
              >
                Andriod
              </h6>
            </div>
          </div>
          <div class="row g-3 flex-wrap">
            <div class="col m-3 p-3">
              <img
                class="img m-2"
                style="
                  width: 50%;
                  border-radius: 25px;
                  box-shadow: 2px -2px 50px 3px #fff;
                "
                src="./images/macbook.jpg"
                alt="iphone"
              />
              <h6
                class="mt-2 mb-2"
                style="font-size: 1.2rem; letter-spacing: 3px"
              >
                Mackbook
              </h6>
            </div>
            <div class="col m-3 p-3">
              <img
                class="img m-2"
                style="
                  width: 50%;
                  border-radius: 25px;
                  box-shadow: 2px -2px 50px 3px #fff;
                "
                src="./images/game.jpg"
                alt="iphone"
              />
              <h6
                class="mt-2 mb-2"
                style="font-size: 1.2rem; letter-spacing: 3px"
              >
                Game Console
              </h6>
            </div>
            <div class="col m-3 p-3">
              <img
                class="img m-2"
                style="
                  width: 50%;
                  border-radius: 25px;
                  box-shadow: 2px -2px 50px 3px #fff;
                "
                src="./images/iwatch.jpg"
                alt="iphone"
              />
              <h6
                class="mt-2 mb-2"
                style="font-size: 1.2rem; letter-spacing: 3px"
              >
                i-Watch
              </h6>
            </div>
          </div>
          <button
            class="btn btn-1 m-2"
            data-bs-toggle="modal"
            data-bs-target="#exampleModal"
          >
            <i class="fa fa-phone p-2"></i>Get a Query
          </button>
        </div>
      </div>
      <!-- mobile Repair -->
      <div class="container">
        <div class="container-1">
            <div class="box">
                <img src="./images/iphone.jpg" alt="Image 1">
            </div>
            <div class="box">
                <div class="text">
                <h1>Mobile Phone Repairs</h1>
                <p>
                  <li>
                    <strong style="letter-spacing: 2px"
                      >Screen Replacement :
                    </strong>
                    Cracked and shattered screen? We'll replace it with high-quailty
                    parts to restore your phone to its original conndition.
                  </li>
                  <li>
                    <strong>Battery Repalcement : </strong>If your phone isn't
                    holding a charge or draning quickly, we'll install a new battery
                    to improve performance.
                  </li>
                  <li>
                    <strong>Camera Repair : </strong>Whether your camera lens is
                    cracked or not functioning properly, we can repair or replace
                    it.
                  </li>
                  <li>
                    <strong>Charging Port Repair : </strong>Having a trouble
                    charging your phone? Our experts will fix charging port issues
                    to ensure smooth connectivity.
                  </li>
                  <li>
                    <strong>Water Damage : </strong>If your phone has suffered water
                    Damage, we'll do a thorough diagnostic and repair to restore its
                    functionality.
                  </li>
                  <li>
                    <strong>Software Issue : </strong>We handle software-related
                    issues like operating system glitches, app crashes, or malware
                    infections.
                  </li>
                </p>
                <button
                  type="button"
                  class="btn btn-1"
                  data-bs-toggle="modal"
                  data-bs-target="#exampleModal"
                >
                  <i class="fa fa-phone p-2"></i>Get a Query
                </button>
                </div>
            </div>
        </div>
    </div>
    <!-- laptop repair -->
    <div class="container">
        <div class="container-2">
            <div class="box">
                <div class="text">
                <h1>Laptop Repairs</h1>
                <p>
                  <li>
                    <strong style="letter-spacing: 2px"
                      >Screen Replacement :
                    </strong>
                    Cracked and shattered screen? We'll replace it with high-quailty
                    parts to restore your phone to its original conndition.
                  </li>
                  <li>
                    <strong>Battery Repalcement : </strong>If your phone isn't
                    holding a charge or draning quickly, we'll install a new battery
                    to improve performance.
                  </li>
                  <li>
                    <strong>Camera Repair : </strong>Whether your camera lens is
                    cracked or not functioning properly, we can repair or replace
                    it.
                  </li>
                  <li>
                    <strong>Charging Port Repair : </strong>Having a trouble
                    charging your phone? Our experts will fix charging port issues
                    to ensure smooth connectivity.
                  </li>
                  <li>
                    <strong>Water Damage : </strong>If your phone has suffered water
                    Damage, we'll do a thorough diagnostic and repair to restore its
                    functionality.
                  </li>
                  <li>
                    <strong>Software Issue : </strong>We handle software-related
                    issues like operating system glitches, app crashes, or malware
                    infections.
                  </li>
                </p>
                <button
                  type="button"
                  class="btn btn-1"
                  data-bs-toggle="modal"
                  data-bs-target="#exampleModal"
                >
                  <i class="fa fa-phone p-2"></i>Get a Query
                </button>
                </div>
            </div>
            <div class="box">
                <img src="./images/macbook.jpg" alt="Image 1">
            </div>
            
        </div>
        
    </div>










    <!-- footer -->
    <div class="container">
    <!-- <?php include("footer.php")?> -->
    <div class="container" style="background:linear-gradient(to bottom, #a81764,#740d57); color:#fff; font-family:'Poppins';">
      <footer class="p-5">
        <div class="row">
          <div class="col-6 col-md-2 mb-3">
            <ul class="nav flex-column" >
              <li class="nav-item mb-2"><a href="index.html" class="nav-link p-0" style="color:#fff;">Home</a></li>
              <li class="nav-item mb-2"><a href="service.html" class="nav-link p-0 " style="color:#fff;">Services</a></li>
              <li class="nav-item mb-2"><a href="contact.html" class="nav-link p-0" style="color:#fff;">Contact us</a></li>
            </ul>
          </div>
    
          <div class="col-6 col-md-2 mb-3">
            <ul class="nav flex-column">
              <li class="nav-item mb-2"><a href="service.html" class="nav-link p-0" style="color:#fff;">Mobile</a></li>
              <li class="nav-item mb-2"><a href="service.html" class="nav-link p-0" style="color:#fff;">Laptop</a></li>
              <li class="nav-item mb-2"><a href="service.html" class="nav-link p-0" style="color:#fff;">i-Watch</a></li>
              <li class="nav-item mb-2"><a href="service.html" class="nav-link p-0" style="color:#fff;">iPhone</a></li>
              <li class="nav-item mb-2"><a href="service.html" class="nav-link p-0" style="color:#fff;">More</a></li>
            </ul>
          </div>
          <div class="col-md-5 offset-md-1 mb-3">
            <form>
              <h5>Subscribe to our newsletter</h5>
              <p>Monthly digest of what's new and exciting from us.</p>
              <div class="d-flex flex-column flex-sm-row w-100 gap-2">
                <label for="newsletter1" class="visually-hidden">Email address</label>
                <input id="newsletter1" type="text" class="form-control" placeholder="Email address" fdprocessedid="3e3hk">
                <button class="btn btn-1" type="button" fdprocessedid="5j0po">Subscribe</button>
              </div>
            </form>
          </div>
        </div>
    
        <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
          <p>© 2024 Company, Inc. All rights reserved.</p>
          <ul class="list-unstyled d-flex">
            <li class="ms-3"><a class="link-body-emphasis" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"></use></svg></a></li>
            <li class="ms-3"><a class="link-body-emphasis" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"></use></svg></a></li>
            <li class="ms-3"><a class="link-body-emphasis" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"></use></svg></a></li>
          </ul>
        </div>
      </footer>
    </div>
    </div>
    </section>

    <!-- section-flex -->

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
