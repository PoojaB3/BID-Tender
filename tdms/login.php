<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9"
      crossorigin="anonymous"
    />
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
    <div class="container-xl-fluid" id="login">
        <div class="row justify-content-center border-primary border-2 bg-tertiary">
        <div class="col-md-5 text-center text-md-center">
            <h1>
              <div class="display-3">Login</div></h1>
             <h5> <div class="display-10 text-muted">Only for company employees</div></h5>
            <br><br>
            <form method="post" action="admin.php" enctype="multipart/form-data">
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email address</label><br>
                  <input type="email" class="border-primary border-2" name="email" size="30" style="align-self: center;">
                  <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Password</label><br>
                  <input type="password" class="border-primary border-2" name="pw" style="align-self: center;" size="30">
                </div>
                <button type="submit" class="btn btn btn-outline-primary btn-lg mt-3">Login</button>
              </form>
            </div></div>
      </div></div>
      <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
      crossorigin="anonymous"
    ></script>
</body>
</html>