<!DOCTYPE html>
<?php include("config.php"); ?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sentiment Analysis</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="css/dashboard.css">
</head>

<body>

    <div class="button">
        <a href="generate-data.php"><button type="button" class="btn btn-success button-generate">Generate Data</button></a>
    </div>

    <div class="table-padding" style="">
        <table id="example" class="table table-striped table-bordered" style="width:100%;">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Username</th>
                    <th>Gambar Profil</th>
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
            <tfoot>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Gambar Profil</th>
                    <th>Username</th>
                    <th>Tweets</th>
                    <th>Tanggal</th>
                    <th>Lokasi</th>

                </tr>
            </tfoot>
        </table>
    </div>
</body>

<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
<script>
    $(document).ready(function () {
        $('#example').DataTable();
    });
</script>

</html>