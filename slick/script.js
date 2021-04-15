jQuery.noConflict()

jQuery(function($) {
	$('.slider').slick({
		arrows:true,
		centerMode: true,
		dots:false,
		slidesToShow:3,
		lazyLoad: 'ondemand',

		responsive:[
			{
				breakpoint: 968,
				settings: {
					slidesToShow:1,
					centerMode: false,
					slidesToScroll: 1

				}
			},
			{
				breakpoint: 550,
				settings: {
					slidesToShow:1,
					arrows:false,
					centerMode: false,
					slidesToScroll: 1

				},

			},
			{

				//breakpoint: 450,
				//settings: "unslick" // destroys slick

			}
		]
	});
} );



