<div id="panel" class="panel panel-default sidebar-menu"><!-- panel panel-default sidebar-menu Starts -->
    <div class="panel-heading"><!-- panel-heading Starts -->
        <?php
            $customer_session = $_SESSION['customer_email'];
            $get_customer = "select * from customers where customer_email='$customer_session'";
            $run_customer = mysqli_query($con,$get_customer);
            $row_customer = mysqli_fetch_array($run_customer);
            $customer_name = $row_customer['customer_name'];
            if(!isset($_SESSION['customer_email'])){
            }
            else {
                echo " <h3 align='center' class='panel-title'> Salut $customer_name </h3>
                <button class='openbtn' onclick='openNav()'>☰</button> ";
            }
        ?>
        
    </div>
    <div id="mySidebar" class="sidebar">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
        <div class="panel-body"><!-- panel-body Starts -->
        <ul class="nav nav-pills nav-stacked" style="flex-direction: column;"><!-- nav nav-pills nav-stacked Starts -->
        <br><br><br><br> 
        <li class="<?php if(isset($_GET['my_orders'])){ echo "active"; } ?>">
                <a href="my_account.php?my_orders"> <i class="fa fa-list"> </i> Mes commandes </a>
            </li>   
        <li class="<?php if(isset($_GET['edit_account'])){ echo "active"; } ?>">
                <a href="my_account.php?edit_account"> <i class="fa fa-pencil"></i> Mettre à jour compte </a>
            </li>
            <li class="<?php if(isset($_GET['change_pass'])){ echo "active"; } ?>">
                <a href="my_account.php?change_pass"> <i class="fa fa-user"></i> Changer mot de passe </a>
            </li>
            
            
            <li class="<?php if(isset($_GET['delete_account'])){ echo "active"; } ?>">
                <a href="my_account.php?delete_account"> <i class="fa fa-trash-o"></i> Supprimer compte </a>
            </li>
            <li>
                <a href="logout.php"> <i class="fa fa-sign-out"></i> Se déconnecter </a>
            </li>
        </ul>
    </div><!-- panel-body Ends -->
    </div> 
</div>
<script>
function openNav() {
  document.getElementById("mySidebar").style.width = "350px";
  document.getElementsByClassName("panel-heading").style.display="none";
  document.getElementById("panel").style.marginLeft = "350px";
}

function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("panel").style.marginLeft= "0";
}
</script>