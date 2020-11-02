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
$product->name = [$default_lang => "Lampa Wisząca Loft Miedź Chrom"];
$product->link_rewrite = [$default_lang => "lampa-wiszaca-loft-miedz-chrom"];
$product->price = 129.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/lampa-wiszaca-loft-miedz-chrom.jpg";
$product->image_url = $url;
$product->description = "Lampa wisząca 4-płomienna Edison miedź chrom
Nowoczesna konstrukcja lampy wiszącej sprawi, że Twoje wnętrza będą zachwycać oryginalnym i pięknym stylem. Wybierz kolor lampy najbardziej oddający charakter aranżacji i ciesz się swoimi zjawiskowym wystrojem wnętrz.
Gdzie najlepiej zawiesić 4-punktową lampę?
Oświetlenie sufitowe fantastycznie prezentuje się zarówno w salonie, sypialni, biurze jak i jadalni czy kuchni. Prosta, choć awangardowa konstrukcja świetnie dopasowuje się do każdego rodzaju pomieszczenia. Lampa wisząca nie posiada kloszy, dzięki czemu Twoje wnętrza będą doświetlone w każdym calu, a jeśli zdecydujesz się na umieszczenie żarówek dekoracyjnych – lampa ta będzie wspaniałą ozdobą pomieszczenia.
Jakie zalety posiada nowoczesna lampa?
Oświetlenie wykonane jest z metalu malowanego proszkowo, przez co lampa jest niezwykle wytrzymała i odporna na wszelkie uszkodzenia. Ponadto chromowe lub miedziane dodatki lampy wiszącej czynią ją zjawiskową i stylową. Prezentowane oświetlenie posiada opcję podłączenia pod podwójny przełącznik, dzięki czemu jest funkcjonalne i praktyczne. Lampa może być zasilana wieloma rodzajami światła E-27, żarówkami LED, energooszczędnymi czy zwykłymi.";
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
$product->name = [$default_lang => "Lampa Sufitowa Plafon Abażury Diament"];
$product->link_rewrite = [$default_lang => "lampa-sufitowa-plafon-abazury-diament"];
$product->price = 99.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/lampa-sufitowa-plafon-abazury-diament.jpg";
$product->image_url = $url;
$product->description = "Lampa sufitowa plafon żyrandol kolorowe abażury
Lampa, która wspaniale prezentuje się zarówno w pomieszczeniach klasycznych jak i nowoczesnych. Plafon posiada mnóstwo kolorów abażurów i konstrukcji do wyboru, co pozwala na skomponowanie oświetlenia idealnie pasującego do stylu Twojego wnętrza.
W jakich pomieszczeniach lampa sufitowa z trzema abażurami wygląda najlepiej?
Największą zaletą lampy z abażurami jest to, że pasuje ona do każdego pomieszczenia, niezależnie od jego stylu i przeznaczenia. Lampa dodaje przytulności sypialni, elegancji jadalni i salonowi, a do kuchni wprowadzi odrobinę nowoczesności. Możesz samodzielnie skomponować lampę sufitową. Plafon posiada trzy kolory konstrukcji i sześć kolorów abażurów do wyboru. Możesz dowolnie łączyć ze sobą kolory tworząc lampę, która perfekcyjnie odda charakter Twoich wnętrz.
Jakie zalety posiada lampa sufitowa z abażurami?
Klosze lampy posiadają możliwość regulacji pod dowolnym kątem i kierunkiem. Jest to niezwykle wygodne i funkcjonalne rozwiązanie. Abażury do lampy wykonane są z wysokiej jakości materiału. Konstrukcja oświetlenia jest trwała i odporna na uszkodzenia. Do lampy sufitowej pasują popularne żarówki E27.";
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
$product->name = [$default_lang => "Lampa Wisząca Sufitowa Edison Loft"];
$product->link_rewrite = [$default_lang => "lampa-wiszaca-sufitowa-edison-loft"];
$product->price = 109.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/lampa-5-plomienna-edison-serii-14.jpg";
$product->image_url = $url;
$product->description = "Lampa 5-płomienna Edison Loft
Uwielbiasz nowoczesny i niepowtarzalny styl? Mamy dla Ciebie lampę sufitową, która nada Twoim designerskim wnętrzom wyjątkowego klimatu. Efektowna spiralka z pewnością przyciągnie wzrok, a mnóstwo kolorów lampy do wyboru pozwoli wybrać ten, idealnie oddający charakter pomieszczenia.
Gdzie zawiesić prezentowaną lampę wiszącą?
Żyrandol będzie prezentował się rewelacyjnie w każdym pomieszczeniu! Kuchnia, jadalnia, salon, sypialnia czy biuro – dzięki prostemu i nowoczesnemu designowi, lampa sufitowa dopasowuje się do każdego stylu wnętrza.
Czy 5-płomienna lampa jest funkcjonalna?
Oczywiście, że tak! Oświetlenie posiada aż 5 źródeł światła, dzięki czemu lampa świetnie rozświetli nawet bardzo duże pomieszczenia. Żyrandol stworzony jest w wielu wersjach kolorystycznych, aby jak najlepiej dopasować lampę do charakteru swoich wnętrz. Oświetlenie sufitowe może być zasilane funkcjonalnymi żarówkami LED E-27 jak i dekoracyjnymi.";
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
$product->name = [$default_lang => "Lampa Sufitowa Plafon Kwadrat Stylowa Aluminiowa"];
$product->link_rewrite = [$default_lang => "lampa-sufitowa-plafon-kwadrat-stylowa-aluminiowa"];
$product->price = 50.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/lampa-kinkiet-metalowa-stylowa.jpg";
$product->image_url = $url;
$product->description = "Metalowy plafon lampa sufitowa kwadratowa
Minimalizm lampy sufitowej wspaniale udekoruje Twoje wnętrza. Designerski wygląd nada wyjątkowego charakteru wielu rodzajom pomieszczeń.
W jakich pomieszczeniach najlepiej prezentuje się stylowy plafon?
Nowoczesny salon, sypialnia, kuchnia, biuro czy jadalnia – nasza lampa sufitowa świetnie komponuje się we wszystkich eleganckich wnętrzach. Do plafonu możesz dobrać kinkiet wyglądający identycznie, co prezentowana lampa sufitowa. Dzięki takiemu połączeniu lamp uzyskach jednolity i stylowy wystrój swojego pomieszczenia.
Jakie praktyczne cechy posiada lampa sufitowa?
Metal, z którego zostało wykonane oświetlenie sufitowe, jest trwały i odporny na uszkodzenia, dzięki czemu plafon będzie pełnił swoją funkcję przez długi czas. Lampa stworzona jest w trzech klasycznych kolorach, aby idealnie komponowała się ze wszystkimi innymi barwami. Plafon zasilany jest żarówkami LED GU10.";
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
$product->name = [$default_lang => "Lampa Nowoczesna Wisząca Kule Ball"];
$product->link_rewrite = [$default_lang => "lampa-nowoczesna-wiszaca-kule-ball"];
$product->price = 159.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/lampa-nowoczesna-wiszaca-3-plomienna-kule-ball.jpg";
$product->image_url = $url;
$product->description = "Lampa wisząca kule 3 źródła światła
Elegancka ozdoba w formie lampy wiszącej, która doda Twoim wnętrzom nowoczesności i wyjątkowości.
Do jakich pomieszczeń pasuje prezentowana lampa?
Lampa może pełnić wiele funkcji – od oświetlenia do kuchni, po sypialnię, salon czy biuro. Stylowe kule wyglądają rewelacyjnie w każdym pomieszczeniu, niezależnie od jego przeznaczenia. Ponadto prosta konstrukcja oświetlenia wprowadzi do aranżacji odrobinę minimalistycznego stylu.
Jakie zalety posiada 3-punktowa lampa wisząca?
Oświetlenie zostało wykonane z najwyższej jakości tworzyw, dzięki czemu lampa będzie pełniła swoje funkcje przez wiele lat. Dużym atutem lampy jest możliwość regulowania wysokości, co pozwala na dokładne dopasowanie oświetlenia do rozmiaru pomieszczenia. Ponadto lampa może być podłączona pod podwójny przełącznik. Źródła światła, jakimi lampa jest zasilana to żarówki ledowe, zwykłe bądź energooszczędne o gwincie E-27.";
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
$product->name = [$default_lang => "Lampa Wisząca Regulowana Abażur Diament LED"];
$product->link_rewrite = [$default_lang => "lampa-wiszaca-regulowana-abazur-diament-led"];
$product->price = 129.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/lampa-wiszaca-regulowana-abazur-diament-led.jpg";
$product->image_url = $url;
$product->description = "Lampa wisząca 3-płomienna regulowana abażury diament
Niesamowity design lampy wiszącej stanie się wyjątkową dekoracją Twoich wnętrz. Lampa rewelacyjnie prezentuje się zarówno w klasycznych jak i nowoczesnych aranżacjach.
Gdzie najlepiej zawiesić oryginalną lampę?
Lampa świetnie sprawdzi się w roli oświetlenia do sypialni, salonu, kuchni, jadalni czy pokoju młodzieżowego. Sześć kolorów abażura i trzy kolory konstrukcji umożliwiają stworzenie wielu kombinacji kolorystycznych. Samodzielnie skomponujesz lampę idealnie oddającą charakter Twoich wnętrz.
Jakie zalety posiada lampa wisząca?
Lampa posiada regulację wysokości. Możesz zawiesić klosze lampy na różnych wysokościach. Konstrukcja oświetlenia wykonana jest z metalu charakteryzującego się trwałością i odpornością na uszkodzenia. Wysokiej jakości materiał do abażurów zapewnia nienaganny wygląd kloszy na bardzo długi czas. Do zasilania lampy wiszącej pasują żarówki o tradycyjnym gwincie E27.";
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
$product->name = [$default_lang => "Kolorowa Lampa Wisząca Edison Loft"];
$product->link_rewrite = [$default_lang => "kolorowa-lampa-wiszaca-edison-loft"];
$product->price = 95.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/lampa-wiszaca-edison-loft-3-plomienna-rozne-kolory.jpg";
$product->image_url = $url;
$product->description = "Metalowa lampa wisząca 3 – płomienna różne kolory
Oryginalny design lampy sufitowej wprowadzi do Twoich wnętrz mnóstwo nowoczesności. Dzięki wielu kolorom do wyboru stworzysz własną, niepowtarzalną aranżację.
Do jakich wnętrz pasuje prezentowana lampa?
Oświetlenie będzie idealną lampą do kuchni, salonu, pokoju czy biura. Żyrandol nie posiada kloszy, dzięki czemu jest wyjątkowy i doda każdemu wnętrzu wiele uroku. Żywe kolory lampy wiszącej doskonale ożywią jasne i klasyczne pomieszczenia. Natomiast żyrandol w bardziej stonowanych barwach doda elegancji Twoim wnętrzom.
Jakie zalety posiada nowoczesna lampa?
Żyrandol oprócz niepowtarzalnego wyglądu, posiada również wiele innych atutów. Konstrukcja lampy sufitowej wykonana jest z metalu, co daje gwarancję wytrzymałości i trwałości oświetlenia. Lampa posiada także możliwość podłączenia pod podwójny przełącznik. Z racji tego, że lampa nie posiada kloszy, można zasilać ją wieloma rodzajami żarówek, na przykład ledowymi lub energooszczędnymi.";
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
$product->name = [$default_lang => "Nowoczesna Lampa Sufitowa Loft Czarna Biała"];
$product->link_rewrite = [$default_lang => "nowoczesna-lampa-sufitowa-loft-czarna-biala"];
$product->price = 135.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/nowoczesna-lampa-sufitowa-loft-czarna-biala.jpg";
$product->image_url = $url;
$product->description = "Lampa wisząca 3-płomienna loft różne klosze
Niesamowity design lampy sufitowej stanie się piękną i zachwycającą dekoracją Twoich wnętrz. Ciekawy kształt konstrukcji połączony z kloszami w stylu loft dają oświetlenie, które pasuje do nowoczesnych, industrialnych oraz aranżacji retro.
W jakich pomieszczeniach 3-płomienna lampa sufitowa prezentuje się najlepiej?
Żyrandol pasuje do salonu, sypialni, jadalni czy kuchni. Lampa udekoruje każde wnętrza o minimalistycznym, nowoczesnym czy industrialnym stylu. Oświetlenie stworzone jest w dwóch klasycznych kolorach – czarnym i białym, aby idealnie komponowało się z każdą aranżacją wnętrz. Ponadto lampa posiada aż pięć wzorów kloszy do wyboru, dzięki czemu możesz stworzyć własne, unikatowe oświetlenie, które najlepiej odda charakter Twoich wnętrz.
Jakie zalety posiada prezentowana lampa sufitowa loft?
Atutem lampy wiszącej jest wytrzymały metal wykorzystany do produkcji, ponieważ zapewnia on radość z użytkowania oświetlenia na długi czas. Żyrandol posiada możliwość podłączenie pod podwójny przełącznik, dzięki czemu możesz zadecydować, ile płomieni lampy będziesz używać. Oświetlenia może być zasilane żarówkami dekoracyjnymi, ledowymi, zwykłymi lub energooszczędnymi o gwincie E27.";
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
$product->name = [$default_lang => "Lampa Nowoczesna Plafon Sufitowa BALL Spot Chrom"];
$product->link_rewrite = [$default_lang => "lampa-nowoczesna-plafon-sufitowa-ball-spot-chrom"];
$product->price = 99.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/lampa-nowoczesna-plafon-sufitowa-oryginalna-ball-spot-chrom.jpg";
$product->image_url = $url;
$product->description = "Lampa wisząca plafon 2 źródła światła chrom
Dodaj swoim wnętrzom elegancji i wyjątkowego klimatu! Lampa z chromowanymi kloszami będzie nie tylko niezwykłą ozdobą Twojej aranżacji, ale również funkcjonalnym i praktycznym oświetleniem.
W jakich pomieszczeń najlepiej prezentuje się elegancki plafon?
Lampa świetnie nada się do takich wnętrz jak biura, salon, sypialnia, czy kuchnia. Plafon rewelacyjnie komponuje się z nowoczesnymi aranżacjami o minimalistycznym stylu. Lampa została stworzona w dwóch ponadczasowych kolorach – czarnym i białym – aby idealnie pasowała do każdego wystroju Twoich wnętrz.
Jakie zalety posiada 2-płomienna lampa sufitowa?
Lampa posiada możliwość regulacji kąta padania światła, dzięki czemu możesz skierować klosze w dowolnym kierunku. Plafon wykonany jest z metalu, co zapewni Ci wytrzymałość i niezawodność oświetlenia. Lampa może być podłączona pod podwójny przełącznik, co również jest niezwykle praktycznym rozwiązaniem. Plafon zasilany jest żarówkami LED GU10.";
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
$product->name = [$default_lang => "Lampa Wisząca Nowoczesna z Abażurem Materiał"];
$product->link_rewrite = [$default_lang => "lampa-wiszaca-nowoczesna-z-abazurem-material"];
$product->price = 199.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/lampa-wiszaca-nowoczesna-z-abazurem-material.jpg";
$product->image_url = $url;
$product->description = "Lampa wisząca 3-płomienna materiałowe abażury
Klasyczny design lampy wiszącej sprawi, że Twoje wnętrza będą zachwycać wyjątkowym i przytulnym klimatem. Prosta konstrukcja w połączeniu z kolorowymi abażurami dają eleganckie i stylowe oświetlenie, które znajdzie zastosowanie w wielu pomieszczeniach.
Gdzie najlepiej prezentuje się nowoczesna lampa wisząca?
Oświetlenie to może stać się ozdobą mnóstwa pomieszczeń. Lampa do salonu, kuchni, sypialni czy jadalni – to tylko niektóre z wnętrz, w których oświetlenie będzie prezentować się niezwykle stylowo. Abażury dostępne są w wielu kolorach i możesz je dowolnie ze sobą zestawiać, dzięki czemu lampa idealnie odda charakter Twojego pomieszczenia. Klasyczne barwy abażurów lampy wiszącej dodadzą wnętrzom elegancji.
Jakie zalety posiada stylowa 3-punktowa lampa?
Oświetlenie posiada możliwość regulacji wysokości, dzięki czemu idealnie dopasujesz lampę do swoich potrzeb. Konstrukcja oświetlenia została wykonana z metalu, przez co lampa jest solidna i odporna na uszkodzenia. Natomiast abażury lampy wiszącej są materiałowe. Lampa może być zasilana różnymi rodzajami żarówek, w tym energooszczędnymi, zwykłymi lub ledowymi E-27.";
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
$product->name = [$default_lang => "Lampa Sufitowa Plafon Loft Retro"];
$product->link_rewrite = [$default_lang => "lampa-sufitowa-plafon-loft-retro"];
$product->price = 50.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/lampa-sufitowa-plafon-loft-retro.jpg";
$product->image_url = $url;
$product->description = "Lampa sufitowa plafon w stylu retro
Wyjątkowy design plafonu nada Twoim wnętrzom niepowtarzalnego charakteru. Klosz odsłaniający żarówkę to nowoczesne rozwiązanie, dzięki któremu pomieszczenie jest w pełni oświetlone, a także pełni funkcję niezwykłej, przyciągającej uwagę ozdoby.
W jakich wnętrzach najlepiej prezentuje się nowoczesny plafon?
Minimalistyczny styl lampy sufitowej pozwala na dopasowanie jej do wielu pomieszczeń – kuchnia, jadalnia, salon, sypialnia czy biuro – plafon będzie wspaniale komponować się z każdą aranżacją. Lampa dostępna jest w trzech klasycznych kolorach, dzięki czemu idealnie wkomponujesz plafon do stylu pomieszczenia.
Jakie zalety posiada lampa sufitowa?
Plafon wykonany jest z solidnego metalu, dzięki czemu masz gwarancję niezawodności i wytrzymałości oświetlenia. Plafon może być zasilany wieloma rodzajami żarówek – ledowymi, E-27, energooszczędnymi lub zwykłymi.";
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
$product->name = [$default_lang => "Lampa Sufitowa Chromowana Plafon Kule"];
$product->link_rewrite = [$default_lang => "lampa-sufitowa-chromowana-plafon-kule"];
$product->price = 179.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/lampa-wiszaca-kule-01.jpg";
$product->image_url = $url;
$product->description = "Lampa wisząca kule plafon 2 – płomienna sufitowa na belce
Lampa sufitowa, która wprowadzi oryginalny styl i design do Twoich wnętrz. Chromowana konstrukcja wspaniale komponuje się z nowoczesnym wystrojem wnętrz, a także świetnie ożywia klasyczne aranżacje.
Gdzie najlepiej prezentuje się oryginalna lampa?
Plafon świetnie sprawdzi się jako oświetlenie pokojowe, biurowe czy kuchenne. Metaliczny połysk sprawi, że nasza lampa wisząca będzie świetnie prezentować się w każdej aranżacji – od klasycznych po nowoczesne. Plafon rewelacyjnie komponuje się z każdym kolorem pomieszczeń.
Jakie zalety posiada prezentowane oświetlenie?
Dwa źródła światła to bezwzględny atut naszej sufitowej lampy, ponieważ z powodzeniem rozświetli nawet duże pomieszczenie. Dodatkowo lampa może być zasilana żarówkami LED, zwykłymi lub energooszczędnymi. Plafon może zostać podłączony pod podwójny przełącznik, co czyni go niezwykle funkcjonalnym.";
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
$product->name = [$default_lang => "Nowoczesna Lampa Sufitowa Edison Loft Miedź"];
$product->link_rewrite = [$default_lang => "nowoczesna-lampa-sufitowa-edison-loft-miedz"];
$product->price = 129.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/nowoczesna-lampa-3-plomienna-edison-loft-miedz.jpg";
$product->image_url = $url;
$product->description = "Lampa wisząca 3-płomienna Edison Miedź
Oryginalny design lampy sufitowej sprawi, że Twoje wnętrza nabiorą wyjątkowego i niepowtarzalnego klimatu.
Gdzie zawiesić nowoczesną lampę?
Żyrandol będzie prezentował się wyjątkowo w każdym pomieszczeniu – salon, jadalnia, kuchnia czy pokój – dzięki minimalistycznemu stylowi i miedzianej barwie lampa znakomicie dopasuje się do każdego designu. Efektowna konstrukcja lampy wiszącej z pewnością przyciągnie wzrok i wspaniale urozmaici Twoją aranżację.
Jakie zalety posiada lampa sufitowa?
Żyrandol nie posiada kloszy, co czyni go nie tylko piękną ozdobą, ale również doskonale oświetlającą lampą. Oświetlenie sufitowe wykonane jest z wytrzymałych i solidnych tworzyw, co pozwoli Ci cieszyć się lampą przez długi czas. Żyrandol może być zasilany wieloma źródłami światła, w tym żarówkami ledowymi i dekoracyjnymi.";
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
$product->name = [$default_lang => "Lampa Plafon Sufitowa Elegancka"];
$product->link_rewrite = [$default_lang => "lampa-plafon-sufitowa-elegancka"];
$product->price = 69.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/lampa-plafon-sufitowa-2-plomienna-glass.jpg";
$product->image_url = $url;
$product->description = "Lampa wisząca 2-punktowa plafon szklane klosze
Ponadczasowa i elegancka lampa sufitowa, która świetnie komponuje się ze wszystkimi stylami wnętrz. Wybierz kolor konstrukcji najbardziej pasujący do Twojej aranżacji i ciesz się zachwycającym designem swoich pomieszczeń!
Gdzie najlepiej zawiesić stylowy plafon?
Lampa wkomponuje się w wiele pomieszczeń – salon, sypialnia, jadalnia czy biuro – klasyczna konstrukcja połączona ze szklanymi kloszami doda elegancji wnętrzom, zaprojektowanym w każdym stylu. Ciemne kolory żyrandola znakomicie ozdobią takie pomieszczenia jak salon czy jadalnia. Natomiast jaśniejsze barwy świetnie rozświetlą kuchnię, sypialnię czy pokój gościnny.
Czy lampa posiada praktyczne funkcje?
Naturalnie, że tak. Oświetlenie sufitowe posiada klosze osadzone na przegubach, co pozwala na regulację światła pod dowolnym kątem i kierunkiem. Dzięki temu rozwiązaniu, możesz skierować klosze plafony w najbardziej wygodny dla siebie sposób. Żyrandol został wykonany z trwałych tworzyw, przez co będzie pełnił swoją rolę przez bardzo długi czas. Lampa sufitowa może być zasilana wieloma rodzajami światła – żarówkami energooszczędnymi, ledowymi czy zwykłymi z gwintem E-27.";
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
$product->name = [$default_lang => "Elegancka Lampa Sufitowa Żyrandol Chrom"];
$product->link_rewrite = [$default_lang => "elegancka-lampa-sufitowa-zyrandol-chrom"];
$product->price = 189.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/lampa-wiszaca-chrom-06-zyrandol.jpg";
$product->image_url = $url;
$product->description = "5 – płomienna lampa wisząca sufitowa plafon z metalu chrom
Lampa sufitowa, która wprowadzi mnóstwo nowoczesności i oryginalności do Twoich wnętrz. Wyjątkowy kształt kloszy jak i faliste łączenia sprawią, że w Twoim domu zagości nowy, niepowtarzalny styl.
Do jakich pomieszczeń pasuje żyrandol?
Prezentowany plafon będzie wspaniale wyglądał w salonie, jadalni, pokoju czy sypialni. Metaliczny kolor lampy wiszącej skomponuje się z każdym stylem – od nowoczesnego po klasyczny.
Jakie zalety posiada ta awangardowa lampa?
Żyrandol wykonany został z metalu w powłoce chromowej i szkła, dzięki czemu jest niezwykle trwały i odporny na uszkodzenia. Oświetlenie posiada miejsce na aż pięć źródeł zasilania, przez co znakomicie rozświetli nawet bardzo duże pomieszczenia. Możliwość podłączenia pod podwójny przełącznik pozwala na decydowanie o tym, ile żarówek chcesz używać w danym momencie. Dodatkowo nasz nowoczesny plafon posiada wiele opcji źródeł zasilania, między innymi oświetlenie LED.";
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
$product->name = [$default_lang => "Lampa Sufitowa Plafon Ball Chrom"];
$product->link_rewrite = [$default_lang => "lampa-sufitowa-plafon-ball-chrom"];
$product->price = 259.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/lampa-sufitowa-plafon-ball-chrom.jpg";
$product->image_url = $url;
$product->description = "Lampa sufitowa metalowa plafon 3 kule
Niezwykły design lampy przyciąga uwagę i wspaniale ozdabia każde pomieszczenie. Metaliczny kolor oświetlenia sufitowego będzie świetnie współgrał ze wszystkimi stylami wnętrz.
Do jakich pomieszczeń pasuje dana lampa sufitowa?
Plafon rewelacyjnie sprawdzi się w pokoju, biurze, sypialni czy nawet kuchni i jadalni. Dzięki swojej stonowanej barwie i klasycznym kloszom w kształcie kul, oświetlenie wpasuje się w każdą aranżację.
Z jakich materiałów została wykonana nasza nowoczesna lampa?
Prezentowany plafon został w całości stworzony z bardzo trwałego metalu. Możliwość podłączenia pod podwójny przełącznik to niewątpliwa zaleta naszej lampy sufitowej – możesz sam decydować ile żarówek oświetlenia ma być wykorzystywanych. Dodatkowo plafon posiada wiele opcji zasilania w tym oświetlenie LED.";
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
$product->name = [$default_lang => "Lampa Wisząca Metalowa Wiele Kolorów"];
$product->link_rewrite = [$default_lang => "lampa-wiszaca-metalowa-wiele-kolorow"];
$product->price = 169.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/lampa-wiszaca-metalowa-oprawa-02.jpg";
$product->image_url = $url;
$product->description = "Stylowa lampa wisząca metalowa oprawa
Unikalny design, wiele dostępnych kolorów oraz miejsce na 3 źródła światła sprawiają, że nasza elegancka lampa wisząca nada pomieszczeniu wyjątkowy klimat.
Do jakich wnętrz pasuje nasza lampa sufitowa?
Oświetlenie to idealnie nada się do kuchni, jadalni, a nawet pokoju czy biura. Dzięki jednolitym, ale oryginalnym kolorom lampa znakomicie sprawdzi się w wielu aranżacjach – od klasycznych po nowoczesne. Wyrazista fuksja świetnie będzie komponować się z bielą, czernią, szarością, a także turkusem. Klasyczna biel i czerń idealnie wpasuje się w każdy inny kolor.
Z czego zostało stworzone prezentowane oświetlenie?
Lampa jest w całości wykonana z wysokiej jakości metalu. Belka, do której przymocowane są klosze, nada pomieszczeniu dodatkowego uroku. Dzięki trzem źródłom światła lampa świetnie oświetli pomieszczenie.";
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
$product->name = [$default_lang => "Elegancka Lampa Sufitowa Żyrandol Chrom"];
$product->link_rewrite = [$default_lang => "elegancka-lampa-sufitowa-zyrandol-chrom"];
$product->price = 159.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/lampa-wiszaca-chrom-06.jpg";
$product->image_url = $url;
$product->description = "Elegancka lampa wisząca 4 – płomienna plafon
Żyrandol, który wprowadzi mnóstwo nowoczesności i wyjątkowego stylu do Twoich pomieszczeń. Metaliczny kolor w połączeniu ze szklanymi kloszami tworzą lampę sufitową o ponadczasowym designie!
Do jakich wnętrz pasuje nasza oryginalna lampa?
Salon, pokój, sypialnia czy jadalnia – oświetlenie to z powodzeniem ozdobi każde pomieszczenie. Faliste łączenia nadają lampie niepowtarzalnego wyglądu, a dzięki jednolitej barwie oświetlenie to świetnie wpasowuje się do każdego stylu danego wnętrza.
Z jakich tworzyw została wykonana nowoczesna lampa?
Konstrukcja lampy jest metalowa, a klosze zostały stworzone z wytrzymałego szkła. Lampa jest niezwykle funkcjonalna, dzięki możliwości podłączenia jej pod podwójny przełącznik. Oświetlenie posiada wiele opcji zasilania, na przykład żarówki energooszczędne lub ledowe.";
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
$product->name = [$default_lang => "Lampa Wisząca Industrialna Edison Chrom"];
$product->link_rewrite = [$default_lang => "lampa-wiszaca-industrialna-edison-chrom"];
$product->price = 139.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/lampa-wiszaca-edison-chrom.jpg";
$product->image_url = $url;
$product->description = "Lampa wisząca metalowa Edison 5 źródeł zasilania
Oryginalna i nowoczesna lampa, która wprowadzi wyjątkowego charakteru do Twoich wnętrz. Metaliczny kolor oraz spiralne łączenia lampy sufitowej dają niesamowity efekt!
W jakich pomieszczeniach można zawiesić żyrandol?
Dzięki swojemu oryginalnemu wyglądowi, lampa może pełnić funkcję oświetlenia kuchennego, pokojowego czy nawet biurowego. Żyrandol posiada aż pięć źródeł zasilania, dzięki czemu znakomicie rozświetli pomieszczenia nawet o dużych rozmiarach.
Jakie zalety posiada prezentowana 5 – płomienna lampa?
Do produkcji żyrandola został wykorzystany trwały i wytrzymały metal. Lampa posiada opcję podłączenia pod podwójny przełącznik. Oświetlenie może być zasilane wieloma źródłami światła, na przykład żarówkami Edison, LED lub energooszczędnymi.";
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
$product->name = [$default_lang => "Lampa Wisząca Kolorowe Abażury Żyrandol"];
$product->link_rewrite = [$default_lang => "lampa-wiszaca-kolorowe-abazury-zyrandol"];
$product->price = 249.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/lampa-wiszaca-z-abazurem.jpg";
$product->image_url = $url;
$product->description = "Kolorowa lampa wisząca z abażurem i kryształkami 5 żarówek
Kolejne wydanie eleganckiej, 5 – płomiennej lampy, tym razem z kolorowymi abażurami do wyboru. Dzięki naszej oryginalnej lampie sufitowej, Twoje pomieszczenie nabierze nowoczesnego i zachwycającego wyglądu.
Do jakich wnętrz pasuje prezentowana lampa?
Salon, jadalnia, pokój czy sypialnia – dzięki temu sufitowemu oświetleniu Twoje wnętrza będą zdumiewać niepowtarzalnym designem, bez względu na to, w jakim stylu urządzone jest dane pomieszczenie. Wyraziste kolory kloszy, takie jak róż, niebieski czy fiolet ożywią i rozweselą Twoje wnętrze, a klasyczne barwy (czerń, biel) wprowadzą nieco elegancji do Twojej aranżacji. Nasza nowoczesna lampa posiada również dwa kolory stelaży do wyboru, aby jeszcze lepiej móc dopasować żyrandol do danego stylu.
Czy nasza lampa sufitowa jest funkcjonalna?
Oczywiście, że tak! Oświetlenie zasilane jest aż pięcioma żarówkami, dzięki czemu z powodzeniem rozświetli nawet bardzo duże pomieszczenia. Ponadto pięć kloszy dodaje lampie niesamowitego uroku. Stelaż wykonany jest z trwałego metalu, a abażury z solidnego materiału. Lampa posiada także możliwość regulacji wysokości. Żyrandol może być zasilany oświetleniem ledowym.";
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
$product->name = [$default_lang => "Lampa Wisząca z Kolorowym Abażurem Żyrandol"];
$product->link_rewrite = [$default_lang => "lampa-wiszaca-z-kolorowym-abazurem-zyrandol"];
$product->price = 189.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/lampa-wiszaca-z-abazurem.jpg";
$product->image_url = $url;
$product->description = "Lampa wisząca 3 abażury z kryształkami wiele kolorów
Elegancki i oryginalny wygląd oraz wiele kolorów do wyboru czynią naszą lampę sufitową niezwykle wyjątkową ozdobą. Sprawdzony producent lamp dostarczy Ci najlepszej jakości oświetlenia.
Do jakich wnętrz pasuje prezentowana lampa?
Pokój, sypialnia, salon oraz wszystkie pomieszczenia w stylu retro – w tych wnętrzach nasza lampa będzie wyglądać najbardziej zachwycająco. Abażury stworzone są w wielu kolorach, aby z łatwością wybrać ten, najbardziej wpasowujący się w Twoje aranżacje. Stelaż lampy również dostępny jest w dwóch barwach – czarnej i i białej. Wytworne kryształki zawieszone na konstrukcji sufitowego oświetlenia dodadzą Twojemu wnętrzu elegancji.
Jakich tworzyw użyto do wykonania prezentowanej lampy?
Stelaż oświetlenia wykonany jest trwałego metalu, a klosze z odpornego na uszkodzenia materiału. Lampa oprócz oryginalnego wyglądu posiada także wiele funkcji – możliwość regulacji wysokości oraz opcję podłączenia pod podwójny przełącznik. Oświetlenie to jest także lampą ledową.";
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
$product->name = [$default_lang => "Stylowa Lampa Sufitowa Wisząca z Abażurami"];
$product->link_rewrite = [$default_lang => "stylowa-lampa-sufitowa-wiszaca-z-abazurami"];
$product->price = 180.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/lampa-wiszaca-z-abazurem.jpg";
$product->image_url = $url;
$product->description = "Unikatowa lampa wisząca z 3 abażurami
Lampa z możliwością dopasowania abażurów w dowolnej kombinacji! Od dziś możesz tworzyć swoje własne, niepowtarzalne aranżacje.
Do jakich wnętrz pasuje prezentowane oświetlenie?
Lampa nada wyjątkowy charakter pomieszczeniom biurowym, pokojom sypialnym, a także kuchniom i jadalniom. Dzięki klasycznym i stonowanym kolorom kloszy lampa wspaniale współgra z każdym stylem.
Z czego wykonana została nowoczesna lampa wisząca?
Konstrukcja lampy jest metalowa, a klosze stworzone są z wytrzymałego materiału. Oświetlenie sufitowe posiada wiele opcji źródeł zasilania, w tym żarówki LED.";
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
$product->name = [$default_lang => "Klasyczna Lampa Sufitowa Chrom Szklane Klosze"];
$product->link_rewrite = [$default_lang => "klasyczna-lampa-sufitowa-chrom-szklane-klosze"];
$product->price = 169.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/lampa-5-plomienna-z-serii-02.jpg";
$product->image_url = $url;
$product->description = "Gustowna lampa wisząca sufitowa 5 – płomienna z chromowanymi elementami
Lampa sufitowa, która niezwykle ożywi i ozdobi każde pomieszczenie. Żyrandol znakomicie będzie prezentował się w salonie czy pokoju nadając pomieszczeniu niepowtarzalny klimat.
Do jakich wnętrz pasuje prezentowane oświetlenie sufitowe?
Lampa dostępna jest w ciemnym brązie (wenge), dzięki czemu idealnie będzie pasować do wielu innych kolorów w przeróżnych aranżacjach. Ponadto ciekawe ozdoby lampy sufitowej nadadzą wnętrzom wyrafinowany i elegancki wygląd, bez względu na styl danego pomieszczenia.
Jakie zalety posiada oryginalna lampa?
5 – płomienna lampa świetnie oświetli nawet bardzo duże pomieszczenie. Wiele rodzajów żarówek, jakie można umieszczać w żyrandolu, daje mnóstwo możliwości oświetlania pomieszczenia. Lampa wykonana jest z metalu, co daje gwarancję niezawodności. Klosze natomiast stworzone są z wytrzymałego szkła.";
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
$product->name = [$default_lang => "Lampa Wisząca Kule Kolorowa Metalowa Oprawa"];
$product->link_rewrite = [$default_lang => "lampa-wiszaca-kule-kolorowa-metalowa-oprawa"];
$product->price = 159.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/lampa-wiszaca-kule-01-metalowa-oprawa-09.jpg";
$product->image_url = $url;
$product->description = "Nowoczesna lampa wisząca metalowa 2 kule
Chcesz wprowadzić odrobinę nowoczesności i unikatowego designu do swoich wnętrz? Nasza wyjątkowa lampa wisząca będzie znakomicie współgrać z każdym stylem Twojego pomieszczenia.
Gdzie może być powieszona nasza elegancka lampa?
Oświetlenie to świetnie ozdobi Twoją kuchnię, jadalnię, pokój czy gabinet. Lampa została stworzona w klasycznych barwach – czarnym i białym z wielokolorowymi detalami, aby z łatwością dopasować do każdego rodzaju wnętrza.
Jakie zalety ma dwu płomienna lampa sufitowa?
Oprócz wielu kolorów do wyboru, lampa posiada także wiele innych zalet. Wykonana jest z wytrzymałego i odpornego na uszkodzenia metalu, a także posiada możliwość regulacji wysokości. To nie koniec przydatnych funkcji tej nowoczesnej lampy! Oświetlenie posiada opcję podłączenia pod podwójny przełącznik oraz wiele źródeł zasilania, w tym żarówki LED.";
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
$product->name = [$default_lang => "Lampa Sufitowa Szklane Klosze Chrom"];
$product->link_rewrite = [$default_lang => "lampa-sufitowa-szklane-klosze-chrom"];
$product->price = 159.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/lampa-5-plomienna-z-serii-12.jpg";
$product->image_url = $url;
$product->description = "Nowoczesna lampa sufitowa 5 źródeł zasilania plafon
Elegancki i ponadczasowy design lampy wiszącej nadadzą Twoim wnętrzom niepowtarzalnego stylu. Jasne, klasyczne barwy oświetlenia będą wspaniale współgrać zarówno z nowoczesnymi jak i aranżacjami retro.
Do jakich wnętrz pasuje oryginalny żyrandol?
Lampa ozdobi każde pomieszczenia – kuchnia, salon, pokój czy sypialnia – to tylko niektóre wnętrza, którym oświetlenie doda wyjątkowości. Dzięki pomysłowemu rozmieszczeniu kloszy, lampa znakomicie rozświetli nawet bardzo duże pomieszczenia. Dodatkowo czarne elementy dodają lampie elegancji.
Z czego została wykonana wisząca lampa?
Konstrukcja lampy stworzona jest z wytrzymałego metalu, a klosze z odpornego na uszkodzenia szkła. Żyrandol jest niezwykle funkcjonalny, dzięki możliwości regulacji kąta światła w dowolnym kierunku. Ponadto oświetlenie pełni również rolę lampy ledowej.";
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
$product->name = [$default_lang => "Nowoczesna Lampa Wisząca z Metalową Oprawą"];
$product->link_rewrite = [$default_lang => "nowoczesna-lampa-wiszaca-z-metalowa-oprawa"];
$product->price = 139.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/lampa-wiszaca-metalowa-oprawa.jpg";
$product->image_url = $url;
$product->description = "Lampa wisząca 2 – płomienna metalowa oprawa wiele kolorów
Klasyczny i nowoczesny design połączony z modnymi kolorami tworzą lampę idealną do wszystkich pomieszczeń, bez względu na styl.
Do jakich wnętrz pasuje prezentowana lampa sufitowa?
Żyrandol możesz zawiesić w kuchni, sypialni, pokoju czy biurze – każde pomieszczenie będzie wglądać rewelacyjnie z naszą nowoczesną lampą. Aż sześć wyjątkowych kolorów do wyboru sprawia, że znajdziesz odpowiednią barwę lampy nawet do najbardziej wyszukanych aranżacji.
Czy prezentowane oświetlenie jest funkcjonalne?
Lampa posiada wiele praktycznych opcji – regulacja wysokości czy możliwość podłączenia pod podwójny przełącznik. Żyrandol został wykonany z metalu, dzięki czemu masz pewność, że lampa będzie pełniła swoją rolę przez bardzo długi czas. Oświetlenie może być zasilane żarówkami LED, energooszczędnymi i wieloma innymi.";
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
$product->name = [$default_lang => "Lampa Wisząca Sufitowa Edison Loft"];
$product->link_rewrite = [$default_lang => "lampa-wiszaca-sufitowa-edison-loft"];
$product->price = 139.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/lampa-wiszaca-edison-przegub.jpg";
$product->image_url = $url;
$product->description = "Oryginalna lampa wisząca sufitowa Edison 5 – płomienna
Unikatowy i nowoczesny design lampy dodadzą uroku każdemu pomieszczeniu. Wiele kolorów do wyboru pozwoli Ci tworzyć aranżacje o niepowtarzalnym klimacie!
Do jakich wnętrz pasuje prezentowane oświetlenie?
Niezwykły styl lampy świetnie wpasuje się w takie pomieszczenia jak kuchnia, salon, pokój czy gabinet. Największą ozdobą lampy jest brak kloszy, dzięki czemu oświetlenie wygląda bardzo nowocześnie i znakomicie rozświetla nawet bardzo duże wnętrza.
Czy lampa jest funkcjonalna?
Oczywiście, że tak! Lampa stworzona jest z metalu, dzięki czemu masz gwarancję wytrzymałości i odporności na uszkodzenia. Żyrandol posiada również możliwość podłączenia pod podwójny przełącznik, co pozwoli Ci używać tyle żarówek, ile chcesz. Ponadto lampa wisząca może być zasilana wieloma źródłami światła, w tym oświetleniem LED lub Edison.";
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
$product->name = [$default_lang => "Klasyczna Lampa Sufitowa Metalowa Przegub"];
$product->link_rewrite = [$default_lang => "klasyczna-lampa-sufitowa-metalowa-przegub"];
$product->price = 139.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/lampa-4-plomienna-z-serii-12.jpg";
$product->image_url = $url;
$product->description = "Lampa wisząca 4 – punktowa plafon
Klasyczny i elegancki styl lampy czynią ją idealną do wielu pomieszczeń. Biały kolor żyrandola w połączeniu z kontrastowymi, czarnymi dodatkami dają oświetlenie o ponadczasowym designie!
Do jakich wnętrz pasuje oryginalny plafon?
Do wszystkich! Lampa sufitowa ozdobi Twoją kuchnię, pokój, sypialnię czy nawet biuro. Funkcjonale rozmieszczenie kloszy lampy doskonale rozświetli nawet bardzo duże pomieszczenie, a jednolita i klasyczna barwa wpasuje się do każdego stylu Twoich wnętrz.
Jakie zalety posiada prezentowany żyrandol?
Stelaż wiszącej lampy został wykonany z metalu, co sprawia, że oświetlenie jest odporne na uszkodzenia. Lampa posiada możliwość regulacji kąta światła pod dowolnym kierunkiem. Ponadto plafon może być zasilany wieloma rodzajami żarówek, w tym oświetleniem LED lub energooszczędnym.";
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
$product->name = [$default_lang => "Lampa Sufitowa Chrom Metal Żyrandol"];
$product->link_rewrite = [$default_lang => "lampa-sufitowa-chrom-metal-zyrandol"];
$product->price = 139.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/lampa-4-plomienna-z-serii-12.jpg";
$product->image_url = $url;
$product->description = "Nowoczesna czarna lampa sufitowa 4 – płomienna
Ponadczasowy design lampy sprawi, że Twoje pomieszczenie nabierze nowego, niepowtarzalnego stylu!
Do jakich wnętrz pasuje prezentowany plafon?
Żyrandol będzie znakomicie prezentował się w kuchni, sypialni, gabinecie jak i pokoju gościnny. Czarny kolor wiszącej doskonale współgra z każdym stylem wnętrz – od nowoczesnych po klasyczne aranżacje.
Czy lampa sufitowa jest funkcjonalna?
Metalowa konstrukcja żyrandola to gwarancja niezawodności i wytrzymałości! Lampa posiada możliwość regulacji kąta światła, co pozwoli Ci ustawić oświetlenie według własnych potrzeb. Wiele opcji zasilania plafonu to kolejna zaleta naszej nowoczesnej lampy. Możesz używać zarówno oświetlenia LED jak i energooszczędnych żarówek.";
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
$product->name = [$default_lang => "Lampa Sufitowa z Chromowanymi Elementami"];
$product->link_rewrite = [$default_lang => "lampa-sufitowa-z-chromowanymi-elementami"];
$product->price = 149.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/lampa-5-plomienna-z-serii-07.jpg";
$product->image_url = $url;
$product->description = "Nowoczesna lampa sufitowa 5 źródeł zasilania klosze do wyboru
Szukasz oryginalnej lampy wiszącej, która doda nowoczesności i niepowtarzalnego stylu nawet wnętrzom o klasycznym charakterze? Mamy coś dla Ciebie! Lampa sufitowa oprócz unikatowego designu posiada wiele kloszy do wyboru, dzięki czemu stworzysz własną, piękną aranżację.
Gdzie najlepiej zawiesić prezentowaną lampę?
Żyrandol może pełnić funkcję zarówno oświetlenia kuchennego jak i pokojowego czy biurowego. Dodatki w dwóch kolorach do wyboru pozwolą Ci na skomponowanie aranżacji, w której wszystkie detale będą świetnie ze sobą współgrały.
Z jakich tworzyw została wykonana sufitowa lampa?
Materiały wykorzystane do stworzenia żyrandola to trwały metal i odporne na uszkodzenia szkło. Dzięki tym tworzywom możesz mieć pewność, ze plafon będzie służył Ci przez długi czas! Praktyczną funkcją w konstrukcji lampy jest osadzenie kloszy na przegubach, co pozwala na regulację światła pod dowolnym kątem i kierunkiem. Żyrandol może być zasilany wieloma rodzajami żarówek, na przykład ledowymi lub energooszczędnymi.";
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
$product->name = [$default_lang => "Lampa Sufitowa Żyrandol Chrom Szklane Klosze"];
$product->link_rewrite = [$default_lang => "lampa-sufitowa-zyrandol-chrom-szklane-klosze"];
$product->price = 129.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/lampa-wiszaca-chrom-06.jpg";
$product->image_url = $url;
$product->description = "Lampa sufitowa 3 – punktowa metalowa plafon
Żyrandol nada się do pomieszczeń w każdym stylu – od nowoczesne po klasyczne wnętrza. Metaliczna barwa lampy wiszącej doda uroku Twoim aranżacjom.
Gdzie zwiesić prezentowany plafon?
Lampa może pełnić rolę oświetlenia kuchennego jaki pokojowego czy biurowego – w każdym pomieszczeniu będzie prezentować się zachwycająco. Faliste łączenia lampy sufitowej nadają jej niepowtarzalnego i oryginalnego charakteru, a trzy źródła światła rozświetlą nawet bardzo duże pomieszczenia.
Z czego wykonana jest nowoczesna lampa?
Konstrukcja żyrandola stworzona jest z metalu, a klosze z odpornego na uszkodzenia szkła. Lampa jest niezwykle funkcjonalna, dzięki możliwości podłączenia jej pod podwójny przełącznik. Dodatkowo żyrandol posiada wiele źródeł zasilania, w tym oświetlenie LED.";
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
$product->name = [$default_lang => "Lampa wisząca sufitowa ze szklanymi kloszami"];
$product->link_rewrite = [$default_lang => "lampa-wiszaca-sufitowa-ze-szklanymi-kloszami"];
$product->price = 125.10;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/lampa-wiszaca-chrom-05.jpg";
$product->image_url = $url;
$product->description = "Lampa wisząca chrom 4 – płomienna kwadratowe klosze metalowa
Nowoczesny wygląd połączony z wysoką jakością tworzyw daje lampę sufitową idealną do wielu pomieszczeń.
Do jakich wnętrz pasuje oryginalna lampa wisząca?
Żyrandol może pełnić rolę zarówno oświetlenia biurowego, pokojowego jak i kuchennego czy sypialnianego. Stonowany, metaliczny kolor naszego wyjątkowego oświetlenia sprawia, że możesz tworzyć wiele wspaniałych aranżacji.
Jakie zalety posiada prezentowany plafon?
Cztery źródła światła to świetny sposób na rozświetlenie nawet dużego pomieszczenia. Nasza nowoczesna lampa posiada możliwość podłączenia jej pod podwójny przełącznik, dzięki czemu możemy decydować o tym, ile płomieni oświetlenia ma być używanych. Dodatkowo lampa sufitowa posiada wiele opcji zasilania, w tym oświetlenie LED.";
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
$product->name = [$default_lang => "Lampa Wisząca Chrom ze Szklanymi Kloszami"];
$product->link_rewrite = [$default_lang => "lampa-wiszaca-chrom-ze-szklanymi-kloszami"];
$product->price = 139.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/lampa-4-plomienna-z-serii-05-chrom.jpg";
$product->image_url = $url;
$product->description = "Lampa wisząca 4 – płomienna chrom
Nowoczesny i designerski look już dziś może zagościć w Twoim domu! Dzięki naszej lampie wiszącej znakomicie urozmaicisz swoje wnętrza.
Gdzie zawiesić oryginalną lampę?
Plafon idealnie nada się do wielu pomieszczeń – pokoju, biura czy nawet kuchni. Metaliczny połysk naszej nowoczesnej lampy będzie świetnie współgrał z każdym kolorem i stylem pomieszczenia. Ozdoby na kloszach wprowadzą mnóstwo awangardy do Twojej aranżacji.
Z jakich tworzyw został stworzony prezentowany plafon?
Materiał wykorzystany do stworzenia wiszącej lampy to trwały metal. Klosze natomiast wykonane są ze szkła. 4 źródła światła sprawiają, że nasze oświetlenie sufitowe znakomicie wypełnia swoją funkcję nawet w dużych pomieszczeniach.";
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
$product->name = [$default_lang => "Klasyczna Lampa Sufitowa Szklane Klosze Chrom"];
$product->link_rewrite = [$default_lang => "klasyczna-lampa-sufitowa-szklane-klosze-chrom"];
$product->price = 125.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/lampa-3-plomienna-z-serii-02.jpg";
$product->image_url = $url;
$product->description = "Lampa wisząca 3 – płomienna brązowa plafon
Żyrandol wprowadzi mnóstwo nowoczesności i oryginalnego stylu do Twoich wnętrz. Brązowy stelaż lampy wiszącej sprawi, że oświetlenie idealnie wpasuje się także w klasyczny styl pomieszczeń.
Do jakich wnętrz pasuje prezentowany żyrandol?
Efektowna lampa wisząca z powodzeniem ozdobi Twój salon, kuchnię, pokój czy sypialnię. Oryginalny stelaż sprawia, że całokształt lampy sufitowej wygląda zachwycająco i znakomicie prezentuje się w każdym pomieszczeniu.
Z czego zostało wykonane oświetlenie sufitowe?
Konstrukcja lampy stworzona jest z wytrzymałego metalu. Klosze natomiast wykonane są z odpornego na uszkodzenia szkła. Żyrandol posiada wiele opcji zasilania, w tym montaż żarówek LED i energooszczędnych.";
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
$product->name = [$default_lang => "Lampa Wisząca Edison Wiele Kolorów"];
$product->link_rewrite = [$default_lang => "lampa-wiszaca-edison-wiele-kolorow"];
$product->price = 119.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/lampa-wiszaca-edison-przegub.jpg";
$product->image_url = $url;
$product->description = "Nowoczesna lampa wisząca 3-płomienna Edison
Ponadczasowy design oświetlenia, który ożywi i nada wyjątkowego klimatu każdemu pomieszczeniu! Nasza lampa sufitowa pozwoli Ci stworzyć nowoczesne i niepowtarzalne wnętrza, o jakich zawsze marzyłeś.
Do jakich wnętrz pasuje lampa z trzema źródłami światła?
Żyrandol możesz zawiesić absolutnie wszędzie! Minimalistyczny styl będzie wspaniale prezentował się zarówno w kuchni, salonie, jadalni jak i biurze czy sypialni. Lampa sufitowa stworzona jest w aż czterech różnych kolorach, aby z łatwością dopasować ją do stylu swojego pomieszczania.
Jakie zalety posiada nowoczesna lampa?
Żyrandol nie posiada kloszy, dzięki czemu lampa znakomicie rozświetla nawet bardzo duże pomieszczenia. Oświetlenie może być zasilane wieloma rodzajami żarówek, w tym ledowymi E-27, a także dekoracyjnymi.";
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
$product->name = [$default_lang => "Lampa Wisząca Edison Chromowana Loft"];
$product->link_rewrite = [$default_lang => "lampa-wiszaca-edison-chromowana-loft"];
$product->price = 119.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/lampa-wiszaca-edison-przegub.jpg";
$product->image_url = $url;
$product->description = "Lampa wisząca Edison 3 – płomienna ze spiralką
Niezwykle nowoczesny i awangardowy styl doda uroku każdemu wnętrzu.
Gdzie zawiesić nowoczesną lampę?
Prezentowane oświetlenie z powodzeniem ozdobi Twoją jadalnię, kuchnię, sypialnię i wiele innych pomieszczeń. Bardzo ciekawym i oryginalnym rozwiązaniem jest brak kloszy w oświetleniu wewnętrznym. Konstrukcja lampy jest wystarczającą ozdobą, a widoczne żarówki nadają jej wyjątkowy i stylowy wygląd.
Jakie zalety posiada unikalny żyrandol?
Wiele opcji zasilania lampy, możliwość podłączenia jej pod podwójny przełącznik i wysokiej jakości tworzywa dają niepowtarzalną i elegancką lampę wiszącą.";
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
$product->name = [$default_lang => "Lampa Wisząca Sufitowa Chrom Szklane Klosze"];
$product->link_rewrite = [$default_lang => "lampa-wiszaca-sufitowa-chrom-szklane-klosze"];
$product->price = 129.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/lampa-wiszaca-chrom-05.jpg";
$product->image_url = $url;
$product->description = "Lampa wisząca chrom 3-płomienna ze szklanymi kloszami
Klasyczna i elegancka lampa, która wspaniale ozdobi Twoje wnętrza. Metal w powłoce chromowej ze szklanymi kloszami tworzą niezwykłe efektowne połączenie o ponadczasowym stylu.
Gdzie zawiesić prezentowaną 3-płomienną lampę?
Żyrandol będzie wyglądał rewelacyjnie w każdym pomieszczeniu. Może pełnić rolę zarówno oświetlenia kuchennego, jak i sypialnianego czy biurowego. Dzięki klasycznym kolorom i minimalistycznemu stylowi lampa dopasuje się do każdej Twojej aranżacji.
Jakie zalety posiada lampa sufitowa?
Oświetlenie stworzone jest z wytrzymałych i odpornych na uszkodzenia materiałów, dzięki czemu zapewni Ci radość użytkowania na bardzo długi czas. Lampa posiada trzy źródła światła, przez co doskonale rozświetla nawet bardzo duże pomieszczenia. Żyrandol może być zasilany wieloma rodzajami żarówek, w tym ledowymi E-27.";
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
$product->name = [$default_lang => "Chromowana Lampa Sufitowa ze Szklanymi Kloszami"];
$product->link_rewrite = [$default_lang => "chromowana-lampa-sufitowa-ze-szklanymi-kloszami"];
$product->price = 129.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/lampa-3-plomienna-05-chrom.jpg";
$product->image_url = $url;
$product->description = "Lampa wisząca ze szklanymi kloszami z 3 źródłami światła
Nowoczesna lampa sufitowa o ponadczasowym wyglądzie, która idealnie dopasuje się do stylu Twoich wnętrz.
Do jakich pomieszczeń pasuje 3-płomienna lampa?
Klasyczne połączenie chromu ze szklanymi kloszami i paski daje lampę sufitową pasującą do każdego wnętrza. Salon, sypialnia, kuchnia czy biuro – niezależnie od stylu, w jakim zaprojektowane jest Twoje pomieszczenie, lampa będzie znakomicie z nim współgrała.
Czy prezentowana lampa jest funkcjonalna?
Oczywiście, że tak. Solidne wykonanie z wytrzymałych tworzyw sprawia, że będziesz cieszyć się oświetleniem sufitowym przez bardzo długi czas. Ponadto lampa posiada aż trzy źródła światła, dzięki czemu nie będziesz potrzebować żadnych dodatkowych oświetleń. Żyrandol posiada również podłączenia pod podwójny przełącznik. Lampa może być zasilana wszystkimi rodzajami żarówek LED.";
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
$product->name = [$default_lang => "Nowoczesna Lampa Sufitowa z Chromowanymi Elementami"];
$product->link_rewrite = [$default_lang => "nowoczesna-lampa-sufitowa-z-chromowanymi-elementami"];
$product->price = 119.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/lampa-3-plomienna-z-serii-04-z-chromowanymi-elementami.jpg";
$product->image_url = $url;
$product->description = "Lampa wisząca 3 – płomienna ze szklanym kloszem
Czysta elegancja! Nasza lampa sufitowa doda Twoim wnętrzom wyjątkowego charakteru. Dzięki temu żyrandolowi stworzysz własną, niepowtarzalną lampę wiszącą.
Do jakich wnętrz pasuje nowoczesna lampa?
Żyrandol może pełnić funkcje oświetlenia pokojowego, salonowego czy biurowego. Każde pomieszczenie będzie idealne dla prezentowanej lampy. Ciemny stelaż oświetlenia świetnie wkomponuje się we wnętrza urządzone zarówno w jasnych jak i ciemnych kolorach.
Jakie materiały zostały wykorzystane do produkcji lampy?
Konstrukcja żyrandola jest wykonana jest z wytrzymałego metalu. Natomiast klosze do lampy wiszącej stworzone są z odpornego na uszkodzenia szkła. Żyrandol posiada wiele źródeł zasilania, w tym oświetlenia ledowe i energooszczędne.";
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
$product->name = [$default_lang => "Lampa Ścienna Kinkiet z Abażurami"];
$product->link_rewrite = [$default_lang => "lampa-scienna-kinkiet-z-abazurami"];
$product->price = 109.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/lampa-wiszaca-z-abazurem.jpg";
$product->image_url = $url;
$product->description = "Elegancki kinkiet z abażurami i kryształami wiele kolorów
Szukasz oświetlenia ściennego, które doda Twoim wnętrzom elegancji? Dobrze trafiłeś! Nasz kinkiet wspaniale ozdobi każdą aranżację nadając jej wyjątkowego charakteru.
Do jakich wnętrz pasuje prezentowana lampa ścienna?
Oświetlenie będzie idealną lampą do sypialni, salonu, pokoju jak i kawiarni czy restauracji. Kinkiet wygląda świetnie w każdym pomieszczeniu. Mnóstwo kolorów abażurów jak i stelaży pozwolą Ci idealnie dopasować lampę do swojego wnętrza, bez względu na jego styl.
Jakie materiały zostały wykorzystane do produkcji kinkietu?
Konstrukcja lampy wykonana jest metalu, dzięki czemu oświetlenie jest trwałe i wytrzymałe. Natomiast kolorowe abażury są materiałowe. Kinkiet posiada wiele źródeł światła, na przykład żarówki LED lub energooszczędne.";
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
$product->name = [$default_lang => "Stylowa Lampa Sufitowa Klosze do Wyboru Żyrandol"];
$product->link_rewrite = [$default_lang => "stylowa-lampa-sufitowa-klosze-do-wyboru-zyrandol"];
$product->price = 109.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/lampa-3-plomienna-z-chromowanymi-elementami.jpg";
$product->image_url = $url;
$product->description = "Lampa sufitowa 3 – płomienna plafon klosze do wyboru
Elegancja i oryginalność zawarte w jednej lampie! Unikatowy design oświetlenia sufitowego pozwala na stworzenie wielu wyjątkowych aranżacji.
Do jakich wnętrze pasuje prezentowany żyrandol?
Oświetlenie będzie idealną lampą do salonu, sypialni, jadalni czy biura. Ciemny brąz doda Twoim wnętrzom elegancji, a satynowa konstrukcja świetnie ożywi każde pomieszczenie.
Jakie zalety posiada plafon?
Klosze lampy wiszącej osadzone są na przegubach, co pozwala na dowolną regulację kąta padania światła. Stelaż żyrandola wykonany jest z metalu, dzięki czemu oświetlenie jest trwałe i wytrzymałe. Wszystkie klosze do lampy są szklane. Lampa posiada wiele źródeł zasilania, na przykład żarówki ledowe lub energooszczędne.";
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
$product->name = [$default_lang => "Klasyczna Lampa z Chromowanymi Elementami Trzy Kolory"];
$product->link_rewrite = [$default_lang => "klasyczna-lampa-z-chromowanymi-elementami-trzy-kolory"];
$product->price = 98.10;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/lampa-3-plomienna-z-serii-01-chromowanymi-elementami.jpg";
$product->image_url = $url;
$product->description = "Stylowa lampa wisząca 3 – punktowa klosze do wyboru
Szukasz lampy sufitowej, która doda Twoim wnętrzom elegancji i wyjątkowego klimatu? Mamy coś w sam raz dla Ciebie! Klasyczny design lampy idealnie dopasuje się do każdej aranżacji i stylu pomieszczenia.
Gdzie zawiesić prezentowany plafon?
Lampa będzie idealnym oświetleniem do salonu, jadalni, sypialni czy biura. Ciekawa konstrukcja żyrandola została stworzona w trzech uniwersalnych kolorach, aby jak najlepiej dopasować oświetlenie do charakteru pomieszczenia. Ponadto wiele kloszy do lampy pozwala na stworzenie własnego, unikatowego plafonu.
Czy lampa wisząca jest funkcjonalna?
Oczywiście, że tak! Klosze lampy osadzone są na przegubach, co pozwala na dowolną regulację kąta padania światła. Ponadto konstrukcja oświetlenia wykonana jest z trwałego i wytrzymałego metalu. Klosze do lampy wiszącej są szklane. Plafon może być zasilany wieloma rodzajami światła, na przykład żarówkami ledowymi.";
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
$product->name = [$default_lang => "Lampa Sufitowa na Listwie Chromowanymi Elementami"];
$product->link_rewrite = [$default_lang => "lampa-sufitowa-na-listwie-chromowanymi-elementami"];
$product->price = 105.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/lampa-3-plomienna-z-chromowanymi-elementami-z-serii-12-nowoczesna.jpg";
$product->image_url = $url;
$product->description = "Lampa wisząca plafon 3 źródła światła
Klasyczny design lampy sufitowej rewelacyjnie uzupełni Twoją aranżację, nadając jej elegancji i nowoczesności. Dwa kolory podsufitki pozwolą Ci na idealne dopasowanie lampy do Twojego stylu.
Do jakich wnętrz pasuje prezentowany plafon?
Lampa wisząca świetnie sprawdzi się w wielu pomieszczeniach – w kuchni, salonie, sypialni czy biurze. Dzięki klasycznemu designowi lampa świetnie dopasowuje się do wszystkich wnętrz. Biały kolor podsufitki znakomicie ożywi ciemne pomieszczenia, a czarny stelaż lampy sufitowej rewelacyjnie skontrastuje wnętrza urządzone w jasnych, żywych barwach.
Czy lampa wisząca jest funkcjonalna?
O praktyczności oświetlenia sufitowego świadczy możliwość regulacji kloszy pod pod dowolnym kątem. Dzięki tej funkcji możesz skierować światło w wygodny dla siebie sposób. Konstrukcja oświetlenia stworzona jest wytrzymałego metalu, a klosze do lampy wykonane są z odpornego na uszkodzenia szkła. Ponadto oświetlenie może być zasilane wieloma rodzajami światła, na przykład żarówkami LED.";
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
$product->name = [$default_lang => "Lampa Wisząca Sufitowa Chrom Elegancka"];
$product->link_rewrite = [$default_lang => "lampa-wiszaca-sufitowa-chrom-elegancka"];
$product->price = 98.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/lampa-wiszaca-05-chrom-zyrandol-nowoczesna-lampa.jpg";
$product->image_url = $url;
$product->description = "Lampa sufitowa 2 źródła zasilania metal
Prosty, lecz oryginalny design żyrandola doda nowoczesności Twoim wnętrzom. Plafon znakomicie ozdobi jak i rozświetli każdą aranżację.
Do jakich wnętrz pasuje nowoczesna lampa?
Żyrandol może pełnić rolę oświetlenia kuchennego, pokojowego, biurowego czy salonowego. Metaliczny połysk i eleganckie klosze sprawiają, że lampa dopasuje się do każdego stylu – od nowoczesnego po klasyczny.
Czy prezentowany plafon jest funkcjonalny?
Oczywiście, że tak! Lampa sufitowa posiada możliwość podłączenia pod podwójny przełącznik, dzięki czemu regulować ilością świateł w wygodny dla Ciebie sposób. Konstrukcja plafonu wykonana jest wytrzymałego metalu, a klosze do lampy są szklane. Oświetlenie jest także plafonem ledowym.";
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
$product->name = [$default_lang => "Lampa Chrom Szklane Klosze Żyrandol"];
$product->link_rewrite = [$default_lang => "lampa-chrom-szklane-klosze-zyrandol"];
$product->price = 109.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/lampa-2-plomienna-chrom-zyrandol-lighthome.jpg";
$product->image_url = $url;
$product->description = "Metalowa lampa wisząca 2 źródła zasilania
Nowoczesny design i dbałość o szczegóły sprawią, że lampa sufitowa będzie wspaniale ozdabiać Twoje wnętra. Metaliczny połysk rewelacyjnie wpasuje się we wszystkie aranżacje.
Gdzie zawiesić prezentowany żyrandol?
Oświetlenie będzie znakomitą lampą do kuchni, biura, pokoju czy sypialni. Uniwersalny kolor wygląda zachwycająco w każdym pomieszczeniu, bez względu na jego styl i przeznaczenie.
Jakie zalety posiada nowoczesna lampa?
Stelaż plafonu wykonany jest z metalu, dzięki czemu masz gwarancję wytrzymałości i niezawodności lampy. Klosze są wykonane z trwałego szkła. Ponadto plafon może być zasilany wieloma rodzajami światła, w tym oświetleniem LED i energooszczędnym.";
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
$product->name = [$default_lang => "Lampa Sufitowa z chromowanymi Elementami Szklane Klosze"];
$product->link_rewrite = [$default_lang => "lampa-sufitowa-z-chromowanymi-elementami-szklane-klosze"];
$product->price = 89.10;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/lampa-3-plomienna-z-chromowanymi-elementami-zyrandol-plafon-wiszaca.jpg";
$product->image_url = $url;
$product->description = "Lampa sufitowa 3 – płomienna klosze do wyboru
Klasyczny i elegancki design lampy sufitowej sprawią, że Twoje wnętrza nabiorą wyjątkowego charakteru. Wybierz trzy spośród wielu niesamowitych kloszy i zachwycaj niepowtarzalną aranżacją.
Do jakich wnętrz pasuje prezentowany plafon?
Lampa świetnie ozdobi Twój salon, pokój, gabinet czy biuro. Żyrandol może zawiesić w każdym pomieszczeniu, ponieważ fantastycznie dopasowuje się do wnętrz urządzonych w dowolnym stylu – od nowoczesny po klasyczny.
Jakie zalety posiada lampa wisząca?
Metalowa konstrukcja z chromowanymi elementami to ewidentny atut lampy, ponieważ dzięki użyciu tych materiałów jest niezwykle trwała i wytrzymała. Klosze są stworzone z odpornego na uszkodzenia szkła. Plafon posiada wiele opcji zasilania, w tym oświetlenie ledowe lub energooszczędne.";
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
$product->name = [$default_lang => "Nowoczesna Lampa Sufitowa Plafon Chrom"];
$product->link_rewrite = [$default_lang => "nowoczesna-lampa-sufitowa-plafon-chrom"];
$product->price = 98.10;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/lampa-2-plomienna-z-chromowanymi-elementami-wiszaca-zyrandol-plafon-nowoczesna.jpg";
$product->image_url = $url;
$product->description = "Lampa sufitowa plafon 2 – płomienna klosze do wyboru
Nowoczesny i elegancki styl lampy wiszącej świetnie ozdobi Twoje wnętrze. Ciekawa i oryginalna konstrukcja plafonu przykuwa uwagę i prezentuje się zjawiskowo w każdym pomieszczeniu.
Gdzie zawiesić 2 – punktową lampę sufitową?
Plafon może pełnić rolę oświetlenia kuchennego, pokojowego czy biurowego. Lampa fantastycznie dopasowuje się do pomieszczeń urządzonych w każdym stylu – od nowoczesne po klasyczne aranżacje.
Czy prezentowana lampa jest funkcjonalna?
Klosze żyrandola osadzone są na przegubach, dzięki czemu możesz dowolnie regulować kąt padania światła. Metalowa konstrukcja lampy sufitowej zapewni Ci trwałość i wytrzymałość, a szklane klosze odporność na uszkodzenia. Dodatkowo oświetlenie pełni również funkcję plafonu LED.";
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
$product->name = [$default_lang => "Klasyczna Lampa Sufitowa Przegub Chrom"];
$product->link_rewrite = [$default_lang => "klasyczna-lampa-sufitowa-przegub-chrom"];
$product->price = 80.10;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/lampa-2-plomienna-z-chromowanymi-elementami-wiszaca-plafon-lighthome-nowoczesna.jpg";
$product->image_url = $url;
$product->description = "Klasyczna lampa sufitowa 2 źródła zasilania
Prosty, lecz elegancki design lampy wiszącej zapewni Twoim wnętrzom oryginalny i zachwycający wygląd, bez względu na styl, w jakim urządzone jest pomieszczenie.
Do jakich wnętrz najlepiej pasuje lampa sufitowa?
Oświetlenie będzie znakomitą lampą do kuchni, biura, salonu czy sypialni. Klasyczny styl świetnie prezentuje się w każdym pomieszczeniu. Ciemna konstrukcja lampy wiszącej doda wnętrzu elegancji, a biały stelaż ożywi i skontrastuje ciemne pomieszczenia.
Czy prezentowany plafon jest funkcjonalny?
Oczywiście, że tak! Klosze lampy osadzone są na przegubach, co pozwala na regulację kąta padania światła w dowolny sposób. Ponadto materiały użyte do produkcji lampy są wytrzymałe i odporne na uszkodzenia. Oświetlenie zasilane jest wieloma rodzajami światła, na przykład żarówkami LED lub energooszczędnymi.";
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
$product->name = [$default_lang => "Lampa Sufitowa Chrom Różne Rodzaje Żyrandol"];
$product->link_rewrite = [$default_lang => "lampa-sufitowa-chrom-rozne-rodzaje-zyrandol"];
$product->price = 95.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/lampa-2-plomienna-z-chromowanymi-elementami-plafon-rozne-rodzaje-zyrandol.jpg";
$product->image_url = $url;
$product->description = "Lampa sufitowa 2 – punktowa klosze do wyboru
Nowoczesny i stylowy design oświetlenia sufitowego nada Twoim wnętrzom wyjątkowego klimatu. Klasyczna, a zarazem przyciągająca uwagę konstrukcja fantastycznie ozdobi Twoją aranżację.
Do jakich wnętrz pasuje prezentowana lampa wisząca?
Absolutnie do wszystkich! Lampa możesz zawiesić zarówno w salonie czy jadalni jak i sypialni lub biurze. Dwa kontrastowe kolory stelaża do wyboru umożliwiają dopasowanie lampy wiszącej do każdego stylu. Dodatkowo duża ilość pięknych kloszy do lampy pozwala na stworzenie własnego, oryginalnego oświetlenia.
Czy lampa jest funkcjonalna?
Bardzo praktyczną opcją lampy jest możliwość regulacji kąta padania światła, dzięki której możesz skierować klosze w dowolnym kierunku. Lampa wykonana jest z solidnych i wytrzymałych materiałów – metalu z chromowanymi elementami i szkła. Oświetlenie może być zasilane żarówkami LED, energooszczędnymi i wieloma innymi.";
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
$product->name = [$default_lang => "Stylowa Lampa Wisząca Różne Klosze Żyrandol"];
$product->link_rewrite = [$default_lang => "stylowa-lampa-wiszaca-rozne-klosze-zyrandol"];
$product->price = 109.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/lampa-2-plomienna-z-chromowanymi-elementami-zyrandol-rozne-wzory-plafon-wiszaca-stylowy.jpg";
$product->image_url = $url;
$product->description = "Elegancka lampa wisząca 2 – płomienna z chromowanymi elementami
Oryginalna i awangardowa konstrukcja lampy sufitowej urozmaici Twoje wnętrza. Wyjątkowy wygląd oświetlenie świetnie skomponuje się z każdym stylem pomieszczenia – od nowoczesnego po klasyczny.
Do jakich wnętrz pasuje prezentowana lampa sufitowa?
Oświetlenie będzie idealną lampą do kuchni, salonu, pokoju czy sypialni. Brązowy stelaż fenomenalnie odnajdzie się w klasycznych aranżacjach urządzonych zarówno w jasnych jak i ciemnych kolorach. Satynowa konstrukcja lampy wiszącej rewelacyjnie wygląda w pomieszczeniach kuchennych bądź jadalnych, nadając im elegancji.
Czy 2 – płomienna lampa jest funkcjonalna?
Solidne materiały wykorzystane do produkcji lampy zapewnią Ci radość z jej użytkowania na bardzo długi czas. Ponadto wiele szklanych kloszy do wyboru pozwala na stworzenie własnego, oryginalnego wyglądu lampy. Oświetlenie może być zasilane wieloma rodzajami światła, na przykład żarówkami ledowymi.";
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
$product->name = [$default_lang => "Stylowa Lampa Sufitowa Kule Metalowa"];
$product->link_rewrite = [$default_lang => "stylowa-lampa-sufitowa-kule-metalowa"];
$product->price = 85.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/lampa-kule-metalowa-oprawa-nowocszesna-sufitowa-rozne-kolory.jpg";
$product->image_url = $url;
$product->description = "Lampa sufitowa 3 – punktowa metalowe kule
Prosty, ale nowatorski design lampy wiszącej nada Twoim wnętrzom elegancji i wyjątkowości. Metalowe kule w klasycznych kolorach idealnie uzupełnią każdą aranżację.
Do jakich wnętrz pasuje prezentowany plafon?
Lampa sufitowa wspaniale ozdobi Twoją kuchnię, biuro, pokój czy salon. Stonowane kolory świetnie odnajdą się w pomieszczeniach urządzonych zarówno w jasnych jak i ciemnych barwach.
Jakie zalety posiada nowoczesna lampa wisząca?
Plafon posiada możliwość regulacji kąta padania światła, dzięki czemu możesz rozstawić klosze lampy w wygodny dla siebie sposób. Oświetlenie sufitowe stworzone jest z wytrzymałego i odpornego na uszkodzenia metalu. Dodatkowo plafon jest także lampą LED.";
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
$product->name = [$default_lang => "Lampa Sufitowa Plafon z Chromowanymi Elementami"];
$product->link_rewrite = [$default_lang => "lampa-sufitowa-plafon-z-chromowanymi-elementami"];
$product->price = 95.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/lampa-2-plomienna-z-chromowanymi-elementami-zyrandol-plafon-sufitowa-wiszaca.jpg";
$product->image_url = $url;
$product->description = "Lampa wisząca 2 – płomienna szklane klosze do wyboru
Oryginalny i ponadczasowej design lampy wiszącej sprawi, że Twoje wnętrza nabiorą nowego, niepowtarzalnego stylu.
Gdzie najlepiej prezentuje się elegancki plafon?
Lampa wspaniale ozdobi Twój salon, pokój, biuro czy sypialnię. Dwa kolory konstrukcji oraz możliwość wybrania klosza pozwolą Ci stworzyć unikatowe oświetlenie, które idealnie odda charakter Twojego pomieszczenia.
Czy prezentowana lampa sufitowa jest funkcjonalna?
Oczywiście, że tak! Klosze lampy osadzone są na przegubach, co pozwala na regulację kąta padania światła. Ponadto metalowa konstrukcja żyrandola pozwoli Ci cieszyć się oświetleniem przez bardzo długi czas. Plafon może być zasilany wieloma rodzajami światła, na przykład żarówkami LED.";
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
$product->name = [$default_lang => "Nowoczesna Lampa Sufitowa na Listwie Plafon"];
$product->link_rewrite = [$default_lang => "nowoczesna-lampa-sufitowa-na-listwie-plafon"];
$product->price = 82.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/lampa-2-plomienna-z-chromowanymi-elementami-nowoczesny-plafon-sufitowa-wiszaca.jpg";
$product->image_url = $url;
$product->description = "Lampa sufitowa 2 źródła światła plafon
Klasyczny i elegancki design lampy wiszącej pozwolą Ci stworzyć oryginalną aranżację. Dwa kolory konstrukcji do wyboru umożliwiają idealne dopasowanie lampy do pomieszczenia.
Do jakich wnętrz pasuje nowoczesny plafon?
Lampa będzie fantastyczną ozdobą Twojej kuchni, salonu, pokoju czy biura. Ciemna konstrukcja lampy świetnie skontrastuje jasne wnętrza. Biały stelaż plafonu wspaniale odnajdzie się w ciemnych, klasycznych pomieszczeniach.
Jakie zalety posiada prezentowany żyrandol?
Klosze lampy wiszącej osadzone są na przegubach, co pozwala regulację kąta padania światła. Konstrukcja oświetlenia sufitowego stworzona jest z wytrzymałego metalu, a klosze wykonane są z odpornego na uszkodzenia szkła. Dodatkowe lampa pełni także rolę plafonu LED.";
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
$product->name = [$default_lang => "Lampa z Chromowanymi Elementami Żyrandol Plafon"];
$product->link_rewrite = [$default_lang => "lampa-z-chromowanymi-elementami-zyrandol-plafon"];
$product->price = 80.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/lampa-2-plomienna-z-chromowanymi-elementami-zyrandol-plafon-wiszaca-sufitowa-rozne-wzory-kolory.jpg";
$product->image_url = $url;
$product->description = "2 – punktowa lampa wisząca klosze do wyboru
Elegancki styl lampy sufitowej nada Twoim niepowtarzalny klimat. Oryginalna konstrukcja w połączeniu z pięknymi kloszami dają lampę idealnie dopasowującą się do każdej aranżacji.
Do jakich wnętrz pasuje prezentowany plafon?
Lampa może pełnić rolę zarówno oświetlenia kuchennego jak i pokojowego czy salonowego. Dzięki dwóm kolorom konstrukcji (brąz i satyna) idealnie dopasujesz lampę do stylu Twojego pomieszczenia. Dodatkowo wiele kloszy do wyboru pozwala na stworzenia własnego, niepowtarzalnego oświetlenia.
Z czego wykonana jest lampa wisząca?
Stelaż żyrandola wykonany jest z wytrzymałego metalu, a klosze do lampy są szklane. Oświetlenie pełni również rolę lampy ledowej.";
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
$product->name = [$default_lang => "Lampa Sufitowa Kule Metalowa Przegub"];
$product->link_rewrite = [$default_lang => "lampa-sufitowa-kule-metalowa-przegub"];
$product->price = 58.50;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/lampa-kule-metalowa-oprawa-wiszaca-sufitowa-plafon-nowoczesna.jpg";
$product->image_url = $url;
$product->description = "Lampa sufitowa 2 – płomienna plafon metalowe kule
Nowoczesny design lampy wiszącej wprowadzi wyjątkowego klimatu do Twoich wnętrz. Dwie metalowe kule będą wspaniale uzupełniać aranżację zaprojektowaną w każdym stylu – od nowoczesnej po klasyczną.
Gdzie zawiesić prezentowany plafon?
Lampa może pełnić rolę oświetlenia kuchennego, pokojowego, biurowego czy łazienkowego. Klasyczne i stonowane kolory, w jakich została stworzony plafon, sprawiają, że idealnie wpasowuje się w każde wnętrze.
Czy lampa sufitowa jest funkcjonalna?
Plafon posiada wiele pożytecznych funkcji, takich jak regulacja kąta światła lub możliwość podłączenia pod podwójny przełącznik. Lampa wykonana jest z trwałego i odpornego na uszkodzenia metalu. Ponadto oświetlenie posiada wiele opcji zasilania, na przykład żarówkami ledowymi.";
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
$product->name = [$default_lang => "Lampa Sufitowa Plafon Diament z Abażurami"];
$product->link_rewrite = [$default_lang => "lampa-sufitowa-plafon-diament-z-abazurami"];
$product->price = 94.50;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/lampa-sufitowa-plafon-diament-2-plomienna.jpg";
$product->image_url = $url;
$product->description = "Lampa plafon z abażurem 2-płomienna Diament
Stylowy i elegancki plafon, który ożywi Twoją aranżację wnętrz i doda jej mnóstwo uroku. Wybierz kolor konstrukcji oraz abażura i stwórz własną, niepowtarzalną lampę idealnie oddającą charakter Twojego pomieszczenia.
Gdzie najlepiej będzie prezentować się 2-płomienny plafon?
Lampa sufitowa znakomicie wygląda w sypialni, salonie, biurze czy kuchni. Dzięki możliwości wyboru koloru konstrukcji i opcji dobrania do niego barwy abażura, możesz stworzyć oświetlenie idealnie pasujące do Twoich wnętrz.
Czy plafon jest funkcjonalny?
Lampa wykonana jest z trwałych i solidnych tworzyw, dzięki czemu możesz cieszyć się z użytkowania plafonu przez bardzo długi czas. Lampa sufitowa posiada możliwość podłączenia pod podwójny przełącznik. Plafon może być zasilany wieloma rodzajami żarówek, w tym ledowymi, E-27 czy energooszczędnymi";
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
$product->name = [$default_lang => "Lampa Sufitowa Plafon Diament Abażur"];
$product->link_rewrite = [$default_lang => "lampa-sufitowa-plafon-diament-abazur"];
$product->price = 55.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/lampa-sufitowa-plafon-diament-abazur.jpg";
$product->image_url = $url;
$product->description = "Lampa plafon z abażurem
Stylowy plafon, który nada Twoim wnętrzom niezwykłego klimatu. Oryginalny abażur w kształcie diamentu doda aranżacji elegancji i wytworności.
Do jakich wnętrz pasuje 1-płomienny plafon?
Elegancki wygląd lampy sufitowej doskonale prezentuje zarówno w sypialni, salonie bądź biurze jak i kuchni czy jadalni. Czerwony abażur rewelacyjnie ożywi wnętrza, a odcienie szarości i czerń wprowadzą do nich mnóstwo wyjątkowego stylu.
Jakie zalety posiada plafon?
Możliwość wybrania koloru konstrukcji i abażura pozwala na stworzenie własnego, oryginalnego oświetlenia. Ponadto lampa wykonana jest wytrzymałego metalu i odpornego na uszkodzenia materiału, dzięki czemu plafon będzie służył Ci przez wiele lat. Lampa może być zasilana wieloma rodzajami żarówek, w tym LED, zwykłymi, E-27 czy energooszczędnymi.";
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
$product->name = [$default_lang => "Lampa Sufitowa Plafon Różne Kolory Diament Abażury"];
$product->link_rewrite = [$default_lang => "lampa-sufitowa-plafon-rozne-kolory-diament-abazury"];
$product->price = 125.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/lampa-sufitowa-plafon-3-plomienna-diament.jpg";
$product->image_url = $url;
$product->description = "Plafon 3 źródła światła Diament
Przedstawiamy lampę, która nie tylko rozświetli wnętrza, ale również będzie piękną i wyjątkową ozdobą Twojej aranżacji.
Gdzie najlepiej prezentuje się 3-płomienny plafon?
Dzięki klasycznym kolorom, lampa może zwisnąć w wielu pomieszczeniach. Sypialnia, salon, kuchnia czy jadalnia – do każdego wnętrza lampa wprowadzi mnóstwo uroku i elegancji. Plafon posiada możliwość samodzielnego wybrania koloru konstrukcji i abażura, co pozwoli Ci stworzyć lampę sufitową idealnie pasującą do charakteru Twoich wnętrz.
Jakie zalety posiada elegancki plafon?
Lampa została wykonana z tworzyw najwyższej jakości, dzięki czemu będziesz cieszyć się z użyteczności lampy przez bardzo długi czas. Plafon możesz również podłączyć pod podwójny przełącznik. Lampa może być zasilana wieloma rodzajami światła, w tym żarówkami E-27, LED czy energooszczędnymi.";
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
$product->name = [$default_lang => "Lampa Sufitowa Plafon Reflektor Różne Kolory"];
$product->link_rewrite = [$default_lang => "lampa-sufitowa-plafon-reflektor-rozne-kolory"];
$product->price = 95.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/lampa-sufitowa-plafon-2-plomienna.jpg";
$product->image_url = $url;
$product->description = "Lampa plafon 2-płomienna
Nowoczesny design lampy sufitowej wspaniale wkomponuje się w każdy styl Twojego pomieszczenia. Ozdób plafon kolorową linką i ciesz wyjątkową, a także klimatyczną aranżacją.
W jakich wnętrzach plafon prezentuje się najlepiej?
Lampa może pełnić rolę zarówno oświetlenia kuchennego jak i sypialnianego czy biurowego. Klasyczny i minimalistyczny styl lampy sufitowej wygląda zachwycająco we wszystkich pomieszczeniach. Do koloru konstrukcji plafonu możesz dobrać barwę przewodu w oplocie, dzięki czemu stworzysz niepowtarzalną lampę wiszącą idealnie oddającą charakter Twojej aranżacji.
Czy lampa 2-punktowa jest funkcjonalna?
Oczywiście, że tak! Lampa posiada możliwość regulacji kąta światła, co pozwala na ustawienie kloszy pod dowolnym kątem i kierunkiem. Plafon wykonany jest z wysokiej jakości tworzyw, dzięki czemu masz gwarancję niezawodności i wytrzymałości lampy. Plafon może być zasilany żarówkami GU10 lub LED o mocy 20W.";
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
$product->name = [$default_lang => "Nowoczesna Lampa Kinkiet Plafon 20W"];
$product->link_rewrite = [$default_lang => "nowoczesna-lampa-kinkiet-plafon-20w"];
$product->price = 55.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/nowoczesna-lampa-kinkiet-plafon-20w.jpg";
$product->image_url = $url;
$product->description = "Nowoczesny plafon z linką w oplocie
Niezwykły design lampy sufitowej nada Twoim wnętrzom niepowtarzalnego klimatu. Klasyczne kolory plafonu sprawią, ze Twoja aranżacja stanie się elegancka i stylowa.
Do jakich wnętrz pasuje lampa 1-punktowa?
Plafon będzie funkcjonalnym oświetleniem do biura, salonu, kuchni czy sypialni. Dzięki klasycznym kolorom, lampa doskonale dopasowuje się do aranżacji wnętrza. Do plafonu możesz dobrać kolor przewodu w oplocie, co pozwala na stworzenie indywidualnego i niepowtarzalnego oświetlenia.
Jakie zalety posiada elegancki plafon?
Lamp sufitowa posiada opcję regulacji kąta światła, dzięki czemu możesz ustawić klosz pod dowolnym kierunkiem. Plafon wykonany jest z wytrzymałych i odpornych na uszkodzenia tworzyw. Lampa może być zasilana żarówkami LED GU10.";
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
$product->name = [$default_lang => "Lampa Sufitowa LED Plafon Wiele Kolorów"];
$product->link_rewrite = [$default_lang => "lampa-sufitowa-led-plafon-wiele-kolorow"];
$product->price = 89.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/nowoczesna-lampa-kinkiet-plafon-20w.jpg";
$product->image_url = $url;
$product->description = "Lampa sufitowa 2-płomienna plafon
Elegancka i stylowa lampa, która świetnie rozświetli Twoje wnętrza, a także nada im wyjątkowego klimatu.
Gdzie najlepiej prezentuje się 2-punktowy plafon?
Klasyczny design pozwala na zawieszenie lampy sufitowej w każdym pomieszczeniu. Biuro, salon, sypialnia czy kuchnia – plafon będzie wspaniałą ozdobą dla każdego z tych wnętrz. Do lampy możesz dobrać kolor dekoracyjnych linek, dzięki czemu jeszcze dokładniej dopasujesz oświetlenie do swojej aranżacji.
Czy lampa sufitowa jest funkcjonalna?
Plafon posiada klosze osadzone na przegubach, co pozwala na dowolne ustawienie kąta padania światła. Ponadto lampa stworzona jest z wysokiej jakości tworzyw, co gwarantuje niezawodność i wytrzymałość plafonu. Oświetlenie zasilane jest żarówkami GU10.";
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
$product->name = [$default_lang => "Nowoczesna Lampa LED Sufitowa Plafon Spot"];
$product->link_rewrite = [$default_lang => "nowoczesna-lampa-led-sufitowa-plafon-spot"];
$product->price = 115.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/nowoczesna-lampa-kinkiet-plafon-20w.jpg";
$product->image_url = $url;
$product->description = "Lampa plafon 3-punktowa dwa kolory
Stylowa i funkcjonalna lampa, która nada Twoim wnętrzom elegancji i uroku. Wybierz kolor plafonu najbardziej pasujący do Twojej aranżacji i ciesz się pięknym wystrojem wnętrz.
Do jakich pomieszczeń pasuje prezentowana lampa sufitowa?
Plafon może pełnić rolę oświetlenia biurowego, kuchennego, salonowego czy sypialnianego. Minimalizm i klasyczny design pozwalają na zamieszczenie lampy w każdym pomieszczeniu. Dodatkowo lampa posiada aż sześć kolorów linek do wyboru, dzięki czemu delikatnie ozdobisz stylowy plafon.
Czy prezentowana lampa 3-płomienna jest funkcjonalna?
Oczywiście, że tak! Plafon posiada możliwość regulacji kąta padania światła, dzięki czemu możesz skierować klosze lampy sufitowej w dowolnym kierunku. Do stworzenia oświetlenie wykorzystano trwałe i solidne tworzywa, przez co masz gwarancję jakości i wytrzymałości lampy. Plafon może być zasilany żarówkami LED.";
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
$product->name = [$default_lang => "Lampa Sufitowa Plafon Spot na Listwie GU10 20W"];
$product->link_rewrite = [$default_lang => "lampa-sufitowa-plafon-spot-na-listwie-gu10-20w"];
$product->price = 119.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/nowoczesna-lampa-kinkiet-plafon-20w.jpg";
$product->image_url = $url;
$product->description = "Lampa plafon 3-płomienna na listwie
Prosty i klasyczny wygląd lampy sufitowej doda Twoim wnętrzom elegancji i będzie wspaniale komponować się z każdym stylem pomieszczenia.
Gdzie najlepiej zawiesić stylowy plafon?
Lampa świetnie sprawdzi się zarówno w biurze, sypialni, pokoju jak i kuchni czy jadalni. Plafon dodaje elegancji awangardowym wnętrzom, a do aranżacji retro wprowadza nowoczesność. Dodatkową ozdobą sufitowej lampy są linki, których kolor możesz samodzielnie wybrać , tworząc przy tym własne, niepowtarzalne oświetlenie.
Jakie zalety posiada 3-punktowy plafon?
Lampa wykonana jest z metalu, dzięki czemu masz pewność niezawodności i wytrzymałości plafonu. Oświetlenie posiada możliwość regulacji kąta padania światła, a także opcję podłączenia pod podwójny przełącznik. Lampa sufitowa zasilana jest żarówkami GU10.";
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
$product->name = [$default_lang => "Nowoczesna Lampa Sufitowa Plafon Spot 20W"];
$product->link_rewrite = [$default_lang => "nowoczesna-lampa-sufitowa-plafon-spot-20w"];
$product->price = 149.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/nowoczesna-lampa-kinkiet-plafon-20w.jpg";
$product->image_url = $url;
$product->description = "Plafon 4-płomienny dwa kolory
Eleganckie, a zarazem nowoczesne oświetlenie, które nada Twoim wnętrzom wyjątkowego klimatu. Wybierz kolor plafonu najbardziej odpowiadający Twojej aranżacji i ciesz się zachwycającym wystrojem pomieszczeń.
Gdzie najlepiej prezentuje się 4-punktowy plafon?
Lampa pasuje zarówno do biura, sypialni, salonu jak i kuchni czy jadalni. Klasyczny styl oświetlenia sufitowego świetnie komponuje się z pomieszczeniami o każdym przeznaczeniu. Lampa posiada kolory linek w oplocie do wyboru, dzięki czemu możesz odrobinę urozmaicić klasyczny plafon oraz swoją aranżację wnętrz.
Czy plafon jest funkcjonalny?
Lampa posiada możliwość regulacji kąta padania światła pod dowolnym kierunkiem, dzięki czmeu możesz ustawić klosze w wygodny dla siebie sposób. Oświetlenie zostało wykonane z metalu, dzięki czemu trwałe i odporne na uszkodzenia. Plafon zasilany jest żarówkami GU10.";
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
$product->name = [$default_lang => "Lampa Sufitowa Plafon Różne Rodzaje 20W LED"];
$product->link_rewrite = [$default_lang => "lampa-sufitowa-plafon-rozne-rodzaje-20w-led"];
$product->price = 89.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/nowoczesna-lampa-kinkiet-plafon-20w.jpg";
$product->image_url = $url;
$product->description = "Lampa sufitowa plafon 2 źródła światła
Przestawiamy lampę sufitową, która swym minimalistycznym stylem wprowadzi do Twoich wnętrz mnóstwo uroku i elegancji.
Gdzie najlepiej prezentuje się stylowy plafon 2-płomienny?
Lampa będzie wyglądać rewelacyjnie w biurze, pokoju, sypialni czy nawet kuchni lub salonie. Klasyczne kolory konstrukcji w połączeniu z barwnymi linkami sprawiają, że plafon znakomicie dopasowuje się do każdego stylu – od nowoczesne po aranżacje retro.
Jakie zalety posiada prezentowana lampa sufitowa?
Plafon posiada klosze osadzone na przegubach, co daje możliwość regulacji padania światła pod dowolnym kątem i kierunkiem. Lampa wykonana jest z metalu, dzięki czemu masz gwarancję wytrzymałości i niezawodności oświetlenia sufitowego. Plafon zasilany jest żarówkami GU10, LED";
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
$product->name = [$default_lang => "Lampa Sufitowa Plafon Reflektor"];
$product->link_rewrite = [$default_lang => "lampa-sufitowa-plafon-reflektor"];
$product->price = 149.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/lampa-sufitowa-plafon-reflektor.jpg";
$product->image_url = $url;
$product->description = "Lampa sufitowa 1-płomienna reflektor
Przedstawiamy lampę sufitową, które wspaniale ozdobi nowoczesne wnętrza oraz będzie funkcjonalnym oświetleniem dla Twojego pomieszczenia.
Gdzie najlepiej zawiesić nowoczesny reflektor?
Lampa będzie rewelacyjnie prezentować się w salonie, sypialni, pokoju, biurze czy kuchni. Ze względu na prosty, klasyczny design lampa odnajdzie się w każdym pomieszczeniu. Plafon nada elegancji awangardowym wnętrzom, a do aranżacji retro wprowadzi odrobinę nowoczesności.
Czy prezentowany plafon jest praktyczny?
Oczywiście, że tak! Lampa posiada możliwość regulacji kąta padania światła, dzięki czemu skierujesz reflektor w wygodny dla siebie sposób. Plafon stworzony jest w dwóch klasycznych kolorach, aby z łatwością dopasować go do każdego rodzaju pomieszczenia. Lampa sufitowa jest zasilana żarówkami LED AR111 GU10.";
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
$product->name = [$default_lang => "Lampa Plafon Reflektor Dwa Kolory"];
$product->link_rewrite = [$default_lang => "lampa-plafon-reflektor-dwa-kolory"];
$product->price = 239.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/lampa-sufitowa-plafon-reflektor.jpg";
$product->image_url = $url;
$product->description = "Lampa 2-punktowa plafon reflektor
Nowoczesny, a zarazem minimalistyczny styl lampy sufitowej doda Twoim wnętrzom elegancji i niezwykłego uroku.
Do jakich pomieszczeń pasuje stylowy plafon?
Lampa może zawisnąć w absolutnie każdym wnętrzu – od sypialni, salonu po kuchnię czy biuro. Dzięki prostemu i klasycznemu stylowi, lampa znakomicie dopasowuje się do wszystkich aranżacji pomieszczeń. Klasyczne kolory plafonu pozwalają na łatwe skomponowanie go z detalami wystroju.
Jakie zalety posiada lampa sufitowa?
Oświetlenie posiada możliwość regulacji kąta światła, dzięki czemu można ustawić je pod dowolnym kierunkiem. Plafon wykonany jest z materiałów najwyższej jakości, co gwarantuje niezawodność reflektora. Ponadto lampa posiada opcję podłączenia pod podwójny przełącznik. Plafon zasilany jest żarówkami LED AR111 GU10.";
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
$product->name = [$default_lang => "NOWOCZESNA LAMPA SUFITOWA PLAFON REFLEKTOR"];
$product->link_rewrite = [$default_lang => "nowoczesna-lampa-sufitowa-plafon-reflektor"];
$product->price = 389.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/nowoczesna-lampa-sufitowa-plafon-reflektor.jpg";
$product->image_url = $url;
$product->description = "Plafon 4-płomienny reflektor
Szukasz funkcjonalnego i stylowego oświetlenia, które nie odciągnie uwagi od Twojej nowoczesnej bądź oryginalnej aranżacji wnętrz? Przedstawiamy 4-punktowy plafon zachwycający swoim minimalistycznym designem.
Do jakich pomieszczeń pasuje prezentowana lampa sufitowa?
Plafon możesz zawiesić w każdym wnętrzu, niezależnie od jego przeznaczenia czy charakteru. Lampa, dzięki klasycznym kolorom i prostej konstrukcji, idealnie wpasowuje się we wszystkie wystroje pomieszczeń.
Czy plafon jest funkcjonalny?
Lampa posiada możliwość regulowania kąta padania światła, co sprawia, że każdy z czterech reflektorów możesz ustawić w wygodny dla siebie sposób. Ponadto oświetlenie sufitowe wykonane jest z trwałych tworzyw i posiada opcję podłączenia pod podwójny przełącznik. Lampa może byyć zasilana żarówkami LED AR111 GU10.";
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
$product->name = [$default_lang => "LAMPA LED PLAFON REFLEKTOR ODBŁYŚNIK"];
$product->link_rewrite = [$default_lang => "lampa-led-plafon-reflektor-odblysnik"];
$product->price = 329.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/lampa-led-plafon-reflektor-odblysnik.jpg";
$product->image_url = $url;
$product->description = "Plafon 3-punktowa plafon
Nasze stylowe oświetlenie doda Twoim wnętrzom mnóstwo elegancji i uroku. Wybierz kolor, który najbardziej będzie komponował się z Twoją aranżacją i ciesz się zachwycającym, a także niebanalnym wystrojem pomieszczeń.
Do jakich wnętrz pasuje prezentowany plafon?
Lampa sufitowa może zawisnąć w każdym pomieszczeniu. Salon, sypialnia, kuchnia czy biuro – minimalistyczny styl oświetlenia sufitowego rewelacyjnie ozdobi wnętrza o dowolnym przeznaczeniu czy charakterze.
Jakie zalety posiada 3-płomienny reflektor?
Lampa posiada możliwość regulacji kąta padania światła, dzięki czemu możesz ustawić reflektory w wygodny dla siebie sposób. Plafon wykonany jest z tworzyw najwyższej jakości, co gwarantuje Ci niezawodność oświetlenia sufitowego. Lampę można podłączyć pod podwójny przełącznik. Plafon zasilany jest żarówkami LED AR111 GU10.";
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
$product->name = [$default_lang => "Lampa Sufitowa z Abażurem Chrom"];
$product->link_rewrite = [$default_lang => "lampa-sufitowa-z-abazurem-chrom"];
$product->price = 139.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/lampa-sufitowa-z-abazurem-chrom.jpg";
$product->image_url = $url;
$product->description = "Lampa wisząca plafon 2-płomienna z abażurem
Elegancki wygląd lampy sufitowej sprawi, że Twoje wnętrza będą zachwycać niepowtarzalnym i magicznym designem!
Do jakich pomieszczeń pasuje prezentowana lampa wisząca?
Oświetlenie nadaje się zarówno do sypialni, salonu, pokoju jak i kuchni czy jadalni. Chromowa konstrukcja o metalicznym połysku świetnie prezentuje się w nowoczesnych, a także aranżacjach retro. Natomiast oryginalny kształt abażurów oraz ich jasny kolor nada każdemu pomieszczeniu elegancji.
Jakie zalety posiada 2-punktowy plafon?
Atutem wiszącej lampy są wysokiej jakości materiały wykorzystane do produkcji plafonu. Dają one gwarancję zadowolenia i pożyteczności z lampy. Oświetlenie możesz podłączyć pod podwójny przełącznik, co również jest niezwykle funkcjonalnym rozwiązaniem. Lampa może być zasilana wieloma rodzajami oświetlenia, w tym żarówkami E-27 – ledowymi, zwykłymi czy energooszczędnymi.";
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
$product->name = [$default_lang => "Lampa Sufitowa Plafon z Abażurem Chrom"];
$product->link_rewrite = [$default_lang => "lampa-sufitowa-plafon-z-abazurem-chrom"];
$product->price = 161.10;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/lampa-sufitowa-z-abazurem-chrom.jpg";
$product->image_url = $url;
$product->description = "Lampa sufitowa 3-płomienna plafon z abażurem
Nowoczesny, a zarazem elegancki design lampy wiszącej nada Twoim wnętrzom wyjątkowego klimatu. Zobacz, jak oświetlenie o minimalistycznym stylu potrafi nadać aranżacji zupełnie nowego wyglądu!
Gdzie najlepiej zawiesić stylowy plafon?
Dzięki klasycznej konstrukcji, lampa będzie świetnie prezentować się zarówno w kuchni, jadalni jak i sypialni, salonie czy biurze. Jasny kolor abażurów fantastyczne komponuje się z ciemnymi, a także jasnymi pomieszczeniami. Natomiast metaliczny połysk konstrukcji lampy sufitowej doda elegancji zarówno aranżacjom retro jak i nowoczesnym wnętrzom.
Jakie atuty posiada 3-punktowa lampa?
Plafon wykonany jest z solidnych materiałów, dzięki czemu lampa będzie pełnić swoją funkcję przez wiele lat. Ponadto oświetlenie posiada możliwość podłączenia pod podwójny przełącznik, co czynie je niezwykle praktycznym. Lampa może być zasilana wieloma różnymi typami oświetlenia, na przykład żarówkami LED czy energooszczędnymi.";
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
$product->name = [$default_lang => "Lampa Sufitowa Plafon Żyrandol Szklany"];
$product->link_rewrite = [$default_lang => "lampa-sufitowa-plafon-zyrandol-szklany"];
$product->price = 89.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/lampa-sufitowa-plafon-zyrandol-szklany.jpg";
$product->image_url = $url;
$product->description = "Lampa sufitowa 3-płomienna ze szklanymi kloszami
Klasyczny i elegancki design lampy sufitowej nada Twoim wnętrzom stylowości i niepowtarzalnego klimatu. Plafon świetnie prezentuje się zarówno w nowoczesnych wnętrzach jak i aranżacjach retro.
W jakim pomieszczeniu najlepiej będzie wyglądać elegancka lampa?
Żyrandol może stać się ozdobą dla Twojego salonu, jadalni, sypialni, biura czy kuchni. Klasyczne kolory konstrukcji rewelacyjnie współgrają z każdym pomieszczeniem, niezależnie od jego pomieszczenia. Kwadratowe, szklane klosze dodają wnętrzu mnóstwo elegancji.
Jakie zalety posiada żyrandol?
Największym atutem plafonu jest możliwość regulacji kąta światła pod dowolnym kątem i kierunkiem, dzięki czemu możesz rozstawić klosze w wygodny dla siebie sposób. Solidne materiały wykonania wykorzystane do produkcji żyrandola sprawią, że będziesz cieszyć się użytecznością lampy sufitowej na długi czas. Plafon może być zasilany różnymi źródłami światła, w tym żarówkami LED, zwykłymi lub energooszczędnymi o gwincie E-27.";
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
$product->name = [$default_lang => "Lampa Wisząca Żyrandol Szkło Plafon"];
$product->link_rewrite = [$default_lang => "lampa-wiszaca-zyrandol-szklo-plafon"];
$product->price = 115.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/lampa-wiszaca-4-punktowa-zyrandol-szklo-plafon.jpg";
$product->image_url = $url;
$product->description = "Lampa sufitowa 4 źródła zasilania plafon
Elegancki design plafonu sprawi, że Twoje wnętrza nabiorą nowego, niezwykłego charakteru. Wprowadź do swojej aranżacji odrobinę uroku i stylowości!
W jakich pomieszczeniach lampa sufitowa prezentuje się najlepiej?
Oświetlenie może stać się znakomitą ozdobą Twojego salonu, sypialni, biura czy jadalni - prosta, choć elegancka konstrukcja żyrandolu najlepiej będzie prezentować się w tego typu pomieszczeniach. Możesz wybrać kolor oświetlenie spośród czterech do wyboru, dzięki czemu jeszcze dokładniej dopasujesz je do stylu swojej aranżacji.
Jakie atuty posiada elegancki żyrandol?
Lampa wykonana jest z wysokiej jakości tworzyw, przez co plafon będzie oświetlał Twoje wnętrza przez długi czas. Kolejną zaletą żyrandola są klosze osadzone na przegubach. Ta metoda pozwala na regulację światła pod pod dowolnym kątem i kierunkiem. Lampa może być podłączona pod podwójny przełącznik, co również jest niezwykle funkcjonalnym rozwiązaniem. Plafon zasilany jest różnymi rodzajami żarówek – ledowymi, energooszczędnymi czy zwykłymi o gwincie E-27.";
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
$product->name = [$default_lang => "Lampa Wisząca ze Szklanym Kloszem Plafon"];
$product->link_rewrite = [$default_lang => "lampa-wiszaca-ze-szklanym-kloszem-plafon"];
$product->price = 27.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/lampa-wiszaca-ze-szklanym-kloszem-1-punktowa-plafon.jpg";
$product->image_url = $url;
$product->description = "Plafon 1-płomienny ze szklanym kloszem
Prosta i klasyczna lampa sufitowa, która nadaje wnętrzom elegancji i wyjątkowego klimatu. Wybierz kolor konstrukcji najbardziej pasujący do Twojej aranżacji i ciesz się zjawiskowym wystrojem swojego mieszkania!
Do jakich wnętrz pasuje stylowy plafon?
Lampa znakomicie prezentuje się w każdym pomieszczeniu – salon, biuro, jadalnia czy sypialnia – plafon doskonale odda charakter każdego z tych wnętrz. Lampa stworzona jest w czterech stylowych kolorach, aby dopasowanie plafonu do detali wystroju pomieszczenia było jeszcze łatwiejsze.
Jakie zalety posiada elegancka lampa sufitowa?
Oświetlenie zostało wykonane z metalu malowanego proszkowo, dzięki czemu masz pewność, co do wytrzymałości i długowieczności lampy. Klosze plafonu stworzone są z solidnego i odpornego na uszkodzenia szkła. Źródła światła, jakimi lampa wisząca może być zasilana, to żarówki LED, zwykłe czy energooszczędne z gwintem E-27.";
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
$product->name = [$default_lang => "Lampa ze Szklanym Kloszem Sufitowa"];
$product->link_rewrite = [$default_lang => "lampa-ze-szklanym-kloszem-sufitowa"];
$product->price = 65.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/lampa-ze-szklanym-kloszem-sufitowa.jpg";
$product->image_url = $url;
$product->description = "Lampa sufitowa plafon z dwoma źródłami światła
Klasyka i elegancja oświetlenia sufitowego w nowym wydaniu! Stylowa konstrukcja połączona ze szklanymi kloszami daje niesamowity efekt, który wyśmienicie prezentuje się w każdej aranżacji wnętrz.
Gdzie najlepiej zwiesić elegancki żyrandol?
Salon, sypialnia, biuro, jadalnia czy pokój dzienny – lampa doskonale komponuje się z każdym z tych pomieszczeń. Ciemne kolory konstrukcji nadadzą wnętrzom wytworności, a jaśniejsze barwy świetnie ożywią i rozświetlą pomieszczenia zaprojektowane w ciemnym tonie.
Jakie zalety posiada 2-płomienna lampa sufitowa?
Oświetlenie zostało wykonane z wysokiej jakości tworzyw, dzięki czemu będziesz cieszyć się stylowym plafonem przez bardzo długi czas. Lampa posiada możliwość podłączenia pod podwójny przełącznik, co także czyni ją niezwykle funkcjonalną. Żyrandol może być zasilany wieloma rodzajami źródeł światła, w tym żarówkami ledowymi, zwykłymi bądź energooszczędnymi z gwintem E-27.";
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
$product->name = [$default_lang => "Lampa Wisząca Sufitowa Plafon Szkło"];
$product->link_rewrite = [$default_lang => "lampa-wiszaca-sufitowa-plafon-szklo"];
$product->price = 79.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/lampa-wiszaca-3-punktowa-sufitowa-plafon-szklo.jpg";
$product->image_url = $url;
$product->description = "Plafon ze szklanymi kloszami lampa sufitowa
Ponadczasowy design żyrandola, który sprawdza się we wszystkich pomieszczeniach – od nowoczesnych wystrojów po aranżacje retro. Wybierz swój ulubiony kolor lampy i ciesz się stylowym i zachwycającym wnętrzem!
W jakich pomieszczeniach najlepiej prezentuje się 3-punktowy plafon?
Lampa może pełnić funkcję oświetlenia biurowego, kuchennego, do salony, jadalni czy sypialni. Klasyczna konstrukcja lampy sufitowej wygląda rewelacyjnie w każdym pomieszczeniu, bez względu na jego przeznaczenie.
Jakie zalety posiada elegancki żyrandol?
Oświetlenie jest wykonane z metalu, co czyni konstrukcję lampy niezwykle trwałą i solidną. Ponadto żyrandol posiada możliwość podłączenia pod podwójny przełącznik, dzięki czemu lampa jest bardzo funkcjonalna. Źródła światła, jakimi 3-płomienny plafon może być zasilany, to żarówki ledowe, energooszczędne bądź zwykłe z gwintem E-27.";
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
$product->name = [$default_lang => "Żyrandol Lampa Plafon Szklany Klosz"];
$product->link_rewrite = [$default_lang => "zyrandol-lampa-plafon-szklany-klosz"];
$product->price = 99.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/zyrandol-4-plomienny-lampa-plafon-szklany-klosz.jpg";
$product->image_url = $url;
$product->description = "Lampa wisząca 4-płomienna szklane klosze
Chcesz dodać swoim wnętrzom elegancji i stylowości? Nasz 4-punktowy plafon świetnie sprawdzi się w tej roli! Klasyczna konstrukcja połączona ze szklanymi kloszami dają oświetlenie, które znakomicie komponuje się z wieloma aranżacjami.
W jakich pomieszczeniach lampa sufitowa będzie prezentować się najlepiej?
Żyrandol może zawisnąć w salonie, biurze, sypialni, jadalni czy kuchni – wiele kolorów konstrukcji do wyboru pozwoli Ci idealnie dopasować oświetlenie do każdego stylu i przeznaczenia wnętrza. Ciemne kolory żyrandoli dodadzą aranżacji elegancji, a jasne barwy znakomicie rozświetlą wystrój pomieszczenia.
Jakie zalety posiada stylowy plafon?
Zaletą oświetlenia sufitowego są solidne materiały wykonania użyte do produkcji lampy. Metal malowany proszkowo zapewnia wytrzymałość i użyteczność żyrandola na długi czas. Ponadto lampa może zostać podłączona pod podwójny przełącznik, co również jest niezwykle funkcjonalnym rozwiązaniem. Plafon może być zasilany różnymi rodzajami żarówek E-27, w tym LED, energooszczędne czy zwykłe.";
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
$product->name = [$default_lang => "Nowoczesna Lampa Sufitowa Ball Plafon na LED"];
$product->link_rewrite = [$default_lang => "nowoczesna-lampa-sufitowa-ball-plafon-na-led"];
$product->price = 89.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/lampa-sufitowa-ball-3-plomienna-plafon-na-led.jpg";
$product->image_url = $url;
$product->description = "Lampa sufitowa 3-punktowa kule plafon
Klasyczny i elegancki design plafonu wspaniale komponuje się z nowoczesnymi wystrojami nadając im szyku i uroku. Wybierz kolor najbardziej pasujący do Twojej aranżacji i ciesz się zachwycającym stylem swoich wnętrz.
Do jakich pomieszczeń pasuje stylowa lampa sufitowa?
Oświetlenie to będzie wspaniale prezentować się w biurze, sypialni, pokoju czy salonie. Prosta, klasyczna konstrukcja idealnie komponuje się z minimalistycznymi, nowoczesnymi wnętrzami. Lampa stworzona jest w dwóch kolorach – czarnym i białym – aby dopasowanie oświetlenia do wystroju pomieszczenia było jeszcze łatwiejsze.
Jakie zalety posiada 3-płomienna lampa sufitowa?
Plafon posiada klosze osadzone na przegubach, co pozwala na ustawienie światła pod dowolnym kątem i kierunkiem. Lampa wykonana jest z metalu, dzięki czemu masz pewność, że oświetlenie będzie służyć Ci przez długi czas. Plafon posiada również opcję podłączenia pod podwójny przełącznik, co również czyni lampę niezwykle funkcjonalną. Żyrandol może być zasilany żarówkami LED GU10.";
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
$product->name = [$default_lang => "Nowoczesna Lampa Plafon Sufitowa Ball"];
$product->link_rewrite = [$default_lang => "nowoczesna-lampa-plafon-sufitowa-ball"];
$product->price = 69.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/lampa-sufitowa-ball-3-plomienna-plafon-na-led.jpg";
$product->image_url = $url;
$product->description = "Lampa wisząca plafon 2 źródła światła kule
Chcesz dodać swoim wnętrzom elegancji jednocześnie zachowując minimalistyczny styl aranżacji? Nasz 2-płomienny plafon spełnia wszystkie Twoje oczekiwania! Zobacz, jak funkcjonalne i stylowe oświetlenie przygotowaliśmy dla Ciebie.
W jakich pomieszczeniach lampa sufitowa prezentuje się najlepiej?
Plafon może stać wspaniałą ozdobą Twojego biura, salonu, jadalni, sypialni czy kuchni urządzonej w nowoczesnym stylu. Klasyczna konstrukcja i klosze w kształcie kul dodają pomieszczeniom uroku i szyku. Lampa stworzona jest w dwóch kolorach – czarnym i białym – aby świetnie komponowały się ze wszystkimi innymi barwami.
Czy lampa sufitowa jest funkcjonalna?
Oczywiście, że tak! Plafon posiada możliwość regulowania kąta padania światła, dzięki czemu możesz rozstawić klosze w dowolny sposób. Materiał wykorzystany do produkcji oświetlenia sufitowego to trwały i wytrzymały metal. Możesz mieć pewność, że lampa będzie pełniła swoją rolę przez bardzo długi czas. Plafon posiada możliwość podłączenia pod podwójny przełącznik. Źródła światła światła, jakimi lampa może być zasilana to żarówkami LED GU10.";
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
$product->name = [$default_lang => "Lampa Sufitowa Nowoczesna Chrom Plafon Ball"];
$product->link_rewrite = [$default_lang => "lampa-sufitowa-nowoczesna-chrom-plafon-ball"];
$product->price = 129.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/lampa-sufitowa-nowoczesna-chrom-plafon-ball.jpg";
$product->image_url = $url;
$product->description = "Lampa sufitowa 3 źródła zasilania chrom kule
Elegancka i nowoczesna lampa wisząca, która nada Twojej aranżacji wyjątkowego charakteru. Chromowane kule wspaniale komponują się z z każdym designem wnętrz.
Gdzie najlepiej zawiesić nowoczesny plafon?
Lampa może stać się oświetleniem do biura, salonu, kuchni czy sypialni. Minimalistyczny styl plafonu idealnie współgra ze wszystkimi pomieszczeniami niezależnie od ich przeznaczenia. Czarny kolor konstrukcji doda wnętrzom elegancji, a biały plafon świetnie ożywi Twoją aranżację.
Jakie zalety posiada 3-punktowa lampa sufitowa?
Ogromnym atutem plafonu są klosze osadzone na przegubach, dzięki czemu możesz skierować źródło światła pod dowolnym kątem i kierunkiem. Lampa wykonana jest z metalu, co gwarantuje wytrzymałość i niezawodność oświetlenia. Plafon może być zasilany żarówkami LED GU10.";
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
$product->name = [$default_lang => "Lampa Wisząca Sufitowa Żyrandol Plafon"];
$product->link_rewrite = [$default_lang => "lampa-wiszaca-sufitowa-zyrandol-plafon"];
$product->price = 145.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/lampa-wiszaca-sufitowa-zyrandol-plafon-3-punktowa.jpg";
$product->image_url = $url;
$product->description = "Lampa plafon 3-płomienna ze szklanymi kloszami
Oryginalna konstrukcja połączona z eleganckimi, szklanymi kloszami daje lampę sufitową, która sprawi, że Twoje wnętrza będą zachwycać niepowtarzalnym i stylowym designem.
Do jakich pomieszczeń pasuje prezentowany plafon?
Żyrandol może być piękną ozdobą do salonu, sypialni, pokoju, kuchni czy jadalni. Brązowa konstrukcja doda pomieszczeniu elegancji, a satyna wprowadzi do wnętrz mnóstwo nowoczesności. Ponadto plafon posiada możliwość dowolnego doboru kloszu, co pozwoli Ci na stworzenie oryginalnej i niebanalnej lampy wiszącej.
Czy 3-punktowy plafon jest praktyczny?
Niezwykle praktyczną funkcją żyrandola jest możliwość regulacji kąta padania światła, co pozwoli Ci na dowolne ustawienie kloszy. Konstrukcja lampy sufitowej została wykonana z solidnego metalu, a klosze z odpornego na uszkodzenia szkła. Plafon posiada również możliwość podłączenia pod podwójny przełącznik. Źródła światła, jakie możesz umieścić w lampie, to żarówki E-27 – LED, zwykłe bądź energooszczędne.";
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
$product->name = [$default_lang => "Lampa Wisząca Ball Nowoczesna Kule"];
$product->link_rewrite = [$default_lang => "lampa-wiszaca-ball-nowoczesna-kule"];
$product->price = 139.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/lampa-nowoczesna-wiszaca-3-plomienna-kule-ball.jpg";
$product->image_url = $url;
$product->description = "Lampa wisząca 2-płomienna kule cztery kolory
Nowoczesny, a zarazem elegancki styl lampy wiszącej nada wnętrzom mnóstwo wyjątkowego klimatu. Wybierz kolor najbardziej pasujący do Twojej aranżacji i ciesz się zachwycającym wystrojem wnętrz!
Gdzie najlepiej zawiesić 2-punktową lampę?
Lampa znakomicie prezentuje się w kuchni, jadalni, salonie czy sypialni. Dzięki klasycznym kolorom, w jakich została stworzona lampa, z łatwością dobierzesz barwę idealnie oddającą charakter Twoich wnętrz. Ponadto oświetlenie świetnie współgra z nowoczesnymi pomieszczeniami jak i aranżacjami retro.
Czy nowoczesna lampa wisząca jest funkcjonalna?
Oczywiście, ze tak! Lampa posiada regulowaną wysokość, dzięki czemu perfekcyjnie dopasujesz ją do rozmiaru swojego pomieszczenia. Oświetlenie wykonane jest z metalu malowanego proszkowo, co gwarantuje Ci niezawodność i wytrzymałość materiału. Lampa może być zasilana różnymi rodzajami światła o gwincie E-27, na przykład żarówkami LED, energooszczędnymi czy zwykłymi";
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
$product->name = [$default_lang => "Lampa Klasyczna Wisząca ze Szklanym Kloszem"];
$product->link_rewrite = [$default_lang => "lampa-klasyczna-wiszaca-ze-szklanym-kloszem"];
$product->price = 95.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/lampa-klasyczna-wiszaca-ze-szklanym-kloszem.jpg";
$product->image_url = $url;
$product->description = "Lampa sufitowa plafon 2-punktowa ze szklanymi kloszami
Ponadczasowy wygląd lampy wiszącej nada Twoim pomieszczeniom elegancji i uroku. Wybierz kolor konstrukcji oraz kształt szklanego klosza i ciesz się zachwycającą aranżacją wnętrz.
Gdzie najlepiej zawiesić elegancki żyrandol?
Plafon doskonale prezentuje się w salonie, jadalni, sypialni, biurze czy kuchni. Prosta konstrukcja w połączeniu ze szklanymi kloszami daje lampę wiszącą, która wygląda niezwykle stylowo i elegancko. Ciemny kolor konstrukcji nada Twoim pomieszczeniom klasy, a biały plafon znakomicie ożywi wystrój wnętrz. Ponadto lampa posiada aż trzynaście kloszy do wyboru, co pozwala na stworzenie własnego, niepowtarzalnego żyrandola.
Czy plafon posiada praktyczne funkcje?
Klosze lampy są osadzone na przegubach, dzięki czemu możesz skierować światło pod dowolnym kątem i kierunkiem. Żyrandol może również zostać podłączony pod podwójny przełącznik. Materiały wykorzystane do stworzenia lampy sufitowej są niezwykle trwałe i wytrzymałe. Plafon może być zasilany wieloma rodzajami światła, na przykład żarówkami energooszczędnymi, ledowymi bądź zwykłymi o gwincie E-27.";
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
$product->name = [$default_lang => "Lampa Sufitowa Szklany Klosz"];
$product->link_rewrite = [$default_lang => "lampa-sufitowa-szklany-klosz"];
$product->price = 115.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/lampa-klasyczna-wiszaca-ze-szklanym-kloszem.jpg";
$product->image_url = $url;
$product->description = "Lampa wisząca 3-płomienna plafon
Klasyczny design i elegancki wygląd lampy sufitowej sprawią, że Twoje wnętrza będą zachwycać wyjątkowym i magicznym nastrojem.
Do jakich pomieszczeń pasuje elegancki plafon?
Żyrandol będzie wspaniałą ozdobą dla Twojego salony, sypialni, kuchni czy jadalni. Klasyczna konstrukcja lampy wiszącej świetnie dopasowuje się do każdego stylu aranżacji. Lampa posiada możliwość wybrania wzoru kloszy spośród trzynastu do wyboru, dzięki czemu możesz stworzyć własną, niepowtarzalną lampę sufitową.
Jakie zalety posiada 3-punktowy plafon?
Lampa wykonana jest z trwałych i odpornych na uszkodzenia materiałów, co gwarantuje Ci wysoką jakość produktu. Żyrandol posiada dwa kolory konstrukcji do wyboru – białą i czarną – dzięki czemu jeszcze lepiej dopasujesz oświetlenie do swojej aranżacji. Lampa posiada możliwość podłączenia pod podwójny przełącznik, co czyni ją niezwykle funkcjonalną. Plafon może być zasilany wieloma rodzajami światła o gwincie E-27, na przykład żarówkami LED bądź energooszczędnymi.";
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
$product->name = [$default_lang => "Oryginalna Lampa Wisząca Oprawa Loft"];
$product->link_rewrite = [$default_lang => "oryginalna-lampa-wiszaca-oprawa-loft"];
$product->price = 109.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/oryginalna-lampa-wiszaca-2-punktowa-oprawa-loft.jpg";
$product->image_url = $url;
$product->description = "Oryginalna lampa wisząca Edison Loft 2 źródła światła
Szukasz funkcjonalnego oświetlenia, które będzie również piękną dekoracją wnętrz? Mamy lampę idealnie pasującą do Twoich oczekiwań! Prosta konstrukcja w połączeniu z wyjątkowymi kloszami daje niezwykle nowoczesną i stylową lampę wiszącą.
W jakich pomieszczeniach najlepiej prezentuje się 2-płomienna lampa?
Klasyczna konstrukcja oraz odsłaniające żarówkę klosze będą świetnie wyglądać w kuchni bądź jadalni nad stołem, salonie, sypialni czy pokoju gościnnym. Lampa może również stać ozdobą kawiarni bądź restauracji. Dzięki możliwości zamieszczenia w oświetleniu żarówek dekoracyjnych, nadającym wnętrzom ciepła i wyjątkowego klimatu, lampa znakomicie prezentuje się w tego typu miejscach.
Czy oświetlenie wiszące jest funkcjonalne?
Lampa posiada możliwość regulacji wysokości, przez co idealnie dopasujesz oświetlenie do swoich potrzeb. Ponadto lampa stworzona jest z wysokiej jakości tworzyw, dzięki czemu lampa będzie oświetlała Twoje wnętrza przez bardzo długi czas. Lampa może zostać podłączona pod podwójny przełącznik. Źródła światła, jakimi możesz zasilić lampę, to żarówki LED, energooszczędne, dekoracyjne bądź zwykłe E-27.";
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
$product->name = [$default_lang => "Lampa z Eleganckim Kloszem Chrom Wisząca"];
$product->link_rewrite = [$default_lang => "lampa-z-eleganckim-kloszem-chrom-wiszaca"];
$product->price = 75.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/lampa-z-eleganckim-kloszem-chrom-wiszaca.jpg";
$product->image_url = $url;
$product->description = "Lampa wisząca ze szklanym kloszem chrom
Elegancki i ponadczasowy wygląd lampy wiszącej wspaniale odnajdzie się w każdym stylu Twojego pomieszczenia. Ciekawe wzory kloszy fantastycznie urozmaicają aranżacje wnętrz.
Gdzie najlepiej zawiesić 1-płomienną lampę?
Prezentowane oświetlenie rewelacyjnie prezentuje się w kuchni bądź jadalni nad stołem, sypialni, salonie czy biurze. Metaliczny kolor konstrukcji komponuje się zarówno z nowoczesnymi wystrojami jak i aranżacjami retro. Szklany klosz nadaje pomieszczeniom elegancji i uroku.
Jakie zalety posiada prezentowana lampa?
Oświetlenie posiada regulowaną wysokość, dzięki czemu idealnie dopasowuje się do każdego rozmiaru pomieszczenia. Wysokiej jakości materiały wykonania czynią lampę solidną i wytrzymałą na bardzo długi czas. Źródła światła, jakimi lampa wisząca może być zasilana, to żarówki ledowe, energooszczędne bądź zwykłe z gwintem E-27.";
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
$product->name = [$default_lang => "Nowoczesna Lampa Chrom Wisząca Połysk"];
$product->link_rewrite = [$default_lang => "nowoczesna-lampa-chrom-wiszaca-polysk"];
$product->price = 125.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/lampa-chrom-2-plomienna-wiszaca-polysk-nowoczesna.jpg";
$product->image_url = $url;
$product->description = "Elegancka lampa wisząca 2-płomienna ze szklanymi kloszami
Jeśli szukasz funkcjonalnego oświetlenia o ponadczasowym wymiarze, to mamy lampę wiszącą idealną dla Ciebie! Klasyczna konstrukcja oraz szklane klosze dają eleganckie oświetlenie komponujące się z każdym wystrojem wnętrz.
W jakich pomieszczeniach prezentowana lampa wygląda najlepiej?
Oświetlenie może stać się ozdobą dla Twojej kuchni, salonu, sypialni, jadalni bądź biura. Metaliczny połysk i szklane klosze wspaniale oddają charakter każdego stylu pomieszczenia. Klosz w paski świetnie ożywi Twoje wnętrza, a wzór w sęki doda elegancji nowoczesnym aranżacjom.
Czy 2-punktowa lampa jest funkcjonalna?
Oczywiście, że tak! Lampa posiada regulowaną wysokość, dzięki czemu oświetlenie perfekcyjnie dopasowuje się do wszystkich rozmiarów pomieszczeń. Lampa została wykonana z materiałów najwyższej jakości, przez co masz gwarancję użyteczności i niezawodności oświetlenia wiszącego. Lampa może być podłączona pod podwójny przełącznik, co również czyni ją niezwykle funkcjonalną. Lampa może być zasilana żarówkami LED, energooszczędnymi bądź zwykłymi E-27.";
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
$product->name = [$default_lang => "Wisząca Lampa z Eleganckim Kloszem Chrom"];
$product->link_rewrite = [$default_lang => "wiszaca-lampa-z-eleganckim-kloszem-chrom"];
$product->price = 159.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/lampa-z-eleganckim-kloszem-chrom-wiszaca.jpg";
$product->image_url = $url;
$product->description = "Lampa wisząca 3 źródła zasilania chrom
Stylowa i elegancka lampa wisząca, która wspaniale komponuje się z każdym stylem – od nowoczesnych wystrojów po aranżacje retro. Wybierz wzór szklanego klosza i ciesz czarującym designem swoich wnętrz.
W jakich pomieszczeniach elegancka lampa prezentuje się najlepiej?
Dzięki klasycznej, prostej konstrukcji oświetlenie fantastycznie wygląda zarówno w kuchni czy jadalni nad stołem jak i salonie, sypialni bądź biurze. Szklane klosze i chromowane dodatki to elementy, które odnajdują się we wszystkich pomieszczeniach bez względu na styl, w jakim są zaprojektowane.
Jakie atuty posiada 3-płomienna wisząca lampa?
Oświetlenie posiada regulację wysokości, dzięki czemu idealnie dopasujesz lampę do swoich potrzeb. Ponadto lampa może zostać podłączona pod podwójny przełącznik, co również czyni ją bardzo praktyczną. Oświetlenie wykonane jest z trwałego i solidnego metalu, a klosze skonstruowane są z najwyższej jakości szkła. Dedykowane źródła zasilania dla lampy do żarówki LED, zwykłe bądź energooszczędne E-27.";
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
$product->name = [$default_lang => "Lampa Reflektor Sufitowa Plafon Spot"];
$product->link_rewrite = [$default_lang => "lampa-reflektor-sufitowa-plafon-spot"];
$product->price = 249.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/lampa-reflektor-3-plomienna-sufitowa-plafon-spot.jpg";
$product->image_url = $url;
$product->description = "Lampa sufitowa plafon reflektor LED
Funkcjonalna i stylowa lampa sufitowa, która wspaniale wkomponuje się w styl Twoich wnętrz. Klasyczna konstrukcja z efektownymi reflektorami wygląda niezwykle elegancko, a praktyczne funkcje oświetlenia sprawią, że będziesz cieszyć się z użytkowania lampy przez długi czas.
Gdzie najlepiej zawiesić stylowy plafon?
Lampa może stać się oświetleniem do biura, pokoju, sypialni czy także kuchni bądź salonu. Plafon szczególnie efektownie prezentuje się w pomieszczeniach urządzonych w nowoczesnych stylu. Reflektor została stworzony w trzech klasycznych kolorach, aby dopasowanie go do designy wnętrz było jeszcze łatwiejsze.
Jakie praktyczne funkcje posiada 3-płomienny plafon?
Reflektory lampy sufitowej są osadzone na przegubach, co umożliwia regulację kąta światła pod dowolnym kątem i kierunkiem. Konstrukcja oświetlenia została wykonana z metalu, dzięki czemu lampa będzie pełniła swoją funkcję przez wiele długich lat. Plafon możesz podłączyć pod podwójny przełącznik, co również jest niezwykle przydatnym udogodnieniem. Lampa zasilana jest żarówkami żarówkami LED AR111 GU10.";
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
$product->name = [$default_lang => "Elegancka Lampa Sufitowa Elementy Chrom"];
$product->link_rewrite = [$default_lang => "elegancka-lampa-sufitowa-elementy-chrom"];
$product->price = 120.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/lampa-sufitowa-4-punktowa-elementy-chrom.jpg";
$product->image_url = $url;
$product->description = "Elegancka lampa sufitowa plafon 4-punktowa
Klasyczne oświetlenie, które będzie wspaniałą ozdobą dla wielu rodzajów wnętrz. Prosta konstrukcja szklane klosze dają lampę wiszącą, która zachwyca stylowym i eleganckim designem.
Do jakich wnętrz pasuje 4-płomienny żyrandol?
Lampa wspaniale będzie prezentować się w salonie. Dzięki klasycznej konstrukcji, oświetlenie sufitowe komponuje się zarówno z nowoczesnymi wystrojami jak i aranżacjami w stylu retro. Lampa posiada aż trzynaście wzorów szklanych kloszy do wyboru, dzięki czemu stworzysz własne, indywidualne oświetlenie idealnie oddające charakter Twojego pomieszczenia. Chromowane dodatki dodają plafonowi elegancji, a falisty kształt konstrukcji czyni oświetlenie niepowtarzalnym i wyjątkowym.
Jakie zalety posiada elegancka lampa sufitowa?
Plafon posiada możliwość podłączenia pod podwójny przełącznik, co czyni ją niebywale funkcjonalną. Konstrukcja lampy wiszącej została stworzona z metalu, dzięki czemu jest wytrzymała i odporna na uszkodzenia. Źródła światła, jakimi plafon może być zasilany, to żarówki E-27 – LED, energooszczędne lub zwykłe.";
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
$product->name = [$default_lang => "Klasyczna Lampa Żyrandol z Elementami Chrom Plafon"];
$product->link_rewrite = [$default_lang => "klasyczna-lampa-zyrandol-z-elementami-chrom-plafon"];
$product->price = 145.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/lampa-zyrandol-z-elementami-chrom-3-plomienna-plafon.jpg";
$product->image_url = $url;
$product->description = "Plafon 3-płomienny lampa sufitowa ze szklanymi kloszami
Niezwykle elegancka lampa, która sprawi, że Twoje wnętrza będą zachwycać niepowtarzalnym stylem. Konstrukcja o ciekawym kształcie z chromowanymi elementami i szklanymi kloszami prezentuje się niezwykle efektownie!
Gdzie zawiesić elegancki żyrandol?
Lampa będzie wspaniałym oświetleniem do salonu. Plafon skompletowany ze stylowym kinkietem tworzy piękny i funkcjonalny duet. Lampa świetnie nada się również do sypialni, jadalni czy kuchni. Klasyczne kolory konstrukcji pasują do wszystkich wnętrz, niezależnie od stylu, w jakim są urządzone. Żyrandol posiada mnóstwo wzorów kloszy do wyboru, dzięki czemu możesz skomponować własną, wyjątkową lampę sufitową.
Czy lampa wisząca jest funkcjonalna?
Oczywiście, że tak! Plafon został wykonany z najwyższej jakości tworzyw, co gwarantuje użyteczność oświetlenia na bardzo długi czas. Dużą zaletą lampy sufitowej jest możliwość regulacji kąta światła pod dowolnym kątem i kierunkiem, dzięki czemu możesz ustawić klosze żyrandolu w wygodny dla siebie sposób. Plafon posiada również opcję podłączenia pod podwójny przełącznik. Żyrandol może być zasilany żarówkami E-27 – LED, energooszczędne bądź zwykłe.";
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
$product->name = [$default_lang => "Lampa Sufitowa Szklane Klosze Plafon"];
$product->link_rewrite = [$default_lang => "lampa-sufitowa-szklane-klosze-plafon"];
$product->price = 129.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/lampa-sufitowa-4-plomienna-szklane-klosze-plafon.jpg";
$product->image_url = $url;
$product->description = "Stylowa lampa sufitowa 4 źródła zasilania plafon
Prosty, lecz wyjątkowy design lampy sufitowej nada Twoim wnętrzom niezwykłego klimatu. 4-płomienny żyrandol będzie wspaniałą ozdobą dla nowoczesnych pomieszczeń jak i aranżacji w stylu retro. Wybierz wzór klosza oraz kolor konstrukcji i ciesz się zachwycającym wystrojem swoich wnętrz.
W jakim pomieszczeniu lampa sufitowa będzie najlepiej się prezentować?
Żyrandol może stać się oświetleniem dla wielu wnętrz – eleganckiego salonu, przytulnej sypialni czy wytwornej jadalni. Uniwersalne kolory – brąz i satyna – znakomicie współgrają z każdą inną barwą. Chromowane elementy dodają lampie sufitowej nowoczesności. Ogromny wybór wzorów i kształtów kloszy umożliwi Ci skomponowanie indywidualnego plafonu, który znakomicie odda charakter Twoich czterech kątów.
Czy 4-punktowy żyrandol posiada praktyczne funkcje?
Lampa posiada klosze osadzone na przegubach, przez co istnieje możliwość regulowania kąta padania światła pod dowolnym kierunkiem. Dzięki temu rozwiązaniu możesz skierować klosze lampy w komfortowy dla siebie sposób. Na uwagę zasługują materiały wykonania, odznaczające się wytrzymałością i odpornością na uszkodzenia. Żyrandol może zostać podłączony pod podwójny przełącznik. Źródła światła, jakimi lampa wisząca jest zasilana, to żarówki ledowe, energooszczędne czy zwykłe z gwintem E-27.";
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
$product->name = [$default_lang => "Lampa Sufitowa Oryginalna z Elementami Chrom"];
$product->link_rewrite = [$default_lang => "lampa-sufitowa-oryginalna-z-elementami-chrom"];
$product->price = 139.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/lampa-sufitowa-oryginalna-4-punktowa-z-elementami-chrom.jpg";
$product->image_url = $url;
$product->description = "Lampa sufitowa 4-płomienna z chromowanymi elementami
Nowoczesny, a zarazem elegancki wygląd 4-punktowej lampy sprawi, że Twoje wnętrza będą zachwycać niepowtarzalnym designem. Wybierz kolor konstrukcji najbardziej pasujący do Twojego pomieszczenia i ciesz się zjawiskową aranżacją swoich wnętrz.
Gdzie najlepiej zawiesić 4-płomienny plafon?
Stylowy żyrandol nada elegancji każdemu wnętrzu. Plafon może zostać ozdobą do salonu, jadalni, sypialni czy kuchni. Brązowy kolor konstrukcji wprowadzi do pomieszczenia mnóstwo szyku, a biały kolor lampy wiszącej wspaniale rozświetli Twoje wnętrza. Dodatkowo żyrandol posiada klosze do wyboru, dzięki czemu możesz stworzyć oświetlenie sufitowe idealnie oddające charakter Twoich wnętrz.
Czy prezentowana lampa jest funkcjonalna?
Oczywiście, że tak! Największym atutem lampy jest osadzenie kloszy na przegubach. Dzięki temu rozwiązaniu możesz skierować światło plafonu pod dowolnym kątem i kierunkiem. Lampa wykonana jest z wytrzymałego i odpornego na uszkodzenia metalu, przez oświetlenie będzie ozdabiać Twoje wnętrz przez bardzo długi czas. Żyrandol posiada również możliwość podłączenia pod podwójny przełącznik, co jest niezwykle praktyczną funkcją. Elegancka lampa może być zasilana żarówkami z gwintem E-27 – ledowymi, zwykłymi lub energooszczędnymi.";
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
$product->name = [$default_lang => "Oryginalna Lampa Loft Edison Miedziana Industrialna"];
$product->link_rewrite = [$default_lang => "oryginalna-lampa-loft-edison-miedziana-industrialna"];
$product->price = 149.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/oryginalna-lampa-loft-5-punktowa-edison-miedziana.jpg";
$product->image_url = $url;
$product->description = "Lampa sufitowa Loft Miedziana 5-płomienna
Lampa idealna dla stylowych loftów i nie tylko! Miedziana konstrukcja o oryginalnym kształcie uczyni Twoje wnętrza niezwykle stylowymi i efektownymi. Odsłonięte żarówki nadadzą pomieszczeniu nowoczesności, a także sprawią, że wnętrze będzie maksymalnie doświetlone.
Gdzie najlepiej zawiesić 5-punktową lampę industrialną?
Lampa świetnie sprawdzi się w roli oświetlenia do salonu, ze względu na sporą liczbę źródeł światła. Lampa z powodzeniem oświetli nawet bardzo duże lofty. Dodatkowo do lampy sufitowej możesz dobrać kinkiet stworzony w identycznym stylu. Dzięki takiemu rozwiązaniu zachowasz jedność stylów. Lampa może również oświetlać Twoją sypialnię, kuchnię czy jadalnię – ciepły, miedziany kolor nada magicznego klimatu każdemu wnętrzu.
Jakie przydatne cechy posiada nowoczesna lampa sufitowa?
Solidne wykonanie i wysokiej jakości metal wykorzystany do produkcji oświetlenia, sprawi, że będziesz cieszyć się z użytkowania lampy przez bardzo długi czas. Lampa posiada możliwość podłączenia pod podwójny przełącznik, co również jest niezwykle funkcjonalnym rozwiązaniem. Lampa sufitowa może być zasilana specjalnymi żarówkami dekoracyjnymi, które swoją ciepłą barwą dodadzą pomieszczeniu przytulności i ciepła.";
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
$product->name = [$default_lang => "Lampa Plafon w Stylu Retro Edison Loft"];
$product->link_rewrite = [$default_lang => "lampa-plafon-w-stylu-retro-edison-loft"];
$product->price = 89.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/lampa-w-stylu-retro-oryginalna-plafon-loft-edison.jpg";
$product->image_url = $url;
$product->description = "Lampa sufitowa plafon w stylu retro
Nadaj swojej aranżacji wyjątkowego stylu i elegancji! Plafon z miedzianymi dodatkami i oryginalnym kloszem będzie najpiękniejszą ozdobą Twojego wystroju wnętrz.
W jakich pomieszczeniach należy zawiesić lampę sufitową?
Plafon znakomicie prezentuje się w kuchni, jadalni, sypialni, biurze czy salonie. Unikalny styl lampy świetnie współgra zarówno z nowoczesnymi wystrojami jak i aranżacjami retro. Ponadto kinkiet stworzony jest w dwóch klasycznych kolorach – czarnym i białym – dzięki czemu z łatwością dopasowuje się do każdej innej barwy.
Jakie zalety posiada elegancki plafon?
Lampa wykonana jest z wysokiej jakości tworzyw, dzięki czemu będziesz cieszyć się oświetleniem sufitowym na bardzo długi czas. Dodatkowo do lampy możesz dobrać kinkiet stworzony w tym samym stylu, przez co zachowasz harmonię aranżacyjną. Plafon może być zasilany różnymi rodzajami światła, na przykład żarówkami dekoracyjnymi, ledowymi, energooszczędnymi bądź zwykłymi o gwincie E-27.";
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
$product->name = [$default_lang => "Lampa Wisząca Dekoracyjny Abażur Drut"];
$product->link_rewrite = [$default_lang => "lampa-wiszaca-dekoracyjny-abazur-drut"];
$product->price = 79.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/lampa-wiszaca-1-plomienna-dekoracyjny-abazur.jpg";
$product->image_url = $url;
$product->description = "Dekoracyjna lampa wisząca z abażurem
Wspaniała dekoracja dla każdego rodzaju pomieszczeń! Stylowy abażur połączony z ozdobną konstrukcją o ciekawym kształcie daje oświetlenie, które będzie zachwycać nowoczesnym wyglądem i funkcjonalnością.
Gdzie najlepiej zawiesić nowoczesną lampę wiszącą?
Nasze stylowe oświetlenie znakomicie sprawdzi się w roli lampy do sypialni. Abażur delikatne groszki będzie wspaniale komponować się z nastrojowym klimatem tego pomieszczenia. Lampa może również stać się ozdobą pokoju dziecięcego. Lampa z oryginalnym przedłużeniem abażura, doskonale prezentuje się również jako oświetlenie kuchenne. Stylowe groszki idealnie łączą się ze stylem retro, dzięki czemu lampa może zawisnąć w każdym pomieszczeniu, stworzonym w takim klimacie.
Jakie zalety posiada 1-płomienna lampa?
Konstrukcja oświetlenie została wykonana z wytrzymałego i solidnego metalu, dzięki czemu możesz mieć pewność, że lampa będzie pełniła swoją rolę przez bardzo długi czas. Ponadto lampa posiada regulowaną wysokość, przez co idealnie dopasujesz ją do rozmiarów pomieszczenia. Źródła światła, jakimi lampa może być zasilana, to żarówki E-27 LED, zwykłe lub energooszczędne.";
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
$product->name = [$default_lang => "Lampa Klasyczna z Abażurem Wisząca Stylowa"];
$product->link_rewrite = [$default_lang => "lampa-klasyczna-z-abazurem-wiszaca-stylowa"];
$product->price = 69.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/lampa-klasyczna-z-abazurem-wiszaca-stylowa.jpg";
$product->image_url = $url;
$product->description = "Elegancka lampa wisząca z abażurem
Klasyka w nowoczesnym wydaniu! Lampa wisząca z jednokolorowym abażurem to niezwykle stylowe oświetlenie, które wspaniale prezentuje się w każdym typie pomieszczeń. Kolory abażurów i linek stworzone są w klasycznych kolorach, aby dopasowanie lampy do stylu wnętrza było jeszcze łatwiejsze.
Gdzie zawiesić stylową lampę wiszącą z abażurem?
Lampa idealnie się sprawdzi jako oświetlenie nad stołem w kuchni bądź jadalni. Może również zwisnąć w sypialni i nadać jej przytulnego klimatu albo ozdabiać pokój nastolatka – klasyczny design lampy rewelacyjnie odnajdzie się w każdym pomieszczeniu.
Czy prezentowana lampa jest funkcjonalna?
Oczywiście, że tak! Oświetlenie posiada opcję regulacji wysokości, dzięki czemu możesz zawiesić ją w dowolny, wygodny dla siebie sposób. Lampa została wykonana z wysokiej jakości tworzyw, co sprawia, że będziesz cieszyć się użytecznością oświetlenia wiszącego przez bardzo długi czas. Lampa zasilana jest żarówkami LED, energooszczędnymi lub zwykłymi o gwincie E-27.";
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
$product->name = [$default_lang => "Nowoczesna Lampa LOFT Wisząca Retro Diament"];
$product->link_rewrite = [$default_lang => "nowoczesna-lampa-loft-wiszaca-retro-diament"];
$product->price = 129.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/nowoczesna-lampa-loft-wiszaca-retro-edison.jpg";
$product->image_url = $url;
$product->description = "Nowoczesna lampa wisząca 3-płomienna z dekoracyjnymi kloszami
Oryginalny design lampy wiszącej sprawi, że Twoje wnętrza będą zachwycać nowoczesnością i elegancją. Klosze odsłaniające żarówkę to fantastycznie rozświetlą pomieszczenie, a także staną się jego główną dekoracją.
Do jakich wnętrz pasuje 3-płomienna lampa wisząca?
Oświetlenie wspaniale prezentuje się zarówno w nowoczesnych pomieszczeniach loft jak i aranżacjach retro. Dlatego lampę możesz zawiesić zarówno w salonie jadalni jak i kuchni czy sypialni. Ponadto lampa, dzięki możliwości umieszczenia w niej żarówek dekoracyjnych, może stać się również oryginalnym oświetleniem do kawiarni czy restauracji.
Jakie praktyczne funkcje posiada stylowa lampa industrialna?
Linki lampy wiszącej są regulowane, dzięki czemu każdy płomień oświetlenia może zostać zawieszony na innej wysokości. Daje to niesamowity i zachwycający efekt! Materiały wykorzystane do stworzenia lampy wiszącej są trwałe, wytrzymałe i odporne na wszelkie uszkodzenia. Źródła światła, jakimi lampa może być zasilana, to żarówki dekoracyjne, ledowe, energooszczędne lub zwykłe z gwintem E-27.";
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
$product->name = [$default_lang => "Oryginalna Lampa Wisząca Nowoczesna Loft"];
$product->link_rewrite = [$default_lang => "oryginalna-lampa-wiszaca-nowoczesna-loft"];
$product->price = 59.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/oryginalna-lampa-wiszaca-1-plomienna-nowoczesna-loft.jpg";
$product->image_url = $url;
$product->description = "Nowoczesna lampa wisząca loft z odsłoniętą żarówką
Stylowe i oryginalne oświetlenie, które stanie się ozdobą dla każdego rodzaju pomieszczenia. Nowoczesne, klasyczny czy wnętrza w skandynawskim styl – lampa industrialna z oryginalnym kloszem wkomponuje się w każdy design Twoich wnętrz.
W jakich pomieszczeniach lampa 1-płomienna prezentuje się najlepiej?
Lampa może stać się oświetleniem kuchennym. Oświetlenie zawieszone nad stołem bądź blatem kuchennym nada elegancji i nowoczesności całemu pomieszczeniu. Ze względu na możliwość zawieszenia w lampie żarówek dekoracyjnych, których światło nadaje wnętrzom nastrojowości, oświetlenie to może ozdabiać kawiarnie lub restauracje. Nasza niezwykła lampa urozmaici również takie pomieszczenia jak: salon, jadalnia czy sypialnia.
Jakie zalety posiada stylowa lampa wisząca?
Oświetlenie posiada funkcję regulacji wysokości, co pozwala na dokładne dopasowanie lampy do rozmiarów pomieszczenia. Konstrukcja oświetlenia została wykonana z metalu, co gwarantuje wytrzymałość i odporność lampy na uszkodzenia. Źródła światła, jakimi lampa może być zasilana, to żarówki dekoracyjne, ledowe, zwykłe czy energooszczędne o gwincie E-27.";
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
$product->name = [$default_lang => "Industrialna Lampa Loft Wisząca Nowoczesny Klosz"];
$product->link_rewrite = [$default_lang => "industrialna-lampa-loft-wiszaca-nowoczesny-klosz"];
$product->price = 79.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/lampa-loft-wiszaca-nowoczesna-1-punktowa.jpg";
$product->image_url = $url;
$product->description = "Stylowa lampa wisząca industrialna loft
Lampa wisząca z nowoczesnym kloszem sprawi, że Twoje wnętrza będą zachwycać stylowym wystrojem. Niezwykły klosz lamp wiszącej przyciągnie spojrzenia i stanie się główną dekoracją Twojego pomieszczenia. Wybierz jeden spośród dwóch dostępnych kolorów i ciesz się zjawiskową aranżacją wnętrz!
W jakich pomieszczeniach 1-punktowa lampa prezentuje się najlepiej?
Lampa wspaniale komponuje się ze stylem skandynawskim, nowoczesnym jak i aranżacjami retro. Dzięki połączeniu prostej konstrukcji z klasycznymi kolorami i niezwykłym kloszem, otrzymujemy lampę, która doda elegancji i nowoczesności każdemu pomieszczeniu, niezależnie od jego przeznaczenia. Kuchnia, salon, jadalnia czy sypialnia – lampa będzie perfekcyjnie komponować się ze wszystkimi pomieszczeniami.
Jakie zalety posiada nowoczesna lampa loft?
Możliwość regulacji wysokości – ta funkcja sprawia, że lampa dokładnie dostosowuje się do wszystkich rozmiarów pomieszczeń. Ponadto solidna i wytrzymała konstrukcja pozwoli Ci cieszyć się oświetleniem przez bardzo długi czas. Lampa może być zasilana różnymi rodzajami źródeł światła, w tym żarówkami dekoracyjnymi, ledowymi czy energooszczędnymi.";
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
$product->name = [$default_lang => "Nowoczesna Lampa Loft Wisząca Oryginalny Klosz"];
$product->link_rewrite = [$default_lang => "nowoczesna-lampa-loft-wiszaca-oryginalny-klosz"];
$product->price = 75.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/lampa-loft-wiszaca-nowoczesna-1-punktowa.jpg";
$product->image_url = $url;
$product->description = "Nowoczesna lampa wisząca z dekoracyjnym kloszem
Elegancja i funkcjonalność w jednej lampie! Prezentowane oświetlenie będzie stanowić główną dekorację w Twoim pomieszczeniu. Oryginalny klosz urozmaici każdą aranżację wnętrz.
W jakich pomieszczeniach 1-płomienna lampa prezentuje się najlepiej?
Prosta konstrukcja, klasyczne kolory i oryginalny, choć niekrzykliwy klosz sprawiają, że lampa komponuje się z każdym pomieszczeniem, niezależnie od jego stylu i przeznaczenia. Lampa może pełnić rolę oświetlenia do kuchni, salonu, sypialni, a nawet kawiarni czy restauracji. Możliwość zamontowania w lampie żarówek dekoracyjnych pozwoli Ci osiągnąć magiczny i przytulny klimat w pomieszczeniu, a to za sprawą wyjątkowego światła specjalnych żarówek.
Czy lampa wisząca jest funkcjonalna?
Ogromną zaletą lampy jest możliwość regulacji wysokości, dzięki której możesz idealnie dopasować lampę do rozmiarów pomieszczenia. Metalowa konstrukcja lampy wiszącej sprawi, że będziesz cieszyć się oświetleniem przez długi czas. Lampa zasilana wieloma rodzajami światła, na przykład żarówkami dekoracyjnymi, ledowymi czy energooszczędnymi o gwincie E-27.";
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
$product->name = [$default_lang => "Lampa Gwiazda Wisząca Cztery Kolory Oryginalna"];
$product->link_rewrite = [$default_lang => "lampa-gwiazda-wiszaca-cztery-kolory-oryginalna"];
$product->price = 65.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/lampa-loft-wiszaca-nowoczesna-1-punktowa.jpg";
$product->image_url = $url;
$product->description = "Lampa wisząca z nowoczesnym kloszem loft
Lampa wisząca, która nie tylko będzie pełniła rolę funkcjonalnego oświetlenia w Twoim domu, ale również stanie się największą ozdobą w pomieszczeniu! Wiele kolorów do wyboru pozwoli Ci na dokładne dopasowanie lampy wiszącej do stylu Twoich wnętrz.
Gdzie najlepiej prezentuje się nowoczesny zwis wiszący?
Lampa będzie wyglądać rewelacyjnie w każdym pomieszczeniu. Różowa bądź turkusowa lamp świetnie sprawdzi się w roli oświetlenia do pokoju dziecięcego lub młodzieżowego. Czarna lampa wisząca może stanowić stylową dekorację w salonie stworzonym w nowoczesnym czy też w klimacie retro. Klasyczna, biała lampa wisząca wspaniale ożywi Twoją kuchnię.
Jakie zalety posiada lampa wisząca?
Metalowa konstrukcja oświetlenia czyni je niezwykle wytrzymałym i odpornym na uszkodzenia, dzięki czemu lampa posłuży Ci przez bardzo długi czas. Oświetlenie posiada możliwość regulacji wysokości, co umożliwia dokładne dopasowanie lampy wiszącej do swoich potrzeb. Źródła światła, jakimi lampa może być zasilana, to żarówki dekoracyjne, LED, zwykłe lub energooszczędne o gwincie E-27.";
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
$product->name = [$default_lang => "Lampa Wisząca Oryginalna Miedź Loft"];
$product->link_rewrite = [$default_lang => "lampa-wiszaca-oryginalna-miedz-loft"];
$product->price = 53.10;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/lampa-loft-wiszaca-nowoczesna-1-punktowa.jpg";
$product->image_url = $url;
$product->description = "Lampa wisząca industrialna loft miedziana
Nowoczesna, lecz elegancka lampa wisząca, która stanie się wielką dekoracją w Twoim pomieszczeniu. Stylowa miedź połączona z oryginalnym abażurem tworzą oświetlenie oddające charakter i klimat wnętrz urządzonych w różnych stylach – od nowoczesnych po aranżacje retro.
Gdzie najlepiej zawiesić stylową lampę 1-płomienną?
Czerń połączona z miedzią wspaniale prezentuje się zarówno w kuchni jak i sypialni czy salonie. Lampa posiada możliwość zasilania żarówkami dekoracyjnymi, których światło jest niezwykle ciepłe, przyjemne, nadające magicznego klimatu pomieszczeniu. Lampa wisząca z takim źródłem światła może zostać oświetleniem do kawiarni czy klimatycznej restauracji.
Czy lampa wisząca posiada praktyczne funkcje?
Oczywiście, że tak! Lampa posiada regulowaną wysokość, dzięki czemu możesz dokładnie dopasować oświetlenie do rozmiarów pomieszczenia. Solidna i wytrzymała konstrukcja lampy industrialnej daje Ci gwarancję niezawodności i użyteczności oświetlenia. Lampa może być zasilana wieloma rodzajami źródeł światła, na przykład żarówkami dekoracyjnymi, zwykłymi, energooszczędnymi lub LED E-27.";
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
$product->name = [$default_lang => "Lampa Sufitowa Plafon Aluminiowy Nowoczesny"];
$product->link_rewrite = [$default_lang => "lampa-sufitowa-plafon-aluminiowy-nowoczesny"];
$product->price = 50.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/lampa-kinkiet-metalowa-stylowa.jpg";
$product->image_url = $url;
$product->description = "Oryginalna lampa sufitowa plafon owal
Minimalistyczna i elegancka lampa sufitowa, która nada Twoim wnętrzom wyjątkowego klimatu! Wybierz kolor najbardziej oddający charakter pomieszczenia i ciesz się stylowym wystrojem swoich wnętrz.
Gdzie najlepiej prezentuje się nowoczesny plafon?
Dzięki klasycznej konstrukcji i stonowanym kolorom, lampa sufitowa wspaniale prezentuje się w niemal każdym pomieszczeniu. Salon, jadalnia, kuchnia, biuro czy sypialnia – plafon nada każdemu wnętrzu elegancji i nowoczesności. Do naszej lampy sufitowej możesz dobrać kinkiet stworzony w identycznym stylu. Takie połączenie lamp sprawi, że Twoja aranżacja będzie spójna i dopracowana pod najmniejszym szczegółem.
Jakie zalety posiada nowoczesna lampa sufitowa?
Materiał, wykorzystany do stworzenia plafonu, to najwyższej jakości metal. Dzięki zastosowaniu solidnych tworzyw, lampa sufitowa będzie oświetlała Twoje wnętrza przez bardzo długi czas. Plafon posiada możliwość wyboru koloru spośród trzech możliwych, przez co idealnie dopasujesz lampę do swoich wnętrz. Plafon zasilany jest żarówkami LED GU10.";
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
$product->name = [$default_lang => "Lampa Sufitowa Plafon Miedziany Loft"];
$product->link_rewrite = [$default_lang => "lampa-sufitowa-plafon-miedziany-loft"];
$product->price = 50.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/lampa-sufitowa-plafon-miedziany-loft.jpg";
$product->image_url = $url;
$product->description = "Lampa sufitowa plafon loft miedziany
Szukasz lampy, która będzie nie tylko funkcjonalnym oświetleniem, ale również piękną dekoracją Twoich wnętrz? Mamy plafon idealny dla Ciebie! Oryginalny klosz lampy sufitowej sprawi, że pomieszczenie stanie się niezwykle nowoczesne i stylowe.
W jakich wnętrzach najlepiej prezentuje się wyjątkowy plafon?
Lampa sufitowa idealnie odnajdzie się w pomieszczeniach w stylu loft. Dodatkowo miedziany kolor nowoczesnego plafonu świetnie współgra z wieloma innymi barwami, a do pomieszczenia wprowadzi odrobinę ciepła i przytulnego klimatu. Lampa sufitowa będzie wspaniale wyglądać zarówno w salonie, kuchni, sypialni, jadalni jak i kawiarni czy restauracji. Dzięki możliwości montażu żarówek dekoracyjnych, światło lampy sufitowej będzie klimatyczne i przyjemne. Plafon możesz zestawić z lampą wiszącą z tej samej serii.
Jakie zalety posiada nowoczesny plafon?
Lampa została wykonana z wytrzymałego i solidnego metalu, dzięki czemu masz pewność wysokiej jakości produktu. Lampa może być zasilana różnymi rodzajami światła o gwincie E-27 – żarówkami ledowymi, energooszczędnymi, dekoracyjnymi bądź zwykłymi.";
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
$product->name = [$default_lang => "Lampa Sufitowa Loft Dwa Kolory Oryginalne Klosze"];
$product->link_rewrite = [$default_lang => "lampa-sufitowa-loft-dwa-kolory-oryginalne-klosze"];
$product->price = 119.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/lampa-sufitowa-3-plomienna-loft-dwa-kolory.jpg";
$product->image_url = $url;
$product->description = "Nowoczesna lampa sufitowa loft 3-płomienna
Jeśli chcesz, aby Twoje wnętrza zachwycały nowoczesnym i stylowym wystrojem, to udekoruj pomieszczenie prezentowaną lampą sufitową! Prosta konstrukcja połączona z nowoczesnymi kloszami odsłaniającymi żarówki daje niesamowite i zachwycające oświetlenie pasujące do wielu typów pomieszczeń.
W jakich wnętrzach najlepiej prezentuje się niezwykła lampa wisząca?
Lampa może zostać głównym oświetleniem nowoczesnego salonu, sypialni, jadalni czy też kuchni. Uniwersalne kolory dopasują się do każdego stylu pomieszczenia. Lampa może być zasilana efektownymi żarówkami dekoracyjnymi, dzięki czemu lampa może rozświetlać również kawiarnie czy restauracje. Lampa posiada aż pięć pięknych kloszy do wyboru, dzięki czemu możesz stworzyć oświetlenie idealnie oddające charakter Twojego wnętrza.
Jakie atuty posiada 3-płomienna lampa?
Oprócz wyjątkowego designu, lampa posiada również szereg przydatnych funkcji. Lampa wykonana jest z metalu, co gwarantuje dużą wytrzymałość i odporność na uszkodzenia. Oświetlenie posiada również możliwość podłączenia pod podwójny przełącznik, co niezwykle ułatwia codzienne czynności. Źródła światła, jakimi lampa może być zasilana, to żarówki dekoracyjne, ledowe, energooszczędne i zwykłe E-27.";
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
$product->name = [$default_lang => "Lampa Sufitowa Wisząca Loft Nowoczesna"];
$product->link_rewrite = [$default_lang => "lampa-sufitowa-wiszaca-loft-nowoczesna"];
$product->price = 99.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/lampa-sufitowa-wiszaca-2-plomienna-loft.jpg";
$product->image_url = $url;
$product->description = "Elegancka lampa wisząca 2-płomienna w stylu loft
Chcesz wprowadzić do swoich wnętrz odrobinę nowoczesności i oryginalnego stylu? 2-płomienna lampa sufitowa świetnie komponuje się z wieloma aranżacjami – do nowoczesnych po wystroje retro. Prezentowana lampa sufitowa to połączenie minimalizmu z efektownymi kloszami, które daje zniewalający efekt.
W jakich pomieszczeniach najlepiej prezentuje się nowoczesna lampa?
Prezentowane oświetlenie idealnie wkomponuje się w każdy styl pomieszczenia, niezależnie od jego przeznaczenia. Lampa będzie pięknie prezentować się w kuchni, nowoczesnym salonie czy jadalni. Poprzez unikatowy wygląd kloszy i możliwość umieszczenia w lampie sufitowej żarówek dekoracyjnych, może ona stać się oświetleniem do restauracji bądź kawiarni, którym nada nastrojowego klimatu. Ponadto lampa posiada aż pięć wzorów kloszy do wyboru, dzięki czemu możesz skomponować własne, niepowtarzalne oświetlenie, które będzie idealnie pasować do stylu Twojego pomieszczenia.
Czy lampa sufitowa posiada praktyczne funkcje?
Naturalnie, że tak! Żyrandol posiada możliwość podłączenia pod podwójny przełącznik, co bardzo ułatwia wykonywanie codziennych czynności. Lampa została wykonana z metalu, dzięki czemu masz pewność, że oświetlenie będzie pełniło swoją rolę przez bardzo długi czas. Lampa zasilana jest różnymi rodzajami światła, na przykład żarówkami LED, dekoracyjnymi, energooszczędnymi czy zwykłymi E-27.";
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
$product->name = [$default_lang => "Lampa Sufitowa z Drutu Loft"];
$product->link_rewrite = [$default_lang => "lampa-sufitowa-z-drutu-loft"];
$product->price = 129.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/lampa-sufitowa-z-drutu-loft.jpg";
$product->image_url = $url;
$product->description = "Stylowa lampa sufitowa 3-płomienna
Piękny design połączony z funkcjonalnością – tym właśnie charakteryzuje się prezentowana lampa sufitowa! Efektowne klosze dodadzą Twoim wnętrzom nowoczesności i elegancji. Dzięki prostej, klasycznej konstrukcji lampa wspaniale komponuje się z wieloma stylami wnętrz – od nowoczesnych po aranżacje retro.
Gdzie najlepiej zawiesić nowoczesną lampę 3-płomienną?
Lampa świetnie sprawdzi się jako oświetlenie do salonu, jadalni czy kuchni. Lampa może również ozdabiać takie wnętrza, jak sypialnia czy pokój gościnny. Dzięki możliwości umieszczenia w lampie żarówek dekoracyjnych, które nadają pomieszczeniom nastrojowości i przytulnego klimatu, lampa może również dekorować kawiarnie bądź restauracje.
Jakie zalety posiada nowoczesny żyrandol loft?
Największym atutem lampy są klosze osadzone na przegubach. Ta funkcja pozwala na skierowanie światła pod dowolnym kątem i kierunkiem. Jest niezwykle praktyczne, szczególnie, jeśli lampa sufitowa będzie oświetlać obszerne pomieszczenie. Żyrandol został wykonany z metalu, co zapewnia wytrzymałość i odporność na uszkodzenia. Źródła światła, jakimi lampa może być zasilana, to żarówki ledowe, dekoracyjne, energooszczędne i zwykłe z gwintem E-27.";
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
$product->name = [$default_lang => "Nowoczesna Lampa Wisząca Loft LED"];
$product->link_rewrite = [$default_lang => "nowoczesna-lampa-wiszaca-loft-led"];
$product->price = 109.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/nowoczesna-lampa-wiszaca-2-plomienna-loft.jpg";
$product->image_url = $url;
$product->description = "Oryginalna lampa sufitowa 2-płomienna loft
Niezwykły design, który doda nowoczesności klasycznym wnętrzom. 2-płomienny żyrandol to nie tylko oryginalna ozdoba dla pomieszczeń w stylu loft. To również funkcjonalne oświetlenie, które dodatkowo nadaje wnętrzom wyjątkowego klimatu!
Gdzie zawiesić nowoczesną lampę sufitową?
Lampa posiada pięć różnych wzorów kloszy, dzięki czemu możesz indywidualnie dopasować lampę do stylu i charakteru pomieszczenia. Dlatego oświetlenie pasuje zarówno do kuchni, jadalni jak i salonu czy sypialni. Skomponowanie idealnego wystroju wnętrz, ułatwiają klasyczne kolory lampy sufitowej, które pasują do wszystkiego. Jeśli szukasz oświetlenia do kawiarni czy restauracji, to nasz żyrandol znakomicie sprawdzi się również w takiej roli. Nowoczesny wygląd oraz możliwość montażu żarówek dekoracyjnych sprawią, że Twoja kawiarnia czy restauracja nabiorą nastrojowego i przytulnego klimatu.
Jakie zalety posiada industrialna lampa wisząca?
Jednym z największych atutów lampy jest możliwość regulacji kąta padania światła pod dowolnym kierunkiem. To niezwykle funkcjonalne rozwiązanie wspaniale sprawdza się w obszernych pomieszczeniach. Możliwość wybrania kloszy do lampy pozwala na skomponowanie własnego, niepowtarzalnego oświetlenia. Lampa posiada również opcję podłączenia pod podwójny przełącznik, co również jest praktycznym rozwiązaniem, bardzo ułatwiającym codzienne czynności. Żyrandol może być zasilany żarówkami LED, dekoracyjnymi, energooszczędnymi lub zwykłymi z gwintem E-27.";
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
$product->name = [$default_lang => "Oryginalna Lampa Wisząca Druciana Loft"];
$product->link_rewrite = [$default_lang => "oryginalna-lampa-wiszaca-druciana-loft"];
$product->price = 119.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/oryginalna-lampa-wiszaca-druciana-loft.jpg";
$product->image_url = $url;
$product->description = "Stylowa lampa 3-płomienna industrialna
Jeśli chcesz, aby Twoje wnętrza zachwycały stylowym designem, to nie może w nich zabraknąć nowoczesnego oświetlenia. Lampa sufitowa z trzema źródłami zasilania zachwyca oryginalnym wyglądem oraz funkcjonalnością. Żyrandol posiada pięć kloszy do wyboru, dzięki czemu możesz samodzielnie skomponować lampę idealnie oddającą charakter Twoich wnętrz.
W jakich pomieszczeniach stylowa lampa industrialna wgląda najlepiej?
Prezentowane oświetlenie rewelacyjnie komponuje się zarówno z wnętrzami w stylu retro jak i nowoczesnymi aranżacjami. Klasyczna, falista konstrukcja została ozdobiona oryginalnymi kloszami. To połączenie sprawdzi się zarówno w sypialni, salonie jak i kuchni czy jadalni. Dodatkowo lampa stworzona jest w dwóch klasycznych kolorach – czarnym i białym- abyś mógł z łatwością dopasować ją do swojego wnętrza.
Czy prezentowana lampa jest funkcjonalna?
Oczywiście, że tak! Lampa została wykonana z trwałego i odpornego na uszkodzenia tworzywa – metalu, dzięki czemu będziesz cieszył się jej użytecznością przez bardzo długi czas. Żyrandol posiada również opcję podłączenia pod podwójny przełącznik. To praktyczne rozwiązanie niezwykle ułatwia wykonywanie codziennych czynności. Źródła światła, jakimi lampa wisząca może być zasilana, to żarówki ledowe, dekoracyjne, energooszczędne lub zwykłe z gwintem E-27.";
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
$product->name = [$default_lang => "Nowoczesna Lampa Sufitowa Led Wiele Kloszy"];
$product->link_rewrite = [$default_lang => "nowoczesna-lampa-sufitowa-led-wiele-kloszy"];
$product->price = 99.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/nowoczesna-lampa-sufitowa-led-2-plomienna.jpg";
$product->image_url = $url;
$product->description = "Lampa sufitowa 2-płomienna w stylu industrialnym
Spraw, by Twoje wnętrza zachwycały oryginalnością i nowoczesny stylem. Lampa sufitowa w stylu loft uczyni Twój design wyjątkowym. Falista konstrukcja w połączeniu z awangardowymi kloszami daje oświetlenie o minimalistycznym, lecz wyjątkowym designie.
Do jakich wnętrz najbardziej pasuje nowoczesna lampa?
Prezentowane oświetlenie może stać się dekoracją wielu pomieszczeń – kuchnia, jadalnia, salon, sypialnia czy pokój dzienny – lampa będzie pasowała do wielu rodzajów wnętrz niezależnie od ich przeznaczenia. Lampa została stworzona w dwóch klasycznych kolorach, aby dopasowanie oświetlenia do stylu wnętrza było jeszcze łatwiejsze.
Jakie zalety posiada efektowna lampa sufitowa?
Oświetlenie jest wykonane z odpornego na uszkodzenia tworzywa – metalu. Dzięki temu masz gwarancję niezawodności i wytrzymałości lampy. Oświetlenie posiada możliwość podłączenia pod podwójny przełącznik, co jest niezwykle funkcjonalnym rozwiązaniem. Lampa może być zasilana żarówkami E-27 LED, dekoracyjnymi, energooszczędnymi lub zwykłymi.";
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
$product->name = [$default_lang => "Plafon Nowoczesny w Stylu Loft Lampa Ścienna"];
$product->link_rewrite = [$default_lang => "plafon-nowoczesny-w-stylu-loft-lampa-scienna"];
$product->price = 55.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/plafon-nowoczesny-w-stylu-loft-lampa-scienna.jpg";
$product->image_url = $url;
$product->description = "Nowoczesna lampa sufitowa plafon
Jeśli chcesz, aby Twoje wnętrza wyglądały elegancko i stylowo, ale jednocześnie pragniesz wprowadzić do nich coś oryginalnego, przykuwającego uwagę? Lampa sufitowa z wyjątkowym kloszem jest dekoracją, której szukasz! Prosta i niewielka konstrukcja wspaniale współgra z nowoczesnymi kloszami, które znakomicie dopasują się wielu rodzajów wnętrz.
Gdzie najlepiej będzie prezentował się nowoczesny plafon?
Lampa może wcielić się w rolę oświetlenia do salonu, sypialni, przedpokoju czy kuchni. Ze względu na minimalistyczny styl i klasyczne kolory, oświetlenie wpasuje się zarówno do stylu retro jak i nowoczesnego wystroju wnętrz. Do stylowego plafonu możesz dobrać lampę wiszącą, kinkiet bądź lampę sufitową, które stworzone są w identycznym stylu.
Jakie zalety posiada nowoczesna lampa sufitowa?
Oświetlenie wykonane jest z solidnego metalu, dzięki czemu lampa jest wytrzymała i posłuży Ci przez bardzo długi czas. Plafon posiada możliwość zasilania żarówkami dekoracyjnymi, których światło nadaje wnętrzom przytulnego i nastrojowego klimatu. Inne źródła światła, jakimi lampa sufitowa może być zasilana, to żarówki LED, energooszczędne lub zwykłe z gwintem E-27.";
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
$product->name = [$default_lang => "Nowoczesna Lampa Sufitowa LED Chrom Loft"];
$product->link_rewrite = [$default_lang => "nowoczesna-lampa-sufitowa-led-chrom-loft"];
$product->price = 179.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/nowoczesna-lampa-sufitowa-led-chrom-loft.jpg";
$product->image_url = $url;
$product->description = "Nowoczesna lampa sufitowa loft chrom Edison
Wprowadź do swoich wnętrz nowoczesność i oryginalny styl! Prezentowany żyrandol świetnie sprawdzi się w minimalistycznych, nowoczesnych, a także aranżacjach w stylu retro. Klasyczny kolor lampy połączony z oryginalnymi kloszami daje niezwykłe połączenie, które nada Twojemu pomieszczeniu wyjątkowego charakteru.
Do jakich wnętrz pasuje prezentowana lampa sufitowa?
Żyrandol jest znakomitą propozycją do salonu, jadalni, sypialni czy nawet kuchni. Spiralna konstrukcja pięknie dekoruje pomieszczenia i nadaje im oryginalności. Efektowną konstrukcję uzupełniają druciane klosze o minimalistycznym stylu, które jednocześnie zachwycają niezwykłym kształtem. Lampa stworzona jest w dwóch klasycznych kolorach – czarnym i białym, co umożliwia łatwe dopasowanie lampy do stylu wnętrza. Żyrandol posiada chromowane podkloszówki, które kontrastują z jednolitą barwą lampy, nadając jej wyjątkowego stylu.. Do tego typu żyrandolu dedykujemy specjalne żarówki dekoracyjne, które zachwycają oryginalnym wyglądem, a ich światło jest delikatne i ciepłe.
Jakie praktyczne funkcje posiada 5-płomienna lampa industrialna?
Oświetlenie zostało wykonane z metalu, co zapewnia trwałość i odporność lampy na uszkodzenia. Do lampy możesz dobrać różne typy kloszy. Lampa posiada aż pięć źródeł światła, co zapewnia dokładne oświetlenie całego pomieszczenia. Żyrandol może być zasilany różnymi rodzajami żarówek – dekoracyjnymi, ledowymi, zwykłymi lub energooszczędnymi E27.";
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
$product->name = [$default_lang => "Stylowa Lampa Sufitowa Loft Chromowana"];
$product->link_rewrite = [$default_lang => "stylowa-lampa-sufitowa-loft-chromowana"];
$product->price = 139.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/stylowa-lampa-sufitowa-loft-chromowana.jpg";
$product->image_url = $url;
$product->description = "Lampa wisząca w stylu loft z chromowanymi elementami
Chcesz w oryginalny sposób udekorować wnętrza o minimalistycznym stylu? Szukasz lampy, która odda nowoczesny lub industrialny styl pomieszczenia? Mamy oświetlenie stworzone dla Ciebie! Konstrukcja o nietypowym kształcie stanie się efektowną dekoracją pomieszczenia. Dodatkowo druciane klosze czynią lampę designerską, a jednocześnie pasującą do wielu rodzajów wnętrz.
Gdzie najlepiej prezentuje się nowoczesna lampa 3-płomienna?
Żyrandol może pełnić funkcje oświetlenia do salonu, jadalni, sypialni czy kuchni. Dzięki minimalistycznej, a jednocześnie nowoczesnej formie, lampa pasuje zarówno do pomieszczeń w stylu loft jak i retro. Żyrandol posiada chromowane podkloszówki, które subtelnie kontrastują z jednolitą barwą lampy wiszącej. Do oświetlenia możesz dobrać trzy różnorodne klosze, które uczynią Twoją aranżację wnętrz oryginalną i stylową.
Jakie funkcje posiada nowoczesna lampa sufitowa?
Oświetlenie zostało wykonane z metalu, co zapewnia wytrzymałość i odporność żyrandolu na uszkodzenia. Do prezentowanej lampy industrialnej możesz dobrać specjalne żarówki dekoracyjne, które swoim nietypowym wyglądem i przyjemnym światłem nadadzą pomieszczeniu przytulnego nastroju. Oświetlenie może być również zasilane żarówkami LED, zwykłymi lub energooszczędnymi o gwincie E27.";
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
$product->name = [$default_lang => "Nowoczesna Lampa Wisząca Loft Drut LED"];
$product->link_rewrite = [$default_lang => "nowoczesna-lampa-wiszaca-loft-drut-led"];
$product->price = 169.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/nowoczesna-lampa-wiszaca-loft-drut-led.jpg";
$product->image_url = $url;
$product->description = "Lampa sufitowa w stylu industrialnym 5 źródeł światła
Szukasz oświetlenia, które będzie funkcjonalne, a jednocześnie stanie się główną dekoracją pomieszczenia? Niezwykły design prezentowanej lampy sufitowej nadają oryginalna konstrukcja i klosze w stylu loft. Dwa kolory lampy wiszącej do wyboru pozwalają na idealne dopasowanie oświetlenia do styl aranżacji wnętrz.
Do jakich pomieszczeń pasuje stylowa lampa industrialna?
Lampa posiada aż pięć źródeł zasilania, co czyni ją idealną do obszernego salonu, gdzie dokładnie oświetli całe pomieszczenie. 5-płomienna lampa sufitowa to również znakomita propozycja do oświetlenia jadalni. Zawieszona tuż nad stołem będzie zachwycać nowoczesnym i niebanalnym wyglądem. Lampa wisząca świetnie sprawdzi się również w roli oświetlenia do sypialni, kuchni czy pokoju gościnnego.
Czy nowoczesna lampa sufitowa jest funkcjonalna?
Oczywiście, że tak! Żyrandol został wykonany z metalu, co czyni go wytrzymałym i odpornym na uszkodzenia. Pięć źródeł zasilania oświetli obszerne pomieszczenia, a możliwość wybrania różnorodnych kloszy do lampy uczyni Twoją aranżację wnętrz oryginalną i stylową. Lampa może być zasilana żarówkami dekoracyjnymi, LED, zwykłymi lub energooszczędnymi E27.";
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
$product->name = [$default_lang => "Stylowa Lampa Sufitowa Loft Miedź"];
$product->link_rewrite = [$default_lang => "stylowa-lampa-sufitowa-loft-miedz"];
$product->price = 179.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/stylowa-lampa-sufitowa-loft-miedz.jpg";
$product->image_url = $url;
$product->description = "Lampa sufitowa z miedzianą podsufitką różne klosze
Nowoczesny, a zarazem minimalistyczny design lampy wiszącej nada Twoim pomieszczeniom stylowości i wyjątkowego charakteru. Oryginalny kształt konstrukcji połączony z drucianymi kloszami daje niesamowity efekt, który rewelacyjnie ozdobi każde wnętrze.
W jakich pomieszczeniach nowoczesna lampa sufitowa prezentuje się najlepiej?
Żyrandol może pełnić rolę oświetlenia do salonu, jadalni, sypialni czy kuchni. Design lampy wiszącej dopasowuje się do stylu nowoczesnego, industrialnego jak i aranżacji retro. Żyrandol posiada miedziane podkloszówki, które kontrastują z jednolitą barwą lampy. Lampa sufitowa posiada pięć różnorodnych kloszy do wyboru, co pozwala na skomponowanie unikatowego oświetlenia idealnie pasujące do stylu wnętrza.
Jakie funkcje posiada nowoczesny żyrandol?
Lampa została wykonana z trwałego, wytrzymałego metalu, dzięki czemu będzie dekorowała Twoje wnętrza bardzo długi czas. Żyrandol posiada możliwość podłączenia pod podwójny przełącznik, co w przypadku lampy 5-płomiennej jest szczególnie funkcjonalnym rozwiązaniem. Lampa może być zasilana wieloma rodzajami źródeł światła – żarówkami dekoracyjnymi, LED, energooszczędnymi lub zwykłymi.";
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
$product->name = [$default_lang => "Nowoczesna Lampa Wisząca Miedziana Drut Loft"];
$product->link_rewrite = [$default_lang => "nowoczesna-lampa-wiszaca-miedziana-drut-loft"];
$product->price = 139.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/nowoczesna-lampa-wiszaca-miedziana-drut-loft.jpg";
$product->image_url = $url;
$product->description = "Stylowa lampa wisząca miedź Edison loft
Nadaj swoim wnętrzom wyjątkowego charakteru! Lampa wisząca o nowoczesnym i minimalistycznym wyglądzie stanie się niebanalną dekoracją i funkcjonalnym oświetleniem Twoich wnętrz.
Do jakich wnętrz najbardziej pasuje stylowa lampa sufitowa?
3-płomienny żyrandol sprawdzi się w roli oświetlenia do sypialni, salonu, jadalni czy kuchni. Lampa rewelacyjnie komponuje się ze stylem loft, nowoczesnym, a także retro. Żyrandol stworzony jest w dwóch uniwersalnych kolorach – czarnym i białym, aby dobrze prezentował się w każdej aranżacji wnętrz. Lampa została ozdobiona miedzianymi podkloszówkami, które fantastycznie kontrastują jednolitą całość oświetlenia.
Czy 3-płomienna lampa loft jest funkcjonalna?
Żyrandol został wykonany z metalu, dzięki czemu będzie oświetlał Twoje wnętrza przez długi czas. Lampa posiada możliwość podłączenia pod podwójny przełącznik, dzięki czemu możesz używać tyle płomieni żyrandola, ile potrzebujesz. Lampa loft posiada wiele rodzajów źródeł zasilania E27, na przykład żarówki dekoracyjne, LED czy energooszczędne.";
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
$product->name = [$default_lang => "Lampa Wisząca Antyczna Żyrandol Elegancka"];
$product->link_rewrite = [$default_lang => "lampa-wiszaca-antyczna-zyrandol-elegancka"];
$product->price = 139.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/lampa-wiszaca-antyczna-zyrandol-elegancka.jpg";
$product->image_url = $url;
$product->description = "Lampa wisząca antyczna 5-płomienna
Szukasz oświetlenia do pomieszczenia urządzonego w antycznym stylu? A może chcesz dodać klasycznej aranżacji wnętrz elegancji i wytworności? Miedziana konstrukcja o wyjątkowym kształcie w połączeniu z dwukolorowymi kloszami tworzy niezwykle efektowną lampę, która zachwyca swoim oryginalnym designem.
W jakich pomieszczeniach najlepiej prezentuje się 5-płomienny żyrandol?
Lampa jest znakomitą propozycją oświetlenia do salonu lub jadalni urządzonych w starodawnym stylu. Żyrandol, dzięki pięciu płomieniom światła, dokładnie oświetli nawet bardzo duże pomieszczenia. Lampa wisząca nada się również do sypialni lub kuchni. Prezentowane oświetlenie wspaniale komponuje się ze stylami glamour, vintage, antycznym lub klasycznym.
Jakie zalety posiada elegancka lampa sufitowa?
Lampa została wykonana z wytrzymałych i odpornych na uszkodzenia materiałów, dzięki czemu będzie ozdabiała Twój dom przez długi czas. Żyrandol posiada możliwość podłączenia pod podwójny przełącznik, co jest niezwykle praktyczną funkcją, szczególnie w przypadku lampy 5-płomiennej. Dedykowane źródła światła do lampy wiszącej to żarówki E27 LED, energooszczędne lub zwykłe.";
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
$product->name = [$default_lang => "Elegancka Lampa Wisząca Żyrandol Antyczna E27"];
$product->link_rewrite = [$default_lang => "elegancka-lampa-wiszaca-zyrandol-antyczna-e27"];
$product->price = 99.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/elegancka-lampa-wiszaca-zyrandol-antyczna-e27.jpg";
$product->image_url = $url;
$product->description = "Elegancka lampa wisząca 3-płomienna antyczna żyrandol
Niezwykła lampa dedykowana pomieszczeniom urządzonym w antycznym stylu. Konstrukcja w kolorze miedzi zestawiona z dwukolorowymi, szklanymi kloszami czyni oświetlenie niezwykle wytwornym i eleganckim. Lampa znakomicie nada się do klasycznym wnętrz, gdzie będzie stanowić wyjątkową dekorację.
Gdzie najlepiej zawiesić prezentowaną lampę wiszącą 3-płomienną?
Lampa znakomicie sprawdzi się w roli oświetlenia do wytwornego salonu czy jadalni. Jeśli urządzasz sypialnię lub kuchnię w antycznym stylu, to nasza lampa również świetnie uatrakcyjni Twoje wnętrza. Kolor i zdobienia konstrukcji oraz ciekawy kształt kloszy sprawiają, że żyrandol nadaje pomieszczeniom pałacowego wyglądu.
Jakie praktyczne funkcje posiada stylowa 3-płomienna lampa?
Oświetlenie zostało wykonane z metalu, dzięki czemu jest wytrzymałe i odporne na uszkodzenia, co zapewnia radość z użytkowania lampy na długi czas. Antyczny żyrandol posiada możliwość podłączenia pod podwójny przełącznik, co jest niezwykle funkcjonalną opcję, zwłaszcza w 3-płomiennych lampach. Dedykowane źródła zasilania do lampy to żarówki LED, zwykłe lub energooszczędne E27.";
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
$product->name = [$default_lang => "Lampa Chromowana Sufitowa Szklane Klosze"];
$product->link_rewrite = [$default_lang => "lampa-chromowana-sufitowa-szklane-klosze"];
$product->price = 139.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/lampa-chromowana-sufitowa-szklane-klosze.jpg";
$product->image_url = $url;
$product->description = "Lampa sufitowa chromowana szklane klosze
Dodaj swoim wnętrzom elegancji i nowoczesności! Lampa sufitowa ze szklanymi kloszami i oryginalnym kształtem konstrukcji stanie się główną dekoracją pomieszczenia.
Do jakich wnętrz pasuje stylowy żyrandol?
Chromowana konstrukcja sprawia, że lampa świetnie odnajdzie się w nowoczesnej, minimalistycznej aranżacji. Natomiast wytworne klosze i efektowny kształt konstrukcji sprawiają, że żyrandol pasuje również do klasycznych wnętrz. Metalowa konstrukcja i szklane klosze lampy sufitowej pasują do każdego koloru i wystroju.
Jakie zalety posiada żyrandol?
Lampa została wykonana z metalu, który zapewnia trwałość i odporność na uszkodzenia. Żyrandol jest 3-płomienny, dzięki czemu z łatwością oświetli nawet bardzo duże pomieszczenie. Dedykowane żarówki do lampy: E27 LED, energooszczędne lub zwykłe.";
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
$product->name = [$default_lang => "Elegancka Lampa Sufitowa Chrom Szklane Klosze"];
$product->link_rewrite = [$default_lang => "elegancka-lampa-sufitowa-chrom-szklane-klosze"];
$product->price = 179.10;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/elegancka-lampa-sufitowa-chrom-szklane-klosze.jpg";
$product->image_url = $url;
$product->description = "Elegancka lampa wisząca chrom ze szklanymi kloszami
Oświetlenie, które pasuje do wielu rodzajów wnętrz. Oryginalny design połączony z nowoczesną, chromowaną konstrukcją tworzą lampę, która będzie designerską ozdobą Twoich wnętrz.
W jakich pomieszczeniach najlepiej prezentuje się stylowy żyrandol?
Designerski kształt konstrukcji i szklane klosze sprawiają, że lampa pasuje do klasycznych wnętrz. Żyrandol znakomicie pasuje również do nowoczesnych, minimalistycznych aranżacji. Chromowana konstrukcja świetnie oddaje charakter tych wnętrz.
Czy metalowa lampa sufitowa jest praktyczna?
Żyrandol został wykonany z wytrzymałego, odpornego na uszkodzenia metalu, przez co lampa będzie dekorowała Twoje wnętrza przez długi czas. Żyrandol jest 5-płomienny, dzięki czemu bez problemu oświetli nawet bardzo duże powierzchnie. Lampa wisząca może być zasilana wieloma rodzajami żarówek, w tym ledowymi, energooszczędnymi lub zwykłymi z gwintem E27.";
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
$product->name = [$default_lang => "Nowoczesna Lampa Sufitowa Chromowana"];
$product->link_rewrite = [$default_lang => "nowoczesna-lampa-sufitowa-chromowana"];
$product->price = 149.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/nowoczesna-lampa-sufitowa-chromowana.jpg";
$product->image_url = $url;
$product->description = "Nowoczesna lampa sufitowa chromowana ze szklanymi elementami
Niezwykły kształt lampy wiszącej uczyni ją niepowtarzalną dekorację wnętrz. Metaliczny połysk znakomicie komponuje się z wieloma wystrojami pomieszczeń.
Gdzie zawiesić 3-płomienną lampę chromowaną?
Lampa będzie wspaniała ozdobą nowoczesnego salonu, sypialni, jadalni czy kuchni. Żyrandol pasuje do wszystkich minimalistycznych wnętrz. Kształt konstrukcji komponuje się także z klasycznymi aranżacjami. Uwagę przyciągają klosze, które wykonane są ze szkła z chromowanymi paskami.
Jakie zalety posiada nowoczesna lampa chrom?
Atutem lampy sufitowej są materiały wykonania, które chronią oświetlenie prze uszkodzeniami i zapewniają trwałość na wiele lat. Żyrandol posiada 3 źródła zasilania, dzięki czemu z łatwością oświetla także duże metraże. Do lampy dedykowane są żarówki E27.";
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
$product->name = [$default_lang => "Nowoczesna Lampa Żyrandol Chrom"];
$product->link_rewrite = [$default_lang => "nowoczesna-lampa-zyrandol-chrom"];
$product->price = 229.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/nowoczesna-lampa-zyrandol-chrom.jpg";
$product->image_url = $url;
$product->description = "Chromowana lampa 5-płomienna nowoczesna
Chcesz dodać nowoczesności klasycznym wnętrzom? Może pragniesz nieco ożywić minimalistyczny wystrój pomieszczenia? Mamy lampę, której szukasz!
W jakich wnętrzach chromowany żyrandol prezentuje się najlepiej?
Lampa udekoruje nowoczesny salon, jadalnię, sypialnię czy pokój nastolatka. Metaliczny połysk i ciekawy kształt konstrukcji komponują się również w klasycznymi wystrojami wnętrz. Na uwagę zasługują oryginalne klosze lampy sufitowej. Zostały wykonane ze szkła z chromowanymi paskami. Efekt jest niezwykle designerski.
Czy lampa wisząca 5-płomienna jest praktyczna?
Metalowa konstrukcja gwarantuje trwałość i odporność lampy na uszkodzenia. Żyrandol posiada aż 5 źródeł światła, dzięki czemu bez problemu oświetli nawet duże powierzchnie. Do lampy chromowanej dedykowane są żarówki o gwincie E27.";
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
$product->name = [$default_lang => "Stylowa Lampa Sufitowa Metal Dwa Kolory"];
$product->link_rewrite = [$default_lang => "stylowa-lampa-sufitowa-metal-dwa-kolory"];
$product->price = 129.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/stylowa-lampa-sufitowa-metal-dwa-kolory.jpg";
$product->image_url = $url;
$product->description = "Metalowa lampa sufitowa żyrandol 3-płomienna
Lampa, która pasuje zarówno do nowoczesnych jak i klasycznych wnętrz. Oryginalny kształt konstrukcji w połączeniu ze szklanymi kloszami czyni lampę niepowtarzalną dekoracją wnętrz.
W jakich pomieszczeniach najlepiej prezentuje się stylowy żyrandol?
Lampa jest znakomitą propozycją oświetlenia do sypialni, salonu, kuchni czy jadalni. Konstrukcja została wykonana w dwóch podstawowych kolorach – czarnym i białym, które świetnie komponują się z każdą barwą. Lampa ożywia minimalistyczne wnętrza, dodaje nowoczesności klasycznym pomieszczeniom, a także pięknie współgra z nowoczesnym designem.
Jakie zalety posiada 3-płomienna lampa sufitowa?
Na uwagę zasługują materiały wykonania lampy. Metal jest niezwykle wytrzymały i odporny na uszkodzenia. Natomiast szkło jest wysokiej jakości. Lampa może być zasilana żarówkami LED, energooszczędnymi lub zwykłymi z gwintem E27.";
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
$product->name = [$default_lang => "Lampa Wisząca Żyrandol LED Czarna Biała"];
$product->link_rewrite = [$default_lang => "lampa-wiszaca-zyrandol-led-czarna-biala"];
$product->price = 179.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/lampa-wiszaca-zyrandol-led-czarna-biala.jpg";
$product->image_url = $url;
$product->description = "Nowoczesna lampa sufitowa żyrandol 5 źródeł światła
Oryginalny design lampy sufitowej doda Twoim wnętrzom wyjątkowego charakteru. Nietypowy kształt konstrukcji w zestawieniu ze szklanymi kloszami czyni lampę pasującą zarówno do nowoczesnych jak i klasycznych wnętrz.
Gdzie najlepiej zawiesić 5-płomienny żyrandol?
Lampa może oświetlać salon, kuchnię, jadalnię czy sypialnię. Żyrandol jest połączeniem nowoczesności z klasycznym stylem, dlatego pasuje do wszystkich rodzajów wnętrz. Do wyboru są dwa kolory konstrukcji, aby dopasowanie lampy do designu pomieszczenia było jeszcze łatwiejsze.
Jakie zalety posiada stylowa lampa sufitowa?
Żyrandol wykonany jest z metalu malowanego proszkowo, co zapewnia odporność lampy na uszkodzenia i trwałość koloru. Klosze wykonane są z wysokiej jakości szkła. Lampa posiada aż 5 źródeł zasilania, dzięki czemu dokładnie oświetli nawet duże powierzchnie. Żyrandol może być zasilany żarówkami E27 LED, energooszczędnymi lub zwykłymi.";
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
$product->name = [$default_lang => "Lampa Loft Sufitowa Trzy Kolory"];
$product->link_rewrite = [$default_lang => "lampa-loft-sufitowa-trzy-kolory"];
$product->price = 99.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/lampa-loft-sufitowa-trzy-kolory.jpg";
$product->image_url = $url;
$product->description = "Nowoczesna lampa sufitowa 3-płomienna Loft
Designerska lampa, która uatrakcyjni pomieszczenia w stylu loft, nowoczesnym oraz aranżacje retro. Oryginalny kształt konstrukcji, brak kloszy oraz wiele kolorów do wyboru czynią lampę wyjątkową dekoracją wnętrz.
W jakich pomieszczeniach najlepiej prezentuje się nowoczesna lampa sufitowa?
Żyrandol może oświetlać Twoją sypialnię, salon, jadalnię czy kuchnię. Lampa wygląda świetnie każdym pomieszczeniu, bez względu na jego przeznaczenie. Trzy kolory konstrukcji do wyboru – czarny, biały oraz grafit z brokatem umożliwiają dokładne dopasowanie oświetlenia do stylu wnętrza. Lampa posiada chromowane podkloszówki, które dodają jej designerskiego wyglądu.
Jakie zalety posiada żyrandol w stylu loft?
Lampa wykonana jest z metalu, co czyni ją odporną na uszkodzenia. Brak kloszy nadaje wnętrzom nowoczesnego i oryginalnego wyglądu. Żyrandol posiada możliwość zasilania żarówkami dekoracyjnymi, dzięki czemu możesz ozdobić swoje wnętrza ciepłym, przyjemnym światłem. Lampa może być podłączona pod podwójny przełącznik.";
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
$product->name = [$default_lang => "Lampa Wisząca Dekoracyjna Industrialna"];
$product->link_rewrite = [$default_lang => "lampa-wiszaca-dekoracyjna-industrialna"];
$product->price = 129.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/lampa-wiszaca-dekoracyjna-industrialna.jpg";
$product->image_url = $url;
$product->description = "Lampa sufitowa Loft 5-płomienna trzy kolory
Chcesz dodać swoim wnętrzom oryginalności i nowoczesnego stylu? Lampa w stylu loft pomoże Ci osiągnąć wymarzony efekt. Niepowtarzalny kształt konstrukcji oraz brak kloszy będą prezentować się niezwykle stylowo i designersko w Twoich wnętrzach.
W jakich pomieszczeniach nowoczesny żyrandol prezentuje się najlepiej?
Lampa pasuje nie tylko do wnętrz w stylu loft. Jest wspaniałą dekoracją również dla nowoczesnych oraz minimalistycznych pomieszczeń, którym nada wyjątkowego klimatu. Lampa posiada aż 5 źródeł zasilania, dzięki czemu jest znakomitym oświetleniem do salonu bądź jadalni, gdzie będzie pełnić rolę lampy zawieszonej w centralnym punkcie wnętra.
Jakie zalety posiada żyrandol w stylu loft?
Lampa sufitowa wykonana jest z wytrzymałych materiałów, które zapewniają radość z użytkowania żyrandolu na długi czas. Lampa posiada 3 kolory konstrukcji do wyboru, dzięki czemu z łatwością dopasujesz żyrandol do stylu pomieszczenia. Chromowane podkloszówki dodają lampie sufitowej designerskiego wyglądu. Ze względu na brak kloszy, żyrandol może być zasilany żarówkami dekoracyjnymi, które swoim niepowtarzalnym designem ozdobią Twoje wnętrza.";
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
$product->name = [$default_lang => "Lampa Wisząca Loft Miedź Nowoczesna"];
$product->link_rewrite = [$default_lang => "lampa-wiszaca-loft-miedz-nowoczesna"];
$product->price = 99.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/lampa-wiszaca-loft-miedz-nowoczesna.jpg";
$product->image_url = $url;
$product->description = "Lampa sufitowa Loft miedź nowoczesna
Nowoczesna lampa, która pasuje zarówno do pomieszczeń w stylu loft, nowoczesnym oraz do aranżacji retro. Minimalistyczny design oświetlenia stanie się główną dekoracją Twoich wnętrz.
W jakich pomieszczeniach najlepiej prezentuje się żyrandol loft?
Lampa może pełnić rolę oświetlenia centralnego w salonie, sypialni, kuchni bądź jadalni. Posiada trzy źródła zasilania, więc bez problemu rozświetli całe pomieszczanie. Do lampy możesz dobrać kinkiety stworzone w tym samym stylu, które będą pełniły funkcje oświetlenia wspomagającego. Lampa wisząca posiada miedziane podkloszówki dodające jej wyjątkowości.
Jakie praktyczne funkcje posiada lampa loft?
Żyrandol został wykonany z metalu malowanego proszkowo, co zapewnia trwałość koloru i radość z użytkowania oświetlenia na długi czas. Lampa posiada dwa kolory konstrukcji do wyboru, co pozwala na idealne dopasowanie oświetlenia do stylu pomieszczania. Żyrandol może być podłączony pod podwójny przełącznik. Lampa posiada możliwość zasilania żarówkami dekoracyjnymi.";
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
$product->name = [$default_lang => "Lampa Sufitowa Industrialna Miedź Dwa Kolory"];
$product->link_rewrite = [$default_lang => "lampa-sufitowa-industrialna-miedz-dwa-kolory"];
$product->price = 129.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/lampa-sufitowa-industrialna-miedz-dwa-kolory.jpg";
$product->image_url = $url;
$product->description = "Lampa 5-płomienna loft miedziane podkloszówki
Designerski żyrandol, który nada Twoim wnętrzom niepowtarzalnego charakteru. Brak kloszy, oryginalny kształt konstrukcji oraz miedziane dodatki sprawią, że lampa sufitowa stanie się główną dekoracją i funkcjonalnym oświetleniem Twoich wnętrz.
W jakich pomieszczeniach nowoczesny żyrandol 5-płomienny prezentuje się najlepiej?
Lampa pasuje do wnętrz urządzonych w nowoczesnym oraz minimalistycznym stylu. Oświetlenie znakomicie oddaje również charakter pomieszczeń loft. Ze względu na dużą ilość źródeł zasilania, lampa sufitowa jest idealnym oświetleniem centralnym w salonie, sypialni, jadalni czy kuchni. Miedziane elementy konstrukcji nadają lampie wyjątkowego charakteru.
Jakie zalety posiada lampa wisząca loft?
Metal malowany proszkowo zapewnia trwałość koloru oraz użyteczność lampy sufitowej na długi czas. Żyrandol do wyboru w czarnym i białym kolorze, dzięki czemu z łatwością dopasujesz go do stylu swojego wnętrza. Lampa posiada możliwość podłączenia pod podwójny przełącznik, co czyni ją niezwykle funkcjonalną z uwagi na pięć źródeł zasilania. Żyrandol loft może być zasilany specjalnymi żarówkami dekoracyjnymi.";
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
$product->name = [$default_lang => "Lampa Wisząca Chromowana Druciane Klosze"];
$product->link_rewrite = [$default_lang => "lampa-wiszaca-chromowana-druciane-klosze"];
$product->price = 155.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/lampa-wiszaca-chromowana-druciane-klosze.jpg";
$product->image_url = $url;
$product->description = "Lampa chromowana industrialna 3-płomienna
Nowoczesny i minimalistyczny design lampy sufitowej stanie się wyjątkową dekoracją Twoich wnętrz. Metaliczny połysk chromowanej konstrukcji prezentuje się niezwykle stylowo w każdym pomieszczeniu.
Do jakich wnętrz najbardziej pasuje nowoczesna lampa chrom?
Żyrandol może ozdabiać Twoją kuchnię, salon, sypialnię czy jadalnię. Lampa pasuje do wszystkich pomieszczeń, bez względu na ich przeznaczenie. Żyrandol pasuje do wnętrz w nowoczesnym stylu oraz pomieszczeń loft. Druciane klosze oraz nietypowy kształt konstrukcji nadają lampie designerskiego wyglądu.
Jakie zalety posiada druciana lampa loft?
Metal w powłoce chromowej zapewnia wytrzymałość i trwałość oświetlenia na wiele lat. Lampa posiada możliwość podłączenia pod podwójny przełącznik, co pozwala na korzystanie z dowolnej liczby źródeł zasilania. Lampa może być zasilana żarówkami dekoracyjnymi, których ciepłe, przyjemne światło i wyjątkowy kształt nadają nastrojowości wnętrzom.";
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
$product->name = [$default_lang => "Lampa Sufitowa Nowoczesna Chromowana"];
$product->link_rewrite = [$default_lang => "lampa-sufitowa-nowoczesna-chromowana"];
$product->price = 209.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/lampa-sufitowa-nowoczesna-chromowana.jpg";
$product->image_url = $url;
$product->description = "Lampa sufitowa 5-płomienna chrom drut loft
Wyjątkowy design lampy sufitowej uczyni Twoje wnętrza stylowymi i niepowtarzalnymi. Lampa pasuje do wnętrz urządzonych w minimalistycznym oraz nowoczesnym stylu. Jest również żyrandolem idealnym do pomieszczeń loft.
Gdzie najlepiej prezentuje się nowoczesna lampa chrom?
Chromowany żyrandol posiada pięć źródeł zasilania, dzięki czemu może zostać oświetleniem centralnym obszernego salonu, jadalni, sypialni czy kuchni. W roli światła wspomagającego świetnie sprawdzą się kinkiety stworzone w tym samym stylu, co prezentowana lampa sufitowa. Klosze o ciekawym kształcie nadają lampie wyjątkowego charakteru.
Jakie funkcje posiada żyrandol w stylu loft?
Metal, z którego została wykonana lampa sufitowa, zapewnia odporność na uszkodzenia. Żyrandol posiada możliwość podłączenia pod podwójny przełącznik, co umożliwia korzystanie ze źródeł światła w dowolny sposób. Lampa może być zasilana żarówkami dekoracyjnymi, które nadadzą pomieszczeniu nastrojowego i magicznego klimatu.";
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
$product->name = [$default_lang => "Lampa Wisząca Nowoczesna z Abażurami LED"];
$product->link_rewrite = [$default_lang => "lampa-wiszaca-nowoczesna-z-abazurami-led"];
$product->price = 159.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/lampa-wiszaca-nowoczesna-z-abazurami-led.jpg";
$product->image_url = $url;
$product->description = "Nowoczesna lampa wisząca z abażurami LED
Lampa, która nada Twoim pomieszczeniom przytulnego nastroju. Materiałowe abażury dostępne są w wielu różnych kolorach, dzięki czemu z łatwością dopasujesz lampę do stylu wnętrza.
Gdzie najlepiej prezentuje się stylowa lampa wisząca?
Lampa świetnie ozdobi Twoją sypialnię, salon, pokój dziecięcy czy kuchnię. Prosta konstrukcja w połączeniu z okrągłymi abażurami tworzy oświetlenie, które pasuje do każdego pomieszczenia. Lampa posiada sześć kolorów abażurów do wyboru – możesz dowolnie je ze sobą zestawiać.
Jakie praktyczne funkcje posiada lampa?
Lampa posiada możliwość regulacji wysokości, dzięki czemu idealnie dopasowuje się do rozmiaru pomieszczania. Konstrukcja oświetlenia jest metalowa, przez co lampa jest wytrzymała i odporna na uszkodzenia. Abażury wykonane są z wysokiej jakości materiału. Lampa może być zasilana żarówkami LED, energooszczędnymi lub zwykłymi o gwincie E27.";
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
$product->name = [$default_lang => "Lampa Sufitowa Żyrandol Chrom Szklane Klosze"];
$product->link_rewrite = [$default_lang => "lampa-sufitowa-zyrandol-chrom-szklane-klosze"];
$product->price = 139.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/lampa-sufitowa-zyrandol-chrom-szklane-klosze.jpg";
$product->image_url = $url;
$product->description = "Lampa sufitowa chromowane klosze elegancka
Oświetlenie, które doda wnętrzom elegancji. Unikatowy kształt konstrukcji oraz designerskie klosze sprawiają, że lampa pasuje zarówno do nowoczesnych jak i klasycznych aranżacji.
W jakich pomieszczeniach najlepiej prezentuje się stylowa lampa sufitowa?
Żyrandol świetnie sprawdzi się w roli oświetlenie centralnego salonu, sypialni, kuchni czy jadalni. Design lampy będzie stylową dekoracją pomieszczenia. Żyrandol stworzony jest w dwóch uniwersalnych kolorach – czarnym i białym, dzięki czemu z łatwością dopasujesz lampę do stylu wnętrza. Klosze są połączeniem szkła z chromowanym metalem. Efekt jest zdumiewający!
Jakie zalety posiada designerski żyrandol?
Konstrukcja lampy wykonana jest z metalu, co zapewnia trwałość oświetlenia na długi czas. Żyrandol posiada możliwość podłączenia pod podwójny przełącznik, dzięki czemu jest wygodna w użytkowaniu. Lampa zasilana jest żarówkami E27.";
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
$product->name = [$default_lang => "Nowoczesna Lampa Sufitowa Metal Chrom Żyrandol"];
$product->link_rewrite = [$default_lang => "nowoczesna-lampa-sufitowa-metal-chrom-zyrandol"];
$product->price = 199.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/nowoczesna-lampa-sufitowa-metal-chrom-zyrandol.jpg";
$product->image_url = $url;
$product->description = "Lampa sufitowa 5-płomienna stylowy żyrandol
Designerskie oświetlenie, które pasuje zarówno do nowoczesnych jak i klasycznych wystrojów wnętrz. Ciekawy kształt konstrukcji oraz oryginalne klosze tworzą lampę, która stanie się największą dekoracją Twoich wnętrz.
Gdzie najlepiej prezentuje się nowoczesny żyrandol?
Lampa sufitowa może oświetlać salon, kuchnię, jadalnię bądź sypialnię. Ze względu na dużą ilość źródeł światła, znakomicie sprawdzi się w roli oświetlenia centralnego w pomieszczeniu. Klosze wykonane są ze szkła pokrytym chromowanymi paskami. To połączenie daje niesamowity efekt po zaświeceniu lampy sufitowej. Żyrandol dostępny jest w dwóch klasycznych kolorach – czarnym i białym – co umożliwia łatwe dopasowanie lampy do designu pomieszczania.
Jakie zalety posiada elegancka lampa sufitowa?
Wytrzymałe, solidne materiały wykonania zapewniają radość z użytkowania żyrandola przez długi czas. Lampa wisząca posiada opcję podłączenia pod podwójny przełącznik, dzięki czemu jest wygodna w obsłudze. Dedykowane źródła zasilania do lampy to żarówki E27 LED, energooszczędne lub zwykłe.";
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
$product->name = [$default_lang => "Lampa Wisząca Pojedyncza Kula Chrom"];
$product->link_rewrite = [$default_lang => "lampa-wiszaca-pojedyncza-kula-chrom"];
$product->price = 99.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/lampa-wiszaca-kula-chrom.jpg";
$product->image_url = $url;
$product->description = "Lampa 1 – płomienna metalowa kula
Oryginalny, ale prosty styl lampy wiszącej sprawiają, że Twoje wnętrza będą wyglądać zniewalająco. Oświetlenie świetnie uzupełni każdą aranżację.
Gdzie zawiesić prezentowaną lampę wiszącą?
Zastosowań nowoczesnej lampy jest całe mnóstwo. Może ona być oświetleniem kuchennym, biurowym czy pokojowym. Metaliczny połysk lampy sufitowej sprawia, że świetnie komponuje się ze wszystkimi kolorami wnętrz.
Z czego wykonana jest lampa wisząca?
Oświetlenie zostało w całości stworzone z metalu, przez co jest wyjątkowo trwałe i wytrzymałe. Wnętrze klosza jest białe. Lampa posiada także możliwość regulacji wysokości, aby mogła idealnie dopasować się do każdego wymiaru pomieszczenia. Oświetlenie jest zasilane wieloma rodzajami światła, na przykład żarówkami ledowymi.";
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
$product->name = [$default_lang => "Klasyczna Lampa Wisząca Do Kuchni"];
$product->link_rewrite = [$default_lang => "klasyczna-lampa-wiszaca-do-kuchni"];
$product->price = 49.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/klasyczna-lampa-wiszaca-do-kuchni.jpg";
$product->image_url = $url;
$product->description = "Lampa wisząca do kuchni jadalni
Ponadczasowy design lampy wiszącej będzie stylową dekoracją Twoich wnętrz. Oświetlenie pasuje zarówno do klasycznych jak i nowoczesnych aranżacji pomieszczeń.
Gdzie najlepiej zawiesić lampę wiszącą?
Design lampy wiszącej pasuje do wielu rodzajów pomieszczeń – kuchni, jadalni, salonu czy sypialni. Klasyczne kolory oświetlenia – szary i biały znakomicie komponują się z każdym stylem wnętrz i barwą ścian. Szeroki klosz wygląda klasycznie, minimalistycznie. Nowoczesności dodaje lampie połyskująca powierzchnia.
Czy prezentowana lampa jest praktyczna?
Oczywiście, że tak. Lampa posiada regulowaną wysokość do 95 cm. Funkcja ta umożliwia dopasowanie oświetlenia do każdego rozmiaru pomieszczenia. Lampa wisząca została wykonana z tworzywa sztucznego. Tworzywo zapewnia wytrzymałość lampy i odporność na uszkodzenia. Lampa może być zasilana różnymi rodzajami żarówek, w tym LED.";
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
$product->name = [$default_lang => "Lampa Sufitowa na Listwie z Abażurami"];
$product->link_rewrite = [$default_lang => "lampa-sufitowa-na-listwie-z-abazurami"];
$product->price = 119.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/lampa-sufitowa-na-listwie-z-abazurami.jpg";
$product->image_url = $url;
$product->description = "Lampa sufitowa z abażurami na listwie nowoczesna
Niezwykła lampa sufitowa, która pasuje do każdego stylu wnętrzarskiego. Mnóstwo kolorów do wyboru pozwala samodzielnie stworzyć oświetlenie, które idealnie odda charakter Twojego pomieszczeniach.
Gdzie najlepiej zawiesić stylową lampę z abażurami?
Nowoczesny żyrandol jest znakomitym oświetleniem do sypialni, salonu, biura, kuchni czy jadalni. Abażury w siedmiu kolorach do wyboru oraz trzy kolory konstrukcji sprawiają, że bez problemu dopasujesz lampę sufitową do swojego pomieszczenia. Abażury plafonu mają oryginalny kształt diamentu, który doda Twoim wnętrzom nowoczesności i przytulności.
Jakie atuty posiada oryginalna lampa sufitowa?
Klosze lampy są regulowane pod dowolnym kątem i kierunkiem. W każdej chwili możesz zmienić ustawienie świecenia lampy. Abażury zostały wykonany z wysokiej jakości materiału. Konstrukcja lampy jest metalowa, dzięki czemu jest wytrzymała i solidna. Lampa sufitowa z abażurami zasilana jest popularnymi żarówkami o gwincie E27.";
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
$product->name = [$default_lang => "Lampa Sufitowa Plafon Abażury LED"];
$product->link_rewrite = [$default_lang => "lampa-sufitowa-plafon-abazury-led"];
$product->price = 109.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/lampa-sufitowa-plafon-abazury-led.jpg";
$product->image_url = $url;
$product->description = "Klasyczna lampa sufitowa 2-płomienna z abażurami
Prosta konstrukcja oświetlenia połączona z różnokolorowymi abażurami ze srebrnym paskiem daje niesamowite połączenie, które stanie się dekoracją każdego wnętrza. Wybierz kolory najbardziej oddające charakter Twojego pomieszczenia i ciesz się stylową aranżacją!
W jakich wnętrzach nowoczesna lampa wisząca prezentuje się najlepiej?
Dzięki trzem różnym kolorom abażurów do wyboru, lampę możemy dopasować do każdego pomieszczenia. Na przykład plafon z szarym abażurem jest świetną propozycją do sypialni, gdzie doda delikatności, jak i do kuchni, pokoju dziecięco czy młodzieżowego. Lampa z czarnym abażurem skontrastuje jasne pomieszczenia, tym samym nadając im elegancji. Natomiast lampa sufitowa z białym abażurem fantastycznie ożywi surową aranżację wnętrz. Trzy kolory abażurów możesz również łączyć ze sobą w różnych konfiguracjach, co pozwoli Ci uzyskać jeszcze bardziej oryginalny wystrój.
Jakie zalety posiada lampa z abażurami?
Konstrukcja oświetlenia została wykonana z metalu, dzięki czemu masz pewność, że lampa będzie dekorowała Twoje wnętrza przez długi czas. Natomiast abażury stworzone są z wysokiej jakości materiału, co świadczy o ich odporności na uszkodzenia. Plafon posiada możliwość podłączenia pod podwójny przełącznik, co czyni go niezwykle funkcjonalnym. Dedykowanymi źródłami światła do lampy są żarówki LED, zwykłe i energooszczędne E27.";
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
$product->name = [$default_lang => "Nowoczesna Lampa Wisząca Regulowana Abażury"];
$product->link_rewrite = [$default_lang => "nowoczesna-lampa-wiszaca-regulowana-abazury"];
$product->price = 119.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/nowoczesna-lampa-wiszaca-regulowana-abazury.jpg";
$product->image_url = $url;
$product->description = "Lampa wisząca z abażurami na linkach
Stylowa lampa, która doda przytulności każdemu wnętrzu. Abażury w pięknych kolorach z wyjątkowymi zdobieniami staną się unikatową dekoracją Twojego mieszkania. Możliwość wyboru koloru konstrukcji umożliwia jeszcze dokładniejsze dopasowanie lampy do stylu wnętrza.
W jakich pomieszczeniach nowoczesna lampa wisząca prezentuje się najlepiej?
Dzięki różnorodnym kolorom abażurów, lampa możesz dopasować do każdego wnętrza. Świetnie sprawdzi się jako lampa do sypialni, salonu, kuchni, pokoju dziecięcego czy jadalni. Do lampy możesz dobrać dwa różne kolory abażurów, co doda oryginalności i nowoczesności aranżacji wnętrz.
Jakie praktyczne funkcje posiada lampa wisząca z abażurami?
Oświetlenie to posiada regulowaną wysokość, co pozwala na zawieszenie lampy na dowolnej wysokości. Konstrukcja oświetlenia została wykonana z metalu, co gwarantuje wysoką jakość i wytrzymałość lampy. Źródła światła dedykowane do lampy wiszącej, to żarówki E27 LED, energooszczędne lub zwykłe.";
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
$product->name = [$default_lang => "Lampa z Abażurami Plafon E27 Różne Kolory"];
$product->link_rewrite = [$default_lang => "lampa-z-abazurami-plafon-e27-rozne-kolory"];
$product->price = 139.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/lampa-z-abazurami-plafon-e27-rozne-kolory.jpg";
$product->image_url = $url;
$product->description = "Lampa sufitowa z abażurami plafon 3-płomienna
Chcesz wprowadzić do swoich wnętrz nieco elegancji, wyjątkowego stylu i przytulnego klimatu? Prezentujemy lampę sufitową, która pomoże Ci urządzić aranżację wnętrz, o jakiej marzysz! Prosta konstrukcja oświetlenia sprawia, że pasuje ono do każdego stylu pomieszczenia, a wyjątkowe abażury czynią wystój wnętrz niepowtarzalnym.
Gdzie najlepiej zawiesić stylową lampę wiszącą?
Oświetlenie pasuje do wielu rodzajów pomieszczeń. Znakomicie ozdobi sypialnię, kuchnię, salon, jadalnię czy pokój dziecka. Różnorodne kolory abażurów do wyboru, umożliwiają dopasowanie lampy sufitowej do każdego pomieszczenia. Możesz również zdecydować się na wybór trzech różnych kolorów, co uczyni urządzane wnętrzem jeszcze bardziej stylowym i wyjątkowym.
Jakie zalety posiada nowoczesna lampa sufitowa?
Lampa została wykonana z wytrzymałego i odpornego na uszkodzenia metalu, dzięki czemu oświetlenie będzie pełniło swoje funkcje przez długi czas. Lampa posiada możliwość podłączenia pod podwójny przełącznik, co jest niezwykle praktyczne, szczególnie w przypadku oświetlenia z trzema źródłami zasilania. Do lampy pasują żarówki ledowe, energooszczędne lub zwykłe o gwincie E27.";
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
$product->name = [$default_lang => "Lampa w Stylu Loft Nowoczesna Klosze Metal"];
$product->link_rewrite = [$default_lang => "lampa-w-stylu-loft-nowoczesna-klosze-metal"];
$product->price = 99.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/lampa-w-stylu-loft-nowoczesna-klosze-metal.jpg";
$product->image_url = $url;
$product->description = "Lampa wisząca loft nowoczesne klosze
Regulowana lampa wisząca to nie tylko funkcjonalne oświetlenie. Lampa swoim wyglądem doda wnętrzom niepowtarzalnego i wyjątkowego klimatu. Oświetlenie pasuje do wnętrz w stylu loft jaki i nowoczesnym.
W jakich pomieszczeniach najlepiej będzie prezentować się oryginalna lampa wisząca?
Minimalistyczny design czyni oświetlenie idealnym do wielu rodzaju wnętrz. Kuchnia, salon, sypialni czy jadalnia – lampa wisząca udekoruje każde z tych pomieszczeń. Klosze w formie klatki dodadzą Twojemu wnętrzu oryginalności.
Jakie zalety posiada nowoczesna lampa wisząca?
Lampa posiada możliwość regulacji wysokości kloszy. Zawieszenie ich na nieregularnej wysokości wygląda bardzo nowocześnie i stylowo. Oświetlenie zostało wykonane z metalu. By dodać wnętrzu jeszcze więcej nastrojowego klimatu, zasil lampę żarówkami dekoracyjnymi.
Lampa posiada możliwość podłączenia pod podwójny przełącznik.";
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
$product->name = [$default_lang => "Klasyczna Lampa Wisząca z Abażurami"];
$product->link_rewrite = [$default_lang => "klasyczna-lampa-wiszaca-z-abazurami"];
$product->price = 149.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/klasyczna-lampa-wiszaca-z-abazurami-kolorowa.jpg";
$product->image_url = $url;
$product->description = "Nowoczesna lampa wisząca z abażurami wiele kolorów
Klasyczna konstrukcja połączona z różnokolorowymi abażurami z ciekawym zdobieniem daje lampę wiszącą, która fantastycznie udekoruje Twoją aranżację wnętrz. Dwa kolory konstrukcji oraz trzy kolory abażurów do wyboru sprawia, że możesz samodzielnie skomponować lampę, która idealnie odda charakter Twojego pomieszczenia.
Do jakich wnętrz najbardziej pasuje stylowa lampa 3-płomienna?
Oświetlenie komponuje się ze wszystkimi stylami pomieszczeń, dlatego możesz zawiesić lampę zarówno salonie, kuchni, jadalni jak i sypialni, pokoju dziecka czy pokoju gościnnym. Lampa z białymi abażurami znakomicie rozświetli surowe wnętrza. Czarne abażury dodadzą elegancji pomieszczeniom i świetnie skontrastują jasne aranżacje. Natomiast szare abażury wprowadzą przytulność i delikatność do wnętrz, przez co są idealne do sypialni oraz pokoju dziecięcego.
Jakie praktyczne funkcje posiada lampa wisząca z abażurami?
Regulacja wysokości należy do największych atutów lampy, ponieważ dzięki niej możesz dokładnie dopasować oświetlenie do rozmiarów pomieszczenia. Konstrukcję lampy wykonano z metalu, co zapewnia o trwałości i wytrzymałości lampy. Abażury stworzone są materiału o wysokiej jakości, co również świadczy o odporności na uszkodzenia. Do lampy wiszącej dedykujemy żarówki E27 LED, zwykłe lub energooszczędne.";
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
$product->name = [$default_lang => "Lampa Sufitowa Plafon Loft Nowoczesna"];
$product->link_rewrite = [$default_lang => "lampa-sufitowa-plafon-loft-nowoczesna"];
$product->price = 99.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/lampa-sufitowa-plafon-loft-nowoczesna.jpg";
$product->image_url = $url;
$product->description = "Lampa plafon loft nowoczesna
Nowoczesna lampa sufitowa, która sprawi, że Twoje wnętrza będą wyglądać stylowo i niepowtarzalnie. Druciane, industrialne klosze pasują do wnętrz w stylu skandynawskim i nowoczesnym.
W jakich pomieszczeniach najlepiej prezentuje się 3-płomienny plafon?
Lampa jest znakomitym oświetleniem do każdego rodzaju wnętrza. Kuchnia, salon, sypialnia czy jadalnia – uniwersalne kolory oraz minimalistyczny design sprawiają, że lampa pasuje do każdego pomieszczenia.
Jakie zalety posiada lampa sufitowa?
Plafon posiada możliwość regulacji kąta padania światła pod dowolnym kątem i kierunkiem. Funkcja ta pozwala skierować światło w wygodny dla siebie sposób. Inną funkcją oświetlenia jest możliwość podłączenia lampy pod podwójny przełącnzik. Lampa została wykonana z metalu, dzięki czemu jest wytrzymała i odporna na uszkodzenia. Do lampy sufitowej pasują żarówki E27.";
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
$product->name = [$default_lang => "Lampa Sufitowa Żyrandol Kolorowe Abażury"];
$product->link_rewrite = [$default_lang => "lampa-sufitowa-zyrandol-kolorowe-abazury"];
$product->price = 130.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/lampa-wiszaca-z-abazurem.jpg";
$product->image_url = $url;
$product->description = "Klasyczna lampa sufitowa z abażurem 2 źródła zasilania
Żyrandol, który wprowadzi mnóstwo nowoczesności i oryginalności do Twoich wnętrz. Dzięki możliwości wyboru kolorów abażurów, możesz stworzyć niepowtarzalną lampę wiszącą, idealnie pasującą do Twojej aranżacji.
Do jakich wnętrz pasuje prezentowane oświetlenie sufitowe?
Lampa będzie znakomicie prezentować się zarówno w pomieszczeniach biurowych jak i pokojowych czy kuchennych. Stonowane i klasyczne kolory abażurów świetnie komponują się z jasnymi, ciemnymi bądź żywymi barwami.
Z czego wykonany jest żyrandol?
Do produkcji lampy sufitowej został wykorzystany trwały i wytrzymały metal. Natomiast abażury oświetlenia wykonane są z materiału. Lampa może być zasilana wieloma źródłami światła, na przykład żarówkami LED.";
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
$product->name = [$default_lang => "Lampa Abażur Diament Plafon Wiele Kolorów"];
$product->link_rewrite = [$default_lang => "lampa-abazur-diament-plafon-wiele-kolorow"];
$product->price = 99.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/lampa-abazur-diament-plafon-wiele-kolorow.jpg";
$product->image_url = $url;
$product->description = "Lampa sufitowa plafon z abażurami diament
Lampa sufitowa, która znakomicie komponuje się z każdym stylem wnętrzarskim Konstrukcja oraz abażury plafonu dostępne są w wielu kolorach, dzięki czemu możesz samodzielnie skomponować oświetlenie idealnie pasujące do Twoich wnętrz.
W jakich pomieszczeniach żyrandol z abażurami prezentuje się najlepiej?
Ponadczasowy design lampy sufitowej pasuje zarówno do nowoczesnych jak i klasycznych aranżacji wnętrz. Plafon jest znakomitą propozycją oświetlenia do sypialni, kuchni, jadalni, salonu czy biura. Abażury charakteryzują oryginalnym kształtem, który dodaje lampie nowoczesności.
Jakie praktyczne funkcje posiada stylowa lampa sufitowa?
Możesz zmieniać położenie kloszy kierując światło pod dowolnym kątem i kierunkiem. Ta niezwykle praktyczna funkcja plafonu pozwala na dostosowanie oświetlenia do swoich potrzeb. Na uwagę zasługują również solidne i wytrzymałe materiały wykonania lampy sufitowej. Metal malowany proszkowo oraz specjalny materiał do abażurów zapewniają radość z użytkowania żyrandolu na długi czas. Lampa sufitowa z abażurami zasilana jest żarówkami E27.";
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
$product->name = [$default_lang => "Lampa Sufitowa Nowoczesna Plafon Metal"];
$product->link_rewrite = [$default_lang => "lampa-sufitowa-nowoczesna-plafon-metal"];
$product->price = 89.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/lampa-sufitowa-nowoczesna-plafon-metal.jpg";
$product->image_url = $url;
$product->description = "Lampa sufitowa plafon nowoczesna chrom czarna
Nowoczesny, a zarazem elegancki design lampy sufitowej uczyni Twoja wnętrza wyjątkowymi. Klasyczny, czarny kolor plafonu sprawia, że lampa pasuje do każdego stylu wnętrza. Oryginalne klosze lampy sufitowej stworzą niepowtarzalną atmosferę w Twoim mieszkaniu.
Gdzie najlepiej prezentuje się nowoczesny plafon na listwie?
Lampa pięknie komponuje się z każdym wystrojem pomieszczenia. Pasuje do nowoczesnej kuchni, przytulnej sypialni, salonu bądź jadalni. Klosze o minimalistycznym stylu podkreślą charakter każdego pomieszczenia. Lampa posiada chromowane elementy, które dodają jej elegancji.
Czy prezentowany plafony 2-płomienny jest funkcjonalny?
Oczywiście, że tak! Klosze lampy sufitowej posiadają możliwość regulacji, dzięki której skierujesz światło w dowolnym kierunku. Plafon wykonany jest z wytrzymałego, trwałego metalu. Żyrandol posiada możliwość podłączenia pod podwójny przełącznik. Do lampy pasują żarówki dekoracyjne. Ich ciepłe, przyjemne światło dodaje wnętrzom przytulności i magicznego klimatu. Do zasilenia lampy możesz wykorzystać również energooszczędne żarówki LED.";
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
$product->name = [$default_lang => "Lampa Sufitowa na Listwie Regulowana Nowoczesna"];
$product->link_rewrite = [$default_lang => "lampa-sufitowa-na-listwie-regulowana-nowoczesna"];
$product->price = 119.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/lampa-sufitowa-na-listwie-regulowana-nowoczesna.jpg";
$product->image_url = $url;
$product->description = "Lampa sufitowa na listwie nowoczesna czarna
Plafon stworzony w minimalistycznym stylu, który doda Twoim wnętrzom oryginalności i blasku. Klosze o niepowtarzalnym kształcie czynią lampę odpowiednią do nowoczesnych jak i klasycznych pomieszczeń.
Do jakich wnętrz pasuje oryginalna lampa plafon?
Lampa sufitowa znakomicie prezentuje się w kuchni, salonie, jadalni czy sypialni. Lampa została wykonana w czarnym kolorze, dzięki czemu komponuje się z każdą inną barwą, przez co pasuje do wszystkich wystrojów wnętrz. Chromowane podkloszówki dodają lampie sufitowej eleganckiego wyglądu.
Jakie praktyczne funkcje posiada 3-płomienna lampa sufitowa?
Żyrandol posiada regulowane klosze, dzięki którym możesz skierować światło pod dowolnym kątem i kierunkiem. To bardzo praktyczna funkcja, zwłaszcza dla dużych pomieszczeń. Za pomocą jednej lampy możesz oświetlić wszystkie zakamarki pokoju. Ponadto lampa sufitowa posiada możliwość podłączenia pod podwójny przełącznik, co pozwala decydować o ilości używanych źródeł światła. Plafon może być zasilony żarówkami dekoracyjnymi, które dodadzą pomieszczeniu przytulnego nastroju. Do żyrandola pasują również żarówki LED.";
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
$product->name = [$default_lang => "Lampa Sufitowa Nowoczesna Żyrandol LED"];
$product->link_rewrite = [$default_lang => "lampa-sufitowa-nowoczesna-zyrandol-led"];
$product->price = 119.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/lampa-sufitowa-nowoczesna-zyrandol-led.jpg";
$product->image_url = $url;
$product->description = "Lampa plafon czarna metalowa nowoczesna
Chcesz dodać swoim wnętrzom nowoczesności i niepowtarzalnego wyglądu? Lampa sufitowa z trzema designerskimi kloszami pomoże Ci zbudować magiczny nastrój w pomieszczeniu.
Gdzie zawiesić stylową lampę plafon?
Żyrandol prezentuje się rewelacyjnie w każdym pomieszczeniu. Może zostać ozdobą Twojej kuchni, sypialni, jadalni czy nowoczesnego biura. Lampa dostępna jest w trzech kolorach do wyboru – białym, czarnym i grafitowym z dodatkiem brokatu. Dzięki temu idealnie dopasujesz plafon do wystroju i stylu swojego wnętrza.
Jakie praktyczne funkcje posiada lampa sufitowa?
Ogromną zaletą lampy są ruchome klosze, które umożliwiają skierowania światła w dowolnym kierunku. Rozwiązanie to sprawia, że za pomocą jednego plafonu możesz oświetlić całe pomieszczenie. Żyrandol został wykonany z metalu, który jest odporny na uszkodzenia. Lampa może być zasilana żarówkami Ed27. Dla lepszego efektu zasil ją żarówkami dekoracyjnymi.
Lampa posiada możliwość podłączenia pod podwójny przełącznik.";
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
$product->name = [$default_lang => "Lampa Sufitowa Metalowa Wisząca Nowoczesna"];
$product->link_rewrite = [$default_lang => "lampa-sufitowa-metalowa-wiszaca-nowoczesna"];
$product->price = 119.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/lampa-sufitowa-metalowa-wiszaca-nowoczesna.jpg";
$product->image_url = $url;
$product->description = "Nowoczesna lampa wisząca sufitowa oryginalna
Niezwykle designerska lampa, która pasuje zarówno do wnętrz nowoczesnych jak i klasycznych. Minimalistyczny styl oświetlenia stanie zachwycającą dekoracją Twoich wnętrz.
W jakich pomieszczeniach najlepiej zawiesić designerską lampę wiszącą?
Lampa każdemu wnętrza doda wyjątkowego nastroju. Pasuje do sypialni, kuchni, biura, jadalni czy salonu. Oświetlenie dostępne jest w kolorze białym, czarnym i grafitowym z elementami brokatu. Pozwala to na łatwe dopasowanie lampy do wystroju pomieszczenia
Czy prezentowa lampa wisząca jest funkcjonalna?
Oświetlenie jest metalowe, dzięki czemu masz pewność długotrwałości i odporności na uszkodzenia. By dodać wnętrzu bardziej nastrojowego klimatu, możesz wykorzystać do zasilenia lampy żarówki dekoracyjne E27.
Oświetlenie posiada możliwość podłączenia pod podwójny przełącznik.";
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
$product->name = [$default_lang => "Lampa Sufitowa Nowoczesna Czarna Ruchoma"];
$product->link_rewrite = [$default_lang => "lampa-sufitowa-nowoczesna-czarna-ruchoma"];
$product->price = 99.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/lampa-sufitowa-nowoczesna-czarna-ruchoma.jpg";
$product->image_url = $url;
$product->description = "Lampa sufitowa regulowana nowoczesne klosze
Wprowadź do swoich wnętrz nowoczesność i elegancję. Lampa sufitowa fantastycznie udekoruje Twoje wnętrza, nadając im niepowtarzalnego nastroju.
W jakich pomieszczeniach 2-płomienny plafon wygląda najlepiej?
W każdym! Klasyczny, czarny kolor i minimalistyczny design pasują do wszystkich rodzajów wnętrz – kuchni, jadalni, salonu czy sypialni. Nowoczesności aranżacji pomieszczenia dodadzą oryginalne klosze, a chromowane podkloszówki uczynią wnętrza eleganckimi.
Jakie zalety posiada nowoczesna lampa sufitowa?
Niezwykle praktyczną funkcją oświetlenia jest możliwość regulacji kąta padania światła pod dowolnym kątem i kierunkiem. Dzięki tej opcji skierujesz klosze w te części pomieszczenia, które najbardziej wymagają oświetlenia. Ponadto lampa sufitowa posiada możliwość podłączenia pod podwójny przełącznik. Materiał wykorzystany do stworzenia plafonu to odporny na uszkodzenia metal. Dedykowanymi źródłami światła do lampy są żarówki LED i żarówki dekoracyjne.";
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
$product->name = [$default_lang => "Czarna Lampa Sufitowa Nowoczesna Plafon LED"];
$product->link_rewrite = [$default_lang => "czarna-lampa-sufitowa-nowoczesna-plafon-led"];
$product->price = 119.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/czarna-lampa-sufitowa-nowoczesna-plafon-led.jpg";
$product->image_url = $url;
$product->description = "Nowoczesna lampa plafon regulowana chrom
Klasyczny rodzaj lampy sufitowej, którego wygląd przykuwa spojrzenia i czyni wnętrza niepowtarzalnymi. Minimalistyczny design plafonu świetnie komponuje się ze wszystkimi stylami wnętrz.
W jakich pomieszczeniach najlepiej prezentuje się lampa sufitowa na listwie?
We wszystkich wnętrzach plafon prezentuje się świetnie! Czerń w połączeniu z chromowanymi elementami dodaje pomieszczeniom elegancji i nowoczesności. Designerski kształt kloszy stylowo udekoruje Twoje mieszkanie.
Jakie funkcje posiada lampa sufitowa?
Klosze plafonu posiadają możliwość regulacji kąta padania światła. Funkcja umożliwia oświetlenie całego wnętrza przy użyciu jednej lampy! Lampa sufitowa wykonana jest wytrzymałego metalu. Do lampy pasują żarówki E27.
Plafon posiada możliwość podłączenia pod podwójny przełącznik.";
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
$product->name = [$default_lang => "Lampa Sufitowa Żyrandol Nowoczesny Regulacja Kloszy"];
$product->link_rewrite = [$default_lang => "lampa-sufitowa-zyrandol-nowoczesny-regulacja-kloszy"];
$product->price = 139.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/lampa-sufitowa-zyrandol-nowoczesny-regulacja-kloszy.jpg";
$product->image_url = $url;
$product->description = "Nowoczesna lampa plafon sufitowa 4 klosze regulowane
Oświetl swoje wnętrza lampą, która będzie oryginalną dekoracją Twoich wnętrz. Nowoczesna, minimalistyczna lampa sufitowa nie tylko dokładnie oświetli całe pomieszczenie. Swoim designem sprawi, że Twoja wnętrza staną przytulne, stylowa i eleganckie.
W jakich pomieszczeniach lampa 4-płomienna prezentuje się najlepiej?
Żyrandol jest znakomitym oświetleniem do salonu, jadalni, kuchni, sypialni czy biura. Lampa stworzona jest w czarnym kolorze, dzięki czemu komponuje się z każdą aranżacją wnętrza. Chromowane podkloszówki dodają lampie elegancji.
Jakie praktyczne funkcje posiada nowoczesna lampa sufitowa?
Najbardziej praktyczną funkcją plafonu jest możliwość zmiany położenia kloszy, dzięki której możesz skierować światło pod dowolnym kątem i kierunkiem, oświetlając wszystkie części pomieszczenia. Żyrandol posiada opcję podłączenia pod podwójny przełącznik. Do stworzenia lampy sufitowej wykorzystano trwały, odporny na uszkodzenia metal. Plafon może być zasilany żarówkami LED.";
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
$product->name = [$default_lang => "Lampa Plafon Kinkiet Ruchomy Stylowy"];
$product->link_rewrite = [$default_lang => "lampa-plafon-kinkiet-ruchomy-stylowy"];
$product->price = 49.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/lampa-plafon-kinkiet-ruchomy-stylowy.jpg";
$product->image_url = $url;
$product->description = "Nowoczesna lampa plafon kinkiet regulowana metal
Funkcjonalne i stylowe oświetlenie, które stanie się główną dekoracją Twojego mieszkania. Minimalistyczny, designerski wygląd klosza uczyni wnętrza niepowtarzalnymi.
Do jakich pomieszczeń pasuje designerski plafon?
Lampa znakomicie prezentuje się w kuchni, biurze, salonie, jadalni oraz sypialni. Uniwersalna czerń komponuje się z każdym pomieszczeniem, niezależnie od jego przeznaczenia. Lampa pasuje wszędzie tam gdzie chcesz uzyskać wyjątkowy klimat.
Jakie atuty posiada lampa ścienna?
Lampa jest niezwykle funkcjonalna – możesz zawiesić ją na ścianie lub suficie. Dzięki możliwości regulacji klosza pod dowolnym kątem i kierunkiem, lampa może stać się designerskim kinkietem bądź plafonem. Nowoczesna lampa plafon sufitowa 4 klosze regulowane stworzy z prezentowaną lampą stylowy zestaw, który pozwoli Ci zachować spójność w aranżacji mieszkania. Lampę możesz zasilić żarówkami dekoracyjnymi, jeśli chcesz uzyskać nastrojowe, klimatyczne światło we wnętrzu. Żarówki LED również mogą zostać wykorzystane do zasilenia plafonu.";
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
$product->name = [$default_lang => "Lampa Wisząca Sufitowa Loft Zwis Metalowa E27 drut"];
$product->link_rewrite = [$default_lang => "lampa-wiszaca-sufitowa-loft-zwis-metalowa-e27-drut"];
$product->price = 59.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/lampa-wiszaca-sufitowa-loft-zwis-metalowa-e27-drut.jpg";
$product->image_url = $url;
$product->description = "Lampa w stylu loft metalowa nowoczesna
Lampa wisząca spodoba się wszystkim, którzy cenią sobie oryginalność i nowoczesność we wnętrzach. Metalowa lampa loft swoim ciekawym designem przyciąga spojrzenia oraz uczyni pomieszczenie niepowtarzalnym.
W jakich wnętrzach najlepiej sprawdzi się wisząca lampa industrialna?
Lampa pasuje do kuchni, jadalni, sypialni czy salonu. Oświetlenie znakomicie prezentuje się wszędzie tam, gdzie panuje nowoczesny, industrialny lub minimalistyczny styl. Lampa wisząca dostępna jest w kolorze czarnym i białym, dzięki czemu z łatwością dopasujesz oświetlenie do wystroju swoich wnętrz. Lampa loft posiada aż cztery kolory podkloszówki do wyboru – biały, czarny, miedziany, złoty i chrom. Stylowy detal lampy podkreśla wyjątkowość wnętrza.
Jakie zalety posiada lampa industrialna?
Lampa posiada regulowaną wysokość, dzięki której dopasujesz oświetlenie do rozmiarów swoich wnętrz. Klosz lampy jest metalowy, co zapewnia trwałość i odporność lampy na uszkodzenia. Dedykowanymi źródłami do światła są żarówki dekoracyjne oraz LED E27.";
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
$product->name = [$default_lang => "Lampa Wisząca Loft Metalowa Klosze Dekoracyjne"];
$product->link_rewrite = [$default_lang => "lampa-wiszaca-loft-metalowa-klosze-dekoracyjne"];
$product->price = 119.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/lampa-wiszaca-loft-metalowa-klosze-dekoracyjne.jpg";
$product->image_url = $url;
$product->description = "Lampa wisząca regulowana na listwie loft
Lampa 2-płomienna zachowana jest w stylu industrialnym, jednak świetnie odnajduje się również w nowoczesnych, minimalistycznych czy skandynawskich designach. Oświetlenie stworzyliśmy w dwóch uniwersalnych kolorach, dzięki czemu pasuje do każdego wystroju pomieszczenia.
Gdzie najlepiej zawiesić nowoczesną lampę z metalowymi kloszami?
Lampa wisząca może mieć wiele różnorodnych zastosowań. Oświetlenie pasuje do sypialni, salonu, kuchni, jadalni czy pokoju młodzieżowego. Lampa wisząca może pełnić funkcje światła dekoracyjnego. Zasil lampę żarówkami o ciepłej barwie światła, a zyskasz nastrojowe, klimatyczne oświetlenie.
Nie musisz martwić się o to, czy lampa będzie współgrała z wystrojem Twojego mieszkania. Czerń i biel to kolory, które łączą się z każdą inną barwą. Konstrukcja lampy zachowana jest w minimalistycznym stylu, natomiast klosze są tutaj główną dekoracją. Ich oryginalny kształt przyciąga uwagę mimo że wyglądają niezwykle łagodnie.
Jakie praktyczne cechy posiada nowoczesna lampa 2-płomienna loft?
Największą zaletą oświetlenia jest jego regulowana wysokość. Pozwala to perfekcyjnie dostosować lampę loft do rozmiarów wnętrza. Oświetlenie wykonane jest z metalu, dzięki czemu jest wytrzymałe, odporne na uszkodzenia i będzie ozdabiać Twoje mieszkanie przez bardzo długi czas. Do lampy wiszącej pasują żarówki E27. Klosze oświetlenia nie zasłaniają źródła światła, więc możesz zasilić je żarówkami dekoracyjnymi, których wygląd doda pomieszczeniu przytulnego charakteru.
Lampa industrialna posiada możliwość podłączenia pod podwójny przełącznik.";
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
$product->name = [$default_lang => "Nowoczesna Lampa Wisząca Loft Diament Metal Dwa Kolory"];
$product->link_rewrite = [$default_lang => "nowoczesna-lampa-wiszaca-loft-diament-metal-dwa-kolory"];
$product->price = 149.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/nowoczesna-lampa-wiszaca-loft-diament-metal-dwa-kolory.jpg";
$product->image_url = $url;
$product->description = "Lampa wisząca loft 3-płomienna metalowa
Chcesz nadać swoim wnętrzom nowoczesności? A może szukasz lampy do minimalistycznego wystroju pokoju? Mamy dla Ciebie idealne oświetlenie, które pasować będzie do każdego z pomieszczeń.
W jakich wnętrzach lampa wisząca industrialna prezentuje się najlepiej?
Oświetlenie pasuje do wielu rodzajów wnętrz – salonu, jadalni, kuchni czy sypialni. Lampa dostępna jest w dwóch klasycznych kolorach – czarnym i białym, które współgrają z wystrojem wszystkich aranżacji.
Lampa wisząca może pełnić funkcje oświetlenia dekoracyjnego. Klosze możesz zawiesić na różnych wysokościach, dzięki czemu uzyskasz ciekawą, nowoczesną ozdobę. Druciane klosze nie zasłaniają źródła światła, przez co do lampy świetnie pasują żarówki dekoracyjne. Ich charakterystyczny wygląd oraz ciepła barwa światła dodadzą magicznego klimatu urządzanemu pomieszczeniu.
Jakie praktyczne funkcje posiada lampa wisząca w stylu loft?
Regulowana wysokość jest jedną z najważniejszych cech lampy. Dzięki niej dostosujesz oświetlenie do każdego rozmiaru pomieszczenia. Lampa loft wykonana jest z metalu, co gwarantuje jej użyteczność na długi czas.
Lampa wisząca industrialna posiada możliwość podłączenia pod podwójny przełącznik.";
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
$product->name = [$default_lang => "Nowoczesna Lampa Wisząca z Abażurem Metalowa Dekoracja"];
$product->link_rewrite = [$default_lang => "nowoczesna-lampa-wiszaca-z-abazurem-metalowa-dekoracja"];
$product->price = 99.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/nowoczesna-lampa-wiszaca-z-abazurem-metalowa-dekoracja.jpg";
$product->image_url = $url;
$product->description = "Lampa wisząca pojedyncza z metalową ozdobą
Niezwykłe połączenie klasyki z nowoczesnym designem. Lampa wisząca z okrągłym abażurem została urozmaicona nowoczesną dekoracją z metalu. Ten niewielki element nadał lampie zupełnie nowego klimatu czyniąc ją odpowiednią zarówno do nowoczesnych, minimalistycznych jak i klasycznych wnętrz.
Gdzie najlepiej zawiesić stylową lampę z abażurem?
Oświetlenie jest znakomitą propozycją do wielu wnętrz – salonu, sypialni, jadalni, pokoju młodzieżowego lub kuchni. Design lampy wiszącej będzie dekorował każdy rodzaj pomieszczenia.
Dobór oświetlenia do wystroju mieszkania ułatwiają cztery kolory abażura do wyboru. Klosz dostępny jest w wersji białej, czarnej, jasnoszarej i ciemnoszarej. Te klasyczne kolory doskonale współgrają ze wszystkimi innymi barwami.
Jakie praktyczne funkcje posiada nowoczesna lampa z abażurem?
Jedną z największych zalet oświetlenia jest regulowana wysokość. Umożliwia ona dokładne dostosowanie lampy wiszącej do wymiaru wnętrza. Abażur wykonany jest z materiału odpornego na uszkodzenia. Natomiast konstrukcja stworzona została z wytrzymałego metalu malowanego proszkowo. Do stylowej lampy wiszącej pasują żarówki o standardowym gwincie E27.";
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
$product->name = [$default_lang => "Lampa Industrialna Regulowana Metalowa Wisząca"];
$product->link_rewrite = [$default_lang => "lampa-industrialna-regulowana-metalowa-wiszaca"];
$product->price = 149.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/lampa-industrialna-regulowana-metalowa-wiszaca.jpg";
$product->image_url = $url;
$product->description = "Lampa wisząca w stylu industrialnym dwa kolory
Prezentowana lampa wisząca uzupełni minimalistyczny wystrój wnętrz, doda nowoczesności klasycznym wystrojom oraz idealnie skomponuje się z industrialnymi mieszkaniami. Prosty, a zarazem oryginalny design oświetlenia pasuje do wszystkich aranżacji wnętrz.
W jakich pomieszczeń najlepiej wygląda nowoczesna lampa wisząca loft 3-płomienna?
Lampę możesz dodać do każdego rodzaju wnętrza- kuchni, sypialni, jadalni, salonu czy przedpokoju. Uniwersalne kolory oświetlenia – czarny i biały komponują się z każdą barwą i wystrojem.
Lampa posiada okrągłą podsufitkę, która dodatkowo podkreśla nowoczesny charakter oświetlenia. Klosze lampy możesz zawiesić na różnych wysokościach, dzięki czemu uzyskasz niezwykły efekt dekoracyjny.
Jakie funkcje posiada lampa wisząca nowoczesna z 3 źródłami zasilania?
Oświetlenie w stylu loft stworzone jest z metalu, co gwarantuje wysoką jakość, odporność na uszkodzenia i trwałość. Regulacja wysokości pozwala na idealne dostosowanie lampy do wymiarów pomieszczenia. Lampa wisząca zasilana jest źródłami światła o gwincie E27, rewelacyjnie wyglądają w niej również żarówki dekoracyjne.
Lampa wisząca posiada możliwość podłączenia pod podwójny przełącznik.";
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
$product->name = [$default_lang => "Lampa Wisząca z Abażurem Kolorowa Nowoczesna"];
$product->link_rewrite = [$default_lang => "lampa-wiszaca-z-abazurem-kolorowa-nowoczesna"];
$product->price = 49.98;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/lampa-sufitowa-wiszaca-abazur.jpg";
$product->image_url = $url;
$product->description = "Stylowa lampa wisząca z okrągłym abażurem
Designerska lampa wisząca, która pasuje do każdego rodzaju pomieszczenia. Wygląda minimalistycznie, a materiałowy abażur przełamuje styl oświetlenia i czyni wnętrza niezwykle przytulnymi.
Do jakich wnętrz pasuje nowoczesna lampa wisząca z abażurem?
Oświetlenie wiszące rewelacyjnie prezentuje się we wszystkich wnętrzach – kuchni, sypialni, salonie, jadalni czy biurze.
Lampa posiada osiem kolorów abażurów i trzy kolor linek do wyboru, dzięki czemu bardzo łatwo dobierzesz oświetlenie do wystroju pomieszczenia.
Okrągły abażur będzie stylową dekoracją pokoju, a cała lampa stanie się funkcjonalnym oświetleniem.
Do lampy z łatwością dopasujesz inne rodzaje oświetleń. Kinkiety, plafony domowe czy lampy podłogowe – uniwersalny wygląd zwisu z abażurem bardzo ułatwia tworzenie funkcjonalnych i stylowych zestawów oświetleniowych.
Jakie praktyczne funkcje posiada lampa wisząca z abażurem?
Pojedyncze oświetlenie ma możliwość regulacji wysokości. Ta niezwykła funkcja pozwala na idealne dopasowanie lampy do wysokości pomieszczenia. Do zwisu sufitowego pasują żarówki o popularnym gwincie E27.";
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
$product->name = [$default_lang => "Nowoczesna Lampa wisząca Duży Abażur"];
$product->link_rewrite = [$default_lang => "nowoczesna-lampa-wiszaca-duzy-abazur"];
$product->price = 59.98;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/nowoczesna-lampa-wiszaca-duzy-abazur.jpg";
$product->image_url = $url;
$product->description = "Lampa nowoczesna wisząca z abażurem okrągłym wiele kolorów
Prezentowana lampa spodoba się fanom klasyki w nowoczesnym wydaniu. Okrągły abażur z materiału i minimalistyczna linka z regulacją wysokości tworzą oświetlenie, które pasuje do każdego rodzaju wnętrza i prezentuje się niezwykle designersko.
Gdzie najlepiej zawiesić pojedynczą lampę wiszącą z materiałowym abażurem?
Lampa wygląda rewelacyjnie we wszystkich pomieszczeniach. Sypialnia, pokój dziecka, biuro, jadalnia, kuchnia – wystarczy, że wybierzesz kolor abażura najbardziej pasujący do wystroju Twoich wnętrz i piękna aranżacja gotowa.
Uniwersalny wygląd lampy wiszącej pozwala na zestawianie ją z wieloma innymi rodzajami oświetleń. Lampy stojące, lampy sufitowe, kinkiety, plafony wewnętrzne – wśród naszych produktów znajdziesz oświetlenie znakomicie komponujące się z lampą z abażurem.
Jakie zalety posiada lampa wisząca LED z abażurem?
Największym atutem zwisu wiszącego jest możliwość regulacji wysokości, dzięki któremu oświetlenie idealnie dostosowuje się do rozmiarów pomieszczenia. Abażur lampy został wykonany z wysokiej jakości i odpornego na zabrudzenia materiału. Do oświetlania wiszącego pasują żarówki o najpopularniejszym gwincie E27.";
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
$product->name = [$default_lang => "Lampa Wisząca Pojedyncza Styl Loft Czarna"];
$product->link_rewrite = [$default_lang => "lampa-wiszaca-pojedyncza-styl-loft-czarna"];
$product->price = 29.89;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/lampa-wiszaca-pojedyncza-styl-loft-czarna.jpg";
$product->image_url = $url;
$product->description = "Lampa pojedyncza wisząca w stylu loft czarna
Designerska lampa wisząca, która doda oryginalności każdemu pomieszczeniu. Klasyczna czerń doskonale komponuje się ze wszystkimi stylami wnętrza. Klosz odsłaniający żarówkę doda magii i blasku Twojemu mieszkaniu.
Do jakich wnętrz najbardziej pasuje nowoczesna lampa pojedyncza czarna?
Zwis sufitowy pojedynczy najlepiej prezentuje się we wnętrzach industrialnych. Jego minimalizm, surowość, a jednocześnie wyjątkowość idealnie wpisują się w kanony loftów. Jednakże oświetlenie może pięknie dekorować również nowoczesne, minimalistyczne pomieszczenia.
Zwisy wiszący pasuje do sypialni, kuchni, jadalni czy salonu. Lampa wisząca możesz posłużyć jako oświetlenie dekoracyjne w tych pomieszczeniach. Dla ciekawszego efektu możesz zasilić lampę żarówką dekoracyjną, która swoim oryginalnym wyglądem i ciepłym światłem nada mieszkaniu przytulnego nastroju.
Jakie zalety posiada stylowa lampa wisząca industrialna?
Lampa loft posiada regulowaną wysokość. Ta funkcja sprawia, że możesz perfekcyjnie dopasować lampę do rozmiaru pomieszczenia. Oświetlenie zostało wykonane z metalu, co zapewnia trwałość na wiele lat. Do lampy pasują źródła światła o tradycyjnym gwincie E27.";
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
$product->name = [$default_lang => "Lampa Pojedyncza Wisząca w Stylu Loft Nowoczesna"];
$product->link_rewrite = [$default_lang => "lampa-pojedyncza-wiszaca-w-stylu-loft-nowoczesna"];
$product->price = 33.49;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/lampa-pojedyncza-wiszaca-w-stylu-loft-nowoczesna.jpg";
$product->image_url = $url;
$product->description = "Industrialna lampa wisząca pojedyncza nowoczesna czarna
Lampa, która doda Twoim wnętrzom oryginalności i nowoczesności. Minimalistyczny, a zarazem przykuwający spojrzenia wygląd lampy ozdobi Twoją sypialnię, salon, kuchnię, jadalnię i wiele innych pomieszczeń.
Gdzie najlepiej zawiesić nowoczesną lampę loft?
Oświetlenie pasuje do stylu industrialnego, nowoczesnego, retro. Zwis sufitowy pojedynczy został wykonany w czarnym kolorze, aby komponował się ze wszystkimi innymi barwami. Lampa znakomicie sprawdzi się w roli oświetlenia dekoracyjnego. Nietypowy klosz możesz ozdobić żarówką dekoracyjną, która nada wnętrzu przytulności i nastrojowości.
Czy lampa pojedyncza wisząca nowoczesna posiada praktyczne funkcje?
Możesz regulować wysokość oświetlenia, dzięki czemu masz pewność, że zwis wiszący będzie idealnie pasował do rozmiaru urządzanego pomieszczenia. Na uwagę zasługuje również wykonanie lampy – zadbaliśmy o każdy szczegół tworząc oświetlenie, by mogło służyć Ci na wiele długich lat. Do lampy wiszącej nowoczesnej bez problemu dobierzesz pasującą żarówkę, ponieważ pasują do niej popularne źródła światła E27.";
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
$product->name = [$default_lang => "Designerska Lampa Wisząca Loft Metalowa Czarna"];
$product->link_rewrite = [$default_lang => "designerska-lampa-wiszaca-loft-metalowa-czarna"];
$product->price = 48.99;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/designerska-lampa-wiszaca-loft-metalowa-czarna.jpg";
$product->image_url = $url;
$product->description = "Designerska lampa wisząca pojedyncza industrialna
Stylowe oświetlenie, które w oryginalny sposób udekoruje Twoje wnętrze. Designerski klosz o nieregularnym kształcie sprawia, że lampa wisząca przykuwa spojrzenia.
Do jakich pomieszczeń pasuje zwis sufitowy industrialny czarny?
Pojedynczą lampę możesz zawiesić w nowoczesnej sypialni, salonie czy w kuchni nad stołem lub blatem. Zwis wiszący stworzony jest w czarnym kolorze, dzięki czemu dopasowuje się do każdego wystroju pomieszczenia. Metalowy klosz w formie klatki uwydatnia źródło światła, dlatego możesz zasilić lampę żarówką dekoracyjną. Dzięki niej w Twoim wnętrzu zapanuje wyjątkowy, nastrojowy klimat.
Czy lampa wisząca loft czarna posiada zalety?
Lampa industrialna 1-płomienna posiada regulowaną wysokość, dzięki czemu idealnie dopasowuje się do rozmiaru urządzanego wnętrza. Dbamy o jakość materiałów naszych lamp, dlatego zwis sufitowy wykonaliśmy z najwyższej jakości metalu. Lampa wisząca jest stworzona z dbałością o każdy szczegół. Do oświetlenia dobierzesz źródła światła o gwincie E27.";
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
$product->name = [$default_lang => "Lampa Sufitowa Dziecięcy Żyrandol z Abażurami Regulowany"];
$product->link_rewrite = [$default_lang => "lampa-sufitowa-dzieciecy-zyrandol-z-abazurami-regulowany"];
$product->price = 119.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/lampa-sufitowa-dzieciecy-zyrandol-z-abazurami-regulowany.jpg";
$product->image_url = $url;
$product->description = "Lampa sufitowa żyrandol do pokoju dziecka z abażurami
Lampa dziecięca dostępna w pięciu kolorach konstrukcji oraz z siedmioma wzorami abażurów do wyboru. Pozwala to na stworzenie własnej, niepowtarzalnej lampy sufitowej idealnie pasującej do wystroju pomieszczenia i trafiającej w gusta dziecka.
Gdzie najlepiej będzie prezentować się kolorowa lampa sufitowa z abażurami we wzory?
Żyrandol pasuje do pokoju dziecka, szkół, bawialni, świetlic czy przedszkoli. Lampa z abażurem powieszona w centralnym punkcie pokoju dokładnie oświetli całą jego powierzchnię. Dzięki regulacji możesz skierować każdy klosz w inną stronę i w ten sposób oświetlić najbardziej wymagające części pokoju.
Wzory abażurów i kolory konstrukcji pozwalają na skomponowanie lampy pasującej zarówno do pokoju dziewczynki jak i chłopca. Urocze wzory w pandy, kotki, flamingi czy gwiazdki staną się największą dekoracją pomieszczenia.
Jakie praktyczne funkcje posiada lampa sufitowa do pokoju dziecka?
Największą zaletą oświetlenia jest możliwość regulacji kąta padania światła. Dzięki niej możesz oświetlić cały pokój za pomocą jednej lampy. Na uwagę zasługują również bezpieczne, wytrzymałe i odporne na uszkodzenia materiały wykonania, dzięki którym lampa będzie towarzyszyła maluchowi przez bardzo długi czas. Do lampy sufitowej dziecięcej z łatwością dobierzesz źródła światła, ponieważ do oświetlenia pasują żarówki o popularnym gwincie E27. Lampa posiada możliwość podłączenia pod podwójny przełącznik.";
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
$product->name = [$default_lang => "Lampa Wisząca na Listwie Sufitowa Abażury"];
$product->link_rewrite = [$default_lang => "lampa-wiszaca-na-listwie-sufitowa-abazury"];
$product->price = 99.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/lampa-wiszaca-na-listwie-sufitowa-abazury.jpg";
$product->image_url = $url;
$product->description = "Lampa wisząca 2 źródła zasilania na listwie abażury
Prezentowana lampa z abażurami znakomicie odnajduje się zarówno w klasycznych wnętrzach jak i minimalistycznych, nowoczesnych aranżacjach. Abażury dostępne są w pięciu kolorach od jasnych do ciemnych odcieni, a konstrukcję oświetlenia mamy w wersji białej, czarnej i szarej.
Gdzie najlepiej będzie prezentować się stylowa lampa wisząca regulowana z abażurami?
Lampa sufitowa na listwie komponuje się z każdym stylem wnętrzarskim, więc to od Twoich potrzeb i upodobań zależy, gdzie zawiesisz stylową lampę wiszącą. Oświetlenie świetnie prezentuje się w klasycznym salonie, kuchni, nowoczesnej sypialni czy jadalni. Lampa wisząca z abażurem z powodzeniem oświetli równomiernie cały pokój, ale może również pełnić funkcje dekoracyjne.
Jakie zalety posiada lampa wisząca 2-płomienna nowoczesna?
Oświetlenie posiada regulowaną wysokość, dzięki której możesz dopasować lampę do rozmiaru urządzanego pokoju. Abażury oświetlenia wiszącego zostały wykonane z wytrzymałego materiału, a konstrukcja ze sprawdzonego metalu. Mnóstwo kolorów abażurów i konstrukcji do wyboru pozwala na skomponowanie oświetlenia idealnie wpisującego się w styl Twoich wnętrz. Do lampy pasują źródła światła E27. Lampa posiada możliwość podłączenia pod podwójny przełącznik.";
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
$product->name = [$default_lang => "Lampa Wisząca z Abażurem Klasyczna Regulowana"];
$product->link_rewrite = [$default_lang => "lampa-wiszaca-z-abazurem-klasyczna-regulowana"];
$product->price = 49.99;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/lampa-wiszaca-z-abazurem-klasyczna-regulowana.jpg";
$product->image_url = $url;
$product->description = "Lampa wisząca pojedyncza z okrągłym abażurem wiele kolorów
Lampa wisząca o klasycznym wyglądzie, która rewelacyjnie prezentuje się również w nowoczesnych wnętrzach. Abażur z ozdobnym pasem jest elegancką, a jednocześnie minimalistyczną dekoracją zwisu wiszącego.
W jakich pomieszczeniach najlepiej zawiesić lampę sufitową z abażurem?
Pojedyncza lampa z abażurem znakomicie sprawdzi się w roli oświetlenia do sypialni, kuchni, jadalni, salonu czy gabinetu. Lampa może zawisnąć w centralnym punkcie pomieszczenia, dzięki czemu oświetli równomiernie pomieszczenie. Zwis wiszący pojedynczy z abażurem może również służyć jako światło punktowe zawieszone ad stołem w kuchni. Lampa dokładnie oświetli w ten sposób całą powierzchnię stołu..
Jakie funkcjonalności posiada nowoczesna lampa wisząca z materiałowym abażurem?
Najbardziej praktyczną funkcją oświetlenia jest możliwość regulacji wysokości, która pozwala na dostosowanie lampy do wymiaru pomieszczenia. Lampa dostępna jest w wielu wariantach kolorystycznych – do wyboru mamy pięć barw abażura i trzy kolory konstrukcji. Dzięki temu możesz samodzielnie stworzyć oświetlenie idealnie pasujące do charakteru Twoich wnętrz. Do lampy dobierz źródła światła typu E27.";
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
$product->name = [$default_lang => "Lampa Wisząca Sufitowa z Abażurem Nowoczesna Pojedyncza"];
$product->link_rewrite = [$default_lang => "lampa-wiszaca-sufitowa-z-abazurem-nowoczesna-pojedyncza"];
$product->price = 49.99;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/lampa-wiszaca-sufitowa-z-abazurem-nowoczesna-pojedyncza.jpg";
$product->image_url = $url;
$product->description = "Lampa wisząca a abażurem pojedyncza regulowana
Uniwersalna lampa wisząca, która dopasuje się do każdego wystroju wnętrza. Abażur dostępny jest w różnych połączeniach kolorystycznych, co jeszcze bardziej ułatwia dostosowanie zwisu wiszącego do pomieszczenia. Lampa posiada również trzy kolory konstrukcji do wyboru.
W jakich wnętrzach najlepiej prezentuje się nowoczesna lampa wisząca regulowana z abażurem?
Lampa z abażurem rewelacyjnie wygląda w sypialni, kuchni, salonie czy jadalni. Oświetlenie jest na tyle uniwersalne, że dopasujesz je do każdego pomieszczenia, bez względu na przeznaczenie pokoju. Każdy wariant abażura składa się z trzech stonowanych kolorów, by mógł komponować się z każdą inną barwą dominującą we wnętrzu. Połączenie kolorów abażurów wygląda bardzo stylowo, elegancko i nowocześnie.
Jakie funkcjonalności posiada pojedyncza lampa z abażurem w nowoczesnym stylu?
Lampa sufitowa posiada regulację wysokości, co pozwala na idealne dopasowanie oświetlenia do wymiaru pomieszczenia. Lampa została stworzona z solidnych materiałów odpornych na uszkodzenia. Do zwisu wiszącego pojedynczego regulowanego pasują najpopularniejsze typy żarówek E27.";
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
$product->name = [$default_lang => "Lampa Wisząca Żyrandol Regulowana Abażury"];
$product->link_rewrite = [$default_lang => "lampa-wiszaca-zyrandol-regulowana-abazury"];
$product->price = 125.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/lampa-wiszaca-zyrandol-regulowana-abazury.jpg";
$product->image_url = $url;
$product->description = "Lampa wisząca 3-płomienna kolorowe abażury nowoczesna
Prezentowana lampa wisząca z abażurami stanie się dekoracją każdego rodzaju wnętrza. Stonowane kolory, minimalistyczny, a zarazem niepowtarzalny wygląd lampy sprawiają, że stanie się ona designerskim uzupełnieniem Twoich wnętrz.
Gdzie najlepiej zawiesić oryginalną lampę regulowaną z trzema abażurami?
Oświetlenie może zostać dekoracją Twojego salonu, kuchni, jadalni, sypialni czy pokoju młodzieżowego. Stonowane kolory lampy wiszącej nowoczesnej sprawiają, że pasuje ona do wszystkich rodzajów wnętrz. Dzięki pięciu barwom abażura oraz trzem kolorom konstrukcji do wyboru, możesz stworzyć takie zestawienie, które idealnie odda piękno Twojego mieszkania.
Jakie właściwości posiada klasyczna lampa wisząca z okrągłymi abażurami?
Oświetlenie sufitowe posiada regulację wysokości, dzięki której możesz dostosować lampę do rozmiaru pomieszczenia oraz powiesić każdy abażur na innym poziomie. Zyskasz wtedy ciekawy efekt, który udekoruje wnętrze. Oświetlenie zostało wykonane z trwałych, odpornych na uszkodzenia tworzyw - metalu i wysokiej jakości materiału do abażurów. Do lampy wiszącej z łatwością dobierzesz źródła światła, ponieważ pasują do niej żarówki o popularnym gwincie E27. Lampa posiada możliwość podłączenia pod podwójny przełącznik.";
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
$product->name = [$default_lang => "Lampa Wisząca Nowoczesna na Listwie Abażury Sufitowa"];
$product->link_rewrite = [$default_lang => "lampa-wiszaca-nowoczesna-na-listwie-abazury-sufitowa"];
$product->price = 99.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/lampa-wiszaca-nowoczesna-na-listwie-abazury-sufitowa.jpg";
$product->image_url = $url;
$product->description = "Nowoczesna lampa wisząca regulowana z dwoma abażurami
Prezentujemy lampę wiszącą a abażurami, która wspaniale udekoruje pomieszczenia stworzone w nowoczesnym jak i klasycznym stylu. Stonowane warianty kolorystyczne abażurów i konstrukcji sprawiają, że żyrandol sufitowy dopasuje się do każdego wystroju wnętrzarskiego.
Do jakich pomieszczeń najbardziej pasuje klasyczna lampa z abażurami regulowana?
Oświetlenie sufitowe możesz zamontować w salonie, sypialni, jadalni, kuchni bądź gabinecie. Lampa z abażurami może pełnić zarówno funkcje dekoracyjne we wnętrzu jak i stanowić główne źródło zasilania. Możesz wybrać dwa takie same warianty kolorystyczne abażurów lub skomponować ze sobą inne wzory. W ten sposób dodasz swojej aranżacji nieco oryginalności.
Czy prezentowana lampa wisząca z abażurami ma przydatne funkcje?
Oświetlenie ma regulowaną wysokość, co pozwala na zawieszenie abażurów lampy sufitowej na różnych poziomach. Dzięki tej funkcji możesz też idealnie dopasować oświetlenie do rozmiaru pokoju. Lampa została wykonana z trwałych, odpornych na uszkodzeniach materiałów, by mogła ozdabiać Twoje wnętrza przez długi czas. Oświetlenie wiszące zasilane jest najpopularniejszymi żarówkami E27. Lampa posiada możliwość podłączenia pod podwójny przełącznik.";
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
$product->name = [$default_lang => "Lampa Wisząca Pojedyncza Regulowana Nowoczesna Abażur"];
$product->link_rewrite = [$default_lang => "lampa-wiszaca-pojedyncza-regulowana-nowoczesna-abazur"];
$product->price = 69.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/lampa-wiszaca-pojedyncza-regulowana-nowoczesna-abazur.jpg";
$product->image_url = $url;
$product->description = "Pojedyncza lampa wisząca z abażurem wiele kolorów
Szukasz lampy sufitowej, która stylowo dopasuje się zarówno do klasycznego jak i nowoczesnego wystroju wnętrz? Mamy lampę wiszącą idealną dla Ciebie! Minimalistyczna konstrukcja w połączeniu z abażurem w trzech stonowanych kolorach tworzą duet, który komponuje się z każdym stylem wnętrzarskim.
W jakich pomieszczeniach lampa regulowana z abażurem wygląda najlepiej?
Oświetlenie sufitowe pasuje do sypialni, kuchni, biura, jadalni, salonu – wszędzie tam, gdzie wprowadzić odrobinę elegancji i przytulności. Możesz zadecydować o tym, jak ma wyglądać Twój zwis wiszący. Masz do wyboru trzy warianty kolorystyczne abażura oraz trzy odcienie konstrukcji, które możesz dowolnie ze sobą zestawić tworząc lampę idealnie dopasowaną do wystroju.
Jakie zalety posiada pojedyncza lampa nowoczesna z abażurem?
Największą zaletą lampy z abażurem jest regulacja wysokości, która umożliwia dostosowanie oświetlenia do wymiaru urządzanego pokoju. Lampa wykonana jest z wytrzymałych i solidnych materiałów, które zapewniają niezmienny wygląd oświetlenia na wiele lat. Lampa wisząca nowoczesna zasilana jest najpopularniejszym rodzajem żarówek E27.";
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
$product->name = [$default_lang => "Lampa Regulowana Wisząca Sufitowa Abażur Materiał"];
$product->link_rewrite = [$default_lang => "lampa-regulowana-wiszaca-sufitowa-abazur-material"];
$product->price = 79.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/lampa-regulowana-wiszaca-sufitowa-abazur-material.jpg";
$product->image_url = $url;
$product->description = "Klasyczna lampa wisząca z abażurem regulowana
Lampa z abażurem, która dopasuje się do większości wystrojów pomieszczenia. Minimalistyczna konstrukcja i stonowane kolory abażura tworzą oświetlenie sufitowe potrafiące nadać wnętrzom przytulności i elegancji.
W jakich pomieszczeniach najlepiej prezentuje się regulowana lampa pojedyncza z materiałowym abażurem?
Salon, biuro, sypialnia, jadalnia czy kuchnia – zwis wiszący pojedynczy regulowany pasuje do wszystkich wnętrz niezależnie od ich przeznaczenia. Jeśli chcesz stworzyć dopasowaną aranżację, dodaj do prezentowanego oświetlenia lampę ścienną stworzoną w tym samym stylu. Kinkiet Nowoczesny z Abażurem Wiele Kolorów Lampa może służyć jako oświetlenie punktowe, a lampa wisząca jako światło główne.
Jakie praktyczne funkcje ma lampa z abażurem w nowoczesnym stylu?
Oświetlenie posiada regulowaną wysokość, co pozwala na perfekcyjnie dopasowanie lampy do rozmiaru pomieszczenia. Oświetlenie zostało wykonane z najwyższej jakości materiałów, które zapewniają radość z użytkowania lampy na bardzo długi czas. Do oświetlenia pasują popularne źródła światła o gwincie E27.";
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
$product->name = [$default_lang => "Nowoczesna Lampa Wisząca z Abażurem Żarówka"];
$product->link_rewrite = [$default_lang => "nowoczesna-lampa-wiszaca-z-abazurem-zarowka"];
$product->price = 69.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/nowoczesna-lampa-wiszaca-z-abazurem-zarowka.jpg";
$product->image_url = $url;
$product->description = "Nowoczesna lampa wisząca z abażurem z prześwitującą żarówką
Niezwykła lampa wisząca, która ozdobi zarówno klasyczne jak i nowoczesne wnętrza. Oświetlenie zaprojektowaliśmy w minimalistycznym stylu, by komponowało się z wieloma rodzajami wnętrz. Do lampy sufitowej dodaliśmy przyciągającą wzrok dekorację – prześwitujący fragment abażura, który odsłania żarówkę.
Do jakich wnętrz pasuje nowoczesna lampa wisząca z abażurem?
Lampa z abażurem może stać się ozdobą Twojej sypialni, kuchni, salonu, jadalni – dzięki stonowanym, uniwersalnym kolorom oświetlenie pasuje do wszystkich rodzajów wnętrz. Jeśli chcesz by lampa wyglądała jeszcze bardziej efektownie, możesz zasilić ją żarówką dekoracyjną. Prześwitująca część abażura uwydatnia źródło światła, więc stylowe żarniki będą pięknie ozdabiać Twoje wnętrze.
Jakie zalety posiada nowoczesna lampa wisząca z abażurem?
Oświetlenie posiada regulację wysokości, dzięki której dokładnie dopasujesz lampę do wymiarów pomieszczenia. Zwis wiszący posiada pięć wariantów kolorystycznych abażura oraz trzy kolory linki do wyboru. Dzięki temu skomponujesz oświetlenie, które najlepiej wyraża charakter Twoich wnętrz. Do lampy pasują żarówki o popularnym gwincie E27.";
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
$product->name = [$default_lang => "Lampa Wisząca Sufitowa Abażur Pojedyncza Regulacja"];
$product->link_rewrite = [$default_lang => "lampa-wiszaca-sufitowa-abazur-pojedyncza-regulacja"];
$product->price = 69.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/lampa-wiszaca-sufitowa-abazur-pojedyncza-regulacja.jpg";
$product->image_url = $url;
$product->description = "Lampa wisząca z abażurem nowoczesna regulowana
Lampa wisząca o nowoczesnym wyglądzie, który pięknie prezentuje się zarówno w minimalistycznych jak i bardziej eleganckich, zdobionych wnętrzach. Oświetlenie sufitowe posiada pięć kolorów abażura i trzy kolory konstrukcji do wyboru. Dzięki temu masz możliwość stworzenia takiego zestawienia barw, które najbardziej pasuje do Twojego mieszkania.
Gdzie najlepiej zawiesić regulowaną pojedynczą lampę z abażurem?
Zwis wiszący będzie świetnie prezentować się w salonie, sypialni, pokoju młodzieżowym, biurze czy jadalni. Lampa z abażurem została wykonana w uniwersalnych, stonowanych kolorach, by mogła komponować się z każdym wystrojem wnętrza.
Jakie praktyczne funkcje posiada lampa wisząca nowoczesna ze stylowym abażurem?
Lampa sufitowa posiada możliwość regulacji wysokości, dzięki czemu masz pewność, że oświetlenie będzie idealnie pasować do rozmiaru Twojego pomieszczenia. Konstrukcja lampy została wykonana z trwałego metalu. Abażur lampy wiszącej nowoczesnej wykonany jest z odpornej na zabrudzenia tkaniny. Do oświetlenia z łatwością dobierzesz źródła światła, ponieważ do lampy pasują żarówki o popularnym gwincie E27.";
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
$product->name = [$default_lang => "Lampa z Abażurem Wisząca Nowoczesna Wiele Kolorów"];
$product->link_rewrite = [$default_lang => "lampa-z-abazurem-wiszaca-nowoczesna-wiele-kolorow"];
$product->price = 79.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/lampa-z-abazurem-wiszaca-nowoczesna-wiele-kolorow.jpg";
$product->image_url = $url;
$product->description = "Lampa wisząca pojedyncza z szerokim abażurem designerska
Stylowa lampa wisząca, która świetnie wkomponuje się w wystrój Twoich wnętrz. Zwis wiszący pojedynczy regulowany dostępny jest w wielu stonowanych kolorach do wyboru, dzięki czemu pasuje do wszystkich wystrojów pomieszczeń.
Gdzie najlepiej prezentuje się nowoczesna lampa wisząca regulowana z abażurem?
Lampę sufitową nowoczesną możesz zawiesić w każdym pomieszczeniu. Będzie wspaniale wyglądać w kuchni lub jadalni nad stołem, sypialni, salonie czy biurze. Uniwersalne kolory lampy wiszącej nowoczesnej komponują się ze wszystkimi innymi barwami, a materiałowy abażur dodaje wnętrzom przytulności i ciepła.
Jakie zalety posiada lampa pojedyncza z abażurem?
Oświetlenie sufitowe posiada możliwość regulacji wysokości, dzięki której możesz dokładnie dopasować lampę z abażurem do swojego wnętrza. Konstrukcja oświetlenia wykonana jest z trwałego metalu, a abażur z wysokiej jakości materiału. Do pojedynczej lampy wiszącej z łatwością dobierzesz źródło światła, ponieważ zasilana jest najpopularniejszymi żarówkami E27.";
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
$product->name = [$default_lang => "Lampa Wisząca Dziecięca Abażur Wiele Wzorów"];
$product->link_rewrite = [$default_lang => "lampa-wiszaca-dziecieca-abazur-wiele-wzorow"];
$product->price = 59.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/lampa-wiszaca-dziecieca-abazur-wiele-wzorow.jpg";
$product->image_url = $url;
$product->description = "Pojedyncza lampa wisząca z abażurem regulowana do pokoju dziecka
Szukasz oświetlenia do pokoju dziecka, które będzie funkcjonalne, jednocześnie przypadnie maluchowi do gustu i będzie komponować się z wystrojem pokoju? Mamy lampę dziecięcą idealną dla Ciebie! Oświetlenie sufitowe jest regulowane, a abażur dostępny jest w wielu pięknych wzorach, wśród których na pewno znajdziesz motyw, który pokocha Twoje dziecko.
Gdzie najlepiej będzie wyglądać lampa wisząca kolorowa z abażurem we wzory?
Lampa wisząca dedykowana jest aranżacjom pokoju dziecięcego. Oświetlenie sufitowe możesz zawiesić w centralnym punkcie pomieszczenia, dzięki czemu równomiernie rozświetli całe wnętrze. Lampa wisząca z abażurem pasuje również do szkół, bawialni, świetlic czy przedszkoli.
Abażury lampy wiszącej dziecięcej dostępne są w wielu różnorodnych wzorach, zachowanych w dość spokojnej kolorystyce. Na kloszach dominują szarość i biel, dzięki czemu zwis wiszący pojedynczy młodzieżowy dopasuje się do każdego wystroju pokoju.
Wśród dostępnych wzorów abażura znajdziesz takie motywy, które mogą dekorować kuchnię, sypialnię czy pokój młodzieżowy. Na przykład abażur we flamingi lub w piękne kwiaty – to bardzo modne motywy wśród stylów wnętrzarskich.
Jakie zalety posiada stylowa lampa sufitowa z abażurem dla dzieci?
Lampa z abażurem posiada regulację wysokości, dzięki której idealnie dostosujesz rozmiar oświetlenia do urządzanego pomieszczenia. Abażur lampy został wykonany z wysokiej jakości materiału, a konstrukcja z bezpiecznego tworzywa sztucznego. Do oświetlenia dziecięcego pasują żarówki E27.";
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
$product->name = [$default_lang => "Lampa Wisząca Nowoczesna Modne Abażury"];
$product->link_rewrite = [$default_lang => "lampa-wiszaca-nowoczesna-modne-abazury"];
$product->price = 59.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/lampa-wiszaca-nowoczesna-modne-abazury.jpg";
$product->image_url = $url;
$product->description = "Lampa wisząca pojedyncza nowoczesna abażur w modne wzory
Szukasz lampy wiszącej z abażurem w najmodniejsze motywy sezonu, która stanie największą dekoracją Twojego pomieszczenia? Mamy oświetlenie stworzone dla Ciebie! Biała konstrukcja lampy sufitowej znakomicie komponuje się z modnymi kloszami. Posiadamy wzory abażurów we flamingi, kwiaty, tropikalne liście i koronkę.
W jakich pomieszczeniach lampa wisząca z abażurem w modne wzory będzie wyglądać najlepiej?
Design lampy wiszącej pasuje do nowoczesnej kuchni, sypialni, jadalni czy pokoju młodzieżowego. Jeśli chcesz, aby oświetlenie stało się częścią wystroju, wybierz wzory zachowane w odcieniach szarości. Ten kolor znakomicie współgra ze wszystkimi innymi barwami. Jeżeli chcesz, aby lampa wisząca nowoczesna była główną dekoracją pomieszczenia, wybierz wzór w kolorowe kwiaty lub modne flamingi.
Jakie praktyczne funkcje posiada pojedyncza lampa wisząca z abażurem?
Największą zaletą oświetlenia jest możliwość regulacji wysokości. Dzięki tej funkcji bez problemu dostosujesz rozmiar lampy do urządzanego pomieszczenia. Konstrukcja oświetlenia wiszącego została wykonana z tworzywa sztucznego, a abażury z odpornej na zabrudzenia tkaniny. Zwis wiszący zasilany jest żarówkami o gwincie E27.";
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
$product->name = [$default_lang => "Lampa Wisząca Sufitowa Abażur w Modne Wzory Regulacja"];
$product->link_rewrite = [$default_lang => "lampa-wiszaca-sufitowa-abazur-w-modne-wzory-regulacja"];
$product->price = 69.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/lampa-wiszaca-sufitowa-abazur-w-modne-wzory-regulacja.jpg";
$product->image_url = $url;
$product->description = "Lampa wisząca pojedyncza oryginalne abażury w modne wzory
Chcesz nieco urozmaicić swoje wnętrza? Znudził Ci się dotychczasowy wystrój mieszkania? A może urządzasz dom i szukasz modnego wyposażenia? W każdym przypadku niezastąpiona okaże się prezentowana lampa wisząca nowoczesna. Oświetlenie posiada cztery niezwykle modne wzory abażurów do wyboru: tropikalne liście, koronka, kolorowe kwiaty, czarno-biała roślinność.
W jakich pomieszczeniach designerska lampa wisząca z abażurem będzie wyglądać najlepiej?
Lampę wiszącą z łatwością dopasujesz do nowoczesnej kuchni, sypialni, jadalni czy pokoju młodzieżowego. Kolorowe wzory abażurów znakomicie przełamią minimalistyczną aranżację wnętrza. Natomiast klosze w odcieniach szarości i bieli świetnie stonują wyrazisty wystrój pomieszczenia. Lampy sufitowe z motywami przyrody są niezwykle modne w tym sezonie, wyglądają designerko i pasują do wielu rodzajów wnętrz.
Jakie praktyczne funkcje posiada pojedyncza lampa wisząca z abażurami we wzory?
Konstrukcja zwisu wiszącego została wykonana z wytrzymałego tworzywa sztucznego. Natomiast abażur stworzony jest z odpornej na uszkodzenia tkaniny. Lampa posiada możliwość regulacji wysokości, dzięki czemu z łatwością dostosujesz oświetlenie do wymiaru pomieszczenia. Do lampy z abażurem pasują najpopularniejsze źródła światła – żarówki E27.";
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
$product->name = [$default_lang => "Lampa Wisząca z Abażurem w Tropikalne Wzory Nowoczesna"];
$product->link_rewrite = [$default_lang => "lampa-wiszaca-z-abazurem-w-tropikalne-wzory-nowoczesna"];
$product->price = 79.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/lampa-wiszaca-z-abazurem-w-tropikalne-wzory-nowoczesna.jpg";
$product->image_url = $url;
$product->description = "Lampa wisząca z abażurem tropikalne wzory regulacja
Prezentowana lampa z abażurem stanie się największą ozdobą wnętrza, które urządzasz. Niezwykłe abażury z tropikalnymi motywami przyciągną spojrzenia oraz rewelacyjnie ożywią wystrój Twojego mieszkania.
Gdzie najlepiej będzie wyglądać nowoczesna lampa regulowana z abażurem w modny wzory?
Lampę wiszącą nowoczesną możesz zawiesić w kuchni, sypialni, jadalni czy przedpokoju. Kolorystyka abażurów świetnie wygląda w pomieszczeniach, gdzie dominują jasne lub ciemne barwy. Klosz w zielone, tropikalne liście pasuje również do pomieszczeń, gdzie występują bardziej wyraziste kolory. Lampa wisząca jest idealnym sposobem na przełamanie minimalistycznej aranżacji.
Jakie zalety posiada nowoczesna lampa wisząca pojedyncza z abażurem?
Oświetlenie posiada regulowaną wysokość, dzięki czemu dopasujesz lampę do rozmiaru pokoju. Modny abażur stworzony jest dobrej jakościowo tkaniny. Konstrukcja lampy sufitowej została wykonana z bezpiecznego tworzywa sztucznego. Do oświetlenia wiszącego pasują popularne typy źródeł światła – żarówki E27.";
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
$product->name = [$default_lang => "Lampa Wisząca Nowoczesna Abażur Kwiaty Koronka"];
$product->link_rewrite = [$default_lang => "lampa-wiszaca-nowoczesna-abazur-kwiaty-koronka"];
$product->price = 79.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/lampa-wiszaca-nowoczesna-abazur-kwiaty-koronka.jpg";
$product->image_url = $url;
$product->description = "Pojedyncza lampa wisząca z abażurem stożkowym wzór koronka
Stylowa lampa wisząca, która pasuje do wielu rodzajów wnętrz. Abażur w modny wzór koronki będzie fantastycznym uzupełnieniem i dekoracją pokoju w nowoczesnym, skandynawskim czy minimalistycznym stylu.
W jakich pomieszczeniach najlepiej wygląda regulowana lampa sufitowa z abażurem w koronkę?
Zwis wiszący pojedynczy z abażurem możesz zawiesić w sypialni, jadalni nad stołem, kuchni, salonie czy pokoju nastolatka. Lampa sufitowa nowoczesna pasuje wszędzie tam, gdzie chcesz dodać przytulności i oryginalności. Oświetlenie wiszące wykonane jest w biało-szarej kolorystyce, dzięki czemu znakomicie komponuje się z innymi barwami panującymi w pomieszczeniu.
Jakie praktyczne właściwości posiada nowoczesna lampa wisząca ze stożkowym abażurem?
Lampa z abażurem posiada funkcję regulacji wysokości, która umożliwia idealne dopasowanie oświetlenia do rozmiaru pokoju. Abażur lampy został wykonany z tkaniny wysokiej jakości charakteryzującej się odpornością na zabrudzenia. Konstrukcja oświetlenia jest z tworzywa sztucznego. Do lampy wiszącej z abażurem pasują żarówki E27.";
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
$product->name = [$default_lang => "Nowoczesna Lampa Dziecięca z Abażurem Pająk"];
$product->link_rewrite = [$default_lang => "nowoczesna-lampa-dziecieca-z-abazurem-pajak"];
$product->price = 69.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/nowoczesna-lampa-dziecieca-z-abazurem-pajak.jpg";
$product->image_url = $url;
$product->description = "Nowoczesna lampa dziecięca z abażurem w rysunki
Oryginalna lampa wisząca dziecięca, która wywoła uśmiech na twarzy Twojej pociechy. Abażur ma kształt diamentu, a jego wzór przedstawia kartkę z zeszytu z wesołymi rysunkami dzieci. Dodatkowo możliwość umocowania linki w dowolnej odległości od podsufitki daje bardzo oryginalny i nowoczesny efekt.
Gdzie zawiesić stylową lampę z abażurem w dziecięcy wzór?
Lampę wiszącą nowoczesną możesz zawiesić w centralnym punkcie pokoju dziecka, nad łóżkiem, stolikiem lub biurkiem. Oświetlenie sufitowe pasuje również do przedszkoli, świetlic, szkół czy bawialni dla dzieci. Linka oraz abażur są białe, dzięki czemu świetnie komponują się z innymi barwami panującymi w pokoju. Wielokolorowe rysunki na kloszu znakomicie ożywiają i nadają wesołego nastroju w pokoju dziecka.
Jakie funkcjonalności posiada lampa wisząca pojedyncza z abażurem dziecięcym?
Lampa dziecięca ma opcję regulacji wysokości, dzięki której możesz dokładnie dostosować oświetlenie sufitowe do rozmiaru pokoju. Abażur został stworzony z tkaniny, która gwarantuje stylowy wygląd klosza przez bardzo długi czas. Konstrukcja zwisu wiszącego jest wykonana z bezpiecznego i wytrzymałego metalu. Do lampy z abażurem pasują najpopularniejsze typy żarówek E27.";
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
$product->name = [$default_lang => "Lampa Wisząca do Pokoju Dziecka Abażur Nowoczesna"];
$product->link_rewrite = [$default_lang => "lampa-wiszaca-do-pokoju-dziecka-abazur-nowoczesna"];
$product->price = 109.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/lampa-wiszaca-do-pokoju-dziecka-abazur-nowoczesna.jpg";
$product->image_url = $url;
$product->description = "Lampa wisząca dziecięca 2-płomienna nowoczesna abażury
Designerska, a jednocześnie urocza lampa dziecięca, która spodoba się zarówno maluchowi jak i dorosłemu oraz idealnie wpasuje się w wystrój urządzanego pokoju. Nietypowe mocowanie lampy wiszącej sprawia, że oświetlenie wygląda bardzo oryginalnie. Abażury we wzory przedstawiające rysunki dzieci wprowadzą do wnętrza wesoły nastrój.
W jakich pomieszczeniach najlepiej wygląda prezentowana lampa 2-płomienna wisząca z abażurami?
Oświetlenie sufitowe zawieś nad biurkiem, stolikiem lub łóżkiem w pokoju dziecka. Lampa z abażurem znakomicie sprawdzi się również w roli oświetlenia głównego – wystarczy, że zamontujesz je w centralnym punkcie pokoju. Lampa wisząca dziecięca pasuje do szkół, przedszkoli, świetlic lub bawialni.
Jakie zalety ma lampa wisząca z abażurem w rysunki dla dzieci?
Oświetlenie posiada regulowaną wysokość, dzięki której dopasujesz lampę do wymiarów pomieszczenia. Oświetlenie sufitowe zostało wykonane z trwałych i odpornych na uszkodzenia materiałów. Do lampy wiszącej nowoczesnej pasują najpopularniejsze źródła światła – żarówki E27.";
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
$product->name = [$default_lang => "Lampa Wisząca Żyrandol z Abażurami do Pokoju Dziecka"];
$product->link_rewrite = [$default_lang => "lampa-wiszaca-zyrandol-z-abazurami-do-pokoju-dziecka"];
$product->price = 169.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/lampa-wiszaca-zyrandol-z-abazurami-do-pokoju-dziecka.jpg";
$product->image_url = $url;
$product->description = "Lampa z abażurami w dziecięce wzory oryginalna pająk
Lampa dziecięca, która wygląda niezwykle nowocześnie i designersko. Abażury w pogodne wzory przypominające rysunki dzieci na pewno spodobają się Twojemu maluchowi. Jasna kolorystyka lampy sufitowej umożliwia dopasowanie jej do każdego wystroju pokoju dziecięcego.
Gdzie najlepiej będzie prezentować się lampa wisząca regulowana pająk z abażurami?
Lampę wiszącą nowoczesną możesz zawiesić w centralnym punkcie pokoju. Lampa równomiernie oświetli całe pomieszczenie, dzięki trzem źródłom zasilania oraz możliwości zamontowania abażurów w różnej odległości od siebie. Konstrukcja oraz abażury lampy wiszącej dziecięcej są białe, co sprawia, że oświetlenie świetnie komponuje się ze wszystkimi innymi barwami. Wielokolorowe rysunki urozmaicą wystój pokoju oraz wprowadzą do niego pogodny nastrój.
Jakie praktyczne funkcje posiada lampa dla dzieci z abażurami w nowoczesnym stylu?
Największą zaletą lampy sufitowej dziecięcej jest regulacja wysokości i możliwość zawieszenia abażurów w różnej odległości do siebie oraz na innych poziomach. Funkcje te pozwalają zamontować lampę z abażurami w taki sposób, by zachwycała i perfekcyjnie oświetlała cały pokój dziecka. Konstrukcja lampy wiszącej wykonana jest z metalu malowanego proszkowo, co zapewnia trwałość oświetlenia. Natomiast abażury są z tkaniny odpornej na zabrudzenia. Do lampy dla dzieci pasują popularne żarówki E27. Lampa posiada możliwość podłączenia pod podwójny przełącznik.";
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
$product->name = [$default_lang => "Lampa Wisząca Sufitowa dla Dzieci Żyrandol z Abażurami"];
$product->link_rewrite = [$default_lang => "lampa-wiszaca-sufitowa-dla-dzieci-zyrandol-z-abazurami"];
$product->price = 209.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/lampa-wiszaca-sufitowa-dla-dzieci-zyrandol-z-abazurami.jpg";
$product->image_url = $url;
$product->description = "Lampa sufitowa pająk abażury z wzorami do pokoju dziecięcego
Niezwykle efektowna i funkcjonalna lampa wisząca do pokoju dziecka. Abażury są w kształcie diamentu, a wzór przypomina kartkę z zeszytu, na której widnieją kolorowe rysunki maluchów. Efektowne klosze wywołają uśmiech na twarzy zarówno dzieci jak i dorosłych.
W jakich pomieszczeniach najlepiej wygląda nowoczesna regulowana lampa wisząca 4-płomienna?
Lampa dziecięca najlepiej sprawdza się w roli oświetlenia głównego w pokoju dziecka. Dzięki czterem źródłom zasilania oraz możliwości zawieszenia abażurów w dowolnej odległości od siebie, lampa sufitowa optymalnie oświetli całe pomieszczenie. Biała konstrukcja oraz abażury sprawiają, że oświetlenie wiszące dopasowuje się do każdego wystroju pokoju. Kolorowe rysunki wprowadzą do aranżacji wnętrza wesoły nastój. Lampa wisząca nowoczesna znakomicie będzie prezentować się również w przedszkolu, bawialni czy świetlicy.
Jakie przydatne funkcje posiada lampa wisząca z abażurami w kształcie diamentu dla dzieci?
Oświetlenie sufitowe posiada regulowaną wysokość. Funkcja ta sprawia, że lampę możesz zawiesić na dowolnej wysokości, a poszczególne abażury mogą wisieć na rożnym poziomie. Konstrukcja lampy sufitowej dziecięcej wykonana jest z wytrzymałego metalu. Tkanina, z której stworzone są abażury, jest trwała i odporna na uszkodzenia. Do lampy pasują najpopularniejsze typy żarówek z gwintem E27. Żyrandol z abażurami posiada możliwość podłączenia pod podwójny przełącznik.";
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
$product->name = [$default_lang => "Lampa Wisząca Pająk z Abażurami w Dziecięce Wzory Żyrandol"];
$product->link_rewrite = [$default_lang => "lampa-wiszaca-pajak-z-abazurami-w-dzieciece-wzory-zyrandol"];
$product->price = 224.10;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/lampa-wiszaca-pajak-z-abazurami-w-dzieciece-wzory-zyrandol.jpg";
$product->image_url = $url;
$product->description = "Lampa wisząca pająk nowoczesna abażury w dziecięce wzory
Designerska i praktyczna lampa dziecięca, która doda pomieszczeniu wesołego nastroju. Abażury oświetlenia sufitowego przedstawiają rysunki dzieci na kratce z zeszytu. Klosze i efektowna konstrukcja lampy wiszącej uczynią pokój Twojego dziecko niepowtarzalnym.
Gdzie najlepiej prezentuje się nowoczesna lampa dziecięca z abażurami wisząca?
Ze względu na pięć źródeł zasilania lampa sufitowa może zawisnąć w środkowej części pokoju, ponieważ równomiernie oświetli całe, nawet duże pomieszczenie. Biała konstrukcja i tło abażurów w połączeniu z kolorowymi rysunkami sprawiają, że lampa wisząca nowoczesna pasuje do każdego wystroju wnętrza. Oświetlenie będzie świetnie wyglądać również w przedszkolach, świetlicach, bawialniach czy szkołach.
Jakie zalety posiada lampa z abażurami w dziecięce wesołe wzory?
Oświetlenie ma możliwość regulacji wysokości, dzięki czemu dopasujesz lampę do rozmiaru pokoju. Abażury żyrandola dziecięcego mogą zostać zawieszone w różnej odległości i na innej wysokości względem siebie – daje to przykuwający wzrok efekt. Lampa wykonana jest z wytrzymałych, bezpiecznych i odpornych na uszkodzenia materiałów. Do oświetlenia pasują źródła światła E27.";
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
$product->name = [$default_lang => "Lampa Sufitowa Wisząca z Abażurem Pojedyncza"];
$product->link_rewrite = [$default_lang => "lampa-sufitowa-wiszaca-z-abazurem-pojedyncza"];
$product->price = 69.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/lampa-sufitowa-wiszaca-z-abazurem-pojedyncza.jpg";
$product->image_url = $url;
$product->description = "Lampa wisząca sufitowa pojedyncza pająk z abażurem
Lampa wisząca z abażurem, która doda Twoim wnętrzom oryginalności i przytulnego nastroju. Oświetlenie możesz przymocować do sufitu w efektowny sposób dodający pomieszczeniu designerskiego wyglądu. Natomiast materiałowy abażur w kształcie diamentu sprawia, że wnętrze zyskuje nowy, wyjątkowy klimat.
Gdzie najlepiej prezentuje się nowoczesna lampa sufitowa z abażurem?
Lampę z abażurem możesz zawiesić dosłownie wszędzie! W sypialni, salonie, jadalni, kuchni czy pokoju dziecięcego lub nastolatka. Oświetlenie sufitowe posiada aż dziesięć kolorów abażura i dwa kolory konstrukcji do wyboru. Dzięki temu możesz samodzielnie stworzyć zwis wiszący, który najlepiej odda charakter Twoich wnętrz.
Jakie zalety posiada lampa pająk z abażurem na lince?
Oświetlenie posiada regulowaną wysokość, dzięki której dopasujesz lampę sufitową do rozmiaru pokoju. Ponadto mocowanie linki do sufitu nada pomieszczeniu nowoczesnego wyglądu. Oświetlenie wiszące zostało wykonane z bezpiecznych i trwałych materiałów – abażur ze specjalnej tkaniny, a konstrukcja z metalu. Do lampy wiszącej z łatwością dobierzesz źródła światła, ponieważ pasują do niej popularne żarówki z gwintem E27.";
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
$product->name = [$default_lang => "Nowoczesna Lampa Wisząca Pająk z Abażurami Żyrandol"];
$product->link_rewrite = [$default_lang => "nowoczesna-lampa-wiszaca-pajak-z-abazurami-zyrandol"];
$product->price = 109.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/nowoczesna-lampa-wiszaca-pajak-z-abazurami-zyrandol.jpg";
$product->image_url = $url;
$product->description = "Nowoczesna lampa wisząca 2-płomienna abażury diament wiele kolorów
Designerska lampa wisząca z abażurami, która doda Twojemu wnętrzu eleganckiego i nowoczesnego wyglądu. Efektowne mocowanie połączone z kolorowymi abażurami o oryginalnym kształcie tworzą oświetlenie sufitowe, które przyciąga spojrzenia i wspaniale komponuje z wieloma stylami wnętrzarskimi.
Do jakich wnętrz pasuje stylowa lampa wisząca regulowana z abażurami w kształcie diamentu?
Lampa sufitowa nowoczesna znakomicie wygląda w salonie, sypialni, jadalni, kuchni czy pokoju dziecięcym. Z prezentowaną lampą wiszącą możesz zestawić kinkiety lub plafony domowe. By wnętrze wyglądało nowocześnie i stylowo dobierz do siebie lampy stworzone w tym samym stylu.
Designerska lampa wisząca posiada aż dziesięć kolorów abażura i dwa kolory konstrukcji do wyboru. Dodatkowo możesz zamówić dwie różne barwy kloszy. Dzięki tylu wariantom kolorystycznym masz mnóstwo możliwości do stworzenia oświetlenia, które idealnie będzie pasować do wystroju Twojego mieszkania.
Jakie zalety posiada nowoczesna lampa z abażurami pająk?
Największym atutem lampy z abażurami jest możliwości regulacji wysokości, ponieważ pozwala to na dokładne dostosowanie oświetlenia do wymiaru pokoju. Zaletą są również wysokiej jakości materiały wykorzystane do produkcji oświetlenia wiszącego. Konstrukcja stworzona jest z metalu malowanego proszkowo, a abażury z tkaniny odpornej na zabrudzenia. Do lampy wiszącej nowoczesnej pasują wszystkie typy żarówek E27. Lampa posiada możliwość podłączenia pod podwójny przełącznik.";
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
$product->name = [$default_lang => "Lampa Wisząca Żyrandol z Abażurami Designerska Sufitowa"];
$product->link_rewrite = [$default_lang => "lampa-wiszaca-zyrandol-z-abazurami-designerska-sufitowa"];
$product->price = 169.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/lampa-wiszaca-zyrandol-z-abazurami-designerska-sufitowa.jpg";
$product->image_url = $url;
$product->description = "Stylowa lampa wisząca sufitowa z trzema abażurami pająk
Szukasz lampy wiszącej, która będzie zarówno funkcjonalnym źródłem światła jak i wyjątkową ozdobą? Lubisz takie rodzaje lamp, w których możesz samodzielnie wybrać kolory poszczególnych elementów? Mamy oświetlenie sufitowe idealne dla Ciebie!
W jakich pomieszczeniach lampa wisząca z abażurami w kształcie diamentu będzie wyglądać najlepiej?
Lampa sufitowa nada wyjątkowego charakteru aranżacji salonu, sypialni, kuchni, pokoju dziecka czy jadalni. Design oświetlenia wiszącego stylowo wpasuje się we wszystkie rodzaje i wystroje wnętrz. Ponadto dwa kolory konstrukcji i dziesięć kolorów abażurów do wyboru umożliwia skomponowanie oświetlenia idealnie dopasowanego do Twojego mieszkania. By lampa wisząca nowoczesna wyglądała jeszcze bardziej efektownie, możesz zamówić abażury w trzech różnych barwach.
Jakie praktyczne funkcje posiada nowoczesna lampa sufitowa z abażurami?
Konstrukcja lampa sufitowej nowoczesnej wykonana jest z solidnego metalu, a abażury z materiału odpornego na zabrudzenia, dzięki czemu oświetlenie będzie dekorować Twoje wnętrza przez bardzo długi czas. Lampa posiada również możliwość regulacji wysokości, przez co dostosujesz oświetlenie do rozmiaru swojego pokoju. Do lampy z abażurami pasują najpopularniejsze rodzaje źródeł światła – żarówki E27. Lampa posiada możliwość podłączenia pod podwójny przełącznik.";
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
$product->name = [$default_lang => "Lampa Wisząca z Abażurami Nowoczesny Żyrandol"];
$product->link_rewrite = [$default_lang => "lampa-wiszaca-z-abazurami-nowoczesny-zyrandol"];
$product->price = 209.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/lampa-wiszaca-z-abazurami-nowoczesny-zyrandol.jpg";
$product->image_url = $url;
$product->description = "Lampa sufitowa żyrandol z abażurami do wielu wnętrz
Prezentujemy designerskie i jednocześnie funkcjonalne oświetlenie sufitowe, które pasuje do każdego rodzaju wnętrz. Oryginalne mocowanie linek, wiele kolorów do wyboru i wyjątkowy kształt abażurów sprawiają, że lampa wisząca doda Twoim wnętrzom nowoczesnego wyglądu i nastrojowego klimatu.
Gdzie najlepiej zawiesić stylową lampę wiszącą sufitową z czterema abażurami?
Żyrandol z abażurami świetnie prezentuje się we wszystkich wnętrzach. Jest oświetleniem idealnym do salonu, jadalni, kuchni, sypialni lub pokoju dziecka. Dziesięć kolorów abażura i dwa kolory konstrukcji do wyboru sprawiają, że z łatwością stworzysz lampę wiszącą dopasowaną do aranżacji Twoich wnętrz. Nowoczesny żyrandol możesz zawiesić w centralnym punkcie pomieszczenia. Wtedy równomiernie oświetli całe wnętrze.
Jakie przydatne funkcje posiada 4-płomienna lampa wisząca pająk z abażurami?
Oświetlenie sufitowe posiada regulowaną wysokość. Możesz również zawiesić abażury lampy w różnej odległości od siebie. Dzięki tym funkcjom dokładanie dopasujesz żyrandol do rozmiaru urządzanego pokoju. Abażury wykonane są z trwałych i odpornych na uszkodzenia materiałów, przez co oświetlenie będzie dekoracją Twojego wnętrza przez wiele lat. Do designerskiej lampy z łatwością dobierzesz żarówki, ponieważ pasują do niej popularne źródła światła z gwintem E27. Lampa posiada możliwość podłączenia pod podwójny przełącznik.";
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
$product->name = [$default_lang => "Nowoczesna Lampa Wisząca Abażury Diament Żyrandol"];
$product->link_rewrite = [$default_lang => "nowoczesna-lampa-wiszaca-abazury-diament-zyrandol"];
$product->price = 249.00;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/nowoczesna-lampa-wiszaca-abazury-diament-zyrandol.jpg";
$product->image_url = $url;
$product->description = "Lampa wisząca 5-płomienna żyrandol kolorowe abażury do wyboru
Prezentowana lampa sufitowa doda nowoczesności klasycznym wnętrzom oraz stylowo udekoruje minimalistyczne, surowe aranżacje pomieszczeń. Dzięki wielu wariantom kolorystycznym stworzysz żyrandol, który będzie idealnie współgrał z wystrojem Twojego mieszkania.
W jakich pomieszczeniach najlepiej prezentuje się designerska lampa wisząca z pięcioma abażurami w kształcie diamentu?
Lampa wisząca z abażurami znakomicie sprawdzi się w roli oświetlenia głównego, zawieszonego w centralnym punkcie pomieszczenia, ponieważ równomiernie rozświetli cały pokój. Oświetlenie sufitowe będzie wyglądać rewelacyjnie zarówno w Twojej sypialni, salonie, kuchni, jadalni jak i pokoju Twojego dziecka. Minimalistyczna konstrukcja i kolorowe abażury w kształcie diamentu nadadzą każdemu wnętrzu przytulności i nowoczesności.
Jakie praktyczne funkcje posiada lampa wisząca sufitowa 5-płomienna pająk?
Żyrandol z abażurami posiada regulowaną wysokość i opcję zawieszenia kloszy w różnej odległości od siebie. Funkcje te pozwalają na perfekcyjne dopasowanie lampy wiszącej do rozmiaru pomieszczenia. Konstrukcja oświetlenia wykonana jest z wytrzymałego metalu, a abażury z materiału charakteryzującego się wysoką odpornością na zabrudzenia, przez co żyrandol będzie ozdabiał pokój długi czas. Do lampy sufitowej nowoczesnej pasują najpopularniejsze rodzaje źródeł światła – żarówki z gwintem E27. Oświetlenie posiada możliwość podłączenia pod podwójny przełącznik.";
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
$product->name = [$default_lang => "Lampa Wisząca Loft Pojedyncza Metalowa Edison"];
$product->link_rewrite = [$default_lang => "lampa-wiszaca-loft-pojedyncza-metalowa-edison"];
$product->price = 29.99;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/lampa-wiszaca-loft-pojedyncza-metalowa-edison.jpg";
$product->image_url = $url;
$product->description = "Lampa wisząca z drutu loft Edison metalowy klosz
Niezwykła lampa industrialna, która stanie się wyjątkową dekoracją urządzanego wnętrza. Efektowny, druciany klosz nada pomieszczeniu oryginalności i nastrojowego klimatu. Lampa wisząca dostępna jest w trzech kolorach, dzięki czemu z łatwością dopasujesz oświetlenie do wystroju pokoju.
Do jakich wnętrz najbardziej pasuje nowoczesna lampa pojedyncza druciana wisząca?
Lampa sufitowa nowoczesna idealnie współgra z wnętrzami w stylu loft. Oświetlenie możesz zawiesić w wysokim salonie, surowo urządzonej sypialni, nowoczesnej kuchni lub jadalni. Lampa może pełnić również rolę zwisu wiszącego pojedynczego dekoracyjnego. Zawieś kilka drucianych lamp na różnej wysokości, a zyskasz niepowtarzalną ozdobę w postaci designerskiego oświetlenia.
Jakie praktyczne funkcje posiada lampa wisząca industrialna pojedyncza z kloszem?
Największym atutem zwisu wiszącego jest regulowana wysokość, za pomocą której oświetlenie pasuje zarówno do niskich jak i wysokich pomieszczeń. Lampa sufitowa została wykonana z wytrzymałego metalu odpornego na uszkodzenia. Do oświetlenia pasują popularne źródła światła E27. Dla lepszego efektu możesz zasilić lampę żarówkami dekoracyjnymi, które dodadzą urządzanemu wnętrzu jeszcze więcej uroku.";
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
$product->name = [$default_lang => "Lampa Wisząca Pojedyncza Industrialna Druciany Klosz"];
$product->link_rewrite = [$default_lang => "lampa-wiszaca-pojedyncza-industrialna-druciany-klosz"];
$product->price = 39.99;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/lampa-wiszaca-pojedyncza-industrialna-druciany-klosz.jpg";
$product->image_url = $url;
$product->description = "Nowoczesna lampa wisząca loft druciany klosz
Chcesz dodać swojemu wnętrzu wyjątkowego klimatu? Pragniesz uczynić swoje mieszkanie funkcjonalnym, a jednocześnie stylowym? Mamy oświetlenie, które spełni wszystkie Twoje oczekiwania.
Do jakich pomieszczeń pasuje designerska lampa industrialna z metalowym kloszem?
Lampa wisząca nowoczesna najlepiej prezentuje się w surowych loftach. Jednak jej wygląd jest na tyle uniwersalny, że możesz zawiesić ją również w nowoczesnych, minimalistycznych czy klasycznych aranżacjach. Lampa wisząca z drutu będzie pasować do sypialni, salonu, kuchni, jadalni czy pokoju młodzieżowego. Zwis wiszący dostępny jest w trzech neutralnych kolorach – czarnym, białym i szarym, przez co bez problemu dopasujesz oświetlenie do barw panujących w pokoju.
Jakie zalety posiada nowoczesna lampa wisząca z drutu Edison Loft?
Klosz lampy industrialnej nie zasłania źródła zasilania, dzięki czemu pięknie prezentują się w oświetleniu żarówki dekoracyjne. Zostały wykonane z żarników węglowych, które wyglądają bardzo efektownie i świecą przyjemnym dla oka, ciepłym światłem. Lampa wisząca posiada regulację wysokości, co sprawia, że oświetlenie pasuje zarówno do niskich jak i wysokich pomieszczeń. Lampa sufitowa nowoczesna w całości została wykonana z odpornego na uszkodzenia metalu.";
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
$product->name = [$default_lang => "Industrialna Lampa Wisząca Sufitowa Diament Loft"];
$product->link_rewrite = [$default_lang => "industrialna-lampa-wiszaca-sufitowa-diament-loft"];
$product->price = 77.99;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/industrialna-lampa-wiszaca-sufitowa-diament-loft.jpg";
$product->image_url = $url;
$product->description = "Designerska lampa 2-płomienna wisząca loft druciane klosze
Lampa wisząca w stylu loft, która wspaniale oświetli pomieszczenie oraz stanie się jego główną dekoracją. Lampa sufitowa dostępna jest w trzech wariantach kolorystycznych – czarnym, szarym i białym. Te uniwersalne barwy znakomicie komponują się ze wszystkimi innymi kolorami.
W jakich pomieszczeniach lampa 2-płomienna loft z drutu prezentuje się najlepiej?
Designerskie oświetlenie znakomicie oddaje charakter stylu industrialnego. Jednak możesz z powodzeniem udekorować lampą nowoczesne, klasyczne, a nawet aranżacje retro. Lampę wiszącą możesz zamontować w sypialni, salonie, jadalni, kuchni – wszędzie tam, gdzie chcesz osiągnąć zjawiskowy efekt.
Jakie praktyczne właściwości posiada nowoczesna lampa loft Edison?
Lampa sufitowa nowoczesna ma możliwość regulacji wysokości. Dzięki tej funkcji oświetlenie dopasowuje się do każdego wnętrza – zarówno do niskich i małych pokoi jak i do mieszkań w wysokich kamienicach. Dodatkowo klosze lampy mogą zostać zawieszone na różnych wysokościach, co dodaje wyjątkowości wnętrzom. Do oświetlenia pasują źródła zasilania o popularnym gwincie E27. W lampie loft znakomicie prezentują się żarówki dekoracyjne. Klosze nie zasłaniają źródeł światła, dzięki czemu żarówki ozdobne mogą pięknie dekorować wnętrze. Lampa posiada możliwość podłączenia pod podwójny przełącznik.";
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
$product->name = [$default_lang => "Lampa Wisząca Żyrandol Loft Metalowe Klosze"];
$product->link_rewrite = [$default_lang => "lampa-wiszaca-zyrandol-loft-metalowe-klosze"];
$product->price = 97.49;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/lampa-wiszaca-zyrandol-loft-metalowe-klosze.jpg";
$product->image_url = $url;
$product->description = "Lampa wisząca w stylu industrialnym 3-płomienna Edison loft
Oryginalna lampa wisząca, która nada Twoim wnętrzom nowoczesności i wyjątkowego klimatu. Efektowny żyrandol pasuje do wielu rodzajów pomieszczeń. Lampa została stworzona w trzech uniwersalnych kolorach – białym, szarym i czarnym, dzięki czemu bardzo łatwo dopasujesz oświetlenie do wystroju swoich wnętrz.
Gdzie najlepiej prezentuje się nowoczesna lampa sufitowa wisząca w stylu loft?
Lampa sufitowa nowoczesna jest znakomitą propozycją oświetlenia do salonu, sypialni, jadalni, pokoju nastolatka czy biura. Żyrandol retro nadaje się wszędzie tam, gdzie chcesz osiągnąć designerską aranżację wnętrz. Prostej konstrukcji wyjątkowości dodają druciane klosze. Ich niepowtarzalny kształt przyciąga spojrzenia i wspaniale dekoruje wnętrza. Klosze nie zasłaniają źródeł światła, dlatego lampę możesz zasilić żarówkami dekoracyjnymi. Dzięki drucianym kloszom ozdobna żarówka będzie prezentować się bardzo efektownie.
Jakie zalety posiada lampa wisząca loft z trzema źródłami zasilania nowoczesna?
Żyrandol sufitowy posiada regulowaną wysokość. Dzięki tej funkcji możesz dopasować lampę zarówno do małego pokoju jak i przestronnego salonu. Dodatkowo każdy klosz lampy wiszącej możesz zawiesić na innej wysokości, co jeszcze bardziej uatrakcyjni Twoje wnętrza. Oświetlenie zostało wykonane z trwałego, odpornego na uszkodzenia metalu, przez co lampa industrialna będzie dekorowała Twoje mieszkanie przez wiele lat. Do żyrandola pasują najpopularniejsze typy żarówek z gwintem E27. Lampa posiada możliwość podłączenia pod podwójny przełącznik.";
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
$product->name = [$default_lang => "Lampa Wisząca Loft Regulowana Metal Diament"];
$product->link_rewrite = [$default_lang => "lampa-wiszaca-loft-regulowana-metal-diament"];
$product->price = 124.99;
$product->quantity = 90;
$product->id_category = 15;
$product->id_category_default = 15;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampySufitowe/lampa-wiszaca-loft-regulowana-metal-diament.jpg";
$product->image_url = $url;
$product->description = "Lampa wisząca sufitowa żyrandol loft regulacja wysokości
Piękna lampa wisząca, która funkcjonalnie oświetli Twój pokój oraz stanie się jego główną dekoracją. Druciane klosze oświetlenia przyciągają spojrzenia swoim oryginalnym designem. Lampa sufitowa nowoczesna jest dostępna w trzech kolorach – czarnym, szarym i białym.
W jakich pomieszczeniach najlepiej prezentuje się lampa wisząca loft regulowana?
Sypialnia, salon, jadalnia, kuchnia, nowoczesne biuro – oświetlenie będzie efektownym elementem aranżacji każdego wnętrza. Lampę industrialną 3-płomienną możesz zawiesić w centralnym punkcie pokoju – wtedy równomiernie oświetli pomieszczenie. Lampa może również pełnić funkcje oświetlenia dekoracyjnego we wnętrzu. Zasilona żarówkami ozdobnymi nada pomieszczeniu wyjątkowego klimatu, dzięki ciepłemu, przyjemnemu dla oka światłu.
Jakie praktyczne funkcje posiada nowoczesna lampa sufitowa żyrandol loft?
Lampa wisząca nowoczesna ma możliwość regulacji wysokości. Funkcja ta sprawia, że oświetlenie dopasowuje się zarówno do małych jak i dużych pokoi. Dzięki regulacji możesz również zawiesić każdy klosz na innej wysokości – wygląda to niezwykle efektownie. Do produkcji oświetlenia został wykorzystany wysokiej jakości metal, który zapewnia trwałość lampy loft przez wiele lat. Żyrandol sufitowy zasilany jest żarówkami E27. Lampa posiada możliwość podłączenia pod podwójny przełącznik.";
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