<?php
 header('content-type: text/css; charset:UTF-8');
?>

 * {
  box-sizing: border-box;
  padding: 0%;
  margin: 0%;
  font-family: 'Montserrat',sans-serif, arial;
}

.header {
  height: 75px;
  max-width: 100%;
  background: linear-gradient(to right, rgb(24, 23, 23), rgba(170, 167, 167)), url('../images/head\ back.jpg');
  background-position: center;
  background-size: cover;
  background-attachment: fixed;
}

.topnav {
  display: flex;
}

#active {
 margin: 2% 8%;
 padding: 5px 20px;
 align-items: center;
 color: white;
 background-color: #04AA6D;
}

#myLinks {
  width: 75%;
  margin: 2% 0%;
  display: flex;
  justify-content: space-evenly;
}
#myLinks a {
  font-size: 16px;
 padding: 5px 15px;
 text-decoration: none;
 color: white;
}
#create {
  border-radius: 4px;
  font-size: 18px;
  padding: 5px 15px;
  background-color: #04AA6D;
}
#login {
  border-radius: 4px;
  border: 1px solid white;
  padding: 5px 25px;
}
#myLinks a:hover {
  color: rgb(185, 46, 46);
}

.icon {
  display: none;
}

@media (max-width: 960px) {
  .header {
    height: 0px;
  }

  .topnav {
    display: block;
    overflow: hidden;
    background-color: #333;
    position: relative;
    z-index: 3;
  }
  
  .topnav #myLinks {
    display: none;
    padding-left: 0;
  }
  
  .topnav a {
    color: white;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 28px;
    display: block;
    line-height: 2.5rem;
  }
  
  .topnav a.icon {
    background: black;
    font-size: 20px;
    display: block;
    position: absolute;
    right: 0;
    top: 0;
  }
  
  .topnav a:hover {
    background-color: #ddd;
    color: black;
  }
  
  #active {
    margin: 3%;
    background-color: #04AA6D;
    color: white;
    width: 90px;
    text-align: center;
  }

  #create {
    padding: 2px;
    margin-top: 5px;
    text-align: center;
  }

  #login {
    padding: 1px 7px;
    text-align: center;
  }

  .tradingview-widget-container {
    max-width: 100%;
    padding-top: 13%;
    font-size: 15px;
  }
}

.section2 {
  color: rgb(207, 204, 204);
  height: 40%;
  width: 100%;
  background: linear-gradient(to left,rgba(65, 64, 64, 0), rgba(0, 0, 0, 0.9)),url('../images/pexels-alphatradezone-5833295.jpg');
  background-attachment: fixed;
  background-position: top;
  background-size: cover;
}

.row2 {
  padding: 5% 3%;
}

#headn  {
  font-size: 32px;
  padding-bottom: 1%;
  color: rgb(240, 239, 239);
  position: relative;
  animation: heading;
  animation-duration: 3s;
  animation-fill-mode: forwards;
}

@keyframes heading {
  0% {top: -50px;}
  100% {top: 2px;}
}

#headn2  {
  font-size: 32px;
  padding-bottom: 1%;
  color: rgb(240, 239, 239);
}

.company-info1 {
  font-size: 18px;
  padding-bottom: 2%;
  color: rgb(231, 229, 229);
  line-height: 30px;
  width: 56%;
  overflow: hidden;
  position: relative;
  animation-name: content;
  animation-duration: 3s;
  animation-fill-mode: forwards;
}

@keyframes content {
  0% {left: -1000px;}
  100% {left: 0px;}
}

.company-info2 {
  font-size: 18px;
  padding-bottom: 2%;
  color: rgb(231, 229, 229);
  line-height: 30px;
  width: 56%;
  overflow: hidden;
}



@media (max-width: 960px) {
  .row2 {
    padding-top: 50px;
    margin-top: 5%;
    padding-left: 4%;
  }

  #headn, #headn2 {
    font-size: 17px;
    font-weight: bold;
    padding-left: 3%;
  }

  .company-info1 {
    font-size: 13px;
    width: 75%;
    line-height: 20px;
  }

  .company-info2 {
    font-size: 13px;
    width: 75%;
    line-height: 20px;
  }
}

