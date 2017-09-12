<!DOCTYPE HTML>
<html>
<head>
	<title>Technovision Demo</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<h1 style="text-align: center; font-family: Ubuntu,sans-serif;">DEMO TO SHOW THE BEST PRICE OF INK TANK</h1>
<br />
<div class="col-md-4">
	<h3 style="text-align: left; font-family: Ubuntu,sans-serif;">FLIPKART</h3>
	<?php
	require('simple_html_dom.php');
	$i=-1;
	$html = file_get_html('https://www.flipkart.com/computers/computer-peripherals/~ink-tank/pr?count=40&p%5B%5D=facets.fulfilled_by%255B%255D%3DFlipkart%2BAssured&p%5B%5D=sort%3Dprice_asc&sid=6bo%2Ftia');
	foreach($html->find('div._1vC4OE') as $item)
	{
		$i++;
		echo $item->plaintext.'<br />';
	}
?>
</div>

<div class="col-md-4">
	<h3 style="text-align: left; font-family: Ubuntu,sans-serif;">AMAZON</h3>
	<?php
	$html2 = file_get_html('https://www.amazon.in/gp/search/ref=sr_nr_p_n_feature_browse-b_0?fst=as%3Aoff&rh=n%3A976392031%2Cn%3A1375443031%2Cn%3A1375444031%2Ck%3APrinters%2Cp_98%3A10440597031%2Cp_n_feature_browse-bin%3A1464469031&sort=price-asc-rank&keywords=Printers&ie=UTF8&qid=1505203160&rnid=1464468031');
	
	foreach($html2->find('span.s-price') as $item1)
	{
		echo '₹'.$item1->plaintext.'<br />';
	}
?>
</div>
</body>
</html>
