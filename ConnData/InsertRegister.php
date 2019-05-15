<?php require("connectDB.php");?>
<?php
    $sql = "INSERT INTO all_member (m_firstname, m_lastname, m_password,m_status) VALUES ('".$_POST['firstname']."','".$_POST['lastname']."','".$_POST['password']."','".$_POST['status']."')";
    if ($conn->query($sql) === TRUE) {
    ?> 
        <!-- ข้อความเช็คว่า Insert สำเร็จไหม -->
        <center>
            Insert Success ! ! ! <br>
        </center>
        <!-- End -->
    <?php
        header("location:../login.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
?>