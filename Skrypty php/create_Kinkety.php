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
$product->name = [$default_lang => "Lampa Kinkiet Edison Loft"];
$product->link_rewrite = [$default_lang => "lampa-kinkiet-edison-loft"];
$product->price = 39.00;
$product->quantity = 90;
$product->id_category = 16;
$product->id_category_default = 16;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/Kinkety/lampa-kinkiet-edison-loft.jpg";
$product->image_url = $url;
$product->description = "Lampa ścienna kinkiet loft różne kolory
Nowoczesny i unikalny design kinkietu wprowadzi do Twoich wnętrz elegancję i oryginalność. Spiralne łączenie oraz brak kloszy to świetny sposób na udekorowanie pomieszczenia w każdym stylu.
Do jakich wnętrz pasuje prezentowana lampa?
Kinkiet z powodzeniem będzie pełnił funkcje oświetlenia łazienkowego, kuchennego czy biurowego. Dzięki wielu kolorom do wyboru możesz z łatwością tworzyć piękne aranżacje, o jakich marzysz!
Jakie materiały zostały wykorzystane do produkcji kinkietu ściennego?
Lampa w całości wykonana jest z trwałego metalu, dzięki czemu oświetlenie posłuży Twoim wnętrzom przez długi czas. Kinkiet może być zasilany wieloma źródłami zasilania, na przykład żarówkami LED lub energooszczędnymi.";
$product->add();
$product->save();
$product->addToCategories($product->id_category);
StockAvailable::setQuantity((int)$product->id, 0, $product->quantity, Context::getContext()->shop->id);
$shops = Shop::getShops(true, null, true);
$image = new Image();
$image->id_product = $product->id;
$image->position = Image::getHighestPosition($product->id) + 1;
$image->cover = true;
if (($image->validateFields(false, true)) === true &&
        ($image->validateFieldsLang(false, true)) === true && $image->add())
{
   $image->associateTo($shops);
   MyAdminImportController::copyImg($product->id, $image->id, $url, 'products', false);
}


$product = new Product();
$product->name = [$default_lang => "Lampa Aluminiowa Nowoczesny Kwadratowy Kinkiet"];
$product->link_rewrite = [$default_lang => "lampa-aluminiowa-nowoczesny-kwadratowy-kinkiet"];
$product->price = 55.00;
$product->quantity = 90;
$product->id_category = 16;
$product->id_category_default = 16;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/Kinkety/lampa-kinkiet-metalowa-stylowa.jpg";
$product->image_url = $url;
$product->description = "Stylowy kwadratowy kinkiet w trzech kolorach
Prosty, lecz nowoczesny design lampy ściennej sprawi, że Twoje wnętrza staną się stylowe i eleganckie. Minimalistyczny styl oświetlenia świetnie prezentuje się w każdym pomieszczeniu, niezależnie od jego przeznaczenia.
Gdzie najlepiej zawiesić prezentowany kinkiet?
Lampa będzie rewelacyjnie wyglądać jako oświetlenie do salonu. Kinkiet może pełnić funkcję oświetlenia wspomagającego, którego będziesz używać przy mniej wymagających czynnościach. Natomiast oświetleniem głównym może zostać plafon stworzony w tym samym stylu, co prezentowany kinkiet. Dzięki takiemu rozwiązaniu uzyskasz spójność stylów, przez co salon będzie wyglądał elegancko i nowocześnie. Zestawienie dwóch lamp świetnie sprawdzi się również w sypialni, kuchni, jadalni czy biurze. Kinkiet znakomicie komponuje się również z lampami wiszącymi.
Jakie zalety posiada kwadratowy kinkiet?
Lampa została wykonana z metalu, dzięki czemu jest wytrzymała i odporna na uszkodzenia. Kinkiet stworzony jest w trzech klasycznych kolorach, aby dopasowanie do stylu pomieszczenia było jeszcze łatwiejsze. Kinkiet może być zasilany żarówkami halogenowymi lub ledowymi G9.";
$product->add();
$product->save();
$product->addToCategories($product->id_category);
StockAvailable::setQuantity((int)$product->id, 0, $product->quantity, Context::getContext()->shop->id);
$shops = Shop::getShops(true, null, true);
$image = new Image();
$image->id_product = $product->id;
$image->position = Image::getHighestPosition($product->id) + 1;
$image->cover = true;
if (($image->validateFields(false, true)) === true &&
        ($image->validateFieldsLang(false, true)) === true && $image->add())
{
   $image->associateTo($shops);
   MyAdminImportController::copyImg($product->id, $image->id, $url, 'products', false);
}


$product = new Product();
$product->name = [$default_lang => "Nowoczesna Lampa Kinkiet Loft Miedź Chrom"];
$product->link_rewrite = [$default_lang => "nowoczesna-lampa-kinkiet-loft-miedz-chrom"];
$product->price = 39.00;
$product->quantity = 90;
$product->id_category = 16;
$product->id_category_default = 16;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/Kinkety/nowoczesna-lampa-kinkiet-loft-miedz-chrom.jpg";
$product->image_url = $url;
$product->description = "Kinkiet Loft Miedź Chrom
Minimalistyczny styl, solidne wykonanie oraz oryginalny wygląd kinkietu nadadzą Twoim wnętrzom wyjątkowego klimatu.
Do jakich pomieszczeń pasuje prezentowany kinkiet?
Lampa ścienna świetnie prezentuje się zarówno w kuchni, jadalni jak i salonie czy sypialni. Dzięki czarnej konstrukcji połączonej z miedzianymi lub chromowymi dodatkami, kinkiet znakomicie dopasowuje się do każdego stylu wnętrza.
Jakie zalety posiada nowoczesny kinkiet?
Lampa stworzona jest metalu wysokiej jakości, co gwarantuje użyteczność kinkietu na bardzo długi czas. Lampa może być zasilana wieloma rodzajami żarówek, w tym dekoracyjnymi, które wspaniale ozdobią Twoje wnętrza, nadając im niepowtarzalnego klimatu.";
$product->add();
$product->save();
$product->addToCategories($product->id_category);
StockAvailable::setQuantity((int)$product->id, 0, $product->quantity, Context::getContext()->shop->id);
$shops = Shop::getShops(true, null, true);
$image = new Image();
$image->id_product = $product->id;
$image->position = Image::getHighestPosition($product->id) + 1;
$image->cover = true;
if (($image->validateFields(false, true)) === true &&
        ($image->validateFieldsLang(false, true)) === true && $image->add())
{
   $image->associateTo($shops);
   MyAdminImportController::copyImg($product->id, $image->id, $url, 'products', false);
}


$product = new Product();
$product->name = [$default_lang => "Nowoczesna Lampa Sufitowa Plafon Kinkiet Reflektor"];
$product->link_rewrite = [$default_lang => "nowoczesna-lampa-sufitowa-plafon-kinkiet-reflektor"];
$product->price = 179.00;
$product->quantity = 90;
$product->id_category = 16;
$product->id_category_default = 16;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/Kinkety/lampa-kinkiet-plafon-reflektor.jpg";
$product->image_url = $url;
$product->description = "Lampa 2-punktowa reflektor kinkiet
Szukasz oświetlenia o minimalistycznym stylu, które wprowadzi do Twoich wnętrz mnóstwo nowoczesności? Przedstawiamy lampę sufitową o prostym designie z wieloma praktycznymi funkcjami.
Gdzie zawiesić nowoczesny plafon?
Reflektor może stać się wspaniałą lampą biurową, kuchenną, sypialnianą czy nawet łazienkową. Stonowane kolory konstrukcji umożliwiają dopasowanie oświetlenia do każdego stylu i charakteru pomieszczenia.
Jakie zalety posiada 2-płomienna lampa?
Oświetlenie posiada możliwość zawieszenia zarówno na ścianie jak i na suficie, dzięki czemu możesz stworzyć stylowy plafon lub elegancki kinkiet. Dodatkowo lampa posiada opcję regulowania reflektorów, co pozwala na ustawienie światła pod dowolnym kątem i kierunkiem. Plafon wykonany jest z tworzyw wysokiej jakości, przez co masz gwarancję wytrzymałości lampy sufitowej. Kinkiet może być zasilany żarówkami LED AR111 GU10.";
$product->add();
$product->save();
$product->addToCategories($product->id_category);
StockAvailable::setQuantity((int)$product->id, 0, $product->quantity, Context::getContext()->shop->id);
$shops = Shop::getShops(true, null, true);
$image = new Image();
$image->id_product = $product->id;
$image->position = Image::getHighestPosition($product->id) + 1;
$image->cover = true;
if (($image->validateFields(false, true)) === true &&
        ($image->validateFieldsLang(false, true)) === true && $image->add())
{
   $image->associateTo($shops);
   MyAdminImportController::copyImg($product->id, $image->id, $url, 'products', false);
}


