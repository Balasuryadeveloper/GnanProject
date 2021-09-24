<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Non Consumable</title>
  <link rel="shortcut icon" type="image" href="gct1.png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
<div class="mt-5">
  <center><h1 class="mb-3 text-primary"><u>Non Consumable</u></h1></center>
<table class="table table-hover table-striped table-bordered">
  <tr><th>S.No</th><th>Accession Reg No</th><th>Date of Receipt</th><th>Items</th><th>Description of items</th><th>Total Quantity Purchased</th><th>Rate Per Unit</th><th>Total Cost</th><th>Name and Address of the item</th><th>Number and Date of the bill</th><th>Name and Address of the item</th></tr>
  <?php 
  $con=new mysqli("localhost","root","","itsmsofttech");
  $sql="SELECT nonconsumable.Date,nonconsumable.Categary,nonconsumable.Items,nonconsumable.Description_of_Item,nonconsumable.Total_Quantity_Purchased,nonconsumable.Rate_Per_Unit,nonconsumable.Total_Cost,nonconsumable.Number_and_Date_of_the_bill,nonconsumable.Name_and_Address_of_the_item,newstockentry.S_No FROM nonconsumable INNER JOIN newstockentry WHERE nonconsumable.S_No=newstockentry.S_No;";
  $no=1;
  $result=mysqli_query($con,$sql);
  while($row=mysqli_fetch_array($result))
  {
    echo "<tr>
          <td>".$no."</td>
          <td>".$row['S_No']."</td>
          <td>".$row['Date']."</td>
          <td>".$row['Categary']."</td>
          <td>".$row['Items']."</td>
          <td>".$row['Description_of_Item']."</td>
          <td>".$row['Total_Quantity_Purchased']."</td>
          <td>".$row['Rate_Per_Unit']."</td>
          <td>".$row['Total_Cost']."</td>
          <td>".$row['Number_and_Date_of_the_bill']."</td>
          <td>".$row['Name_and_Address_of_the_item']."</td>
          </tr>";
          $no++;
  }
?>	

</table>
</div>
</body>
</html>