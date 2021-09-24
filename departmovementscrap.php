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
        <h3 class="text-warning" align="center">Department Movement</h3>
          <form action="departmovementscrap.php" method="post">
          <label class="my-2">Date<span style="color:red">*</span></label>
          <input type="datetime-local" class="form-control" name="Date" id="">

          <label class="my-2">From<span style="color:red">*</span></label>
          <select class="form-select" aria-label="Default select example" name="Froms">
          <option selected>-- Choose --</option>
          <option value="CSE">CSE</option>
          <option value="AI & DS">AI & DS</option>
          <option value="EEE">EEE</option>
          <option value="ECE">ECE</option>
          <option value="ROBOTICS & AUTOMATIONS">ROBOTICS & AUTOMATIONS</option>
          <option value="MECHANICAL">MECHANICAL</option>
          <option value="CIVIL">CIVIL</option>
          <option value="AGRI">AGRI</option>
          <option value="FOOD TECHNOLOGY">FOOD TECHNOLOGY</option>
          <option value="BIO MEDICAL">BIO MEDICAL</option>
          <option value="BIO TECHNOLOGY">BIO TECHNOLOGY</option>
          <option value="CHEMICAL ENGINEERING">CHEMICAL ENGINEERING</option>
          <option value="MBA">MBA</option>
          <option value="ENGLISH COMMUNICATION LAB">ENGLISH COMMUNICATION LAB</option>
          <option value="GREAT I CENTER">GREAT I CENTER</option>
          <option value="GCT EXAM CELL">GCT EXAM CELL</option>
          <option value="GCE EXAM CELL">GCE EXAM CELL</option>
          <option value="CENTRAL LIBRARY">CENTRAL LIBRARY</option>
          <option value="FIRST YEAR CO-ORDINETER">FIRST YEAR CO-ORDINETER</option>
          <option value="PLACEMENT CELL">PLACEMENT CELL</option>
          <option value="OFFICE">OFFICE</option>
          <option value="CHAIRMAN CABIN">CHAIRMAN CABIN</option>
          <option value="CAO CABIN">CAO CABIN</option>
          <option value="ADMISSION CELL AND CERTIFICATE SEC">ADMISSION CELL AND CERTIFICATE SEC</option>
          <option value="RECEPSION">RECEPSION</option>
          <option value="TRANSPORT DIVISION">TRANSPORT DIVISION</option>
          <option value="MAIN GATE">MAIN GATE</option>
          <option value="HOSTELS">HOSTELS</option>
          </select>

          <label class="my-2">To<span style="color:red">*</span></label>
          <select class="form-select" aria-label="Default select example" name="Tos">
          <option selected>-- Choose --</option>
          <option value="MOVE TO SCRAP">MOVE TO SCRAP</option>
          <option value="CSE">CSE</option>
          <option value="AI & DS">AI & DS</option>
          <option value="EEE">EEE</option>
          <option value="ECE">ECE</option>
          <option value="ROBOTICS & AUTOMATIONS">ROBOTICS & AUTOMATIONS</option>
          <option value="MECHANICAL">MECHANICAL</option>
          <option value="CIVIL">CIVIL</option>
          <option value="AGRI">AGRI</option>
          <option value="FOOD TECHNOLOGY">FOOD TECHNOLOGY</option>
          <option value="BIO MEDICAL">BIO MEDICAL</option>
          <option value="BIO TECHNOLOGY">BIO TECHNOLOGY</option>
          <option value="CHEMICAL ENGINEERING">CHEMICAL ENGINEERING</option>
          <option value="MBA">MBA</option>
          <option value="ENGLISH COMMUNICATION LAB">ENGLISH COMMUNICATION LAB</option>
          <option value="GREAT I CENTER">GREAT I CENTER</option>
          <option value="GCT EXAM CELL">GCT EXAM CELL</option>
          <option value="GCE EXAM CELL">GCE EXAM CELL</option>
          <option value="CENTRAL LIBRARY">CENTRAL LIBRARY</option>
          <option value="FIRST YEAR CO-ORDINETER">FIRST YEAR CO-ORDINETER</option>
          <option value="PLACEMENT CELL">PLACEMENT CELL</option>
          <option value="OFFICE">OFFICE</option>
          <option value="CHAIRMAN CABIN">CHAIRMAN CABIN</option>
          <option value="CAO CABIN">CAO CABIN</option>
          <option value="ADMISSION CELL AND CERTIFICATE SEC">ADMISSION CELL AND CERTIFICATE SEC</option>
          <option value="RECEPSION">RECEPSION</option>
          <option value="TRANSPORT DIVISION">TRANSPORT DIVISION</option>
          <option value="MAIN GATE">MAIN GATE</option>
          <option value="HOSTELS">HOSTELS</option>
          </select>
          <label class="my-2">Place<span style="color:red">*</span></label>
          <input type="text" class="form-control" placeholder="Enter Here" name="Place">
          <label class="my-2">System No<span style="color:red">*</span></label>
          <input type="text" class="form-control" placeholder="Enter Here" name="System_No">
          <label class="my-2">No of System<span style="color:red">*</span></label>
          <input type="text" class="form-control" placeholder="Enter Here" name="No_of_System">
          <label class="my-2">System Details<span style="color:red">*</span></label>
          <input type="text" class="form-control" placeholder="Enter Here" name="System_Details">
          <label class="my-2">Incharge Sign<span style="color:red">*</span></label>
          <input type="text" class="form-control" placeholder="Enter Here" name="Incharge_Sign">

          <button class="btn btn-success float-end my-3" name="send">Move</button>
          </form>
        </div>
    </div>
   




<?php
  $con = new mysqli("localhost","root","","deptentry");
  if(isset($_POST['send']))
  {
    $date = $_POST['Date'];
    $froms = $_POST['Froms'];
    $tos = $_POST['Tos'];
    $Place = $_POST['Place'];
    $System_No=$_POST['System_No'];
    $No_of_System = $_POST['No_of_System'];
    $System_Details = $_POST['System_Details'];
    $Incharge_Sign = $_POST['Incharge_Sign'];
    $sql = "INSERT INTO departmovementscrap(Date,Froms,Tos,Place,System_No,No_of_System,System_Details,Incharge_Sign) VALUES ('$date','$froms','$tos','$Place','$System_No','$No_of_System','$System_Details','$Incharge_Sign');";
    $result=mysqli_query($con,$sql);
    if($result)
    {
        echo "<script>alert('successfully inserted')</script>";
    }
    else
    {
        echo "<script>alert('failed')</script>";
    }
  }

?>


<?php
$con = new mysqli("localhost","root","","deptentry");
if(isset($_POST['send']))
{
  $System_No=$_POST['System_No'];
  $No_of_System = $_POST['No_of_System'];
  $mysql = "UPDATE deptstockentry SET numofsystem=numofsystem-'$No_of_System' WHERE S_No='$System_No';";
  if($con->query($mysql))
  {
    echo "<script>alert('Movement successfully')</script>";
  }
  else
  {
      echo "<script>alert('Movement failed')</script>";
  }
}

?>

















</body>
</html>
