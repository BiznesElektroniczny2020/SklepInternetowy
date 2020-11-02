<?php
include(dirname(__FILE__).'/config/config.inc.php');
include(dirname(__FILE__).'/init.php');
include(dirname(__FILE__).'/controllers/admin/AdminImportController.php');
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class MyAdminImportController extends AdminImportControllerCore {
	public static function copyImg($id_entity, $id_image = null, $url = '', $entity = 'products', $regenerate = true) {
		return parent::copyImg($id_entity, $id_image, $url, $entity, $regenerate);
	}
 }
$default_lang = Configuration::get('PS_LANG_DEFAULT');


$product = new Product();
$product->name = [$default_lang => "Stylowy Klosz Szklany do Lamp E14"];
$product->link_rewrite = [$default_lang => "stylowy-klosz-szklany-do-lamp-e14"];
$product->price = 11.00;
$product->quantity = 90;
$product->id_category = 18;
$product->id_category_default = 18;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/Akcesoria/stylowy-klosz-szklany-do-lamp-e14.jpg";
$product->image_url = $url;
$product->description = "Różowy klosz ze szkła oprawka E14
Klosz, który nada lampie niepowtarzalnego charakteru i ozdobi Twoją aranżację wnętrz. Oprawa prezentuje się rewelacyjnie zarówno w nowoczesnych jak i klasycznych pomieszczeniach. Wyjątkowy kształt i subtelny, różowy kolor nadadzą wdzięku i przytulności Twoim wnętrzom.
Do jakich pomieszczeń najbardziej pasuje stylowy klosz?
Oprawa nada się do eleganckiego salonu, jadalni, nowoczesnej sypialni, kuchni, a nawet pokoju dziecięcego. Klosz świetnie łączy się z chromowanymi oraz kolorowymi konstrukcjami lamp. Oprawa pasuje do lamp sufitowych i wiszących.
Jakie praktyczne funkcje posiada klosz?
Klosz został wykonany z wysokiej jakości szkła, dzięki czemu oprawa jest wytrzymała i odporna na uszkodzenia. Klosz dedykowany jest do lamp zasilanych żarówkami E14. Szeroki wybór oświetleń z tego rodzaju zasilaniem, pozwoli Ci z łatwością wybrać lampę idealnie oddającą charakter Twoich wnętrz.";
$product->add();
$product->save();
$product->addToCategories($product->id_category);
StockAvailable::setQuantity((int)$product->id, 0, $product->quantity, Context::getContext()->shop->id);
$shops = Shop::getShops(true, null, true);
$image = new Image();
$image->id_product = $product->id;
$image->position = Image::getHighestPosition($product->id) + 1;
$image->cover = true;
if (($image->validateFields(false, true)) === true &&
        ($image->validateFieldsLang(false, true)) === true && $image->add())
{
   $image->associateTo($shops);
   MyAdminImportController::copyImg($product->id, $image->id, $url, 'products', false);
}


$product = new Product();
$product->name = [$default_lang => "Kwadratowy Klosz Szklany Oprawka E14"];
$product->link_rewrite = [$default_lang => "kwadratowy-klosz-szklany-oprawka-e14"];
$product->price = 9.00;
$product->quantity = 90;
$product->id_category = 18;
$product->id_category_default = 18;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/Akcesoria/kwadratowy-klosz-szklany-oprawka-e14.jpg";
$product->image_url = $url;
$product->description = "Szklany klosz w kształcie kwadratu na oprawkę E14
Chcesz mieć w sowim domu stylową i zarazem funkcjonalną dekorację? Klasyczna, minimalistyczna forma klosza świetnie komponuje się z każdym stylem pomieszczenia – od nowoczesnych po aranżacje retro.
W jakich pomieszczeniach najlepiej będzie wyglądać nowoczesny klosz?
Oprawa, dzięki uniwersalnym kolorom, dopasowuje się do każdego stylu pomieszczenia. Ponadto łatwo łączy się z kolorowymi oraz z chromowanymi konstrukcjami lamp. Pełną dowolność masz również w wyborze oświetlenia do klosza. Oprawa pasuje zarówno do lamp wiszących, sufitowych jak i żyrandoli klasycznych.
Jakie zalety posiada oryginalny klosz?
Oprawa wykonana jest z wysokiej jakości szkła, co zapewnia długą użyteczność klosza. Dedykowane lampy do oprawy to te zasilane żarówkami E14. Jest to popularny rodzaj źródeł zasilania, co pozwala na łatwe skomponowanie oświetlenia idealnie pasującego na wnętrz.";
$product->add();
$product->save();
$product->addToCategories($product->id_category);
StockAvailable::setQuantity((int)$product->id, 0, $product->quantity, Context::getContext()->shop->id);
$shops = Shop::getShops(true, null, true);
$image = new Image();
$image->id_product = $product->id;
$image->position = Image::getHighestPosition($product->id) + 1;
$image->cover = true;
if (($image->validateFields(false, true)) === true &&
        ($image->validateFieldsLang(false, true)) === true && $image->add())
{
   $image->associateTo($shops);
   MyAdminImportController::copyImg($product->id, $image->id, $url, 'products', false);
}


