<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

$matieres=["java"=>[14,15],"html"=>[13,18],"php"=>[17,15]];

$etudiants=[
"ali"=>["java"=>[14,5],"html"=>[13,15],"php"=>[17,14]],
"salah"=>["java"=>[12,13],"html"=>[10,14.5],"php"=>[13,4]],
"sami"=>["java"=>[10,15],"html"=>[13.5,18],"php"=>[15,19]]
];
// affichage($matieres);
// affichage($etudiants);
$tab5=["java","html","js","css","angular","nodejs"];

echo "<table border='1'>";
    for($i=0;$i<sizeof($tab5);$i++)
    {
        echo "<tr><td>$tab5[$i]</td></tr>";
    }
echo "</table>";


    
    $tab6=["java"=>[14,15,8],"html"=>[12.5,15,11],"js"=>[19.25,13,17],"css"=>[12,17,15],"angular"=>[8,14,13],"nodejs"=>[12,10,12]];
    echo "<table border=1>
        <tr>
            <th>nom matiere</th>
            <th>note1</th>
            <th>note2</th>
            <th>note3</th>
            <th>Moyenne</th>
        </tr>";
    // foreach ($tab6 as $matiere => $notes)
    // {
    //     echo "<tr>
    //         <td>$matiere</td>
    //         <td>$notes[0]</td>
    //         <td>$notes[1]</td>
    //         <td>$notes[2]</td>";
    //         $moy=round((($notes[0]+$notes[1]+$notes[2])/3),2);
    //     echo "<td>$moy</td></tr>";
        
    // }
    foreach ($tab6 as $matiere => $notes)
    {
        $moy=0;
        $som=0;
        echo "<tr>
            <td>$matiere</td>
            foreach ($tnotes as $note) {
                echo "<td>$note</td>";
                $som+=$note;
            }
            
            $moy=round($som/count($notes),2);
            
        echo "<td>$moy</td></tr>";
        
    }


    echo "</table>";



    ?>
    
</body>
</html>