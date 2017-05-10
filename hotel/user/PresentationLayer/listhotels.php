<!DOCTYPE html>
<html lang="en">
<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Hotel</title>
	<?php
		require("style.php");
	?>
</head>

<body>
<div class="col-md-4">
	<a class="btn pull-right" href="javascript://" onclick="location.href='userprofile.php';">
	<i class="fa fa-user"></i> My Profile</a> 
</div>
<div class="col-md-4">
				<a class="btn pull-right" href="javascript://" onclick="location.href='../logout.php';">Log Out</a> 
</div>

</br></br></br>

<a class="btn btn-block btn-primary disabled">List of Hotels</a>                           
               <div class="row">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example" data-show-refresh="true" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
											<th>Name</th>	
											<th>Description</th>
											<th>Address</th>
											<th>Region</th>
											<th>Phone</th>
											<!--<th></th>-->
                                        </tr>
                                    </thead>
                                    <tbody>
<?php 
		require_once("../LogicLayer/HotelManager.php");
		$hotels = HotelManager::getAllHotels();
		foreach($hotels as $row){
   ?>
		 <tr>
				<td><?php echo $row->getName();?></td>
				<td><?php echo $row->getDescription();?></td>
				<td><?php echo $row->getAddress();?></td>
				<td><?php echo $row->getState();?></td>
				<td><?php echo $row->getPhone();?></td>
				<!--<td><a href="javascript://"onclick="javascript:window.open('addchart.php?id=<?php echo $row->getID();?>','HB','toolbar=1, location=1, scrollbars=1,resizable=1, width=1000,height=300');"><i class="fa fa-shopping-cart fa-fw"></i></a></td>-->
		  </tr>
    <br/>
           <?php } ?>
		   
		   
                                    </tbody>
                                </table>
                            </div>
 
</body>

<footer>
			
<footer>

</html> 