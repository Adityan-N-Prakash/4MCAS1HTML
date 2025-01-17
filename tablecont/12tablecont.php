<html>
<head>
    <title>User View</title>
</head>
<body>
    <?php
        $con = mysqli_connect("localhost", "root", "", "sample");
        
        if (!$con) {
            die("Connection error: " . mysqli_connect_error());
        }

        $query = "SELECT * FROM sample";
        $exe = mysqli_query($con, $query);

        if ($exe && mysqli_num_rows($exe) > 0) 
        {
            echo "<table border='2' cellspace='2' cellpadding='5'>
                    <tr>
                        <th>Name</th>
                        <th>Mobile</th>
                        <th>Email</th>
                    </tr>";
            
            foreach ($exe as $row) 
            {
                echo "
                    <tr>
                        <td>" . $row["name"] . "</td>
                        <td>" . $row["mobile"] . "</td>
                        <td>" . $row["email"] . "</td>
                    </tr>";
            }
            echo "</table>";
        }
        else
        {
            echo "0 results";
        }

        mysqli_close($con);
    ?>
</body>
</html>

