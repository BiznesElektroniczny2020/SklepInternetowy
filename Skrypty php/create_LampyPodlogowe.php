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
$product->name = [$default_lang => "Lampa Stojąca z Abażurem Trójnóg Podłogowa"];
$product->link_rewrite = [$default_lang => "lampa-stojaca-z-abazurem-trojnog-podlogowa"];
$product->price = 199.00;
$product->quantity = 90;
$product->id_category = 14;
$product->id_category_default = 14;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyPodlogowe/lampa-stojaca-z-abazurem-trojnog-podlogowa.jpg";
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
$product->id_category = 14;
$product->id_category_default = 14;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyPodlogowe/lampa-stojaca-z-abazurem-drewniana-led-wiele-kolorow.jpg";
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
$product->name = [$default_lang => "Lampka Nocna Stojąca z Abażurem"];
$product->link_rewrite = [$default_lang => "lampka-nocna-stojaca-z-abazurem"];
$product->price = 89.10;
$product->quantity = 90;
$product->id_category = 14;
$product->id_category_default = 14;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyPodlogowe/lampka-nocna-stojaca-z-abazurem.jpg";
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
$product->name = [$default_lang => "Lampa Stojąca z Abażurem Podłogowa"];
$product->link_rewrite = [$default_lang => "lampa-stojaca-z-abazurem-podlogowa"];
$product->price = 139.00;
$product->quantity = 90;
$product->id_category = 14;
$product->id_category_default = 14;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyPodlogowe/lampa-stojaca-z-abazurem-podlogowa.jpg";
$product->image_url = $url;
$product->description = "Lampa stojąca z abażurem
Klasyczny design, mnóstwo kolorów do wyboru i funkcjonalność- to tylko kilka z zalet prezentowanej lampy podłogowej! Skomponuj własne, wyjątkowe oświetlenie najbardziej oddające charakter Twojej aranżacji.
Gdzie najlepiej postawić stylową lampę podłogową?
Oświetlenie to będzie znakomicie prezentować się w sypialni, salonie, pokoju gościnnym czy dziennym. Lampa posiada zarówno kolor konstrukcji jak i abażura do wyboru, dlatego bez problemu stworzysz oświetlenie idealnie współgrające z wystrojem Twoich wnętrz.
Jakie zalety posiada lampa stojąca?
Lampa posiada wygodny i funkcjonalny włącznik/wyłącznik nożny, który niezwykle ułatwia użytkowanie oświetlenia. Konstrukcja lampy podłogowej skonstruowana jest z metalu, a abażury są materiałowe. Lampa może być zasilana wieloma rodzajami żarówek E-27 – ledowymi, energooszczędnymi czy zwykłymi.";
$product->add();
$product->save();
$product->addToCategories($product->id_category);
StockAvailable::setQuantity((int)$product->id, 0, $product->quantity, Context::getContext()->shop->id);
$shops = Shop::getShops(true, null, true);
$image = new Image();
$image->id_product = $product->id;
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
$product->id_category = 14;
$product->id_category_default = 14;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyPodlogowe/lampa-stojaca-drewno-rozne-kolory-abazur.jpg";
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
$product->name = [$default_lang => "Nowoczesna Lampka Nocna Biurkowa"];
$product->link_rewrite = [$default_lang => "nowoczesna-lampka-nocna-biurkowa"];
$product->price = 75.00;
$product->quantity = 90;
$product->id_category = 14;
$product->id_category_default = 14;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyPodlogowe/nowoczesna-lampka-nocna-biurkowa.jpg";
$product->image_url = $url;
$product->description = "Lampa biurkowa nocna z abażurem
Klasyczna lampka nocna, która nada Twoim wnętrzom mnóstwo wyjątkowego klimatu. Wybierz kolor abażura i konstrukcji najbardziej pasujące do stylu pomieszczenia, i ciesz się niezwykłą ozdobą w Twojej aranżacji!
Do jakich wnętrz pasuje stylowa lampka?
Prezentowane oświetlenie wspaniale prezentuje się w sypialni, pokoju dziecięcym czy gościnnym. Lampa zamieszczona obok łóżka nie tylko nada wnętrzu magicznego klimatu, ale również będzie wspaniałym, relaksacyjnym oświetleniem. Lampka posiada możliwość wybrania koloru abażura i konstrukcji, co pozwala na stworzenie niepowtarzalnego oświetlenia idealnie dopasowującego się do Twojego stylu.
Czy lampa biurkowa jest funkcjonalna?
Oświetlenie zostało wykonane z najwyższej jakości tworzyw, co gwarantuje użyteczność lampy przez wiele lat. Lampka nocna może być zasilana wieloma różnymi źródłami światła, na przykład żarówkami LED, E-27 czy energooszczędnymi.";
$product->add();
$product->save();
$product->addToCategories($product->id_category);
StockAvailable::setQuantity((int)$product->id, 0, $product->quantity, Context::getContext()->shop->id);
$shops = Shop::getShops(true, null, true);
$image = new Image();
$image->id_product = $product->id;
$image->position = Image::getHighestPosition($product->id) + 1;
$image->cover = true;
if (($image->validateFields(false, true)) === true &&
        ($image->validateFieldsLang(false, true)) === true && $image->add())
{
   $image->associateTo($shops);
   MyAdminImportController::copyImg($product->id, $image->id, $url, 'products', false);
}


