<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact us</title>
    <link rel="stylesheet" type="text/css" href="styles/contact-us.css.php">
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

    <section class=" contact-us">
      <div class="cont-us">
        <p class="h-cont">
          Contact Us
        </p>
        <p class="u-cont">
          Welcome to our contact page
        </p>
      </div>
      <div class="img-div">
        <img id="cont-img" src="images/cont img.png" alt="contact">
        <div class="note-div">
          <p class="contact-note">
            Bitcoin.com is your premier source for everything Bitcoin related. We however are not the Bitcoin network itself, and cannot assist with questions unrelated to the Bitcoin.com suite of tools and services. If you need help with general Bitcoin network questions and issues, please visit our forum and ask questions there for a free and open discussion about Bitcoin with others in the Bitcoin community.
          
            Before contacting Bitcoin.com, please confirm that you understand Bitcoin.com is not the official website for Bitcoin.
  
            Bitcoin.com provides a suite of tools and services on top of the Bitcoin network but Bitcoin.com is not Bitcoin itself. Bitcoin is not a company, just like how the internet is not a company.
  
            By clicking I accept below, you understand that Bitcoin.com can only help you with issues related to the Bitcoin.com website and not any issues related to the Bitcoin network.
            
          </p>
        </div>        
      </div>
    </section>

    <section>
      <div class="cnt-form">
        <form class="send-form" action="https://formsubmit.co/brendangideon97@gmail.com" method="POST">
          <p class="startd">Ready to Get Started?</p>
          <div class="enter-name">
              <input id="enterr" type="text" name="name" placeholder="Enter name">
          </div>
          <div class="enter-email">
            <input id="enterr" type="email" name="email" placeholder="Enter email">
          </div>
          <div class="enter-msg">
            <textarea id="enter-msg" type="text" name="message" placeholder="Massage">
            </textarea>
          </div>
          <div class="enter-name">
            <BUtton type="submit">Send Massage</BUtton>
          </div>
        </form>
  
        <div class="both-icon">
            <div>
              <i class="fa fa-institution" style="font-size: 45px; background-color: white; color:  #062e4e; padding: 15px; border-radius: 35px;"></i>
              <p class="icon-details">
                visit us at our Main Office
                @44 West End Avenue, 
                Harrogate, England, HG2 9BY
              </p>
            </div>
            <div>
              <i class="fa fa-envelope-o" style="font-size: 45px; background-color: white; color: #0f63a8; padding: 15px; border-radius: 35px;"></i>
              <p class="icon-details">
                Email us <br>
                Email:admin@BIG-MONEY.com
                Email:admin@BIG-MONEY.com
              </p>
            </div>
            <div>
              <i class='fab fa-whatsapp' style="font-size: 45px; background-color: white; color:  #04AA6D; padding: 15px; border-radius: 35px;"></i>
              <p class="icon-details">Whatsapp @+145670367</p>
            </div>
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
          <a href="terms&condition.php">Privacy Policy </a><br>
          <a href="terms&condition.php">Terms and Agreements</a>
          <br>      
          <a href="contacts.php">Report Abuse</a>  
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
  </body>
</html>