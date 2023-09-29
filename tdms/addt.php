    <?php 
        $pname=$_POST['pname'];
        $loc=$_POST['loc'];
        $des=$_POST['des'];
        $dat=$_POST['dat'];
        $im=$_FILES['image']['name'];
        $tim=$_FILES['image']['tmp_name'];
        $file=$_FILES['file']['name'];
        $tf=$_FILES['file']['tmp_name'];
        $uploads_dir='./assets';
        move_uploaded_file($t,$uploads_dir.'/'.$im);
        move_uploaded_file($t,$uploads_dir.'/'.$file);
        //$con=new mysqli('localhost','root','','tenderdb');
        
        $con = mysqli_connect('localhost','root','','tenderdb');
        if($con->connect_error){
            die('Failed');
        }else{
            $stmt=$con->prepare("insert into list(name,last_date,des,image,file,loc) values(?,?,?,?,?,?)");
            $stmt->bind_param("ssssss",$pname,$dat,$des,$im,$file,$loc);
            $stmt->execute();
            $stmt->close();
            $con->close();
        echo "<script> alert('Added Successfully') </script>"; ?>
        <?php
        header('Location:./admin.php');
        die();
        //echo "<script> alert('Added Successfully') </script>"; 
        }
        ?>