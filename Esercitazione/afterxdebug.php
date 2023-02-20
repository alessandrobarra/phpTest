<!DOCTYPE html>

<?php 
$cities = array("Tokyo", "Mexico City", "New York City" , "Mumbai", "Seoul", "Shanghai", "Lagos", "Buenos Aires", "Cairo", "London", "Los Angeles", "Calcutta" , "Osama", "Beijing");
?>
<ul>
<?php 
foreach ($cities as $city){
  echo "<li>" . $city . "<br>";
}
?>
</ul>