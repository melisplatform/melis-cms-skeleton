/**
 * $(".cbmask-inner").addClass("cb-active");
$("#frmSelModules").find("input[type='checkbox']").attr("checked", "checked");
 * @param $
 */
(function($) {

		var $body = $("body");
		var isDbTested = false;
		
		
		// ---=[ OWL SLIDER ]=---
		// owl slider [slide] event
		var $owl = $('.owl-carousel').owlCarousel({
		    items: 1,
		    touchDrag: false,
		    mouseDrag: false,
		    dotsSpeed: 500,
		    navSpeed: 500,
		    dots: false,
		    //startPosition: 8,
		    // nav: true,
		}); 
		
		// FIRE EVENT AFTER SLIDER HAS FINISHED SLIDING
		$owl.on('changed.owl.carousel', function(event) {
			var slideNumber = event.item.index + 1
			
			// remove active class of the sidebar
		    $(".sidebar .sidebarMenuWrapper > ul > li").removeClass("active");
		    
		    // add active class to the mirrored sidebar hadle
		    $(".sidebar .sidebarMenuWrapper > ul > li:nth-child(" + slideNumber + ")").addClass("active");
		    
			// disable Next Button on Database Connection, making sure that we test it before leaving
			$("#dbNext").removeClass("setup-pass-page btn btn-success");
			$("#dbNext").addClass("btn btn-default");
		});
		
		
		
		// ENABLE / DISABLED MODULE CHECKBOXES
	    var modules = $("#frmSelModules input[type='checkbox']");
	    $.each( modules, function( key, value ) {
	           if( $(this).is(":checked") ){
	        	   $(this).prev().find(".cbmask-inner").addClass("cb-active");
	           }
	    });
	    
		// module checkbox mask
	    $('body').on("click", ".cb-cont input[type=checkbox]", function(){
	    	$(this).prev().find(".cbmask-inner").toggleClass("cb-active");
	    });
	    
	   
		
		
		// ---=[ SIDEBAR ]=---
		// sidebar menu click
		$body.on("click", '.setup-sidebar .sidebarMenuWrapper > ul > li', function(){
			if( $(this).hasClass("slide-active") ){
				var menuIndex = $(this).index();
				$owl.trigger('to.owl.carousel', [menuIndex, 500]);
			}
		});
		
		// ---=[ NEXT BUTTON CLICKS - EVENTS ]=---
		$body.on("click", ".setup-pass-page", function(){
			var currentPageButton = $(this).parents(".owl-item");
			var currentPage = $(".owl-carousel .owl-stage .owl-item").index(currentPageButton) + 1;
			
			// add class to sidebar button to activate and make it slidable
			$(".setup-sidebar .sidebarMenuWrapper > ul > li:nth-child("+ (currentPage + 1) +")").addClass("slide-active");

			// disable Next Button on Database Connection, making sure that we test it before leaving
			$("#dbNext").removeClass("setup-pass-page btn btn-success");
			$("#dbNext").addClass("btn btn-default");
			
			// proceed to next slide
			if(currentPage === 2) {
				// System Configuration
				$.get('/melis/MelisInstaller/Installer/checkSysConfig', function(data) {
					if(!data.success) {
						console.log(data);
					}
					else 
						$owl.trigger('to.owl.carousel', [currentPage, 500]);
				});
			}
			else if(currentPage === 3) {
				// vhost rechecking
				$.get('/melis/MelisInstaller/Installer/checkVhostSetup', function(data) {
					if(!data.success) {
						console.log(data);
					}
					else
						$owl.trigger('to.owl.carousel', [currentPage, 500]);
				});
			}
			else if(currentPage === 4) {
				// File System Rights Rechecking
				$.get('/melis/MelisInstaller/Installer/checkFileSystemRights', function(data) {
					if(!data.success) {
						console.log(data);
					}
					else
						$owl.trigger('to.owl.carousel', [currentPage, 500]);
				});
				
			}
			else if(currentPage === 5) {
				addEnvironments();
			}
			else if(currentPage === 6) {
				$(".dbNext").removeClass("setup-pass-page");
				$owl.trigger('to.owl.carousel', [currentPage, 500]);
			}
			else if(currentPage === 7) {
				processSelectedModules();
			}
			else if(currentPage === 8) {
				addNewUser();
			}
			else {
				$owl.trigger('to.owl.carousel', [currentPage, 500]);
			}
			
			
			// change circle icon in sidebar to green check icon
			$(".setup-sidebar .sidebarMenuWrapper > ul > li:nth-child("+ currentPage +")").find("i").removeClass().addClass("fa fa-check fa-color-green");
			$(".setup-sidebar .sidebarMenuWrapper > ul > li:nth-child("+ currentPage +")").find("span").css("color","#fff");
		});
		
		// ---=[ SETUP PAGE 1 - STEP 1.3 ]=---
		$body.on("click", ".setup-error-btn", function(){
			$(this).next(".setup-error-info").slideToggle();
		});
		
		// add new fields for add new environment
		$body.on("click", ".add-environment:not('.show-add-environment')", function(){
			var counter = $(".add-environment-container > div").length + 1;
			var environmentInputs = '<div class="environment-cont entry"><div class="form-group"><label>Environment Name</label><a class="btn btn-danger">remove</a><input type="text" class="form-control"  placeholder="Environment name" name="environment_name_'+ counter +'" required></div><div class="form-group"><label>Back Office Domain</label><input type="url" class="form-control"  placeholder="Enter back office domain link" name="domain_'+ counter +'" required></div></div>';
			$(environmentInputs).appendTo( $(this).next(".add-environment-container") );
		});
		
		// remove added environment fields
		$body.on("click", ".add-environment-container .environment-cont a.btn-danger", function(){
			var obj = $(this);
			var objParent = $(this).parents(".environment-cont");
			var env = $(this).parents(".environment-cont").find("input[type='text']").val();
			var url = $(this).parents(".environment-cont").find("input[type='url']").val();
			var dataString = [];
			dataString.push({
				name: 'env',
				value: env
			})
			dataString.push({
				name: 'url', 
				value: url
			});
			dataString = $.param(dataString);
			if(url != "") {
				$.ajax({
			        type        : 'POST', 
			        url         : '/melis/MelisInstaller/Installer/deleteEnvironment',
			        data		: dataString,
			        dataType    : 'json',
			        encode		: true,
			        success		: function(data){
	        			if(data.success === 1) {
	        				objParent.fadeOut(300, function(){
	        					$(this).remove();
	        		    	});
	        			}
	        			else {
	        				alert('There was an error upon deleting an existing site domain');
	        			}

			        }	
			    });
			}
			else {
				$(this).parents(".environment-cont").fadeOut(300, function(){
					$(this).remove();
		    	});
			}

		});
		
		
		// ---=[ SETUP PAGE 2 ]=---
		// test database connection
		$body.on("click", "#test-db-connection", function(){
			var obj = $(this);
			var host = $(this).parents(".setup-content").find("input[name='host']").val();
			var database = $(this).parents(".setup-content").find("input[name='database']").val();
			
			var dataString = [];
			dataString.push({
				name: 'hostname',
				value: host,
			});
			dataString.push({
				name: 'database',
				value: database
			});
			dataString.push({
				name: 'username',
				value: $(this).parents(".setup-content").find("input[name='user']").val()
			});
			dataString.push({
				name: 'password',
				value: $(this).parents(".setup-content").find("input[name='password']").val()
			});
			
			$(".setup-modal-overlay, .setup-final-modal").fadeIn(300);			
			$(".finish-text").hide();
			$(".testing-db-text").show();
			
			// color grey the input fields
			obj.parents(".setup-p2").find("#database-connection-form").find("label").css("color","#333");
			
			$.ajax({
			    url         : '/melis/MelisInstaller/Installer/testDatabaseConnection',
			    data        : dataString,
			    type		: "POST",
			    encode		: true
			}).success(function(data){
				
				$(".setup-modal-overlay, .setup-final-modal").fadeOut(300);
				
				// Success DB connection
				if(data.success === 1) {
					obj.parents(".setup-p2").find("#dbNext").removeClass("btn-default").addClass("btn-success setup-pass-page");
					isDbTested = true;
				}
				// Error DB connection
				else {
					obj.parents(".setup-p2").find("#dbNext").removeClass("btn-success setup-pass-page").addClass("btn-default");
					melisHelper.melisKoNotification(translations.tr_melis_installer_layout_dbcon_promp_title , translations.tr_melis_installer_layout_dbcon_promp_content, data.errors, 'closeByButtonOnly');
					
					if ('Host' in data.errors){
						// HOST ERROR - color red the input fields
						obj.parents(".setup-p2").find("#database-connection-form").find("input[name='host']").prev("label").css("color","red");
					}
					else{
						// DB-USER-PASSWORD ERROR - color red the input fields
						obj.parents(".setup-p2").find("#database-connection-form").find("input[name='database'], input[name='user'], input[name='password']").prev("label").css("color","red");
					}
					
				}
				
			}).error(function(xhr, textStatus, errorThrown){
				melisHelper.melisKoNotification(translations.tr_melis_installer_layout_dbcon_promp_title , translations.tr_melis_installer_layout_dbcon_promp_content, textStatus, 'closeByButtonOnly');
			});
			
		 	
				
		});
		
		// ---=[ FINISH PAGE - GATHER ALL DATA ]=---
		// test database connection
		$body.on("click", ".setup-creation .setup-pass-page.finish", function(){
			
			var myform = $('form');
			myform.find(':input:disabled').removeAttr('disabled');
			
			var serialized = myform.serialize();
	
			console.log(JSON.stringify(serialized, null, 4));
				
		});
		
		function ajaxRequest(url, dataString, callBack) {
			$.ajax({
				type: 'POST',
				url : url,
				data: dataString,
				dataType : 'json',
				encode: true,
				success: function(data) {
					callBack(data);
				}
			});
		}
		
		function addEnvironments() {
			var dataString = $("#environment-form").serialize();
			ajaxRequest('/melis/MelisInstaller/Installer/newEnvironment', dataString, function(data) {
    			if(data.success) {
    				$owl.trigger('to.owl.carousel', [5, 500]);
    			}
    			else {
    				alert("please review your entry");
    			}
			});
		}
		
		function addNewUser()
		{
			$(".setup-pass-page").attr("disabled", "disabled");
			$(".setup-pass-page").removeClass("btn-success");
			$(".setup-pass-page").addClass("btn-default");
			var dataString = $("#idfrmuserdata").serialize();
			ajaxRequest('/melis/MelisInstaller/Installer/createNewUser', dataString, function(data) {
				if(data.success === 1) {
					var langDataString = $("#idfrmweblang").serialize();
					ajaxRequest('/melis/MelisInstaller/Installer/setWebsiteLanguage', langDataString, function(langData) {
						if(langData.success === 1) {
							var webFormDataString = $("#idfrmwebform").serialize();
							ajaxRequest('/melis/MelisInstaller/Installer/setWebDetails', webFormDataString, function(webFormData) {
								if(webFormData.success === 1) {
									$owl.trigger('to.owl.carousel', [8, 500]);
								}  
								else {
									melisHelper.melisKoNotification(translations.tr_melis_installer_platform_modal_title , translations.tr_melis_installer_patform_modal_content, webFormData.errors, 'closeByButtonOnly');
									melisCoreTool.highlightErrors(webFormData.success, webFormData.errors, "idfrmwebform");
								}
							});
						}
						else {
							melisHelper.melisKoNotification(translations.tr_melis_installer_platform_modal_title , translations.tr_melis_installer_patform_modal_content, langData.errors, 'closeByButtonOnly');
							melisCoreTool.highlightErrors(langData.success, langData.errors, "idfrmweblang");
						}
					});
				}
				else {
					melisHelper.melisKoNotification(translations.tr_melis_installer_platform_modal_title , translations.tr_melis_installer_patform_modal_content, data.errors, 'closeByButtonOnly');
					melisCoreTool.highlightErrors(data.success, data.errors, "idfrmuserdata");
				}
				$(".setup-pass-page").removeAttr("disabled");
				$(".setup-pass-page").removeClass("btn-default");
				$(".setup-pass-page").addClass("btn-success");
			});

				
		}
		
		function processSelectedModules()
		{
			var dataString = $("#frmSelModules").serializeArray();
			var modDataString = [];
			if(dataString !== null) {
				$.each(dataString, function(i,v) {
					modDataString.push({
						name: v.name,
						value: v.value
					});
				});
			}
			modDataString.push({
				name: "_default",
				value: "default"
			});

			modDataString = $.param(modDataString);
			ajaxRequest('/melis/MelisInstaller/Installer/addInstallableModules', modDataString, function(data) {
				$owl.trigger('to.owl.carousel', [7, 500]);
			});
 
		}
		

		
		// show modal spinner after you click the finish button
		$("body").on("click", ".setup-finish", function(){
			if(isDbTested) {

				
				$(".setup-finish").attr("disabled", "disabled");
				$(".setup-finish").removeClass("btn-success");
				$(".setup-finish").addClass("btn-default");
				$(".setup-finish").html(translations.tr_melis_installer_common_installing);
				
				$.get('/melis/MelisInstaller/Installer/completeInstallation', function(data) {
					if(data.success === 1) {
						$.get('/melis/MelisInstaller/Installer/finalizeSetup', function(data) {
							if(data.success === 1){
								$(".setup-modal-overlay, .setup-final-modal").fadeIn(300);
								$(".finish-text").show();
								$(".testing-db-text").hide();
								$.get('/melis/MelisInstaller/Installer/installDatabaseData', function(data) {
									setTimeout(function() {
										location.href = "/melis";
									}, 3000);
								});
							}
							else {
								alert(translations.tr_melis_installer_common_finish_error);
							}
						});
						
					}
					else {
						alert(translations.tr_melis_installer_common_finish_error);
					}
				});
			}
			else {
				$owl.trigger('to.owl.carousel', [5, 500]);
			}

			
		});
		
		$("body").on("click", "#chkSelectAllModules", function() {
			if($(this).is(':checked')) {
				$("#frmSelModules").find("input[type='checkbox']").attr("checked", "checked");
				$("#frmSelModules").find(".cbmask-inner").addClass('cb-active');
			}
			else {
				$("#frmSelModules").find("input[type='checkbox']").removeAttr("checked", "checked");
				$("#frmSelModules").find(".cbmask-inner").removeClass('cb-active');
			}

		});
		

		
})(jQuery);
function changeSetupLanguage(locale) {
    var datastring = { langLocale: locale };
    console.log(locale);
    $.ajax({
        type        : 'POST', 
        url         : '/melis/MelisInstaller/Installer/changeLang',
        data        : datastring,
        dataType    : 'json',
        encode      : true
    }).success(function(data){
        if (data.success){
        	location.reload();
        }
        console.log(data);
    });
	
}