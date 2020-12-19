<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Hallman Aussies</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="../css/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>

  <body data-spy="scroll" data-target="#nav">
    <header>      
      <div class="container pt-3">
        <div class="row">
          <div class="col-8 text-md-left">
            <div class="">
              <!-- Logo file below -->
              <a href="#" class="logo"><img src="http://prism.troy.edu/sbradley178156/HW7images/logo.png" height="100" alt="Hallman Aussies" title="Hallman Aussies"></a>
              <p class="logo_tagline">Farm Raised, Home Grown.</p>
            </div>
          </div>
            <div class="col-4 text-md-right"><br>
          <strong>
            Phone: <a href="tel:+1234567890" title="Phone">123-456-7890</a><br>
            E-mail: <a href="#contacts">hallman@aussies.com</a><br>
          </strong>
            </div>
        </div>
      </div>
    </header>

      <nav id="nav-indicator" class="navbar sticky-top navbar-expand-lg" style="background-color: #dee6b6">
        <ul id="nav" class="nav-tabs navbar-nav" role="tablist">
          <li class="nav-item"><a class="nav-link" href="../index.html">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="../index.html#about">About Us</a></li>
          <li class="selected"><a class="nav-link" href="#">Aussies</a></li>
          <li class="nav-item"><a class="nav-link" href="../index.html#contact">Contact</a></li>
          <li id="nav_indicator"></li>
        </ul>
        <script src="../JavaScript/javascript.js"></script>
      </nav>

    <main class="text-center" data-spy="scroll" data-target="#navbar-example2" data-offset="0">
        <section>
          <h1>Our Aussies</h1>
        </section>
      
        <!-- Dynamically generated dog information -->
        <section>
          <h2>Males</h2>
        <div class="row">
            <?php
            # reads the dog info and separates it
            $file = file_get_contents("../dogs.txt");
            $dogs = explode("\n", $file);

            # prints info for each male dog
            foreach ($dogs as $aussie){
                $elements = explode(",", $aussie);
                if ($elements[0] == "male"){
                    echo "<div class=\"col-sm-3\"><div class=\"thumbnail\">
                            <img src=\"".$elements[2]."\" alt=\"".$elements[1]."\" style=\"width:50%\">
                            <div class=\"caption\"><h3>".$elements[1]."</h3><p>Age: ".$elements[4]."</p><p>Temperament: ".$elements[3]."</p></div></div></div>";
                }
            }
            ?>
        </div>
        </section>
        <hr />
        <section>
            <h2>Females</h2>
        <div class="row">
            <?php
            # reads the dog info and separates it
            $file = file_get_contents("../dogs.txt");
            $dogs = explode("\n", $file);

            # prints info for each female dog
            foreach ($dogs as $aussie){
                $elements = explode(",", $aussie);
                if ($elements[0] == "female"){
                    echo "<div class=\"col-sm-3\"><div class=\"thumbnail\">
                        <img src=\"".$elements[2]."\" alt=\"".$elements[1]."\" style=\"width:50%\">
                        <div class=\"caption\"><h3>".$elements[1]."</h3><p>Age: ".$elements[4]."</p><p>Temperament: ".$elements[3]."</p></div></div></div>";
                }
            }
            ?>
        </div>
        </section>
        <hr />
        
    </main>

    <footer>
      <p><a href="../index.html">Home</a> | <a href="../index.html#about">About Us</a> | <a href="#">Aussies</a> | <a href="../index.html#contact">Contact</a> </p>
      <p><em>Copyright &copy; 2020 Hallman Aussies</em></p>
    </footer>
  </body>
</html>