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

/* security/login.html.twig */
class __TwigTemplate_08cce613097a4511d7a11ba76de2e20f26ec8ba2a3729f8154aefe1a5b51572a extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Espace Administration - arcades13127";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/login.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />



    <form method=\"post\" action=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_login");
        echo "\" class=\"form-signin\">

    <img class=\"mb-4\" src=\"../../assets/brand/bootstrap-solid.svg\" alt=\"\" width=\"72\" height=\"72\">
    <h1 class=\"h3 mb-3 font-weight-normal \">Espace admin</h1>
    <div class=\"form-group\">
        <label for=\"inputEmail\" class=\"sr-only\">Adresse mail</label>
        <input type=\"text\" name=\"_username\"  id=\"inputEmail\" class=\"form-control\" placeholder=\"Adresse mail\" required=\"\" autofocus=\"\">
    </div>
    <div class=\"form-group\">
        <label for=\"inputPassword\" class=\"sr-only\">Mot de passe</label>
        <input type=\"password\" name=\"_password\" id=\"inputPassword\" class=\"form-control\" placeholder=\"Mot de passe\" required=\"\">
    </div>
    <input type=\"hidden\" name=\"_csrf_token\"
           value=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"
    >
    <div class=\"checkbox mb-3\">
        <label>
            <input type=\"checkbox\" name=\"_remember_me\"> Se souvenir de moi
        </label>
    </div>
    <button class=\"btn btn-lg btn-primary btn-block\" type=\"submit\">Connexion</button>
    <p class=\"mt-5 mb-3 text-muted\">© Développé par Microvella</p>
    </form>
";
    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 23,  66 => 10,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "security/login.html.twig", "/Users/vellacyril/PhpstormProjects/arcades copie 2/templates/security/login.html.twig");
    }
}
