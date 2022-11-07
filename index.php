<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/style.css">

  <title>Hello, world!</title>
</head>

<body>
  <main class="container">
    <div class="row">
      <div class="col-12"></div>
      <div class="jumbotron jumbotron-fluid">
        <div class="container">
          <h1 class="display-4">Web Opdracht</h1>
          <p class="lead">Never Gonna Give You Up Never Gonna Let You Down</p>
        </div>
      </div>

    </div>
    </div>
    <div class="row">
      <div class="col-6">
        <form action="./create.php" method="post">
          <div class="form-group">
            <label for="firstname">Voornaam</label>
            <input type="text" class="form-control" id="firstname" aria-describedby="firstnameHelp" placeholder="Invoer voornaam" name="firstname">

          </div>
          <div class="form-group">
            <label for="infix">Tussenvoegsel</label>
            <input type="text" class="form-control" id="infix" aria-describedby="infixHelp" placeholder="Invoer tussenvoegsel" name="infix">

          </div>
          <div class="form-group">
            <label for="lastname">Achternaam</label>
            <input type="text" class="form-control" id="lastname" aria-describedby="lastnameHelp" placeholder="achternaam" name="lastname">
            <small id="lastnameHelp" class="form-text text-muted"> "Just Do It" - Shia Labeouf </small>

          </div>
          <button type="submit" class="btn btn-primary">Versturen</button>
        </form>
      </div>
      <div class="col-6">
        <img src="./img/rickastley.jpg" alt="rickastley" class="container-fluid">
      </div>

    <div>


        <div>
          <div class="row">
          <div class="col-12">
            <p>
              "When you reach the end of your rope, tie a knot in it and hang on." - Franklin D. Roosevelt
            </p>
          </div>
          
          </div>
        </div>
  </main>



  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <script src="./js/app.js"></script>
</body>

</html>