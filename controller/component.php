<?php 
// <input type=\"hidden\" name=\"product_id\" value=\"$productid\">

function component($productname, $productprice, $productimg,$productid) {
    $element = "
<form method=\"post\" style=\"margin: 20px; padding: 10px; border: 1px solid #ccc; border-radius: 10px;\">
    <ul style=\"list-style-type: none; padding: 0;\">
        <li style=\"margin-bottom: 20px; display: flex; align-items: center;\"> 
            <div style=\"border: 1px solid #ddd; padding: 5px; border-radius: 5px;\"> 
                <img src=\"$productimg\" alt=\"pic1\" width=\"120\" height=\"120\">
            </div>
            <div style=\"margin-left: 20px;\"> 
                <h2 style=\"color: #333;\">$productname</h2>
                <h3 style=\"color: #333;\">$$productprice</h3>
                <button type=\"submit\" name=\"add\" value=\"\" style=\"background-color: #93c47d; color: white; padding: 10px; border: none; border-radius: 5px; cursor: pointer;\">Add to cart</button>
            </div>
        </li>
        <li>
            <input type=\"hidden\" name=\"product_id\" value=\"$productid\">
        </li>
    </ul>
</form>
";
echo $element;



    
}


function cartITEMS($productimg,$productname,$productprice,$productid){

    $element = "
    <form action=\"cart.php?action=remove&id=$productid\" method=\"post\" style=\"text-align: center; margin: 20px; padding: 10px; border: 1px solid #ccc; border-radius: 10px;\">
    <img src=\"$productimg\" alt=\"pic1\"><br>

    <h3 style=\"color: #333;\">$productname</h3><br>
    <h5 style=\"color: green;\">$$productprice</h5><br>

    <button type=\"submit\" style=\"background-color: #4CAF50; color: white; padding: 10px; border: none; border-radius: 5px; cursor: pointer;\">Save for later</button><br>
    <button type=\"submit\" name=\"remove\" style=\"background-color: #FF0000; color: white; padding: 10px; border: none; border-radius: 5px; cursor: pointer;\">Remove</button><br>

    <hr style=\"border: 1px solid #ddd;\">
</form>";
    echo $element;
}


?>