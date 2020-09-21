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

/* @EasyAdmin/default/field_dateinterval.html.twig */
class __TwigTemplate_360a29d63961bd2dc824bf8f4c2128bb43c5d64129af05c5310e5b098a458597 extends \Twig\Template
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
        // line 1
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["value"] ?? null), "format", [0 => twig_get_attribute($this->env, $this->source, ($context["field_options"] ?? null), "format", [], "any", false, false, false, 1)], "method", false, false, false, 1), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_dateinterval.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/default/field_dateinterval.html.twig", "/Users/vellacyril/PhpstormProjects/arcades copie 2/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/field_dateinterval.html.twig");
    }
}