$product = new Product();
$product->name = [$default_lang => "Lampa Stojąca Abażur Różne Wzory"];
$product->link_rewrite = [$default_lang => "lampa-stojaca-abazur-rozne-wzory"];
$product->price = 129.00;
$product->quantity = 90;
$product->id_category = 14;
$product->id_category_default = 14;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyPodlogowe/lampa-stojaca-z-abazurem.jpg";
$product->image_url = $url;
$product->description = "Lampa podłogowa z abażurem
Klasyczna lampa stojąca z mnóstwem abażurów do wyboru, które nadadzą Twoim wnętrzom wyjątkowości i ponadczasowego designu.
Do jakich pomieszczeń pasuje nowoczesna lampa stojąca?
Oświetlenie sufitowe może być piękną ozdobą Twojej kuchni, sypialni, salonu czy pokoju dziecięcego. Do lampy możesz dopasować różne rodzaje abażurów, dzięki czemu oświetlenie będzie idealnie współgrać z każdym stylem Twojego pomieszczenia.
Jakie zalety posiada lampa stojąca?
Nasze oświetlenie posiada trzy kolory konstrukcji do wyboru, przez co jeszcze łatwiej będzie Ci skomponować idealną lampę. Ponadto oświetlenie zostało wykonane z wysokiej jakości tworzyw, co zapewni Ci radość użytkowania na długi czas. Lampa podłogowa może być zasilana wszystkimi rodzajami ledowych żarówek.";
$product->add();
$product->save();
$product->addToCategories($product->id_category);
StockAvailable::setQuantity((int)$product->id, 0, $product->quantity, Context::getContext()->shop->id);
$shops = Shop::getShops(true, null, true);
$image = new Image();
$image->id_product = $product->id;
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
$product->id_category = 14;
$product->id_category_default = 14;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyPodlogowe/lampa-nocna-z-abazurem-nowoczesna-stojaca.jpg";
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
$product->id_category = 14;
$product->id_category_default = 14;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyPodlogowe/lampa-stojaca-podlogowa-trojnog-z-abazurem-chrom.jpg";
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
$product->name = [$default_lang => "Lampa Podłogowa z Abażurem Różne Wzory"];
$product->link_rewrite = [$default_lang => "lampa-podlogowa-z-abazurem-rozne-wzory"];
$product->price = 129.00;
$product->quantity = 90;
$product->id_category = 14;
$product->id_category_default = 14;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyPodlogowe/lampa-stojaca-z-abazurem.jpg";
$product->image_url = $url;
$product->description = "Lampa stojąca z abażurem
Piękna lampa stojąca z wieloma wzorami abażurów do wyboru pozwoli Ci idealnie skomponować oświetlenie ze stylem pokoju, które urządzasz.
Gdzie najlepiej prezentuje się nowoczesna lampa podłogowa?
Abażur we wzory z miastami bądź kwiatami świetnie sprawdzi się w sypialni, gdzie nada przytulnego i magicznego klimatu. Lampa stojąca może pełnić rolę oświetlenia wspomagającego w pokoju dziecięcym. Abażur z samochodem spodoba się każdemu małemu chłopcy, a pomysłowy abażur z mapą świata pomoże poszerzyć dziecku horyzonty.
Jakie zalety posiada stylowa lampa stojąca?
Dzięki możliwości wyboru koloru konstrukcji oraz wzoru abażura, możesz stworzyć własną, indywidualną lampę, która wspaniale odda charakter Twoich wnętrz. Ponadto lampa posiada włącznik – wyłącznik nożny, dzięki czemu obsługa oświetlenia jest prosta i przyjemna. Dodatkowym atutem lampy podłogowej jest to, że można ją przenosić bez konieczności demontażu, jak w przypadku lamp wiszących. Lampa zasilana jest żarówkami LED, zwykłymi lub energooszczędnymi o gwincie E-27.";
$product->add();
$product->save();
$product->addToCategories($product->id_category);
StockAvailable::setQuantity((int)$product->id, 0, $product->quantity, Context::getContext()->shop->id);
$shops = Shop::getShops(true, null, true);
$image = new Image();
$image->id_product = $product->id;
$image->position = Image::getHighestPosition($product->id) + 1;
$image->cover = true;
if (($image->validateFields(false, true)) === true &&
        ($image->validateFieldsLang(false, true)) === true && $image->add())
{
   $image->associateTo($shops);
   MyAdminImportController::copyImg($product->id, $image->id, $url, 'products', false);
}


