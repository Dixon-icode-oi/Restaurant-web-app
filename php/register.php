<?php
    @include 'header.php';
    @include 'config.php';
    @include 'logic.php'

?>
<body class="body">
    <div class="con-container">
        <div class="content">
            <div class="site-desc">
                <div class="image_1">
                    <img src="../image/chef.png" alt="">
                </div>
                <div class="desc">
                    <h1>our<span>MEAL</span></h1>
                    <h3>enjoy great FOOD and quality SERVICE</h3>
                    <p>
                        welcome to the top most restaurant in world. we provide yuou with good and quality 
                        of service...... <br>
                        <span>Signup and Dine with us.....</span>
                    </p>
                </div>
            </div>
            <div class="form">
               <div class="form__content">
                    <form action="" method="post">
                        <h3>Sign up now</h3>
                        <?php
                            if(isset($error)){
                                foreach($error as $error){
                                    echo '<span class="err_msg">'.$error.'</span>';
                                };
                            };
                        
                        ?>
                        <div class="names">
                            <input type="text" name="fname" placeholder="First name" required>
                            <input type="text" name="lname" placeholder="Last name" required>
                        </div>
                        <input type="email" name="email" placeholder="Email address" required>
                        <input type="password" name="password" placeholder="Password" required>
                        <input type="password" name="cpassword" placeholder="Confirm password" required>
                        <input type="submit" value="Sign up" name="submit" class="form-btn">
                        <p class="info">Already have an account? <a href="index.php" class="a-link">Login now</a> </p>
                    </form>
               </div>
            </div>
        </div>
    </div>



</body>
</html>