$product = new Product();
$product->name = [$default_lang => "Lampa Kinkiet Chrom Edison Loft"];
$product->link_rewrite = [$default_lang => "lampa-kinkiet-chrom-edison-loft"];
$product->price = 43.90;
$product->quantity = 90;
$product->id_category = 16;
$product->id_category_default = 16;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/Kinkety/lampa-kinkiet-chrom-edison-loft.jpg";
$product->image_url = $url;
$product->description = "Kinkiet chrom Edison Loft
Nowoczesny, choć prosty design kinkietu rewelacyjnie ozdobi Twoje wnętrza nadając im wyjątkowego klimatu.
Gdzie zawiesić prezentowany kinkiet?
Lampa znakomicie odnajdzie się zarówno w kuchni, jadalni, salonie jak i sypialni czy biurze. Chromowana, metaliczna konstrukcja wspaniale prezentuje się w nowoczesnych wnętrzach jak i aranżacjach retro.
Czy lampa ścienna jest praktyczna?
Naturalnie, że tak. Materiał, z jakiego została wykonana lampa, to metal w powłoce chromowej, który zapewnia niezawodność i odporność na uszkodzenia. Kinkiet możesz skompletować z lampami sufitowymi (3- lub 5-płomiennymi) o tym samym designie. Takie połączenie nada Twojej aranżacji harmonii i elegancji. Kinkiet posiada wiele źródeł zasilania, w tym efektowne żarówki dekoracyjne, ledowe czy energooszczędne.";
$product->add();
$product->save();
$product->addToCategories($product->id_category);
StockAvailable::setQuantity((int)$product->id, 0, $product->quantity, Context::getContext()->shop->id);
$shops = Shop::getShops(true, null, true);
$image = new Image();
$image->id_product = $product->id;
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
$product->id_category = 16;
$product->id_category_default = 16;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/Kinkety/lampa-kinkiet-z-abazurem.jpg";
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
$product->name = [$default_lang => "Lampa Kinkiet Ball na Led Plafon Kula"];
$product->link_rewrite = [$default_lang => "lampa-kinkiet-ball-na-led-plafon-kula"];
$product->price = 39.00;
$product->quantity = 90;
$product->id_category = 16;
$product->id_category_default = 16;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/Kinkety/lampa-sufitowa-ball-3-plomienna-plafon-na-led.jpg";
$product->image_url = $url;
$product->description = "Lampa kinkiet plafon 1-płomienna spot
Funkcjonalne i stylowe oświetlenie, które sprawi, że Twoje wnętrza będą zachwycać nowoczesnym designem. Wybierz kolor najbardziej oddający charakter pomieszczenia i ciesz się ponadczasową aranżacją.
Do jakich wnętrz najbardziej pasuje elegancki kinkiet?
Lampa stanie się fantastyczną ozdobą Twojego biura, sypialni, salonu, jadalni czy też kuchni. Prosta, klasyczna konstrukcja z powodzeniem dopasują się do każdego pomieszczenia, niezależnie od jego przeznaczenia.
Jakie praktyczne funkcje posiada lampa?
Lampa posiada opcję regulacji kąta padania światła, a co za tym idzie oświetlenie może zostać zamontowane zarównano na ścianie jak i suficie. Dzięki temu wspaniałemu rozwiązaniu, sam zadecydujesz czy lampa stanie się stylowym plafonem czy kinkietem. Kolejną zaletą oświetlenia jest metalowa konstrukcja, która gwarantuje wytrzymałość i niezawodność. Lampa może być zasilana ledowymi żarówkami GU10.";
$product->add();
$product->save();
$product->addToCategories($product->id_category);
StockAvailable::setQuantity((int)$product->id, 0, $product->quantity, Context::getContext()->shop->id);
$shops = Shop::getShops(true, null, true);
$image = new Image();
$image->id_product = $product->id;
$image->position = Image::getHighestPosition($product->id) + 1;
$image->cover = true;
if (($image->validateFields(false, true)) === true &&
        ($image->validateFieldsLang(false, true)) === true && $image->add())
{
   $image->associateTo($shops);
   MyAdminImportController::copyImg($product->id, $image->id, $url, 'products', false);
}


$product = new Product();
$product->name = [$default_lang => "Nowoczesny Kinkiet Industrialny Różne Klosze"];
$product->link_rewrite = [$default_lang => "nowoczesny-kinkiet-industrialny-rozne-klosze"];
$product->price = 59.00;
$product->quantity = 90;
$product->id_category = 16;
$product->id_category_default = 16;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/Kinkety/nowoczesny-kinkiet-industrialny-rozne-klosze.jpg";
$product->image_url = $url;
$product->description = "Lampa ścienna kinkiet w stylu loft wiele kloszy
Oświetl wnętrza lampą, która nie tylko będzie spełniała swoje funkcje, ale również fantastycznie udekoruje Twoje pomieszczenia. Kinkiet w stylu loft z niebanalną konstrukcją i oryginalnymi kloszami do wyboru uczyni Twoje wnętrza wyjątkowymi i niepowtarzalnymi.
W jakich pomieszczeniach nowoczesny kinkiet prezentuje się najlepiej?
Lampa ścienna będzie znakomitym oświetleniem uzupełniającym do salonu, jadalni, sypialni czy kuchni. Kinkiet stworzy wspaniały duet z lampami sufitowymi z tej samej serii, które znajdziesz w naszej ofercie. Lampa ścienna to również znakomita propozycja do oświetlenia przedpokoju, holu czy schodów. Jeśli chcesz, aby kinkiet zachwycał również nietuzinkowym światłem, zasil go żarówką dekoracyjną. Ten szczególny rodzaj źródeł zasilania wyróżnia się stylowym wyglądem oraz ciepłym, przyjemnym dla oka światłem.
Jakie praktyczne funkcje posiada kinkiet industrialny?
Do stworzenie kinkietu wykorzystany metal malowany proszkowo, który charakteryzuje się wytrzymałością i odpornością na uszkodzenia. Aż pięć różnorodnych kloszy do wyboru w dwóch kolorach pozwala na skomponowanie własnego, niepowtarzalnej lampy, która idealnie odda charakter wnętrz. Kinkiet może być zasilany różnymi rodzajami żarówek – dekoracyjnymi, zwykłymi, energooszczędnymi czy ledowymi.";
$product->add();
$product->save();
$product->addToCategories($product->id_category);
StockAvailable::setQuantity((int)$product->id, 0, $product->quantity, Context::getContext()->shop->id);
$shops = Shop::getShops(true, null, true);
$image = new Image();
$image->id_product = $product->id;
$image->position = Image::getHighestPosition($product->id) + 1;
$image->cover = true;
if (($image->validateFields(false, true)) === true &&
        ($image->validateFieldsLang(false, true)) === true && $image->add())
{
   $image->associateTo($shops);
   MyAdminImportController::copyImg($product->id, $image->id, $url, 'products', false);
}


$product = new Product();
$product->name = [$default_lang => "Lampa Sufitowa Plafon Kinkiet Reflektor"];
$product->link_rewrite = [$default_lang => "lampa-sufitowa-plafon-kinkiet-reflektor"];
$product->price = 299.00;
$product->quantity = 90;
$product->id_category = 16;
$product->id_category_default = 16;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/Kinkety/lampa-kinkiet-plafon-reflektor.jpg";
$product->image_url = $url;
$product->description = "Lampa 4-płomienna reflektor
Nowoczesna, stylowa i elegancka – prezentowana lampa sufitowa nie tylko fantastycznie ozdobi Twoje wnętrza, ale również będzie funkcjonalnym i użytecznym oświetleniem.
Do jakich pomieszczeń pasuje 4-punktowy reflektor?
Lampa może zawisnąć absolutnie wszędzie – począwszy od kuchni, jadalni, salonu, a skończywszy na sypialni, pokoju czy biurze. Klasyczne kolory i subtelny design plafonu świetnie oddadzą charakter każdego pomieszczenia.
Jakie zalety posiada nowoczesny reflektor?
Największym atutem prezentowanej lampy sufitowej jest możliwość zawieszenia jej zarówno na ścianie jak i na suficie. Sam możesz zdecydować czy chcesz, aby lampa pełniła funkcję sufitowego plafonu czy kinkietu. Ponadto oświetlenie posiada regulowane reflektory, co pozwala na dowolne ustawienia kąta padania światła. Plafon jest zasilany żarówkami LED AR111 GU10.";
$product->add();
$product->save();
$product->addToCategories($product->id_category);
StockAvailable::setQuantity((int)$product->id, 0, $product->quantity, Context::getContext()->shop->id);
$shops = Shop::getShops(true, null, true);
$image = new Image();
$image->id_product = $product->id;
$image->position = Image::getHighestPosition($product->id) + 1;
$image->cover = true;
if (($image->validateFields(false, true)) === true &&
        ($image->validateFieldsLang(false, true)) === true && $image->add())
{
   $image->associateTo($shops);
   MyAdminImportController::copyImg($product->id, $image->id, $url, 'products', false);
}


