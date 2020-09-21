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

/* cotisation/index.html.twig */
class __TwigTemplate_989456a73607a1a41453916d8068403874b9ca8b17f3eb2b638ac7a3feba3c6d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cotisation/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cotisation/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "cotisation/index.html.twig", 1);
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

        echo "Adhérez à l'association - Association Arcades13127 - Vitrolles";
        
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
        echo "    ";
        $this->displayBlock('header', $context, $blocks);
        // line 9
        echo "
    ";
        // line 10
        $this->displayBlock('main', $context, $blocks);
        // line 44
        echo "    ";
        $this->displayBlock('footer', $context, $blocks);
        // line 47
        echo "    <script>

        var montant = \"5\";

        \$( \"#amount\" ).change(function() {
            montant = \$(\"#amount\").val();

            if(montant == null || montant < 5){
                montant = \"5\";
            }
        });

        \$('#contactForm1').on('submit', function(e) {

            var form = \$(this);
            var url = form.attr('action');
            console.log(montant);

            \$.ajax({
                type: \"POST\",
                url: url,
                data: form.serialize(), // serializes the form's elements.
                success: function(data)
                {
                    alert(data); // show response from the php script.
                }
            });

        });
        paypal.Button.render({
            env: 'production',

            style: {
                layout: 'horizontal',  // horizontal | vertical
                size:   'medium',    // medium | large | responsive
                shape:  'rect',      // pill | rect
                color:  'black',
                tagline : 'false'      // gold | blue | silver | white | black
            },

            funding: {
                allowed: [
                    paypal.FUNDING.CARD
                ],
                disallowed: []
            },

            commit: true,

            client: {
                production: 'AdUG3irf2jvJ0m9vKcoVrohu5yRqtbTXXdHddus1s84PPOmgnQYzYN-HnJ4409RuL2FhgTOs65X6vVUb'
            },

            payment: function (data, actions) {
                return actions.payment.create({
                    payment: {
                        transactions: [
                            {
                                amount: {
                                    total: montant,
                                    currency: 'EUR'
                                }
                            }
                        ]
                    }
                });
            },

            onAuthorize: function (data, actions) {
                return actions.payment.execute()
                    .then(function () {
                        alert('Merci! Vous êtes désormais membre.');
                        document.getElementById(\"myForm\").submit();

                    });
            }
        }, '.paypal-button-container-1');

    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 7
        echo "        ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 11
        echo "        ";
        $this->displayParentBlock("main", $context, $blocks);
        echo "


        <div class=\"container\">
            <div class=\"row\">
                <h3 class=\"article-name\">La démocratie citoyenne se définit par la participation active et responsable des citoyens dans la décision politique locale , régionale et nationale.</h3>
                <p class=\"txt-complementaire\">Nous devons être nombreux afin de donner l'avis  citoyen qui n'est pas toujours celui du politique  ,engoncé dans le court terme et le soucis de sa réélection. C'est un problème d'organisation démocratique et non de personne. Il s'agit d'accompagner la décision représentative.</p>
                <img src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/main.jpg"), "html", null, true);
        echo "\"  alt=\"adherez\" class=\"img-adherer\">
                ";
        // line 19
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), 'form_start', ["class" => "form-horizontal", "attr" => ["class" => "form-horizontal", "id" => "myForm"]]);
        echo "
                <div class=\"form-group\">
                    ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "nom", [], "any", false, false, false, 21), 'row', ["label" => "Nom", "attr" => ["placeholder" => "Votre nom", "class" => "form-control"]]);
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "prenom", [], "any", false, false, false, 24), 'row', ["label" => "Prénom", "attr" => ["placeholder" => "Votre prenom", "class" => "form-control"]]);
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "mail", [], "any", false, false, false, 27), 'row', ["label" => "E-mail", "attr" => ["placeholder" => "Votre e-mail", "class" => "form-control"]]);
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "telephone", [], "any", false, false, false, 30), 'row', ["label" => "Téléphone", "attr" => ["placeholder" => "Votre téléphone", "class" => "form-control"]]);
        echo "
                </div>
                <div class=\"form-group\">
                    <label>Montant en € - <span style=\"color: red\">Une donation de 5€ minimum est nécessaire pour être membre de l'association.</span></label>
                    <input type=\"number\" class=\"form-control\" id=\"amount\" required>
                </div>
                <div id=\"paiement\" class=\"paypal-button-container-1\" style=\"padding-bottom: 10px\"></div>

                ";
        // line 38
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), 'form_end');
        echo "
            </div>
        </div>


    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 44
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 45
        echo "        ";
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "cotisation/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  299 => 45,  289 => 44,  273 => 38,  262 => 30,  256 => 27,  250 => 24,  244 => 21,  239 => 19,  235 => 18,  224 => 11,  214 => 10,  201 => 7,  191 => 6,  102 => 47,  99 => 44,  97 => 10,  94 => 9,  91 => 6,  81 => 5,  62 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Adhérez à l'association - Association Arcades13127 - Vitrolles{% endblock %}