$product = new Product();
$product->name = [$default_lang => "Szklany Klosz Metalowa Ramka Chrom E27"];
$product->link_rewrite = [$default_lang => "szklany-klosz-metalowa-ramka-chrom-e27"];
$product->price = 15.00;
$product->quantity = 90;
$product->id_category = 18;
$product->id_category_default = 18;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/Akcesoria/szklany-klosz-metalowa-ramka-chrom-e27.jpg";
$product->image_url = $url;
$product->description = "Stylowy szklany klosz z chromowaną ramką oprawka E27
Prezentowany klosz znakomicie ozdobi zarówno wnętrza nowoczesne jak i klasyczne. Minimalistyczna forma połączona z szarością i chromowana ramką dają oprawę oświetleniową, która rewelacyjnie prezentuje się z każdym rodzajem lampy.
Do jakich wnętrz najbardziej pasuje stylowy klosz?
Absolutnie do wszystkich! Oprawa nada elegancji salonowi, jadalni, kuchni, sypialni i wielu innymi pomieszczeniom. Dzięki zastosowaniu metalowej ramki, klosz idealnie komponuje się z lampami chromowanymi.
Jakie zalety posiada nowoczesny klosz?
Klosz został wykonany z wysokiej jakości szkła, dlatego możesz mieć pewność, że oprawa będzie pełniła swoje funkcje bardzo długi czas. Klosz dedykowany jest do lamp zasilanych żarówkami typu E27. Jest to najbardziej popularny rodzaj źródeł światła, dlatego bez problemu skomponujesz idealne oświetlenie oddające charakter Twoich wnętrz.";
$product->add();
$product->save();
$product->addToCategories($product->id_category);
StockAvailable::setQuantity((int)$product->id, 0, $product->quantity, Context::getContext()->shop->id);
$shops = Shop::getShops(true, null, true);
$image = new Image();
$image->id_product = $product->id;
$image->position = Image::getHighestPosition($product->id) + 1;
$image->cover = true;
if (($image->validateFields(false, true)) === true &&
        ($image->validateFieldsLang(false, true)) === true && $image->add())
{
   $image->associateTo($shops);
   MyAdminImportController::copyImg($product->id, $image->id, $url, 'products', false);
}


$product = new Product();
$product->name = [$default_lang => "Szklany Stylowy Klosz do Lamp Oprawka E27 Kwadrat"];
$product->link_rewrite = [$default_lang => "szklany-stylowy-klosz-do-lamp-oprawka-e27-kwadrat"];
$product->price = 15.00;
$product->quantity = 90;
$product->id_category = 18;
$product->id_category_default = 18;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/Akcesoria/szklany-stylowy-klosz-do-lamp-oprawka-e27-kwadrat.jpg";
$product->image_url = $url;
$product->description = "Kwadratowy szklany klosz oprawka E27
Klasyczny, a zarazem wyjątkowy klosz, który nada Twoim wnętrzom niepowtarzalnego klimatu. Szary kolor i kwadratowy kształt świetnie podkreślą surowy charakter nowoczesnego wystroju wnętrz, a pomieszczenia w klasycznym stylu delikatnie stonuje.
Gdzie najlepiej prezentuje się nowoczesny klosz?
Lampa udekorowana kwadratowymi kloszami może ozdabiać Twoją sypialnię, salon, kuchnię, jadalnię, a nawet biuro. Uniwersalna szarość znakomicie komponuje się z każdym innymi kolorem. Klosz wygląda świetnie z lampami wiszącymi i sufitowymi.
Jakie zalety posiada stylowy klosz?
Ogromnym atutem klosza jest wysoka jakość szkła, z jakiego został wykonany. Dzięki niemu możesz mieć pewność, że lampa posłuży Ci przez bardzo ługi czas. Oprawka dedykowana jest do lamp zasilanych żarówkami E27. Duża popularność tego rodzaju gwintu umożliwia szybkie znalezienie idealnej lampy pasującej do klosza i do aranżacji.";
$product->add();
$product->save();
$product->addToCategories($product->id_category);
StockAvailable::setQuantity((int)$product->id, 0, $product->quantity, Context::getContext()->shop->id);
$shops = Shop::getShops(true, null, true);
$image = new Image();
$image->id_product = $product->id;
$image->position = Image::getHighestPosition($product->id) + 1;
$image->cover = true;
if (($image->validateFields(false, true)) === true &&
        ($image->validateFieldsLang(false, true)) === true && $image->add())
{
   $image->associateTo($shops);
   MyAdminImportController::copyImg($product->id, $image->id, $url, 'products', false);
}


$product = new Product();
$product->name = [$default_lang => "Klosz ze Szkła Owalny E27 Chrom Metal Ramka"];
$product->link_rewrite = [$default_lang => "klosz-ze-szkla-owalny-e27-chrom-metal-ramka"];
$product->price = 15.00;
$product->quantity = 90;
$product->id_category = 18;
$product->id_category_default = 18;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/Akcesoria/klosz-ze-szkla-owalny-e27-chrom-metal-ramka.jpg";
$product->image_url = $url;
$product->description = "Oryginalny klosz ze szkła na oprawkę E27
Klasyczny i elegancki design klosza sprawi, że Twoje wnętrza będą zachwycać niebanalnym stylem! Efektowne wzory dodadzą elegancji zarówno klasycznym jak i nowoczesnym aranżacjom wnętrz.
Do jakich pomieszczeń pasuje szklany klosz?
Oprawa wygląda rewelacyjnie zestawiona z lampami sufitowymi, wiszącymi, kinkietami czy lampami stojącymi. Dzięki jasnej barwie klosza i srebrnej ramce, konstrukcja lampy może być chromowana, a także kolorowa. Kształt jak i zdobienia klosza czynią go odpowiednim zarówno do klasycznych wnętrz, którym doda wytworności oraz do nowoczesnych aranżacji, gdzie ożywi stonowany wystrój.
akie funkcje posiada oryginalny szklany klosz?
Klosz został wykonany z wysokiej jakości szkła, co zapewnia wytrzymałość i odporności oprawki na uszkodzenia. Klosz dedykowany jest do lamp, które zasilane są żarówkami E27. Jest to bardzo popularny typ gwintu źródeł światła, dzięki czemu bez problemu skomponujesz oświetlenie idealnie pod swoją aranżację wnętrz.";
$product->add();
$product->save();
$product->addToCategories($product->id_category);
StockAvailable::setQuantity((int)$product->id, 0, $product->quantity, Context::getContext()->shop->id);
$shops = Shop::getShops(true, null, true);
$image = new Image();
$image->id_product = $product->id;
$image->position = Image::getHighestPosition($product->id) + 1;
$image->cover = true;
if (($image->validateFields(false, true)) === true &&
        ($image->validateFieldsLang(false, true)) === true && $image->add())
{
   $image->associateTo($shops);
   MyAdminImportController::copyImg($product->id, $image->id, $url, 'products', false);
}


