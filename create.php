<?php
    // echo "hallo wereld! <br> ";

    // $firstname = "Falco";
    // $age = 16;

    // echo "Mijn voornaam is: " . $firstname . " en mijn leeftijd is" . $age . "<br>";

    // $username = array("1", "Falco", "", "Wollaars");
    
    // echo "Mijn id is: " ,$username[0] ."<br>";
    // echo "Mijn voornaam is: " . $username[1] ."<br>";
    // echo "Mijn tussenvoegsel is: " . $username[2] ."<br>";
    // echo "Mijn achternaam is: " . $username[3] ."<br>";

    // echo "<hr>";

    // $username = array("id" => 1, "firstname" => "Falco", "infix" => "", "lastname" => "Wollaars");

    // echo "Mijn id is: " ,$username["id"] ."<br>";
    // echo "Mijn voornaam is: " . $username["firstname"] ."<br>";
    // echo "Mijn tussenvoegsel is: " . $username["infix"] ."<br>";
    // echo "Mijn achternaam is: " . $username["lastname"] ."<br>";

    // echo "<pre>"; echo var_dump($_POST); echo "</pre>";
    // echo "<pre>"; echo var_dump($username); echo "</pre>";

    // echo "<hr>";
    // echo "Mijn voornaam is: " . $_POST["firstname"] . "<br>";
    // echo "Mijn tussenvoegsel is: " . $_POST["infix"] . "<br>";
    // echo "Mijn a is: " . $_POST["lastname"] . "<br>";

?>


<?php
    
    include("./connect_db.php");
    include("./functions.php");

  
    $firstname = sanitize ($_POST["firstname"]);
    $infix = sanitize($conn, $_POST["infix"]);
    $lastname = sanitize($_POST["lastname"]);

    

    $sql = "INSERT INTO `users` (`id`, `firstname`, `infix`, `lastname`) VALUES (NULL, '$firstname', '$infix', '$lastname');";

    mysqli_query($conn, $sql);

    header("Location: ./read.php");
?>