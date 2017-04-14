<?php
	// Check if session is not registered, redirect back to main page.
	// Put this code in first line of web page.
	session_start();
	
	//session_unset();
	
	//echo print_r($_SESSION), "<br />";

	if($_SESSION["user"] == NULL){
		
		header("location:index.php?login=none");
	}
?>

<!DOCTYPE html>
<!--
	Creation date:	06/22/2016
	Last Updated:	08/03/2016
	Created By:		Dalton Kraatz
	
	File Notes:
		06/22/2016:
			Main page file created
				Currently uses the https://html5up.net/zerofour template heavily
				Most of the content was removed to redesign flow of the site
				
		06/23/2016:
			Main page file adapted
				To start developing the PO System, site dev was started.
				Initial page: mostly blank screen with login widget.
					Login widget mostly developed, but untested.
				Also cloned to make a login landing page, and a lost PW page.
				
		06/29/2016:
			Added PHP login checking to make sure users cannot get in without being logged in.
			
		07/20/2016:
			Changed file from PO_main.php to main.php
			
		07/26/2016:
			Added session modifications that successfully check for a user login before allowing access.
			
		07/27/2016:
			Added alert for when a user has been admitted after site registration.
			
		07/28/2016:
			Changed the "Purchase Orders" link into a button
				Button doubles as a dropdown, which allows for better arrangement.
				
		07/29/2016:
			Changed a Vendor field for the modal
				Most likely will be filled by older SQL query data
				
		08/03/2016:
			Spent prior 2 days working on getting jQuery DataTables and Bootstrap-Datepicker added
				Bootstrap-Datepicker successfully functioning as of yesterday.
				DataTables requires more attention because of AJAX conversion
				
		08/05/2016:
			Started making final minor adjustments to the main input fields for the form-control
				Vendors is dynamically updating from every new form
				Departments is strucured, but can be added from the AWS end, or admin-only later on
			Page planned to be cloned for viewing purchase orders en masse
				Will use an AJAX structure for better quality control	
				Probably wil go with a header-footer column name system.
					Should learn to make the header static, or make the table rows scrollable
					
		08/10/2016:
			DataTable for PO lookups almost developed
				Looking in on why there is an error on page load.
				Currently having page editing as a 
-->

<?php

	$host="localhost"; // Host name
	$username="root"; // Mysql username
	$password="Bgt7123test"; // Mysql password
	$db_name="poSYS"; // Database name
	$tbl_name="users"; // Table name
	
	//connect to the MySQL db
	//$mysqli = new mysqli($host, $username, $password, $db_name);
	$mysqli = mysqli_connect($host, $username, $password, $db_name) or die("Could not connect to database");
	if ($mysqli) { echo "Working!"; }
	//echo $mysqli->connect_errno;
	/*if($mysqli->connect_errno) {
		echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ")" . $mysqli->connect_error;
	}*/
	
	//query db and hold results in res 
	//$res = $mysqli -> query("SELECT * FROM users ORDER BY id ASC");
?>

