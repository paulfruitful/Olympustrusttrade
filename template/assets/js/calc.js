$(function () {
    $('#calc_error').hide();
});

function calc() {
    var inv_amnt_error = false;
    var plan = $("input[name='inv_plan']:checked").val();
    var amount = parseFloat($('#inv_amount').val());
    var percent = 0, days = 0, daily_profit = 0, total_profit = 0, total_return = 0, min_amount = 0, max_amount = 0;

    switch (plan) {
        case 'regular':
            if (amount >= 25 && amount <= 100000) {
                percent = 160;
            } else {
                inv_amnt_error = true;
                min_amount = 25;
                max_amount = 100000;
            }
            break;
        case 'perfect':
            if (amount >= 200 && amount <= 100000) {
                percent = 135;
            } else {
                inv_amnt_error = true;
                min_amount = 200;
                max_amount = 100000;
            }
            break;
    }

    if (inv_amnt_error) {
        $('#calc_success').hide();
        $('#calc_error').show();
        $('#error_msg').html('');
    }
    else {
        total_return = amount * percent / 100;

        total_profit = total_return - amount;

        $('#calc_success').show();
        $('#calc_error').hide();
        $('#total_profit').text(total_profit.toFixedDown(2));
        $('#total_return').text(total_return.toFixedDown(2));
    }

}

Number.prototype.toFixedDown = function (digits) {
    var re = new RegExp("(\\d+\\.\\d{" + digits + "})(\\d)"),
        m = this.toString().match(re);
    return m ? parseFloat(m[1]) : this.valueOf();
};