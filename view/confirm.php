<!DOCTYPE html>
<html lang="en">
<head>
    <title>confirm</title>
    <script defer src="script.js"></script>
</head>
<body>
    <div id="error"></div>
    <form action="/" method="get" id="form">
        <h1>Customer Details:</h1><br>
        <div>
            <label for="name">Name:</label>
            <input id="name" name="name" type="text" >
        </div>

        <div>
            <label for="address">Address:</label>
            <input id="address" name="address" type="text" >
        </div>

        <div>
            <label for="phone">Phone number:</label>
            <input id="phone" name="phone" type="text" required>
        </div>

        <hr>
        <button type="submit" name="confirm" value="confirm" onclick="ajax()">Confirm the order</button>
        
    </form>
</body>
</html>