.section3 {
  max-width: 100%;
  background: linear-gradient(to right, rgb(141, 140, 140), #011627), url('../images/security-background.jpg');
  background-position: center;
  background-size: cover;
  background-attachment: fixed;
  height: 20%;  
}

.security1 {
  display: inline-block;
  background-color: rgb(199, 199, 199);
  margin-top: 2%;
  margin-bottom: 1%;
  padding: 1% 4%;
  width: 35%;
  border-top-right-radius: 35px;
  position: relative;
  animation-name: security;
  animation-duration: 3s;
}

@keyframes security {
  0% {left: -1000px;}
  100% {left: 0px;}
}

.security2 {
  display: inline-block;
  background-color: rgb(199, 199, 199);
  padding: 0% 4%;
  width: 35%;
  border-bottom-right-radius: 35px;
  position: relative;
  animation-name: security;
  animation-duration: 5s;
}

@keyframes security {
  0% {left: -1000px;}
  100% {left: 0px;}
}

.B-icon {
  display: inline-block;
  font-weight: bold;
  padding: 1em;
  padding-top: 1em;
  font-size: 20px;
  line-height: 20px;
}
#bag {
  color: #0b3157;
  font-size: 35px;
}

.take-adv {
  display: inline-block;
  color: rgba(228, 226, 226, 0.9);
  font-size: 18px;
  line-height: 25px;
  width: 40%;
  text-align: left;
  margin-left: 15%;
  vertical-align: top;
}

@media screen and (max-width: 800px) {
  .section3 {
    height: 55%;
  }

  .security1 {
    display: inline-block;
    font-size: 14px;
    padding-bottom: 8px;
    padding: 12px 0px;
    padding-left: 15px;
    width: 73%;
  } 
  .security2 {
    display: inline-block;
    font-size: 14px;
    background-color: rgb(199, 199, 199);
    margin-top: 2%;
    margin-bottom: 1%;
    padding: 12px 0px;
    padding-left: 15px;
    width: 73%;
  } 

  img .key-icon {
    width: 5%;
  }

  .B-icon {
    display: inline-block;
    font-weight: bold;
    width: 100%;
    padding-top: 1rem;
    font-size: 20px;
    line-height: 20px;
  }

  .info {
    font-size: 15px;
    line-height: 20px;
  }

  hr {
    width: 100%;
    margin-right: 2%;
    margin-top: 5%;
    margin-bottom: 3%;
  }
  .watchwd {
    font-size: 18px;
    padding-top: 2px;
    padding-left: 1rem;
    margin-bottom: 0%;
  }
  #bag {
    margin-top: 1%;
    font-size: 27px;
    display: inline-block;
  }
  #co {
    margin-left: 10%;
    display: inline-block;
    width: 70%;
    font-size: 17px;
  }
  .take-adv h2 {
    font-size: 20px;
    padding-top: 1rem;
  }

  .take-adv {
    text-align: center;
    font-size: 13px;
    line-height: 20px;
    width: auto;
    margin: 2% 5%;
  }
}

.section4 {
  max-width: 100%;
  background: url('../images/security-background.jpg');
  background-position: center;
  background-size: cover;
  background-repeat: no-repeat;
  background-attachment: fixed;
}

#serv {
  color: rgb(206, 47, 47);
  padding-top: 1.5rem;
  text-align: center;
  font-size: 30px;
}

.bitcoin-logo {
  display: inline-block;
  width: 45%;
  height: 40%;
  margin-top: 2rem; 
  margin-left: 2%;
}

.btc-log {
  display: inline-block;
  width: 100%;
  position: relative;
  margin-left: 5%;
}

.btc-service {
  display: inline-block;
  background-color: rgb(240, 238, 238);
  height: 52%;
  vertical-align: top;
  width: 45%;
  border-radius: 5px;
  margin-left: 4%;
  margin-top: 1rem;
  transition-duration: 0.5s;
}

.btc-service:hover {
  background-color: rgb(255, 255, 255);
  box-shadow: 5px 5px 5px 5px rgb(218, 215, 215);
}

.h-one {
  padding-top: 3%;
  color: rgb(24, 23, 23);
  line-height: 1em;
  margin-left: 1rem;
  width: 99%;
  font-size: 33px;
}
.h-six {
  color: rgb(66, 66, 66);
  text-align: left;
  font-size: 18px;
  width: 95%;
  padding-bottom: 5%;
  padding-left: 1rem;
  line-height: 30px;  
}

#bttt {
  text-decoration: none;
  color: white;
  padding: 10px 8px;
  margin-left: 1rem;
  vertical-align: bottom;
  border-radius: 5px;
  border: none;
  background-color: #151a1f;
}

#rd-mre {
  text-decoration: none;
}

