<?php
    include 'db.php';

    $sql = "SELECT * FROM stud_info";
    $result = mysqli_query ($conn, $sql);
?>

<!DOCTYPE html>
    <html lang = "en">

    <head>
        <meta charset ="UTF-8">
        <meta name = "viewport" content = "width=device-width, initial-scale=1.0">

        <title> Welcome </title>

        <style>
            body 
            {
                font-family: Arial, sans-serif;
                margin: 0;
                padding: 20px;
            }
            h2 
            {
                color: #333;
            }
            table 
            {
                border-collapse: collapse;
                width: 100%;
            }
            th, td 
            {
                border: 1px solid #dddddd;
                text-align: left;
                padding: 8px;
            }
            th 
            {
                background-color: #f2f2f2;
            }
        </style>
    </head>

    <body>
        <h2> Registered </h2>

        <a href = "add.php"><button> add </button></a>
        <br><br>
        
        <table>
            <tr>
                <th> Student ID </th>
                <th> First Name </th>
                <th> Middle Name </th>
                <th> Last Name </th>
                <th> Suffix </th>
                <th> Course </th>
                <th> Year & Section </th>
                <th> Action </th>
            </tr>

            <?php
                while ($row = mysqli_fetch_assoc ($result)) 
                {
                    echo "<tr>";
                    echo "<td>" . $row['stud_ID'] . "</td>";
                    echo "<td>" . $row['f_name'] . "</td>";
                    echo "<td>" . $row['m_name'] . "</td>"; 
                    echo "<td>" . $row['l_name'] . "</td>";
                    echo "<td>" . $row['suffix'] . "</td>";
                    echo "<td>" . $row['course'] . "</td>";
                    echo "<td>" . $row['yr_sec'] . "</td>";
                    echo "<td>";
                    echo "<a href = 'delete.php?" . $row['stud_ID'] . "'><button> Delete </button></a>";//delete button
                    echo "<a href = 'update.php?" . $row['stud_ID'] . "'><button> update </button></a>";//update button
                    echo "</td>";
                    echo "</tr>";
                }
            ?>
        </table>
    </body>
</html>