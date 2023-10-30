<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dashboard</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <h2 class="text-center mt-5">Dashboard</h2>

            <?php
            session_start();

            if (!isset($_SESSION['username'])) {
                header('Location: login.php');
                exit;
            }

            echo '<p>Welcome, ' . $_SESSION['username'] . '!</p>';

            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                session_destroy();
                header('Location: login.php');
            }
            ?>

            <form action="dashboard.php" method="post">
                <button type="submit" class="btn btn-primary">Logout</button>
            </form>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>
