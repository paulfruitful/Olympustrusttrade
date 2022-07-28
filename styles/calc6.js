$(document).ready(function(){

	var percent 	= [300];
	var minMoney 	= [3000];
	var maxMoney	= [30000];
	$("#amount6").val(minMoney[0]);
	
	//Calculator
	function calc6(){
		amount = parseFloat($("#amount6").val());
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

			profitHourly6 = amount / 100 * percent[id];
			profitHourly6 = profitHourly6.toFixed(2);


			if(amount < minMoney[id] || isNaN(amount) == true){
				$("#profitHourly6").text("Error!");

			} else {
				$("#profitHourly6").text("$" + profitHourly6);

			}
		} else {
			$("#profitHourly6").text("Error!");

		}
	}
	if($("#amount6").length){
		calc6();
	}
	$("#amount6").keyup(function(){
		calc6();
	});

});

