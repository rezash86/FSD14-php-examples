<?php
    
    $target_dir = "uploads/";
    
    if($_SERVER["REQUEST_METHOD"] == "POST"){
            
        //make sure directory exists
        if(!is_dir($target_dir)){
            mkdir($target_dir, 0777, true);
        }
        
        $tempPath = $_FILES['myFile']['tmp_name'];
        //file path
        $target_file = $target_dir. basename($_FILES["myFile"]["name"]);

        //check if the upload is successful without error
        if($_FILES['myFile']['error'] == UPLOAD_ERR_OK){
            move_uploaded_file($tempPath, $target_file);
            echo "it was succes";
        }
        else{
            echo "error ->". $_FILES['myFile']['error'];
        }
     }
?>