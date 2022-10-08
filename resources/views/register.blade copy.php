<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/register.css')}}">

    <title>Register Now</title>

    <!-- <link rel="stylesheet" href="style.css"> -->
</head>
<body>
    <div class="login-div">
        <div class="logo"><img class="logo" src="images/logo.jpg"></div>
        <div class="title">PROJECT</div>
        <form action="/register" method="POST">
            @csrf
            <div class="fields">
                <div class="name"><input type="name" class="name-input" placeholder="  &#9998; Enter full name" name="fname" required></div>
                <div class="email"><input type="email" class="email-input" placeholder="  &#9993; Email" name="email" required></div>
                <div class="username"><input type="text" class="user-input" placeholder="  &#x260E; Phone Number" name="phone" pattern="[7-9]{1}[0-9]{9}" required></div>
                <div class="username"><input type="username" class="user-input" placeholder="  &#9998; Username" name="uname" required></div>
                <div class="f-password"><input type="password" class="pass-input" placeholder="  &#128273; Password" name="password" required></div>
                <div class="f-password"><input type="password" class="password-input2" placeholder="  &#128273; Confirm password" required></div>
            </div>
            <button type="submit" class="reg-button">Register</button>
        </form>
        <div class="link">
            <p>Already a member? <a href="/">Sign in</a></p>
        </div>
    </div>
</body>
</html>