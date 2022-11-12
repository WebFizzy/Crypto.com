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
  background: linear-gradient(to right, rgb(24, 23, 23), rgba(170, 167, 167)), url('../res-images/head\ back.jpg');
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

.abt {
  max-width: 100%;
  background: linear-gradient(rgba(216, 215, 215, 0.9), rgba(231, 231, 231, 0.9)), url('../res-images/About\ us\ background.jpg');
  background-repeat: no-repeat;
  background-position: center;
  background-size: cover;
  background-attachment: fixed;
}
.hn1 {
  font-size: 25px;
  font-family: 'Monsterrat', sans-serif;
  color: rgb(26, 25, 25);
  text-align: center;
  margin: 0%;
  padding-top: 5rem;
}

.hn3 {
  font-family: 'Monsterrat', sans-serif;
  text-align: center;
  font-size: 22px;
}

.abt-info {
  max-width: 100%;
  font-size: 18px;
  color: rgb(22, 22, 22);
  margin: 30px auto;
  width: 90%;
  line-height: 25px;
}

.italics {
  font-family: 'Monsterrat', sans-serif;
  color: rgb(48, 47, 47);
  font-size: 20px;
  display: block;
  margin: 20px auto;
  text-align: left;
  width: 60%
}
@media screen and (max-width: 960px) {
  .abt {
    padding-top: 50px;
  }

  .abt-info {
    font-size: 17px;
  }

  .italics {
    font-size: 18px;
  }
}

.exclusive {
  margin-top: 10%;
  margin-bottom: 5%;
  text-align: center;
  font-size: 25px;
}

.director {
  display: grid;
  width: 200px;
  margin: 10px auto;
  border-radius: 30px;
}

#ceo {
  text-align: center;
  margin-bottom: 40px;
  font-size: 14px;
}
 
#manager {
  display: grid;
   width: 200px;
   margin: 10px auto;
   border-radius: 30px;
}

.james {
  margin-bottom: 40px;
  text-align: center;
}
 
.marketer {
  display: grid;
  width: 200px;
  margin: 10px auto;
  border-radius: 30px;
}

.alina {
  margin-bottom: 40px;
  text-align: center;
}
 
.consultant {
  display: grid;
  width: 200px;
  margin: 10px auto;
  border-radius: 30px;
}
 
.steven {
  margin-bottom: 80px;
  text-align: center;
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
  color: rgb(224, 222, 222);
  line-height: 20px; 
}
.mon {
  font-size: 18px;
  font-weight: bold;
  width: 60%;
}
#mon {
  font-size: 15px;
  line-height: 1.8rem;
  width: 90%;
}
#mon2 {
  line-height: 1.8rem;
  font-size: 15px;
  width: 73%;
}

p a {
  text-decoration: none;
  color: rgb(197, 196, 196);
}

p a:hover {
  color: white;
}


#icn {
  color: rgb(141, 138, 138);
  font-size: 18px;
}
hr {
  color: rgb(155, 16, 16);
  font-size: 20px;
  z-index: 3;
 }
 .copyR {
   display: block;
   margin: auto;
   width: 50%;
   text-align: center;
 }
 .copyright {
   width: 98%;
   color: white;
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
  width: 88%;
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

 p a {
  text-decoration: none;
  color: rgb(197, 196, 196);
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