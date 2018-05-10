<?php require_once ($_SERVER["DOCUMENT_ROOT"]. "/include/head_sub.php"); ?>
<body>
<div id="wrap">
	<div id="header_wrap">
<?php
	$current_gnb = 'gnb01';
	require_once ($_SERVER["DOCUMENT_ROOT"]. "/include/gnb.php");
?>
	</div><!-- // header_wrap -->
	<div id="container_wrap">
		<div id="visual"><img src="../images/sub/counsel_bg.jpg" alt=""></div>
		<div id="container" class="clearfix">

<?php
	$current_lnb = 'lnb01';
	require_once ($_SERVER["DOCUMENT_ROOT"]. "/include/lnb_sub01.php");
?>

			<div id="content">
				<ul class="path clearfix">
					<li><a href="/index.php">HOME</a></li>
					<li><a>통합상담실</a></li>
					<li><span>송파통합상담실안내</span></li>
				</ul>
				<p class="title_cont">송파통합상담실안내</p>
				<div id="inner_content">
				1212312431321

				</div><!-- // inner_content -->

			</div><!-- // content -->
		</div><!-- // container -->
	</div><!-- // container_wrap -->

	<div id="footer_wrap">
<?php require_once ($_SERVER["DOCUMENT_ROOT"]. "/include/footer.php"); ?>
	</div><!-- // footer_wrap -->
</div><!-- // wrap -->
</body>
</html>
