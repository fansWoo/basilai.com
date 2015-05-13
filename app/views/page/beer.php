<?=$temp['header_up']?>
<script>
$(function(){
	$(document).scroll(function(){
		var scroll_top = $(document).scrollTop();
		if(scroll_top == 0){
			$('.content2, .content3 ').removeClass('hover');
		}
		else if(scroll_top >= 200 && scroll_top < 1300){
			$('.content2').addClass('hover');
		}
		else if(scroll_top >= 1300 && scroll_top < 3000){
			$('.content3').addClass('hover');
		}
		
		
	});
});
</script>
<?=$temp['header_down']?>
<?=$temp['topheader']?>
		<div class="wheat"> 
			<img src="app/img/product/wheat.png" >
		</div>
		<div class="line"> 
			<img src="app/img/index_line.png" >
		</div>
       <div class="totem"> </div>
		<div class="content1">
			<div class="area1"></div>
			<div class="area2">
					<img src="app/img/product/centent1_beer.png" class="beer1">
					<img src="app/img/product/centent1_beer2.png" class="beer2">
					<img src="app/img/product/wheat2.png" class="wheat2">
						<div class="box a">
							<img src="app/img/product/box3.png">
							<p style=" margin-top:-25px;">溫潤清甜<br>Moist and sweet</p>
						</div>
						<div class="box b">
							<img src="app/img/product/box2.png">
							<p>細緻的舞者之飲<br>Drink meticulous dancers</p>
						</div>
						
				<div class="textarea">
					<img src="app/img/product/centent1_text.png" class="title">
					<p class="p1">溫潤清甜 細緻的舞者之飲</p>
					<p>清甜的小麥原味，細緻綿密的啤酒泡沫；仔細品嘗，彷彿山地姑娘在舌尖上起舞，帶您舞動起內心深處的活力與熱情。</p>
				</div>
			</div>
		</div>
		<div class="content2">
			<div class="area1"></div>
				<div class="area2">
					<img src="app/img/product/centent2_beer.png" class="beer1">
					<img src="app/img/product/wheat3.png" class="wheat2">
					<img src="app/img/product/wheat4.png" class="wheat3">
					<img src="app/img/product/wheat5.png" class="wheat4">
					<img src="app/img/product/wheat5.png" class="wheat5">
						<div class="box a">
							<img src="app/img/product/box3.png">
							<p style=" margin-top:-25px;">甘醇濃烈 <br>Glycol strong</p>
						</div>
						<div class="box b">
							<img src="app/img/product/box1.png">
							<p>無畏的勇者之飲 <br>Drink brave and fearless</p>
						</div>
						
				<div class="textarea">
					<img src="app/img/product/centent2_text.png" class="title">
					<p class="p1">甘醇濃烈 無畏的勇者之飲</p>
					<p>濃郁的大麥香氣，展現出勇士的粗礦與豁達；在入口的瞬間，猶如戰鼓之聲在口腔內響起，給我們帶來重新面對人生的鼓舞與勇氣。</p>
				</div>
			</div>
		</div>
		<div class="content3">
			<div class="area1"></div>
				<div class="area2">
						<img src="app/img/product/centent3_beer1.png" class="beer1">
						<img src="app/img/product/centent3_beer2.png" class="beer2">
							<div class="box a">
								<img src="app/img/product/box1.png">
								<p style=" margin-top:0px;">果香馥郁<br>Fruity</p>
							</div>
							<div class="box b">
								<img src="app/img/product/box2.png">
								<p>重生的逐夢者之飲<br>The rebirth of the drink by dreamer</p>
							</div>
							
					<div class="textarea">
						<img src="app/img/product/centent3_text.png" class="title">
						<p class="p1">果香馥郁 重生的逐夢者之飲</p>
						<p>清新怡人的柚子果香配上鮮釀啤酒的爽冽口感，是釀酒師夢想中的極品啤酒；在不斷的嘗試過後，我們保持著活力與勇氣，最終完成了心中的夢想。喝一口巴斯萊柚香啤酒，現在 是時候換你(妳)了。</p>
					</div>
				</div>
		</div>
			
	
<?=$temp['footer']?>
