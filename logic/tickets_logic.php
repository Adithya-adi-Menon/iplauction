<?php 
include('../dbconfig.php');
session_start();
// echo $ticket_count;
if(isset($_POST['buy'])){
    $ticket_count = $_POST["quant"];
    $count = implode(" ",$ticket_count);

    $query = "SELECT tickets FROM login WHERE email='{$_SESSION['email']}'";
    $query_run = mysqli_query($conn,$query);
    
    if(mysqli_num_rows($query_run)>0){
        while($row=mysqli_fetch_assoc($query_run)){
            $ticket_available = $row['tickets'];
            if($count<=$ticket_available){
                $total_tickets = $ticket_available-$count;
                $query1 = "UPDATE login SET tickets='$total_tickets' WHERE email='{$_SESSION['email']}'";
                $query_run1 = mysqli_query($conn,$query1);
                if($query_run1){
                    echo "Tickets bought successfully";
                }
                else{
                    echo 'falied';
                }
            }else{
                echo 'ticket limit exceeded';
            }
        }
    }
    else{
        echo 'null';
    }


   

}


?>