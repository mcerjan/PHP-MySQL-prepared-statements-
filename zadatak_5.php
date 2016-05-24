<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
    <?php

        require 'konekcija.php';

        $query="SELECT imeStud "
                . "FROM stud "
                . "WHERE imeStud LIKE ?";
        $ime="A%";
        if($stmt = $mysqli->prepare($query))
        {
            $stmt->bind_param('s',$ime);
            $stmt->execute();
            $stmt->store_result();
            $numrows= $stmt->num_rows;
            echo"Broj redaka: ".$numrows;
            $stmt->close();
        } 

        $mysqli->close();
    ?>
    </body>
</html>
