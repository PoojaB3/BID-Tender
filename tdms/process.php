<?php
$name=$_POST['name'];
$ad=$_POST['adress'];
$mail=$_POST['mail'];
$ph=$_POST['contact'];
$project=$_POST['project'];
$file=$_FILES['file']['name'];
$t=$_FILES['file']['tmp_name'];
$uploads_dir='./files';
move_uploaded_file($t,$uploads_dir.'/'.$file);
//$con=new mysqli('localhost','root','','tenderdb');

$con = mysqli_connect('localhost','root','','tenderdb');
if($con->connect_error){
    die('Failed');
}else{
    $stmt=$con->prepare("insert into tender(name,adress,mail,contact,project,file) values(?,?,?,?,?,?)");
    $stmt->bind_param("sssiss",$name,$ad,$mail,$ph,$project,$file);
    $stmt->execute();
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
          <center>
            <div class="container bg-dark">
            <h1 class="p-5"></h1>
            <h1 class="p-5" style='color:red;'>Applied Successfully</h1>
            <h3 class='p-5'>Kindly Wait <br> for Results</h3>
          </center></div>
</div>
<script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
      crossorigin="anonymous"
    ></script>
</body>
</html>
<?php
    $stmt->close();
    $con->close();
}
?>