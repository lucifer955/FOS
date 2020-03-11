<?php 
  $page= 'reports';include('adminIncludes/adminHeader.php');
?>


<div class="adminManageFoodMenuCategory">
	<div class="col-md-12" >
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="#">Home</a></li>
				<li class="breadcrumb-item active" aria-current="page">Reports</li>
			</ol>
		</nav>
	</div>
</div>

<div class="container">
	<div class="row justify-content-center">
		<div class="col-12">
			<div class="card text-center">
  			<div class="card-body ">
  				<h3 class=" text-left text-dark">Total Earning per Order with Time</h3>
 <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Order Date', 'Order Id', 'Earned'],
          <?php  

          $sql = "SELECT * FROM orderdetails";
          $result1 = mysqli_query($connection, $sql);

          while ($rs1 = mysqli_fetch_assoc($result1)) {
          	 $orderDate=strval( $rs1['orderDate'] );
          	 $orderId = (int)$rs1['orderId'];
          	 $total= (int)$rs1['total'];
          	echo "['".$orderDate."',$orderId,$total],";
          }

          ?>
        ]);

        var options = {
          title: 'Total Earning per Order with Time',
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>

  <body class="col-12">
    <div  id="curve_chart" style="width: 900px; height: 500px"></div>
  </body>
	    			
  			</div>
			</div>
		</div>
	</div>



	<div class="row justify-content-center">
		<div class="col-12">
			<div class="card mt-2">
  				<div class="card-body">
  	<h3 class=" text-left text-dark">Confirmed/Unconfirmed/Canceled order count</h3>
<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawStuff);

      function drawStuff() {

 // count confirmed order
<?php  
    $query5 = "SELECT COUNT(orderId) AS confirmedFood FROM orderdetails where orderStatus = 1";
    $rs5= mysqli_query($connection, $query5);
    $values5 = mysqli_fetch_assoc($rs5);
    $num_rowscon = $values5['confirmedFood'];
?>

 // count Not confirmed order
<?php  
    $query6 = "SELECT COUNT(orderId) AS notConfirmed FROM orderdetails where orderStatus = 0";
    $rs6= mysqli_query($connection, $query6);
    $values6 = mysqli_fetch_assoc($rs6);
    $num_rowsnotcon = $values6['notConfirmed'];
?>
 // count cancel order
<?php  
    $query7 = "SELECT COUNT(orderId) AS cancelOrdr FROM orderdetails where orderStatus = 2";
    $rs7= mysqli_query($connection, $query7);
    $values7 = mysqli_fetch_assoc($rs7);
    $num_rowscancel = $values7['cancelOrdr'];
?>




        var data = new google.visualization.arrayToDataTable([
          ['Status', 'Count'],
          ['unconfirmed', <?php echo $num_rowsnotcon; ?>],
          ['Confirmed', <?php echo $num_rowscon; ?>],
          ['Canceled', <?php echo $num_rowscancel; ?>]

        ]);

        var options = {
          width: 800,
          chart: {
            title: 'Confirmed/Unconfirmed/Canceled order count',
            subtitle: ''
          },
          bars: 'horizontal', // Required for Material Bar Charts.
          series: {
            0: { axis: 'distance' }, // Bind series 0 to an axis named 'distance'.
            1: { axis: 'brightness' } // Bind series 1 to an axis named 'brightness'.
          },
          axes: {
            x: {
              distance: {label: 'count'}, // Bottom x-axis.
              brightness: {side: 'top', label: 'apparent magnitude'} // Top x-axis.
            }
          }
        };

      var chart = new google.charts.Bar(document.getElementById('dual_x_div'));
      chart.draw(data, options);
    };
    </script>
  </head>
  <body>
    <div id="dual_x_div" style="width: 900px; height: 500px;"></div>
  </body>
</html>


  				</div>
			</div>			
		</div>
	</div>
</div>
<?php 
  include('adminIncludes/adminFooter.php');
?>