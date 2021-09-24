<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="shortcut icon" type="image" href="gct1.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css ">
    <link rel="stylesheet" href="style.css" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<style>
    .ml:hover{
       background-color:white;
    }
</style>

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
    <div id="content" class="container">

    <h2 class="text-warning my-2">Total Accession Registration :-</h2>
    <ol>
        <li class="col-md-3"><a href="view_Accession_Reg.php" class="text-secondary nav-link my-2 nav-item py-3" style="font-size:15px;">Accession Registration</a></li>
        <li class="col-md-3"><a href="consumable.php" class="text-secondary nav-link my-2 nav-item py-3" style="font-size:15px;">Consumable</a></li>
        <li class="col-md-3"><a href="nonconsumable.php" class="text-secondary nav-item py-3" style="font-size:15px;">Non-Consumable</a></li>
    </ol>





    <!--consumable-->
        <h2 class="text-warning my-3">Consumable :-</h2>
        <div class="row">
            <div class="col-md-6">
            <button class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">1.Computers & Laptops</button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
            <div class="offcanvas-header">
            <h5 id="offcanvasRightLabel">Computers & Laptops</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
            <ol>
            <li><a href="Total_con_comp_lap/comp_and_lap.php" class="text-primary">Total List of Computers & Laptops</a></li>
            <li><a href="con_comp_lap/con_comp_lap-TCP.php" class="text-primary">Thermal Compound Paste</a></li>
            <li><a href="con_comp_lap/con_comp_lap-CMOSBAT.php" class="text-primary">CMOS Battery</a></li>
            <li><a href="con_comp_lap/con_comp_lap-RJ45CON.php" class="text-primary">RJ 45 Connector</a></li>
            <li><a href="con_comp_lap/con_comp_lap-CAT6CABLE.PHP" class="text-primary">CAT 6 Cable</a></li>
            <li><a href="con_comp_lap/con_comp_lap-CAT6PC.php" class="text-primary">CAT 6 Patch Cable</a></li>
            <li><a href="con_comp_lap/con_comp_lap-IOBOX.php" class="text-primary">I/O Box</a></li>
            </ol>
            </div>
            </div>
            <!-- -->
            <div class="col-md-6">
            <button class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight2" aria-controls="offcanvasRight">2.printers & Scanners</button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight2" aria-labelledby="offcanvasRightLabel">
            <div class="offcanvas-header">
            <h5 id="offcanvasRightLabel">Printers & Scanners</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
            <ol>
            <li><a href="Total_con_comp_lap/Total_printers.php" class="text-primary">Total List of Printers & Scanners</a></li>
            <li><a href="con_printers_scanner/con_12A_caterage.php" class="text-primary">12A Catrage</a></li>
            <li><a href="con_printers_scanner/con_12A_Powder.php" class="text-primary">12A Powder</a></li>
            <li><a href="con_printers_scanner/con_12A_PCR.php" class="text-primary">12A PCR</a></li>
            <li><a href="con_printers_scanner/con_12A_OPC_Durm.php" class="text-primary">12A OPC Drum</a></li>
            <li><a href="con_printers_scanner/con_12A_Docter_blade.php" class="text-primary">12A Doctor Blade</a></li>
            <li><a href="con_printers_scanner/con_12A_Wiper_blade.php" class="text-primary">12A Wiper Blade</a></li>
            <li><a href="con_printers_scanner/con_12A_Magnetic_Roller.php" class="text-primary">12A Megnetic Roller</a></li>
            <li><a href="con_printers_scanner/con_88A_caterage.php" class="text-primary">88A Caterage</a></li>
            <li><a href="con_printers_scanner/con_88A_Powder.php" class="text-primary">88A Powder</a></li>
            <li><a href="con_printers_scanner/con_88A_PCR.php" class="text-primary">88A PCR</a></li>
            <li><a href="con_printers_scanner/con_88A_OPC_Durm.php" class="text-primary">88A OPC Drum</a></li>
            <li><a href="con_printers_scanner/con_88A_Docter_blade.php" class="text-primary">88A Doctor Blade</a></li>
            <li><a href="con_printers_scanner/con_88A_Wiper_blade.php" class="text-primary">88A Wiper Blade</a></li>
            <li><a href="con_printers_scanner/con_88A_Magnetic_Roller.php" class="text-primary">88A Magnetic Roller</a></li>
            </ol>
            </div>
            </div>
