$(document).ready(function(){

	var percent 	= [100];
	var minMoney 	= [1000];
	var maxMoney	= [100000];
	$("#amount4").val(minMoney[0]);
	
	//Calculator
	function calc4(){
		amount = parseFloat($("#amount4").val());
		id = -1;
		var length = percent.length;
		var i = 0;
		do {
			if(minMoney[i] <= amount && amount <= maxMoney[i]){
				id = i;
				i = i + length;
			}
			i++
		}
		while(i < length)
		
		if(id != -1){

			profitHourly4 = amount / 100 * percent[id];
			profitHourly4 = profitHourly4.toFixed(2);


			if(amount < minMoney[id] || isNaN(amount) == true){
				$("#profitHourly4").text("Error!");

			} else {
				$("#profitHourly4").text("$" + profitHourly4);

			}
		} else {
			$("#profitHourly4").text("Error!");

		}
	}
	if($("#amount4").length){
		calc4();
	}
	$("#amount4").keyup(function(){
		calc4();
	});

});

