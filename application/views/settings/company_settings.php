<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/navbar'); ?>
<!--  BEGIN CONTENT PART  -->
<div id="content" class="main-content">
	<div class="layout-px-spacing">

		<div class="page-header">
			<div class="page-title">
			</div>

		</div>

		<div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
			<div class="widget-content widget-content-area br-6">
				<div class="page-title">
					<h3>Manage Company Settings </h3>
				</div>
				<br>
				<br>
				<h4>Edit Company Details</h4>
				<br>
				<br>
				<div class="form-row">
					<div class="form-group col-md-12">
						<label>Company Name</label><br>
						<input hidden id="id" <?php if( !empty($company)) echo 'value="'.$company->company_id.'"' ?> type="text" class="form-control  basic " name="id">
						<input id="company_name" <?php if( !empty($company)) echo 'value="'.$company->name.'"' ?> type="text" class="form-control  basic " name="company_name" required>
					</div>
				<!--	<div class="form-group col-md-6">
						<label>Company Logo</label><br>
						<input id="company_logo" <?php /*if( !empty($company)) echo 'value="'.$company->logo.'"' */?> type="text" class="form-control  basic " name="company_logo" required>
					</div>
-->
				</div>
				<div class="form-row">
					<div class="form-group col-md-6">
						<label>Company Mobile</label><br>
						<input id="company_mobile" <?php if( !empty($company)) echo 'value="'.$company->mobile.'"' ?> type="text" class="form-control  basic " name="company_mobile" required>
					</div>
					<div class="form-group col-md-6">
						<label>Company Email</label><br>
						<input id="company_email" <?php if( !empty($company)) echo 'value="'.$company->email.'"' ?> type="text" class="form-control  basic " name="company_email" required>
					</div>

				</div>
				<div class="form-row">
<!--					<div class="form-group col-md-6">-->
<!--						<label>Company Rep Mobile</label><br>-->
<!--						<input id="company_name" --><?php //if( !empty($company)) echo 'value="'.$company->name.'"' ?><!-- type="text" class="form-control  basic " name="company_name" required>-->
<!--					</div>-->
<!--					<div class="form-group col-md-6">-->
<!--						<label>Company Rep Email</label><br>-->
<!--						<input id="company_name" --><?php //if( !empty($company)) echo 'value="'.$company->name.'"' ?><!-- type="text" class="form-control  basic " name="company_name" required>-->
<!--					</div>-->

				</div>

				<div class="form-row">
					<label> Address (Country, City, Street)</label><br>
					<input id="address" type="text" <?php if( !empty($company)) echo 'value="'.$company->address.'"' ?> class="form-control  basic " name="address" required>
				</div>
				<div class="form-row">

				</div>
				<button type="submit" onclick="update()"
						class="btn btn-primary mt-3">Submit
				</button>

			</div>
		</div>

	</div>

	<?php $this->load->view('templates/footer'); ?>
	<script type="text/javascript">
		var basePath = "http://localhost/naya_crm";
		let companyDetails_ = []

		function update(){
			//get form data
			let id = document.getElementById("id").value;
			let company_name = document.getElementById("company_name").value;
			let company_mobile = document.getElementById("company_mobile").value;
			let company_email = document.getElementById("company_email").value;
			let address = document.getElementById("address").value;
			//validate form data
			if (company_name === '' || company_mobile === '' || company_email === '' || address === '' ) {
				swal.fire({
					title: 'Please Fill In All Required Fields',
					animation: false,
					customClass: 'animated tada',
					padding: '2em'
				})
				return false;
			}

			//show swal
			Swal.fire({
				title: 'Updating ....',
				text: 'Please Wait',
				allowOutsideClick: false,
				onBeforeOpen: () => {
					Swal.showLoading()
				},
			});

			// Send AJAX request
			$.ajax({
				url: '<?= base_url() ?>update/company',
				type: 'post',
				dataType: 'JSON',
				data: {
					company_id : id,
					name : company_name,
					mobile : company_mobile,
					email : company_email,
					address : address,
				},
				//process response
				success: function (response) {
					let respons = (response)
					let status = respons.status
					let messageType = respons.messageType
					let message = respons.message
					console.log(respons)
					if (status === true) {
						if (messageType == 1) {
							Swal.fire({
								title: message,
								text: "Redirecting...",
								timer: 10000,
							})
						} else if (messageType == 2) {
							Swal.fire({
								title: 'Update Failed!',
								text: message,
								timer: 5000,
							})
						}
					} else if (status === false) {
						Swal.fire({
							title: 'Update Failed!',
							text: message,
							timer: 5000,
						})
					}
			//reload page data
					window.location.reload();
				}
			});
		}
	</script>
