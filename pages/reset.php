<?php
include './functii/functii.php';
 ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Stoodle | Resetare Parola</title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="./CSS/login.css">
        <link rel="stylesheet" href="./CSS/base.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
    <body>
        <div class="row">
            <div class="col-lg-7">
                <div id="text">
                    <h1>Stoodle</h1>
                    <p>Fii liber. Fii independent.</p>
                </div>
            </div>
            <div class="col-lg-5 d-flex align-items-center justify-content-center" id="content">
                <div class="conatiner">
                    <?php
=======
<body>
  <div class="row">
    <div class="col-lg-7">
      <div id="text">
        <h1>Stoodle</h1>
        <p>Fii liber. Fii independent.</p>
      </div>
    </div>
    <div class="col-lg-5 d-flex align-items-center justify-content-center" id="content">
      <div class="conatiner">
        <form action="./foldereset/resetphp.php" method="post">
        <?php
>>>>>>> 9ba5d4bce2418aa08a005d69b2b0c60b60dfdd50

                    if(isset($_GET['error'])) {
                        if($_GET['error']=="emptymail") {
                            echo '<div class="alert alert-danger" role="alert">
                      Completeaza campul!
                  </div>';
                        }
                        elseif($_GET['error']=="nucont") {
                            echo '<div class="alert alert-danger" role="alert">
                      Nu exista cont cu aceasta adresa de email!
                  </div>';
                        }
                        elseif($_GET['error']=="mysqlerror") {
                            echo '<div class="alert alert-danger" role="alert">
                      Eroare baza de date!
                  </div>';
                        }
                        elseif($_GET['error']=="numail") {
                            echo '<div class="alert alert-danger" role="alert">
                      Acesta adreasa de mail nu este una corecta!
                  </div>';
                        }
                        elseif($_GET['error']=="expire") {
                            echo '<div class="alert alert-danger" role="alert">
                      Cererea a expirat trimite una din nou!
                  </div>';
                        }
                    }
                    if(isset($_GET['resetmail'])) {
                        if($_GET['resetmail']=="succes") {
                            echo '
                <div class="alert alert-succes" role="alert">
                  Mail-ul pentru resetarea parolei a fost trimis!
                </div>';
<<<<<<< HEAD
                        }
                    }
                    ?>
                    <h1>Resetare parola</h1>
                    <div class="form-group row">
                        <label for="exampleInputEmail1">E-mail</label>
                        <input type="email" name="mailus" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <small id="emailHelp" class="form-text text-muted  alert-note">
                            Introdu adresa de mail pentru a-ti putea reseta parola
                        </small>
                    </div>
                    <button type="submit" name="loginsubmit" class="button">Trimite mail</button>
                </div>
            </div>
        </div>
    </body>

=======
            }
          }
        ?>
        <h1>Resetare parola</h1>
        <div class="form-group row">
          <label for="exampleInputEmail1">E-mail</label>
          <?php
          if(isset($_GET['email'])){
            echo '<input type="email" name="mailreset" value="'.$_GET['email'].'" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">';
          }
          else {
            echo '<input type="email" name="mailreset" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">';
          }
           ?>
          <small id="emailHelp" class="form-text text-muted  alert-note">
            Introdu adresa de mail pentru a-ti putea reseta parola
          </small>
        </div>
        <button type="submit" name="submit-reset" class="button">Trimite mail</button>
    </form>
  </div>

  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

>>>>>>> 9ba5d4bce2418aa08a005d69b2b0c60b60dfdd50
</html>