</div>
            <!-- -->
            <div class="row">
            <div class="col-md-6">
            <button class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight4" aria-controls="offcanvasRight3">3.CCTV</button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight4" aria-labelledby="offcanvasRightLabel">
            <div class="offcanvas-header">
            <h5 id="offcanvasRightLabel4">CCTV</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
            <ol>
            <li><a href="Total_con_comp_lap/Total_cctv.php" class="text-primary">Total List of CCTV</a></li>
            <li><a href="con_CCTV/cctv_3+1_cable.php" class="text-primary">CCTV 3+1 Cable</a></li>
            <li><a href="con_CCTV/cctv_BNC_Connector.php" class="text-primary">BNC Connector</a></li>
            <li><a href="con_CCTV/cctv_DC_pin.php" class="text-primary">DC PIN</a></li>
            </ol>
            </div>
            </div>
            <!-- -->
            <div class="col-md-6">
            <button class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight5" aria-controls="offcanvasRight3">4.Others</button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight5" aria-labelledby="offcanvasRightLabel">
            <div class="offcanvas-header">
            <h5 id="offcanvasRightLabel5">Others</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
            <ol>
            <li><a href="Total_con_comp_lap/Total_others.php" class="text-primary">Total List</a></li>
            <li><a href="con_OTHERS/can_others_TAP_ROLL.php" class="text-primary">Tap Roll</a></li>
            <li><a href="con_OTHERS/can_others_pin_plug.php" class="text-primary">Pin Blug</a></li>
            <li><a href="con_OTHERS/can_others_Hand_cloves_mask.php" class="text-primary">Hand cloves/Mask</a></li>
            </ol>
            </div>
            </div>
            </div>
        
        
            </div>
        </div>




        <!--non consumable -->
        <h2 class="text-warning my-2">Non-Consumable :-</h2>
        <div class="row">
            <div class="col-md-6">
            <button class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight6" aria-controls="offcanvasRight">1.Computers & Laptops</button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight6" aria-labelledby="offcanvasRightLabel">
            <div class="offcanvas-header">
            <h5 id="offcanvasRightLabel">Computers & Laptops</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
            <ol>
                <li><a href="Total_noncon/non_Total_comp_lap.php">Total List Of Computers & Laptops</a></li>
                <li><a href="noncon_com_lap/server.php">Server</a></li>
                <li><a href="noncon_com_lap/computers_and_laptops.php">Computers and laptops</a></li>
                <li><a href="noncon_com_lap/motherboard.php">Motherboard</a></li>
                <li><a href="noncon_com_lap/ram.php">Ram</a></li>
                <li><a href="noncon_com_lap/HDD_SSD.php">HDD & SSD</a></li>
                <li><a href="noncon_com_lap/SMPS.php">SMPS</a></li>
                <li><a href="noncon_com_lap/moniters_smartboard_projectors.php">moniters & smartboard & projectors</a></li>
                <li><a href="noncon_com_lap/mouse.php">Mouse</a></li>
                <li><a href="noncon_com_lap/keyboard.php">keyboard</a></li>
                <li><a href="noncon_com_lap/webcamera.php">Webcamera</a></li>
                <li><a href="noncon_com_lap/speakers.php">Speakers</a></li>
                <li><a href="noncon_com_lap/CMOS_battery.php">CMOS battery</a></li>
                <li><a href="noncon_com_lap/network_switch.php">Network switch</a></li>
                <li><a href="noncon_com_lap/headphone.php">Headphone</a></li>
                <li><a href="noncon_com_lap/softweres.php">Softweres</a></li>
                <li><a href="noncon_com_lap/tools.php">Tools</a></li>
                <li><a href="noncon_com_lap/media_convertors.php">Media convertors</a></li>
                <li><a href="noncon_com_lap/adopters.php">Adopters</a></li>
                <li><a href="noncon_com_lap/accesspoints.php">Accesspoints</a></li>
            </ol>
            </div>
            </div>

            <!-- cctv-->


            
        <div class="row">
            <div class="col-md-6">
            <button class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight7" aria-controls="offcanvasRight">2.CCTV</button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight7" aria-labelledby="offcanvasRightLabel">
            <div class="offcanvas-header">
            <h5 id="offcanvasRightLabel">CCTV</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
            <ol>
                <li><a href="Total_noncon/non_Total_cctv.php" download>Total CCTV</a></li>
                <li><a href="noncon_cctv/DVR.php">DVR</a></li>
                <li><a href="noncon_cctv/Hard_Disk.php">Hard Disk</a></li>
                <li><a href="noncon_cctv/SMPS.php">SMPS</a></li>
                <li><a href="noncon_cctv/Powder_Adapter.php">Powder Adapter</a></li>
                <li><a href="noncon_cctv/Camera.php">Camera</a></li>
                <li><a href="noncon_cctv/3+1_Camera_cable.php">3+1 Camera Cable</a></li>
            </ol>
            </div>
            </div>



                        <!-- printers-->


            
        <div class="row">
            <div class="col-md-7">
            <button class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight8" aria-controls="offcanvasRight">3.Printers</button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight8" aria-labelledby="offcanvasRightLabel">
            <div class="offcanvas-header">
            <h5 id="offcanvasRightLabel">Printers</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
            <ol>
                <li><a href="Total_noncon/non_Total_printer.php">Total Printers</a></li>
                <li><a href="noncon_printer/noncon_printers.php">Printers</a></li>
            </ol>
            </div>
            </div>

</div>

</div>
   
</body>
</html>
