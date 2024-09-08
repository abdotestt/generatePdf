<?php
// Inclure la bibliothèque TCPDF
// Si vous avez installé TCPDF via Composer, utilisez cette ligne :
require_once __DIR__ . '/vendor/autoload.php';

// Sinon, pour une installation manuelle, utilisez cette ligne :
// require_once __DIR__ . '/path/to/tcpdf.php';

// Créer une instance de TCPDF
// Cette instance représente le document PDF
$pdf = new TCPDF();

// Définir les métadonnées du document PDF
// Les métadonnées incluent les informations comme l'auteur, le titre, etc.
$pdf->SetCreator(PDF_CREATOR); // Définir le créateur du document (généralement une constante de TCPDF)
$pdf->SetAuthor('Nom de l\'auteur'); // Auteur du document
$pdf->SetTitle('Mon PDF à télécharger'); // Titre du PDF
$pdf->SetSubject('Sujet du document'); // Sujet général du document
$pdf->SetKeywords('pdf, téléchargement, exemple'); // Mots-clés associés au PDF

// Ajouter une nouvelle page au PDF
// Chaque document PDF doit avoir au moins une page
$pdf->AddPage();

// Définir le contenu HTML du fichier PDF
// Vous pouvez créer du contenu en HTML, qui sera rendu dans le PDF
$html = '<h1>Bienvenue sur TCPDF</h1><p>Ceci est un exemple de téléchargement de PDF après un clic sur un bouton.</p>';

// Écrire le contenu HTML dans le PDF
// Cette méthode convertit le HTML en format PDF et l'insère dans la page
$pdf->writeHTML($html, true, false, true, false, '');
$pdf->AddPage();

// Définir le contenu HTML du fichier PDF
// Vous pouvez créer du contenu en HTML, qui sera rendu dans le PDF
$html = '<h1>Bienvenue sur TCPDF</h1><p>Ceci est un exemple de téléchargement de PDF après un clic sur un bouton.</p>';

// Écrire le contenu HTML dans le PDF
// Cette méthode convertit le HTML en format PDF et l'insère dans la page
$pdf->writeHTML($html, true, false, true, false, '');

// Définir les en-têtes HTTP pour forcer le téléchargement du fichier PDF
// La méthode Output() génère le fichier PDF
// Paramètre 'mon_fichier.pdf' : le nom du fichier téléchargé
// Paramètre 'D' : force le téléchargement du fichier au lieu de l'afficher
$pdf->Output('mon_fichier.pdf', 'D'); // 'D' signifie "Download", c'est-à-dire forcer le téléchargement

