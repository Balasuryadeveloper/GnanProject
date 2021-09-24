<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SERVICES(Outsource)-REPORT</title>
  <link rel="shortcut icon" type="image" href="gct1.png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
<div class="mt-5">
  <center><h1 class="mb-3 text-primary"><u>SERVICES(Outsource)-REPORT</u></h1></center>
<table class="table table-hover table-striped table-bordered">
  <tr><th>S.No</th><th>Entry Date</th><th>Place</th><th>Item Description / Problem</th><th>ITRM Sign</th><th>Material Send To</th><th>Return Date</th><th>Status</th><th>Bill No</th><th>Amount</th></tr>
  <?php 
  $con=new mysqli("localhost","root","","outsrc");
    $sql = "SELECT * FROM serviceoutsrc";
    $result=mysqli_query($con,$sql);
    
    while($row=mysqli_fetch_assoc($result))
    {
      echo "<tr>
      <td>".$row['id']."</td>
      <td>".$row['date1']."</td>
      <td>".$row['place']."</td>
      <td>".$row['Itemsdes']."</td>
      <td>".$row['itrmsign']."</td>
      <td>".$row['sendto']."</td>
      <td>".$row['returndate']."</td>
      <td>".$row['status']."</td>
      <td>".$row['bill']."</td>
      <td>".$row['amount']."</td>
      </tr>";
    }
?>	
</table>
</div>
</body>
</html>