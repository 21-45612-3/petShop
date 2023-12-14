

<html>
    <head>
        <Title> book appointment</Title>
        <link rel="stylesheet" href="assets/auth.css">
    </head>
    <body>
        <div class="container">
            <div class="formContainer">
                <form action="../controller/appointmentCheck.php" method="REQUEST">
                <div class= "formControl">
                            <span> Name</span>
                            <input type="text"
                                name="name"
                                class="txtField mb"
                                placeholder="Enter your name" >    
                    </div>
                    <div class= "formControl">
                            <span>Date:</span>
                            <input type="date"
                                name="date"
                                class="txtField mb"
                                placeholder="Enter prefered date " >    
                    </div>
                   
                    <div classs = "formControl mb">
                        <span class= "label">Pet Type: </span>
                        <input  type="radio"
                                name="animal">Dog
                        <input  type="radio"
                                name="animal">Cat
                        <input  type="radio"
                                name="animal">Bird
                                
                            </div>
                    <div class = "formControl">
                        <input type="submit" name="submit" class="button">
                        <a href= "home.php"> back home</a>
                    </div>

                </form>
            </div>
        </div>
    </body>
</html>