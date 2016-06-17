$(document).ready(function() {
	$('#open-search').click(function() {
		$('.mobile-content-search').toggle(200);
	});

	$('#open-menu').click(function() {

		if ($(this).hasClass('open-close-openned')) {
			$('.open-close').removeClass('open-close-openned');
			$('.open-close').html('<span class="fa fa-bars"></span>');
		} else {
			$('.open-close').addClass('open-close-openned');
			$('.open-close').html('X');
		};

		$('.itens-menu-mob').toggle(200);


	});

	$('.itens-menu-mob li').click(function() {

		if ($(this).hasClass('active-mob')) {
			$(this).removeClass('active-mob');
		} else {
			$(this).addClass('active-mob');
		};

	});
});