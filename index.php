<?php
session_start();
include("include/funciones.php");
include("cabecera.php");
include("config/db.php");
if (isset($_REQUEST["id"]))
  $id = $_REQUEST["id"];

  else
    $id = "inicio";

?>




  <body>
  <div class="social-bar">
    <a href="#" class="icon icon-facebook" target="_blank"></a>
    <a href="#" class="icon icon-twitter" target="_blank"></a>
    <a href="#" class="icon icon-youtube" target="_blank"></a>
    <a href="#" class="icon icon-instagram" target="_blank"></a>
  </div>
  <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
        <div class="col-md-6 px-0">
        <h1 class="display-4 font-italic">EL blog de la escalada espiritual</h1>
          <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what's most interesting in this post's contents.</p> 
        </div>
      </div>
  

      <div class="row mb-2">
      <div class="container">
  <div class="row">
    <div class="col-12 col-sm-8 col-md-6 col-lg-4">
      <div class="card border-0">
        <div class="card-body">
          <h4 class="card-title">Bologna</h4>
          <h6 class="card-subtitle mb-2 text-muted">Emilia-Romagna Region, Italy</h6>
          <p class="card-text">It is the seventh most populous city in Italy, at the heart of a metropolitan area of about one million people. </p>
          <a href="#" class="p-2 text-muted">Read More</a>
          <a href="#" class="card-link">Book a Trip</a>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
        </div>
        
    

    

          <div class="p-3">
            <h4 class="font-italic">Archives</h4>
            <ol class="list-unstyled mb-0">
              <li><a href="#">March 2014</a></li>
              <li><a href="#">February 2014</a></li>
              <li><a href="#">January 2014</a></li>
              <li><a href="#">December 2013</a></li>
              <li><a href="#">November 2013</a></li>
              <li><a href="#">October 2013</a></li>
              <li><a href="#">September 2013</a></li>
              <li><a href="#">August 2013</a></li>
              <li><a href="#">July 2013</a></li>
              <li><a href="#">June 2013</a></li>
              <li><a href="#">May 2013</a></li>
              <li><a href="#">April 2013</a></li>
            </ol>
          </div>

          <div class="p-3">
            <h4 class="font-italic">Elsewhere</h4>
            <ol class="list-unstyled">
              <li><a href="#">GitHub</a></li>
              <li><a href="#">Twitter</a></li>
              <li><a href="#">Facebook</a></li>
            </ol>
          </div>
        </aside><!-- /.blog-sidebar -->

      </div><!-- /.row -->

    </main><!-- /.container -->

   <?php
    include("pie.php");

    ?>