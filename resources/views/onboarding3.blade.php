<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/onboarding3.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
    <header>
      <div class="head">
        <img src="{{URL('images/o3/buildalogowing.jpg')}}" width="43px" height="48px" />
        <div class="build">
          <img src="{{ URL('images/o3/BUILDAwing.jpg') }} " width="105px" height="25px" />
        </div>
      </div>
    </header>
    
    <div class="container">
      <div class="textcon">
      <div class="text1">What name would you love to call your website?</div>
      <div class="tex1">You can easily change it anytime.</div>
    </div>
    <form action="">
    <div class="container1">
    <span class="larrow" >&#129144</span>
    <span class="back">back</span>
    <span class="search">
      <i class="fa fa-search"  style="font-size:24px"></i><input type="select" type="select" name="search" id="search1" class="search2"  placeholder="search for your websites or businesses" />
    </span> <span class="rarrow"><button type="submit" class="btn1"><span class="Next">Next</span> <span class="arr"> &#10132</span></button></span></form>
</div>
    </div>
  </body>
</html>
