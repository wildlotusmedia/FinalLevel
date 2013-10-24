<?
//site code

// <form action="search.php" method="post">
//      Search: <input type="text" name="term" /><br />
//     <input type="submit" name="submit" value="Submit" />
//     </form>


//mysqli_connect ("sulley.cah.ucf.edu", "as932055", "01knights!")  or die (mysqli_error());
//mysqli_select_db ("as932055");

require 'db_connect.php';



//$term = 'Sonic';
$term = $_POST['term'];
//$term = strtoupper($term);
$term = strip_tags($term);
$term = trim($term);
 
$sql = mysqli_query("SELECT * FROM 'Products' WHERE 'Product Name' LIKE '%$term%'");

while ($result = mysqli_fetch_array($sql)){
    echo '<br/> Product Name: '.$result['Product Name'];
    echo '<br/><br/>';
    }

$anymatches=mysqli_num_rows($sql);

 if ($anymatches == 0) 
 { 
 echo "Sorry, but we can not find an entry to match your query<br><br>"; 
 } 
 
 //And we remind them what they searched for 
 echo "<b>You Searched For:</b> " . $term; 
 
?>