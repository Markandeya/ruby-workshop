<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>RoR:Registration</title>
  <!-- CORE CSS-->

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/css/materialize.min.css">

<style type="text/css">
html,
body {
    height: 100%;
}
html {
    display: table;
    margin: auto;
}
body {
    display: table-cell;
    vertical-align: middle;
}
.margin {
  margin: 0 !important;
}
</style>

</head>

<body class="blue">
<div class="back-button" style="position: absolute;left: 0px">
    <a href="{{ url('/') }}" style="width: 100%; color: black; font-size: 40px">
        <i class="mdi-hardware-keyboard-backspace prefix"></i>
    </a>
</div>

  <div id="login-page" class="row">
    <div class="col s12 z-depth-6 card-panel">
      <form class="login-form">
        <div class="row">
          <div class="input-field col s12 center" style="height:100px;background-image:url({{asset('img/meetup-logo1.png')}});background-size: cover;
background-position: center;">
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-social-person-outline prefix"></i>
            <input id="name" type="text" class="validate">
            <label for="name" class="center-align">Name</label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-action-account-box  prefix"></i>
            <input id="rollno" type="text" class="validate">
            <label for="rollno" class="center-align">Rollno</label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-communication-email prefix"></i>
            <input id="email" type="email" class="validate">
            <label for="email" class="center-align">Email</label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-communication-phone prefix"></i>
            <input id="phone" type="text" class="validate">
            <label for="phone">Phone</label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <select style="display: block;" id="batch" required>
                <option value="">Select Batch</option>
                <option value="BCA">BCA</option>
                <option value="MCA">MCA</option>                
                <option value="CSE">CSE</option>
                <option value="EEE">EEE</option>
                <option value="MECH">MECH</option>
                <option value="ECE">ECE</option>
                <option disabled="disabled">-----------</option>
                <option value="BBA">BBA</option>
                <option value="BBM">BBM</option>
                <option value="BCOM">BCOM</option>
                <option value="INT">INT Msc</option>
                <option value="PG">PG</option>                
            </select>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <select style="display: block;" id="semester" required>
                <option value="">Select Semester</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
            </select>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <a href="register.html" class="btn waves-effect waves-light col s12">Register Now</a>
          </div>
          <div class="input-field col s12">
            <p class="margin center medium-small sign-up"><a href="#">Only limited seats available</a></p>
          </div>
        </div>
      </form>
    </div>
  </div>


  <center>
</center>

  <!-- ================================================
    Scripts
    ================================================ -->

  <!-- jQuery Library -->
 <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <!--materialize js-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/js/materialize.min.js"></script>




   <footer class="page-footer">
          <div class="footer-copyright">
            <div class="container">
            Markandeya © 2017
            <a class="grey-text text-lighten-4 right" href="">Ruby On Rails</a>
            </div>
          </div>
  </footer>
</body>

</html>
