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
$product->name = [$default_lang => "Żarówka Halogen Dekoracyjna Duża Kula 42W"];
$product->link_rewrite = [$default_lang => "zarowka-halogen-dekoracyjna-duza-kula-42w"];
$product->price = 23.50;
$product->quantity = 90;
$product->id_category = 19;
$product->id_category_default = 19;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/ZrodlaSwiatla/zarowka-halogen-dekoracyjna-duza-kula-40w.jpg";
$product->image_url = $url;
$product->description = "Żarówka dekoracyjna halogen 42W
Żarówka, która nada Twoim pomieszczeniom wyjątkowego klimatu. Światło prezentowanej żarówki jest przyjazne dla ludzkiego oka, a ponadto ma właściwości kojące.
Do jakich wnętrz pasować będzie wyjątkowe światło żarówki?
Żarówka Edison może być wykorzystana wszędzie tam, gdzie chcemy osiągnąć wyjątkowy klimat i magiczny nastrój. Światło ma działanie podobne do blasku świec czy płonącego kominka, przez co idealnie wkomponuje się w aranżacje retro bądź vintage. Polecamy zamienne stosowanie różnych kształtów żarówek, by uzyskać idealny efekt dekoracyjny.
Jakie zalety posiada dekoracyjna żarówka?
Żarówka jest oparta na węglowych żarnikach, przez co przypomina wzór pierwszych żarówek.
Oświetlenie znajdzie zastosowanie we wnętrzach LOFT, lampach industrialnych. Moc żarówki wynosi 42W, a jej gwint to E-27.";
$product->add();
$product->save();
$product->addToCategories($product->id_category);
StockAvailable::setQuantity((int)$product->id, 0, $product->quantity, Context::getContext()->shop->id);
$shops = Shop::getShops(true, null, true);
$image = new Image();
$image->id_product = $product->id;
$image->position = Image::getHighestPosition($product->id) + 1;
$image->cover = true;
if (($image->validateFields(false, true)) === true &&
        ($image->validateFieldsLang(false, true)) === true && $image->add())
{
   $image->associateTo($shops);
   MyAdminImportController::copyImg($product->id, $image->id, $url, 'products', false);
}


$product = new Product();
$product->name = [$default_lang => "Żarówka LED E27 Ciepła Kulka 7W 55W"];
$product->link_rewrite = [$default_lang => "zarowka-led-e27-ciepla-kulka-7w-55w"];
$product->price = 7.90;
$product->quantity = 90;
$product->id_category = 19;
$product->id_category_default = 19;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/ZrodlaSwiatla/zarowka-led-e27-ciepla-kulka-7w-55w.jpg";
$product->image_url = $url;
$product->description = "Żarówka LED E-27 7W ciepła barwa światła
Nadaj swoim wnętrzom wyjątkowego klimatu, dzięki ledowej żarówce o ciepłej barwie światła. Ciesz się funkcjonalnością żarówek LED E-27 przez bardzo długi czas!
Jakie zalety posiada żarówka?
Jej światło wygląda rewelacyjnie w każdym pomieszczeniu, niezależnie od stylu, w jakim jest urządzone. Ponadto żarówka posiada bardzo niskie zużycie energii – nawet 8/9 razy mniejszy pobór mocy w stosunku do zwykłych żarówek. Dzięki temu zyskujemy około 80-90% oszczędności!
Dodatkową zaletą niskiej emisji ciepła jest mniejsze ryzyko oparzeń, dłuższy czas życia oprawy żarówki oraz nie odbarwianie koloru ścian. Żarówka jest także odporna na uszkodzenia mechanicznie.
Żarówka LED to gwarancja większej niezawodności niż w przypadku zwykłej żarówki. Ledowe żarówki nie posiadają efektu „mrugania”, dzięki czemu wpływają korzystnie na nasze samopoczucie. Dodatkowym atutem żarówki LED jest fakt, że do jej produkcji nie wykorzystuje się żadnych substancji szkodliwych";
$product->add();
$product->save();
$product->addToCategories($product->id_category);
StockAvailable::setQuantity((int)$product->id, 0, $product->quantity, Context::getContext()->shop->id);
$shops = Shop::getShops(true, null, true);
$image = new Image();
$image->id_product = $product->id;
$image->position = Image::getHighestPosition($product->id) + 1;
$image->cover = true;
if (($image->validateFields(false, true)) === true &&
        ($image->validateFieldsLang(false, true)) === true && $image->add())
{
   $image->associateTo($shops);
   MyAdminImportController::copyImg($product->id, $image->id, $url, 'products', false);
}


$product = new Product();
$product->name = [$default_lang => "Żarówka LED Filament A60 E27 Ciepła 6W 48W"];
$product->link_rewrite = [$default_lang => "zarowka-led-filament-a60-e27-ciepla-6w-48w"];
$product->price = 13.99;
$product->quantity = 90;
$product->id_category = 19;
$product->id_category_default = 19;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/ZrodlaSwiatla/zarowka-led-filament-a60-e27-ciepla-6w-48w.jpg";
$product->image_url = $url;
$product->description = "Żarówka LED Filament 6W Ciepła Barwa
Żarówka LED, która nada Twoim wnętrzom niepowtarzalnego klimatu. Światło żarówki jest przyjemne dla ludzkiego oka oraz charakteryzuje się wysokim współczynnikiem oddawania barw, przez co pełni role dekoracyjne w pomieszczeniu.
Jakie zalety posiada żarówka LED Filament?
Żarówka może być wykorzystana wszędzie tam, gdzie chcemy osiągnąć wyjątkowy klimat i magiczny nastrój. Świetnie prezentuje się we wnętrzach LOFT, lampach industrialnych i dekoracyjnych.
Źródło światła posiada bardzo niskie zużycie energii – nawet 8/9 razy mniejszy pobór mocy w stosunku do zwykłych żarówek. Dzięki temu zyskujemy około 80-90% oszczędności!
Żarówka LED może pracować od 15 do nawet 30 razy dłużej niż tradycyjna żarówka. Innymi zaletami źródła światła LED Filament jest niska emisja ciepła, mniejsze ryzyko oparzeń oraz nie odbarwianie koloru ścian. Żarówka jest także odporna na uszkodzenia mechanicznie.
Źródła zasilania LED Filament są również ekologiczne, ponieważ nie posiadają rtęci ani żadnych substancji szkodliwych dla środowiska.";
$product->add();
$product->save();
$product->addToCategories($product->id_category);
StockAvailable::setQuantity((int)$product->id, 0, $product->quantity, Context::getContext()->shop->id);
$shops = Shop::getShops(true, null, true);
$image = new Image();
$image->id_product = $product->id;
$image->position = Image::getHighestPosition($product->id) + 1;
$image->cover = true;
if (($image->validateFields(false, true)) === true &&
        ($image->validateFieldsLang(false, true)) === true && $image->add())
{
   $image->associateTo($shops);
   MyAdminImportController::copyImg($product->id, $image->id, $url, 'products', false);
}


$product = new Product();
$product->name = [$default_lang => "Żarówka LED E27 Ciepła 10W 60W"];
$product->link_rewrite = [$default_lang => "zarowka-led-e27-ciepla-10w-60w"];
$product->price = 8.60;
$product->quantity = 90;
$product->id_category = 19;
$product->id_category_default = 19;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/ZrodlaSwiatla/zarowka-led-e27-ciepla-12w-77w.jpg";
$product->image_url = $url;
$product->description = "Żarówka LED E27 Ciepła 10W 60W
Energooszczędna żarówka LED doda Twoim wnętrzom niepowtarzalnego klimatu, dzięki ciepłej barwie światła.
Jakie zalety posiada żarówka LED?
Żarówka o mocy 12W dokładnie oświetli każde pomieszczenie. Źródła światła LED charakteryzują się niskim zużyciem energii w stosunku do tradycyjnych żarówek. To nawet 8-9 razy mniejszy pobór mocy, dzięki któremu zyskasz nawet 80-90 % oszczędności!
Niska emisja ciepła sprawia, że zmniejsza się ryzyko oparzeń. Wydłuża się również żywotność oprawy żarówki. Dodatkowo prezentowana żarówka LED nie odbarwia koloru ścian i charakteryzują się wysoką odpornością na uszkodzenia mechaniczne.
Żarówka LED jest bezpieczna dla środowiska, ponieważ do jej produkcji nie używa się substancji szkodliwych. Ten rodzaj źródła zasilania wpływa pozytywnie na nasze samopoczucie, ponieważ nie posiada efektu „mrugania”. Żarówka LED jest bardziej niezawodna, energooszczędna i bezpieczna w stosunku do tradycyjnych źródeł światła.";
$product->add();
$product->save();
$product->addToCategories($product->id_category);
StockAvailable::setQuantity((int)$product->id, 0, $product->quantity, Context::getContext()->shop->id);
$shops = Shop::getShops(true, null, true);
$image = new Image();
$image->id_product = $product->id;
$image->position = Image::getHighestPosition($product->id) + 1;
$image->cover = true;
if (($image->validateFields(false, true)) === true &&
        ($image->validateFieldsLang(false, true)) === true && $image->add())
{
   $image->associateTo($shops);
   MyAdminImportController::copyImg($product->id, $image->id, $url, 'products', false);
}


$product = new Product();
$product->name = [$default_lang => "Żarówka LED E27 Zimna Kulka 7W 55W"];
$product->link_rewrite = [$default_lang => "zarowka-led-e27-zimna-kulka-7w-55w"];
$product->price = 7.90;
$product->quantity = 90;
$product->id_category = 19;
$product->id_category_default = 19;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/ZrodlaSwiatla/zarowka-led-e27-zimna-kulka-7w-55w.jpg";
$product->image_url = $url;
$product->description = "Żarówka LED E-27 7W zimna barwa światła
Nadaj swoim wnętrzom wyjątkowego klimatu, dzięki ledowej żarówce o zimnej barwie światła. Ciesz się funkcjonalnością żarówek LED E-27 przez bardzo długi czas!
Jakie zalety posiada żarówka?
Jej światło wygląda rewelacyjnie w każdym pomieszczeniu, niezależnie od stylu, w jakim jest urządzone. Ponadto żarówka posiada bardzo niskie zużycie energii – nawet 8/9 razy mniejszy pobór mocy w stosunku do zwykłych żarówek. Dzięki temu zyskujemy około 80-90% oszczędności!
Dodatkową zaletą niskiej emisji ciepła jest mniejsze ryzyko oparzeń, dłuższy czas życia oprawy żarówki oraz nie odbarwianie koloru ścian. Żarówka jest także odporna na uszkodzenia mechanicznie.
Żarówka LED to gwarancja większej niezawodności niż w przypadku zwykłej żarówki. Ledowe żarówki nie posiadają efektu „mrugania”, dzięki czemu wpływają korzystnie na nasze samopoczucie. Dodatkowym atutem żarówki LED jest fakt, że do jej produkcji nie wykorzystuje się żadnych substancji szkodliwych";
$product->add();
$product->save();
$product->addToCategories($product->id_category);
StockAvailable::setQuantity((int)$product->id, 0, $product->quantity, Context::getContext()->shop->id);
$shops = Shop::getShops(true, null, true);
$image = new Image();
$image->id_product = $product->id;
$image->position = Image::getHighestPosition($product->id) + 1;
$image->cover = true;
if (($image->validateFields(false, true)) === true &&
        ($image->validateFieldsLang(false, true)) === true && $image->add())
{
   $image->associateTo($shops);
   MyAdminImportController::copyImg($product->id, $image->id, $url, 'products', false);
}


