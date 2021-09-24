<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Department Stock Entry</title>
  <link rel="shortcut icon" type="image" href="gct1.png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
<div class="mt-5">
  <center><h1 class="mb-3 text-primary"><u>Department Stock Entry</u></h1></center>
<div class="container">
    <table class="table table-hover table-bordered">
  <tr  class="bg-warning"><th>S.No</th><th>Department</th><th>Total Systems</th><th>No_Of_Systems</th><th> Place </th><th>Configarations</th><th>Remarks</th><th>Incharge/HOD</th></tr>
  <?php 
  $con=new mysqli("localhost","root","","deptentry");
    $sql = "SELECT * FROM deptstockentry";
    $result=mysqli_query($con,$sql);
    while($row=mysqli_fetch_assoc($result))
    {
      echo "<tr>
      <td>".$row['S_No']."</td>
      <td>".$row['Department']."</td>
      <td>".$row['totalsystem']."</td>
      <td>".$row['numofsystem']."</td>
      <td>".$row['Place']."</td>
      <td>".$row['Config']."</td>
      <td>"."</td>
      <td>"."</td>
      </tr>";
    }

?>	
</table>
</div>
</div>
</body>
</html>