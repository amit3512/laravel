// Avoid `console` errors in browsers that lack a console.
(function() {
var method;
var noop = function () {};
var methods = [
'assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error',
'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log',
'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd',
'timeline', 'timelineEnd', 'timeStamp', 'trace', 'warn'
];
var length = methods.length;
var console = (window.console = window.console || {});

while (length--) {
method = methods[length];

// Only stub undefined methods.
if (!console[method]) {
console[method] = noop;
}
}
}());

// Place any jQuery/helper plugins in here.
jQuery(document).ready(function($) {
jQuery('.stellarnav').stellarNav({
breakpoint: 997,
menuLabel:'',
position: 'right',
showArrows: true,
phoneBtn: '015549570',
phoneLabel: 'Call Us', // label for the phone button
locationBtn: 'https://www.google.com/maps',
locationLabel: 'Location' // label for the location button
});
});


$('.banner_wrapper .owl-carousel').owlCarousel({
loop: true,
margin: 0,
item:1,
autoplay:true,
autoplayTimeout:5000,
autoplayHoverPause:true,
nav:false,
dots:false,
responsiveClass:true,
responsive:{
0:{
items:1
}}
})


$('.routes_info__inner .owl-carousel').owlCarousel({
loop: true,
margin: 30,
item:1,
autoplay:true,
autoplayTimeout:5000,
autoplayHoverPause:true,
nav:false,
dots:false,
responsiveClass:true,
responsive: {
0: {
items: 2
},
600: {
items: 3
},
1000: {
items: 3
}
}
})


$('.header_two__items .owl-carousel').owlCarousel({
loop: true,
margin:15,
item:1,
autoplay:true,
autoplayTimeout:5000,
autoplayHoverPause:true,
nav:false,
dots:false,
responsiveClass:true,
responsive: {
0: {
items: 2
},
600: {
items: 3
},
1000: {
items: 3
}
}
})

$('.expert_banner .owl-carousel').owlCarousel({
loop: true,
margin: 0,
item:1,
autoplay:true,
autoplayTimeout:5000,
autoplayHoverPause:true,
nav:false,
dots:false,
responsiveClass:true,
responsive:{
0:{
items:1
}}
})

function check_empty() {
if (document.getElementById('name').value == "" || document.getElementById('email').value == "" || document.getElementById('msg').value == "") {
alert("Fill All Fields !");
} else {
document.getElementById('form').submit();
alert("Form Submitted Successfully...");
}
}
//Function To Display Popup
function div_show() {
document.getElementById('abc').style.display = "block";
}
//Function to Hide Popup
function div_hide(){
document.getElementById('abc').style.display = "none";
}

function openForm() {
document.getElementById("myForm").style.display = "block";
}

function closeForm() {
document.getElementById("myForm").style.display = "none";

}


// sidebar popup silde from right

$(document).ready(function () {
$('[data-toggle="tooltip"]').tooltip();
$('.first-button').on('click', function () {

$('.animated-icon1').toggleClass('open');
});
$('.second-button').on('click', function () {

$('.animated-icon2').toggleClass('open');
});
$('.third-button').on('click', function () {

$('.animated-icon3').toggleClass('open');
});
});

$( "#book_appointment" ).click(function()
{
alert('hello');
$('.slide-out').css('right', '0');
});
$(document).ready(function(){
$('.toggle').click(function(){
$('.sidebar-contact').toggleClass('active')
$('.toggle').toggleClass('active')
})
});
// js for slider of items listing

$('.items_listing_slider .owl-carousel').owlCarousel({
loop: true,
margin:15,
item:1,
autoplay:true,
autoplayTimeout:5000,
autoplayHoverPause:true,
nav:false,
dots:false,
responsiveClass:true,
responsive: {
0: {
items: 2
},
600: {
items: 3
},
1000: {
items: 3
}
}
})


$('.product_displays .owl-carousel').owlCarousel({
loop: true,
margin:15,
item:1,
autoplay:true,
autoplayTimeout:5000,
autoplayHoverPause:true,
nav:false,
dots:false,
responsiveClass:true,
responsive: {
0: {
items: 2
},
600: {
items: 3
},
1000: {
items: 3
}
}
});


$('.shop_wrapper .owl-carousel').owlCarousel({
loop:true,
margin:10,
nav:false,
dots:false,
navigation:true,
responsive:{
0:{
items:1
},
600:{
items:3
},
1000:{
items:5
}
}
})

// js for the cart addition ends

jQuery("#carousel").owlCarousel({
autoplay: true,
lazyLoad: true,
loop: true,
margin: 20,
responsiveClass: true,
autoHeight: true,
autoplayTimeout: 7000,
smartSpeed: 800,
nav:false,
dots:false,
responsive: {
0: {
items: 1
},

600: {
items: 3
},

1024: {
items: 4
},

1366: {
items: 4
}
}
});


