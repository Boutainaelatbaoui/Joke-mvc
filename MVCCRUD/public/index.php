<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    $title = "Joke Page";
    include("../include/head.php");
    ?>
</head>
<body class="m-4">
    <div class="d-flex justify-content-between mt-3 mb-5 pb-4 ms-2">
        <div class="fs-2">
            <span class="me-2"><i class="bi bi-folder-plus"></i></span>
            <span>Jokes</span>
        </div>
        <!-- <a href="#modal-joke" data-bs-toggle="modal" class="btn btn-warning me-4 mt-2"><i class="bi bi-plus-circle me-2"></i> Add Jokes</a> -->
        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-joke" onclick="addJoke()">
            <i class="bi bi-plus-circle me-2"></i> Add Jokes
        </button>
    </div> 
    <!-- Station MODAL -->
    <?php
        require '../jokeForm/view.php';
    ?>

    <?php
        require '../jokeList/view.php';
    ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/jquery.dataTables.min.js" integrity="sha512-BkpSL20WETFylMrcirBahHfSnY++H2O1W+UnEEO4yNIl+jI2+zowyoGJpbtk6bx97fBXf++WJHSSK2MV4ghPcg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $(document).ready(function() {
            $("#data-table").DataTable({
                scrollX: true,
                info: false,
                responsive: true,
            });
        });
    </script>
    <script src="../assets/js/main.js"></script>
</body>
</html>