<html>
    <body>
        <h2> Student Information Form >> </h2>

        <form method = "POST">
            Student ID:
            <input type = "text" name = "stud_ID" required>
            <br><br>
            First Name:
            <input type = "text" name = "f_name" required>
            <br><br>
            Middle Name:
            <input type = "text" name = "m_name" required>
            <br><br>
            Last Name:
            <input type = "text" name = "l_name" required>
            <br><br>
            Suffix:
            <input type = "text" name = "suffix" required>
            <br><br>
            Course:
            <input type = "text" name = "course" required>
            <br><br>
            Year & Section:
            <input type = "text" name = "yr_sec" required>
            <br><br>
            <input type = "submit" value = "Add">
            <input type = "reset" value = "Clear">

            <a href = "home.php"> <input type = "button" value = "Back"> </a>
        </form>

        <?php
            include 'db.php';

            if ($_SERVER["REQUEST_METHOD"] == "POST") 
            {
                $stud_ID = $_POST['stud_ID'];
                $f_name = $_POST['f_name'];
                $m_name = $_POST['m_name'];
                $l_name = $_POST['l_name'];
                $suffix = $_POST['suffix'];
                $course = $_POST['course'];
                $yr_sec = $_POST['yr_sec'];

                $sql = "INSERT INTO stud_info (stud_ID, f_name, m_name, l_name, suffix, course, yr_sec) VALUES ('$stud_ID', '$f_name', '$m_name', '$l_name', '$suffix', '$course', '$yr_sec')";
                
                if (mysqli_query ($conn, $sql)) 
                {
                    echo "<p style = 'color: green;'> Data added successfully! </p>";
                }
                else
                {
                    echo "Error: " . $sql . "<br>" . mysqli_error ($conn);
                }
            }
        ?>
    </body>
</html>
