
	$("input").click(function(){
		sum=0;
		$('#price :checked').each(function(){
			sum+=parseInt($(this).val());
		});
		$('.sum').text(sum+' y.e.');	  	
	});


 $('#btn-zakaz').click(function(){     
        alert('Ваш заказ принят!\n\Номер заказа - №'+ (randomzakaz(100, 999)) + 
        	' \n\Общая стоимость = ' + sum +' у.е.');
    
 function randomzakaz(min, max) {
    var rand = min - 0.5 + Math.random() * (max - min + 1)
    rand = Math.round(rand);
    return rand;
  }

});


    $('#droidtype').change(function () {
    	$('.content_droid').slideUp(300);
    	$("." + $(this).val()).slideDown();
    	var valOpt = $(this).find('option:selected').val();     
     	if(valOpt=='all')$(".content_droid").slideDown();
  });


	$(".droid__price_input").keypress(function(e) {
		if(e.keyCode==13){
	    	var from=$("#from").val();
			var to=$("#to").val();
			var str=$(".droid__card_price span").text();
			var price = str.split(' у.е.',6);

	$('.content_droid').slideUp(300);

	for (var i = 0; i<price.length; i++) {
		if (price[i] >= from && price[i] <= to) {
			//alert("id"+i);
			$("#id"+i).slideDown();
			}
		};
	};
});


/*function poisk() {
	var from=$("#from").val();
	var to=$("#to").val();
	var str=$(".droid__card_price span").text();
	var price = str.split(' у.е.',6);

	$('.content_droid').slideUp(300);

	for (var i = 0; i<price.length; i++) {
		if (price[i] >= from && price[i] <= to) {
			//alert("id"+i);
			$("#id"+i).slideDown();
		}
	};
};*/