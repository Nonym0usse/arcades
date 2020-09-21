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
class __TwigTemplate_f8bfbeec62d68bce86fc139437ada9e86b5b6037d3d7864bf6a109f0c91eb88a extends \Twig\Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "formulaire/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["formulaire"] ?? null), "titre", [], "any", false, false, false, 3), "html", null, true);
        echo " - Association Arcades 13127 - Vitrolles";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
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
    }

    // line 7
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "        ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
    ";
    }

    // line 11
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "        ";
        $this->displayParentBlock("main", $context, $blocks);
        echo "

        <div class=\"container\">
            <div class=\"row\">
                <h1 class=\"article-name\">";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["formulaire"] ?? null), "titre", [], "any", false, false, false, 16), "html", null, true);
        echo "</h1>
                <img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset(($context["formulaire"] ?? null), "imageFile"), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["formulaire"] ?? null), "titre", [], "any", false, false, false, 17), "html", null, true);
        echo "\" class=\"img-article\">
                <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                    <h6 style=\"margin: 0 auto; text-align: center; color: darkgrey; padding-top: 20px\">Publié le :  ";
        // line 19
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["formulaire"] ?? null), "dates", [], "any", false, false, false, 19), "d-m-Y"), "html", null, true);
        echo "</h6>
                </div>
                <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                    <p class=\"paragraph\">
                        ";
        // line 23
        echo twig_get_attribute($this->env, $this->source, ($context["formulaire"] ?? null), "description", [], "any", false, false, false, 23);
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["class" => "form-horizontal", "attr" => ["class" => "form-horizontal", "id" => "myForm"]]);
        echo "
                            <div class=\"form-group\">
                                ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "nom", [], "any", false, false, false, 33), 'row', ["label" => "Nom", "attr" => ["placeholder" => "Votre nom", "class" => "form-control"]]);
        echo "
                            </div>
                            <div class=\"form-group\">
                                ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "prenom", [], "any", false, false, false, 36), 'row', ["label" => "Prénom", "attr" => ["placeholder" => "Votre prenom", "class" => "form-control"]]);
        echo "
                            </div>
                            <div class=\"form-group\">
                                ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "mail", [], "any", false, false, false, 39), 'row', ["label" => "E-mail", "attr" => ["placeholder" => "Votre e-mail", "class" => "form-control"]]);
        echo "
                            </div>
                            <div class=\"form-group\">
                                ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "tel", [], "any", false, false, false, 42), 'row', ["label" => "Téléphone", "attr" => ["placeholder" => "Votre téléphone", "class" => "form-control"]]);
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "save", [], "any", false, false, false, 52), 'row', ["label" => "Je signe", "attr" => ["class" => "btn btn-primary"]]);
        echo "
                            </div>
                            ";
        // line 54
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
                        </div>
                    </div>
                </div>
                <div class=\"social-box\">
                    <h5>Cet article vous plaît? Partagez-le sur :</h5>
                    <div  class=\"fb-share-button\" data-href=\"";
        // line 60
        echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
        echo "\" data-layout=\"button_count\" data-size=\"small\"><a id=\"element1\" target=\"_blank\" href=\"https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse\" class=\"fb-xfbml-parse-ignore\">Partager</a></div>
                    <br><br>
                    <a id=\"element2\" href=\"https://twitter.com/share?ref_src=twsrc%5Etfw\" class=\"twitter-share-button\" data-show-count=\"false\">Tweet</a><script async src=\"https://platform.twitter.com/widgets.js\" charset=\"utf-8\"></script>
                </div>
            </div>
        </div>
    ";
    }

    // line 67
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 68
        echo "        ";
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
    ";
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
        return array (  197 => 68,  193 => 67,  182 => 60,  173 => 54,  168 => 52,  158 => 45,  152 => 42,  146 => 39,  140 => 36,  134 => 33,  129 => 31,  118 => 23,  111 => 19,  104 => 17,  100 => 16,  92 => 12,  88 => 11,  81 => 8,  77 => 7,  72 => 67,  70 => 11,  67 => 10,  65 => 7,  62 => 6,  58 => 5,  50 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "formulaire/show.html.twig", "/Users/vellacyril/PhpstormProjects/arcades copie 2/templates/formulaire/show.html.twig");
    }
}
