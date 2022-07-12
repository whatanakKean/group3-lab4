<?php

	require('connection.php');
	session_start();

	$query = $fluent->from('products')->where('u_id', $_SESSION['user_id']);
	while($row = $query->fetch()){
			$data[] = $row;
	}


	$results = ["sEcho" => 1,
				"iTotalRecords" => count($data),
				"iTotalDisplayRecords" => count($data),
				"aaData" => $data ];
	echo json_encode($results);

?>