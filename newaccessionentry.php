<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accession Registration</title>
    <link rel="shortcut icon" type="image" href="gct1.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css ">
    <link rel="stylesheet" href="style.css" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <!--header area start-->
    <header style="height:145px; background-color: gainsboro; padding-top:20px; paddin-bottom:20px;">
     <img src="gct1.png" width=70px height=70px style="float:left; border-radius:42%;" class="text-primary my-3">
     <h1 class="text-primary my-3"style="margin-left:120px; font-size:50px; font-family: 'Lobster', cursive;">Gnanamai Educational Institutions <span style="font-size:25px; color:orange;">Daily Tickets & Stock Management System</span></h1>
    </header>
    <!--header area end-->
    <!--sidebar start-->
    <div id="sidebar" style="height: 1120px;">
    <a class="nav-link nav-item py-3" style="font-size:15px;" href="index.php">
                <i class="fas fa-desktop" style="font-size:20px; margin-right:10px;"><span style="margin-left:10px;">DASHBOARD</span></i>
                </a>
        <div class="nav" style="width: 250px;">
            <li class="nav-item dropdown" style="width: 250px;">
            <a class="nav-link nav-item py-3" style="font-size:15px;" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fas fa-desktop" style="font-size:20px; margin-right:10px;"><span style="margin-left:10px;">STOCK</span></i>
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-menu nav-item py-3" style="font-size:15px;"  aria-labelledby="navbarDropdown" href="#"><b>ITRM STOCKS</b></a>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              ITRM STOCKS
                            </a>
                            <li><hr class="dropdown-divider"></li>
                            <ul class="list" aria-labelledby="navbarDropdown" style="list-style-type: none;">
                              <li><a class="dropdown-item nav-item py-3" style="font-size:10px;" href="newaccessionentry.php">1. NEW ACCESSION STOCK ENTRY</a></li>
                             
                              <li><a class="dropdown-item nav-item py-3" style="font-size:10px;" href="report.php">2. REPORTS</a></li>
                            </ul>
                        </li>
                   </li>
                    <li><a class="dropdown-menu nav-item py-3" style="font-size:15px;"  aria-labelledby="navbarDropdown" href="#"><b>DEPARTMENT STOCKS</b></a>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              ITRM STOCKS
                            </a>
                            <li><hr class="dropdown-divider"></li>
                            <ul class="list" aria-labelledby="navbarDropdown" style="list-style-type: none;">
                                <li><a class="dropdown-item nav-item py-3" style="font-size:10px;" href="department_stock_entry.php">1.DEPARTMENT STOCK ENTRY</a></li>
                                <li><a class="dropdown-item nav-item py-3" style="font-size:10px;" href="departments.php">2. DEPARTMENTS</a></li>
                                <li><a class="dropdown-item nav-item py-3" style="font-size:10px;" href="departmentreport.php">3. REPORTS</a></li>
                                <li><a class="dropdown-item nav-item py-3" style="font-size:10px;" href="departmovementscrap.php">4. MOVEMENT</a></li>
                            </ul>
                        </li>
                   </li>
                  
                     

                   <li><a class="dropdown-menu nav-item py-3" style="font-size:15px;"  aria-labelledby="navbarDropdown" href="#"><b>SERVICES <small>(Outsources)</small></b></a>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <b>SERVICES <small>(Outsources)</small>
                            </a>
                            <li><hr class="dropdown-divider"></li>
                            <ul class="list" aria-labelledby="navbarDropdown" style="list-style-type: none;">
                            <li><a class="dropdown-item nav-item py-3" style="font-size:10px;" href="outsrc.php">1.SEND TO / RETURN</a></li>
                              <li><a class="dropdown-item nav-item py-3" style="font-size:10px;" href="servicesreport.php">2. REPORTS</a></li>
                            </ul>
                        </li>
                   </li>
                   <li><hr class="dropdown-divider"></li>
                   <li><a class="dropdown-item nav-item py-2" style="font-size:15px;" href="movement.php"><h6 class="scrap" style="font-weight:bolder;">MOVEMENT</h6></a></li>
                   <li><hr class="dropdown-divider"></li>
                   <li><a class="dropdown-item nav-item py-2" style="font-size:15px;" href="scrap.php"><h6 class="scrap" style="font-weight:bolder;">SCRAP</h6></a></li>
                  </ul>
                  </li>
                </ul>
              </li>
        </div>

    <!--sidebar end-->    
    <div id="content" style="margin-bottom:200px;">
    <div class="container">
    <h3 class="text-warning" align="center">New Accession Entry</h3>
