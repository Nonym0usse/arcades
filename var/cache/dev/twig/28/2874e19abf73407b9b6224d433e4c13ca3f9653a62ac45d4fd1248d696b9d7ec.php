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

/* formulaire/show.html.twig */
class __TwigTemplate_80349f8bc546997188a1a6d265c6e21b87d4fb8044fe955ba4cd8dec951accec extends \Twig\Template
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
            'header' => [$this, 'block_header'],
            'main' => [$this, 'block_main'],
            'footer' => [$this, 'block_footer'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formulaire/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formulaire/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "formulaire/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["formulaire"]) || array_key_exists("formulaire", $context) ? $context["formulaire"] : (function () { throw new RuntimeError('Variable "formulaire" does not exist.', 3, $this->source); })()), "titre", [], "any", false, false, false, 3), "html", null, true);
        echo " - Association Arcades 13127 - Vitrolles";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    ";
        // line 7
        $this->displayBlock('header', $context, $blocks);
        // line 10
        echo "
    ";
        // line 11
        $this->displayBlock('main', $context, $blocks);
        // line 67
        echo "    ";
        $this->displayBlock('footer', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 8
        echo "        ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 12
        echo "        ";
        $this->displayParentBlock("main", $context, $blocks);
        echo "

        <div class=\"container\">
            <div class=\"row\">
                <h1 class=\"article-name\">";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["formulaire"]) || array_key_exists("formulaire", $context) ? $context["formulaire"] : (function () { throw new RuntimeError('Variable "formulaire" does not exist.', 16, $this->source); })()), "titre", [], "any", false, false, false, 16), "html", null, true);
        echo "</h1>
                <img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset((isset($context["formulaire"]) || array_key_exists("formulaire", $context) ? $context["formulaire"] : (function () { throw new RuntimeError('Variable "formulaire" does not exist.', 17, $this->source); })()), "imageFile"), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["formulaire"]) || array_key_exists("formulaire", $context) ? $context["formulaire"] : (function () { throw new RuntimeError('Variable "formulaire" does not exist.', 17, $this->source); })()), "titre", [], "any", false, false, false, 17), "html", null, true);
        echo "\" class=\"img-article\">
                <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                    <h6 style=\"margin: 0 auto; text-align: center; color: darkgrey; padding-top: 20px\">Publié le :  ";
        // line 19
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["formulaire"]) || array_key_exists("formulaire", $context) ? $context["formulaire"] : (function () { throw new RuntimeError('Variable "formulaire" does not exist.', 19, $this->source); })()), "dates", [], "any", false, false, false, 19), "d-m-Y"), "html", null, true);
        echo "</h6>
                </div>
                <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                    <p class=\"paragraph\">
                        ";
        // line 23
        echo twig_get_attribute($this->env, $this->source, (isset($context["formulaire"]) || array_key_exists("formulaire", $context) ? $context["formulaire"] : (function () { throw new RuntimeError('Variable "formulaire" does not exist.', 23, $this->source); })()), "description", [], "any", false, false, false, 23);
        echo "
                    </p>
                </div>
                <hr class=\"separator\">
                <h4 class=\"title-separator\">Signez ce formulaire en remplissant les informations ci-dessous.</h4>
                <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                    <div class=\"container\">
                        <div class=\"row\">
                            ";
        // line 31
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), 'form_start', ["class" => "form-horizontal", "attr" => ["class" => "form-horizontal", "id" => "myForm"]]);
        echo "
                            <div class=\"form-group\">
                                ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "nom", [], "any", false, false, false, 33), 'row', ["label" => "Nom", "attr" => ["placeholder" => "Votre nom", "class" => "form-control"]]);
        echo "
                            </div>
                            <div class=\"form-group\">
                                ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "prenom", [], "any", false, false, false, 36), 'row', ["label" => "Prénom", "attr" => ["placeholder" => "Votre prenom", "class" => "form-control"]]);
        echo "
                            </div>
                            <div class=\"form-group\">
                                ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "mail", [], "any", false, false, false, 39), 'row', ["label" => "E-mail", "attr" => ["placeholder" => "Votre e-mail", "class" => "form-control"]]);
        echo "
                            </div>
                            <div class=\"form-group\">
                                ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "tel", [], "any", false, false, false, 42), 'row', ["label" => "Téléphone", "attr" => ["placeholder" => "Votre téléphone", "class" => "form-control"]]);
        echo "
                            </div>
                            <div class=\"form-group\">
                                <label class=\"container-custom\">En cochant cette case, je certifie être membre de l'association Arcades13127. Dans le cas contraire, rejoignez-nous <a href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("inscription");
        echo "\">ici</a>.
                                    <input type=\"checkbox\"  required name=\"est_membre\">
                                    <span class=\"checkmark\"></span>
                                </label>

                            </div>
                            <div class=\"form-group\">
                                ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "save", [], "any", false, false, false, 52), 'row', ["label" => "Je signe", "attr" => ["class" => "btn btn-primary"]]);
        echo "
                            </div>
                            ";
        // line 54
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), 'form_end');
        echo "
                        </div>
                    </div>
                </div>
                <div class=\"social-box\">
                    <h5>Cet article vous plaît? Partagez-le sur :</h5>
                    <div  class=\"fb-share-button\" data-href=\"";
        // line 60
        echo twig_escape_filter($this->env, (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 60, $this->source); })()), "html", null, true);
        echo "\" data-layout=\"button_count\" data-size=\"small\"><a id=\"element1\" target=\"_blank\" href=\"https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse\" class=\"fb-xfbml-parse-ignore\">Partager</a></div>
                    <br><br>
                    <a id=\"element2\" href=\"https://twitter.com/share?ref_src=twsrc%5Etfw\" class=\"twitter-share-button\" data-show-count=\"false\">Tweet</a><script async src=\"https://platform.twitter.com/widgets.js\" charset=\"utf-8\"></script>
                </div>
            </div>
        </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 67
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 68
        echo "        ";
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "formulaire/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  263 => 68,  253 => 67,  236 => 60,  227 => 54,  222 => 52,  212 => 45,  206 => 42,  200 => 39,  194 => 36,  188 => 33,  183 => 31,  172 => 23,  165 => 19,  158 => 17,  154 => 16,  146 => 12,  136 => 11,  123 => 8,  113 => 7,  102 => 67,  100 => 11,  97 => 10,  95 => 7,  92 => 6,  82 => 5,  62 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ formulaire.titre }} - Association Arcades 13127 - Vitrolles{% endblock %}

