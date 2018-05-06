<?php
	include ("dataset.php");
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Droid</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/fonts.css">
	<link rel="stylesheet" href="css/main.css">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
</head>
<body>
<main>
	<section id="droid" class="droid-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-7">
					<h1 class="droid__title">Лучшие дроиды в галактике, купи не прогадай.</h1>
				</div>
					<div class="col-lg-6">	
						<form class="droid__form" method="POST" id="">
							<div class="droid droid__search">
								<div class="droid__type">
									<h2 class="droid__type_text">Тип дроида</h2>
								</div>
								<select id="droidtype">
									<option value="all">Все</option>
									<option value="боевой">боевой</option>
									<option value="медицинский">медицинский</option>
									<option value="разведчик">разведчик</option>
								</select>
							</div>
						</form>
					</div>
					<div class="col-lg-6">
							<div class="droid droid__price">
								<div class="droid__type">
									<h2 class="droid__type_price">Цена дроида от</h2>
								</div>
								<input id="from" class="droid__price_input" type="" name="" maxlength="5">
								<div class="droid__type">
									<h2 class="droid__type_do">до</h2>
								</div>
								<input id="to" class="droid__price_input" type="" name="" maxlength="5">
							</div>
							<!--<button id="search" onclick="poisk()">Найти</button>-->
					</div>
				
<?php 
for ($i=0; $i < count($products); $i++):
?>
				<div id="id<?php echo $products[$i]['products_id']?>" class="col-sm-12 col-md-6 col-lg-4 content_droid <?php echo $products[$i]['type_droid']?>">
					<div class="droid__card">
						<div class="droid__card_img">
							<img class="droid__img_absolute" src="img/<?php echo $products[$i]['image']?>">
						</div>
						<span class="droid__card_title"><?php echo $products[$i]['title_droid']?></span>
						<p class="droid__card_description">Тип: <?php echo$products[$i]['type_droid']?></p>
						<div class="droid__card_line d-flex">
							<form class="droid__checkbox" method="POST" id="" name="">
								<div id="price">
    								<input class="droid__card_checkbox" id="tovar<?php echo $products[$i]['products_id']?>" type="checkbox" value="<?php echo $products[$i]['price_droid']?>">
    							</div>
    						</form>
    						<div class="droid__card_price d-flex">
    							<span id="price"><?php echo $products[$i]['price_droid']?> у.е.</span>
    						</div>
    					</div>
					</div>
				</div>
<?php
	endfor;
?>
			</div>
			<div class="row">
				<div class="col-md-12 d-flex droid__card_bottom">
					<p class="droid__card_priceitog">Цена заказа: <span class="sum"> у.е.</span></p>
					<button type="button" class="btn btn-secondary" id="btn-zakaz" onClick="sum()">Заказать</button>
				</div>
			</div>
		</div>
	</section>
</main>
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>-->
<script src="jquery/jquery-3.2.1.min.js"></script>
<script src="js/common.js"></script>
</body>
</html>