@media screen and (max-width: 800px) {
  #serv {
    font-size: 25px;
    margin-bottom: 1.2rem;
  }
  .bitcoin-logo {
    flex-direction: column;
    width: auto;
    margin-right: 10%;
    margin-top: 8px; 
  }

  .btc-service {
    width: auto;
    margin: 1% 4%;
    font-size: 15px;
    text-align: center;
    padding-top: 2%;
    transition-duration: 0.5s;
    position: relative;
  }

  .h-one {
    padding-top: 3%;
    color: rgb(24, 23, 23);
    line-height: 1em;
    text-align: left;
    width: 96%;
    font-size: 21px;
  }

  .h-six {
    color: rgb(90, 87, 87);
    text-align: left;
    font-size: 16px;
    width: 97%;
    padding-bottom: 5%;
    padding-left: 1rem;
    line-height: 25px;
  }

  #bttt {
    margin-left: 5rem;
    margin-top: 2%;
  } 

}

.section5 {
  margin: 0%;
  background-color: rgb(233, 231, 231);
}

.invest-plan {
  display: block;
  text-align: center;
  margin: 2% auto;
  padding: 2rem 0;
}

.container {
  max-width: 100%;
  margin: 0px 20px;
  display: flex;
  flex-wrap: wrap;
  justify-content: space-around;
}

.braze-plan, .bronze-plan,
.silver-plan, .gold-plan {
  font-size: 22px;
  background: linear-gradient(to top,#08243a, rgb(150, 148, 148));
  line-height: 2rem;
  text-align: center;
  width: 23%;
  border-radius: 5%;
}

.braze, .bronze,
.silver, .gold {
  background-color: black;
  color: rgb(180, 161, 161);
  margin: auto;
  padding: 2px;
  width: 100%;
  font-size: 16px;
}

#int {
  display: block;
  font-size: 23px;
  font-family: 'Montserrat', sans-serif;
  color: rgb(22, 22, 22);
  font-weight: bold;
  width: 100%;
}

#days {
  display: block;
  font-size: 16px;
  font-family: 'Montserrat', sans-serif;
  width: 100%;
}

#amt {
  color: whitesmoke;
  padding: 30px 0px;
  display: block;
  font-size: 20px;
  font-family: 'Montserrat', sans-serif;
  font-weight: bold;
  width: 100%;
}

.braze-plan button,
.bronze-plan button,
.silver-plan button,
.gold-plan button {
  font-size: 18px;
  background-color: #e13833;
  color: black;
  width: 55%;
  padding: 4px; 
}

#ton {
  text-decoration: none;
  color: white;
}

.plan-note {
  display: block;
  color: #011627;
  font-size: 20px;
  width: auto;
  margin: 15px;
  text-align: center;
}

@media screen and (max-width: 700px) {
  .container {
  max-width: 100%;
  display: block;
  }

  .invest-plan {
    padding: 0%;
    padding-top: 3rem;
    font-size: 25px;
  }

  .plan-note {
    width: 90%;
    margin-top: 0%;
    margin-bottom: 2rem;
    font-size: 13px;
    line-height: 18px;
  }

  .braze-plan, .bronze-plan,
  .silver-plan, .gold-plan {
  font-size: 40px;
  line-height: 1rem;
  text-align: center;
  margin-bottom: 4rem;
  justify-content: center;
  width: 100%;
  border-radius: 5%;
  }

  .braze-plan button,
  .bronze-plan button,
  .silver-plan button,
  .gold-plan button {
    margin-top: 0.8rem;
    padding: 3% 1%;
    width: 42%;
    font-size: 18px;
  }

  .braze, .bronze,
  .silver, .gold {
    font-size: 20px;
    padding: 4%;
  }
  #int {
    font-size: 30px;
    padding: 28px;
  }
  
  #days {
    font-size: 18px;
  }
  #amt {
    font-size: 20px;
    line-height: 30px;
    width: 100%;
  }
  
}


.section6 {
  max-width: 100%;
  background: linear-gradient(rgba(241, 241, 241, 0.8), rgba(240, 240, 240, 0.8)), url('../res-images/pexels-fauxels-3184287.jpg');
  background-position: center;
  background-size: cover;
  background-repeat: no-repeat;
  background-attachment: fixed;
}

.section6 h1 {
  display: block;
  text-align: center;
  padding-top: 2rem;
}

.features {
  color: #011627;
  display: block;
  font-size: 18px;
  text-align: center;
  margin: 2px auto;
  padding-bottom: 2rem;
}

