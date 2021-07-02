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
					<div class="form-group col-md-6">
						<label>Company Name</label><br>
						<input id="company_name" <?php if( !empty($company)) echo 'value="'.$company->name.'"' ?> type="text" class="form-control  basic " name="company_name" required>
					</div>
					<div class="form-group col-md-6">
						<label>Company Logo</label><br>
						<input id="company_logo" <?php if( !empty($company)) echo 'value="'.$company->logo.'"' ?> type="text" class="form-control  basic " name="company_logo" required>
					</div>

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



				<button type="submit"
						class="btn btn-primary mt-3">Submit
				</button>

			</div>
		</div>

	</div>

	<?php $this->load->view('templates/footer'); ?>