<form class="row g-3" action="newaccessionentry.php" method="post" enctype="multipart/form-data">
    <div class="col-md-12">
    <label for="inputEmail4" class="form-label"><b>Stock Type <span style="color:red">*</span></b></label>
    <select id="select" name="Stock_Type" class="form-select" onchange="random()" required>
    <option value="">--Choose Stock--</option>
        <option name="Consumable">Consumable</option>
        <option name="Non-Consumable">Non-Consumable</option>
    </select>
  </div>
  <div class="col-md-12">
    <label  class="form-label"><b>Categary</b></label>
     <select name="Categary" class="form-select" id="myselection" onchange="random()">
      <option value="">-</option>
       <option value="Computers and Laptops">Computers and Laptops</option>
       <option value="printer">Printers and Scanners</option>
       <option value="cctv">CCTV</option>
       <option value="others">Others</option>
     </select>
  </div>
  <div class="col-md-12">
    <label  class="form-label"><b>Items</b></label>
    <div id="output"></div>
  </div>
  <div class="col-md-12">
    <label  class="form-label"><b>Description of Item <span style="color:red">*</span></b></label>
    <input type="text" class="form-control" name="Description_of_Item" placeholder=" Enter Here" required>
  </div>
  <div class="col-md-12">
    <label  class="form-label"><b>Total Quantity Purchased <span style="color:red">*</span></b></label>
    <input type="number" id='tqp' class="form-control" name="Total_Quantity_Purchased" placeholder=" Enter Here" required>
  </div>
  <div class="col-md-12">
    <label for="inputAddress2" class="form-label"><b>Rate Per Unit <span style="color:red">*</span></b></label>
    <input type="number" class="form-control" name="Rate_Per_Unit" placeholder=" Enter Here" required>
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label"><b>Total Cost <span style="color:red">*</span></b></label>
    <input type="text" class="form-control" name="Total_Cost" placeholder=" Enter Here" required>
  </div>
  <div class="col-md-6">
    <label for="inputState" class="form-label"><b>Number and Date of the bill <span style="color:red">*</span></b></label>
    <input type="text" class="form-control" name="Number_and_Date_of_the_bill" placeholder=" Enter Here" required>
  </div>
  <div class="col-md-12">
    <label for="inputState" class="form-label"><b>Name & Address of the item <span style="color:red">*</span></b></label>
    <input type="text" class="form-control" name="Name_and_Address_of_the_item" placeholder=" Enter Here" required>
  </div>
  <div class="col-md-4">
    <label><b>Bill Passing Certificate <span style="color:red">*</span></b></label>
    <input type="file" name="image1" id="image1" class="mt-1" required>
  </div>
  <div class="col-md-4">
    <label><b>Bill <span style="color:red">*</span></b></label><br>
    <input type="file" name="image2" id="image2" class="mt-1" >
  </div>
  <div class="col-md-4">
    <label><b>PO / Approvel <span style="color:red">*</span></b></label><br>
    <input type="file" name="image3" id="image3" class="mt-1" >
  </div>
