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
class __TwigTemplate_dc01aee9e5e105d8bc6041ce9630fe5468f4b70fd9177e2a9fb32c6ad8fb473e extends \Twig\Template
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

        $this->parent = $this->loadTemplate("base.html.twig", "cotisation/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Adhérez à l'association - Association Arcades13127 - Vitrolles";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 7
        echo "        ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
    ";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["class" => "form-horizontal", "attr" => ["class" => "form-horizontal", "id" => "myForm"]]);
        echo "
                <div class=\"form-group\">
                    ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "nom", [], "any", false, false, false, 21), 'row', ["label" => "Nom", "attr" => ["placeholder" => "Votre nom", "class" => "form-control"]]);
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "prenom", [], "any", false, false, false, 24), 'row', ["label" => "Prénom", "attr" => ["placeholder" => "Votre prenom", "class" => "form-control"]]);
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "mail", [], "any", false, false, false, 27), 'row', ["label" => "E-mail", "attr" => ["placeholder" => "Votre e-mail", "class" => "form-control"]]);
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "telephone", [], "any", false, false, false, 30), 'row', ["label" => "Téléphone", "attr" => ["placeholder" => "Votre téléphone", "class" => "form-control"]]);
        echo "
                </div>
                <div class=\"form-group\">
                    <label>Montant en € - <span style=\"color: red\">Une donation de 5€ minimum est nécessaire pour être membre de l'association.</span></label>
                    <input type=\"number\" class=\"form-control\" id=\"amount\" required>
                </div>
                <div id=\"paiement\" class=\"paypal-button-container-1\" style=\"padding-bottom: 10px\"></div>

                ";
        // line 38
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
            </div>
        </div>


    ";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 44
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 45
        echo "        ";
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
    ";
        
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
        return array (  266 => 45,  259 => 44,  246 => 38,  235 => 30,  229 => 27,  223 => 24,  217 => 21,  212 => 19,  208 => 18,  197 => 11,  190 => 10,  180 => 7,  173 => 6,  87 => 47,  84 => 44,  82 => 10,  79 => 9,  76 => 6,  69 => 5,  56 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "cotisation/index.html.twig", "/Users/vellacyril/PhpstormProjects/arcades/templates/cotisation/index.html.twig");
    }
}
