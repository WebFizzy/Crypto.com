<?php

session_start();

if(isset($_SESSION["login_db_id"])) {
  $mysqli = require __DIR__ . "/database.php";

  $sql = "SELECT * FROM login_db WHERE id = {$_SESSION["login_db_id"]}";

  $result = $mysqli->query($sql);

  $user = $result->fetch_assoc();
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>    
    <title>HOME</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script type="text/javascript">
  var _smartsupp = _smartsupp || {};
  _smartsupp.key = '4cfa0ee11265b91d37b12f4ab005852e4ecdcf78';
  window.smartsupp||(function(d) {
    var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
    s=d.getElementsByTagName('script')[0];c=d.createElement('script');
    c.type='text/javascript';c.charset='utf-8';c.async=true;
    c.src='https://www.smartsuppchat.com/loader.js?';s.parentNode.insertBefore(c,s);
  })(document);
  </script>


    <link rel="stylesheet" type="text/css" href="styles/index.css.php">
    <link rel="stylesheet" type="text/css" href="styles/about us.css.php">
    <link rel="stylesheet" type="text/css" href="styles/our service-css.php">
    <link rel="stylesheet" type="text/css" href="styles/login-css.php">
    <link rel="stylesheet" type="text/css" href="styles/signup-css.php">
    <link rel="stylesheet" type="text/css" href="styles/contact-us.css.php">
    <link rel="stylesheet" type="text/css" href="styles/legal-css.php">
    <link rel="stylesheet" type="text/css" href="styles/invstmt-plancss.php">
    <link rel="stylesheet" type="text/css" href="styles/terms-agr-css.php">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  
    <script src="https://kit.fontawesome.com/88f8f09358.js" 
    crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    .carousel-inner > .item > img,
    .carousel-inner > .item > a > img {
    width: 40%;
     margin: auto;
   }
  </style>

  </head>
  <body>
  
    <section class="header">
        <div class="topnav">  
          <a id="active" href="index.php">Logo </a>
            <div id="myLinks"> 
            <a href="index.php">Home</a>
            <a href="about us.php">About us</a>
            <a href="Our service.php">Services</a>           
            <a href="signup1.php">Investment-plan</a>
            <a href="signup1.php">FAQs</a>
            <a id="login" href="sign1-in.php">Login</a>
            <a id="create" href="signup1.php">Create account</a>
          </div>
          <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
          </a>
        </div>
      </section> 
      
      <script>
        function myFunction() {
            var x = document.getElementById("myLinks");
            if (x.style.display === "block") {
              x.style.display = "none";
            } else {
              x.style.display = "block";
            }
          }
      </script>

      <!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div class="tradingview-widget-container__widget"></div>
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
  {
  "symbols": [
    {
      "description": "",
      "proName": "BINANCE:BTCUSDT"
    },
    {
      "description": "",
      "proName": "FX:EURUSD"
    },
    {
      "description": "",
      "proName": "FX:GBPUSD"
    },
    {
      "description": "",
      "proName": "BINANCE:ETHUSDT"
    },
    {
      "description": "",
      "proName": "TVC:GOLD"
    },
    {
      "description": "",
      "proName": "NASDAQ:TSLA"
    },
    {
      "description": "",
      "proName": "BINANCE:SOLUSDT"
    },
    {
      "description": "",
      "proName": "TVC:DEU40"
    },
    {
      "description": "",
      "proName": "BINANCE:DOGEBTC"
    },
    {
      "description": "",
      "proName": "BINANCE:BCHPERP"
    },
    {
      "description": "",
      "proName": "BINANCE:XRPUSDT"
    },
    {
      "description": "",
      "proName": "BINANCE:LUNAUSDT"
    },
    {
      "description": "",
      "proName": "BINANCE:BNBUSDT"
    },
    {
      "description": "",
      "proName": "BINANCE:MATICUSDT"
    },
    {
      "description": "",
      "proName": "NASDAQ:META"
    }
  ],
  "showSymbolLogo": true,
  "colorTheme": "light",
  "isTransparent": false,
  "displayMode": "adaptive",
  "locale": "en"
}
  </script>
</div>
<!-- TradingView Widget END -->

      
    <section class="section2">
      <div class="row2">
        <h1 id="headn">WE HELP YOU ACHIEVE YOUR GOAL!</h1>
        <P class="company-info1">
          Our expertise helps us in effective investment management. We maximize profits while minimizing risks–thus, every investment brings income. Just try right now and see for yourself.
        </P>
        <h1 id="headn2">
          About Us
        </h1>
        <div  data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
        <p class="company-info2">
          “We believe in the future of cryptocurrency, because it entered the exchange markets on a strong note. Success in this sphere is assured to everyone, who gets the hang of managing risks in this sphere. ”
          The activity of the real Company is the sustainable Management of participations in any Real Estate, Financial, Commercial and also deal with trading and mining on top Government bonds and recycling of waste products and oil ribs to pay their Investors.
        </p>
        </div>
      </div>
    </section>
    
    <section class="section3">
      <div class="security1">
        <img class="key-icon" src="icons/abt-ic1.png"> 
       <b>INDUSTRY-GRADE SECURITY</b> 
      
      <div class="info">
        We use the same security best practices as leading 
        financial institutions: 256-bit encryption, OAuth2, OpenID 
        Connect.
      </div>
    </div><br>
    <div class="security2">
        <img class="loan-icon" src="icons/abt-ic2.png"> 
        <b>OVER-COLLATERALIZED LOANS</b>
      
         
      <div class="info">
        The loan pool fortunesper.net users fund is over-collateralized by 350%+. 
        Not a single lender to date has lost money on their principal.
      </div>
      
<hr>

      <h2 class="watchwd">Our Warchword:</h2>
      <div class="B-icon">
          <i id="bag" class="fas fa-business-time"></i>
          <h4 id="co">Consistency</h4>  
          <br>
          <i id="bag" class="fas fa-coins"></i>
          <h4 id="co">Strategy</h4>
         <br>
          <i id="bag" class="fas fa-chart-line"></i>
          <h4 id="co">Profits</h4>
        
      </div>
    </div>
    <div  class="take-adv">
      <p>
        <h2>A proven solutions to achieve cryptocoin success.</h2> 
        Our roots go back to 2007 - right around the beginning of the revolution that would become known today as Bitcoin. Following the boom of this industry, we quickly began to see some of the common issues that were present when people tried to become involved. We took this need nto account along with our own personal ambition to develop an integrated platform that was able to both satisfy the needs of investors and meet their expectations with sufficient returns on their investments. Since then, we have maintained our focus as a company that looks towards the future and transforms the opportunities offered to our valued clients.
      </p>
    </div>
  </div>
    </section>

    <section class="section4">
    <h1 id="serv"> 
      Our Service
    </h1>
    <div class="bitcoin-logo"  data-aos="flip-left">
      <img class="btc-log" src="images/w3 btc image2.png"> 
    </div>
    <div class="btc-service">
      <h1 class="h-one">
        One of the Fastest Way to Grow Your Money
      </h1>
      <p class="h-six">
       <b>Cryptocurrency Investment-</b> 
        This is becoming the "New Money" in the finance industry, making waves and amazing returns on invested capital. <br>
        <b>Real Estate Management-</b> Real estate investing, even on a very small scale, remains a tried and true means of building an individual's cash flow nd wealth. <br>
        <b>Stocks and Commodites-</b> These markets allow sales and purchases of stocks and other financial products such as cmmodities and futures. <br>
        <b>Agriculture-</b>Literally buying a farm isn't a feasible strategy for the average investor.Fortunately, investors have many other means to gain exposure to the sector beyond sinking money into a farm. <br>
        <b>Oil and Gas-</b> The oil and gas industry is one of the largest sectors in the world in terms of dollar value, generating an estimated $5 trillion in global revenue as of 2022
        <br>
        <br>
        <br>
        
        <signup1="bttt" href="Our service.php">Read More <i class="fa fa-arrow-circle-right" style="color: rgb(196, 191, 191);"></i></i></a>
      </p>
      </div>
    </section>
    
    <section class="section5">
      <h1 class="invest-plan">Our Investment Plan</h1>
      
      <p class="plan-note">
        We understand the needs of our customers very much that our investment plans covers the widest range of benefits.
      </p> 
        <div class="container">
          <div class="braze-plan">
            <p class="braze">BRAZE-PLAN</p> <br>
            <p id="int">1.50% </p>
            <p id="days">After 7 Days</p><hr>
            <p id="amt">MINIMUM $250.00 <br>
            MAXIMUM $999.00</p>
            <button><a id="ton" href="signup1.php">Deposit</a></button>
          </div>
          <div class="bronze-plan">
            <p class="bronze">BRONZE-PLAN</p> <br>
            <p id="int">2.00% </p>
            <p id="days">After 7 Days</p><hr>
             <p id="amt">MINIMUM $1,000.00 <br> 
             MAXIMUM $4,999.00 </p> 
            <button><a id="ton" href="signup1.php">Deposit</a></button>
          </div>
          <div class="silver-plan">
            <p class="silver">SILVER-PLAN</p> <br>
            <p id="int">3.00% </p>
            <p id="days">After 7 Days</p> <hr>
             <p id="amt">MINIMUM $5,000.00 <br>
             MAXIMUM $9,999.00</p>
            <button><a id="ton" href="signup1.php">Deposit</a></button>
          </div>
          <div class="gold-plan">
            <p class="gold">GOLD-PLAN</p><br>
            <p id="int">5.00% </p>
            <p id="days">After 7 Days</p> <hr>
            <p id="amt">MINIMUM $10,000.00 <br>
            MAXIMUM UNLIMITED</p>
            <button><a id="ton" href="signup1.php">Deposit</a></button>
          </div>
        </div>
        
      <br>  
    </section>

    <section class="section6">
      <h1>Our Features</h1>  
    <p class="features">
      We provide investors with a unique array of features 
      running on a solid technological base we have developed.
    </p>
    <div class="card-group" data-aos="fade-up" data-aos-duration="3000">
        <div class="card-body" data-aos="fade-right"
     data-aos-offset="100"
     data-aos-easing="ease-in-sine">
          <i class="far fa-address-card" id="cl"></i>
          <h5 class="card-title">Certified Management</h5>
          <p class="card-text">
            Big money is certified and licensed by 13456 
            Welling New Zealand as a credible assets management platform...</p>
        </div>
        <div class="card-body">
          <i class="fas fa-briefcase" id="cl"></i>
          <h5 class="card-title">Secure Transaction</h5>
          <p class="card-text">
            Our site is hosted on a highly secured platform 
            with SSL encryption (postive SSL) for secured transaction...
          </p>
        </div>
        <div class="card-body" data-aos="fade-right"
     data-aos-offset="100"
     data-aos-easing="ease-in-sine">
          <i class="fas fa-donate" id="cl"></i>
          <h5 class="card-title">Hourly Profits</h5>
          <p class="card-text">
            All profits will be caculated hourly 
            to your account balance. You can withdraw anytime after 7days onword...</p>
        </div>
        <div class="card-body">
          <i class="fas fa-tasks" id="cl"></i>
          <h5 class="card-title">Management Team</h5>
          <p class="card-text">
            We have professional team and we have developed a 
            automatic system that will allow you to make profit 
            handsomely. It includes defined risk prevention as 
            well as stable income for any investment plan...
          </p>
        </div>
        <div class="card-body" data-aos="fade-right"
     data-aos-offset="100"
     data-aos-easing="ease-in-sine">
          <i class="fas fa-briefcase" id="cl"></i>
          <h5 class="card-title">Secure Transaction</h5>
          <p class="card-text">
            Instant Withdrawals. Withdrawal requests are 
            processed instantly without any fee. You don't have 
            any limit. If you meet pending please check e-currency
            website first!...
          </p>
        </div>
        <div class="card-body">
          <i class="fas fa-print" id="cl"></i>
          <h5 class="card-title">Instant Withdrawals</h5>
          <p class="card-text">Our mail support is working 24x7 hours     online and Our online chat support is working about 6 hours daily. The VIP member phone support is working 24x7 hours!...
          </p>
        </div>
    </div>
    </section>

    <section class="section7">
      <div id="team-back">
          <h1 class="exclusive">
            Members of Our Exclusive 
            Team.
          </h1>
          <div class="Our-team">
             <p class="zachary">
              <img class="direct" src="images/t1.jpg" alt="director"> <br>
                <strong>ZACHARY M. CHASTAIN</strong> <br>
                CEO & Founder 
              </p>  
            
              <p class="james">
                <img class="CEO" src="images/t4.jpg" alt=""> <br>
                <strong>JAMES R. PERKINS</strong> <br>
                Investment Manager
              </p>

              <p class="alina">
                <img class="consult" src="images/team3.jpg" alt="the consultant"> <br>
                <strong>ALINA LUCY</strong> <br>
                Marketing Manager
              </p>

              <p class="steven">
                <img class="manager" src="images/team1.jpg" alt="the manager"><br>
                <strong>STEVEN TAYLOR</strong> <br>
                PR and Consulting
              </p> 
            
          </div>

        </div>
      </div>
    </section>

      <div class="container2">
        <h2>Company Statistics</h2>
        <p class="stats-info">
          We provide the most trusted financial services on the 
          market - our clients agree.
        </p> 
        <div id="myCarousel" class="carousel slide">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li class="item1 active"></li>
            <li class="item2"></li>
            <li class="item3"></li>
            <li class="item4"></li>
            <li class="item5"></li>
          </ol>
      
          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
      
            <div class="item active">
              <img src="icons/stat-ic1.png" alt="Chania">
              <div class="carousel-caption">
                <h2>Started</h2>
                <h3>10 December 2015</h3>
              </div>
            </div>
      
            <div class="item">
              <img src="icons/stat-ic3.png" alt="Chania">
              <div class="carousel-caption">
                <h2>Total accounts</h2>
                <h3>5159</h3>
              </div>
            </div>
          
            <div class="item">
              <img src="icons/stat-ic1.png" alt="Flower">
              <div class="carousel-caption">
                <h2>Total Deposited</h2>
                <h3>$60387362.99</h3>
              </div>
            </div>
      
            <div class="item">
              <img src="icons/stat-ic3.png" alt="Flower">
              <div class="carousel-caption">
                <h2>Total withdraw </h2>
                <h3>$234564563</h3>
              </div>
            </div>
        
            <div class="item">
              <img src="icons/stat-ic5 copy.png" alt="Flower">
              <div class="carousel-caption">
                <h2>Last updated</h2>
                <h3>Feb 8, 2022</h3>
              </div>
            </div>
          </div>
      
          <!-- Left and right controls -->
          <a class="left carousel-control" href="#myCarousel" role="button">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" role="button">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true" style="color: black;"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
      
      <script>
      $(document).ready(function(){
        // Activate Carousel
        $("#myCarousel").carousel();
          
        // Enable Carousel Indicators
        $(".item1").click(function(){
          $("#myCarousel").carousel(0);
        });
        $(".item2").click(function(){
          $("#myCarousel").carousel(1);
        });
        $(".item3").click(function(){
          $("#myCarousel").carousel(2);
        });
        $(".item4").click(function(){
          $("#myCarousel").carousel(3);
        });
        $(".item5").click(function(){
          $("#myCarousel").carousel(4);
        });
          
        // Enable Carousel Controls
        $(".left").click(function(){
          $("#myCarousel").carousel("prev");
        });
        $(".right").click(function(){
          $("#myCarousel").carousel("next");
        });
      });
      </script>
      

    <section class="section9">
      <div class="refer-box">
        <p class="refer">
          Referral Commission
        </p>
  
        <button class="referral-button">
         10.00 <small>%</small>
        </button>
      </div>
    </section>

    <script>
      (function(b,i,t,C,O,I,N) {
        window.addEventListener('load',function() {
          if(b.getElementById(C))return;
          I=b.createElement(i),N=b.getElementsByTagName(i)[0];
          I.src=t;I.id=C;N.parentNode.insertBefore(I, N);
        },false)
      })(document,'script','https://widgets.bitcoin.com/widget.js','btcwdgt');
    </script>

    <div class="btcwdgt-chart" style="margin-left: 2rem;"></div>

    <section class="section10">
        <p class="ask">Frequently Asked Questions</p>
        <p class="quest">Do you have any questions?</p>
      <div class="ask-one" data-aos="fade-up"
     data-aos-duration="3000">
        <button class="accordion">How do i create my account</button>
        <p class="panel">Registration process is very easy and will take a few moments to complete Simply click CREATE ACCOUNT button and fill in all the required fieds</p>
        <button class="accordion">How do i make a deposit?</button> 
        <p class="panel">To deposit funds in your trading account is quick and simple For your convenience you may choose one of the several available deposit methods To make a successful deposit please follow the steps below Login to your account Click on the DEPOSITS button in the DASHBOARD section Choose the deposit option And follow the steps to complete your transaction</p>

        <button class="accordion">How long does my deposit take before it can reflect on my Bronfinance acount dashboard?</button>
        <p class="panel">Your deposit will be reflected immediately once it is confirmed on the blockchain network</p>  
      </div>
  
      <div class="ask-two" data-aos="fade-up"
     data-aos-duration="3000">    
        <button class="accordion2">Can i have more than one account?</button>
        <p class="panel2">No you cannot have more than one account only investors on the vip plan are allowed to do so</p>
  
        <button class="accordion2">How do I make a withdrawal?</button>
        <p class="panel2">To make a withdrawal request click the WITHDRAW button at the top center of your Bronfinance account dashboard and input the required details to withdraw</p>
  
        <button class="accordion2">Is this company properly registered?</button>
        <p class="panel2">Yes we are officially and properly registered with the united kingdom company house our company registration number is R136776 and registered with the name Bronfinance LTD</p>
      </div>
    </section>

  <section>
    <div class="patnership">
      <div class="patner1">
        <img class="patner2" src="icons/p11.png">
      </div>
      <div class="patner1">
        <img class="patner2" src="icons/p14.png">
      </div>
      <div class="patner1">
        <img class="patner2" src="icons/p15.png">
      </div>
      <div class="patner1">
        <img class="patner2" src="icons/p16.png">
      </div>
    </div>  
  </section>

    <section class="section12">
      <div class="bottn">
        <div class="global">
         <p class="mon">BIG MONEY</p>
         <p id="mon"> We offer Global commodity brokerage services, managed futures consultation, direct access trading, and trading system execution services to individuals, corporations and industry professionals.</p>
        </div>
        <div class="comp">
         <p class="mon">COMPANY </p>
         <p id="mon"><a href="index.php">Home </a> <br>
          <a href="about us.php">About Us</a>
             <br>
             <a href="investment-plan.php">Investment Approach</a>
            </p> 
        </div>
        <div class="legal">
         <p class="mon">LEGAL</p>
         <p id="mon"><a href="legal.php">Legal Info</a><br>
          <a href="#">Privacy Policy </a><br>
          <a href="terms&condition.php">Terms and Agreements</a>
          <br>      
          <a href="contacts.php">Report Abuse</a>  
          </p>
        </div>
        <div class="contact">
         <p class="mon">CONTACT US</p>
         <p id="mon2"> <i id="icn" class="fas fa-map-marker-alt"></i> Manchester, United Kingdom <br>
         <i id="icn" class='fas fa-phone'></i> +44 (741) 837-4037 <br>
         <i id="icn" class="far fa-comment-alt"></i> info@bigmoney.com. </p>
        </div> 
       </div>
       <br>
       <hr>
       <div class="copyR">
       <p class="copyright">Copyright &#174;2022 BIG MONEY</p>
       </div>
    </section>


    <button onclick="topFunction()" id="myBtn" title="Go to top" style="margin-bottom: 6rem">Top</button>

    <script>
    // Get the button
    let mybutton = document.getElementById("myBtn");
    
    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {scrollFunction()};
    
    function scrollFunction() {
      if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 480) {
        mybutton.style.display = "block";
      } else {
        mybutton.style.display = "none";
      }
    }
    
    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }
    </script>

    <script>
      var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    } 
  });
}

    var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    }
  });
}
 
var acc = document.getElementsByClassName("accordion2");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    } 
  });
}

var acc = document.getElementsByClassName("accordion2");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    }
  });
}
    </script>

  <script>
      AOS.init();
    </script>
  </body>  
 </html>