$product = new Product();
$product->name = [$default_lang => "Nowoczesny Kinkiet Wiszący Lampa Ścienna Loft"];
$product->link_rewrite = [$default_lang => "nowoczesny-kinkiet-wiszacy-lampa-scienna-loft"];
$product->price = 65.00;
$product->quantity = 90;
$product->id_category = 16;
$product->id_category_default = 16;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/Kinkety/nowoczesny-kinkiet-wiszacy-lampa-scienna-loft.jpg";
$product->image_url = $url;
$product->description = "Oryginalna lampa ścienna kinkiet w stylu loft
Chcesz dodać swoim wnętrzom nowoczesności i wyjątkowego charakteru? Podobają Ci się lampy w minimalistycznym stylu, lecz o oryginalnym designie? Mamy kinkiet wiszący idealny dla Ciebie!Wybierz kolor oraz wzór klosza lampy i ciesz się niepowtarzalną aranżacją wnętrz.
W jakich pomieszczeniach stylowy kinkiet będzie prezentował się najlepiej?
Dzięki prostej konstrukcji, którą ozdabia dekoracyjny klosz, lampa ścienna wspaniale komponuje się z różnymi rodzajami pomieszczeń. Kinkiet może pełnić rolę oświetlenia wspomagającego do salonu, sypialni, przedpokoju, kuchni bądź jadalni. Uniwersalne kolory kinkietu wiszącego – biały i czarny – świetnie dopasują się do stylu panującego w Twoim domu. Kinkiet ws tylu loft może być zasilany żarówkami dekoracyjnymi, których światło nada wnętrzu przytulności i magicznego nastroju. Lampa ścienna z takim zasilaniem idealnie sprawdzi się w roli klimatycznego oświetlenia do sypialni, z nawet kawiarni czy restauracji.
Jakie praktyczne zalety posiada wiszący kinkiet industrialny?
Kinkiet został wykonany z metalu, co czyni trwałą i niezwykle wytrzymałą lampą. Oświetlenie ścienne posiada aż pięć wzorów kloszy do wyboru, dzięki czemu możesz skomponować własną lampę, która idealnie odda charakter Twojego pomieszczenia. Kinkiet zasilany jest różnymi rodzajami źródeł światła, na przykład żarówkami LED, dekoracyjnymi, energooszczędnymi lub zwykłymi E-27.";
$product->add();
$product->save();
$product->addToCategories($product->id_category);
StockAvailable::setQuantity((int)$product->id, 0, $product->quantity, Context::getContext()->shop->id);
$shops = Shop::getShops(true, null, true);
$image = new Image();
$image->id_product = $product->id;
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
$product->id_category = 16;
$product->id_category_default = 16;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/Kinkety/oryginalna-lampa-kinkiet-diament-material.jpg";
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
$product->name = [$default_lang => "Lampa Kinkiet Plafon Reflektor"];
$product->link_rewrite = [$default_lang => "lampa-kinkiet-plafon-reflektor"];
$product->price = 109.00;
$product->quantity = 90;
$product->id_category = 16;
$product->id_category_default = 16;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/Kinkety/lampa-kinkiet-plafon-reflektor.jpg";
$product->image_url = $url;
$product->description = "Lampa plafon 1-płomienna reflektor
Funkcjonalne oświetlenie połączone z klasycznym designem daje lampę sufitową, która będzie rewelacyjnie prezentować w nowoczesnych jak i aranżacjach retro.
Do jakich wnętrz pasuje prezentowany plafon?
Biuro, sypialnia, pokój czy salon – dzięki klasycznym kolorom i prostej konstrukcji lampa świetnie wkomponuje się w wystrój każdego pomieszczenia. Innowacyjnym rozwiązaniem w nowoczesnej lampie jest możliwość zawieszenia jej zarówno na ścianie jak i na suficie. Oświetlenie może pełnić rolę plafonu lub eleganckiego kinkietu.
Czy 1-punktowa lampa jest funkcjonalna?
Oprócz możliwości zawieszenia lampy w dwojaki sposób, możesz również regulować kąt padania światła pod dowolnym kierunkiem. Ponadto plafon został stworzony z solidnego metalu, co gwarantuje Ci wytrzymałość i wysoką jakość oświetlenia sufitowego. Lampa zasilana jest żarówkami LED AR111 GU10.";
$product->add();
$product->save();
$product->addToCategories($product->id_category);
StockAvailable::setQuantity((int)$product->id, 0, $product->quantity, Context::getContext()->shop->id);
$shops = Shop::getShops(true, null, true);
$image = new Image();
$image->id_product = $product->id;
$image->position = Image::getHighestPosition($product->id) + 1;
$image->cover = true;
if (($image->validateFields(false, true)) === true &&
        ($image->validateFieldsLang(false, true)) === true && $image->add())
{
   $image->associateTo($shops);
   MyAdminImportController::copyImg($product->id, $image->id, $url, 'products', false);
}


$product = new Product();
$product->name = [$default_lang => "Kinkiet Loft Kula Chrom"];
$product->link_rewrite = [$default_lang => "kinkiet-loft-kula-chrom"];
$product->price = 104.40;
$product->quantity = 90;
$product->id_category = 16;
$product->id_category_default = 16;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/Kinkety/kinkier-kule-01-chrom.jpg";
$product->image_url = $url;
$product->description = "Metalowa lampa kinkiet kula chrom
Nowoczesny i ponadczasowy design kinkietu sprawi, że Twoje wnętrza będą zachwycać wyjątkowym stylem. Metaliczny połysk lampy będzie idealnie komponował się z każda aranżacją.
Do jakich wnętrz pasuje nowoczesna lampa?
Oświetlenie będzie świetną lampą do biura, kuchni, salonu czy jadalni. Kombinacji, jakie można stworzyć z lampą ścienną, jest całe mnóstwo. A to wszystko dzięki jej uniwersalnej barwie, która dopasowuje się do każdego stylu – od nowoczesnych po klasyczne wnętrza.
Jakie zalety posiada prezentowana lampa?
Oświetlenie sufitowe wykonane jest z metalu w powłoce chromowej, dzięki czemu jest bardzo wytrzymałe. Kinkiet może być zasilany różnymi rodzajami światła, na przykład żarówkami LED.";
$product->add();
$product->save();
$product->addToCategories($product->id_category);
StockAvailable::setQuantity((int)$product->id, 0, $product->quantity, Context::getContext()->shop->id);
$shops = Shop::getShops(true, null, true);
$image = new Image();
$image->id_product = $product->id;
$image->position = Image::getHighestPosition($product->id) + 1;
$image->cover = true;
if (($image->validateFields(false, true)) === true &&
        ($image->validateFieldsLang(false, true)) === true && $image->add())
{
   $image->associateTo($shops);
   MyAdminImportController::copyImg($product->id, $image->id, $url, 'products', false);
}


$product = new Product();
$product->name = [$default_lang => "Stylowy Kinkiet Chrom"];
$product->link_rewrite = [$default_lang => "stylowy-kinkiet-chrom"];
$product->price = 59.00;
$product->quantity = 90;
$product->id_category = 16;
$product->id_category_default = 16;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/Kinkety/kinkiet-chrom-06-lampa-nowoczesna-1-plomienna-stylowa.jpg";
$product->image_url = $url;
$product->description = "Metalowy kinkiet lampa ścienna
Elegancki wygląd kinkietu nada Twoim wnętrzom oryginalnego i niepowtarzalnego klimatu. Faliste łączenia oraz metaliczny kolor lampy czynią ją wyjątkową i pasującą do każdego stylu pomieszczenia.
Gdzie najlepiej prezentuje się metalowy kinkiet?
Kuchnia, salon, sypialnia, biuro czy łazienka – lampa będzie pasować do każdego pomieszczenia. Kinkiet łączy w sobie nowoczesny i jednocześnie elegancki design. To właśnie dzięki temu lampa ścienna świetnie prezentuje się we wszystkich wnętrzach.
Jakie materiały zostały użyte do produkcji kinkietu?
Konstrukcja lampy została wykonana z metalu, co czyni ją trwałą i odporną na uszkodzenia. Klosz natomiast jest szklany. Lampa jest także bardzo funkcjonalna, dzięki możliwości podłączenia pod podwójny przełącznik. Kinkiet może być zasilany żarówkami LED, energooszczędnymi i wieloma innymi.";
$product->add();
$product->save();
$product->addToCategories($product->id_category);
StockAvailable::setQuantity((int)$product->id, 0, $product->quantity, Context::getContext()->shop->id);
$shops = Shop::getShops(true, null, true);
$image = new Image();
$image->id_product = $product->id;
$image->position = Image::getHighestPosition($product->id) + 1;
$image->cover = true;
if (($image->validateFields(false, true)) === true &&
        ($image->validateFieldsLang(false, true)) === true && $image->add())
{
   $image->associateTo($shops);
   MyAdminImportController::copyImg($product->id, $image->id, $url, 'products', false);
}


$product = new Product();
$product->name = [$default_lang => "Stylowy Kinkiet z Chromowanymi Elementami"];
$product->link_rewrite = [$default_lang => "stylowy-kinkiet-z-chromowanymi-elementami"];
$product->price = 52.00;
$product->quantity = 90;
$product->id_category = 16;
$product->id_category_default = 16;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/Kinkety/kinkiet-z-chromowanymi-elementami-z-serii-02.jpg";
$product->image_url = $url;
$product->description = "Elegancki kinkiet lampa ścienna z chromowanymi elementami
Ponadczasowy design w połączeniu z minimalistycznym stylem dają niesamowitą lampę ścienną, która wspaniale ozdobi Twoje pomieszczenie.
Gdzie najlepiej prezentuje się kinkiet?
Oświetlenie ścienne będzie znakomicie wyglądać zarówno w łazience, kuchni jak i pokoju czy biurze. Ciemny kolor konstrukcji, ciekawe zdobienia oraz efektowny klosz lampy ściennej pozwalają dopasować ją nawet do nietypowej aranżacji wnętrz.
Jakie materiały zostały wykorzystane do produkcji lampy?
Konstrukcja kinkietu jest metalowa, co czyni ją trwałą i odporną na uszkodzenia. Natomiast klosz lampy jest szklany. Kinkiet może być zasilany za pomocą żarówek LED, energooszczędnych i wielu innych.";
$product->add();
$product->save();
$product->addToCategories($product->id_category);
StockAvailable::setQuantity((int)$product->id, 0, $product->quantity, Context::getContext()->shop->id);
$shops = Shop::getShops(true, null, true);
$image = new Image();
$image->id_product = $product->id;
$image->position = Image::getHighestPosition($product->id) + 1;
$image->cover = true;
if (($image->validateFields(false, true)) === true &&
        ($image->validateFieldsLang(false, true)) === true && $image->add())
{
   $image->associateTo($shops);
   MyAdminImportController::copyImg($product->id, $image->id, $url, 'products', false);
}


$product = new Product();
$product->name = [$default_lang => "Lampa Kinkiet Szklany Klosz Wiele Kolorów"];
$product->link_rewrite = [$default_lang => "lampa-kinkiet-szklany-klosz-wiele-kolorow"];
$product->price = 29.00;
$product->quantity = 90;
$product->id_category = 16;
$product->id_category_default = 16;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/Kinkety/lampa-kinkiet-sufitowa-wiszaca-plafon.jpg";
$product->image_url = $url;
$product->description = "Elegancki kinkiet ze szklanym kloszem
Lampa ścienna, która wspaniale ozdobi i urozmaici Twoją aranżację wnętrz. Przekonaj się jak niewiele potrzeba, by wystrój pomieszczenia zachwycał elegancją i stylowością!
Gdzie najlepiej prezentuje się gustowny kinkiet?
Lampa znakomicie odnajdzie się w każdym pomieszczeniu – salon, jadalnia, sypialnia czy biuro – eleganckie oświetlenie pasuje do wszystkich wnętrz, niezależnie od ich przeznaczenia. Kinkiet został stworzony w aż czterech kolorach konstrukcji, aby jeszcze dokładniej dopasować lampę do designu pomieszczenia. Do kinkietu możesz dobrać lampę sufitową 2-, 3- lub 4-płomienną, stworzoną w tym samym stylu.
Czy lampa ścienna jest funkcjonalna?
Oświetlenie posiada klosz osadzony na przegubie, co pozwala na ustawienie światła pod dowolnym kątem i kierunkiem. Ponadto konstrukcji kinkietu wykonana jest z metalu malowanego proszkowo, dzięki czemu lampa jest trwała i odporna na uszkodzenia. Źródła światła, jakimi kinkiet może być zasilany, to żarówki LED, energooszczędne bądź zwykłe E-27.";
$product->add();
$product->save();
$product->addToCategories($product->id_category);
StockAvailable::setQuantity((int)$product->id, 0, $product->quantity, Context::getContext()->shop->id);
$shops = Shop::getShops(true, null, true);
$image = new Image();
$image->id_product = $product->id;
$image->position = Image::getHighestPosition($product->id) + 1;
$image->cover = true;
if (($image->validateFields(false, true)) === true &&
        ($image->validateFieldsLang(false, true)) === true && $image->add())
{
   $image->associateTo($shops);
   MyAdminImportController::copyImg($product->id, $image->id, $url, 'products', false);
}


