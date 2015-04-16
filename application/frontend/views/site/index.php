<?php
/* @var $this yii\web\View */
$this->title = 'APC Career Placement Office';
?>

<div class="site-index">

 
<!-- Carousel
================================================== -->
<div id="myCarousel" class="carousel slide"  data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>
  
  <div class="carousel-inner">
    
    <div class="item active">
      <a href="http://estiloasertivo.blogspot.com.es/"> 
      <img src="images/banner1.jpg" style="width:100%" class="img-responsive">
    </div>
    
    <div class="item">
      <a href="http://apc.edu.ph"> 
      <img src="images/theinternship.png" class="img-responsive">
    </div>
    
    <div class="item">
      <a href="http://estiloasertivo.blogspot.com.es/"> 
      <img src="images/intern101.jpg" class="img-responsive">  
    </div>
  </div>
  
  <!-- Controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="icon-prev"></span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="icon-next"></span>
  </a>  
</div>
<!-- /.carousel -->

<div>
  <p></p>
</div>

<!-- Marketing messaging and featurettes
================================================== -->
<!-- Wrap the rest of the page in another container to center all the content. -->

<div class="container marketing">

  <!-- Three columns of text below the carousel -->
  <div class="row">
    <div class="col-md-4 text-center">
      <img class="img-circle" src="images/beupdated.png">
      <h2>Be Updated!</h2>
      <p>Get the latest news on what's happening inside your school and the industry partners</p>
      <p><?='<a class="btn btn-default" href="'.Yii::$app->homeUrl.'posts/index">'?>View details »</a></p>
    </div>
    <div class="col-md-4 text-center">
      <img class="img-circle" src="images/uploadreq.png">
      <h2>Upload Requirements</h2>
      <p>You can now upload requirements here at the CPO Communication Site!</p>
      <p><?='<a class="btn btn-default" href="'.Yii::$app->homeUrl.'backend/internships/index">'?>View details »</a></p>
    </div>
    <div class="col-md-4 text-center">
      <img class="img-circle" src="images/contact.png">
      <h2>Contact Us</h2>
      <p>Do you have any problems or inquiries? You can ask the CPO through this site.</p>
      <p><?='<a class="btn btn-default" href="'.Yii::$app->homeUrl.'site/contact">'?>View details »</a></p>
    </div>
  </div><!-- /.row -->


  <!-- START THE FEATURETTES -->

 <hr class="featurette-divider">

  <div class="featurette">
    <img class="featurette-image img-circle pull-right" src="images/featurette1.png">
    <h2 class="featurette-heading">Asia Pacific College. <span class="text-muted">Real Projects. Real Learning.</span></h2>
    <p class="lead">This communication site is a microsite that bridges the gap between the school, the interns and the industry partners alike.</p>
  </div>

  <hr class="featurette-divider">

  <div class="featurette">
    <img class="featurette-image img-circle pull-left" src="images/featurette2.png">
    <h2 class="featurette-heading">Real Immersion. <span class="text-muted">Six months of training.</span></h2>
    <p class="lead">During the Internship Program, the Interns are not expected to enroll in any academic courses in school for they will be working full-time (eight hours a day, Mondays to Fridays) at their respective companies. Interns are invited to attend once a month Saturday 
                  sessions with the Career and Placement Office to discuss updates, issues or problems encountered.</p>
  </div>

  <hr class="featurette-divider">

  <div class="featurette">
    <img class="featurette-image img-circle pull-right" src="images/featurette3.png">
    <h2 class="featurette-heading">The Intern Know-How. <span class="text-muted">Strive in Excellence.</span></h2>
    <p class="lead">What do your Industry Professors expect of you? What are the do's and don'ts in Internship. How to excel in your area?</p>
  </div>

  <hr class="featurette-divider">

  <!-- /END THE FEATURETTES -->


  <!-- FOOTER -->
  <footer>
    <p class="pull-right"><a href="#">Back to top</a></p>
  </footer>
</div><!-- /.container -->
</div>
