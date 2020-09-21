<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @EasyAdmin/default/includes/_delete_form.html.twig */
class __TwigTemplate_fa1979d92c3f192626b59b706cb662b0778cfcb2a9fa965f185be2e2fcd57a36 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/default/includes/_delete_form.html.twig"));

        // line 1
        echo         // line 2
        $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? null), 'form', ["action" => (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 3
($context["delete_form"] ?? null), "vars", [], "any", false, false, false, 3), "action", [], "any", false, false, false, 3) . ((twig_in_filter("?", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["delete_form"] ?? null), "vars", [], "any", false, false, false, 3), "action", [], "any", false, false, false, 3))) ? ("&") : ("?"))) . "referer=") . twig_urlencode_filter(($context["referer"] ?? null))), "method" => "DELETE", "attr" => ["id" => "delete-form", "style" => "display: none"]]);
        // line 7
        echo "

<div id=\"modal-delete\" class=\"modal fade\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-body\">
                <h4>";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("delete_modal.title", ($context["_trans_parameters"] ?? null), "EasyAdminBundle"), "html", null, true);
        echo "</h4>
                <p>";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("delete_modal.content", ($context["_trans_parameters"] ?? null), "EasyAdminBundle"), "html", null, true);
        echo "</p>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" data-dismiss=\"modal\" class=\"btn btn-secondary\">
                    <span class=\"btn-label\">";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.cancel", ($context["_trans_parameters"] ?? null), ($context["_translation_domain"] ?? null)), "html", null, true);
        echo "</span>
                </button>

                ";
        // line 21
        if ($this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->isActionEnabled(($context["view"] ?? null), "delete", twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "name", [], "any", false, false, false, 21))) {
            // line 22
            echo "                    ";
            $context["_delete_action"] = $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getActionConfiguration(($context["view"] ?? null), "delete", twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "name", [], "any", false, false, false, 22));
            // line 23
            echo "                    <button type=\"button\" data-dismiss=\"modal\" class=\"btn btn-danger\" id=\"modal-delete-button\" formtarget=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["_delete_action"] ?? null), "target", [], "any", false, false, false, 23), "html", null, true);
            echo "\">
                        ";
            // line 24
            if (twig_get_attribute($this->env, $this->source, ($context["_delete_action"] ?? null), "icon", [], "any", false, false, false, 24)) {
                echo "<i class=\"fa fa-fw fa-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["_delete_action"] ?? null), "icon", [], "any", false, false, false, 24), "html", null, true);
                echo "\"></i>";
            }
            // line 25
            echo "                        <span class=\"btn-label\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("delete_modal.action", ($context["_trans_parameters"] ?? null), "EasyAdminBundle"), "html", null, true);
            echo "</span>
                    </button>
                ";
        }
        // line 28
        echo "            </div>
        </div>
    </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/includes/_delete_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 28,  85 => 25,  79 => 24,  74 => 23,  71 => 22,  69 => 21,  63 => 18,  56 => 14,  52 => 13,  44 => 7,  42 => 3,  41 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/default/includes/_delete_form.html.twig", "/Users/vellacyril/PhpstormProjects/arcades/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/includes/_delete_form.html.twig");
    }
}
