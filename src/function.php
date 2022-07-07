<?php
    function check_gmail($file){
        $myfile = fopen($file,"r") or die("Unable to open file");
        if ($myfile) {
            $data = explode("\n", fread($myfile, filesize($file)));
        }
        fclose($myfile);
        return $data;
    }
?>