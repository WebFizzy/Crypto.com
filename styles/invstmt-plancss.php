<?php
 header('content-type: text/css; charset:UTF-8');
?>

body {
  font-family: 'Open Sans',sans-serif ;
  margin: 0%;
  padding: 0%;
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
  }
  
  .topnav #myLinks {
    display: none;
    padding-left: 0;
  }
  
  .topnav a {
    color: white;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 25px;
    display: block;
    line-height: 1.8rem;
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
  margin: 0px 30px;
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
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
  padding: 3px 0px;
  width: 100%;
  font-size: 16px;
}

#int {
  display: block;
  font-size: 23px;
  font-family: 'Montserrat', sans-serif;
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
  padding: 6px 0px; 
}

  .braze-plan button:hover,
  .bronze-plan button:hover,
  .silver-plan button:hover,
  .gold-plan button :hover {
    background-color: #777;
  }

#ton {
  text-decoration: none;
  color: white;
}

#ton:hover {
  color: black;
}

.plan-note {
  display: block;
  color: #011627;
  font-size: 20px;
  width: auto;
  margin: 15px;
  text-align: center;
}

.ask {
  padding-top: 2rem;
}

@media screen and (max-width: 700px) {
  .section5 {
    padding-top: 60px;
  }

  .container {
  max-width: 100%;
  display: block;
  }

  .invest-plan {
    padding: 0%;
    padding-top: 3rem;
  }

  .plan-note {
    width: 90%;
    margin-top: 0%;
    margin-bottom: 2rem;
    font-size: 14px;
    line-height: 15px;
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
    padding: 3% 3%;
    font-size: 18px;
  }

  .braze, .bronze,
  .silver, .gold {
    font-size: 20px;
    padding: 4% 0%;
    width: 100%;
  }
  #int {
    font-size: 30px;
    padding: 28px 0px;
    width: 100%;
  }
  
  #days {
    font-size: 18px;
  }
  #amt {
    font-size: 20px;
    line-height: 3rem;
    width: 100%;
  }
  
}

.section10 {
  max-width: 100%;
  margin-top: 5px;
  background-color: rgb(228, 227, 227);
  padding-bottom: 3rem;

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
  font-weight: bold;
}
.quest {
  font-family: 'Montserrat', sans-serif;
  color: #01101b;
  margin-left: 5%;
  margin-top: 0px;
}


.ask-one {
  font-family: 'Montserrat', sans-serif;
  color: #01101b;
  display: inline-block;
  width: 45%;
  margin-top: 0%;
  margin-left: 3%;
  vertical-align: top;
}

.ask-two {
  display: inline-block;
  width: 45%;
  margin-top: 0%;
  margin-left: 1%;
}

.accordion {
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

.accordion2 {
  font-family: 'Montserrat', sans-serif;
  color: #01101b;
  background-color: rgb(209, 207, 207);
  font-size: 15px;
  color: rgb(37, 37, 37);
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
  background-color: rgb(238, 236, 236);
  max-height: 0;
  width: 82%;
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
  background-color: rgb(238, 236, 236);
  max-height: 0;
  width: 82%;
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
    padding-top: 2rem;
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
    margin-bottom: 2%;
    margin-top: 0%;
  }
  .panel2 {
    font-size: 12px;
    margin-top: 0%;
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
  line-height: 1.8rem;
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
  line-height: 1.8rem;
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


@media (max-width: 500px) {
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
  line-height: 1.5rem;
  font-size: 12px;
  width: 88%;
  margin-left: 3%;
  margin-bottom: 0%;
}
#mon2 {
  margin-left: 1rem;
  line-height: 1.5rem;
  font-size: 12px;
  width: 60%;
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