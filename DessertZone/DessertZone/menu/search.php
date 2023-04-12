<?PHP 
require ('connection.php');
$return = '';
if(isset($_POST["query"])){
  $search = mysqli_real_escape_string($conn, $_POST["query"]);
  $category = mysqli_real_escape_string($conn, $_POST["category"]);
  $searchquery="SELECT *, items.name as name from items Left Join categories ON categories.id = items.category_id where categories.name = '$category' and items.name LIKE '%".$search."%' ";
  $searchResult = mysqli_query($conn, $searchquery);
  if(mysqli_num_rows($searchResult) > 0)
{
	while($row = mysqli_fetch_array($searchResult))
	{
		$return .= '
		<div class="box">
              <img src="../images/'.$row['picture'].'">
              <h3>'.$row['name'].'</h3><span>'.$row['price'].'$</span>
            </div>
            ';
	}
	echo $return;
	}
else
{
	echo 'No results containing all your search terms were found.';
}
}
?>