$product = new Product();
$product->name = [$default_lang => "Żarówka LED E27 Zimna Kulka 3W 25W"];
$product->link_rewrite = [$default_lang => "zarowka-led-e27-zimna-kulka-3w-25w"];
$product->price = 6.99;
$product->quantity = 90;
$product->id_category = 19;
$product->id_category_default = 19;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/ZrodlaSwiatla/zarowka-led-e27-zimna-kulka-3w-25w.jpg";
$product->image_url = $url;
$product->description = "Żarówka LED E-27 3W zimna barwa światła
Nadaj swoim wnętrzom wyjątkowego klimatu, dzięki ledowej żarówce o zimnej barwie światła. Ciesz się funkcjonalnością żarówek LED E-27 przez bardzo długi czas!
Jakie zalety posiada żarówka?
Jej światło wygląda rewelacyjnie w każdym pomieszczeniu, niezależnie od stylu, w jakim jest urządzone. Ponadto żarówka posiada bardzo niskie zużycie energii – nawet 8/9 razy mniejszy pobór mocy w stosunku do zwykłych żarówek. Dzięki temu zyskujemy około 80-90% oszczędności!
Dodatkową zaletą niskiej emisji ciepła jest mniejsze ryzyko oparzeń, dłuższy czas życia oprawy żarówki oraz nie odbarwianie koloru ścian. Żarówka jest także odporna na uszkodzenia mechanicznie.
Żarówka LED to gwarancja większej niezawodności niż w przypadku zwykłej żarówki. Ledowe żarówki nie posiadają efektu „mrugania”, dzięki czemu wpływają korzystnie na nasze samopoczucie. Dodatkowym atutem żarówki LED jest fakt, że do jej produkcji nie wykorzystuje się żadnych substancji szkodliwych";
$product->add();
$product->save();
$product->addToCategories($product->id_category);
StockAvailable::setQuantity((int)$product->id, 0, $product->quantity, Context::getContext()->shop->id);
$shops = Shop::getShops(true, null, true);
$image = new Image();
$image->id_product = $product->id;
$image->position = Image::getHighestPosition($product->id) + 1;
$image->cover = true;
if (($image->validateFields(false, true)) === true &&
        ($image->validateFieldsLang(false, true)) === true && $image->add())
{
   $image->associateTo($shops);
   MyAdminImportController::copyImg($product->id, $image->id, $url, 'products', false);
}


$product = new Product();
$product->name = [$default_lang => "Żarówka LED G9 Ciepły 3W 24W"];
$product->link_rewrite = [$default_lang => "zarowka-led-g9-cieply-3w-24w"];
$product->price = 13.99;
$product->quantity = 90;
$product->id_category = 19;
$product->id_category_default = 19;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/ZrodlaSwiatla/zarowka-led-g9-cieply-3w-24w.jpg";
$product->image_url = $url;
$product->description = "Żarówka LED G9 3W ciepła barwa światła
Nadaj swoim wnętrzom wyjątkowego klimatu, dzięki ledowej żarówce o ciepłej barwie światła. Ciesz się funkcjonalnością żarówek LED G9 przez bardzo długi czas!
Jakie zalety posiada żarówka?
Jej światło wygląda rewelacyjnie w każdym pomieszczeniu, niezależnie od stylu, w jakim jest urządzone. Ponadto żarówka posiada bardzo niskie zużycie energii – nawet 8/9 razy mniejszy pobór mocy w stosunku do zwykłych żarówek. Dzięki temu zyskujemy około 80-90% oszczędności!
Dodatkową zaletą niskiej emisji ciepła jest mniejsze ryzyko oparzeń, dłuższy czas życia oprawy żarówki oraz nie odbarwianie koloru ścian. Żarówka jest także odporna na uszkodzenia mechanicznie.
Żarówka LED to gwarancja większej niezawodności niż w przypadku zwykłej żarówki. Ledowe żarówki nie posiadają efektu „mrugania”, dzięki czemu wpływają korzystnie na nasze samopoczucie. Dodatkowym atutem żarówki LED jest fakt, że do jej produkcji nie wykorzystuje się żadnych substancji szkodliwych";
$product->add();
$product->save();
$product->addToCategories($product->id_category);
StockAvailable::setQuantity((int)$product->id, 0, $product->quantity, Context::getContext()->shop->id);
$shops = Shop::getShops(true, null, true);
$image = new Image();
$image->id_product = $product->id;
$image->position = Image::getHighestPosition($product->id) + 1;
$image->cover = true;
if (($image->validateFields(false, true)) === true &&
        ($image->validateFieldsLang(false, true)) === true && $image->add())
{
   $image->associateTo($shops);
   MyAdminImportController::copyImg($product->id, $image->id, $url, 'products', false);
}


$product = new Product();
$product->name = [$default_lang => "Żarówka Edison Dekoracyjna Duża Kula Retro 40W"];
$product->link_rewrite = [$default_lang => "zarowka-edison-dekoracyjna-duza-kula-retro-40w"];
$product->price = 25.90;
$product->quantity = 90;
$product->id_category = 19;
$product->id_category_default = 19;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/ZrodlaSwiatla/zarowka-edison-dekoracyjna-duza-kula-retro-40w.jpg";
$product->image_url = $url;
$product->description = "Żarówka dekoracyjna Edison 40W
Żarówka, która nada Twoim pomieszczeniom wyjątkowego klimatu. Światło prezentowanej żarówki jest ciepłe, przyjazne dla ludzkiego oka, a ponadto ma właściwości kojące.
Do jakich wnętrz pasować będzie wyjątkowe światło żarówki?
Żarówka Edison może być wykorzystana wszędzie tam, gdzie chcemy osiągnąć wyjątkowy klimat i magiczny nastrój. Światło ma działanie podobne do blasku świec czy płonącego kominka, przez co idealnie wkomponuje się w aranżacje retro bądź vintage. Polecamy zamienne stosowanie różnych kształtów żarówek, by uzyskać idealny efekt dekoracyjny.
Jakie zalety posiada dekoracyjna żarówka?
Żarówka jest oparta na węglowych żarnikach, przez co przypomina wzór pierwszych żarówek.
Oświetlenie znajdzie zastosowanie we wnętrzach LOFT, lampach industrialnych. Moc żarówki wynosi 40W, a jej gwint to E-27.";
$product->add();
$product->save();
$product->addToCategories($product->id_category);
StockAvailable::setQuantity((int)$product->id, 0, $product->quantity, Context::getContext()->shop->id);
$shops = Shop::getShops(true, null, true);
$image = new Image();
$image->id_product = $product->id;
$image->position = Image::getHighestPosition($product->id) + 1;
$image->cover = true;
if (($image->validateFields(false, true)) === true &&
        ($image->validateFieldsLang(false, true)) === true && $image->add())
{
   $image->associateTo($shops);
   MyAdminImportController::copyImg($product->id, $image->id, $url, 'products', false);
}


$product = new Product();
$product->name = [$default_lang => "Żarówka LED E27 Ciepła Kulka 3W 25W"];
$product->link_rewrite = [$default_lang => "zarowka-led-e27-ciepla-kulka-3w-25w"];
$product->price = 6.99;
$product->quantity = 90;
$product->id_category = 19;
$product->id_category_default = 19;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/ZrodlaSwiatla/zarowka-led-e27-ciepla-kulka-3w-25w.jpg";
$product->image_url = $url;
$product->description = "Żarówka LED E-27 3W ciepła barwa światła
Nadaj swoim wnętrzom wyjątkowego klimatu, dzięki ledowej żarówce o ciepłej barwie światła. Ciesz się funkcjonalnością żarówek LED E-27 przez bardzo długi czas!
Jakie zalety posiada żarówka?
Jej światło wygląda rewelacyjnie w każdym pomieszczeniu, niezależnie od stylu, w jakim jest urządzone. Ponadto żarówka posiada bardzo niskie zużycie energii – nawet 8/9 razy mniejszy pobór mocy w stosunku do zwykłych żarówek. Dzięki temu zyskujemy około 80-90% oszczędności!
Dodatkową zaletą niskiej emisji ciepła jest mniejsze ryzyko oparzeń, dłuższy czas życia oprawy żarówki oraz nie odbarwianie koloru ścian. Żarówka jest także odporna na uszkodzenia mechanicznie.
Żarówka LED to gwarancja większej niezawodności niż w przypadku zwykłej żarówki. Ledowe żarówki nie posiadają efektu „mrugania”, dzięki czemu wpływają korzystnie na nasze samopoczucie. Dodatkowym atutem żarówki LED jest fakt, że do jej produkcji nie wykorzystuje się żadnych substancji szkodliwych";
$product->add();
$product->save();
$product->addToCategories($product->id_category);
StockAvailable::setQuantity((int)$product->id, 0, $product->quantity, Context::getContext()->shop->id);
$shops = Shop::getShops(true, null, true);
$image = new Image();
$image->id_product = $product->id;
$image->position = Image::getHighestPosition($product->id) + 1;
$image->cover = true;
if (($image->validateFields(false, true)) === true &&
        ($image->validateFieldsLang(false, true)) === true && $image->add())
{
   $image->associateTo($shops);
   MyAdminImportController::copyImg($product->id, $image->id, $url, 'products', false);
}


$product = new Product();
$product->name = [$default_lang => "Żarówka LED Filament E27 Ciepła 8W G120 Dekoracyjna"];
$product->link_rewrite = [$default_lang => "zarowka-led-filament-e27-ciepla-8w-g120-dekoracyjna"];
$product->price = 29.99;
$product->quantity = 90;
$product->id_category = 19;
$product->id_category_default = 19;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/ZrodlaSwiatla/zarowka-led-filament-e27-ciepla-8w-g120-dekoracyjna.jpg";
$product->image_url = $url;
$product->description = "Żarówka LED Filament 8W Ciepła Barwa
Żarówka LED, która nada Twoim wnętrzom niepowtarzalnego klimatu. Światło żarówki jest przyjemne dla ludzkiego oka oraz charakteryzuje się wysokim współczynnikiem oddawania barw, przez co pełni role dekoracyjne w pomieszczeniu.
Jakie zalety posiada żarówka LED Filament?
Żarówka może być wykorzystana wszędzie tam, gdzie chcemy osiągnąć wyjątkowy klimat i magiczny nastrój. Świetnie prezentuje się we wnętrzach LOFT, lampach industrialnych i dekoracyjnych.
Źródło światła posiada bardzo niskie zużycie energii – nawet 8/9 razy mniejszy pobór mocy w stosunku do zwykłych żarówek. Dzięki temu zyskujemy około 80-90% oszczędności!
Żarówka LED może pracować od 15 do nawet 30 razy dłużej niż tradycyjna żarówka. Innymi zaletami źródła światła LED Filament jest niska emisja ciepła, mniejsze ryzyko oparzeń oraz nie odbarwianie koloru ścian. Żarówka jest także odporna na uszkodzenia mechanicznie.
Źródła zasilania LED Filament są również ekologiczne, ponieważ nie posiadają rtęci ani żadnych substancji szkodliwych dla środowiska.";
$product->add();
$product->save();
$product->addToCategories($product->id_category);
StockAvailable::setQuantity((int)$product->id, 0, $product->quantity, Context::getContext()->shop->id);
$shops = Shop::getShops(true, null, true);
$image = new Image();
$image->id_product = $product->id;
$image->position = Image::getHighestPosition($product->id) + 1;
$image->cover = true;
if (($image->validateFields(false, true)) === true &&
        ($image->validateFieldsLang(false, true)) === true && $image->add())
{
   $image->associateTo($shops);
   MyAdminImportController::copyImg($product->id, $image->id, $url, 'products', false);
}


