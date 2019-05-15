<?php require("connectDB.php");?>
<?php
    $sql = "INSERT INTO posts (p_name, p_detail, p_image, p_own, p_date) VALUES ('".$_POST['header']."'
    ,'".$_POST['detail']."','".$_POST['image']."','".$_POST['own']."','".$_POST['date']."')";
    if ($conn->query($sql) === TRUE) {
        header("location:../allMember.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // if (isset($_POST['Submit'])) {
    //     move_uploaded_file($_FILES["image"]["tmp_name"],"uploads/" . $_FILES["image"]["name"]);			
    //     $image=$_FILES["image"]["name"];
    //     $name=$_POST['header'];
    //     $detail=$_POST['detail'];
    //     $own=$_POST['own'];
    //     $date=$_POST['dedatetail'];
         
    //     // $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //     $sql = "INSERT INTO posts (p_name, p_detail, p_image, p_own, p_date) 
    //     VALUES ('$name','$detail','$image','$own','$date')";
         
    //     $conn->exec($sql);
    //     echo "<script>alert('Successfully Added!!!'); window.location='../index.php'</script>";
    // }

    $conn->close();
    
?>