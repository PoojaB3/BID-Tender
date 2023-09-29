<?php
    $con=mysqli_connect('localhost','root','','tenderdb');
    if($con->connect_error){
        die('Failed');
    }
    else{
        $query='select name from list';
        $res=mysqli_query($con,$query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apply Now</title>
    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9"
    crossorigin="anonymous"/>
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
          <div class="container-xl-fluid justify-content-center">
            <div class="row px-5 g-5 justify-content-around align-items-center">
                <div class="col-xl-7 g-5 text-center text-xl-center">
            <div class="panel panel-primary justify-content-center">
                <div class="panel-heading p-3 text-center bg-body-secondary">
                    <h3 style="color: purple;">Apply Now</h3>
                </div>
                <div class="panel-body bg-body-tertiary">
                    <form class="container-fluid" method="post" enctype="multipart/form-data" action="./process.php">
                        <div class="form-floating">
                            <input type="text" required class="form-control" id="floatingInputGrid" name="name">
                            <label for="floatingInputGrid">Company Name</label>
                          </div><br>
                        <div class="form-floating">
                            <input type="text" required class="form-control" id="floatingInputGrid" name="adress">
                            <label for="floatingInputGrid">Address</label>
                          </div><br>
                        <div class="row g-2">
                            <div class="col-md">
                              <div class="form-floating">
                                <input type="email" required class="form-control" id="floatingInputGrid" name="mail">
                                <label for="floatingInputGrid">Email address</label>
                              </div>
                            </div>
                            <div class="col-md">
                                <div class="form-floating">
                                    <input type="tel" required class="form-control" id="floatingInputGrid" name="contact">
                                    <label for="floatingInputGrid">Contact Details</label>
                                  </div>
                            </div>
                          </div><br>
                        <label for="project" class="form-label">Choose Project</label>
                        <select class='form-control' name='project'>
                    <?php    while($row=mysqli_fetch_assoc($res)) {   ?>
                        <option value="<?php echo $row['name'];?>"><?php echo $row['name'];?></option><?php } ?></select><br>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Upload Proposal Details File</label>
                            <input class="form-control" required type="File" name="file">
                          </div>
                          <input class="btn btn-primary mx-5" type="submit" value="Submit">
                        <input class="btn btn-primary mx-5" type="reset" value="Reset">
                        <br><br> </form>
                </div>
                <div class="panel-footer text-center bg-body-secondary">
                    <small>&copy; Bid-Tenders</small>
                </div></div>
            </div></div>
        </div>
    </div> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
          integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
          crossorigin="anonymous"></script>   
</body>
</html>
<?php
}
?>