$product = new Product();
$product->name = [$default_lang => "Kinkiet Loft Lampa Ścienna Miedź Różne Klosze"];
$product->link_rewrite = [$default_lang => "kinkiet-loft-lampa-scienna-miedz-rozne-klosze"];
$product->price = 59.00;
$product->quantity = 90;
$product->id_category = 16;
$product->id_category_default = 16;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/Kinkety/kinkiet-loft-lampa-scienna-miedz-rozne-klosze.jpg";
$product->image_url = $url;
$product->description = "Kinkiet loft miedź z wieloma kloszami do wyboru
Nowoczesność, oryginalność i minimalizm w jednej lampie! Prezentowany kinkiet, dzięki nietypowemu kształtowi oraz efektownymi kloszami, stanie się wspaniałą dekoracją, która uatrakcyjni Twoje wnętrza.
W jakich pomieszczeniach nowoczesny kinkiet wygląda najlepiej?
Lampa ścienna pasuje do nowoczesnych, industrialnych wnętrz oraz do aranżacji w stylu retro. Do kinkietu możesz dobrać lampę 3-płomienną lub żyrandol z pięcioma źródłami światła z tej samej serii. Lampa ścienna może wtedy pełnić funkcje oświetlenia wspomagającego, a lampa sufitowa oświetlenia głównego. Taki zestaw lamp świetnie sprawdzi się w obszernym salonie, jadalni, sypialni czy kuchni. Kinkiet posiada miedzianą podkloszówkę, która stylowo odznacza się od jednolitej barwy lampy. Dwa klasyczne kolory kinkietu – czerń i biel – umożliwiają dopasowanie lampy do każdego wnętrza.
Jakie zalety posiada kinkiet w stylu loft?
Lampa została wykonana z metalu, co czyni ją wytrzymałym i odpornym na uszkodzenia oświetleniem. Kinkiet posiada aż pięć kloszy do wyboru, dzięki czemu skomponujesz oświetlenie idealnie oddające charakter Twoich wnętrz. Lampa ścienna zasilana jest żarówkami dekoracyjnymi, LED, energooszczędnymi lub zwykłymi o gwincie E27.";
$product->add();
$product->save();
$product->addToCategories($product->id_category);
StockAvailable::setQuantity((int)$product->id, 0, $product->quantity, Context::getContext()->shop->id);
$shops = Shop::getShops(true, null, true);
$image = new Image();
$image->id_product = $product->id;
$image->position = Image::getHighestPosition($product->id) + 1;
$image->cover = true;
if (($image->validateFields(false, true)) === true &&
        ($image->validateFieldsLang(false, true)) === true && $image->add())
{
   $image->associateTo($shops);
   MyAdminImportController::copyImg($product->id, $image->id, $url, 'products', false);
}


$product = new Product();
$product->name = [$default_lang => "Kinkiet Kula Regulowany Różne Kolory"];
$product->link_rewrite = [$default_lang => "kinkiet-kula-regulowany-rozne-kolory"];
$product->price = 39.00;
$product->quantity = 90;
$product->id_category = 16;
$product->id_category_default = 16;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/Kinkety/kinkiet-kule-metalowa-oprawa-kinkiet-kule-rozne-kolory.jpg";
$product->image_url = $url;
$product->description = "Kinkiet ścienny metalowa oprawa kula różne kolory
Szukasz oświetlenia, które nada Twoim wnętrzom oryginalnego i nowoczesnego designu? Dobrze trafiłeś! Nasz kinkiet w kształcie kuli z powodzeniem ozdobi pomieszczenia zaprojektowane w każdym stylu.
Gdzie najlepiej prezentuje się lampa ścienna?
Kinkiet łazienkowy, kuchenny czy biurowy – to tylko kilka z mnóstwa zastosowań naszej nowoczesnej lampy. Oświetlenie zostało stworzone w wielu kolorach, aby dopasowanie go do stylu Twojego pomieszczenia było jeszcze łatwiejsze.
Jakie tworzywa zostały wykorzystane do produkcji kinkietu ściennego?
Całość lampy wykonana jest z wytrzymałego metalu. Lampa posiada także możliwość regulacji kąta światła, co jest niezwykle przydatną i funkcjonalną opcją. Kinkiet może być zasilany oświetleniem ledowym.";
$product->add();
$product->save();
$product->addToCategories($product->id_category);
StockAvailable::setQuantity((int)$product->id, 0, $product->quantity, Context::getContext()->shop->id);
$shops = Shop::getShops(true, null, true);
$image = new Image();
$image->id_product = $product->id;
$image->position = Image::getHighestPosition($product->id) + 1;
$image->cover = true;
if (($image->validateFields(false, true)) === true &&
        ($image->validateFieldsLang(false, true)) === true && $image->add())
{
   $image->associateTo($shops);
   MyAdminImportController::copyImg($product->id, $image->id, $url, 'products', false);
}


$product = new Product();
$product->name = [$default_lang => "Kinkiet Loft Lampa Ścienna Chrom Różne Klosze"];
$product->link_rewrite = [$default_lang => "kinkiet-loft-lampa-scienna-chrom-rozne-klosze"];
$product->price = 59.00;
$product->quantity = 90;
$product->id_category = 16;
$product->id_category_default = 16;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/Kinkety/kinkiet-loft-lampa-scienna-chrom-rozne-klosze.jpg";
$product->image_url = $url;
$product->description = "Stylowy kinkiet w stylu loft z chromowaną podkloszówką
Nowoczesny, a zarazem minimalistyczny styl kinkietu nada Twoim wnętrzom oryginalności i wyjątkowego charakteru. Ciekawa konstrukcja w połączeniu z kloszem odsłaniającym żarówkę dają oświetlenie, które jednocześnie pełni role dekoracyjne w pomieszczeniu. Wybierz kolor najbardziej pasujący do stylu Twojej aranżacji wnętrz i ciesz się niepowtarzalnym designem!
Gdzie najlepiej prezentuje się kinkiet industrialny?
Oryginalna forma lampy ściennej wspaniale prezentuje się pomieszczeniach industrialnych, aranżacjach retro oraz nowoczesnych wnętrzach. Kinkiet może pełnić rolę oświetlenia wspomagającego w salonie, jadalni lub sypialni. Do lampy ściennej możesz dobrać żyrandol z tej samej serii, dzięki czemu uzyskasz idealnie współgrający ze sobą zestaw oświetleniowy. Kinkiet został wykonany w klasycznych kolorach, co pozwala na łatwe dopasowanie lampy do barw panujących w pomieszczeniu.
Jakie zalety posiada metalowy kinkiet w stylu loft?
Do produkcji kinkietu wykorzystano wytrzymały i odporny na uszkodzenia metal, który sprawi, że lampa ścienna będzie oświetlała Twoje wnętrza przez długi czas. Dzięki kloszom odsłaniającym źródło światła, kinkiet może być zasilany żarówkami dekoracyjnymi. Ich widoczne żarniki węglowe wyglądają niezwykle efektownie, co dodatkowo uwydatniają druciane klosze. Lampa może być również zasilana innymi typami żarówek E27 – ledowymi, energooszczędnymi lub zwykłymi.";
$product->add();
$product->save();
$product->addToCategories($product->id_category);
StockAvailable::setQuantity((int)$product->id, 0, $product->quantity, Context::getContext()->shop->id);
$shops = Shop::getShops(true, null, true);
$image = new Image();
$image->id_product = $product->id;
$image->position = Image::getHighestPosition($product->id) + 1;
$image->cover = true;
if (($image->validateFields(false, true)) === true &&
        ($image->validateFieldsLang(false, true)) === true && $image->add())
{
   $image->associateTo($shops);
   MyAdminImportController::copyImg($product->id, $image->id, $url, 'products', false);
}


$product = new Product();
$product->name = [$default_lang => "Klasyczny Kinkiet Chrom"];
$product->link_rewrite = [$default_lang => "klasyczny-kinkiet-chrom"];
$product->price = 50.00;
$product->quantity = 90;
$product->id_category = 16;
$product->id_category_default = 16;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/Kinkety/kinkiet-z-chromowanymi-elementami-z-serii-07-lampa-stylowa-elegancka.jpg";
$product->image_url = $url;
$product->description = "Kinkiet lampa ścienna z chromowanymi elementami
Lampa, która w wyjątkowy sposób rozświetli Twoje wnętrza, wprowadzając do nich elegancję i oryginalny design.
Do jakich wnętrz pasuje prezentowany kinkiet?
Lampa może pełnić funkcje oświetlenia kuchennego, łazienkowego czy biurowego. Możliwości jest nieskończenie wiele, dzięki dużej ilości kloszy, jakie można zamontować w naszej lampie ściennej. Dodatkowo dwa kolory konstrukcji (brąz lub satyna) ułatwią Ci dobór kinkietu najbardziej wpasowujący się w Twoją aranżację.
Czy oświetlenie jest funkcjonalne?
Dużym atutem prezentowanego kinkietu jest możliwość regulacji kąta światła pod dowolnym kierunkiem. Metalowa konstrukcja daje gwarancję wytrzymałości i odporności. Ponadto lampa może być zasilana wieloma źródłami światła, na przykład żarówkami LED.";
$product->add();
$product->save();
$product->addToCategories($product->id_category);
StockAvailable::setQuantity((int)$product->id, 0, $product->quantity, Context::getContext()->shop->id);
$shops = Shop::getShops(true, null, true);
$image = new Image();
$image->id_product = $product->id;
$image->position = Image::getHighestPosition($product->id) + 1;
$image->cover = true;
if (($image->validateFields(false, true)) === true &&
        ($image->validateFieldsLang(false, true)) === true && $image->add())
{
   $image->associateTo($shops);
   MyAdminImportController::copyImg($product->id, $image->id, $url, 'products', false);
}


