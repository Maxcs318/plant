<?php require("connectDB.php");?>

<?php
echo $_POST["own"].$_POST["newDisease"];
    $sql = "UPDATE classification SET cl_disease = '".$_POST["newDisease"]."' WHERE cl_id = '".$_POST["own"]."' ";
    if ($conn->query($sql) === TRUE) { 
         header("location:../Classification/classification_list_all.php");       
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
?>