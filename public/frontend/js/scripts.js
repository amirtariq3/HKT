
/*side menu collaps side menu*/
$(function() {
	var Accordion = function(el, multiple) {
		this.el = el || {};
		this.multiple = multiple || false;

		// Variables privadas
		var links = this.el.find('.link');
		// Evento
		links.on('click', {el: this.el, multiple: this.multiple}, this.dropdown)
	}

	Accordion.prototype.dropdown = function(e) {
		var $el = e.data.el;
			$this = $(this),
			$next = $this.next();

		$next.slideToggle();
		$this.parent().toggleClass('open');

		if (!e.data.multiple) {
			$el.find('.submenu').not($next).slideUp().parent().removeClass('open');
		};
	}	

	var accordion = new Accordion($('#accordion'), false);
});



/*side pannel*/

$(document).ready(function(){
		$(".opne_pannel").click(function(){
		$(".side_pannel").toggle(300);
		});
	});

/*footer*/

	$(document).ready(function(){
		$("#mydiv").hide();
		$(".myButton").click(function(){
			$("#mydiv").toggle(300);
			
		});
		
		$('.myButton').on('click',function(){
		$('html, body').animate({scrollTop: $("#mydiv").offset().top}, 300);
		});
    });