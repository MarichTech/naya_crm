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
					<h3>Rate Cards </h3>
				</div>

			</div>

			<div class="row">
				<div class="col-lg-12 col-12 layout-spacing">
					<div class="statbox widget box box-shadow">
						<div class="widget-header">
							<div class="row">
								<div class="col-xl-12 col-md-12 col-sm-12 col-12">
									<h4>Switch Between the Job Type Tab Pills</h4>
								</div>
							</div>
						</div>
						<div class="widget-content widget-content-area icon-pill">

							<ul class="nav nav-pills mb-3 mt-3" id="icon-pills-tab" role="tablist">
							<?php
							$count= 0;
							foreach ($ratecards as $ratecard ){
								if($count == 0){ ?>
								<li class="nav-item">
									<a class="nav-link active" id="<?php echo "#main_tab_". $ratecard->id ?>" data-toggle="pill"
									   href="<?php echo "#tab_". $ratecard->id ?>" role="tab" aria-controls="icon-pills-home"
									   aria-selected="true">
										<?php echo $ratecard->svg; ?>
										<?php echo $ratecard->subType; ?></a>
								</li>
							<?php	}else{ ?>
								<li class="nav-item">
									<a class="nav-link" id="<?php echo "#main_tab_". $ratecard->id ?>" data-toggle="pill"
									   href="<?php echo "#tab_". $ratecard->id ?>" role="tab" aria-controls="icon-pills-home" >
										<?php echo $ratecard->svg; ?>
										<?php echo $ratecard->subType; ?></a>
								</li>
							<?php
								}
								$count ++ ;
							}
							?>
							</ul>
							<div class="tab-content" id="icon-pills-tabContent">
								<?php
							$count= 0;


							foreach ($ratecards as $ratecard ){
								$params = array(
										'rate_cards.sub_cat_id' => $ratecard->sub_cat_id
								);
								$ratecars = $this->Data->getRateCard($params);
								//var_dump($ratecars);
								if($count == 0){ ?>
								<div class="tab-pane fade show active" id="<?php echo "tab_". $ratecard->id ?>" role="tabpanel">
									<div class="media">
										<div class="media-body">
									<table id="default-ordering" class="table table-hover" style="width:100%">
									<thead>
									<tr>
										<th>#</th>
										<th>Description</th>
										<th>UOM</th>
										<th>Quantity</th>
										<th>Proposed Rate</th>
										<th>Remarks</th>
										<th>Date Created</th>
										<th>Action</th>
									</tr>
									</thead>
									<tbody>
									<?php
									$i = 1;
									foreach ($ratecars
											 as $ratecard){ ?>
										<tr>
											<td><?php echo $i ?></td>
											<td><?php echo $ratecard->description ?></td>
											<td><?php echo $ratecard->UOM ?></td>
											<td><?php echo $ratecard->quantity ?></td>
											<td><?php echo $ratecard->rate ?></td>
											<td><?php echo $ratecard->remarks ?></td>
											<td><?php echo $ratecard->date_created ?></td>
											<td class="text-center">
												<a href="<?php echo base_url() . 'settings/ratecard/edit/' . $ratecard->id ?>"
												   class="bs-tooltip" data-toggle="tooltip" data-placement="top"
												   title="" data-original-title="Edit">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
														 viewBox="0 0 24 24" fill="none" stroke="currentColor"
														 stroke-width="2" stroke-linecap="round"
														 stroke-linejoin="round"
														 class="feather feather-edit-2 p-1 br-6 mb-1">
														<path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
													</svg>
												</a>
												<a onclick="confirmDelete('<?php echo base_url() . 'settings/ratecard/delete/' . $ratecard->id ?>')"
												   href="javascript:;" class="bs-tooltip" data-toggle="tooltip"
												   data-placement="top" title="" data-original-title="Delete">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
														 viewBox="0 0 24 24" fill="none" stroke="currentColor"
														 stroke-width="2" stroke-linecap="round"
														 stroke-linejoin="round"
														 class="feather feather-trash p-1 br-6 mb-1">
														<polyline points="3 6 5 6 21 6"></polyline>
														<path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
													</svg>
												</a>
												</ul>
											</td>
										</tr>
										<?php
										$i++;
									$count ++ ;
									}?>
										</tbody>
										<tfoot>
										<tr>
											<th>#</th>
											<th>Description</th>
											<th>UOM</th>
											<th>Quantity</th>
											<th>Proposed Rate</th>
											<th>Remarks</th>
											<th>Date Created</th>
											<th class="invisible"></th>
										</tr>
										</tfoot>
										</table>
										</div>
									</div>
								</div>
								<?php
									}else{ ?>
								<div class="tab-pane fade" id="<?php echo "tab_". $ratecard->id ?>" role="tabpanel">
									<div class="media">
										<div class="media-body">
											<table id="" class="multi-table table table-hover" style="width:100%">
												<thead>
												<tr>
													<th>#</th>
													<th>Description</th>
													<th>UOM</th>
													<th>Quantity</th>
													<th>Proposed Rate</th>
													<th>Remarks</th>
													<th>Date Created</th>
													<th>Action</th>
												</tr>
												</thead>
												<tbody>
												<?php
												$i = 1;
												$params = array(
														'rate_cards.sub_cat_id' => $ratecard->sub_cat_id
												);
												$ratecars = $this->Data->getRateCard($params);
												foreach ($ratecars
														 as $ratecard){ ?>
													<tr>
														<td><?php echo $i ?></td>
														<td style=" white-space: nowrap;"><?php echo $ratecard->description ?></td>
														<td><?php echo $ratecard->UOM ?></td>
														<td><?php echo $ratecard->quantity ?></td>
														<td><?php echo $ratecard->rate ?></td>
														<td><?php echo $ratecard->remarks ?></td>
														<td><?php echo $ratecard->date_created ?></td>
														<td class="text-center">
															<a href="<?php echo base_url() . 'settings/ratecard/edit/' . $ratecard->id ?>"
															   class="bs-tooltip" data-toggle="tooltip" data-placement="top"
															   title="" data-original-title="Edit">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
																	 viewBox="0 0 24 24" fill="none" stroke="currentColor"
																	 stroke-width="2" stroke-linecap="round"
																	 stroke-linejoin="round"
																	 class="feather feather-edit-2 p-1 br-6 mb-1">
																	<path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
																</svg>
															</a>
															<a onclick="confirmDelete('<?php echo base_url() . 'settings/ratecard/delete/' . $ratecard->id ?>')"
															   href="javascript:;" class="bs-tooltip" data-toggle="tooltip"
															   data-placement="top" title="" data-original-title="Delete">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
																	 viewBox="0 0 24 24" fill="none" stroke="currentColor"
																	 stroke-width="2" stroke-linecap="round"
																	 stroke-linejoin="round"
																	 class="feather feather-trash p-1 br-6 mb-1">
																	<polyline points="3 6 5 6 21 6"></polyline>
																	<path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
																</svg>
															</a>
															</ul>
														</td>
													</tr>
													<?php
													$i++;
													$count ++ ;
												}?>
												</tbody>
												<tfoot>
												<tr>
													<th>#</th>
													<th>Description</th>
													<th>UOM</th>
													<th>Quantity</th>
													<th>Proposed Rate</th>
													<th>Remarks</th>
													<th>Date Created</th>
													<th class="invisible"></th>
												</tr>
												</tfoot>
											</table>
										</div>
									</div>
								</div>
							<?php
								}
							}?>

							</div>


						</div>
					</div>
				</div>
			</div>
		</div>

	</div>

	<?php $this->load->view('templates/footer'); ?>
