<!DOCTYPE html>
<html lang="en">
<head>
  <title>search</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <style>
  body {
      font: 400 15px Lato, sans-serif;
      line-height: 1.8;
      color: #818181;
  }
  h2 {
      font-size: 24px;
      text-transform: uppercase;
      color: #303030;
      font-weight: 600;
      margin-bottom: 30px;
  }
  h4 {
      font-size: 19px;
      line-height: 1.375em;
      color: #303030;
      font-weight: 400;
      margin-bottom: 30px;
  }
  .jumbotron {
	  background-color:#666699;
      color: #fff;
      padding: 100px 25px;
      font-family: Montserrat, sans-serif;
  }
  .container-fluid {
      padding: 60px 50px;
  }
  .bg-grey {
      background-color: #f6f6f6;
  }
  .logo-small {
      color: #666699;
      font-size: 50px;
  }
  .logo {
      color: #666699;
      font-size: 200px;
  }
  .thumbnail {
      padding: 0 0 15px 0;
      border: none;
      border-radius: 0;
  }
  .thumbnail img {
      width: 100%;
      height: 100%;
      margin-bottom: 10px;
  }
  .carousel-control.right, .carousel-control.left {
      background-image: none;
      color: #666699;
  }
  .carousel-indicators li {
      border-color: #666699;
  }
  .carousel-indicators li.active {
      background-color: #666699;
  }
  .item h4 {
      font-size: 19px;
      line-height: 1.375em;
      font-weight: 400;
      font-style: italic;
      margin: 70px 0;
  }
  .item span {
      font-style: normal;
  }
  .panel {
      border: 1px solid #666699;
      border-radius:0 !important;
      transition: box-shadow 0.5s;
  }
  .panel:hover {
      box-shadow: 5px 0px 40px rgba(0,0,0, .2);
  }
  .panel-footer .btn:hover {
      border: 1px solid #666699;
      background-color: #fff !important;
      color: #666699;
  }
  .panel-heading {
      color: #fff !important;
      background-color: #666699 !important;
      padding: 25px;
      border-bottom: 1px solid transparent;
      border-top-left-radius: 0px;
      border-top-right-radius: 0px;
      border-bottom-left-radius: 0px;
      border-bottom-right-radius: 0px;
  }
  .panel-footer {
      background-color: white !important;
  }
  .panel-footer h3 {
      font-size: 32px;
  }
  .panel-footer h4 {
      color: #aaa;
      font-size: 14px;
  }
  .panel-footer .btn {
      margin: 15px 0;
      background-color: #666699;
      color: #fff;
  }
  .navbar {
      margin-bottom: 0;
      background-color: #666699;
      z-index: 9999;
      border: 0;
      font-size: 12px !important;
      line-height: 1.42857143 !important;
      letter-spacing: 4px;
      border-radius: 0;
      font-family: Montserrat, sans-serif;
  }
  .navbar li a, .navbar .navbar-brand {
      color: #fff !important;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
      color: #666699 !important;
      background-color: #fff !important;
  }
  .navbar-default .navbar-toggle {
      border-color: transparent;
      color: #fff !important;
  }
  footer .glyphicon {
      font-size: 20px;
      margin-bottom: 20px;
      color: #666699;
  }
  .slideanim {visibility:hidden;}
  .slide {
      animation-name: slide;
      -webkit-animation-name: slide;
      animation-duration: 1s;
      -webkit-animation-duration: 1s;
      visibility: visible;
  }
  @keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    }
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    }
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
    .btn-lg {
        width: 100%;
        margin-bottom: 35px;
    }
  }
  @media screen and (max-width: 480px) {
    .logo {
        font-size: 150px;
    }
  }
  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
   <a class="navbar-brand" href="<?php echo base_url();?>index.php"><img src="<?php echo base_url();?>images/logo1.jpg" alt="Cents2Acres" height="70" width="120"/></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">

      	<li><a href="#login">LOGIN</a></li>
         <li><a href="#register">REGISTER</a></li>
        <li><a href="#about">ABOUT</a></li>
        <li><a href="#services">SERVICES</a></li>
        <li><a href="#portfolio">PORTFOLIO</a></li>
        <li><a href="#contact">CONTACT</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron text-center" style="background-image:url(<?php echo base_url();?>images/Untitled.png); ">
  <h1>Cents2Acres</h1>
  <p>Search for car</p>
  <form id="form0" name="form0" method="post" class="form-inline" action="<?php echo base_url();?>index.php/log_new/visitor">
    <input id="srch" name="srch" type="text" class="form-control" size="50" placeholder="Enter here " required>
   <br/><br/>
    <center><input type="submit" class="btn btn-danger" value="search" ></center>
  </form>