$product = new Product();
$product->name = [$default_lang => "Żarówka LED E27 Zimna 10W 80W"];
$product->link_rewrite = [$default_lang => "zarowka-led-e27-zimna-10w-80w"];
$product->price = 8.90;
$product->quantity = 90;
$product->id_category = 19;
$product->id_category_default = 19;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/ZrodlaSwiatla/zarowka-led-e27-ciepla-12w-77w.jpg";
$product->image_url = $url;
$product->description = "Żarówka LED E27 Zimna 10W 80W
Energooszczędne żarówki LED znakomicie oświetlą każde pomieszczenie. Zimna barwa światła ułatwia skupienie i koncentrację. Żabówka sprawdzi się wszędzie tam, gdzie będziesz wykonywać nieco bardziej wymagające czynności.
Jakie atuty posiada żarówka E27 LED?
Największą zaletą żarówek LED jest ich energooszczędność. Pobierają aż 8-9 razy mniej prądu niż zwykłe żarówki. Dzięki żarówkom LED zyskujesz aż 80-90% oszczędności.
Źródła światła LED są znacznie trwalsze i niezawodne niż tradycyjne żarówki. Są odporne na uszkodzenia mechaniczne i nie odbarwiają koloru ścian. Żywotność oprawy również jest znacznie dłuższa. Ponadto niska emisja ciepła sprawia, że spada ryzyko oparzeń.
Żarówka LED jest bezpieczna dla środowiska, ponieważ do jej produkcji nie wykorzystuje się substancji szkodzących. Nie posiada efektu „mrugania”, co ma korzystny wpływ na nasze samopoczucie. Gwint E27 pasuje do większości lamp każdego rodzaju.";
$product->add();
$product->save();
$product->addToCategories($product->id_category);
StockAvailable::setQuantity((int)$product->id, 0, $product->quantity, Context::getContext()->shop->id);
$shops = Shop::getShops(true, null, true);
$image = new Image();
$image->id_product = $product->id;
$image->position = Image::getHighestPosition($product->id) + 1;
$image->cover = true;
if (($image->validateFields(false, true)) === true &&
        ($image->validateFieldsLang(false, true)) === true && $image->add())
{
   $image->associateTo($shops);
   MyAdminImportController::copyImg($product->id, $image->id, $url, 'products', false);
}


$product = new Product();
$product->name = [$default_lang => "Żarówka Edison Dekoracyjna Duża Łza E27 40W"];
$product->link_rewrite = [$default_lang => "zarowka-edison-dekoracyjna-duza-lza-e27-40w"];
$product->price = 19.90;
$product->quantity = 90;
$product->id_category = 19;
$product->id_category_default = 19;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/ZrodlaSwiatla/zarowka-edison-dekoracyjna-duza-lza-40w.jpg";
$product->image_url = $url;
$product->description = "Żarówka dekoracyjna Edison 40W
Żarówka, która nada Twoim pomieszczeniom wyjątkowego klimatu. Światło prezentowanej żarówki jest ciepłe, przyjazne dla ludzkiego oka, a ponadto ma właściwości kojące.
Do jakich wnętrz pasować będzie wyjątkowe światło żarówki?
Żarówka Edison może być wykorzystana wszędzie tam, gdzie chcemy osiągnąć wyjątkowy klimat i magiczny nastrój. Światło ma działanie podobne do blasku świec czy płonącego kominka, przez co idealnie wkomponuje się w aranżacje retro bądź vintage. Polecamy zamienne stosowanie różnych kształtów żarówek, by uzyskać idealny efekt dekoracyjny.
Jakie zalety posiada dekoracyjna żarówka?
Żarówka jest oparta na węglowych żarnikach, przez co przypomina wzór pierwszych żarówek.
Oświetlenie znajdzie zastosowanie we wnętrzach LOFT, lampach industrialnych. Moc żarówki wynosi 40W, a jej gwint to E-27.";
$product->add();
$product->save();
$product->addToCategories($product->id_category);
StockAvailable::setQuantity((int)$product->id, 0, $product->quantity, Context::getContext()->shop->id);
$shops = Shop::getShops(true, null, true);
$image = new Image();
$image->id_product = $product->id;
$image->position = Image::getHighestPosition($product->id) + 1;
$image->cover = true;
if (($image->validateFields(false, true)) === true &&
        ($image->validateFieldsLang(false, true)) === true && $image->add())
{
   $image->associateTo($shops);
   MyAdminImportController::copyImg($product->id, $image->id, $url, 'products', false);
}


$product = new Product();
$product->name = [$default_lang => "Żarówka LED E27 Neutralna 12W 100W"];
$product->link_rewrite = [$default_lang => "zarowka-led-e27-neutralna-12w-100w"];
$product->price = 8.90;
$product->quantity = 90;
$product->id_category = 19;
$product->id_category_default = 19;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/ZrodlaSwiatla/zarowka-led-e27-neutralna-10w-60w.jpg";
$product->image_url = $url;
$product->description = "Żarówka LED E27 Neutralna Barwa 12W 10W
Postaw na funkcjonalne i energooszczędne żarówki LED. Posiadają mnóstwo zalet, które czynią je znacznie korzystniejszymi do oświetlenia domu niż wybór żarówek tradycyjnych.
Jakie praktyczne funkcje posiadają żarówki LED?
To, co odróżnia je od innych żarówek do energooszczędność. Żarówki LED pobierają 8-9 rrazy mniej energii niż tradycyjne żarówki.
Innymi zaletami żarówek LED jest odporność na uszkodzenia mechaniczne oraz długa żywotność oprawy. Dzięki niskiemu zużyciu energii, ryzyko oprzeń znacznie maleje.
Nie wiesz, jakie światło wybrać do pomieszczeń codziennych, które nie służą ani do relaksu ani do pracy? Idealnie nada się w tym przypadku neutralna barwa światła, którą posiada prezentowana żarówka LED E27.
Do produkcji żarówek LED nie wykorzystuje się substancji szkodliwych. W odróżnieniu od zwykłych żarówek LED-y nie posiadają efektu „mrugania”, który niekorzystnie wpływa na samopoczucie.";
$product->add();
$product->save();
$product->addToCategories($product->id_category);
StockAvailable::setQuantity((int)$product->id, 0, $product->quantity, Context::getContext()->shop->id);
$shops = Shop::getShops(true, null, true);
$image = new Image();
$image->id_product = $product->id;
$image->position = Image::getHighestPosition($product->id) + 1;
$image->cover = true;
if (($image->validateFields(false, true)) === true &&
        ($image->validateFieldsLang(false, true)) === true && $image->add())
{
   $image->associateTo($shops);
   MyAdminImportController::copyImg($product->id, $image->id, $url, 'products', false);
}


$product = new Product();
$product->name = [$default_lang => "Żarówka Edison Dekoracyjna Ozdobna E27 40W"];
$product->link_rewrite = [$default_lang => "zarowka-edison-dekoracyjna-ozdobna-e27-40w"];
$product->price = 19.90;
$product->quantity = 90;
$product->id_category = 19;
$product->id_category_default = 19;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/ZrodlaSwiatla/zarowka-edison-dekoracyjna-ozdobna-40w.jpg";
$product->image_url = $url;
$product->description = "Żarówka dekoracyjna Edison 40W
Żarówka, która nada Twoim pomieszczeniom wyjątkowego klimatu. Światło prezentowanej żarówki jest ciepłe, przyjazne dla ludzkiego oka, a ponadto ma właściwości kojące.
Do jakich wnętrz pasować będzie wyjątkowe światło żarówki?
Żarówka Edison może być wykorzystana wszędzie tam, gdzie chcemy osiągnąć wyjątkowy klimat i magiczny nastrój. Światło ma działanie podobne do blasku świec czy płonącego kominka, przez co idealnie wkomponuje się w aranżacje retro bądź vintage. Polecamy zamienne stosowanie różnych kształtów żarówek, by uzyskać idealny efekt dekoracyjny.
Jakie zalety posiada dekoracyjna żarówka?
Żarówka jest oparta na węglowych żarnikach, przez co przypomina wzór pierwszych żarówek.
Oświetlenie znajdzie zastosowanie we wnętrzach LOFT, lampach industrialnych. Moc żarówki wynosi 40W, a jej gwint to E-27.";
$product->add();
$product->save();
$product->addToCategories($product->id_category);
StockAvailable::setQuantity((int)$product->id, 0, $product->quantity, Context::getContext()->shop->id);
$shops = Shop::getShops(true, null, true);
$image = new Image();
$image->id_product = $product->id;
$image->position = Image::getHighestPosition($product->id) + 1;
$image->cover = true;
if (($image->validateFields(false, true)) === true &&
        ($image->validateFieldsLang(false, true)) === true && $image->add())
{
   $image->associateTo($shops);
   MyAdminImportController::copyImg($product->id, $image->id, $url, 'products', false);
}


$product = new Product();
$product->name = [$default_lang => "Żarówka LED E27 Ciepła 12W 77W"];
$product->link_rewrite = [$default_lang => "zarowka-led-e27-ciepla-12w-77w"];
$product->price = 9.90;
$product->quantity = 90;
$product->id_category = 19;
$product->id_category_default = 19;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/ZrodlaSwiatla/zarowka-led-e27-ciepla-12w-77w.jpg";
$product->image_url = $url;
$product->description = "Żarówka LED E-27 12W ciepła barwa światła
Nadaj swoim wnętrzom wyjątkowego klimatu, dzięki ledowej żarówce o ciepłej barwie światła. Ciesz się funkcjonalnością żarówek LED E-27 przez bardzo długi czas!
Jakie zalety posiada żarówka?
Jej światło wygląda rewelacyjnie w każdym pomieszczeniu, niezależnie od stylu, w jakim jest urządzone. Ponadto żarówka posiada bardzo niskie zużycie energii – nawet 8/9 razy mniejszy pobór mocy w stosunku do zwykłych żarówek. Dzięki temu zyskujemy około 80-90% oszczędności!
Dodatkową zaletą niskiej emisji ciepła jest mniejsze ryzyko oparzeń, dłuższy czas życia oprawy żarówki oraz nie odbarwianie koloru ścian. Żarówka jest także odporna na uszkodzenia mechanicznie.
Żarówka LED to gwarancja większej niezawodności niż w przypadku zwykłej żarówki. Ledowe żarówki nie posiadają efektu „mrugania”, dzięki czemu wpływają korzystnie na nasze samopoczucie. Dodatkowym atutem żarówki LED jest fakt, że do jej produkcji nie wykorzystuje się żadnych substancji szkodliwych";
$product->add();
$product->save();
$product->addToCategories($product->id_category);
StockAvailable::setQuantity((int)$product->id, 0, $product->quantity, Context::getContext()->shop->id);
$shops = Shop::getShops(true, null, true);
$image = new Image();
$image->id_product = $product->id;
$image->position = Image::getHighestPosition($product->id) + 1;
$image->cover = true;
if (($image->validateFields(false, true)) === true &&
        ($image->validateFieldsLang(false, true)) === true && $image->add())
{
   $image->associateTo($shops);
   MyAdminImportController::copyImg($product->id, $image->id, $url, 'products', false);
}


