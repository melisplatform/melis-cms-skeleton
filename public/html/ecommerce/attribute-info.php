<?php include "header.php"?>
<div id="content" class="order-info-page">      
      	<div class="me-heading bg-white border-bottom">      		
      		<div class="row">      		
      			<div class="me-hl col-xs-12 col-md-6">
      				<h1 class="content-heading">
      				<a href="#" style="color: #686868;">Attribute </a> / Size</h1>
      			</div>	      		
	      		<div class="me-hr col-xs-12 col-md-6">
	      			<a class="btn btn-success" title="Save Client's Info"><i class="fa fa-save" style="padding-right:10px;"></i>Save Attribute</a>
					<a class="btn btn-danger" title="Cancel Order"><i class="fa fa-ban" style="padding-right:10px;"></i>Cancel</a>
	      		</div>
		      		
       		</div>
       		
      	</div>
	<!-- content -->
	<div class="content-cont">
		<!-- tab head -->
		<div class="widget widget-tabs widget-tabs-double-2 widget-tabs-responsive" style="margin-bottom:0">
			<div class="widget-head nav">
				<ul class="tabs-label nav-tabs">
					<li class="active">
						<a data-toggle="tab" href="#tabs_edition" aria-expanded="true">
							<i class="icon-sliders"></i>
							<span>Main</span>
						</a>
					</li>
					<li class="">
						<a class="" data-toggle="tab" href="#tabs_labels" aria-expanded="false">
							<i class="icon-paper-documents"></i>
							<span>Labels</span>
						</a>
					</li>
					<li class="">
						<a class="" data-toggle="tab" href="#tabs_values" aria-expanded="false">
							<i class="icon-bulleted-list"></i>
							<span>Values</span>
						</a>
					</li>					
				</ul>
			</div>
		</div>
		
		<div class="tab-content innerAll spacing-x2">
			
			<!-- MAIN -->
			<div id="tabs_edition" class="active tab-pane">		
				<div class="melis-product-heading border-bottom">
					<h3>Main Information</h3>
					<div class="make-switch bs-melis bs-medium" data-on-label="Online" data-off-label="Offline" data-text-label="Status">
						<input type="checkbox" checked>
					</div>
				</div>									
				
				<!-- Order details container -->
				<div class="row melis-pdc">				
					<div class="col-xs-12 col-lg-6">				
						<div class="pdc-content">
							<div class="me-action-button-cont">
								<div class="form-group">
								<label class="label-block" for="">Visible</label>
									<div class="make-switch bs-melis" data-on-label="Yes" data-off-label="No" data-text-label="<i class='fa fa-arrows-h'>">
										<input type="checkbox" checked>
									</div>
								</div>
								<div class="form-group">
								<label class="label-block" for="">Searchable</label>
									<div class="make-switch bs-melis" data-on-label="Yes" data-off-label="No" data-text-label="<i class='fa fa-arrows-h'>">
										<input type="checkbox" checked>
									</div>
								</div>									
								<div class="form-group">
									<label for="">Reference</label>
									<input type="text" class="form-control" name="" id="" placeholder="">
								</div>
								<div class="form-group">
									<label for="">Type</label>
									<select class="form-control" id="attr-type-select">
										<option>Numeric</option>
										<option>Float</option>
										<option>Boolean</option>
										<option selected>Short String</option>
										<option>Text</option>
										<option>Date Time</option>
										<option>Binary</option>
									</select>
								</div>									
							</div>
						</div>			
					</div>					
				</div>
			</div>
			<!-- END MAIN -->	
			
			<!-- LABELS -->
			<div id="tabs_labels" class="tab-pane">
				<div class="melis-product-heading border-bottom">
					<h3>Labels</h3>
				</div>
				<div class="row melis-pdc">			
					<div class="col-xs-12 col-md-4">
						<ul class="nav-tabs product-text-tab">
							<li class="active">
								<a class="clearfix" data-toggle="tab" href="#ptext-french" aria-expanded="true">
									&nbsp;<img src="images/fr.png">
									<span>French</span>
									<i class="fa fa-times"></i>
								</a>
							</li>
							<li class="">
								<a class="clearfix" data-toggle="tab" href="#ptext-english" aria-expanded="false">
									&nbsp;<img src="images/en.png">
									<span>English</span>
									<i class="fa fa-times"></i>
								</a>
							</li>
						</ul>					
					</div>				
					<div class="col-xs-12 col-md-8">
						<!-- product text CONTENT  -->
						<div class="tab-content">						
							<div id="ptext-french" class="tab-pane active custom-field-type" style="border: 1px solid #eee; padding: 15px;">
								<h3>French</h3><br>
								<div class="form-group">
									<label for="">Label</label>
									<input type="text" class="form-control" name="" id="" placeholder="">
								</div>
								<div class="form-group">
									<label for="">Description</label>
									<textarea  class="form-control" rows="8"></textarea>
								</div>
							</div>						
							<div id="ptext-english" class="tab-pane custom-field-type" style="border: 1px solid #eee; padding: 15px;">
								<h3>English</h3><br>
								<div class="form-group">
									<label for="">Label</label>
									<input type="text" class="form-control" name="" id="" placeholder="">
								</div>
								<div class="form-group">
									<label for="">Description</label>
									<textarea  class="form-control" rows="8"></textarea>
								</div>
							</div>						
						</div>					
					</div>					
				</div>				
			</div>
			<!-- END LABELS -->
			
			<!-- LIST OF VALUES -->
			<div id="tabs_values" class="tab-pane">
				<div class="melis-product-heading border-bottom">
					<h3>Values</h3>					
					<a data-toggle="modal" class="btn btn-success" data-target="#addAttrValue" title="Add Attribute Value"><i class="fa fa-plus" style="padding-right:10px;"></i>Add Value</a>
				</div>
				<div class="row melis-pdc">			
					<div class="col-xs-12 col-md-12">
						<table id="attr-value-table" class="me-table table table-striped table-primary dt-responsive nowrap no-footer dtr-inline dataTable" style="width: 100%">			
							<thead>
								<tr>
									<th class="center th-check" style="width: 30px;">					        	
										<div class="checkbox checkbox-single" style="width: 30px;">
											<label class="checkbox-custom">
												<i class="fa fa-fw fa-square-o"></i>
												<input type="checkbox" class="check-all" checked="checked">
											</label>
										</div>
									</th>
									<th class="center" style="width: 30px;">ID</th>
									<th class="center">Status</th>
									<th class="center" style="width: 100px;">Action</th>
								</tr>
							</thead>						
							<tbody>
								<tr>
									<td class="text-center">
										<div class="checkbox checkbox-single margin-none">
											<label class="checkbox-custom">
												<i class="fa fa-fw fa-square-o"></i>
												<input type="checkbox" checked="checked">
											</label>
										</div>
									</td>
									<td class="center">1</td>
									<td class="center">Small</td>									
									<td class="text-center">
										<a class="btn btn-success" data-toggle="modal" data-target="#editAttrValue"><i class="fa fa-pencil" title="Edit"></i></a>		
										<a class="btn btn-danger" style="margin-right:5px;"><i class="fa fa-times" title="Delete"></i></a>							
									</td>									
								</tr>
								<tr>
									<td class="text-center">
										<div class="checkbox checkbox-single margin-none">
											<label class="checkbox-custom">
												<i class="fa fa-fw fa-square-o"></i>
												<input type="checkbox" checked="checked">
											</label>
										</div>
									</td>
									<td class="center">2</td>
									<td class="center">Medium</td>									
									<td class="text-center">
										<a class="btn btn-success" data-toggle="modal" data-target="#editAttrValue"><i class="fa fa-pencil" title="Edit"></i></a>		
										<a class="btn btn-danger" style="margin-right:5px;"><i class="fa fa-times" title="Delete"></i></a>
									</td>								
								</tr>
								<tr>
									<td class="text-center">
										<div class="checkbox checkbox-single margin-none">
											<label class="checkbox-custom">
												<i class="fa fa-fw fa-square-o"></i>
												<input type="checkbox" checked="checked">
											</label>
										</div>
									</td>
									<td class="center">3</td>
									<td class="center">Large</td>
									<td class="text-center">
										<a class="btn btn-success" data-toggle="modal" data-target="#editAttrValue"><i class="fa fa-pencil" title="Edit"></i></a>		
										<a class="btn btn-danger" style="margin-right:5px;"><i class="fa fa-times" title="Delete"></i></a>
									</td>									
								</tr>
							</tbody>
						</table>
					</div>									
				</div>			
			</div>
			<!-- END LIST OF VALUES -->
			
		</div>
	</div> 
</div>
<?php include "footer.php"?>