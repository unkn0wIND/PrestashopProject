
function additionalCarousel(sliderId){
	/*======  curosol For Additional ==== */
	 var ctadditional = $(sliderId);
      ctadditional.owlCarousel({
     	 items : 3, //10 items above 1000px browser width
     	 itemsDesktop : [1199,3], 
     	 itemsDesktopSmall : [991,2], 
     	 itemsTablet: [480,1], 
     	 itemsMobile : [320,1] 
      });
      // Custom Navigation Events
      $(".additional_next").click(function(){
        ctadditional.trigger('owl.next');
      })
      $(".additional_prev").click(function(){
        ctadditional.trigger('owl.prev');
      });
}

$(document).ready(function(){
	
	bindGrid();
	additionalCarousel("#main #additional-carousel");
	
	var isMobile = /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent);
	if(!isMobile) {
		if($(".parallax").length){  $(".parallax").sitManParallex({  invert: false });};
	}else{
		$(".parallax").sitManParallex({  invert: true });
	}

	$('.cart_block .block_content').on('click', function (event) {
		event.stopPropagation();
	});

	
	// ---------------- start more menu setting ----------------------
	 if (jQuery(window).width() >=992){
			
		var max_elem = 5;	
		var items = $('.menu ul#top-menu > li');	
		var surplus = items.slice(max_elem, items.length);
		
		surplus.wrapAll('<li class="category more_menu" id="more_menu"><div id="top_moremenu" class="popover sub-menu js-sub-menu collapse"><ul class="top-menu more_sub_menu">');
	
		$('.menu ul#top-menu .more_menu').prepend('<a href="#" class="dropdown-item" data-depth="0"><span class="pull-xs-right hidden-md-up"><span data-target="#top_moremenu" data-toggle="collapse" class="navbar-toggler collapse-icons"><i class="material-icons add">&#xE313;</i><i class="material-icons remove">&#xE316;</i></span></span></span>+ de VINS</a>');
	
		$('.menu ul#top-menu .more_menu').mouseover(function(){
			$(this).children('div').css('display', 'block');
		})
		.mouseout(function(){
			$(this).children('div').css('display', 'none');
		});
	
	}
	else if((jQuery(window).width() >= 768) && (jQuery(window).width() < 991)) {
				var max_elem = 4;	
		var items = $('.menu ul#top-menu > li');	
		var surplus = items.slice(max_elem, items.length);
		
		surplus.wrapAll('<li class="category more_menu" id="more_menu"><div id="top_moremenu" class="popover sub-menu js-sub-menu collapse"><ul class="top-menu more_sub_menu">');
	
		$('.menu ul#top-menu .more_menu').prepend('<a href="#" class="dropdown-item" data-depth="0"><span class="pull-xs-right hidden-md-up"><span data-target="#top_moremenu" data-toggle="collapse" class="navbar-toggler collapse-icons"><i class="material-icons add">&#xE145;</i><i class="material-icons remove">&#xE15B;</i></span></span></span>More</a>');
	
		$('.menu ul#top-menu .more_menu').mouseover(function(){
			$(this).children('div').css('display', 'block');
		})
		.mouseout(function(){
			$(this).children('div').css('display', 'none');
		});

	}	
	// ---------------- end more menu setting ----------------------

});


// Add/Remove acttive class on menu active in responsive  
	$('#menu-icon').on('click', function() {
		$(this).toggleClass('active');
	});

// Loading image before flex slider load
	$(window).load(function() { 
		$(".loadingdiv").removeClass("spinner"); 
	});

// Flex slider load
	$(window).load(function() {
		if($('.flexslider').length > 0){ 
			$('.flexslider').flexslider({		
				slideshowSpeed: $('.flexslider').data('interval'),
				pauseOnHover: $('.flexslider').data('pause'),
				animation: "fade"
			});
		}
	});		

// Scroll page bottom to top
	$(window).scroll(function() {
		if ($(this).scrollTop() > 500) {
			$('.top_button').fadeIn(500);
		} else {
			$('.top_button').fadeOut(500);
		}
	});							
	$('.top_button').click(function(event) {
		event.preventDefault();		
		$('html, body').animate({scrollTop: 0}, 800);
	});

/*======  Carousel Slider For blog  ==== */
	
	var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        slidesPerView: 2,
        slidesPerColumn: 2,
        paginationClickable: true,
        spaceBetween: 30,
		nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev'
    });

