(function($){"use strict";$(window).on('load',function(){$('#loading').fadeOut();$('#preloader').delay(300).fadeOut('slow')});$('.timer').each(count);function count(options){var $this=$(this);options=$.extend({},options||{},$this.data('countToOptions')||{});$this.countTo(options)}
$("h1").fitText(1.2,{minFontSize:'35px',maxFontSize:'65px'});$('#mainNav').affix({offset:{top:100}})
new WOW().init();$("#back-top").hide();$(function(){$(window).scroll(function(){if($(this).scrollTop()>100){$('#back-top').fadeIn()}else{$('#back-top').fadeOut()}});$('#back-top a').on('click',function(){$('body,html').animate({scrollTop:0},800);return!1})});if($('.scroll-to-target').length){$(".scroll-to-target").on('click',function(){var target=$(this).attr('data-target');$('html, body').animate({scrollTop:$(target).offset().top},1000)})}
$('a.mouse-icon').on('click',function(event){var $anchor=$(this);$('html, body').stop().animate({scrollTop:($($anchor.attr('href')).offset().top-50)},1250,'easeInOutExpo');event.preventDefault()});$('.collapse.in').prev('.panel-heading').addClass('active');$('#accordion, #bs-collapse').on('show.bs.collapse',function(a){$(a.target).prev('.panel-heading').addClass('active')}).on('hide.bs.collapse',function(a){$(a.target).prev('.panel-heading').removeClass('active')});$(function(){var owl=$(".owl-carousel");owl.owlCarousel({autoPlay:3000,items:4,itemsDesktop:[1000,5],itemsDesktopSmall:[900,3],itemsTablet:[600,2],itemsMobile:!1});var owl=$(".owl-carousel2");owl.owlCarousel({autoPlay:3000,items:3,});var owl=$(".owl-carousel3");owl.owlCarousel({autoPlay:3000,items:1,});$(".next").on('click',function(){owl.trigger('owl.next')});$(".prev").on('click',function(){owl.trigger('owl.prev')})})})(jQuery)