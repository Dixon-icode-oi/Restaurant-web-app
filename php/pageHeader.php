 <?php
    //session_start();

 
        
    include 'header.php';
    include 'config.php';
    include 'logic.php';

?> 

    <header class="pageHeader">
        <nav class="navbar">
            <div class="logo">
                <h3>
                    our<span>MEAL</span>
                </h3>
            </div>
            <div class="links">
                <ul class="nav-items">
                    <li><a href="#" class="navlink">home</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropbtn navlink">menu <span><i class="fas fa-angle-down"></i></span></a>
                        <div class="dropdown-content">
                            <a href="#" class="a">1</a>
                            <a href="#" class="a">2</a>
                            <a href="#" class="a">3</a>
                        </div>
                    </li>
                    <li><a href="#" class="navlink">table reservation</a></li>
                    <li><a href="#" class="navlink"><span><i class="fas fa-shopping-basket"></i></span> orders</a></li>
                </ul>
            </div>
            <div class="search_bar">
                <div class="dropdown">
                    <h5 class="dropbtn user">Hi, 
                        <span>
                            <?php 
                                if(isset($_SESSION['email'])){
                                    echo $_SESSION['name'];
                                }            
                            ?>
                        </span>
                    </h5>
                    <div class="dropdown-content">
                            <a href="#" class="a">Account</a>
                            <a href="logout.php" class="a"><span><i class="fas fa-sign-out"></i></span> Logout</a>
                            <a href="#" class="a">3</a>
                        </div>
                </div>
                <form method="get" class="form-group">
                    <input type="search" name="search" placeholder="Search for your meal.....">
                    <button type="submit">search</button>
                </form>
               
            </div>
        </nav>
    </header>
