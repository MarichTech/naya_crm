<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Naya Solutions</title>
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/pdf/style.css" media="all"/>
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
			<div class="to">Attention:</div>
			<h2 class="name"><?php echo $data['client_details']->name ?></h2>
			<div class="address"><?php echo $data['client_details']->address ?></div>
			<div class="email"><a><?php echo $data['client_details']->email ?></div>
		</div>
		<div id="invoice">
			<h1><?php echo $data['quote_ref'] ?></h1>
			<div class="date">Date: <?php echo $data['date_created'] ?></div>
		</div>
	</div>
	<div>
		<h3 style="color: black; text-align: center; text-transform: uppercase; font-family: SourceSansPro,sans-serif;"><?php echo $data['title'] ?>
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
		for ($x = 0; $x < sizeof($data['rate_card']) - 1; $x++) {
			?>
			<tr>
				<td class="no"><?php echo $x + 1; ?></td>
				<td class="desc"><h3><?php echo $data['rate_card'][$x]->description ?></h3></td>
				<td class="qty"><?php echo $data['rate_card'][$x]->quantity ?></td>
				<td class="qty"><?php echo number_format(($data['rate_card'][$x]->rate), 2) ?></td>
				<td class="total"><?php $total = number_format($data['rate_card'][$x]->quantity *
							$data['rate_card'][$x]->rate, '2');
					echo $total;
					?></td>
			</tr>
			<?php
		} ?>

		<?php
		$id = sizeof($data['rate_card']);
		for ($x = 0; $x < sizeof($data['materials'])  ; $x++) {
			if (!empty($data['materials_to_show'])) {
		//		var_dump($data['materials_to_show']);
		//		var_dump($data['materials']);
				for ($y = 0; $y < sizeof($data['materials_to_show']); $y++) {
					if ($data['materials_to_show'][$y] == $data['materials'][$x]->id) {
					?>
					<tr>
						<td class="no"><?php echo $id; ?></td>
						<td class="desc"><h3><?php echo $data['materials'][$x]->description ?></h3></td>
						<td class="qty"><?php echo $data['materials'][$x]->quantity ?></td>
						<td class="qty"><?php echo number_format(($data['materials'][$x]->rate), 2) ?></td>
						<td class="total"><?php echo number_format($data['materials'][$x]->quantity * $data['materials'][$x]->rate, '2') ?></td>
					</tr>
					<?php
					$id++;
					}
				}
			}
		} ?>

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
				$subtotal = 0;
				for ($x = 0; $x < sizeof($data['rate_card']) - 1; $x++) {
					$subtotal += ($data['rate_card'][$x]->quantity * $data['rate_card'][$x]->rate);
				}
				for ($x = 0; $x < sizeof($data['materials']) -1; $x++) {
					if (!empty($data['materials_to_show'])) {
						for ($y = 0; $y < sizeof($data['materials_to_show']); $y++) {
							if ($data['materials_to_show'][$y] == $data['materials'][$x]->id) {
								$subtotal += ($data['materials'][$x]->quantity * $data['materials'][$x]->rate);
							}
						}
					}
				}
				echo number_format($subtotal, 2);
				?></td>
		</tr>
		<tr>
			<?php
			$tax = 0;
			if(isset($data['vat'])){
			if($data['vat'] == 1){  ?>
			<td colspan="2"></td>
			<td colspan="2"> 16% VAT</td>
			<td>KES <?php
				$tax = 0.16 * $subtotal;
				echo number_format($tax, 2);
				}
				}?></td>
		</tr>
		<tr>
			<td colspan="2"></td>
			<td colspan="2">GRAND TOTAL</td>
			<td>KES <?php
				for ($x = 1;
				$x < sizeof($data['rate_card']) - 1;
				$x++) {
				echo number_format(((int)(str_replace(',', '', $subtotal)) + ((int)str_replace(',', '', $tax))), 02) ?></td>
			<?php
			} ?>
		</tr>
		</tfoot>
	</table>
	<div><h4 style="font-style: italic ; color: black; text-align: left; text-transform: capitalize">Prepared By: <?php echo $data['username'] ?></div>
	<div id="notices">
		<div style="text-align: left; text-transform: capitalize">Payment Terms:</div>
		<div class="notice"><p style="text-align: left; text-transform: lowercase"><?php echo $data['payment_terms'] ?></p></div>
	</div>
	<div id="notices">
		<div>Notes:</div>
		<div class="notice"><p style="text-align: left;; text-transform: lowercase""><?php echo $data['notes'] ?></p></div>
	</div>
</main>
<footer>
	www.naya.co.ke
</footer>
</body>
</html>
