<?php require("connectDB.php");?>
<?php
    $sql = "INSERT INTO member (m_firstname, m_lastname, m_email, m_phone, m_username, m_password, m_status) 
    VALUES ('".$_POST['firstname']."','".$_POST['lastname']."','".$_POST['email']."',
            '".$_POST['phone']."','".$_POST['username']."','".$_POST['password']."','".$_POST['status']."')";
    if ($conn->query($sql) === TRUE) {
    ?> 
        <script language="javascript">
            alert("Register Success.");
            location.href = "../login.php";
        </script>
    <?php
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
?>