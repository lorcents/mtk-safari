function getamount(){
    const amount = document.getElementById('#amount').innerHTML;
    console.log(amount);
}
paypal.Buttons({
    style: {
        color: 'blue',
        shape: 'pill'
    },
    createOrder: function(data, actions) {
        return actions.order.create({
            purchase_units: [{
                amount: {
                    value: '10'
                }
            }]
        });
    },
    onApprove: function(data, actions) {
        return actions.order.capture().then(function(details) {
            //Sending to PHP
            const payment_details = {
                id: details.id,
                payer_email: details.payer.email_address,
                payer_id: details.payer.payer_id,
                fname: details.payer.name.given_name,
                lname: details.payer.name.surname,
                amount: details.purchase_units[0].amount.value,
                status: details.status,
                time: details.update_time

            };
            const payment_json = JSON.stringify(payment_details);
            $.post("payment.php",{payment_json},function(data){
                /*if(data === "Your payment was received Successfully!"){
                    alert(data);
                    window.location.replace('http://localhost/mtk-safari/tour-history.php');
                }else{
                    alert(data);
                }*/
                alert (data);
                console.log(payment_details);
            });
        })
    },
    onCancel: function(data) {
        alert("Payment Not Successful! or Cancelled!!")
    }
}).render('#paypal-button');

//Mpesa
function mpesa() {
    alert('Coming soon!')
}