$product = new Product();
$product->name = [$default_lang => "Oryginalna Lampa Kinkiet w Stylu Retro Loft Edison"];
$product->link_rewrite = [$default_lang => "oryginalna-lampa-kinkiet-w-stylu-retro-loft-edison"];
$product->price = 89.00;
$product->quantity = 90;
$product->id_category = 16;
$product->id_category_default = 16;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/Kinkety/lampa-kinkiet-w-stylu-retro-oryginalna-loft-edison.jpg";
$product->image_url = $url;
$product->description = "Kinkiet w stylu retro Edison Loft
Prezentowany kinkiet rewelacyjnie odda charakter wnętrz urządzonych w stylu retro bądź vintage. Efektowny klosz wypełniony dekoracyjną żarówką daje zniewalający efekt!
Do jakich wnętrz pasuje oryginalny kinkiet?
Lampa rewelacyjnie wkomponuję się w Twoją kuchnię, salon, jadalnię czy sypialnię. Kinkiet może stanowić również ozdobę nowoczesnych aranżacji. Klasyczne kolory konstrukcji – czerń i biel – doskonale łączą się z każdą inną barwą. Ponadto do kinkietu możesz skompletować lampę wiszącą stworzoną w identycznym stylu.
Jakie atuty posiada stylowa lampa ścienna?
Kinkiet został wykonany z solidnego metalu, dzięki czemu masz gwarancję wytrzymałości i niezawodności oświetlenia. Lampa może być zasilana wieloma rodzajami żarówek, na przykład dekoracyjnymi, których światło nadaje pomieszczeniu ciepłego, wyjątkowego nastroju. Dodatkowo kinkiet zasilany jest również żarówkami LED, energooszczędnymi bądź zwykłymi o gwincie E-27.";
$product->add();
$product->save();
$product->addToCategories($product->id_category);
StockAvailable::setQuantity((int)$product->id, 0, $product->quantity, Context::getContext()->shop->id);
$shops = Shop::getShops(true, null, true);
$image = new Image();
$image->id_product = $product->id;
$image->position = Image::getHighestPosition($product->id) + 1;
$image->cover = true;
if (($image->validateFields(false, true)) === true &&
        ($image->validateFieldsLang(false, true)) === true && $image->add())
{
   $image->associateTo($shops);
   MyAdminImportController::copyImg($product->id, $image->id, $url, 'products', false);
}


$product = new Product();
$product->name = [$default_lang => "Kinkiet Chrom Drut Nowoczesny Lampa"];
$product->link_rewrite = [$default_lang => "kinkiet-chrom-drut-nowoczesny-lampa"];
$product->price = 59.00;
$product->quantity = 90;
$product->id_category = 16;
$product->id_category_default = 16;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/Kinkety/kinkiet-chrom-drut-nowoczesny-lampa.jpg";
$product->image_url = $url;
$product->description = "Kinkiet chromowany loft druciany
Nowoczesny kinkiet pokryty powłoką chromową doda Twoim wnętrzom oryginalności. Wyjątkowy kształt konstrukcji oraz klosza staną się stylową ozdobą pomieszczenia.
Gdzie najlepiej zawiesić chromowany kinkiet loft?
Lampa pasuje do wszystkich pomieszczeń urządzonych w stylu loft, nowoczesnym czy minimalistycznym. Chrom świetnie komponuje się z każdym kolorem. Do kinkietu dobierz lampę sufitową, które będzie pełniła funkcje oświetlenia głównego w pomieszczeniu. Posiadamy żyrandole stworzone w identycznym stylu, co prezentowany kinkiet. Takie zestawienie lamp pozwoli Ci osiągnąć spójną, stylową aranżację wnętrz.
Jakie praktyczne cechy posiada lampa ścienna loft?
Kinkiet został wykonany z solidnego, wytrzymałego metalu, co zapewnia radość z użytkowania lampy przez długi czas. Lampa może być zasilana żarówkami dekoracyjnymi, które nadadzą wnętrzu ciepła i nastrojowego klimatu. Możesz wykorzystać również żarówki E27 LED, energooszczędne lub zwykłe.";
$product->add();
$product->save();
$product->addToCategories($product->id_category);
StockAvailable::setQuantity((int)$product->id, 0, $product->quantity, Context::getContext()->shop->id);
$shops = Shop::getShops(true, null, true);
$image = new Image();
$image->id_product = $product->id;
$image->position = Image::getHighestPosition($product->id) + 1;
$image->cover = true;
if (($image->validateFields(false, true)) === true &&
        ($image->validateFieldsLang(false, true)) === true && $image->add())
{
   $image->associateTo($shops);
   MyAdminImportController::copyImg($product->id, $image->id, $url, 'products', false);
}


$product = new Product();
$product->name = [$default_lang => "Asymetryczna Lampa Kinkiet z Metalu Nowoczesna"];
$product->link_rewrite = [$default_lang => "asymetryczna-lampa-kinkiet-z-metalu-nowoczesna"];
$product->price = 69.00;
$product->quantity = 90;
$product->id_category = 16;
$product->id_category_default = 16;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/Kinkety/asymetryczna-lampa-kinkiet-z-metalu.jpg";
$product->image_url = $url;
$product->description = "Asymetryczny nowoczesny kinkiet
Niezwykle oryginalna i stylowa lampa ścienna, która zachwyci swoim nietypowym designem. Asymetryczny kinkiet doda nowoczesności klasycznym wnętrzom, pełniąc rolę głównej ozdoby w pomieszczeniu. Również wnętrzom w stylu industrialnym lampa ścienna doda uroku i stylowości.
Do jakich wnętrz pasuje nowoczesny kinkiet?
Absolutnie do wszystkich! Oryginalna konstrukcja będzie wspaniałą ozdobą dla każdego typu pomieszczenia – kuchni, sypialni, jadalni czy też salonu. Kinkiet stworzony jest w wielu klasycznych kolorach, aby z łatwością dopasować go do stylu wnętrza. Ciemniejsze barwy uczynią wystrój pomieszczenia eleganckim, a kinkiet w jaśniejszych kolorach świetnie ożywi i rozświetli stylową aranżację.
Jakie zalety posiada kinkiet?
Lampa ścienna została wykonana z wyjątkowego wytrzymałego i odpornego na uszkodzenia metalu. Dzięki temu masz pewność, że kinkiet posłuży Ci przez wiele długich lat. Lampa może być zasilana jest mocnymi żarówkami halogenowymi lub ledowymi G9.";
$product->add();
$product->save();
$product->addToCategories($product->id_category);
StockAvailable::setQuantity((int)$product->id, 0, $product->quantity, Context::getContext()->shop->id);
$shops = Shop::getShops(true, null, true);
$image = new Image();
$image->id_product = $product->id;
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
$product->id_category = 16;
$product->id_category_default = 16;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/Kinkety/lampa-wiszaca-z-abazurem.jpg";
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
$product->name = [$default_lang => "Klasyczny Kinkiet Przegub Czarny Biały"];
$product->link_rewrite = [$default_lang => "klasyczny-kinkiet-przegub-czarny-bialy"];
$product->price = 52.00;
$product->quantity = 90;
$product->id_category = 16;
$product->id_category_default = 16;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/Kinkety/kinkiet-seria-012-lampa-wiszaca-sufitowa-nowoczesna-czarny-bialy.jpg";
$product->image_url = $url;
$product->description = "Kinkiet lampa sufitowa plafon
Minimalistyczny i elegancki styl lampy sufitowej wprowadzą mnóstwo świeżości i wyjątkowości do Twoich wnętrz. Funkcjonalność kinkietu czyni go odpowiednim do wielu rodzajów pomieszczeń.
Do jakich wnętrz pasuje nowoczesny plafon?
Lampa może zawisnąć w takich pomieszczeniach, jak salon, kuchnia, łazienka, biuro czy pokój sypialny. Dzięki klasycznym kolorom konstrukcji kinkiet świetnie prezentuje się w każdej aranżacji – od nowoczesnych po retro.
Czy prezentowana lampa jest funkcjonalna?
Oczywiście, że tak! Kinkiet może pełnić rolę zarówno oświetlenia ściennego jak i sufitowego. Ponadto klosz lampy można regulować pod dowolnym kątem i kierunkiem. Plafon wykonany jest z wytrzymałego metalu. Lampa posiada również wiele opcji zasilania, na przykład oświetlenie LED.";
$product->add();
$product->save();
$product->addToCategories($product->id_category);
StockAvailable::setQuantity((int)$product->id, 0, $product->quantity, Context::getContext()->shop->id);
$shops = Shop::getShops(true, null, true);
$image = new Image();
$image->id_product = $product->id;
$image->position = Image::getHighestPosition($product->id) + 1;
$image->cover = true;
if (($image->validateFields(false, true)) === true &&
        ($image->validateFieldsLang(false, true)) === true && $image->add())
{
   $image->associateTo($shops);
   MyAdminImportController::copyImg($product->id, $image->id, $url, 'products', false);
}


