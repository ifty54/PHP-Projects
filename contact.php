<!DOCTYPE html>
<html>
<head>
    <title>Contact Us</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #343a40; 
            color: #fff; 
            display: flex;
            justify-content: center;
            align-items: center;
           
        }
        .contact-container {
            width: 400px;
            padding: 30px;
            background-color: #212529; 
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        }
        .contact-form label {
            font-weight: bold;
        }
        .contact-form textarea {
            resize: none;
        }
        .contact-form button {
            margin-top: 15px;
        }
        .form-group{
        color: white;
        }
        .text-center-mb-2{
            padding-top: 12px; 
            padding-bottom: 12px;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <?php
        include "./navbar/header.php"
        ?>
        <div class="row justify-content-center">
            <div class="col-md-60">
                <div class="text-center-mb-2">
                    <h2>Love hearing from you! </h2>
                </div>
                <div class="contact-container">
                    <form class="contact-form">
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control" id="name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" required>
                        </div>
                        <div class="form-group">
                            <label for="message">Message:</label>
                            <textarea class="form-control" id="message" rows="5" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
