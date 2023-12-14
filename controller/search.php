<?php
include("../model/db.php");
$con = connection();
$search = $_POST['search'];
$sql = "SELECT * FROM ta WHERE product_name LIKE '%{$search}%' ";
$result = mysqli_query($con, $sql);


$output = array(); 

    while ($row = mysqli_fetch_assoc($result)) {
        $output[] = $row;
        
        /*array(
            'Product Name' => $row['product_name'],
            'Product Price' => $row['product_price'],
            
        );*/
    }

    echo json_encode($output);

/*$output = "<table>
<tr>

<td>Name</td>
<td>Price</td>
</tr>
";

$rows = "";
while ($row = mysqli_fetch_assoc($result)) {
  $rows .= "<tr>

  <td>{$row['product_name']}</td>
  <td>$.{$row['product_price']}</td>
  </tr>";
}

echo $output . $rows . "</table>";*/
?>