$('.banner_wrap .owl-carousel').owlCarousel({
loop:true,
margin:10,
navigation:true,
responsive:{
0:{
items:1
},
600:{
items:1
},
1000:{
items:1
}
}
})

// js for the owl-carousel fancybox section
$('.owl-carousel').owlCarousel({
loop : true,
margin:15,
responsive:{
0:{
items:1
},
600:{
items:1
},
1000:{
items:1
}
}
});

// js for the slicingnewdesign begins
$(function() {
$('#search-menu').removeClass('toggled');

$('#search-icon').click(function(e) {
e.stopPropagation();
$('#search-menu').toggleClass('toggled');
$("#popup-search").focus();
});

$('#search-menu input').click(function(e) {
e.stopPropagation();
});

$('#search-menu, body').click(function() {
$('#search-menu').removeClass('toggled');
});
});

// js for the accordion section

var btn = $('#button');

$(window).scroll(function() {
if ($(window).scrollTop() > 300) {
btn.addClass('show');
} else {
btn.removeClass('show');
}
});

btn.on('click', function(e) {
e.preventDefault();
$('html, body').animate({scrollTop:0}, '300');
});



$('.dest_items .owl-carousel').owlCarousel({
loop:true,
margin:15,
nav:true,
responsive:{
0:{
items:2
},
600:{
items:3
},
1000:{
items:4
}
}
})

// js for the lazyload begins
document.addEventListener("DOMContentLoaded", function() {
let lazyImages = [].slice.call(document.querySelectorAll("img.lazy"));
let active = false;

const lazyLoad = function() {
if (active === false) {
active = true;

setTimeout(function() {
lazyImages.forEach(function(lazyImage) {
if ((lazyImage.getBoundingClientRect().top <= window.innerHeight && lazyImage.getBoundingClientRect().bottom >= 0) && getComputedStyle(lazyImage).display !== "none") {
lazyImage.src = lazyImage.dataset.src;
lazyImage.srcset = lazyImage.dataset.srcset;
lazyImage.classList.remove("lazy");

lazyImages = lazyImages.filter(function(image) {
return image !== lazyImage;
});

if (lazyImages.length === 0) {
document.removeEventListener("scroll", lazyLoad);
window.removeEventListener("resize", lazyLoad);
window.removeEventListener("orientationchange", lazyLoad);
}
}
});

active = false;
}, 200);
}
};

document.addEventListener("scroll", lazyLoad);
window.addEventListener("resize", lazyLoad);
window.addEventListener("orientationchange", lazyLoad);
});

// js for the booking form begins
$(document).ready(function() {
$("#do_login").click(function() {
closeLoginInfo();
$(this).parent().find('span').css("display","none");
$(this).parent().find('span').removeClass("i-save");
$(this).parent().find('span').removeClass("i-warning");
$(this).parent().find('span').removeClass("i-close");

var proceed = true;
$("#login_form input").each(function(){

if(!$.trim($(this).val())){
$(this).parent().find('span').addClass("i-warning");
$(this).parent().find('span').css("display","block");
proceed = false;
}
});

if(proceed) //everything looks good! proceed...
{
$(this).parent().find('span').addClass("i-save");
$(this).parent().find('span').css("display","block");
}
});

//reset previously results and hide all message on .keyup()
$("#login_form input").keyup(function() {
$(this).parent().find('span').css("display","none");
});

openLoginInfo();
setTimeout(closeLoginInfo, 1000);
});

function openLoginInfo() {
$(document).ready(function(){
$('.b-form').css("opacity","0.01");
$('.box-form').css("left","-37%");
$('.box-info').css("right","-37%");
});
}

function closeLoginInfo() {
$(document).ready(function(){
$('.b-form').css("opacity","1");
$('.box-form').css("left","0px");
$('.box-info').css("right","-5px");
});
}

$(window).on('resize', function(){
closeLoginInfo();
});


// js for the scroller sticky
$(function(){
var shrinkHeader = 300;
$(window).scroll(function() {
var scroll = getCurrentScroll();
if ( scroll >= shrinkHeader ) {
$('.header').addClass('shrink');
}
else {
$('.header').removeClass('shrink');
}
});
function getCurrentScroll() {
return window.pageYOffset || document.documentElement.scrollTop;
}
});


// js for the contact page

// Input Lock
$('textarea').blur(function () {
$('#hire textarea').each(function () {
$this = $(this);
if ( this.value != '' ) {
$this.addClass('focused');
$('textarea + label + span').css({'opacity': 1});
}
else {
$this.removeClass('focused');
$('textarea + label + span').css({'opacity': 0});
}
});
});

$('#hire .field:first-child input').blur(function () {
$('#hire .field:first-child input').each(function () {
$this = $(this);
if ( this.value != '' ) {
$this.addClass('focused');
$('.field:first-child input + label + span').css({'opacity': 1});
}
else {
$this.removeClass('focused');
$('.field:first-child input + label + span').css({'opacity': 0});
}
});
});

