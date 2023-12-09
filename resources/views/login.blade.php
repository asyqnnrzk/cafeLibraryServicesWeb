<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/login.css">
    <title>Login Page</title>
</head>
<body>
    <header>
        <h1>Login</h1>
    </header>
    <main>
        <div class="row">
            <div class="column">
                <img src="stickman.png" alt="Default image">
            </div>
            <div class="container">
                <p class="reg">
                    No account? 
                    <a href="">Make one</a>
                </p>
                <div class="input">
                    <label for="email"><b>Email:</b></label>
                    <input style="float: right" type="text" placeholder="Your email" name="email" id="email" required>
                </div>
                <div class="input">
                    <label for="password"><b>Password:</b></label>
                    <input style="float: right" type="password" placeholder="Your password" name="password" id="password" required>
                </div>
                <button style="float: right" type="login" value="Login" onclick="">Login
                </button>
            </div>
        </div>
    </main>
    <footer>2023 Cafe Library Services</footer>
</body>
</html>