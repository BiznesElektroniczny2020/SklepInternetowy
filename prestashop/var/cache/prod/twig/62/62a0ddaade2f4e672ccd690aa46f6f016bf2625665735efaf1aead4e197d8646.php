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

/* @Modules/ps_linklist/views/templates/admin/fields.html.twig */
class __TwigTemplate_bea65fd58f314f0755da5eeb6a84420d7f6c67daa48d31430b995f01f053876b extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'choice_widget_expanded' => [$this, 'block_choice_widget_expanded'],
            'checkbox_widget' => [$this, 'block_checkbox_widget'],
            'form_row' => [$this, 'block_form_row'],
            'form_row_class' => [$this, 'block_form_row_class'],
            'unlabeled_form_group_class' => [$this, 'block_unlabeled_form_group_class'],
            'custom_url_widget' => [$this, 'block_custom_url_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 26
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 53
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 72
        echo "
";
        // line 73
        $this->displayBlock('form_row', $context, $blocks);
        // line 89
        echo "
";
        // line 90
        $this->displayBlock('form_row_class', $context, $blocks);
        // line 93
        echo "
";
        // line 94
        $this->displayBlock('unlabeled_form_group_class', $context, $blocks);
        // line 98
        $this->displayBlock('custom_url_widget', $context, $blocks);
    }

    // line 26
    public function block_choice_widget_expanded($context, array $blocks = [])
    {
        // line 27
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
        ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "choices", []));
        foreach ($context['_seq'] as $context["name"] => $context["choices"]) {
            // line 29
            echo "            ";
            if (twig_test_iterable($context["choices"])) {
                // line 30
                echo "
                <label class=\"choice_category\">
                    <strong>
                        ";
                // line 33
                echo twig_escape_filter($this->env, (((($context["choice_translation_domain"] ?? null) === false)) ? ($context["name"]) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["name"], [], ($context["choice_translation_domain"] ?? null)))), "html", null, true);
                echo "
                    </strong>
                </label>
                <div>
                    ";
                // line 37
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["choices"]);
                foreach ($context['_seq'] as $context["key"] => $context["choice"]) {
                    // line 38
                    echo "                        ";
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), $context["key"], [], "array"), 'widget');
                    echo "
                        ";
                    // line 39
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), $context["key"], [], "array"), 'label');
                    echo "
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['choice'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 41
                echo "                </div>

            ";
            } else {
                // line 45
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), $context["name"], [], "array"), 'widget');
                // line 46
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), $context["name"], [], "array"), 'label', ["translation_domain" => ($context["choice_translation_domain"] ?? null)]);
            }
            // line 49
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['choices'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "    </div>";
    }

    // line 53
    public function block_checkbox_widget($context, array $blocks = [])
    {
        // line 54
        $context["parent_label_class"] = (((isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context))) ? (_twig_default_filter(($context["parent_label_class"] ?? null), "")) : (""));
        // line 55
        $context["switch"] = (((isset($context["switch"]) || array_key_exists("switch", $context))) ? (_twig_default_filter(($context["switch"] ?? null), "")) : (""));
        // line 56
        ob_start();
        // line 57
        echo "        <input type=\"checkbox\" class=\"js-bulk-action-checkbox\"
               ";
        // line 58
        if (($context["switch"] ?? null)) {
            echo "data-toggle=\"switch\"";
        }
        echo " ";
        if (($context["switch"] ?? null)) {
            echo "class=\"";
            echo twig_escape_filter($this->env, ($context["switch"] ?? null), "html", null, true);
            echo "\"";
        }
        echo " ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if ((isset($context["value"]) || array_key_exists("value", $context))) {
            echo " value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\"";
        }
        if (($context["checked"] ?? null)) {
            echo " checked=\"checked\"";
        }
        echo " />
        <i class=\"md-checkbox-control\"></i>
    ";
        $context["checkbox_input"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 61
        echo "
    ";
        // line 62
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? null))) {
            // line 63
            echo "        <div class=\"md-checkbox md-checkbox-inline\">";
            // line 64
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', ["widget" => ($context["checkbox_input"] ?? null)]);
            // line 65
            echo "</div>
    ";
        } else {
            // line 67
            echo "<div class=\"md-checkbox my-1\">";
            // line 68
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', ["widget" => ($context["checkbox_input"] ?? null)]);
            // line 69
            echo "</div>";
        }
    }

    // line 73
    public function block_form_row($context, array $blocks = [])
    {
        // line 74
        ob_start();
        // line 75
        echo "        <div class=\"";
        $this->displayBlock("form_row_class", $context, $blocks);
        echo " ";
        if ((( !($context["compound"] ?? null) || (((isset($context["force_error"]) || array_key_exists("force_error", $context))) ? (_twig_default_filter(($context["force_error"] ?? null), false)) : (false))) &&  !($context["valid"] ?? null))) {
            echo " has-error";
        }
        echo "\">
            ";
        // line 76
        if ( !($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "label", []) === false)) {
            // line 77
            echo "                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
            echo "
                ";
            // line 78
            $context["formGroupClasses"] =             $this->renderBlock("form_group_class", $context, $blocks);
            // line 79
            echo "            ";
        } else {
            // line 80
            echo "                ";
            $context["formGroupClasses"] =             $this->renderBlock("unlabeled_form_group_class", $context, $blocks);
            // line 81
            echo "            ";
        }
        // line 82
        echo "            <div class=\"";
        echo twig_escape_filter($this->env, ($context["formGroupClasses"] ?? null), "html", null, true);
        echo "\">
                ";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
                ";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "
            </div>
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 90
    public function block_form_row_class($context, array $blocks = [])
    {
        // line 91
        echo "form-group row";
    }

    // line 94
    public function block_unlabeled_form_group_class($context, array $blocks = [])
    {
        // line 95
        echo "col-sm-12";
    }

    // line 98
    public function block_custom_url_widget($context, array $blocks = [])
    {
        // line 99
        echo "<div class=\"form-control ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["attr"] ?? null), "class", []), "html", null, true);
        echo "\">
        ";
        // line 100
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "title", []), 'row');
        echo "
        ";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "url", []), 'row');
        echo "
    </div>";
    }

    public function getTemplateName()
    {
        return "@Modules/ps_linklist/views/templates/admin/fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  257 => 101,  253 => 100,  248 => 99,  245 => 98,  241 => 95,  238 => 94,  234 => 91,  231 => 90,  222 => 84,  218 => 83,  213 => 82,  210 => 81,  207 => 80,  204 => 79,  202 => 78,  197 => 77,  195 => 76,  186 => 75,  184 => 74,  181 => 73,  176 => 69,  174 => 68,  172 => 67,  168 => 65,  166 => 64,  164 => 63,  162 => 62,  159 => 61,  135 => 58,  132 => 57,  130 => 56,  128 => 55,  126 => 54,  123 => 53,  119 => 50,  113 => 49,  110 => 46,  108 => 45,  103 => 41,  95 => 39,  90 => 38,  86 => 37,  79 => 33,  74 => 30,  71 => 29,  67 => 28,  62 => 27,  59 => 26,  55 => 98,  53 => 94,  50 => 93,  48 => 90,  45 => 89,  43 => 73,  40 => 72,  38 => 53,  36 => 26,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/ps_linklist/views/templates/admin/fields.html.twig", "/var/www/html/prestashop/modules/ps_linklist/views/templates/admin/fields.html.twig");
    }
}