.container6 {
  display: flex;
  max-width: 100%;
  align-items: center;
  justify-content:space-evenly;
  padding-bottom: 1rem;

}

.card-group {
  display: flex;
  flex-wrap: wrap;
  row-gap: 2rem;
  max-width: 100%;
  justify-content: space-evenly;
  margin-left: 2rem;
  padding-bottom: 1rem;
  margin-bottom: 1rem;
}

.card-title {
  margin-left: 2%;
  color: #011625;
  display: inline-block;
  font-family: 'Montserrat', sans-serif;
  font-weight: bold;
  font-size: 22px;
  padding-top: 1rem;
  vertical-align: auto;
  transition-duration: 0.3s;
}


@media screen and (max-width: 900px) {
  .card-title {
    width: 60%;
    font-size: 20px;
  }
}

.card-body {
  background-color: rgb(231, 230, 230);
  width: 30%;
  border-radius: 12px;
  padding-left: 1%;
  transition-duration: 0.9s;
}

.card-text {
  width: 90%;
  font-family: 'Montserrat', sans-serif;
  line-height: 20px;
  font-size: 15px;

}

#cl {
  font-size: 40px;
  margin-top: 1rem;
  margin-left: 0px;
}

.card-body:hover {
  background-color: rgb(247, 245, 245);
  box-shadow: 2px 0px 0px 1px rgb(0, 0, 0, 0.4);
}

@media screen and (max-width: 700px) {

  .container6, .cert-note {
    vertical-align: auto;
  }

  .section6 h1 {
    font-size: 20px;
    padding-top: 2rem;
  }

  .features {
    font-size: 12px;
    width: 80%;
    padding-bottom: 1rem;
  }
  
  .card-group {
    flex-direction: column;
    justify-content: space-evenly;
    align-items: center;
    margin-bottom: 2rem;
  }

  .card-body {
    width: 70%;
    align-items: center;
    border-radius: 12px;
    padding-left: 1%;
    transition-duration: 0.9s;
  }

  .card-title {
    margin-left: 2%;
    font-size: 20px;
    padding-top: 0rem;
  }

  
  .card-text {
    width: 100%;
    font-size: 12px;
    padding: 5px 10px;
    padding-top: 0px
  }

  #cl {
    font-size: 35px;
    margin-top: 1rem;
    margin-left: 10px;
  }
}

.section7 {

}

#team-back {
  max-width: 100%;
  background: url('../images/pexels-johannes-plenio-1103970.jpg');
  background-position: center;  
  background-size: cover;
  background-repeat: no-repeat;
  background-attachment: fixed;
  border-radius: 20px;
  margin-top: 5em;
}

.exclusive {
  padding-top: 5rem;
  text-align: center;
}

.Our-team {
  display: flex;
  justify-content: space-evenly;
  margin-top: 1rem; 
  padding-bottom: 2rem;
}

.CEO, .direct,
.manager,.consult {
  width: 65%;  
  border-radius: 9rem;
}

.zachary, .james,
.alina,.steven {
  width: 20%;
  text-align: center;
}

@media screen and (max-width: 700px) {
  .exclusive {
    text-align: center;
    font-size: 18px;
  }
  .Our-team {
    max-width: 100%;
    display: block;
    margin-top: 2rem; 
  }
  .CEO, .direct,
  .manager,.consult {
  width: 40%;
  margin-bottom: 0.5rem;
  border-radius: 6rem;
}
 .zachary, .james,
 .alina,.steven {
  font-size: 12px;
  width: 100%;
  margin-bottom: 3rem;
  text-align: center;
}

}

.container2 {
  max-width: 80%;
  height: 30%;
  margin: 6% auto;
}

.container2 h2 {
  margin-top: 30px;
  text-align: center;
}

.container2 p {
  text-align: center;
  font-size: 18px;
}

.carousel-indicators {
   padding: 0%;
   margin: 0%;
}

.item {
  width: 100%;
  margin: 0px auto;
}

.item img {
  width: 30%;
  background-image: linear-gradient(to right, #010d16,
  rgb(150, 148, 148) 100%);
  border-radius: 29rem;
  padding-top: 20px;
  padding-bottom: 20px;
}

.item h3 {
  margin: 0%;
  margin-bottom: 3%;
} 


