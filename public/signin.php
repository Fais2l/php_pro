<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" href="../css/signin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div class="signin-container">
        <h2>Creat Account</h2>
        <form action="signin.php" method="post">

            <div class="input-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
            </div>

            <div class="input-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>

            <div class="input-group">
                <label for="password">Confirm Password</label>
                <input type="password" id="conpassword" name="conpassword" placeholder="Enter your Password again" required>
            </div>
            
            <div class="agree">
                <input type="checkbox">
                  <h5>Agree all the</h5>
                <h5><a href="https://policies.google.com/terms?hl=en-US">Ruls</a></h5>
            </div>
            <div class="Sign-in">
                <button type="submit">Creat Now</button>
            </div>
            
            
            <!--social media icons html-->

            <div class="social-icons">
                <a href="https://github.com/Fais2l" target="_blank" class="github">
                    <i class="fab fa-github"></i>
                </a>
                <a href="https://twitter.com/yourusername" target="_blank" class="twitter">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="https://linkedin.com/in/yourusername" target="_blank" class="linkedin">
                    <i class="fab fa-linkedin-in"></i>
                </a>
            </div>
            
        </form>
    </div>
</body>
</html>