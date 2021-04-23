var WebMarketVars = {
  currencyBefore: true,
  currencySymbol: "$",
  priceRange: [0, 1750],
  priceStep: 50
};
jQuery(document).ready(function($) {
  "use strict";
  if ( /*@cc_on!@*/ false) {
    document.documentElement.className += ' ie10';
  }
  var isTouch = function() {
    return $(window).width() < 980 ? true : false;
  };
  var determineScreenClass = function() {
    $("html").toggleClass("large-screen", !isTouch());
  };
  $("#toTheTop").click(function() {
    $("html, body").animate({
      scrollTop: 0
    }, 2e3, "easeInOutQuart");
    return false;
  });
  $("#spyMenu a").click(function() {
    var $this = $(this);
    $("html, body").animate({
      scrollTop: $($this.attr("href")).offset().top - 70
    }, 700, "easeInOutQuart");
    return false;
  });
  $(window).load(function() {
    var configuration = {
      debug: false,
      auto: {
        play: false
      },
      width: "100%",
      height: "variable",
      items: {
        height: "variable"
      },
      prev: {},
      next: {},
      pagination: {},
      scroll: {
        duration: 1e3,
        items: 1
      },
      transition: true
    };
    $(".carouFredSel").each(function() {
      var $this = $(this);
      configuration.prev.button = $("#" + $this.data("nav") + "Left");
      configuration.next.button = $("#" + $this.data("nav") + "Right");
      if ($this.data("responsive")) {
        configuration.responsive = true;
      } else {
        configuration.responsive = false;
      }
      if (true === $this.data("autoplay")) {
        configuration.auto.play = true;
      }
      configuration.onCreate = function() {
        $this.find(".slide").css({
          width: $this.parent().width()
        });
      };
      $this.carouFredSel(configuration);
    });
  });
  if (jQuery().revolution) {
    var $mainSlider = $(".fullwidthbanner").revolution({
      delay: 1e4,
      startheight: 550,
      startwidth: 1400,
      navigationType: "bullet",
      navigationStyle: "round",
      navigationVAlign: "bottom",
      touchenabled: "on",
      onHoverStop: "on",
      navigationArrows: "none",
      soloArrowLeftHalign: "left",
      soloArrowLeftValign: "center",
      soloArrowRightHalign: "right",
      soloArrowRightValign: "center",
      navigationVOffset: $('body').hasClass('boxed') ? 10 : 60,
      navOffsetHorizontal: 0,
      navOffsetVertical: 20,
      hideAllCaptionAtLilmit: 481,
      hideSliderAtLimit: 300,
      stopAtSlide: -1,
      stopAfterLoops: -1,
      shadow: 0,
      fullWidth: "on"
    });
    $('#sliderRevLeft').on('click', function() {
      $mainSlider.revprev();
      return false;
    });
    $('#sliderRevRight').on('click', function() {
      $mainSlider.revnext();
      return false;
    });
  }
  $(".add-prettyphoto").prettyPhoto({
    default_width: 720,
    default_height: 405
  });
  $(".accordion-group .accordion-toggle").click(function() {
    var $accordionGroup = $(this).parent().parent();
    if ($accordionGroup.hasClass("active")) {
      $accordionGroup.removeClass("active");
    } else {
      $accordionGroup.addClass("active").siblings().removeClass("active");
    }
  });
  $(document).on("focus", ".large-screen #navSearchInput", function() {
    $(this).parent().parent().addClass("search-mode");
    repositionLine();
  });
  $(document).on("blur", ".large-screen #navSearchInput", function() {
    $(this).parent().parent().removeClass("search-mode");
    repositionLine();
  });
  var repositionLine = function() {
    setTimeout(function() {
      $("#mainNavigation > li.active").trigger("mouseover");
    }, 200);
  };
  var stickyNavbar = function() {
    if (isTouch()) {
      $(window).off("scroll.onlyDesktop");
    } else {
      var $headerHeight = $("#header").height(),
        $navbarHeight = $("#stickyNavbar").height();
      $(window).on("scroll.onlyDesktop", function() {
        var scrollX = $(window).scrollTop();
        if (scrollX > $headerHeight) {
          $("#stickyNavbar").removeClass("navbar-static-top").addClass("navbar-fixed-top");
          $(".large-screen #header").css({
            marginBottom: $navbarHeight
          });
        } else {
          $("#stickyNavbar").removeClass("navbar-fixed-top").addClass("navbar-static-top");
          $(".large-screen #header").css({
            marginBottom: 0
          });
        }
      });
    }
  };
  $(".product-preview .thumbs a").click(function(ev) {
    ev.preventDefault();
    $($(this).attr("href")).attr("src", $(this).find("img").attr("src"));
    $(this).parent().addClass("active").siblings(".active").removeClass("active");
  });
  $(".numbered > .clickable").click(function(ev) {
    ev.preventDefault();
    var number = parseInt($(this).siblings('input[type="text"]').val(), 10);
    if (isNaN(number)) {
      number = 1;
    }
    if ($(this).hasClass("add-one")) {
      $(this).siblings('input[type="text"]').val(number + 1);
    } else {
      number = number < 2 ? 2 : number;
      $(this).siblings('input[type="text"]').val(number - 1);
    }
  });
  (function() {
    var $container = $("#isotopeContainer");
    $container.imagesLoaded(function() {
      $container.isotope({
        itemSelector: ".isotope--target",
        layoutMode: "fitRows",
        getSortData: {
          price: function($elm) {
            return $elm.data("price");
          },
          name: function($elm) {
            return $elm.find(".isotope--title").text();
          },
          popularity: function($elm) {
            return $elm.data("popularity");
          }
        }
      });
      var prepareCurrency = function(value) {
        return WebMarketVars.currencyBefore ? WebMarketVars.currencySymbol + value : value + WebMarketVars.currencySymbol;
      };
      var $slider = $(".jqueryui-slider-container > div");
      $slider.slider({
        range: true,
        min: WebMarketVars.priceRange[0],
        max: WebMarketVars.priceRange[1],
        values: WebMarketVars.priceRange,
        step: WebMarketVars.priceStep,
        slide: function(ev, ui) {
          $(this).parent().siblings(".min-val").val(prepareCurrency(ui.values[0]));
          $(this).parent().siblings(".max-val").val(prepareCurrency(ui.values[1]));
        },
        change: function() {
          updateIsotopeFiltering();
        },
        create: function() {
          var $sliderParent = $(this).parents(".accordion-body");
          $sliderParent.find(".min-val").val(prepareCurrency($(this).slider("values", 0)));
          $sliderParent.find(".max-val").val(prepareCurrency($(this).slider("values", 1)));
        }
      });
      var $selectableElms = $(".sidebar-filters .selectable");
      $selectableElms.click(function(ev) {
        ev.preventDefault();
        $(this).toggleClass("selected");
        updateIsotopeFiltering();
      });
      $(".sidebar-filters .accordion-toggle").click(function() {
        setTimeout(updateIsotopeFiltering, 350);
      });
      $("#removeFilters").click(function(ev) {
        ev.preventDefault();
        $selectableElms.removeClass("selected");
        updateIsotopeFiltering();
      });
      var updateIsotopeFiltering = function() {
        var selectedElms = $(".sidebar-filters .in").find(".selectable.selected[data-target]").not(".detailed"),
          detailedElms = $(".sidebar-filters .in").find(".detailed.selected[data-target]"),
          filterString, filter, types = [];
        if (selectedElms.length > 0 || detailedElms.length > 0) {
          $("#removeFilters").fadeIn();
        } else {
          $("#removeFilters").fadeOut();
        }
        if (selectedElms.length < 1) {
          filterString = ".isotope-container .isotope--target";
        } else {
          var filterArr = [];
          selectedElms.each(function() {
            var data = $(this).data("target");
            if ("undefined" !== typeof data) {
              filterArr.push($(this).data("target"));
            }
          });
          filterString = filterArr.join(",");
        }
        filter = $(filterString);
        if ($slider.parents(".accordion-body").hasClass("in")) {
          filter = filter.filter(function() {
            var $this = $(this);
            return $this.data("price") >= $slider.slider("values", 0) && $this.data("price") <= $slider.slider("values", 1);
          });
        }
        detailedElms.each(function() {
          types.push($(this).data("type"));
        });
        types = _.uniq(types);
        if (detailedElms.length > 0) {
          _.each(types, function(type) {
            var allowedValues = [];
            detailedElms.filter('[data-type="' + type + '"]').each(function() {
              allowedValues.push($(this).data("target"));
            });
            filter = filter.filter(function() {
              var $this = $(this);
              return _.some($this.data(type).split("|"), function(val) {
                return _.contains(allowedValues, val);
              });
            });
          });
        }
        $container.isotope({
          filter: filter
        });
      };
      updateIsotopeFiltering();
      $("#isotopeSorting").change(function() {
        var parameters = jQuery.parseJSON($(this).val());
        parameters.sortAscending = "true" === parameters.sortAscending ? true : false;
        $container.isotope(parameters);
      });
      $("#isotopeSorting").trigger("change");
    });
  })();
  (function() {
    var tour = new Tour({
      useLocalStorage: true,
      backdrop: false
    });
    tour.addSteps([{
      element: "#tourStep1",
      title: "Filtering",
      content: "Filtering the products in Webmarket is fun!"
    }, {
      element: "#tourStep2",
      title: "Categories",
      content: "Click to multiple categories and the articles on the right will be shown or hidden automatically."
    }, {
      element: "#filterPrices",
      title: "Price Range Filter",
      content: "Select the price range, the products on the left will be filtered automatically, without page refresh!"
    }, {
      element: "#tourStep3",
      title: "Open Additional Filters",
      content: "Just open the panel with the click on the title and you can start filtering the products even further... <br />The same way you can turn off the filter, just close the pane.",
      placement: "top"
    }, {
      element: "#tourStep4",
      title: "The Best Part: Sorting!",
      content: "Never refresh a page again when you decide to order the items below. Just select ordering from the dropdown, the products below will magically fit into desired order",
      placement: "bottom"
    }]);
    tour.start();
  })();
  $(".add-googlemap").each(function() {
    var $this = $(this);
    $this.css("height", typeof $this.data("height") === "undefined" ? 200 : parseInt($this.data("height"), 10));
    if (jQuery.goMap) {
      $this.goMap({
        markers: [{
          address: $this.data("addr"),
          title: "undefined" === typeof $this.data("title") ? false : $this.data("title")
        }],
        scrollwheel: false,
        zoom: "undefined" === typeof $this.data("zoom") ? 13 : parseInt($this.data("zoom"), 10),
        maptype: "undefined" === typeof $this.data("type") ? "ROADMAP" : $this.data("type").toUpperCase()
      });
    }
  });
  /*$(".item-in-cart .icon-remove-sign").click(function() {
    $(this).parents(".item-in-cart").animate({
      opacity: 0
    }, "swing", function() {
      $(this).slideUp();
    });
    return false;
  });
  $(".table-items .icon-remove-sign").click(function() {
    var elmToRemove = $(this).parents('tr');
    if (!!$(this).data('delete-next')) {
      elmToRemove = elmToRemove.add(elmToRemove.next());
    }
    elmToRemove.animate({
      opacity: 0
    }, "swing", function() {
      $(this).remove();
    });
    return false;
  });*/
  $(".card-num-input").on("keyup", function() {
    if ($(this).val().length > 3) {
      $(this).next(".card-num-input").focus();
    }
  });
  $(".add-tooltip").tooltip({
    title: $(this).attr("data-title"),
    placement: "right",
    trigger: "manual"
  }).tooltip("show");
  var triggeredOnResize = function() {
    if ($("html").hasClass("lt-ie9")) {
      return;
    }
    $(".carouFredSel").each(function() {
      var $this = $(this);
      $this.trigger("configuration", ["debug", false, true]);
    });
    stickyNavbar();
    (function() {
      var $el, leftPos, newWidth, $mainNav = $("#mainNavigation");
      if ($('#magic-line').length < 1) {
        $mainNav.prepend('<li id="magic-line"></li>');
      }
      var $magicLine = $("#magic-line");
      if ($(".large-screen #mainNavigation > .active").length > 0) {
        $magicLine.width($(".large-screen #mainNavigation > .active").width()).css("left", $("#mainNavigation > .active").position().left).data("origLeft", $magicLine.position().left).data("origWidth", $magicLine.width());
        $(document).on({
          mouseenter: function() {
            $el = $(this);
            leftPos = $el.position().left;
            newWidth = $el.width();
            $magicLine.stop().animate({
              left: leftPos,
              width: newWidth
            });
          },
          mouseleave: function() {
            $magicLine.stop().animate({
              left: $magicLine.data("origLeft"),
              width: $magicLine.data("origWidth")
            });
          }
        }, ".large-screen #mainNavigation > li");
      }
    })();
    $(".carouFredSel").each(function() {
      var $this = $(this);
      $this.find(".slide").css({
        width: $this.parent().width()
      });
      $this.trigger("configuration", ["debug", false, true]);
    });
    if ($(window).width() < 768) {
      $(".fullwidthbanner-container .tp-bullets").css({
        bottom: 10
      });
    }
    var recalculateFromBottom = function() {
      if (!isTouch()) {
        $('.large-screen #spyMenu').affix({
          offset: {
            top: $('.large-screen #spyMenu').offset().top - 70,
            bottom: function() {
              return $('footer').outerHeight(true) + 30;
            }
          }
        });
      }
      setTimeout(recalculateFromBottom, 2000);
    };
    if ($('#spyMenu').length > 0) {
      recalculateFromBottom();
    }
  };
  var fromLastResize;
  $(window).resize(function() {
    determineScreenClass();
    clearTimeout(fromLastResize);
    fromLastResize = setTimeout(function() {
      triggeredOnResize();
    }, 250);
  });
  $(window).on('scroll', function() {
    if ($('#spyMenu').hasClass('affix-bottom')) {
      $('#spyMenu').css({
        bottom: $('footer').outerHeight(true) + 30
      });
    } else {
      $('#spyMenu').removeAttr('style');
    }
  });
  $('.js-selectable-dropdown').on('click', '.js-possibilities a', function(ev) {
    if ("#" === $(this).attr('href')) {
      ev.preventDefault();
      var parent = $(this).parents('.js-selectable-dropdown');
      parent.find('.js-change-text').html($(this).html());
    }
  });
  $(window).trigger("scroll").trigger("resize");
  
  
  //Toggle Favourite
  $(".product .fav_btn").click(function() {
    $(this).parents(".product, .span3").hide("swing", function() {
      $(this).slideUp();
    });
    return false;
  });
  
});