@media screen and (max-width: 800px) {
  .container2 h2 {
    margin-top: 50px;
    text-align: center;
  }
  
    .carousel-inner > .item > img,
    .carousel-inner > .item > a > img {
      width: 70%;
      margin: auto;
    }
    
  .carousel-caption {
    margin: auto;
    width: 50%;
  }

  .carousel-caption h2 {
    font-size: 16px;
    color: black;
  }

  .carousel-caption h3 {
    font-size: 16px;
    color: black;
  }

  .container2 p {
    text-align: center;
    font-size: 16px;
  }
  
  .item {
    width: 100%;
    margin: 0px auto;
  }
  
  .item img {
    width: 100%;
    background-image: linear-gradient(to right, #010d16,
    rgb(150, 148, 148) 100%);
    border-radius: 29rem;
    padding-top: 20px;
    padding-bottom: 20px;
    margin: 0%;
  }
  
  .item h3 {
    margin: 0%;
    margin-bottom: 3%;
  } 
  
}


.section9 {
  max-width: 100%;
  margin-bottom: 3%;
  margin-top: 3%;
}

.refer-box {
  display: inline-block;
  overflow: hidden;
  width: 30%;
  background-color: rgb(235, 230, 230);
  position: relative;
  animation-name: refer;
  animation-duration: 3s;
  animation-fill-mode: forwards;
  
}

@keyframes refer {
  0% {left: -1000px;}
  100% {left: 0px;}
}

.refer {
  color:#01101b;
  font-family: sans-serif, arial;
  font-size: 30px;
  overflow: hidden;
  font-weight: bold;
  padding-top: 2rem;
  margin-left: 10%;
  width: 100%;
}

.referral-button {
  background-image: linear-gradient(rgb(104, 102, 102), #1e221f);
  margin-left: 10%;
  margin-top: 6px;
  margin-bottom: 2rem;
  font-size: 30px;
  font-weight: bold;
  border: none;
  padding: 5px;
  border-radius: 4px; 
  color: rgb(236, 233, 233); 
  transition-duration: 0.5s;
  position: relative;
  animation-name: btn;
  animation-duration: 3s;
  animation-fill-mode: forwards;
  animation-delay: 3s;
  opacity: 0;
}

@keyframes btn {
  0% {opacity: 0;}
  100% {opacity: 1;}
}

.referral-button:hover {
  opacity: 0.6px;
  box-shadow: 5px 8px 10px rgb(0, 0, 0, 0.4);
}
@media screen and (max-width: 700px) {
  .refer-box {
    border-radius: 2px;
    width: 65%;
    margin-top: 1rem;
  }
  .refer {
    margin-left: 8%;
    font-size: 20px;
    padding-top: 10px;
  }
  .referral-button {
    padding: 3px 4px;
    margin-left: 8%;
    font-size: 20px;
    margin-bottom: 10px;
  }
}

.btcwdgt-price {
  padding-left: 20px;
}

.section10 {
  max-width: 100%;
  margin-top: 5px;
  background-color: rgb(228, 227, 227);
}

.ask {
  font-family: 'Montserrat', sans-serif;
  color: #01101b;
  font-size: 25px;
  margin:0%;
  margin-top: 5%;
  margin-left: 5%;
  width: 30%;
  padding-bottom: 0px;
  padding-top: 2rem;
  font-weight: bold;
}
.quest {
  font-family: 'Montserrat', sans-serif;
  color: #01101b;
  margin-left: 5%;
  margin-top: 2px;
  margin-bottom: 12px;
}

.ask-one {
  font-family: 'Montserrat', sans-serif;
  color: #01101b;
  display: inline-block;
  width: 45%;
  margin-left: 2.8%;
  vertical-align: top;
  padding-bottom: 4rem;
}

.ask-two {
  display: inline-block;
  width: 45%;
  margin-top: 0%;
  margin-left: 1%;
}

.accordion, 
.accordion2 {
  font-family: 'Montserrat', sans-serif;
  color: #01101b;
  background-color: rgb(221, 218, 218);
  font-size: 15px;
  color: rgb(29, 28, 28);
  padding: 15px;
  width: 95%;
  margin-top: 2px;
  margin-left: 5%;
  text-align: left;
  outline: none;
  transition: 1s;
}

.active, .accordion:hover {
  background-color: rgb(240, 235, 235);
}

.active, .accordion2:hover {
  background-color: rgb(240, 236, 236);
}

.panel {
  font-family: 'Montserrat', sans-serif;
  color: #01101b;
  font-size: 15px;
  padding: 0 15px;
  display: inline-block;
  background-color: rgb(168, 163, 163);
  max-height: 0;
  width: 92%;
  margin-left: 5%;
  overflow: hidden;
  transition: 0.8s ease-out;
}
 
.panel2 {
  font-family: 'Montserrat', sans-serif;
  color: #01101b;
  font-size: 15px;
  padding: 0px 15px;
  display: inline-block;
  background-color: rgb(233, 232, 232);
  max-height: 0;
  width: 92%;
  margin-left: 6%;
  overflow: hidden;
  transition: 0.8s ease-out;
}

.accordion:after {
  content: '\02795';
  font-size: 10px;
  color: #777;
  float: right;
  margin-left: 5px;
}

.accordion2:after {
  content: '\02795';
  font-size: 10px;
  color: #777;
  float: right;
  margin-left: 5px;
}

.active:after{
  content: "\2796";
}

@media screen and (max-width: 800px) {
  .ask {
    width: 60%;
    font-size: 15px;
    margin-top: 3rem;
  }
  .quest {
    width: 70%;
    font-size: 12px;
  }
  
  .ask-one {
    display: block;
    width: 95%;
    margin-left: 0.5%;
    padding-bottom: 0%;
  }
  .ask-two {
    width: 95%;
    margin-left: 0.5%;
  }
  .accordion {
    padding: 8px 15px;
    font-size: 12px;
    border-radius: 5px;
  }
  .accordion2{
    font-size: 12px;
    border-radius: 5px;
    padding: 8px 15px;
  }
  .panel {
    font-size: 12px;
    margin-bottom: 0%;
  }
  .panel2 {
    font-size: 12px;
    margin-top: 0%;
  }
}

.patnership {
  display: flex;
  margin-top: 5%;
  max-width: 100%;
  justify-content: space-evenly;
}

.patnership {
  transform: translate3d(-15);
}

.patner1 {
  background-color: rgb(252, 250, 250);
  border-radius: 10px;
  width: 15%;
}

.patner2 {
  background-color: rgb(252, 250, 250);
  border-radius: 10px;
  width: 90%;
}
@media screen and (max-width: 800px) {
  .patnership {
    justify-content: center;
    width: 100%;
    margin-top: 2rem
  }
  
}

.section12 {
  max-width: 100%;
  background-color: #07233a;
}

.bottn {
  display: flex;
  margin-left: 2%;
  justify-content: space-evenly;
}

.global,
.comp,
.contact,
.legal{
  margin-top: 2rem;
  width: 23%;
  color: rgb(196, 193, 193);
  line-height: 20px; 
}

.mon {
  font-size: 18px;
  font-weight: bold;
  width: 60%;
}

#mon {
  font-size: 15px;
  width: 90%;
  margin-top: 1rem;
  line-height: 25px;
}

