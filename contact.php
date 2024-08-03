<?php
session_start();
error_reporting(0);

include('includes/dbconnection.php');
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Animal Welfare Society | Contact </title>
<link rel="icon" href="gif/funnygifsbox.com-2019-05-22-12-24-43-5.gif">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
</head>
<body>
		<?php include_once('includes/header.php');?>
			
		<div class="banner-header">
			<div class="container">
				<h2>contact</h2>
			</div>
			</div>
	<!--about-->
	<div class="content">
							
			<!--advantage-->
			<div class="advantages">
					<div class="container" style=" box-shadow: 0 1px 10px 3px  rgb(148, 148, 148,0.3); border-radius:10px; padding:50px;">
						<?php 
 $query=mysqli_query($con,"select * from  tblpage where PageType='contactus'");
 while ($row=mysqli_fetch_array($query)) {


 ?>
						
						<div class="advantages-grids">
							<div class="col-md-12 advantage-grid">
								<div  style="text-align:left;" class="company_ad" style="box-sizing:content-box">
							 <p>Reach out to us anytime, Our Voluteer and Members are ready to help you.
Animal Welfare Society is here to help you with more information. </p>
			      			<address>
	 							 <p><b>Email :</b> <?php  echo $row['Email'];?></p>
								 <p><b>Phone : </b> <?php  echo $row['MobileNumber'];?></p>
								 <p><?php  echo $row['PageDescription'];?></p>
								<br>
								<br>
							</address>
						</div>
							</div>	
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3691.0239928752003!2d87.30795617586668!3d22.314932342363896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a1d440255555547%3A0x6f2f20dd0c0d6793!2sIndian%20Institute%20of%20Technology%2C%20Kharagpur!5e0!3m2!1sen!2sin!4v1719427557110!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
							<!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3889.010180847479!2d77.56408271523578!3d12.907066719782259!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae15631acd5091%3A0x8c51443e31b10d0f!2sDayananda%20Sagar%20College%20of%20Arts%2C%20Science%20%26%20Commerce!5e0!3m2!1sen!2sin!4v1661226330808!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
								<div class="clearfix"></div>	
							</div>
						</div><?php } ?>
					</div>
				<!--advantage-->
			<!--specials-->
			 <?php include_once('includes/special.php');?>
			</div>
			<!--footer-->
			<?php include_once('includes/footer.php');?>
</body>
</html>