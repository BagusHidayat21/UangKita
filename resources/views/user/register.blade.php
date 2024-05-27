<!DOCTYPE html>
<!-- Website - www.codingnepalweb.com -->
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8" />
    <title>Animated Login Form | CodingNepal</title>
    <link rel="stylesheet" href={{ asset('asset/css/login.css') }} />
</head>

<body>
    <div class="center">
        <h1>Sign Up</h1>
        <form method="post">
            @csrf
            <div class="txt_field">
                <input type="email" name="email" required />
                <span></span>
                <label>Email</label>
            </div>
            <div class="txt_field">
                <input type="text" name="username" required />
                <span></span>
                <label>Username</label>
            </div>
            <div class="txt_field">
                <input type="password" name="password" required />
                <span></span>
                <label>Password</label>
            </div>
            <input type="submit" value="Sign Up" />
            <div class="signup_link">Have an Account? <a href="login">Sign In</a></div>
        </form>
    </div>
</body>

</html>
