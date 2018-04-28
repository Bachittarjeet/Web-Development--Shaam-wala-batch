<?php
  if (isset($_POST["subBtn"])) {

    $name = $_FILES["picture"]["name"] ;
    $size = $_FILES["picture"]["size"]/1024;
    $error = $_FILES["picture"]["error"];
    $tmp = $_FILES["picture"]["tmp_name"];
    $destination = "uploads/";

    echo "$name $size $error $tmp";
    $destination .= time().$_SERVER["REMOTE_ADDR"].$name;
    $type = pathinfo($destination, PATHINFO_EXTENSION);

    move_uploaded_file($tmp,$destination);
    //DB Query
    $base64 = 'data:image/' . $type . ';base64,' . base64_encode(file_get_contents($destination)); 
    // Source 1: https://stackoverflow.com/questions/3967515/how-to-convert-an-image-to-base64-encoding
    // Source 2: https://codebeautify.org/base64-to-image-converter# 
    echo "<p>".$base64."</p>";

    echo "<img src='$base64' height='200px' width='200px'><hr>";
    


  }else {
    echo "Bad Request/Route ";
  }
?>
