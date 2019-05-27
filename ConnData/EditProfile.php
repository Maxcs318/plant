<?php session_start(); ?>
<?php
for($i=0;$i<count($_FILES["imageprofile"]["name"]);$i++)
{
	if($_FILES["imageprofile"]["name"][$i] != "")
	{   
        $newfilename= date('dmYHis').str_replace(" ", "", basename($_FILES["imageprofile"]["name"][$i]));
		if(move_uploaded_file($_FILES["imageprofile"]["tmp_name"][$i],"../image_profile/".$newfilename))
		{
            require("connectDB.php");
            $sql = "UPDATE member SET m_imageprofile= '".$newfilename."' WHERE m_id= '".$_SESSION['m_id']."' ";
            if ($conn->query($sql) === TRUE) {
                // header("location:../allMember.php");      
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
            $conn->close();
        }
	}
}
?>

<?php require("connectDB.php");?>
<?php
    $sql = "UPDATE member SET m_firstname = '".$_POST["firstname"]."',m_lastname = '".$_POST["lastname"]."',
    m_email = '".$_POST["email"]."',m_phone = '".$_POST["phone"]."',
    m_username = '".$_POST["username"]."',m_password = '".$_POST["password"]."'

    WHERE m_id = '".$_SESSION['m_id']."' ";
    if ($conn->query($sql) === TRUE) { 
		$_SESSION["m_firstname"] = $_POST["firstname"];
		$_SESSION["m_lastname"] = $_POST["lastname"];
		$_SESSION["m_email"] = $_POST["email"];
		$_SESSION["m_phone"] = $_POST["phone"];
        $_SESSION["m_username"] = $_POST["username"];    
        ?>
        <script language="javascript">
            alert("Edit Profile Success.");
            location.href = "../index.php";
        </script>
        <?php
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
?>