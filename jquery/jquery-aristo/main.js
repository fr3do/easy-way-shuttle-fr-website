jQuery (function($){
		
		$.datepicker.setDefaults($.datepicker.regional['fr']);
		
		var datetimepickers = $('.datepicker').datetimepicker({
		    dateFormat : 'dd/mm/yy',
			minDate : 0,
			onSelect: function(date){
				var option = this.id == 'allee' ? 'minDate' : 'maxDate';
				datetimepickers.not('#'+this.id).datetimepicker('option',option,date);
			}
			
   })
	
});

