<?php

require('connection.php');
session_start();


$sql = "SELECT * FROM products";
$result = $conn->query($sql);
$user_id = $_SESSION['user_id'];


while($row = $result->fetch_array(MYSQLI_ASSOC)){
	if($row['u_id'] == $user_id){
		$data[] = $row;
	}
}


$results = ["sEcho" => 1,
        	"iTotalRecords" => count($data),
        	"iTotalDisplayRecords" => count($data),
        	"aaData" => $data ];

echo json_encode($results);


 
?>