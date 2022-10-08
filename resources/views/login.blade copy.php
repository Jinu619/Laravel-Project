<html lang="en-us">
  <head>
    <title>Login Now</title>
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
  </head>
    <body>
      <div class="container">
        <div class="logo"><img class="logo" src="images/logo.jpg"></div>
        <div class="logo-title">PROJECT</div>
        <div class="container2">
            <form action="/" method="POST">
              @csrf
                <label>EMAIL</label>
                <input type=email name="email" placeholder="john@gmail.com"/>
                <label>PASSWORD</label>
                <input type=password name="password" placeholder="Atleast 8 characters long"/>
                <button type="submit">LOGIN</button>
            </form>
        </div>
        <a class="forgot" href="/forgotpassword" target="_blank">Forgot password</a>
        <a href="/register">Register Now</a>
      </div>
      <a href="https://ginuresumes.herokuapp.com/" target="_blank">Made By Ginu</a>

    </body>
  
</html>