$product = new Product();
$product->name = [$default_lang => "Klasyczny Klosz Szklany Biały Lampy E27"];
$product->link_rewrite = [$default_lang => "klasyczny-klosz-szklany-bialy-lampy-e27"];
$product->price = 15.00;
$product->quantity = 90;
$product->id_category = 18;
$product->id_category_default = 18;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/Akcesoria/klasyczny-klosz-szklany-bialy-lampy-e27.jpg";
$product->image_url = $url;
$product->description = "Biały klosz ze szkła oprawka E27
Stylowy klosz, który pasuje do wielu typów aranżacji wnętrz. Ciekawy kształt i elegancka biel oddadzą charakter zarówno klasycznych jak i nowoczesnych pomieszczeń. Klosz pasuje do wszystkich lamp z gwintem E27.
W jakich pomieszczeniach szklany klosz będzie prezentował się najlepiej?
Oprawa oświetleniowa świetnie komponuje się z lampami sufitowymi, którym nadaje eleganckiego i wytwornego charakteru. Takie zestawienie sprawdzi się w roli oświetlenia do salonu, jadalni czy kuchni. Klosz zamontowany w lampie wiszącej pasować będzie również do nowoczesnych aranżacji wnętrz. Biały kolor oprawy znakomicie komponuje się zarówno z chromowaną jak i kolorową konstrukcją lampy.
Jakie zalety posiada biały klosz?
Oprawa wykonana została z najlepszej jakości szkła, co zapewnia radość z użytkowania klosza na bardzo długi czas. Oprawa pasuje do wszystkich rodzajów lamp z gwintem na żarówki E27. Jest to najpopularniejszy gwint, dzięki czemu z łatwością znajdziesz lampę idealnie pasującą do prezentowanego klosza.";
$product->add();
$product->save();
$product->addToCategories($product->id_category);
StockAvailable::setQuantity((int)$product->id, 0, $product->quantity, Context::getContext()->shop->id);
$shops = Shop::getShops(true, null, true);
$image = new Image();
$image->id_product = $product->id;
$image->position = Image::getHighestPosition($product->id) + 1;
$image->cover = true;
if (($image->validateFields(false, true)) === true &&
        ($image->validateFieldsLang(false, true)) === true && $image->add())
{
   $image->associateTo($shops);
   MyAdminImportController::copyImg($product->id, $image->id, $url, 'products', false);
}


$product = new Product();
$product->name = [$default_lang => "Klosz E27 Szklany we Wzory Stylowy do Lamp"];
$product->link_rewrite = [$default_lang => "klosz-e27-szklany-we-wzory-stylowy-do-lamp"];
$product->price = 15.00;
$product->quantity = 90;
$product->id_category = 18;
$product->id_category_default = 18;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/Akcesoria/klosz-e27-szklany-we-wzory-stylowy-do-lamp.jpg";
$product->image_url = $url;
$product->description = "Szklany klosz we wzory na oprawkę E27
Marzysz o stylowych i eleganckich wnętrzach? Odpowiednie oświetlenie pomoże Ci osiągnąć upragnioną aranżację. Prezentowany klosz w połączeniu z każdym rodzajem lampy da niesamowity efekt, który rewelacyjnie ozdobi Twoje wnętrza.
W jakich pomieszczeniach stylowy klosz prezentuje się najlepiej?
Oprawa ozdobi zarówno wnętrza urządzone w klasycznym jak i nowoczesnym stylu. Jasny kolor klosza znakomicie ożywi surowy design pomieszczeń, a oryginalne zdobienia w postaci pasków delikatnie stonują aranżację. Klosz wygląda rewelacyjnie zestawiony z lampami sufitowymi i wiszącymi. Z prezentowaną oprawką komponuje się każdy kolor konstrukcji lampy.
Jakie zalety posiada stylowy klosz?
Oprawa została wykonana z wysokiej jakości szkła, dzięki czemu masz pewność, że klosz będzie pełnił swoje funkcje przez długi czas. Oprawa dedykowana jest do lamp zasilanych żarówkami E27.";
$product->add();
$product->save();
$product->addToCategories($product->id_category);
StockAvailable::setQuantity((int)$product->id, 0, $product->quantity, Context::getContext()->shop->id);
$shops = Shop::getShops(true, null, true);
$image = new Image();
$image->id_product = $product->id;
$image->position = Image::getHighestPosition($product->id) + 1;
$image->cover = true;
if (($image->validateFields(false, true)) === true &&
        ($image->validateFieldsLang(false, true)) === true && $image->add())
{
   $image->associateTo($shops);
   MyAdminImportController::copyImg($product->id, $image->id, $url, 'products', false);
}


