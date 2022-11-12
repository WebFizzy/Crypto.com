<?php
 header('content-type: text/css; charset:UTF-8');
?>

* {
  box-sizing: border-box;
  padding: 0%;
  margin: 0%;
  font-family: 'Montserrat',sans-serif, arial;
}


.container {
  max-width: 100%; 
}

.form1 {
  background-color: rgb(226, 225, 225);
  padding: 2rem;
  width: 50%;
  border-radius: 10px;
  margin: 30px auto;
  margin-top: 1rem;
}

.form-check {
  margin-top: 2rem;
}

.d-grid {
  margin-bottom: 1rem;
}

.mb-3 span {
  color: rgb(223, 69, 69);
  font-size: 12px;
}

#submit-error {
  font-size: 12px;
  color: rgb(223, 69, 69);
}

span i {
  color: #0d6efd;
}

@media screen and (max-width: 800px) {
  .form1 {
    width: 90%;
    padding: 1rem;
  }

  .form1 h1 {
    font-size: 22px;
  }

  .form1 h3 {
    font-size: 15px;
  }

  .form-label {
    font-size: 13px;
  }

  .mb-3 input {
    font-size: 12px;
  }

  .form1 p {
    font-size: 10px;
  }

}

