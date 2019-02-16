<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Bootswatch: Cosmo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <link rel="stylesheet" href="https://bootswatch.com/4/cosmo/bootstrap.css" media="screen">
    <link rel="stylesheet" href="https://bootswatch.com/_assets/css/custom.min.css">
    <link rel="stylesheet" href="css/glendale.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- <script src="js/booking.js"></script> -->
  </head>
  <body>
    <?php
        require_once "blocks/navi.php";
    ?>
        <div class="container-fluid rooferback">
            <div class="row">
                <div class="container">
                    <?php
                        require_once "blocks/book_estimation.php";
                    ?>
                </div>
            </div>
        </div>

        <div class="container-fluid space-both" style="clear:both;"  id="About_Us">
                <div class="container">
                    <?php
                        require "blocks/about.php";
                    ?>
                </div>
        </div>

        <div class="container-fluid bg-primary border-shadow space-both" style="clear:both;" id="Services">
                <?php
                        require "blocks/info_section.php";
                    ?>
        </div>

        <div class="container-fluid " style="clear:both;" id="Gallery">
            <div class="row space-both">
                <div class="container">
                <h1 class="display-3">Gallery</h1>
                    <?php
                        require "blocks/gallery.php";
                    ?>
                </div>
            </div>
        </div>
        <div class="container-fluid border-shadow bg-primary-light" style="clear:both;" id="Contact">
            <div class="row space-both">
                <div class="container">
                <h1 class="display-3">Contact</h1>
                    <?php
                        require "blocks/enquiry.php";
                    ?>
                </div>
            </div>
        </div>
        <div class="container-fluid" style="clear:both;">
            <div class="row bg-secondary space-both">
                <div class="container">
                    <?php
                        require "blocks/footer.php";
                    ?>
                </div>
            </div>
        </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script type="text/javascript" src="js/booking.js"></script> -->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="js/booking.js"></script>
  </body>
  </html>