<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<h1>Task 1,2</h1>

<div class="container">
<header class="row">
<div class="col-lg-4 col-sm-12">

<?
$path = $_SERVER['DOCUMENT_ROOT'] . '/img/';
$images = scandir($path);
if (false !== $images) {
    $images = preg_grep('/\\.(?:png|gif|jpe?g)$/', $images);
    sort($images, SORT_NUMERIC | SORT_FLAG_CASE);
    foreach ($images as $image)
        echo '<img height="100" width="100" alt="Where is IMG?" class="col-12 order-1" src="/img/', htmlspecialchars(urlencode($image)),'" />';
}
echo '<img height="100" width="100" alt="Where is IMG?" class="col-10 order-lg-1" src="/img/', htmlspecialchars(urlencode($image)),'" />';
?>

</div>
</header>
</div>
<!-- jQuery first, then Tether, then Bootstrap JS. -->
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>