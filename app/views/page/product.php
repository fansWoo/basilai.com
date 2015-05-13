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
							<p style=" margin-top:-25px;">In hac habitasse platea dictumst. 
								Maecenas diam ligula, vulputate vitae,</p>
						</div>
						<div class="box b">
							<img src="app/img/product/box2.png">
							<p>In hac habitasse platea dictumst. 
								Maecenas diam ligula, vulputate vitae,</p>
						</div>
						
				<div class="textarea">
					<img src="app/img/product/centent1_text.png" class="title">
					<p>Sed id dolor. In hac habitasse platea dictumst. 
						Maecenas diam ligula, vulputate vitae, mollis a
						mcorper non, velit. Donec in velit. Sed lacus nisl
						stibulum sed, vehicula et, commodo euigula. Duis
						l lacus. In tinidunt. Vestibulum elit. Praesent hen
						t. Suspendisse venenatis. Sed lacus nisl
						stibulum sed, vehicula et, commodo euigula. Duis
						l lacus. In tinidunt. Vestibulum elit. Praesent hen
						t. Suspendisse venenatis.</p>
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
							<p style=" margin-top:-25px;">In hac habitasse platea dictumst. 
								Maecenas diam ligula, vulputate vitae,</p>
						</div>
						<div class="box b">
							<img src="app/img/product/box1.png">
							<p>In hac habitasse platea dictumst. 
								Maecenas diam ligula, vulputate vitae,</p>
						</div>
						
				<div class="textarea">
					<img src="app/img/product/centent2_text.png" class="title">
					<p>Sed id dolor. In hac habitasse platea dictumst. 
						Maecenas diam ligula, vulputate vitae, mollis a
						mcorper non, velit. Donec in velit. Sed lacus nisl
						stibulum sed, vehicula et, commodo euigula. Duis
						l lacus. In tinidunt. Vestibulum elit. Praesent hen
						t. Suspendisse venenatis. Sed lacus nisl
						stibulum sed, vehicula et, commodo euigula. Duis
						l lacus. In tinidunt. Vestibulum elit. Praesent hen
						t. Suspendisse venenatis.</p>
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
							<p style=" margin-top:0px;">In hac habitasse platea dictumst. 
								Maecenas diam ligula, vulputate vitae,</p>
						</div>
						<div class="box b">
							<img src="app/img/product/box2.png">
							<p>In hac habitasse platea dictumst. 
								Maecenas diam ligula, vulputate vitae,</p>
						</div>
						
				<div class="textarea">
					<img src="app/img/product/centent3_text.png" class="title">
					<p>Sed id dolor. In hac habitasse platea dictumst. 
						Maecenas diam ligula, vulputate vitae, mollis a
						mcorper non, velit. Donec in velit. Sed lacus nisl
						stibulum sed, vehicula et, commodo euigula. Duis
						l lacus. In tinidunt. Vestibulum elit. Praesent hen
						t. Suspendisse venenatis. Sed lacus nisl
						stibulum sed, vehicula et, commodo euigula. Duis
						l lacus. In tinidunt. Vestibulum elit. Praesent hen
						t. Suspendisse venenatis.</p>
				</div>
			</div>
		</div>
			
</div>		
<?=$temp['footer']?>
