<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        window.onload = function () {
 
            var chart = new CanvasJS.Chart("chartContainer", {
	        animationEnabled: true,
	        exportEnabled: true,
	        theme: "light1", // "light1", "light2", "dark1", "dark2"
	        title:{
		        text: "PHP Column Chart from Database"
	        },
	        data: [{
		        type: "column", //change type to bar, line, area, pie, etc  
		        dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	        }]
        });
        chart.render();
        }
    </script>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div class="main-content-container container-fluid px-4">
        <!-- page header -->
        <div class="page-header row no-gutters py-4 mb-5">
            <div class="col-12 text-center text-sm-center mb-0">
                <img src="" alt="">
                <br>
                <span class="text-uppercase page-subtitle">Teknik Elektro</span>
                <h3 class="page-title mt-4">Teknik Elektro</h3>
            </div>
        </div>
        <div align="center">
            <b>
                <h5>Rekapitulasi Tracer Alumni</h5>
            </b>
        </div>

        <!-- html -->
        <div align="center">
            <!--<ul class="list-group list-group-flush">
                <li class="list-group-item p-3">-->
                    <!--<div class="row">-->
                        <div class="card shadow col-lg-10 text-sm-left mb-4">
                            <div class="card-body ">
                                <h4 class="small font-weight-bold" style="font-size:15px">
                                 Apakah anda menjalankan wirausaha ?   
                                </h4>
                                <h5 class="small">Ya <span class="float-right">20%</span></h5>
                                <div class="progress mb-4">
                                    <div class="progress-bar bg-success" role="progressbar" style="width:20%"
                                    aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <h5 class="small">Tidak <span class="float-right">75%</span></h5>
                                <div class="progress mb-4">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width:75%"
                                    aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div> 
                                <div id="chartContainer" style="height: 370px; width: 100%;"></div>            
                            </div>
                        </div>  
                        <div class="col-lg-10 mb 4">
                            <div class="card shadow mb-4"></div>
                        </div>
                    <!--</div>-->
                <!--</li>-->
                <!--<div class="col-lg-6 mb-4">-->
                    <!-- Project Card Example 
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Projects</h6>
                        </div>
                        <div class="card-body">
                            <h4 class="small font-weight-bold">Server Migration <span class="float-right">20%</span></h4>
                            <div class="progress mb-4">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 20%"
                                aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <h4 class="small font-weight-bold">Sales Tracking <span class="float-right">40%</span> </h4>
                            <div class="progress mb-4">
                                <div class="progress-bar bg-warning" role="progressbar" style="width: 40%"
                                aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <h4 class="small font-weight-bold">Customer Database <span
                            class="float-right">60%</span></h4>
                            <div class="progress mb-4">
                                <div class="progress-bar" role="progressbar" style="width: 60%"
                                aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <h4 class="small font-weight-bold">Payout Details <span
                                class="float-right">80%</span></h4>
                            <div class="progress mb-4">
                                <div class="progress-bar bg-info" role="progressbar" style="width: 80%"
                                aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <h4 class="small font-weight-bold">Account Setup <span
                                class="float-right">Complete!</span></h4>
                            <div class="progress">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 100%"
                                aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div> -->
                    <div class="card shadow mb-4"></div>
                    <div class="card shadow mb-4"></div>
                    <div class="card shadow mb-4"></div>
                </div>
            <!--</ul>-->
        </div>
        
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts-->
    <script src="js/demo/chart-pie-demo.js"></script>
    
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
    

</body>

</html>