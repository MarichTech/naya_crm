<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/navbar'); ?>


<!--  BEGIN CONTENT AREA  -->
<div id="content" class="main-content">
	<div class="layout-px-spacing">

		<div class="account-settings-container layout-top-spacing">

			<div class="account-content">
				<div class="scrollspy-example" data-spy="scroll" data-target="#account-settings-scroll" data-offset="-100">
					<div class="row">
						<div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 layout-spacing">
							<form id="general-info" class="section general-info">
								<div class="info">
									<h6 class="">Client Information</h6>
									<div class="d-flex b-skills">
										<div>
										</div>
										<div class="">
											<div class="timeline-alter">
												<div class="item-timeline">
													<div class="t-meta-date">
														<p class="">Client Name</p>
														<p><span id="clientName"  class="badge badge-warning"> <?php echo $quoteDetails[0]->name ?></span>	</p>
													</div>
												</div>
													<div class="item-timeline">
															<div class="t-meta-date">
																<p class="">Client Email</p>
																<p><span id="clientName"  class="badge badge-warning"> <?php echo $quoteDetails[0]->email ?></span>	</p>
															</div>
														</div>

														<div class="item-timeline">
															<div class="t-meta-date">
																<p class="">Recipient</p>
																<p><span id="clientName"  class="badge badge-warning"> <?php echo $quoteDetails[0]->rep_name ?></span>	</p>
															</div>
														</div>

												<br>
												<br>
												<h6 class=""> Quote  Information</h6>
												<div class="item-timeline">
													<div class="t-meta-date">
														<p class="">Quote Ref</p>
														<p><span id="clientName"  class="badge badge-success"><?php echo $quoteDetails[0]->quote_ref ?></span>	</p>
													</div>

												</div>
												<div class="item-timeline">
													<div class="t-meta-date">
														<p class="">Quote Category</p>
														<p><span id="clientName"  class="badge badge-success"> <?php echo $quoteDetails[0]->jobType ?></span>	</p>
													</div>

												</div>
												<div class="item-timeline">
													<div class="t-meta-date">
														<p class="">Quote sub Category</p>
														<p><span id="clientName"  class="badge badge-success"> <?php echo $quoteDetails[0]->jobSubType ?></span>	</p>
													</div>

												</div>
												<div class="item-timeline">
													<div class="t-meta-date">
														<p class="">Quote Status</p>
														<p><span id="clientName"  class="badge badge-success"> <?php echo "Sent" ?></span>	</p>
													</div>
												</div>
												<br>
												<br>
												<h6 class=""> Edit  Information</h6>
												<div class="item-timeline">
													<div class="t-meta-date">
														<p class="">Date Created</p>
														<p><span id="clientName"  class="badge badge-danger"> <?php echo date("d-m-Y H:i:s", strtotime($quoteDetails[0]->date_created)) ?></span>	</p>
													</div>
												</div>
												<div class="item-timeline">
													<div class="t-meta-date">
														<p class="">Created By </p>
														<p><span id="clientName"
																 class="badge badge-danger"> <?php echo $quoteDetails[0]->username ?></span>
														</p>
													</div>
												</div>
												<div class="item-timeline">
													<div class="t-meta-date">
														<p class="">Date Last Modified</p>
														<p><span id="clientName" class="badge badge-danger">
																	<?php echo date("d-m-Y H:i:s", strtotime($quoteDetails[0]->last_modified)) ?></span>
														</p>
													</div>

												</div>
												<div class="item-timeline">
													<div class="t-meta-date">
														<p class="">Modified By </p>
														<p><span id="clientName"
																 class="badge badge-danger"> <?php echo $quoteDetails[0]->username ?></span>
														</p>
													</div>

												</div>

												<br>
												<br>
												<h6 class=""> Quick Actions</h6>
												<div class="btn-group-vertical" role="group"
													 aria-label="Vertical button group">

													<a href="<?php echo base_url() . 'assets/quotes/' . $quoteDetails[0]->quote_ref . '.pdf' ?>"
													   download>
														<button type="button" class="btn btn-danger">Download
															Quote PDF
														</button>
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</form>
						</div>

						<div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 layout-spacing">
							<form id="about" class="section about">
								<div class="info">
									<h5 class="">Quote Preview</h5>
									<div class="row">
										<div class="col-md-11 mx-auto">
											<div class="form-group">
												<object id="pdf_obj"
														data="<?php echo base_url() . 'assets/quotes/' . $quoteDetails[0]->quote_ref . '.pdf' ?>"
														type="application/pdf" height="700px%" width="100%">
													<p>It appears you don't have Adobe Reader or PDF support in this
														web
														browser. <a
																href="<?php echo base_url() . 'assets/quotes/' . $quoteDetails[0]->quote_ref . '.pdf' ?>"
																download>Click
															here to download the PDF</a>. Or <a
																href="http://get.adobe.com/reader/"
																target="_blank">click here to
															install Adobe Reader</a>.</p>
													<embed id="pdf_emb"
														   type="application/pdf"/>
												</object>


											</div>
										</div>
									</div>
								</div>
							</form>
						</div>

					</div>
				</div>
			</div>
		</div>

	</div>
</div>
<?php $this->load->view('templates/footer'); ?>
