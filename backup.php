<?php
	include("config.php");
	$query = mysqli_query($mysqli,"select count(code) from `hscode`");
	$row = mysqli_fetch_row($query);

	$rows = $row[0];
	
	$page_rows = 15;

	$last = ceil($rows/$page_rows);

	if($last < 1){
		$last = 1;
	}

	$pagenum = 1;

	if(isset($_GET['pn'])){
		$pagenum = preg_replace('#[^0-9]#', '', $_GET['pn']);
	}

	if ($pagenum < 1) { 
		$pagenum = 1; 
	} 
	else if ($pagenum > $last) { 
		$pagenum = $last; 
	}

	$limit = 'LIMIT ' .($pagenum - 1) * $page_rows .',' .$page_rows;
	
	$nquery=mysqli_query($mysqli,"select * from `hscode` $limit");

	$paginationCtrls = '';

	if($last != 1){
		if ($pagenum > 1) {
			$previous = $pagenum - 1;
			$paginationCtrls .= '<li class="paginate_button page-item previous" id="table3_previous"><a href="'.$_SERVER['PHP_SELF'].'?pn='.$previous.'" aria-controls="table3" data-dt-idx="'.$previous.'" class="page-link">Previous</a></li>';
			
			for($i = $pagenum-4; $i < $pagenum; $i++){
				if($i > 0){
					$paginationCtrls .= '<li class="paginate_button page-item "><a href="'.$_SERVER['PHP_SELF'].'?pn='.$i.'" aria-controls="table3" class="page-link" data-dt-idx="'.$i.'">'.$i.'</a> </li> ';
				}
			}
		}
		$paginationCtrls .= '<li class="paginate_button page-item disabled active"><a href="#" aria-controls="table3" class="page-link" data-dt-idx="'.$pagenum.'">'.$pagenum.'</a> </li>';
		for($i = $pagenum+1; $i <= $last; $i++){
			$paginationCtrls .= '<li class="paginate_button page-item "><a href="'.$_SERVER['PHP_SELF'].'?pn='.$i.'" aria-controls="table3" class="page-link" data-dt-idx="'.$i.'">'.$i.'</a> </li> ';
			if($i >= $pagenum+4){
				break;
			}
		}

		$paginationCtrls .= '&nbsp;&nbsp;...<li class="paginate_button page-item"><a href="#" aria-controls="table3" class="page-link" data-dt-idx="'.$last.'">'.$last.'</a> </li>';

		if ($pagenum != $last) {
			$next = $pagenum + 1;
			$paginationCtrls .= '<li class="paginate_button page-item next" id="table3_previous"><a href="'.$_SERVER['PHP_SELF'].'?pn='.$next.'" data-dt-idx="'.$next.'" aria-controls="table3" class="page-link">Next</a></li>';
		}
	}
?>
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
					<iframe src="https://mirsal2new.dubaitrade.ae/eMirsal/hsCodeSearch.do" width="100%" height="900" scrolling="auto" frameborder="0"></iframe>
					<table id="table3" class="table table-striped table-hover table-fw-widget">
					  <thead>
						<tr>
						  <th style="width:100px;">HS CODE</th>
						  <th>Short Desc</th>
						  <th>Long Desc</th>
						</tr>
					  </thead>
					  <tbody>
						<?php
							while($fetch_query = mysqli_fetch_array($nquery)){
						?>
						<tr class="odd gradeX">
						  <td><?php echo $fetch_query['code'];?></td>
						  <td><?php echo $fetch_query['short_desc'];?></td>
						  <td><?php echo $fetch_query['long_desc'];?></td>
						</tr>
						<?php
						}
						?>
                      </tbody>
                    </table>
					<div class="dataTables_paginate paging_simple_numbers" id="table3_paginate">
						<ul class="pagination"> <?php echo $paginationCtrls; ?></ul> <span>Showing <?php echo ((isset($_GET['pn']) && $_GET['pn'] != '')?$_GET['pn']:1)*$page_rows;?> of <?php echo $last*$page_rows;?></span>
					</div>
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
	<!--<script src="js/jquery.dataTables.js" type="text/javascript"></script>
    <script src="js/dataTables.bootstrap4.js" type="text/javascript"></script>
    <script src="js/dataTables.buttons.min.js" type="text/javascript"></script>-->
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

  </body>
</html>