$product = new Product();
$product->name = [$default_lang => "Lampa Stojąca Trójnóg z Abażurem"];
$product->link_rewrite = [$default_lang => "lampa-stojaca-trojnog-z-abazurem"];
$product->price = 269.00;
$product->quantity = 90;
$product->id_category = 14;
$product->id_category_default = 14;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyPodlogowe/lampa-stojaca-trojnog-z-abazurem.jpg";
$product->image_url = $url;
$product->description = "Lampa stojąca trójnóg z abażurem
Elegancka, nowoczesna i funkcjonalna lampa podłogowa, która sprawi, że Twoje wnętrza nabiorą nowego, niepowtarzalnego klimatu.
Gdzie najlepiej postawić stylowy trójnóg?
Lampa świetnie odnajdzie się w sypialni, pokoju dziecięcym, gościnnym czy biurze. Dzięki klasycznemu designowi lampa pięknie wkomponuje się w każdy styl pomieszczenia, niezależnie od jego przeznaczenia. Stonowane kolory abażurów jeszcze bardziej ułatwią Ci dobranie lampy do wystroju wnętrza.
Czy trójnóg jest funkcjonalny?
Oczywiście, że tak! Trójnóg posiada włącznik/wyłącznik nożny, dzięki któremu nie musisz schylać się, by obsłużyć stojącą lampę. Ponadto lampa wykonana jest z wysokiej jakości tworzyw – metalu w powłoce chromowej i materiału, które zagwarantują Ci użyteczność oświetlenia podłogowego na długi czas. Lampa zasilana jest wieloma rodzajami światła E-27, w tym żarówkami LED czy energooszczędnymi.";
$product->add();
$product->save();
$product->addToCategories($product->id_category);
StockAvailable::setQuantity((int)$product->id, 0, $product->quantity, Context::getContext()->shop->id);
$shops = Shop::getShops(true, null, true);
$image = new Image();
$image->id_product = $product->id;
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
$product->id_category = 14;
$product->id_category_default = 14;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyPodlogowe/stylowa-lampka-nocna-biurkowa-abazur-diament.jpg";
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
$product->id_category = 14;
$product->id_category_default = 14;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyPodlogowe/nowoczesna-lampka-nocna-stolowa-trojnog-do-sypialni.jpg";
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
$product->name = [$default_lang => "Lampka Nocna Nowoczesna Abażur Diament Loft"];
$product->link_rewrite = [$default_lang => "lampka-nocna-nowoczesna-abazur-diament-loft"];
$product->price = 59.00;
$product->quantity = 90;
$product->id_category = 14;
$product->id_category_default = 14;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyPodlogowe/lampka-nocna-nowoczesna-abazur-diament-loft.jpg";
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
$product->name = [$default_lang => "Lampka Nocna Loft do Sypialni Abażur Stożek"];
$product->link_rewrite = [$default_lang => "lampka-nocna-loft-do-sypialni-abazur-stozek"];
$product->price = 59.00;
$product->quantity = 90;
$product->id_category = 14;
$product->id_category_default = 14;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyPodlogowe/lampka-nocna-loft-do-sypialni-abazur-stozek.jpg";
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
$product->name = [$default_lang => "Lampa Stojąca w Stylu Loft Metalowa Edison"];
$product->link_rewrite = [$default_lang => "lampa-stojaca-w-stylu-loft-metalowa-edison"];
$product->price = 145.00;
$product->quantity = 90;
$product->id_category = 14;
$product->id_category_default = 14;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyPodlogowe/lampa-stojaca-w-stylu-loft-metalowa-edison.jpg";
$product->image_url = $url;
$product->description = "Lampa stojąca w stylu loft podłogowa metalowa
Lampa podłogowa w stylu loft to niezwykle designerski rodzaj oświetlenia, który rewelacyjnie oświetli wnętrza oraz stanie się ich wyjątkową dekoracją. Lampa dostępna jest w trzech uniwersalnych kolorach do wyboru – czarnym, szarym i białym.
Gdzie najlepiej prezentuje się nowoczesna lampa stojąca loft z drucianym kloszem?
Lampa jest znakomitą propozycją do sypialni, salonu, kuchni, pokoju nastolatka czy jadalni. Postawiona przy łóżku lub kanapie może służyć jako oświetlenie do czytania. Lampa idealnie komponuje się z wnętrzami w stylu loft, nowoczesnymi, a nawet retro. Druciany klosz o oryginalnym kształcie doda urządzanemu wnętrzu wyjątkowego charakteru.
Jakie zalety posiada lampa pojedyncza stojąca industrialna metalowa?
Oświetlenie podłogowe posiada włącznik-wyłącznik nożny, który bardzo ułatwia korzystanie z lampy. Oświetlenie zostało wykonane z wytrzymałego i odpornego na uszkodzenia metalu. Jeśli chcesz stworzyć w pomieszczeniu nastrojowy, przytulny klimat, zasil lampę stojącą żarówką dekoracyjną. Jej oryginalny wygląd i ciepłe światło znakomicie wyglądają z metalowym kloszem odsłaniającym źródło światła. Do lampy pasują najpopularniejsze typy żarówek z gwintem E27.";
$product->add();
$product->save();
$product->addToCategories($product->id_category);
StockAvailable::setQuantity((int)$product->id, 0, $product->quantity, Context::getContext()->shop->id);
$shops = Shop::getShops(true, null, true);
$image = new Image();
$image->id_product = $product->id;
$image->position = Image::getHighestPosition($product->id) + 1;
$image->cover = true;
if (($image->validateFields(false, true)) === true &&
        ($image->validateFieldsLang(false, true)) === true && $image->add())
{
   $image->associateTo($shops);
   MyAdminImportController::copyImg($product->id, $image->id, $url, 'products', false);
}


