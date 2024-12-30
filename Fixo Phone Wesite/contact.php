<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fixo Phones Repairs</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="./style/style.scss">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>

<body style="font-family:'Poppins'">

  <!-- navbar -->
  <marquee behavior="smooth" direction="left" style="background-color: #a81764; color:#fff; font-size: 2rem; letter-spacing: 3px; font-weight: 800; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">We Pick We Repair We Deliver</marquee>
  <!-- navbar -->
  <nav class="navbar navbar-expand-sm fixed">
    <div class="container-fluid">
      <a class="navbar-brand" href="javascript:void(0)">Logo</a>
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#mynavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="mynavbar">
        <ul class="navbar-nav m-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="service.php">Service</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="contact.php">Contact Us</a>
          </li>
        </ul>
        <form class="d-flex">
          <!-- Button trigger modal -->
          <!-- Button trigger modal -->
          <button
            type="button"
            class="btn btn-1"
            data-bs-toggle="modal"
            data-bs-target="#exampleModal">
            Book Now
          </button>

          <!-- Modal -->
          <div
            class="modal fade"
            id="exampleModal"
            tabindex="-1"
            aria-labelledby="exampleModalLabel"
            aria-hidden="true">
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
                    aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <form action="save.php" method="POST">
                    <div class="row g-3">
                      <div class="col m-3">
                        <label class="text-lb" for="customer">Customer name</label>
                        <input
                          type="text"
                          class="form-control m-2"
                          placeholder="First name"
                          aria-label="Customername"
                          name="name"
                          id="customer"
                          required />
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
                          required />
                      </div>
                    </div>
                    <div class="row g-3">
                      <div class="col m-3">
                        <label class="text-lb" for="pickup">Pickup Location</label>
                        <input
                          type="text"
                          class="form-control m-2"
                          placeholder="Pickup Location"
                          aria-label="pickup"
                          id="pickup"
                          name="pickup"
                          required />
                      </div>
                    </div>
                    <!-- Best way to reach-->
                    <div class="row g-3">
                      <div class="col m-3">
                        <label class="text-lb" for="best">Best way to Reach You</label>
                        <select
                          class="form-select m-2"
                          aria-label="Select one"
                          id="best"
                          name="bestway"
                          required>
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
                          required />
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
                          required />
                      </div>
                    </div>

                    <!-- for Devices -->

                    <div class="row g-3">
                      <div class="col m-3">
                        <label class="text-lb" for="best-1">Devices</label>
                        <select
                          class="form-select m-2"
                          aria-label="Select one"
                          id="best-1"
                          required
                          name="device">
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
                          name="problem">
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
                    data-bs-dismiss="modal">
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
  <div class="container contact p-3 m-auto">

    <?php
    if (isset($_SESSION["status"])) {
      echo $_SESSION["status"];      
      unset($status);
    }
    ?>

    <h1 class="text-center">Contact Us</h1>
    <form action="save.php" method="POST">
      <div class="row g-3">
        <div class="col m-3">
          <label class="text-lb" for="customer">Customer name</label>
          <input
            type="text"
            class="form-control m-2"
            placeholder="First name"
            aria-label="Customername"
            name="name"
            id="customer"
            required />
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
            required />
        </div>
      </div>
      <div class="row g-3">
        <div class="col m-3">
          <label class="text-lb" for="pickup">Pickup Location</label>
          <input
            type="text"
            class="form-control m-2"
            placeholder="Pickup Location"
            aria-label="pickup"
            id="pickup"
            name="pickup"
            required />
        </div>
      </div>
      <!-- Best way to reach-->
      <div class="row g-3">
        <div class="col m-3">
          <label class="text-lb" for="best">Best way to Reach You</label>
          <select
            class="form-select m-2"
            aria-label="Select one"
            id="best"
            name="bestway"
            required>
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
            required />
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
            required />
        </div>
      </div>

      <!-- for Devices -->

      <div class="row g-3">
        <div class="col m-3">
          <label class="text-lb" for="best-1">Devices</label>
          <select
            class="form-select m-2"
            aria-label="Select one"
            id="best-1"
            required
            name="device">
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
            name="problem">
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
      <button
        type="button"
        class="btn btn-1 m-1"
        data-bs-dismiss="modal">
        Close
      </button>
      <button type="submit" name="save" class="btn btn-2 m-1">
        Save
      </button>
    </form>
  </div>



  <!-- Latest compiled JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>