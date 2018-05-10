		<div id="footer">
				<div class="foot_menu">
					<ul>
						<li>인사말<div class="foot_menu_line"></div></li>
						<li>이용약관<div class="foot_menu_line"></li>
						<li>개인정보취급방침<div class="foot_menu_line"></li>
						<li>이메일무단수집거부<div class="foot_menu_line"></li>
						<li>오시는길<div class="foot_menu_line"></li>
						<li>사이트맵</li>
					</ul>
				</div><!--foot_menu -->
			
				<div class="foot_content">
					<p class="logo_foot"><img src="/images/common/logo_04.png" alt="" /></p>

					<div class="addr">
						<div id="addr_text">
						<p>송파구육아종합지원센터</p>
						<p>소재지 : 송파구 중대로 235 송파어린이문화회관 4층 육아종합지원센터</p>
	<!-- 					<p><?=$corp_name?><span class="sep_foot">&#65372;</span>대표: <?=$corp_ceo?></p> -->
	<!-- 					<p><?=$corp_address01?></p> -->
						<p>대표전화: <?=$corp_tel01?>02-449-0505<span class="sep_foot">&#65372;</span>대표팩스:<?=$corp_tel01?>02-449-0535
						</div><!-- addr_text-->
	<!-- 					<p class="copy">Copyright &copy; <?=$corp_copy_year?> <?=$corp_copy_name?> All Right Reserved.</p> -->
					</div><!-- addr -->



<!-- select option -->
<form name="link_form">
        <select name="link" class="addr_select">
          <option value="#void">전국육아조합지원센터</option>
          <option value="#void">서울시 강남구 육아종합지원센터</option>
		  <option value="#void">서울시 강남구 육아종합지원센터</option>
		  <option value="#void">서울시 강남구 육아종합지원센터</option>
		  <option value="#void">서울시 강남구 육아종합지원센터</option>
		  <option value="#void">서울시 강남구 육아종합지원센터</option>
		  <option value="#void">서울시 강남구 육아종합지원센터</option>
        </select>

        <input type="image" src="/images/common/go.jpg" class="go_link" alt="바로가기" onclick="goLink();return false;">
      </form>
<!-- select option script  -->
      <script type="text/javascript">
        function goLink() {
          var frm = document.link_form;
          if(frm.link.value != ""){
          window.open(frm.link.value);
          }
        }
      </script>


			</div><!--foot_content-->

		</div><!-- // footer -->
