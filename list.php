<!DOCTYPE html>
<html>

<head>
    <style>
    a:link,
    a:visited {
        background-color: #f44336;
        color: white;
        padding: 14px 25px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
    }

    a:hover,
    a:active {
        background-color: red;
    }

    table {
        border-collapse: collapse;
        width: 100%;
    }

    th,
    td {
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2
    }

    th {
        background-color: #4CAF50;
        color: white;
    }
    </style>
</head>

<body>

    <h2>Book details</h2>

    <table>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Auther name</th>
            <th>Date</th>




        </tr>
        <?php include 'db.php';
  $q = 'SELECT * FROM list';
  $result = mysqli_query($connection,$q);
  while ($row = mysqli_fetch_array($result)){

  ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['title']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['date']; ?></td>



        </tr>
        <?php } ?>
    </table>

</body>

</html>