<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Naya Solutions</title>
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/pdf/style.css" media="all" />
</head>
<body>
<header class="clearfix">
	<div id="logo">
		<img src="https://www.naya.co.ke/wp-content/uploads/2019/11/nayalogo-6.png">
	</div>
	<div id="company">
<!--		<h2 class="name">Naya Solutions</h2>-->
		<div>7th Floor, Westside Towers, Westlands,</div>
		<div>P.O Box 899-00515, Nairobi, Kenya</div>
		<div>Tel: +254 722 124 444</div>
		<div><a>info@naya.co.ke</a></div>
	</div>
	</div>
</header>
<main>
	<div id="details" class="clearfix">
		<div id="client">
			<div class="to">INVOICE TO:</div>
			<h2 class="name"><?php echo $data['client_details']->name ?></h2>
			<div class="address"><?php echo  $data['client_details']->address  ?></div>
			<div class="email"><a ><?php  echo $data['client_details']->email ?></div>
		</div>
		<div id="invoice">
			<h1><?php echo $data['quote_ref']  ?></h1>
			<div class="date">Date of Invoice: <?php echo $data['date_created']  ?></div>
		</div>
	</div>
	<table border="0" cellspacing="0" cellpadding="0">
		<thead>
		<tr>
			<th class="no">#</th>
			<th class="desc">DESCRIPTION</th>
			<th class="qty">QUANTITY</th>
			<th class="unit">UNIT PRICE</th>
			<th class="total">TOTAL</th>
		</tr>
		</thead>
		<tbody>
		<?php
		$count = 0;
		$total = 0;
		for($x= 0 ; $x < sizeof($data['rate_card'][0])-1 ; $x++) {
			?>
		<tr>
			<td class="no"><?php  echo $x + 1 ; ?></td>
			<td class="desc"><h3><?php echo $data['rate_card'][$count][$x]->description ?></h3></td>
			<td class="qty"><?php echo $data['rate_card'][$count][$x]->quantity ?></td>
			<td class="qty"><?php echo number_format(($data['rate_card'][$count][$x]->rate), 2) ?></td>
			<td class="total"><?php echo number_format($data['rate_card'][$count][$x]->quantity * $data['rate_card'][$count][$x]->rate, '2') ?></td>
		</tr>
		<?php
		}?>


		</tbody>
		<tfoot>
		<?php
		$count = 0;
		$total = 0;
		?>
		<tr>
			<td colspan="2"></td>
			<td colspan="2">SUBTOTAL</td>
			<td>KES <?php
				$subtotal =0;
				for($x= 0 ; $x < sizeof($data['rate_card'][0])-1 ; $x++) {
				$subtotal +=	($data['rate_card'][$count][$x]->quantity * $data['rate_card'][$count][$x]->rate) ;
				}
				echo number_format($subtotal, 2);

				?></td>
		</tr>
		<tr>
			<td colspan="2"></td>
			<td colspan="2"> 16% VAT </td>
			<td>KES <?php  $tax = 0 ;
				echo $tax ; ?></td>
		</tr>
		<tr>
			<td colspan="2"></td>
			<td colspan="2">GRAND TOTAL</td>
 			<td>KES <?php
				for($x= 1 ; $x < sizeof($data['rate_card'][0])-1 ; $x++) {
				echo number_format(((int)(str_replace( ',', '',$subtotal)) + ((int)str_replace( ',', '',$tax))), 02)  ?></td>
			<?php
			}?>
		</tr>
		</tfoot>
	</table>
	<div><h4 style="font-style: italic ; color: black" >Prepared By: <?php echo  $data['username']  ?></div>
	<div id="notices">
		<div>Payment Terms:</div>
		<div class="notice"><p><?php echo  $data['payment_terms']  ?></p></div>
	</div>
	<div id="notices">
		<div>Notes:</div>
		<div class="notice"><p><?php echo  $data['notes']  ?></p></div>
	</div>
</main>
<footer>
	www.naya.co.ke
</footer>
</body>
</html>