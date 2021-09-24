<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CSE System Details</title>
  <link rel="shortcut icon" type="image" href="gct1.png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
<div class="mt-5">
  <center><h1 class="mb-3 text-primary"><u>CSE System Details</u></h1></center>
<div class="container">
    <table class="table table-hover table-bordered">
  <tr class="bg-warning"><th>S.No</th><th>Monitor_Status</th><th>CPU_Status</th><th>Keyboard_Mouse_Status</th><th>Network_Status</th><th>Remarks</th></tr>
  <?php 
  $con=new mysqli("localhost","root","","deptentry");
    $sql = "SELECT * FROM deptofcse";
    $result=mysqli_query($con,$sql);
    while($row=mysqli_fetch_assoc($result))
    {
      echo "<tr>
      <td>".$row['S.No']."</td>
      <td>".$row['Monitor_Status']."</td>
      <td>".$row['CPU_Status']."</td>
      <td>".$row['Keyboard_Mouse_Status']."</td>
      <td>".$row['Network_Status']."</td>
      </tr>";
    }

?>	
</table>
</div>
</div>
</body>
</html>