$product = new Product();
$product->name = [$default_lang => "Żarówka LED GU10 Ciepła Kulka 7W 55W"];
$product->link_rewrite = [$default_lang => "zarowka-led-gu10-ciepla-kulka-7w-55w"];
$product->price = 9.49;
$product->quantity = 90;
$product->id_category = 19;
$product->id_category_default = 19;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/ZrodlaSwiatla/zarowka-led-gu10-ciepla-kulka-7w-55w.jpg";
$product->image_url = $url;
$product->description = "Żarówka LED GU10 7W ciepła barwa światła
Nadaj swoim wnętrzom wyjątkowego klimatu, dzięki ledowej żarówce o ciepłej barwie światła. Ciesz się funkcjonalnością żarówek LED GU10 przez bardzo długi czas!
Jakie zalety posiada żarówka?
Jej światło wygląda rewelacyjnie w każdym pomieszczeniu, niezależnie od stylu, w jakim jest urządzone. Ponadto żarówka posiada bardzo niskie zużycie energii – nawet 8/9 razy mniejszy pobór mocy w stosunku do zwykłych żarówek. Dzięki temu zyskujemy około 80-90% oszczędności!
Dodatkową zaletą niskiej emisji ciepła jest mniejsze ryzyko oparzeń, dłuższy czas życia oprawy żarówki oraz nie odbarwianie koloru ścian. Żarówka jest także odporna na uszkodzenia mechanicznie.
Żarówka LED to gwarancja większej niezawodności niż w przypadku zwykłej żarówki. Ledowe żarówki nie posiadają efektu „mrugania”, dzięki czemu wpływają korzystnie na nasze samopoczucie. Dodatkowym atutem żarówki LED jest fakt, że do jej produkcji nie wykorzystuje się żadnych substancji szkodliwych";
$product->add();
$product->save();
$product->addToCategories($product->id_category);
StockAvailable::setQuantity((int)$product->id, 0, $product->quantity, Context::getContext()->shop->id);
$shops = Shop::getShops(true, null, true);
$image = new Image();
$image->id_product = $product->id;
$image->position = Image::getHighestPosition($product->id) + 1;
$image->cover = true;
if (($image->validateFields(false, true)) === true &&
        ($image->validateFieldsLang(false, true)) === true && $image->add())
{
   $image->associateTo($shops);
   MyAdminImportController::copyImg($product->id, $image->id, $url, 'products', false);
}


$product = new Product();
$product->name = [$default_lang => "Żarówka LED E27 Zimna 12W 77W"];
$product->link_rewrite = [$default_lang => "zarowka-led-e27-zimna-12w-77w"];
$product->price = 11.99;
$product->quantity = 90;
$product->id_category = 19;
$product->id_category_default = 19;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/ZrodlaSwiatla/zarowka-led-e27-zimna-12w-77w.jpg";
$product->image_url = $url;
$product->description = "Żarówka LED E-27 12W zimna barwa światła
Nadaj swoim wnętrzom wyjątkowego klimatu, dzięki ledowej żarówce o zimnej barwie światła. Ciesz się funkcjonalnością żarówek LED E-27 przez bardzo długi czas!
Jakie zalety posiada żarówka?
Jej światło wygląda rewelacyjnie w każdym pomieszczeniu, niezależnie od stylu, w jakim jest urządzone. Ponadto żarówka posiada bardzo niskie zużycie energii – nawet 8/9 razy mniejszy pobór mocy w stosunku do zwykłych żarówek. Dzięki temu zyskujemy około 80-90% oszczędności!
Dodatkową zaletą niskiej emisji ciepła jest mniejsze ryzyko oparzeń, dłuższy czas życia oprawy żarówki oraz nie odbarwianie koloru ścian. Żarówka jest także odporna na uszkodzenia mechanicznie.
Żarówka LED to gwarancja większej niezawodności niż w przypadku zwykłej żarówki. Ledowe żarówki nie posiadają efektu „mrugania”, dzięki czemu wpływają korzystnie na nasze samopoczucie. Dodatkowym atutem żarówki LED jest fakt, że do jej produkcji nie wykorzystuje się żadnych substancji szkodliwych";
$product->add();
$product->save();
$product->addToCategories($product->id_category);
StockAvailable::setQuantity((int)$product->id, 0, $product->quantity, Context::getContext()->shop->id);
$shops = Shop::getShops(true, null, true);
$image = new Image();
$image->id_product = $product->id;
$image->position = Image::getHighestPosition($product->id) + 1;
$image->cover = true;
if (($image->validateFields(false, true)) === true &&
        ($image->validateFieldsLang(false, true)) === true && $image->add())
{
   $image->associateTo($shops);
   MyAdminImportController::copyImg($product->id, $image->id, $url, 'products', false);
}


$product = new Product();
$product->name = [$default_lang => "Żarówka LED GU10 Ciepła Kulka 1,5W 10,5W"];
$product->link_rewrite = [$default_lang => "zarowka-led-gu10-ciepla-kulka-1,5w-10,5w"];
$product->price = 5.99;
$product->quantity = 90;
$product->id_category = 19;
$product->id_category_default = 19;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/ZrodlaSwiatla/zarowka-led-gu10-ciepla-kulka-15w-105w.jpg";
$product->image_url = $url;
$product->description = "Żarówka LED GU10 1,5W ciepła barwa światła
Nadaj swoim wnętrzom wyjątkowego klimatu, dzięki ledowej żarówce o ciepłej barwie światła. Ciesz się funkcjonalnością żarówek LED GU10 przez bardzo długi czas!
Jakie zalety posiada żarówka?
Jej światło wygląda rewelacyjnie w każdym pomieszczeniu, niezależnie od stylu, w jakim jest urządzone. Ponadto żarówka posiada bardzo niskie zużycie energii – nawet 8/9 razy mniejszy pobór mocy w stosunku do zwykłych żarówek. Dzięki temu zyskujemy około 80-90% oszczędności!
Dodatkową zaletą niskiej emisji ciepła jest mniejsze ryzyko oparzeń, dłuższy czas życia oprawy żarówki oraz nie odbarwianie koloru ścian. Żarówka jest także odporna na uszkodzenia mechanicznie.
Żarówka LED to gwarancja większej niezawodności niż w przypadku zwykłej żarówki. Ledowe żarówki nie posiadają efektu „mrugania”, dzięki czemu wpływają korzystnie na nasze samopoczucie. Dodatkowym atutem żarówki LED jest fakt, że do jej produkcji nie wykorzystuje się żadnych substancji szkodliwych.";
$product->add();
$product->save();
$product->addToCategories($product->id_category);
StockAvailable::setQuantity((int)$product->id, 0, $product->quantity, Context::getContext()->shop->id);
$shops = Shop::getShops(true, null, true);
$image = new Image();
$image->id_product = $product->id;
$image->position = Image::getHighestPosition($product->id) + 1;
$image->cover = true;
if (($image->validateFields(false, true)) === true &&
        ($image->validateFieldsLang(false, true)) === true && $image->add())
{
   $image->associateTo($shops);
   MyAdminImportController::copyImg($product->id, $image->id, $url, 'products', false);
}


$product = new Product();
$product->name = [$default_lang => "Żarówka LED GU10 Zimna Kulka 1,5W 10W"];
$product->link_rewrite = [$default_lang => "zarowka-led-gu10-zimna-kulka-1,5w-10w"];
$product->price = 5.99;
$product->quantity = 90;
$product->id_category = 19;
$product->id_category_default = 19;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/ZrodlaSwiatla/zarowka-led-gu10-zimna-kulka-15w-10w.jpg";
$product->image_url = $url;
$product->description = "Żarówka LED GU10 1,5W zimna barwa światła
Nadaj swoim wnętrzom wyjątkowego klimatu, dzięki ledowej żarówce o zimnej barwie światła. Ciesz się funkcjonalnością żarówek LED GU10 przez bardzo długi czas!
Jakie zalety posiada żarówka?
Jej światło wygląda rewelacyjnie w każdym pomieszczeniu, niezależnie od stylu, w jakim jest urządzone. Ponadto żarówka posiada bardzo niskie zużycie energii – nawet 8/9 razy mniejszy pobór mocy w stosunku do zwykłych żarówek. Dzięki temu zyskujemy około 80-90% oszczędności!
Dodatkową zaletą niskiej emisji ciepła jest mniejsze ryzyko oparzeń, dłuższy czas życia oprawy żarówki oraz nie odbarwianie koloru ścian. Żarówka jest także odporna na uszkodzenia mechanicznie.
Żarówka LED to gwarancja większej niezawodności niż w przypadku zwykłej żarówki. Ledowe żarówki nie posiadają efektu „mrugania”, dzięki czemu wpływają korzystnie na nasze samopoczucie. Dodatkowym atutem żarówki LED jest fakt, że do jej produkcji nie wykorzystuje się żadnych substancji szkodliwych.";
$product->add();
$product->save();
$product->addToCategories($product->id_category);
StockAvailable::setQuantity((int)$product->id, 0, $product->quantity, Context::getContext()->shop->id);
$shops = Shop::getShops(true, null, true);
$image = new Image();
$image->id_product = $product->id;
$image->position = Image::getHighestPosition($product->id) + 1;
$image->cover = true;
if (($image->validateFields(false, true)) === true &&
        ($image->validateFieldsLang(false, true)) === true && $image->add())
{
   $image->associateTo($shops);
   MyAdminImportController::copyImg($product->id, $image->id, $url, 'products', false);
}


$product = new Product();
$product->name = [$default_lang => "Żarówka LED GU10 Ciepły Kulka 3W 25W"];
$product->link_rewrite = [$default_lang => "zarowka-led-gu10-cieply-kulka-3w-25w"];
$product->price = 6.99;
$product->quantity = 90;
$product->id_category = 19;
$product->id_category_default = 19;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/ZrodlaSwiatla/zarowka-led-gu10-cieplu-kulka-3w-25w.jpg";
$product->image_url = $url;
$product->description = "Żarówka LED GU10 3W ciepła barwa światła
Nadaj swoim wnętrzom wyjątkowego klimatu, dzięki ledowej żarówce o ciepłej barwie światła. Ciesz się funkcjonalnością żarówek LED GU10 przez bardzo długi czas!
Jakie zalety posiada żarówka?
Jej światło wygląda rewelacyjnie w każdym pomieszczeniu, niezależnie od stylu, w jakim jest urządzone. Ponadto żarówka posiada bardzo niskie zużycie energii – nawet 8/9 razy mniejszy pobór mocy w stosunku do zwykłych żarówek. Dzięki temu zyskujemy około 80-90% oszczędności!
Dodatkową zaletą niskiej emisji ciepła jest mniejsze ryzyko oparzeń, dłuższy czas życia oprawy żarówki oraz nie odbarwianie koloru ścian. Żarówka jest także odporna na uszkodzenia mechanicznie.
Żarówka LED to gwarancja większej niezawodności niż w przypadku zwykłej żarówki. Ledowe żarówki nie posiadają efektu „mrugania”, dzięki czemu wpływają korzystnie na nasze samopoczucie. Dodatkowym atutem żarówki LED jest fakt, że do jej produkcji nie wykorzystuje się żadnych substancji szkodliwych";
$product->add();
$product->save();
$product->addToCategories($product->id_category);
StockAvailable::setQuantity((int)$product->id, 0, $product->quantity, Context::getContext()->shop->id);
$shops = Shop::getShops(true, null, true);
$image = new Image();
$image->id_product = $product->id;
$image->position = Image::getHighestPosition($product->id) + 1;
$image->cover = true;
if (($image->validateFields(false, true)) === true &&
        ($image->validateFieldsLang(false, true)) === true && $image->add())
{
   $image->associateTo($shops);
   MyAdminImportController::copyImg($product->id, $image->id, $url, 'products', false);
}


