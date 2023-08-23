<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
<body>
    <div class="sidenav">
        <h1>
            User Login<br />Authentication
        </h1>
        <h3> <br />
            Get in right now!
        </h3>
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="text-center mb-4">
                    <img src="logo.png" alt="Logo" class="img-fluid">
                </div>
                <h2 class="mt-5 mb-4">Login</h2>
                </form>
                <form action="login_process.php" method="post" class="py-4 px-3 border rounded">
                    <div class="form-group">
                        <label for="username">Username:</label>
                        <input type="text" class="form-control" name="username" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" class="form-control" name="password" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Login</button>
                    <button type="reset" class="btn btn-primary btn-block">Reset</button>
                </form>
                <p>New Here? <a href="registration.php">Register Now!</a></p>
            </div>
        </div>
    </div>
</body>
</html>
