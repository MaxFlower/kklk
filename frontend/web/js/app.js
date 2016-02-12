$( document ).ready(function() {

    $('.carousel').carousel({
	  interval: 10000
	});


    $.datepicker.regional['ru'] = {
		monthNames: ['Январь', 'Февраль', 'Март', 'Апрель',
		'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь',
		'Октябрь', 'Ноябрь', 'Декабрь'],
		dayNamesMin: ['Вс','Пн','Вт','Ср','Чт','Пт','Сб'],
		firstDay: 1,
	};
	$.datepicker.setDefaults($.datepicker.regional['ru']);
	
	$( "#datepicker" ).datepicker();

});
