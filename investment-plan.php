<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>invest-plan</title>
    <link rel="stylesheet" type="text/css" href="styles/invstmt-plancss.php">
    <script src="https://kit.fontawesome.com/88f8f09358.js" 
    crossorigin="anonymous"></script>
  </head>
  <body>
    <section class="header">
      <div class="topnav">
        <a id="active" href="index.php">Logo </a>
        <div id="myLinks">
          <a href="index.php">Home</a>
          <a href="about us.php">About us</a>
          <a href="Our service.php">Services</a>
          <a href="investment-plan.php">Investment-plan</a>
          <a href="investment-plan.php">FAQs</a>
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
        <button><a id="ton" href="sign1-in.php">Deposit</a></button>
      </div>
      <div class="bronze-plan">
        <p class="bronze">BRONZE-PLAN</p> <br>
        <p id="int">2.00% </p>
        <p id="days">After 7 Days</p><hr>
         <p id="amt">MINIMUM $1,000.00 <br> 
         MAXIMUM $4,999.00 </p> 
        <button><a id="ton" href="sign1-in.php">Deposit</a></button>
      </div>
      <div class="silver-plan">
        <p class="silver">SILVER-PLAN</p> <br>
        <p id="int">3.00% </p>
        <p id="days">After 7 Days</p> <hr>
         <p id="amt">MINIMUM $5,000.00 <br>
         MAXIMUM $9,999.00</p>
        <button><a id="ton" href="sign1-in.php">Deposit</a></button>
      </div>
      <div class="gold-plan">
        <p class="gold">GOLD-PLAN</p><br>
        <p id="int">5.00% </p>
        <p id="days">After 7 Days</p> <hr>
        <p id="amt">MINIMUM $10,000.00 <br>
        MAXIMUM UNLIMITED</p>
        <button><a id="ton" href="sign1-in.php">Deposit</a></button>
      </div>
    </div>
  <br>  
</section>

<section class="section10">
      <p class="ask">Frequently Asked Questions</p>
      <p class="quest">Do you have any questions?</p>
    <div class="ask-one">
      <button class="accordion">How do i create my account</button>
      <p class="panel">Registration process is very easy and will take a few moments to complete Simply click CREATE ACCOUNT button and fill in all the required fieds</p>
      <button class="accordion">How do i make a deposit?</button> 
      <p class="panel">To deposit funds in your trading account is quick and simple For your convenience you may choose one of the several available deposit methods To make a successful deposit please follow the steps below Login to your account Click on the DEPOSITS button in the DASHBOARD section Choose the deposit option And follow the steps to complete your transaction</p>

      <button class="accordion">How long does my deposit take before it can reflect on my Bronfinance acount dashboard?</button>
      <p class="panel">Your deposit will be reflected immediately once it is confirmed on the blockchain network</p>  
    </div>

    <div class="ask-two">    
      <button class="accordion2">Can i have more than one account?</button>
      <p class="panel2">No you cannot have more than one account only investors on the vip plan are allowed to do so</p>

      <button class="accordion2">How do I make a withdrawal?</button>
      <p class="panel2">To make a withdrawal request click the WITHDRAW button at the top center of your Bronfinance account dashboard and input the required details to withdraw</p>

      <button class="accordion2">Is this company properly registered?</button>
      <p class="panel2">Yes we are officially and properly registered with the united kingdom company house our company registration number is R136776 and registered with the name Bronfinance LTD</p>
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
        <a href="terms&condition.php">Privacy Policy </a><br>
        <a href="terms&condition.php">Terms and Agreements</a>
        <br>      
        <a href="contact.php">Report Abuse</a>  
        </p>
      </div>
      <div class="contact">
       <p class="mon">CONTACT US</p>
       <p id="mon2"> <i id="icn" class="fas fa-map-marker-alt"></i> Manchester, United Kingdom
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


    <script type="text/javascript">
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

  </body>
</html>