</div>

<br/>
<p>
<div class="container">
  <div class="row">
  <?php
foreach($result1 as $t)
{
?>
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading"><?php echo $t["title"];?></div>
        <div class="panel-body"><img src="<?php echo base_url();?>images/<?php echo $t["imagename"];?>" class="img-responsive" style="width:400px;height:200px;" alt="Image"></div>
        <div class="panel-footer"><?php echo $t["hectors"] . " seater<br>Rs." . $t["cents"]  . " per day<br>" . $t["acres"] . " kms travelled<br>Contact at: " .  $t["description"] . "<br>" . $t["address"] . "<br>" . $t["landmark"];?></div>
      </div>
    </div>
<?php
}
?>
  </div>
</div>
</p>
<br>

<!-- Container (login Section) -->
<div id="login" class="container-fluid bg-grey">
  <h2 class="text-center">LOGIN</h2>
  <div class="row">
    <div class="col-sm-12 slideanim">
    <form id="form1" name="form1" method="post" action="<?php echo base_url();?>index.php/log_new/loginnew">
          <input class="form-control" id="username" name="username" placeholder="Username" type="text" required>
          <br/>
    	 <input class="form-control" id="password" name="password" placeholder="password" type="password" required>
         <br/>
     	 <center><input class="btn btn-default" type="submit" style="background-color:#33CC66;" value="login"/></center>
         </form>
      </div>
 </div>
</div>
<!-- Container (register Section) -->
<div id="register" class="container-fluid bg-grey">
  <h2 class="text-center">REGISTER</h2>
  <div class="row">
    <div class="col-sm-12 slideanim">

         <form id="form2" name="form2" method="post" action="<?php echo base_url();?>index.php/reg_new/regis">

           <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
          <br/>
    	 <textarea class="form-control" id="address" name="address" placeholder="Address" required></textarea>
         <br/>
         <input class="form-control" id="username" name="username" placeholder="Username" type="text" required>
        <br/>
    	 <input class="form-control" id="password" name="password" placeholder="password" type="password" required>
         <br/>
          <input class="form-control" id="cpassword" name="cpassword" placeholder="confirm password" type="password" required>
		 <br/>
     	 <center><input class="btn btn-default" type="submit" style="background-color:#33CC66;"  value="register"/></center>
		</form>
      </div>
 </div>
</div>


<!-- Container (About Section) -->
<div id="about" class="container-fluid">
  <div class="row">
    <div class="col-sm-8">
      <h2>About Company Page</h2><br>
     <h4>Cents2Acres leads the property market</h4><br>
      <p>The team at Cents2Acrtes are more than real estate agents looking for real estate listings. We are a dedicated team of truly passionate, property professionals who understand our clients’ needs and wants. When making property decisions that impact your family now and in the future, you need a Premium property partner. We understand that your home is an important part of your life, it houses your family, it’s where memories are made and it provides for your future. For over thirty years Cents2Acres has been building a wealth of experience and knowledge in the high-value, luxury property market. Premium Real Estate specialises in the finest coastal, lifestyle, luxury and executive real estate in India.</p>
      <br><button class="btn btn-default btn-lg">Get in Touch</button>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-signal logo"></span>
    </div>
  </div>
