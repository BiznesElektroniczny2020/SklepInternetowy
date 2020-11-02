import org.json.simple.JSONArray;
import org.json.simple.JSONObject;
import org.json.simple.parser.JSONParser;

import java.io.*;
import java.nio.charset.StandardCharsets;
import java.util.*;


public class Main {

    public static int CATEGORY;
    public static int offset = 10; //id pierwszej kategorii  <---- trzeba zmienić jesli pierwsza dodana nie bedzie 10

    public static void main(String[] args) throws IOException {

        for (int i = 0; i < 6; i++) {
            CATEGORY = i + offset;

            JSONParser parser = new JSONParser();
            Writer out = null;
//        Writer out2 = null;
            try {

                out = new BufferedWriter(new OutputStreamWriter(
                        new FileOutputStream("create_" + addFolder() + ".php"), StandardCharsets.UTF_8));

//            out2 = new BufferedWriter(new OutputStreamWriter(
//                    new FileOutputStream("urls.txt"), StandardCharsets.UTF_8));
                Reader reader = new InputStreamReader(
                        new FileInputStream(addFolder() + ".json"), "UTF-8");

                JSONObject jsonObject = (JSONObject) parser.parse(reader);

                JSONArray subjects = (JSONArray) jsonObject.get("item");

                String price;
                String title;
                String desc;
                String fullURL;
                String[] URL;

                out.write(addProlog());
                Iterator iterator = subjects.iterator();
                while (iterator.hasNext()) {
                    Object subject = iterator.next();
                    JSONObject tmp = (JSONObject) subject;
                    byte[] tmpTitle = tmp.get("title").toString().getBytes(StandardCharsets.UTF_8);
                    byte[] tmpDesc = tmp.get("desc").toString().getBytes(StandardCharsets.UTF_8);

                    price = tmp.get("price").toString().replace(',', '.');
                    fullURL = tmp.get("image_url").toString();
                    title = new String(tmpTitle, StandardCharsets.UTF_8);
                    desc = new String(tmpDesc, StandardCharsets.UTF_8);
                    URL = fullURL.split("/");
                    //System.out.println(URL[URL.length-1]);
                    out.write(addProduct(title, desc, price, URL[URL.length - 1]));
//                    out2.write(fullURL + "\n");
                }

                out.write("\n ?>");
                out.close();
//            out2.close();
            } catch (Exception e) {
                e.printStackTrace();
            }

        }
    }

    public static String addFolder() {

        if(CATEGORY == offset)  return "LampyPodlogowe";
        if(CATEGORY == offset+1)  return "LampySufitowe";
        if(CATEGORY == offset+2)  return "Kinkety";
        if(CATEGORY == offset+3)  return "LampyAbazur";
        if(CATEGORY == offset+4)  return "Akcesoria";
        if(CATEGORY == offset+5)  return "ZrodlaSwiatla";

        return null;
    }

    public static String addProduct(String title, String desc, String price, String URL) {

        var tmp = new String("$product = new Product();\n" +
                "$product->name = [$default_lang => \"" + title + "\"];\n" +
                "$product->link_rewrite = [$default_lang => \"" + URL(title) + "\"];\n" +
                "$product->price = " + price + ";\n" +
                "$product->quantity = 90;\n" +
                "$product->id_category = " + CATEGORY + ";\n" +
                "$product->id_category_default = " + CATEGORY + ";\n" +
                "$product->active = 1;\n" +
                "$product->on_sale = 1;\n" +
                "$url=\"http://localhost/prestashop/images/" + addFolder() + "/" + URL + "\";\n" +
                "$product->image_url = $url;\n" +
                "$product->description = \"" + desc + "\";\n" +
                "$product->add();\n" +
                "$product->save();\n" +
                "$product->addToCategories($product->id_category);\n" +
                "StockAvailable::setQuantity((int)$product->id, 0, $product->quantity, Context::getContext()->shop->id);\n" +
                "$shops = Shop::getShops(true, null, true);\n" +

                "$image = new Image();\n" +
                "$image->id_product = $product->id;\n" +
                "$image->position = Image::getHighestPosition($product->id) + 1;\n" +
                "$image->cover = true;\n" +

                "if (($image->validateFields(false, true)) === true &&\n" +
                "        ($image->validateFieldsLang(false, true)) === true && $image->add())\n" +
                "{\n" +
                "   $image->associateTo($shops);\n" +
                "   MyAdminImportController::copyImg($product->id, $image->id, $url, 'products', false);\n" +
                "}\n\n\n");

        return tmp;

    }

    public static String addProlog() {
        return new String("<?php\n" +
                "include(dirname(__FILE__).'/config/config.inc.php');\n" +
                "include(dirname(__FILE__).'/init.php');\n" +
                "include(dirname(__FILE__).'/controllers/admin/AdminImportController.php');\n" +
                "ini_set('display_errors', 1);\n" +
                "ini_set('display_startup_errors', 1);\n" +
                "error_reporting(E_ALL);\n\n" +
                "class MyAdminImportController extends AdminImportControllerCore {\n" +
                "\tpublic static function copyImg($id_entity, $id_image = null, $url = '', $entity = 'products', $regenerate = true) {\n" +
                "\t\treturn parent::copyImg($id_entity, $id_image, $url, $entity, $regenerate);\n" +
                "\t}\n" +
                " }\n" +

                "$default_lang = Configuration::get('PS_LANG_DEFAULT');\n\n\n");
    }


    public static String URL(String text) {
        var tmp = normalizacja(text).toLowerCase();
        return tmp.replace(' ', '-');
    }

    public static String normalizacja(String text) {
        StringBuilder Sb = new StringBuilder();
        int L = text.length();

        for (int I = 0; I < L; I++) {
            switch (text.charAt(I)) {

                case 'ą':
                    Sb.append('a');
                    break;
                case 'ć':
                    Sb.append('c');
                    break;
                case 'ę':
                    Sb.append('e');
                    break;
                case 'ł':
                    Sb.append('l');
                    break;
                case 'ń':
                    Sb.append('n');
                    break;
                case 'ó':
                    Sb.append('o');
                    break;
                case 'ś':
                    Sb.append('s');
                    break;
                case 'ź':
                    Sb.append('z');
                    break;
                case 'ż':
                    Sb.append('z');
                    break;
                case 'Ą':
                    Sb.append('A');
                    break;
                case 'Ć':
                    Sb.append('C');
                    break;
                case 'Ę':
                    Sb.append('E');
                    break;
                case 'Ł':
                    Sb.append('L');
                    break;
                case 'Ń':
                    Sb.append('N');
                    break;
                case 'Ó':
                    Sb.append('O');
                    break;
                case 'Ś':
                    Sb.append('S');
                    break;
                case 'Ź':
                    Sb.append('Z');
                    break;
                case 'Ż':
                    Sb.append('Z');
                    break;
                default:
                    Sb.append(text.charAt(I));
                    break;
            }
        }
        return Sb.toString();
    }
}
