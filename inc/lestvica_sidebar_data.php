<?php
if ( !defined( 'ABSPATH' ) ) exit;

require_once('simple_html.php');

class Ekipa 
{
    public $mesto;
    public $ime;
    public $tekme;
    public $zmage;
    public $neodloceno;
    public $porazi;
    public $gol_razlika_stevilo;
    public $gol_razlika;
    public $tocke;
    
    
}

function LestvicaData($url) {
    $html = file_get_html($url);
    $lestvica = array();
     
    foreach ($html->find('tr.hand') as $article) {
        $stevec = 0;
        $ekipa = new Ekipa();
         
        foreach($article->find('td') as $vrstica) {
            switch($stevec){
                case 0:
                    $ekipa->mesto = $vrstica->plaintext;
                break;
                case 2:
                    $ekipa->ime = $vrstica->plaintext;
                    $ekipa->ime = trim(mb_convert_encoding($ekipa->ime, 'HTML-ENTITIES', "UTF-8"));
                break;            
                case 3:
                    $ekipa->tekme = $vrstica->plaintext;
                break;    
                case 4:
                    $ekipa->zmage = $vrstica->plaintext;
                break;    
                case 5:
                    $ekipa->neodloceno = $vrstica->plaintext;
                break;    
                case 6:
                    $ekipa->porazi = $vrstica->plaintext;
                break;    
                case 7:
                    $ekipa->gol_razlika_stevilo = $vrstica->plaintext;
                break;    
                case 8:
                    $ekipa->gol_razlika = $vrstica->plaintext;
                break;    
                case 9:
                    $ekipa->tocke = $vrstica->plaintext;
                break;    
            }
            $stevec++;
        }
        $lestvica[] = $ekipa;
    }
     
    $html->clear();
    unset($html);
    return $lestvica;
}
?>