$product = new Product();
$product->name = [$default_lang => "Żarówka LED GU10 Zimny Kulka 3,5W 25W"];
$product->link_rewrite = [$default_lang => "zarowka-led-gu10-zimny-kulka-3,5w-25w"];
$product->price = 9.29;
$product->quantity = 90;
$product->id_category = 19;
$product->id_category_default = 19;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/ZrodlaSwiatla/zarowka-led-gu10-zimny-kulka-35w-25w.jpg";
$product->image_url = $url;
$product->description = "Żarówka LED GU10 3,5W zimna barwa światła
Nadaj swoim wnętrzom wyjątkowego klimatu, dzięki ledowej żarówce o zimnej barwie światła. Ciesz się funkcjonalnością żarówek LED GU10 przez bardzo długi czas!
Jakie zalety posiada żarówka?
Jej światło wygląda rewelacyjnie w każdym pomieszczeniu, niezależnie od stylu, w jakim jest urządzone. Ponadto żarówka posiada bardzo niskie zużycie energii – nawet 8/9 razy mniejszy pobór mocy w stosunku do zwykłych żarówek. Dzięki temu zyskujemy około 80-90% oszczędności!
Dodatkową zaletą niskiej emisji ciepła jest mniejsze ryzyko oparzeń, dłuższy czas życia oprawy żarówki oraz nie odbarwianie koloru ścian. Żarówka jest także odporna na uszkodzenia mechanicznie.
Żarówka LED to gwarancja większej niezawodności niż w przypadku zwykłej żarówki. Ledowe żarówki nie posiadają efektu „mrugania”, dzięki czemu wpływają korzystnie na nasze samopoczucie. Dodatkowym atutem żarówki LED jest fakt, że do jej produkcji nie wykorzystuje się żadnych substancji szkodliwych";
$product->add();
$product->save();
$product->addToCategories($product->id_category);
StockAvailable::setQuantity((int)$product->id, 0, $product->quantity, Context::getContext()->shop->id);
$shops = Shop::getShops(true, null, true);
$image = new Image();
$image->id_product = $product->id;
$image->position = Image::getHighestPosition($product->id) + 1;
$image->cover = true;
if (($image->validateFields(false, true)) === true &&
        ($image->validateFieldsLang(false, true)) === true && $image->add())
{
   $image->associateTo($shops);
   MyAdminImportController::copyImg($product->id, $image->id, $url, 'products', false);
}


$product = new Product();
$product->name = [$default_lang => "Żarówka LED E14 Ciepły Kulka 5W 35W"];
$product->link_rewrite = [$default_lang => "zarowka-led-e14-cieply-kulka-5w-35w"];
$product->price = 9.99;
$product->quantity = 90;
$product->id_category = 19;
$product->id_category_default = 19;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/ZrodlaSwiatla/zarowka-led-e14-cieply-kulka-5w-35w.jpg";
$product->image_url = $url;
$product->description = "Żarówka LED E-14 5W ciepła barwa światła
Nadaj swoim wnętrzom wyjątkowego klimatu, dzięki ledowej żarówce o ciepłej barwie światła. Ciesz się funkcjonalnością żarówek LED E-14 przez bardzo długi czas!
Jakie zalety posiada żarówka?
Jej światło wygląda rewelacyjnie w każdym pomieszczeniu, niezależnie od stylu, w jakim jest urządzone. Ponadto żarówka posiada bardzo niskie zużycie energii – nawet 8/9 razy mniejszy pobór mocy w stosunku do zwykłych żarówek. Dzięki temu zyskujemy około 80-90% oszczędności!
Dodatkową zaletą niskiej emisji ciepła jest mniejsze ryzyko oparzeń, dłuższy czas życia oprawy żarówki oraz nie odbarwianie koloru ścian. Żarówka jest także odporna na uszkodzenia mechanicznie.
Żarówka LED to gwarancja większej niezawodności niż w przypadku zwykłej żarówki. Ledowe żarówki nie posiadają efektu „mrugania”, dzięki czemu wpływają korzystnie na nasze samopoczucie. Dodatkowym atutem żarówki LED jest fakt, że do jej produkcji nie wykorzystuje się żadnych substancji szkodliwych";
$product->add();
$product->save();
$product->addToCategories($product->id_category);
StockAvailable::setQuantity((int)$product->id, 0, $product->quantity, Context::getContext()->shop->id);
$shops = Shop::getShops(true, null, true);
$image = new Image();
$image->id_product = $product->id;
$image->position = Image::getHighestPosition($product->id) + 1;
$image->cover = true;
if (($image->validateFields(false, true)) === true &&
        ($image->validateFieldsLang(false, true)) === true && $image->add())
{
   $image->associateTo($shops);
   MyAdminImportController::copyImg($product->id, $image->id, $url, 'products', false);
}


$product = new Product();
$product->name = [$default_lang => "Żarówka LED E27 Zimna Kulka 4W 35W"];
$product->link_rewrite = [$default_lang => "zarowka-led-e27-zimna-kulka-4w-35w"];
$product->price = 10.75;
$product->quantity = 90;
$product->id_category = 19;
$product->id_category_default = 19;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/ZrodlaSwiatla/zarowka-led-e27-zimna-kulka-4w-35w.jpg";
$product->image_url = $url;
$product->description = "Żarówka LED E-27 4W zimna barwa światła
Nadaj swoim wnętrzom wyjątkowego klimatu, dzięki ledowej żarówce o zimnej barwie światła. Ciesz się funkcjonalnością żarówek LED E-27 przez bardzo długi czas!
Jakie zalety posiada żarówka?
Jej światło wygląda rewelacyjnie w każdym pomieszczeniu, niezależnie od stylu, w jakim jest urządzone. Ponadto żarówka posiada bardzo niskie zużycie energii – nawet 8/9 razy mniejszy pobór mocy w stosunku do zwykłych żarówek. Dzięki temu zyskujemy około 80-90% oszczędności!
Dodatkową zaletą niskiej emisji ciepła jest mniejsze ryzyko oparzeń, dłuższy czas życia oprawy żarówki oraz nie odbarwianie koloru ścian. Żarówka jest także odporna na uszkodzenia mechanicznie.
Żarówka LED to gwarancja większej niezawodności niż w przypadku zwykłej żarówki. Ledowe żarówki nie posiadają efektu „mrugania”, dzięki czemu wpływają korzystnie na nasze samopoczucie. Dodatkowym atutem żarówki LED jest fakt, że do jej produkcji nie wykorzystuje się żadnych substancji szkodliwych";
$product->add();
$product->save();
$product->addToCategories($product->id_category);
StockAvailable::setQuantity((int)$product->id, 0, $product->quantity, Context::getContext()->shop->id);
$shops = Shop::getShops(true, null, true);
$image = new Image();
$image->id_product = $product->id;
$image->position = Image::getHighestPosition($product->id) + 1;
$image->cover = true;
if (($image->validateFields(false, true)) === true &&
        ($image->validateFieldsLang(false, true)) === true && $image->add())
{
   $image->associateTo($shops);
   MyAdminImportController::copyImg($product->id, $image->id, $url, 'products', false);
}


$product = new Product();
$product->name = [$default_lang => "Żarówka LED GU10 Zimny Kulka 7W 50W"];
$product->link_rewrite = [$default_lang => "zarowka-led-gu10-zimny-kulka-7w-50w"];
$product->price = 9.49;
$product->quantity = 90;
$product->id_category = 19;
$product->id_category_default = 19;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/ZrodlaSwiatla/zarowka-led-gu10-zimny-kulka-7w-50w.jpg";
$product->image_url = $url;
$product->description = "Żarówka LED GU10 7W zimna barwa światła
Nadaj swoim wnętrzom wyjątkowego klimatu, dzięki ledowej żarówce o zimnej barwie światła. Ciesz się funkcjonalnością żarówek LED GU10 przez bardzo długi czas!
Jakie zalety posiada żarówka?
Jej światło wygląda rewelacyjnie w każdym pomieszczeniu, niezależnie od stylu, w jakim jest urządzone. Ponadto żarówka posiada bardzo niskie zużycie energii – nawet 8/9 razy mniejszy pobór mocy w stosunku do zwykłych żarówek. Dzięki temu zyskujemy około 80-90% oszczędności!
Dodatkową zaletą niskiej emisji ciepła jest mniejsze ryzyko oparzeń, dłuższy czas życia oprawy żarówki oraz nie odbarwianie koloru ścian. Żarówka jest także odporna na uszkodzenia mechanicznie.
Żarówka LED to gwarancja większej niezawodności niż w przypadku zwykłej żarówki. Ledowe żarówki nie posiadają efektu „mrugania”, dzięki czemu wpływają korzystnie na nasze samopoczucie. Dodatkowym atutem żarówki LED jest fakt, że do jej produkcji nie wykorzystuje się żadnych substancji szkodliwych";
$product->add();
$product->save();
$product->addToCategories($product->id_category);
StockAvailable::setQuantity((int)$product->id, 0, $product->quantity, Context::getContext()->shop->id);
$shops = Shop::getShops(true, null, true);
$image = new Image();
$image->id_product = $product->id;
$image->position = Image::getHighestPosition($product->id) + 1;
$image->cover = true;
if (($image->validateFields(false, true)) === true &&
        ($image->validateFieldsLang(false, true)) === true && $image->add())
{
   $image->associateTo($shops);
   MyAdminImportController::copyImg($product->id, $image->id, $url, 'products', false);
}


$product = new Product();
$product->name = [$default_lang => "Żarówka LED G9 Zimny 3W 24W"];
$product->link_rewrite = [$default_lang => "zarowka-led-g9-zimny-3w-24w"];
$product->price = 13.99;
$product->quantity = 90;
$product->id_category = 19;
$product->id_category_default = 19;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/ZrodlaSwiatla/zarowka-led-g9-zimny-3w-24w.jpg";
$product->image_url = $url;
$product->description = "Żarówka LED G9 3W zimna barwa światła
Nadaj swoim wnętrzom wyjątkowego klimatu, dzięki ledowej żarówce o zimnej barwie światła. Ciesz się funkcjonalnością żarówek LED G9 przez bardzo długi czas!
Jakie zalety posiada żarówka?
Jej światło wygląda rewelacyjnie w każdym pomieszczeniu, niezależnie od stylu, w jakim jest urządzone. Ponadto żarówka posiada bardzo niskie zużycie energii – nawet 8/9 razy mniejszy pobór mocy w stosunku do zwykłych żarówek. Dzięki temu zyskujemy około 80-90% oszczędności!
Dodatkową zaletą niskiej emisji ciepła jest mniejsze ryzyko oparzeń, dłuższy czas życia oprawy żarówki oraz nie odbarwianie koloru ścian. Żarówka jest także odporna na uszkodzenia mechanicznie.
Żarówka LED to gwarancja większej niezawodności niż w przypadku zwykłej żarówki. Ledowe żarówki nie posiadają efektu „mrugania”, dzięki czemu wpływają korzystnie na nasze samopoczucie. Dodatkowym atutem żarówki LED jest fakt, że do jej produkcji nie wykorzystuje się żadnych substancji szkodliwych";
$product->add();
$product->save();
$product->addToCategories($product->id_category);
StockAvailable::setQuantity((int)$product->id, 0, $product->quantity, Context::getContext()->shop->id);
$shops = Shop::getShops(true, null, true);
$image = new Image();
$image->id_product = $product->id;
$image->position = Image::getHighestPosition($product->id) + 1;
$image->cover = true;
if (($image->validateFields(false, true)) === true &&
        ($image->validateFieldsLang(false, true)) === true && $image->add())
{
   $image->associateTo($shops);
   MyAdminImportController::copyImg($product->id, $image->id, $url, 'products', false);
}


