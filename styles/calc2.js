$(document).ready(function(){

	var percent 	= [6, 9];
	var minMoney 	= [430, 4300];
	var maxMoney	= [4299,43000];
	$("#amount2").val(minMoney[0]);
	
	//Calculator
	function calc2(){
		amount = parseFloat($("#amount2").val());
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

			profitHourly2 = amount / 100 * percent[id];
			profitHourly2 = profitHourly2.toFixed(2);
			profitDaily2 = amount / 100 * percent[id];
			profitDaily2 = profitDaily2.toFixed(2);
			profitWeekly2 = profitDaily2 * 7;
			profitWeekly2 = profitWeekly2.toFixed(2);
			profitMonthly2 = profitHourly2 * 80;
			profitMonthly2 = profitMonthly2.toFixed(2);


			if(amount < minMoney[id] || isNaN(amount) == true){
				$("#profitHourly2").text("Error!");
				$("#profitDaily2").text("Error!");
				$("#profitWeekly2").text("Error!");
				$("#profitMonthly2").text("Error!");
			} else {
				$("#profitHourly2").text("$" + profitHourly2);
				$("#profitDaily2").text("$" + profitDaily2);
				$("#profitWeekly2").text("$" + profitWeekly2);
				$("#profitMonthly2").text("$" + profitMonthly2);
			}
		} else {
			$("#profitHourly2").text("Error!");
			$("#profitDaily2").text("Error!");
			$("#profitWeekly2").text("Error!");
			$("#profitMonthly2").text("Error!");
		}
	}
	if($("#amount2").length){
		calc2();
	}
	$("#amount2").keyup(function(){
		calc2();
	});

});

