<?php 
include('../dbconfig.php');
session_start();
// echo $ticket_count;
if(isset($_POST['buy'])){
    $ticket_count = $_POST["quant"];
    $count = implode(" ",$ticket_count);
    $stand_selected = $_POST["stand_selected"];
    $branch = $_POST['branch'];
    $query = "SELECT tickets FROM login WHERE email='{$_SESSION['email']}'";
    $query_run = mysqli_query($conn,$query);
     echo $branch;
     echo $stand_selected;
    if(mysqli_num_rows($query_run)>0){
        while($row=mysqli_fetch_assoc($query_run)){
            $ticket_available = $row['tickets'];
            if($count<=$ticket_available){
                $total_tickets = $ticket_available-$count;
                $query1 = "UPDATE login SET tickets='$total_tickets' WHERE email='{$_SESSION['email']}'";
                $query_run1 = mysqli_query($conn,$query1);
                if($query_run1){
                    $query3 = "SELECT matches.*,stand.* from matches INNER JOIN stand ON matches.id = stand.match_id  WHERE matches.id='$branch' AND stand.stand_name='$stand_selected'" ;
                    $query_run2 = mysqli_query($conn,$query3);
                    if(mysqli_num_rows($query_run2)>0){
                        while($row1= mysqli_fetch_assoc($query_run2)){
                            $totalseats_available =  $row1['seats'];
                            $bookseats = $totalseats_available - $count;
                            $query4 = "UPDATE stand SET seats='$bookseats' WHERE stand_name='$stand_selected' AND match_id='$branch'";
                            $query_run3 = mysqli_query($conn,$query4);

                        }
                    }
                    else echo 'error';
                            
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