$product = new Product();
$product->name = [$default_lang => "Żarówka Dekoracyjna Edison Duża Kula 40W"];
$product->link_rewrite = [$default_lang => "zarowka-dekoracyjna-edison-duza-kula-40w"];
$product->price = 25.90;
$product->quantity = 90;
$product->id_category = 19;
$product->id_category_default = 19;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/ZrodlaSwiatla/zarowka-dekoracyjna-edison-duza-kula-40w.jpg";
$product->image_url = $url;
$product->description = "Żarówka dekoracyjna Edison 40W
Żarówka, która nada Twoim pomieszczeniom wyjątkowego klimatu. Światło prezentowanej żarówki jest ciepłe, przyjazne dla ludzkiego oka, a ponadto ma właściwości kojące.
Do jakich wnętrz pasować będzie wyjątkowe światło żarówki?
Żarówka Edison może być wykorzystana wszędzie tam, gdzie chcemy osiągnąć wyjątkowy klimat i magiczny nastrój. Światło ma działanie podobne do blasku świec czy płonącego kominka, przez co idealnie wkomponuje się w aranżacje retro bądź vintage. Polecamy zamienne stosowanie różnych kształtów żarówek, by uzyskać idealny efekt dekoracyjny.
Jakie zalety posiada dekoracyjna żarówka?
Żarówka jest oparta na węglowych żarnikach, przez co przypomina wzór pierwszych żarówek.
Oświetlenie znajdzie zastosowanie we wnętrzach LOFT, lampach industrialnych. Moc żarówki wynosi 40W, a jej gwint to E-27.";
$product->add();
$product->save();
$product->addToCategories($product->id_category);
StockAvailable::setQuantity((int)$product->id, 0, $product->quantity, Context::getContext()->shop->id);
$shops = Shop::getShops(true, null, true);
$image = new Image();
$image->id_product = $product->id;
$image->position = Image::getHighestPosition($product->id) + 1;
$image->cover = true;
if (($image->validateFields(false, true)) === true &&
        ($image->validateFieldsLang(false, true)) === true && $image->add())
{
   $image->associateTo($shops);
   MyAdminImportController::copyImg($product->id, $image->id, $url, 'products', false);
}


$product = new Product();
$product->name = [$default_lang => "Żarówka LED 4W Ciepła Kulka SMOKE Dekoracyjna"];
$product->link_rewrite = [$default_lang => "zarowka-led-4w-ciepla-kulka-smoke-dekoracyjna"];
$product->price = 29.00;
$product->quantity = 90;
$product->id_category = 19;
$product->id_category_default = 19;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/ZrodlaSwiatla/zarowka-led-4w-ciepla-kulka-smoke-dekoracyjna.jpg";
$product->image_url = $url;
$product->description = "Żarówka dekoracyjna LED 4W Ciepła
Żarówka, która nada Twoim pomieszczeniom wyjątkowego klimatu. Światło prezentowanej żarówki jest ciepłe, przyjazne dla ludzkiego oka, a ponadto ma właściwości kojące.
Do jakich wnętrz pasować będzie wyjątkowe światło żarówki?
Żarówka Edison może być wykorzystana wszędzie tam, gdzie chcemy osiągnąć wyjątkowy klimat i magiczny nastrój. Światło ma działanie podobne do blasku świec czy płonącego kominka, przez co idealnie wkomponuje się w aranżacje retro bądź vintage. Polecamy zamienne stosowanie różnych kształtów żarówek, by uzyskać idealny efekt dekoracyjny.
Jakie zalety posiada dekoracyjna żarówka?
Żarówka jest oparta na węglowych żarnikach, przez co przypomina wzór pierwszych żarówek.
Oświetlenie znajdzie zastosowanie we wnętrzach LOFT, lampach industrialnych. Moc żarówki wynosi 4W, a jej gwint to E-27.";
$product->add();
$product->save();
$product->addToCategories($product->id_category);
StockAvailable::setQuantity((int)$product->id, 0, $product->quantity, Context::getContext()->shop->id);
$shops = Shop::getShops(true, null, true);
$image = new Image();
$image->id_product = $product->id;
$image->position = Image::getHighestPosition($product->id) + 1;
$image->cover = true;
if (($image->validateFields(false, true)) === true &&
        ($image->validateFieldsLang(false, true)) === true && $image->add())
{
   $image->associateTo($shops);
   MyAdminImportController::copyImg($product->id, $image->id, $url, 'products', false);
}


$product = new Product();
$product->name = [$default_lang => "Żarówka Dekoracyjna LED Globe 95 Edison 2W"];
$product->link_rewrite = [$default_lang => "zarowka-dekoracyjna-led-globe-95-edison-2w"];
$product->price = 26.00;
$product->quantity = 90;
$product->id_category = 19;
$product->id_category_default = 19;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/ZrodlaSwiatla/zarowka-dekoracyjna-led-globe-95-2w.jpg";
$product->image_url = $url;
$product->description = "Żarówka dekoracyjna LED Globe
Żarówka, która nada Twoim pomieszczeniom wyjątkowego klimatu. Światło prezentowanej żarówki jest ciepłe, przyjazne dla ludzkiego oka, a ponadto ma właściwości kojące.
Do jakich wnętrz pasować będzie wyjątkowe światło żarówki?
Żarówka Edison może być wykorzystana wszędzie tam, gdzie chcemy osiągnąć wyjątkowy klimat i magiczny nastrój. Światło ma działanie podobne do blasku świec czy płonącego kominka, przez co idealnie wkomponuje się w aranżacje retro bądź vintage. Polecamy zamienne stosowanie różnych kształtów żarówek, by uzyskać idealny efekt dekoracyjny.
Jakie zalety posiada dekoracyjna żarówka?
Żarówka jest oparta na węglowych żarnikach, przez co przypomina wzór pierwszych żarówek.
Oświetlenie znajdzie zastosowanie we wnętrzach LOFT, lampach industrialnych. Moc żarówki wynosi 1,8W, a jej gwint to E-27.";
$product->add();
$product->save();
$product->addToCategories($product->id_category);
StockAvailable::setQuantity((int)$product->id, 0, $product->quantity, Context::getContext()->shop->id);
$shops = Shop::getShops(true, null, true);
$image = new Image();
$image->id_product = $product->id;
$image->position = Image::getHighestPosition($product->id) + 1;
$image->cover = true;
if (($image->validateFields(false, true)) === true &&
        ($image->validateFieldsLang(false, true)) === true && $image->add())
{
   $image->associateTo($shops);
   MyAdminImportController::copyImg($product->id, $image->id, $url, 'products', false);
}


$product = new Product();
$product->name = [$default_lang => "Żarówka LED Filament E14 C37 Ciepła 4W 35W"];
$product->link_rewrite = [$default_lang => "zarowka-led-filament-e14-c37-ciepla-4w-35w"];
$product->price = 11.99;
$product->quantity = 90;
$product->id_category = 19;
$product->id_category_default = 19;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/ZrodlaSwiatla/zarowka-led-filament-e14-c37-ciepla-4w-35w.jpg";
$product->image_url = $url;
$product->description = "Żarówka LED Filament 4W Ciepła Barwa
Żarówka LED, która nada Twoim wnętrzom niepowtarzalnego klimatu. Światło żarówki jest przyjemne dla ludzkiego oka oraz charakteryzuje się wysokim współczynnikiem oddawania barw, przez co pełni role dekoracyjne w pomieszczeniu.
Jakie zalety posiada żarówka LED Filament?
Żarówka może być wykorzystana wszędzie tam, gdzie chcemy osiągnąć wyjątkowy klimat i magiczny nastrój. Świetnie prezentuje się we wnętrzach LOFT, lampach industrialnych i dekoracyjnych.
Źródło światła posiada bardzo niskie zużycie energii – nawet 8/9 razy mniejszy pobór mocy w stosunku do zwykłych żarówek. Dzięki temu zyskujemy około 80-90% oszczędności!
Żarówka LED może pracować od 15 do nawet 30 razy dłużej niż tradycyjna żarówka. Innymi zaletami źródła światła LED Filament jest niska emisja ciepła, mniejsze ryzyko oparzeń oraz nie odbarwianie koloru ścian. Żarówka jest także odporna na uszkodzenia mechanicznie.
Źródła zasilania LED Filament są również ekologiczne, ponieważ nie posiadają rtęci ani żadnych substancji szkodliwych dla środowiska.";
$product->add();
$product->save();
$product->addToCategories($product->id_category);
StockAvailable::setQuantity((int)$product->id, 0, $product->quantity, Context::getContext()->shop->id);
$shops = Shop::getShops(true, null, true);
$image = new Image();
$image->id_product = $product->id;
$image->position = Image::getHighestPosition($product->id) + 1;
$image->cover = true;
if (($image->validateFields(false, true)) === true &&
        ($image->validateFieldsLang(false, true)) === true && $image->add())
{
   $image->associateTo($shops);
   MyAdminImportController::copyImg($product->id, $image->id, $url, 'products', false);
}


$product = new Product();
$product->name = [$default_lang => "Żarówka LED E27 Ciepła 4W 35W C37 Świeczka"];
$product->link_rewrite = [$default_lang => "zarowka-led-e27-ciepla-4w-35w-c37-swieczka"];
$product->price = 11.99;
$product->quantity = 90;
$product->id_category = 19;
$product->id_category_default = 19;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/ZrodlaSwiatla/zarowka-led-e27-ciepla-4w-35w-c37-swieczka.jpg";
$product->image_url = $url;
$product->description = "Żarówka LED Filament 4W Ciepła Barwa
Żarówka LED, która nada Twoim wnętrzom niepowtarzalnego klimatu. Światło żarówki jest przyjemne dla ludzkiego oka oraz charakteryzuje się wysokim współczynnikiem oddawania barw, przez co pełni role dekoracyjne w pomieszczeniu.
Jakie zalety posiada żarówka LED Filament?
Żarówka może być wykorzystana wszędzie tam, gdzie chcemy osiągnąć wyjątkowy klimat i magiczny nastrój. Świetnie prezentuje się we wnętrzach LOFT, lampach industrialnych i dekoracyjnych.
Źródło światła posiada bardzo niskie zużycie energii – nawet 8/9 razy mniejszy pobór mocy w stosunku do zwykłych żarówek. Dzięki temu zyskujemy około 80-90% oszczędności!
Żarówka LED może pracować od 15 do nawet 30 razy dłużej niż tradycyjna żarówka. Innymi zaletami źródła światła LED Filament jest niska emisja ciepła, mniejsze ryzyko oparzeń oraz nie odbarwianie koloru ścian. Żarówka jest także odporna na uszkodzenia mechanicznie.
Źródła zasilania LED Filament są również ekologiczne, ponieważ nie posiadają rtęci ani żadnych substancji szkodliwych dla środowiska.";
$product->add();
$product->save();
$product->addToCategories($product->id_category);
StockAvailable::setQuantity((int)$product->id, 0, $product->quantity, Context::getContext()->shop->id);
$shops = Shop::getShops(true, null, true);
$image = new Image();
$image->id_product = $product->id;
$image->position = Image::getHighestPosition($product->id) + 1;
$image->cover = true;
if (($image->validateFields(false, true)) === true &&
        ($image->validateFieldsLang(false, true)) === true && $image->add())
{
   $image->associateTo($shops);
   MyAdminImportController::copyImg($product->id, $image->id, $url, 'products', false);
}


$product = new Product();
$product->name = [$default_lang => "Żarówka LED Filament E14 G45 Ciepła 4W 35W"];
$product->link_rewrite = [$default_lang => "zarowka-led-filament-e14-g45-ciepla"];
$product->price = 10.99;
$product->quantity = 90;
$product->id_category = 19;
$product->id_category_default = 19;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/ZrodlaSwiatla/zarowka-led-filament-e14-g45-ciepla-4w-35w.jpg";
$product->image_url = $url;
$product->description = "Żarówka LED Filament 4W Ciepła Barwa
Żarówka LED, która nada Twoim wnętrzom niepowtarzalnego klimatu. Światło żarówki jest przyjemne dla ludzkiego oka oraz charakteryzuje się wysokim współczynnikiem oddawania barw, przez co pełni role dekoracyjne w pomieszczeniu.
Jakie zalety posiada żarówka LED Filament?
Żarówka może być wykorzystana wszędzie tam, gdzie chcemy osiągnąć wyjątkowy klimat i magiczny nastrój. Świetnie prezentuje się we wnętrzach LOFT, lampach industrialnych i dekoracyjnych.
Źródło światła posiada bardzo niskie zużycie energii – nawet 8/9 razy mniejszy pobór mocy w stosunku do zwykłych żarówek. Dzięki temu zyskujemy około 80-90% oszczędności!
Żarówka LED może pracować od 15 do nawet 30 razy dłużej niż tradycyjna żarówka. Innymi zaletami źródła światła LED Filament jest niska emisja ciepła, mniejsze ryzyko oparzeń oraz nie odbarwianie koloru ścian. Żarówka jest także odporna na uszkodzenia mechanicznie.
Źródła zasilania LED Filament są również ekologiczne, ponieważ nie posiadają rtęci ani żadnych substancji szkodliwych dla środowiska.";
$product->add();
$product->save();
$product->addToCategories($product->id_category);
StockAvailable::setQuantity((int)$product->id, 0, $product->quantity, Context::getContext()->shop->id);
$shops = Shop::getShops(true, null, true);
$image = new Image();
$image->id_product = $product->id;
$image->position = Image::getHighestPosition($product->id) + 1;
$image->cover = true;
if (($image->validateFields(false, true)) === true &&
        ($image->validateFieldsLang(false, true)) === true && $image->add())
{
   $image->associateTo($shops);
   MyAdminImportController::copyImg($product->id, $image->id, $url, 'products', false);
}


