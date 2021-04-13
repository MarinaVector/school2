jQuery.noConflict()

jQuery(function($) {
	$('.slider').slick({
		arrows:true,
		centerMode: true,
		centerPadding: '30px',
		dots:false,
		slidesToShow:3,

		responsive:[
			{
				breakpoint: 768,
				settings: {
					slidesToShow:1,
					centerMode: false,
				}
			},
			{
				breakpoint: 550,
				settings: {
					slidesToShow:1,
					arrows:false,
					centerMode: false,
				}
			}
		]
	});
} );



