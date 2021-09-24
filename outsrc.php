<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Out source Entry</title>
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
    <header style="height:150px; background-color: gainsboro; padding-top:20px; paddin-bottom:20px;">
     <img src="gct1.png" width=70px height=70px style="float:left; border-radius:42%;" class="text-primary my-3">
     <h1 class="text-primary my-3"style="margin-left:120px; font-size:50px; font-family: 'Lobster', cursive;">Gnanamai Educational Institutions <span style="font-size:25px; color:orange;">Daily Tickets & Stock Management System</span></h1>
    </header>
    <!--header area end-->
    <!--sidebar start-->
    <div id="sidebar" style="height: 1120px;">
        <div class="nav" style="width: 250px;">
        <a class="nav-link nav-item py-3" style="font-size:15px;" href="index.php">
                <i class="fas fa-desktop" style="font-size:20px; margin-right:10px;"><span style="margin-left:10px;">DASHBOARD</span></i>
                </a>
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
    <div id="content">
        <div class="container">
    <form action="outsrc.php" method="POST">
      <h3 class="text-warning"><center>New Entry</center></h3>
    <label for="formGroupExampleInput2" class="form-label"><b>Entry Date</b><span style="color:red;">*</span></label>
            <input type="datetime-local" class="form-control"  placeholder="Enter Here"  name="date1" >
            <label for="formGroupExampleInput2" class="form-label"><b>Place</b><span style="color:red;">*</span></label>
            <input type="text" class="form-control"  placeholder="Enter Here"  name="place" >
            <label for="formGroupExampleInput2" class="form-label"><b>Item Description / Problem</b><span style="color:red;">*</span></label>
            <input type="text" class="form-control"  placeholder="Enter Here"  name="Itemsdes" >
            <label for="formGroupExampleInput2" class="form-label"><b>ITRM Sign</b><span style="color:red;">*</span></label>
            <input type="text" class="form-control"  placeholder="Enter Here" name="itrmsign">
            <label for="formGroupExampleInput2" class="form-label"><b>Material Send To</b><span style="color:red;">*</span></label>
            <input type="text" class="form-control"  placeholder="Enter Here"  name="sendto" >
            <button class="btn btn-success float-end btn-md my-2" name="submit">New Entry</button>
            <br><br><hr>
            <h3 class="text-warning"><center>Return Entry</center></h3>
            <label><b>S.No</b><span style="color:red;">*</span></label>
            <input type="number" class="form-control"  placeholder="Enter Here"  name="id">
            <label for="formGroupExampleInput2" class="form-label"><b>Bill</b><span style="color:red;">*</span></label>
            <input type="text" class="form-control"  placeholder="Enter Here"  name="bill">
            <label for="formGroupExampleInput2" class="form-label"><b>Amount</b><span style="color:red;">*</span></label>
            <input type="number" class="form-control"  placeholder="Enter Here"  name="amount">
            <label class="my-2"><b>Status</b><span style="color:red;">*</span></label>
            <select class="form-select" name="status">
                <option value="working">Working</option>
                <option value="Move To Scrap">Move To Scrap</option>
            </select>
            <label for="formGroupExampleInput2" class="form-label"><b>Return Date</b><span style="color:red;">*</span></label>
            <input type="datetime-local" class="form-control"  placeholder="Enter Here"  name="returndate">
            <button class="btn btn-danger btn-md my-2 float-end" name="update">Update</button>
    </form>
       </div>
    </div>
   
<?php 
 $con=new mysqli("localhost","root","","outsrc");
 if(isset($_POST['submit']))
 {
   $date1=$_POST['date1'];
   $place=$_POST['place'];
   $Itemsdes=$_POST['Itemsdes'];
   $itrmsign=$_POST['itrmsign'];
   $sendto=$_POST['sendto'];
   
   $sql = "INSERT INTO serviceoutsrc (date1,place,Itemsdes,itrmsign,sendto) VALUES('$date1','$place','$Itemsdes','$itrmsign','$sendto');";
   if($con->query($sql))
   {
       echo "<script>alert('successfully inserted')</script>";
   }
   else
   {
       echo "<script>alert('failed')</script>";
   }
 }
?>

<!--update-->
<?php 
 $con=new mysqli("localhost","root","","outsrc");
 if(isset($_POST['update']))
 {
   $bill=$_POST['bill'];
   $amount=$_POST['amount'];
   $status=$_POST['status'];
   $returndate=$_POST['returndate'];
   $id=$_POST['id'];
   $sql = "UPDATE serviceoutsrc SET bill='$bill',amount='$amount',status='$status',returndate='$returndate' WHERE id='$id';";
   if($con->query($sql))
   {
       echo "<script>alert('successfully update')</script>";
   }
   else
   {
       echo "<script>alert('Updation failed')</script>";
   }
 }
?>

</body>
</html>
