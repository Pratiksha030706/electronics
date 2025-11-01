<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - electronics Store</title>
    
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
   
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <style>
        
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
            color: #333;
        }
        .container {
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 100px;
        }
        h1 {
            color: #333;
            margin-bottom: 30px;
            text-align: center;
        }
        .contact-info {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
        }
        .info-card {
            flex: 1;
            max-width: 300px;
            margin: 20px;
            padding: 20px;
            border-radius: 10px;
            background-color: #f0f0f0;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }
        .info-card:hover {
            transform: translateY(-5px);
        }
        .info-card i {
            font-size: 36px;
            color: #007bff;
            margin-bottom: 10px;
        }
        .info-card h3 {
            font-size: 20px;
            margin-bottom: 10px;
        }
        .info-card p {
            font-size: 16px;
            margin-bottom: 0;
        }
        .map-container {
            margin-top: 30px;
            text-align: center;
        }
        .map-container iframe {
            width: 100%;
            height: 400px;
            border: 0;
        }
    </style>
</head>
<body>

<?php include 'includes/header.php'; ?>

 
    <div class="container">
        <h1>Contact Us</h1>
        <div class="contact-info">
            <div class="info-card">
                <i class="fas fa-map-marker-alt"></i>
                <h3>Address</h3>
                <p>123 Main Street<br>City, State, ZIP</p>
            </div>
            <div class="info-card">
                <i class="fas fa-phone"></i>
                <h3>Phone</h3>
                <p>+91 9876543210</p>
            </div>
            <div class="info-card">
                <i class="fas fa-envelope"></i>
                <h3>Email</h3>
                <p>jyotielectronics@gmail.com</p>
            </div>
            <div class="info-card">
                <i class="fas fa-clock"></i>
                <h3>Opening Hours</h3>
                <p>Mon - Fri: 9:00 AM - 6:00 PM<br>Sat - Sun: Closed</p>
            </div>
        </div>
        
    </div>

   
    <?php include 'includes/footer.php'; ?>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
