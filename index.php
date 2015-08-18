<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type"
content="text/html" charset="UTF-8">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
    <script src="js/jquery.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
    
    <link href="css/css.css" rel="stylesheet" type="text/css">
	<script src="js/js.js" type="text/javascript"></script>
</head>
<body>
	<?php include 'php/php.php'; ?>
	<section class="row">
		<div class="col-lg-12">
			<div class="itemBlock"> <!-- output for items -->
				<?php
					foreach($itemList['blocks'] as $itemListBlocks){
						echo '<div class="header">' . $itemListBlocks["type"] . '</div>';
						foreach($itemListBlocks['items'] as $itemListBlocksItems){
							echo '<img class="col-lg-2" src="' . getImg($itemListBlocksItems["id"]) . '" />';
						}
					}
				?>
			</div>
		</div>
	</section>
	<footer>©Pierre Norrbrink</footer>
</body>
</html>