<html>
	<head>
		<title>Zymo Research PO Main</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	  
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
		<!--<link href="bootstrap-3.3-2.6/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">-->
	  
		<link rel="stylesheet" href="PO_navcss.css" />
		
		<!--  jQuery -->
		<!--<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.3.min.js"></script>-->
		<!--<script type="text/javascript" src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>-->
		
		<!-- Bootstrap Date-Picker Style Sheet -->
		<link rel="stylesheet" href="assets/css/bootstrap-datepicker3.css"/>
		
		<!-- DataTables CDN -->
		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css">
		<!--<script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-1.12.3.js"></script>-->
		<script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.js"></script>
		
		<script type="text/javascript">
			/*$(document).ready( function () {
				$('#table_id').DataTable();
			} );*/
		</script>
	</head>
	
	<body class="homepage">
		<!-- Header + Nav container -->
		<div class="container-fluid">
			<div id="header-wrapper">
				<header id="header">
					<div class="inner">
						<!-- Zymo
							 Needs Zymo Logo -->
						<h1 id="logo">Zymo Research</h1>
						
						<!-- Site Nav -->
						<nav id="nav">
							<ul>
								<li><a href="index.php?logout=TRUE">Log Out</a></li>
								<!-- <li><a href="#">PO Records</a></li>
								<li><a href="#">Add Purchase Record</a></li> -->
								<li>
									<div class="dropdown">
										<button class="dropbtn">Purchase Orders</button>
										<div class="dropdown-content">
											<a href="#">Purchase Order Records</a>
											<a href="addOrder.php">Add Purchase Record</a>
											<!-- <a href="#">Link 3</a> -->
										</div>
									</div>
								</li>
							</ul>
						</nav>
					</div>
				</header>
			</div>
		</div> <!-- End of nav -->
		
		<!-- Start of add_order modal -->
		<div class="modal fade" id="add_order">
		  <div class="modal-dialog">
			  <div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					<h4 class="modal-title">Add Purchase Order</h4>
				</div>
				<FORM ACTION="formTest.php" METHOD="POST">
				<div class="modal-body">
					<div class="form-group">
						<label for="userInputEmail1">Email address</label>
						<input class="form-control" name="userInputEmail" value="<?php echo $_SESSION["user"]; ?>" type="email" required>
					</div>
					
					<div class="form-group">
						<label for="deptInput">Dept</label>
						<select class="form-control" name="deptInput" maxlength="60" type="text" required>
							<?php 
								$res = $mysqli -> query("SELECT * FROM dept ORDER BY id ASC");
								while( $row = $res->fetch_assoc() ) {
									//$usr = substr($row['email'], 0, strpos($row['email'], "@"));
									echo "<option value=\"" . $row['id'] . "\">" . 
										$row['id'] ." - " .
										$row['dept_name'] . "</option>";
								}
								$res->close();
							?>
						</select>
					</div>
					
					<div class="form-group">
						<label for="vendors">Vendor</label>
						<input class="form-control" list="vendors" name="vendorInput" maxlength="45" type="text" required>
						<datalist id="vendors">
							<?php 
								$res = $mysqli -> query("SELECT DISTINCT vendor_name FROM p_order ORDER BY vendor_name");
								while( $row = $res->fetch_assoc() ) {
									//$usr = substr($row['email'], 0, strpos($row['email'], "@"));
									echo "<option value=\"" . $row['vendor_name'] . "\">";
								}
								$res->close();
							?>
						</datalist>
					</div>
					
					<div class="form-group">
						<label for="dateInput">Date</label>
						<div class="input-group date">
							<input type="text" class="form-control span8 col-md-6" id="datepicker" name="dateInput" style="width: 90% !important;" required>
							<span class="input-group-addon">
								<i class="glyphicon glyphicon-calendar"></i>
							</span>
						</div>
					</div>
					
					<div class="form-group">
						<label for="costInput">Cost</label>
						<input class="form-control" name="costInput" type="number" min="0" step="0.01">
					</div>
					
				</div>
				<div class="modal-footer">
				
					<input type="submit" class="btn btn-primary">
				</div>
				</FORM>
			  </div>
			</div>
		</div>
		
		
		
		<?php
            /* Design requirements for this to work:
                1) Only appears if user just registered.*/
			//$_GET["login"] = FALSE;
			//echo "Login is " . $_GET["login"];
			if( $_GET["register"] == "good" ){ 
                //echo "loggedIn Failed"; ?>
                <div class="container">
			        <div class="alert alert-success" style="text-align:center">
						<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				        <strong>Success!</strong> Login created!
			        </div>
                </div>
            <?php }
        ?>
		
		<div class="jumbotron dropotron" id="banner">
			<!--<h1>Lorem Ipsum</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean quis tincidunt tortor.
				Sed at vestibulum nisi, eget porttitor tortor. In semper dolor nunc, 
				in varius leo molestie ut. Cras ac tincidunt dui, ac malesuada ligula. 
				Nulla interdum nulla ut diam rutrum, vel auctor nulla mollis. 
				Cras accumsan sed nisl nec viverra. Quisque posuere ipsum quis semper accumsan. 
				In hac habitasse platea dictumst. Mauris gravida est a ipsum tempor tincidunt. 
				Mauris suscipit lectus at leo dictum vulputate.</p>
			<a href="#">See More</a>-->
			
			<table id="orders" class="display" cellspacing="0" width="100%">
				<thead>
					<tr>
						<th></th>
						<th>PO #</th>
						<th>Email</th>
						<th>Dept ID</th>
						<th>Vendor</th>
						<th>Order Date</th>
					</tr>
				</thead>
				<tfoot>
					<tr>
						<th></th>
						<th>PO #</th>
						<th>Email</th>
						<th>Dept ID</th>
						<th>Vendor</th>
						<th>Order Date</th>
					</tr>
				</tfoot>
			</table>
			
		</div>
		
		<!-- Footer Wrapper -->
		<div id="footer-wrapper">
			<footer id="footer" class="container">
				<div class="row">
					<div class="12u">
						<div id="copyright">
							<ul class="menu">
								<li>&copy; 2016 Zymo Research Corporation. All rights reserved.</li>
								<li>Lead Developer: Dalton Kraatz</li>
								<li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
							</ul>
						</div>
					</div>
				</div>
			</footer>
		</div> <!-- End of Footer -->
		
		<!-- Scripts -->

			<!--<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/skel-viewport.min.js"></script>
			<script src="assets/js/util.js"></script>-->
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<!--<script src="assets/js/main.js"></script>-->
			
		<!-- Bootstrap core JavaScript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
			<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>-->
			<!--<script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-1.12.3.js"></script>-->
			<!--<script>window.jQuery || document.write('<script src="bootstrap-3.3-2.6/assets/js/vendor/jquery.min.js"><\/script>')</script>-->
			<!--<script src="bootstrap-3.3-2.6/dist/js/bootstrap.min.js"></script>-->
			<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
			<!--<script src="bootstrap-3.3-2.6/assets/js/ie10-viewport-bug-workaround.js"></script>-->

			<!-- Bootstrap Date-Picker Plugin -->
			<script type="text/javascript" src="assets/js/bootstrap-datepicker.min.js"></script>
			<script>
				$('#datepicker').datepicker({
					format: "yyyy/mm/dd",
					maxViewMode: 2,
					todayBtn: "linked",
					orientation: "bottom left",
					daysOfWeekHighlighted: "0,6",
					autoclose: true,
					todayHighlight: true
				});
				
				/* Formatting function for row details - modify as you need */
				function format ( d ) {
					// `d` is the original data object for the row
					return '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">' +
						/*'<tr>'+
							'<td>Full name:</td>'+
							'<td>'+d.name+'</td>'+
						'</tr>'+
						'<tr>'+
							'<td>Extension number:</td>'+
							'<td>'+d.extn+'</td>'+
						'</tr>'+*/
						'<tr>' +
							'<td>Extra info:</td>' +
							'<td>And any further details here (images etc)...</td>' +
							'<td>Order #: ' + d.id + '</td>' +
						'</tr>' +
					'</table>';
				}
				 
				$(document).ready(function() {
					var table = $('#orders').DataTable( {
						"columns": [
							{
								"className":      'details-control',
								"orderable":      false,
								"data":           null,
								"defaultContent": ''
							},
							{ "data": "id" },
							{ "data": "user_email" },
							{ "data": "dept_id" },
							{ "data": "vendor_name" },
							{ "data": "order_date" }
						],
						"processing": true,
						"serverSide": true,
						"ajax": "assets/scripts/server_ajax.php",
						"order": [[1, 'asc']]
					} );
					 
					// Add event listener for opening and closing details
					$('#example tbody').on('click', 'td.details-control', function () {
						var tr = $(this).closest('tr');
						var row = table.row( tr );
				 
						if ( row.child.isShown() ) {
							// This row is already open - close it
							row.child.hide();
							tr.removeClass('shown');
						}
						else {
							// Open this row
							row.child( format(row.data()) ).show();
							tr.addClass('shown');
						}
					} );
				} );
			</script>

	</body>
</html>