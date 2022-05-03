<?php
    include 'header.php';
    include 'config.php';
    include 'logic.php';
    

?>
<body class="body">
    <div class="con-container">
        <div class="content">
        <div class="site-desc">
                <div class="image_1 top">
                    <img src="../image/chef.png" alt="">
                </div>
                <div class="desc login-desc">
                    <h1>our<span>MEAL</span></h1>
                    <h3>enjoy great FOOD and quality SERVICE</h3>
                    <p>
                        welcome to the top most restaurant in world. we provide yuou with good and quality 
                        of service...... <br>
                        <span>Login fast and Dine with us.....</span>
                    </p>
                </div>
            </div>
            <div class="form">
               <div class="form__content">
                    <form action="" method="post">
                        <h3>Login now</h3>
                        <?php
                            if(isset($error)){
                                foreach($error as $error){
                                    echo '<span class="err_msg">'.$error.'</span>';
                                };
                            };
                        
                        ?>
                        <input type="email" name="email" placeholder="Email address" required>
                        <input type="password" name="password" placeholder="Password" required>
                        <input type="submit" value="Login" name="login_user" class="form-btn">
                        <p class="info">Do not have an account? <a href="register.php" class="a-link">Signup now</a> </p>
                    </form>

               </div>
            </div>
        </div>
    </div>


</body>
</html>