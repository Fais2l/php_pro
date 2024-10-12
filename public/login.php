<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login Page</title>
    <link rel="stylesheet" href="../css/login.css">
    <!--sochal media icons-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <form action="login.php" method="post">
            <div class="input-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="forget">
                <a href="/index.html">Forget your password ?</a>
            </div>
            <div class="log-in">
                <button type="submit">Log in</button>
            </div>
            <div class="creat-account">
                <button type="button"><a href="signin.php">Creat Account</a></button>
            </div>
            
            <!--social media icons html-->

            <div class="social-icons">
                <a href="https://github.com/Fais2l" target="_blank" class="github">
                    <i class="fab fa-github"></i>
                </a>
                <a href="https://twitter.com/yourusername" target="_blank" class="twitter">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="https://www.linkedin.com/in/faisal-mzyad-ab507030b/?trk=public-profile-join-page" target="_blank" class="linkedin">
                    <i class="fab fa-linkedin-in"></i>
                </a>
            </div>


        </form>
    </div>
</body>
</html>