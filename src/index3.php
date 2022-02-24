<?php
    session_start();


    $filename    = $_FILES["picture"]["tmp_name"];
    $destination = "uploads/" . $_FILES["picture"]["name"]; 
    move_uploaded_file($filename, $destination); 


    // $_SESSION['user'] = $destination;

    // foreach($_FILES as $_SESSION['user']){

    // }

    // echo "<img src=\"uploads/$filename\">";

       
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<form action="index3.php" method="post" enctype="multipart/form-data">
<div id = gallery_heading>
    <h1>Image Gallery</h1>
    <h4>This page displays the list of uploaded images.</h4>

    </div>
  <label for="picture">Picture:</label>
  <input type="file" name="picture" id="picture"><br>
  <input type="submit" name="submit" value="Upload" style ="
    margin-left: 48px;
    padding-left: 20px;
    padding-right: 15px;">
</form>

<div id ="gallery_area" style ="padding-top= 50px;">
<?php
     $filelist= glob("./uploads/*");

     foreach($filelist as $filename){
         echo "<img src = $filename  >";
     }



?>

</div>
</body>
</html>

