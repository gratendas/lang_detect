<?php
require_once '../vendor/autoload.php';

use DetectLanguage\DetectLanguage;
use TextLanguageDetect\TextLanguageDetect;
use TextLanguageDetect\LanguageDetect\TextLanguageDetectException;
use Ideea\LanguageDetector\LanguageDetector;
use Ideea\LanguageDetector\Languages;
//use Text_LanguageDetect\langDetectCustom;

//ladybug_dump("hello");
$detect= new Text_langDetectCustom();
//$detect= new Text_LanguageDetect();
//ladybug_dump($detect->detect("Tran Van"));
//ladybug_dump($detect->detect("Hue Tuyen Chau"));
//exit;


echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />';
$row = 1;
if (($handle = fopen("test2usa.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $num = count($data);
        //echo "<p> $num fields in line $row: <br /></p>\n";
        $row++;
        $s = "";
        preg_match('/(^[a-zA-Z0-9\.\_]+)+\@/',$data[0],$email);
        $s = $data[1].' '.$data[2];
        echo "\t\t$s => Name Country :  ".$detect->detect($s)."<br/>";
        echo "\t\t $email[1] => Email Country :  ".$detect->detect($email[1])."<br/>";
        echo "<br/>================================================================<br/>";

    }
    fclose($handle);
}


















//echo ("GET https://www.googleapis.com/language/translate/v2/detect?key=AIzaSyBJZEha030SNQB9IhsC6yaYHYTmp_rJdk4&q=Google%20Translate%20Rocks");

/*$l = new TextLanguageDetect();
$text =<<<EOD
hello world
EOD;

try {
    //return 2-letter language codes only
    $l->setNameMode(0);

    $result = $l->detect($text, 4);
    echo "<pre>";
    print_r($result);
    echo "</pre>";
} catch (TextLanguageDetectException $e) {
    die($e->getMessage());
}*/





/*

$l = new TextLanguageDetect();

echo "Supported languages:\n\t";
try {
    $langs = $l->getLanguages();
    sort($langs);
    echo implode(', ', $langs) . "\n\n";
} catch (TextLanguageDetectException $e) {
    die($e->getMessage());
}

echo '<br/>===============================================<br/>';


$text =<<<EOD
khong co gi quy hon doc lap tu do
EOD;


try {
    //return 2-letter language codes only
    $l->setNameMode(2);

    $result = $l->detect($text, 4);
    echo "<pre>";
    print_r($result);
    echo "</pre>";
} catch (TextLanguageDetectException $e) {
    die($e->getMessage());
}*/

//echo "hello world";






//$detectlang = new DetectLanguage();
//$detectlang->setApiKey("93dfb956a294140a4370a09584af2ef6"); // no cho san trong test
//$detectlang->setApiKey("be098476c99ddbd57296be3cceced1e0");
/*for ($i = 0; $i <5000; $i++)
{
    $languageCode = $detectlang->simpleDetect("Hello");
    echo "<br/>  ".$i.": ".$languageCode;


}
//ladybug_dump_die($languageCode);
*/
//echo $languageCode = $detectlang->simpleDetect("hello");

echo '<br/>===============================================';

//include('CLD');

/*$detector = new CLD\Detector();
echo "<pre>";
$detector->setLanguageHint(CLD\Language::VIETNAMESE);
//$detector->setLanguageHint(CLD\Language::ENGLISH);
print_r($detector->detectLanguage('hello world', false));

$detector->setEncodingHint(CLD\Encoding::JAPANESE_EUC_JP);
$detector->detectLanguage("日[の]本([の]国", false);
echo print_r($detector->detectLanguage("nguyen"));
echo "</pre>";*/
//echo $detector[0]['name'];
/*echo "<pre>";
print_r(CLD\detect("Drüben hinterm Dorfe wohnt ein Leiermann. Und mit starren Fingern spielt er was er kann"));
print_r(CLD\detect("thanh pho ho chi minh", false, true, null, CLD\Language::JAPANESE, CLD\Encoding::JAPANESE_EUC_JP));
echo "</pre>";*/




/*$detector = LanguageDetector::createDefault();
$text = 'happy new year';
$languages = $detector->detect($text);
// Get all votes languages
$votedLanguages = $languages->getVoteLanguages();
// Get all high votes languages
$highVotesLanguages = $languages->getVoteLanguages(Languages::VOTED_HIGH);
// Get the primary language of text
$language = $languages->getPrimaryLanguage();
echo $language;
*/




