
<?php

$con=new mysqli("localhost","root","","showdbs");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image</title>
</head>
<body>
<h1>Adding Image DataBase</h1>
   <form action="image.php" method="post" enctype="multipart/form-data">
    <input type="file" name="image1" id="">
    <input type="file" name="image2" id="">
    <input type="file" name="image3" id="">
    <input type="submit" name="submit">
   </form>

   <?php 
   if(isset($_POST["submit"]))

   {
       if(getimagesize($_FILES['image1']['tmp_name'])== false)
       {
           echo "please select image";
       }
       else
       {
           $image1= addslashes($_FILES['image1']['tmp_name']);
           $name1= addslashes($_FILES['image1']['name']);
           $image1=file_get_contents($image1);
           $image1=base64_encode($image1);
           $image2= addslashes($_FILES['image2']['tmp_name']);
           $name2= addslashes($_FILES['image2']['name']);
           $image2=file_get_contents($image2);
           $image2=base64_encode($image2);
           $image3= addslashes($_FILES['image3']['tmp_name']);
           $name3= addslashes($_FILES['image3']['name']);
           $image3=file_get_contents($image3);
           $image3=base64_encode($image3);
           saveimage1($image1,$name1,$image2,$name2,$image3,$name3);
       }

   }




       function saveimage1($image1,$name1,$image2,$name2,$image3,$name3)
       {
           $con=new mysqli("localhost","root","","showdbs");
           $sql="INSERT INTO images(name1,img1,name2,img2,name3,img3) VALUES ('$name1','$image1','$name2','$image2','$name3','$image3')";
           $result=mysqli_query($con,$sql);
           if($result)
           {
               echo "<br>Image Uploaded";
           }
           else
           {
               echo "<br>Image not Uploaded";
           }
       }
   ?>
</body>
</html>