$product = new Product();
$product->name = [$default_lang => "Szklany Klosz do Lamp Designerski E27 Oprawka"];
$product->link_rewrite = [$default_lang => "szklany-klosz-do-lamp-designerski-e27-oprawka"];
$product->price = 17.00;
$product->quantity = 90;
$product->id_category = 18;
$product->id_category_default = 18;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/Akcesoria/szklany-klosz-do-lamp-designerski-e27-oprawka.jpg";
$product->image_url = $url;
$product->description = "Szklany biały klosz na oprawkę E27
Klasyczny i stylowy wygląd klosza rewelacyjnie udekoruje każde pomieszczenie! Biały kolor w połączeniu z nietypowym kształtem tworzą oprawę na żarówkę, która wspaniale komponuje się z klasycznymi oraz z nowoczesnymi aranżacjami wnętrz.
W jakich pomieszczeniach szklany klosz wygląda najlepiej?
Klosz zamontowany w eleganckiej lampie sufitowej pomoże Ci osiągnąć wytworną i stylową aranżację wnętrz. Natomiast oprawa zestawiona z lampą wiszącą utworzy duet idealny do pomieszczeń w nowoczesnym stylu. Biały kolor klosza pozwala na łączenie go z każdą barwą konstrukcji lampy.
Jakie funkcje posiada elegancki klosz?
Do produkcji oprawy wykorzystano najwyższej jakości szkło, dzięki czemu masz pewność, że klosz będzie dekorował Twoje wnętrza przez długi czas. Oprawa pasuje na każdą lampę z gwintem E27. Dzięki ogromnej popularności żarówek tego typu, z łatwością wybierzesz oświetlenie idealnie komponujące się z kloszem oraz ze stylem Twojego pomieszczenia.";
$product->add();
$product->save();
$product->addToCategories($product->id_category);
StockAvailable::setQuantity((int)$product->id, 0, $product->quantity, Context::getContext()->shop->id);
$shops = Shop::getShops(true, null, true);
$image = new Image();
$image->id_product = $product->id;
$image->position = Image::getHighestPosition($product->id) + 1;
$image->cover = true;
if (($image->validateFields(false, true)) === true &&
        ($image->validateFieldsLang(false, true)) === true && $image->add())
{
   $image->associateTo($shops);
   MyAdminImportController::copyImg($product->id, $image->id, $url, 'products', false);
}


$product = new Product();
$product->name = [$default_lang => "Klosz Szklany w Stylowe Paski Wzory Szkło E27 Lampy"];
$product->link_rewrite = [$default_lang => "klosz-szklany-w-stylowe-paski-wzory-szklo-e27-lampy"];
$product->price = 15.00;
$product->quantity = 90;
$product->id_category = 18;
$product->id_category_default = 18;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/Akcesoria/klosz-szklany-w-stylowe-paski-wzory-szklo-e27-lampy.jpg";
$product->image_url = $url;
$product->description = "Szklany klosz w stylowe szare wzory E27
Czy wiesz, że niewielka zmiana może całkowicie odmienić wygląd oraz charakter pomieszczenia? Zachęcamy Cię do eksperymentowania z wystrojem wnętrz. Warto wprowadzać do aranżacji drobne zmiany, ponieważ dadzą nam poczucie ciągłej nowości, świeżości mieszkania. Niewielką zmianą, która da spore efekty jest wymiana kloszy w swojej lampie. Szklany klosz w drobne, szare paski nada oświetleniu zupełnie innego charakteru. Twoje pomieszczenie zyska nowy, bardziej elegancki i designerski styl.
W jakich wnętrzach najlepiej wygląda szklany klosz w szare wzory?
Klosz o owalnym kształcie znakomicie prezentuje się w każdym rodzaju pomieszczenia – kuchni, eleganckim salonie, biurze, gabinecie czy sypialni. Jasne szkło komponuje się ze wszystkimi aranżacjami wnętrz.
Zastanawiasz się, do jakich lamp będzie pasować szklany klosz? Dedykujemy do lamp wiszących, lamp sufitowych, żyrandoli klasycznych jak i zwisów wiszących. Oprawka E27 pozwala na dopasowanie eleganckiego klosza do większości modeli lamp.
Jakie praktyczne funkcje posiada designerski szklany klosz E27?
Klosz posiada najpopularniejszą oprawkę E27, do której z łatwością dopasujesz wymarzoną lampę. Ponadto klosz został wykonany z wytrzymałego szkła, które pozwoli cieszyć się kloszem przez bardzo długi czas.";
$product->add();
$product->save();
$product->addToCategories($product->id_category);
StockAvailable::setQuantity((int)$product->id, 0, $product->quantity, Context::getContext()->shop->id);
$shops = Shop::getShops(true, null, true);
$image = new Image();
$image->id_product = $product->id;
$image->position = Image::getHighestPosition($product->id) + 1;
$image->cover = true;
if (($image->validateFields(false, true)) === true &&
        ($image->validateFieldsLang(false, true)) === true && $image->add())
{
   $image->associateTo($shops);
   MyAdminImportController::copyImg($product->id, $image->id, $url, 'products', false);
}


