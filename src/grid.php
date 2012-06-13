<?php

require_once './autoload.php';

$data = array(
    array( 'Paramètre', 'Description', 'Requis' ),

    array( 'href', 'Le paramètre *href*, qui utilise la même syntaxe que celle des hyperliens (par exemple *"eznode://134"* ou *"eznode://chemin/vers/un/noeud"* ou *"ezobject://1024"*), doit contenir un lien valide pointant soit vers un noeud soit vers un objet. Dans le cas d\'un lien vers un noeud, *eZ Publish* utilise l\'objet encapsulé par le noeud. En d\'autres termes, c\'est un objet qui, dans les deux cas, est inséré (le *nœud* n\'est qu\'un emballage).', 'Oui' ),

    array( 'class', 'La paramètre *class* sert à spécifier la feuille de styles CSS à utiliser. Dans le template, cette feuille de styles sera disponible dans la variable **$classification**', 'Non' ),

    array( 'view', 'Le paramètre *view* permet de définir le mode de vue à utiliser pour afficher l\'objet (par exemple *full*, *line*, etc...). Par défaut, le système utilise le mode de vue *embed* pour afficher les objets intégrés par le biais de la balise *embed*. En revanche, le mode de vue *embed-inline* est utilisé conjointement avec les balises *embed-inline*.', 'Non' ),

    array( 'align', 'Le paramètre *align*, dont les valeurs possibles sont *left* (gauche), *center* (centré) et *right* (droite), est utilisé pour définir la position de l\'objet inséré.', 'Non' ),

    array( 'target', 'Le paramètre *target* définit la façon dont va s\'ouvrir la fenêtre ou l\'onglet (du navagteur) qui affichera l\'objet (quelques valeurs possibles: *\_self*, *\_blank*, etc...).', 'Non' ),

    array( 'size', 'Le paramètre *size* définit la taille (par exemple: *small*, *medium*, *large*, etc...) utilisée lorsqu\'un objet image est inséré. Les tailles possibles sont définies dans le fichier **image.ini**', 'Non' ),

    array( 'id', 'La paramètre *id* sert à assigner un ID unique qui sera l\'attribut ID dans le code HTML résultant.', 'Non' ),

    array( 'custom parameters', 'Les noms des paramètres personnalisés doivent être définis dans le tableau `CustomAttributes[] <http://doc.ez.no/eZ-Publish/Technical-manual/4.x/Reference/Configuration-files/content.ini/name_of_XML_tag/CustomAttributes>`_ soit de la section **[embed]** soit de la section **[embed-inline]**de l\'une des surcharges du fichier de configuration **content.ini**. Lorsqu\'il est utilisé, un tel paramètre est disponible en tant que variable de template dont le nom est identique à celui spécifié dans la balise même.', 'Non' ),
);

$output = new ezcConsoleOutput();
$output->formats->headBorder->color = 'blue';
$output->formats->normalBorder->color = 'gray';
$output->formats->headContent->color = 'blue';
$output->formats->headContent->style = array( 'bold' );
$table = new ezcConsoleTable( $output, 78 );
$table->options->defaultBorderFormat = 'normalBorder';
$table[0]->borderFormat = 'headBorder';
$table[0]->format = 'headContent';
$table[0]->align = ezcConsoleTable::ALIGN_CENTER;

foreach ( $data as $row => $cells )
{
    foreach ( $cells as $cell )
    {
        $table[$row][]->content = $cell;
    }
}

$output->outputLine( 'eZ components team:' );
$table->outputTable();
$output->outputLine();
?>