/*======  Carousel Slider For Feature Product ==== */
	
	var ctfeature = $("#feature-carousel");
	ctfeature.owlCarousel({
		items : 4, //10 items above 1000px browser width
		itemsDesktop : [1199,3], 
		itemsDesktopSmall : [991,2],
		itemsTablet: [479,1], 
		itemsMobile : [320,1] 
	});
	// Custom Navigation Events
	$(".feature_next").click(function(){
		ctfeature.trigger('owl.next');
	})
	$(".feature_prev").click(function(){
		ctfeature.trigger('owl.prev');
	});



/*======  Carousel Slider For New Product ==== */
	
	var ctnewproduct = $("#newproduct-carousel");
	ctnewproduct.owlCarousel({
		items : 4, //10 items above 1000px browser width
		itemsDesktop : [1199,3], 
		itemsDesktopSmall : [991,2], 
		itemsTablet: [479,1], 
		itemsMobile : [320,1] 
	});
	// Custom Navigation Events
	$(".newproduct_next").click(function(){
		ctnewproduct.trigger('owl.next');
	})
	$(".newproduct_prev").click(function(){
		ctnewproduct.trigger('owl.prev');
	});



/*======  Carousel Slider For Bestseller Product ==== */
	
	var ctbestseller = $("#bestseller-carousel");
	ctbestseller.owlCarousel({
		items : 4, //10 items above 1000px browser width
		itemsDesktop : [1199,3], 
		itemsDesktopSmall : [991,2], 
		itemsTablet: [479,1], 
		itemsMobile : [320,1] 
	});
	// Custom Navigation Events
	$(".bestseller_next").click(function(){
		ctbestseller.trigger('owl.next');
	})
	$(".bestseller_prev").click(function(){
		ctbestseller.trigger('owl.prev');
	});



/*======  Carousel Slider For Special Product ==== */
	var ctspecial = $("#special-carousel");
	ctspecial.owlCarousel({
		items : 3, //10 items above 1000px browser width
		itemsDesktop : [1199,3], 
		itemsDesktopSmall : [991,1], 
		itemsTablet: [479,1], 
		itemsMobile : [320,1],
		center: true,
		afterAction: function(el){
		   //remove class active
		   this
		   .$owlItems
		   .removeClass('active')
		
		   //add class active
		   this
		   .$owlItems //owl internal $ object containing items
		   .eq(this.currentItem + 1)
		   .addClass('active')    
		} 
	});
	// Custom Navigation Events
	$(".special_next").click(function(){
		ctspecial.trigger('owl.next');
	})
	$(".special_prev").click(function(){
		ctspecial.trigger('owl.prev');
	});


/*======  Carousel Slider For Accessories Product ==== */

	var ctaccessories = $("#accessories-carousel");
	ctaccessories.owlCarousel({
		items : 4, //10 items above 1000px browser width
		itemsDesktop : [1199,3], 
		itemsDesktopSmall : [991,2], 
		itemsTablet: [479,1], 
		itemsMobile : [320,1] 
	});
	// Custom Navigation Events
	$(".accessories_next").click(function(){
		ctaccessories.trigger('owl.next');
	})
	$(".accessories_prev").click(function(){
		ctaccessories.trigger('owl.prev');
	});


/*======  Carousel Slider For Category Product ==== */

	var ctproductscategory = $("#productscategory-carousel");
	ctproductscategory.owlCarousel({
		items : 4, //10 items above 1000px browser width
		itemsDesktop : [1199,3], 
		itemsDesktopSmall : [991,2], 
		itemsTablet: [479,1], 
		itemsMobile : [320,1] 
	});
	// Custom Navigation Events
	$(".productscategory_next").click(function(){
		ctproductscategory.trigger('owl.next');
	})
	$(".productscategory_prev").click(function(){
		ctproductscategory.trigger('owl.prev');
	});


/*======  Carousel Slider For Viewed Product ==== */

	var ctviewed = $("#viewed-carousel");
	ctviewed.owlCarousel({
		items : 4, //10 items above 1000px browser width
		itemsDesktop : [1199,3], 
		itemsDesktopSmall : [991,2], 
		itemsTablet: [479,1], 
		itemsMobile : [320,1] 
	});
	// Custom Navigation Events
	$(".viewed_next").click(function(){
		ctviewed.trigger('owl.next');
	})
	$(".viewed_prev").click(function(){
		ctviewed.trigger('owl.prev');
	});

