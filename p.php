<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Page</title>
    <style>

:root{
    --main-color:	#006994;
    --black:#222;
    --white:#fff;
    --light-black:#777;
    --light-white:#fff9;
    --dark-bg:reba(0,0,0,.7);
    --light-bf:#eee;
    --border:.1rem solid var(--black);
    --box-shadow:0 .5rem 1rem rgba(0,0,0,.1);
    --text-shadow:0 1.5rem 3rem rgba(0,0,0,.3);

}
        body {
            font-family:sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }
        .btn{
            display: inline-block;
            background: var(--black);
            margin-top: 1rem;
            color: var(--white);
            font-size: 1.7rem;
            padding: 1rem 3rem;
            cursor: pointer;}

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            margin-top: 2%;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            border-radius: 30px;
        }

        .payment-form {
            margin: 20px 0;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            
            
        }

        input[type="text"], input[type="number"], input[type="email"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        

        

        a{
            text-decoration: none;
        }
        h2{
            color: #006994;
        }



    </style>
</head>
<body>
    <div class="container">
        <h2>Payment Details</h2>
        <form class="payment-form" action="paymentdb.php" method="post">
            <div class="form-group">
                <label for="name">Name on card</label>
                <input type="text" id="name" name="name" placeholder="Name of card holder" required>
            </div>
            <div class="form-group">
                <label for="card">Card number</label>
                <input type="text" id="card" name="card" placeholder="1234 5678 9012 3456" required>
            </div>
            <div class="form-group">
                <label for="expiry">Expiry Date</label>
                <input type="date" id="expiry" name="expiry" placeholder="MM/YY" required>
            </div>
            <div class="form-group">
                <label for="cvv">CVV</label>
                <input type="number" id="cvv" name="cvv" placeholder="123" required>
            </div>
            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" placeholder="@gmail.com" required>
            </div>

            <input type="submit" value="submit" class="btn" name="send" >
        </form>
    </div>
</body>
</html>
