
<?php
    $con=mysqli_connect('localhost','root','','tenderdb');
    if($con->connect_error){
        die('Failed');
    }
    else{
        $query='select * from list';
        $res=mysqli_query($con,$query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tenders</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9"
      crossorigin="anonymous"/>
      <style>
        #opt:hover{
            transition: .5s ease;
            transform: scale(1.1);
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
          <div class="container-fluid row justify-content-center border-primary border-2 bg-tertiary g-5 pt-3 gap-5">   
          <?php
                while($row=mysqli_fetch_assoc($res))
                {   ?>     
            <div class="card col-md-5 col-lg-5 py-3 border border-info text-center text-md-center bg-body-tertiary" id="opt">
              <img src="./assets/<?php echo $row['image'];?>" class="card-img-top" alt="" style="max-width: 70%; align-self: center;">
                <div class="card-body">
                  <h3 class="card-title" id="t2"><?php echo $row['name'];?></h3>
                  <p class="card-text"><?php echo $row['des'];?></p></div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                    <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                  </svg> <?php echo $row['loc'];?></li>
                  <li class="list-group-item">Last Date : <?php echo $row['last_date'];?></li></ul>
                  <div class="d-grid gap-2 d-md-block justify-content-center">
                    <a href="./assets/<?php echo $row['file'];?>" download class="btn btn-primary">DownLoad Document</a>
                    <a href="./form.php" class="btn btn-primary">Apply Now</a>
                  </div></div> <?php } ?>
          </div>
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
      crossorigin="anonymous"
    ></script>
</body>
</html>
<?php
}
?>