$product = new Product();
$product->name = [$default_lang => "Kinkiet Industrialny Miedź Lampa na Ścianę"];
$product->link_rewrite = [$default_lang => "kinkiet-industrialny-miedz-lampa-na-sciane"];
$product->price = 39.00;
$product->quantity = 90;
$product->id_category = 16;
$product->id_category_default = 16;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/Kinkety/kinkiet-industrialny-miedz-lampa-na-sciane.jpg";
$product->image_url = $url;
$product->description = "Lampa ścienna kinkiet w stylu loft dwa kolory
Kinkiet o minimalistycznym stylu, który uatrakcyjni Twoje wnętrza. Wyjątkowy kształt konstrukcji, brak klosza oraz miedziane elementy czynią lampę idealną do nowoczesnych pomieszczeń oraz aranżacji w stylo loft i retro.
Gdzie najlepiej zawiesić stylowy kinkiet loft?
Lampa ścienna może pełnić funkcje oświetlenia wspomagającego do kuchni, salonu, sypialni czy jadalni. Do kinkietu dobierz lampę sufitową, która będzie pełniła rolę oświetlenia głównego. Posiadamy żyrandole stworzone w tym samym stylu, co prezentowana lampa ścienna. Dzięki takiemu zestawieniu lamp osiągniesz spójność aranżacyjną w urządzanym pomieszczaniu. Oryginalności dodaje kinkietowi miedziana podkloszówką.
Czy kinkiet posiada praktyczne cechy?
Metalowa konstrukcja zapewnia wytrzymałość lampy na bardzo długi czas. Kinkiet posiada dwa kolory do wyboru, co umożliwia łatwe dopasowanie lampy do stylu pomieszczenia. Lampa ścienna może być zasilana żarówkami dekoracyjnymi, które dodają wnętrzom nastrojowego klimatu.";
$product->add();
$product->save();
$product->addToCategories($product->id_category);
StockAvailable::setQuantity((int)$product->id, 0, $product->quantity, Context::getContext()->shop->id);
$shops = Shop::getShops(true, null, true);
$image = new Image();
$image->id_product = $product->id;
$image->position = Image::getHighestPosition($product->id) + 1;
$image->cover = true;
if (($image->validateFields(false, true)) === true &&
        ($image->validateFieldsLang(false, true)) === true && $image->add())
{
   $image->associateTo($shops);
   MyAdminImportController::copyImg($product->id, $image->id, $url, 'products', false);
}


$product = new Product();
$product->name = [$default_lang => "Kinkiet z Chromowanymi Elementami Szklany Klosz"];
$product->link_rewrite = [$default_lang => "kinkiet-z-chromowanymi-elementami-szklany-klosz"];
$product->price = 45.00;
$product->quantity = 90;
$product->id_category = 16;
$product->id_category_default = 16;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/Kinkety/kinkiet-z-chromowanymi-elementami-z-serii-01-lampa-stylowa.jpg";
$product->image_url = $url;
$product->description = "Kinkiet ze szklanym kloszem
Klasyczny i elegancki kinkiet, który nada Twoim wnętrzom wyjątkowego klimatu. Efektowna konstrukcja w połączeniu ze szklanym kloszem tworzą olśniewającą lampę zaskakującą minimalistycznym stylem.
Do jakich wnętrz pasuje elegancki kinkiet?
Lampa ścienna może być ozdobą zarówno Twojego salonu, kuchni, jadalni jak i sypialni czy biura. Kinkiet stworzony jest w jasnej i ciemnej wersji, aby wspaniale komponował się z każdym stylem Twojej aranżacji. Ponadto klasyczne, szklane klosze dodają kinkietowi mnóstwo elegancji.
Jaki zalety posiada kinkiet?
Prezentowana lampa wykonana jest z wytrzymałych i odpornych na uszkodzenia materiałów. Dzięki wielu wzorom kloszy do wyboru jak i kolorom konstrukcji, możesz stworzyć własne, niepowtarzalne oświetlenie. Kinkiet zasilany jest wieloma rodzajami żarówek, w tym LED E-27.";
$product->add();
$product->save();
$product->addToCategories($product->id_category);
StockAvailable::setQuantity((int)$product->id, 0, $product->quantity, Context::getContext()->shop->id);
$shops = Shop::getShops(true, null, true);
$image = new Image();
$image->id_product = $product->id;
$image->position = Image::getHighestPosition($product->id) + 1;
$image->cover = true;
if (($image->validateFields(false, true)) === true &&
        ($image->validateFieldsLang(false, true)) === true && $image->add())
{
   $image->associateTo($shops);
   MyAdminImportController::copyImg($product->id, $image->id, $url, 'products', false);
}


$product = new Product();
$product->name = [$default_lang => "Kinkiet w Stylu Loft Lampa Ścienna"];
$product->link_rewrite = [$default_lang => "kinkiet-w-stylu-loft-lampa-scienna"];
$product->price = 39.00;
$product->quantity = 90;
$product->id_category = 16;
$product->id_category_default = 16;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/Kinkety/kinkiet-w-stylu-loft-lampa-scienna.jpg";
$product->image_url = $url;
$product->description = "Kinkiet dekoracyjny loft trzy kolory
Dodaj swoim wnętrzom oryginalności! Minimalistyczny, a jednocześnie designerski wygląd kinkietu świetnie prezentuje się w wielu rodzajach pomieszczeń. Wybierz kolor lampy najbardziej pasujący do stylu mieszkania i ciesz się niepowtarzalną aranżacją wnętrz.
Gdzie najlepiej prezentuje się nowoczesny kinkiet?
Lampa ścienna znakomicie komponuje się z pomieszczeniami w stylu loft. Jednak w minimalistycznych, nowoczesnych wnętrzach również wygląda niezwykle efektownie. Główną ozdobą kinkietu jest oryginalny kształt konstrukcji oraz brak klosza. Te drobne elementy nadały lampie niepowtarzalnego designu. Do kinkietu możesz dobrać lampy 3-płomienne lub 5-płomienne stworzone w tym samym stylu. Dzięki takiemu zestawieniu lamp uzyskasz spójność aranżacyjną.
Jakie praktyczne cechy posiada kinkiet loft?
Na uwagę zasługują materiały wykonania, które odznaczają się wytrzymałością i odpornością na uszkodzenia. Lampa stworzona jest w trzech kolorach – czarnym, białym oraz grafitowym z elementami brokatu, dzięki czemu z łatwością dopasujesz kinkiet do stylu pomieszczenia. Lampa ścienna może być zasilana żarówkami dekoracyjnymi oraz zwykłymi, energooszczędnymi lub ledowymi E27.";
$product->add();
$product->save();
$product->addToCategories($product->id_category);
StockAvailable::setQuantity((int)$product->id, 0, $product->quantity, Context::getContext()->shop->id);
$shops = Shop::getShops(true, null, true);
$image = new Image();
$image->id_product = $product->id;
$image->position = Image::getHighestPosition($product->id) + 1;
$image->cover = true;
if (($image->validateFields(false, true)) === true &&
        ($image->validateFieldsLang(false, true)) === true && $image->add())
{
   $image->associateTo($shops);
   MyAdminImportController::copyImg($product->id, $image->id, $url, 'products', false);
}


$product = new Product();
$product->name = [$default_lang => "Kinkiet Chrom ze Szklanym Kloszem"];
$product->link_rewrite = [$default_lang => "kinkiet-chrom-ze-szklanym-kloszem"];
$product->price = 55.00;
$product->quantity = 90;
$product->id_category = 16;
$product->id_category_default = 16;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/Kinkety/kinkiet-z-serii-05-chrom-1-plomienna-elegancka-stylowa.jpg";
$product->image_url = $url;
$product->description = "Kinkiet lampa ścienna metal
Elegancki wygląd kinkietu wprowadzi mnóstwo oryginalności i niepowtarzalnego stylu do Twoich pomieszczeń.
Gdzie najlepiej prezentuje się elegancka lampa?
Salon,kuchnia, łazienka, pokój czy biuro – kinkiet będzie wyglądał wspaniale w każdym pomieszczeniu! Brązowa konstrukcja lampy w połączeniu ze szklanym, pasiastym kloszem daje oświetlenie, które znakomicie dopasowuje się do każdego stylu pomieszczenia – od nowoczesne po klasyczne wnętrza.
Z czego została wykonana prezentowana lampa?
Stelaż kinkietu został stworzony z wytrzymałego metalu, a klosz jest w całości szklany. Dzięki użyciu najwyższej jakości tworzyw masz pewność, że lampa ścienna jest trwała i odporna na uszkodzenia. Kinkiet może być zasilany wieloma rodzajami światła, w tym oświetleniem LED.";
$product->add();
$product->save();
$product->addToCategories($product->id_category);
StockAvailable::setQuantity((int)$product->id, 0, $product->quantity, Context::getContext()->shop->id);
$shops = Shop::getShops(true, null, true);
$image = new Image();
$image->id_product = $product->id;
$image->position = Image::getHighestPosition($product->id) + 1;
$image->cover = true;
if (($image->validateFields(false, true)) === true &&
        ($image->validateFieldsLang(false, true)) === true && $image->add())
{
   $image->associateTo($shops);
   MyAdminImportController::copyImg($product->id, $image->id, $url, 'products', false);
}


