$sqlUser = "SELECT email FROM sign";
$sqlPass = "SELECT password FROM sign";
//query result
$userCon = $conn->query($sqlUser);
$passCon = $conn->query($sqlPass);

//create array for storage
$first = array();
$second = array();

//push sql values into array
array_push($first,$userCon);
array_push($second,$passCon);
//fetch array
$userValid =  mysqli_result::fetch_array($first);
$passValid =  mysqli_result::fetch_array($second);

//comparing query results to user input
foreach($userValid as $comp){
  if(strpos($user,$comp)!== false){
    $user = true;
  }else{
    return false;
  }
}
  foreach($second as $comp){
    if(strpos($pass,$comp)!== false){
      $pass = true;
    }else{
      return false;
    }
  }
