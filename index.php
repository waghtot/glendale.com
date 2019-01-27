<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Bootswatch: Cosmo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <link rel="stylesheet" href="https://bootswatch.com/4/cosmo/bootstrap.css" media="screen">
    <link rel="stylesheet" href="https://bootswatch.com/_assets/css/custom.min.css">
    <link rel="stylesheet" href="/css/glendale.css" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

  </head>
  <body>
    <?php
        require_once "blocks/navi.php";
    ?>
        <div class="container-fluid rooferback">
            <div class="row rooferback">
            <div class="container">
                <?php
                    require_once "blocks/book_estimation.php";
                ?>
            </div>
            </div>
        </div>

        <!-- <div class="container">
            <?php
                // require_once "blocks/jumbotron.php";
            ?>
        </div> -->

        <div class="container-fluid border-shadow" style="clear:both;">
            <div class="row bg-primary space-both">
                <div class="container">
                    <?php
                        require_once "blocks/info_section.php";
                    ?>
                </div>
            </div>
        </div>

        <div class="container">
                    <?php
                        require_once "blocks/info_section.php";
                    ?>
        </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script type="text/javascript" src="js/booking.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

  </body>
  </html>