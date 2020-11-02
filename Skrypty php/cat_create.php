
<?php
include(dirname(__FILE__).'/config/config.inc.php');
include(dirname(__FILE__).'/init.php');
include(dirname(__FILE__).'/controllers/admin/AdminImportController.php');
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$object = new Category();
$object->name = array((int)Configuration::get('PS_LANG_DEFAULT') => 'LAMPY PODŁOGOWE');
$object->id_parent = Configuration::get('PS_HOME_CATEGORY');
$object->link_rewrite = array((int)Configuration::get('PS_LANG_DEFAULT') => 'lampy-podlogowe');
$object->description = "Lampy stojące nowoczesne to oświetlenie kinkiety wykonywane z modnych materiałów, często metali, papieru czy tworzyw sztucznych. Tego typu podłogowe lampy nowoczesne wyróżniają się oryginalną stylistyką, nietypowymi kształtami, kolorami czy formami. Część dostępnych w naszym sklepie lamp stojących podłogowych może stanowić samodzielną dekorację i uzupełnienie stylizacji wnętrza.";
$object->add();

$object = new Category();
$object->name = array((int)Configuration::get('PS_LANG_DEFAULT') => 'LAMPY SUFITOWE');
$object->id_parent = Configuration::get('PS_HOME_CATEGORY');
$object->link_rewrite = array((int)Configuration::get('PS_LANG_DEFAULT') => 'lampy-sufitowe');
$object->description = "Lampy sufitowe są niezwykle uniwersalnym oświetleniem pasującym do wszystkich rodzajów pomieszczeń. Ze względu na dużą popularność oświetlenia sufitowego powstało mnóstwo nowych modeli, dzięki czemu idealne lampy do swoich wnętrz znajdą nawet Ci najbardziej wymagający.";
$object->add();

$object = new Category();
$object->name = array((int)Configuration::get('PS_LANG_DEFAULT') => 'KINKIETY');
$object->id_parent = Configuration::get('PS_HOME_CATEGORY');
$object->link_rewrite = array((int)Configuration::get('PS_LANG_DEFAULT') => 'kinkety');
$object->description = "Kinkiety wewnętrzne to wciąż niezastąpione oświetlenie, które zaskakuje funkcjonalnością. Ogromna oferta lamp ściennych pozwala na wybranie kinkietu idealnie komponującego się ze stylem wnętrz. W naszym asortymencie znajdziesz: kinkiety industrialne dla stylowych loftów, kinkiety biurowe dla wydajnej i zdrowej pracy, kinkiety świecznikowe dla wytwornych wnętrz w stylu retro oraz wiele innych modeli.";
$object->add();

$object = new Category();
$object->name = array((int)Configuration::get('PS_LANG_DEFAULT') => 'LAMPY Z ABAŻURAMI');
$object->id_parent = Configuration::get('PS_HOME_CATEGORY');
$object->link_rewrite = array((int)Configuration::get('PS_LANG_DEFAULT') => 'lampy-z-abazurami');
$object->description = "Lampy z abażurami to wspaniała ozdoba dla każdego rodzaju wnętrz. Gustowny abażur może nadać pomieszczeniu zupełnie nowego klimatu. Rodzajów lamp abażurowych jest całe mnóstwo, dlatego warto dokładnie zapoznać się z ofertą przed wyborem oświetlenia. Abażury w paski, geometryczne wzory czy w kwiaty – z lampami z abażurami PCV przystroisz każde pomieszczenie.";
$object->add();

$object = new Category();
$object->name = array((int)Configuration::get('PS_LANG_DEFAULT') => 'AKCESORIA DO LAMP');
$object->id_parent = Configuration::get('PS_HOME_CATEGORY');
$object->link_rewrite = array((int)Configuration::get('PS_LANG_DEFAULT') => 'akcesoria-do-lamp');
$object->description = "W ofercie sklepu znajdziesz nie tylko oświetlenie i żarówki, ale również akcesoria do lamp. Wśród nich dostępne są klosze do lamp metalowe lub szklane.";
$object->add();

$object = new Category();
$object->name = array((int)Configuration::get('PS_LANG_DEFAULT') => 'ŹRÓDŁA ŚWIATŁA');
$object->id_parent = Configuration::get('PS_HOME_CATEGORY');
$object->link_rewrite = array((int)Configuration::get('PS_LANG_DEFAULT') => 'zrodla-swiatla');
$object->description = "Wybierając żarówkę do lampy, musimy wziąć pod uwagę różne czynniki – jaką barwę ma mieć światło w pokoju, jak intensywnie mają świecić żarówki, ledy czy halogeny. Posiadamy mnóstwo rodzajów żarówek w naszej ofercie, dzięki czemu z pewnością znajdziesz interesujący Cię model. Jeśli jeszcze nie wiesz, na jakie źródła światła się zdecydować, pomożemy Ci dokonać wyboru.";
$object->add();

?>