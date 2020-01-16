<html>
<head>
    <title>All movies search</title>
    <link href="Baconcss.css" rel="stylesheet" type="text/css">
    </head>
    
    <body>
        <div id="banner">
                <h1><img alt="Banner" src="Bacon.PNG" style="width: -webkit-fill-available; height: 100px;"></h1>
        </div>
        
        
        
        
<?php  $firstName; $lastName;

  $server="www.watzekdi.net";
  $username="watzekdi_cs393";
  $password="KevinBac0n";
  $database="watzekdi_imdb";
  $dbport = 3306;

  $connect="mysql:host=$server;dbname=$database;charset=utf8;port=$dbport";
  try {
    $db = new PDO($connect, $username, $password);
    $db->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, false);

  }
  catch(PDOException $e) {
    echo $e->getMessage();
  }

        
function getActorByName($db, $firstName, $lastName){ 
$firstName = $_GET['firstname'];
$lastName = $_GET['lastname'];
    
try { 
$stmt = $db->prepare("SELECT actors.id, first_name, last_name, movie_id, role, movies.year, name, film_count FROM actors INNER JOIN roles
ON actors.id = roles.actor_id INNER JOIN movies ON roles.movie_id = movies.id WHERE first_name='$firstName' and last_name='$lastName' limit 300");
$data=array(":firstName"=>$firstName, ":lastName"=>$lastName);
$stmt->execute();
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC); 
return $rows;

}catch (Exception $e) {
return false;
    
} 
} 

if ($rows=getActorByName($db, $_GET['firstname'], $_GET['lastname'])){
$firstName = $_GET['firstname'];
$lastName = $_GET['lastname'];
echo "<table align:'center'>";
echo "<tr> <th>Movies $firstName $lastName acted in</th> </tr>";
    $s=1;
    foreach($rows as $row){
        if ($s==1){
echo "<table align:'center'>";
echo "<tr> <td class='left'>#</td> <td class='center'>Title</td> <td class='right'>Year</td> </tr>";
        }
$filmYear= $row['year'];
$filmname = $row['name'];
$ID = $s;
echo "<table align:'center'>";
echo "<tr><td class='left'>";
echo $ID;
echo "</td><td class='center'>";
echo $filmname;
echo "</td><td class='right'>";
echo $filmYear;
echo "</td></tr>";
        
echo "</table>";
        $s = $s+1;
    }
}
else{
$firstName = $_GET['firstname'];
$lastName = $_GET['lastname'];
echo "Actor $firstName $lastName Not Found";
}
        
include "common.php";

 ?>  
        
        
        
        <div id="w3c">
				<p><img alt="Certification" src="Bacon2.PNG" style="width: -webkit-fill-available; height: 80px;"></p>
        </div>
    </body>
</html>