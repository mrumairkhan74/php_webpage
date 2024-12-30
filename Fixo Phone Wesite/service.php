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

<body>
  <marquee behavior="smooth" direction="left" style="background-color: #a81764; color:#fff; font-size: 2rem; letter-spacing: 3px; font-weight: 800; font-family: 'Poppins',serif;">
    We Pick We Repair We Deliver
  </marquee>
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
            <a class="nav-link active" href="service.php">Service</a>
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
  <section class="container service" style="font-family:'Poppins';">
    <!--Mobile Repairs  -->
  <div class="container">
      <div
        class="services text-center p-2"
        style="background-color: #a81764; color: #fff; ">
        <h1>Services</h1>
      </div>
      <div class="container-1">
        <div class="box">
          <img src="./images/iphone.jpg" alt="Image 1">
        </div>
        <div class="box">
          <div class="text">
            <h1>Mobile Phone Repairs</h1>
            <p>
              <li>
                <strong style="letter-spacing: 2px">Screen Replacement :
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
              data-bs-target="#exampleModal">
              <i class="fa fa-phone p-2"></i>Get a Query
            </button>
          </div>
        </div>
      </div>
    </div>
    <!-- Laptop Repairs -->
    <div class="container">
      <div class="container-2">
        <div class="box">
          <div class="text">
            <h1>Laptop Repairs</h1>
            <p>
              <li>
                <strong style="letter-spacing: 2px">Screen Replacement :
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
              data-bs-target="#exampleModal">
              <i class="fa fa-phone p-2"></i>Get a Query
            </button>
          </div>
        </div>
        <div class="box">
          <img src="./images/macbook.jpg" alt="Image 1">
        </div>

      </div>
    </div>
    <div class="container">
      <!-- Services -->
      <div class="container-3" style="background-color:#740d57; color:#fff; padding:30px; font-family:'Poppins',serif; letter-spacing: 1px;">
        <h2 class="text-center p-3">Services</h2>
        <p>A mobile and laptop repair shop provides essential services for fixing and maintaining smartphones, laptops, and other electronic devices. These shops typically handle issues such as screen replacements, battery repairs, software troubleshooting, and hardware fixes like charging port or motherboard repairs. Technicians use specialized tools and diagnostic software to assess and repair devices, ensuring a fast and efficient service. The shop may also offer data recovery, virus removal, and general maintenance services for both individual customers and businesses. With expertise in both hardware and software, these repair shops are crucial for extending the lifespan of devices, providing warranty options, and offering competitive pricing for common repair needs.</p>
        <ol class="p-3">
          <ul>
            <li>
              <h4>Services Offered</h4>
            </li>
            <ol>
              <li>
                <ul class="p-2">
                  <h5>Mobile Repair:</h5>
                  <li><strong>Screen Replacement:</strong> Replacing cracked or damaged screens for various mobile models (smartphones, tablets).</li>
                  <li><strong>Battery Replacement: </strong>Fixing issues related to battery performance, including slow charging or no charging.</li>
                  <li><strong>Water Damage Repair:</strong> Salvaging devices affected by water damage.</li>
                  <li><strong>Charging Port Repair:</strong>Fixing issues where the charging port is loose or not working.</li>
                  <li><strong>Camera Repair:</strong> Repairing or replacing faulty front or rear cameras.</li>
                  <li><strong>Software Issues: </strong> Fixing problems related to the operating system, including factory resets, software upgrades, app crashes, and virus removal.</li>
                  <li><strong>Speaker/Microphone Repair: </strong> Repairing or replacing faulty speakers or microphones.</li>
                  <li><strong>Button/Touchscreen Repair:</strong> Fixing issues with unresponsive buttons or malfunctioning touchscreens.</li>
                </ul>
              </li>
              <li>
                <ul class="p-2">
                  <h5>Laptop Repair:</h5>
                  <li><strong>Screen Repair/Replacement:</strong> Fixing cracked, dim, or malfunctioning laptop screens.</li>
                  <li><strong>Battery Issues:</strong>Replacing old or damaged laptop batteries and improving battery performance.</li>
                  <li><strong>Keyboard Repair:</strong>Fixing stuck or unresponsive keys on a laptop keyboard.</li>
                  <li><strong>HDD/SSD Replacement:</strong><br>Upgrading or replacing malfunctioning hard drives and SSDs for faster performance or data recovery.</li>
                  <li><strong>RAM Upgrade:</strong>Increasing the memory (RAM) for better speed or replacing faulty RAM.</li>
                  <li><strong>Overheating Fixes:</strong>Cleaning out dust, replacing thermal paste, or fixing fan issues to prevent overheating.</li>
                  <li><strong>Motherboard Repair: </strong>Repairing or replacing faulty components on the motherboard.</li>
                  <li><strong>Data Recovery:</strong> Recovering lost data from damaged or corrupted hard drives or SSDs.</li>
                  <li><strong>Software Issues:</strong>Resolving operating system problems, reinstalling OS, troubleshooting application errors, and removing viruses/malware.</li>
                </ul>
              </li>
              <li>
                <ul class="p-2">
                  <h5>Diagnostic Services:</h5>
                  <p>Many shops offer diagnostic checks to identify issues in both laptops and mobile devices. This could include identifying hidden software problems, hardware damage, or battery issues.</p>
                </ul>
              </li>
            </ol>
          </ul>

        </ol>
      </div>
      <!-- Typical Repair  -->
      <div class="container-3" style="background-color:#a80164; color:#fff; padding:30px; font-family:'Poppins', serif; letter-spacing: 1px;">
        <ol class="p-3">
          <ul>
            <li>
              <h4>Typical Equipment in the Repair Shop</h4>
            </li>
            <ol>
              <li>
                <ul class="p-2">
                  <h5>Tools and Machines:</h5>
                  <li><strong>Screwdrivers, Prying Tools, and Heat Guns:</strong>For opening devices safely without damaging them.</li>
                  <li><strong>Soldering Equipment:</strong>To repair or replace small components on the motherboard or other circuit boards.</li>
                  <li><strong>Diagnostic Devices:</strong> To test battery health, screen quality, and performance.</li>
                  <li><strong>Data Recovery Tools:</strong>To retrieve data from damaged storage devices.</li>
                  <li><strong>Screen Laminating Machines:</strong> For professional screen replacements, especially for high-end devices.</li> </ul>
              </li>
              <li>
                <ul class="p-2">
                  <h5 style="font-weight:bolder">Parts and Components:</h5>
                  <li><strong>Mobile Parts: </strong>Replacement screens, batteries, charging ports, and internal components.</li>
                  <li><strong>Laptop Parts::</strong> Replacement screens, keyboards, RAM, hard drives, and power adapters.</li></ul>
              </li>
              <li>
                <ul class="p-2">
                  <h5>Software:</h5>
                  <li><strong>Diagnostic Software:</strong>Tools to test hardware, run system checks, and analyze issues.</li>
                  <li><strong>Flash Tools:</strong> For reinstalling operating systems and firmware.</li>
                  <li><strong>Anti-virus/Anti-malware Software:</strong>To remove harmful software and ensure devices run smoothly.</li>
                </ul>
              </li>
              
            </ol>
          </ul>

        </ol>
      </div>
      <!-- Staff && Expertise -->
      <div class="container-3" style="background-color:#740d57; color:#fff; padding:30px; font-family:'Poppins', serif; letter-spacing: 1px;">
        <ol class="p-3">
          <ul>
            <li>
              <h4>Staff & Expertise</h4>
            </li>
            <p>The shop is typically run by professionals who are skilled in both hardware and software repair. The staff includes:</p>
            <ol>
              <li>
                <ul class="p-2">
                  <li><strong>Technicians:</strong> The core team responsible for diagnosing and repairing devices. They need to be skilled in both electronics and computer science.</li>
                  <li><strong>Customer Support/Receptionist: </strong>To handle customer queries, book appointments, and ensure a smooth workflow.</li>
                  <li><strong>Data Recovery Specialists:</strong> If the shop offers advanced data recovery services, these specialists will focus on salvaging data from damaged or corrupt storage media.</li>
              </li>
              
            </ol>
          </ul>

        </ol>
      </div>
      <!-- Typical Customer -->
      <div class="container-3" style="background-color:#a80164; color:#fff; padding:30px; font-family:'Poppins', serif; letter-spacing: 1px;">
        <ol class="p-3">
          <ul>
            <li>
              <h4>Types of Customers</h4>
            </li>
            <ol>
              <li>
                <ul class="p-2">
                  <li><strong>Individual Consumers:</strong>People with personal devices in need of repair, including common problems like broken screens, charging issues, or software crashes.</li>
                  <li><strong>Businesses: </strong>Companies with multiple devices (mobiles, laptops) needing bulk repairs, maintenance, or service agreements.</li>
                  <li><strong>Retailers and Resellers:</strong>Shops that might refer customers to repair shops for warranty services or device repairs.</li>
              </li>
              
            </ol>
          </ul>

        </ol>
      </div>
      <!-- Operating Hours and Location -->
      <div class="container-3" style="background-color:#740d57; color:#fff; padding:30px; font-family:'Poppins', serif; letter-spacing: 1px;">
        <ol class="p-3">
          <ul>
            <li>
              <h4>Operating Hours and Location</h4>
            </li>
            <ol>
              <li>Mobile and laptop repair shops typically operate during regular business hours, but some shops may offer extended hours, especially in busy urban areas.</li>
              <li>
                <ul class="p-2">
                  <h5>Location Considerations:</h5>
                  <li><strong>High Foot Traffic Areas:</strong>Many repair shops are located in commercial zones or near universities, malls, and tech hubs.</li>
                  <li><strong>Online Services:</strong>Some shops also offer mail-in repair services where customers can send their devices for repair.</li>
                </ul>
              </li>
            </ol>
          </ul>

        </ol>
      </div>
      <!-- Pricing -->
      <div class="container-3" style="background-color:#a80164; color:#fff; padding:30px; font-family:'Poppins', serif; letter-spacing: 1px;">
        <ol class="p-3">
          <ul>
            <li>
              <h4>Pricing</h4>
            </li>
            <p>Pricing varies depending on the type of repair, the device model, and the complexity of the problem. Common pricing structures include:</p>
            <ol>
                <ul class="p-2">
                  <li><strong>Flat Fee:</strong>Fixed prices for common repairs like screen replacements or battery swaps.</li>
                  <li><strong>Hourly Rate:</strong> For more complex repairs or diagnostic services.</li>
                  <li><strong>Part Costs:</strong>  The customer may pay for parts separately (e.g., battery, screen) in addition to labor charges.</li>
                </ul>
              </li>
            </ol>
          </ul>

        </ol>
      </div>
      <!-- Warranty and Guarantees -->
      <div class="container-3" style="background-color:#740d57; color:#fff; padding:30px; font-family:'Poppins', serif; letter-spacing: 1px;">
        <ol class="p-3">
          <ul>
            <li>
              <h4>Warranty and Guarantees</h4>
            </li>
            <p>Most repair shops offer warranties on their services, covering the repaired parts for a certain period (usually 30–90 days). This ensures the customer has peace of mind in case the problem reoccurs after the repair.</p>
            
          </ul>
          
        </ol>
      </div>
      <!--  Customer Experience -->
      <div class="container-3" style="background-color:#a80164; color:#fff; padding:30px; font-family:'Poppins', serif; letter-spacing: 1px;">
        <ol class="p-3">
          <ul>
            <li>
              <h4> Customer Experience</h4>
            </li>
            <p>A good repair shop typically provides:</p>
            <ol>
                <ul class="p-2">
                  <li><strong>Quick Turnaround: </strong>Fast and efficient repairs, especially for common problems like screen replacements.</li>
                  <li><strong>Transparent Communication:</strong> Clear updates regarding the progress of repairs, costs, and any potential issues.</li>
                  <li><strong>Customer Feedback:</strong> Positive reviews and ratings from past customers, ensuring that the shop is reliable and trustworthy.</li>
                </ul>
              </li>
            </ol>
          </ul>

        </ol>
      </div>
      <!-- Challenges Faced by Mobile and Laptop Repair Shops -->
      <div class="container-3" style="background-color:#740d57; color:#fff; padding:30px; font-family:'Poppins', serif; letter-spacing: 1px;">
        <ol class="p-3">
          <ul>
            <li>
              <h4>Challenges Faced by Mobile and Laptop Repair Shops</h4>
            </li>
            <p>A good repair shop typically provides:</p>
            <ol>
                <ul class="p-2">
                  <li><strong>Counterfeit Parts: </strong>Some low-quality or counterfeit components might be sold at lower prices. Trusted shops ensure they use authentic or high-quality parts.</li>
                  <li><strong>Technology Advancements:</strong>With frequent updates and newer models, repair technicians need to stay up-to-date with the latest mobile and laptop technology.</li>
                  <li><strong>Competition:</strong>The increasing number of repair shops can lead to competitive pricing and the need for excellent customer service.</li>
                </ul>
              </li>
            </ol>
          </ul>

        </ol>
      </div>
    <!-- <?php include("footer.php")?> -->
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
    </div>
  </section>



  <!-- Latest compiled JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>