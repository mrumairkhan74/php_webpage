<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"/>
    <link rel="stylesheet" href="./style/style.scss" />

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
</head>
<body>
<div class="container" style="background:linear-gradient(to bottom, #a81764,#740d57); color:#fff; font-family:'Poppins';">
  <footer class="p-5">
    <div class="row">
      <div class="col-6 col-md-2 mb-3">
        <ul class="nav flex-column" >
          <li class="nav-item mb-2"><a href="index.php" class="nav-link p-0" style="color:#fff;">Home</a></li>
          <li class="nav-item mb-2"><a href="service.php" class="nav-link p-0 " style="color:#fff;">Services</a></li>
          <li class="nav-item mb-2"><a href="contact.php" class="nav-link p-0" style="color:#fff;">Contact us</a></li>
        </ul>
      </div>

      <div class="col-6 col-md-2 mb-3">
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="service.php" class="nav-link p-0" style="color:#fff;">Mobile</a></li>
          <li class="nav-item mb-2"><a href="service.php" class="nav-link p-0" style="color:#fff;">Laptop</a></li>
          <li class="nav-item mb-2"><a href="service.php" class="nav-link p-0" style="color:#fff;">i-Watch</a></li>
          <li class="nav-item mb-2"><a href="service.php" class="nav-link p-0" style="color:#fff;">iPhone</a></li>
          <li class="nav-item mb-2"><a href="service.php" class="nav-link p-0" style="color:#fff;">More</a></li>
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
</body>
</html>