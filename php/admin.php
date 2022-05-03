<?php
    //session_start();
    @include 'config.php';
    include 'logic.php';
    @include 'header.php';
?>
    

<body class="body_admin">


   <div class="admin__container">
        <div class="dashboard__items">
            <div class="db_head">
               <div class="profile_img">
                   <a href="#">
                    <img src="../image/profile/profile.png" alt="">
                   </a>
               </div>
               <div class="profile">
                <div class="logo">
                        <h3>
                            our<span>MEAL</span>
                        </h3>
                    </div>
                    <div class="user__type">
                        <h4>
                            <?php
                                if(isset($_SESSION['user_type']) && $_SESSION['user_type'] == "admin"){
                                    echo $_SESSION['user_type'];
                                }
                            ?>
                        </h4>
                    </div>
               </div>
            </div>
            <div class="db_body">
                <ul class="db_body_items">
                    <li>
                        <a href="admin.php">
                            <span><i class="fas fa-dashboard"></i></span>
                            Dashboard
                        </a>
                    </li>
                    <li class="ord_link">
                        <a href="#">
                            <span><i class="fas fa-chart-column"></i></span>
                            manage orders
                        </a>
                    </li>
                    <li class="sal_link">
                        <a href="#">
                            <span><i class="fas fa-shopping-cart"></i></span>
                            sales
                        </a>
                    </li>
                    <li class="res_link">
                    <a href="#">
                        <span><i class="fas fa-book"></i></span>
                        receptions
                    </a>
                    </li>
                    <li class="fd_link">  
                       <a href="#">
                            <span><i class="fas fa-bowl-rice"></i></span>
                            manage food
                        </a>
                    </li>
                    <li class="del_link">  
                        <a href="#">
                            <span><i class="fas fa-truck-fast"></i></span>
                            deliveries
                        </a>
                    </li>
                    <li class="rep_link">
                        <a href="#">
                            <span><i class="fas fa-list-alt"></i></span>
                            reports
                        </a>
                    </li>
                    <li class="user_link">
                        <a href="#">
                            <span><i class="fas fa-user-circle"></i></span>
                            manage customers
                        </a>
                    </li>
                    <li class="emp_link">
                        <a href="users.php">
                            <span><i class="fas fa-user-group"></i></span>
                            manage employees
                        </a>
                    </li>
                </ul>
                
            </div> 
        </div>
        <div id="myPanel" class="sidepanel">
            <a href="javascript:void(0)" class="closeBtn" onclick="closePanel()">&times;</a>
            <div class="panel-category-links col-10 text-left mx-auto" id="text">
                <div class="db_head">
                    <div class="profile_img">
                        <a href="#">
                            <img src="../image/profile/profile.png" alt="">
                        </a>
                    </div>
                    <div class="profile">
                        <div class="user__type">
                            <h4>
                                <?php
                                    if(isset($_SESSION['user_type']) && $_SESSION['user_type'] == "admin"){
                                        echo $_SESSION['user_type'];
                                    }
                                ?>
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="db_body" style="color: #fff;">
                    <ul class="db_body_items">
                        <li>
                            <a href="admin.php">
                                <span><i class="fas fa-dashboard"></i> Dashboard</span>
                               
                            </a>
                        </li>
                        <li class="ord_link">
                            <a href="#">
                                <span><i class="fas fa-chart-column"></i> manage orders</span>
                               
                            </a>
                        </li>
                        <li class="sal_link">
                            <a href="#">
                                <span><i class="fas fa-shopping-cart"></i> sales</span>
                                
                            </a>
                        </li>
                        <li class="res_link">
                        <a href="#">
                            <span><i class="fas fa-book"></i> receptions</span>
                           
                        </a>
                        </li>
                        <li class="fd_link">  
                        <a href="#">
                                <span><i class="fas fa-bowl-rice"></i> manage food</span>
                               
                            </a>
                        </li>
                        <li class="del_link">  
                            <a href="#">
                                <span><i class="fas fa-truck-fast"></i> deliveries</span>
                               
                            </a>
                        </li>
                        <li class="rep_link">
                            <a href="#">
                                <span><i class="fas fa-list-alt"></i> reports</span>
                                
                            </a>
                        </li>
                        <li class="user_link">
                            <a href="#">
                                <span><i class="fas fa-user-circle"></i> manage customers</span>
                                
                            </a>
                        </li>
                        <li class="emp_link">
                            <a href="users.php">
                                <span><i class="fas fa-user-group"></i> manage employees</span>
                               
                            </a>
                        </li>
                    </ul>
                    <div class="setting">
                            <a href="#">
                                <i class="fas fa-gear"></i><span> Settings</span>
                            </a>
                            <a href="logout.php">
                               <i class="fas fa-sign-out"></i><span> Logout</span>
                            </a> 
                            
                        </div>
                </div> 
            </div>
        </div>
    
        <nav class="ad__navbar">
            <div class="ad_nav_container">
                <div class="s"></div>
                <div class="ad_nav_items">
                    <div class="none"></div>
                    <div class="notification">
                        <div class="ad_user">
                            <span class="user">
                                <?php
                                    if(isset($_SESSION['user_type']) && $_SESSION['user_type'] == "admin"){
                                        echo $_SESSION['name'] ."<br>";
                                    }
                                ?>
                            </span>
                        </div>
                        <ul>
                            <li>
                                <a href="#">
                                    <i class="fas fa-mail-bulk"></i>
                                    <span class="mail_counter">1</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fas fa-bell"></i>
                                    <span class="bell_counter">1</span>
                                </a>
                            </li>
                        </ul>
                        <div class="setting set">
                            <a href="#">
                                <i class="fas fa-gear"></i><span> Settings</span>
                            </a>
                            <a href="logout.php">
                               <i class="fas fa-sign-out"></i><span> Logout</span>
                            </a> 
                            <button class="navbar-toggler opentBtn" data-toggle="collapse" data-target="#myNav" onclick="openPanel()">
                                  <span class="toggler-icon"><i class="fas fa-bars"></i></span>      
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
   </div>
   <div class="ad_container">
        <div class="ad_content">
            <div class="db_summary">
                <div class="t_order">
                    <h5>Orders today</h5>
                    <i class="fas fa-chart-column icon"></i>
                    <h4 class="t_order_amt">1000</h4>
                    <a href="#">view details</a>
                </div>
                <div class="t_sales">
                    <h5>Sales today</h5>
                    <i class="fas fa-shopping-cart icon"></i>
                    <h4 class="t_sale_amt">2000</h4>
                    <a href="#">view details</a>
                </div>
                <div class="t_expense">
                    <h5>Expenses</h5>
                    <i class="fas fa-money-bill-1-wave icon"></i>   
                    <h4 clas="exp_amt">1000</h4>
                    <a href="#">view details</a>                 
                </div>
                <div class="t_rec">
                    <h5>Receptions</h5>
                    <i class="fas fa-book icon"></i>
                    <h4 class="num_recp">10</h4>
                    <a href="#">view details</a>
                </div>

            </div>
            <div class="sale_order_chart">
                <h4>Sales Statistics</h4>
                <div class="sales_chart">
                    <canvas id="chart"></canvas>
                </div>
            </div>
            <div class="sale_order_expense_chart">
                <div class="compare_stat">
                    <canvas id="mixedChart"></canvas>
                </div>
            </div>
            <div class="expense_donut_chart">
                <h4>Expense</h4>
               <div class="donut">
                <div id="expense"></div>
               </div>
            </div>           
            <div class="tb_user">
                <div class="users">
                    <h4>End users table</h4>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">User ID</td>
                                <th scope="col">First name</td>
                                <th scope="col">Last name</td>
                                <th scope="col">Email</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td scope="row">Dixon</td>
                                <td scope="row">Appiah</td>
                                <td scope="row">123@gmail.com</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td scope="row">John</td>
                                <td scope="row">Kuma</td>
                                <td scope="row">kuma@gmail.com</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td scope="row">Seth</td>
                                <td scope="row">Amoah</td>
                                <td scope="row">seth@gmail.com</td>
                            </tr>
                        </tbody>

                    </table>
                    <a href="#" class="expd">Expand table</a>
                </div>
                <div class="empl">
                    <h4>Employees table</h4>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">User ID</td>
                                <th scope="col">First name</td>
                                <th scope="col">Last name</td>
                                <th scope="col">Email</td>
                                <th scope="col">Role</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">emp01</th>
                                <td scope="row">Patrick</td>
                                <td scope="row">Kumi</td>
                                <td scope="row">revel@gmail.com</td>
                                <td scope="row">Delivery</td>
                            </tr>
                            <tr>
                                <th scope="row">emp02</th>
                                <td scope="row">Aaron</td>
                                <td scope="row">Adu</td>
                                <td scope="row">aaron@gmail.com</td>
                                <td scope="row">Sales Manager</td>
                            </tr>
                            <tr>
                                <th scope="row">emp03</th>
                                <td scope="row">Aikins</td>
                                <td scope="row">Twum</td>
                                <td scope="row">aiki@gmail.com</td>
                                <td scope="row">Orders Managers</td>
                            </tr>
                            <tr>
                                <th scope="row">emp04</th>
                                <td scope="row">Lois</td>
                                <td scope="row">Gyamfuah</td>
                                <td scope="row">lois@gmail.com</td>
                                <td scope="row">Accountant</td>
                            </tr>
                        </tbody>
                    </table>
                    <a href="#" class="expd">Expand table</a>
                </div>

            </div>
            <div class="tb_reception"></div>
       </div>
   </div>                    

   

    
    <script src="../js/admin.js"></script>
                                        

</body>
</html>