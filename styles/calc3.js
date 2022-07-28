$(document).ready(function(){

	var percent 	= [18, 24];
	var minMoney 	= [4300, 5000];
	var maxMoney	= [4999,430000];
	$("#amount3").val(minMoney[0]);
	
	//Calculator
	function calc3(){
		amount = parseFloat($("#amount3").val());
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

			profitHourly3 = amount / 100 * percent[id];
			profitHourly3 = profitHourly3.toFixed(2);
			profitDaily3 = amount / 100 * percent[id];
			profitDaily3 = profitDaily3.toFixed(2);
			profitWeekly3 = profitDaily3 * 7;
			profitWeekly3 = profitWeekly3.toFixed(2);
			profitMonthly3 = profitHourly3 * 20;
			profitMonthly3 = profitMonthly3.toFixed(2);


			if(amount < minMoney[id] || isNaN(amount) == true){
				$("#profitHourly3").text("Error!");
				$("#profitDaily3").text("Error!");
				$("#profitWeekly3").text("Error!");
				$("#profitMonthly3").text("Error!");
			} else {
				$("#profitHourly3").text("$" + profitHourly3);
				$("#profitDaily3").text("$" + profitDaily3);
				$("#profitWeekly3").text("$" + profitWeekly3);
				$("#profitMonthly3").text("$" + profitMonthly3);
			}
		} else {
			$("#profitHourly3").text("Error!");
			$("#profitDaily3").text("Error!");
			$("#profitWeekly3").text("Error!");
			$("#profitMonthly3").text("Error!");
		}
	}
	if($("#amount3").length){
		calc3();
	}
	$("#amount3").keyup(function(){
		calc3();
	});

});