$product = new Product();
$product->name = [$default_lang => "Klosz Wzory Szklany Biały Kwiatki E27 do Lamp"];
$product->link_rewrite = [$default_lang => "klosz-wzory-szklany-bialy-kwiatki-e27-do-lamp"];
$product->price = 15.00;
$product->quantity = 90;
$product->id_category = 18;
$product->id_category_default = 18;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/Akcesoria/klosz-wzory-szklany-bialy-kwiatki-e27-do-lamp.jpg";
$product->image_url = $url;
$product->description = "Klosz szklany E27 wzór w kwiatki owal
Odmień wystrój swoich wnętrz w łatwy i tani sposób. Wymień klosze w lampie na nowe i przekonaj się, jak wiele może zdziałać mała zmiana. Prezentowany klosz posiada efektowne wzory w kształcie kwiatków, które dodadzą subtelności lampie oraz całej aranżacji wnętrz.
Do jakich pomieszczeń pasuje szklany klosz we wzór kwiatków?
Klosz może zostać dekoracją Twojego salonu, sypialni, kuchni lub pokoju dziecka czy nastolatka. Uniwersalny kolor klosza dopasowuje się do wszystkich wystrojów wnętrz i lamp.
Lampy wiszące, zwisy wiszące czy żyrandole klasyczne to jedne z najczęściej wybieranych rodzajów oświetleń. Jednak nie musisz ograniczać swojego wyboru jedynie do tych lamp. Wśród lamp sufitowych również znajdziesz idealnie pasujące oświetlenie do klosza we wzory.
Jakie praktyczne funkcje posiada klosz ze szkła do lamp E27?
Na uwagę zasługuje wysokiej jakości szkło klosza, które sprawia, że będzie dekorował Twoje mieszkanie przez bardzo długi czas. Klosz posiada popularną oprawkę E27, do której bez problemu dobierzesz lampę najbardziej odpowiadającą aranżacji wnętrz.";
$product->add();
$product->save();
$product->addToCategories($product->id_category);
StockAvailable::setQuantity((int)$product->id, 0, $product->quantity, Context::getContext()->shop->id);
$shops = Shop::getShops(true, null, true);
$image = new Image();
$image->id_product = $product->id;
$image->position = Image::getHighestPosition($product->id) + 1;
$image->cover = true;
if (($image->validateFields(false, true)) === true &&
        ($image->validateFieldsLang(false, true)) === true && $image->add())
{
   $image->associateTo($shops);
   MyAdminImportController::copyImg($product->id, $image->id, $url, 'products', false);
}


$product = new Product();
$product->name = [$default_lang => "Klosz we Wzory Szklany Owalny E27"];
$product->link_rewrite = [$default_lang => "klosz-we-wzory-szklany-owalny-e27"];
$product->price = 15.00;
$product->quantity = 90;
$product->id_category = 18;
$product->id_category_default = 18;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/Akcesoria/klosz-we-wzory-szklany-owalny-e27.jpg";
$product->image_url = $url;
$product->description = "Stylowy szklany klosz we wzory kółka do lamp E27
Chcesz dodać swoim wnętrzom elegancji? A może po prostu pragniesz nieco odmienić wystrój swojego mieszkania? Znamy sposób na odmianę aranżacji wnętrz bez remontów czy drogich dekoracji. Wystarczy, że zmienisz klosze lampy oświetlającej dane pomieszczenie. Metamorfoza wydaje się niewielka, jednak sam zobaczysz, jak duży efekt przyniesie.
Gdzie najlepiej prezentuje się klosz ze szkła we wzory?
Zaletą klosza jest to, że pasuje do wszystkich rodzajów i wystrojów pomieszczeń. Jasny kolor, wzór w kształcie kółek oraz owalny kształt wyglądają świetnie w każdym pokoju.
Nie wiesz, z jaką lampą połączyć elegancki klosz? Pasuje zarówno do żyrandoli klasycznych, lamp wiszących jak i lamp sufitowych do salonu. Jedynym warunkiem, jaki musi spełniać lampa, jest zasilanie żarówkami E27.
Jakie funkcjonalności posiada szklany elegancki klosz do lamp?
Szkło, z którego klosz został wykonany, jest wytrzymałe, co pozwoli Ci długo cieszyć się nową dekoracją wnętrz. Do eleganckiego klosza pasują żarówki o gwincie E27, które są dopasowane do większości rodzajów lamp.";
$product->add();
$product->save();
$product->addToCategories($product->id_category);
StockAvailable::setQuantity((int)$product->id, 0, $product->quantity, Context::getContext()->shop->id);
$shops = Shop::getShops(true, null, true);
$image = new Image();
$image->id_product = $product->id;
$image->position = Image::getHighestPosition($product->id) + 1;
$image->cover = true;
if (($image->validateFields(false, true)) === true &&
        ($image->validateFieldsLang(false, true)) === true && $image->add())
{
   $image->associateTo($shops);
   MyAdminImportController::copyImg($product->id, $image->id, $url, 'products', false);
}


$product = new Product();
$product->name = [$default_lang => "Szklany Klosz E27 w Szare Wzory do Lampy"];
$product->link_rewrite = [$default_lang => "szklany-klosz-e27-w-szare-wzory-do-lampy"];
$product->price = 15.00;
$product->quantity = 90;
$product->id_category = 18;
$product->id_category_default = 18;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/Akcesoria/szklany-klosz-e27-w-szare-wzory-do-lampy.jpg";
$product->image_url = $url;
$product->description = "Stylowy szklany klosz oprawka E27
Oryginalny i stylowy klosz, który doda Twoim wnętrzom mnóstwo elegancji. Nietypowy kształt oprawki przyciąga uwagę i prezentuje się rewelacyjnie na każdym rodzaju lampy. Ponadto jasny kolor szkła świetnie dopasowuje się do wielu stylów aranżacji wnętrz.
W jakich pomieszczeniach szklany klosz będzie wyglądał najlepiej?
Oprawka znakomicie prezentuje w klasycznych wnętrzach, którym chcesz dodać nieco wytworności, na przykład salon, jadalnia, kuchnia czy sypialnia. Efektowne zdobienia oraz niepowtarzalna forma klosza pasują zarówno do chromowanych żyrandoli, kolorowych lamp wiszących jak i lamp sufitowych.
Jakie zalety posiada elegancki klosz?
Oprawka została wykonana z wytrzymałego i odpornego na uszkodzenia szkła, dzięki czemu masz pewność, że klosz posłuży Ci przez długi czas. Oprawa pasuje do lamp zasilanych żarówkami typu E27. Dzięki temu popularnemu gwintowi z łatwością znajdziesz lampę, która będzie idealnie pasować do klosza jak i do Twojego wystroju pomieszczenia.";
$product->add();
$product->save();
$product->addToCategories($product->id_category);
StockAvailable::setQuantity((int)$product->id, 0, $product->quantity, Context::getContext()->shop->id);
$shops = Shop::getShops(true, null, true);
$image = new Image();
$image->id_product = $product->id;
$image->position = Image::getHighestPosition($product->id) + 1;
$image->cover = true;
if (($image->validateFields(false, true)) === true &&
        ($image->validateFieldsLang(false, true)) === true && $image->add())
{
   $image->associateTo($shops);
   MyAdminImportController::copyImg($product->id, $image->id, $url, 'products', false);
}


