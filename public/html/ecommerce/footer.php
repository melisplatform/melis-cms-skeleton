    <!-- MODAL DO NOT CROSS MODAL DO NOT CROSS MODAL DO NOT CROSS MODAL DO NOT CROSS MODAL DO NOT CROSS MODAL DO NOT CROSS ( police line :p ) -->
<!--ADD FILE Modal -->
	<div class="modal fade" id="addFile" role="dialog">
	    <div class="modal-dialog">	    
	      <!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
				  <button type="button" class="close" data-dismiss="modal">&times;</button>
				  <h4 class="modal-title">
					<i class="fa fa-link"></i>
					Add File
				  </h4>
				</div>
				<div class="modal-contet-cont">
					<div class="">
					  <form method="POST" name="" id="" action="">
						<fieldset id="">							
							<div class="form-group">
								<label for="">File Link</label>
								<input type="file" class="form-control file-control">
							</div>							
							<div class="form-group">
								<label for="id_usr_status" style="color: rgb(104, 104, 104);">Image Type</label>
								<select name="usr_status" id="id_usr_status" class="form-control">
									<option value="" selected="selected">Choose</option>
									<option value="0">Default</option>
									<option value="1">Small</option>
									<option value="1">Large</option>
									<option value="1">Top</option>
								</select>
							</div>							
							<div class="form-group">
								<label for="id_usr_status" style="color: rgb(104, 104, 104);">Set Image For Country</label>
								<select name="usr_status" id="id_usr_status" class="form-control">
									<option value="" selected="selected">Choose</option>
									<option value="0">France</option>
									<option value="1">USA</option>
									<option value="1">China</option>
									<option value="1">UK</option>
								</select>
							</div>
						</fieldset>
					</form>
					</div>
					<div class="modal-footer">
					  <button type="button" class="btn btn-success pull-left" data-dismiss="modal">Save</button>
					  <button type="button" class="btn btn-danger pull-right" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>	      
	    </div>
	</div>
	
	<!--ADD IMAGE Modal -->
	  <div class="modal fade" id="addImage" role="dialog">
	    <div class="modal-dialog">
	    
	      <!-- Modal content-->
	      <div class="modal-content">
	        <div class="modal-header">
	          <button type="button" class="close" data-dismiss="modal">&times;</button>
	          <h4 class="modal-title">
	          	<i class="fa fa-camera"></i>
	          	Add New Image
	          </h4>
	        </div>
	        <div class="modal-contet-cont">
		        <div class="">
		          <form method="POST" name="pageseo" id="1_idformpageseo" action="/MelisCms/PageSeo/saveSeo?idPage=1">
					<fieldset id="1_idformpageseo">
						
						<div class="form-group">
							<label for="1_pseo_meta_title">Image Link</label>
							<input type="file" class="form-control file-control">
						</div>
						
						<div class="form-group">
							<label for="id_usr_status" style="color: rgb(104, 104, 104);">Image Type</label>
							<select name="usr_status" id="id_usr_status" class="form-control">
								<option value="" selected="selected">Choose</option>
								<option value="0">Default</option>
								<option value="1">Small</option>
								<option value="1">Large</option>
								<option value="1">Top</option>
							</select>
						</div>
						
						<div class="form-group">
							<label for="id_usr_status" style="color: rgb(104, 104, 104);">Set Image For Country</label>
							<select name="usr_status" id="id_usr_status" class="form-control">
								<option value="" selected="selected">Choose</option>
								<option value="0">France</option>
								<option value="1">USA</option>
								<option value="1">China</option>
								<option value="1">UK</option>
							</select>
						</div>

					</fieldset>
				</form>
		        </div>
		        <div class="modal-footer">
		          <button type="button" class="btn btn-success pull-left" data-dismiss="modal">Save</button>
		          <button type="button" class="btn btn-danger pull-right" data-dismiss="modal">Close</button>
		        </div>
	        </div>
	      </div>	      
	    </div>
	  </div>	  
	  <!--EDIT IMAGE Modal -->
	  <div class="modal fade" id="editImage" role="dialog">
	    <div class="modal-dialog">	    
	      <!-- Modal content-->
	      <div class="modal-content">
	        <div class="modal-header">
	          <button type="button" class="close" data-dismiss="modal">&times;</button>
	          <h4 class="modal-title">
	          	<i class="fa fa-camera"></i>
	          	Edit Image
	          </h4>
	        </div>
	        <div class="modal-contet-cont">
		        <div class="">
		          <form method="POST" name="editImage" id="1_idformpageseo" action="">
					<fieldset id="1_idformpageseo">
						
						<div class="form-group">
							<label for="1_pseo_meta_title">Image Link</label>
							<input type="file" class="form-control file-control">
						</div>
						
						<div class="form-group">
							<label for="id_usr_status" style="color: rgb(104, 104, 104);">Image Type</label>
							<select name="usr_status" id="id_usr_status" class="form-control">
								<option value="" selected="selected">Choose</option>
								<option value="0">Default</option>
								<option value="1">Small</option>
								<option value="1">Large</option>
								<option value="1">Top</option>
							</select>
						</div>
						
						<div class="form-group">
							<label for="id_usr_status" style="color: rgb(104, 104, 104);">Set Image For Country</label>
							<select name="usr_status" id="id_usr_status" class="form-control">
								<option value="" selected="selected">Choose</option>
								<option value="0">France</option>
								<option value="1">USA</option>
								<option value="1">China</option>
								<option value="1">UK</option>
							</select>
						</div>

					</fieldset>
				</form>
		        </div>
		        <div class="modal-footer">
		          <button type="button" class="btn btn-success pull-left" data-dismiss="modal">Save</button>
		          <button type="button" class="btn btn-danger pull-right" data-dismiss="modal">Close</button>
		        </div>
	        </div>
	      </div>
	      
	    </div>
	  </div> 
	  
	  <!--VIEW IMAGE Modal -->
	<div class="modal fade" id="viewImage" role="dialog">
	    <div class="modal-dialog">	    
	      <!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
				  <button type="button" class="close" data-dismiss="modal">&times;</button>
				  <h4 class="modal-title">
					<i class="fa fa-camera"></i>
					View Image
				  </h4>
				</div>
				<div class="modal-contet-cont">
					<div class="">
						<h4>Image Title</h4>
						<img src="../assets/images/fashion/female/2.jpg" style="border-radius: 3px;" width="570">
					</div>
					<div class="modal-footer">
						<p>Image Description Lorem ipsum dolor</p>
					</div>
				</div>
			</div>	      
	    </div>
	</div>
	  
	<!-- ADD / EDIT CATEGORIES  Modal -->
	<div class="modal fade" id="editCategoryModal" role="dialog">
	    <div class="modal-dialog">
	    
	      <!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
				  <button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">
					<i class="fa fa-tags"></i>
					All Categories
					</h4>				
				</div>
				<div class="modal-contet-cont">
					<div><input id="tree-search" class="search-input form-control" placeholder="Type in Category"></div>
					<div id="prod-add-jstree"></div>
					<div class="modal-footer">
					<button type="button" class="btn btn-success pull-left" data-dismiss="modal">Save</button>
					<button type="button" class="btn btn-danger pull-right" data-dismiss="modal">Cancel</button>
					</div>
				</div>		        
			</div>	      
		</div>
	</div>
	  
	<!-- ADD / EDIT Attributes  Modal -->
	<div class="modal fade" id="editAttributeModal" role="dialog">
	    <div class="modal-dialog">	    
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
				  <button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">
					<i class="fa fa-tags"></i>
					Add Attributes
					</h4>			
				</div>
				<div class="modal-contet-cont">
					<div class="ui-widget">
						<label for="tags">Attributes: </label>
						<input id="add-attributes">
					</div>
					<div class="modal-footer">
					  <button type="button" class="btn btn-success pull-left" data-dismiss="modal">Add</button>
					  <button type="button" class="btn btn-danger pull-right" data-dismiss="modal">Cancel</button>
					</div>
				</div>		        
			</div>	      
	    </div>
	</div>
	  
	<!-- ADD TEXT Modal -->
	<div class="modal fade" id="addTextModal" role="dialog">
	    <div class="modal-dialog">	    
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
				  <button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">
					<i class="fa fa-file-text-o"></i>
					Custom Text Field
					</h4>			
				</div>
				<div class="modal-contet-cont">
					<div class="ui-widget">
						<div class="form-group">
							<label for="Text Name">Text Field: </label>
							<select class="form-control" id="select-text-type-option">
								<option value="0" data-text-type="">Select Text Field</option>
								<option value="general_title" data-text-type="Short Text">General Title</option>
								<option value="general_content" data-text-type="Long Text">General Content</option>
								<option value="detail_product_title" data-text-type="Short Text">Detail Product Title</option>
								<option value="detail_product_content" data-text-type="Long Text">Detail Product Content</option>
							</select>							
						</div>						
						<div class="form-group select-text-field">							
						</div>
						<div class="form-group">						
							<button type="button" class="select-text-field-type btn btn-success pull-left" data-dismiss="modal">
							Add Selected Text Field</button>
							<br>
						</div>
					</div>
					<div class="ui-widget create-field-type-widget">
						<br>
						<label>or <a class="create-new-text-field-toggle">Create New Text Field</a></label><br>
						<div class="create-text-field">
							<div class="form-group">
								<label for="Text Name">Name: </label>
								<input class="form-control" type="text" id="text-field-name" placeholder="example: Title">
								<label for="Text Code">Code: </label>
								<input class="form-control" type="text" id="text-field-code" placeholder="example: title001">
								<label for="Text Code">Text Field: </label>
								<select class="form-control" id="text-select-type" data-field-code="" data-field-name="">
									<option value="1">Short Text</option>
									<option value="2">Long Text</option>
								</select>
							</div>
							<div class="form-group">
								<br>
								<button type="button" class="create-text-field-type btn btn-success pull-left" data-dismiss="modal">Create New Text Field</button>
							</div>
						</div>
						<div class="ui-widget new-field-type-modal"></div>
						<br>
					</div>
					<div class="modal-footer">						
						<!--<button type="button" class="save-text-field-type btn btn-success pull-left" data-dismiss="modal">Save</button>-->
						<button type="button" class="btn btn-danger pull-right" data-dismiss="modal">Cancel</button>
					</div>
				</div>		        
			</div>	      
	    </div>
	</div>
	  
	<!-- ADD VARIANT  Modal -->
	<div class="modal fade" id="addCountry" role="dialog">
	    <div class="modal-dialog">	    
	      <!-- Modal content-->
			<div class="modal-content">
				 <div class="modal-header">
	          <button type="button" class="close" data-dismiss="modal">&times;</button>
	          <h4 class="modal-title">
	          	<i class="fa fa-globe"></i>
	          	Add Country
	          </h4>
	        </div>
	        <div class="modal-contet-cont">
		        <div class="ui-widget">
					<label for="Country's Name">Country's Name: </label>
					<input class="form-control" placeholder="example: France">
					<label for="Country's ISO Code">Country's ISO Code: </label>
					<input class="form-control" placeholder="example: FRA">
				</div>
		        <div class="modal-footer">
		          <button type="button" class="btn btn-success pull-left" data-dismiss="modal">Add</button>
		          <button type="button" class="btn btn-danger pull-right" data-dismiss="modal">Cancel</button>
		        </div>
	        </div>
			</div>	      
	    </div>
	  </div>
	  	  
	<!-- ADD Language  Modal -->
	<div class="modal fade" id="addLanguage" role="dialog">
		<div class="modal-dialog">	    
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">
						<i class="fa fa-language"></i>
					Add Language
					</h4>
				</div>
				<div class="modal-contet-cont">
					<div class="ui-widget">
						<label for="Language Name">Language Name: </label>
						<input class="form-control" placeholder="example: French">
						<label for="Language Code">Language Code: </label>
						<input class="form-control" placeholder="example: fr">
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-success pull-left" data-dismiss="modal">Add</button>
						<button type="button" class="btn btn-danger pull-right" data-dismiss="modal">Cancel</button>
					</div>
				</div>
			</div>	      
		</div>
	</div>
	
	<!-- ADD Language Modal -->
	<div class="modal fade" id="addMessage" role="dialog">
		<div class="modal-dialog">	    
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">
						<i class="fa fa-language"></i>
						Add Message
					</h4>
				</div>
				<div class="modal-contet-cont">
					<div class="ui-widget">
						<label for="Language Code">Message: </label>
						<textarea class="message-textarea form-control"></textarea>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-success pull-left add-message" data-dismiss="modal">Add</button>
						<button type="button" class="btn btn-danger pull-right" data-dismiss="modal">Cancel</button>
					</div>
				</div>
			</div>	      
		</div>
	</div>
	
	<!-- ADD Attribute Values Modal -->
	<div class="modal fade" id="addAttrValue" role="dialog">
		<div class="modal-dialog">	    
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">
						<i class="fa fa-plus"></i>
						Add Value
					</h4>
				</div>
				<div class="modal-contet-cont">
					<div class="ui-widget">
					<h4>Francais</h4>
						<label for="Attribute Frencais Value">Value: </label>
						<input type="text" class="form-control add-value" data-language="fr">
					<hr>
					<h4>English</h4>
						<label for="Attribute English Value">Value: </label>
						<input type="text" class="form-control add-value" data-language="en">
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-success pull-left add-message" data-dismiss="modal">Add</button>
						<button type="button" class="btn btn-danger pull-right" data-dismiss="modal">Cancel</button>
					</div>
				</div>
			</div>	      
		</div>
	</div>
	
	<!-- Edit Attribute Values Modal -->
	<div class="modal fade" id="editAttrValue" role="dialog">
		<div class="modal-dialog">	    
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">
						<i class="fa fa-plus"></i>
						Edit Value
					</h4>
				</div>
				<div class="modal-contet-cont">
					<div class="ui-widget">
					<h4>Francais</h4>
						<label for="Attribute Frencais Value">Value: </label>
						<input type="text" class="form-control add-value" value="Petit" data-language="fr">
					<hr>
					<h4>English</h4>
						<label for="Attribute English Value">Value: </label>
						<input type="text" class="form-control add-value" value="Small" data-language="en">
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-success pull-left add-message" data-dismiss="modal">Save</button>
						<button type="button" class="btn btn-danger pull-right" data-dismiss="modal">Cancel</button>
					</div>
				</div>
			</div>	      
		</div>
	</div>
	
	<div class="clearfix"></div>
    <!-- // Sidebar menu & content wrapper END -->
   
    <!-- // Main Container Fluid END -->
	<!-- Bootstrap Libraries -->	
	<script type="text/javascript" charset="UTF-8" src="js/bootstrap-switch.js?v=v1.2.3"></script>
	<script type="text/javascript" charset="UTF-8" src="js/bootstrap-switch.init.js?v=v1.2.3"></script>	
	<script type="text/javascript" charset="UTF-8" src="js/bootstrap-select.js?v=v1.2.3"></script>
	<script type="text/javascript" charset="UTF-8" src="js/bootstrap-select.init.js?v=v1.2.3"></script>
	<script type="text/javascript" charset="UTF-8" src="js/bootstrap3-typeahead.min.js"></script>
	<script type="text/javascript" charset="UTF-8" src="js/bootstrap-datetimepicker.js"></script>
	<script type="text/javascript" charset="UTF-8" src="js/locales/bootstrap-datetimepicker.fr.js"></script>
	
	</body>
</html>