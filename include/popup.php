

		<div id="popup_wrap">
			<div id="popup">
				<img src="/images/main/popup.jpg" alt="�˾� �̹���">
			<div class="close">
					<a href="#void" onclick="todaycloseWin();"><img src="/images/main/popup_text.png" alt="�˾� �ݱ�"></a>
			</div>
  </div><!-- //popup -->
</div><!-- //popup_wrap -->


<!-- popup script   -->
<script type="text/javascript">
  function setCookie( name, value, expirehours ) {
    var todayDate = new Date();
    todayDate.setHours( todayDate.getHours() + expirehours );
    document.cookie = name + "=" + escape( value ) + "; path=/; expires=" + todayDate.toGMTString() + ";"
  }
  function closeWin() {
    document.getElementById("popup").style.height = "0";
  }
  function todaycloseWin() {
    setCookie( "ncookie", "done" , 24 );
    document.getElementById("popup").style.height = "0";
  }
  cookiedata = document.cookie;
  
  if ( cookiedata.indexOf("ncookie=done") < 0 ){
    document.getElementById("popup").style.height = "96";
  } else {
    document.getElementById("popup").style.height = "0";
  }
</script>