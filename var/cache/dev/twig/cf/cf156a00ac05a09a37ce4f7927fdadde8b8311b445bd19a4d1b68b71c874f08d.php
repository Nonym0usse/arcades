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

/* @EasyAdmin/default/includes/_actions_dropdown.html.twig */
class __TwigTemplate_9cc6ab5cbbaea4ff60e57e5dcfb35d0d750ae3e6af21f8308a0da45356650fee extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/default/includes/_actions_dropdown.html.twig"));

        // line 1
        echo "<div class=\"actions-dropdown\">
    <button type=\"button\" class=\"btn btn-secondary btn-sm dropdown-toggle\">
        <i class=\"fa fa-fw fa-ellipsis-h\"></i>
    </button>

    <div class=\"dropdown-menu dropdown-menu-right\">
        ";
        // line 7
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_actions.html.twig", ["is_dropdown" => true]);
        echo "
    </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/includes/_actions_dropdown.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 7,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/default/includes/_actions_dropdown.html.twig", "/Users/vellacyril/PhpstormProjects/arcades/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/includes/_actions_dropdown.html.twig");
    }
}
