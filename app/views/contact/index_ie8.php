<?=$temp['header_up']?>

<?=$temp['header_down']?>
	
<?=$temp['topheader']?>
    <div class="content1">
		
		
		
		
	</div>
	<div class="wheat"> 
		<img src="app/img/wheat.png" >
	</div>
	
	<div class="content2">
	  <div class="totem"> </div>
		<div class="boxcontent">
		
			<img src="app/img/contact_title.png" class="title">
				<div  class="textbox">
				<div class="box">
						<img src="app/img/contact_icon4.png" class="icon">
						<div class="leftext a">
							<p Style="border-bottom:1px solid #808080;">巴斯萊總經銷高維正企業: <br>台北市松仁路258號</p>
							<p>國君酒業巴斯萊酒廠 : <br>花蓮縣花蓮市美工路56號</p>
						</div>
					</div>
					<div class="box">
						<img src="app/img/contact_icon3.png" class="icon">
						<div class="leftext b">
							<p>02-27207250 </p> 
						</div>
					</div>
					<div class="box">
						<img src="app/img/contact_icon2.png" class="icon">
						<div class="leftext c">
							<p>basilai.craft.beer@basilai.com</p> 
						</div>
					</div>
					
					<div class="box">	
						<img src="app/img/contact_icon.png" class="icon">
						<div class="leftext d">
							<a href="https://www.facebook.com/pages/%E5%B7%B4%E6%96%AF%E8%90%8A%E6%89%8B%E5%B7%A5%E9%AE%AE%E9%87%80%E5%95%A4%E9%85%92/265600356958028?sk=timeline"><p>巴斯萊粉絲團</p></a>
						</div>
					</div>
					<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
					<script type="text/javascript">
					google.maps.event.addDomListener(window, 'load', function() {
						var mapdiv = document.getElementById('user_gmap');
						var myOptions = {
							zoom: 18,
							center: new google.maps.LatLng(25.0244317,121.5691597),
							mapTypeId: google.maps.MapTypeId.ROADMAP,
							scaleControl: true
						};
						var map = new google.maps.Map(mapdiv, myOptions);
						var marker = new google.maps.Marker({
							position: new google.maps.LatLng(25.0244317,121.5691597),
							map: map, 
							title: 'EVP'
						});
						var infowindow = new google.maps.InfoWindow({
							content: '<strong>EVP</strong><br />',
							size: new google.maps.Size(200, 200)
						});
						google.maps.event.addListener(marker, 'click', function() {
							infowindow.open(map,marker);
						});
					});
					</script>
					
					<div class="box_map">
						<div id="user_gmap"></div>
					</div>	
				</div>
		</div>
	</div>
		
</div>	
</div>
<?=$temp['footer']?>