$product = new Product();
$product->name = [$default_lang => "Lampa Podłogowa Industrialna z Metalu Loft"];
$product->link_rewrite = [$default_lang => "lampa-podlogowa-industrialna-z-metalu-loft"];
$product->price = 145.00;
$product->quantity = 90;
$product->id_category = 14;
$product->id_category_default = 14;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyPodlogowe/lampa-podlogowa-industrialna-z-metalu-loft.jpg";
$product->image_url = $url;
$product->description = "Lampa podłogowa stojąca industrialna metalowa loft
Chcesz dodać swoim wnętrzom oryginalnego wyglądu bez wydawania pieniędzy na remont i drogie dekoracje? Dodaj do aranżacji lampę stojącą w stylu industrialnym o metalowej konstrukcji. Oświetlenie dostępne jest w czterech kolorach – czarnym, białym, szarym oraz grafitowym z dodatkiem brokatu.
W jakich pomieszczeniach nowoczesna lampa podłogowa loft będzie prezentować się najlepiej?
Oświetlenie stojące ozdobi Twoją sypialnię, salon, kuchnię, pokój nastolatka czy gabinet. Lampa znakomicie sprawdzi się w roli światła wspomagającego, dekoracyjnego lub funkcjonalnego. Możesz postawić pojedynczą lampę loft przy kanapie w salonie bądź sypialni, dzięki czemu zyskasz praktyczne oświetlenie do czytania. Jeżeli postawisz lampę industrialną koło komody w salonie bądź innego mebla, które pełni w pokoju funkcje dekoracyjne, lampa stojąca rewelacyjnie oświetli to miejsce. Największym elementem dekoracyjnym lampy jest jej klosz- niepowtarzalny wygląd dodaje wnętrzom nowoczesności.
Jakie zalety posiada designerska lampa podłogowa pojedyncza w stylu industrialnym?
Oświetlenie stojące zostało wykonane z metalu malowanego proszkowo, dzięki czemu lampa jest wytrzymała i odporna na uszkodzenia. Oświetlenie posiada włącznik-wyłącznik nożny, co pozwala na łatwe i wygodne użytkowanie lampy. Do oświetlenia pasują najpopularniejsze żarówki z gwintem E27.";
$product->add();
$product->save();
$product->addToCategories($product->id_category);
StockAvailable::setQuantity((int)$product->id, 0, $product->quantity, Context::getContext()->shop->id);
$shops = Shop::getShops(true, null, true);
$image = new Image();
$image->id_product = $product->id;
$image->position = Image::getHighestPosition($product->id) + 1;
$image->cover = true;
if (($image->validateFields(false, true)) === true &&
        ($image->validateFieldsLang(false, true)) === true && $image->add())
{
   $image->associateTo($shops);
   MyAdminImportController::copyImg($product->id, $image->id, $url, 'products', false);
}


