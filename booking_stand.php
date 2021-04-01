<?php
session_start();
include("dbconfig.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="css/stand.css">
</head>

<body>



    <div class="container">
    <?php 

$branch = $_GET['branches'];
$brch_string = str_replace("-"," ",$branch);

$query = "SELECT matches.*,stand.* from matches INNER JOIN stand ON matches.id = stand.match_id  WHERE matches.id='$brch_string'" ;
$query_run = mysqli_query($conn,$query);
if(mysqli_num_rows($query_run)>0){
    while($row= mysqli_fetch_assoc($query_run)){
        ?>
        <section class="card">

      
           
            <div class="icon"><i class="fa fa-cricket" aria-hidden="true"></i></div>
            <h3><?php echo $row['stand_name'];?></h3>
            <p>Available Seats </p>
            <h4><?php echo $row['seats'];?></h4>
            <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal">Book Now</button>
         
        </section>
        <?php
                }
            }
        
        
        ?>
        <!-- <section class="card">
            <div class="icon standard"><i class="fa fa-plane" aria-hidden="true"></i></div>
            <h3>B</h3>
            <p>Available Seats </p>
            <h4>25</h4>
            <a href="#" class="btn">Book Now</a>

        </section>
        <section class="card">
            <div class="icon premium"><i class="fa fa-rocket" aria-hidden="true"></i></div>
            <h3>C</h3>
            <p>Available Seats </p>
            <h4>25</h4>
            <a href="#" class="btn">Book Now</a>

        </section>
        <section class="card">
            <div class="icon premium"><i class="fa fa-rocket" aria-hidden="true"></i></div>
            <h3>D</h3>
            <p>Available Seats </p>
            <h4>25</h4>
            <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal">Book Now</button>

        </section> -->

        <!-- Button trigger modal -->

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="space">
                            <div class="ticket">

                                <div class="illustration">
                                    <div class="spikes">
                                        <div class="spike"></div>
                                        <div class="spike"></div>
                                        <div class="spike"></div>
                                        <div class="spike"></div>
                                        <div class="spike"></div>
                                        <div class="spike"></div>
                                        <div class="spike"></div>
                                        <div class="spike"></div>
                                        <div class="spike"></div>
                                    </div>
                                    <div class="new-label">ipl</div>
                                    <!--     <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7.42 145" class="spikes"><g data-name="Layer 2"><path fill="#fbad18" fill-rule="evenodd" d="M.33 0H0v145h.33l7.09-6.59-7.09-6.59 7.09-6.59-7.09-6.59 7.09-6.59-7.09-6.6 7.09-6.59-7.09-6.59 7.09-6.59-7.09-6.59 7.09-6.59-7.09-6.59 7.09-6.59-7.09-6.59 7.09-6.59-7.09-6.59 7.09-6.6-7.09-6.59 7.09-6.59-7.09-6.59 7.09-6.59L.33 0z" data-name="Layer 1"/></g></svg> -->
                                </div>

                                <div class="ornament">
                                    <div class="ornament__sharp"></div>
                                    <div class="ornament__cut ornament__cut--1"></div>
                                    <div class="ornament__cut ornament__cut--2"></div>
                                    <div class="ornament__tail"></div>
                                    <div class="content">
                                        <p>
                                            Welcome to ipl<br>
                                            <br>

                                        </p>
                                        <a href="#" class="link-join">
                                            Bergabung Sekarang
                                        </a>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <form action="logic/tickets_logic.php" method="post">
                        <div class="col-sm-3 col-lg-5">
                            <div class="input-group">
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-default btn-number" disabled="disabled"
                                        data-type="minus" data-field="quant[1]">
                                        <span class="fa fa-minus"></span>
                                    </button>
                                </span>
                                <input type="text" name="quant[1]" class="form-control input-number" value="1" min="1"
                                    max="10">
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-default btn-number" data-type="plus"
                                        data-field="quant[1]">
                                        <span class="fa fa-plus"></span>
                                    </button>
                                </span>
                            </div>
                        </div>



                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <input type="submit" name="buy" class="btn btn-primary" value="Buy Tickets"></button>
                    </div>
                    </form>
                </div>
            </div>
        </div>


    </div>
    <!-- Modal -->


    <script>
        $('.btn-number').click(function (e) {
            e.preventDefault();

            fieldName = $(this).attr('data-field');
            type = $(this).attr('data-type');
            var input = $("input[name='" + fieldName + "']");
            var currentVal = parseInt(input.val());
            if (!isNaN(currentVal)) {
                if (type == 'minus') {

                    if (currentVal > input.attr('min')) {
                        input.val(currentVal - 1).change();
                    }
                    if (parseInt(input.val()) == input.attr('min')) {
                        $(this).attr('disabled', true);
                    }

                } else if (type == 'plus') {

                    if (currentVal < input.attr('max')) {
                        input.val(currentVal + 1).change();
                    }
                    if (parseInt(input.val()) == input.attr('max')) {
                        $(this).attr('disabled', true);
                    }

                }
            } else {
                input.val(0);
            }
        });
        $('.input-number').focusin(function () {
            $(this).data('oldValue', $(this).val());
        });
        $('.input-number').change(function () {

            minValue = parseInt($(this).attr('min'));
            maxValue = parseInt($(this).attr('max'));
            valueCurrent = parseInt($(this).val());

            name = $(this).attr('name');
            if (valueCurrent >= minValue) {
                $(".btn-number[data-type='minus'][data-field='" + name + "']").removeAttr('disabled')
            } else {
                alert('Sorry, the minimum value was reached');
                $(this).val($(this).data('oldValue'));
            }
            if (valueCurrent <= maxValue) {
                $(".btn-number[data-type='plus'][data-field='" + name + "']").removeAttr('disabled')
            } else {
                alert('Sorry, the maximum value was reached');
                $(this).val($(this).data('oldValue'));
            }


        });
        $(".input-number").keydown(function (e) {
            // Allow: backspace, delete, tab, escape, enter and .
            if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
                // Allow: Ctrl+A
                (e.keyCode == 65 && e.ctrlKey === true) ||
                // Allow: home, end, left, right
                (e.keyCode >= 35 && e.keyCode <= 39)) {
                // let it happen, don't do anything
                return;
            }
            // Ensure that it is a number and stop the keypress
            if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
                e.preventDefault();
            }
        });
    </script>
</body>

</html>