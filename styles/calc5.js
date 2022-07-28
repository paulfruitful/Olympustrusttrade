$(document).ready(function(){

	var percent 	= [200];
	var minMoney 	= [2000];
	var maxMoney	= [5000];
	$("#amount5").val(minMoney[0]);
	
	//Calculator
	function calc5(){
		amount = parseFloat($("#amount5").val());
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

			profitHourly5 = amount / 100 * percent[id];
			profitHourly5 = profitHourly5.toFixed(2);


			if(amount < minMoney[id] || isNaN(amount) == true){
				$("#profitHourly5").text("Error!");

			} else {
				$("#profitHourly5").text("$" + profitHourly5);

			}
		} else {
			$("#profitHourly5").text("Error!");

		}
	}
	if($("#amount5").length){
		calc5();
	}
	$("#amount5").keyup(function(){
		calc5();
	});

});