$product = new Product();
$product->name = [$default_lang => "Modna Lampa Stojąca Podłogowa Loft Metalowa Edison"];
$product->link_rewrite = [$default_lang => "modna-lampa-stojaca-podlogowa-loft-metalowa-edison"];
$product->price = 145.00;
$product->quantity = 90;
$product->id_category = 14;
$product->id_category_default = 14;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyPodlogowe/modna-lampa-stojaca-podlogowa-loft-metalowa-edison.jpg";
$product->image_url = $url;
$product->description = "Lampa stojąca w stylu industrialnym metalowa trzy kolory
Nowoczesna lampa podłogowa, która wspaniale uatrakcyjni Twoje wnętrza. Metalowy klosz oświetlenia jest jego największą dekoracją. Oryginalny kształt i forma odsłaniająca żarówkę doda Twojemu mieszkaniu niepowtarzalnego nastroju.
W jakich pomieszczeniach lampa stojąca loft z włącznikiem wygląda najlepiej?
Lampa industrialna posłuży jako oświetlenie wspomagające w każdym wnętrzu – kuchni, sypialni, jadalni, salonie, gabinecie czy pokoju dla nastolatka. Lampa stojąca została stworzona w trzech kolorach – białym, czarnym i grafitowym z dodatkiem brokatu, dzięki czemu z łatwością dopasujesz oświetlenie do wystroju swojego pokoju. Lampa podłogowa ozdobi wnętrza w stylu nowoczesnym, loft, a także retro. Jeśli chcesz, aby pojedyncza lampa stojąca świeciła nastrojowym, przyjemnym dla oka światłem, zasil ją żarówkami dekoracyjnymi. Ich oryginalny wygląd dodatkowo udekoruje pomieszczenie.
Jakie praktyczne funkcje posiada lampa podłogowa loft?
Oświetlenie stojące posiada włącznik-wyłącznik nożny, który bardzo ułatwia korzystanie z lampy. Oświetlenie nie wymaga mocowania, dzięki czemu możesz je łatwo przenosić. Lampa podłogowa została wykonana z wytrzymałego, odpornego na wszelkie uszkodzenia metalu. Do oświetlenia pasują najpopularniejsze typy źródeł światła – żarówki z gwintem E27.";
$product->add();
$product->save();
$product->addToCategories($product->id_category);
StockAvailable::setQuantity((int)$product->id, 0, $product->quantity, Context::getContext()->shop->id);
$shops = Shop::getShops(true, null, true);
$image = new Image();
$image->id_product = $product->id;
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
$product->id_category = 14;
$product->id_category_default = 14;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyPodlogowe/lampa-podlogowa-stojaca-z-abazurem-35-cm-led.jpg";
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
$product->id_category = 14;
$product->id_category_default = 14;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyPodlogowe/klasyczna-lampa-podlogowa-stojaca-led-abazur-40-cm.jpg";
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
$product->name = [$default_lang => "Klasyczna Lampa Stojąca Podłogowa z Abażurem"];
$product->link_rewrite = [$default_lang => "klasyczna-lampa-stojaca-podlogowa-z-abazurem"];
$product->price = 119.00;
$product->quantity = 90;
$product->id_category = 14;
$product->id_category_default = 14;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyPodlogowe/klasyczna-lampa-stojaca-podlogowa-z-abazurem.jpg";
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
$product->name = [$default_lang => "Nowoczesna Lampa Stojąca z Abażurem Złoty Środek"];
$product->link_rewrite = [$default_lang => "nowoczesna-lampa-stojaca-z-abazurem-zloty-srodek"];
$product->price = 189.00;
$product->quantity = 90;
$product->id_category = 14;
$product->id_category_default = 14;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyPodlogowe/nowoczesna-lampa-stojaca-z-abazurem-zloty-srodek.jpg";
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
$product->id_category = 14;
$product->id_category_default = 14;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyPodlogowe/lampa-stojaca-drewniana-trojnog-abazur-ze-zlotym-wnetrzem.jpg";
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
$product->name = [$default_lang => "Lampa Stojąca Metalowa z Abażurem Złoty Środek"];
$product->link_rewrite = [$default_lang => "lampa-stojaca-metalowa-z-abazurem-zloty-srodek"];
$product->price = 199.00;
$product->quantity = 90;
$product->id_category = 14;
$product->id_category_default = 14;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyPodlogowe/lampa-stojaca-metalowa-z-abazurem-zloty-srodek.jpg";
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
$product->id_category = 14;
$product->id_category_default = 14;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyPodlogowe/lampa-podlogowa-drewniana-stojaca-trojnog-z-abazurem.jpg";
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
$product->name = [$default_lang => "Nowoczesna Lampa Stojąca Dziecięca Abażur we Wzory"];
$product->link_rewrite = [$default_lang => "nowoczesna-lampa-stojaca-dziecieca-abazur-we-wzory"];
$product->price = 159.00;
$product->quantity = 90;
$product->id_category = 14;
$product->id_category_default = 14;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyPodlogowe/nowoczesna-lampa-stojaca-dziecieca-abazur-we-wzory.jpg";
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
$product->id_category = 14;
$product->id_category_default = 14;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyPodlogowe/lampa-stojaca-podlogowa-z-abazurem-w-kolorowe-wzory.jpg";
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
$product->name = [$default_lang => "Lampa Stojąca z Abażurem Kolorowa Nowoczesna LED"];
$product->link_rewrite = [$default_lang => "lampa-stojaca-z-abazurem-kolorowa-nowoczesna-led"];
$product->price = 149.00;
$product->quantity = 90;
$product->id_category = 14;
$product->id_category_default = 14;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyPodlogowe/lampa-stojaca-z-abazurem-kolorowa-nowoczesna-led.jpg";
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
$product->name = [$default_lang => "Lampka Nocna z Abażurem w Stylu Loft"];
$product->link_rewrite = [$default_lang => "lampka-nocna-z-abazurem-w-stylu-loft"];
$product->price = 49.00;
$product->quantity = 90;
$product->id_category = 14;
$product->id_category_default = 14;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyPodlogowe/lampka-nocna-z-abazurem-w-stylu-loft.jpg";
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


