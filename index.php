<html>
<head>
  <link href="asset/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="asset/css/navbar-fixed-top.css" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script type="text/javascript" src="asset/js/bootstrap.js"> </script> 
</head>
<body>

  <!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">E-Learning</a>
        </div>
        <div class="navbar-collapse collapse">
        </div><!--/.nav-collapse -->
      </div>
    </div>

	<?php
		require_once('nusoap/lib/nusoap.php');
		$url = 'http://api.radioreference.com/soap2/index.php?wsdl';
		$client = new nusoap_client($url, 'WSDL');
		$result = $client->call('getCountryList');
	?>
	
      <table class="table table-bordered">
          <tr>
            <td>ID</td>
            <td>Country Name</td>
            <td>Code</td>
          </tr>
            <?php foreach ($result as $country){
				echo "<tr>";
					echo "<td>".$country['coid']."</td>";
					echo "<td>".$country['countryName']."</td>";
					echo "<td>".$country['countryCode']."</td>";
				echo "</tr>";
				}
			?>
        </table>

</body>
</html>