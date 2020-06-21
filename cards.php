<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>


<?php
require 'connect.php';
$query             = "SELECT * FROM videos";
$query_run         = mysqli_query( $conn, $query );
$check_communities = mysqli_num_rows( $query_run ) > 0;
?>
<div class="container mt-3">
    <div class="row">
        <?php
        if ( $check_communities )
        {
        while ( $row = mysqli_fetch_assoc( $query_run ) )
        {
        ?>

        <div class=" col-3 mb-3">
            <div class="card" style="width: 15rem;">
            <img src="https://media.mnn.com/assets/images/2016/07/guineapig-eating-basil.jpg.838x0_q80.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"> <?php echo $row[ 'name' ]; ?></h5>
                    <h5 class="card-title"> <?php echo $row[ 'id' ]; ?></h5>
                </div><!-- /card-body -->
            </div><!-- /card -->
        </div><!-- /col-auto -->

            <?php
            }
            }
            else {
                echo "TEST";
            }
            ?>

        </div><!-- /row -->
    </div><!-- /container -->