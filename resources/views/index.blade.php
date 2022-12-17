<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BUILDA</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
      integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
  </head>
  <body>
    <nav>
      <div class="navbar">
        <div class="bar-1">
          <img src="{{ URL('images/Vector.png') }}" alt="A blue round logo" />
          <h1 class="logo-text"><a href="{{route('index')}}">builda</a></h1>
          <p class="border">home</p>
          <p>templates</p>
          <p>plans</p>
          <p>support</p>
        </div>
        <div class="bar-2">
          <div><a href="{{route('login')}}">login</a></div>
          <button><a href="{{route('signup')}}">Create my Website</a></button>
        </div>
      </div>
    </nav>
    <section id="background">
      <div class="header-container">
        <div class="header-text">
          <div id="circle-1"></div>
          <div id="circle-2"></div>
          <div id="circle-3"></div>
          <h1>Create your own <br />website how you <br />want it!</h1>
          <p>
            You can create a professional-looking website with Builda in just
            minutes. Choose from our thousands of templates and build a website
            yourself.
          </p>
          <button>Get Started</button>
        </div>
        <div class="header-image">
          <img
            src="{{ URL('images/Image.png') }}"
            alt="a picture of two ladies looking at their laptop"
          />
        </div>
      </div>
    </section>

    <section>
      <div class="center">
        <h2>How to create your website</h2>
        <div class="border-1"></div>
      </div>

      <div class="guideline-cont">
        <div class="guide-text">
          <div>Step 1</div>
          <h3>Sign up</h3>
          <p>
            Click on the “Create my Website” button to sign up. It only takes a
            moment.
          </p>
        </div>
        <div class="guide-img">
          <img
            src="{{ URL('images/image 13.png') }}"
            alt="website logo"
            class="guide-logo"
          />
        </div>
      </div>
      <div class="guideline-cont">
        <div class="guide-img">
          <img
            src="{{ URL('images/image 13 (1).png') }}"
            alt="website logo"
            class="guide-logo"
          />
        </div>
        <div class="guide-text padding">
          <div>Step 2</div>
          <h3>Choose and customize a Template</h3>
          <p>
            Make your website stand out with a template that is right for your
            industry or idea.
          </p>
        </div>
      </div>
      <div class="guideline-cont">
        <div class="guide-text">
          <div>Step 3</div>
          <h3>Publish your website with just one click</h3>
          <p>Publish your website with just one click</p>
        </div>
        <div class="guide-img">
          <img
            src="{{ URL('images/image 13.png') }}"
            alt="website logo"
            class="guide-logo"
          />
        </div>
      </div>
    </section>

    <section>
      <div class="sec-3">
        <h2>Get started with a template</h2>
        <p>
          Choose from more than a hundred of carefully prepared and easy to
          customize templates.
        </p>
        <div class="template-img">
          <img
            src="{{ URL('images/Image (1).png') }}"
            alt=" variety website template pictures"
          />
        </div>
      </div>
      <div class="template-butt">
        <button>Discover more templates</button>
      </div>
    </section>

    <section class="why">
      <h2>Why choose Builda</h2>
      <div class="border-center"></div>
      <div class="why-container">
        <div class="why-child">
          <img src="{{ URL('images/buuild.png') }}" alt="buildings picture" />
          <h3>Build on the go</h3>
          <p>
            You can use your tablet or phone to create and update your website
            anywhere you are.
          </p>
        </div>
        <div class="why-child">
          <img
            src="{{ URL('images/time and money.png') }}"
            alt="a picture of clock and money"
          />
          <h3>Save money and time</h3>
          <p>
            You don't need a developer to make a beautiful website. Get it for
            free in just a few minutes.
          </p>
        </div>
        <div class="why-child">
          <img
            src="{{ URL('images/get help.png') }}"
            alt="a picture of how to get help"
          />
          <h3>Get help fast</h3>
          <p>
            You can rely on our 20 years of experience and local support that's
            got you covered.
          </p>
        </div>
      </div>
      <div class="why-butt">
        <button>Get Started</button>
      </div>
      <section class="background-2">
        <div class="prices-cont">
          <div class="prices-child">
            <h3>3,000+</h3>
            <p>Design templates</p>
          </div>
          <div class="prices-child">
            <h3>400,000+</h3>
            <p>Published websites</p>
          </div>
          <div class="prices-child">
            <h3>1,000,000+</h3>
            <p>Users</p>
          </div>
        </div>
      </section>
    </section>
    <section>
      <h2>More than just a tool</h2>
      <div class="why-container">
        <div class="why-child repeat">
          <img
            src="{{ URL('images/image 22.png') }}"
            alt="laptop picture on the table"
          />
          <h3>Responsive design</h3>
          <p>
            No matter what device your visitors are using, mobile-responsive
            design means your website always displays flawlessly.
          </p>
        </div>
        <div class="why-child repeat">
          <img src="{{ URL('images/image 20.png') }}" alt="email logo picture" />
          <h3>Professional email</h3>
          <p>
            Easily promote your brand and Communicate professionalism with your
            unique address. E.g yourname@yourdomain.com
          </p>
        </div>
        <div class="why-child repeat">
          <img src="{{ URL('images/image 16.png') }}" alt="illustration picture" />
          <h3>Easy analytics</h3>
          <p>
            Keep track of visitor numbers and other statistics with the
            analytics tool. Use the data to improve your website even more.
          </p>
        </div>
      </div>

      <div class="why-container">
        <div class="why-child repeat">
          <img
            src="{{ URL('images/image 18.png') }}"
            alt="domain and security logo"
          />
          <h3>Domain and SSL</h3>
          <p>
            Your domain is free for the first year. We'll also throw in a free
            SSL certificate to help protect your visitors' data
          </p>
        </div>
        <div class="why-child repeat">
          <img src="{{ URL('images/image 21.png') }}" alt="infrastructure design" />
          <h3>Resilient infrastructure</h3>
          <p>
            Multi-cloud hosting ensures 99.9% uptime, even during traffic
            spikes.
          </p>
        </div>
        <div class="why-child repeat">
          <img src="{{ URL('images/image 19.png') }}" alt="creation design" />
          <h3>Unlimited creation</h3>
          <p>
            Create a website with a complete suite of advanced functionalities
            and bring your vision to life.
          </p>
        </div>
      </div>
      <div class="why-butt repeat-butt">
        <button>Get Started</button>
      </div>
    </section>

    <section class="background-3">
      <h2>Trusted by more than 2 millions users</h2>
      <div class="icon">
        <i class="fa-solid fa-quote-left"></i>
      </div>
      <div class="position">
        <p>
          I’m glad I decided to work with you. It’s really great how easy my
          websites are to update and manage. My new site is so much faster and
          easier to work with than my old site. It used to take me an hour or
          more to update a page and I would still sometimes screw things up.

          <br />
          Now it’s almost like having a designer right here with me. I just
          choose the page, make the change and click save. It’s so simple.
          Thanks, guys!
        </p>
      </div>
      <div class="black-img-cont">
        <div>
          <img src="{{ URL('images/Ellipse 1.png') }}" alt="cute ellipse picture" />
        </div>
        <div class="black-text">
          <h5>TeamLapwing</h5>
          <p>Product designer at Zuri</p>
        </div>
      </div>
    </section>
    <footer>
      <div class="footer-container">
        <div class="foot-1">
          <h4>BUILDA</h4>
          <p>About us</p>
          <p>About us</p>
          <p>Privacy policy</p>
          <p>Privacy policy</p>
          <p>User Testimonial</p>
        </div>
        <div class="foot-1">
          <h4>PRODUCTS AND SERVICES</h4>
          <p>Build your website</p>
          <p>Templates</p>
          <p>Plans</p>
          <p>Affiliate program</p>
        </div>
        <div class="foot-1">
          <h4>SUPPORT</h4>
          <p>Contact us</p>
          <p>Online support</p>
          <p>Help center</p>
        </div>
        <div class="foot-4">
          <h4>Subscribe</h4>
          <form action="">
            <div>
              <i class="fa-regular fa-envelope"></i>
              <input type="text" placeholder="Email address" />
            </div>
            <button>Subscribe</button>
          </form>
          <span>
            By subscribing to newsletter you agree with our
            <a href="#">Privacy Policy.</a>
          </span>
        </div>
      </div>
      
        <div class="foot-logo">
          <img src="{{ URL('images/Vector.png') }}"" alt="A blue round logo" />
          <h1>builda</h1>
        </div>
        <div class="ending-foot">
          <p>&copy; Copyright 2022 Builda. All rights reserved </p>
        <div class="icons">
          <i class="fa-brands fa-square-facebook"></i>
          <i class="fa-brands fa-linkedin"></i>
          <i class="fa-brands fa-square-twitter"></i>
        </div>
      </div>
    </footer>
  </body>
</html>
