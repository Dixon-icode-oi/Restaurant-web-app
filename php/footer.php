<?php
    session_start();

?>
<div>
    <span>
        <h1>
            Hello 
             <?php
                if(isset($_SESSION['name'])){
                    echo $_SESSION['name'];
                }
             ?>
        </h1>
    </span>
</div>