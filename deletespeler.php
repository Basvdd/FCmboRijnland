<?php
if(isset($_GET['submit'])){
    require ('database_connection.php');
    htmlspecialchars($naam_team = $_POST['teamnaam']);
    htmlspecialchars($voornaam = $_POST['voornaam']);
    htmlspecialchars($tussenvoegsel = $_POST['tussenvoegsel']);
    htmlspecialchars($achternaam = $_POST['achternaam']);
    htmlspecialchars($leeftijd = $_POST['leeftijd']);
    $sql = "DELETE FROM speler VALUES (NULL, '$naam_team', '$voornaam', '$tussenvoegsel', '$achternaam', '$leeftijd', NULL)"
}
?>