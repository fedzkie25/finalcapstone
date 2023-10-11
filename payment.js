        // Retrieve the value from localStorage  
        var valueReceived = localStorage.getItem('dataTosend');

        // Display the value in the second page
        var dataDisplay = document.getElementById('Pricee');
            dataDisplay.textContent = valueReceived;

        // Clear the value from localStorage (optional)
       // localStorage.removeItem('dataToSend');

        const inputs = document.querySelectorAll('input');
        const submit = document.querySelector('#submit-Btn');
        const form = document.getElementById('form');

        inputs.forEach(input => {
        input.addEventListener('input', function(){
            let isAllFilled = true;
            inputs.forEach(input => {
            if (!input.value) {
                isAllFilled = false;
            }
            });
            submit.disabled = !isAllFilled;
            });
        });

        const submitBtn = document.querySelector('.submit-btn');
        submitBtn.addEventListener('click', function(){
            alert("Payment Successful, Thank you!");
            form.submit();
        });