$product = new Product();
$product->name = [$default_lang => "Klosz ze Szkła Owalny E27 do Lampy Designerski"];
$product->link_rewrite = [$default_lang => "klosz-ze-szkla-owalny-e27-do-lampy-designerski"];
$product->price = 15.00;
$product->quantity = 90;
$product->id_category = 18;
$product->id_category_default = 18;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/Akcesoria/klosz-ze-szkla-owalny-e27-do-lampy-designerski.jpg";
$product->image_url = $url;
$product->description = "Szary owalny klosz ze szkła na oprawkę E27
Dodaj swoim wnętrzom elegancji i wyjątkowego klimatu! Prosty, lecz niezwykle stylowy klosz fantastycznie ozdobi zarówno pomieszczenia o klasycznym jak i nowoczesnym charakterze.
W jakich wnętrzach szklany klosz będzie prezentował się najlepiej?
Absolutnie we wszystkich! Szara barwa świetnie komponuje się ze wszystkimi innymi kolorami. Owalny klosz rewelacyjnie prezentuje się zastawiony zarówno z lampą wiszącą jak i sufitową, czy zwisem wiszącym.
Jakie praktyczne funkcje posiada nowoczesny klosz?
Oprawka została wykonana z wysokiej jakości szkła, co zapewnia trwałość i odporność na uszkodzenia. Klosz dedykowany jest do lamp, które zasilane są żarówkami typu E27. Jest to jeden z najpopularniejszych rodzajów gwintów, dlatego bez problemu skomponujesz idealne oświetlenie oddające charakter Twoich wnętrz.";
$product->add();
$product->save();
$product->addToCategories($product->id_category);
StockAvailable::setQuantity((int)$product->id, 0, $product->quantity, Context::getContext()->shop->id);
$shops = Shop::getShops(true, null, true);
$image = new Image();
$image->id_product = $product->id;
$image->position = Image::getHighestPosition($product->id) + 1;
$image->cover = true;
if (($image->validateFields(false, true)) === true &&
        ($image->validateFieldsLang(false, true)) === true && $image->add())
{
   $image->associateTo($shops);
   MyAdminImportController::copyImg($product->id, $image->id, $url, 'products', false);
}


$product = new Product();
$product->name = [$default_lang => "Klosz Metalowy Loft E27 Druciany Designerski"];
$product->link_rewrite = [$default_lang => "klosz-metalowy-loft-e27-druciany-designerski"];
$product->price = 19.90;
$product->quantity = 90;
$product->id_category = 18;
$product->id_category_default = 18;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/Akcesoria/klosz-metalowy-loft-e27-druciany-designerski.jpg";
$product->image_url = $url;
$product->description = "Metalowy klosz druciany loft E27 biały czarny
Przekonaj się, jak zmiana kloszy w lampach może odmienić wystrój całego pomieszczenia. Wymiana opraw na designerskie, zachwycające oryginalnym kształtem i minimalizmem nada wyjątkowości i niepowtarzalnego nastroju Twojemu mieszkaniu.
Gdzie umieścić nowoczesny klosz E27 z metalu?
Klosz pasuje do wszystkich rodzajów pomieszczeń – kuchni, salonu, sypialni czy jadalni. Uniwersalne kolory do wyboru – czarny i biały jeszcze bardziej ułatwiają dopasowanie klosza do lamp i wystroju wnętrza.
Minimalistyczny wygląd klosza pasuje do wnętrz uradzonych w stylu retro, industrialnym, nowoczesnym. W klasycznych aranżacjach będzie stylowo kontrastował z wystrojem.
Metalowy klosz świetnie prezentuje na każdym rodzaju oświetlenia. Lampy wiszące, lampy industrialne, czy zwisy wiszące – wszystkie z nich zestawione z prezentowanym kloszem dadzą oryginalne i designerskie połączenie.
Jakie praktyczne funkcje posiada nowoczesny klosz metalowy?
Oprawka E27 pozwala na dobór większości lamp do klosza. E27 jest najpopularniejszym gwintem pośród źródeł światła. Klosz został wykonany z trwałego metalu, który będzie częścią lamp i dekoracją Twojego mieszkania przez wiele lat. Do klosza dedukujemy żarówki dekoracyjne. Metalowe pręty odsłaniają źródło światła, dzięki czemu żarniki oraz ciepły blask żarówek zostaje pięknie wyeksponowany.";
$product->add();
$product->save();
$product->addToCategories($product->id_category);
StockAvailable::setQuantity((int)$product->id, 0, $product->quantity, Context::getContext()->shop->id);
$shops = Shop::getShops(true, null, true);
$image = new Image();
$image->id_product = $product->id;
$image->position = Image::getHighestPosition($product->id) + 1;
$image->cover = true;
if (($image->validateFields(false, true)) === true &&
        ($image->validateFieldsLang(false, true)) === true && $image->add())
{
   $image->associateTo($shops);
   MyAdminImportController::copyImg($product->id, $image->id, $url, 'products', false);
}


