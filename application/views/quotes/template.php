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
<!--		<img  style="max-width: 100%;width: auto;   height: auto;"
			  src="<?php /*echo base_url(); */?>assets/pdf/NAYA_LH-01.jpg">-->
		<img  style="max-width: 100%;width: auto;   height: auto;"
			  src="https://www.finsys-group.com/assets/naya/header_banner.jpg">
	</div>
	</div>
</header>
<main>
	<div id="details" class="clearfix">
		<div id="client">
			<div class="to">Attention:</div>
			<h2 class="name"><?php echo $data['client_details']->name ?></h2>
			<div class="address"><?php echo $data['client_details']->address ?></div>
			<div class="email"><a><?php echo $data['client_details']->email ?></a></div>
		</div>
		<div id="invoice">
			<h1><?php echo $data['quote_ref'] ?></h1>
			<div class="date">Date: <?php echo $data['date_created'] ?></div>
		</div>
	</div>

	<h3 style="color: black; text-align: center;  text-transform: uppercase; font-family: SourceSansPro,sans-serif; ">
		Title:- <?php echo $data['title']  ?>
		<br>
		<h3 style="color: black; text-align: center;  text-transform: uppercase; font-family: SourceSansPro,sans-serif;">
			Provider Request No :- <?php echo $data['uid']  ?>
			<br>
	<table border="0" cellspacing="0" cellpadding="0">
		<thead>
		<tr>
			<th class="no">#</th>
			<th class="desc">DESCRIPTION</th>
			<th class="unit">UNIT PRICE</th>
			<th class="qty">QUANTITY</th>
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
			<td class="desc"><h3><?php echo $data['rate_card'][$x]->description ?></h3>	</td>
			<td class="unit"><?php echo $data['rate_card'][$x]->quantity ?></td>
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
		for ($x = 0; $x < sizeof($data['materials']); $x++) {
			if (!empty($data['materials_to_show'])) {
				//		var_dump($data['materials_to_show']);
				//		var_dump($data['materials']);
				for ($y = 0; $y < sizeof($data['materials_to_show']); $y++) {
					if ($data['materials_to_show'][$y] == $data['materials'][$x]->id) {
						?>
						<tr>
							<td class="no"><?php echo $id; ?></td>
							<td class="desc"><h3><?php echo $data['materials'][$x]->description ?></h3>	</td>
							<td class="unit"><?php echo $data['materials'][$x]->quantity ?></td>
							<td class="qty"><?php  echo number_format(($data['materials'][$x]->rate), 2)  ?></td>
							<td class="total"><?php  echo number_format($data['materials'][$x]->quantity * $data['materials'][$x]->rate, '2')	?></td>
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
		$subtotal = 0;

		?>
		<tr>
			<td colspan="2">
				<h4 style="font-style: italic ; text-align: left; text-transform: capitalize">
					Prepared By: <?php echo $data['username'] ?>
			</td>
			<td colspan="2">SUBTOTAL</td>
			<td><b>KES <?php
					foreach ($data['rate_card'] as $dat) {
						$subtotal += ($dat->quantity * $dat->rate);
					}
					foreach ($data['materials'] as $dat) {
						if (!empty($data['materials_to_show'])) {
							$subtotal += ($dat->quantity * $dat->rate);
						}
					}
					echo number_format($subtotal, 2);
					?></b></td>
		</tr>
		<tr>
			<?php
			$tax = 0;
			//	var_dump($data['client_details']);
			$vat_type = $data['client_details']->vat_id;
			?>
			<td colspan="2"><p style="font-style: italic ; text-align: left; text-transform: capitalize">Payment
					Terms:
					<?php echo $data['payment_terms'] ?></p></td>
			<?php if ($vat_type == 1){ ?>
			<td colspan="2"> Zero Rated VAT</td>
			<td>KES <?php
				$tax = 0;
				echo number_format($tax, 2);
				}elseif ($vat_type == 2){ ?>
			<td colspan="2"> VAT Exempt</td>
			<td>KES <?php
				$tax = 0;
				echo number_format($tax, 2);
				}elseif ($vat_type == 3){ ?>
			<td colspan="2"> 16% VAT</td>
			<td>KES <?php
				$tax = 0.16 * $subtotal;
				echo number_format($tax, 2);
				}elseif ($vat_type == 4){ ?>
			<td colspan="2"> 14% VAT</td>
			<td>KES <?php
				$tax = 0.14 * $subtotal;
				echo number_format($tax, 2);
				} ?></td>
		</tr>
	<!--	<tr>
			<td colspan="2">
				<p style="text-align: left; text-transform: lowercase"> Notes: <?php /*echo $data['notes'] */?></p>
			</td>
			<td colspan="2">3% Sales Discount</td>
			<td>( KES <?php
/*				$discount = (0.03) * $subtotal;
				echo number_format(($discount), 2);

				*/?> )
			</td>
		</tr>-->
		<tr>
			<td colspan="2"></td>
			<td colspan="2"><b>GRAND TOTAL </b></td>
			<td><b>KES <?php
					echo number_format(($subtotal + $tax), 2); ?>
				</b></td>
		</tr>
		</tfoot>
	</table>
			<?php
			$includeBankDetails =  $data['includeBankDetails'];

			if(isset($includeBankDetails)){
			if($includeBankDetails ==  1){ ?>
				<h2>Bank Details:</h2>
				<table style="width:100% ;">
					<colgroup>
						<col><col><col><col><col>
					</colgroup>
					<thead>
					<tr>
						<th colspan="2"><h3>NCBA</h3></th>
						<th colspan="1"></th>
						<th colspan="2"><h3>ABSA</h3></th>
					</tr>
					</thead>

					<tbody style=" text-align: left">
					<tr>
						<td style=" text-align: center"><b>Account Name</b></td>
						<td  style=" text-align: left">Naya Solutions LTD</td>

						<td></td>

						<td style=" text-align: center"><b>Account Name</b></td>
						<td  style=" text-align: left">Naya Solutions LTD</td>
					</tr>
					<tr>
						<td style=" text-align: center"><b>KES Account Number</b></td>
						<td style=" text-align: left">7935650015</td>

						<td></td>

						<td style=" text-align: center"><b>KES Account Number</b></td>
						<td style=" text-align: left">2043836334</td>
					</tr>
					<tr>
						<td style=" text-align: center"><b>USD Account Number</b></td>
						<td style=" text-align: left">7935650028</td>

						<td></td>

						<td style=" text-align: center"><b>USD Account Number</b></td>
						<td style=" text-align: left">2043836458</td>

					</tr>
					<tr>
						<td style=" text-align: center"><b>Branch Name</b></td>
						<td style=" text-align: left">Westlands</td>

						<td></td>

						<td style=" text-align: center"><b>Branch Name</b></td>
						<td style=" text-align: left">Sarit Banch</td>
					</tr>
					<tr>
						<td style=" text-align: center"><b>SWIFT Code</b></td>
						<td style=" text-align: left">CBAFKENX</td>

						<td></td>

						<td style=" text-align: center"><b>SWIFT Code</b></td>
						<td style=" text-align: left">BARCKENX</td>
					</tr>

					<tr>
						<td style=" text-align: center"><b>Bank & Branch Code</b></td>
						<td style=" text-align: left">07000</td>

						<td></td>

						<td style=" text-align: center"><b>Bank & Branch Code</b></td>
						<td style=" text-align: left">03106</td>
					</tr>

					<tr>
						<td style=" text-align: center"><b>Bank Address</b></td>
						<td style=" text-align: left">P.O. BOX 30437-00100,
							Nairobi, Kenya.</td>

						<td></td>

						<td style=" text-align: center"><b>Bank Address</b></td>
						<td style=" text-align: left">P.O. BOX 30120-00100,
							Nairobi, Kenya.</td>
					</tr>


					</tbody>
				</table>
				<?php
			}
			}?>
</main>
<footer>
	<p>	Quote Generated at: <b> <?php echo  date("H:i:s") ?></b></p>
	This quote is system generated and does not require a signature or stamp.
<!--	<img style="max-width: 100%;width: auto;   height: auto;" src="<?php /*echo base_url(); */?>assets/pdf/NAYA_LH_02.jpg">
-->
	<img style="max-width: 100%;width: auto;   height: auto;" src="https://www.finsys-group.com/assets/naya/banner_footer.jpg">
</footer>
</body>
</html>
