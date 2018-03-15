import $ from 'jquery';

class Faq {
	constructor () {
		
		this.top = $('.faq--each');
		this.icon = $('.faq--icon');
		this.events();
	
	}



events() {
	this.top.find('.faq--content').hide();	
	this.top.find('.faq--heading').on('click', this.showPar);
	
}



//methods


showPar() {

	$(this).next(".faq--content").slideToggle();
	$(this).next(".faq--content").siblings(".faq--content:visible").slideUp();
	$(this).toggleClass('faq--heading--active');

	$(this).find('.faq--icon').toggleClass('faq--icon--active');
	
	
	
	
}






}





export default Faq;
	






/*

var accordion = function() {

		$('.gtco-accordion-heading').on('click', function(event){

			var $this = $(this);

			$this.closest('.gtco-accordion').find('.gtco-accordion-content').slideToggle(400, 'easeInOutExpo');
			
			if ($this.closest('.gtco-accordion').hasClass('active')) {

				$this.closest('.gtco-accordion').removeClass('active');


			} else {

				$this.closest('.gtco-accordion').addClass('active');
			}
			
			event.preventDefault();
		});
	};

*/





