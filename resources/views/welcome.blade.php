<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Ruby On Rails Workshop at Amrita University Amritapuri">
  <meta name="author" content="Markandeya">
  <link rel="shortcut icon" href="{{{ asset('img/favicon.png') }}}">
  <title>RoR Workshop | Home</title>

  <!-- Bootstrap -->
  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
  <link href="{{ asset('css/themify-icons.css') }}" rel="stylesheet">
  <link href='{{ asset('css/dosis-font.css') }}' rel='stylesheet' type='text/css'>
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
    </head>
    <body id="page-top" data-spy="scroll" data-target=".side-menu">
      <nav class="side-menu">
        <ul>
          <li class="hidden active">
            <a class="page-scroll" href="#page-top"></a>
          </li>
          <li>
            <a href="#home" class="page-scroll">
              <span class="menu-title">Home</span>
              <span class="dot"></span>
            </a>
          </li>
          <li>
            <a href="#speakers" class="page-scroll">
              <span class="menu-title">Speakers</span>
              <span class="dot"></span>
            </a>
          </li>
          <li>
            <a href="#tickets" class="page-scroll">
              <span class="menu-title">Buy Tickets</span>
              <span class="dot"></span>
            </a>
          </li>
          <li>
            <a href="#schedule" class="page-scroll">
              <span class="menu-title">Schedule</span>
              <span class="dot"></span>
            </a>
          </li>
        </ul>
      </nav>
        @if(Session::has('success'))
          <div class="card-panel teal lighten-2" style="background-color:  #f21263 ;color:white;width:100%;margin:0px;top:0px;font-size:25px;text-align: center">
          {{ Session::get('success') }}
          </div>
        @endif
      <div class="container-fluid">

        <!-- Start: Header -->
        <div class="row hero-header" id="home">
          <div class="col-md-7">
            <img src="img/meetup-logo.png" class="logo">
            <h1>Attend the most awaited Web Development Workshop of 2017</h1>
            <h3>to get you up and running with your next big idea!</h3>
            <h4>20<sup>th</sup> to 22<sup>nd</sup>  April, 2017</h4>
            <a href="{{ url('register') }}" class="btn btn-lg btn-red">Register Now <span class="ti-arrow-right"></span></a>

          </div>
          <div class="col-md-5 hidden-xs" style="background-image: url({{asset('img/shadowcircle.png')}});background-repeat:no-repeat;background-size:contain;background-position:center 250px; ">
            <img src="img/rocket.png" class="rocket animated bounce">
          </div>
        </div>
        <!-- End: Header -->
      </div>
      <div class="container">
        <!-- Start: Desc -->
        <div class="row me-row content-ct">
          <h2 class="row-title">Why This Event Is Super Cool?</h2>
          <div class="col-md-4 feature">
            <span class="ti-hand-open"></span>
            <h3>Hands On Experience</h3>
            <p>Don't just learn the know-how of the web framework, get hands on experience and dive deep with us to create something cool!</p>
          </div>
          <div class="col-md-4 feature">
            <span class="ti-microphone"></span>
            <h3>Expert Speakers</h3>
            <p>Best in class expert speakers who have extensive knowledge of the topic. All speakers are industry experts who have vast experience in the field.</p>
          </div>
          <div class="col-md-4 feature">
            <span class="ti-world"></span>
            <h3>Its Ruby On Rails!</h3>
            <p>It’s just elegant, and awesome. Ruby on Rails powers 1,169,293 websites including popular websites like Github and SlideShare.</p>
          </div>
        </div>
        <!-- End: Desc -->

        <!-- Start: Speakers -->
        <div class="row me-row content-ct speaker" id="speakers">
          <h2 class="row-title">Meet the Speakers</h2>
          <div class="col-md-4 col-sm-6 feature">
            <img src="img/speaker-1.png" class="speaker-img">
            <h3>Simon Collins</h3>
            <p>Simon is designer and partner at Fictivekin and has worked in a variety of situations for bands, record labels, governments, polar explorers, and most other things...</p>
            <ul class="speaker-social">
              <li><a href="#"><span class="ti-facebook"></span></a></li>
              <li><a href="#"><span class="ti-twitter-alt"></span></a></li>
              <li><a href="#"><span class="ti-linkedin"></span></a></li>
            </ul>
          </div>
          <div class="col-md-4 col-sm-6 feature">
            <img src="img/speaker-2.png" class="speaker-img">
            <h3>Stephanie Troeth</h3>
            <p>Stephie is a user experience researcher and designer. In over 15 years of working on the web, she has worn many hats, including a product lead for a tech startup in publishing...</p>
            <ul class="speaker-social">
              <li><a href="#"><span class="ti-facebook"></span></a></li>
              <li><a href="#"><span class="ti-twitter-alt"></span></a></li>
              <li><a href="#"><span class="ti-linkedin"></span></a></li>
            </ul>
          </div>
          <div class="col-md-4 col-sm-6 feature">
            <img src="img/speaker-3.png" class="speaker-img">
            <h3>Harry Roberts</h3>
            <p>Harry is a freelance designer, developer, writer, speaker and front-end architect from the UK, previously working as Senior UI Developer for Sky. He Tweets at...</p>
            <ul class="speaker-social">
              <li><a href="#"><span class="ti-facebook"></span></a></li>
              <li><a href="#"><span class="ti-twitter-alt"></span></a></li>
              <li><a href="#"><span class="ti-linkedin"></span></a></li>
            </ul>
          </div>
          <div class="col-md-4 col-sm-6 feature">
            <img src="img/speaker-4.png" class="speaker-img">
            <h3>Geri Coady</h3>
            <p>Harry is a freelance designer, developer, writer, speaker and front-end architect from the UK, previously working as Senior UI Developer for Sky. He Tweets at...</p>
            <ul class="speaker-social">
              <li><a href="#"><span class="ti-facebook"></span></a></li>
              <li><a href="#"><span class="ti-twitter-alt"></span></a></li>
              <li><a href="#"><span class="ti-linkedin"></span></a></li>
            </ul>
          </div>
          <div class="col-md-4 col-sm-6 feature">
            <img src="img/speaker-5.png" class="speaker-img">
            <h3>Andy Budd</h3>
            <p>Harry is a freelance designer, developer, writer, speaker and front-end architect from the UK, previously working as Senior UI Developer for Sky. He Tweets at...</p>
            <ul class="speaker-social">
              <li><a href="#"><span class="ti-facebook"></span></a></li>
              <li><a href="#"><span class="ti-twitter-alt"></span></a></li>
              <li><a href="#"><span class="ti-linkedin"></span></a></li>
            </ul>
          </div>
          <div class="col-md-4 col-sm-6 feature">
            <img src="img/speaker-6.png" class="speaker-img">
            <h3>Christian Lauke</h3>
            <p>Harry is a freelance designer, developer, writer, speaker and front-end architect from the UK, previously working as Senior UI Developer for Sky. He Tweets at...</p>
            <ul class="speaker-social">
              <li><a href="#"><span class="ti-facebook"></span></a></li>
              <li><a href="#"><span class="ti-twitter-alt"></span></a></li>
              <li><a href="#"><span class="ti-linkedin"></span></a></li>
            </ul>
          </div>
        </div>
        <!-- End: Speakers -->
      </div>

      <!-- Start: Tickets -->
      <div class="container-fluid tickets" id="tickets">
        <div class="row me-row content-ct">
          <h2 class="row-title">Buy Tickets</h2>
          <div class="col-md-4 col-sm-6 col-md-offset-2">
            <h3>Early Bird Ticket</h3>
            <p class="price">$399</p>
            <p>All days entry pass for all the events.</p>
            <a href="#" class="btn btn-lg btn-red">Buy <small>(6 remaining)</small></a>
          </div>
          <div class="col-md-4 col-sm-6">
            <h3>Workshop Pass</h3>
            <p class="price">$199</p>
            <p>Entry pass for each workshop</p>
            <a href="#" class="btn btn-lg btn-red">Buy <small>(42 remaining)</small></a>
          </div>
        </div>
      </div>
      <!-- End: Tickets -->

      <!-- Start: Schedule -->
      <div class="container">
        <div class="row me-row schedule" id="schedule">
          <h2 class="row-title content-ct">Event Schedule</h2>
          <div class="col-md-12">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
              <li role="presentation" class="active"><a href="#day-1" aria-controls="home" role="tab" data-toggle="tab">Day 01 <small class="hidden-xs">(20<sup>th</sup>, October)</small></a></li>
              <li role="presentation"><a href="#day-2" aria-controls="profile" role="tab" data-toggle="tab">Day 02 <small class="hidden-xs">(21<sup>st</sup>, October)</small></a></li>
              <li role="presentation"><a href="#day-3" aria-controls="messages" role="tab" data-toggle="tab">Day 03 <small class="hidden-xs">(22<sup>nd</sup>, October)</small></a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
              <div role="tabpanel" class="tab-pane fade in active" id="day-1">
                <div class="row">
                  <div class="col-md-6">
                    <div class="media">
                      <div class="media-left">
                        <a href="#">
                          <img class="media-object" src="img/speaker-1.png" alt="...">
                        </a>
                      </div>
                      <div class="media-body">
                        <h4 class="media-heading">10am to 10:30am</h4>
                        <h5>THE DESIGNER’S GUIDE TO BEING ESSENTIAL</h5>
                        <p>Simon is designer and partner at Fictivekin and has worked in a variety of situations for bands, record labels, governments, polar explorers, and most other things. </p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="media">
                      <div class="media-left">
                        <a href="#">
                          <img class="media-object" src="img/speaker-2.png" alt="...">
                        </a>
                      </div>
                      <div class="media-body">
                        <h4 class="media-heading">10:45am to 11:30am</h4>
                        <h5>MODULAR DESIGN AT WORK</h5>
                        <p>Simon is designer and partner at Fictivekin and has worked in a variety of situations for bands, record labels, governments, polar explorers, and most other things. </p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="media">
                      <div class="media-left">
                        <a href="#">
                          <img class="media-object" src="img/speaker-3.png" alt="...">
                        </a>
                      </div>
                      <div class="media-body">
                        <h4 class="media-heading">12:00pm to 01:30pm</h4>
                        <h5>AN INTRODUCTION TO TOUCH AND POINTER EVENTS</h5>
                        <p>Simon is designer and partner at Fictivekin and has worked in a variety of situations for bands, record labels, governments, polar explorers, and most other things. </p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="media">
                      <div class="media-left">
                        <a href="#">
                          <img class="media-object" src="img/speaker-4.png" alt="...">
                        </a>
                      </div>
                      <div class="media-body">
                        <h4 class="media-heading">02:00pm to 03.30pm</h4>
                        <h5>WEB FONTS PERFORMANCE</h5>
                        <p>Simon is designer and partner at Fictivekin and has worked in a variety of situations for bands, record labels, governments, polar explorers, and most other things. </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div role="tabpanel" class="tab-pane fade" id="day-2">
                <div class="row">
                  <div class="col-md-6">
                    <div class="media">
                      <div class="media-left">
                        <a href="#">
                          <img class="media-object" src="img/speaker-4.png" alt="...">
                        </a>
                      </div>
                      <div class="media-body">
                        <h4 class="media-heading">10am to 10:30am</h4>
                        <h5>MAKING DOG FOOD PART OF A BALANCED DIET</h5>
                        <p>Simon is designer and partner at Fictivekin and has worked in a variety of situations for bands, record labels, governments, polar explorers, and most other things. </p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="media">
                      <div class="media-left">
                        <a href="#">
                          <img class="media-object" src="img/speaker-3.png" alt="...">
                        </a>
                      </div>
                      <div class="media-body">
                        <h4 class="media-heading">10:45am to 11:30am</h4>
                        <h5>HANDS-ON WEB AUDIO</h5>
                        <p>Simon is designer and partner at Fictivekin and has worked in a variety of situations for bands, record labels, governments, polar explorers, and most other things. </p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="media">
                      <div class="media-left">
                        <a href="#">
                          <img class="media-object" src="img/speaker-2.png" alt="...">
                        </a>
                      </div>
                      <div class="media-body">
                        <h4 class="media-heading">12:00pm to 01:30pm</h4>
                        <h5>CONVERSION RATE OPTIMIZATION TECHNIQUES IN ECOMMERCE</h5>
                        <p>Simon is designer and partner at Fictivekin and has worked in a variety of situations for bands, record labels, governments, polar explorers, and most other things. </p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="media">
                      <div class="media-left">
                        <a href="#">
                          <img class="media-object" src="img/speaker-1.png" alt="...">
                        </a>
                      </div>
                      <div class="media-body">
                        <h4 class="media-heading">02:00pm to 03.30pm</h4>
                        <h5>PAPER PROTOTYPING APPLICATIONS</h5>
                        <p>Simon is designer and partner at Fictivekin and has worked in a variety of situations for bands, record labels, governments, polar explorers, and most other things. </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div role="tabpanel" class="tab-pane fade" id="day-3">
                <div class="row">
                  <div class="col-md-6">
                    <div class="media">
                      <div class="media-left">
                        <a href="#">
                          <img class="media-object" src="img/speaker-6.png" alt="...">
                        </a>
                      </div>
                      <div class="media-body">
                        <h4 class="media-heading">10am to 10:30am</h4>
                        <h5>THE DESIGNER’S GUIDE TO BEING ESSENTIAL</h5>
                        <p>Simon is designer and partner at Fictivekin and has worked in a variety of situations for bands, record labels, governments, polar explorers, and most other things. </p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="media">
                      <div class="media-left">
                        <a href="#">
                          <img class="media-object" src="img/speaker-5.png" alt="...">
                        </a>
                      </div>
                      <div class="media-body">
                        <h4 class="media-heading">10:45am to 11:30am</h4>
                        <h5>THE DESIGNER’S GUIDE TO BEING ESSENTIAL</h5>
                        <p>Simon is designer and partner at Fictivekin and has worked in a variety of situations for bands, record labels, governments, polar explorers, and most other things. </p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="media">
                      <div class="media-left">
                        <a href="#">
                          <img class="media-object" src="img/speaker-3.png" alt="...">
                        </a>
                      </div>
                      <div class="media-body">
                        <h4 class="media-heading">12:00pm to 01:30pm</h4>
                        <h5>THE DESIGNER’S GUIDE TO BEING ESSENTIAL</h5>
                        <p>Simon is designer and partner at Fictivekin and has worked in a variety of situations for bands, record labels, governments, polar explorers, and most other things. </p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="media">
                      <div class="media-left">
                        <a href="#">
                          <img class="media-object" src="img/speaker-4.png" alt="...">
                        </a>
                      </div>
                      <div class="media-body">
                        <h4 class="media-heading">02:00pm to 03.30pm</h4>
                        <h5>THE DESIGNER’S GUIDE TO BEING ESSENTIAL</h5>
                        <p>Simon is designer and partner at Fictivekin and has worked in a variety of situations for bands, record labels, governments, polar explorers, and most other things. </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End: Schedule -->

      <!-- Start: Footer -->
      <div class="container-fluid footer">
        <div class="row contact">
          <div class="col-md-6 contact-form">
            <h3 class="content-ct"><span class="ti-email"></span> Contact Form</h3>
            <form class="form-horizontal" data-toggle="validator" role="form" method="POST" action="{{ url('sendmail') }}">
              {{ csrf_field() }}
              <div class="form-group">
                <label for="name" class="col-sm-3 control-label">Name<sup>*</sup></label>
                <div class="col-sm-9">
                  <input type="text" class="form-control"  style="padding: 0px;" id="name" placeholder="John Doe" name="name" required>
                  <div class="help-block with-errors pull-right"></div>
                  <span class="form-control-feedback" aria-hidden="true"></span>
                </div>
              </div>
              <div class="form-group">
                <label for="email" class="col-sm-3 control-label">Email<sup>*</sup></label>
                <div class="col-sm-9">
                  <input type="email" class="form-control" style="padding: 0px;"  id="email" placeholder="you@youremail.com" name="email" required>
                  <div class="help-block with-errors pull-right"></div>
                  <span class="form-control-feedback" aria-hidden="true"></span>
                </div>
              </div>
              <div class="form-group">
                <label for="message" class="col-sm-3 control-label">Your Message<sup>*</sup></label>
                <div class="col-sm-9">
                  <textarea id="message" name="message" class="form-control" rows="3" required></textarea>
                  <div class="help-block with-errors pull-right"></div>
                  <span class="form-control-feedback" aria-hidden="true"></span>
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-offset-3 col-sm-9">
                  <button type="submit" id="submit" name="submit" class="btn btn-yellow pull-right">Send <span class="ti-arrow-right"></span></button>
                </div>
              </div>
            </form>
          </div>
          <div class="col-md-4 col-md-offset-1 content-ct">
            <h3><span class="ti-help-alt"></span> Any Queries?</h3>
            <hr>
            <p>
              Give us a mail using the contact form!
            </p>
            <hr>
          </div>
            {{-- <p>Lorem Ipsum is a <a href="#">#dummy</a> text used as a text filler in designs. This is just a dummy text. via <a href="#">@designerdada</a> </p>
            <hr>
            <p>Lorem Ipsum is a <a href="#">#dummy</a> text used as a text filler in designs. This is just a dummy text. via <a href="#">@designerdada</a> </p>
          </div> --}} 
        </div>
        <div class="row footer-credit">
          <div class="col-md-6 col-sm-6">
            <p>&copy; 2017, <a href="#">Markandeya</a> | All rights reserved.</p>
          </div>
          <div class="col-md-6 col-sm-6">
          <!--  <ul class="footer-menu">
              <li><a href="#">About Us</a></li>
              <li><a href="#">Privacy Policy</a></li>
              <li><a href="#">Terms &amp; Condition</a></li>
            </ul>-->
          </div>
        </div>
      </div>
      <!-- End: Footer -->

      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src="{{ asset('js/jquery.min.js')}}"></script>
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src="{{ asset('js/bootstrap.min.js') }}"></script>
      <script src="{{ asset('js/jquery.easing.min.js') }}"></script>
      <script src="{{ asset('js/scrolling-nav.js') }}"></script>
      <script src="{{ asset('js/validator.js') }}"></script>
      <!-- Google Analytics -->
      <!--<script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-29231762-2', 'auto');
      ga('send', 'pageview');
      </script>-->
    </body>
    </html>
