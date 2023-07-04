<?php

$url = "https://iphdata.lequipe.fr/iPhoneDatas/EFR/STD/ALL/V1/Cyclisme-sur-route/Ranking/Competition/tour-de-france/annee-2023/general.json";
$json = file_get_contents($url);
$json = json_decode($json, true);

//print_r($json["items"][0]["objet"]["items"][0]["person"]["nom"]);

$classement = array();

foreach($json["items"][0]["objet"]["items"] as $cyclist) {
  $pos = count($classement) + 1;

  $nom = strtoupper($cyclist["person"]["nom"]);

  if ($nom == "MARTIN" || $nom == "N. QUINTANA" || $nom == "THOMAS" || preg_match("/YATES/", $nom)) {
    $nom = strtoupper($cyclist["person"]["nom_abrege"]);
  }
  if ($nom == "DéMARE") {
    $nom = "DÉMARE";
  }

  //print_r('nom' . $nom);

  $classement[] = array("name" => $nom, "position" => $pos, "link" => $cyclist["person"]["url_fiche"]);
}

print json_encode($classement, JSON_PRETTY_PRINT);


 /*

// get HTML from lequipe.fr
$url = "https://www.lequipe.fr/Cyclisme-sur-route/tour-de-france/page-classement-individuel/general";
//$url = "http://www.lequipe.fr/Cyclisme/resultats/TDF_GENERAL.html";
//$url = "http://www.lequipe.fr/Cyclisme/CyclismeResultat2826_0_GENERAL.html";
$aHTMLSource = file_get_contents($url);

// keep only ranking
preg_match("/<section class=\"classement\">(.*)<\/section>/", $aHTMLSource, $aHTMLRanking);

$page = $aHTMLRanking[0];
//$page = str_replace("</div></section></div>", "", $page);
//$page = str_replace("html\" />", "html\" >", $page); // leur HTML n'est pas correct...

// load as DOM document
$aDOM = new DOMDocument();
if(!$aDOM->loadHTML($page))
{
    print "Impossible de charger le fichier XML...";
    return;
}

$classement = array();

// loop on cyclists
$cyclist = $aDOM->getElementsByTagName("div");
foreach($cyclist as $aCyclist)
{
  if(preg_match("/row/", $aCyclist->getAttribute("class")))
  { 
    $rawName = trim($aCyclist->childNodes->item(1)->childNodes->item(1)->nodeValue);
    $link = "http://www.lequipe.fr/".$aCyclist->childNodes->item(1)->childNodes->item(1)->attributes->getNamedItem("href")->value;
    
    if(preg_match("/SCHLECK/", $rawName) || preg_match("/SANCHEZ/", $rawName) || preg_match("/MARTIN/", $rawName))
    {
      $name = str_replace(".", ". ", $rawName);
    }
    else if(preg_match("/QUINTANA ROJAS/", $rawName))
    {
      $name = "QUINTANA";
    }
    else if(preg_match("/ANTON HERNANDEZ/", $rawName))
    {
      $name = "ANTON";
    }
    else if(preg_match("/RODRIGUEZ OLIVER/", $rawName))
    {
      $name = "RODRIGUEZ";
    }
    else if(preg_match("/COBO ACEBO/", $rawName))
    {
      $name = "C. ACEBO";
    }
    else
    {
      preg_match("/.*\.(.*)/", $rawName, $name);
      $name = $name[1];
    }
    
    $pos = count($classement) + 1;
    $classement[] = array("name" => $name, "position" => $pos, "link" => $link);    
  }
}

print json_encode($classement, JSON_PRETTY_PRINT);

*/

/*

$aHTMLSource = utf8_decode(file_get_contents('http://www.letour.fr/le-tour/2012/fr/100/classement/bloc-classement-page/ITG.html'));

// load as DOM document
$aDOM = new DOMDocument();
if(!$aDOM->loadHTML($aHTMLSource))
{
    print "Impossible de charger le fichier XML...";
    return;
}

// loop on cyclists
$xpath = new DOMXPath($aDOM);

$query = "//table[@id='tab-class']/tbody/tr/td[2]/a";

$cyclist = $xpath->query($query);

foreach($cyclist as $aCyclist)
{
  $rawName = $aCyclist->nodeValue;
  $aLink = "http://www.letour.fr" . $aCyclist->attributes->getNamedItem("href")->value;
  
  // vive les homonymes !
  if(preg_match("/SANCHEZ Luis-Leon/", $rawName))
  {
    $aNormalizedName = "L. SANCHEZ";
  }
  else if(preg_match("/SANCHEZ Samuel/", $rawName))
  {
    $aNormalizedName = "S. SANCHEZ";
  }
  else if(preg_match("/SCHLECK Frank/", $rawName))
  {
    $aNormalizedName = "F. SCHLECK";
  }
  else if(preg_match("/SCHLECK Andy/", $rawName))
  {
    $aNormalizedName = "A. SCHLECK";
  }
  else if(preg_match("/VAN DEN BROECK/", $rawName))
  {
    $aNormalizedName = "V. D. BROECK";
  }
  else if(preg_match("/VAN GARDEREN/", $rawName))
  {
    $aNormalizedName = "V. GARDEREN";
  }
  else if(preg_match("/COBO ACEBO/", $rawName))
  {
    $aNormalizedName = "C. ACEBO";
  }
  else if(preg_match("/MARTIN Tony/", $rawName))
  {
    $aNormalizedName = "T. MARTIN";
  }
  else
  {
    
    
    // convert "VAN DEN BROECK Jurgen" into "VAN DEN BROECK"
    $noms = explode(" ", $rawName);
    $aNormalizedNames = array();
    foreach($noms as $nomPart)
    {
      if(!preg_match("/[a-z]/", $nomPart))
        $aNormalizedNames[] = $nomPart;
    }
    $aNormalizedName = implode(" ", $aNormalizedNames);
  }
  
  //print(utf8_encode($rawName . " - " . $aNormalizedName . " - " . $aLink . "<br/>"));
  
  $gRanking[] = $aNormalizedName;
  $aPos = count($gRanking);
  $gRankingPerCyclist[$aNormalizedName] = array("pos" => $aPos, "link" => $aLink);
}
*/


?>
