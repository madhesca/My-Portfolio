import $ from 'jquery';



class HeaderNavBar {
  constructor() {

  	this.events();

  }

  


//toggle nav bar
  events() {
  	$('.menu-icon').on('click', this.toggleIt.bind(this));
  	$(window).on('scroll', this.scrollIt.bind(this));
  }


toggleIt () {
	$('nav ul').toggleClass('showing');
}


scrollIt() {

	if($(window).scrollTop()) {

		$('nav').addClass('black');
	} else {
		$('nav').removeClass('black');
	}
}




//
//$(document).ready(function() {
//	$('.menu-icon').on('click', function() {
//		$('nav ul').toggleClass('showing');
//	});
//});





}

export default HeaderNavBar;