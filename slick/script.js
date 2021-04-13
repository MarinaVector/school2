jQuery.noConflict()

jQuery(function($) {
	$('.slider').slick({
		arrows:true,
		centerMode: true,
		centerPadding: '80px',
		dots:false,
		slidesToShow:3,

		responsive:[
			{
				breakpoint: 768,
				settings: {
					slidesToShow:2
				}
			},
			{
				breakpoint: 550,
				settings: {
					slidesToShow:1
				}
			}
		]
	});
} );



