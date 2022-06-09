<!DOCTYPE html>
<html>
<head>
    <title>Tutorial PHP Datatables Dengan PHP Dan MySQL</title>
    <link rel="stylesheet" type="text/css" media="screen" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
</head>
<body>

<table id="tabel-data">
    <thead>
        <tr>
            <th>No</th>
            <th>Username</th>
            <th>Password</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
    <?php
        include 'koneksi.php';
        $employee = mysqli_query($con,"select * from table_admin");
        $no=1;
        while($row = mysqli_fetch_array($employee))
        {
            echo "<tr >
            <td>".$no."</td>
            <td>".$row['username']."</td>
            <td>".$row['password']."</td>
            <td>".$row['level']."</td>
        </tr>";
        $no++;
        }
    ?>
    </tbody>

    <script>
    $(document).ready(function(){
        $('#tabel-data').DataTable();
    });
</script>

</table>
</body>
</html>