/*======  Carousel Slider For Crosssell Product ==== */

	var ctcrosssell = $("#crosssell-carousel");
	ctcrosssell.owlCarousel({
		items : 4, //10 items above 1000px browser width
		itemsDesktop : [1199,3], 
		itemsDesktopSmall : [991,2], 
		itemsTablet: [479,1], 
		itemsMobile : [320,1] 
	});
	// Custom Navigation Events
	$(".crosssell_next").click(function(){
		ctcrosssell.trigger('owl.next');
	})
	$(".crosssell_prev").click(function(){
		ctcrosssell.trigger('owl.prev');
	});

/*======  curosol For Manufacture ==== */
	 var ctbrand = $("#brand-carousel");
      ctbrand.owlCarousel({
     	 items : 5, //10 items above 1000px browser width
     	 itemsDesktop : [1229,4], 
     	 itemsDesktopSmall : [991,2],
     	 itemsTablet: [479,1], 
     	 itemsMobile : [320,1] 
      });
      // Custom Navigation Events
      $(".brand_next").click(function(){
        ctbrand.trigger('owl.next');
      })
      $(".brand_prev").click(function(){
        ctbrand.trigger('owl.prev');
      });
	  
/*======  Carousel Slider For categorylist ==== */

		var ctcat = $("#ctcategorylist-carousel");
		ctcat.owlCarousel({
			items : 5, //10 items above 1000px browser width
			itemsDesktop : [1229,4], 
			itemsDesktopSmall : [991,3], 
			itemsTablet: [767,2], 
			itemsMobile : [480,2] 
		});
		// Custom Navigation Events
		$(".cat_next").click(function(){
		ctcat.trigger('owl.next');
		})
		$(".cat_prev").click(function(){
		ctcat.trigger('owl.prev');
		});


/*======  Carousel Slider For For Tesimonial ==== */

	var cttestimonial = $("#testimonial-carousel");
	cttestimonial.owlCarousel({
		autoPlay: true,
		singleItem:true,
		dots: false

	});
	// Custom Navigation Events
      $(".testimonial_next").click(function(){
        cttestimonial.trigger('owl.next');
      })
      $(".testimonial_prev").click(function(){
        cttestimonial.trigger('owl.prev');
      });



function bindGrid()
{
	var view = $.totalStorage("display");

	if (view && view != 'grid')
		display(view);
	else
		$('.display').find('li#grid').addClass('selected');

	$(document).on('click', '#grid', function(e){
		e.preventDefault();
		display('grid');
	});

	$(document).on('click', '#list', function(e){
		e.preventDefault();
		display('list');		
	});	
}

