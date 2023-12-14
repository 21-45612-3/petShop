

<html>
    <head>
        <Title> Signup</Title>
        <link rel="stylesheet" href="assets/auth.css">
    </head>
    <body>
        <div class="container">
            <div class="formContainer">
                <form action="../controller/signController.php" method="REQUEST">
                <div class= "formControl">
                            <span> Name</span>
                            <input type="text"
                                name="name"
                                class="txtField mb"
                                placeholder="Enter your name" >    
                    </div>
                    <div class= "formControl">
                            <span>Email:</span>
                            <input type="email"
                                name="email"
                                class="txtField mb"
                                placeholder="Enter your email" >    
                    </div>
                   
                    <div classs = "formControl mb">
                        <span class= "label">Password: </span>
                        <input  type="password"
                                name="password"
                                class="txtField mb"
                                placeholder="Enter your Password">
                    </div>
                    <div class = "formControl">
                        <input type="submit" name="submit" class="button">
                        <a href= "login.php"> login</a>
                    </div>

                </form>
            </div>
        </div>
    </body>
</html>