<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<title>Bioskop - prvi domaci</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content=""> 
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" href="css/responsive.css">
<link rel="icon" href="images/fevicon.png" type="image/gif" />
<link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">

    <link rel="stylesheet" href="css/datetimepicker.css">
</head>
<body>

   <?php include "header.php"; ?>

    <div class="opening_section layout_padding">
      <div class="container">
        <h1 class="ballet_text">Administracija</h1>
        <p id="poruka" class="amet_text"></p>
          <div class="row">
              <div class="col-4">

                  <label for="film">Film</label>
                  <select id="film" class="form-control">

                  </select>
                  <label for="sala">Sala</label>
                  <select id="sala" class="form-control">

                  </select>
                  <label for="dan">Dan i vreme</label>
                  <input type="text" id="dan" class="form-control">

                  <hr>
                  <button onclick="unesi()" class="btn btn-default">Unesi</button>
              </div>

              <div class="col-4">

                  <label for="prikazivanjaIzmena">Prikazivanja</label>
                  <select id="prikazivanjaIzmena" class="form-control">

                  </select>
                  <label for="salaIzmena">Sala</label>
                  <select id="salaIzmena" class="form-control">

                  </select>
                  <hr>
                  <button onclick="izmeni()" class="btn btn-default">Izmeni</button>
              </div>

              <div class="col-4">

                  <label for="prikazivanjaBrisanje">Prikazivanja</label>
                  <select id="prikazivanjaBrisanje" class="form-control">

                  </select>

                  <hr>
                  <button onclick="obrisi()" class="btn btn-default">Obrisi</button>
              </div>
          </div>

        <div class="opening_section_2 layout_padding" id="rezultat">

        </div>
      </div>
    </div>

   <?php include "footer.php"; ?>


    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/plugin.js"></script>
   <script src="js/datetimepicker.js"></script>

    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/custom.js"></script>

    <script>

        $(document).ready(function(){
            $("#dan" ).datetimepicker({
                format: 'Y-m-d H:i:s'
            })
        });

        function popuniFilmove(){
            $.ajax({
                url: 'popuniKomboFilmova.php',
                data: {
                    sviFilmovi: true
                },
                success: function (data){
                    $("#film").html(data);
                }
            })
        }

        popuniFilmove();

        function popuniSale(){
            $.ajax({
                url: 'popuniKomboSala.php',
                success: function (data){
                    $("#sala").html(data);
                    $("#salaIzmena").html(data);
                }
            })
        }

        popuniSale();

        function popuniPrikazivanja(){
            $.ajax({
                url: 'popuniKomboPrikazivanja.php',
                success: function (data){
                    $("#prikazivanjaIzmena").html(data);
                    $("#prikazivanjaBrisanje").html(data);
                }
            })
        }

        popuniPrikazivanja();

        function unesi(){

            $.ajax({
                url: 'unesi.php',
                method: "POST",
                data: {
                    film: $("#film").val(),
                    sala: $("#sala").val(),
                    dan: $("#dan").val()
                },
                success: function (data){
                    $("#poruka").html(data);
                    popuniPrikazivanja();
                }
            })
        }

        function izmeni(){

            $.ajax({
                url: 'izmeni.php',
                method: "POST",
                data: {
                    prik: $("#prikazivanjaIzmena").val(),
                    sala: $("#salaIzmena").val(),
                },
                success: function (data){
                    $("#poruka").html(data);
                    popuniPrikazivanja();
                }
            })
        }

        function obrisi(){

            $.ajax({
                url: 'obrisi.php',
                method: "POST",
                data: {
                    prik: $("#prikazivanjaBrisanje").val(),
                },
                success: function (data){
                    $("#poruka").html(data);
                    popuniPrikazivanja();
                }
            })
        }
    </script>

</body>
</html>