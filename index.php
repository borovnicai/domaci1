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
</head>
<body>

   <?php include "header.php"; ?>

    <div class="opening_section layout_padding">
      <div class="container">
        <h1 class="ballet_text">Filmovi u nasem bioskopu</h1>
        <p class="amet_text">Pretrazi buduca prikazivanja</p>
          <div class="col-12">
              <label for="film">Film</label>
              <select id="film" class="form-control">

              </select>
              <label for="sort">Sortiraj po vremenu</label>
              <select id="sort" class="form-control">
                  <option value="asc">Rastuce</option>
                  <option value="desc">Opadajuce</option>
              </select>

              <hr>
              <button onclick="pretrazi()" class="btn btn-default">Pretrazi</button>
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

    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/custom.js"></script>

    <script>
        function popuniFilmove(){
            $.ajax({
                url: 'popuniKomboFilmova.php',
                success: function (data){
                    $("#film").html(data);
                }
            })
        }

        popuniFilmove();

        function pretrazi(){
            $.ajax({
                url: 'pretrazi.php',
                data: {
                    film: $("#film").val(),
                    sort: $("#sort").val()
                },
                success: function (data){
                    $("#rezultat").html(data);
                }
            })
        }
    </script>

</body>
</html>