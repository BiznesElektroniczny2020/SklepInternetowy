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
$product->name = [$default_lang => "Lampa Wisząca Abażur Chrom Wiele Kolorów"];
$product->link_rewrite = [$default_lang => "lampa-wiszaca-abazur-chrom-wiele-kolorow"];
$product->price = 79.00;
$product->quantity = 90;
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/lampa-wiszaca-abazur-chrom-wiele-kolorow.jpg";
$product->image_url = $url;
$product->description = "Elegancka lampa wisząca z abażurem
Klasyczny design lampy doda uroku wszystkim pomieszczeniem, także tym, stworzonym w nowoczesnym stylu. Stonowane kolory świetnie wpasują się w każdą aranżację.
Do jakich wnętrz pasuje prezentowana lampa wisząca?
Kuchnia, pokój dziecięcy, kawiarnia czy sypialnia – oryginalna lampa nada wyjątkowemu klimatu wielu pomieszczeniom. Jasne i klasyczne kolory rewelacyjnie skontrastują jaskrawe wnętrza, a także będą świetnie współgrać ze stonowanymi barwami.
Z czego została wykonana lampa wisząca?
Do produkcji konstrukcji oświetlenia wykorzystano trwały metal, a abażur wykonany jest z materiału. Lampa posiada bardzo funkcjonalną opcję – możliwość regulowania wysokości, co pozwala na dopasowanie żyrandola do każdego wymiaru pomieszczenia. Dodatkowo oświetlenie pełni także rolę lampy LED.";
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
$product->name = [$default_lang => "Lampa Stojąca z Abażurem Trójnóg Podłogowa"];
$product->link_rewrite = [$default_lang => "lampa-stojaca-z-abazurem-trojnog-podlogowa"];
$product->price = 199.00;
$product->quantity = 90;
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/lampa-stojaca-z-abazurem-trojnog-podlogowa.jpg";
$product->image_url = $url;
$product->description = "Lampa stojąca trójnóg z abażurem
Elegancka i stylowa propozycja lampy stojącej, która będzie rewelacyjnie ozdabiać Twoje wnętrza oraz stanie się niezwykle funkcjonalnym oświetleniem.
W jakich pomieszczeniach najlepiej umieścić prezentowany trójnóg?
Lampa wspaniale wygląda w sypialni, gdzie może posłużyć jako światło relaksacyjne. Trójnóg może również pełnić rolę oświetlenia do biura, salonu, kuchni bądź jadalni. Dzięki możliwości wyboru koloru konstrukcji oraz abażura, możesz stworzyć własną, oryginalną lampę idealnie oddającą charakter Twojego wystroju wnętrz.
Czy lampa stojąca posiada pożyteczne funkcje?
Trójnóg posiada wiele praktycznych opcji. Jedną z nich jest zastosowanie w lampie stojącej włącznika – wyłącznika nożnego, dzięki któremu oświetlenie jest łatwe w obsłudze. Konstrukcja lampy wykonana jest z metalu, co zapewnia wytrzymałość i trwałość na wiele lat. Natomiast abażury stworzone są z solidnego materiału. Lampa może być zasilana wieloma rodzajami żaówek, w tym ledowymi, zwykłmi bądź energooszczędnymi o gwincie E-27.";
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
$product->name = [$default_lang => "Lampa Stojąca z Abażurem Drewniana LED Wiele Kolorów"];
$product->link_rewrite = [$default_lang => "lampa-stojaca-z-abazurem-drewniana-led-wiele-kolorow"];
$product->price = 199.00;
$product->quantity = 90;
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/lampa-stojaca-z-abazurem-drewniana-led-wiele-kolorow.jpg";
$product->image_url = $url;
$product->description = "Lampa stojąca z abażurem i drewnianą konstrukcją
Lampa, która jest połączeniem klasycznego stylu z nowoczesnym designem! Eleganckiego wyglądu nadaje lampie drewniana konstrukcja. Natomiast abażury w różnych kolorach uczynią Twoją aranżację wnętrz wyjątkową i designerską.
W jakich pomieszczeniach nowoczesna lampa podłogowa prezentuje się najlepiej?
Dzięki wielu kolorom do wyboru, bez problemu dopasujesz lampę do każdego wystroju wnętrz. Jednak oświetlenie to jest znakomitą propozycją do sypialni. Postawione tuż obok łóżka będzie pełnić rolę lampy do czytania lub lampy nocnej. Trójnogi w kolorze naturalnego drewna dodadzą elegancji wytwornemu salonowi czy pokojowi gościnnemu. Lampa stojąca z szarą, białą lub czarną konstrukcją wspaniale udekoruje również pokój młodzieżowy czy dziecięcy.
Jakie zalety posiada trójnóg z abażurem?
Lampa posiada pięć kolorów konstrukcji i siedem odcieni abażura do wyboru, co pozwala na skomponowanie własnego oświetlenia, idealnie oddającego charakter pomieszczenia. Drewniana konstrukcja nie tylko prezentuje się niezwykle stylowo, ale również jest wytrzymała, trwała i odporna na uszkodzenia. Dzięki temu lampa będzie oświetlała Twoje wnętrza przez długi czas.
Ponadto trójnóg posiada włącznik – wyłącznik nożny na przewodzie, co znacznie ułatwia obsługę lampy. Dedykowany rodzaj źródeł światła do lampy stojącej to żarówki LED E27.";
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
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/lampa-sufitowa-plafon-abazury-diament.jpg";
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
$product->name = [$default_lang => "Lampa Wisząca z Abażurem Biały Środek 50 cm"];
$product->link_rewrite = [$default_lang => "lampa-wiszaca-z-abazurem-bialy-srodek-50-cm"];
$product->price = 129.00;
$product->quantity = 90;
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/lampa-wiszaca-z-abazurem-bialy-srodek-50-cm.jpg";
$product->image_url = $url;
$product->description = "Elegancka lampa wisząca z abażurem wiele kolorów
Klasyczna lampa wisząca, która doda Twoim wnętrzom wyjątkowości i elegancji. Dzięki możliwości wyboru koloru linki i abażura możesz skomponować własne, niepowtarzalne oświetlenie idealnie oddające charakter Twojego pomieszczenia.
W jakich pomieszczeniach lampa wisząca będzie prezentować się najlepiej?
Lampa sprawdzi się w roli oświetlenia do sypialni, salonu, kuchni czy jadalni. Jasne kolory abażurów dodadzą przytulności wnętrzom oraz świetnie skontrastują surowe wystroje pomieszczeń. Natomiast ciemne barwy abażurów wspaniale stonują jasne wnętrza.
Czy lampa wisząca posiada praktyczne funkcje?
Oczywiście, że tak! Oświetlenie posiada regulację wysokości, dzięki czemu dokładnie dopasujesz je do rozmiaru pomieszczenia. Wysokiej jakości materiały wykonania zapewniają użyteczność oświetlenia na długi czas. Lampa może być zasilana różnymi rodzajami źródeł światła – żarówkami ledowymi, energooszczędnymi lub zwykłymi o gwincie E27.";
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
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/lampa-wiszaca-regulowana-abazur-diament-led.jpg";
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
$product->name = [$default_lang => "Lampa Wisząca z Abażurem Zwis Kolorowa"];
$product->link_rewrite = [$default_lang => "lampa-wiszaca-z-abazurem-zwis-kolorowa"];
$product->price = 75.00;
$product->quantity = 90;
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/lampa-wiszaca-z-abazurem-zwis-kolorowa.jpg";
$product->image_url = $url;
$product->description = "Pojedyncza lampa wisząca z abażurem wiele kolorów
Ponadczasowa lampa wisząca, która pasuje do każdego wnętrza! Wysokiej jakości materiały, stylowy wygląd oraz funkcjonalność czynią oświetlenie idealnym do Twojego domu.
W jakich wnętrzach najlepiej prezentuje się klasyczna lampa z abażurem?
Lampę możesz zawiesić wszędzie tam, gdzie chcesz osiągnąć przytulny i wyjątkowy klimat. Lampa posiada aż siedem kolorów abażura i trzy kolory linki do wyboru, dzięki czemu idealnie dopasujesz wygląd oświetlenia do stylu pomieszczenia. Lampa stojąca z abażurem podłogowa lub lampa kinkiet z abażurem są propozycjami oświetlenia, które możesz zestawić z prezentowaną lampą wiszącą. Takie rozwiązanie uczyni Twoją aranżację spójną i idealnie skomponowaną.
Jakie praktyczne funkcje posiada zwis wiszący z abażurem?
Największą zaletą lampy jest możliwość regulacji wysokości. Dzięki niej idealnie dopasujesz oświetlenie do rozmiarów swojego pomieszczenia. Abażur lampy wiszącej został wykonany z tkaniny o bardzo wysokiej jakości. Metalowa podsufitka zapewnia trwałość i wytrzymałość konstrukcji oświetlenia. Do lampy wiszącej pasują wszystkie żarówki E27.";
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
$product->name = [$default_lang => "Lampa Kinkiet z Abażurem"];
$product->link_rewrite = [$default_lang => "lampa-kinkiet-z-abazurem"];
$product->price = 59.00;
$product->quantity = 90;
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/lampa-kinkiet-z-abazurem.jpg";
$product->image_url = $url;
$product->description = "Kinkiet z abażurem wiele kolorów
Szukasz kinkietu z abażurem o prostym, klasycznym designie? Prezentowana lampa ścienna nada Twoim wnętrzom mnóstwo stylowości i elegancji!
Gdzie zawiesić kinkiet?
Lampa idealnie nada się do sypialni, kuchni, salonu, pokoju czy biura. Prosta konstrukcja kinkietu i abażur to połączenie, które wspaniale komponuje się ze wszystkimi stylami wystrojów wnętrz. Mnóstwo kolorów abażurów do wyboru pozwoli Ci na jeszcze dokładniejsze dopasowanie kinkietu do swojej aranżacji.
Czy oświetlenie jest funkcjonalna?
Kinkiet wykonany jest z wysokiej jakości tworzyw – metalu malowanego proszkowo i materiału – dzięki czemu masz gwarancję wytrzymałości lampy. Do kinkietu z łatwością dobierzesz lampę wiszącą stworzoną w takim samym stylu. Kinkiet zasilany jest żarówkami E-27.";
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
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/lampa-wiszaca-nowoczesna-z-abazurem-material.jpg";
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
$product->name = [$default_lang => "Lampka Nocna Stojąca z Abażurem"];
$product->link_rewrite = [$default_lang => "lampka-nocna-stojaca-z-abazurem"];
$product->price = 89.10;
$product->quantity = 90;
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/lampka-nocna-stojaca-z-abazurem.jpg";
$product->image_url = $url;
$product->description = "Lampka nocna z abażurem
Nowoczesna lampka stołowa nada Twoim wnętrzom niepowtarzalnego klimatu. Mnóstwo wzorów i kolorów abażurów pozwoli Ci idealnie dopasować lampę nocną do stylu pomieszczenia.
Do jakich wnętrz pasuje prezentowana lampka?
Lampki nocne są funkcjonalnym oświetleniem do sypialni. Postawiona koło łóżka zapewnia komfort i wygodę. Lampa stołowa świetnie sprawdzi się także w pokoju dziennym lub dziecięcym. Efektowna konstrukcja, dostępna w wielu kolorach, wspaniale ozdobi Twoje wnętrze.
Czy lampka jest funkcjonalna?
Naturalnie, że tak. Mnóstwo dostępnych abażurów, które możesz łączyć z różnymi kolorami konstrukcji pozwolą Ci stworzyć własną, wyjątkową lampkę nocną. Oświetlenie wykonane jest z solidnych i odpornych na uszkodzenia materiałów. Dodatkowo lampka posiada wiele źródeł światła - może być zasilane żarówkami, energooszczędnymi, zwykłymi czy ledowymi E-27.";
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
$product->name = [$default_lang => "Lampa Wisząca Rożne Rodzaje Diament"];
$product->link_rewrite = [$default_lang => "lampa-wiszaca-rozne-rodzaje-diament"];
$product->price = 112.50;
$product->quantity = 90;
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/lampa-wiszaca-rozne-rodzaje-diament.jpg";
$product->image_url = $url;
$product->description = "Lampa wisząca 3-punktowa Diament
Klasyczny design i abażury w kształcie diamentu sprawią, że Twoje wnętrza będą zachwycać nowoczesnością i eleganckim stylem.
Do jakich pomieszczeń pasuje 3-płomienna lampa?
Oświetlenie będzie pięknie wyglądać w salonie, pokoju, a także w kuchni czy jadalni - stylowe abażury prezentują się rewelacyjnie w każdym pomieszczeniu! Dzięki możliwości dobrania koloru konstrukcji do abażura, możesz stworzyć lampę wiszącą idealnie oddającą charakter Twoich wnętrz.
Jakie zalety posiada elegancka lampa?
Oświetlenie wykonane jest z tworzyw najwyższej jakości, dzięki czemu masz gwarancję niezawodności lampy. Nasz oświetlenie posiada możliwość regulacji wysokości, co pozwala na dokładne dopasowanie lampy do rozmiarów pomieszczenia. Lampa może być zasilana różnymi źródłami światła, na przykład żarówkami energooszczędnymi, LED, E-27 czy zwykłymi.";
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
$product->name = [$default_lang => "Nowoczesna Lampa Wisząca Abażur Wiele Kolorów"];
$product->link_rewrite = [$default_lang => "nowoczesna-lampa-wiszaca-abazur-wiele-kolorow"];
$product->price = 139.00;
$product->quantity = 90;
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/nowoczesna-lampa-wiszaca-abazur-wiele-kolorow.jpg";
$product->image_url = $url;
$product->description = "Lampa wisząca z oryginalnym abażurem
Klasyka w nowoczesnym wydaniu! Lampa z szerokim abażurem będzie wspaniałą ozdobą wielu rodzajów wnętrz. Abażur o oryginalnym kształcie dostępny jest w wielu kolorach, co pozwoli na idealne dopasowanie lampy do barw i stylu pomieszczenia.
W jakich wnętrzach klasyczna lampa z abażurem będzie prezentować się najlepiej?
Lampa wisząca jest znakomitą propozycją do sypialni. Abażur w jasnym kolorze doda temu pomieszczeniu przytulności i nastrojowego klimatu. Lampa w ciemnych barwach to świetny wybór do kuchni urządzonej jasnych kolorach – czarny lub szary abażur lampy wiszącej będzie pięknie komponował się na tle jasnych ścian czy mebli. Oświetlenie jest również idealną lampą do salonu, przedpokoju czy jadalni.
Jakie praktyczne funkcje posiada lampa z abażurem?
Oświetlenie posiada możliwość regulacji aż do 100 cm, dzięki czemu lampa dopasowuje się do każdego rozmiaru pomieszczenia. Konstrukcja lampy wiszącej została wykonana z trwałego metalu, a abażury z wysokiej jakości materiału. Lampa może być zasilana wieloma źródłami światła – żarówkami energooszczędnymi, LED lub zwykłymi.";
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
$product->name = [$default_lang => "Lampa Wisząca z Abażurem Diament Materiał"];
$product->link_rewrite = [$default_lang => "lampa-wiszaca-z-abazurem-diament-material"];
$product->price = 62.10;
$product->quantity = 90;
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/lampa-wiszaca-z-abazurem-diament-material.jpg";
$product->image_url = $url;
$product->description = "Lampa wisząca z abażurem Diament
Klasyczny design lampy w połączeniu z oryginalnym abażurem w kształcie diamentu wspaniale urozmaici wnętrza urządzone w każdym stylu.
Gdzie zawiesić 1-płomienną lampę wiszącą?
Lampa może pełnić rolę zarówno oświetlenia do sypialni, salonu jak i kuchni czy jadalni. Dzięki możliwości wybrania koloru linki i abażura, możesz stworzyć własną, niepowtarzalną lampę wiszącą.
Jakie zalety posiada elegancka lampa?
Oświetlenie posiada regulowaną wysokość, dzięki czemu perfekcyjnie dopasuje się do każdego rozmiaru pomieszczenia. Konstrukcja lampy wiszącej została wykonana z trwałego metalu, a abażur z efektownego i wytrzymałego materiału. Lampa posiada możliwość zasilania różnymi źródłami światła, na przykład żarówkami LED, E-27, zwykłymi czy energooszczędnymi.";
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
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/lampa-sufitowa-na-listwie-z-abazurami.jpg";
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
$product->name = [$default_lang => "Oryginalna Lampa Kinkiet Diament Materiał"];
$product->link_rewrite = [$default_lang => "oryginalna-lampa-kinkiet-diament-material"];
$product->price = 59.00;
$product->quantity = 90;
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/oryginalna-lampa-kinkiet-diament-material.jpg";
$product->image_url = $url;
$product->description = "Kinkiet z abażurem Diament
Stylowy kinkiet, który nada Twoim wnętrzom wyjątkowego klimatu. Efektowna konstrukcja w połączeniu z eleganckim abażurem w kształcie diamentu daje oryginalną i zachwycającą swym urokiem lampę ścienną.
Do jakich wnętrz pasuje stylowy kinkiet?
Kinkiet może być wspaniałą ozdobą sypialni, pokoju dziennego, salonu czy biura. Do kinkietu możesz dopasować lampę wiszącą lub plafon, które są stworzone w tym samym stylu. Abażur w kolorze czerwieni rewelacyjnie ożywi Twoje wnętrza, a odcienie szarości i czerń wprowadzą mnóstwo nastrojowości i elegancji.
Jakie zalety posiada prezentowany kinkiet?
Lampa wykonana jest z trwałego metalu i odpornego na uszkodzenia materiału, co gwarantuje radość z użytkowania na bardzo długi czas. Dodatkową zaletą kinkietu jest możliwość zasilania go wieloma rodzajami światła, na przykład żarówkami LED, zwykłymi czy energooszczędnymi E-27.";
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
$product->name = [$default_lang => "Lampa Wisząca z Abażurem Dziecięce Wzory"];
$product->link_rewrite = [$default_lang => "lampa-wiszaca-z-abazurem-dzieciece-wzory"];
$product->price = 47.70;
$product->quantity = 90;
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/lampa-wiszaca-z-abazurem-dzieciece-wzory.jpg";
$product->image_url = $url;
$product->description = "Lampa dziecięca wisząca z abażurem w dziewczynki
Szukasz lampy, która w oryginalny sposób ozdobi pokój dziecięcy? Mamy coś dla Ciebie! Kolorowy i ciekawy wzór zapewni niepowtarzalny wygląd i nada pomieszczeniu wyjątkowego klimatu.
Do jakich wnętrz pasuje prezentowana lampa wisząca?
Oświetlenie będzie wspaniale prezentować się w pokoju dziecięcym, przedszkolu czy pokoju zabaw. Bajkowy motyw na abażurze znakomicie oddaje charakter pomieszczenia oraz spodoba się każdej małej dziewczynce.
Jakie zalety posiada oryginalna lampa sufitowa?
Żyrandol posiada możliwość regulacji wysokości, dzięki czemu z łatwością dopasujesz lampę do pomieszczenia o dowolnym rozmiarze. Oświetlenie wykonane jest z wysokiej jakości tworzyw sztucznych. Lampa zasilana jest popularnymi żarówkami z gwintem E27.";
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
$product->name = [$default_lang => "Lampa Wisząca z Abażurem Różne Kolory"];
$product->link_rewrite = [$default_lang => "lampa-wiszaca-z-abazurem-rozne-kolory"];
$product->price = 185.00;
$product->quantity = 90;
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/lampa-wiszaca-z-abazurem-rozne-kolory.jpg";
$product->image_url = $url;
$product->description = "Lampa wisząca z abażurem 3 – płomienna kolory kloszy do wyboru
Marzysz o skomponowaniu lampy we własnym stylu? U nas to możliwe! Oświetlenie posiada trzy kolory abażurów – czarny, ciemnoszary i jasnoszary – które możesz ułożyć w dowolnej kombinacji.
Z jakimi wnętrzami najlepiej komponuje się prezentowana lampa?
Oświetlenie to świetnie prezentuje się w pomieszczeniach biurowych. Jednakże polecamy tę lampę wiszącą również do sypialni, pokoju czy nowoczesnej kuchni. Dzięki stonowanym kolorom kloszy lampa nada się do każdego wnętrza.
Jakie zalety posiada oryginalna lampa sufitowa?
Konstrukcja lampy wykonana jest z wytrzymałego metalu, a abażury z odpornego na uszkodzenia materiału. Żyrandol posiada możliwość regulacji wysokości, dzięki czemu z łatwością dopasujesz ją zarówno do niskich jak i wysokich pomieszczeń. Oświetlenie jest także lampą ledową.";
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
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/lampa-wiszaca-z-kolorowym-abazurem-zyrandol.jpg";
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
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/stylowa-lampa-sufitowa-wiszaca-z-abazurami.jpg";
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
$product->name = [$default_lang => "Stylowa Lampa Wisząca Abażur Klasyczna"];
$product->link_rewrite = [$default_lang => "stylowa-lampa-wiszaca-abazur-klasyczna"];
$product->price = 135.00;
$product->quantity = 90;
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/stylowa-lampa-wiszaca-abazur-klasyczna.jpg";
$product->image_url = $url;
$product->description = "Lampa wisząca 2 – punktowa abażury do wyboru
Klasyczny design i minimalistyczna forma lampy sufitowej doda Twoim pomieszczeniom nowoczesnego stylu. Żyrandol posiada możliwość stworzenia własnej kompozycji z trzech abażurów o różnych kolorach.
Do jakich wnętrz pasuje nowoczesna lampa?
Żyrandol może stać się oświetleniem biurowym, kuchennym, pokojowym czy salonowym. To od Ciebie zależy, jaką aranżację stworzysz z klasycznymi kolorami abażurów.
Jakie zalety posiada prezentowana lampa?
Oświetlenie zostało wykonane z metalu, dzięki czemu masz gwarancję wytrzymałości i odporności na uszkodzenia. Abażury stworzone są z solidnego materiału. Lampa posiada możliwość regulacji wysokości. Dodatkowo żyrandol posiada wiele źródeł zasilania, w tym żarówki LED czy energooszczędne.";
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
$product->name = [$default_lang => "Pojedyncza Lampa Wisząca Abażur Wiele Kolorów"];
$product->link_rewrite = [$default_lang => "pojedyncza-lampa-wiszaca-abazur-wiele-kolorow"];
$product->price = 99.00;
$product->quantity = 90;
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/pojedyncza-lampa-wiszaca-abazur-wiele-kolorow.jpg";
$product->image_url = $url;
$product->description = "Oryginalna lampa wisząca z abażurem
Wyjątkowy kształt abażura nada Twoim wnętrzom wspaniałego klimatu. Dzięki wielu kolorom lampy możesz stworzyć oświetlenie idealnie uzupełniające Twoją aranżację.
Do jakich wnętrz pasuje nowoczesna lampa?
Oświetlenie będzie idealną lampą do kuchni, salonu, sypialni czy kawiarni. Żywe kolory oświetlenia rewelacyjnie ozdobią ciemne pomieszczenia, a delikatne lub ciemne barwy lampy wiszącej wprowadzą mnóstwo uroku i eleganci do Twojej aranżacji.
Jakie zalety posiada oświetlenie sufitowe?
Solidne materiały, wiele kolorów linek i abażurów do wyboru to tylko kilka z atutów nowoczesnej lampy. Oświetlenie posiada również możliwość regulacji wysokości, dzięki czemu lampa idealnie dopasuje się do każdego rozmiaru pomieszczenia. Oświetlenie może być zasilane wieloma rodzajami światła, na przykład żarówkami ledowymi.";
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
$product->name = [$default_lang => "Lampa Wisząca Abażur w Kwiaty"];
$product->link_rewrite = [$default_lang => "lampa-wiszaca-abazur-w-kwiaty"];
$product->price = 99.00;
$product->quantity = 90;
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/lampa-wiszaca-abazur-w-kwiaty.jpg";
$product->image_url = $url;
$product->description = "Lampa wisząca z abażurem dwa wzory do wyboru
Oryginalne wzory abażurów wprowadzą do Twoich wnętrz niepowtarzalnego klimatu. Dzięki możliwości wybraniu koloru linki stworzysz oświetlenie idealnie pasujące do Twojego stylu.
Gdzie zawiesić prezentowaną lampę sufitową?
Oświetlenie może pełnić rolę lampy do kuchni, pokoju, sypialni czy nawet kawiarni lub restauracji. Delikatne wzory i barwy abażurów sprawiają, że lampa pasuje do wnętrz urządzonych zarówno w jasnych jak i ciemnych kolorach.
Jakie materiały zostały wykorzystane do produkcji oświetlenia sufitowego?
Linki i podsufitka wykonane są z metalu, co daje gwarancję trwałości i wytrzymałości. Natomiast klosz lampy jest materiałowy. Oświetlenie jest także bardzo funkcjonale, ponieważ posiada możliwość regulacji wysokości. Ponadto lampa może być zasilana wieloma rodzajami światła, w tym oświetleniem ledowym.";
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
$product->name = [$default_lang => "Lampa Wisząca z Podwójnym Abażurem"];
$product->link_rewrite = [$default_lang => "lampa-wiszaca-z-podwojnym-abazurem"];
$product->price = 80.10;
$product->quantity = 90;
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/lampa-wiszaca-z-podwojnym-abazurem.jpg";
$product->image_url = $url;
$product->description = "Lampa wisząca z abażurem
Elegancki i oryginalny styl lampy wiszącej nada Twoim wnętrzom wyjątkowego klimatu. Klasyczne kolory kloszy sprawiają, ze pomieszczenie wygląda stylowo i wytwornie.
Gdzie zawiesić prezentowaną lampę sufitową?
Oświetlenie może zdobić Twoją kuchnię, salon, sypialnię, pokój czy biuro. Dzięki możliwości wybrania koloru linki oraz abażura idealnie dopasujesz lampę wiszącą do każdego rodzaju pomieszczenia.
Jakie zalety posiada lampa sufitowa?
Konstrukcja oświetlenia wykonana jest metalu, dzięki czemu jest trwała i odporna na uszkodzenia. Abażur jest materiałowy. Ponadto lampa posiada możliwość regulacji wysokości, przez co dostosuje się do każdego wymiaru pomieszczenia. Oświetlenie pełni również funkcję lampy LED.";
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
$product->name = [$default_lang => "Pojedyncza Lampa Wisząca Abażur w Kratkę"];
$product->link_rewrite = [$default_lang => "pojedyncza-lampa-wiszaca-abazur-w-kratke"];
$product->price = 79.00;
$product->quantity = 90;
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/pojedyncza-lampa-wiszaca-abazur-w-kratke.jpg";
$product->image_url = $url;
$product->description = "Lampa wisząca z materiałowym abażurem kolory do wyboru
Piękna i klasyczna lampa, która nada Twoim wnętrzom przytulnego klimatu. Abażur w kratkę świetnie odnajdzie się w klasycznych aranżacjach.
Do jakich wnętrz pasuje lampa wisząca?
Żyrandol znakomicie ozdobi Twoją kuchnię, pokój, kawiarnię czy pokój dziecięcy. Dzięki trzem kolorom linek do wybory oraz różnorodnym abażurom, lampa rewelacyjnie dostosowuje się do wszystkich rodzajów pomieszczeń.
Jakie zalety posiada prezentowana lampa?
Konstrukcja żyrandola została stworzona z wytrzymałego i i odpornego na uszkodzenia metalu. Abażur wykonany jest z solidnego materiału. Lampa posiada możliwość regulacji wysokości, przez co idealnie dopasowuje się do każdego rozmiaru pomieszczenia. Oświetlenie posiada wiele źródeł zasilania, na przykład żarówki ledowe bądź energooszczędne.";
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
$product->name = [$default_lang => "Lampa Wisząca z Abażurem Linki do Wyboru"];
$product->link_rewrite = [$default_lang => "lampa-wiszaca-z-abazurem-linki-do-wyboru"];
$product->price = 79.00;
$product->quantity = 90;
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/lampa-wiszaca-z-abazurem-linki-do-wyboru.jpg";
$product->image_url = $url;
$product->description = "Elegancka lampa wisząca z abażurem wiele kolorów
Klasyczna i stylowa lampa sufitowa, która świetnie wpasuje się do każdej aranżacji. Materiałowy abażur stworzony jest w kilku kolorach, aby z łatwością wkomponować lampę do swojego wnętrza.
Gdzie najlepiej prezentuje się oświetlenie sufitowe?
Lampa może pełnić funkcje oświetlenia do kuchni, salonu, pokoju czy biura. Klasyczny design i unikalne kolory abażurów oraz linek tworzę lampę pasującą do każdego pomieszczenia.
Jakie zalety posiada prezentowana lampa wisząca?
Konstrukcja żyrandola została stworzona z trwałego i odpornego na uszkodzenia metalu. Natomiast abażur wykonany jest z solidnego materiału. Atutem lampy jest możliwość regulacji wysokości, dzięki czemu żyrandol dopasowuje się do każdego rozmiaru pomieszczenia. Oświetlenie jest także lampą LED.";
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
$product->name = [$default_lang => "Lampa Wisząca z Abażurem Abstrakcyjny Wzór"];
$product->link_rewrite = [$default_lang => "lampa-wiszaca-z-abazurem-abstrakcyjny-wzor"];
$product->price = 53.00;
$product->quantity = 90;
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/lampa-wiszaca-z-abazurem-abstrakcyjny-wzor.jpg";
$product->image_url = $url;
$product->description = "Lampa wisząca z abażurem w abstrakcyjny wzór
Niebanalny i oryginalny wzór lampy sufitowej nada wyjątkowego klimatu każdemu wnętrzu. Od dziś możesz stworzyć własną, niepowtarzalną aranżację.
Gdzie zawiesić nowoczesną lampę wiszącą?
Oświetlenie będzie znakomicie prezentować się w salonie, kuchni, jadalni czy też kawiarni albo restauracji. Może także pełnić funkcje oświetlenia pokojowego. To od Ciebie zależy, jaki styl pomieszczenia stworzysz.
Jakie zalety posiada żyrandol?
Lampa posiada wiele funkcjonalnych zalet – możliwość regulacji wysokości oraz trzy kolory linek do wyboru to tylko kilka z nich. Lampa wykonana jest z wysokiej jakości tworzyw sztucznych, abyś mógł cieszyć się oryginalnym oświetleniem przez wiele lat. Żyrandol zasilany jest żarówkami E27.";
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
$product->name = [$default_lang => "Lampa Wisząca Abażur Chevron Zygzak Zwis"];
$product->link_rewrite = [$default_lang => "lampa-wiszaca-abazur-chevron-zygzak-zwis"];
$product->price = 53.00;
$product->quantity = 90;
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/lampa-wiszaca-abazur-chevron-zygzak-zwis.jpg";
$product->image_url = $url;
$product->description = "Lampa sufitowa abażur we wzory
Wyjątkowy i abstrakcyjny styl lampy wiszącej sprawi, że stanie się ona wspaniałą ozdobą Twojego wnętrza. Wzór abażura świetnie odda charakter Twojego pomieszczenia. Zachwycisz bliskich nowoczesną aranżacją!
Gdzie zawiesić prezentowaną lampę wiszącą?
Lampa świetnie sprawdzi się zarówno w kuchni jak i pokoju, biurze, salonie czy nawet łazience. Czarno-biały wzór abażura z łatwością dopasujesz do wystroju swojego pomieszczenia. Trzy kolory linek do wyboru również pozwolą Ci na stworzenie własnej, niepowtarzalnej lampy.
Czy lampa wisząca jest funkcjonalna?
Oczywiście, że tak! Oświetlenie sufitowe posiada możliwość regulacji wysokości, co pozwala mu na dopasowanie się do każdego pomieszczenia. Lampa wykonana jest z trwałych i odpornych na uszkodzenia materiałów. Ponadto żyrandol zasilany jest żarówkami E27, na przykład oświetleniem LED.";
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
$product->name = [$default_lang => "Lampa Wisząca Abażur Dziecięce Wzory"];
$product->link_rewrite = [$default_lang => "lampa-wiszaca-abazur-dzieciece-wzory"];
$product->price = 53.00;
$product->quantity = 90;
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/lampa-wiszaca-abazur-dzieciece-wzory.jpg";
$product->image_url = $url;
$product->description = "Lampa wisząca abażur w piłki pokój dziecięcy
Szukasz oryginalnej lampy wiszącej, która ozdobi pokój Twoje dziecka? Mamy coś specjalnie dla ciebie! Abażur w piłki świetnie odda charakter dziecięcego pomieszczenia.
Gdzie zawiesić prezentowaną lampę sufitową?
Żyrandol świetnie ozdobi przedszkole, pokój dziecięcy czy pokój zabaw. Abażur z motywem piłek do nogi oraz cztery kolory linek do wyboru pozwolą Ci stworzyć niepowtarzalną lampę idealnie pasującą do Twojej aranżacji.
Jakie zalety posiada lampa wisząca?
Oświetlenie posiada możliwość regulacji wysokości, dzięki czemu doskonale wpasowuje się w każde pomieszczenie. Żyrandol zasilany jest żarówkami E27. Możesz wybrać zwykłe, LED lub dekoraycjne.";
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
$product->name = [$default_lang => "Lampa Wisząca Abażur do Kuchni"];
$product->link_rewrite = [$default_lang => "lampa-wiszaca-abazur-do-kuchni"];
$product->price = 53.00;
$product->quantity = 90;
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/lampa-wiszaca-abazur-do-kuchni.jpg";
$product->image_url = $url;
$product->description = "Lampa kuchenna wisząca z abażurem w cytryny
Efektowny motyw cytryn na abażurze lampy wiszącej urozmaica i nadaje wyjątkowego klimatu Twojemu pomieszczeniu.
Gdzie zawiesić nowoczesną lampę?
Oświetlenie znakomicie sprawdzi się w kuchni, jadalni czy kawiarni. Barwne cytryny grafiki świetnie oddadzą charakter tych pomieszczeń. Linki lampy dostępne są w trzech różnych kolorach, aby stworzenie oświetlenia idealnie odpowiadającego Twoim oczekiwaniom było jeszcze prostsze.
Jakie zalety posiada prezentowana lampa sufitowa?
Oświetlenie ma możliwość regulacji wysokości, przez co idealnie dopasujesz lampę do każdego rozmiaru pomieszczenia. Wysokiej jakości tworzywa użyte do produkcji lampy gwarantują jej trwałość i odporność na uszkodzenia. Oświetlenie zasilane jest żarówkami E27.";
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
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/lampa-sufitowa-plafon-diament-z-abazurami.jpg";
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
$product->name = [$default_lang => "Lampa Wisząca Sufitowa Diament Abażury"];
$product->link_rewrite = [$default_lang => "lampa-wiszaca-sufitowa-diament-abazury"];
$product->price = 109.00;
$product->quantity = 90;
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/lampa-wiszaca-sufitowa-diament-abazury.jpg";
$product->image_url = $url;
$product->description = "Lampa wisząca 2 źródła światła z abażurem
Szukasz eleganckiego i stylowego oświetlenia, które nada wnętrzom uroku i rewelacyjnie dopełni Twoją aranżację? Mamy lampę wiszącą specjalnie dla Ciebie! Klasyczny design i wyjątkowe abażury w kształcie diamentów sprawią, że Twoje wnętrza będą zachwycać stylowością.
Gdzie zawiesić 2-płomienną lampę?
Oświetlenie świetnie sprawdzi się w każdym pomieszczeniu. Kuchnia, salon, sypialnia czy jadalnia – stonowane kolory będą pasować do Twoich wnętrz, niezależnie od stylu, w jakim chcesz je urządzić. Lampa posiada możliwość wyboru koloru konstrukcji jak i abażura, dzięki czemu możesz skomponować własne, oryginalne oświetlenie.
Czy lampa wisząca jest praktyczna?
Oczywiście, że tak! Lampa została wykonana z wytrzymałych i odpornych na uszkodzenia tworzyw, dzięki czemu będzie gościć w Twoim domu przez bardzo długi czas. Lampa posiada możliwość regulacji wysokości, co sprawia, że idealnie dopasowuje się do każdego rozmiaru pomieszczenia. Oświetlenie ma również opcję podłączenia pod podwójny przełącznik. Lampa może być zasilana różnymi rodzajami żarówek, w tym ledowymi, energooszczędnymi, zwykłymi czy E-27.";
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
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/lampa-sufitowa-plafon-diament-abazur.jpg";
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
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/lampa-sufitowa-plafon-rozne-kolory-diament-abazury.jpg";
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
$product->name = [$default_lang => "Lampa Wisząca z Abażurem Plisa"];
$product->link_rewrite = [$default_lang => "lampa-wiszaca-z-abazurem-plisa"];
$product->price = 129.00;
$product->quantity = 90;
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/lampa-wiszaca-z-abazurem-plisa.jpg";
$product->image_url = $url;
$product->description = "Lampa wisząca z plisowanym abażurem
Elegancki wygląd lampy wiszącej sprawi, że Twoje wnętrza będą zachwycające i pełne uroku. Wybierz kolor abażura najbardziej oddający charakter pomieszczenia i ciesz się jego wyjątkowym wystrojem!
Do jakich wnętrz pasuje prezentowana lampa?
Oświetlenie może zawisnąć w sypialni, jadalni, pokoju, salonie czy wielu innych pomieszczeniach. Klasyczny design i stonowane kolory abażurów pozwalają lampie idealnie dopasować się do każdego stylu wnętrz – od nowoczesnych po aranżacje retro.
Jakie atuty posiada stylowa lampa?
Oświetlenie ma funkcję regulacji wysokości, dzięki czemu możesz zawiesić lampę w wygodny dla siebie sposób. Plisowane, materiałowe abażury nie tylko nadają lampie wiszącej uroku, ale również są solidnie wykonane i odporne na uszkodzenia. Lampa posiada wiele możliwości zasilania, na przykład żarówki LED, energooszczędne czy zwykłe – E-27.";
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
$product->name = [$default_lang => "Lampa Wisząca LED Chrom z Abażurem"];
$product->link_rewrite = [$default_lang => "lampa-wiszaca-led-chrom-z-abazurem"];
$product->price = 111.20;
$product->quantity = 90;
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/lampa-wiszaca-led-chrom-z-abazurem.jpg";
$product->image_url = $url;
$product->description = "Lampa wisząca z abażurem 2 źródła światła
Klasyczna i elegancka lampa, która nada Twoim wnętrzom wyjątkowego klimatu. Chrom w duecie z jasnymi abażurami daje spektakularny efekt!
Do jakich wnętrz pasuje prezentowana lampa wisząca?
Niezwykły styl oświetlenia sufitowego doskonale wpasuje się w Twoją kuchnię, salon, pokój czy sypialnię. Lampa wspaniale współgra zarówno z nowoczesnymi jak aranżacjami retro.
Czy lampa jest funkcjonalna?
I to bardzo! Lampa posiada możliwość regulacji wysokości, dzięki czemu idealnie dopasuje do wszystkich rodzajów pomieszczeń. Oświetlenie ma również opcję podłączenia pod podwójny przełącznik. Lampa wykonana jest z wysokiej jakości materiałów, dzięki czemu masz pewność niezawodności i użyteczności oświetlenia. Lampa może być zasilana żarówkami LED, energooszczędnymi bądź zwykłymi.";
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
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/lampa-sufitowa-z-abazurem-chrom.jpg";
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
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/lampa-sufitowa-plafon-z-abazurem-chrom.jpg";
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
$product->name = [$default_lang => "Lampa Stojąca Abażur Plisa Trójnóg"];
$product->link_rewrite = [$default_lang => "lampa-stojaca-abazur-plisa-trojnog"];
$product->price = 229.00;
$product->quantity = 90;
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/lampa-stojaca-abazur-plisa-trojnog.jpg";
$product->image_url = $url;
$product->description = "Lampa stojąca trójnóg z plisowanym abażurem
Lampa, która doda Twoim wnętrzom przytulności. Idealnie sprawdzi się w sypialni, salonie czy pokoju dziecka. Mnóstwo kolorów lampy do wyboru umożliwia łatwe dopasowanie oświetlenia do stylu wnętrza.
W jakich pomieszczeniach najlepiej wygląda stylowy trójnóg?
Lampa podłogowa jest znakomitą propozycją do każdego wnętrza. Oświetlenie postawione obok kanapy czy łóżka będzie pełniło funkcje lampy do czytania. Plisowany abażur świetnie prezentuje się zarówno w nowoczesnych, klasycznych jak i aranżacjach w stylu glamour. Konstrukcja lampy stojącej dostępna jest w dwóch ponadczasowych kolorach – czarnym i białym, dzięki czemu oświetlenie komponuje się z każdą inną barwą.
Jakie zalety posiada elegancka lampa podłogowa?
Trójnóg został wykonany z metalu, co zapewnia trwałość i długą wytrzymałość konstrukcji lampy stojącej. Abażur stworzony jest z wysokiej jakości materiału, który charakteryzuje się wysoką odpornością na uszkodzenia. Lampa podłogowa posiada włącznik-wyłącznik nożny, dzięki czemu obsługa oświetlenia jest wygodna. Do lampy pasują żarówki z gwintem E27.";
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
$product->name = [$default_lang => "Lampa Wisząca z Abażurem Nowoczesna Stylowa"];
$product->link_rewrite = [$default_lang => "lampa-wiszaca-z-abazurem-nowoczesna-stylowa"];
$product->price = 99.00;
$product->quantity = 90;
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/lampa-wiszaca-z-abazurem-nowoczesna-stylowa.jpg";
$product->image_url = $url;
$product->description = "Lampa wisząca z podwójnym abażurem wiele kolorów
Oświetlenie, które będzie stanowić wspaniałą ozdobę Twojej aranżacji! Możesz wybrać dowolne kolorów abażurów i cieszyć się własną, niepowtarzalną lampą wiszącą.
Do jakich wnętrz pasuje stylowa lampa?
Oświetlenie znakomicie prezentuje się w każdym pomieszczeniu – salon, kuchnia, sypialnia, jadalnia i wiele innych. Dzięki możliwości wybrania kolory linki, abażura górnego i dolnego tworzysz indywidualną lampę, która idealnie oddaje charakter Twojego wnętrza.
Czy lampa posiada praktyczne funkcje?
Oczywiście, że tak! Lampa ma regulowaną wysokość, która pozwala perfekcyjnie dostosować oświetlenie do rozmiaru pomieszczenia. Podsufitka lampy wykonana jest z metalu, a abażury z materiału. Solidne materiały gwarantują niezawodność i wytrzymałość oświetlenia. Lampa może być zasilana wieloma rodzajami źródeł światła E-27, na przykład żarówkami LED, energooszczędnymi bądź zwykłymi.";
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
$product->name = [$default_lang => "Nowoczesna Lampa Nocna z Abażurem Stojąca"];
$product->link_rewrite = [$default_lang => "nowoczesna-lampa-nocna-z-abazurem-stojaca"];
$product->price = 149.00;
$product->quantity = 90;
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/nowoczesna-lampa-nocna-z-abazurem-stojaca.jpg";
$product->image_url = $url;
$product->description = "Lampka nocna stołowa z abażurem
Nowoczesna konstrukcja lampy stołowej połączona z klasycznym abażurem daje efektowne oświetlenie, które doda Twojemu wnętrzu uroku i stylowości.
Do jakich pomieszczeń najbardziej pasuje prezentowana lampka?
Oświetlenie to dedykujemy w szczególności do sypialni, pokoju dziennego czy dziecięcego. Jednak w każdym innym wnętrzu lampka również znajdzie zastosowanie. Dzięki możliwości wyboru koloru konstrukcji, a także barwy i kształtu abażura masz możliwość skomponowania własnej, niepowtarzalnej lampy stołowej.
Czy lampka posiada praktyczne funkcje?
Oczywiście, że tak! Konstrukcja lampy została wykonana z solidnego metalu, który zapewni Ci radość z użytkowania lampki nocnej przez długi czas. Abażury natomiast wykonane są z odpornego na uszkodzenia materiału. Lampka nocna posiada włącznik – wyłącznik światła. Lampa może być zasilana różnymi rodzajami żarówek, na przykład ledowymi, energooszczędnymi bądź zwykłymi z gwintem E-27.";
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
$product->name = [$default_lang => "Lampa Stojąca Podłogowa Trójnóg z Abażurem Chrom"];
$product->link_rewrite = [$default_lang => "lampa-stojaca-podlogowa-trojnog-z-abazurem-chrom"];
$product->price = 239.00;
$product->quantity = 90;
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/lampa-stojaca-podlogowa-trojnog-z-abazurem-chrom.jpg";
$product->image_url = $url;
$product->description = "Lampa stojąca trójnóg chrom
Oświetlenie stojące, które nada Twoim wnętrzom elegancji i magicznego klimatu. Kolorowy abażur z materiału będzie wspaniałą ozdobą pomieszczenia, a chromowana konstrukcja nada wnętrzom nowoczesności.
Do jakich wnętrz pasuje stylowy trójnóg?
Lampa świetnie odda charakter salonu urządzonego w klasycznym stylu, nowoczesnej sypialni czy pokoju w klimacie retro. Prosta, klasyczna konstrukcja wygląda rewelacyjnie w każdym pomieszczeniu, niezależnie od jego przeznaczenia. Abażur do lampy dostępny jest w aż ośmiu kolorach, dzięki czemu jeszcze dokładniej dopasujesz oświetlenie do designu swoich wnętrz. Trójnóg z jasnym abażurem bądź czerwonym wspaniale ożywi Twoją aranżację, a ciemne kolory abażura dodadzą jej elegancji.
Jakie atuty ma lampa stojąca?
Lampy stojące są niezwykle funkcjonalne, ponieważ nie potrzebują żadnego montażu do ścian bądź sufitu. Ponadto trójnóg posiada włącznik – wyłącznik nożny, który znacznie ułatwia obsługę lampy stojącej. Metalowa konstrukcja pozwoli Ci cieszyć się oświetleniem przez wiele lat. A to za sprawą odporności i wytrzymałości tego tworzywa. Lampa stojąca posiada wiele opcji zasilania, na przykład żarówki ledowe, energooszczędne bądź zwykłe z gwintem E-27.";
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
$product->name = [$default_lang => "Elegancka Lampa Wisząca z Abażurem Złoty Środek"];
$product->link_rewrite = [$default_lang => "elegancka-lampa-wiszaca-z-abazurem-zloty-srodek"];
$product->price = 145.00;
$product->quantity = 90;
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/elegancka-lampa-wiszaca-z-abazurem-zloty-srodek.jpg";
$product->image_url = $url;
$product->description = "Lampa wisząca z abażurem złoty środek
Klasyczna lampa wisząca, która doskonale komponuje się z wieloma stylami wnętrz – retro, nowoczesnymi, a nawet vintage. Prostą konstrukcję uatrakcyjnia złoty środek klosza, który nadaje lampie wiszącej oryginalnego i designerskiego wyglądu.
W jakich pomieszczeniach lampa z abażurem prezentuje się najlepiej?
Lampa może pełnić rolę oświetlenia do kuchni, salonu, sypialni, jadalni czy pokoju gościnnego. Dzięki uniwersalnym kolorom – czarnym i białym – lampa świetnie komponuje się z każdą inną barwą. Minimalistyczny styl oświetlenia sprawia, że lampa wygląda rewelacyjnie w każdej aranżacji wnętrz. Złoty środek abażura nadaje kontrastu jednolitej lampie, co czyni ją oryginalną i stylową.
Jakie praktyczne funkcje posiada lampa wisząca z abażurem?
Lampa posiada możliwość regulacji wysokości, dzięki czemu idealnie dopasowuje się do każdego rozmiaru i typu pomieszczenia. Metalowa podsufitka oraz materiałowy abażur zapewniają użyteczność lampy wiszącej na długi czas. Oświetlenie może być zasilane wieloma rodzajami żarówek – ledowymi, energooszczędnymi lub zwykłymi z gwintem E27.";
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
$product->name = [$default_lang => "Stylowa Lampa Wisząca Abażur Miedź Środek"];
$product->link_rewrite = [$default_lang => "stylowa-lampa-wiszaca-abazur-miedz-srodek"];
$product->price = 145.00;
$product->quantity = 90;
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/stylowa-lampa-wiszaca-abazur-miedz-srodek.jpg";
$product->image_url = $url;
$product->description = "Stylowa lampa wisząca abażur z miedzianym środkiem
Chcesz dodać stylowego akcentu swoim minimalistycznym lub klasycznym wnętrzom? Prezentowana lampa wisząca pomoże Ci osiągnąć wymarzony wystój domu! Prosta konstrukcja i miedziane wnętrze abażura tworzą efektowny duet, który zachwyca oryginalnym łączeniem detali.
Do jakich pomieszczeń najlepiej pasuje stylowa lampa z abażurem?
Dzięki klasycznym kolorom i prostej konstrukcji, lampa wisząca jest świetną propozycją oświetlenia do sypialni, kuchni, jadalni czy salonu. Lampa rewelacyjnie ozdobi pomieszczenia urządzone w nowoczesnym, klasycznym, a także stylu retro. Środek abażura w kolorze miedzi stanowi oryginalną dekorację lampy, która doda Twoim wnętrzom wyjątkowości.
Jakie zalety posiada prezentowana lampa wisząca?
Oświetlenie posiada regulowaną wysokość, dzięki czemu lampa idealnie dopasowuje się do każdego rozmiaru pomieszczenia. Wysokiej jakości tworzywa, wykorzystane do produkcji lampy, gwarantują użyteczność oświetlenia na bardzo długi czas. Źródła światła, jakimi lampa może być zasilana, to żarówki energooszczędne, zwykłe i LED E27.";
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
$product->name = [$default_lang => "Lampa Wisząca z Abażurem Srebrny Środek"];
$product->link_rewrite = [$default_lang => "lampa-wiszaca-z-abazurem-srebrny-srodek"];
$product->price = 145.00;
$product->quantity = 90;
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/lampa-wiszaca-z-abazurem-srebrny-srodek.jpg";
$product->image_url = $url;
$product->description = "Elegancka lampa wisząca z abażurem srebrny środek
Lampa wisząca, która nada oryginalności minimalistycznym wnętrzom. Jednolity kolor oświetlenia został skontrastowany ze srebrnym wnętrzem abażura. Dzięki temu połączeniu lampa wisząca wspaniale ozdabia pomieszczenia we wszystkich stylach – od nowoczesnych wnętrz po aranżacje retro.
Gdzie najlepiej zawiesić stylową lampę wiszącą z abażurem?
Lampa może dekorować Twoją sypialnię, kuchnię, jadalnię, a także salon oraz pokój gościnny. Klasyczne kolory oświetlenia sprawiają, że pasuje ono do wszystkich rodzajów wnętrz. Natomiast srebrny środek abażura dodaje pomieszczeniom oryginalnego akcentu, który przyciągnie spojrzenia.
Czy prezentowana lampa z abażurem posiada praktyczne funkcje?
Oczywiście, że tak! Lampa posiada możliwość regulacji wysokości, dzięki czemu dokładnie dopasujesz ją do rozmiaru pomieszczenia. Wysokiej jakości materiały wykonania sprawiają, że lampa będzie służyć Ci przez długi czas. Źródła światła, jakimi lampa może być zasilana, to żarówki LED, energooszczędne lub zwykłe E27.";
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
$product->name = [$default_lang => "Nowoczesna Lampa Wisząca Złoty Środek Abażur 50 cm"];
$product->link_rewrite = [$default_lang => "nowoczesna-lampa-wiszaca-zloty-srodek-abazur-50-cm"];
$product->price = 199.00;
$product->quantity = 90;
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/nowoczesna-lampa-wiszaca-zloty-srodek-abazur-50-cm.jpg";
$product->image_url = $url;
$product->description = "Nowoczesna lampa wisząca abażur ze złotym środkiem
Wprowadź do swoich wnętrz oryginalność i elegancję! Nasza lampa wisząca udekoruje pomieszczenia urządzone zarówno w klasycznym jak i nowoczesnym stylu. Złote wnętrze abażura to prosty detal, który dodał lampie wiszącej wyjątkowości i niezwykle designerskiego wyglądu.
W jakich pomieszczeniach dekoracyjna lampa wisząca prezentuje się najlepiej?
Oświetlenie będzie wspaniałą ozdobą każdego wnętrza – od nowoczesnej sypialni po salon w stylu retro. Uniwersalne kolory lampy – czerń i biel – sprawiają, że lampa znakomicie komponuje się z każdą aranżacją wnętrz. Szeroki abażur, uatrakcyjniony złotym wnętrzem, doda pomieszczeniu elegancji i niepowtarzalnego klimatu.
Jakie funkcje posiada lampa wisząca z szerokim abażurem?
Oświetlenie posiada regulowaną wysokość, co pozwala na dopasowanie lampy do każdego rozmiaru i typu pomieszczenia. Podsufitka została wykonana z wytrzymałego i metalu, a abażur z wysokiej jakości materiału, dzięki czemu lampa będzie oświetlała Twoje wnętrza przez długi czas. Dedykowane źródła światła do lampy to żarówki E27 LED, energooszczędne lub zwykłe.";
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
$product->name = [$default_lang => "Nowoczesna Lampa Wisząca Abażur Miedziany Środek"];
$product->link_rewrite = [$default_lang => "nowoczesna-lampa-wiszaca-abazur-miedziany-srodek"];
$product->price = 199.00;
$product->quantity = 90;
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/nowoczesna-lampa-wiszaca-abazur-miedziany-srodek.jpg";
$product->image_url = $url;
$product->description = "Stylowa lampa z szerokim abażurem miedź
Dodaj wyjątkowy akcent do swoich wnętrz! Jednolite kolory lampy wiszącej zostały skontrastowane abażurem z miedzianym środkiem. To niesamowite połączenie czyni lampę oryginalną i niezwykle designerską.
W jakich pomieszczeniach stylowa lampa z abażurem prezentuje się najlepiej?
Lampa wygląda rewelacyjnie zarówno w nowoczesnych wnętrzach jak i aranżacjach w stylu retro. Klasyczne kolory linek oraz abażurów czynią oświetlenie niezwykle uniwersalnym – pasującym do każdego typu pomieszczenia. Miedziane wnętrze abażura nie tylko nadaje wyjątkowego designu lampie, ale również czyni światło żarówki bardziej efektownym.
Czy prezentowana lampa wisząca posiada praktyczne funkcje?
Lampa ma opcję regulacji wysokości, przez co dokładnie dopasowuje się do wszystkich rozmiarów pomieszczeń. Oświetlenie zostało wykonane z wysokiej jakości tworzyw, aby mogło ozdabiać Twoje wnętrza długi czas. Źródła światła dedykowane do lampy to żarówki E27 LED, energooszczędne lub zwykłe.";
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
$product->name = [$default_lang => "Stylowa Lampa Wisząca z Abażurem Srebrne Wnętrze"];
$product->link_rewrite = [$default_lang => "stylowa-lampa-wiszaca-z-abazurem-srebrne-wnetrze"];
$product->price = 199.00;
$product->quantity = 90;
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/stylowa-lampa-wiszaca-z-abazurem-srebrne-wnetrze.jpg";
$product->image_url = $url;
$product->description = "Nowoczesna lampa wisząca ze srebrnym abażurem
Designerska lampa wisząca, która doda Twoim pomieszczeniom niepowtarzalnego charakteru. Srebrny kolor wnętrza abażura czyni prostą lampę niezwykle designerską. Wybierz kolory idealnie oddające klimat Twojego pomieszczenia i ciesz się wyjątkową aranżacją wnętrz.
Gdzie najlepiej zawiesić prezentowaną lampę wiszącą?
Nowoczesna sypialnia, kuchnia czy klasyczny salon – lampa udekoruje każde pomieszczenie bez względu na jego przeznaczenie. Uniwersalne kolory oświetlenia znakomicie komponują się ze wszystkimi stylami wnętrzarskimi. Szeroki abażur ze srebrnym środkiem przyczynia się również do efektownego świecenia żarówki.
Jakie zalety posiada stylowa lampa wisząca?
Oświetlenie posiada regulowaną wysokość, dzięki czemu dokładnie dopasujesz lampę do rozmiaru pomieszczenia. Materiały wykorzystane do produkcji oświetlenia do metal i materiał, które zapewniają wytrzymałość i odporność na uszkodzenia. Lampa może być zasilana takimi źródłami światła, jak żarówki E27 LED, zwykłe lub energooszczędne.";
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
$product->name = [$default_lang => "Lampa Stojąca Drewno Różne Kolory Abażur"];
$product->link_rewrite = [$default_lang => "lampa-stojaca-drewno-rozne-kolory-abazur"];
$product->price = 259.00;
$product->quantity = 90;
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/lampa-stojaca-drewno-rozne-kolory-abazur.jpg";
$product->image_url = $url;
$product->description = "Lampa stojąca drewniana abażur diament
Chcesz wprowadzić do swoich klasycznych wnętrz odrobinę nowoczesności? Lampa podłogowa, dzięki prostej, drewnianej konstrukcji świetnie komponuje się z eleganckimi wnętrzami, a abażur w kształcie diamentu dodaje jej designerskiego wyglądu.
Gdzie najlepiej umieścić stylową lampę stojącą?
Lampa wspaniale prezentuje się zarówno w nowoczesnych jak i klasycznych wnętrzach. Dzięki wielu kolorom konstrukcji i abażurów do wyboru z łatwością dopasujesz lampę idealnie do stylu swojego pomieszczenia. Lampa stojąca jest znakomitą propozycją do sypialni, gdzie postawiona obok łóżka może pełnić rolę oświetlenia do czytania czy lampy nocnej. Trójnóg w kolorach naturalnego drewna rewelacyjnie prezentuje się salonie bądź jadalni. Drewniana lampa stojąca doda tym pomieszczeniom elegancji oraz przytulnego klimatu.
Czy lampa podłogowa posiada praktyczne funkcje?
Wysokiej jakości drewno, wykorzystane do produkcji lampy, zapewnia trwałość i wytrzymałość oświetlenia przez długi czas. Lampa posiada włącznik – wyłącznik nożny na przewodzie, dzięki czemu obsługa oświetlenia jest wygodna. Trójnóg posiada pięć kolorów konstrukcji oraz cztery odcienie abażura do wyboru, przez co dopasowanie lampy dokładnie do stylu pomieszczenia jest niezwykle proste. Trójnóg zasilany jest żarówkami E27.";
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
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/lampa-wiszaca-nowoczesna-z-abazurami-led.jpg";
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
$product->name = [$default_lang => "Nowoczesna Lampa Wisząca Abażur Diament"];
$product->link_rewrite = [$default_lang => "nowoczesna-lampa-wiszaca-abazur-diament"];
$product->price = 49.00;
$product->quantity = 90;
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/nowoczesna-lampa-wiszaca-abazur-diament.jpg";
$product->image_url = $url;
$product->description = "Lampa wisząca diament abażur
Oświetlenie, które pasuje zarówno do nowoczesnych jak i klasycznych aranżacji wnętrz. Wybierz kolor linki i abażura najbardziej pasujący do stylu Twojego pomieszczenia i ciesz się niepowtarzalnym wystrojem wnętrza.
Gdzie najlepiej zawiesić lampę z abażurem?
Kuchnia, salon, sypialnia czy jadalnia - lampa wygląda rewelacyjnie w każdym pomieszczeniu. Oryginalny kształt abażura świetnie prezentuje w nowoczesnych aranżacjach. Lampa posiada dwa kolory linek oraz pięć kolorów kloszy do wyboru. Dzięki temu stworzysz oświetlenie idealnie dopasowane do Twoich wnętrz.
Jakie funkcje posiada lampa wisząca?
Oświetlenie posiada funkcję regulacji wysokości, dzięki czemu dopasowuje się do rozmiaru pomieszczenia. Konstrukcja lampy została wykonana z metalu, co gwarantuje wytrzymałość i odporność na uszkodzenia. Dedykowane źródła zasilania do lampy to żarówki LED, energooszczędne lub zwykłe E27.";
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
$product->name = [$default_lang => "Stylowy Kinkiet z Abażurem Różne Kolory"];
$product->link_rewrite = [$default_lang => "stylowy-kinkiet-z-abazurem-rozne-kolory"];
$product->price = 59.00;
$product->quantity = 90;
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/stylowy-kinkiet-z-abazurem-rozne-kolory.jpg";
$product->image_url = $url;
$product->description = "Elegancki kinkiet z abażurem wiele kolorów
Chcesz podkreślić klasyczny wystrój swoich wnętrz? Kinkiet z abażurem idealnie sprawdzi się w tej roli. Stylowy, materiałowy abażur w połączeniu z prostą konstrukcją dają niezwykle efektowną lampę, która ozdobi wnętrza urządzone w każdym stylu!
Gdzie najlepiej prezentuje stylowy kinkiet?
Lampa może pełnić rolę oświetlenia wspomagającego w salonie, sypialni czy jadalni. Do kinkietu możesz dobrać lampę sufitową lub wiszącą z tej samej serii, dzięki czemu Twoja aranżacja wnętrz będzie harmonijna i dopracowana w każdym calu. Ciemny abażur świetnie skontrastuje jasne wnętrza, biały klosz ożywi surowe pomieszczenia, a szary abażur doda delikatności aranżacji.
Jakie praktyczne funkcje posiada nowoczesny kinkiet?
Konstrukcja lampy ściennej została wykonana z metalu, dzięki czemu jest trwała i odporna na uszkodzenia. Materiał kinkietu jest wysokiej jakości, co zapewnia radość z użytkowania lampy przez długi czas. Do lampy ściennej dedykujemy żarówki LED, energooszczędne lub zwykłe o gwincie E27.";
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
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/lampa-sufitowa-plafon-abazury-led.jpg";
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
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/nowoczesna-lampa-wiszaca-regulowana-abazury.jpg";
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
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/lampa-z-abazurami-plafon-e27-rozne-kolory.jpg";
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
$product->name = [$default_lang => "Klasyczna Lampa Wisząca z Abażurami"];
$product->link_rewrite = [$default_lang => "klasyczna-lampa-wiszaca-z-abazurami"];
$product->price = 149.00;
$product->quantity = 90;
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/klasyczna-lampa-wiszaca-z-abazurami.jpg";
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
$product->name = [$default_lang => "Lampa Abażur Diament Plafon Wiele Kolorów"];
$product->link_rewrite = [$default_lang => "lampa-abazur-diament-plafon-wiele-kolorow"];
$product->price = 99.00;
$product->quantity = 90;
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/lampa-abazur-diament-plafon-wiele-kolorow.jpg";
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
$product->name = [$default_lang => "Lampa Wisząca Abażur Okrągły Liście Koronka Pojedyncza"];
$product->link_rewrite = [$default_lang => "lampa-wiszaca-abazur-okragly-liscie-koronka-pojedyncza"];
$product->price = 59.00;
$product->quantity = 90;
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/lampa-wiszaca-abazur-okragly-liscie-koronka-pojedyncza.jpg";
$product->image_url = $url;
$product->description = "Lampa wisząca okrągły abażur w liście i koronkę
Lampa wisząca z abażurem stanie się oryginalną dekoracją Twoich wnętrz. Abażur w zielone liście pasuje do pomieszczeń w stylu nowoczesnym, a klosz z białą koronką świetnie prezentuje się również w nieco bardziej klasycznych aranżacjach.
W jakich pomieszczeniach najlepiej prezentuje się lampa z abażurem?
Lampa może stać oświetleniem do kuchni, pokoju młodzieżowego, sypialni czy jadalni. Pasuje wszędzie tam, gdzie panuje nowoczesny lub minimalistyczny styl.
Jakie praktyczne funkcje posiada lampa wisząca z abażurem?
>Regulacja wysokości jest jedną z największych zalet lampy z abażurem. Funkcja ta umożliwia idealne dopasowanie oświetlenia do wymiarów pomieszczenia. Abażur lampy wykonany jest z wysokiej jakości materiału, który gwarantuje wytrzymałość i stylowy wygląd przez bardzo długi czas. Oświetlenie zasilane jest żarówkami o gwincie E27.
Abażury do wyboru:";
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
$product->name = [$default_lang => "Lampa Wisząca z Abażurem Dziecięce Wzory"];
$product->link_rewrite = [$default_lang => "lampa-wiszaca-z-abazurem-dzieciece-wzory"];
$product->price = 59.00;
$product->quantity = 90;
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/lampa-wiszaca-z-abazurem-dzieciece-wzory.jpg";
$product->image_url = $url;
$product->description = "Lampa wisząca abażur z wzorami dla dzieci
Lampa wisząca, która doda przytulności i podkreśli wesoły charakter pokoju Twojego dziecka. Abażury w z motywem uroczych niedźwiadków i zebr spodobają się wszystkim maluszkom.
Gdzie zawiesić niezwykłą lampę wiszącą dziecięcą?
Lampa doskonale sprawdzi jako oświetlenie do strefy zabaw w pokoju dziecka, nad biurko lub łóżko. Szary kolor abażura będzie znakomicie współgrał z wystrojem pomieszczenia. Abażur w urocze zwierzątka podoba się dzieciom w różnym przedziale wiekowym.
Jakie zalety posiada lampa wisząca dla dzieci?
Lampa posiada opcję regulacji wysokości, dzięki czemu idealnie dopasuje się do wymiaru urządzanego pomieszczenia. Oświetlenie zostało wykonane z najwyższej jakości tworzyw, co gwarantuje radość z użytkowania lampy na długi czas. Lampa wisząca dziecięca zasilana jest żarówkami E27.";
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
$product->name = [$default_lang => "Lampa Dziecięca Wisząca z Abażurem"];
$product->link_rewrite = [$default_lang => "lampa-dziecieca-wiszaca-z-abazurem"];
$product->price = 75.00;
$product->quantity = 90;
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/lampa-dziecieca-wiszaca-z-abazurem.jpg";
$product->image_url = $url;
$product->description = "Lampa dziecięca wisząca stożkowy abażur dziewczynki
Lampa z abażurem sprawi, że Twoje dziecko będzie uwielbiać swój pokój! Abażur z tańczącą dziewczynką w pięknych sukniach rozkocha w sobie każdą małą królewnę.
Gdzie najlepiej zawiesić lampę dziecięcą z abażurem?
Lampa wisząca z abażurem może posłużyć jako oświetlenie główne w pokoju dziecka. Znakomicie nada się jako lampa oświetlająca strefę zabawy. Tło abażura jest białe, dzięki czemu będzie pasować do każdego koloru panującego w pokoju. Dziewczynka na kloszu ma ubrania w różowym kolorze – ulubionej barwie małych księżniczek.
Jakie praktyczne funkcje posiada lampa wisząca dla dziewczynki?
Lampa ma regulowaną wysokość, co umożliwia perfekcyjne dopasowanie oświetlenie do rozmiaru pomieszczenia. Stożkowy abażur lampy wykonany jest z solidnego, odpornego na uszkodzenia materiału wysokiej jakości. Lampę wisząca zasilaj żaówkami E27.";
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
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/nowoczesna-lampa-wiszaca-z-abazurem-metalowa-dekoracja.jpg";
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
$product->name = [$default_lang => "Lampka Nocna Nowoczesna Abażur Diament Loft"];
$product->link_rewrite = [$default_lang => "lampka-nocna-nowoczesna-abazur-diament-loft"];
$product->price = 59.00;
$product->quantity = 90;
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/lampka-nocna-nowoczesna-abazur-diament-loft.jpg";
$product->image_url = $url;
$product->description = "Lampka stołowa nocna z abażurem w kształcie diamentu
Designerskie oświetlenie, które nada pomieszczeniu nowoczesnego i jednocześnie przytulnego charakteru. Wiele kolorów konstrukcji i abażurów do wyboru pozwala na idealne dopasowanie lampy nocnej do wystroju wnętrz.
W jakich pomieszczeniach lampka stołowa z abażurem prezentuje się najlepiej?
Nowoczesna lampka stołowa fantastycznie wygląda w sypialni. Możesz postawić ją obok łóżka, dzięki czemu będzie pełniła funkcje oświetlenia nocnego. Posłuży Ci przy wykonywaniu wieczornych i porannych czynności oraz nada magicznego klimatu w chwilach relaksu. Zasil lampkę nocną żarówkami dekoracyjnymi o ciepłej barwie światła, które najlepiej oddadzą wypoczynkowy charakter sypialni.
Lampka stołowa pasuje również do innych pomieszczeń, w których zależy Ci na ciepłym. relaksacyjnym świetle. Lampę możesz postawić w salonie, jadalni czy przedpokoju. Lampka z abażurem postawiona na komodzie lub szafce doda przytulności wnętrzom oraz będzie stylowym oświetleniem dekoracyjnym.
Jakie praktyczne funkcje posiada nowoczesna lampa stołowa?
Lampka pięknie prezentuje się z każdym stylem wnętrzarskim. Ponadto posiada aż trzy kolory konstrukcji i dziesięć wzorów abażura. Dzięki temu wybranie lampki nocnej idealnie dopasowanej do wnętrza jest jeszcze prostsze.
Lampa wykonana jest z trwałych i odpornych na uszkodzenia tworzyw. Konstrukcja jest metalowa, a abażur został wykonany ze specjalnego materiału o wysokiej jakości. Do lampki nocnej pasują żarówki E27.";
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
$product->name = [$default_lang => "Stylowa Lampka Nocna Biurkowa Abażur Diament"];
$product->link_rewrite = [$default_lang => "stylowa-lampka-nocna-biurkowa-abazur-diament"];
$product->price = 89.00;
$product->quantity = 90;
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/stylowa-lampka-nocna-biurkowa-abazur-diament.jpg";
$product->image_url = $url;
$product->description = "Stylowa lampka nocna stołowa z abażurem diament
Lampka nocna, która podkreśli charakter Twoich wnętrz i doda im przytulności. Lampa stołowa została wykonana w wielu wersjach kolorystycznych, byś mógł idealnie dopasować ją do aranżacji pomieszczenia.
W jakich pomieszczeniach lampka z abażurem w kształcie diamentu wygląda najlepiej?
Oświetlenie dedykowane jest do sypialni, gdzie postawione na szafce nocnej przy łóżku pełni funkcje światła dekoracyjnego. Sprzyja również odpoczynkowi i ułatwia wykonywanie porannych oraz wieczornych rytuałów.
Dzięki designowi lampki stołowej, który pasuje do każdego stylu wnętrzarskiego oraz wielu kolorom do wyboru, oświetlenie znajdzie zastosowanie również w wielu innych pomieszczeniach niż sypialnia. Nowoczesna lampa pasuje do salonu, pokoju dziecięcego, jadalni czy gabinetu. Oświetlenie może pełnić w tych pomieszczeniach role dekoracyjne oraz nadawać magiczny nastrój swoim światłem.
Czy lampa stołowa z materiałowym abażurem jest funkcjonalna?
Oczywiście, że tak! Lampka posiada solidną metalową konstrukcję, a abażur wykonany jest z wysokiej jakości materiału odpornego na uszkodzenia. Oświetlenie zasilane jest włącznikiem – wyłącznikiem na przewodzie, który umożliwia komfortowe korzystanie z lampki nocnej.";
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
$product->name = [$default_lang => "Nowoczesna Lampka Nocna Stołowa Trójnóg do Sypialni"];
$product->link_rewrite = [$default_lang => "nowoczesna-lampka-nocna-stolowa-trojnog-do-sypialni"];
$product->price = 89.00;
$product->quantity = 90;
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/nowoczesna-lampka-nocna-stolowa-trojnog-do-sypialni.jpg";
$product->image_url = $url;
$product->description = "Designerska lampka nocna trójnóg z abażurem w kształcie stożka
Stylowa lampka na stół lub szafkę nocną, która zachwyca swoim designem. Prosta konstrukcja i materiałowy, stożkowy abażur tworzą połączenie, które pasuje do nowoczesnych, klasycznych wnętrz jak i wystrojów w stylu skandynawskim.
Gdzie najlepiej prezentuje się lampka nocna trójnóg z abażurem?
Najbardziej powszechne zastosowanie oświetlenia to postawienie go na szafce nocnej w sypialni. Jednak lampa z abażurem może również dekorować salon, jadalnię czy przedpokój. Zasil lampkę nocną ciepłym, przyjemnym światłem, dzięki czemu stworzysz nastrojowy klimat sprzyjający wypoczynkowi.
Wybór lampki pasującej do wystroju pomieszczenia, jest niezwykle łatwy. Posiadamy trzy rodzaje konstrukcji oraz cztery kolory abażura. Trójnóg w wersji chrom doda wnętrzom elegancji i nowoczesności. Natomiast uniwersalna czerń i biel pasuje do każdej aranżacji pomieszczenia.
Abażury również zostały wykonane w uniwersalnych kolorach, które z powodzeniem dopasujesz do każdego wystroju. Biały, jasnoszary, ciemnoszary i czarny – podstawowe barwy, które zawsze znajdą zastosowanie w aranżacji wnętrz.
Czy lampka nocna ze stożkowym abażurem posiada przydatne funkcje?
Lampa wykonana jest z wytrzymałych tworzyw charakteryzujących się wysoką odpornością na uszkodzenia. Abażur stworzony jest z materiału, a konstrukcja z metalu. Dedykowanymi żarówkami do lampy stołowej są źródła światła o tradycyjnym gwincie E27.";
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
$product->name = [$default_lang => "Lampka Nocna Loft do Sypialni Abażur Stożek"];
$product->link_rewrite = [$default_lang => "lampka-nocna-loft-do-sypialni-abazur-stozek"];
$product->price = 59.00;
$product->quantity = 90;
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/lampka-nocna-loft-do-sypialni-abazur-stozek.jpg";
$product->image_url = $url;
$product->description = "Lampka nocna stołowa ze stożkowym abażurem do sypialni
Niezwykła lampka nocna, która jest połączeniem kilku stylów – nowoczesnego, industrialnego i klasycznego. Dzięki temu oświetlenie znakomicie komponuje się z większością aranżacji wnętrz. Lampa stołowa posiada trzy kolory konstrukcji oraz cztery wzory abażura do wyboru, dzięki czemu z łatwością dobierzesz oświetlenie oddające charakter Twoich wnętrz.
Do jakich wnętrz pasuje lampka nocna z abażurem?
Nowoczesny, a zarazem przytulny wygląd lampki stołowej najlepiej sprawdzi się w sypialni. Oświetlenie postawione na szafce nocnej przy łóżku ułatwi wykonywanie porannych i wieczornych czynności oraz podkreśli wyjątkowy charakter pomieszczenia.
Lampa łączy w sobie nowoczesność z klasycznym designem. Konstrukcja lampki nocnej zachowana jest w loftowym klimacie, a stożkowy abażur nadaje całości neutralności, dzięki czemu oświetlenie znakomicie prezentuje się w każdym stylu wnętrzarskim.
Niewielka lampka może zostać oświetleniem dekoracyjnymi salonu, gabinetu lub jadalni. Lampę postaw na komodzie czy szafce, które chcesz uwidocznić ciepłym, dekoracyjnym światłem. Prezentowana lampka idealnie sprawdzi się roli oświetlenia ozdobnego.
Czy lampka stołowa ze stożkowym abażurem posiada praktyczne funkcje?
Lampa dostępna jest w kilku wersjach kolorystycznych, co pozwala dobrać oświetlenie idealnie pod wystrój pomieszczenia. Konstrukcja wykonana jest z metalu, dzięki czemu lampa jest wytrzymała i posłuży Ci na długi czas. Abażur wykonany jest ze specjalnego materiału, który będzie wyglądał nieskazitelnie przez wiele lat. Lampka nocna posiada włącznik – wyłącznik, który zapewnia komfortowe użytkowanie oświetlenia. Do lampy stołowej pasują żarówki o standardowym gwincie E27.";
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
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/lampa-wiszaca-z-abazurem-kolorowa-nowoczesna.jpg";
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
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/nowoczesna-lampa-wiszaca-duzy-abazur.jpg";
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
$product->name = [$default_lang => "Lampa Wisząca dla Dzieci Pojedyncza z Abażurem"];
$product->link_rewrite = [$default_lang => "lampa-wiszaca-dla-dzieci-pojedyncza-z-abazurem"];
$product->price = 29.99;
$product->quantity = 90;
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/lampa-wiszaca-dla-dzieci-pojedyncza-z-abazurem.jpg";
$product->image_url = $url;
$product->description = "Lampa wisząca z abażurem do pokoju dziecięcego
Niezwykła lampa z abażurem, która zachwyca wyjątkowym wyglądem oraz funkcjonalnością. Abażur oświetlenia został wykonany w bardzo efektowny sposób – przypomina kartkę z zeszytu z wesołymi rysunkami najmłodszych. Ta koncepcja spodoba się naszym maluchom oraz świetnie dopasuje się do każdego wystroju pokoju dziecka.
Gdzie najlepiej zawiesić lampę dziecięcą z abażurem w rysunki?
Lampa możesz zostać oświetleniem głównym w pokoju dziecka. Zawieś pojedynczy zwis wiszący w centralnym punkcie pokoju, dzięki czemu posłuży maluchowi do gier i zabaw. Lampa wisząca z abażurem nadaje się również do przedszkoli, szkół czy bawialni dla dzieci.
Abażur lampy wiszącej dziecięcej jest biały, pokryty wielokolorowymi rysunkami. Dzięki takiemu połączeniu barw lampa będzie pasować zarówno do pokoju dziewczynki jak i chłopca, niezależnie od kolorów panujących w tych wnętrzach.
Jakie praktyczne funkcje posiada lampa sufitowa z abażurem dla dzieci?
Największą zaletą lampy dziecięcej jest możliwość regulacji wysokości. Dzięki tej funkcji z łatwością dostosujesz lampę do rozmiarów pokoju. Abażur oświetlenia dziecięcego został wykonany z wysokiej jakości materiału. Natomiast linka i konstrukcja lampy wykonane są z niezawodnego tworzywa sztucznego. Do oświetlenia pasują najpopularniejsze typy żarówek E27.";
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
$product->name = [$default_lang => "Lampa Wisząca do Pokoju Dziecka Abażury we Wzory"];
$product->link_rewrite = [$default_lang => "lampa-wiszaca-do-pokoju-dziecka-abazury-we-wzory"];
$product->price = 99.00;
$product->quantity = 90;
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/lampa-wiszaca-do-pokoju-dziecka-abazury-we-wzory.jpg";
$product->image_url = $url;
$product->description = "Lampa dziecięca z abażurem w rysunki 2 źródła zasilania
Niezwykła lampa wisząca z abażurem, która przyprawi o uśmiech nie tylko najmłodszych. Klosze oświetlenia wyglądem przypominają kartkę z zeszytu, na której widnieją urocze rysunki maluchów. Dodatkową dekoracją pokoju dziecka będzie diamentowy kształt abażurów.
W jakich pomieszczeniach najlepiej będzie wyglądać lampa sufitowa z abażurami w rysunki?
Lampa dedykowana jest do pokoju dziecka, ale znakomicie sprawdzi się również w przedszkolach, świetlicach czy szkołach.
W pokoju lampa dziecięca może pełnić rolę oświetlenia głównego. Wystarczy, że zawiesisz lampę w środkowym punkcie pomieszczenia. Wtedy żyrandol z powodzeniem oświetli równomiernie cały pokój malucha, towarzysząc mu na przykład przy zabawach.
Jakie funkcjonalności posiada lampa dziecięca z oryginalnymi abażurami?
Lampa wisząca posiada regulację wysokości. Pozwala to na efektowne zawieszenie dwóch abażurów lampy na różnych poziomach i dopasowanie oświetlenia do rozmiaru pomieszczenia. Lampa wisząca dziecięca została wykonana z bezpiecznych i trwałych materiałów, dzięki czemu oświetlenie będzie dekoracją w pokoju na bardzo długi czas. Do oświetlenia pasują popularne żarówki o gwincie E27. Lampa posiada możliwość podłączenia pod podwójny przełącznik.";
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
$product->name = [$default_lang => "Lampa Wisząca Dziecięca Sufitowa Abażury Regulacja"];
$product->link_rewrite = [$default_lang => "lampa-wiszaca-dziecieca-sufitowa-abazury-regulacja"];
$product->price = 119.00;
$product->quantity = 90;
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/lampa-wiszaca-dziecieca-sufitowa-abazury-regulacja.jpg";
$product->image_url = $url;
$product->description = "Lampa wisząca sufitowa dla dzieci w rysunki
Funkcjonalna i oryginalna lampa wisząca, która doda jeszcze więcej radości do pokoju dziecka. Abażury w kształcie diamentu przypominają kartkę z zeszytu, na której widzimy zabawne rysunki naszych maluchów. Lampa dziecięca spodoba się zarówno chłopcu jak i dziewczynce oraz znakomicie dopasuje się do kolorów panujących w pokoju.
Gdzie najlepiej prezentuje się niezwykła regulowana lampa 3-płomienna wisząca?
Żyrandol możesz zawiesić w pokoju dziecka, przedszkolu, bawialni czy świetlicy. Różnokolorowe rysunki na białych abażurach sprawiają, że oświetlenie komponuje się ze wszystkimi wystrojami pokoi.
Jakie zalety posiada lampa sufitowa z abażurami w dziecięce wzory?
Praktyczną funkcją lampy wiszącej dziecięcej jest regulowana wysokość. Dzięki niej możemy zawiesić każdy abażur na innym poziomie oraz idealnie dopasować oświetlenie do rozmiaru pokoju. Lampa z abażurem stworzona jest z trwałych, odpornych na uszkodzenia materiałów. Do oświetlenia dobierz źródła światła o gwincie E27. Lampa posiada możliwość podłączenia pod podwójny przełącznik.";
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
$product->name = [$default_lang => "Lampa Wisząca Żyrandol Dziecięcy Abażury we Wzory"];
$product->link_rewrite = [$default_lang => "lampa-wiszaca-zyrandol-dzieciecy-abazury-we-wzory"];
$product->price = 119.00;
$product->quantity = 90;
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/lampa-wiszaca-zyrandol-dzieciecy-abazury-we-wzory.jpg";
$product->image_url = $url;
$product->description = "Lampa wisząca żyrandol dziecięcy we wzory rysunki
Wprowadź do pokoju swojego malucha więcej radości i wesołych akcentów. Lampa wisząca z abażurami w dziecięce rysunki świetnie Ci w tym pomoże. Żyrandol spodoba się chłopcom, dziewczynkom oraz przyprawi o uśmiech niejednego dorosłego.
Gdzie najlepiej zawiesić lampę regulowaną 3-płomienną w rysunki?
Lampa wisząca jest znakomitą propozycją oświetlenia do pokoju dziecka. Może zawisnąć nad łóżeczkiem, stolikiem, biurkiem lub w centralnym punkcie pomieszczenia. Oryginalne abażury lampy pięknie ozdobią również bawialnie dla dzieci, świetlice czy przedszkola.
Jakie funkcjonalności posiada lampa wisząca z abażurami dla dzieci?
Największą zaletą lampy wiszącej dziecięcej jest regulowana wysokość, która umożliwia zawieszenie abażurów na różnych poziomach oraz dostosowanie oświetlenia do wymiaru pomieszczenia. Do lampy dziecięcej pasują wszystkie typy żarówek E27. Abażury zostały wykonane ze solidnego materiału, a konstrukcja i linka lampy sufitowej z odpornego na uszkodzenia tworzywa sztucznego. Lampa posiada możliwość podłączenia pod podwójny przełącznik.";
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
$product->name = [$default_lang => "Lampka Mocna z Abażurem w Dziecięce Wzory"];
$product->link_rewrite = [$default_lang => "lampka-mocna-z-abazurem-w-dzieciece-wzory"];
$product->price = 89.00;
$product->quantity = 90;
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/lampka-mocna-z-abazurem-w-dzieciece-wzory.jpg";
$product->image_url = $url;
$product->description = "Lampka nocna dziecięca abażur w rysunki
Niezwykła lampka nocna, która wywoła uśmiech na twarzy każdego malucha. Lampa posiada abażur w kształcie diamentu, na którym widnieją kolorowe, dziecięce rysunki. Oświetlenie może dekorować zarówno pokój chłopca jak i dziewczynki.
Gdzie najlepiej będzie prezentować się lampka stołowa z abażurem we wzory?
Lampkę najlepiej postawić na szafce nocnej tuż przy łóżku dziecka. Posłuży ona maluchowi jako oświetlenie do czytania bajek przed snem. Lampę dziecięcą możesz postawić również na komodzie lub biurku, co pięknie udekoruje pokój.
Do lampki stołowej możesz dobrać lampy wiszące z tymi samymi abażurami. Na przykład lampa wisząca żyrandol dziecięcy abażury we wzory idealnie sprawdzi się w roli oświetlenia głównego, zawieszonego w centralnym punkcie pokoju.
Czy lampka nocna z abażurem posiada praktyczne funkcje?
Lampka posiada włącznik-wyłącznik na przewodzie, dzięki czemu oświetlenie jest funkcjonalne w obsłudze. Abażur został wykonany z materiału, który odpowiada za niezmienny wygląd klosza przez długie lata. Konstrukcje i przewody stworzone są z bezpiecznego i trwałego metalu. Do lampy dziecięcej z łatwością dobierzesz źródło światła, ponieważ pasują do niej wszystkie typy żarówek E27.";
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
$product->name = [$default_lang => "Lampka Stołowa Nocna Dziecięca Abażur Metal"];
$product->link_rewrite = [$default_lang => "lampka-stolowa-nocna-dziecieca-abazur-metal"];
$product->price = 59.00;
$product->quantity = 90;
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/lampka-stolowa-nocna-dziecieca-abazur-metal.jpg";
$product->image_url = $url;
$product->description = "Lampka nocna stołowa z abażurem w dziecięce wzory
Nowoczesna lampka nocna stanie się największą dekoracją pokoju dziecka. Minimalistyczna konstrukcja o ciekawym kształcie w połączeniu z abażurem przypominającym zeszyt z rysunkami dzieci tworzą niezwykle efektowny duet.
Gdzie najlepiej postawić designerską lampkę stojącą z abażurem w rysunki?
Lampa z abażurem najlepiej sprawdzi się w roli oświetlenia nocnego postawionego przy łóżku dziecka. Światło lampki będzie ułatwiać maluchowi zasypianie i posłuży do wieczornego czytania bajek.
Lampę dziecięcą możesz również postawić na biurku, szafce lub komodzie. W ten sposób lampa będzie stanowić część wystroju pokoju. Jeśli chcesz stworzyć spójną aranżację, dodaj do lampki nocnej oświetlenie wiszące z tymi samymi wesołymi abażurami. Lampa wisząca dziecięca sufitowa abażury regulacja może pełnić rolę światła głównego w pokoju malucha.
Jakie zalety posiada efektowna lampa biurkowa dziecięca z abażurem?
Lampa posiada solidną konstrukcję wykonaną z metalu i abażur z wysokiej jakości materiału, dzięki czemu będzie ozdabiać pokój dziecka przez długi czas. Oświetlenie posiada wygodny włącznik-wyłącznik na przewodzie. Lampę dla dziecka zasilisz źródłami światła o popularnym gwincie E27.";
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
$product->name = [$default_lang => "Lampa Wisząca Pojedyncza Dziecięce Wzory Abażurów"];
$product->link_rewrite = [$default_lang => "lampa-wiszaca-pojedyncza-dzieciece-wzory-abazurow"];
$product->price = 29.99;
$product->quantity = 90;
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/lampa-wiszaca-pojedyncza-dzieciece-wzory-abazurow.jpg";
$product->image_url = $url;
$product->description = "Lampa wisząca dziecięca pojedyncza wiele abażurów
Prezentowana lampa wisząca wywoła uśmiech na twarzy nie tylko u dzieci, ale również u niejednego dorosłego. Dostępne wzory abażurów to urocze, wesołe motywy, które staną się główną dekoracją pokoju dziecięcego.
Gdzie najlepiej zawiesić regulowaną lampę wiszącą z abażurem?
Zwis wiszący może zostać oświetleniem głównym lub dekoracyjnym w pokoju dziecka. Lampę wiszącą z abażurem możesz również zawiesić na łóżeczkiem malucha. Oświetlenie nadaje się też do szkół, przedszkoli, świetlic czy bawialni dla dzieci.
Wśród siedmiu wzorów abażura do wyboru z pewnością znajdziesz taki, który zachwyci Twoje dziecko. Urocze pandy, flamingi, zakochane kotki, baletnice czy gwiazdki – dopasujesz abażur zarówno do pokoju dziewczynki jak i chłopca. Dodatkowo klosze zachowane są w stonowanych kolorach, aby komponowały się z każdym wystrojem pomieszczenia.
Jednym z wariantów zwisu wiszącego pojedynczego z abażurem jest klosz we flamingi. Taką lampę możesz zawiesić również w kuchni, pokoju młodzieżowym czy sypialni. Flamingi są obecnie bardzo modnym motywem wielu dekoracji do domu.
Jakie zalety posiada lampa wisząca dla dzieci z abażurem we wzory?
Lampa dziecięca posiada możliwość regulacji wysokości, co pozwala na idealne dostosowanie oświetlenia do rozmiaru wnętrza. Lampa wykonana jest z bezpiecznych i trwałych materiałów, które zapewniają nienaganny wygląd oświetlenia na długi czas. Oświetlenie zasilane jest żarówkami E27.";
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
$product->name = [$default_lang => "Lampa Wisząca Sufitowa Regulowana Dziecięca Abażury"];
$product->link_rewrite = [$default_lang => "lampa-wiszaca-sufitowa-regulowana-dziecieca-abazury"];
$product->price = 119.00;
$product->quantity = 90;
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/lampa-wiszaca-sufitowa-regulowana-dziecieca-abazury.jpg";
$product->image_url = $url;
$product->description = "Lampa wisząca 3-płomienna z abażurami w dziecięce wzory
Niezwykła lampa sufitowa, która wprowadzi jeszcze więcej radości do pokoju dziecięcego. Lampa wisząca posiada trzy kolory konstrukcji i siedem wzorów abażura do wyboru, które możesz dowolnie ze sobą łączyć. Dzięki temu samodzielnie stworzysz oświetlenie najbardziej odpowiadające Twojemu dziecku.
Gdzie zawiesić efektowną lampę regulowaną z abażurami we wzory?
Lampa dziecięca znakomicie sprawdzi się w roli oświetlenia głównego w pokoju malucha. Posiada trzy źródła zasilania, dzięki czemu dokładnie oświetli całe pomieszczenie.
Wśród dostępnych wzorów z pewnością znajdziesz abażur, który pokocha Twoje dziecko. Posiadamy klosze we flamingi, pandy, kotki, baletnice i gwiazdki. Jeśli nie możesz zdecydować się na jeden wzór, zamów trzy różne abażury i stwórz własną, niezwykłą kompozycję.
Czy lampa z abażurem dla dzieci posiada praktyczne funkcje?
Największym atutem lampy z abażurem jest regulowana wysokość. Funkcja ta pozwala na dopasowanie oświetlenia do rozmiaru wnętrza oraz na efektowne zawieszenie abażurów lampy na różnych poziomach. Konstrukcja lampy dla dziecka wykonana jest z odpornego na uszkodzenia metalu, a abażury z trwałego materiału. Oświetlenie dziecięce zasilane jest najpopularniejszymi żarówkami o gwincie E27. Lampa posiada możliwość podłączenia pod podwójny przełącznik.";
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
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/lampa-sufitowa-dzieciecy-zyrandol-z-abazurami-regulowany.jpg";
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
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/lampa-wiszaca-na-listwie-sufitowa-abazury.jpg";
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
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/lampa-wiszaca-z-abazurem-klasyczna-regulowana.jpg";
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
$product->name = [$default_lang => "Nowoczesny Kinkiet z Abażurem Lampa na Ścianę"];
$product->link_rewrite = [$default_lang => "nowoczesny-kinkiet-z-abazurem-lampa-na-sciane"];
$product->price = 59.00;
$product->quantity = 90;
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/nowoczesny-kinkiet-z-abazurem-lampa-na-sciane.jpg";
$product->image_url = $url;
$product->description = "Kinkiet lampa ścienna z abażurem nowoczesny
Klasyczny kinkiet z abażurem, który znakomicie wpisuje się również w trendy stylu nowoczesnego. Posiadamy wiele wariantów kolorystycznych abażurów i konstrukcji, dzięki czemu możesz stworzyć oświetlenie idealnie dopasowane do wystroju Twojego mieszkania.
W jakich wnętrzach najlepiej wygląda kinkiet w wielu kolorach do wyboru?
Oświetlenie na ścianę pasuje do salonu, sypialni, kuchni, jadalni czy gabinetu. Kinkiet znakomicie sprawdzi się jako lampa punktowa, przykładowo możesz zamontować oświetlenie koło kanapy, na której czytasz książki. Uzyskasz w ten sposób praktyczny kinkiet do wieczornego relaksu, którego światło ułatwi Ci czytanie.
Jakie praktyczne funkcje posiada lampa na ścianę z materiałowym abażurem?
Konstrukcja oświetlenia ściennego została wykonana z metalu malowanego proszkowo, co zapewnia trwałość kinkietu na długi czas. Abażur stworzony jest z materiału, który gwarantuje niezmienny wygląd oświetlenia przez wiele lat. Do lampy z abażurem z łatwością dobierzesz żarówki, ponieważ pasują do niej źródła światła o popularnym gwincie E27.";
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
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/lampa-wiszaca-sufitowa-z-abazurem-nowoczesna-pojedyncza.jpg";
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
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/lampa-wiszaca-zyrandol-regulowana-abazury.jpg";
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
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/lampa-wiszaca-nowoczesna-na-listwie-abazury-sufitowa.jpg";
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
$product->name = [$default_lang => "Kinkiet Nowoczesny z Abażurem Wiele Kolorów Lampa"];
$product->link_rewrite = [$default_lang => "kinkiet-nowoczesny-z-abazurem-wiele-kolorow-lampa"];
$product->price = 59.00;
$product->quantity = 90;
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/kinkiet-nowoczesny-z-abazurem-wiele-kolorow-lampa.jpg";
$product->image_url = $url;
$product->description = "Lampa ścienna kinkiet z abażurem różne kolory
Nowoczesny kinkiet, który dopasuje się do wystroju Twoich wnętrz. Abażur lampy ściennej dostępny jest pięciu wariantach kolorystycznych oraz z trzema kolorami konstrukcji, dzięki czemu stworzysz kinkiet idealnie oddający piękno Twoich wnętrz.
Gdzie najlepiej zamontować stylowy kinkiet metalowy z materiałowym abażurem?
Oświetlenie ścienne może zostać dekoracją Twojego salonu, sypialni, jadalni, kuchni lub biura. Kinkiety znakomicie sprawdzają się w roli lamp pobocznych, wspomagających oświetlenie główne.
Jeśli chcesz stworzyć spójną, dopasowaną aranżację wnętrz, dodaj do kinkietu oświetlenie wiszące w takim samym stylu. Na przykład lampa wisząca nowoczesna na listwie abażury sufitowa stworzy z prezentowanym kinkietem stylową aranżację pomieszczenia.
Czy kinkiet posiada przydatne funkcjonalności?
Konstrukcja kinkietu z abażurem została wykonana z metalu, który zapewnia trwałość i odporność na uszkodzenia. Natomiast abażur stworzony jest z najwyższej jakości tkaniny. Do kinkietu pasują popularne źródła światła E27.";
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
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/lampa-wiszaca-pojedyncza-regulowana-nowoczesna-abazur.jpg";
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
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/lampa-regulowana-wiszaca-sufitowa-abazur-material.jpg";
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
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/nowoczesna-lampa-wiszaca-z-abazurem-zarowka.jpg";
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
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/lampa-wiszaca-sufitowa-abazur-pojedyncza-regulacja.jpg";
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
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/lampa-z-abazurem-wiszaca-nowoczesna-wiele-kolorow.jpg";
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
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/lampa-wiszaca-dziecieca-abazur-wiele-wzorow.jpg";
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
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/lampa-wiszaca-nowoczesna-modne-abazury.jpg";
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
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/lampa-wiszaca-sufitowa-abazur-w-modne-wzory-regulacja.jpg";
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
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/lampa-wiszaca-z-abazurem-w-tropikalne-wzory-nowoczesna.jpg";
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
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/lampa-wiszaca-nowoczesna-abazur-kwiaty-koronka.jpg";
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
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/nowoczesna-lampa-dziecieca-z-abazurem-pajak.jpg";
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
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/lampa-wiszaca-do-pokoju-dziecka-abazur-nowoczesna.jpg";
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
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/lampa-wiszaca-zyrandol-z-abazurami-do-pokoju-dziecka.jpg";
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
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/lampa-wiszaca-sufitowa-dla-dzieci-zyrandol-z-abazurami.jpg";
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
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/lampa-wiszaca-pajak-z-abazurami-w-dzieciece-wzory-zyrandol.jpg";
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
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/lampa-sufitowa-wiszaca-z-abazurem-pojedyncza.jpg";
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
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/nowoczesna-lampa-wiszaca-pajak-z-abazurami-zyrandol.jpg";
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
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/lampa-wiszaca-zyrandol-z-abazurami-designerska-sufitowa.jpg";
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
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/lampa-wiszaca-z-abazurami-nowoczesny-zyrandol.jpg";
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
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/nowoczesna-lampa-wiszaca-abazury-diament-zyrandol.jpg";
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
$product->name = [$default_lang => "Lampa Wisząca Pojedyncza Abażur Stożek Pokój Dziecka"];
$product->link_rewrite = [$default_lang => "lampa-wiszaca-pojedyncza-abazur-stozek-pokoj-dziecka"];
$product->price = 75.00;
$product->quantity = 90;
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/lampa-wiszaca-pojedyncza-abazur-stozek-pokoj-dziecka.jpg";
$product->image_url = $url;
$product->description = "Lampa wisząca dziecięca abażur regulacja wysokości
Szukasz lampy dziecięcej, która funkcjonalnie oświetli pokój i przypadnie do gustu Twojemu maluchowi? Mamy oświetlenie idealne dla Ciebie. Zwis wiszący posiada aż osiem wzorów abażura do wyboru, dzięki czemu na pewno wybierzesz motyw, który spodoba się Tobie i Twojemu dziecku.
Gdzie najlepiej prezentuje się nowoczesna lampa regulowana z abażurem?
Oświetlenie dedykowane jest do pokoju dziecka, lecz niektóre z dostępnych wzorów pasować będą również do innych pomieszczeń w domu, na przykład kuchni lub sypialni. Abażury we flamingi i kwiaty to motywy, które modnie udekorują nie tylko pokój najmłodszych.
Lampa z abażurem z motywem baletnicy to doskonała propozycja do pokoju małej księżniczki. Natomiast klosz w gwiazdki będzie pasować zarówno do wystroju pokoju chłopca, dziewczynki jak i najmłodszych maluszków. Abażury żyrandola są zachowane w biało-szarej kolorystyce z kontrastowymi, wesołymi barwami. Dzięki temu połączeniu lampa wisząca dziecięca dopasuje się do każdej aranżacji wnętrza.
Jakie zalety posiada lampa wisząca pojedyncza dziecięca z abażurem?
Ogromną zaletą lampy sufitowej jest regulacja wysokości. Dzięki niej oświetlenie pasuje zarówno do małego jak i bardziej przestronnego pokoju. Abażury wykonane są z odpornej na zabrudzenia tkaniny. Konstrukcja lampy stworzona z tworzywa sztucznego. Do oświetlenia z łatwością dobierzesz źródła światła, ponieważ pasują do niego najpopularniejsze żarówki E27.";
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
$product->name = [$default_lang => "Lampa Podłogowa Stojąca z Abażurem 35 cm LED"];
$product->link_rewrite = [$default_lang => "lampa-podlogowa-stojaca-z-abazurem-35-cm-led"];
$product->price = 149.00;
$product->quantity = 90;
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/lampa-podlogowa-stojaca-z-abazurem-35-cm-led.jpg";
$product->image_url = $url;
$product->description = "Klasyczna lampa stojąca z abażurem wiele kolorów do wyboru
Przedstawiamy lampę podłogową, która oświetli i udekoruje pomieszczenia w każdym stylu. Prosta konstrukcja i materiałowy abażur z ozdobnym paskiem tworzą niezwykle eleganckie oświetlenie, które wspaniale wygląda zarówno w klasycznych jak i nowoczesnych aranżacjach.
W jakich pomieszczeniach lampa podłogowa pojedyncza z materiałowym abażurem wygląda najlepiej?
Kuchnia, jadalnia, sypialnia, salon, pokój dziecka bądź gabinet – prezentowana lampa stojąca pasuje wszędzie tam, gdzie potrzebujesz funkcjonalnego oświetlenia wspomagającego. Jeśli postawisz lampę koło kanapy bądź łóżka, uzyskasz praktyczne oświetlenie do czytania i relaksu. Lampa z abażurem posiada trzy kolory konstrukcji do wyboru – biały, czarny i szary. Możesz łączyć je z następującymi barwami kloszy: białym, kremowym, jasnoszarym, ciemnoszarym i czarnym. Dzięki wielu wariantom kolorystycznym, jakie możesz stworzyć, lampa podłogowa idealnie odda charakter Twoich wnętrz..
Jakie zalety posiada nowoczesna lampa stojąca z abażurem?
Konstrukcja lampy podłogowej wykonana jest metalu, który odpowiada za trwałość i niezawodność oświetlenia. Abażur stworzony jest z odpornego na zabrudzenia materiału. Lampa posiada włącznik-wyłącznik nożny, dzięki któremu oświetlenie jest proste i wygodne w obsłudze. Do lampy pasują wszystkie źródła światła z gwintem E27.";
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
$product->name = [$default_lang => "Klasyczna Lampa Podłogowa Stojąca LED Abażur 40 cm"];
$product->link_rewrite = [$default_lang => "klasyczna-lampa-podlogowa-stojaca-led-abazur-40-cm"];
$product->price = 149.00;
$product->quantity = 90;
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/klasyczna-lampa-podlogowa-stojaca-led-abazur-40-cm.jpg";
$product->image_url = $url;
$product->description = "Nowoczesna lampa podłogowa stojąca z abażurem w różnych kolorach
Lampa stojąca, która pasuje do każdego rodzaju wnętrza niezależnie od wystroju. Lampa dostępna jest w trzech kolorach konstrukcji oraz w pięciu kolorach abażurów. Dzięki wielu wariantom możesz samodzielnie stworzyć oświetlenie, które idealnie będzie komponować się z wystrojem Twoich wnętrz.
W jakich pomieszczeniach lampa podłogowa pojedyncza z abażurem prezentuje się najlepiej?
Oświetlenie stojące znakomicie wygląda zarówno w aranżacjach nowoczesnych jak i klasycznych. Lampę możesz zamieścić w sypialni przy łóżku, kuchni, salonie, pokoju dziecka bądź gabinecie. Lampa z abażurem może pełnić rolę oświetlenia wspomagającego oraz dekoracyjnego. Lampa postawiona tuż przy kanapie lub łóżku będzie znakomitym oświetleniem do czytania i odpoczynku.
Jakie praktyczne funkcje posiada klasyczna lampa podłogowa pojedyncza z abażurem?
Oświetlenie posiada włącznik-wyłącznik nożny, który sprawia, że lampa jest prosta i wygodna w obsłudze. Lampy stojące charakteryzują się tym, że nie musimy ich do niczego mocować. Dzięki temu możesz przestawiać oświetlenie w dowolne miejsce w domu. Konstrukcja nowoczesnej lampy podłogowej została stworzona z trwałego metalu, a abażury wykonane są z tkaniny odpornej na zabrudzenia i uszkodzenia. Do lampy stojącej pasują źródła światła E27.";
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
$product->name = [$default_lang => "Nowoczesna Lampa Wisząca z Abażurami Żyrandol LED"];
$product->link_rewrite = [$default_lang => "nowoczesna-lampa-wiszaca-z-abazurami-zyrandol-led"];
$product->price = 125.00;
$product->quantity = 90;
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/nowoczesna-lampa-wiszaca-z-abazurami-zyrandol-led.jpg";
$product->image_url = $url;
$product->description = "Lampa wisząca żyrandol regulowana abażury wiele kolorów
Klasyczna lampa wisząca o nowoczesnym charakterze. Żyrandol sufitowy z abażurami to funkcjonalne oświetlenie i wyjątkowa ozdoba do pomieszczeń stworzonych w każdym stylu wnętrzarskim. Lampa posiada trzy kolory konstrukcji i cztery kolory abażura do wyboru, dzięki czemu z łatwością skomponujesz oświetlenie idealnie pasujące do wystroju Twoich wnętrz.
W jakich pomieszczeniach lampa wisząca 3-płomienna z regulacją i abażurami wygląda najlepiej?
Lampa sufitowa prezentuje się nowocześnie, ale jednocześnie bardzo uniwersalnie. Dlatego możesz zawiesić ją zarówno w sypialni, salonie jak i kuchni, jadalni czy gabinecie. Lampa z abażurami zamontowana w centralnym punkcie pokoju równomiernie oświetli cały pokój. Jeżeli dodasz do aranżacji pomieszczenia prezentowaną lampę oraz inne żyrandole, stworzysz zestaw oświetleniowy, który będzie niezwykle praktyczny i efektowny.
Jakie zalety posiada nowoczesna lampa z abażurami w wielu kolorach?
Ogromnym atutem lampy jest regulacja wysokości, dzięki której dopasujesz żyrandol zarówno do wysokich pomieszczeń jak i małych pokoi. Konstrukcja oświetlenia wykonana jest z metalu malowanego proszkowo, dzięki czemu jest niezwykle trwała. Abażury stworzone są z tkaniny odpornej na uszkodzenia. Stonowane kolory lampy wiszącej nowoczesnej do wyboru znakomicie prezentują się w każdym rodzaju wnętrza. Do żyrandola pasują żarówki E27. Lampa posiada możliwość podłączenia pod podwójny przełącznik.";
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
$product->name = [$default_lang => "Lampa Sufitowa Wisząca Żyrandol Abażury Regulacja"];
$product->link_rewrite = [$default_lang => "lampa-sufitowa-wiszaca-zyrandol-abazury-regulacja"];
$product->price = 125.00;
$product->quantity = 90;
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/lampa-sufitowa-wiszaca-zyrandol-abazury-regulacja.jpg";
$product->image_url = $url;
$product->description = "Lampa wisząca żyrandol sufitowy 3-płomienny z abażurami
Lampa sufitowa nowoczesna, która doda Twoim wnętrzom elegancji. Dzięki trzem źródłom zasilania żyrandol dokładnie oświetli całe pomieszczenie. Regulowana wysokość pozwalają na perfekcyjne dopasowanie lampy do rozmiaru urządzanego pokoju.
Gdzie najlepiej zawiesić klasyczną lampę z abażurami 3-płomienną?
Salon, sypialnia, jadalnia, kuchnia, domowe biuro czy przedpokój – w każdym z tych pomieszczeń lampa wisząca będzie prezentować się rewelacyjnie. Konstrukcja i abażury oświetlenia dostępne są w odcieniach szarości, bieli i czerni. Te klasyczne kolory znakomicie łączą się ze wszystkimi innymi barwami. Jeśli chcesz dodać wnętrzom więcej oryginalności, wyreguluj abażury lampy w taki sposób, aby każdy z nich wisiał na innej wysokości. Ten prosty zabieg doda wyjątkowego charakteru pomieszczeniu.
Jakie praktyczne funkcje posiada klasyczna lampa sufitowa z abażurami?
Przydatną funkcją w lampie z abażurami jest regulowana wysokość, która pozwala na dostosowanie oświetlenia do rozmiaru wnętrza. Żyrandol sufitowy wykonany jest wytrzymałego metalu i wysokiej jakości tkaniny, dzięki czemu lampa będzie dekorowała Twoje pomieszczenie przez bardzo długi czas. Do lampy z łatwością dobierzesz żarówki, ponieważ pasują do niej najpopularniejsze źródła światła E27. Żyrandol posiada możliwość podłączenia pod podwójny przełącznik.";
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
$product->name = [$default_lang => "Nowoczesna Lampa Wisząca z Abażurami Wiele Kolorów"];
$product->link_rewrite = [$default_lang => "nowoczesna-lampa-wiszaca-z-abazurami-wiele-kolorow"];
$product->price = 95.00;
$product->quantity = 90;
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/nowoczesna-lampa-wiszaca-z-abazurami-wiele-kolorow.jpg";
$product->image_url = $url;
$product->description = "Lampa wisząca sufitowa 2-płomienna żyrandol z abażurami w różnych kolorach
Szukasz lampy, która dokładnie oświetli Twoje wnętrza, a jednocześnie będzie komponować się z wystrojem i stanie się dekoracją pokoju? Mamy żyrandol z abażurami, którego szukasz. Minimalistyczny wygląd oświetlenia wspaniale uatrakcyjni Twoje wnętrza. Cztery kolory abażura i trzy kolory konstrukcji do wyboru sprawiają, że możesz skomponować własną, indywidualną lampę, która najlepiej odda charakter urządzanego pokoju.
Gdzie najlepiej zamontować lampę wiszącą z abażurami i regulacją?
Lampę wiszącą nowoczesną możesz zawiesić w salonie, kuchni, sypialni, jadalni, pokoju nastolatka, przedpokoju bądź gabinecie. Uniwersalne kolory i kształty abażurów świetnie komponują się z każdym wystrojem pomieszczenia, niezależnie od jego przeznaczenia. Lampa sufitowa klasyczna może służyć Ci jako oświetlenie główne lub poboczne. Żyrandol z abażurami równomiernie oświetli cały pokój, kiedy zawiesisz go w centralnym punkcie pomieszczenia oraz będzie znakomitym światłem do czytania, jeśli zamontujesz go tuż nad kanapą w salonie.
Jakie zalety posiada nowoczesna lampa sufitowa z dwoma źródłami zasilania i abażurami?
Oświetlenie sufitowe posiada regulowaną wysokość. Dzięki niej lampa dostosowuje się do każdego rozmiaru pomieszczenia oraz możesz zawiesić klosze na różnych poziomach, co doda wnętrzu oryginalności. Konstrukcja żyrandola wykonana jest z wytrzymałego metalu, a abażury z odpornej na uszkodzenia tkaniny. Do lampy wiszącej pasują popularne żarówki E27. Oświetlenie posiada możliwość podłączenia pod podwójny przełącznik.";
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
$product->name = [$default_lang => "Lampa Wisząca Abażur Klasyczna Regulowana Zwis"];
$product->link_rewrite = [$default_lang => "lampa-wiszaca-abazur-klasyczna-regulowana-zwis"];
$product->price = 49.00;
$product->quantity = 90;
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/lampa-wiszaca-abazur-klasyczna-regulowana-zwis.jpg";
$product->image_url = $url;
$product->description = "Pojedyncza lampa wisząca zwis z abażurem wiele kolorów
Prezentujemy lampę wiszącą, która świetnie dopasuje się do klasycznego wystroju wnętrz, doda elegancji nowoczesnym aranżacjom oraz stonuje mocno zdobione pomieszczenia. Kolory abażura i konstrukcji do wyboru to odcienie szarości, bieli i czerni. Te uniwersalne kolory fantastycznie oddadzą nastrój każdego pomieszczenia.
W jakich wnętrzach lampa pojedyncza wisząca regulowana z abażurem będzie wyglądać najlepiej?
Zwis wiszący pojedynczy z abażurem to doskonała propozycja oświetlenia do sypialni, salonu, kuchni, jadalni, przedpokoju czy domowego biura. Lampa wisząca klasyczna może służyć jako światło poboczne – na przykład jeśli zawiesisz ją nad kanapą w salonie, to będzie doskonałym oświetleniem do czytania. Zwis wiszący możesz zestawić z innymi lampami z serii MILANO, dzięki czemu stworzysz idealnie pasującą do siebie aranżację oświetleniową.
Jakie praktyczne funkcje posiada lampa wisząca ze stożkowym abażurem?
Największą zaletą lampy sufitowej nowoczesnej jest regulowana wysokość, dzięki której oświetlenie pasuje zarówno do bardzo małych pokoi jak i wysokich wnętrz. Abażur wykonany jest materiału odpornego na uszkodzenia. Konstrukcja jest metalowa, dzięki czemu bardzo trwała i wytrzymała. Do lampy pasują najpopularniejsze rodzaje źródeł światła z gwintem E27.";
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
$product->name = [$default_lang => "Nowoczesna Lampa Wisząca Chrom Pojedyncza Abażur"];
$product->link_rewrite = [$default_lang => "nowoczesna-lampa-wiszaca-chrom-pojedyncza-abazur"];
$product->price = 80.00;
$product->quantity = 90;
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/nowoczesna-lampa-wiszaca-chrom-pojedyncza-abazur.jpg";
$product->image_url = $url;
$product->description = "Pojedyncza lampa wisząca z abażurem i chromową konstrukcją
Funkcjonalna lampa wisząca, która pasuje zarówno do eleganckich, klasycznych jak i nowoczesnych wnętrz. Oświetlenie posiada sześć kolorów abażura do wyboru, dzięki czemu na pewno wybierzesz odcień, który będzie pasował do wystroju Twojego mieszkania.
Gdzie zawiesić nowoczesną lampę wiszącą chrom z materiałowym abażurem?
Zwis wiszący pojedynczy regulowany komponuje się ze wszystkimi stylami wnętrzarskimi, dlatego możesz zawiesić go zarówno w sypialni, salonie jak i kuchni czy przedpokoju. Chromowana konstrukcja lampy dodaje wnętrzom odrobinę elegancji, a abażur w stonowanym kolorze odpowiada za przyjemny nastrój w pomieszczeniu.
Jakie praktyczne funkcja posiada klasyczna pojedyncza lampa wisząca z abażurem chrom?
Najbardziej praktyczną funkcją lampy z abażurem jest opcja regulacji wysokości. Dzięki niej oświetlenie może wisieć zarówno w bardzo małych pokojach jak i wysokich kamienicach. Abażur lampy został wykonany z wysokiej jakości materiału, który zapewnia trwałość klosza na bardzo długi czas. Chromowana konstrukcja jest solidna i odporna na uszkodzenia. Do lampy wiszącej nowoczesnej pasują popularne typy żarówek E27.";
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
$product->name = [$default_lang => "Klasyczna Lampa Wisząca z Abażurami Regulacja Chrom"];
$product->link_rewrite = [$default_lang => "klasyczna-lampa-wiszaca-z-abazurami-regulacja-chrom"];
$product->price = 159.00;
$product->quantity = 90;
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/klasyczna-lampa-wiszaca-z-abazurami-regulacja-chrom.jpg";
$product->image_url = $url;
$product->description = "Lampa wisząca chrom 2-płomienna z abażurami i regulacją wysokości
Funkcjonalna lampa wisząca z abażurami, która doda Twoim wnętrzom przytulności i wyjątkowego charakteru. Oświetlenie komponuje się z aranżacjami w stylu nowoczesnym, minimalistycznym jak i klasycznym.
W jakich wnętrzach lampa wisząca regulowana chrom abażur wygląda najlepiej?
Lampa wisząca jest doskonałym wyborem do salonu, jadalni, sypialni, pokoju dziecka, biura czy przedpokoju. Metalowa konstrukcja chrom oraz abażury w stonowanych kolorach świetnie łączą się ze wszystkimi rodzajami wnętrz, niezależnie od ich przeznaczenia.
Chcesz stworzyć harmonijną i funkcjonalną aranżację oświetlania? Prezentowaną lampę wiszącą zamontuj w głównej części pokoju, dzięki czemu równomiernie oświetlisz pomieszczenie. Do czynności mało wymagających, na przykład do relaksu lub czytania książek, wybierz lampę stojącą lub kinkiet z tej samej serii. W ten sposób oświetlisz lampami, które idealnie do siebie pasują i nadają wnętrzu elegancji.
Jakie praktyczne funkcje posiada lampa wisząca chrom z abażurami?
Największym atutem lampy z abażurami jest możliwość regulowania wysokości. Dzięki tej funkcji możesz dopasować oświetlenie zarówno do małego pokoju jak i wysokiego pomieszczenia w kamienicy. Lampa posiada sześć kolorów abażurów do wyboru. Oświetlenie ma dwa źródła zasilania, więc możesz wybrać dwa różne odcienie kloszy, nadając tym samym wyjątkowości swojej aranżacji. Lampa zasilana jest żarówkami E27. Oświetlenie posiada możliwość podłączenia pod podwójny przełącznik.";
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
$product->name = [$default_lang => "Lampa Sufitowa Żyrandol z Abażurami Chrom"];
$product->link_rewrite = [$default_lang => "lampa-sufitowa-zyrandol-z-abazurami-chrom"];
$product->price = 153.00;
$product->quantity = 90;
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/lampa-sufitowa-zyrandol-z-abazurami-chrom.jpg";
$product->image_url = $url;
$product->description = "Nowoczesna lampa sufitowa chromowana z abażurami do wyboru
Lampa sufitowa, która stanie się stylową dekoracją i funkcjonalnym oświetleniem całego pomieszczenia. Wybierz kolory abażurów, które najdokładniej podkreślają charakter Twoich wnętrz i ciesz się elegancką aranżacją mieszkania.
Gdzie najlepiej prezentuje się klasyczna lampa chrom żyrandol z abażurami?
Lampa chromowana znakomicie wygląda w klasycznym salonie, minimalistycznej sypialni, nowoczesnym biurze, kuchni czy jadalni. Metalowa konstrukcja i materiałowe abażury w popularnych odcieniach świetnie komponują się ze wszystkimi stylami wnętrzarskimi.
Abażury lampy sufitowej nowoczesnej dostępne są w stonowanych kolorach, takich jak odcienie brązu, szarości czy beżu. Posiadamy również klosze w klasycznych barwach – czerni i bieli. Do lampy sufitowej możesz kupić dwa różne kolory abażurów. Dzięki temu dodasz swoim wnętrzom oryginalności.
Jakie zalety posiada chromowana lampa sufitowa z abażurami?
Ogromnym atutem żyrandola z abażurami jest jego trwała konstrukcja i odporny na uszkodzenia materiał kloszy. Nowoczesny wygląd oświetlenia pasuje do wszystkich typów wnętrz. Do żyrandola pasują żarówki E27. Lampa sufitowa posiada możliwość podłączenia pod podwójny przełącznik.";
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
$product->name = [$default_lang => "Nowoczesna Lampa z Abażurami Chrom Sufitowa"];
$product->link_rewrite = [$default_lang => "nowoczesna-lampa-z-abazurami-chrom-sufitowa"];
$product->price = 189.00;
$product->quantity = 90;
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/nowoczesna-lampa-z-abazurami-chrom-sufitowa.jpg";
$product->image_url = $url;
$product->description = "Klasyczna lampa sufitowa żyrandol chrom z abażurami
Stylowa lampa sufitowa, która doda Twoim wnętrzom elegancji, przytulności i oryginalnego charakteru. Chromowana konstrukcja i materiałowe abażury w różnych kolorach sprawiają, że żyrandol wygląda rewelacyjnie w każdym pomieszczeniu.
Gdzie najlepiej zawiesić nowoczesną lampę sufitową z abażurami chrom?
Żyrandol z abażurami pasuje do salonu, biura, sypialni, jadalni, kuchni, przedpokoju i wszystkich innych typów pomieszczeń. Lampę sufitową nowoczesną możesz zamontować w centralnym punkcie pokoju. W ten sposób żyrandol stylowo oświetli całe wnętrze. Jeśli potrzebujesz światła wspomagającego, to do lampy sufitowej 3-płomiennej znakomicie pasować będzie lampa stojąca, kinkiet lub pojedynczy zwis wiszący z tej samej serii.
Jakie przydatne właściwości posiada lampa sufitowa chrom z abażurami?
Żyrandol posiada sześć kolorów abażurów do wyboru. Ponadto możesz zamówić trzy różne odcienie, dzięki czemu stworzysz niezwykle eleganckie i designerskie oświetlenie.
Lampa sufitowa posiada solidną, wytrzymałą konstrukcję z metalu, która zapewnia radość z użytkowania oświetlenia na długi czas. Abażury lampy stworzone są z materiału odpornego na zabrudzenia. Do żyrandola pasują najpopularniejsze źródła światła – żarówki z gwintem E27. Lampa posiada możliwość podłączenia pod podwójny przełącznik.";
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
$product->name = [$default_lang => "Lampa Wisząca Regulowana z Abażurami Chromowana"];
$product->link_rewrite = [$default_lang => "lampa-wiszaca-regulowana-z-abazurami-chromowana"];
$product->price = 199.00;
$product->quantity = 90;
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/lampa-wiszaca-regulowana-z-abazurami-chromowana.jpg";
$product->image_url = $url;
$product->description = "Nowoczesna lampa wisząca regulowana z abażurami chrom
Oświetl swoje wnętrza niezwykłą lampą wiszącą, która doda Twoim wnętrzom przytulności i oryginalnego charakteru. Metaliczny połysk chromowanej konstrukcji nadaje elegancji pomieszczeniom. Natomiast abażury z materiału w sześciu kolorach do wyboru odpowiadają za ciepły, przytulny nastrój w pokoju.
W jakich pomieszczeniach najlepiej wygląda 3-płomienna lampa wisząca chromowana z abażurami?
Lampa wisząca z abażurami jest wspaniałą propozycją oświetlenia do sypialni, salonu, jadalni, kuchni, biura, pokoju dziecka. Oświetlenie komponuje się ze wszystkimi rodzajami wnętrz. Lampa może pełnić rolę światła głównego, zawieszonego w centralnym punkcie pokoju. Świetnie prezentuje się również nad stołem w jadalni bądź kuchni. Szukasz lamp, które stworzą z prezentowanym oświetleniem wiszącym, spójny zestaw? Wybierz lampę podłogową, kinkiet lub pojedynczy zwis wiszący z tej samej serii.
Jakie zalety posiada klasyczna lampa wisząca chrom z trzema abażurami?
Lampa posiada sześć kolorów abażura do wyboru, dzięki czemu masz pewność, że stworzysz oświetlenie idealnie pasujące do Twojej aranżacji. Dodatkowo możesz zestawić ze sobą trzy różne odcienie abażurów, przez co zyskasz oświetlenie o wyjątkowym charakterze. Lampa z abażurami posiada regulację wysokości, dzięki której dokładnie dostosujesz oświetlenie do rozmiarów pokoju. Oświetlenie zasilane jest najpopularniejszy rodzajami źródeł światła – żarówkami E27. Lampa posiada możliwość podłączenia pod podwójny przełącznik.";
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
$product->name = [$default_lang => "Nowoczesny Kinkiet Lampa z Abażurem Chrom"];
$product->link_rewrite = [$default_lang => "nowoczesny-kinkiet-lampa-z-abazurem-chrom"];
$product->price = 79.00;
$product->quantity = 90;
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/nowoczesny-kinkiet-lampa-z-abazurem-chrom.jpg";
$product->image_url = $url;
$product->description = "Klasyczny kinkiet lampa na ścianę chrom z abażurem
Funkcjonalny kinkiet o klasycznym wyglądzie, który świetnie dopasuje się do każdego rodzaju wnętrz. Chromowana konstrukcja doda pomieszczeniu elegancji, a materiałowy abażur uczyni pokój niezwykle przytulnym.
W jakich pomieszczeniach najlepiej prezentuje się kinkiet chrom z abażurem?
Lampa z abażurem będzie wspaniałym oświetleniem wspomagającym w aranżacji salonu, biura, sypialni, kuchni czy jadalni.
Kinkiet chrom w zestawieniu z lampą wiszącą lub sufitową z tej samej serii,stworzy spójną i funkcjonalną aranżację oświetlenia. Żyrandol z abażurem możesz zawiesić w centralnym punkcie pomieszczenia, dzięki czemu zyskasz równomierne oświetlenie całego pokoju. Natomiast kinkiet może posłużyć jako światło wykorzystywane do mniej wymagających czynności – czytania, odpoczynku, oglądania telewizji.
Jakie praktyczne właściwości posiada nowoczesna lampa ścienna kinkiet chrom z abażurem?
Kinkiet z abażurem możesz zamontować na ścianie. Chromowana konstrukcja zapewnia trwałość i niezmienny wygląd lampy przez wiele lat. Kinkiet posiada sześć kolorów abażurów do wyboru, dzięki czemu z łatwością wybierzesz barwę, która najlepiej pasuje do wystroju Twoich wnętrz. Do lampy ściennej pasują najpopularniejsze źródła światła - żarówki E27.";
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
$product->name = [$default_lang => "Klasyczna Lampa Stojąca Podłogowa z Abażurem"];
$product->link_rewrite = [$default_lang => "klasyczna-lampa-stojaca-podlogowa-z-abazurem"];
$product->price = 119.00;
$product->quantity = 90;
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/klasyczna-lampa-stojaca-podlogowa-z-abazurem.jpg";
$product->image_url = $url;
$product->description = "Klasyczna lampa podłogowa stojąca z materiałowym abażurem
Szukasz lampy, która praktycznie oświetli pokój oraz stanie się jego stylową dekoracją? Mamy lampę stojącą idealną dla Ciebie. Prezentowany model oświetlenia podłogowego komponuje się z wieloma stylami wnętrzarskimi – zarówno klasycznym jak i bardziej nowoczesnym.
W jakich pomieszczeniach najlepiej sprawdzi się stylowa lampa stojąca z abażurem?
Lampa podłogowa doskonale sprawdza się w roli oświetlenia wspomagającego w pomieszczeniu. Ten model możesz postawić przy łóżku w sypialni lub obok kanapy w salonie, dzięki czemu zyskasz praktyczne oświetlenie do relaksu lub wieczornego czytania. Lampę stojącą z abażurem możesz postawić również w kuchni, gdzie będzie pełnić funkcje światła nastrojowego, służącego do mniej wymagających czynności. Lampa wygląda w wspaniale zarówno w sypialni, salonie, pokoju dziecka, przedpokoju jak i jadalni.
Jakie praktyczne zalety posiada nowoczesna lampa podłogowa z abażurem?
Konstrukcja oświetlenia stojącego wykonana jest z trwałego, odpornego na uszkodzenia metalu. Abażur stworzony jest z materiału wysokiej jakości. Klosze do lampy dostępne są w sześciu różnych kolorach, dzięki czemu na pewno wybierzesz barwę idealnie pasującą do Twoich wnętrz. Oświetlenie nie wymaga montażu i jest lekkie, przez co możesz z łatwością zmieniać jego położenie. Lampa zasilana jest najpopularniejszymi rodzajami źródeł światła – żarówkami E27.";
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
$product->name = [$default_lang => "Lampa Wisząca Pojedyncza z Abażurem Wiele Kolorów"];
$product->link_rewrite = [$default_lang => "lampa-wiszaca-pojedyncza-z-abazurem-wiele-kolorow"];
$product->price = 45.00;
$product->quantity = 90;
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/lampa-wiszaca-pojedyncza-z-abazurem-wiele-kolorow.jpg";
$product->image_url = $url;
$product->description = "Nowoczesna lampa wisząca z abażurem regulowana zwis
Piękna lampa wisząca, która nada wyjątkowego charakteru zarówno pomieszczeniom urządzonym w klasycznym jak i nowoczesnym stylu. Minimalizm oświetlenia został stylowo przełamany efektownymi kolorami, które odpowiadają za niezwykły wygląd lampy.
Do jakich wnętrz najlepiej pasuje stylowa lampa z abażurem i regulacją wysokości?
Lampę wiszącą nowoczesną możesz zawiesić w kuchni, jadani, sypialni, pokoju dziecka, salonie bądź przedpokoju. Oświetlenie dopasuje się do wystroju Twoich wnętrz. Lampa posiada sześć kolorów abażura i trzy kolory konstrukcji do wyboru. Dzięki temu możesz sam stworzyć oświetlenie, które doda nastrojowego klimatu Twoim wnętrzom.
Jakie praktyczne funkcje posiada oryginalna lampa wisząca z abażurem na lince?
Największą zaletą zwisu wiszącego pojedynczego z abażurem jest możliwość regulacji wysokości. Dzięki niej dopasujesz oświetlenie zarówno małego pokoju jak i do wysokiego mieszkania w kamienicy. Abażury do lampy zostały wykonane ze specjalnego materiału, który zachowuje nieskazitelny wygląd na wiele lat. Konstrukcja wykonana jest z trwałego, odpornego na uszkodzenia metalu. Do lampy pasują najpopularniejsze rodzaje żarówek z gwintem E27.";
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
$product->name = [$default_lang => "Lampa Wisząca z Abażurami Klasyczna Elegancka"];
$product->link_rewrite = [$default_lang => "lampa-wiszaca-z-abazurami-klasyczna-elegancka"];
$product->price = 95.00;
$product->quantity = 90;
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/lampa-wiszaca-z-abazurami-klasyczna-elegancka.jpg";
$product->image_url = $url;
$product->description = "Lampa wisząca z dwoma materiałowymi abażurami na listwie
Lampa, która wprowadzi do Twoich wnętrz nowoczesność, przytulny nastrój i elegancję. Oświetlenie posiada aż sześć kolorów abażurów do wyboru, dzięki czemu na pewno wybierzesz barwę najlepiej oddającą charakter Twojej aranżacji.
W jakich pomieszczeniach nowoczesna lampa z abażurami na listwie i regulacją wygląda najlepiej?
Prezentowana lampa z abażurami wygląda rewelacyjnie w każdym wnętrzu. Możesz zawiesić oświetlenie w sypialni, kuchni, jadalni, salonie czy pokoju dziecka – lampa doda wyjątkowego charakteru wszystkim rodzajom pomieszczeń.
Zielone i niebieskie abażury lampy wiszącej są znakomitą propozycją do pokoju dziecka. Mogą również świetnie ożywić minimalistyczny wystrój wnętrza. Abażury w kolorze czarnym, białym i odcieniach szarości spodobają się miłośnikom klasycznych, stonowanych barw. Lampa wisząca nowoczesna posiada również trzy kolory konstrukcji do wyboru.
Jakie zalety posiada stylowa lampa wisząca z abażurami na listwie?
Lampa wisząca z abażurami posiada regulowaną wysokość. Dzięki tej funkcji dopasujesz oświetlenie do każdego rozmiaru pomieszczenia. Możesz również zawiesić abażury na różnej wysokości, co uczyni Twoją aranżację oryginalną. Lampa posiada trzy kolory konstrukcji i sześć kolorów abażura do wyboru. Dzięki tylu wariantom możesz samodzielnie skomponować oświetlenie, które najbardziej pasuje do Twoich wnętrz. Istnieje możliwość zamówienia różnych barw kloszy. Lampa posiada możliwość podłączenia pod podwójny przełącznik.";
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
$product->name = [$default_lang => "Nowoczesna Lampa Wisząca Abażur Regulacja LED"];
$product->link_rewrite = [$default_lang => "nowoczesna-lampa-wiszaca-abazur-regulacja-led"];
$product->price = 119.00;
$product->quantity = 90;
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/nowoczesna-lampa-wiszaca-abazur-regulacja-led.jpg";
$product->image_url = $url;
$product->description = "Lampa wisząca z abażurami 3-płomienna LED regulowana
Niezwykła lampa wisząca z abażurami, która ożywi wystrój Twoich wnętrz. Oświetlenie zostało wykonane z wysokiej jakości materiałów, jest bardzo funkcjonalne oraz posiada wiele wariantów kolorystycznych.
W jakich pomieszczeniach najlepiej prezentuje się nowoczesna lampa z abażurami na listwie?
Lampę wiszącą regulowaną możesz zawiesić w salonie, jadalni, kuchni, sypialni, biurze lub pokoju swojego dziecka. W każdym z tych wnętrz oświetlenie będzie prezentować się zjawiskowo. Lampa posiada aż sześć kolorów abażura do wyboru. W dodatku masz możliwość zamówienia trzech różnych barw, dzięki czemu stworzysz oryginalną i pełną uroku aranżację pokoju.
Jakie przydatne właściwości posiada nowoczesna lampa 3-płomienna z materiałowymi abażurami na listwie?
Najbardziej praktyczną funkcją lampy jest możliwość regulacji wysokości. Dzięki niej dostosujesz oświetlenie zarówno do małego jak i do wysokiego pomieszczenia. Ponadto funkcja regulacji pozwala na zawieszenie każdego abażura na innej wysokości, co doda aranżacji nowoczesności. Oświetlenie posiada również trzy kolory konstrukcji do wyboru. Lampa stworzona jest materiałów wysokiej jakości, dzięki którym będziesz cieszyć się stylowym oświetleniem wiele lat. Oświetlenie posiada możliwość podłączenia pod podwójny przełącznik.";
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
$product->name = [$default_lang => "Stylowa Lampa Wisząca z Abażurami Regulowana"];
$product->link_rewrite = [$default_lang => "stylowa-lampa-wiszaca-z-abazurami-regulowana"];
$product->price = 125.00;
$product->quantity = 90;
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/stylowa-lampa-wiszaca-z-abazurami-regulowana.jpg";
$product->image_url = $url;
$product->description = "Modna lampa wisząca z abażurami i regulacją
Nowoczesna lampa z abażurami, która odmieni wystrój Twoich wnętrz. Oświetlenie pięknie prezentuje się w każdej aranżacji mieszkania. Lampa dostępna jest w wielu wariantach kolorystycznych, dzięki czemu skomponujesz oświetlenie idealnie pasujące do Twoich wnętrz.
W jakich pomieszczeniach nowoczesna lampa z abażurami i regulacją wygląda najlepiej?
Przytulna sypialnia, nowoczesna kuchnia lub jadalnia, minimalistyczny salon, pokój dziecka – do każdego z tych pomieszczeń lampa wprowadzi magiczny nastrój. Niebieskie i zielone abażury świetnie podkreślą wesoły charakter pokoju dziecka. Klosze w żywych kolorach potrafią również znakomicie ożywić klasyczną aranżację pomieszczenia. Natomiast stonowane kolory abażurów podkreślą minimalizm i nowoczesny charakter Twoich wnętrz.
Jakie zalety posiada lampa wisząca z abażurami LED?
Możesz zamówić trzy różne koloru abażura, dzięki czemu stworzysz oryginalne, przyciągające wzrok oświetlenie. Lampa wisząca nowoczesna posiada regulację wysokości. Dzięki tej funkcji oświetlenie pasuje zarówno do wysokich loftów jak i do małych pokoi. Regulacja wysokości pozwala również na zawieszenie każdego abażura na innym poziomie. Lampa posiada wybór kolor konstrukcji.
Abażury oświetlenia zostały stworzone z wysokiej jakości materiału. Konstrukcja jest metalowa, przez co solidna i odporna na uszkodzenia. Sprawdzona jakość tworzyw sprawia, że lampa wisząca z abażurami będzie dekorowała Twoje mieszkanie prze wiele lat. Oświetlenie posiada możliwość podłączenia pod podwójny przełącznik. Do lampy pasują żarówki E27";
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
$product->name = [$default_lang => "Stylowy Kinkiet z Abażurem Wiele Kolorów"];
$product->link_rewrite = [$default_lang => "stylowy-kinkiet-z-abazurem-wiele-kolorow"];
$product->price = 59.00;
$product->quantity = 90;
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/stylowy-kinkiet-z-abazurem-wiele-kolorow.jpg";
$product->image_url = $url;
$product->description = "Klasyczny kinkiet lampa ścienna z abażurem wiele kolorów
Oświetl swoje wnętrza designerską lampą, które najlepiej odda klimat Twojej aranżacji. Kinkiet z abażurem pasuje do pomieszczeń urządzonych zarówno w nowoczesnym jak i klasycznym stylu.
W jakich pomieszczeniach kinkiet z abażurem i metalową konstrukcją prezentuje się najlepiej?
Prezentowany kinkiet posłuży Ci jako oświetlenie wspomagające do sypialni, salonu, przedpokoju, kuchni czy pokoju dziecka. Jeśli chcesz stworzyć spójną aranżację oświetlenia, dodaj do kinkietu lampy wiszące z serii LOBO. Oświetlenie 3-płomienne, 2-płomienne lub pojedynczy zwis wiszący mogą posłużyć Ci jako lampy główne, używane do bardziej wymagających czynności. Kinkiet może pełnić rolę oświetlenia dekoracyjnego.
Jakie zalety posiada klasyczny kinkiet z abażurem?
Lampa ścienna posiada metalową konstrukcję, dzięki której będzie oświetlała Twoje wnętrza przez bardzo długi czas. Abażur jest wykonany ze specjalnej tkaniny odpornej na zabrudzenia. Kinkiet ma sześć kolorów abażura i trzy kolory konstrukcji do wyboru. Dzięki tak wielu wariantom stworzysz lampę, która najlepiej wyrazi charakter Twoich wnętrz. Do kinkietu pasują popularne rodzaje źródeł światła – żarówki E27.";
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
$product->name = [$default_lang => "Lampa Wisząca z Abażurem we Wzory Liście Regulacja"];
$product->link_rewrite = [$default_lang => "lampa-wiszaca-z-abazurem-we-wzory-liscie-regulacja"];
$product->price = 35.00;
$product->quantity = 90;
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/lampa-wiszaca-z-abazurem-we-wzory-liscie-regulacja.jpg";
$product->image_url = $url;
$product->description = "Pojedyncza lampa wisząca regulowana z abażurem w liście
Ożyw swoje wnętrza oryginalnym zwisem wiszącym z abażurem w liście! Lampa doskonale komponuje się z aranżacjami w nowoczesnym, skandynawskim jak i klasycznym stylu. Diamentowy kształt abażura dodatkowo podkreśli wyjątkowy charakter Twoich wnętrz.
W jakich pomieszczeniach lampa wisząca z abażurem w liście będzie wyglądać najlepiej?
Lampa wisząca z abażurem pasuje do kuchni, sypialni, pokoju dziecka, jadalni czy przedpokoju. Oświetlenie z abażurem w zielone liście świetnie urozmaici minimalistyczną aranżację pomieszczenia. Jeżeli wolisz bardziej stonowane kolory, wybierz lampę z abażurem w szare liście. Ten motyw podkreśli elegancki wystrój Twojego pomieszczenia.
Jakie zalety posiada pojedyncza lampa wisząca z abażurem w liście diament?
Zwis wiszący pojedynczy z abażurem posiada regulację wysokości. Dzięki niej dopasujesz lampę zarówno do małych pokoi jak i do mieszkania w wysokiej kamienicy. Abażur został wykonany z wysokiej jakości materiału, który zapewnia niezmienny wygląd lampy na wiele lat. Konstrukcja oświetlenia jest metalowa, przez co solidna i wytrzymała. Lampa wisząca zasilana jest najpopularniejszymi rodzajami źródeł światła – żarówkami E27.";
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
$product->name = [$default_lang => "Modna Lampa Wisząca z Abażurami w Liście Regulacja"];
$product->link_rewrite = [$default_lang => "modna-lampa-wiszaca-z-abazurami-w-liscie-regulacja"];
$product->price = 89.00;
$product->quantity = 90;
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/modna-lampa-wiszaca-z-abazurami-w-liscie-regulacja.jpg";
$product->image_url = $url;
$product->description = "Lampa wisząca 2-płomienna abażury w liście diament
Niezwykła lampa wisząca, która doda Twoim wnętrzom oryginalności i wyjątkowego charakteru. Metalowa konstrukcja w białym kolorze ozdobiona abażurami w kształcie diamentu z motywem liści – możesz mieć pewność, że taki model lampy stanie się największą dekoracją Twojego pomieszczenia.
Do jakich wnętrz lampa wisząca z abażurami w liście LED pasuje najlepiej?
Lampę możesz zawiesić w pokoju dziecka, salonie, kuchni, jadalni sypialni bądź przedpokoju. Lampa wisząca doda nowoczesności wnętrzom urządzonym w klasycznym stylu. Natomiast minimalistyczne aranżacje znakomicie ożywi liściastymi abażurami w kształcie diamentu.
Jakie praktyczne właściwości posiada nowoczesna lampa wisząca LED 2-płomienna z abażurami w liście?
Lampa wisząca z abażurami posiada możliwość regulacji wysokości, dzięki której idealnie dostosujesz oświetlenie do rozmiarów swojego pokoju. Biała, metalowa konstrukcja charakteryzuje się dużą wytrzymałością. Materiałowe abażury są odporne na zabrudzenia. Dzięki solidnym materiałom wykonania lampa wisząca będzie dekorowała Twoje wnętrza bardzo długi czas. Oświetlenie zasilane jest żarówkami z gwintem E27. Lampa posiada możliwość podłączenia pod podwójny przełącznik.";
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
$product->name = [$default_lang => "Lampa Wisząca Sufitowa Abażury Liście Regulowana"];
$product->link_rewrite = [$default_lang => "lampa-wiszaca-sufitowa-abazury-liscie-regulowana"];
$product->price = 119.00;
$product->quantity = 90;
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/lampa-wiszaca-sufitowa-abazury-liscie-regulowana.jpg";
$product->image_url = $url;
$product->description = "Stylowa lampa wisząca z abażurami w liście LED
Chcesz nieco ożywić minimalistyczny wystrój swoich wnętrz? A możesz szukasz oświetlenia, które wpasuje się w barwną aranżację Twojego pokoju? W każdym z tych przypadków idealnie sprawdzi się lampa wisząca z abażurami w liście.
W jakich pomieszczeniach najlepiej będzie prezentować się lampa 3-płomienna regulowana z abażurami w liście?
Lampa wisząca nowoczesna jest propozycją oświetlenia do kuchni, salonu, jadalni, pokoju dziecięcego, sypialni czy przedpokoju. Lampa nadaje nowoczesności klasycznym aranżacjom, a do stonowanych wystrojów wnętrz wprowadza powiew świeżości. Abażury lampy wiszącej dostępne są w dwóch wersjach – z zielonymi oraz szarymi liśćmi. Wybierz kolory najlepiej oddające charakter Twoich wnętrz i ciesz się oryginalną, zachwycającą aranżacją.
Jakie przydatne funkcje posiada nowoczesna lampa wisząca z abażurami diament w liście?
Lampa posiada możliwość regulacji wysokości. Dzięki niej z łatwością dopasujesz oświetlenie do rozmiaru urządzanego pomieszczenia. Ponadto możesz zawiesić każdy z abażurów na innej wysokości, dodając aranżacji oryginalności. Konstrukcja lampy jest metalowa, przez co solidna i wytrzymała. Abażury wykonane są z tkaniny odpornej na zabrudzenia. Oświetlenie zasilane jest żarówkami E27. Lampa wisząca posiada możliwość podłączenia pod podwójny przełącznik.";
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
$product->name = [$default_lang => "Stylowa Lampa Wisząca z Abażurami Diament Liście"];
$product->link_rewrite = [$default_lang => "stylowa-lampa-wiszaca-z-abazurami-diament-liscie"];
$product->price = 119.00;
$product->quantity = 90;
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/stylowa-lampa-wiszaca-z-abazurami-diament-liscie.jpg";
$product->image_url = $url;
$product->description = "Nowoczesna lampa wisząca z trzema abażurami Led liście
Lampa wisząca regulowana, która doda wyjątkowości Twoim wnętrzom. Abażury w zielone lub szare liście znakomicie ożywią aranżację pomieszczenia nadając mu indywidualnego charakteru.
W jakich pomieszczeniach lampa wisząca LED z abażurami w liście będzie prezentować się najlepiej?
Oświetlenie wiszące znakomicie udekoruje Twoją kuchnię, sypialnię, pokój dziecka, salon, jadalnię czy przedpokój. Biała konstrukcja w połączeniu z zielonymi lub szarymi liśćmi daje niesamowity efekt, który świetnie komponuje się z każdym wystrojem mieszkania. Abażury lampy wiszącej nowoczesnej mają kształt diamentu, które dodatkowo uatrakcyjnią pomieszczenie.
Jakie zalety posiada stylowa lampa wisząca z abażurami w liście?
Największym atutem lampy jest możliwość regulacji wysokości. Dzięki niej oświetlenie dopasujesz zarówno do małych pomieszczeń jak i wysokich pokoi w kamienicy. Konstrukcja lampy jest metalowa, przez co odporna na uszkodzenia. Abażury stworzone są z wysokiej jakości materiału zapewniającego niezmienny wygląd kloszy na wiele lat. Lampa wisząca zasilana jest żarówkami z gwintem E27. Oświetlenie posiada możliwość podłączenia pod podwójny przełącznik.";
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
$product->name = [$default_lang => "Lampa Wisząca z Abażurem Złoty Środek LED"];
$product->link_rewrite = [$default_lang => "lampa-wiszaca-z-abazurem-zloty-srodek-led"];
$product->price = 109.00;
$product->quantity = 90;
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/lampa-wiszaca-z-abazurem-zloty-srodek-led.jpg";
$product->image_url = $url;
$product->description = "Nowoczesna lampa wisząca pojedyncza z abażurem ze złotym środkiem
Niezwykle designerska lampa wisząca, która doda Twoim wnętrzom nowoczesności i wyjątkowego klimatu. Klasyczny wygląd oświetlenia został przełamany złotym wnętrzem abażura. To rozwiązanie przyciąga spojrzenia i dodaje pomieszczeniom oryginalności.
Do jakich wnętrz pojedyncza lampa wisząca z abażurem pasuje najlepiej?
Oświetlenie znakomicie odnajduje się zarówno w nowoczesnych, minimalistycznych jak i klasycznych aranżacjach wnętrz. Lampa wykonana jest w jednolitych kolorach, które z łatwością dopasujesz do urządzanego pomieszczenia. Oświetlenie pasuje do sypialni, kuchni, jadalni, salonu, biura czy przedpokoju.
Jakie zalety posiada lampa wisząca z abażurem o złotym wnętrzu?
Zwis wiszący pojedynczy z abażurem posiada możliwość regulacji wysokości do 95 cm. Dzięki tej funkcji dostosujesz oświetlenie zarówno do małych jak i wysokich pomieszczeń. Lampa z abażurem dostępna jest w wielu wariantach – posiada cztery kolory abażura i trzy kolory konstrukcji do wyboru. Dzięki temu możesz samodzielnie stworzyć oświetlenie idealnie oddające klimat Twoich wnętrz. Lampa zasilana jest żarówkami E27.";
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
$product->name = [$default_lang => "Nowoczesna Lampa Wisząca Abażur Złota Regulowana"];
$product->link_rewrite = [$default_lang => "nowoczesna-lampa-wiszaca-abazur-zlota-regulowana"];
$product->price = 125.00;
$product->quantity = 90;
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/nowoczesna-lampa-wiszaca-abazur-zlota-regulowana.jpg";
$product->image_url = $url;
$product->description = "Stylowa lampa wisząca pojedyncza z okrągłym abażurem złoto
Lampa wisząca stworzona w minimalistycznym stylu przełamanym designerskim rozwiązaniem – abażurem ze złotym środkiem. Zwis wiszący doskonale odnajduje się zarówno w nowoczesnych jak i klasycznych wystrojach wnętrz. Dzięki wielu wariantom kolorystycznym z łatwością dobierzesz lampę pasującą do swojej aranżacji.
W jakich pomieszczeniach lampa wisząca pojedyncza z abażurem LED prezentuje się najlepiej?
Lampa abażur materiałowa wspaniale udekoruje Twoją kuchnię, sypialnię, przedpokój, salon czy jadalnię. Klasyczne kolory oświetlenia pasują do każdego wnętrza, bez względu na jego przeznaczenie. Złote wnętrze abażura doda pomieszczeniu wyjątkowości. Oświetlenie wiszące posiada cztery kolory klosza i trzy kolory konstrukcji do wyboru, co umożliwia stworzenie własnej lampy idealnie oddającej charakter Twoich wnętrz.
Jakie praktyczne właściwości posiada nowoczesna lampa wisząca zwis ze złotym abażurem?
Największą zaletą zwisu wiszącego pojedynczego z abażurem jest opcja regulowania wysokości. Dzięki niej dopasujesz lampę zarówno do małych jak i bardzo wysokich pomieszczeń. Abażur oświetlenia został wykonany z tkaniny odpornej na uszkodzenia. Konstrukcja lampy wiszącej jest metalowa, przez co wytrzymała i solidna. Oświetlenie zasilane jest najpopularniejszymi rodzajami źródeł światła – żarówkami z gwintem E27.";
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
$product->name = [$default_lang => "Stylowa Lampa Wisząca Regulowana z Abażurem Złoty Środek"];
$product->link_rewrite = [$default_lang => "stylowa-lampa-wiszaca-regulowana-z-abazurem-zloty-srodek"];
$product->price = 55.00;
$product->quantity = 90;
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/stylowa-lampa-wiszaca-regulowana-z-abazurem-zloty-srodek.jpg";
$product->image_url = $url;
$product->description = "Lampa wisząca pojedyncza zwis z abażurem złoty środek
Niezwykła lampa, którą z łatwością dopasujesz do wystroju swoich wnętrz i jednocześnie dodasz mu wyjątkowości. Lampa wisząca klasyczna została udekorowana abażurem ze złotym wnętrzem. Daje to niesamowity efekt w każdej aranżacji wnętrz.
Gdzie najlepiej zawiesić nowoczesną lampę wiszącą z okrągłym złotym abażurem?
Lampę z abażurem możesz zawiesić nad stołem w kuchni bądź jadalni. Może również stanowić element wystroju sypialni, salonu lub przedpokoju – wszystko zależy tylko od Twoich upodobań. Lampa dostępna jest w wielu kolorach o stonowanym charakterze, byś z łatwością mógł dopasować oświetlenie do barw panujących w Twojej aranżacji wnętrz.
Jakie praktyczne właściwości posiada nowoczesna lampa wisząca ze złotym abażurem?
Abażur zwisu wiszącego został wykonany z odpornej na zabrudzenia tkaniny. Konstrukcja jest metalowa, dzięki czemu trwała i solidna. Lampa posiada możliwość regulacji wysokości do 95 cm. Funkcja ta pozwala na dopasowanie oświetlenia do każdego rozmiaru pomieszczenia. Lampa zasilana jest żarówkami E27.";
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
$product->name = [$default_lang => "Lampa Wisząca z Abażurem Złota na Listwie"];
$product->link_rewrite = [$default_lang => "lampa-wiszaca-z-abazurem-zlota-na-listwie"];
$product->price = 119.00;
$product->quantity = 90;
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/lampa-wiszaca-z-abazurem-zlota-na-listwie.jpg";
$product->image_url = $url;
$product->description = "Lampa wisząca 2-płomienna z abażurami ze złotym wnętrzem
Dodaj swoim wnętrzom nowego, oryginalnego wyglądu. Prezentowana lampa wisząca pasuje do każdego pomieszczenia, a abażury ze złotym środkiem nadają oświetleniu wyjątkowego charakteru.
W jakich wnętrzach lampa wisząca z dwoma abażurami i regulacją wysokości wygląda najlepiej?
Lampa wisząca z abażurami doskonale prezentuje się w nowoczesnym salonie, sypialni, jadalni czy kuchni. Minimalistyczna konstrukcja w połączeniu z okrągłymi abażurami ze złotym środkiem tworzą oświetlenie, które znakomicie wpisuje się w kanony większości stylów wnętrzarskich. Abażury dostępne są w kolorach: czarnym, białym, jasnoszarym oraz ciemnoszarym. Stonowane i jednolite barwy ułatwiają dopasowanie lampy do kolorów panujących w Twojej aranżacji wnętrza.
Jakie zalety posiada lampa wisząca na listwie ze złotymi abażurami?
Największymi atutami lampy wiszącej nowoczesnej jest regulowana wysokość oraz materiały wykonania. Funkcja regulacji pozwala na dopasowanie oświetlenia zarówno do małych pokoi jak i mieszkań w wysokich kamienicach. Metal, z której wykonana jest konstrukcja lampy wiszącej, charakteryzuje się trwałością i odpornością na uszkodzenia. Oświetlenie zasilane jest żarówkami z gwintem E27. Lampa posiada możliwość podłączenia pod podwójny przełącznik.";
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
$product->name = [$default_lang => "Lampa Wisząca Nowoczesna z Abażurami na Listwie Złoty Środek"];
$product->link_rewrite = [$default_lang => "lampa-wiszaca-nowoczesna-z-abazurami-na-listwie-zloty-srodek"];
$product->price = 139.00;
$product->quantity = 90;
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/lampa-wiszaca-nowoczesna-z-abazurami-na-listwie-zloty-srodek.jpg";
$product->image_url = $url;
$product->description = "Nowoczesna lampa wisząca regulowana na listwie ze złotymi abażurami
Niezwykła lampa wisząca, która doda Twoim wnętrzom wyjątkowości. Metalowa konstrukcja i materiałowe abażury ze złotym środkiem tworzą oświetlenie idealnie pasujące zarówno do klasycznych jak i nowoczesnych wystrojów wnętrz.
W jakich pomieszczeniach lampa wisząca sufitowa regulowana ze złotymi abażurami wygląda najlepiej?
Lampa wisząca z abażurami może zostać dekoracją Twojej sypialni, salonu, kuchni, biura czy przedpokoju. W każdym z tych pomieszczeń oświetlenie będzie wyglądać zjawiskowo. Lampa posiada cztery kolory abażura i trzy kolory konstrukcji do wyboru, co pozwala na skomponowanie własnego, indywidualnego oświetlenia dopasowanego do wystroju urządzanego pomieszczenia.
Jakie praktyczne funkcje posiada lampa wisząca 3-płomienna na listwie z okrągłymi abażurami?
Lampa posiada regulowaną wysokość, dzięki której łatwo dostosujesz oświetlenie do rozmiarów pomieszczenia. Regulacja pozwala również na zawieszenie każdego abażura na innej wysokości, co doda oryginalności Twojemu wnętrzu. Konstrukcja lampy wiszącej stworzona jest z wytrzymałego, odpornego na uszkodzenia metalu dostępnego w trzech kolorach – czarnym, białym i szarym. Abażury wykonane są z wysokiej jakości materiału ze złotym wnętrzem. Lampa zasilana jest żarówkami E27. Oświetlenie posiada możliwość podłączenia pod podwójny przełącznik.";
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
$product->name = [$default_lang => "Lampa Wisząca Abażury ze Złotym Środkiem Regulacja"];
$product->link_rewrite = [$default_lang => "lampa-wiszaca-abazury-ze-zlotym-srodkiem-regulacja"];
$product->price = 149.00;
$product->quantity = 90;
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/lampa-wiszaca-abazury-ze-zlotym-srodkiem-regulacja.jpg";
$product->image_url = $url;
$product->description = "Lampa wisząca 3-płomienna z abażurami ze złotym środkiem
Niezwykłe oświetlenie, które doda Twoim wnętrzom nowoczesności i wyjątkowego nastroju. Lampa wisząca dostępna jest w wielu wariantach kolorystycznych, dzięki czemu idealnie dopasujesz oświetlenie do barw panujących w urządzanym pomieszczeniu.
W jakich wnętrzach lampa wisząca regulowana ze złotymi abażurami prezentuje się najlepiej?
Lampa wisząca nowoczesna może zostać oświetleniem głównym w salonie lub sypialni. Świetnie sprawdzi się również nad stołem w kuchni lub jadalni. Klasyczne abażury o okrągłym kształcie zostały ozdobione złotym wnętrzem. To proste rozwiązanie przyciąga spojrzenia i nadaje wnętrzom wyjątkowego charakteru. Lampa dostępna jest w odcieniach szarości, bieli i czerni, byś mógł dopasować kolor oświetlenia do swojej aranżacji wnętrz.
Jakie zalety posiada nowoczesna lampa wisząca 3-płomienna ze złotymi abażurami?
Oświetlenie posiada regulację wysokości, dzięki której bez problemu dopasujesz lampę do rozmiaru pomieszczenia. Regulacja pozwala również na zawieszenie każdego z abażurów na innej wysokości. Do produkcji lampy wiszącej zostały wykorzystane materiały najwyższej jakości – wytrzymały metal i odporna na uszkodzenia tkanina do abażurów. Oświetlenie zasilane się żarówkami E27. Lampa posiada możliwość podłączenia pod podwójny przełącznik.";
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
$product->name = [$default_lang => "Kinkiet z Abażurem Złoty Środek Metal Lampa"];
$product->link_rewrite = [$default_lang => "kinkiet-z-abazurem-zloty-srodek-metal-lampa"];
$product->price = 75.00;
$product->quantity = 90;
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/kinkiet-z-abazurem-zloty-srodek-metal-lampa.jpg";
$product->image_url = $url;
$product->description = "Kinkiet lampa ścienna abażur ze złotym środkiem
Poszukujesz funkcjonalnej lampy, która stanie się ozdobą Twoich wnętrz? Prezentowany kinkiet z abażurem świetnie sprawdzi się w tej roli. Lampa ścienna może pełnić funkcje oświetlenia wspomagającego w Twoim pomieszczeniu. Abażur ze złotym środkiem doda wnętrzu nowoczesności i nastrojowego klimatu.
Do jakich pomieszczeń pasuje stylowy kinkiet ze złotym abażurem?
Lampa ścienna może wspierać oświetlenie główne w pomieszczeniu. Kinkiet świetnie prezentuje się w sypialni, salonie, jadalni, przedpokoju czy kuchni. Lampę ścienną możesz zestawić z lampami wiszącymi z serii Shade. Dzięki temu stworzysz spójną i harmonijną aranżację oświetlenia. Kinkiet z abażurem sprawdza się w roli lampy do czytania bądź relaksu.
Jakie praktyczne funkcje posiada nowoczesny kinkiet z abażurem?
Konstrukcja kinkietu nowoczesnego wykonana jest z wytrzymałego metalu. Abażury zrobione są z materiału odpornego na uszkodzenia. To wszystko sprawia, że lampa ścienna będzie dekorowała Twoje wnętrza bardzo długi czas. Kinkiet posiada trzy kolory konstrukcji oraz cztery kolory abażura do wyboru, dzięki czemu możesz samodzielnie skomponować oświetlenie, które idealnie odda charakter Twoich wnętrz. Lampa ścienna zasilana jest najpopularniejszymi rodzajami źródeł światła – żarówkami E27.";
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
$product->name = [$default_lang => "Lampa Sufitowa z Abażurami Liście Regulowana"];
$product->link_rewrite = [$default_lang => "lampa-sufitowa-z-abazurami-liscie-regulowana"];
$product->price = 119.00;
$product->quantity = 90;
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/lampa-sufitowa-z-abazurami-liscie-regulowana.jpg";
$product->image_url = $url;
$product->description = "Lampa sufitowa z trzema abażurami w liście diament
Oryginalny żyrandol sufitowy stanie się największą dekoracją Twojego pomieszczenia. Prosta konstrukcja w połączeniu z abażurami w liście tworzą oryginalnie oświetlenie, które z łatwością dopasujesz do swojej aranżacji wnętrz.
Do jakich pomieszczeń pasuje lampa sufitowa żyrandol z abażurami w liście?
Lampa sufitowa nowoczesna udekoruje zarówno sypialnię, salon, kuchnię, jadalnię jak i pokój dziecka czy przedpokój. Przewaga białego koloru sprawia, że bardzo łatwo jest dopasować oświetlenie do wystroju pomieszczenia. Abażury w zielone liście stylowo przełamią stonowaną aranżację, nadając jej nowoczesności. Natomiast lampa z abażurami w szare liście podkreśli minimalistyczny charakter wnętrza.
Jakie funkcje posiada nowoczesna lampa sufitowa z abażurami z motywem liści?
Lampa sufitowa posiada regulację kąta padania światła. Dzięki niej żyrandol świetnie sprawdza się w małych wnętrzach, gdzie przy użyciu jednej lampy oświetlisz najbardziej wymagające części pokoju. Abażury lampy sufitowej wykonane są tkaniny, która zapewnia niezmienny wygląd żyrandola na wiele lat. Konstrukcja stworzona jest z wytrzymałego metalu. Żyrandol zasilany jest żarówkami E27. Lampa posiada możliwość podłączenia pod podwójny przełącznik.";
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
$product->name = [$default_lang => "Lampa Wisząca do Pokoju Dziecka Abażur we Wzory"];
$product->link_rewrite = [$default_lang => "lampa-wiszaca-do-pokoju-dziecka-abazur-we-wzory"];
$product->price = 49.00;
$product->quantity = 90;
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/lampa-wiszaca-do-pokoju-dziecka-abazur-we-wzory.jpg";
$product->image_url = $url;
$product->description = "Pojedyncza lampa wisząca dziecięca z okrągłym abażurem we wzory
Wyjątkowa lampa dziecięca, która wprowadzi do pokoju radość i przytulny nastrój. Oświetlenie posiada sześć wzorów abażura do wyboru, dzięki czemu z łatwością dopasujesz zwis wiszący do wystroju pomieszczeniu oraz upodobań swojego dziecka.
Gdzie najlepiej zawiesić lampę wiszącą regulowaną z abażurem we wzory?
Zwis wiszący pojedynczy regulowany świetnie odnajdzie się w roli oświetlenia głównego lub wspomagającego w pokoju dziecięcym. Lampę możesz zawiesić w centralnej części pomieszczenia, by równomiernie oświetlała cały pokój. Lampę możesz umieścić również nad łóżkiem, biurkiem lub w pobliżu miejsca do zabaw swojego malucha. W każdej z tych części pokoju lampa odnajdzie się rewelacyjnie.
Jakie zalety posiada lampa wisząca dziecięca z abażurem we wzory?
Oświetlenie dziecięce posiada regulowaną wysokość, dzięki której dopasujesz lampę do każdego rozmiaru pokoju. Dostępne wzory abażurów: flamingi, pandy, gwiazdki i króliczki w autkach. Dzięki takiej różnorodności kloszy z łatwością wybierzesz lampę idealnie pasującą do wnętrza. Oświetlenie zasilane jest żarówkami E27.";
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
$product->name = [$default_lang => "Lampa Wisząca Dziecięca Abażury we Wzory Regulacja"];
$product->link_rewrite = [$default_lang => "lampa-wiszaca-dziecieca-abazury-we-wzory-regulacja"];
$product->price = 119.00;
$product->quantity = 90;
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/lampa-wiszaca-dziecieca-abazury-we-wzory-regulacja.jpg";
$product->image_url = $url;
$product->description = "Lampa wisząca dziecięca 3-płomienna abażury we wzory
Wywołaj radość u swojego dziecka! Dekorując pokój malucha lampą z abażurami w wesołe wzory sprawisz mu mnóstwo radości i uczynisz aranżację pomieszczenia niepowtarzalną.
W jakiej części pokoju dziecka najlepiej zawiesić lampę regulowaną z trzema okrągłymi abażurami we wzory?
Dzięki trzem źródłom zasilania możesz powiesić lampę w centralnej części pokoju, gdzie równomiernie oświetli całe pomieszczenie. Lampa wisząca dziecięca jest doskonałym wyborem również do przedszkoli, szkół, żłobków czy bawialni dla dzieci. Oświetlenie posiada aż sześć wzorów abażurów do wyboru: flamingi, gwiazdki, pandy i króliczki w autkach. Urocze motywy świetnie komponują się z wystrojem pokoju dziecka.
Jakie praktyczne funkcje posiada lampa wisząca 3-płomienna z abażurami we wzory do pokoju dziecka?
Oświetlenie posiada regulację wysokości, dzięki której dopasujesz je do każdego rozmiaru pokoju. Dzięki tej opcji możesz również zawiesić każdy z abażurów na innym poziomie. Dodatkowo masz możliwość skomponowania własnego, indywidualnego oświetlenia. Możesz wybrać kolor konstrukcji oraz trzy różne wzory abażurów. Dzięki temu sam skomponujesz lampę, które idealnie oddaje charakter pokoju dziecięcego. Oświetlenie zasilane jest żarówkami z gwintem E27. Lampa posiada możliwość podłączenia pod podwójny przełącznik.";
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
$product->name = [$default_lang => "Lampa Wisząca z Abażurami we Wzory do Pokoju Dziecięcego"];
$product->link_rewrite = [$default_lang => "lampa-wiszaca-z-abazurami-we-wzory-do-pokoju-dzieciecego"];
$product->price = 119.00;
$product->quantity = 90;
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/lampa-wiszaca-z-abazurami-we-wzory-do-pokoju-dzieciecego.jpg";
$product->image_url = $url;
$product->description = "Lampa wisząca dziecięca z trzema źródłami zasilania abażury we wzory
Oświetl pokój swojego dziecka wyjątkową lampą wiszącą, która doda pomieszczeniu przytulności i niezwykłego klimatu. Wesołe wzory abażurów wywołują uśmiech na twarzy nie tylko u najmłodszych.
Gdzie najlepiej będzie prezentować się lampa wisząca regulowana z abażurami w dziecięce wzory?
Lampę wiszącą dziecięcą na listwie możesz umieścić w głównej części pokoju malucha, gdzie równomiernie oświetli całe pomieszczenie. Może posłużyć dziecku również podczas gier i zabaw. Lampa z abażurami we flamingi jest doskonałym wyborem również do kuchni, sypialni czy jadalni. Wzory w gwiazdki, pandy i króliczki zostały tak dobrane kolorystycznie, by pasowały do większości aranżacji pokojów dziecięcych. Lampa spodoba się zarówno małym dziewczynkom jak i chłopcom.
Jakie praktyczne funkcjonalności posiada lampa wisząca z abażurami we wzory?
Największą zaletą lampy dziecięcej jest możliwość regulacji wysokości, która nie tylko umożliwia dostosowanie oświetlenia do rozmiaru pomieszczenia, ale również pozwala na zawieszenie każdego z abażurów na innym poziomie. Możesz sam zadecydować, jak będzie wyglądać Twoja lampa. Do wyboru masz dwa kolory konstrukcji, a każdy z trzech abażurów możesz zamówić w innym wzorze. Lampa zasilana jest najpopularniejszymi rodzajami źródeł światła – żarówkami E27. Lampa posiada możliwość podłączenia pod podwójny przełącznik.";
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
$product->name = [$default_lang => "Lampa Wisząca z Abażurami w Dziecięce Wzory Regulowana"];
$product->link_rewrite = [$default_lang => "lampa-wiszaca-z-abazurami-w-dzieciece-wzory-regulowana"];
$product->price = 89.00;
$product->quantity = 90;
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/lampa-wiszaca-z-abazurami-w-dzieciece-wzory-regulowana.jpg";
$product->image_url = $url;
$product->description = "Lampa wisząca dziecięca 2-płomienna regulowana abażury
Niezwykła lampa wisząca, która wprowadzi radość i przytulny nastrój do pokoju Twojego dziecka. Sześć wzorów abażurów oraz dwa kolory konstrukcji do wyboru sprawiają, że z łatwością dopasujesz oświetlenie do wystroju pomieszczenia oraz gustu swojego malucha.
Gdzie najlepiej zawiesić lampę wiszącą regulowaną z abażurami w dziecięce wzory?
Lampę możesz zawiesić w centralnym punkcie pokoju dziecka, dzięki czemu posłuży jako oświetlenie do gier i zabaw lub bardziej wymagających czynności. Wzory abażurów zostały zaprojektowane w taki sposób, aby z łatwością można było je dopasować do kolorów panujących we wnętrzu. Spośród sześciu dostępnych wariantów abażurów każde dziecko znajdzie motyw, który najbardziej przypadnie mu do gustu.
Jakie zalety posiada lampa wisząca dziecięca z dwoma abażurami we wzory?
Oświetlenie posiada regulację wysokości, która nie tylko umożliwia dopasowanie lampy do każdego rozmiaru pomieszczenia, ale również pozwala na zawieszenie dwóch kloszy na różnych poziomach. Abażury wykonane są z tkaniny odpornej na uszkodzenia i bezpiecznej dla dziecka. Konstrukcja lampy wiszącej jest metalowa, przez co solidna i wytrzymała. Do oświetlenia pasują żarówki E27. Lampa posiada możliwość podłączenia pod podwójny przełącznik.";
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
$product->name = [$default_lang => "Pojedyncza Lampa Wisząca z Abażurem w Liście Wzory"];
$product->link_rewrite = [$default_lang => "pojedyncza-lampa-wiszaca-z-abazurem-w-liscie-wzory"];
$product->price = 49.00;
$product->quantity = 90;
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/pojedyncza-lampa-wiszaca-z-abazurem-w-liscie-wzory.jpg";
$product->image_url = $url;
$product->description = "Nowoczesna pojedyncza lampa wisząca z okrągłym abażurem w liście
Dodaj swoim wnętrzom oryginalności i wyjątkowego klimatu. Dzięki stylowej lampie wiszącej z materiałowym abażurem w liście Twoje mieszkanie zyska nowy, nowoczesny charakter. Wzór liści dostępny jest w zielonym i szarym kolorze. Do wyboru są również dwa kolory konstrukcji – biały i szary.
Gdzie najlepiej zawiesić pojedynczą lampą wiszącą regulowaną z abażurem w liście?
Zwis wiszący pojedynczy regulowany wspaniale prezentuje się w kuchni, sypialni, pokoju dziecka czy przedpokoju. Konstrukcja lampy dostępna jest w białym i szarym kolorze, dzięki czemu znakomicie dopasowuje się do każdego wystroju pomieszczenia. Liście na abażurach dodadzą nowoczesności klasycznym aranżacjom oraz świetnie wkomponują się w styl designerskich wystrojów.
Jakie zalety posiada stylowa lampa wisząca z abażurem w liście?
Oświetlenie wiszące posiada regulowaną wysokość, dzięki której z łatwością dostosujesz lampę do rozmiaru pomieszczenia. Abażur został wykonany ze specjalnej, odpornej na uszkodzenia tkaniny. Konstrukcja jest metalowa. Oświetlenie zasilane żarówkami E27.";
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
$product->name = [$default_lang => "Nowoczesna Lampa Wisząca z Abażurami w Liście Regulowana"];
$product->link_rewrite = [$default_lang => "nowoczesna-lampa-wiszaca-z-abazurami-w-liscie-regulowana"];
$product->price = 89.00;
$product->quantity = 90;
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/nowoczesna-lampa-wiszaca-z-abazurami-w-liscie-regulowana.jpg";
$product->image_url = $url;
$product->description = "Regulowana lampa wisząca na listwie z abażurami w liście
Szukasz oryginalnego oświetlenia, które dopasuje się do każdego stylu pomieszczenia? Mamy dla Ciebie świetną propozycję. Lampa wisząca z abażurami w liście doda niepowtarzalnego charakteru Twoim wnętrzom.
W jakich pomieszczeniach najlepiej prezentuje się stylowa lampa wisząca z abażurami w liście?
Oświetlenie stanie się dekoracją Twojej sypialni, kuchni, salonu, pokoju dziecka czy przedpokoju. Dzięki stonowanym kolorom lampa wisząca świetnie komponuje się ze wszystkimi barwami panującymi w Twojej aranżacji wnętrz. Lampa z abażurami w zielone liście świetnie rozświetli i ożywi pomieszczenie. Natomiast abażur we wzór szarych liści znakomicie podkreśli elegancki charakter wnętrza.
Jakie praktyczne zalety posiada stylowa lampa wisząca z abażurami w liście?
Oświetlenie posiada regulowaną wysokość, dzięki której możesz idealnie dopasować lampę do rozmiaru pokoju. Funkcja ta umożliwia również zawieszenie abażurów na różnych wysokościach, co wygląda niezwykle efektownie. Lampa została wykonana wysokiej jakości odpornych na uszkodzenia materiałów. Oświetlenie zasilane jest żarówkami E27. Lampa posiada możliwość podłączenia pod podwójny przełącznik.";
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
$product->name = [$default_lang => "Lampa Wisząca Regulowana Abażury we Wzory Liście"];
$product->link_rewrite = [$default_lang => "lampa-wiszaca-regulowana-abazury-we-wzory-liscie"];
$product->price = 119.00;
$product->quantity = 90;
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/lampa-wiszaca-regulowana-abazury-we-wzory-liscie.jpg";
$product->image_url = $url;
$product->description = "Nowoczesna lampa wisząca 3-płomienna okrągłe abażury w liście
Jak wprowadzić do swoich wnętrz odrobinę nowoczesności i wyjątkowego stylu? Dodaj do aranżacji stylową lampę wiszącą na listwie z abażurami w liście. Oświetlenie świetnie komponuje się zarówno z nowoczesnymi jak i klasycznymi wystrojami wnętrz.
W jakich pomieszczeniach najlepiej wyglądać będzie stylowa lampa wisząca 3-płomienna z abażurami w liście?
Lampa wisząca może zostać oświetleniem Twojej sypialni, salonu, kuchni, jadalni czy przedpokoju. Klasyczna konstrukcja i abażury w liście świetnie komponują się z każdym wystrojem wnętrz. Abażury w zielone liście znakomicie ożywią i rozświetlą pomieszczenie. Natomiast abażury w szare liście idealnie wkomponują się w eleganckie i klasyczne aranżacje.
Jakie zalety posiada lampa wisząca 3-płomienna z abażurami w liście?
Lampa wisząca nowoczesna posiada regulację wysokości, dzięki której idealnie dopasujesz oświetlenie do pomieszczenia. Abażury lampy wykonane są z tkaniny odpornej na zabrudzenia, a metalowa konstrukcja jest wytrzymała i solidna. Oświetlenie wiszące zasilane jest żarówkami E27. Lampa posiada możliwość podłączenia pod podwójny przełącznik.";
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
$product->name = [$default_lang => "Lampa Wisząca z Abażurami w Liście Regulacja LED"];
$product->link_rewrite = [$default_lang => "lampa-wiszaca-z-abazurami-w-liscie-regulacja-led"];
$product->price = 119.00;
$product->quantity = 90;
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/lampa-wiszaca-z-abazurami-w-liscie-regulacja-led.jpg";
$product->image_url = $url;
$product->description = "Nowoczesna lampa wisząca 3-płomienna z abażurami w liście
Designerska lampa wisząca, która dodaje blasku i nowoczesności każdej aranżacji wnętrz. Wybierz wzór abażurów najlepiej oddający klimat Twojego mieszkania i ciesz się niesamowitym, przytulnym wystrojem.
Gdzie najlepiej zawiesić lampę wiszącą regulowaną 3-płomienną z abażurami w liście?
Lampa wisząca doskonale sprawdzi się w roli oświetlenia głównego. Możesz zawiesić lampę w centralnym punkcie pokoju, dzięki czemu oświetli równomiernie cały pokój. Lampa pasuje do sypialni, salonu, pokoju dziecka, kuchni czy przedpokoju. By uzyskać ciekawy efekt, zawieś każdy z abażurów na innej wysokości.
Czy prezentowana lampa wisząca LED z trzema abażurami w liście jest funkcjonalna?
Oczywiście, że tak. Lampa posiada regulowaną wysokość do 90 cm, dzięki czemu możesz powiesić ją zarówno w małym pokoju jak i w mieszkaniu w wysokiej kamienicy. Oświetlenie posiada dwa wzory abażura do wyboru – w zielone i szare liście. Do lampy pasują żarówki o standardowym gwincie E27. Oświetlenie posiada możliwość podłączenia pod podwójny przełącznik.";
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
$product->name = [$default_lang => "Nowoczesna Lampa Stojąca z Abażurem Złoty Środek"];
$product->link_rewrite = [$default_lang => "nowoczesna-lampa-stojaca-z-abazurem-zloty-srodek"];
$product->price = 189.00;
$product->quantity = 90;
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/nowoczesna-lampa-stojaca-z-abazurem-zloty-srodek.jpg";
$product->image_url = $url;
$product->description = "Nowoczesna lampa stojąca podłogowa z abażurem ze złotym środkiem
Stylowa lampa stojąca, która nadaje wnętrzom przytulności i ciepła. Oświetlenie posiada trzy kolory konstrukcji oraz cztery odcienie abażura ze złotym środkiem do wyboru. Wiele dostępnych barw pozwala na stworzenie lampy podłogowej, która idealnie będzie pasować do wystroju Twoich wnętrz.
Gdzie najlepiej prezentuje się stylowa lampa podłogowa LED z okrągłym abażurem?
Oświetlenie pasuje zarówno do nowoczesnych jak i klasycznych aranżacji. Lampę postaw obok łóżka w sypialni lub kanapy w salonie, a uzyskasz funkcjonalne oświetlenie do czytania i relaksu. Materiałowe abażury posiadają złote wnętrze. Ten drobny detal nadaje lampie wyjątkowości i sprawia, że światło wygląda jeszcze bardziej efektownie.
Jakie praktyczne funkcje posiada nowoczesna lampa stojąca metalowa z abażurem LED?
Lampa podłogowa posiada włącznik-wyłącznik nożny, który sprawia, że oświetlenie jest łatwe i wygodne w użytkowaniu. Lampy stojącej nie musisz nigdzie mocować, dzięki czemu możesz w każdej chwili przenieść ją w inne miejsce. Konstrukcja oświetlenia jest metalowa, przez co solidna i wytrzymała. Abażur wykonany jest z wysokiej jakości materiału. Lampa zasilana jest żaówkami E27.";
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
$product->name = [$default_lang => "Lampa Stojąca Drewniana Trójnóg Abażur ze Złotym Wnętrzem"];
$product->link_rewrite = [$default_lang => "lampa-stojaca-drewniana-trojnog-abazur-ze-zlotym-wnetrzem"];
$product->price = 229.00;
$product->quantity = 90;
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/lampa-stojaca-drewniana-trojnog-abazur-ze-zlotym-wnetrzem.jpg";
$product->image_url = $url;
$product->description = "Lampa stojąca podłogowa drewniana z abażurem o złotym wnętrzu
Połączyliśmy klasykę z nowoczesnością! Drewniana konstrukcja i kolorowe, materiałowe abażury tworzą niezwykłą lampę podłogową, która nadaje wnętrzom ciepła i przytulnego nastroju.
Gdzie najlepiej postawić stylową lampę podłogową z drewnianą konstrukcją i okrągłym abażurem?
Nowoczesny trójnóg z abażurem możesz postawić obok łóżka w sypialni lub kanapy w salonie, przez co zyskasz wspaniałe oświetlenie do czytania i relaksu. Drewniana konstrukcja nadaje wnętrzom przytulnego klimatu, a abażur ze złotym środkiem nada pomieszczeniu oryginalności. Lampa dostępna jest w wielu wariantach kolorystycznych, dzięki czemu możesz samodzielnie stworzyć oświetlenie idealnie oddające nastrój Twoich wnętrz. Lampa stojąca pasuje również do pokoju młodzieżowego lub dziecięcego.
Jakie zalety posiada nowoczesna lampa stojąca drewniana z abażurem ze złotym środkiem?
Lampa podłogowa została wykonana z najwyższej jakości materiałów, dzięki czemu będzie zdobiła Twoje wnętrza przez bardzo długi czas. Oświetlenie posiada włącznik-wyłącznik nożny, który odpowiada za wygodne i praktyczne użytkowanie lampy. Trójnóg nie wymaga mocowania i jest lekki, dzięki czemu możesz w każdej chwili zmienić jego położenie i tym samym odmienić wystrój mieszkania. Lampa podłogowa zasilana jest najpopularniejszymi rodzajami źródeł światła – żarówkami E27.";
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
$product->name = [$default_lang => "Lampka Nocna Stołowa Loft z Abażurem"];
$product->link_rewrite = [$default_lang => "lampka-nocna-stolowa-loft-z-abazurem"];
$product->price = 69.00;
$product->quantity = 90;
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/lampka-nocna-stolowa-loft-z-abazurem.jpg";
$product->image_url = $url;
$product->description = "Lampka nocna stojąca loft z abażurem ze złotym środkiem
Niezwykła lampka nocna, która nada wyjątkowego charakteru Twoim wnętrzom. Efektowna konstrukcja lampy stołowej została stworzona w industrialnym tonie, który świetnie prezentuje się również w pomieszczeniach urządzonych w stylu nowoczesnym i klasycznym. Funkcjonalna, designerska i piękna – nasza lampka stołowa pasuje nie tylko do sypialni.
W jakich wnętrzach nowoczesna lampka nocna stołowa ze złotym abażurem loft wygląda najlepiej?
Lampka stołowa idealnie pasuje do nowoczesnej, klasycznej lub industrialnej sypialni. Postaw lampę na szafce nocnej tuż przy łóżku, a zyskasz funkcjonalne oświetlenie i stylową dekorację. Lampkę stołową możesz również postawić w salonie, jadalni lub na komodzie w przedpokoju. Lampa będzie pełniła funkcje dekoracyjne w tych wnętrzach. Dodatkowo jeśli zestawisz lampkę z oświetleniem wiszącym z takim samym abażurem, zyskasz spójną i harmonijną aranżację wnętrza.
Jakie zalety posiada lampa nocna stołowa z abażurem metalowa?
Lampa posiada włącznik-wyłącznik, dzięki któremu użytkowanie oświetlenia jest łatwe i funkcjonalne. Lampka nocna posiada trzy kolory konstrukcji oraz cztery barwy abażura do wyboru, dzięki czemu możesz stworzyć oświetlenie idealnie dopasowane do stylu swoich wnętrz. Złoty środek abażura doda przytulności pomieszczeniom. Lampka zasilana jest popularnymi źródłami światła E27.";
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
$product->name = [$default_lang => "Lampa Stojąca Metalowa z Abażurem Złoty Środek"];
$product->link_rewrite = [$default_lang => "lampa-stojaca-metalowa-z-abazurem-zloty-srodek"];
$product->price = 199.00;
$product->quantity = 90;
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/lampa-stojaca-metalowa-z-abazurem-zloty-srodek.jpg";
$product->image_url = $url;
$product->description = "Lampa stojąca pojedyncza metalowa z abażurem o złotym środku
Dodaj swoim pomieszczeniom przytulności i nowego, niezwykłego designu. Lampa podłogowa z metalową konstrukcją i okrągłym abażurem wspaniale prezentuje się we wnętrzach w stylu nowoczesnym, klasycznym i industrialnym.
Gdzie najlepiej wygląda nowoczesna lampa stojąca z metalu i z okrągłym abażurem?
Lampa podłogowa najlepiej sprawdza się w sypialni, gdzie postawiona obok łóżka pełni rolę oświetlenia do czytania i wieczornego relaksu z ulubioną książką. Lampa stojąca będzie świetnym oświetleniem dekoracyjnym w Twoim salonie, przedpokoju czy pokoju dziecka. Oświetlenie możesz zestawić z lampami wiszącymi z tej samej serii, dzięki czemu zyskasz spójną i w pełni dopasowaną aranżację wnętrza.
Czy prezentowana lampa podłogowa stojąca metalowa ze złotym abażurem jest praktyczna?
Oczywiście, że tak. Oświetlenie stojące posiada włącznik-wyłącznik nożny, dzięki któremu korzystanie z lampy jest wygodne i funkcjonalne. Dostępne są trzy kolory konstrukcji oraz cztery kolory abażura, przez co możesz samodzielnie stworzyć oświetlenie dopasowane do Twoich wnętrz. Złoty środek abażura nadaje lampie oryginalności. Do oświetlenia pasują popularne żarówki E27.";
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
$product->name = [$default_lang => "Lampa Podłogowa Drewniana Stojąca Trójnóg z Abażurem"];
$product->link_rewrite = [$default_lang => "lampa-podlogowa-drewniana-stojaca-trojnog-z-abazurem"];
$product->price = 239.00;
$product->quantity = 90;
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/lampa-podlogowa-drewniana-stojaca-trojnog-z-abazurem.jpg";
$product->image_url = $url;
$product->description = "Nowoczesna lampa podłogowa trójnóg z drewna z materiałowym abażurem
Drewniana konstrukcja i materiałowy abażur ze złotym środkiem to duet, który pięknie łączy klasykę z nowoczesnością. Lampa stojąca pasuje do wielu stylów wnętrzarskich – każdemu wnętrzu nadaje przytulny i nastrojowy klimat.
W jakich pomieszczeniach lampa podłogowa stojąca drewniana z abażurem wygląda najlepiej?
Drewniany trójnóg z abażurem jest lampą idealną do sypialni. Postaw oświetlenie obok łóżka, dzięki czemu zyskasz stylową i funkcjonalną lampę do czytania i wieczornego relaksu. Trójnóg rewelacyjnie uzupełni również aranżację salonu, przedpokoju bądź pokoju młodzieżowego. Abażury lampy stojącej posiadają złote wnętrze, która dodają wnętrzom wyjątkowości i przytulnego nastroju.
Jakie zalety posiada stylowa lampa podłogowa z drewna z abażurem?
Oświetlenie stojące posiada włącznik-wyłącznik nożny, który odpowiada za wygodne i praktyczne użytkowanie lampy. Oświetlenie zostało wykonane z materiałów najwyższej jakości. Lampa posiada pięć kolorów konstrukcji oraz cztery barwy abażura do wyboru. Tak wiele wariantów pozwoli Ci stworzyć oświetlenie najlepiej oddające charakter Twoich wnętrz. Do lampy pasują żarówki E27.";
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
$product->name = [$default_lang => "Pojedyncza Lampa Wisząca z Abażurem w Kolorowe Wzory"];
$product->link_rewrite = [$default_lang => "pojedyncza-lampa-wiszaca-z-abazurem-w-kolorowe-wzory"];
$product->price = 40.00;
$product->quantity = 90;
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/pojedyncza-lampa-wiszaca-z-abazurem-w-kolorowe-wzory.jpg";
$product->image_url = $url;
$product->description = "Pojedyncza lampa wisząca do pokoju dziecka abażur w trójkąty
Lampa wisząca o oryginalnym wzorze, który nadaje wnętrzom niezwykłego charakteru. Oświetlenie dostępne jest w wielu wariantach kolorystycznych, dzięki czemu stworzysz lampę idealnie dopasowaną do barw panujących w Twoim wnętrzu.
W jakich pomieszczeniach lampa wisząca regulowana w kolorowe wzory wygląda najlepiej?
Dzięki swojej żywej kolorystyce, zwis wiszący świetnie pasuje do pokoju dziecka. Podkreśli wesoły charakter tego pomieszczenia. Lampa we wzory doskonale sprawdzi się również w minimalistycznych aranżacjach wnętrz. Jej kolorowy abażur świetnie przełamie i ożywi stonowany wystrój pomieszczenia.
Jakie zalety posiada nowoczesna lampa wisząca we wzory do pokoju dziecka?
Lampa z abażurem posiada regulację wysokości, dzięki której możesz dostosować oświetlenie do wymiarów pomieszczenia. Zwis wiszący pojedynczy młodzieżowy dostępny jest w trzech kolorach abażura i konstrukcji. Abażur lampy wykonany jest z wysokiej jakości materiału, a konstrukcja jest metalowa, dzięki czemu oświetlenie będzie dekorowało wnętrza bardzo długi czas. Lampa zasilana jest żarówkami E27.";
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
$product->name = [$default_lang => "Lampa Wisząca Regulowana z Abażurami we Wzory"];
$product->link_rewrite = [$default_lang => "lampa-wiszaca-regulowana-z-abazurami-we-wzory"];
$product->price = 99.00;
$product->quantity = 90;
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/lampa-wiszaca-regulowana-z-abazurami-we-wzory.jpg";
$product->image_url = $url;
$product->description = "Lampa wisząca regulowana 2-płomienna dziecięca
Szukasz funkcjonalnej i oryginalnej lampy do pokoju dziecka? A może chcesz przełamać stonowaną aranżację wnętrz kolorowym i stylowym oświetleniem? Mamy lampę wiszącą, której szukasz! Prosta konstrukcja w połączeniu z abażurami w kolorowe trójkąty wygląda niezwykle designersko i oryginalnie.
W jakich pomieszczeniach lampa wisząca we wzory z regulacją wysokości będzie prezentować się najlepiej?
Lampa wisząca z abażurami pasuje do pokoju dziecięcego, gdzie podkreśla wesołość i zabawę. Jednak oświetlenie możesz zawiesić również w swojej sypialni, kuchni, przedpokoju bądź salonie. Jeśli Twoje wnętrza urządzone są w nowoczesnym, minimalistycznym stylu, to lampa z abażurami w kolorowe wzory stylowo ożywi wystrój mieszkania.
Jakie praktyczne funkcje posiada nowoczesna lampa wisząca z abażurami w trójkąty?
Największą zaletą oświetlenia jest regulowana wysokość, która pozwala dostosować oświetlenie do każdego rozmiaru pomieszczenia. Ponadto abażury i konstrukcja lampy wiszącej dostępne są w trzech różnych kolorach, dzięki czemu masz pewność, że skomponujesz oświetlenie idealnie pasujące do barw panujących w Twoim mieszkaniu. Lampa wisząca nowoczesna została wykonana z solidnych, wysokiej jakości materiałów, dzięki którym będzie ozdabiała Twoje wnętrza przez długie lata. Oświetlenie zasilane jest żarówkami E27. Lampa posiada możliwość podłączenia pod podwójny przełącznik.";
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
$product->name = [$default_lang => "Nowoczesna Lampa Wisząca z Abażurami w Kolorowe Wzory"];
$product->link_rewrite = [$default_lang => "nowoczesna-lampa-wiszaca-z-abazurami-w-kolorowe-wzory"];
$product->price = 119.00;
$product->quantity = 90;
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/nowoczesna-lampa-wiszaca-z-abazurami-w-kolorowe-wzory.jpg";
$product->image_url = $url;
$product->description = "Nowoczesna lampa wisząca regulowana z abażurami we wzory
Designerska lampa wisząca, która ożywi Twoje wnętrza i doda im wyjątkowego charakteru. Oświetlenie dostępne jest w wielu wariantach kolorystycznych, dzięki czemu możesz samodzielnie skomponować lampę najlepiej oddającą klimat Twoich wnętrz.
W jakich pomieszczeniach najlepiej wygląda nowoczesna lampa z abażurami we wzory z regulowaną wysokością?
Lampa wisząca z abażurami pasuje do pokoju dziecięcego i młodzieżowego ze względu na kolorowe wzory. Doskonale prezentuje się również w minimalistycznych aranżacjach salonu, kuchni, sypialni czy przedpokoju. Abażury w kolorowe trójkąty znakomicie ożywiają stonowany wystrój wnętrz.
Jakie praktyczne właściwości posiada lampa wisząca regulowana z abażurami we wzory?
Konstrukcja lampy wiszącej została wykonana z metalu, a abażury ze specjalnego materiału odpornego na uszkodzenia. Dzięki temu oświetlenie będzie dekorowało Twoje wnętrza przez bardzo długi czas. Lampa dziecięca posiada regulację wysokości, która pozwala na idealne dopasowanie oświetlenia do rozmiaru pomieszczenia. Dodatkowo możesz zawiesić każdy z abażurów na innej wysokości, co wygląda bardzo efektownie. Lampa wisząca nowoczesna zasilana jest popularnymi żarówkami E27. Oświetlenie posiada możliwość podłączenia pod podwójny przełącznik.";
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
$product->name = [$default_lang => "Lampa Wisząca Nowoczesna Abażury we Wzory"];
$product->link_rewrite = [$default_lang => "lampa-wiszaca-nowoczesna-abazury-we-wzory"];
$product->price = 119.00;
$product->quantity = 90;
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/lampa-wiszaca-nowoczesna-abazury-we-wzory.jpg";
$product->image_url = $url;
$product->description = "Oryginalna lampa wisząca 3-płomienna z abażurami w kolorowe wzory
Chcesz dodać swoim wnętrzom wyjątkowego charakteru? Pragniesz nieco ożywić stonowany wystrój mieszkania? A możesz szukasz lampy do pokoju dziecka lub nastolatka? Mamy dla Ciebie oświetlenie, które idealnie wkomponuje się w styl Twoich wnętrz.
Do jakich pomieszczeń pasuje nowoczesna lampa wisząca z abażurami w trójkąty i regulacją wysokości?
Lampa wisząca z abażurami może stać się oświetleniem głównym w pokoju dziecka. Kolorowe wzory podkreślają wesoły charakter tego pomieszczenia. Lampę możesz powiesić w centralnym punkcie pokoju, wtedy równomiernie oświetli całe wnętrze. Lampa wisząca pasuje również do innych pomieszczeń urządzonych w nowoczesnym stylu, na przykład sypialni, salonu, kuchni bądź przedpokoju.
Jakie przydatne funkcje posiada lampa wisząca z trzema abażurami we wzory?
Lampa dziecięca posiada regulowaną wysokość, która nie tylko umożliwia dopasowanie oświetlenia do rozmiaru pokoju, ale również pozwala na zwieszenie każdego z abażurów na innym poziomie. Dodaje to wnętrzom jeszcze ciekawszego efektu. Lampa wisząca dostępna jest w trzech kolorach abażurów i konstrukcji, dzięki czemu stworzysz oświetlenie idealnie komponujące się ze stylem Twoich wnętrz. Oświetlenie zasilane jest żarówkami E27. Lampa posiada możliwość podłączenia pod podwójny przełącznik.";
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
$product->name = [$default_lang => "Nowoczesna Lampa Sufitowa Żyrandol Abażury we Wzory"];
$product->link_rewrite = [$default_lang => "nowoczesna-lampa-sufitowa-zyrandol-abazury-we-wzory"];
$product->price = 119.00;
$product->quantity = 90;
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/nowoczesna-lampa-sufitowa-zyrandol-abazury-we-wzory.jpg";
$product->image_url = $url;
$product->description = "Lampa sufitowa z abażurami we trójkątne wzory
Oświetl swoje wnętrza niezwykłym żyrandolem sufitowym, który doda oryginalności Twoim wnętrzom. Lampa z abażurami we wzory pasuje do pokoju dziecka oraz wszędzie tam, gdzie chcesz osiągnąć designerski wygląd wnętrz. Oświetlenie posiada wiele wariantów kolorystycznych, dzięki którym dopasujesz lampę do stylu swojego pomieszczenia.
W jakich wnętrzach najlepiej prezentuje się nowoczesna lampa sufitowa z regulacją i kolorowymi abażurami w kształcie diamentu?
Lampa sufitowa może pełnić rolę oświetlenia głównego w pokoju dziecięcym, sypialni, kuchni, salonie czy przedpokoju. Żyrandol zawieś w centralnym punkcie pomieszczenia, a trzy źródła zasilania z regulacją kąta padania światła równomiernie oświetlą całe wnętrze, również te najbardziej wymagające części pokoju. Abażury w kolorowe trójkąty świetnie wpasowują się w koncepcję wesołej aranżacji pokoju dziecka. Doskonale ożywią również minimalistyczne aranżacje wnętrz, którym brakuje mocnego akcentu.
Jakie zalety posiada nowoczesna lampa sufitowa żyrandol z abażurami?
Największym atutem żyrandola z abażurami jest regulacja kąta padania światła. Dzięki niej za pomocą jednej lampy oświetlisz całe pomieszczenie. Zaletą oświetlenia sufitowego są również trzy kolory konstrukcji i abażurów do wyboru. Pozwala to na stworzenie lampy idealnie oddającej klimat urządzanego wnętrza. Żyrandol zasilany jest żarówkami o gwincie E27. Lampa sufitowa posiada możliwość podłączenia pod podwójny przełącznik.";
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
$product->name = [$default_lang => "Nowoczesna Lampa Wisząca Pojedyncza z Kolorowym Abażurem Regulowana"];
$product->link_rewrite = [$default_lang => "nowoczesna-lampa-wiszaca-pojedyncza-z-kolorowym-abazurem-regulowana"];
$product->price = 40.00;
$product->quantity = 90;
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/nowoczesna-lampa-wiszaca-pojedyncza-z-kolorowym-abazurem-regulowana.jpg";
$product->image_url = $url;
$product->description = "Pojedyncza lampa wisząca z abażurem w kolorowe wzory z regulacją wysokości
Pora zmienić otaczający Cię wystrój wnętrz! Dodaj sobie nowej energii i patrz z zachwytem na aranżację swojego mieszkania. W jaki sposób możesz to uczynić? Dodaj lampę wiszącą z abażurem w kolorowe wzory do swoich wnętrz.
W jakich pomieszczeniach nowoczesna lampa wisząca z abażurem we wzory będzie wyglądała najlepiej?
dzięki kolorowym wzorom zwis wiszący świetnie sprawdzi się w roli oświetlenia do pokoju dziecka i nastolatka,
geometryczne i kolorowe wzory znakomicie ożywią wnętrza w stylu nowoczesnym i skandynawskim,
lampa z abażurem pięknie wygląda w sypialni, kuchni, przedpokoju, salonie i wszędzie tam, gdzie chcesz wprowadzić powiew świeżości.
Jakie praktyczne funkcje posiada lampa wisząca z abażurem w kolorowe geometryczne wzory?
Zwis wiszący pojedynczy z abażurem posiada regulowaną wysokość, dzięki której dopasujesz lampę do wymiarów swojego pomieszczenia. Abażur i konstrukcja dostępne są w trzech różnych kolorach do wyboru. Pozwala to stworzyć własną wersję lampy, która idealnie dopasuje się do wystroju pokoju. Abażur lampy wiszącej został wykonany z solidnego materiału, a konstrukcja z wytrzymałego metalu. Dzięki trwałym materiałom wykonania lampa będzie oświetlała Twoje mieszkanie bardzo długi czas.
Wybierz kolory lampy i zacznij zmieniać swoje wnętrza na lepsze!";
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
$product->name = [$default_lang => "Lampa Wisząca Dziecięca z Abażurem w Kolorowe Wzory"];
$product->link_rewrite = [$default_lang => "lampa-wiszaca-dziecieca-z-abazurem-w-kolorowe-wzory"];
$product->price = 59.00;
$product->quantity = 90;
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/lampa-wiszaca-dziecieca-z-abazurem-w-kolorowe-wzory.jpg";
$product->image_url = $url;
$product->description = "Lampa wisząca nowoczesna abażur w kolorowe wzory do pokoju dziecka
Lampa wisząca z abażurem dla fanów nowoczesnego stylu. Kolorowe wzory oświetlenia cudnie przełamują minimalistyczne i stonowane aranżacje wnętrz. Zwis wiszący jest również świetną propozycją do pokoju dziecka. To Ty zdecydujesz, któremu pomieszczeniu lampa doda najwięcej uroku!
W jakich wnętrzach nowoczesna lampa wisząca z kolorowym abażurem wygląda najlepiej?
Lampa w kolorowe wzory cudownie ożywia wnętrza w stylu nowoczesnym czy skandynawskim. Żywe barwy abażura czynią oświetlenie idealnym do pokoju dziecka. Lampa wisząca podkreśla radość i beztroskę tego pomieszczenia.
Zwis wiszący pojedynczy z abażurem wygląda fenomenalnie zarówno w sypialni, pokoju gościnnym jak i kuchni, jadalni czy przedpokoju. Jeśli tylko lampa komponuje się ze stylem pokoju, to jego przeznaczenie nie ma znaczenia.
Oryginalny wzór abażura w kolorowe trójkąty zachwyca nowoczesnością i świetnym połączeniem kolorów. Możesz mieć pewność, że goście nie przejdą obojętnie obok lampy wiszącej nowoczesnej.
Jakie zalety posiada stylowa lampa wisząca pojedyncza z abażurem w kolorowe trójkąty?
Regulowana wysokość – dzięki niej lampa z abażurem idealnie dopasuje się do rozmiaru Twojego wnętrza.
Wysoka jakość materiałów wykonania – abażur jest z materiału odpornego na uszkodzenia, a konstrukcję wykonaliśmy z metalu. Dzięki temu jest solidna i wytrzymała.
3 różne kolory abażura i konstrukcji do wyboru – masz pełną dowolność – stwórz własny wariant lampy wiszącej, który najlepiej oddaje zarówno charakter wnętrz jak i Twój.
Zasilana żarówkami E27 – to najpopularniejszy rodzaj gwintu, dzięki czemu bardzo łatwo dopasujesz pasujące źródła światła do lampy. Możesz wybrać żarówki LED, zwykłe lub dekoracyjne – wszystko zależy od tego, jaki efekt chcesz osiągnąć w swoim wnętrzu.
Odmień swoje wnętrza oryginalną lampą z abażurem!";
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
$product->name = [$default_lang => "Nowoczesna Lampa Wisząca Abażur we Wzory Pokój Dziecka"];
$product->link_rewrite = [$default_lang => "nowoczesna-lampa-wiszaca-abazur-we-wzory-pokoj-dziecka"];
$product->price = 69.00;
$product->quantity = 90;
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/nowoczesna-lampa-wiszaca-abazur-we-wzory-pokoj-dziecka.jpg";
$product->image_url = $url;
$product->description = "Lampa wisząca z abażurem w kolorowe wzory regulowana
Chcesz odmienić wystrój swoich wnętrz bez wielkiego budżetu? Mamy pomysł na zmianę Twojego mieszkania. Wprowadź do aranżacji nową lampę wiszącą. Nasza propozycja to oświetlenie z abażurem w kolorowe wzory, które znakomicie ożywia minimalistyczne wnętrza i dodaje im uroku.
Gdzie najlepiej prezentuje się nowoczesna lampa wisząca z okrągłym abażurem w kolorowe wzory?
Zwis wiszący cudownie odnajduje się w nowoczesnych i skandynawskich wnętrzach. Dodaje im wyjątkowego charakteru, świetnie przełamuje stonowane aranżacje wnętrz. Żywe kolory wzorów na abażurach czynią oświetlenie idealną lampą dziecięcą. Podkreśla radość i beztroskę pokoju naszych najmłodszych. Zwis wiszący pojedynczy z abażurem pasuje zarówno do sypialni czy salonu jak i kuchni, jadalni bądź przedpokoju.
Jakie praktyczne funkcje posiada pojedyncza lampa wisząca nowoczesna z abażurem we wzory?
Największą zaletą lampy z abażurem jest regulacja wysokości. Dzięki niej perfekcyjnie dopasujesz oświetlenie do wymiaru swojego pokoju. Lampa posiada 3 różne kolory abażura i konstrukcji do wyboru, za sprawą których stworzysz własną wersję oświetlenia idealnie pasującą do stylu Twoich wnętrz. Lampa wisząca z abażurem zasilana jest żarówkami E27 – mogą to być źródła światła LED, zwykłe lub dekoracyjne. Abażur lampy wiszącej jest materiałowy, a konstrukcja metalowa, dzięki czemu oświetlenie dekoruje wnętrza przez wiele lat.
Skomponuj swoją wersję lampy i odmień swoje wnętrza kolorowym oświetleniem!";
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
$product->name = [$default_lang => "Lampa Wisząca z Abażurem w Kolorowe Wzory Nowoczesna Dziecięca"];
$product->link_rewrite = [$default_lang => "lampa-wiszaca-z-abazurem-w-kolorowe-wzory-nowoczesna-dziecieca"];
$product->price = 79.00;
$product->quantity = 90;
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/lampa-wiszaca-z-abazurem-w-kolorowe-wzory-nowoczesna-dziecieca.jpg";
$product->image_url = $url;
$product->description = "Pojedyncza lampa wisząca z okrągłym abażurem w kolorowe wzory
Lubisz nowoczesny styl? Jesteś fanem nieszablonowych, ale pięknych rozwiązań we wnętrzach? A może po prostu masz ochotę odmienić coś w swojej aranżacji mieszkania? W każdym z tych przypadków idealnie sprawdza się nasza lampa wisząca z abażurem w kolorowe wzory!
W jakich pomieszczeniach nowoczesna lampa wisząca z kolorowym abażurem i regulacją wysokości wygląda najlepiej?
Salon, sypialnia, kuchnia, przedpokój, pokój dziecka czy nastolatka – lampa wisząca odnajduje się w każdym wnętrzu. Wystarczy, że pomieszczenie urządzone jest w nowoczesnym, skandynawskim bądź minimalistycznym. Wtedy zwis wiszący świetnie ożywia cały wystrój pokoju.
Kolorowe wzory czynią lampę z abażurem idealną do pokoju dziecka. Różowy motyw z pewnością spodoba się dorastającej dziewczynce, natomiast niebieski i żółty to znakomita propozycja dla chłopców.
Jakie praktyczne właściwości posiada stylowa lampa wisząca z abażurem w kolorowe trójkąty?
Regulacja wysokości – dzięki niej dopasujesz zwis wiszący pojedynczy z abażurem do wymiarów urządzanego pokoju.
3 różne kolory abażurów i konstrukcji do wyboru – pozwala to na tworzenie wielu wariantów kolorystycznych lampy.
Jakość materiałów wykonania – materiał na abażury oraz metalowa konstrukcja sprawiają, że lampa wisząca będzie oświetlała Twoje wnętrza przez wiele lat.
Wybierz kolory lampy i ciesz się odmienionymi wnętrzami!";
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
$product->name = [$default_lang => "Nowoczesna Lampa Stojąca Dziecięca Abażur we Wzory"];
$product->link_rewrite = [$default_lang => "nowoczesna-lampa-stojaca-dziecieca-abazur-we-wzory"];
$product->price = 159.00;
$product->quantity = 90;
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/nowoczesna-lampa-stojaca-dziecieca-abazur-we-wzory.jpg";
$product->image_url = $url;
$product->description = "Lampa stojąca podłogowa z abażurem w kolorowe wzory LED
Wprowadź do swoich wnętrz oświetlenie, które zachwyca oryginalnym stylem i dodaje przytulności pomieszczeniom. Właśnie takim oświetleniem jest nasza lampa stojąca z abażurem w kolorowe wzory. Prosta, metalowa konstrukcja i barwny abażur tworzą połączenie, które znakomicie ożywia i uatrakcyjnia wnętrza.
Gdzie najlepiej wygląda nowoczesna lampa stojąca metalowa z materiałowym abażurem we wzory?
Lampa podłogowa jest świetnym uzupełnieniem nowoczesnych, minimalistycznych i skandynawskich aranżacji wnętrz. Świetnie oddaje nastrój również pokoju dziecięcego. Podkreśla jego wesoły charakter.
Lampę z abażurem możesz postawiać w sypialni, salonie, kuchni, przedpokoju lub biurze. Lampa idealnie sprawdza się w roli oświetlenia wspomagającego służącego do wypoczynku i relaksu.
Jakie zalety posiada stylowa lampa podłogowa z kolorowym abażurem?
Włącznik – wyłącznik nożny – dzięki niemu lampa jest wygodna w użytkowaniu.
3 kolory abażura i konstrukcji do wyboru – pozwala dopasować oświetlenie do wystroju wnętrz.
Wysoka jakość materiałów wykonania – dzięki nim lampa posłuży Ci przez wiele długich lat.
Zasilana żarówkami E27 – do lampy pasują źródła światła o popularnym gwincie E27. Możesz wybrać żarówki zwykłe, dekoracyjne lub LED.
Dodaj swoim wnętrzom przytulności i oryginalności, dzięki lampie stojącej z abażurem!";
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
$product->name = [$default_lang => "Lampa Stojąca Podłogowa z Abażurem w Kolorowe Wzory"];
$product->link_rewrite = [$default_lang => "lampa-stojaca-podlogowa-z-abazurem-w-kolorowe-wzory"];
$product->price = 199.00;
$product->quantity = 90;
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/lampa-stojaca-podlogowa-z-abazurem-w-kolorowe-wzory.jpg";
$product->image_url = $url;
$product->description = "Lampa stojąca podłogowa trójnóg z abażurem w kolorowe wzory
Nowoczesne i oryginalne wnętrza o przytulnym klimacie – kto z nas nie marzy o takim wystroju mieszkania? Z nami łatwo stworzysz zjawiskową aranżację wnętrz. Prezentowana lampa stojąca doda nowoczesności i wyjątkowości wnętrzom, dzięki abażurowi w kolorowe wzory. Ponadto nic tak nie dodaje mieszkaniu więcej przytulności niż barwny, materiałowy abażur lampy.
W jakich pomieszczeniach nowoczesna lampa podłogowa z abażurem we wzory wygląda najlepiej?
Nowoczesna sypialnia, salon, kuchnia, jadalnia czy przedpokój – każde z tych wnętrz jest odpowiednie dla lampy stojącej na trójnogu. Kolorowe wzory abażura czynią lampę idealną również do pokoju dziecka.
Lampa z abażurem stojąca znakomicie sprawdza się w roli oświetlenia wspomagającego. To znaczy, że możesz postawić ją przy łóżku, kanapie bądź komodzie. W tych miejscach spełni rolę oświetlenia do relaksu lub do mniej wymagających czynności.
Jakie przydatne funkcje posiada stylowa lampa stojąca trójnóg z kolorowym abażurem?
Lampa podłogowa posiada szereg zalet, które czynią ją bardzo praktyczną, solidną i designerską. Oto one:
Posiada włącznik-wyłącznik nożny – dzięki niemu obsługa lampy podłogowej jest łatwa i wygodna.
Jest mobilna – lampa stojąca nie wymaga mocowania do ściany lub sufitu. Dlatego bardzo łatwo możesz ją przenieść i zmienić wystrój innego pokoju w swoim mieszkaniu.
Posiada wiele wariantów kolorystycznych – 3 różne kolory abażura i konstrukcji do wyboru sprawiają, że skomponujesz oświetlenie, które najlepiej wyraża Twój styl.
Wysoka jakość tworzyw – lampa stojąca wykonana jest z materiałów, które zapewniają niezmienny wygląd oświetlenia na wiele lat.
Żarówki E27 – lampa zasilana jest popularnymi źródłami światła E27. Możesz dopasować do niej zarówno żarówki LED, zwykłe jak i dekoracyjne.
Dodaj fantazji i oryginalności swoim wnętrzom już dziś!";
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
$product->name = [$default_lang => "Lampa Wisząca Pojedyncza Abażur Diament Złoty Środek"];
$product->link_rewrite = [$default_lang => "lampa-wiszaca-pojedyncza-abazur-diament-zloty-srodek"];
$product->price = 59.00;
$product->quantity = 90;
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/lampa-wiszaca-pojedyncza-abazur-diament-zloty-srodek.jpg";
$product->image_url = $url;
$product->description = "Lampa wisząca pojedyncza z abażurem diament złoty środek
Elegancja i nowoczesność w jednym! Nasz zwis wiszący pięknie dekoruje wnętrza w stylu nowoczesnym, klasycznym, minimalistycznym lub industrialnym. Czarny kolor lampy wiszącej cudownie komponuje się z każdym wystrojem pomieszczeń. Złote wnętrze abażura dodaje oryginalności i klasy.
Gdzie najlepiej zawiesić stylową lampę wiszącą z abażurem diament o złotym środku?
Elegancki salon, jadalnia, stylowa kuchnia, sypialnia czy przedpokój – powieś lampę z abażurem tam, gdzie według Ciebie najmocniej odmieni cały wystrój.
Czarny abażur o złotym wnętrzu w kształcie diamentu przyciągnie spojrzenia i stanie się największą dekoracją każdej aranżacji pokoju. Całość dopełnia minimalistyczna konstrukcja, która nie odciąga uwagi od głównego elementu dekoracyjnego – abażura.
Jakie praktyczne funkcje posiada elegancka lampa wisząca z czarnym abażurem o złotym wnętrzu?
Zwis wiszący pojedynczy z abażurem posiada regulację wysokości. Dzięki tej funkcji z łatwością dopasujesz lampę do wymiarów pokoju. Ciekawym pomysłem na wystrój wnętrza jest zawieszenie kilku tych samych lamp z abażurem obok siebie na różnej wysokości.
Lampę wiszącą stworzyliśmy z solidnych materiałów, dzięki którym oświetlenie będzie dekoracją Twojego domu bardzo długi czas. Lampa z abażurem zasilana jest żarówkami z gwintem E27, dzięki czemu łatwo dobierzesz źródła światła najlepiej oddające charakter Twoich wnętrz.
Wybierz czarną lampę wiszącą ze złotym abażurem i zachwycaj nową, elegancką aranżacją wnętrz!";
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
$product->name = [$default_lang => "Lampa Wisząca Nowoczesna Abażury Diament Złote"];
$product->link_rewrite = [$default_lang => "lampa-wiszaca-nowoczesna-abazury-diament-zlote"];
$product->price = 119.00;
$product->quantity = 90;
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/lampa-wiszaca-nowoczesna-abazury-diament-zlote.jpg";
$product->image_url = $url;
$product->description = "Lampa wisząca 2-płomienna z czarnymi abażurami ze złotym wnętrzem diament
Niezwykła lampa wisząca, która dekoruje zarówno nowoczesne, industrialne jak i klasyczne aranżacje wnętrz. Z czego wynika jej uniwersalność? Ze stylowego wyglądu! Czarny kolor komponuje się ze wszystkimi innymi barwami, abażury w kształcie diamentu dodają nowoczesności i elegancji, a złote wnętrza czynią wystrój oryginalnym.
W jakich pomieszczeniach najlepiej wygląda stylowa lampa wisząca ze złotymi abażurami diament?
Lampę wiszącą nowoczesną możesz zawiesić wszędzie tam, gdzie czujesz, że stanie się piękną dekoracją – w salonie, kuchni, jadalni, sypialni czy przedpokoju. Lampa z abażurami w kształcie diamentu dopełni wystrój wnętrz w stylu loft, nowoczesnym lub klasycznym. Czarny kolor doda pomieszczeniu wytworności. Złote wnętrza abażurów sprawią, że wystrój zyska własny, niepowtarzalny charakter.
Jakie praktyczne funkcje posiada nowoczesna czarna lampa 2-płomienna ze złotymi abażurami diament?
Nasza lampa wisząca z abażurami o złotym środku posiada szereg właściwości, które czynią z niej nie tylko stylowe, ale również funkcjonalne oświetlenie.
Regulacja wysokości – pozwala Ci idealnie dopasować lampę do rozmiaru pokoju. Dzięki niej możesz także powiesić każdy z abażurów na innej wysokości. Lampa zawieszona w ten sposób wygląda niezwykle efektownie.
Wysoka jakość tworzyw – konstrukcja jest metalowa, a abażury wykonane są ze specjalnego materiału. Dzięki solidnym tworzywom lampa będzie wyglądać niezmiennie przez długi czas.
Możliwość podłączenia pod podwójny przełącznik.
Wyraź charakter swoich wnętrz naszą designerską lampą ze złotymi abażurami!";
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
$product->name = [$default_lang => "Czarna Lampa Wisząca z Abażurami Diament Złoty Środek"];
$product->link_rewrite = [$default_lang => "czarna-lampa-wiszaca-z-abazurami-diament-zloty-srodek"];
$product->price = 134.10;
$product->quantity = 90;
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/czarna-lampa-wiszaca-z-abazurami-diament-zloty-srodek.jpg";
$product->image_url = $url;
$product->description = "Lampa wisząca z trzema źródłami zasilania abażury ze złotym środkiem diament
Lampa 3-płomienna z abażurami nadaje wnętrzom wyjątkowości, mimo pozornego prostego wyglądu. Abażury oświetlenia posiadają złote środki. Wygląda to oryginalnie, nowocześnie i zarazem elegancko. Złote abażury w kształcie diamentu dodają wyjątkowego charakteru wnętrzom.
W jakich pomieszczeniach nowoczesna lampa wisząca z abażurami o złotym wnętrzu w kształcie diamentu wygląda najlepiej?
Lampa z abażurami pasuje zarówno do nowoczesnych, jak i industrialnych czy klasycznych aranżacji wnętrz. Cudownie wygląda zawieszona tuż nad stołem w jadalni lub kanapą w salonie. Lampa wisząca świetnie sprawdzi się również w sypialni, kuchni czy nowoczesnym biurze. Prosta konstrukcja, czarny kolor, abażury o złotym wnętrzu w kształcie diamentu – to wszystko sprawia, że lampa jest uniwersalna i pięknie prezentuje się w wielu rodzajach pomieszczeń.
Jakie zalety posiada stylowa lampa 3-płomienna z abażurami o złotym środku diament?
Regulowana wysokość – funkcja ta pozwoli Ci idealnie dopasować lampę do rozmiaru pokoju. Ponadto możesz zawiesić każdy z abażurów na innej wysokości, co dodaje aranżacji efektownego wyglądu.
Solidne materiały wykonania – materiałowe abażury i metalowa konstrukcja to połączenie, które będzie zdobiło Twoje wnętrza długi czas.
Żarówki E27 – do lampy wiszącej pasują popularne typy źródeł światła E27, dzięki czemu łatwo znajdziesz pasujący typ żarówki. Możesz wybrać źródła zasilania LED, zwykłe lub dekoracyjne.
Lampa posiada możliwość podłączenia pod podwójny przełącznik.
Odmień swoje wnętrza na lepsze stylową lampą ze złotymi abażurami!";
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
$product->name = [$default_lang => "Czarna Lampa Sufitowa Żyrandol z Abażurami Diament Złote Wnętrze"];
$product->link_rewrite = [$default_lang => "czarna-lampa-sufitowa-zyrandol-z-abazurami-diament-zlote-wnetrze"];
$product->price = 149.00;
$product->quantity = 90;
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/czarna-lampa-sufitowa-zyrandol-z-abazurami-diament-zlote-wnetrze.jpg";
$product->image_url = $url;
$product->description = "Lampa sufitowa żyrandol regulowany z abażurami diament o złotym środku
Odmień swoje wnętrza i wprowadź do nich nowoczesność i elegancję. Lampa sufitowa z abażurami znakomicie wygląda w pomieszczeniach urządzonych w stylu nowoczesnym, minimalistycznym, klasycznym czy industrialnym. Złote wnętrza abażurów dodadzą oryginalności i wyjątkowego charakteru Twojemu mieszkaniu.
Gdzie zawiesić nowoczesny żyrandol lampę sufitową z abażurami diament?
Salon, sypialnia, jadalnia, kuchnia, przedpokój, biuro – każdemu wnętrzu lampa doda przytulności i wyjątkowości. Konstrukcja i abażury żyrandola sufitowego stworzone są w czarnym kolorze. Dzięki temu lampa pasuje do każdego wystroju pokoju. Ozdobą są abażury w kształcie diamentu o złotym środku. To one czynią cały żyrandol niepowtarzalnym i stylowym.
Jakie praktyczne funkcje posiada lampa sufitowa nowoczesna żyrandol z abażurami?
Regulacja kąta padania światła pod dowolnym kątem i kierunkiem – dzięki tej funkcji za pomocą jednej lampy oświetlisz różne części pokoju.
Wysoka jakość materiałów – tworzywa wykorzystane do produkcji żyrandola z abażurami są trwałe i solidne, przez co lampa będzie dekorowała Twoje wnętrza długi czas.
Żarówki E27 – do lampy sufitowej nowoczesnej pasują popularne typy źródeł światła E27. Do żyrandola dopasujesz żarówki LED, zwykłe lub dekoracyjne.
Możliwość podłączenia pod podwójny przełącznik.
Wybierz lampę sufitową ze złotymi abażurami i zachwycaj pięknym wystrojem mieszkania!";
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
$product->name = [$default_lang => "Nowoczesna Lampa Wisząca Czarna ze Złotymi Abażurami Diament"];
$product->link_rewrite = [$default_lang => "nowoczesna-lampa-wiszaca-czarna-ze-zlotymi-abazurami-diament"];
$product->price = 149.00;
$product->quantity = 90;
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/nowoczesna-lampa-wiszaca-czarna-ze-zlotymi-abazurami-diament.jpg";
$product->image_url = $url;
$product->description = "Lampa wisząca 3-płomienna abażur diament złote wnętrze
Dodaj wytwornym wnętrzom nowoczesności, a minimalistycznym aranżacjom odrobinę elegancji. Lampa wisząca z abażurami pasuje do wielu stylów wnętrzarskich. Dodaje oryginalności pomieszczeniom w stylu loft, klasycznym lub nowoczesnym. Możesz mieć pewność, że lampa wisząca cudownie odmieni także Twoje wnętrza.
W jakich pomieszczeniach czarna lampa wisząca z regulacją i 3 trzema złotymi abażurami wygląda najlepiej?
Lampa wisząca z abażurami w kształcie diamentu cudownie dekoruje sypialnię, salon, jadalnię, kuchnię, przedpokój bądź biuro. Czarny kolor oświetlenia dodaje wnętrzom elegancji i perfekcyjnie współgra z każdą inną barwą. Oryginalnego i niepowtarzalnego stylu Twoim pomieszczeniom nadadzą złote wnętrza abażurów.
Jakie praktyczne funkcje posiada stylowa lampa wisząca z abażurami diament złote wnętrze?
Regulowana wysokość – odpowiada za perfekcyjne dopasowanie lampy do rozmiaru pomieszczenia. Pozwala również na zawieszenie każdego z abażurów na innej wysokości.
Metalowa konstrukcja i materiałowe abażury – solidne materiały wykonania sprawią, że lampa będzie dekorowała Twoje wnętrza wiele lat.
Gwint E27 – to najpopularniejsze źródła światła, dlatego łatwo znajdziesz pasujące żarówki.
Możliwość podłączenia pod podwójny przełącznik.
Wybierz lampę ze złotymi abażurami i postaw na oryginalne i designerskie rozwiązania w swoim mieszkaniu!";
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
$product->name = [$default_lang => "Lampa Wisząca Pojedyncza z Abażurem Dziecięca"];
$product->link_rewrite = [$default_lang => "lampa-wiszaca-pojedyncza-z-abazurem-dziecieca"];
$product->price = 49.00;
$product->quantity = 90;
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/lampa-wiszaca-pojedyncza-z-abazurem-dziecieca.jpg";
$product->image_url = $url;
$product->description = "Lampa wisząca pojedyncza abażur z odsłoniętą żarówką wiele kolorów
Szukasz lampy wiszącej, która stanie się dekoracją Twoich wnętrz? Mamy dla Ciebie oświetlenie idealne, które dodatkowo jest niezwykle funkcjonalne. Za oryginalny wygląd lampy wiszącej nowoczesnej odpowiada abażur z prześwitującą żarówką. Oświetlenie dostępne jest w wielu kolorach, dzięki czemu otrzymasz dokładnie taki efekt wizualny, jakiego oczekujesz.
Gdzie najlepiej prezentuje się nowoczesna lampa wisząca pojedyncza kolorowa z abażurem?
Dzięki szerokiej gamie kolorów, w której oferowany jest zwis wiszący, na pewno dopasujesz ją do każdego rodzaju wnętrza. Nasza lampa z abażurem świetnie sprawdza się w pokoju dziecięcym. Bardziej stonowane kolory nadadzą sypialni bądź salonowi nowoczesnego oraz unikalnego designu.
Jakie praktyczne funkcje posiada stylowa lampa wisząca dziecięca z prześwitującym abażurem?
Konstrukcja lampy wykonana jest z metalu natomiast sam abażur z materiału. Wysokiej jakości materiały wykonania zapewniają radość z użytkowania oświetlenia na długi czas.
Dzięki regulowanej wysokości lampa dziecięca jest bardzo funkcjonalna. Możesz dopasować ją do swoich oczekiwań Dzięki regulacji oraz prześwitującemu abażurowi otrzymasz efekt skupionego światła przy jednoczesnym zachowaniu dobrze oświetlonej przestrzeni.
8 kolorów abażura i 4 kolory konstrukcji do wyboru – dzięki tak szerokiej gamie kolorów z łatwością dopasujesz lampę do stylu swojego wnętrza. Barwy linek i abażurów można ze sobą mieszać.
Żarówki dekoracyjne – prześwitujący abażur świetnie uwydatnia oryginalny design żarówek ozdobnych. Zasil nimi lampę, by uzyskać bardziej przytulne I nastrojowe wnętrze.
Wybierz ulubione kolory i ożyw swoje wnętrza lampą wiszącą pojedynczą z prześwitującym abażurem!";
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
$product->name = [$default_lang => "Lampa Wisząca z Abażurami Kolorowa Nowoczesna"];
$product->link_rewrite = [$default_lang => "lampa-wiszaca-z-abazurami-kolorowa-nowoczesna"];
$product->price = 99.00;
$product->quantity = 90;
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/lampa-wiszaca-z-abazurami-kolorowa-nowoczesna.jpg";
$product->image_url = $url;
$product->description = "Lampa wisząca 2-płomienna dla dzieci kolorowa
Stylowa lampa wisząca o ciekawym i oryginalnym wyglądzie doda Twoim wnętrzom oryginalności. Oświetlenie składa się z metalowej konstrukcji, na której podwieszone są dwa materiałowe abażury częściowo prześwitujące. Dostępna w wielu kolorach do wyboru.
Gdzie najlepiej wygląda stylowa lampa dziecięca regulowana z abażurami LED?
Lampa pasuje do każdego rodzaju wnętrza, w szczególności do pomieszczeń wykończonych w stylu nowoczesnym, skandynawskim czy prowansalskim. Zróżnicowana kolorystyka sprawia, ze lampa wisząca pasuje zarówno do salonu, gabinetu, jak i pokoju dziecięcego.
Jakie zalety posiada nowoczesna lampa wisząca 2-płomienna z prześwitującymi abażurami?
Dostępna jest w wielu wariantach – 8 kolorów abażurów i 3 kolory konstrukcji. Ogrom barw pozwala łatwo dopasować lampę do wnętrza.
Solidna konstrukcja oraz dobrej jakości materiał abażurów, z których wykonana jest lampa, gwarantują zadowolenie z produktu oraz długotrwałe użytkowanie.
Możliwość podłączenia dwóch źródeł światła pozwala na właściwe, zgodne z potrzebami dopasowanie natężenia oświetlenia w pomieszczeniu.
Regulacja wysokości zawieszenia abażurów to praktyczna cecha ułatwiająca dopasowanie produktu do wybranego pomieszczenia.
Już dziś ożyw swoje mieszkanie naszą kolorową lampą wiszącą!";
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
$product->name = [$default_lang => "Lampa Wisząca z Abażurami Nowoczesna Dziecięca"];
$product->link_rewrite = [$default_lang => "lampa-wiszaca-z-abazurami-nowoczesna-dziecieca"];
$product->price = 129.00;
$product->quantity = 90;
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/lampa-wiszaca-z-abazurami-nowoczesna-dziecieca.jpg";
$product->image_url = $url;
$product->description = "Nowoczesna lampa wisząca regulowana z abażurami do pokoju dziecka
Lampa wisząca nowoczesna wyróżnia się minimalistycznym designem połączonym z niebanalną formą. Abażury dostępne są w szerokiej palecie kolorystycznej - od stonowanych kolorów w odcieniach bieli, jasnej szarości i ciemnoszarego do bardziej intensywnych kolorów: niebieskiego, zielonego, żółtego, różowego czy wrzosowego. Oświetlenie jest ciekawym połączeniem metalowej konstrukcji i materiałowego abażura.
W jakich wnętrzach lampa wisząca 3-płomienna z prześwitującymi abażurami wygląda najlepiej?
Lampa wisząca z oryginalnymi abażurami z prześwitującą żarówką stanowi ciekawy akcent zarówno w nowoczesnych jaki i surowych wnętrzach. Pasuje również do bardziej naturalnych i cieplejszych aranżacji nawiązujących do skandynawskich wnętrz. Lampa oddaje charakter pokoju dziennego, a wesołe i zróżnicowane kolory idealnie pasują do pokoju dziecka.
Jakie praktyczne właściwości posiada stylowa lampa wisząca 2-płomienna LED?
Lampa wisząca łączy estetykę z funkcjonalnością. Bogata paleta kolorystyczna abażurów i linki dostępne w kilku wersjach pozwalają na tworzenie autorskich połączeń i idealne dopasowanie lampy do swojego wnętrza. Regulowana wysokość umożliwia optymalne ustawienie lampy i możliwość zróżnicowania wysokości poszczególnych abażurów. Do oświetlania pasują popularne typy żarówek E27. Lampa posiada możliwość podłączenia pod podwójny przełącznik.
Dodaj do swoich wnętrz kolorową lampę 3-płomienną i ciesz się zjawiskową aranżacją mieszkania!";
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
$product->name = [$default_lang => "Lampa Wisząca z Kolorowymi Abażurami LED"];
$product->link_rewrite = [$default_lang => "lampa-wiszaca-z-kolorowymi-abazurami-led"];
$product->price = 129.00;
$product->quantity = 90;
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/lampa-wiszaca-z-kolorowymi-abazurami-led.jpg";
$product->image_url = $url;
$product->description = "Nowoczesna lampa wisząca dziecięca z abażurami LED
Jeżeli szukasz lampy wiszącej, która będzie pasować do Twojego wnętrza, mamy coś dla Ciebie! Regulowane oświetlenie z wyjątkowymi abażurami doda przytulności i indywidualnego charakteru Twojemu mieszkaniu.
Do jakich wnętrz pasuje nowoczesna kolorowa lampa wisząca z abażurami dla dzieci?
Niezależnie od tego, czy wystrój Twojego mieszkania jest minimalistyczny, współczesny czy bardziej klasyczny, nasza lampa z pewnością będzie do niego pasować. Za oryginalność oświetlenia odpowiadają piękne abażury z prześwitującą żarówką. Dodadzą Twojemu wnętrzu wyjątkowości. Dostępne barwy abażurów pasują do pokoju dziecięcego. Żółty, zielony, wrzosowy czy różowy podkreślą wesoły charakter tego pomieszczenia.
Jakie praktyczne funkcje posiada stylowa lampa wisząca dziecięca z kolorowymi abażurami?
Konstrukcja wykonana jest z metalu, a abażury z materiału. Dzięki temu lampa jest wytrzymała i odporna na uszkodzenia.
8 kolorów abażura i 5 kolorów konstrukcji do wyboru - dzięki wielu wariantom samodzielnie skomponujesz oświetlenie, które idealnie oddaje charakter Twojego wnętrza.
Linki posiadają regulowaną wysokość, co czyni lampę dopasowaną do pomieszczenia i bardzo wygodną w użyciu.
Rozświetl swoje wnętrza piękną lampą w przyjemnych kolorach!";
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
$product->name = [$default_lang => "Lampa Stojąca z Abażurem Kolorowa Nowoczesna LED"];
$product->link_rewrite = [$default_lang => "lampa-stojaca-z-abazurem-kolorowa-nowoczesna-led"];
$product->price = 149.00;
$product->quantity = 90;
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/lampa-stojaca-z-abazurem-kolorowa-nowoczesna-led.jpg";
$product->image_url = $url;
$product->description = "Nowoczesna lampa stojąca z abażurem do pokoju dziecka wiele kolorów
Szukasz wyjątkowej lampy podłogowej, która będzie jednocześnie funkcjonalna i oryginalna? Mamy propozycję idealną dla Ciebie! Nasza lampa stojąca dostępna jest w wielu kolorach do wyboru, dzięki czemu łatwo dopasujesz ją do wystroju swojego mieszkania.
W jakich pomieszczeniach lampa podłogowa z okrągłym abażurem wygląda najlepiej?
Wygląd lampy stojącej jest na tyle uniwersalny, że odnajdzie się w każdym wnętrzu. Wesołe kolory abażura pasują szczególnie do pokoju dziecka. Kolory takie jak żółty, błękitny, wrzosowy czy różowy znakomicie ożywią nie tylko pokój malucha, ale również minimalistyczne wnętrze, któremu potrzeba wyrazistego akcentu.
Jakie przydatne funkcje posiada nowoczesna lampa stojąca z abażurem?
Praktyczny włącznik - wyłącznik nożny - dzięki niemu lampa jest prosta i wygodna w użytkowaniu.
Prosta konstrukcja - dzięki niej lampa zachowana jest w minimalistycznym stylu.
10 kolorów abażura i 3 kolory konstrukcji - dzięki wielu wariantom skomponujesz własną wersję lampy stojącej.
Źródła światła - do lampy pasują popularne żarówki z gwintem E27. Dzięki temu nie będziesz mieć problemu z doborem źródeł zasilania do lampy.
Postaw na minimalizm i bogactwo kolorów - udekoruj wnętrza naszą nowoczesną lampą stojącą z abażurem.";
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
$product->name = [$default_lang => "Lampa Wisząca do Pokoju Dziecka Kolorowa Regulowana"];
$product->link_rewrite = [$default_lang => "lampa-wiszaca-do-pokoju-dziecka-kolorowa-regulowana"];
$product->price = 69.00;
$product->quantity = 90;
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/lampa-wiszaca-do-pokoju-dziecka-kolorowa-regulowana.jpg";
$product->image_url = $url;
$product->description = "Lampa wisząca regulowana pojedyncza kolorowa z abażurem
Solidna konstrukcja zwisu wiszącego wykonana została z twardego metalu i wzbogacona materiałowym abażurem. Dzięki szerokiej gamie kolorów abażura (do wyboru biały, różowy, jasnoszary, ciemnoszary, czarny, żółty, wrzosowy, zielony, granatowy, błękitny), jak i konstrukcji (w palecie czarny, szary, różowy) istnieje możliwość stworzenia kompozycji lampy według własnego pomysłu, fantazji i potrzeb.
Gdzie najlepiej wygląda nowoczesna lampa wisząca z abażurem w wielu kolorach?
Dzięki prostemu, aczkolwiek nowoczesnemu designowi lampa wisząca pasuje do niemal każdego wnętrza. Najlepiej jednak sprawdzi się w pokoju dziecięcym. Z pewnością doda ona pomieszczeniu przyjemnego dla oka wyglądu, zaś dziecku pozwoli poczuć się w swoim pokoju jak we własnym królestwie. Lampę możesz zawiesić również w sypialni, jadalni, kuchni, salonie czy przedpokoju. Wybierz kolorową wersję lampy, aby przełamać minimalistyczny, stonowany wystrój.
Jakie praktyczne funkcje posiada nowoczesna lampa z abażurem?
Przydatną cechą lampy jest regulowana wysokość, która pozwala idealnie dobrać jej długość, uwzględniając wiek dziecka oraz umożliwia dopasowanie jasności światła w sam raz do potrzeb młodego człowieka. Dzięki solidnej, metalowej konstrukcji lampa ta przetrwa niejedną grę w piłkę czy lot w kosmos w wykonaniu dziecka. Nowoczesny styl sprawia, że nie straszne jej wyjście z mody w przyszłym sezonie! Lampa zasilana jest żarówkami E27.
Dodaj swoim wnętrzom kolorów z lampą wiszącą z abażurem!";
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
$product->name = [$default_lang => "Nowoczesna Lampa Wisząca Złoty Abażur Diament"];
$product->link_rewrite = [$default_lang => "nowoczesna-lampa-wiszaca-zloty-abazur-diament"];
$product->price = 89.00;
$product->quantity = 90;
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/nowoczesna-lampa-wiszaca-zloty-abazur-diament.jpg";
$product->image_url = $url;
$product->description = "Lampa wisząca pojedyncza pająk abażur złoty diament
Niezwykła lampa wisząca, która dodaje wnętrzom niezwykłego charakteru. Pasuje zarówno do nowoczesnych jak i klasycznych wystrojów wnętrz. Za oryginalny wygląd lampy odpowiadają mocowanie typu “Pająk” i złote wnętrze abażura i diamentowy kształt.
Gdzie najlepiej wygląda stylowa lampa wisząca ze złotym abażurem diament?
Lampa z abażurem pasuje do salonu, jadalni, kuchni, przedpokoju, sypialni i do każdego innego pomieszczenia, któremu chcesz dodać nieco elegancji i nowoczesności. Do pojedynczej lampy z serii Spider możesz dobrać inne rodzaje oświetlenia, dzięki czemu stworzysz spójny zestaw. Lampa wisząca z abażurem pasuje do nowoczesnych i minimalistycznych aranżacji, ale również do wystrojów w stylu loft i klasycznym.
Jakie praktyczne funkcje posiada nowoczesna lampa wisząca ze złotym abażurem?
Solidne materiały wykonania - konstrukcja jest metalowa, a abażur materiałowy, dzięki czemu lampa będzie dekorowała Twoje wnętrza przez bardzo długi czas.
Regulacja wysokości - dzięki tej funkcji dopasujesz lampę zarówno do małego pokoju jak i do mieszkania w wysokiej kamienicy.
Źródła światła E27 - do lampy wiszącej pasują wszystkie typy żarówek z popularnym gwintem E27.
Dodaj swoim wnętrzom wyjątkowego charakteru dzięki lampie wiszące pająk ze złotym abażurem.";
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
$product->name = [$default_lang => "Lampa Wisząca Pająk ze Złotymi Abażurami Diament"];
$product->link_rewrite = [$default_lang => "lampa-wiszaca-pajak-ze-zlotymi-abazurami-diament"];
$product->price = 139.00;
$product->quantity = 90;
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/lampa-wiszaca-pajak-ze-zlotymi-abazurami-diament.jpg";
$product->image_url = $url;
$product->description = "Lampa wisząca pająk z abażurami diament złote wnętrza
Nietypowy sposób wieszania lampy, tj. dwa dodatkowe haczyki podwieszane przy suficie sprawia, że tego oświetlenia po prostu nie da się nie zauważyć! Minimalistyczne kolory połączone z oryginalnym designem tworzą niezwykłe wrażenia estetyczne. Neutralna czerń idealnie równoważy się z żywiołowym złotem. Abażury nadają lampie wiszącej niezwykłego szyku. Mocna, metalowa konstrukcja jest genialnym przeciwieństwem materiałowych abażurów. Nasza lampa to recepta na idealne oświetlenie w nowoczesnym stylu!
Do jakich wnętrz pasuje nowoczesna lampa wisząca pająk z abażurami o złotych wnętrzach?
Romantyczna sypialnia, loftowy salon, skandynawska kuchnia - dzięki wyjątkowemu designowi nasza lampa wisząca nowoczesna pasuje do każdego wnętrza. Bez względu styl czy rozmiar pokoju. Lampa 2-płomienna ze złotymi abażurami jest oryginalnym dodatkiem i prawdziwą ozdobą wnętrza. Oświetlenie wiszące jest idealne zarówno dla gadżeciarzy, jak i dla wielbicieli minimalizmu.
Jakie zalety posiada stylowa lampa 2-płomienna pająk ze złotymi abażurami?
Lampa wisząca z abażurami może służyć wiele lat. Wykonana jest z solidnego metalu, co gwarantuje trwałość. Przyjemny półmrok czy energetyczna jasność? Możliwość regulacji wysokości pozwala na swobodne dopasowanie natężenia światła w pomieszczeniu. Dodatkowo lampa posiada możliwość podłączenia pod podwójny przełącznik. Zasilana jest żarówkami E27.
Dodaj czarną lampę wiszącą pająk ze złotymi abażurami do swoich wnętrz i ciesz się jej widokiem każdego dnia!";
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
$product->name = [$default_lang => "Lampa Wisząca z Abażurami Diament Złote Wnętrza"];
$product->link_rewrite = [$default_lang => "lampa-wiszaca-z-abazurami-diament-zlote-wnetrza"];
$product->price = 199.00;
$product->quantity = 90;
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/lampa-wiszaca-z-abazurami-diament-zlote-wnetrza.jpg";
$product->image_url = $url;
$product->description = "Lampa wisząca 3-płomienna pająk złote abażury diament
Lampa wisząca, która doda Twoim wnętrzom wyjątkowego charakteru. Niezwykła konstrukcja w połączeniu z czarnymi abażurami o złotym środku daje niesamowity efekt w pomieszczeniu.
Do jakich wnętrz pasuje nowoczesna lampa wisząca regulowana ze złotymi abażurami?
Lampa wisząca idealnie komponuje się z wnętrzami w stylu nowoczesnym. Podkreśli elegancki wystrój wnętrz oraz doda im oryginalności. Lampa z abażurami może ocieplić również aranżacje minimalistyczne lub industrialne. Oświetlenie wiszące doda nowoczesności klasycznym wnętrzom.
Lampa wisząca 3-płomienna pająk ze złotymi abażurami pasuje do salonu, kuchni, sypialni, przedpokoju bądź jadalni. By stworzyć ciekawy zestaw lamp, dodaj do aranżacji oświetlenie z tej samej serii, ale z mniejszą ilością źródeł światła. Zyskasz w ten sposób spójny i harmonijny wystrój.
Jakie zalety posiada nowoczesna lampa wisząca ze złotymi abażurami diament?
Regulacja wysokości - funkcja ta pozwala dopasować lampę idealnie do rozmiarów pomieszczenia.
Solidne materiały wykonanie - wytrzymały metal i materiał wysokiej jakości tworzą lampę wiszącą, która będzie dekorowała Twoje wnętrza bardzo długi czas.
Źródła światła E27 - lampa zasilana jest popularnymi żarówkami z gwintem E27. Do oświetlenia pasują źródła zasilania zwykłe, dekoracyjne i ledowe.
Odmień swoje wnętrza piękną lampą wiszącą ze złotymi abażurami - dodaj aranżacji oryginalności!";
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
$product->name = [$default_lang => "Lampa Wisząca Żyrandol z Abażurami Diament Złoto"];
$product->link_rewrite = [$default_lang => "lampa-wiszaca-zyrandol-z-abazurami-diament-zloto"];
$product->price = 249.00;
$product->quantity = 90;
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/lampa-wiszaca-zyrandol-z-abazurami-diament-zloto.jpg";
$product->image_url = $url;
$product->description = "Lampa wisząca pająk cztery złote abażury diament
Niezwykle nowoczesna i elegancka lampa wisząca, która pasuje się do wielu stylów wnętrzarskich. Niezwykła konstrukcja i abażury ze złotym wnętrzem w kształcie diamentu nadają oryginalności pomieszczeniom.
Do jakich wnętrz najlepiej pasuje nowoczesna lampa wisząca pająk ze złotymi abażurami?
Lampa wisząca 4-płomienna doskonale wygląda w nowoczesnych wnętrzach, ale przy odpowiedniej aranżacji znajdzie zastosowanie również w pomieszczeniach o bardziej tradycyjnej architekturze. Oświetlenie może stać się głównym żyrandolem w salonie, jadalni, sypialni czy pokoju gościnnym. Cztery abażury zapewniają odpowiednie oświetlenie nawet bardzo dużych pomieszczeń.
Jakie praktyczne funkcje posiada 4-płomienna lampa pająk z abażurami?
Wytrzymałe materiały wykonania - konstrukcja jest metalowa, a abażury materiałowe. Dzięki temu lampa będzie dekorować Twoje wnętrza przez wiele lat.
Regulacja wysokości - instalacja lampy poza punktem zasilania wymaga czterech punktów do podwieszenia kabli zasilających abażury. Punkty te pozwalają na regulację ilości kabla, dzięki czemu można swobodnie wpływać na odległość abażurów od sufitu. Umieszczenie poszczególnych kloszy na różnej wysokości pozwala dostosować wygląd lampy do charakteru i wysokości pomieszczenia.
Źródła światła - do lampy pasują popularne żarówki z gwintem E27.
Żyrandol posiada możliwość podłączenia pod podwójny przełącznik.
Spraw, by Twoje wnętrza zachwycały nowoczesnym i eleganckim stylem! Wprowadź lampę wiszącą pająk do aranżacji mieszkania.";
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
$product->name = [$default_lang => "Stylowa Lampa Wisząca Żyrandol LED ze Złotymi Abażurami Diament"];
$product->link_rewrite = [$default_lang => "stylowa-lampa-wiszaca-zyrandol-led-ze-zlotymi-abazurami-diament"];
$product->price = 299.00;
$product->quantity = 90;
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/stylowa-lampa-wiszaca-zyrandol-led-ze-zlotymi-abazurami-diament.jpg";
$product->image_url = $url;
$product->description = "Lampa wisząca pająk LED ze złotymi abażurami 5-płomienna
Nasza lampa wisząca nowoczesna stworzy niepowtarzalną atmosferę w każdym domu. Pięć geometrycznych, materiałowych abażurów z zewnątrz obleczone są tajemniczą czernią. Wewnątrz błyszczą eleganckim złotem, emitując dopasowane, dyskretne światło.
W jakich pomieszczeniach lampa wisząca 5-płomienna pająk ze złotymi abażurami wygląda najlepiej?
Ponadczasowy wygląd lampy z abażurami sprawia, że idealnie sprawdzi się w każdym rodzaju pomieszczenia, choć z pewnością prym będzie wieść w salonie i jadalni. Żyrandol swoją stylową koncepcją oświetleniową umili Ci wszystkie kolejne wieczory.
Neutralna czerń otwiera wiele możliwości w kwestii dopasowania lampy wiszącej pająk do wnętrza. Podobnie nienarzucający się, złoty akcent wewnątrz abażurów, który zdecydowanie dodaje charakteru i wyjątkowości lampie.
Jakie zalety posiada nowoczesna lampa wisząca pająk z pięcioma złotymi abażurami diament?
Lampa posiada regulację wysokości, dzięki której lepiej dopasujesz ją do każdego rodzaju sufitu, niezależnie od jego wysokości. Główna konstrukcja jest wykonana z solidnego metalu, gwarantując długotrwałą odporność i bezawaryjność. Abażury stworzyliśmy z wytrzymałego i odpornego na zabrudzenia materiału. Żyrandol z abażurami zasilany jest popularnymi żarówkami E27. Lampa posiada możliwość podłączenia pod podwójny przełącznik.
Wprowadź do swoich wnętrz nowoczesność i elegancję, dzięki lampie wiszącej ze złotymi abażurami!";
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
$product->name = [$default_lang => "Lampa Wisząca Pojedyncza z Kolorowym Abażurem do Pokoju Dziecka"];
$product->link_rewrite = [$default_lang => "lampa-wiszaca-pojedyncza-z-kolorowym-abazurem-do-pokoju-dziecka"];
$product->price = 95.00;
$product->quantity = 90;
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/lampa-wiszaca-pojedyncza-z-kolorowym-abazurem-do-pokoju-dziecka.jpg";
$product->image_url = $url;
$product->description = "Lampa wisząca pojedyncza z kolorowym abażurem LED
Nasza lampa wisząca dzięki szerokiemu wachlarzowi wariantów barw idealnie uzupełni wizerunek najbardziej wymagającego pomieszczenia. Oświetlenie pasuje do nowoczesnych wystrojów. Żywe kolory świetnie rozświetlają wnętrza.
Do jakich pomieszczeń pasuje nowoczesna lampa wisząca pająk z abażurem?
Lampa wisząca nowoczesna sprawdzi się jako oświetlenie do sypialni, salonu, jadalni czy kuchni. Zwis wiszący szczególnie dobrze wygląda w pokoju dziecięcym. Żywe kolory abażurów świetnie podkreślają wesoły charakter tego pomieszczenia.
Jakie zalety posiada pojedyncza lampa wisząca z abażurem pająk?
8 kolorów abażurów do wyboru - dzięki wielu wariantom z łatwością wybierzesz barwy najlepiej oddające charakter urządzanego wnętrza.
2 kolory konstrukcji - czarny i biały.
Regulacja wysokości - dzięki tej funkcji z łatwością dopasujesz lampę dziecięcą do każdego rodzaju pomieszczenia
Wysokiej jakości materiały wykonania - metalowa konstrukcja i materiałowe abażury stanowią połączenie, które będzie ozdobą Twoich wnętrz bardzo długi czas.
Źródła światła E27 - do lampy pasują najpopularniejsze typy żarówek E27.
Udekoruj swoje wnętrza kolorową lampą wiszącą pająk i ciesz się nowym, przytulnym charakterem swojego mieszkania.";
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
$product->name = [$default_lang => "Nowoczesna Lampa Wisząca z Abażurami Dziecięca Kolorowa"];
$product->link_rewrite = [$default_lang => "nowoczesna-lampa-wiszaca-z-abazurami-dziecieca-kolorowa"];
$product->price = 149.00;
$product->quantity = 90;
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/nowoczesna-lampa-wiszaca-z-abazurami-dziecieca-kolorowa.jpg";
$product->image_url = $url;
$product->description = "Nowoczesna lampa wisząca z kolorowymi abażurami pająk 2-płomienna
Lampa wisząca typu pająk to nietuzinkowy pomysł na nowoczesną dekorację wnętrz. Minimalistyczny design oświetlenia sprawia, że będzie pasować do niemal każdego pomieszczenia.
Gdzie najlepiej prezentuje się nowoczesna lampa wisząca 2-płomienna z kolorowymi abażurami?
Jasne barwy lampy do wyboru zadowolą miłośników klasyki. Z kolei kolorowe abażury sprawdzą się świetnie w pokoju dziecięcym, ale nie tylko. Jeśli lubisz zabawę żywymi barwami podczas dekoracji wnętrz, ta lampa pozwoli ci na stworzenie oryginalnych kompozycji.
Lampa wisząca nowoczesna typu pająk ma uniwersalne zastosowanie. Dzięki wymiennym kolorom abażurów i regulacji wysokości możesz zamontować ją w każdym pomieszczeniu i zawsze będzie wyglądać stylowo i wyjątkowo.
Jakie zalety posiada nowoczesna lampa wisząca z abażurem z materiału?
Wysokiej jakości materiały wykonania - konstrukcja lampy stworzona jest z solidnego metalu, zaś same abażury z eleganckiego materiału. To sprawia, że lampa jest jednocześnie solidna oraz stanowi świetną dekorację wnętrz.
8 kolorów abażurów - mnóstwo barw do wyboru.
Regulowana wysokość - dzięki której w łatwy sposób dostosujesz żyrandol z abażurami do rozmiaru pokoju.
Źródła światła E27 - lampa zasilana jest popularnymi żarówkami E27.
Oświetlenie posiada możliwość podłączenia pod podwójny przełącznik.
Już dziś odmień swoje wnętrza kolorową lampą wiszącą z abażurami!";
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
$product->name = [$default_lang => "Lampa Wisząca z Abażurami Pająk Dziecięca LED"];
$product->link_rewrite = [$default_lang => "lampa-wiszaca-z-abazurami-pajak-dziecieca-led"];
$product->price = 219.00;
$product->quantity = 90;
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/lampa-wiszaca-z-abazurami-pajak-dziecieca-led.jpg";
$product->image_url = $url;
$product->description = "Lampa wisząca 3-płomienna pająk z abażurami LED
Szukasz nowoczesnej lampy wiszącej, która będzie pasować do Twoich wnętrz? Mamy dla Ciebie oświetlenie, którą można polecić każdemu, kto lubi możliwość dostosowywania produktu do własnych wymagań. Nasza lampa wisząca nowoczesna posiada wiele wariantów kolorystycznych oraz możliwość regulacji, które pozwolą Ci stworzyć oświetlenie idealnie pasujące do Twojej aranżacji wnętrz.
W jakich pomieszczeniach najlepiej wygląda stylowa lampa wisząca pająk z okrągłymi abażurami?
Lampa z abażurami sprawdzi się praktycznie w każdej stylizacji - od nowoczesnych wnętrz przez przytulne, naturalne wnętrze typu skandynawskiego aż po styl klasyczny. Spokojna tonacja kolorystyczna lampy wiszącej sprawia, że nadaje się zarówno do pokoju dziecka, jak i do salonu czy jadalni.
Jakie praktyczne funkcje posiada nowoczesna lampa wisząca z abażurami pająk?
Konstrukcja typu pająk - każdy przewód prowadzący do żarówki jest przytwierdzony do sufitu osobnym zaczepem, których rozmieszczenie zależy już tylko od Ciebie. Możliwa jest także regulacja wysokości.
8 kolorów abażurów i 3 kolory konstrukcji - można je ze sobą dowolnie zestawiać. Daje Ci to możliwość tworzenia własnych, unikalnych połączeń.
Solidne materiały wykonania - metalowa konstrukcja i materiałowe abażury zapewniają niezmienny wygląd lampy na długi czas.
Żyrandol posiada możliwość podłączenia pod podwójny przełącznik.
Daj się porwać magii kolorów i wprowadź lampę wiszącą z abażurami do swoich wnętrz!";
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
$product->name = [$default_lang => "Nowoczesna Lampa Wisząca Kolorowa z Abażurami Pająk"];
$product->link_rewrite = [$default_lang => "nowoczesna-lampa-wiszaca-kolorowa-z-abazurami-pajak"];
$product->price = 269.00;
$product->quantity = 90;
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/nowoczesna-lampa-wiszaca-kolorowa-z-abazurami-pajak.jpg";
$product->image_url = $url;
$product->description = "Lampa wisząca 4-płomienna pająk z abażurami dziecięca
Niezwykły żyrandol z abażurami, który doda oryginalności każdemu wnętrzu. Konstrukcja typu “pająk” i kolorowe klosze tworzą niesamowitą lampę wiszącą oddającą klimat wielu rodzajów wnętrz.
Gdzie najlepiej pasuje nowoczesna lampa wisząca z abażurami pająk LED?
Lampa z abażurami pasuje zarówno do salonu, kuchni, sypialni, jadalni jak i pokoju dziecięcego. Wesołe, ale uniwersalne kolory pasują do wielu stylów wnętrzarskich, takich jak styl nowoczesny, skandynawski czy klasyczny.
Jakie zalety posiada stylowa lampa wisząca 4-płomienna z abażurami?
Konstrukcja typu “pająk” - dzięki niej możesz zawiesić abażury w różnej odległości od siebie. Lampa posiada również możliwość regulacji wysokości.
8 kolorów abażurów i 2 kolory konstrukcji do wyboru - barwy można dowolnie ze sobą łączyć, dzięki czemu stworzysz oświetlenie idealnie oddające charakter Twoich wnętrz.
Źródła światła - z łatwością dobierzesz żarówki do lampy, dzięki zastosowaniu popularnego gwintu E27.
Dbałość o jakość wykonania - konstrukcja lampy wiszącej wykonana jest z solidnego metalu, a abażury z wytrzymałego materiału.
Możliwość podłączenia pod podwójny przełącznik.
Wprowadź do swoich wnętrz nowoczesny i kolorowy design!";
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
$product->name = [$default_lang => "Lampa Wisząca Żyrandol z Abażurami LED"];
$product->link_rewrite = [$default_lang => "lampa-wiszaca-zyrandol-z-abazurami-led"];
$product->price = 329.00;
$product->quantity = 90;
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/lampa-wiszaca-zyrandol-z-abazurami-led.jpg";
$product->image_url = $url;
$product->description = "Lampa wisząca z abażurami pająk wiele kolorów 5-płomienna
Niezwykła lampa wisząca, która doda wyjątkowości Twoim wnętrzom. Ogromny wybór kolorów abażurów daje wiele możliwości na stworzenie oświetlenia idealnie dopasowanego do wystroju mieszkania.
W jakich pomieszczeniach najlepiej wygląda nowoczesna lampa 5-płomienna z abażurami?
Żyrandol z abażurami pięknie prezentuje się w salonie, jadalni, sypialni kuchni oraz w pokoju dziecka, ze względu na wesołe kolory do wyboru. Pięć źródeł zasilania sprawia, że lampa pająk znakomicie sprawdza się w roli oświetlenia głównego. Żyrandol pasuje do wnętrz w stylu nowoczesnym, skandynawskim i klasycznym.
Jakie praktyczne funkcje posiada kolorowa lampa z abażurami typu pająk?
Regulowana wysokość - dzięki tej funkcji idealnie dopasujesz lampę z abażurami do rozmiaru pomieszczenia.
8 kolorów abażurów i 2 kolory konstrukcji do wyboru - barwy możesz dowolnie ze sobą łączyć tworząc przy tym lampę jedyną w swoim rodzaju.
Uniwersalne źródła światła - lampa wisząca nowoczesna zasilana jest popularnymi żarówkami E27.
Możliwość podłączenia pod podwójny przełącznik.
Niech Twoje wnętrza zachwycają wyjątkowym klimatem! Wybierz lampę wiszącą 5-płomienną z abażurami.";
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
$product->name = [$default_lang => "Lampa Wisząca Pająk z Kolorowym Abażurem Nowoczesna Dziecięca"];
$product->link_rewrite = [$default_lang => "lampa-wiszaca-pajak-z-kolorowym-abazurem-nowoczesna-dziecieca"];
$product->price = 79.00;
$product->quantity = 90;
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/lampa-wiszaca-pajak-z-kolorowym-abazurem-nowoczesna-dziecieca.jpg";
$product->image_url = $url;
$product->description = "Pojedyncza lampa wisząca pająk z abażurem wiele kolorów
Stylowa lampa wisząca z abażurem zaprojektowana w nowoczesnym stylu. Wytrzymała, metalowa konstrukcja pozwala na łatwy montaż na suficie. Materiałowy abażur z ozdobnym, prześwitującym motywem, dostępny jest w kolorach: białym, różowym, jasnoszarym, ciemnoszarym, żółtym, wrzosowym, zielonym i niebieskim.
Do jakich wnętrz pasuje lampa wisząca pająk z prześwitującym abażurem?
Dzięki nowoczesnemu designowi zwis wiszący nada wyjątkowości praktycznie każdemu pomieszczeniu. Pasuje do kuchni, salonu, sypialni i do pokoju dziecka Rozmaita gama kolorów zapewnia łatwość dopasowania lampy wiszącej nowoczesnej do kolorystyki danego pomieszczenia. Dzięki prześwitującemu abażurowi lampa sama w sobie wyznacza trendy - nadaje się nie tylko do nowoczesnego wystroju, ale także podkreśla oryginalność bardziej tradycyjnego wykończenia wnętrz.
Jakie praktyczne funkcje posiada nowoczesna lampa wisząca z abażurem w wielu kolorach,
Zaletą abażura jest duża ilość światła przepuszczanego, przy jednoczesnym skierowaniu głównego snopa w dół. Łatwa do zamontowania konstrukcja lampy posiada opcję regulacji wysokości, pozwalającą na dostosowanie jej do indywidualnych potrzeb. Aż 8 kolorów abażura do wyboru sprawia, że łatwo dopasujesz lampę do barw swoich wnętrz. Oświetlenie zasilane jest popularnymi żarówkami z gwintem E27. Dla ciekawszego efekty zasil lampę żarówką dekoracyjną – jej oryginalny wygląd podkreśli prześwitujący abażur.
Postaw na oryginalność i żywe kolory - dodaj pojedynczą lampę wisząca pająk z abażurem do swojej aranżacji wnętrz!";
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
$product->name = [$default_lang => "Lampa Wisząca Nowoczesna z Kolorowymi Abażurami"];
$product->link_rewrite = [$default_lang => "lampa-wiszaca-nowoczesna-z-kolorowymi-abazurami"];
$product->price = 119.00;
$product->quantity = 90;
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/lampa-wiszaca-nowoczesna-z-kolorowymi-abazurami.jpg";
$product->image_url = $url;
$product->description = "Nowoczesna lampa wisząca z prześwitującymi abażurami pająk
Prezentowana lampa wisząca opiera się na wyjątkowej i oryginalnej konstrukcji typu pająk. Dwa wiszące abażury stanowią mocne akcenty jej projektu. Przedzielone są w połowie bezbarwną tkaniną, zaakcentowaną srebrzystym paskiem. Element dodaje lampie wyjątkowości oraz gwarantuje stonowaną emisję światła.
Do jakich wnętrz pasuje nowoczesna kolorowa lampa wisząca pająk?
Lampa wisząca nowoczesna ze względu na swój ponadczasowy design, pasuje do każdego wnętrza - salonu, sypialni, przedpokoju, kuchni, jadalni i wielu innych. Lampa świetnie sprawdzi się również w pokoju dziecka ze względu na wesołe i zróżnicowane kolory
Jakie praktyczne właściwości posiada lampa wisząca 2-płomienna z abażurami pająk?
8 kolorów abażurów do wyboru - dzięki wielu wariantom łatwo dopasować lampę do zaprojektowanego już pomieszczenia. Ponadto można zamówić dwa różne kolory do jednej lampy.
Regulowana wysokość - funkcja ta pozwala idealnie dopasować lampę dziecięcą do wymiaru pokoju.
Solidne materiały wykonania - metalowa konstrukcja i materiałowe abażury zapewniają radość z użytkowania oświetlenia na długi czas.
Żyrandol posiada możliwość podłączenia pod podwójny przełącznik.
Rozświetl swoje wnętrza wyjątkową lampą wiszącą i ciesz się niezwykłym wystrojem wnętrz!";
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
$product->name = [$default_lang => "Lampa Wisząca Pająk Kolorowe Abażury"];
$product->link_rewrite = [$default_lang => "lampa-wiszaca-pajak-kolorowe-abazury"];
$product->price = 159.00;
$product->quantity = 90;
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/lampa-wiszaca-pajak-kolorowe-abazury.jpg";
$product->image_url = $url;
$product->description = "Lampa wisząca nowoczesna z trzema kolorowymi abażurami
Prezentowana lampa wisząca ma wyjątkową i bardzo nowoczesną konstrukcję typu pająk. Częściowo prześwitująca przez abażur żarówka nadaje lampie oryginalności i zwiększa obszar oświetlenia w pomieszczeniu.
Do jakich wnętrz pasuje nowoczesna lampa wisząca pająk z kolorowymi abażurami?
Dzięki swojemu nowoczesnemu projektowi lampa pasuje do każdego pomieszczenia. Można wybrać ją do salonu, jadalni, sypialni. Wesołe kolory świetnie pasują również do pokoju dziecka. Lampa z abażurami dobrze prezentuje się we wnętrzach w stylu skandynawskim, nowojorskim oraz nowoczesnym.
Jakie zalety posiada stylowa lampa z abażurami pająk?
Lampa z prześwitującymi abażurami wykonana jest z wytrzymałych materiałów. Konstrukcja zbudowana jest z metalu, natomiast abażury z materiału. Do wyboru dostępnych jest aż 8 różnych kolorów abażurów, które można dowolnie łączyć według własnego uznania. Można zamówić 3 różne kolory dla jednej lampy, dzięki czemu oświetlenie idealnie wpisze się w Twoje wnętrze.
Do zalet oferowanej lampy należy przede wszystkim możliwość regulacji wysokości, dzięki której oświetlenie dobrze wygląda w pomieszczeniach zarówno o niskim jak i wysokim suficie. Możliwość indywidualnego wyboru koloru abażuru i dowolnego ich komponowania stanowi idealne rozwiązanie, by dopasować żyrandol do pokoju. Lampa dziecięca posiada możliwość podłączenia pod podwójny przełącznik.
Wprowadź do swoich wnętrz trochę nowoczesności i unikalności!";
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
$product->name = [$default_lang => "Lampa Wisząca Nowoczesna Pająk z Abażurami"];
$product->link_rewrite = [$default_lang => "lampa-wiszaca-nowoczesna-pajak-z-abazurami"];
$product->price = 209.00;
$product->quantity = 90;
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/lampa-wiszaca-nowoczesna-pajak-z-abazurami.jpg";
$product->image_url = $url;
$product->description = "Stylowa lampa wisząca pająk z kolorowymi abażurami
Prezentowana lampa wisząca jest doskonałym wykończeniem każdego wnętrza. Wykonana z solidnych materiałów zapewnia trwałość na lata. Niecodzienny kształt typu pająk zapewnia równomierną dystrybucję światła w pomieszczeniu.
W jakich wnętrzach lampa wisząca pająk z kolorowymi abażurami wygląda najlepiej?
Lampa wisząca nowoczesna nada się zarówno do rozjaśnienia pokoju dziecka, jak i wykończenia wyglądu salonu czy sypialni. Jest elementem, który spełni się nie tylko w roli praktycznej, ale zapewni użytkownikowi wrażenia estetyczne. Wyjątkową cechą lampy z abażurami jest przezroczysty pasek materiału, przez który prześwituje żarówka. Pozwala to nie tylko na dostarczenie większej ilości światła, ale także dodaje lampie wyjątkowego, oryginalnego stylu.
Jakie funkcje posiada nowoczesna lampa wisząca 4-płomienna z kolorowymi abażurami?
Konstrukcja lampy wykonana jest z metalu, a abażury z mocnego materiału, dzięki czemu oświetlenie będzie dekorować Twoje wnętrza przez długi czas.
Dostępnych jest aż 8 kolorów abażurów, w tym możliwe jest zamówienie czterech różnych kolorów do jednej lampy.
Regulowana wysokość zapewnia odpowiednią dystrybucję światła niezależnie od wielkości pomieszczenia.
Lampa posiada możliwość podłączenia pod podwójny przełącznik.
Dodaj swoim wnętrzom więcej koloru i blasku z naszą lampą 4-płomienną z abażurami!";
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
$product->name = [$default_lang => "Nowoczesna Lampa Wisząca Żyrandol Pająk z Abażurami"];
$product->link_rewrite = [$default_lang => "nowoczesna-lampa-wiszaca-zyrandol-pajak-z-abazurami"];
$product->price = 239.00;
$product->quantity = 90;
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/nowoczesna-lampa-wiszaca-zyrandol-pajak-z-abazurami.jpg";
$product->image_url = $url;
$product->description = "Lampa wisząca żyrandol 5-płomienny z kolorowymi abażurami
Lampa wisząca nowoczesna wykonana w formie wyjątkowej konstrukcji typu pająk to doskonała propozycja dla miłośników uniwersalnych i niebanalnych elementów wyposażenia wnętrz. Funkcjonalny i bardzo estetyczny żyrandol świetnie sprawdzi się w różnych stylach i pomieszczeniach.
Do jakich wnętrz pasuje lampa wisząca 5-płomienna z kolorowymi abażurami?
Prezentowana lampa z abażurami to doskonała propozycja do wielu rodzajów wnętrz - zarówno nowoczesnych jak i skandynawskich. Ze względu na dużą ilość wariantów kolorystycznych doskonale pasuje zarówno do ciepłego salonu jak i wesołego pokoju dziecka. Niebanalna konstrukcja nadaje lampie uroku i sprawia, że przyciąga spojrzenia.
Jakie praktyczne cechy posiada lampa wisząca 5-płomienna pająk?
Lampa wisząca posiada pięć abażurów, które można zaaranżować w różnych kolorach. Połączenie metalowej konstrukcji z abażurem wykonanym z materiału sprawia, że żyrandol jest trwały i wytrzymały. Przez abażur widoczna jest żarówka - dzięki temu całość jest wyjątkowo estetyczna i ciekawa. Lampa posiada regulację wysokości, łatwo więc dopasować ją do każdego rozmiaru pomieszczenia. Żyrandol z abażurami posiada możliwość podłączenia pod podwójny przełącznik.
Postaw na oryginalność i wyjątkowy styl - dodaj lampę 5-płomienną z kolorowymi abażurami do swoich wnętrz!";
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
$product->name = [$default_lang => "Lampa Wisząca do Pokoju Dziecka Abażur Sowy"];
$product->link_rewrite = [$default_lang => "lampa-wiszaca-do-pokoju-dziecka-abazur-sowy"];
$product->price = 53.00;
$product->quantity = 90;
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/lampa-wiszaca-do-pokoju-dziecka-abazur-sowy.jpg";
$product->image_url = $url;
$product->description = "Piękna lampa wisząca pojedyncza dziecięca z abażurem w sowy
Urocza lampa dziecięca, która pasuje zarówno do pokoju chłopca jak i dziewczynki. Abażur z motywem wesołych sówek doda radosnego i pogodnego charakteru aranżacji pomieszczenia.
Gdzie najlepiej prezentuje się lampa pojedyncza dziecięca z abażurem w sowy?
Lampę możesz zawiesić zarówno w centralnym punkcie pokoju jak i tuż nad biurkiem, łóżkiem czy stolikiem. Wszystko zależy od preferencji Twoich i Twojego dziecka. Wzór w sowy oraz kolorystyka abażura sprawiają, że lampa pasuje do pokoju chłopca i dziewczynki.
Jakie praktyczne funkcje posiada lampa dziecięca pojedyncza z abażurem w sowy?
Regulacja wysokości - dzięki tej funkcji łatwo dopasujesz lampę do każdego rozmiaru pokoju.
4 kolory konstrukcji do wyboru - biały, czarny, srebrny i różowy - dzięki wielu wariantom bez problemu dobierzesz barwę najlepiej oddającą charakter pokoju Twojego dziecka
Solidne materiały wykonania - wysokiej jakości tworzywa wykorzystane do produkcji lampy są w pełni bezpieczne dla dziecka.
Żarówki typu E27 - lampa zasilana jest popularnymi źródłami światła z gwintem E27. Pasują do niej zarówno zwykłe, ledowe jak i dekoracyjne żarówki.
Zadbaj o wesoły nastrój w pokoju dziecka i dodaj do niego radosną lampę z abażurem w sowy!";
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
$product->name = [$default_lang => "Nowoczesna Lampa Wisząca Dziecięca Abażur Mapa"];
$product->link_rewrite = [$default_lang => "nowoczesna-lampa-wiszaca-dziecieca-abazur-mapa"];
$product->price = 53.00;
$product->quantity = 90;
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/nowoczesna-lampa-wiszaca-dziecieca-abazur-mapa.jpg";
$product->image_url = $url;
$product->description = "Lampa wisząca do pokoju dziecka z abażurem w mapy
Lampa wisząca idealna zarówno do pokoju najmłodszych jak i nastolatków. Abażur z kolorową mapą świata jest radosnym akcentem w aranżacji pomieszczenia.
Gdzie najlepiej wygląda lampa wisząca pojedyncza z abażurem w mapę świata?
Jeśli zależy Ci na równomiernym oświetleniu całego pokoju, zawieś lampę w centralnej części pokoju. A jeżeli chcesz oświetlić daną strefę pomieszczenia, to umieść zwis wiszący nad biurkiem, łóżkiem lub stolikiem - w zależności od tego, jaką część pomieszczenia chcesz oświetlić.
Jakie praktyczne funkcje posiada lampa dziecięca z abażurem w mapy?
4 kolory konstrukcji do wyboru - biały, czarny, srebrny i różowy - dzięki wielu wariantom łatwo wybierzesz barwę najbardziej pasującą do urządzanego wnętrza.
Regulacja wysokości - dzięki tej funkcji z łatwością dopasujesz lampę z abażurem do każdego wymiaru pokoju dziecka lub nastolatka.
Solidne materiały wykonania - wybieramy tylko sprawdzone tworzywa do produkcji lamp, by mogły dekorować Twoje wnętrza przez lata.
Żarówki E27 - to popularne typy źródeł światła, dzięki czemu nie będziesz mieć problemu z dobraniem żarówki do lampy dziecięcej wiszącej.
Postaw na oryginalne dodatki w wystroju pokoju dziecka i wybierz lampę z abażurem w mapy!";
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
$product->name = [$default_lang => "Lampa Wisząca Dziecięca Abażur Jednorożec"];
$product->link_rewrite = [$default_lang => "lampa-wiszaca-dziecieca-abazur-jednorozec"];
$product->price = 53.00;
$product->quantity = 90;
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/lampa-wiszaca-dziecieca-abazur-jednorozec.jpg";
$product->image_url = $url;
$product->description = "Lampa wisząca dziecięca z abażurem z jednorożcem
Chcesz, aby pokój Twojej małej córeczki był wyjątkowy i pełen radosnego nastroju? Dodaj do niego lampę z abażurem z jednorożcem. Wesoły motyw z pewnością spodoba się dziecku oraz wkomponuje się w całą aranżację pokoju.
Gdzie zawiesić lampę wiszącą pojedynczą z abażurem w jednorożce?
Lampa wisząca może pełnić rolę oświetlenia głównego w pokoju dziecka. Wystarczy, że zawiesisz ją w centralnym punkcie pomieszczenia. Wtedy lampa równomiernie oświetli pokój. Lampę możesz zawiesić również nieco niżej nad łóżkiem, biurkiem czy stolikiem do zabaw. Lampa z abażurem z jednorożcem pięknie wygląda nie tylko w pokoju dziecka, ale także w przedszkolu, bawialni bądź żłobku.
Jakie praktyczne funkcje posiada urocza lampa wisząca z abażurem w jednorożce?
Największą zaletą lampy jest regulowana wysokość, która pozwala na idealne dopasowanie oświetlenia do wymiaru pokoju. Abażur posiada wiele żywych kolorów, dzięki czemu na pewno będzie komponował się z wystrojem pokoju Twojego dziecka. Oświetlenie posiada 4 barwy linek do wyboru - różową, białą, czarną i srebrną. Lampa dziecięca wisząca zasilana jest żarówkami E27.
Podkreśl wesoły charakter pokoju swojego dziecka naszą lampą z abażurem w jednorożce!";
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
$product->name = [$default_lang => "Lampa Wisząca Dziecięca z Abażurem w Różowe Sowy"];
$product->link_rewrite = [$default_lang => "lampa-wiszaca-dziecieca-z-abazurem-w-rozowe-sowy"];
$product->price = 53.00;
$product->quantity = 90;
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/lampa-wiszaca-dziecieca-z-abazurem-w-rozowe-sowy.jpg";
$product->image_url = $url;
$product->description = "Lampa wisząca dziecięca z abażurem w sówki
Urocza lampa wisząca z abażurem w sowy spodoba się tym najmłodszym jak i nieco starszym dzieciom. Odcienie różu, fioletu i błękitu cudownie rozweselą pokój Twojej córeczki.
Gdzie najlepiej zawiesić lampę wiszącą z abażurem w sowy dla dzieci?
Lampa dedykowana jest do pokoju dziecka, ale świetnie sprawdzi się również w przedszkolu, żłobku, świetlicy czy bawialni dla najmłodszych. Zawieś lampę dziecięcą w centralnym punkcie pokoju, a zyskasz równomiernie oświetlone pomieszczenie. Zwis wiszący możesz również umieścić tuż nad biurkiem lub łóżkiem w pokoju dziecięcym, dzięki czemu zyskasz światło skoncentrowane w jednym kierunku.
Jakie zalety posiada lampa dziecięca z kolorowym abażurem w sowy?
Regulacja wysokości - dzięki tej funkcji lampę wiszącą dziecięcą z łatwością dopasujesz do rozmiaru każdego rozmiaru pokoju.
4 kolory linki do wyboru - do lampy z abażurem w sowy możesz wybrać białą, różową, srebrną lub czarną linkę. Wybór zależy od Twojego gustu i barw panujących w pokoju.
Źródła światła E27 - lampa zasilana jest najpopularniejszymi żarówkami z gwintem E27.
Dodaj jeszcze więcej radości do pokoju swojego dziecka dzięki lampie z abażurem w sówki!";
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
$product->name = [$default_lang => "Nowoczesna Lampa Wisząca Abażur w Kolorowe Zygzaki"];
$product->link_rewrite = [$default_lang => "nowoczesna-lampa-wiszaca-abazur-w-kolorowe-zygzaki"];
$product->price = 53.00;
$product->quantity = 90;
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/nowoczesna-lampa-wiszaca-abazur-w-kolorowe-zygzaki.jpg";
$product->image_url = $url;
$product->description = "Nowoczesna lampa wisząca z kolorowym abażurem w zygzaki
Wyjątkowa lampa wisząca z abażurem, która pasuje do nowoczesnych wystrojów wnętrz. Oddaje również klimat skandynawskich i minimalistycznych aranżacji. Wzór abażura w zygzaki o odcieniach fioletu doda oryginalności Twoim wnętrzom.
Gdzie najlepiej prezentuje się stylowa lampa wisząca pojedyncza z abażurem w kolorowe zygzaki?
Lampę wiszącą nowoczesną możesz zawiesić w sypialni, pokoju dziecka, kuchni, jadalni, salonie bądź przedpokoju. Oświetlenie pasuje do wnętrza bez względu na jego przeznaczenie. Lampa może pełnić rolę oświetlenia głównego w małym pokoju jak i funkcję światła wspomagającego. Umieść zwis wiszący w centralnej części pokoju, by zyskać równomiernie oświetlone wnętrze. Jeśli zależy Ci na świetle skoncentrowanym w jednym punkcie, zawieś lampę nisko nad danym przedmiotem, np. stołem, komodą lub stolikiem kawowym.
Jakie funkcje posiada stylowa lampa wisząca z abażurem w zygzaki?
Lampa wisząca posiada regulację wysokości. Dzięki niej łatwo dostosujesz oświetlenie do wymiarów pokoju. Lampa wisząca regulowana posiada 3 kolory linki do wyboru - czarną, białą i srebrną. Uniwersalne barwy pozwalają na łatwe dopasowanie lampy do wnętrza. Oświetlenie zasilane jest popularnymi żarówkami z gwintem E27.
Uatrakcyjnij design swoich wnętrz z naszą nowoczesną lampą z abażurem w zygzaki!";
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
$product->name = [$default_lang => "Lampa Wisząca Pojedyncza z Abażurem we Wzory"];
$product->link_rewrite = [$default_lang => "lampa-wiszaca-pojedyncza-z-abazurem-we-wzory"];
$product->price = 53.00;
$product->quantity = 90;
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/lampa-wiszaca-pojedyncza-z-abazurem-we-wzory.jpg";
$product->image_url = $url;
$product->description = "Lampa wisząca regulowana z abażurem we wzory
Lampa wisząca, która doskonale oddaje klimat wnętrz w stylu skandynawskim, nowoczesnym i minimalistycznym. Niezwykły wzór abażura w połączeniu z prostą konstrukcją tworzą lampę, która zachwyca wyjątkową formą.
W jakich pomieszczeniach lampa wisząca pojedyncza z abażurem we wzory wygląda najlepiej?
Zwis wiszący wspaniale prezentuje się nad łóżkiem w sypialni, nad stołem w kuchni bądź jadalni, w przedpokoju, pokoju młodzieżowym - lampa pasuje do każdego wnętrza, w którym panuje nowoczesny wystrój. Wzór abażura przyciąga spojrzenia jednocześnie pozostając w stonowanym tonie. Kolory klosza świetnie komponują się z większością barw panujących we wnętrzach.
Jakie praktyczne właściwości posiada nowoczesna lampa wisząca z abażurem we wzory?
Regulowana wysokość - dzięki niej perfekcyjnie dopasujesz lampę do rozmiaru swoich wnętrz.
3 kolory linki do wyboru - uniwersalne barwy - czarny, biały i srebrny pozwalają łatwo dopasować konstrukcję do wystroju pokoju.
Źródła światła E27 - do lampy wiszącej pasują wszystkie typy żarówek E27 - tradycyjne, LED i dekoracyjne.
Wybierz lampę wiszącą z abażurem we wzory i ciesz się wyjątkową aranżacją wnętrza!";
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
$product->name = [$default_lang => "Nowoczesna Lampa Wisząca z Abażurem w Zygzaki"];
$product->link_rewrite = [$default_lang => "nowoczesna-lampa-wiszaca-z-abazurem-w-zygzaki"];
$product->price = 53.00;
$product->quantity = 90;
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/nowoczesna-lampa-wiszaca-z-abazurem-w-zygzaki.jpg";
$product->image_url = $url;
$product->description = "Lampa wisząca z abażurem zygzak i regulacją wysokości
Niezwykła lampa wisząca, która świetnie komponuje się z wnętrzami w stylu nowoczesnym, skandynawskim i minimalistycznym. Prosta konstrukcja i oryginalny wzór abażura dodadzą Twojemu wnętrzu wyjątkowego nastroju.
Gdzie najlepiej prezentuje się stylowa lampa wisząca z abażurem w zygzak czarno-biały?
Sypialnia, salon, kuchnia, przedpokój, jadalnia, pokój dziecka - zwis wiszący pasuje do wszystkich rodzajów wnętrz bez względu na ich przeznaczenie. Czarno-biały zygzak komponuje się ze wszystkimi innymi barwami panującymi w pomieszczeniu. Wzór abażura ożywia minimalistyczne aranżacje i cudownie komponuje się z nowoczesnymi wystrojami wnętrz.
Jakie zalety posiada nowoczesna lampa wisząca z abażurem PCV w zygzak?
3 kolory linki do wyboru - dzięki nim z łatwością dopasujesz lampę wiszącą nowoczesną do swoich wnętrz.
Regulowana wysokość - wysoka kamienica czy niewielki pokój - dzięki regulacji dopasujesz lampę do każdego z tych wnętrz.
Żarówki E27 - zwis wiszący pojedynczy z abażurem zasilany jest popularnymi źródłami światła z gwintem E27.
Wybierz kolor linki i dodaj oryginalności swoim wnętrzom lampą wiszącą z abażurem w zygzak!";
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
$product->name = [$default_lang => "Lampa Wisząca do Kuchni Abażur Coffe"];
$product->link_rewrite = [$default_lang => "lampa-wiszaca-do-kuchni-abazur-coffe"];
$product->price = 53.00;
$product->quantity = 90;
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/lampa-wiszaca-do-kuchni-abazur-coffe.jpg";
$product->image_url = $url;
$product->description = "Lampa wisząca z abażurem coffe do kuchni regulowana
Szukasz oryginalnej lampy kuchennej? Mamy dla Ciebie świetną propozycję! Lampa wisząca z abażurem PCV będzie stylową dekoracją i funkcjonalnym oświetleniem Twojej kuchni.
Gdzie najlepiej zawiesić lampę wiszącą regulowaną z abażurem we wzory?
Lampa jest dedykowana do kuchni, jednak dobrze sprawdzi się również w kawiarni, restauracji czy innym lokalu gastronomicznym. Abażur z napisami “Coffe” świetnie pasuje do nowoczesnych aranżacji. Natomiast klasycznym wystrojom kuchni nadaje oryginalności i wyjątkowego charakteru.
Jakie praktyczne funkcje posiada nowoczesna lampa wisząca do kuchni z abażurem we wzory?
Regulacja wysokości - funkcja ta pozwala idealnie dopasować lampę do rozmiaru kuchni. Oświetlenie możesz zawiesić tuż przy suficie lub nisko nad wyspą kuchenną.
3 kolory linki do wyboru - czarny, biały i srebrny - dzięki trzem uniwersalnym barwom z łatwością dopasujesz lampę abażur do wystroju swojej kuchni.
Wytrzymałe materiały wykonania - solidna konstrukcja i abażur PC zapewniają radość z użytkowania lampy przez bardzo długi czas.
Żarówki z gwintem E27 - do lampy wiszącej kuchennej pasują popularne typy źródeł światła E27. Oświetlenie możesz zasilić zwykłymi żarówkami, ledowymi lub dekoracyjnymi.
Dodaj nowoczesności i wyjątkowego charakteru swojej kuchni!";
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
$product->name = [$default_lang => "Lampa Wisząca Pojedyncza Kolorowa Pająk Abażur"];
$product->link_rewrite = [$default_lang => "lampa-wiszaca-pojedyncza-kolorowa-pajak-abazur"];
$product->price = 99.00;
$product->quantity = 90;
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/lampa-wiszaca-pojedyncza-kolorowa-pajak-abazur.jpg";
$product->image_url = $url;
$product->description = "Lampa wisząca pająk z abażurem wiele kolorów
Aranżację inspirowaną stylem futurystycznym lub nowoczesnym, doskonale uzupełni lampa wisząca z abażurem. Neonowe barwy, które kontrastują z jasnymi bądź ciemnymi meblami to niemalże definicja stylu nowoczesnego. Lampa wisząca ma nowoczesny wydźwięk, zaakcentowany przez abażur w wyrazistym kolorze.
W jakim pomieszczeniu najlepiej prezentuje się stylowa lampa wisząca pająk z abażurem?
Lampa z abażurem w wyrazistym kolorze to sposób na ożywienie zarówno sypialni, jak i salonu czy jadalni. Uniwersalizm i ponadczasowość prezentowanego modelu lampy to atut, który pozwala na wykorzystanie go w wielu miejscach. Ekspresyjny i interesujący kolor ubarwi nawet tradycyjne pomieszczenie.
Jakie zalety posiada lampa wisząca pająk z kolorowymi abażurami do wyboru?
Regulacja wysokości lampy umożliwia dostosowanie jej do własnych potrzeb oraz walorów pomieszczenia - maksymalna wysokość 200 cm
Jedno źródło światła zadba o przyjemną atmosferę i dostateczne oświetlenie wybranego pomieszczenia.
Lampę możesz połączyć z wieloma stylami wnętrzarskimi.
10 kolorów abażura i 2 kolory konstrukcji do wyboru sprawiają, że z łatwością skomponujesz lampę pasującą do Twojego wnętrza.
Wybierz lampę wiszącą i rozkoszuj się aksamitnym światłem!";
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
$product->name = [$default_lang => "Lampa Wisząca Dziecięca z Abażurem Piłki"];
$product->link_rewrite = [$default_lang => "lampa-wiszaca-dziecieca-z-abazurem-pilki"];
$product->price = 69.00;
$product->quantity = 90;
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/lampa-wiszaca-dziecieca-z-abazurem-pilki.jpg";
$product->image_url = $url;
$product->description = "Lampa wisząca pojedyncza z abażurem w piłki
Każde dziecko ma swoje marzenia, które chce realizować. Najmłodszym, którzy marzą o karierze piłkarskiej zapewne przypadnie do gustu kolorowa lampa dziecięca z piłkarskim nadrukiem. Dodaj kolorów i pasji do pokoju swojego malucha, żeby każda chwila spędzona na zabawie czy nauce była w nim radosna!
Gdzie wykorzystać lampę dziecięcą z abażurem w piłki?
Lampa wisząca z jednym źródłem światła to doskonała propozycja do oświetlenia pokoju dla dziecka. Abażur z motywem piłek spodoba się każdemu małemu chłopcu. Lampa wisząca dziecięca zachowana jest w stonowanej kolorystyce, dzięki czemu łatwo dopasujesz ją do barw panujących w pokoju Twojego malucha.
Jakie zalety ma lampa dziecięca z abażurem w piłkarskim stylu?
Intensywne kolory lampy i wysoka jakość materiałów to gwarancja, że Twoje dziecko przez długi czas będzie cieszyć się piłkarską dekoracją w swoim pokoju.
Regulowana wysokość lampy pozwala wybrać optymalny wymiar do rozmiaru pokoju dziecka.
Prosta forma lampy sprawia, że nadruk prezentuje się bardzo realistycznie i stylowo.
Oświetlenie zasilane jest żarówkami E27.
Podaruj swojemu dziecku namiastkę piłkarskiego świata i wybierz prezentowaną lampę wiszącą do pokoju swojego dziecka!";
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
$product->name = [$default_lang => "Lampka Nocna z Abażurem w Stylu Loft"];
$product->link_rewrite = [$default_lang => "lampka-nocna-z-abazurem-w-stylu-loft"];
$product->price = 49.00;
$product->quantity = 90;
$product->id_category = 3;
$product->id_category_default = 3;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyAbazur/lampka-nocna-z-abazurem-w-stylu-loft.jpg";
$product->image_url = $url;
$product->description = "Lampka nocna metalowa z abażurem w stylu loft
Jaka powinna być sypialnia? Przytulna i komfortowa, a o to zadba odpowiednia ilość światła. Lampka nocna w stylu loft to świetne uzupełnienie aranżacji w sypialni. Podczas wieczornego relaksu, lampka nocna da dokładnie tyle światła, ile potrzeba. Oświetlenie zawdzięcza stylowy wygląd swojej prostej i minimalistycznej formie.
Gdzie sprawdzi się lampka nocna diament z abażurem?
Idealnym miejscem dla lampy nocnej z abażurem jest sypialnia. Oświetlenie postawione na szafce nocnej tuż przy łóżku doda wnętrzu przytulności, a Tobie umożliwi wieczorny relaks. Lampa z abażurem jest również doskonałą propozycją do salonu. Postawiona na komodzie pięknie oświetli obraz lub inną dekorację. Lampa posiada 12 kolorowych abażurów do wyboru, które świetnie oddają charakter także pokoju dziecka.
Jakie zalety posiada lampka nocna w stylu loft?
Subtelny kształt i geometryczna forma abażura to zaleta, dzięki której z łatwością dopasujesz lampkę do aranżacji wnętrza.
Kabel z włącznikiem zapewnia komfort w użytkowaniu lampy.
12 kolorów abażura oraz 3 kolory konstrukcji do wyboru pozwalają skomponować własne oświetlenie dopasowane do wystroju pokoju.
Sprawdź, jak pozytywnie wpłynie na wygląd Twojej sypialni obecność lampki nocne z abażurem!";
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