$product = new Product();
$product->name = [$default_lang => "Żarówka LED Filament E27 4W Ozdobna G45"];
$product->link_rewrite = [$default_lang => "zarowka-led-filament-e27-4w-ozdobna-g45"];
$product->price = 11.99;
$product->quantity = 90;
$product->id_category = 19;
$product->id_category_default = 19;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/ZrodlaSwiatla/zarowka-led-filament-e27-4w-ozdobna-g45.jpg";
$product->image_url = $url;
$product->description = "Żarówka LED Filament 4W Ciepła Barwa
Żarówka LED, która nada Twoim wnętrzom niepowtarzalnego klimatu. Światło żarówki jest przyjemne dla ludzkiego oka oraz charakteryzuje się wysokim współczynnikiem oddawania barw, przez co pełni role dekoracyjne w pomieszczeniu.
Jakie zalety posiada żarówka LED Filament?
Żarówka może być wykorzystana wszędzie tam, gdzie chcemy osiągnąć wyjątkowy klimat i magiczny nastrój. Świetnie prezentuje się we wnętrzach LOFT, lampach industrialnych i dekoracyjnych.
Źródło światła posiada bardzo niskie zużycie energii – nawet 8/9 razy mniejszy pobór mocy w stosunku do zwykłych żarówek. Dzięki temu zyskujemy około 80-90% oszczędności!
Żarówka LED może pracować od 15 do nawet 30 razy dłużej niż tradycyjna żarówka. Innymi zaletami źródła światła LED Filament jest niska emisja ciepła, mniejsze ryzyko oparzeń oraz nie odbarwianie koloru ścian. Żarówka jest także odporna na uszkodzenia mechanicznie.
Źródła zasilania LED Filament są również ekologiczne, ponieważ nie posiadają rtęci ani żadnych substancji szkodliwych dla środowiska.";
$product->add();
$product->save();
$product->addToCategories($product->id_category);
StockAvailable::setQuantity((int)$product->id, 0, $product->quantity, Context::getContext()->shop->id);
$shops = Shop::getShops(true, null, true);
$image = new Image();
$image->id_product = $product->id;
$image->position = Image::getHighestPosition($product->id) + 1;
$image->cover = true;
if (($image->validateFields(false, true)) === true &&
        ($image->validateFieldsLang(false, true)) === true && $image->add())
{
   $image->associateTo($shops);
   MyAdminImportController::copyImg($product->id, $image->id, $url, 'products', false);
}


$product = new Product();
$product->name = [$default_lang => "Żarówka LED E14 Zimna Kulka 3W 25W"];
$product->link_rewrite = [$default_lang => "zarowka-led-e14-zimna-kulka-3w-25w"];
$product->price = 6.99;
$product->quantity = 90;
$product->id_category = 19;
$product->id_category_default = 19;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/ZrodlaSwiatla/zarowka-led-e14-cieply-kulka-5w-35w.jpg";
$product->image_url = $url;
$product->description = "Żarówka LED E14 Zimna Barwa 3W 25W
Oświetl swoje wnętrza energooszczędnymi żarówkami LED. Ekologiczne i bezpieczne źródła zasilania do najlepszy wybór dla Twojego domu.
Jakie zalety posiada żarówka LED E14?
Zimna barwa światła sprzyja koncentracji i skupieniu. Dlatego prezentowana żarówka idealnie sprawdzi się do oświetlenia biurka, blatu kuchni i wszystkich innych miejsc, gdzie wykonujesz nieco bardziej wymagające czynności. Żarówki LED pobierają 8-9 razy mniej prądu niż tradycyjne źródła światła. Dzięki nim możesz zyskać aż 80-90% oszczędności!
Niska emisja ciepła sprawia, że ryzyko oparzeń żarówką jest mniejsze. Źródło światła LED jest również odporne na uszkodzenia mechaniczne, nie odbarwia ścian oraz charakteryzuje się długim czasem życia oprawy.
Do produkcji żarówek LED nie wykorzystuje się żadnych substancji szkodliwych. Są bardziej niezawodne, bezpieczne i funkcjonalne niż tradycyjne źródła zasilania. Żarówka posiada gwint E14, który pasuje do większości lamp.";
$product->add();
$product->save();
$product->addToCategories($product->id_category);
StockAvailable::setQuantity((int)$product->id, 0, $product->quantity, Context::getContext()->shop->id);
$shops = Shop::getShops(true, null, true);
$image = new Image();
$image->id_product = $product->id;
$image->position = Image::getHighestPosition($product->id) + 1;
$image->cover = true;
if (($image->validateFields(false, true)) === true &&
        ($image->validateFieldsLang(false, true)) === true && $image->add())
{
   $image->associateTo($shops);
   MyAdminImportController::copyImg($product->id, $image->id, $url, 'products', false);
}


$product = new Product();
$product->name = [$default_lang => "Żarówka LED GU10 Zimna Kulka 3W 25W"];
$product->link_rewrite = [$default_lang => "zarowka-led-gu10-zimna-kulka-3w-25w"];
$product->price = 6.99;
$product->quantity = 90;
$product->id_category = 19;
$product->id_category_default = 19;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/ZrodlaSwiatla/zarowka-led-gu10-cieplu-kulka-3w-25w.jpg";
$product->image_url = $url;
$product->description = "Żarówka LED GU10 Zimna Barwa Światła 3W 25W
Oświetl swoje wnętrza wysokiej jakości żarówkami LED GU10. Żarówka o mocy 3W i zimnej barwie światła nada się do każdego rodzaju pomieszczenia.
Jakie atuty posiada żarówka LED GU10?
Żarówka charakteryzuje się niskim poborem prądu, nawet 8-9 razy mniejszym niż zwykłe źródła zasilania. Sprawia to, że zyskujesz aż 80-90% oszczędności.
Żarówka LED GU10 jest również bardziej trwała i odporna na uszkodzenia mechaniczna niż tradycyjne źródła światła. Niska emisja ciepła zmniejsza ryzyko oparzeń. Żarówka nie odbarwia ścian, a jej oprawa jest niezwykle trwała.
Żarówka GU10 LED jest ekologiczna, ponieważ nie wykorzystano do jej produkcji żadnych szkodliwych materiałów. Prezentowane źródła światła nie posiada efektu „mrugania”, co pozytywnie wpływa na nasze samopoczucie.";
$product->add();
$product->save();
$product->addToCategories($product->id_category);
StockAvailable::setQuantity((int)$product->id, 0, $product->quantity, Context::getContext()->shop->id);
$shops = Shop::getShops(true, null, true);
$image = new Image();
$image->id_product = $product->id;
$image->position = Image::getHighestPosition($product->id) + 1;
$image->cover = true;
if (($image->validateFields(false, true)) === true &&
        ($image->validateFieldsLang(false, true)) === true && $image->add())
{
   $image->associateTo($shops);
   MyAdminImportController::copyImg($product->id, $image->id, $url, 'products', false);
}


$product = new Product();
$product->name = [$default_lang => "Żarówka LED E14 Ciepła Kulka 3W 25W"];
$product->link_rewrite = [$default_lang => "zarowka-led-e14-ciepla-kulka-3w-25w"];
$product->price = 6.99;
$product->quantity = 90;
$product->id_category = 19;
$product->id_category_default = 19;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/ZrodlaSwiatla/zarowka-led-e14-cieply-kulka-5w-35w.jpg";
$product->image_url = $url;
$product->description = "Żarówka LED E14 Ciepła 3W 25W
Dodaj swoim wnętrzom wyjątkowego klimatu! Ciepła barwa światła żarówki E14 sprawia, że pomieszczenia wyglądają magicznie i nastrojowo.
Jakie atuty posiada żarówka E14 LED?
Żarówka pobiera 8-9 razy mniej prądu niż tradycyjne źródła światła, dzięki czemu zyskujesz nawet 80-90% oszczędności.
Prezentowana żarówka charakteryzuje się długim czasem życia oprawy oraz odpornością na uszkodzenia mechaniczne. Ryzyko oparzeń spada, dzięki niskiej emisji ciepła.
Ponadto żarówka LED E14 jest ekologiczna. Do jej produkcji nie wykorzystuje się materiałów szkodliwych dla środowiska. Gwint E14 pasuje do większości rodzajów lamp. Oświetl swój dom żarówkami LED i ciesz się ich niezawodnością oraz energooszczędnością.";
$product->add();
$product->save();
$product->addToCategories($product->id_category);
StockAvailable::setQuantity((int)$product->id, 0, $product->quantity, Context::getContext()->shop->id);
$shops = Shop::getShops(true, null, true);
$image = new Image();
$image->id_product = $product->id;
$image->position = Image::getHighestPosition($product->id) + 1;
$image->cover = true;
if (($image->validateFields(false, true)) === true &&
        ($image->validateFieldsLang(false, true)) === true && $image->add())
{
   $image->associateTo($shops);
   MyAdminImportController::copyImg($product->id, $image->id, $url, 'products', false);
}


$product = new Product();
$product->name = [$default_lang => "Żarówka LED E14 Ciepła Kulka 7W 55W"];
$product->link_rewrite = [$default_lang => "zarowka-led-e14-ciepla-kulka-7w-55w"];
$product->price = 8.99;
$product->quantity = 90;
$product->id_category = 19;
$product->id_category_default = 19;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/ZrodlaSwiatla/zarowka-led-e14-cieply-kulka-5w-35w.jpg";
$product->image_url = $url;
$product->description = "Żarówka LED E14 Ciepła Barwa 7W 55W
Oświetl swój dom praktycznymi i energooszczędnymi żarówkami LED. Moc żarówki 7W - odpowiednik 55W znakomicie oświetli pomieszczenia zarówno o małej jak i dużej powierzchni.
Jakie zalety posiada żarówka LED E14?
Żarówki LED są niezwykle energooszczędne. Pobierają aż 8-9 razy mniej prądu niż tradycyjne żarówki. Dzięki nim zyskasz aż 80-90% oszczędności.
Prezentowana żarówka jest odporna na uszkodzenia mechaniczne i nie odbarwia koloru ścian. Niskie zużycie energii przyczynia się do zmniejszenia ryzyka oparzeń.
Żarówka E14 LED jest ekologiczna – do jej produkcji nie wykorzystuje się materiałów szkodliwych dla środowiska. Gwint E14 pasuje do większości lamp.";
$product->add();
$product->save();
$product->addToCategories($product->id_category);
StockAvailable::setQuantity((int)$product->id, 0, $product->quantity, Context::getContext()->shop->id);
$shops = Shop::getShops(true, null, true);
$image = new Image();
$image->id_product = $product->id;
$image->position = Image::getHighestPosition($product->id) + 1;
$image->cover = true;
if (($image->validateFields(false, true)) === true &&
        ($image->validateFieldsLang(false, true)) === true && $image->add())
{
   $image->associateTo($shops);
   MyAdminImportController::copyImg($product->id, $image->id, $url, 'products', false);
}


