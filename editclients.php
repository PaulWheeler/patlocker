<?php include('plugin/page_declaration.php');?>
	<title>Edit Details</title>
</head>
<body>
	<!--The title and menu start-->
	<?php include('plugin/header.php');?>
	<!--The title and menu end-->

		<!-- Insert code here -->
		<!-- Depending on the page, the pannel holders and the spacer can be deleted-->

		<!-- left hand area -->
		<div id="left_pannel">
			<iframe id="left_iframe" name="left_iframe" src="iframes/pat_tester_details.php"></iframe>
		</div>
		<!--End of left hand pannel-->

		<!-- Spacer -->
		<div id="pannel_spacer"></div>
		<!--End of spacer-->

		<!--right hand pannel-->
		<div id="right_pannel">
			<iframe id="left_iframe" name="left_iframe" src="iframes/client_details_form.php"></iframe>
		</div>
		<!--End of right hand pannel-->
		<!--end of insert code area -->

		<?php include('plugin/footer.php'); ?>
	</div>
</body>
</html>