$product = new Product();
$product->name = [$default_lang => "Kinkiet Chrom Regulowany Szklany Klosz"];
$product->link_rewrite = [$default_lang => "kinkiet-chrom-regulowany-szklany-klosz"];
$product->price = 52.00;
$product->quantity = 90;
$product->id_category = 16;
$product->id_category_default = 16;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/Kinkety/kinkiet-z-chromowanymi-elementami-z-serii-01-lampa-stylowa.jpg";
$product->image_url = $url;
$product->description = "Elegancki kinkiet z chromowanymi elementami klosze do wyboru
Funkcjonalna i nowoczesna lampa, która doda Twoim pomieszczeniom stylowości i oryginalności. Stwórz niepowtarzalne oświetlenie z kloszem, który sam wybierzesz!
Do jakich wnętrz pasuje prezentowany kinkiet?
Lampa z powodzeniem rozświetli Twoją kuchnię, jadalnię, sypialnię czy biuro. Dzięki możliwości wyboru klosza oraz koloru podsufitki, kinkiet będzie wspaniale prezentował w pomieszczeniach stworzonych w każdym stylu – od nowoczesnych po klasyczne.
Czy oświetlenie sufitowe jest funkcjonalne?
Oczywiście, że tak! Kinkiet może pełnić rolę oświetlenia sufitowego jak i ściennego. Możliwość regulacji kąta światła oraz solidne materiały wykorzystane do produkcji lampy czynią ją praktyczną i niepowtarzalną. Kinkiet posiada także wiele opcji zasilania – żarówki LED, energooszczędne i inne.";
$product->add();
$product->save();
$product->addToCategories($product->id_category);
StockAvailable::setQuantity((int)$product->id, 0, $product->quantity, Context::getContext()->shop->id);
$shops = Shop::getShops(true, null, true);
$image = new Image();
$image->id_product = $product->id;
$image->position = Image::getHighestPosition($product->id) + 1;
$image->cover = true;
if (($image->validateFields(false, true)) === true &&
        ($image->validateFieldsLang(false, true)) === true && $image->add())
{
   $image->associateTo($shops);
   MyAdminImportController::copyImg($product->id, $image->id, $url, 'products', false);
}


$product = new Product();
$product->name = [$default_lang => "Lampa Kinkiet Miedź Edison Loft"];
$product->link_rewrite = [$default_lang => "lampa-kinkiet-miedz-edison-loft"];
$product->price = 49.00;
$product->quantity = 90;
$product->id_category = 16;
$product->id_category_default = 16;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/Kinkety/lampa-kinkiet-miedz-edison-loft.jpg";
$product->image_url = $url;
$product->description = "Kinkiet Edison Loft miedź
Oryginalny design lampy ściennej sprawi, że Twoje wnętrza będą zachwycać niepowtarzalnym klimatem i nastrojem.
Gdzie najlepiej zawiesić prezentowany kinkiet?
Lampa może pełnić rolę zarówno oświetlenia kuchennego jak i pokojowego czy salonowego. Miedziany kolor kinkietu znakomicie prezentuje w nowoczesnych jak i aranżacjach retro. Prosta, lecz efektowna konstrukcja lampy przyciąga uwagę, pełniąc tym samym rolę wyjątkowej ozdoby.
Jakie atuty posiada nowoczesny kinkiet?
Lampa nie posiada klosza, co nie tylko jest stylowym rozwiązaniem, ale również pozwala na dokładne doświetlenie całego pomieszczenia. Kinkiet wykonany jest z solidnych i wytrzymałych tworzyw, dzięki czemu będziesz cieszyć się lampą ścienną przez wiele lat. Lampa może być zasilana wieloma rodzajami światła, w tym efektownymi żarówkami dekoracyjnymi Edison.";
$product->add();
$product->save();
$product->addToCategories($product->id_category);
StockAvailable::setQuantity((int)$product->id, 0, $product->quantity, Context::getContext()->shop->id);
$shops = Shop::getShops(true, null, true);
$image = new Image();
$image->id_product = $product->id;
$image->position = Image::getHighestPosition($product->id) + 1;
$image->cover = true;
if (($image->validateFields(false, true)) === true &&
        ($image->validateFieldsLang(false, true)) === true && $image->add())
{
   $image->associateTo($shops);
   MyAdminImportController::copyImg($product->id, $image->id, $url, 'products', false);
}


$product = new Product();
$product->name = [$default_lang => "Lampa Kinkiet Ball Chrom Plafon"];
$product->link_rewrite = [$default_lang => "lampa-kinkiet-ball-chrom-plafon"];
$product->price = 50.00;
$product->quantity = 90;
$product->id_category = 16;
$product->id_category_default = 16;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/Kinkety/lampa-kinkiet-ball-chrom-plafon.jpg";
$product->image_url = $url;
$product->description = "Kinkiet plafon 1 źródło zasilania spot
Klasyczny i elegancki design lampy sufitowej nada Twoim wnętrzom niepowtarzalnego klimatu. Efektowna, chromowana kula wspaniale komponuje się z każdym stylem pomieszczenia.
Gdzie najlepiej zawiesić prezentowaną lampę?
Plafon może stać się ozdobą do biura, salonu, kuchni, sypialni czy pokoju. Czarny kolor konstrukcji doda wnętrzom elegancji, a biała lampa znakomicie rozświetli i ożywi pomieszczenie. Jeśli zdecydujesz się na zamontowanie lampy na ścianie, mamy dla Ciebie również lampy sufitowe z tej samej serii, stworzone w tym samym stylu.
Czy lampa posiada praktyczne funkcje?
Oczywiście, że tak! Lampa posiada możliwość montażu na ścianie lub na suficie, dzięki czemu sam zadecydujesz czy oświetlenie stanie się stylowym kinkietem czy eleganckim plafonem. To dzięki możliwości regulacji kąta padania światła w dowolnym kierunku, możemy umieścić lampę w dowolnym miejscu. Lampa może być zasilana żarówkami ledowymi GU10.";
$product->add();
$product->save();
$product->addToCategories($product->id_category);
StockAvailable::setQuantity((int)$product->id, 0, $product->quantity, Context::getContext()->shop->id);
$shops = Shop::getShops(true, null, true);
$image = new Image();
$image->id_product = $product->id;
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
$product->id_category = 16;
$product->id_category_default = 16;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/Kinkety/stylowy-kinkiet-z-abazurem-rozne-kolory.jpg";
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
$product->name = [$default_lang => "Stylowy Kinkiet Lampa Ścienna Metal Trzy Kolory"];
$product->link_rewrite = [$default_lang => "stylowy-kinkiet-lampa-scienna-metal-trzy-kolory"];
$product->price = 49.00;
$product->quantity = 90;
$product->id_category = 16;
$product->id_category_default = 16;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/Kinkety/stylowy-kinkiet-lampa-scienna-metal-trzy-kolory.jpg";
$product->image_url = $url;
$product->description = "Lampa kinkiet nowoczesny chromowany metalowy
Przekonaj się, jak stylową ozdobą pomieszczenia może zostać lampa! Kinkiet znakomicie komponuje się z wnętrzami w stylu nowoczesnym, retro, klasycznym czy industrialnym.
Gdzie najlepiej zawiesić prezentowaną lampę ścienną?
Kinkiet świetnie odnajdzie się w roli lampy do salonu, jadalni, sypialni czy kuchni. Kinkiet może pełnić funkcję lampy pobocznej. Natomiast jako oświetlenie główne dobierz lampę z tej samej rodziny – Lampa Sufitowa na Listwie Regulowana Nowoczesna. Połączenie sprawi, że Twoje wnętrza będą spójne i harmonijne.
Jakie atuty posiada designerski kinkiet?
Lampa na ścianę dostępna jest w trzech klasycznych kolorach – czarnym, białym i grafitowym z brokatowymi elementami. Wśród z nich na pewno znajdziesz kolor, który idealnie dopasuje do designu Twojego mieszkania. Kinkiet stworzony jest z trwałego i solidnego metalu. Do lampy pasują żarówki o gwincie E27.";
$product->add();
$product->save();
$product->addToCategories($product->id_category);
StockAvailable::setQuantity((int)$product->id, 0, $product->quantity, Context::getContext()->shop->id);
$shops = Shop::getShops(true, null, true);
$image = new Image();
$image->id_product = $product->id;
$image->position = Image::getHighestPosition($product->id) + 1;
$image->cover = true;
if (($image->validateFields(false, true)) === true &&
        ($image->validateFieldsLang(false, true)) === true && $image->add())
{
   $image->associateTo($shops);
   MyAdminImportController::copyImg($product->id, $image->id, $url, 'products', false);
}


