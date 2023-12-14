<html>
    <head>
        <Title> Login</Title>
        <link rel="stylesheet" href="assets/auth.css">
    </head>
    <body>
        <div class="container">
            <div class="formContainer">
                <form action="../controller/loginController.php" method="POST">
                    <div class= "formControl">
                            <span>Name:</span>
                            <input type="name"
                                name="name"
                                class="txtField mb"
                                placeholder="Enter your username" >    
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
                    </div>
                    <div class = "formControl">
                        <span>
                            <a href="register.php">Not a member? register</a>
                        </span>

                    </div>

                </form>
            </div>
        </div>
    </body>
</html>