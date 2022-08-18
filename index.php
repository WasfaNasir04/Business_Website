<!DOCTYPE html>
<html>
  <head>
      <title></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        
  </head>
    <body>
        <!--header-->
        <?php include 'header.php'; ?>
        <!--carasaul item-->
        <div id="demo" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
        <div class="carousel-item active">
        <img src="images/back2.webp" alt="Image" width="100%" height="500px">
        </div>
        </div>
        </div>
        
          
      <!--cards-->
      <?php include 'cards.php'; ?>

      <!--body-->
      <div class="row" style="padding-top:40px; margin-top:150px; width:1100 ;height:150px; text-align:center; padding-top:20px; background-color: #859da828;">
      <div class="col-sm-3" style="font-family:Georgia, serif;font-weight:bold; color:#e46f5f;"><h3>2500</h3><br>HAPPY CLIENTS</div>
      <div class="col-sm-3" style="font-family:Georgia, serif;font-weight:bold; color:#e46f5f;"><h3>300</h3><br>FULL NOTEBOOKS</div>
      <div class="col-sm-3" style="font-family:Georgia, serif;font-weight:bold; color:#e46f5f;"><h3>120</h3><br>TEAMMATES</div>
      <div class="col-sm-3" style="font-family:Georgia, serif;font-weight:bold; color:#e46f5f;"><h3>30</h3><br>STORES</div>
      </div>


      <div id="demo1" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
      <div class="carousel-item active">
      <img src="images/person3.jpg" alt="Image" style=" padding-bottom:100px;width:100%;height:500px;">
      </div>
      </div>
      </div>
    

        <!-- CONTACT FORM -->
        <?php include 'Contact-Us.php'; ?>

        <!--FOOTER-->
        <?php include 'footer.php'; ?>


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
 
  </body>
</html>
