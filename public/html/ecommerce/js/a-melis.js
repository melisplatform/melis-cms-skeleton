// melis ecommerce JS

$(document).ready(function(){	
	var $body = $("body");

	// filter dropdown in search bar
	$body.on("click", ".filter-key-values li a", function(){
		var value = $(this).data('text');
		$(this).parents('.filter-dropdown').attr('data-value', value);
		$(this).parents('.filter-key-values').prev().find('span.filter-key').text(value);
	});
	
	// trigger Isotope after images have loaded
	var isProductPage = $(".portfolioContainer").length; //activate the isotop plugin only in product page
	
	if(isProductPage){
		var $container = $('.portfolioContainer');
		 $container.imagesLoaded( function(){
	        $container.isotope({
	        	itemSelector : '.a'
	        });
	     });
	}
	
	 
	// Isotope sorting/filter
    $('.portfolioFilter a').click(function(){
        $('.portfolioFilter .current').removeClass('current');
        $(this).addClass('current');
 
        var selector = $(this).attr('data-filter');
        $container.isotope({
            filter: selector,
            animationOptions: {
                duration: 750,
                easing: 'linear',
                queue: false
            }
         });
         
    });
	
    /* DEMO for SEO */
	// Check init for Switch
	checkSwitchLanguage();
	
	// Declaring base variable
	var originalAddClassMethod = $.fn.addClass;

	$.fn.addClass = function(){
		// Execute the original method.
		var result = originalAddClassMethod.apply( this, arguments );

		// trigger a custom event
		jQuery(this).trigger('cssClassChanged');

		// return the original result
		return result;
	}								
	
	// Function Check Switch Language
	function checkSwitchLanguage(){
		if($(".seo-switch").find('div.switch-off').length != 0){
			$(".pageseo input, .pageseo textarea").attr('disabled','disable');
		} else if($(".seo-switch").find('div.switch-on').length != 0){
			$(".pageseo input, .pageseo textarea").removeAttr('disabled');
		}
	}
	
	// document ready function
	$(".switch-animate").bind('cssClassChanged', function(){ 
		checkSwitchLanguage();		
	});	
	
	/* Tooltips for Product List and Category Page */
	if($('.tooltipTable').length >0){
		$('.tooltipTable').each(function() {
			$(this).qtip({
				content: {
					text: $(this).next('.tooltiptext')
				},
				style: {
					classes: 'qtip-tipsy qtip-shadow',
					width: 'auto'
				},
				hide: {
					fixed: true,
					delay: 300
				},
				/* position: {
					my: 'top center', 
					at: 'bottom center',
					effect: false,
					viewport: $(window),
					adjust: {
						method: 'none shift'
					}
				} */
				position: {
					my: 'top center', 
					at: 'bottom center'					
				}
			});
		});
	}
	/* Tooltips for Product Add Variants */
	if($('.tooltipTable2').length > 0){
		$('.tooltipTable2').each(function() {
			$(this).qtip({
				content: {
					text: $(this).next('.tooltiptext2')
				},
				/* position: {
					my: 'top center', 
					at: 'bottom center',
					effect: false,
					viewport: $(window),
					adjust: {
						method: 'none shift'
					}
				}, */
				position: {
					my: 'top center', 
					at: 'bottom center'					
				},
				style: {
					classes: 'qtip-tipsy qtip-shadow',
					width: 'auto'
				},
				hide: {
					fixed: true,
					delay: 300
				}
			});
		});
	}
	/* DEMO Country Price */
	$(".country-price-tab li a").on('click',function(){
		var textCountry = $(this).data('country');
		$('.country-price-label').text(textCountry);
	});
	
	/* DEMO Country Stock */
	$(".country-stock-tab li a").on('click',function(){
		var textCountry = $(this).data('country');
		$('.country-stock-label').text(textCountry);
	});	
	
	/* ### Category Page for DEMO ### */
	if($('#prod-cat-jstree').length > 0){
		
		/* ### Product Categories jsTree ### */
		$('#prod-cat-jstree-del-btn').hide();
		$('#prod-cat-jstree-save-btn').hide();
		$("#prod-cat-jstree-search").keyup(function() {
			var searchString = $(this).val();
			$('#prod-cat-jstree').jstree('search', searchString);
		});
		
		/* Toggles */
		$(".toggle-all-open").on("click",function(){
			$("#prod-cat-jstree").jstree("open_all");
		});
		$(".toggle-all-close").on("click",function(){
			$("#prod-cat-jstree").jstree("close_all");
		});
		
		/* Select a Category */
		$('#prod-cat-jstree').on("click", function() {
			var catId = $(this).jstree('get_selected');
			var catName = $(this).jstree().get_selected(true)[0].text;
			$('#prod-cat-jstree-save-name').val(catName);
			$('#prod-cat-jstree-save-label-id').text(catId);		
			$('#prod-cat-jstree-save-id').val(catId);		
			$('#prod-cat-jstree-save-btn').show();
			$('#prod-cat-jstree-del-btn').show();
			$('#prod-cat-jstree-adds-btn').hide();
			/* Static data for DEMO only */
			switch ($('#prod-cat-jstree-save-id').val()) {
				case '1.0':
					$('#prod-cat-jstree-save-desc').val("Category Description for Top Dress");
					break;
				case '2.0':
					$('#prod-cat-jstree-save-desc').val("Category Description for Smart Phone");
					break;
				default:
					$('#prod-cat-jstree-save-desc').val("Default Description for every Category");
			}
		});		
		
		/* Delete Category  */
		$("#prod-cat-jstree-del-btn").on("click", function(){
			var catId = $("#prod-cat-jstree").jstree('get_selected');			
			$("#prod-cat-jstree").jstree("delete_node",catId);
			$('.save-cat-form input, .save-cat-form textarea').val('');
			$(".msg-box").html('<div class="alert alert-danger">'+
				'<a href="#" class="close" data-dismiss="alert">&times;</a>'+
				'<span class="msg-span"><strong>Category Name</strong> Successfully Deleted</span>'+
			'</div>');
		});
		
		/* Clear Search Category */
		$("#cat-clear-search").on("click", function(){		
			var catTree = $('#prod-cat-jstree').jstree(true);
			$("#prod-cat-jstree-search").val("");
			$('#prod-cat-jstree').jstree('search', '');
		});
		
		/* Refresh */
		$("#cat-clear-refresh").on("click", function(){		
			var catTree = $('#prod-cat-jstree').jstree(true);
			$("#prod-cat-jstree-search").val("");
			$('#prod-cat-jstree').jstree('search', '');
			catTree.refresh();
			$('.save-cat-form input, .save-cat-form textarea').val('');
			$('#prod-cat-jstree-save-label-id').text('');
			$('#prod-cat-jstree-del-btn').hide();
		});
		
		/* Save Category */
		$("#prod-cat-jstree-save-btn").on("click",function() {		
			var catTree = $('#prod-cat-jstree').jstree(true);
			var treeVal = $("#prod-cat-jstree-save-name").val();
			var treeId = $("#prod-cat-jstree-save-id").val();
			treeValID = treeVal.replace(/\s+/g, '-').toLowerCase();			
			var treeParent = $('#prod-cat-jstree').jstree('get_selected');
			var treeNewNode = {"id": treeValID, "text":treeVal};
			console.log(treeParent);
			if(treeVal){
				if(treeParent==''){
					catTree.create_node("#" , treeNewNode, false);				
				} else {
					catTree.create_node(treeParent , treeNewNode, "inside"); 				
				}
				catTree.deselect_all();
				catTree.select_node(treeValID);
				$(".msg-box").html('<div class="alert alert-success fade in">'+
				'<a href="#" class="close" data-dismiss="alert">&times;</a>'+
				'<span class="msg-span">The <strong>'+treeVal+'</strong> is successfully added to category.</span>'+
				'</div>');
			} else {
				$(".msg-box").html('<div class="alert alert-warning">'+
				'<a href="#" class="close" data-dismiss="alert">&times;</a>'+
				'<span class="msg-span">Please enter a <strong>Category Name</strong> to Add.</span>'+
				'</div>');
			}
		});
		
		/* Init jsTree with Static Data for DEMO */
		$('#prod-cat-jstree').jstree({
		"types" : {
			"default" : {
				"icon" : "glyphicon glyphicon-tag"
			}
		},
		"core": {
			"multiple": false,
			"animation" : 0,
			"check_callback" : true,
			'data': [{
				"id": "1.0",
				"text": "Top",
				"children": [{
					"id": "1.1.0",
					"text": "Shirt",
					"children": [
					{"id": "1.1.1","icon": "glyphicon glyphicon-tag","text": "V-Neck Version 1"},
					{"id": "1.1.2","icon": "glyphicon glyphicon-tag","text": "V-Neck Version 2"}					
					]
				}, {
					"id": "1.2",
					"text": "Sleeveless"
				}, {
					"id": "1.3",
					"text": "Long Sleeves"
				}, {
					"id": "1.4",
					"text": "Polo Shirt"
				}, {
					"id": "1.5",
					"text": "U-Neck"
				}],
			}, {
				"id": "2.0",
				"text": "Smart Phone",
				"children": [
					{
						"id": "2.1",
						"text": "Samsung",
						"children": [
						{
							"id": "2.1.1",
							"text": "Galaxy Series",
							"children": [
								{"id": "2.1.1.1","text": "Galaxy S5"},
								{"id": "2.1.1.2","text": "Galaxy A1"},
								{"id": "2.1.1.3","text": "Galaxy J4"}
							]},					
						]
					},
					{
						"id": "2.2",
						"text": "LG",
						"icon": "glyphicon glyphicon-tag",
						"children": [
						{
							"id": "2.2.1",
							"text": "G Series",
							"icon": "glyphicon glyphicon-tag",
							"children": [
								{"id": "2.2.1.1","text": "G3"},
								{"id": "2.2.1.2","text": "G4"},
								{"id": "2.2.1.3","text": "G5"}
							]},					
						]
						}
					]
			}]
		},
		"search": {
			"case_insensitive": true,
			"show_only_matches" : true
		},
		"plugins": ["contextmenu", "sort", "dnd", "search", "types", "wholerow","unique"]
		});
		
	}	
	/* Category Products Table */
	if($('#cat-products-table').length >0){
		$('#cat-products-table').DataTable({
			"order": [[ 1, "asc" ]],
			"responsive": true,
			"searching": true,
			"columns": [
				{"orderable": false},
				{"orderable": false},
				{"orderable": false},
				{"orderable": false},
				null,
				{"orderable": false},
				{"orderable": false}
			],			
			"columnDefs": [
				{ "responsivePriority": 1, "targets": 0 },
				{ "responsivePriority": 2, "targets": 4 },
				{ "responsivePriority": 3, "targets": -1},
				{ "responsivePriority": 4, "targets": 1 }
			],
			"language" : {
				"lengthMenu": "Show _MENU_"
			},			
			"lengthMenu": [ [10, 25, 50, 100, -1], [10, 25, 50, 100, "All"] ],
			"dom": '<"bulk-action">lf<"filter-bar">rtip',
			"drawCallback": function( settings ) {
				$(this).css('width','100%');
			}
		});
		
		$(".filter-bar").html('<div class="row">'+
		'<div class="fb-right col-xs-6 col-md-3 float-right">'+
			'<a class="btn btn-default" data-toggle="tab" title="Grid view"><i class="fa fa-th-large"></i></a>'+
			'<a class="btn btn-default" data-toggle="tab" title="List view"><i class="fa fa-th-list"></i></a>'+
			'<a class="btn btn-default" data-toggle="tab" title="Refresh"><i class="fa fa-refresh"></i></a>'+
		'</div>'+
		'</div>');
	}
	
	/* Order Listing Table */
	if($('#order-listing-table').length >0){
		$('#order-listing-table').DataTable({
			"order": [[ 1, "asc" ]],
			"responsive": true,
			"searching": true,
			"columns": [
				{"orderable": false},
				null,
				{"orderable": false},
				{"orderable": false},
				{"orderable": false},
				{"orderable": false},
				{"orderable": false},
				{"orderable": false},
				{"orderable": false},
				{"orderable": false},
				{"orderable": false},
				{"orderable": false}
			],			
			"columnDefs": [
				{ "responsivePriority": 1, "targets": 0 },
				{ "responsivePriority": 2, "targets": 1 },
				{ "responsivePriority": 3, "targets": -1 }
			],
			"language" : {
				"lengthMenu": "Show _MENU_"
			},			
			"lengthMenu": [ [10, 25, 50, 100, -1], [10, 25, 50, 100, "All"] ],
			"dom": '<"bulk-action">lf<"filter-bar">rtip',
			"drawCallback": function( settings ) {
				$(this).css('width','100%');
			}
		});
		
		$(".filter-bar").html('<div class="row">'+
		'<div class="fb-right col-xs-6 col-md-3 float-right">'+
			'<a class="btn btn-default" data-toggle="tab" title="Grid view"><i class="fa fa-th-large"></i></a>'+
			'<a class="btn btn-default" data-toggle="tab" title="List view"><i class="fa fa-th-list"></i></a>'+
			'<a class="btn btn-default" data-toggle="tab" title="Refresh"><i class="fa fa-refresh"></i></a>'+
		'</div>'+
		'</div>');
	}
	
	/* Order Info Table */
	if($('#order-info-table').length >0){
		$('#order-info-table').DataTable({
			"order": [[ 1, "asc" ]],
			"responsive": true,
			"searching": true,
			"columns": [
				{"orderable": false},
				null,
				{"orderable": false},
				{"orderable": false},
				{"orderable": false},
				{"orderable": false},
				{"orderable": false}
			],			
			"columnDefs": [
				{ "responsivePriority": 1, "targets": 0 },
				{ "responsivePriority": 2, "targets": 1 },
				{ "responsivePriority": 3, "targets": -1 }
			],
			"language" : {
				"lengthMenu": "Show _MENU_"
			},			
			"lengthMenu": [ [10, 25, 50, 100, -1], [10, 25, 50, 100, "All"] ],
			"dom": '<"bulk-action">lf<"filter-bar">rtip',
			"drawCallback": function( settings ) {
				$(this).css('width','100%');
			}
		});
		
		$(".filter-bar").html('<div class="row">'+
		'<div class="fb-right col-xs-6 col-md-3 float-right">'+
			'<a class="btn btn-default" data-toggle="tab" title="Grid view"><i class="fa fa-th-large"></i></a>'+
			'<a class="btn btn-default" data-toggle="tab" title="List view"><i class="fa fa-th-list"></i></a>'+
			'<a class="btn btn-default" data-toggle="tab" title="Refresh"><i class="fa fa-refresh"></i></a>'+
		'</div>'+
		'</div>');
	}
	
	/* Clients Listing Table */
	if($('#clients-listing-table').length >0){
		$('#clients-listing-table').DataTable({
			"order": [[ 1, "asc" ]],
			"responsive": true,
			"searching": true,
			"columns": [
				{"orderable": false},
				null,
				{"orderable": false},
				{"orderable": false},
				{"orderable": false},
				{"orderable": false},
				{"orderable": false},
				{"orderable": false},
				{"orderable": false},
				{"orderable": false},
				{"orderable": false},
				{"orderable": false},
				{"orderable": false},
				{"orderable": false},
				{"orderable": false},
				{"orderable": false}
			],			
			"columnDefs": [
				{ "responsivePriority": 1, "targets": 0 },
				{ "responsivePriority": 2, "targets": 1 },
				{ "responsivePriority": 3, "targets": -1 },
				{ "responsivePriority": 4, "targets": -2 },
				{ "responsivePriority": 5, "targets": -3 },
				{ "responsivePriority": 6, "targets": -4 },
				{ "responsivePriority": 7, "targets": -5 }
			],
			"language" : {
				"lengthMenu": "Show _MENU_"
			},			
			"lengthMenu": [ [10, 25, 50, 100, -1], [10, 25, 50, 100, "All"] ],
			"dom": '<"bulk-action">lf<"filter-bar">rtip',
			"drawCallback": function( settings ) {
				$(this).css('width','100%');
			}
		});
		
		$(".filter-bar").html('<div class="row">'+
		'<div class="fb-right col-xs-6 col-md-3 float-right">'+
			'<a class="btn btn-default" data-toggle="tab" title="Grid view"><i class="fa fa-th-large"></i></a>'+
			'<a class="btn btn-default" data-toggle="tab" title="List view"><i class="fa fa-th-list"></i></a>'+
			'<a class="btn btn-default" data-toggle="tab" title="Refresh"><i class="fa fa-refresh"></i></a>'+
		'</div>'+
		'</div>');
	}
	
	/* Order Info Message Board */
	$('.add-message').on('click',function(){
		$('.message-board').append('<div class="message-post">'+
		'<div class="ord-msg-time">'+timeStamp()+'</div>'+$('.message-textarea').val()+
		'</div>');
	});	
	
	/* ### Scripts for Add Product Page ### */
	$('.me-table').css('width','100%');
	if($("#prod-add-jstree").length > 0){
		
		/* === Categories Tree === */
		
		/* Product Add jsTree */
		$("#tree-search").keyup(function() {
			var searchString = $(this).val();
			$('#prod-add-jstree').jstree('search', searchString);
		});		
		
		/* Init jsTree with Static Data */
		$('#prod-add-jstree').jstree({
			"types" : {
			"default" : {
				"icon" : "glyphicon glyphicon-tag"
			}
		},
		'core': {
			"animation" : 0,
			"check_callback" : true,
			'data': [{
				"id": "1.0",
				"text": "Top",
				"children": [{
					"id": "1.1.0",
					"text": "Shirt",
					"children": [
					{"id": "1.1.1","text": "V-Neck Version 1"},
					{"id": "1.1.2","text": "V-Neck Version 2"}					
					]
				}, {
					"id": "1.2",
					"text": "Sleeveless"
				}, {
					"id": "1.3",
					"text": "Long Sleeves"
				}, {
					"id": "1.4",
					"text": "Polo Shirt"
				}, {
					"id": "1.5",
					"text": "U-Neck"
				}],
			}, {
				"id": "2.0",
				"text": "Smart Phone",
				"children": [
					{
						"id": "2.1",
						"text": "Samsung",
						"children": [
						{
							"id": "2.1.1",
							"text": "Galaxy Series",
							"children": [
								{"id": "2.1.1.1","text": "Galaxy S5"},
								{"id": "2.1.1.2","text": "Galaxy A1"},
								{"id": "2.1.1.3","text": "Galaxy J4"}
							]},					
						]
					},
					{
						"id": "2.2",
						"text": "LG",
						"children": [
						{
							"id": "2.2.1",
							"text": "G Series",
							"children": [
								{"id": "2.2.1.1","text": "G3"},
								{"id": "2.2.1.2","text": "G4"},
								{"id": "2.2.1.3","text": "G5"}
							]},					
						]
						}
					]
			}]
		},
		"search": {
			"case_insensitive": true,
			"show_only_matches" : true
		},
		"plugins": ["search", "types","sort", "wholerow","checkbox"]
		});
	}
	/* Products Table Variants */
	if($("#product-variant-table").length > 0){
		$('#product-variant-table').DataTable({
			"order": [[ 1, "asc" ]],
			"responsive": true,
			"searching": true,
			"columns": [
				{"orderable": false},
				null,
				{"orderable": false},
				{"orderable": false},
				{"orderable": false},
				null,
				{"orderable": false},
				{"orderable": false}
			],			
			"columnDefs": [
				{ "responsivePriority": 1, "targets": 0 },
				{ "responsivePriority": 2, "targets": 5 },
				{ "responsivePriority": 3, "targets": -1},
				{ "responsivePriority": 4, "targets": 1 }
			],
			"language" : {
				"lengthMenu": "Show _MENU_"
			}, 
			"lengthMenu": [ [10, 25, 50, 100, -1], [10, 25, 50, 100, "All"] ],
			"dom": '<"bulk-action">lf<"filter-bar">rtip',
			"drawCallback": function( settings ) {
				$(this).css('width','100%');
			}
		});
		$(".filter-bar").html('<div class="row">'+
		'<div class="fb-right col-xs-6 col-md-3 float-right">'+
			'<a class="btn btn-default" data-toggle="tab" title="Grid view"><i class="fa fa-th-large"></i></a>'+
			'<a class="btn btn-default" data-toggle="tab" title="List view"><i class="fa fa-th-list"></i></a>'+
			'<a class="btn btn-default" data-toggle="tab" title="Refresh"><i class="fa fa-refresh"></i></a>'+
		'</div>'+
		'</div>');					
		$(".bulk-action").html('<div data-value="bulk" class="filter-dropdown">'+
			'<a href="#" class="dropdown-toggle" data-toggle="dropdown">'+
			'<span class="filter-key" id="action-bulk">Bulk Action</span>'+
			'<span class="caret"></span></a>'+
			'<ul class="dropdown-menu filter-key-values">'+
				'<li><a href="#" data-text="Bulk Action">Cancel</a></li>'+
				'<li><a href="#" data-text="Unassociate">Unassociate</a></li>'+
			'</ul><a href="#" class="btn btn-success bulk-submit"><i class="fa fa-chevron-circle-right"></i> Submit</a>'+
		'</div>');
	}
	
	/* ### Scripts for Products Page ### */	
	
	/* Products Table Product List*/
	if($("#product-listing-table").length > 0){	
		var table = $('#product-listing-table').DataTable({
			"order": [[ 0, "asc" ]],
			"responsive": true,
			"rowReorder": {
				"selector": 'td:nth-child(3)'
			},
			"paging": false,
			"columns": [
				null,
				{"orderable": false},
				null,
				/* null, */
				{"orderable": false},
				{"orderable": false},
				null,
				null,
				{"orderable": false}
			],
			"columnDefs": [
				{ "responsivePriority": 1, "targets": 0 },
				{ "responsivePriority": 2, "targets": 1 },
				{ "responsivePriority": 3, "targets": -1 },
				{ "responsivePriority": 4, "targets": 4 }
			],
			"language" : {
				"lengthMenu": "Show _MENU_"
			}, 
			/* "responsive": true, */
			"lengthMenu": [ [10, 25, 50, 100, -1], [10, 25, 50, 100, "All"] ],
			"dom": '<"bulk-action">fl<"filter-bar">rtip',
			"drawCallback": function( settings ) {
				$(this).css('width','100%');
			}
		});
		$(".filter-bar").html('<div class="row">'+
		'<div class="fb-right col-xs-6 col-md-3 float-right">'+
			'<a class="btn btn-default" data-toggle="tab" title="Grid view"><i class="fa fa-th-large"></i></a>'+
			'<a class="btn btn-default" data-toggle="tab" title="List view"><i class="fa fa-th-list"></i></a>'+
			'<a class="btn btn-default" data-toggle="tab" title="Refresh"><i class="fa fa-refresh"></i></a>'+
		'</div>'+
		'</div>');					
		$(".bulk-action").html('<div data-value="bulk" class="filter-dropdown">'+
			'<a href="#" class="dropdown-toggle" data-toggle="dropdown">'+
			'<span class="filter-key" id="action-bulk">Bulk Action</span>'+
			'<span class="caret"></span></a>'+
			'<ul class="dropdown-menu filter-key-values">'+
				'<li><a href="#" data-text="Bulk Action">Cancel</a></li>'+
				'<li><a href="#" data-text="Change Status">Change Status</a></li>'+
				'<li><a href="#" data-text="Update Attribute">Update Attribute</a></li>'+
				'<li><a href="#" data-text="Delete">Delete</a></li>'+
			'</ul><a href="#" class="btn btn-success bulk-submit"><i class="fa fa-chevron-circle-right"></i> Submit</a>'+
		'</div>');
	}
	
	/* DEMO for DatePicker */
	$('.date-time').datetimepicker({
		/* language:  'fr', */
		autoclose: 1,
		todayBtn:  1,
		todayHighlight: 1,
		startView: 2,
		minView: 'month',
		forceParse: 0,
		showMeridian: 1,
		pickerPosition: "top-left",
	});
	
	/* DEMO for Product Add Page Attribute */
	$('#attrib-input2').typeahead({
		source:['Size','Color']
	});	
	$(document).on('click','#add-attribute-btn2',function(){
		if($('#attrib-input2').val()=='Size'){
			$('.ui-widget').append('<div class="form-group">'+
			'<select class="form-control attrib-select" style="width: 180px;">'+
				'<option>Small</option>'+
				'<option>Medium</option>'+
				'<option>Large</option>'+
				'<option>Extra Large</option>'+
			'</select>&nbsp;'+
			'<a class="btn btn-success select-attribute" id="select-attribute-btn2" title="Select Attribute"><i class="fa fa-check" style="padding-right:10px;"></i>'+
			'Add Attribute'+
			'</a></div>');									
		}								
	});	
	$(".form-group").on('click','#select-attribute-btn',function(){
		$(".attribute-area").append('<span class="attr-val"><span class="ab-attr">'+$('.attrib-select option:selected').val()+'</span>'+
		'<i class="delete fa fa-times"></i></span>');
	});	
	$(".form-group").on('click','#select-attribute-btn2',function(){
		$(".attribute-area").append('<span class="attr-val"><span class="ab-attr">'+$('.attrib-select option:selected').val()+'</span>'+
		'<i class="delete fa fa-times"></i></span>');
	});
	
	/* ### DEMO for Add Text - Product Page Add ### */
	
	/* Add Text Field */
	$('#select-text-type-option').on('change',function(){
		var textFieldSelectName = $('#select-text-type-option option:selected').val();
		if(textFieldSelectName !=0) {
			var textType = $('#select-text-type-option option:selected').data('text-type');
			$('.select-text-field').html('<label for="Text Name">Text Field Type: </label><input class="form-control" value="'+textType+'" id="select-text-select-type-val" type="text" disabled>');
		}
	});
	
	/* Create New Text Field Toggle */
	$('.create-text-field').hide();
	$('.create-new-text-field-toggle').on('click',function(){
		$('.create-text-field').show();
	});
	
	/* Create New Text Field Type */
	$(document).on('click','.create-text-field-type',function(){
		$('.create-text-field').hide();
		var textFieldName = $('#text-field-name').val();
		var textFieldCode = $('#text-field-code').val();
		var textSelectType = $('#text-select-type option:selected').text();
		/* DEMO Options */
		if(textSelectType == 'Short Text'){
			var textTypeVal = '<input class="form-control" id="'+textFieldCode+'-val" type="text">';
		} else if(textSelectType == 'Long Text'){
			var textTypeVal = '<textarea rows="5" class="form-control" id="'+textFieldCode+'-val"></textarea>';
		}
		$('.create-field-type-widget input').val('');
		$('.custom-field-type.active .custom-field-type-area').append('<div id="area-'+textFieldCode+'">'+
			'<div class="form-group">'+
				'<h4><a><i class="delete fa fa-times"></i></a> '+textFieldName+'</h4>'+
				'<text type="hidden" id="code-'+textFieldCode+'" value="'+textFieldCode+'">'+
				textTypeVal+
			'</div>'+
		'</div>');
	});
	
	/* Add Selected Text Field Type*/
	$(document).on('click','.select-text-field-type',function(){
		$('.create-text-field').hide();
		var textFieldName = $('#select-text-type-option option:selected').text();
		var textFieldCode = $('#select-text-type-option option:selected').val();
		var textSelectType = $('#select-text-type-option option:selected').data('text-type');
		/* DEMO Options */
		if(textSelectType == 'Short Text'){
			var textTypeVal = '<input class="form-control" id="'+textFieldCode+'-val" type="text">';
		} else if(textSelectType == 'Long Text'){
			var textTypeVal = '<textarea rows="5" class="form-control" id="'+textFieldCode+'-val"></textarea>';
		}
		$('.create-field-type-widget input').val('');
		$('.custom-field-type.active .custom-field-type-area').append('<div id="area-'+textFieldCode+'">'+
			'<div class="form-group">'+
				'<h4><a><i class="delete fa fa-times"></i></a> '+textFieldName+'</h4>'+
				'<text type="hidden" id="code-'+textFieldCode+'" value="'+textFieldCode+'">'+
				textTypeVal+
			'</div>'+
		'</div>');
	});
	
	/* DEMO for Product Add Page Attribute */
	$('#attrib-input').typeahead({
		source:['Size','Color','Genre','Cut']
	});
	$(document).on('click','#add-attribute-btn',function(){
		if($('#attrib-input').val()!=''){
			$(".attribute-area").append('<span class="attr-val"><span class="ab-attr">'+$('#attrib-input').val()+'</span>'+
			'<i class="delete fa fa-times"></i></span>');
		}	
	});
	
	/* Delete Text Field */
	$(document).on("click",".form-group .delete", function(){
		$(this).parent().parent().parent().remove();
	});
	
	/* Delete Attribute Value */
	$(document).on("click",".delete", function(){
		$(this).parent().remove();
	});
	
    /* DEMO for deleting */
    $(document).on("click",".me-action-button-cont .fa-times, .me-file-cont .fa-times-circle, .attribute-row .fa-times, .text-heading .fa-times", function(){
    	$(this).parent().fadeOut(500, function(){
    		$(this).remove();
    	});
    });
	
    /* DEMO for deleting product image */
    $(".delete-p-image").on("click", function(){    	
    	var elemToRemove = $(this).parents('.a');
    	$(".portfolioContainer").isotope( 'remove', elemToRemove ).isotope('layout');
    });
	
	/* DEMO for check all button */
	$(".check-all").on("click",function(){		
		if($(this).attr("checked")=="checked"){
			$(".checkbox-custom i").addClass("checked");
			$(".check-product").attr("checked","checked");
		} else {
			$(".checkbox-custom i").removeClass("checked");
			$(".check-product").removeAttr("checked");	
		}		 	
	});    
    // INPUT CHAR COUNTER IN SEO TAB
	$body.on("keyup keydown", "form[name='pageseo'] input[name='pseo_meta_title']", { limit: 65}, charCounter);
	$body.on("keyup keydown", "form[name='pageseo'] input[name='pseo_meta_desc']", { limit: 65}, charCounter);
	function charCounter(event){
	
		var charLength = $(this).val().length;
		var prevLabel = $(this).prev('label');
		var limit = event.data.limit;
		
		if( prevLabel.find('span').length ){
			
			if(charLength === 0){
				prevLabel.find('span').remove();
			}
			else{
				prevLabel.find('span').html('<i class="fa fa-text-width"></i>(' + charLength + ')');
				
				if( charLength > limit ){
					prevLabel.find('span').addClass('limit');
				}
				else{
					prevLabel.find('span').removeClass('limit');
				}	
			}
		}
		else{
			if(charLength !== 0){
				prevLabel.append("<span class='text-counter-indicator'><i class='fa fa-text-width'></i>(" + charLength + ")</span>");
			}
		}
	}
	
	/* Timestamp JS */
	/**
	* Return a timestamp with the format "m/d/yy h:MM:ss TT"
	* @type {Date}
	*/
	
	function timeStamp() {
	// Create a date object with the current time
		var now = new Date();
		var d = new Date();
		var month = new Array();
		month[0] = "Jan";
		month[1] = "Feb";
		month[2] = "Mar";
		month[3] = "Apr";
		month[4] = "May";
		month[5] = "Jun";
		month[6] = "Jul";
		month[7] = "Aug";
		month[8] = "Sep";
		month[9] = "Oct";
		month[10] = "Nov";
		month[11] = "Dec";
		var n = month[d.getMonth()];
	// Create an array with the current month, day and time
		var date = n +' '+ now.getDate() +', '+ now.getFullYear();
	// Create an array with the current hour, minute and second
		var time = [ now.getHours(), now.getMinutes(), now.getSeconds() ];
	// Determine AM or PM suffix based on the hour
		var suffix = ( time[0] < 12 ) ? "AM" : "PM";
	// Convert hour from military time
		time[0] = ( time[0] < 12 ) ? time[0] : time[0] - 12;
	// If hour is 0, set it to 12
		time[0] = time[0] || 12;
	// If seconds and minutes are less than 10, add a zero
		for ( var i = 1; i < 3; i++ ) {
			if ( time[i] < 10 ) {
				time[i] = "0" + time[i];
			}
		}
	// Return the formatted string
	  return date + " " + time.join(":") + " " + suffix;
	}
	
	/* ---=[ ORDERS FUNCTIONALITIES ]=--- */
	
	
	
	/* ---=[ CLIENTS FUNCTIONALITIES ]=--- */
	/* Add Client Address */
	$('.add-client-address').hide();
	$('.client-add-address-btn').on('click',function(){
		$('.add-client-address').show();
	});
	
		
	/* Save Client Address */	
	$('.client-save-address-btn').on('click',function(){
		$('.add-client-address').hide();
		$('.add-client-address input').val('');
		$('.add-client-address input[type="checkbox"]').removeAttr('checked');
	});
	
	/* Client Order Table */
	if($("#client-order-table").length > 0){
		$('#client-order-table').DataTable({
			"order": [[ 1, "asc" ]],
			"responsive": true,
			"searching": true,
			"columns": [
				{"orderable": false},
				null,
				{"orderable": false},
				{"orderable": false},
				{"orderable": false},
				{"orderable": false},
				{"orderable": false},
			],			
			"columnDefs": [
				{ "responsivePriority": 1, "targets": 0 },
				{ "responsivePriority": 2, "targets": 1 }
			],
			"language" : {
				"lengthMenu": "Show _MENU_"
			}, 
			"lengthMenu": [ [10, 25, 50, 100, -1], [10, 25, 50, 100, "All"] ],
			"dom": '<"bulk-action">lf<"filter-bar">rtip',
			"drawCallback": function( settings ) {
				$(this).css('width','100%');
			}
		});
		$(".filter-bar").html('<div class="row">'+
		'<div class="fb-right col-xs-6 col-md-3 float-right">'+
			'<a class="btn btn-default" data-toggle="tab" title="Grid view"><i class="fa fa-th-large"></i></a>'+
			'<a class="btn btn-default" data-toggle="tab" title="List view"><i class="fa fa-th-list"></i></a>'+
			'<a class="btn btn-default" data-toggle="tab" title="Refresh"><i class="fa fa-refresh"></i></a>'+
		'</div>'+
		'</div>');
	}
	
    /* ---=[ ATTRIBUTE FUNCTIONALITIES ]=--- */
	/* Attribute Value Table */
	if($("#attr-value-table").length > 0){
		$('#attr-value-table').DataTable({
			"order": [[ 1, "asc" ]],
			"responsive": true,
			"searching": true,
			"columns": [
				{"orderable": false},
				null,
				null,
				{"orderable": false}
			],			
			"columnDefs": [
				{ "responsivePriority": 1, "targets": 2 },
				{ "responsivePriority": 2, "targets": 0 },
				{ "responsivePriority": 3, "targets": -1 }
			],
			"language" : {
				"lengthMenu": "Show _MENU_"
			}, 
			"lengthMenu": [ [10, 25, 50, 100, -1], [10, 25, 50, 100, "All"] ],
			"dom": '<"bulk-action">lf<"filter-bar">rtip',
			"drawCallback": function( settings ) {
				$(this).css('width','100%');
			}
		});
		$(".filter-bar").html('<div class="row">'+
		'<div class="fb-right col-xs-6 col-md-3 float-right">'+
			'<a class="btn btn-default" data-toggle="tab" title="Grid view"><i class="fa fa-th-large"></i></a>'+
			'<a class="btn btn-default" data-toggle="tab" title="List view"><i class="fa fa-th-list"></i></a>'+
			'<a class="btn btn-default" data-toggle="tab" title="Refresh"><i class="fa fa-refresh"></i></a>'+
		'</div>'+
		'</div>');					
		$(".bulk-action").html('<div data-value="bulk" class="filter-dropdown">'+
			'<a href="#" class="dropdown-toggle" data-toggle="dropdown">'+
			'<span class="filter-key" id="action-bulk">Bulk Action</span>'+
			'<span class="caret"></span></a>'+
			'<ul class="dropdown-menu filter-key-values">'+
				'<li><a href="#" data-text="Bulk Action">Cancel</a></li>'+
				'<li><a href="#" data-text="Delete">Delete</a></li>'+
			'</ul><a href="#" class="btn btn-success bulk-submit"><i class="fa fa-chevron-circle-right"></i> Submit</a>'+
		'</div>');
	}	
	
	/* Attribute Table */
	if($("#attribute-table").length > 0){
		$('#attribute-table').DataTable({
			"order": [[ 1, "asc" ]],
			"responsive": true,
			"searching": true,
			"columns": [
				{"orderable": false},
				null,
				null,
				{"orderable": false},
				{"orderable": false},
				{"orderable": false}
			],			
			"columnDefs": [
				{ "responsivePriority": 1, "targets": 0 },
				{ "responsivePriority": 2, "targets": 2 },
				{ "responsivePriority": 3, "targets": -1 }
			],
			"language" : {
				"lengthMenu": "Show _MENU_"
			}, 
			"lengthMenu": [ [10, 25, 50, 100, -1], [10, 25, 50, 100, "All"] ],
			"dom": '<"bulk-action">lf<"filter-bar">rtip',
			"drawCallback": function( settings ) {
				$(this).css('width','100%');
			}
		});
		$(".filter-bar").html('<div class="row">'+
		'<div class="fb-right col-xs-6 col-md-3 float-right">'+
			'<a class="btn btn-default" data-toggle="tab" title="Grid view"><i class="fa fa-th-large"></i></a>'+
			'<a class="btn btn-default" data-toggle="tab" title="List view"><i class="fa fa-th-list"></i></a>'+
			'<a class="btn btn-default" data-toggle="tab" title="Refresh"><i class="fa fa-refresh"></i></a>'+
		'</div>'+
		'</div>');					
		$(".bulk-action").html('<div data-value="bulk" class="filter-dropdown">'+
			'<a href="#" class="dropdown-toggle" data-toggle="dropdown">'+
			'<span class="filter-key" id="action-bulk">Bulk Action</span>'+
			'<span class="caret"></span></a>'+
			'<ul class="dropdown-menu filter-key-values">'+
				'<li><a href="#" data-text="Bulk Action">Cancel</a></li>'+
				'<li><a href="#" data-text="Delete">Delete</a></li>'+
			'</ul><a href="#" class="btn btn-success bulk-submit"><i class="fa fa-chevron-circle-right"></i> Submit</a>'+
		'</div>');
	}	
	
    // show|hide add attribute section
    $("#me-new-attribute").on("click", function(){
    	$("#addAttributeCont").slideToggle(500);
    });
    
    // add new language to attribute
    $(".add-language-attribute").on("click", function(){
    	var clone = $(this).parent('li').clone();
    	clone.find('span').removeClass().addClass('remove-language-attribute fa fa-times'); // remove the span
    	clone.appendTo( $(this).parents('ul') );
    });
    
    // remove new language created
    $("body").on("click", '.remove-language-attribute', function(){
    	$(this).parent('li').fadeOut(300, function(){
    		$(this).remove();
    	});
    });
	
	/* Add Attribute Value */
	$('.add-client-address').hide();
	$('.client-add-address-btn').on('click',function(){
		$('.add-client-address').show();
	});
});