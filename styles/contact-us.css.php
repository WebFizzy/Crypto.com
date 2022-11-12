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

.contact-us {
  max-width: 100%;
  padding-top: ;
  text-align: center;
}

.cont-us {
  max-width: 100%;
  background: linear-gradient(to right ,rgba(71, 69, 69, 0.5),
   rgba(252, 252, 252, 0.5)), url('../images/contact-us.jpg');
   background-attachment: fixed;
  background-repeat: no-repeat;
  background-position: center;
  background-size: cover;
  padding: 4rem;
  line-height: 2rem;
}

.cont-us p {
  color: black;
}

.h-cont {
  font-size: 30px;
  font-weight: bold;
}

.u-cont {
  font-size: 18px;
}

@media screen and (max-width: 970px) {
  .contact-us {
    padding-top: 3rem;
    text-align: center;
  }
}

.img-div {
  max-width: 100%;
  display: flex;
  padding-top: 3rem;
  justify-content: space-evenly;
}

.note-div {
  width: 48%;
}

#cont-img {
  vertical-align: auto;
  width: 40%;
  margin-left: 2rem;
}

.contact-note {
  font-family: "Segoe UI", "Helvetica Neue", sans-serif;
  opacity: 1.0;
  font-size: 20px;
  width: 80%;
  margin-left: 3rem;
  line-height: 1.8rem;
}

@media screen and (max-width: 970px){
  .img-div {
    max-width: 100%;
    display: block;
  }

  #cont-img {
    width: 70%;
    margin: 30px;
    margin-left: 2rem;
  }

  .note-div {
    width: 100%;
    text-align: left;
  }

  .contact-note {
    margin-left: 20px;
    width: 90%;
    font-size: 18px;
  }

}

.cnt-form {
  max-width: 100%;
  display: flex;
  justify-content: space-evenly;
  margin-top: 3rem;
  margin-bottom: 4rem;
}

.send-form {
  width: 40%;
  margin: auto;
}

.startd {
  margin-left: 20px;
  font-size: 25px;
  padding: 18px 0px;
  text-align: left;
}

.send-form{
  border-radius: 8px;
  font-size: 14px;
  width: 40%;
  background-color: rgb(233, 231, 231);
}


#enterr {
  border-style: none;
  border-radius: 5px;
  font-size: 15px;
  margin: 15px 20px;
  width: 90%;
  padding: 12px;
}

#enter-msg {
  font-size: 16px;
  border-radius: 5px;
  margin: 15px 20px;
  padding: 12px;
  padding-bottom: 80px;
  width: 90%;
  border-style: none;
}

.enter-name button {
  font-size: 15px;
  padding: 8px;
  margin: 12px 0px 40px 20px;
  border-radius: 5px;
  color: white;
  background-color: #05233b;
}


.both-icon {
  width: 40%;
  text-align: center;
  justify-content: space-evenly;
  
}

.icon-details {
  width: 45%;
  margin: auto;
}

@media screen and (max-width: 860px){
  .cnt-form {
    display: block;
    max-width: 100%;
  }

  .send-form {
    width: 90%;
    margin: 30px auto;
  }

  .startd {
    font-size: 20px;
    font-weight: bold;
  }

  #enterr {
    padding: 10px;
    border: none;
    margin: 15px 16px;
  }

  #enter-msg {
    margin: 15px 16px;
    padding-bottom: 60px;
  }

  .enter-name button {
    margin-left: 16px;
  }

  .both-icon {
    width: 100%;
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


@media (max-width: 700px) {
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