<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="images/favicon2.png">
    <title>HS Code | Download Online Free</title>
	<?php include("metalinks.php");?>
    <link rel="stylesheet" type="text/css" href="css/select2.min.css"/>
    <link rel="stylesheet" type="text/css" href="css/bootstrap-slider.min.css"/>
    <link rel="stylesheet" type="text/css" href="css/bootstrap-datepicker3.min.css"/>
	<link type="text/css" href="css/little-fox.css" rel="stylesheet"> 
	<link rel="stylesheet" type="text/css" href="css/dataTables.bootstrap4.css"/>
	<style>
	.mai-end{
    background-color: #fafafa;
	}
	.boots_form-control {
    display: block;
    width: 100%;
    padding: .375rem .75rem;
    font-size: 1rem;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: .25rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
	}
	</style>
  </head>
  <body>
	<div class="mai-wrapper">
	<?php include("header.php");?>
	  <div class="main-content container" style="margin-top:-25px;">

		<div class="col-md-12" style="background:white;height:100px;padding:10px;background:#fe8458;border-radius: 3px;box-shadow: 0 1px 2px 0 rgba(0,0,0,0.25);margin-bottom:20px;">
			<h1 style="text-align:center;color:white;font-weight:bold;padding:25px;">Ad Block</h1>
		</div>

	    <div class="row">
		  <div class="col-md-12">
			<div class="panel panel-default" style="background:white;border-radius: 3px;box-shadow: 0 1px 2px 0 rgba(0,0,0,0.25);">
              <div class="panel-heading panel-heading-divider" style="padding:14px 20px;margin:0px;"><h4>HS Code Search</h4></div>
              <div class="panel-body mai-end">
                <form method = "POST">
                  <div class="form-group inline row">
					<div class="col-sm-3">
					 <label>Section (Category)</label>
					</div>
                    <div class="col-sm-3">
					   <select class="boots_form-control form-control-xs">
							<option> All </option>
					   </select>
                    </div>
					<div class="col-sm-3">
					 <label>Chapter (Sub-category)</label>
					</div>
                    <div class="col-sm-3">
                      <select class="boots_form-control form-control-xs">
							<option> All </option>
					  </select>
                    </div>
                  </div>

				  <div class="form-group inline row">
					<div class="col-sm-3">
					 <label>Headings</label>
					</div>
                    <div class="col-sm-3">
                      <input type="text" class="boots_form-control form-control-xs">
                    </div>
					<div class="col-sm-3">
					 <label>Consignment Description</label>
					</div>
                    <div class="col-sm-3">
                      <input type="text" class="boots_form-control form-control-xs">
                    </div>
                  </div>


                </form>
              </div>
            </div>

			<div class="panel panel-default panel-table" style="background:white;border-radius: 3px;box-shadow: 0 1px 2px 0 rgba(0,0,0,0.25);">
              <div class="panel-body mai-end">
					<table id="table3" class="table table-striped table-hover table-fw-widget">
					  <thead>
						<tr>
						  <th>HS CODE</th>
						  <th>Short Desc</th>
						  <th>Long Desc</th>
						</tr>
					  </thead>
					  <tbody>
						<?php
							for($i=1 ; $i < 100 ; $i++){
						?>
						<tr class="odd gradeX">
						  <td>97060010</td>
						  <td>Antiques furniture & parts, of an age exceeding one hundred years.</td>
						  <td>Antiques furniture & parts, of an age exceeding one hundred years.</td>
						</tr>
						<?php
						}
						?>
                      </tbody>
                    </table>
              </div>
            </div>
		  </div>

		</div>

		<div class="col-md-12" style="background:white;height:100px;padding:10px;background:#fe8458;border-radius: 3px;box-shadow: 0 1px 2px 0 rgba(0,0,0,0.25);margin-bottom:10px;">
			<h1 style="text-align:center;color:white;font-weight:bold;padding:25px;">Ad Block</h1>
		</div>

      </div>
    </div>
    <?php include("footer.php");?>
	<script src="js/jquery.dataTables.js" type="text/javascript"></script>
    <script src="js/dataTables.bootstrap4.js" type="text/javascript"></script>
    <script src="js/dataTables.buttons.min.js" type="text/javascript"></script>
	<script src="js/buttons.html5.min.js" type="text/javascript"></script>
    <script src="js/buttons.flash.min.js" type="text/javascript"></script>
    <script src="js/buttons.print.min.js" type="text/javascript"></script>
    <script src="js/buttons.colVis.min.js" type="text/javascript"></script>
    <script src="js/buttons.bootstrap4.min.js" type="text/javascript"></script>

    <script src="js/select2.min.js" type="text/javascript"></script>
    <script src="js/select2.full.min.js" type="text/javascript"></script>
    <script src="js/bootstrap-slider.min.js" type="text/javascript"></script>
    <script src="js/bootstrap-datepicker.min.js" type="text/javascript"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        //initialize the javascript
        App.init();
        App.formElements();
      }
                       );
    </script>
    <script type="text/javascript">
      $(document).ready(function(){
        App.livePreview();
      }
    );
    </script>
	<script type="text/javascript">
      $(document).ready(function(){
        //initialize the javascript
        App.init();
        App.dataTables();
      }
    );
    </script>
  </body>
</html>