function display(view)
{
	if (view == 'list')
	{
		$('#products ul.product_list').removeClass('grid').addClass('list row');
		$('#products .product_list > li').removeClass('col-xs-12 col-sm-6 col-md-4 col-lg-2').addClass('col-xs-12');
		
		
		$('#products .product_list > li').each(function(index, element) {
			var html = '';
			html = '<div class="product-miniature js-product-miniature" data-id-product="'+ $(element).find('.product-miniature').data('id-product') +'" data-id-product-attribute="'+ $(element).find('.product-miniature').data('id-product-attribute') +'" itemscope itemtype="http://schema.org/Product"><div class="row">';
				html += '<div class="thumbnail-container col-xs-4 col-xs-5 col-md-4">' + $(element).find('.thumbnail-container').html() + '</div>';
				
				html += '<div class="product-description center-block col-xs-4 col-xs-7 col-md-8">';
					html += '<h1 class="h3 product-title" itemprop="name">'+ $(element).find('h1').html() + '</h1>';
					
					var price = $(element).find('.product-price-and-shipping').html();       // check : catalog mode is enabled
					if (price != null) {
						html += '<div class="product-price-and-shipping">'+ price + '</div>';
					}
					
					html += '<div class="product-detail">'+ $(element).find('.product-detail').html() + '</div>';
					
					var colorList = $(element).find('.highlighted-informations').html();
					if (colorList != null) {
						html += '<div class="highlighted-informations">'+ colorList +'</div>';
					}
					html += '<div class="product-hover">'+ $(element).find('.product-hover').html() + '</div>';
					
					
				html += '</div>';
			html += '</div></div>';
		$(element).html(html);
		});
		$('.display').find('li#list').addClass('selected');
		$('.display').find('li#grid').removeAttr('class');
		$.totalStorage('display', 'list');
	}
	else
	{
		$('#products ul.product_list').removeClass('list').addClass('grid row');
		$('#products .product_list > li').removeClass('col-xs-12').addClass('col-xs-12 col-sm-6 col-md-4 col-lg-2');
		$('#products .product_list > li').each(function(index, element) {
		var html = '';
		html += '<div class="product-miniature js-product-miniature" data-id-product="'+ $(element).find('.product-miniature').data('id-product') +'" data-id-product-attribute="'+ $(element).find('.product-miniature').data('id-product-attribute') +'" itemscope itemtype="http://schema.org/Product">';
			html += '<div class="thumbnail-container">' + $(element).find('.thumbnail-container').html() +'</div>';
			
			html += '<div class="product-description">';
				
			
				var price = $(element).find('.product-price-and-shipping').html();       // check : catalog mode is enabled
				if (price != null) {
					html += '<div class="product-price-and-shipping">'+ price + '</div>';
				}

				html += '<h1 class="h3 product-title" itemprop="name">'+ $(element).find('h1').html() +'</h1>';
				
				html += '<div class="product-detail">'+ $(element).find('.product-detail').html() + '</div>';
				
				
				
				var colorList = $(element).find('.highlighted-informations').html();
				if (colorList != null) {
					html += '<div class="highlighted-informations">'+ colorList +'</div>';
				}
				html += '<div class="product-hover">'+ $(element).find('.product-hover').html() + '</div>';
				
			html += '</div>';
		html += '</div>';
		$(element).html(html);
		});
		$('.display').find('li#grid').addClass('selected');
		$('.display').find('li#list').removeAttr('class');
		$.totalStorage('display', 'grid');
	}
}


function responsivecolumn(){
	
	
				
		// ---------------- Fixed header responsive ----------------------
		$(window).bind('scroll', function () {
			if ($(window).scrollTop() > 0) {
				$('#header,.header-top').addClass('fixed');
			} else {
				$('#header,.header-top').removeClass('fixed');
			}
		});
	
	
	
	if ($(document).width() <= 991)
	{
		$('.container #columns_inner #left-column').appendTo('.container #columns_inner');
		
	}
	else if($(document).width() >= 992)
	{
		$('.container #columns_inner #left-column').prependTo('.container #columns_inner');
		
	}
}
$(document).ready(function(){responsivecolumn();});
$(window).resize(function(){responsivecolumn();});




function headertoggle() {		
		//$('#currencies-block-top').css('display','block');
		$('#header_links').css('display','block');
		//$('.language-selector-wrapper').css('display','block');
//language-selector-wrapper').appendTo('.user-info');
		//$('.currency-selector').appendTo('.user-info');
}
$(document).ready(function() {headertoggle();});
$(window).resize(function() {headertoggle();});

function searchtoggle() {
 		/*
	if($(window).width() > 0){
		$('#header .search_button').click(function(event){
			$(this).toggleClass('active');
			$('#header #search_widget').toggleClass('active');
			event.stopPropagation();
			$("#header .searchtoggle").show("slide", { direction: "left" }, 1000);
			$('#header .search-widget form input[type="text"]').focus();
		});
		
		$("#header .searchtoggle").on("click", function (event) {
			event.stopPropagation();
		});
	}else{
		$('#header .search_button,#header .searchtoggle').unbind();
		$('#header #search_widget').unbind();
		$("#header .searchtoggle").show();
	}
	*/
	$( "#header .search_button" ).click(function () {
 	$(this).toggleClass('active');
    // Set the effect type
    var effect = 'slide';
 
    // Set the options for the effect type chosen
   
    if ($("body").hasClass("lang-rtl") == true) {
	
	 var options = { direction: 'left' };
	}
	else
	{
	 var options = { direction: 'right' };
	}
    // Set the duration (default: 400 milliseconds)
    var duration = 700;
 
    $('#header .searchtoggle').toggle(effect, options, duration);
});
	
}
$(document).ready(function() {searchtoggle();});

