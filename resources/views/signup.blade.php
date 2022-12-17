<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('css/signup.css') }}" />
  </head>
  <body>
    <div class="father">
      <div class="mother">Create amazing website with</div>
      <div class="fatherlogo">
        <img src="{{ URL('images/sign-up/logowing.png') }}" height="60px" width="60px" />
      </div>
      <div class="fatherlogo2">BUILDA</div>
    </div>
    <div class="container">
      <div class="sibling1">
        <div class="sibling1child"></div>
        <div class="sibling1gchild">
          <img src="{{ URL('images/sign-up/Laptopwing.png') }}" />
        </div>
      </div>
      
      <div class="siblingform">
        <form action="/register" method="post">
        <div class="fatherform">Create an account</div>
        <form>
        <div class="parentform">
         <div class="fulform"> <label for="fullname">Full name</label></div>
          <div class="fullform1">
            <input
              type="text"
              id="fll"
              class="ful"
              placeholder="mark peter"
              name="fullname"
              required
            />
          </div>
          <div class="emailform"> <label for="email">Email</label></div>
          <div class="emailform1">
            <input
              type="email"
              id="eml"
              class="ema"
              placeholder="Example@gmail.com"
              name="email"
              required
            />
          </div>
        </div>
        <div class="parentform">
          <div class="passform"><label for="password">Password</label></div>
          <div class="passform1">
            <input
              type="password"
              id="pssl"
              class="pwws"
              placeholder="Password"
              name="password"
              required
            />
            @csrf
            <div class="fgt"><input class="check" id="check" required type="checkbox"> I agree with the <a href="">terms and conditions</a></div>
          </div>
          <button type="submit" class="btn1"><div class="lg">Register</div></button>
        </div>
        <div class="already">Already have an account?<button type="submit" class="sign"><a href="{{route('login')}}">Login</a></button></div>
        <div class="ready">
          <div class="hor1"></div>
         <div class="hor2"> or login with</div>
          <div class="hor3"></div>
        
    </div>
    <footer>
  
      <button class="apple">
      <img src="{{ URL('images/sign-up/applelogowing.png') }}" alt="log in with iCloud" width="40px" height="40px" />
      </button>
    <button type="submit" class="facebook"><img src="{{ URL('images/sign-up/Facebookwing.jpg') }}" width="50px" alt="log in with facebook" height="50px" /></button>
    <button class="google">
      <img src="{{ URL('images/sign-up/googlewing.png') }}" alt="log in with gmail" width="50px" height="50px" />
      </button>
  </footer>
</form>
  </body>
</html>
