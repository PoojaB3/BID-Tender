<?php
    $con=mysqli_connect('localhost','root','','tenderdb');
    if($con->connect_error){
        die('Failed');
    }
    else{
        $query='select * from tender';
        $res=mysqli_query($con,$query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Proposals</title>
    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9"
    crossorigin="anonymous"/>
  <script src="./form.js"></script>
</head>
<body class='bg-dark '>
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
    <div class="container">
        <div class="row mt-5">
            <div class="col">
                <div class="card mt-5">
                    <div class="card-header">
                        <h2 class='display-6 text-center'>Proposals Recieved</h2>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered text-center">
                            <tr class="bg-dark text-white">
                                <th class="bg-dark text-white">Company name</th>
                                <th class="bg-dark text-white">Adress</th>
                                <th class="bg-dark text-white">Email</th>
                                <th class="bg-dark text-white">Contact</th>
                                <th class="bg-dark text-white">Project</th>
                                <th class="bg-dark text-white">Document</th>
                            </tr>
                            <tr>
                                <?php
                                while($row=mysqli_fetch_assoc($res))
                                {
                                    ?>
                                    <td><?php echo $row['name'];?></td>
                                    <td><?php echo $row['adress'];?></td>
                                    <td><?php echo $row['mail'];?></td>
                                    <td><?php echo $row['contact'];?></td>
                                    <td><?php echo $row['project'];?></td>
                                    <td><a href="./files/<?php echo $row['file'];?>" download class="btn btn-primary">DownLoad Document</a></td>
                                    </tr>
                                    <?php
                                }
                                ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div></div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
          integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
          crossorigin="anonymous"></script> 
</body>
</html>
<?php
}
?>