$product = new Product();
$product->name = [$default_lang => "Nowoczesny Klosz Industrialny Metalowy E27 do Lamp"];
$product->link_rewrite = [$default_lang => "nowoczesny-klosz-industrialny-metalowy-e27-do-lamp"];
$product->price = 19.90;
$product->quantity = 90;
$product->id_category = 18;
$product->id_category_default = 18;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/Akcesoria/nowoczesny-klosz-industrialny-metalowy-e27-do-lamp.jpg";
$product->image_url = $url;
$product->description = "Klosz do lamp metalowy E27 industrialny
Do odmiany wystroju wnętrz nie jest konieczny remont, kupowanie drogich mebli czy malowanie ścian. Proste zmiany również mogą dać duży efekt. Wymiana kloszy w lampach nie jest kosztowna ani czasochłonna, a potrafi zdziałać cuda w aranżacji mieszkania.
Gdzie najlepiej prezentuje się designerski metalowy klosz?
Oprawa do lamp pasuje do wszystkich rodzajów wnętrz – kuchni, jadalni, salonu, sypialni czy łazienki. Klosz wspaniale łączy się z pomieszczeniami urządzonymi w stylu loft, nowoczesnym oraz retro. Może również znakomicie przełamać klasyczną lub minimalistyczną aranżację wnętrz.
Klosz stworzony jest z metalowych prętów, które pięknie eksponują źródła światła. By nadać wnętrzom magii i nastrojowości, zasil lampy żarówkami dekoracyjnymi. Klosze rewelacyjnie uwydatnią ich ciepły blask.
Zastanawiasz się, z jakim rodzajem oświetlenia zestawiać metalowe klosze? Lampy industrialne, lampy sufitowe, lampy wiszące– to typy oświetlenia pasujące do designerskiego klosza.
Jakie funkcjonalności posiada metalowy klosz w stylu loft?
Klosz został wykonany z metalu odznaczającego się odpornością na uszkodzenia i wytrzymałością, przez co będziesz cieszyć się wyjątkową dekoracją mieszkania przez wiele lat. E27 jest jedną z najpopularniejszych oprawek, dzięki czemu dopasujesz do klosza bardzo dużo rodzajów lamp.";
$product->add();
$product->save();
$product->addToCategories($product->id_category);
StockAvailable::setQuantity((int)$product->id, 0, $product->quantity, Context::getContext()->shop->id);
$shops = Shop::getShops(true, null, true);
$image = new Image();
$image->id_product = $product->id;
$image->position = Image::getHighestPosition($product->id) + 1;
$image->cover = true;
if (($image->validateFields(false, true)) === true &&
        ($image->validateFieldsLang(false, true)) === true && $image->add())
{
   $image->associateTo($shops);
   MyAdminImportController::copyImg($product->id, $image->id, $url, 'products', false);
}


$product = new Product();
$product->name = [$default_lang => "Metalowy Klosz w Stylu Loft do Lamp E27"];
$product->link_rewrite = [$default_lang => "metalowy-klosz-w-stylu-loft-do-lamp-e27"];
$product->price = 19.90;
$product->quantity = 90;
$product->id_category = 18;
$product->id_category_default = 18;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/Akcesoria/metalowy-klosz-w-stylu-loft-do-lamp-e27.jpg";
$product->image_url = $url;
$product->description = "Metalowy klosz druciany loft E27
Chcesz odmienić wygląd swoich wnętrz bez przeprowadzenia remontu lub kupowania kosztownych ozdób? Zmień klosze oświetlenia na takie, które będą dekoracją samą w sobie! Owalny kształt, minimalistyczna forma oraz popularna oprawka E27 sprawiają, że z łatwością dopasujesz metalowy klosz do swojej lampy.
W jakich pomieszczeniach najlepiej prezentuje się designerski klosz z metalu?
Klosz nada wyjątkowego charakteru wnętrzom urządzonym w stylu loft, nowoczesnym lub minimalistycznym. Jeśli chcesz nieco przełamać klasyczną aranżację pomieszczenia, to designerski klosz również będzie świetnym wyborem.
Industrialny klosz możesz dopasować do lamp loft, lamp sufitowych nowoczesnych, zwisów wiszących. Oprawa świetnie wygląda zestawiona z każdym rodzajem oświetlenia.
Metalowe pręty tworzą klatkę o kolistym kształcie. W takim kloszu rewelacyjnie prezentują się żarówki dekoracyjne. Forma oprawy nie zasłania źródła światła, dzięki czemu eksponowane się stylowe żarniki nadające wnętrzom magicznego klimatu.
Jakie przydatne właściwości posiada stylowy klosz E27?
Klosz dedykowany jest do lamp zasilanych żarówkami E27, czyli najpopularniejszym gwintem wśród źródeł światła. Daje to możliwość dopasowania klosza do większości oświetlenia. Metal, z którego klosz został wykonany, jest wytrzymały i odporny na uszkodzenia. Pozwala to cieszyć się stylową dekoracją wnętrz przez wiele lat.";
$product->add();
$product->save();
$product->addToCategories($product->id_category);
StockAvailable::setQuantity((int)$product->id, 0, $product->quantity, Context::getContext()->shop->id);
$shops = Shop::getShops(true, null, true);
$image = new Image();
$image->id_product = $product->id;
$image->position = Image::getHighestPosition($product->id) + 1;
$image->cover = true;
if (($image->validateFields(false, true)) === true &&
        ($image->validateFieldsLang(false, true)) === true && $image->add())
{
   $image->associateTo($shops);
   MyAdminImportController::copyImg($product->id, $image->id, $url, 'products', false);
}