$product = new Product();
$product->name = [$default_lang => "Lampka Nocna w Stylu Loftowym Kształt Diament"];
$product->link_rewrite = [$default_lang => "lampka-nocna-w-stylu-loftowym-ksztalt-diament"];
$product->price = 49.00;
$product->quantity = 90;
$product->id_category = 14;
$product->id_category_default = 14;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/LampyPodlogowe/lampka-nocna-w-stylu-loftowym-ksztalt-diament.jpg";
$product->image_url = $url;
$product->description = "Nowoczesna lampka nocna w loftowym stylu
Ta nowoczesna lampka znakomicie wpisuje się w popularny trend industrialny, który ma szerokie zastosowanie w projektowaniu atrakcyjnego wnętrza. Lampa loft cudownie oświetla sypialnię, pozostawiając delikatny półmrok z każdym wieczorem spędzonym w łóżku z książką. Najprostsza aranżacja sypialni w towarzystwie nowoczesnej lampki nocnej odmienia się w mgnieniu oka. Inwestycja w proste i minimalistyczne lampy podłogowe lub lampy stojące to dobry krok w stronę harmonijnej kompozycji.
W jakim pomieszczeniu nowoczesna lampa nocna wygląda najlepiej?
Oczywiście jest to lampka nocna, zatem najlepiej sprawdza się w sypialni lub w uroczym pokoju dziecięcym. Nowoczesna lampka z abażurem dobrze wygląda w salonie lub w kuchni, gdzie stanowi element doświetlający większą przestrzeń. Tak subtelna forma oświetlenia to element, na który w każdym domu jest miejsce. Nowoczesną lampke nocną w stylu loftowym warto wybrać do mieszkań urządzonych w stylu: industrialnym, art - deco, eklektycznym lub minimalistycznym, gdzie za każdym razem bezbłędnie się prezentuje.
Dlaczego warto wybrać tę nowoczesną lampkę nocną z abażurem do swojego mieszkania?
Lampka posiada aż 3 kolory konstrukcji do wyboru, a także 7 kolorów abażura, co sprawia, że bez trudu dopasujesz ją do swojego wnętrza
Nowoczesna lampa z abażurem jest osadzona na metalowej konstrukcji w kształcie diamentu, co nadaje jej loftowego klimatu
Uniwersalna i minimalistyczna lampka nocna sprawia, że jest świetnym rozwiązaniem dla każdego wnętrza
Produkt ten nie wymaga transformatora i posiada włącznik-wyłącznik
Skomponuj lampkę nocną w ulubionym zestawie kolorystycznym i dopasuj ją do swojej sypialni!";
$product->add();
$product->save();
$product->addToCategories($product->id_category);
StockAvailable::setQuantity((int)$product->id, 0, $product->quantity, Context::getContext()->shop->id);
$shops = Shop::getShops(true, null, true);
$image = new Image();
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