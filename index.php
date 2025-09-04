<?php
// include your connection file
include 'db.php';

// fetch data
$sql = "SELECT studentid, name, age, address FROM student";
$result = $connection->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Records</title>
    <style>
        table {
            border-collapse: collapse;
            width: 70%;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid #333;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
        h2 {
            text-align: center;
        }
    </style>
</head>
<body>

<h2>Student Records</h2>

<table>
    <tr>
        <th>Student ID</th>
        <th>Name</th>
        <th>Age</th>
        <th>Address</th>
    </tr>

    <?php
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . $row["studentid"] . "</td>
                    <td>" . $row["name"] . "</td>
                    <td>" . $row["age"] . "</td>
                    <td>" . $row["address"] . "</td>
                  </tr>";
        }
    } else {
        echo "<tr><td colspan='4'>No records found</td></tr>";
    }
    ?>
</table>

</body>
</html>