$product = new Product();
$product->name = [$default_lang => "Klosz Metalowy Drut E27 Loft"];
$product->link_rewrite = [$default_lang => "klosz-metalowy-drut-e27-loft"];
$product->price = 19.90;
$product->quantity = 90;
$product->id_category = 18;
$product->id_category_default = 18;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/Akcesoria/klosz-metalowy-drut-e27-loft.jpg";
$product->image_url = $url;
$product->description = "Klosz metalowy E27 dwa kolory styl loft
Klosz, który doda Twoim wnętrzom oryginalnego wyglądu. Idealnie wpisuje się w trendy stylu industrialnego, nowoczesnego oraz minimalistycznego. Wyjątkowy kształt metalowego klosza oraz forma uwidaczniająca żarówkę staną się designerską dekoracją Twojego mieszkania.
W jakich pomieszczeniach metalowy klosz będzie prezentował się najlepiej?
Minimalistyczny design oraz uniwersalne kolory klosza sprawiają, że komponuje się z każdym rodzajem wnętrz. Lampę z metalowym kloszem możesz umieścić w sypialni, salonie, kuchni czy pokoju młodzieżowym. Oprawa w każdym pomieszczeniu spełni rolę oryginalnej dekoracji.
Stylowy klosz E27 rewelacyjnie wygląda w duecie z lampami industrialnymi. Może również zostać częścią lamp wiszących nowoczesnych oraz zwisów wiszących pojedynczych dekoracyjnych.
Jakie praktyczne właściwości posiada metalowy klosz w stylu loft?
Klosz industrialny został wykonany z najwyższej jakości metalu, dzięki czemu będzie ozdabiał Twój dom przez bardzo długi czas. Został stworzony w dwóch pasujących do wszystkiego kolorach – czarnym i białym, przez co dobór barwy klosza do konstrukcji lampy jest niezwykle prosty. Metalowy klosz loft pasuje do lamp zasilanych żarówkami E27. Jest to najpopularniejszy gwint źródeł światła, dzięki czemu dopasujesz do klosza niemal każdą lampę.";
$product->add();
$product->save();
$product->addToCategories($product->id_category);
StockAvailable::setQuantity((int)$product->id, 0, $product->quantity, Context::getContext()->shop->id);
$shops = Shop::getShops(true, null, true);
$image = new Image();
$image->id_product = $product->id;
$image->position = Image::getHighestPosition($product->id) + 1;
$image->cover = true;
if (($image->validateFields(false, true)) === true &&
        ($image->validateFieldsLang(false, true)) === true && $image->add())
{
   $image->associateTo($shops);
   MyAdminImportController::copyImg($product->id, $image->id, $url, 'products', false);
}


$product = new Product();
$product->name = [$default_lang => "Klosz Metalowy Drut Nowoczesny Loft do Lamp E27"];
$product->link_rewrite = [$default_lang => "klosz-metalowy-drut-nowoczesny-loft-do-lamp-e27"];
$product->price = 19.90;
$product->quantity = 90;
$product->id_category = 18;
$product->id_category_default = 18;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/Akcesoria/klosz-metalowy-drut-nowoczesny-loft-do-lamp-e27.jpg";
$product->image_url = $url;
$product->description = "Designerski klosz z metalu w stylu loft retro E27
Chcesz zmienić coś w swoim otoczeniu? Masz już dość znanego widoku swojej przestrzeni? Potrzebujesz w życiu małej metamorfozy? Doskonale to rozumiemy i proponujemy Ci tanią oraz szybką w realizacji odmianę własnych czterech ścian. Na czym polega ta łatwa zmiana wystroju? Zastąp obecne klosze swoich lamp nowymi, designerskimi oprawkami.
W jakich pomieszczeniach metalowy klosz loft będzie prezentował się najlepiej?
Plusem stylowego klosza jest to, że pasuje do każdego wystroju wnętrz. Dzięki temu wprowadzisz pożądane zmiany wszędzie, gdzie tylko masz na to ochotę! Metalowy klosz E27 stanie się oryginalną ozdobą Twojej sypialni, jadalni, salonu czy kuchni. Klosz wygląda minimalistycznie i designersko, przez co znakomicie komponuje się z wnętrzami loft, nowoczesnymi oraz świetnie przełamuje styl retro.
Klosz został stworzony z metalowych prętów w formie klatki o niezwykłym kształcie. Dzięki temu możesz ozdobić klosz żarówką dekoracyjną. Ciepła barwa tych źródeł światła doda wyjątkowego klimatu Twoim wnętrzom. Za sprawą klosza nie tylko zmienisz wystrój pomieszczenia. Ale sprawisz, że będzie panował w nim zupełnie nowy nastrój.
Jakie praktyczne funkcje posiada klosz metalowy do lamp E27?
Metalowa konstrukcja czyni klosz odpornym na uszkodzenia, dzięki czemu będzie ozdabiał Twoje wnętrza przez długi czas. Klosz dostępny jest w kolorze czarnym i białym, co jeszcze bardziej uprości dopasowanie barwy do lampy i wystroju wnętrza. Klosz pasuje do lamp E27. Jest to jedna z najbardziej popularnych oprawek, dlatego bez problemu znajdziesz idealnie pasujące oświetlenie.";
$product->add();
$product->save();
$product->addToCategories($product->id_category);
StockAvailable::setQuantity((int)$product->id, 0, $product->quantity, Context::getContext()->shop->id);
$shops = Shop::getShops(true, null, true);
$image = new Image();
$image->id_product = $product->id;
$image->position = Image::getHighestPosition($product->id) + 1;
$image->cover = true;
if (($image->validateFields(false, true)) === true &&
        ($image->validateFieldsLang(false, true)) === true && $image->add())
{
   $image->associateTo($shops);
   MyAdminImportController::copyImg($product->id, $image->id, $url, 'products', false);
}



 ?>