</div>

<div class="container-fluid bg-grey">
  <div class="row">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-globe logo slideanim"></span>
    </div>
    <div class="col-sm-8">
      <h2>Our Values</h2><br>
      <h4><strong>VISION:</strong> Our's is a regional, full-service real estate development and management company. Our objective is to be a profitable leader in commercial, retail and residential real estate. We will serve our customers' needs and will consistently produce and manage developments of lasting value to the community. We recognize the need to be flexible, entrepreneurial, and aggressive, both as individuals and as a company. We believe in teamwork, innovation, professionalism, and long-term decision-making. We endeavor to preserve and enhance our reputation for integrity through all our actions</h4><br>
      <p><strong>MISSION:</strong>  We direct all of our efforts toward our customers – both internally and externally- to understand, anticipate, and satisfy their needs and expectations in a timely, cost-effective and value-added manner both as a company and as individuals.</p>
    </div>
  </div>
</div>

<!-- Container (Services Section) -->
<div id="services" class="container-fluid text-center">
  <h2>SERVICES</h2>
  <h4>What we offer</h4>
  <br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-off logo-small"></span>
      <h4>POWER</h4>
      <p>Because it matters</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-heart logo-small"></span>
      <h4>LOVE</h4>
      <p>Because we need it</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-lock logo-small"></span>
      <h4>JOB DONE</h4>
      <p>Because its required</p>
    </div>
  </div>
  <br><br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-leaf logo-small"></span>
      <h4>GREEN</h4>
      <p>Because we care</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-certificate logo-small"></span>
      <h4>CERTIFIED</h4>
      <p>Its who we are</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-wrench logo-small"></span>
      <h4 style="color:#303030;">HARD WORK</h4>
      <p>Without it nothing is possible</p>
    </div>
  </div>
</div>

<!-- Container (Portfolio Section) -->
<div id="portfolio" class="container-fluid text-center bg-grey">
  <h2>Portfolio</h2><br>
  <h4>What we have created</h4>
  <div class="row text-center slideanim">
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="<?php echo base_url();?>images/chennai.jpg" alt="chennai" width="400" height="300">
        <p><strong>chennai</strong></p>
        <p>Yes, we built chennai</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="<?php echo base_url();?>images/bangalore.jpg" alt="bangalore" width="400" height="300">
        <p><strong>Bangalore</strong></p>
        <p>We built bangalore</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="<?php echo base_url();?>images/kochi.jpg" alt="Kochi" width="400" height="300">
        <p><strong>Kochi</strong></p>
        <p>Yes, Kochi is ours</p>
      </div>
    </div>
  </div><br>

  <h2>What our customers say</h2>
  <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <h4>"This company is the best. I am so happy with the result!"<br><span style="font-style:normal;">Harikrishnan, Vice President, Comment Box</span></h4>
      </div>
      <div class="item">
        <h4>"One word... WOW!!"<br><span style="font-style:normal;">John Doe, Salesman, Rep Inc</span></h4>
      </div>
      <div class="item">
        <h4>"Could I... BE any more happy with this company?"<br><span style="font-style:normal;">Chandler Bing, Actor, FriendsAlot</span></h4>
      </div>
    </div>


    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>


<!-- Container (Contact Section) -->
<div id="contact" class="container-fluid bg-grey">
  <h2 class="text-center">CONTACT</h2>
  <div class="row">
    <div class="col-sm-5">
       <p>Contact us and we'll get back to you within 24 hours.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Vellore, Tamil Nadu</p>
      <p><span class="glyphicon glyphicon-phone"></span>+91 9597633199</p>
      <p><span class="glyphicon glyphicon-envelope"></span> harikrishnanbinoy7@gmail.com</p>
    </div>

  </div>
</div>


<footer class="container-fluid text-center">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
</footer>

<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){

        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });

  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>

</body>
</html>
