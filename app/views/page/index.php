<?=$temp['header_up']?>
<script>
$(document).on('mouseenter', '.nav .navHref', function(){
	var bgname = $(this).data('bgname');
	$('.bodyBg.hover').addClass('opacity0');
	$('.bodyBg').removeClass('hover');
	$('.bodyBg[data-bgname=' + bgname + ']').addClass('hover');
    //新增的
    $('.textSurfaced').removeClass('hover');
    $('.textSurfaced[data-bgname=' + bgname + ']').addClass('hover');
});
$(document).on('mouseleave', '.nav .navHref', function(){
	$('.bodyBg').removeClass('hover');
    $('.textSurfaced').removeClass('hover');
	$('.bodyBg[data-bgname=default]').addClass('hover');
	$('.textSurfaced[data-bgname=default]').addClass('hover');
});
</script>
<?=$temp['header_down']?>
		<div class="bodyBg hover" data-bgname="default"> 
			<img src="app/img/index_bg1.jpg" >
		</div>
		<div class="bodyBg" data-bgname="about"> 
			<img src="app/img/bodybg2.jpg" >
		</div>
		<div class="bodyBg" data-bgname="beer"> 
			<img src="app/img/bodybg.jpg" >
		</div>
		<div class="bodyBg" data-bgname="store"> 
			<img src="app/img/bodybg3.jpg" >
		</div>
		<div class="bodyBg" data-bgname="news"> 
			<img src="app/img/menu_bg3.png" >
		</div>
		
		<div class="bodyBg" data-bgname="contact"> 
			<img src="app/img/contact_bg1.jpg" >
		</div>
		<div class="bodyBg" data-bgname="menu"> 
			<img src="app/img/menu_bg3.png" >
		</div>
		<img src="app/img/index_pic2.png" class="logoPic">
		<div class="pic2"></div>
		<div class="rightbox">
		</div>
		<a href="https://www.facebook.com/pages/%E5%B7%B4%E6%96%AF%E8%90%8A%E6%89%8B%E5%B7%A5%E9%AE%AE%E9%87%80%E5%95%A4%E9%85%92/265600356958028?sk=timeline" Target="_blank"><div class="fb">
			<img src="app/img/index_fb.png">
		</div></a>

		<div class="textSurfaced hover" data-bgname="default">
			<div class="text1">
				<img src="app/img/index_text1.png">
			</div>
			<div class="text2">
				<img src="app/img/index_text2.png">
			</div>
			<div class="text3">
				<img src="app/img/index_text3.png">
			</div>
			<div class="text4">
				<img src="app/img/index_text4.png">
			</div>
		</div>
        <div class="textSurfaced box2" data-bgname="about"> 
			<h1>ABOUT</h1>
			<h1>關於巴斯萊</h1>
			<p> 第一道麥，品嘗生命的原味啤酒依然活著；你（妳）也依然活著。</p>
		</div>
		<div class="textSurfaced box2" data-bgname="beer"> 
			<h1>BEER</h1>
			<h1>手工鮮釀啤酒</h1>
			<p>小麥啤酒 ‧ 全麥啤酒 ‧  柚香啤酒</p>
			
		</div>
		<div class="textSurfaced box2" data-bgname="store"> 
			<h1>STORE</h1>
			<h1>門市資訊</h1>
			<p>第一道麥，找回生命原味...</p>
		</div>
		<div class="textSurfaced box2" data-bgname="news"> 
			<h1>NEWS</h1>
			<h1>最新消息</h1>
			<p> Beer Still Live, You Still Live.</p>
		</div>
		<div class="textSurfaced box2" data-bgname="contact"> 
			<h1>CONTACT</h1>
			<h1>聯絡我們</h1>
			<p>Welcome to contact us...</p>
		</div>

		<img src="app/img/index_line.png" class="line">
		<div class="beer1">
			<img src="app/img/index_beer1.png">
		</div>
		<div class="beer2">
			<img src="app/img/index_beer2.png">
		</div>
		<div class="beer3">
			<img src="app/img/index_beer2.png">
		</div>
		<div class="light">
			<img src="app/img/index_light.png">
		</div>
		<div class="shadow1">
			<img src="app/img/index_shadow.png">
		</div>
		<div class="shadow2">
			<img src="app/img/index_shadow.png">
		</div>
		<div class="shadow3">
			<img src="app/img/index_shadow.png">
		</div>
		<div class="nav">
			<a href="page/about" class="navHref" data-bgname="about">
				<div class="li">
					<img src="app/img/index_nav.png" class="rhombic">
					<p>ABOUT</p>
				</div>
			</a>
			<a href="page/beer" class="navHref" data-bgname="beer">
				<div class="li">
					<img src="app/img/index_nav.png" class="rhombic">
					<p>BEER</p>
				</div>
			</a>
			<a href="page/store" class="navHref" data-bgname="store">
				<div class="li">
					<img src="app/img/index_nav.png" class="rhombic">
					<p>STORE</p>
				</div>
			</a>
			<a href="page/menu" class="navHref" data-bgname="news">
				<div class="li">
					<img src="app/img/index_nav.png" class="rhombic">
					<p>NEWS</p>
				</div>
			</a>
			<a href="contact" class="navHref" data-bgname="contact">
				<div class="li">
					<img src="app/img/index_nav.png" class="rhombic">
					<p>CONTACT</p>
				</div>
			</a>
		
		</div>
			
		<div class="footer1">
			<p>巴斯萊總經銷高維正企業: 台北市松仁路258號<p>
			<p>國君酒業巴斯萊酒廠 : 花蓮縣花蓮市美工路56號<p>
			<p>© 2014  All Rights Reserved. Design By <a href="http://fanswoo.com/">fansWoo</a><p>
		<div>	
		
</body>
</html>