{% block body %}
    {% block header %}
        {{ parent() }}
    {% endblock%}

    {% block main %}
        {{ parent() }}


        <div class=\"container\">
            <div class=\"row\">
                <h3 class=\"article-name\">La démocratie citoyenne se définit par la participation active et responsable des citoyens dans la décision politique locale , régionale et nationale.</h3>
                <p class=\"txt-complementaire\">Nous devons être nombreux afin de donner l'avis  citoyen qui n'est pas toujours celui du politique  ,engoncé dans le court terme et le soucis de sa réélection. C'est un problème d'organisation démocratique et non de personne. Il s'agit d'accompagner la décision représentative.</p>
                <img src=\"{{ asset('images/main.jpg') }}\"  alt=\"adherez\" class=\"img-adherer\">
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
                    {{ form_row(form.telephone, {'label': 'Téléphone', 'attr': {'placeholder': 'Votre téléphone', 'class': 'form-control'}}) }}
                </div>
                <div class=\"form-group\">
                    <label>Montant en € - <span style=\"color: red\">Une donation de 5€ minimum est nécessaire pour être membre de l'association.</span></label>
                    <input type=\"number\" class=\"form-control\" id=\"amount\" required>
                </div>
                <div id=\"paiement\" class=\"paypal-button-container-1\" style=\"padding-bottom: 10px\"></div>

                {{ form_end(form) }}
            </div>
        </div>


    {% endblock %}
    {% block footer %}
        {{ parent() }}
    {% endblock %}
    <script>

        var montant = \"5\";

        \$( \"#amount\" ).change(function() {
            montant = \$(\"#amount\").val();

            if(montant == null || montant < 5){
                montant = \"5\";
            }
        });

        \$('#contactForm1').on('submit', function(e) {

            var form = \$(this);
            var url = form.attr('action');
            console.log(montant);

            \$.ajax({
                type: \"POST\",
                url: url,
                data: form.serialize(), // serializes the form's elements.
                success: function(data)
                {
                    alert(data); // show response from the php script.
                }
            });

        });
        paypal.Button.render({
            env: 'production',

            style: {
                layout: 'horizontal',  // horizontal | vertical
                size:   'medium',    // medium | large | responsive
                shape:  'rect',      // pill | rect
                color:  'black',
                tagline : 'false'      // gold | blue | silver | white | black
            },

            funding: {
                allowed: [
                    paypal.FUNDING.CARD
                ],
                disallowed: []
            },

            commit: true,

            client: {
                production: 'AdUG3irf2jvJ0m9vKcoVrohu5yRqtbTXXdHddus1s84PPOmgnQYzYN-HnJ4409RuL2FhgTOs65X6vVUb'
            },

            payment: function (data, actions) {
                return actions.payment.create({
                    payment: {
                        transactions: [
                            {
                                amount: {
                                    total: montant,
                                    currency: 'EUR'
                                }
                            }
                        ]
                    }
                });
            },

            onAuthorize: function (data, actions) {
                return actions.payment.execute()
                    .then(function () {
                        alert('Merci! Vous êtes désormais membre.');
                        document.getElementById(\"myForm\").submit();

                    });
            }
        }, '.paypal-button-container-1');

    </script>
{% endblock %}
", "cotisation/index.html.twig", "/home/microvelcm/arcades/templates/cotisation/index.html.twig");
    }
}
