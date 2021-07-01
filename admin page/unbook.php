<?php 
    $servername = "localhost:3307";
    $username = "root";
    $password = "";
    $conn = new mysqli($servername, $username, $password);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }
    $db = mysqli_select_db($conn,"uvhotels");
    if($_GET['rt'] == 'a'){
    	$query = "update single_non_ac set holder_name = null, holder_id = null,holder_mobile = null,holder_address = null,child = null,adult = null,in_date = null,out_date = null,status = 0 where room_no = $_GET[rn]";
    }
    if($_GET['rt'] == 'b'){
    	$query = "update single_ac set holder_name = null, holder_id = null,holder_mobile = null,holder_address = null,child = null,adult = null,in_date = null,out_date = null,status = 0 where room_no = $_GET[rn]";	
    }
    if($_GET['rt'] == 'c'){
    	$query = "update double_non_ac set holder_name = null, holder_id = null,holder_mobile = null,holder_address = null,child = null,adult = null,in_date = null,out_date = null,status = 0 where room_no = $_GET[rn]";
    }
    if($_GET['rt'] == 'd'){
    	$query = "update double_ac set holder_name = null, holder_id = null,holder_mobile = null,holder_address = null,child = null,adult = null,in_date = null,out_date = null,status = 0 where room_no = $_GET[rn]";
    }
    $query_run = mysqli_query($conn,$query);
    header("location:redirect.php");   
?>