<?php include("config.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="index.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
        crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp"
        crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>


    <script type="text/javascript" src="path_to/jquery.js"></script>
    <script type="text/javascript" src="path_to/jquery.simplePagination.js"></script>
    <title>Twitter Timeline</title>
</head>

<body>

    <table class="table table-striped w-auto">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Gambar Profil</th>
                <th>Username</th>
                <th>Tweets</th>
                <th>Tanggal</th>
                <th>Lokasi</th>


            </tr>
        </thead>
        <tbody>

            <!--  -->
            <?php 
            $sql = "SELECT * FROM twitter_timeline";
            $query = mysqli_query($db, $sql);
            while($timeline = mysqli_fetch_array($query)){
            ?>
            <!--  -->

            <tr class="table-info">
                <td scope="row">
                    <?php echo $timeline['id'] ?>
                </td>
                <td>
                    <?php echo $timeline['nama'] ?>
                </td>
                <td>
                    <img src="<?php echo $timeline['gambar']; ?>" alt="">
                </td>
                <td>
                    <?php echo "@" , $timeline['screen_name']; ?>
                </td>
                <td>
                    <?php echo $timeline['tweet']; ?>
                </td>
                <td>
                    <?php echo $timeline['tanggal']; ?>
                </td>
                <td>
                    <?php echo $timeline['lokasi']; ?>
                </td>

            </tr>
            <!--  -->
            <?php }?>
            <!--  -->
        </tbody>

    </table>

</body>


</html>