<?php

    include("connection.php");

    // function check_gmail($file){
    //     $myfile = fopen($file,"r") or die("Unable to open file");
    //     if ($myfile) {
    //         $data = explode("\n", fread($myfile, filesize($file)));
    //     }
    //     fclose($myfile);
    //     return $data;
    // }

    // function print_table(string $table){
    //     $sql = "SELECT * from $table";
    //     $result = mysqli_query($conn, $sql);
    //     $resultCheck = mysqli_num_rows($result);

    //     if($resultCheck > 0){
    //         while($row = mysqli_fetch_assoc($result));
    //     }
    // }

    // $pdoQuery = "SELECT * FROM users";
    // $pdoQuery_run = $pdo->query($pdoQuery);
    
    // while($row = $pdoQuery_run->fetch()){
    //     var_dump($row);
    //     echo $row->u_gmail;
    //     echo "<br>";
    // }
?>