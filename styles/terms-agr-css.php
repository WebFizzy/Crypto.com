<?php
 header('content-type: text/css; charset:UTF-8');
?>

* {
  box-sizing: border-box;
  padding: 0%;
  margin: 0%;
  font-family: 'Montserrat',sans-serif, arial;
}

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


.term-sec {
  padding: 60px;
  padding-top: 18%;
  background-color: rgb(243, 240, 240);
}

.term-sec h3 {
  margin: 20px 0px;
  font-size: 28px;
}

.term-note p {
  margin-right: 100px;
}

@media screen and (max-width: 900px
) { .term-sec {
  max-width: 100%;  
  padding-right: 30px;
  padding-left: 30px;
  }

  
.term-sec h3 {
  margin: 20px 0px;
  font-size: 22px;
}

  .term-note p {
    font-size: 16px;
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