<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You - Prem Rawat</title>
    
    <!-- Tapai ko aafno CSS file link garne -->
    <link rel="stylesheet" href="css/style.css">
    
    <!-- Font Awesome ko lagi (icon dekhauna) - yedi tapai le aafno project ma use garnu bhayeko chha bhane -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    
    <style>
        /* Yo CSS sidhai yaha lekhda pani hunchha, ya style.css ma halda pani hunchha */
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f4; /* Background halka grey */
        }
        .success-container {
            text-align: center;
            background-color: #fff;
            padding: 40px 50px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            max-width: 500px;
        }
        .success-container .icon {
            font-size: 60px;
            color: #28a745; /* Green color */
            margin-bottom: 20px;
        }
        .success-container h1 {
            font-size: 2.5em;
            margin-bottom: 10px;
            color: #333;
        }
        .success-container p {
            font-size: 1.1em;
            color: #555;
            margin-bottom: 30px;
        }
        /* Tapai ko style.css ma bhayeko button style prayog garna 'btn' class use gareko */
        .btn-home {
            display: inline-block;
            padding: 12px 30px;
            background-color: #007bff; /* Button ko color */
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }
        .btn-home:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

    <div class="success-container">
        <div class="icon">
            <i class="fas fa-check-circle"></i>
        </div>
        <h1>Thank You!</h1>
    <p>Your message has been sent successfully. We will get in touch with you shortly.</p>
        <a href="introduction.php" class="btn-home">Go Back to Home</a>
    </div>

</body>
</html>