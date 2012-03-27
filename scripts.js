$(document).ready(function () {
	$('.email-article').on('click',function(){
		mailtoLink = "mailto:someone%40somewhere.com?subject=subject&body=body";
	});

	//alter process page
	var $processList = $('.process_list');
	$processList.addClass('enhanced');
	var $processTOC = $('.process_toc');
	$processTOC.addClass('enhanced');
	$processTOC.find('a').click(function(event){
		event.preventDefault();
		if(!($(this).closest('li').hasClass('current_process'))) {
			$processTOC.find('li').removeClass('current_process');
			$(this).closest('li').addClass('current_process');
			$('.process_list_item').slideUp();
			$($(this).attr('href')).slideDown();
		}
	});
	$processTOC.find('li').first().addClass('current_process');

	//put numbers in ordered list as spans
	$processTOC.find("li").each(function(i, n) {
	    $(this).find('a').prepend("<span>" + (i+1) + ". </span> ");
	});

	//alter portfolio page thumbnail hover
	var $thumbContainer = $('.portfolio-list-thumb');
	$thumbContainer.removeClass('no-js');
	$thumbContainer.find('span').addClass('overlayCaption');
	$('<div></div>')
		.addClass('overlayCaptionTriangle')
		.appendTo($thumbContainer.find('span'));
	$('<div></div>')
		.addClass('overlayCaptionTriangleInner')
		.appendTo($thumbContainer.find('.overlayCaptionTriangle'));

	$thumbContainer.hover(function(){
		$(this).find('span')
			.stop()
			.show()
			.animate({
				top: '-100px',
				opacity: '1.0'
			}, 300);
	},function() {
		$thumbContainer.find('.overlayCaption')
			.stop().animate({
				top: '-70px',
				opacity: '0'
			}, 300, function(){
				$(this).hide();
			});
	});


	// redesign admin link
	$('.link-admin-anchor').hide();

	var $linkAdmin = $('.link-admin');
	$linkAdmin.addClass('tabified');
	$('<span></span>', {
		text: '+'
	}).addClass('activator').appendTo($linkAdmin);
	
	$linkAdminActivator = $linkAdmin.find('.activator');
	$linkAdminForm = $linkAdmin.find('.login-form');
	$linkAdminForm.show();
	var theHeight = $linkAdminForm.css('height');
	$linkAdminForm.height('0');

	$linkAdminActivator.on('click',function(){
		if($linkAdminForm.height() == 0) {
 			$linkAdminForm.animate({
 				height: theHeight
 			});
 			$linkAdminActivator.text('-');
		} else {
 			$linkAdminForm.animate({
 				height: '0px'
 			});
 			$linkAdminActivator.text('+');
		}
	});

	//simple fadin home page
	$('').hide(0, function() {
		$(this).fadeIn(2000);
	});

	//float menu with page
	theMenu = $('.header-nav');
	var top = theMenu.offset().top - parseFloat(theMenu.css('marginTop').replace(/auto/, 0));
	$(window).scroll(function (event) {
		// what the y position of the scroll is
		var y = $(this).scrollTop();
		// whether that's below the form
		if (y >= top) {
		  // if so, ad the fixed class
		  theMenu.addClass('fixed');
		} else {
		  // otherwise remove it
		  theMenu.removeClass('fixed');
		}
	});

	//init the fancybox on the home page
	var fancyboxThumb = $('.fancybox-thumb');
	
	//create behavior for thumbnails on home page
	fancyboxThumb.each(function() {
		var $this 		= $(this),
			theTitle 	= $this.attr('title'),
			theImage 	= $this.find('img').attr('src');

		$this.parent().css({
			'background' : 'url(' + theImage + ') no-repeat',
			'background-size' : '100%',
			'background-position' : 'center center'
		}).find('img').remove();

		$('<div></div>', {
			text: theTitle
		}).addClass('thumbHover')
			.prependTo($(this));
	})
		.closest('li').hover(function() {
			var $theLi = $(this).filter(':not(:animated)');
			$theLi.find('.thumbHover')
				.filter(':not(:animated)').fadeIn();
			//$theLi.filter(':not(:animated)').animate({ 'background-size' : '125%' });
			$theLi.animate({ 
				'background-size' : '3000%'
			});
		}, function() {
			$(this).find('.thumbHover').fadeOut();
			$(this).animate({ 'background-size' : '100%' });
	});
	

	var fancyboxArgs = {
		padding : '0',
		overlayColor : '#000',
		overlayOpacity : '0.3',
		transitionIn : 'elastic',
		transitionOut : 'elastic',
		prevEffect : 'elastic',
		nextEffect : 'elastic',
		closeBtn : true,
		arrows : true,
		nextClick : true,
		fixed : true,
		helpers : {
			thumbs : {
				width : 100,
				height : 100
			}
		}
	}


	fancyboxThumb.not('.more-work').fancybox(fancyboxArgs);

	$('.instagram-image a').fancybox(fancyboxArgs);

	$('.portfolio-list-item a').fancybox(fancyboxArgs);
	
	$('.post-img-large').fancybox(fancyboxArgs);
});

