<?php require("connectDB.php");?>

<?php
    $sql = "INSERT INTO comment ( c_detail, c_own, c_confirm, c_date, c_linkpost) 
    VALUES ('".$_POST['commentdetail']."','".$_POST['commentown']."','".$_POST['commentconfirm']."'
    ,'".$_POST['commentdate']."','".$_POST['id_linkpost']."')";
    if ($conn->query($sql) === TRUE) {
        header("location:../Posts/post_selected.php?getPostID=".$_POST['id_linkpost']);      
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
?>

