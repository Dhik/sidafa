wow = new WOW(
  {
    animateClass: 'animated',
    offset:       100,
    callback:     function(box) {
      console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
    }
  }
);
wow.init();
/* global jQuery*/
( function( $ ) {
	$('.mobile-menu-trigger').on('click', function() {
		$this = $(this);

		$('.nav--mobile').slideToggle( 'fast', function() {

			if ($(this).is(":visible")) {
				$this.html('<i class="fa fa-times" aria-hidden="true"></i>');
			} else {
				$this.html('<i class="fa fa-bars" aria-hidden="true"></i>');
			}
		});
	})

	var swiper = new Swiper('.swiper-container', {
    slidesPerView: 5,
    spaceBetween: 30,
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
		navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });
}( jQuery ) );
