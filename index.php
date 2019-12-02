<?php
    include_once './mockdb.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
        $sql = "SELECT * FROM TABLENAME;";
        $result = mysqli.query($conn, $sql);
        $resultsCheck = mysqli_num_rows($result);

        if ($resultCheck > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo $row['column_name'];
            }
        }
    ?>
    
</body>
</html>