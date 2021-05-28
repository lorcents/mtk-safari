paypal.Buttons({
    style:{
        color:'blue',
        shape:'pill'
    },
    createOrder:function(data,actions){
        return actions.order.create({
            purchase_units:[{
                amount:{
                    value: '10.00'
                }
            }]
        });
    },
    onApprove:function(data,actions){
        return actions.order.capture().then(function(details){
            //Sending to PHP
            const payment_json = JSON.stringify(details);
            $.ajax({  
                type: 'POST',  
                url: 'payment.php', 
                data: 'payment_json',
                success: function(response) {
                    alert('Payment made successfully');
                    window.location.replace('http://localhost/mtk/checkout/payment.php');
                }
            });

            /*console.log(details);
            alert('Payment made successfully')
            window.location.replace('http://localhost/mtk/')*/
        })
    },
    onCancel:function(data){
        alert("Payment Not Successful! or Cancelled!!")
    }
}
).render('#paypal-button');

//Mpesa
function mpesa(){
    alert('Coming soon!')
}