<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/navbar'); ?>
	<!--  BEGIN CONTENT PART  -->
	<div id="content" class="main-content">
		<div class="layout-px-spacing">

			<div class="page-header">
				<div class="page-title">
				</div>
				<div class="dropdown filter custom-dropdown-icon">
					<a class="dropdown-toggle btn" href="#" role="button" id="filterDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="text"><span>Show</span> : Daily Analytics</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></a>

					<div class="dropdown-menu dropdown-menu-right" aria-labelledby="filterDropdown">
						<a class="dropdown-item" data-value="<span>Show</span> : Daily Analytics" href="javascript:void(0);">Daily Analytics</a>
						<a class="dropdown-item" data-value="<span>Show</span> : Weekly Analytics" href="javascript:void(0);">Weekly Analytics</a>
						<a class="dropdown-item" data-value="<span>Show</span> : Monthly Analytics" href="javascript:void(0);">Monthly Analytics</a>

					</div>
				</div>
			</div>

				<div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
					<div class="page-title">
						<h3>Quotes </h3>
					</div>
					<div class="widget-content widget-content-area br-6">
						<div class="table-responsive mb-4 mt-4">
							<table id="default-ordering" class="table table-hover" style="width:100%">
								<thead>
								<tr>
									<th>#</th>
									<th>Quote Ref</th>
									<th>Client</th>
									<th>Quote Type</th>
									<th>Category</th>
									<th>Subcategory</th>
									<th>Done By</th>
									<th>Date Created</th>
									<th>Last Modified</th>
									<th>Actions</th>
								</tr>
								</thead>
								<tbody>
								<?php $i = 0;
								if(isset($quotes)){
								foreach ( $quotes as $quote) {
									?>
									<tr>
										<td><?php echo $i + 1; ?></td>
										<td><?php echo $quote->quote_ref ?></td>
										<td><?php echo $quote->name ?></td>
										<td><?php echo $quote->quote_type ?></td>
										<td><?php echo $quote->jobType ?></td>
										<td><?php echo $quote->jobSubType ?></td>
										<td><?php echo $quote->username ?></td>
										<td><?php echo $quote->date_created ?></td>
										<td><?php echo $quote->last_modified ?></td>
										<td class="text-center"><a href="<?php echo base_url() .'view_quote/'.$quote->quote_id ?>"><button  class="btn btn-primary">View</button> </a></td>
									</tr>
									<?php $i++;
								} 
							}?>

								</tbody>
								<tfoot>
								<tr>
									<th>#</th>
									<th>Quote Ref</th>
									<th>Client</th>
									<th>Category</th>
									<th>Subcategory</th>
									<th>Done By</th>
									<th>Date Created</th>
									<th>Last Modified</th>
									<th class="invisible"></th>
								</tr>
								</tfoot>
							</table>
						</div>
					</div>
				</div>

			</div>

<?php $this->load->view('templates/footer'); ?>
