<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
            require 'konekcija.php';

            $query_tpl="SELECT s.imeStud, s.prezStud "
                    . "FROM stud s "
                    . "LEFT OUTER JOIN mjesto m ON "
                    . "s.pbrRod=m.pbr "
                    . "WHERE nazMjesto=?";
                 
            $ime="Zagreb";

            if($stmt = $mysqli->prepare($query_tpl))
            {
                $stmt->bind_param('s',$ime);
                $stmt->execute();
                $stmt->bind_result($rezultat1,$rezultat2);
                    while($stmt->fetch())
                        {
                            echo $rezultat1.' '.$rezultat2.'<br/>';
                        }
                $stmt->close();
            }
            $mysqli->close();
        ?>
    </body>
</html>