$product = new Product();
$product->name = [$default_lang => "Żarówka LED E14 Zimna Kulka 7W 55W"];
$product->link_rewrite = [$default_lang => "zarowka-led-e14-zimna-kulka-7w-55w"];
$product->price = 8.99;
$product->quantity = 90;
$product->id_category = 19;
$product->id_category_default = 19;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/ZrodlaSwiatla/zarowka-led-e14-cieply-kulka-5w-35w.jpg";
$product->image_url = $url;
$product->description = "Żarówka LED E14 Zimna Barwa Światła 7W 55W
Spraw, by Twoje wnętrza wyglądały magicznie i stylowo! Żarówka LED o zimnej barwie światła wygląda rewelacyjnie w każdym wnętrzu.
Jakie atuty posiada żarówka LED E14?
Żarówka LED charakteryzuje się niezwykle niskim zużyciem energii. 8-9 razy mniejszy pobór mocy niż tradycyjna żarówka. Wybierając źródła zasilania LED zyskujesz aż 80-90# oszczędności!
Dodatkową zaletą niskiego zużycia energii jest mniejsze ryzyko oparzeń. Ponadto żarówka LED jest odporna na uszkodzenia mechaniczne i nie odbarwia ścian.
Prezentowana żarówka pozbawiona jest efektu „mrugania”, co polepsza nasze samopoczucie. Źródła światła LED są ekologiczne, ponieważ wykonane z materiałów, które nie szkodzą środowisku.";
$product->add();
$product->save();
$product->addToCategories($product->id_category);
StockAvailable::setQuantity((int)$product->id, 0, $product->quantity, Context::getContext()->shop->id);
$shops = Shop::getShops(true, null, true);
$image = new Image();
$image->id_product = $product->id;
$image->position = Image::getHighestPosition($product->id) + 1;
$image->cover = true;
if (($image->validateFields(false, true)) === true &&
        ($image->validateFieldsLang(false, true)) === true && $image->add())
{
   $image->associateTo($shops);
   MyAdminImportController::copyImg($product->id, $image->id, $url, 'products', false);
}


$product = new Product();
$product->name = [$default_lang => "Żarówka LED E27 Neutralna 10W 90W"];
$product->link_rewrite = [$default_lang => "zarowka-led-e27-neutralna-10w-90w"];
$product->price = 8.90;
$product->quantity = 90;
$product->id_category = 19;
$product->id_category_default = 19;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/ZrodlaSwiatla/zarowka-led-e27-neutralna-10w-60w.jpg";
$product->image_url = $url;
$product->description = "Żarówka LED E27 Neutralna Barwa 10W 90W
Ciesz się wspaniale rozświetlonymi wnętrzami dzięki żarówce ledowej o neutralnej barwie światła. Funkcjonalna i energooszczędna żarówka LED będzie oświetlać Twoje mieszkanie przez bardzo długi czas!
Jakie zalety posiadają żarówki ledowe?
Największym atutem żarówek LED jest ich energooszczędność. Zużywają nawet 8-9 razy mniej energii niż tradycyjne żarówki. Pozwala to uzyskać 80% do 90% oszczędności!
Neutralna barwa światła jest znakomitym rozwiązaniem dla pomieszczeń, w których nie stawiamy ani na pracę ani na odpoczynek, na przykład: przedpokój.
Niska emisja ciepła żarówek LED wiąże się z mniejszym ryzykiem oparzeń oraz dłuższą żywotnością oprawy. Ponadto żarówka LED nie odbarwia ścian i jest niezwykle odporna na uszkodzenia mechaniczne.
W odróżnieniu od zwykłych żarówek do produkcji ledowych nie wykorzystuje się żadnych substancji szkodliwych. LED-y nie posiadają efektu „mrugania”, które wpływa niekorzystnie na nasze samopoczucie.";
$product->add();
$product->save();
$product->addToCategories($product->id_category);
StockAvailable::setQuantity((int)$product->id, 0, $product->quantity, Context::getContext()->shop->id);
$shops = Shop::getShops(true, null, true);
$image = new Image();
$image->id_product = $product->id;
$image->position = Image::getHighestPosition($product->id) + 1;
$image->cover = true;
if (($image->validateFields(false, true)) === true &&
        ($image->validateFieldsLang(false, true)) === true && $image->add())
{
   $image->associateTo($shops);
   MyAdminImportController::copyImg($product->id, $image->id, $url, 'products', false);
}


$product = new Product();
$product->name = [$default_lang => "Żarówka LED AR111 GU10 Neutralna"];
$product->link_rewrite = [$default_lang => "zarowka-led-ar111-gu10-neutralna"];
$product->price = 19.99;
$product->quantity = 90;
$product->id_category = 19;
$product->id_category_default = 19;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/ZrodlaSwiatla/zarowka-led-ar111-gu10-neutralna.jpg";
$product->image_url = $url;
$product->description = "Żarówka LED GU10 AR111 9W Neutralna
Chcesz funkcjonalnie oświetlić mieszkanie i jednocześnie nadać mu wyjątkowego charakteru? Żarówka LED GU10 o neutralnej barwie światła jest niezwykle trwała, energooszczędna i zapewnia designerski wygląd w pomieszczeniu.
Jakie zalety posiada żarówka LED GU10 neutralna 9W?
Światło żarówki fantastycznie oświetla wnętrza. Źródło zasilania jest ledowe, co oznacza, że pobiera nawet 8/9 razy mniej energii niż zwykła żarówka. Dzięki temu zyskasz około 80-90% oszczędności na rachunkach za oświetlenie.
Innymi zaletami żarówki LED GU10 jest niska emisja ciepła, dzięki której zmniejsza się ryzyko oparzeń. Dodatkowo oprawa charakteryzuje znacznie dłuższą żywotnością niż tradycyjne żarówki. Źródło światła LED nie odbarwia koloru ścian i jest odporne na uszkodzenia mechaniczne.
Do stworzenia żarówki LED GU10 AR111 nie wykorzystano żadnych substancji szkodliwych. Dodatkowo źródło zasilania LED pozbawione jest efektu „mrugania”, które niekorzystnie wpływa na samopoczucie.
Żarówka GU10 LED 9W AR111 posiada dwa kolory do wyboru – czarny i biały, dzięki czemu dopasujesz barwę do lampy i wystroju pomieszczenia.";
$product->add();
$product->save();
$product->addToCategories($product->id_category);
StockAvailable::setQuantity((int)$product->id, 0, $product->quantity, Context::getContext()->shop->id);
$shops = Shop::getShops(true, null, true);
$image = new Image();
$image->id_product = $product->id;
$image->position = Image::getHighestPosition($product->id) + 1;
$image->cover = true;
if (($image->validateFields(false, true)) === true &&
        ($image->validateFieldsLang(false, true)) === true && $image->add())
{
   $image->associateTo($shops);
   MyAdminImportController::copyImg($product->id, $image->id, $url, 'products', false);
}


$product = new Product();
$product->name = [$default_lang => "Żarówka LED AR111 GU10 Ciepła"];
$product->link_rewrite = [$default_lang => "zarowka-led-ar111-gu10-ciepla"];
$product->price = 19.99;
$product->quantity = 90;
$product->id_category = 19;
$product->id_category_default = 19;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/ZrodlaSwiatla/zarowka-led-ar111-gu10-ciepla.jpg";
$product->image_url = $url;
$product->description = "Żarówka LED GU10 AR111 9W ciepła barwa światła
Spraw, by Twoje wnętrza były funkcjonalnie oświetlone i by zachwycały wyjątkowym nastrojem. Z żarówką LED GU10 AR111 o ciepłej barwie światła osiągniesz właśnie taki efekt.
Jakie zalety posiada żarówka GU10 LED 9W AR111?
Największą zaletą żarówek LED jest ich niskie zużycie energii – nawet 8/9 razy mniejsze w stosunku do tradycyjnych źródeł światła. Dzięki temu zyskasz około 80-90% oszczędności na rachunkach za oświetlenie. Ponadto żarówka LED GU10 ma niską emisję ciepła, co zmniejsza ryzyko oparzeń.
Źródło światła LED GU10 AR111 nie odbarwia koloru ścian i jest odporne na uszkodzenia mechaniczne. Do produkcji żarówki nie wykorzystano żadnych substancji szkodliwych. Źródło zasilania nie posiada efektu „mrugania”, które źle wpływa na nasze samopoczucie.
Żarówka LED GU10 AR111 posiada ciepłą barwę światła, dzięki czemu idealnie nadaje się do sypialni, łazienki lub do salonu jako oświetlenie dekoracyjne. Ciepła temperatura barwowa umożliwia nam relaks i stwarza przytulny klimat w pomieszczeniu. Żarówka LED GU10 AR111 dostępna jest w wersji czarnej i białej, dzięki czemu dopasujesz ją do wystroju pokoju oraz lampy.";
$product->add();
$product->save();
$product->addToCategories($product->id_category);
StockAvailable::setQuantity((int)$product->id, 0, $product->quantity, Context::getContext()->shop->id);
$shops = Shop::getShops(true, null, true);
$image = new Image();
$image->id_product = $product->id;
$image->position = Image::getHighestPosition($product->id) + 1;
$image->cover = true;
if (($image->validateFields(false, true)) === true &&
        ($image->validateFieldsLang(false, true)) === true && $image->add())
{
   $image->associateTo($shops);
   MyAdminImportController::copyImg($product->id, $image->id, $url, 'products', false);
}


$product = new Product();
$product->name = [$default_lang => "Żarówka LED FILAMENT A60 E27 6W 48W Neutralna"];
$product->link_rewrite = [$default_lang => "zarowka-led-filament-a60-e27-6w-48w-neutralna"];
$product->price = 13.99;
$product->quantity = 90;
$product->id_category = 19;
$product->id_category_default = 19;
$product->active = 1;
$product->on_sale = 1;
$url="http://localhost/prestashop/images/ZrodlaSwiatla/zarowka-led-filament-a60-e27-6w-48w-neutralna.jpg";
$product->image_url = $url;
$product->description = "Żarówka LED Filament 6W 48W Neutralna Barwa
Prezentowana żarówka LED Filament nada Twoim wnętrzom wyjątkowego charakteru. Światło źródła zasilania jest barwy neutralnej, dzięki czemu świetnie oddaje kolory wnętrz i pasuje każdego rodzaju pomieszczenia.
Jakie zalety posiada żarówka LED Filament 6W neutralna?
Żarówką o mocy 6W i neutralnej barwie światła możesz oświetlić sypialnię, salon, jadalnię, kuchnię czy biuro. Lampa z prezentowanym źródłem zasilania nada oryginalności i funkcjonalnie oświetli każde wnętrze.
Żarówka LED posiada bardzo niskie zużycie energii – nawet 8/9 razy mniejszy pobór mocy w stosunku do tradycyjnych żarówek. Dzięki temu zyskujemy około 80-90% oszczędności!
Żarówka LED może pracować od 15 do nawet 30 razy dłużej niż zwykła żarówka. Źródło światła jest odporne na uszkodzenia mechaniczne. Żarówka LED Filament jest ekologiczna, bo nie posiada rtęci ani innych substancji szkodzących. Innymi walorami źródła zasilania LED jest niska emisja ciepła, mniejsze ryzyko oparzeń oraz nie odbarwianie koloru ścian.";
$product->add();
$product->save();
$product->addToCategories($product->id_category);
StockAvailable::setQuantity((int)$product->id, 0, $product->quantity, Context::getContext()->shop->id);
$shops = Shop::getShops(true, null, true);
$image = new Image();
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
