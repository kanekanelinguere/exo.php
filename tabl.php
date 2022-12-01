<?php
$etudiant=["prenom"=>"modou","nom"=>"ka","class"=>"big2"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
           <th>prrenom</th>
            <th>nom</th>
            <th>class</th>
         </thead>
        <tbody>
            <?php
            echo "<tr>";
            foreach($etudiant as $valeur) {
                echo "<td>$valeur</td>";
            }?>
            </tr>
        </tbody>
    </table>
</body>
</html>