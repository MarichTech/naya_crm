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
			<br>
			<h3 style="color: black; text-align: center; text-transform: uppercase; font-family: SourceSansPro,sans-serif;"><?php echo $data['uid'] ?>
	</div>
	<table border="0" cellspacing="0" cellpadding="0">
		<thead>
		<tr>
			<th class="no">#</th>
			<th class="desc">DESCRIPTION</th>
			<th class="qty">QUANTITY</th>
			<th class="qty">UNIT PRICE</th>
			<th class="total">TOTAL</th>
		</tr>
		</thead>
		<tbody>
		<?php
		$subtotal = 0;
		$k = 0;
		$count = 0;
		$total = 0;
		foreach ($data['support_items'] as $dat){
			?>
			<tr>
				<td class="no"><?php echo $k + 1; ?></td>
				<td class="desc"><h3><?php echo $dat->description ?></h3></td>
				<td class="qty"><?php echo $dat->quantity ?></td>
				<td class="qty"><?php echo number_format($dat->unit_price, 2) ?></td>
				<td class="total"><?php echo number_format( ($dat->quantity  *$dat->unit_price ) , 2)?></td>
			</tr>
			<?php
			$subtotal += ($dat->quantity  *$dat->unit_price ) ;
			$k++;
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
				echo number_format($subtotal, 2);
				?></td>
		</tr>
		<tr>
			<?php
			$tax = 0;
			//	var_dump($data['client_details']);
			$vat_type = $data['client_details']->vat_id;
			?>
			<td colspan="2"></td>
			<?php	if($vat_type == 1){  ?>
			<td colspan="2"> Zero Rated VAT</td>
			<td>KES <?php
				$tax = 0;
				echo number_format($tax, 2);
				}elseif ($vat_type ==2){ ?>
			<td colspan="2"> VAT Exempt</td>
			<td>KES <?php
				$tax = 0;
				echo number_format($tax, 2);
				}elseif ($vat_type ==3){ ?>
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
		<!--<tr>
			<td colspan="2"></td>
			<td colspan="2">3% Sales Discount</td>
			<td>KES <?php
/*				$discount = (0.03) * $subtotal;
				echo number_format(($discount), 2);

				*/?></td>
		</tr>-->
		<tr>
			<td colspan="2"></td>
			<td colspan="2">GRAND TOTAL</td>
			<td>KES <?php
				echo number_format( ($subtotal + $tax), 2) ?></td>
			<?php
			?>
		</tr>
		</tfoot>
	</table>
	<div><h4 style="font-style: italic ; color: black; text-align: left; text-transform: capitalize">Prepared By: <?php echo $data['username'] ?></div>
	<div id="notices">
		<div style="text-align: left; text-transform: capitalize">Support Terms:</div>
		<div class="notice"><p style="text-align: left; text-transform: lowercase"><?php echo $data['support_charge'] ?></p></div>
		<div class="notice"><p style="text-align: left; text-transform: lowercase"><?php echo $data['support_duration'] ?></p></div>
	</div>
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
	<div id="notices">
		<div style="text-align: left; text-transform: capitalize">Bank Account Details:</div>
		<textarea rows="20" cols="42.5" style=" border: 1px solid #000; text-decoration-color: white; overflow-y: scroll;">Bank Name: NCBA Bank Kenya PLC &nbsp;
				Account Name: Naya Solutions Ltd &nbsp;
				KES Account Number: 7935650015&nbsp;
				USD Account Number: 7935650028&nbsp;
				Branch Name: Westlands&nbsp;
				Swift Code: CBAFKENX&nbsp;
				Bank & Branch Code: 07000&nbsp;
				Bank Address: P.O. Box 30437 -&nbsp;
				00100 Nairobi, Kenya&nbsp;
				MPESA  Paybill:  880100</textarea>
		<textarea rows="20" cols="44" style=" border: 1px solid #000">
				Bank Name: ABSA Bank Kenya PLC &nbsp;
				Account Name: Naya Solutions Ltd &nbsp;
				KES Account Number: 2043836334&nbsp;
				USD Account Number: 2043836458&nbsp;
				Branch Name: SARIT BRANCH&nbsp;
				Swift Code: BARCKENX&nbsp;
				Bank & Branch Code: 03106&nbsp;
				Bank Address: P.O. Box 30120 -&nbsp;
				00100 Nairobi, Kenya&nbsp;
				MPESA  Paybill:  303030</textarea>&nbsp;

		<p>	Quote Generated at: <b> <?php echo  date("H:i:s") ?></b></p>
		This quote is system generated and is valid without the signature and seal.

		<br>
		<p>	Powered By:<b> Naya Solutions</b></p>
		<br>
		U70xDN
	</div>
</footer>
</body>
</html>
