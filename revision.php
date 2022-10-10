<?php
$personnes =
    array(
        'mdupond'=> array('prenom' => 'Martin', 'nom' => 'Dupond', 'age' => 25, 'ville' => 'Paris'),
        'jm'=> array('prenom' => 'Jean', 'nom' => 'Martin', 'age' => 20, 'ville' => 'Villetaneuse'),
        'toto'=> array('prenom' => 'Tom', 'nom' => 'Tonge', 'age' => 18, 'ville' => 'Epinay'),
        'arn'=> array('prenom' => 'Arnaud', 'nom' => 'Dupond', 'age' => 33, 'ville' => 'Paris'),
        'email'=> array('prenom'=>'Emilie', 'nom'=>'Ailta', 'age'=>46, 'ville'=>'Villetaneuse'),
        'dask' => array('prenom'=>'Damien', 'nom'=>'Askier','age'=>7,'ville'=>'Villetaneuse')
    );

echo $personnes['arn']['age'];
function afftab($tab,$ville){
    foreach($tab as $key=>$arr):
         if ($arr["ville"]==$ville){
             echo "<tr >
           <td >".$arr["prenom"]."</td>
           <td >".$arr["nom"]."</td>
           <td>".$arr["age"]."</td>
           <td >".$arr["ville"]."</td>
       </tr>";
             };
         endforeach;
};
$i=0;
?>
<link rel="stylesheet" href="style2.css">
<table>
    <thead>
        <th>Prenom</th>
        <th>Nom</th>
        <th>Age</th>
        <th>Ville</th>
    </thead>
    <tbody>
    <?php
    foreach($personnes as $key=>$arr):
        print_r($arr);
        $i++;
        if($i%2==0){

            ?>
       <tr id="pair">
           <td id="pair"><?php echo $arr['prenom']?></td>
           <td id="pair"><?php echo $arr['nom']?></td>
           <td id="pair"><?php echo $arr['age']?></td>
           <td id="pair"><?php echo $arr['ville']?></td>
       </tr>
       <?php }
        else{ ?>
            <tr id="impaire">
                <td ><?php echo $arr['prenom']?></td>
                <td ><?php echo $arr['nom']?></td>
                <td ><?php echo $arr['age']?></td>
                <td ><?php echo $arr['ville']?></td>
            </tr>
    <?php
        }

    endforeach;
        afftab($personnes,"Paris");
       ?>

    </tbody>
</table>


<?php
$tab=array(
    "php5@free.com","jean556@fiscali.fr","machine@waladoo.fr",
    "webmestre@waladoo.fr","pauldeux@fiscali.fr","macafi@fiscali.fr"
);
foreach ($tab as $item):
    $dom=explode("@",$item);
    $domaine[]=$dom[1];
endforeach;
print_r($domaine);
$val=array_count_values($domaine);
print_r($val);