$('#hire .field:nth-child(2) input').blur(function () {
$('#hire .field:nth-child(2) input').each(function () {
$this = $(this);
if ( this.value != '' ) {
$this.addClass('focused');
$('.field:nth-child(2) input + label + span').css({'opacity': 1});
}
else {
$this.removeClass('focused');
$('.field:nth-child(2) input + label + span').css({'opacity': 0});
}
});
});

// js for the new site design begins

$('.banner__wrapper .owl-carousel').owlCarousel({
loop:true,
margin:15,
nav:true,
dots:false,
responsive:{
0:{
items:1
},
600:{
items:1
},
1000:{
items:1
}
}
})

// js for the sticky navbar for newsite
;(function($){
'use strict';

var defaults = {
topOffset: 400, //px - offset to switch of fixed position
hideDuration: 300, //ms
stickyClass: 'is-fixed'
};

$.fn.stickyPanel = function(options){
if(this.length == 0) return this; // returns the current jQuery object

var self = this,
settings,
isFixed = false, //state of panel
stickyClass,
animation = {
normal: self.css('animationDuration'), //show duration
reverse: '', //hide duration
getStyle: function (type) {
return {
animationDirection: type,
animationDuration: this[type]
};
}
};

// Init carousel
function init(){
settings = $.extend({}, defaults, options);
animation.reverse = settings.hideDuration + 'ms';
stickyClass = settings.stickyClass;
$(window).on('scroll', onScroll).trigger('scroll');
}

// On scroll
function onScroll() {
if ( window.pageYOffset > settings.topOffset){
if (!isFixed){
isFixed = true;
self.addClass(stickyClass)
.css(animation.getStyle('normal'));
}
} else {
if (isFixed){
isFixed = false;

self.removeClass(stickyClass)
.each(function (index, e) {
// restart animation
// https://css-tricks.com/restart-css-animation/
void e.offsetWidth;
})
.addClass(stickyClass)
.css(animation.getStyle('reverse'));

setTimeout(function () {
self.removeClass(stickyClass);
}, settings.hideDuration);
}
}
}

init();

return this;
}
})(jQuery);


//run
$(function () {
$('#fixed').stickyPanel();
});



// for images jarallax use
jarallax(document.querySelectorAll('.jarallax'), {
speed: 0.2
});

$('.jarallax').jarallax({
speed: 0.2
});
// for images jarallax use




// js for the  para tags begins
$(document).ready(function() {
  $("#toggle").click(function() {
    var elem = $("#toggle").text();
    if (elem == "Read More") {
      //Stuff to do when btn is in the read more state
      $("#toggle").text("Read Less");
      $("#text").slideDown();
    } else {
      //Stuff to do when btn is in the read less state
      $("#toggle").text("Read More");
      $("#text").slideUp();
    }
  });
});


// js for the  para tags ends

// js for the accordion tabs of the sub items
//uses classList, setAttribute, and querySelectorAll
//if you want this to work in IE8/9 youll need to polyfill these
(function() {
  var d = document,
    accordionToggles = d.querySelectorAll('.js-accordionTrigger'),
    setAria,
    setAccordionAria,
    switchAccordion,
    touchSupported = ('ontouchstart' in window),
    pointerSupported = ('pointerdown' in window);

  skipClickDelay = function(e) {
    e.preventDefault();
    e.target.click();
  }

  setAriaAttr = function(el, ariaType, newProperty) {
    el.setAttribute(ariaType, newProperty);
  };
  setAccordionAria = function(el1, el2, expanded) {
    switch (expanded) {
      case "true":
        setAriaAttr(el1, 'aria-expanded', 'true');
        setAriaAttr(el2, 'aria-hidden', 'false');
        break;
      case "false":
        setAriaAttr(el1, 'aria-expanded', 'false');
        setAriaAttr(el2, 'aria-hidden', 'true');
        break;
      default:
        break;
    }
  };
  //function
  switchAccordion = function(e) {
    e.preventDefault();
    var thisAnswer = e.target.parentNode.nextElementSibling;
    var thisQuestion = e.target;
    if (thisAnswer.classList.contains('is-collapsed')) {
      setAccordionAria(thisQuestion, thisAnswer, 'true');
    } else {
      setAccordionAria(thisQuestion, thisAnswer, 'false');
    }
    thisQuestion.classList.toggle('is-collapsed');
    thisQuestion.classList.toggle('is-expanded');
    thisAnswer.classList.toggle('is-collapsed');
    thisAnswer.classList.toggle('is-expanded');

    thisAnswer.classList.toggle('animateIn');
  };
  for (var i = 0, len = accordionToggles.length; i < len; i++) {
    if (touchSupported) {
      accordionToggles[i].addEventListener('touchstart', skipClickDelay, false);
    }
    if (pointerSupported) {
      accordionToggles[i].addEventListener('pointerdown', skipClickDelay, false);
    }
    accordionToggles[i].addEventListener('click', switchAccordion, false);
  }
})();
