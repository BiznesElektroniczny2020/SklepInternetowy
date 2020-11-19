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

/* @Modules/ps_linklist/views/templates/admin/link_block/form.html.twig */
class __TwigTemplate_dc3a80154a6a9dfebf4633e02cc9b99407d59e1de559b7597eb1e8a604ef4ca2 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 25
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@Modules/ps_linklist/views/templates/admin/link_block/form.html.twig", 25);
        $this->blocks = [
            'content' => [$this, 'block_content'],
            'link_block_form' => [$this, 'block_link_block_form'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 27
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["linkBlockForm"] ?? null), [0 => "@Modules/ps_linklist/views/templates/admin/fields.html.twig"], true);
        // line 25
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 29
    public function block_content($context, array $blocks = [])
    {
        // line 30
        echo "    ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["linkBlockForm"] ?? null), "vars", [], "any", false, true), "data", [], "any", false, true), "link_block", [], "any", false, true), "id_link_block", [], "any", true, true) &&  !(null === $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["linkBlockForm"] ?? null), "vars", []), "data", []), "link_block", []), "id_link_block", [])))) {
            // line 31
            echo "        ";
            $context["formAction"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("admin_link_block_edit_process", ["linkBlockId" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["linkBlockForm"] ?? null), "vars", []), "data", []), "link_block", []), "id_link_block", [])]);
            // line 32
            echo "    ";
        } else {
            // line 33
            echo "        ";
            $context["formAction"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("admin_link_block_create_process");
            // line 34
            echo "    ";
        }
        // line 35
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["linkBlockForm"] ?? null), 'form_start', ["action" => ($context["formAction"] ?? null), "attr" => ["class" => "form", "id" => "link_block_form"]]);
        echo "
    <div class=\"row justify-content-center\">
        ";
        // line 37
        $this->displayBlock('link_block_form', $context, $blocks);
        // line 75
        echo "    </div>
    ";
        // line 76
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["linkBlockForm"] ?? null), 'form_end');
        echo "
";
    }

    // line 37
    public function block_link_block_form($context, array $blocks = [])
    {
        // line 38
        echo "            <div class=\"col-xl-10\">
                <div class=\"card\">
                    <h3 class=\"card-header\">
                        <i class=\"material-icons\">mode_edit</i>
                        ";
        // line 42
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["linkBlockForm"] ?? null), "vars", [], "any", false, true), "data", [], "any", false, true), "link_block", [], "any", false, true), "id_link_block", [], "any", true, true)) {
            // line 43
            echo "                            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit the link block.", [], "Modules.Linklist.Admin"), "html", null, true);
            echo "
                        ";
        } else {
            // line 45
            echo "                        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("New link block", [], "Modules.Linklist.Admin"), "html", null, true);
            echo "
                        ";
        }
        // line 47
        echo "                    </h3>
                    <div class=\"card-block row\">
                        <div class=\"card-text\">
                            ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["linkBlockForm"] ?? null), "link_block", []), "block_name", []), 'row');
        echo "
                            ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["linkBlockForm"] ?? null), "link_block", []), "id_hook", []), 'row');
        echo "
                            ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["linkBlockForm"] ?? null), "link_block", []), "cms", []), 'row');
        echo "
                            ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["linkBlockForm"] ?? null), "link_block", []), "product", []), 'row');
        echo "
                            ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["linkBlockForm"] ?? null), "link_block", []), "static", []), 'row');
        echo "
                            <div class=\"form-group\">
                                ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["linkBlockForm"] ?? null), "link_block", []), "custom", []), 'row');
        echo "
                                <div class=\"d-flex justify-content-end\">
                                    <button data-collection-id=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["linkBlockForm"] ?? null), "link_block", []), "custom", []), "vars", []), "id", []), "html", null, true);
        echo "\" class=\"btn btn-primary add-collection-btn\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add", [], "Admin.Actions"), "html", null, true);
        echo "</button>
                                </div>
                            </div>
                            ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["linkBlockForm"] ?? null), "link_block", []), 'rest');
        echo "
                            ";
        // line 62
        $this->getAttribute($this->getAttribute(($context["linkBlockForm"] ?? null), "link_block", []), "setRendered", []);
        // line 63
        echo "                            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["linkBlockForm"] ?? null), 'rest');
        echo "
                        </div>
                    </div>
                    <div class=\"card-footer\">
                        <div class=\"d-flex justify-content-between\">
                            <a href=\"";
        // line 68
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("admin_link_block_list");
        echo "\" class=\"btn btn-secondary\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cancel", [], "Admin.Actions"), "html", null, true);
        echo "</a>
                            <button class=\"btn btn-primary\">";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "</button>
                        </div>
                    </div>
                </div>
            </div>
        ";
    }

    // line 79
    public function block_javascripts($context, array $blocks = [])
    {
        // line 80
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("../modules/ps_linklist/views/public/form.bundle.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "@Modules/ps_linklist/views/templates/admin/link_block/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 82,  175 => 80,  172 => 79,  162 => 69,  156 => 68,  147 => 63,  145 => 62,  141 => 61,  133 => 58,  128 => 56,  123 => 54,  119 => 53,  115 => 52,  111 => 51,  107 => 50,  102 => 47,  96 => 45,  90 => 43,  88 => 42,  82 => 38,  79 => 37,  73 => 76,  70 => 75,  68 => 37,  62 => 35,  59 => 34,  56 => 33,  53 => 32,  50 => 31,  47 => 30,  44 => 29,  40 => 25,  38 => 27,  22 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/ps_linklist/views/templates/admin/link_block/form.html.twig", "/var/www/html/prestashop/modules/ps_linklist/views/templates/admin/link_block/form.html.twig");
    }
}
