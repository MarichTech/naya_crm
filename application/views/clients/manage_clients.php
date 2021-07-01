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
					<h3>Manage Clients </h3>
				</div>
				<div class="table-responsive mb-4 mt-4">

					<a href="<?php echo base_url()?>add/customer" class="btn btn-primary mb-2">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user-plus"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="8.5" cy="7" r="4"></circle><line x1="20" y1="8" x2="20" y2="14"></line><line x1="23" y1="11" x2="17" y2="11"></line>
						</svg>    - Add New Client
						</a>

					<table id="default-ordering" class="table table-hover" style="width:100%">
						<thead>
						<tr>
							<th>#</th>
							<th>Logo</th>
							<th>Name</th>
							<th>Email</th>
							<th>Mobile</th>
							<th>Address</th>
							<th>Contact Name</th>
							<th>Contact Email</th>
							<th>Action</th>
						</tr>
						</thead>
					<tbody>

					</tbody>
						<tfoot>
						<tr>
							<th>#</th>
							<th>Logo</th>
							<th>Name</th>
							<th>Email</th>
							<th>Mobile</th>
							<th>Address</th>
							<th>Contact Name</th>
							<th>Contact Email</th>
							<th class="invisible"></th>
						</tr>
						</tfoot>
					</table>
				</div>
			</div>
		</div>

	</div>

	<?php $this->load->view('templates/footer'); ?>