{% block body %}

    {% block header %}
        {{ parent() }}
    {% endblock%}

    {% block main %}
        {{ parent() }}

        <div class=\"container\">
            <div class=\"row\">
                <h1 class=\"article-name\">{{ formulaire.titre }}</h1>
                <img src=\"{{ vich_uploader_asset(formulaire, 'imageFile') }}\" alt=\"{{ formulaire.titre }}\" class=\"img-article\">
                <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                    <h6 style=\"margin: 0 auto; text-align: center; color: darkgrey; padding-top: 20px\">Publié le :  {{ formulaire.dates |date('d-m-Y')}}</h6>
                </div>
                <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                    <p class=\"paragraph\">
                        {{ formulaire.description| raw}}
                    </p>
                </div>
                <hr class=\"separator\">
                <h4 class=\"title-separator\">Signez ce formulaire en remplissant les informations ci-dessous.</h4>
                <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                    <div class=\"container\">
                        <div class=\"row\">
                            {{ form_start(form, {'class': 'form-horizontal', 'attr': {'class': 'form-horizontal', 'id': 'myForm'}}) }}
                            <div class=\"form-group\">
                                {{ form_row(form.nom, {'label': 'Nom', 'attr': {'placeholder': 'Votre nom', 'class': 'form-control'}}) }}
                            </div>
                            <div class=\"form-group\">
                                {{ form_row(form.prenom, {'label': 'Prénom', 'attr': {'placeholder': 'Votre prenom', 'class': 'form-control'}}) }}
                            </div>
                            <div class=\"form-group\">
                                {{ form_row(form.mail, {'label': 'E-mail', 'attr': {'placeholder': 'Votre e-mail', 'class': 'form-control'}}) }}
                            </div>
                            <div class=\"form-group\">
                                {{ form_row(form.tel, {'label': 'Téléphone', 'attr': {'placeholder': 'Votre téléphone', 'class': 'form-control'}}) }}
                            </div>
                            <div class=\"form-group\">
                                <label class=\"container-custom\">En cochant cette case, je certifie être membre de l'association Arcades13127. Dans le cas contraire, rejoignez-nous <a href=\"{{ path('inscription') }}\">ici</a>.
                                    <input type=\"checkbox\"  required name=\"est_membre\">
                                    <span class=\"checkmark\"></span>
                                </label>

                            </div>
                            <div class=\"form-group\">
                                {{ form_row(form.save, { 'label': 'Je signe', 'attr': {'class': 'btn btn-primary'}}) }}
                            </div>
                            {{ form_end(form) }}
                        </div>
                    </div>
                </div>
                <div class=\"social-box\">
                    <h5>Cet article vous plaît? Partagez-le sur :</h5>
                    <div  class=\"fb-share-button\" data-href=\"{{ url }}\" data-layout=\"button_count\" data-size=\"small\"><a id=\"element1\" target=\"_blank\" href=\"https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse\" class=\"fb-xfbml-parse-ignore\">Partager</a></div>
                    <br><br>
                    <a id=\"element2\" href=\"https://twitter.com/share?ref_src=twsrc%5Etfw\" class=\"twitter-share-button\" data-show-count=\"false\">Tweet</a><script async src=\"https://platform.twitter.com/widgets.js\" charset=\"utf-8\"></script>
                </div>
            </div>
        </div>
    {% endblock %}
    {% block footer %}
        {{ parent() }}
    {% endblock %}
{% endblock %}
", "formulaire/show.html.twig", "/home/microvelcm/arcades/templates/formulaire/show.html.twig");
    }
}
