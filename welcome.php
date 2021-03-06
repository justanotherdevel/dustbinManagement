<?php
   include('session.php');
?>
<html>
   
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

    <title>Dustbin Management System</title>
  </head>
  <body>
    <h1>Dustbin Management System</h1>
    <div class="container-fluid">
	    <div class="row">
		    <div class="col-lg-3 col-md-4 col-sm-6">
			<a href="User_Management.html">
				<button id="User_Management" type="button" class="btn btn-primary btn-lg UI" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content="Use this to add a new user, remove an existing user or modify user details."> User Management</button>
			</a>
		    </div>
		    <div class="col-lg-3 col-md-4 col-sm-6">
			<a href="Dustbin_Management.html">
				<button type="button" class="btn btn-primary btn-lg UI" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content="Use this to add a new dustbin, check the status of dustbins or remove a non working dustbin">Dustbin Management</button>
			</a>
		    </div>
		    <div class="col-lg-3 col-md-4 col-sm-6">
			<a href="Worker_Management.html">
				<button id="Worker_Management" type="button" class="btn btn-primary btn-lg UI" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content="Use this to add a new worker, remove an existing worker or updated the worker data">Worker Management</button>
			</a>
		    </div>
		    <div class="col-lg-3 col-md-4 col-sm-6">
			<a href="Allocated_Work.html">
				<button type="button" class="btn btn-primary btn-lg UI" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content="Use this to check the works that has been allocated to someone and check the progress of the work.">Allocated Work</button>
			</a>
		    </div>
		    <div class="col-lg-3 col-md-4 col-sm-6">
			<a href="Pending_Work.html">
				<button type="button" class="btn btn-primary btn-lg UI" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content="Use this to check the dustbins that are full but not been allocated to any worker.">Pending Work</button>
			</a>
		    </div>
	    </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/popper.min.js"></script>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/action.js"></script>
  </body>
   
</html>
