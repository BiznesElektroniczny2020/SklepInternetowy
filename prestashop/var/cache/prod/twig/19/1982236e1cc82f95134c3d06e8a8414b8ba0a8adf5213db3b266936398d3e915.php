<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/form.html.twig */
class __TwigTemplate_e0d1b48e0569cb00500160e4cc3134ab27cffb186533b4ef69e98e4563048c55 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'meta_form_rest' => [$this, 'block_meta_form_rest'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 25
        echo "
";
        // line 26
        $context["ps"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/form.html.twig", 26);
        // line 27
        echo "
";
        // line 28
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["metaForm"] ?? null), 'form_start');
        echo "
  <div class=\"card\">
    <div class=\"card-header\">
      ";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Meta tags", [], "Admin.Shopparameters.Feature"), "html", null, true);
        echo "
    </div>
    <div class=\"card-block row\">
      <div class=\"card-text\">
        ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["metaForm"] ?? null), 'errors');
        echo "

        ";
        // line 37
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["metaForm"] ?? null), "page_name", []), ["attr" => ["class" => "js-meta-page-name", "data-toggle" => "select2", "data-minimumResultsForSearch" => "7"]], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Page name", [], "Admin.Shopparameters.Feature"), "help" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Name of the related page.", [], "Admin.Shopparameters.Help")]);
        // line 46
        echo "

        ";
        // line 48
        ob_start();
        // line 49
        echo "          ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Title of this page.", [], "Admin.Shopparameters.Help"), "html", null, true);
        echo "
          ";
        // line 50
        echo twig_escape_filter($this->env, ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Invalid characters:", [], "Admin.Shopparameters.Help") . "  <>={}"), "html", null, true);
        echo "
        ";
        $context["pageTitleHelpLabel"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 52
        echo "
        ";
        // line 53
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["metaForm"] ?? null), "page_title", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Page title", [], "Admin.Shopparameters.Feature"), "help" =>         // line 55
($context["pageTitleHelpLabel"] ?? null)]);
        // line 56
        echo "

        ";
        // line 58
        ob_start();
        // line 59
        echo "          ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("A short description of your shop.", [], "Admin.Shopparameters.Help"), "html", null, true);
        echo "
          ";
        // line 60
        echo twig_escape_filter($this->env, ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Invalid characters:", [], "Admin.Shopparameters.Help") . " <>={}"), "html", null, true);
        echo "
        ";
        $context["metaDescriptionHelpLabel"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 62
        echo "
        ";
        // line 63
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["metaForm"] ?? null), "meta_description", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Meta description", [], "Admin.Global"), "help" =>         // line 65
($context["metaDescriptionHelpLabel"] ?? null)]);
        // line 66
        echo "

        ";
        // line 68
        ob_start();
        // line 69
        echo "          ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("List of keywords for search engines.", [], "Admin.Shopparameters.Help"), "html", null, true);
        echo "
          ";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("To add tags, click in the field, write something, and then press the \"Enter\" key.", [], "Admin.Shopparameters.Help"), "html", null, true);
        echo "
          ";
        // line 71
        echo twig_escape_filter($this->env, ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Invalid characters:", [], "Admin.Shopparameters.Help") . " <>={}"), "html", null, true);
        echo "
        ";
        $context["metaKeywordsHelpLabel"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 73
        echo "
        ";
        // line 74
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["metaForm"] ?? null), "meta_keywords", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Meta keywords", [], "Admin.Global"), "help" =>         // line 76
($context["metaKeywordsHelpLabel"] ?? null)]);
        // line 77
        echo "

        ";
        // line 79
        ob_start();
        // line 80
        echo "          ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("For instance, \"contacts\" for http://example.com/shop/contacts to redirect to http://example.com/shop/contact-form.php", [], "Admin.Shopparameters.Help"), "html", null, true);
        echo "
          ";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Only letters and hyphens are allowed.", [], "Admin.Shopparameters.Help"), "html", null, true);
        echo "
        ";
        $context["rewriteUrlHelpLabel"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 83
        echo "
        ";
        // line 84
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["metaForm"] ?? null), "url_rewrite", []), ["attr" => ["class" => "js-url-rewrite"]], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Rewritten URL", [], "Admin.Shopparameters.Feature"), "help" =>         // line 86
($context["rewriteUrlHelpLabel"] ?? null)]);
        // line 87
        echo "

        ";
        // line 89
        $this->displayBlock('meta_form_rest', $context, $blocks);
        // line 92
        echo "      </div>
    </div>
    <div class=\"card-footer\">
      <div class=\"d-inline-flex\">
        <a href=\"";
        // line 96
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_metas_index");
        echo "\" class=\"btn btn-outline-secondary\">
          ";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cancel", [], "Admin.Actions"), "html", null, true);
        echo "
        </a>
      </div>
      <div class=\"d-inline-flex float-right\">
        <button class=\"btn btn-primary\">";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "</button>
      </div>
    </div>
  </div>
";
        // line 105
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["metaForm"] ?? null), 'form_end');
        echo "
";
    }

    // line 89
    public function block_meta_form_rest($context, array $blocks = [])
    {
        // line 90
        echo "          ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["metaForm"] ?? null), 'rest');
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 90,  187 => 89,  181 => 105,  174 => 101,  167 => 97,  163 => 96,  157 => 92,  155 => 89,  151 => 87,  149 => 86,  148 => 84,  145 => 83,  140 => 81,  135 => 80,  133 => 79,  129 => 77,  127 => 76,  126 => 74,  123 => 73,  118 => 71,  114 => 70,  109 => 69,  107 => 68,  103 => 66,  101 => 65,  100 => 63,  97 => 62,  92 => 60,  87 => 59,  85 => 58,  81 => 56,  79 => 55,  78 => 53,  75 => 52,  70 => 50,  65 => 49,  63 => 48,  59 => 46,  57 => 37,  52 => 35,  45 => 31,  39 => 28,  36 => 27,  34 => 26,  31 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/form.html.twig", "/var/www/html/prestashop/src/PrestaShopBundle/Resources/views/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/form.html.twig");
    }
}
