	<link rel="stylesheet" type="text/css" href="app/css/style_m.css"></link>
	<?if(isset($global['style'])):?>
	<?foreach($global['style'] as $value):?>
	<link rel="stylesheet" type="text/css" href="app/css/<?=$value?>.css"></link>
	<?endforeach?>
	<?endif?>
	
	
</head>
<body>
	<div class="header">
	  <div class="logoarea">
		<a href=""><img src="app/img/mobile/logo1.png"  class="logo"></a>
	  </div> 
	  <div class="toggle"></div>
	  <div class="nav">
		   <div class="in_nav">
				<a href="page/about">
					<div class="li">
						<img src="app/img/index_nav.png" class="rhombic">
						<p>About</p>
					</div>
				</a>
				
				<a href="page/beer">
					<div class="li">
						<img src="app/img/index_nav.png" class="rhombic">
						<p>Beer</p>
					</div>
				</a>
				<a href="page/store">
					<div class="li">
						<img src="app/img/index_nav.png" class="rhombic">
						<p>Store</p>
					</div>
				</a>
				
				<a href="page/menu">
					<div class="li">
						<img src="app/img/index_nav.png" class="rhombic">
						<p>News</p>
					</div>
				</a>
				<a href="contact">
					<div class="li">
						<img src="app/img/index_nav.png" class="rhombic">
						<p>Contact</p>
					</div>
				</a>
		   </div> 
	  </div>   
	</div>