<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9"
    crossorigin="anonymous"/>
    <style>
        #opt,#opt1{
            background:cyan;
            color:black;
        }
        #opt:hover,#opt1:hover{
            background: purple;
            transition: .5s ease;
            transform: scale(1.15);
        }
    </style>
  <script src="./form.js"></script>
</head>
<body>
<div class="container-xl">
        <nav class="navbar navbar-expand-md navbar-light bg-body-tertiary">
                <div class="container-fluid">
                    <a class="navbar-brand" href="./index.html">
                        <img src="./assets/BT_logo_2019.svg" alt="Logo" width="40" height="40" class="d-inline-block align-text-top">
                        <span class="fw-bold pl-5">BID-TENDERS</span></a>                
              <button class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#main-nav"
                aria-controls="main-nav"
                aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse justify-content-end align-center" id="main-nav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                      <a href="./tender.php" class="nav-link">Tenders</a>
                    </li><li class="nav-item">
                      <a href="./contact.php" class="nav-link">Reach Us</a>
                    </li><li class="nav-item">
                      <a href="./faq.php" class="nav-link">FAQ</a>
                    </li>
                </li><li class="nav-item">
                    <a href="./login.php" class="nav-link">Login</a>
                  </li>
                  </li></ul>
                </div>
            </div>
          </nav>
          <center>
    <div class="container-fluid row justify-content-center border-primary border-2 g-5 py-5 gap-5" >
        <div class="card col-md-5 col-lg-5 py-3 text-center text-md-center border border-info text-white" id='opt1'>
            <a onclick="openform(id)" href="" class="btn bg-tertiary">
                <img src="./assets/download.jpg" class="card-img-top" alt="" style="max-width: 70%; align-self: center;">
                <div class="card-body">
                  <h3 class="card-title" id="t1">Add Contracts</h3>
                </div></a>
            </div>
        <div class="card col-md-5 col-lg-5 py-3 text-center text-md-center border border-info text-white" id='opt'>
            <a onclick="openform(id)" href="./view.php" class="btn">
                <img src="./assets/s2.jpg" class="card-img-top" alt="" style="max-width: 70%; align-self: center;">
                <div class="card-body">
                  <h3 class="card-title" id="t1">View Proposals</h3>
                </div></a>
        </div>
    </div></center></div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
          integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
          crossorigin="anonymous"></script> 
</body>
</html>
