<?php
use Dompdf\Dompdf;
use Dompdf\Options;

require_once("connexionBD.php");
$requeteFacture="select idfacture, nomprojets,nom ,montant,  datefacture from factures f,devis d ,clients c,projets p where d.iddevis=f.iddevis and p.idprojets=f.idprojets and f.idclients=c.idclients";
$resultatFacture=$pdo->query($requeteFacture);

ob_start();
require_once 'modelfacture.php';
$html=ob_get_contents();
ob_end_clean();
require_once '../dompdf/autoload.inc.php';
$options=new Options();
$options->set('defaultFont','Courier');
$dompdf=new Dompdf($options);
$dompdf->loadHtml($html);
$dompdf->setPaper('A4','portrait');
$dompdf->render();
$fichier='facture.pdf';
$dompdf->stream($fichier);




