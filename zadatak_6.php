<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <?php

            require 'konekcija.php';

            $query="SELECT COUNT(*) "
                    . "FROM nastavnik "
                    . "WHERE prezNastavnik LIKE ?";
                $ime="M%";
                if($stmt = $mysqli->prepare($query))
                {
                    $stmt->bind_param('s',$ime);
                    $stmt->execute();
                    $stmt->bind_result($asd);
                    $stmt->fetch();
                    echo 'Broj nastavnika čije ime prezime počinje sa "M": '
                    .$asd;
                    $stmt->close();
                } 

                $mysqli->close();
        ?>
    </body>
</html>
