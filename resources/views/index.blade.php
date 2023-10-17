<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Website</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('your-background-image.jpg');
            background-size: cover;
            background-repeat: no-repeat;
        }

        

        

      
    </style>
</head>
<body>

    @extends('layouts.default')

    @section('content');
    <div style="background-image: url('your-background-image.jpg'); background-size: cover; background-position: center; height: 400px;">
        <div class="container" style="padding: 100px 0; text-align: center;">
            <h1 style="color: #fff; font-size: 36px;">Welcome to Your Website</h1>
            <p style="color: #fff; font-size: 18px;">We provide amazing services for you</p>
        </div>
    </div>
    
    <div class="container" style="padding: 40px 0;">
        <section style="text-align: center;">
            <h2>Our Services</h2>
            <p>We offer a wide range of services to meet your needs.</p>
        </section>
        <div class="row" style="margin-top: 20px;">
            <div class="col-md-4">
                <div class="service-box" style="border: 1px solid #ddd; padding: 20px; text-align: center;">
                    <h3>Service 1</h3>
                    <p>Description of Service 1</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service-box" style="border: 1px solid #ddd; padding: 20px; text-align: center;">
                    <h3>Service 2</h3>
                    <p>Description of Service 2</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service-box" style="border: 1px solid #ddd; padding: 20px; text-align: center;">
                    <h3>Service 3</h3>
                    <p>Description of Service 3</p>
                </div>
            </div>
        </div>
    </div>
    
    <div style="background-color: #f5f5f5; padding: 40px 0;">
        <div class="container">
            <section style="text-align: center;">
                <h2>About Us</h2>
                <p>Learn more about our company and our mission.</p>
            </section>
            <div class="row" style="margin-top: 20px;">
                <div class="col-md-6">
                    <img src="rainbow-colorful.jpg" alt="About Us" style="width: 100%; height: auto;">
                </div>
                <div class="col-md-6">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget venenatis ex, id vehicula massa. Proin nec malesuada mi, id scelerisque elit.</p>
                </div>
            </div>
        </div>
    </div>
   
    

</body>
</html>
 @endsection