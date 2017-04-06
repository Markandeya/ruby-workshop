<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="shortcut icon" href="{{{ asset('img/favicon.png') }}}">
  <title>RoR Workshop | Register</title>
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
    background-color: #016cc7;
}
.margin {
  margin: 0 !important;
}
</style>

</head>

<body>
<div class="back-button" style="position: absolute;left: 0px">
    <a href="{{ url('/') }}" style="width: 100%; color: black; font-size: 40px">
        <i class="mdi-hardware-keyboard-backspace prefix"></i>
    </a>
</div>
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)

                <li><div class="card-panel teal lighten-2" style="background-color:  #f21263 ;color:white">{{ $error }}</div></li>
            @endforeach
        </ul>
    </div>
@endif
  <div id="login-page" class="row">
    <div class="col s12 z-depth-6 card-panel">
      <form class="login-form" action="{{ url('register') }}" method="POST">
        {{ csrf_field() }}
        <div class="row">
          <div class="input-field col s12 center" style="height:100px;background-image:url({{asset('img/meetup-logo1.png')}});background-size: cover;
background-position: center;">
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-social-person-outline prefix"></i>
            <input name="name" type="text" class="validate" value="{{old('name')}}">
            <label for="name" class="center-align">Name</label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-action-account-box  prefix"></i>
            <input name="rollno" type="text" class="validate" value="{{old('rollno')}}">
            <label for="rollno" class="center-align">Rollno</label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-communication-email prefix"></i>
            <input name="email" type="email" class="validate" value="{{old('email')}}">
            <label for="email" class="center-align">Email</label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-communication-phone prefix"></i>
            <input name="phone" type="text" class="validate" value="{{old('phone')}}">
            <label for="phone">Phone</label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <select style="display: block;" name="batch" class="validate" required>
                <option value="">Select Batch</option>
                <option {{old('batch')=='BCA'?'selected':''}} value="BCA">BCA</option>
                <option {{old('batch')=='MCA'?'selected':''}} value="MCA">MCA</option>                
                <option {{old('batch')=='CSE'?'selected':''}} value="CSE">CSE</option>
                <option {{old('batch')=='EEE'?'selected':''}} value="EEE">EEE</option>
                <option {{old('batch')=='MECH'?'selected':''}} value="MECH">MECH</option>
                <option {{old('batch')=='ECE'?'selected':''}} value="ECE">ECE</option>
                <option disabled="disabled">-----------</option>
                <option {{old('batch')=='BBA'?'selected':''}} value="BBA">BBA</option>
                <option {{old('batch')=='BCOM'?'selected':''}} value="BCOM">BCOM</option>
                <option {{old('batch')=='INT'?'selected':''}} value="INT">INT Msc</option>
                <option {{old('batch')=='PG'?'selected':''}} value="PG">PG</option>                
            </select>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <select style="display: block;" name="semester" class="validate" selected="{{old('semester')}}"required>
                <option value="">Select Semester</option>
                <option {{old('semester')=='1'?'selected':''}} value="1">1</option>
                <option {{old('semester')=='2'?'selected':''}} value="2">2</option>
                <option {{old('semester')=='3'?'selected':''}} value="3">3</option>
                <option {{old('semester')=='4'?'selected':''}} value="4">4</option>
                <option {{old('semester')=='5'?'selected':''}} value="5">5</option>
                <option {{old('semester')=='6'?'selected':''}} value="6">6</option>
                <option {{old('semester')=='7'?'selected':''}} value="7">7</option>
                <option {{old('semester')=='8'?'selected':''}} value="8">8</option>
            </select>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <center>
            <input type="submit" style="background-color: teal;color:white;border: 1px solid teal;
padding: 2px;margin:0 auto" class="btn" value="Register Now">
            </center>
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
            Vasudev © 2017
            <a class="grey-text text-lighten-4 right" href="">Ruby On Rails</a>
            </div>
          </div>
  </footer>
</body>

</html>