$product = new Product();
$product->name = [$default_lang => "Nowoczesny Kinkiet Czarny Chrom Lampa na Ścianę"];
$product->link_rewrite = [$default_lang => "nowoczesny-kinkiet-czarny-chrom-lampa-na-sciane"];
$product->price = 49.00;
$product->quantity = 90;
$product->id_category = 16;
$product->id_category_default = 16;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/Kinkety/nowoczesny-kinkiet-czarny-chrom-lampa-na-sciane.jpg";
$product->image_url = $url;
$product->description = "Lampa ścienna kinkiet chrom z regulacją
Designerskie oświetlenie, które uczyni Twoje wnętrza niepowtarzalnymi. Oryginalny wygląd klosza, chromowana podsufitka i czarny kolor dodadzą pomieszczeniu elegancji i nowoczesności.
Do jakich wnętrz najbardziej pasuje wyjątkowa lampa ścienna?
Oświetlenie może zostać dekoracją kuchni, jadalni salonu lub sypialni. Design kinkietu pasuje do każdego rodzaju pomieszczenia, niezależnie od jego przeznaczenia. Lampa idealnie sprawdzi się w roli oświetlenia wspomagającego.
Jakie praktyczne funkcje posiada lampa na ścianę?
Kinkiet lampy jest ruchomy, dzięki czemu możesz skierować światło w dowolnym kierunku. Kinkiet został wykonany z wysokiej jakości metalu, który jest odporny na uszkodzenia. Lampę zasil żarówkami E27.";
$product->add();
$product->save();
$product->addToCategories($product->id_category);
StockAvailable::setQuantity((int)$product->id, 0, $product->quantity, Context::getContext()->shop->id);
$shops = Shop::getShops(true, null, true);
$image = new Image();
$image->id_product = $product->id;
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
$product->id_category = 16;
$product->id_category_default = 16;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/Kinkety/lampa-plafon-kinkiet-ruchomy-stylowy.jpg";
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
$product->name = [$default_lang => "Nowoczesny Kinkiet z Abażurem Lampa na Ścianę"];
$product->link_rewrite = [$default_lang => "nowoczesny-kinkiet-z-abazurem-lampa-na-sciane"];
$product->price = 59.00;
$product->quantity = 90;
$product->id_category = 16;
$product->id_category_default = 16;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/Kinkety/nowoczesny-kinkiet-z-abazurem-lampa-na-sciane.jpg";
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
$product->name = [$default_lang => "Kinkiet Nowoczesny z Abażurem Wiele Kolorów Lampa"];
$product->link_rewrite = [$default_lang => "kinkiet-nowoczesny-z-abazurem-wiele-kolorow-lampa"];
$product->price = 59.00;
$product->quantity = 90;
$product->id_category = 16;
$product->id_category_default = 16;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/Kinkety/kinkiet-nowoczesny-z-abazurem-wiele-kolorow-lampa.jpg";
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
$product->name = [$default_lang => "Nowoczesny Kinkiet Lampa z Abażurem Chrom"];
$product->link_rewrite = [$default_lang => "nowoczesny-kinkiet-lampa-z-abazurem-chrom"];
$product->price = 79.00;
$product->quantity = 90;
$product->id_category = 16;
$product->id_category_default = 16;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/Kinkety/nowoczesny-kinkiet-lampa-z-abazurem-chrom.jpg";
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
$product->name = [$default_lang => "Stylowy Kinkiet z Abażurem Wiele Kolorów"];
$product->link_rewrite = [$default_lang => "stylowy-kinkiet-z-abazurem-wiele-kolorow"];
$product->price = 59.00;
$product->quantity = 90;
$product->id_category = 16;
$product->id_category_default = 16;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/Kinkety/stylowy-kinkiet-z-abazurem-wiele-kolorow.jpg";
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
$product->name = [$default_lang => "Kinkiet z Abażurem Złoty Środek Metal Lampa"];
$product->link_rewrite = [$default_lang => "kinkiet-z-abazurem-zloty-srodek-metal-lampa"];
$product->price = 75.00;
$product->quantity = 90;
$product->id_category = 16;
$product->id_category_default = 16;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/Kinkety/kinkiet-z-abazurem-zloty-srodek-metal-lampa.jpg";
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
$product->name = [$default_lang => "Elegancki Kinkiet Chrom ze Szklanym Kloszem"];
$product->link_rewrite = [$default_lang => "elegancki-kinkiet-chrom-ze-szklanym-kloszem"];
$product->price = 55.00;
$product->quantity = 90;
$product->id_category = 16;
$product->id_category_default = 16;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/Kinkety/elegancki-kinkiet-chrom-ze-szklanym-kloszem.jpg";
$product->image_url = $url;
$product->description = "Kinkiet lampa ścienna chrom ze szklanym kloszem we wzory
Elegancki kinkiet doda Twoim wnętrzom wyjątkowego charakteru. Chromowana konstrukcja i szklany klosz we wzory świetnie komponują się ze wszystkimi stylami wnętrzarskimi.
W jakich pomieszczeniach stylowy kinkiet chrom ze szklanym kloszem będzie wyglądał najlepiej?
Lampa ścienna będzie świetnym oświetleniem wspomagającym w eleganckim salonie, sypialni, jadalni, łazience, przedpokoju czy biurze. Jako oświetlenie główne wybierz lampy wiszące lub sufitowe z tej samej serii, aby zachować spójność w aranżacji wnętrz. Kinkiet doda elegancji nowoczesnym i minimalistycznym pomieszczeniom. Natomiast w klasycznych aranżacjach lampa podkreśli wytworny wygląd.
Jakie zalety posiada kinkiet ze szklanym kloszem we wzory?
Kinkiet chrom wykonany jest z trwałych materiałów, które zapewniają radość z użytkowania oświetlenia na wiele lat. Klosz w paski pasuje do każdego stylu wnętrzarskiego. Lampa ścienna zasilana jest żarówkami o gwincie E27, dzięki czemu z łatwością dopasujesz źródła światła do kinkietu.";
$product->add();
$product->save();
$product->addToCategories($product->id_category);
StockAvailable::setQuantity((int)$product->id, 0, $product->quantity, Context::getContext()->shop->id);
$shops = Shop::getShops(true, null, true);
$image = new Image();
$image->id_product = $product->id;
$image->position = Image::getHighestPosition($product->id) + 1;
$image->cover = true;
if (($image->validateFields(false, true)) === true &&
        ($image->validateFieldsLang(false, true)) === true && $image->add())
{
   $image->associateTo($shops);
   MyAdminImportController::copyImg($product->id, $image->id, $url, 'products', false);
}


$product = new Product();
$product->name = [$default_lang => "Kinkiet Lampa Ścienna Loft Złote Elementy"];
$product->link_rewrite = [$default_lang => "kinkiet-lampa-scienna-loft-zlote-elementy"];
$product->price = 49.00;
$product->quantity = 90;
$product->id_category = 16;
$product->id_category_default = 16;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/Kinkety/kinkiet-lampa-scienna-loft-zlote-elementy.jpg";
$product->image_url = $url;
$product->description = "Kinkiet lampa ścienna loft ze złotą oprawą
Surowy, lecz przyciągający spojrzenia design kinkietu jest wspaniałą dekoracją nie tylko wnętrz w stylu loft. Lampa ścienna komponuje się również ze stylem nowoczesnym, klasycznym, minimalistycznym i retro.
W jakich pomieszczeniach lampa ścienna kinkiet loft ze złotą oprawą wygląda najlepiej?
Kinkiet stworzony jest do roli lampy wspomagającej. Stylowo oświetli komodę, sprawdzi się w funkcji światła do relaksu przy łóżku czy kanapie. Kinkiet pasuje zarówno do salonu, jadalni, sypialni, kuchni, łazienki jak i przedpokoju. Złoty element przy żarówce dodaje lampie ściennej elegancji i designerskiego wyglądu.
Jakie zalety posiada nowoczesny kinkiet ze złotą oprawą w stylu loft?
Solidne materiały wykonania – kinkiet loft stworzony jest z wytrzymałego metalu. Dzięki niemu lampa dekoruje wnętrza przez bardzo długi czas.
Brak klosza – dzięki temu lampa wygląda oryginalnie i designersko. Zasil kinkiet nowoczesny żarówkami dekoracyjnymi, a uzyskasz piękną i przytulną aranżację wnętrza.
Żarówki E27 – do lampy ściennej pasują popularne źródła światła z gwintem E27. Możesz wybrać między żarówkami tradycyjnymi, dekoracyjnymi, a ledowymi.
Dodaj swoim wnętrzom oryginalności i wyjątkowego nastroju ze stylowym kinkietem w stylu loft!";
$product->add();
$product->save();
$product->addToCategories($product->id_category);
StockAvailable::setQuantity((int)$product->id, 0, $product->quantity, Context::getContext()->shop->id);
$shops = Shop::getShops(true, null, true);
$image = new Image();
$image->id_product = $product->id;
$image->position = Image::getHighestPosition($product->id) + 1;
$image->cover = true;
if (($image->validateFields(false, true)) === true &&
        ($image->validateFieldsLang(false, true)) === true && $image->add())
{
   $image->associateTo($shops);
   MyAdminImportController::copyImg($product->id, $image->id, $url, 'products', false);
}


$product = new Product();
$product->name = [$default_lang => "Nowoczesny Kinkiet w Loftowym Stylu Typu Druciak"];
$product->link_rewrite = [$default_lang => "nowoczesny-kinkiet-w-loftowym-stylu-typu-druciak"];
$product->price = 69.00;
$product->quantity = 90;
$product->id_category = 16;
$product->id_category_default = 16;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/Kinkety/nowoczesny-kinkiet-w-loftowym-stylu-typu-druciak.jpg";
$product->image_url = $url;
$product->description = "Nowoczesna lampa typu kinkiet w stylu loft
Nowoczesna lampa druciana to doskonały wybór jeżeli jesteś fanem stylu loftowego. To elegancki i nienachalny dodatek, który dodaje surowego, acz przytulnego charakteru Twojemu wnętrzu. Solidne wykonanie zapewnia trwałość materiału przez długi czas i wciąż genialne oświetlenie pomieszczenia. Z kinkietem loftowym każde wnętrze przypomina pofabryczne budynki, w których rozgrywa się życie. Ten konkretnie model nowoczesnej lampy to dekoracja niezwykle subtelna, która onieśmiela z pozoru “właściwsze” lampy w stylu glamour. Lampa loftowa typu kinkiet świetnie dba o oświetlenie boczne w każdym budynku, przy tym nie wychylając się - zyskuje na wartości. Minimalizm i prostota to szczególne filary, które odpowiadają za doskonałość każdej aranżacji!
Jak zaaranżować pomieszczenie z nowoczesną lampą w stylu industrialnym?
Lampa typu druciak znakomicie się nadaje jako oświetlenie boczne w postaci loftowych kinkietów, usytuowanych na ścianie salonu, czy przedpokoju. Klosz lampy wykonano w kolorze złotym, zatem pięknie komponuje się zarówno z jasną jak i ciemniejszą powierzchnią ściany. Kinkiet druciany w stylu loft znakomicie zamyka aranżacje pomieszczeń, które potrzebują dodatkowego doświetlenia w postaci eleganckiego oświetlenia bocznego.
Jakimi cechami charakterystycznymi odznacza się lampa typu druciak?
Lampa posiada konstrukcję w kolorze białym lub czarnym (do wyboru)
Klosz wykonano w kolorze złotym
Produkt ten ma jedno źródło światła, które harmonijnie współgra z oświetleniem sufitowym i stanowi dodatkowe doświetlenie pomieszczeń
Lampa w stylu loftowym jest kompatybilna zarówno z żarówką zwykłą, jak i, LED, czy energooszczędną z gwintem E27
Lampa typu druciak jest łatwa do utrzymania w czystości i prezentuje się kunsztownie nawet po wielu latach użytkowania
Wykorzystaj tę prostą industrialną lampę i dodaj swojemu mieszkaniu wyjątkowego klimatu. Loftowa lampa typu druciak bez trudu oświetla salon, czy sypialnię.";
$product->add();
$product->save();
$product->addToCategories($product->id_category);
StockAvailable::setQuantity((int)$product->id, 0, $product->quantity, Context::getContext()->shop->id);
$shops = Shop::getShops(true, null, true);
$image = new Image();
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