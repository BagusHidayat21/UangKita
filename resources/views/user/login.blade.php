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
        <h1>Sign In</h1>
        <form method="post">
            @csrf
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
            <div class="pass">Forgot Password?</div>
            <input type="submit" value="Sign In" />
            <div class="signup_link">Not a member? <a href="/register">Sign Up</a></div>
        </form>
    </div>
</body>

</html>
