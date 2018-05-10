<?php require_once ($_SERVER["DOCUMENT_ROOT"]. "/include/head_sub.php"); ?>
<body class="sitemap0 sitemap01">
<div id="wrap">
	<div id="header_wrap">
<?php 
	$current_gnb = 'gnb00';
	require_once ($_SERVER["DOCUMENT_ROOT"]. "/include/gnb.php"); 
?>
	</div><!-- // header_wrap -->
	
	
	<div id="container_wrap">
		<div id="visual_wrap">
			<div id="visual"><img src="/images/sub/sub_visual01.jpg" alt="서브 비쥬얼 01" /></div>
		</div>
		<?php
			$current_tnb01 = 'tnb05';
			require_once ($_SERVER["DOCUMENT_ROOT"]. "/include/tnb_sub01.php");
		?>
		<div id="container" class="clearfix">
			<div id="content">
				<ul class="path clearfix">
					<li><a href="/index.php"><img src="/images/misc/icon_home2.png" alt="홈" /></a></li>
					<li><span>사이트맵</span></li>
				</ul>
				<p class="title_cont">사이트맵</p>
				<div id="inner_content">
					<!--
					<div class="sitemapWrap">
						<dl class="sitemapTit">
							<dt>사이트맵</dt>
							<dd>전체메뉴 사이트맵을 안내해드립니다. 메뉴를 클릭하시면 해당페이지로 이동합니다.</dd>
						</dl>
						<div class="sitemapList clearfix">
							<div class="sitemapBox clearfix">
								<span class="num">01</span>
								<dl>
									<dt>타이틀</dt>
									<dd><a href="#void">서브페이지</a></dd>
									<dd><a href="#void">서브페이지</a></dd>
									<dd><a href="#void">서브페이지</a></dd>
									<dd><a href="#void">서브페이지</a></dd>
									<dd><a href="#void">서브페이지</a></dd>
									<dd><a href="#void">서브페이지</a></dd>
									<dd><a href="#void">서브페이지</a></dd>
									<dd><a href="#void">서브페이지</a></dd>
									<dd><a href="#void">서브페이지</a></dd>
								</dl>
							</div>
							<div class="sitemapBox clearfix">
								<span class="num">02</span>
								<dl>
									<dt>타이틀</dt>
									<dd><a href="#void">서브페이지</a></dd>
									<dd><a href="#void">서브페이지</a></dd>
									<dd><a href="#void">서브페이지</a></dd>
								</dl>
							</div>
							<div class="sitemapBox clearfix">
								<span class="num">03</span>
								<dl>
									<dt>타이틀</dt>
									<dd><a href="#void">서브페이지</a></dd>
									<dd><a href="#void">서브페이지</a></dd>
									<dd><a href="#void">서브페이지</a></dd>
								</dl>
							</div>
						</div>
						<div class="sitemapList clearfix">
							<div class="sitemapBox clearfix">
								<span class="num">04</span>
								<dl>
									<dt>타이틀</dt>
									<dd><a href="#void">서브페이지</a></dd>
									<dd><a href="#void">서브페이지</a></dd>
									<dd><a href="#void">서브페이지</a></dd>
								</dl>
							</div>
						</div>
						</div>
					</div>
					-->
					
					<!--
					<div class="sm_wrap clearfix">
						<ul>
							<li class="sm_title">타이틀</li>
							<li><a href="#void">서브페이지</a></li>
							<li><a href="#void">서브페이지</a></li>
						</ul>
						<ul>
							<li class="sm_title">타이틀</li>
							<li><a href="#void">서브페이지</a></li>
							<li><a href="#void">서브페이지</a></li>
						</ul>
						<ul>
							<li class="sm_title">타이틀</li>
							<li><a href="#void">서브페이지</a></li>
							<li><a href="#void">서브페이지</a></li>
						</ul>
						<ul>
							<li class="sm_title">타이틀</li>
							<li><a href="#void">서브페이지</a></li>
							<li><a href="#void">서브페이지</a></li>
						</ul>
						<ul>
							<li class="sm_title">타이틀</li>
							<li><a href="#void">서브페이지</a></li>
							<li><a href="#void">서브페이지</a></li>
						</ul>
					</div>
					-->
					
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
