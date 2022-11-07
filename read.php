<?php

include("./connect_db.php");

$sql = "SELECT * FROM `users`";

$result = mysqli_query($conn, $sql);

$records = "";
 while ($record = mysqli_fetch_assoc($result)) {
    $records .= "<tr>
                  <th scope='row'>" . $record["id"] . "</th>
                  <td>" . $record["firstname"] .  "</td>
                  <td>" . $record["infix"] . "</td>
                  <td>" . $record["lastname"] . "</td>
                  <td>
                  <a href='./update.php?id=" . $record["id"] . "'>
                  <img src='./img/icons/b_edit.png' alt='pensil'>
                  </a>
                  </td>
                  <td>
                  <a href='./delete.php?id=" . $record["id"] . "'>
                  <img src='./img/icons/b_drop.png' alt='cross'>
                  </a>
                </td>
                  </tr>";

}
?>


<!-- // echo "<pre>" . var_dump($record) . "<pre>";
?> -->




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
          <h1 class="display-4">CRUD</h1>
          <p class="lead">Never Gonna Give You Up Never Gonna Let You Down</p>
        </div>
      </div>

    </div>
    </div>
    <div class="row">
      <div class="col-12">
      <table class="table table-hover">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Voornaam</th>
                <th scope="col">Tussenvoegsel</th>
                <th scope="col">Achternaam</th>
                <th scope="col"></th>
                <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
            <?php

            echo $records

            ?>

            </tbody>
            </table>
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