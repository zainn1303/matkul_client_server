<?php include("./header.php"); ?>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="first-slide" src="./assets/slider/slider_4.jpg" alt="First slide">
            <div class="container">
                <div class="carousel-caption text-left">
                    <!-- <h1>Example headline.</h1>
                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                            <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p> -->
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img class="second-slide" src="./assets/slider/slider_5.jpg" alt="Second slide">
            <div class="container">
                <div class="carousel-caption">
                    <!-- <h1>Another example headline.</h1>
                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                            <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p> -->
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img class="third-slide" src="./assets/slider/slider_6.jpg" alt="Third slide">
            <div class="container">
                <div class="carousel-caption text-right">
                    <!-- <h1>One more for good measure.</h1>
                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                            <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p> -->
                </div>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>


<!-- Marketing messaging and featurettes
      ================================================== -->
<!-- Wrap the rest of the page in another container to center all the content. -->

<div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <!-- <div class="row">
                <div class="col-lg-4">
                    <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
                    <h2>Heading</h2>
                    <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
                    <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
                </div> -->
    <!-- /.col-lg-4 -->
    <!-- <div class="col-lg-4">
                    <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
                    <h2>Heading</h2>
                    <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
                    <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
                </div> -->
    <!-- /.col-lg-4 -->
    <!-- <div class="col-lg-4">
                    <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
                    <h2>Heading</h2>
                    <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                    <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
                </div> -->
    <!-- /.col-lg-4 -->
    <!-- </div> -->
    <!-- /.row -->


    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading">Kehutanan <span class="text-muted">adalah</span></h2>
            <p class="lead">
                Menurut Simon (1998), perkembangan teori pengelolaan hutan dapat dikelompokkan ke dalam dua kategori, yaitu kategori kehutanan konvensional dan kategori kehutanan modern (kehutanan sosial).
            </p>
        </div>
        <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" src="./assets/home/simon.jpg" alt="Generic placeholder image">
        </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading">Kehutanan <span class="text-muted">Konvensional.</span></h2>
            <p class="lead">Teori pengelolaan hutan yang termasuk ke dalam kehutanan konvensional adalah penambangan kayu atau timber extraction (TE) dan perkebunan kayu atau timber management (TM).</p>
        </div>
        <div class="col-md-5 order-md-1">
            <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" src="./assets/home/konvensional.jpg" alt="Generic placeholder image">
        </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading">Dan terakhir, Kehutanan <span class="text-muted">Modern.</span></h2>
            <p class="lead">Kehutanan sosial adalah pengelolaan hutan sebagai sumberdaya atau forest resource management (FRM) dan pengelolaan hutan sebagai ekosistem atau forest ecosystem management (FEM). Keduanya disebut juga dengan istilah lain Sustainable Forestry Management (SFM). Ketiga teori pengelolaan hutan tersebut, secara evolutif berkembang, sejak dari mulai penambangan kayu (TE) hingga sampai pada pengelolaan ekosistem hutan (FEM).</p>
        </div>
        <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" src="./assets/home/modern.jpg" alt="Generic placeholder image">
        </div>
    </div>

    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

</div>
<!-- /.container -->
<!-- FOOTER -->
<footer class="container">
    <p class="float-right"><a href="#">Back to top</a></p>
    <p>&copy; 2020 Kehutanan.</p>
</footer>
<?php include("./footer.php"); ?>