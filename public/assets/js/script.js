
        const btnApplyCoupon = document.querySelector('#btn-apply-coupon');
        const btnCheckout = document.querySelector('#btn-checkout');
        const couponStatus = document.querySelector('#coupon-status');
        const coupon= document.querySelector('#coupon');
        btnApplyCoupon.addEventListener('click', async function() {
            try {

                if(!coupon.value.length) {
                    alert('Digite um cupom');
                    return
                }
                const response = await fetch('https://api.stripe.com/v1/coupons/' + coupon.value,{
                    method:'get',
                    headers:{
                        'Content-Type': 'application/json',
                        'Authorization': 'Bearer sk_test_51MkZjsGtrASLEhsee12EwG5KfGbpBrcAn97Dtdy222ZK3mZfJxTKC9728ZDm7WGVOTYQzB9XnovXrsfmXGWX0iT300G9VUO9ix'
                    }
                })

                const couponResponse = await response.json();

                if(!couponResponse.valid){
                    couponStatus.textContent = "Cupom inválido";

                } else {
                    couponStatus.textContent = "Desconto de " + couponResponse.percent_off + '%';
                    btnCheckout.setAttribute('href','/checkout?coupon=' + coupon.value)
                }

                console.log(couponResponse);

            } catch (error) {
                console.log(error);
            } 
        })