p a {
  text-decoration: none;
  color: rgb(197, 196, 196);
}

p a:hover {
  color: white;
}

#mon2 {
  font-size: 15px;
  width: 75%;
  line-height: 25px;
  margin-top: 1rem;
}

#icn {
  color: rgb(141, 138, 138);
  font-size: 18px;
}
.bottn hr {
 color: rgb(240, 235, 235);
 font-size: 90px;
 width: 100%;
 z-index: 3;
}
.copyR {
  display: block;
  margin: auto;
  width: 50%;
  text-align: center;
}
.copyright {
  line-height: 2rem;
  width: 98%;
  color: rgb(214, 212, 212);
}


@media (max-width: 800px) {
  .bottn {
    flex-direction: column;
    column-gap: normal;
    padding-top: 2px;
  }

 .global,
 .comp,
 .contact,
 .legal{
  font-size: 15px;
  width: 85%;
  color: rgb(196, 193, 193);
  line-height: 1rem; 
}
.mon {
  font-size: 16px;
  font-weight: bold;
  width: 62%;
  margin:0%;
  margin-left: 3%;
}
#mon {
  line-height: 20px;
  font-size: 12px;
  width: 88%;
  margin-left: 3%;
  margin-bottom: 0%;
}
#mon2 {
  margin-left: 1rem;
  line-height: 22px;
  font-size: 12px;
  width: 58%;
}

#icn {
  color: rgb(141, 138, 138);
  font-size: 15px;
  padding: 0%;
}
.copyright {
  display: block;
  font-size: 10px;
}

}


@media screen and (max-width: 800px) { .contact {
  display: block;
  max-width: 100%;
  }  
}

#myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color: red;
  color: white;
  cursor: pointer;
  padding: 10px;
  border-radius: 4px;
}
