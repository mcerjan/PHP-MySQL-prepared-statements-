<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <?php

            require 'konekcija.php';

            $query_tpl="SELECT mbrStud,imeStud,prezStud "
                    . "FROM stud "
                    . "WHERE imeStud=?";

            $ime="Ivan";

            if($stmt = $mysqli->prepare($query_tpl))
            {
                $stmt->bind_param('s',$ime);
                $stmt->execute();
                $stmt->bind_result($rezultat1,$rezultat2,$rezultat3);
                    while($stmt->fetch())
                        {
                            echo $rezultat1.' '
                                .$rezultat2.' '
                                .$rezultat3.'<br/>';
                        }
                $stmt->close();
            }
            $mysqli->close();
        ?>
    </body>
</html>