<div class="col-md-12">
<button class="btn btn-success float-end btn-lg" name="save">Save</button>
</div>
</form>
    </div>
    </div>
    <script>
      function random(){
        var select = document.getElementById("select").value;
        var myselection = document.getElementById("myselection").value;
        if(select === "Non-Consumable")
        {
          if(myselection === "Computers and Laptops")
          {
              var array = ["server","computers and laptops","motherboard","ram","HDD & SSD","SMPS","moniters & smartboard & projectors","mouse","keyboard","webcamera","speakers","CMOS battery","network switch","headphone","softweres","tools","media convertors","adopters","accesspoints"]
          }
          else if(myselection === "cctv")
          {
            var array=["DVR","Hard Disk","SMPS","Powder Adapter","Camera","3+1 Camera Cable"]
          }
          else if(myselection === "printer"){
            var array = ["Printers"]
          }
          else{
            var array = [];
          }
          
        }
        else if(select === "Consumable")
        {
          if(myselection === "Computers and Laptops")
          {
            var array=["Thermal Compound Paste","CMOS Battery","RJ 45 Connector","CAT 6 Cable","CAT 6 Patch Cable","I/O Box"];
          }
          else if(myselection === "printer")
          {
            var array= ["12A Catrage","12A Powder","12A PCR","12A OPC Drum","12A Doctor Blade","12A Wiper Blade","12A Megnetic Roller","88A Caterage","88A Powder","88A PCR","88A OPC Drum","88A Doctor Blade","88A Wiper Blade","88A Magnetic Roller"];
          }
          else if(myselection === "cctv")
          {
            var array= ["CCTV 3+1 Cable","BNC Connector","DC PIN"];
          }
          else if(myselection === "others")
          {
            var array= ["Tap Roll","Pin Blug","Hand cloves/Mask"];
          }
          else{
            var array=[];
          } 
        }
        else
        {
          var array=[];
        }
        var string="";
        for(i=0;i<array.length;i++)
        {
          string=string+"<option  name='myselect'>"+array[i]+"</option>";
        }
        string="<select name='Items' class='form-select'>"+string+"</select>";
        document.getElementById('output').innerHTML=string;

      }
    </script>



<?php 
$con=new mysqli("localhost","root","","itsmsofttech");
if(isset($_POST['save']))
{
    $Stock_Type=$_POST["Stock_Type"];
    $Categary = $_POST["Categary"];
    $Items = $_POST["Items"];
    $Description_of_Item = $_POST["Description_of_Item"];
    $Total_Quantity_Purchased=$_POST["Total_Quantity_Purchased"];
    $Rate_Per_Unit=$_POST["Rate_Per_Unit"];
    $Total_Cost=$_POST["Total_Cost"];
    $Number_and_Date_of_the_bill=$_POST["Number_and_Date_of_the_bill"];
    $Name_and_Address_of_the_item=$_POST["Name_and_Address_of_the_item"];
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
    
    $con=new mysqli("localhost","root","","itsmsofttech");
    $sql="INSERT INTO newstockentry(Stock_Type,Categary,Items,Description_of_Item,Total_Quantity_Purchased,Rate_Per_Unit,Total_Cost, Number_and_Date_of_the_bill,Name_and_Address_of_the_item,image1,name1,image2,name2,image3,name3) VALUES ('$Stock_Type','$Categary','$Items','$Description_of_Item','$Total_Quantity_Purchased','$Rate_Per_Unit','$Total_Cost','$Number_and_Date_of_the_bill','$Name_and_Address_of_the_item','$image1','$name1','$image2','$name2','$image3','$name3');";
    if($con->query($sql))
    {
      echo "<script>alert('Successfully Inserted')</script>";
    }
    else
    {
      echo "<script>alert('Not Inserted')</script>";
    }

    if($Stock_Type == "Consumable")
    {
      $sql="INSERT INTO consumable(Categary,Items,Description_of_Item,Total_Quantity_Purchased,Rate_Per_Unit,Total_Cost,Number_and_Date_of_the_bill,Name_and_Address_of_the_item) VALUES ('$Categary','$Items','$Description_of_Item','$Total_Quantity_Purchased','$Rate_Per_Unit','$Total_Cost','$Number_and_Date_of_the_bill','$Name_and_Address_of_the_item');";
      if($con->query($sql))
      {
        echo "<script>alert('Successfully Inserted')</script>";
      }
      else
      {
        echo "<script>alert('Not Inserted')</script>";
      }
    }

    if($Stock_Type == "Non-Consumable")
    {
    $sql="INSERT INTO nonconsumable(Categary,Items,Description_of_Item,Total_Quantity_Purchased,Rate_Per_Unit,Total_Cost,Number_and_Date_of_the_bill,Name_and_Address_of_the_item) VALUES ('$Categary','$Items','$Description_of_Item','$Total_Quantity_Purchased','$Rate_Per_Unit','$Total_Cost','$Number_and_Date_of_the_bill','$Name_and_Address_of_the_item');";
    if($con->query($sql))
    {
      echo "<script>alert('Successfully Inserted')</script>";
    }
    else
    {
      echo "<script>alert('Not Inserted')</script>";
    }
    }
  }
?>
</body>
</html>