$(document).ready(function(e) {
    

$('.form').find('input, textarea').on('keyup blur focus', function (e) {
  
  var $this = $(this),
      label = $this.prev('label');

      if (e.type === 'keyup') {
    		if ($this.val() === '') {
          label.removeClass('active highlight');
        } else {
          label.addClass('active highlight');
        }
    } else if (e.type === 'blur') {
    	if( $this.val() === '' ) {
    		label.removeClass('active highlight'); 
			} else {
		    label.removeClass('highlight');   
			}   
    } else if (e.type === 'focus') {
      
      if( $this.val() === '' ) {
    		label.removeClass('highlight'); 
			} 
      else if( $this.val() !== '' ) {
		    label.addClass('highlight');
			}
    }

});

$('.tab a').on('click', function (e) {
  
  e.preventDefault();
  
  $(this).parent().addClass('active');
  $(this).parent().siblings().removeClass('active');
  target = $(this).attr('href');

  $('.tab-content > div').not(target).hide();
  
  $(target).fadeIn(600);
  
});
//canvas off js//
$('#menu_icon').click(function(){
		if($("#content_details").hasClass('drop_menu'))
		{
        $("#content_details").addClass('drop_menu1').removeClass('drop_menu');
    }
		else{
			$("#content_details").addClass('drop_menu').removeClass('drop_menu1');
			}
	
	
	});
	





});