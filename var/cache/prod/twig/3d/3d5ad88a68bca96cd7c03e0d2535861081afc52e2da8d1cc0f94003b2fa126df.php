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

/* blog/index.html.twig */
class __TwigTemplate_f4ff09db39efffa78ff0e7308764b04fffc58cc465114f2d24a6b0b10e49b76c extends \Twig\Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "blog/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Association Arcades Vitrolles";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
    <div class=\"wrap\">
      ";
        // line 8
        $this->displayBlock('header', $context, $blocks);
        // line 11
        echo "
      ";
        // line 12
        $this->displayBlock('main', $context, $blocks);
        // line 119
        echo "
      <footer class=\"site-footer\">
        <div class=\"container\">
          <div class=\"row mb-5\">
            <div class=\"col-md-4\">
              <h3>A propos de nous</h3>
              <p>Notre association, issue de la loi de 1901,souhaite faire évoluer la démocratie ,sans entrer dans le jeu politique représentatif, en faisant intervenir le citoyen de façon active et responsable dans toutes les décisions qui concernent la cité.</p>
            </div>
            <div class=\"col-md-6 ml-auto\">
              <div class=\"row\">

                <div class=\"col-md-§\">

                  <div class=\"mb-5\">
                    <h3>Contact</h3>
                    <ul class=\"list-unstyled\">
                      <li><a href=\"#\">E-mail: arcades13127@orange.fr</a></li>
                    </ul>
                    <ul class=\"list-unstyled\">
                      <li><a href=\"#\">Tél: 06.08.215.215</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class=\"row\">
            <div class=\"col-md-12 text-center\">
              <br>
              <p class=\"small\">Nombres de visites</p>
              <img src=\"https://counter7.wheredoyoucomefrom.ovh/private/compteurdevisite.php?c=kutt64hbrmyt96wu7ld11y5192j4ysdk\" border=\"0\" title=\"compteur de visite\" alt=\"compteur de visite\">
              <br>
              <p class=\"small\" style=\"padding-top: 10px\">
                Copyright &copy; <script>document.write(new Date().getFullYear());</script> Tous droits réservés | Développé par <a href=\"https://microvella.com\" target=\"_blank\" title=\"Microvella\" >Cyril VELLA - Microvella</a>
              </p>
            </div>
          </div>
        </div>
      </footer>

    </div>
";
    }

    // line 8
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "        ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
      ";
    }

    // line 12
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "      ";
        $this->displayParentBlock("main", $context, $blocks);
        echo "


      <section class=\"site-section pt-5 pb-5\">
        <div class=\"container-fluid\">
          <div class=\"row\">
            <div class=\"col-md-12\">

              <div class=\"owl-carousel owl-theme home-slider\">
                <div>
                  <div class=\"a-block d-flex align-items-center height-lg\" style=\"background-image: url('/images/second.jpg'); background-position: top\">
                    <div class=\"text half-to-full\">
                      <h1 class=\"txt-presentation animated pulse infinite delay-2s\">";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["diapo"] ?? null), "diapo1", [], "any", false, false, false, 25), "html", null, true);
        echo "</h1>
                    </div>
                  </div>
                </div>

                <div>
                  <div class=\"a-block d-flex align-items-center height-lg\" style=\"background-image: url('/images/main.jpg'); background-position: center\">
                    <div class=\"text half-to-full\">
                      <h1 class=\"txt-presentation animated pulse infinite delay-2s\">";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["diapo"] ?? null), "diapo2", [], "any", false, false, false, 33), "html", null, true);
        echo "</h1>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>

        </div>


      </section>
      <!-- END section -->

      <section class=\"site-section py-sm\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-md-6\">
              <h2 class=\"mb-4\">Actualités</h2>
            </div>
          </div>
          <div class=\"row blog-entries\">
            <div class=\"col-md-12 col-lg-8 main-content\">
              <div class=\"row\">
                ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["articles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 59
            echo "                <div class=\"col-md-6\">
                  <a href=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 60)]), "html", null, true);
            echo "\" class=\"blog-entry element-animate\" data-animate-effect=\"fadeIn\">
                    <img src=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["article"], "imageFile"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "name", [], "any", false, false, false, 61), "html", null, true);
            echo "\">
                    <div class=\"blog-content-body\">
                      <div class=\"post-meta\">
                        <span class=\"mr-2\">Publié le : ";
            // line 64
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "dates", [], "any", false, false, false, 64), "d-m-Y"), "html", null, true);
            echo " </span>
                      </div>
                      <h2>";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "name", [], "any", false, false, false, 66), "html", null, true);
            echo "</h2>
                    </div>
                  </a>
                </div>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "                ";
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, ($context["articles"] ?? null));
        echo "
              </div>
            </div>

            <!-- END main-content -->

            <div class=\"col-md-12 col-lg-4 sidebar\">
              <!-- END sidebar-box -->
              <div class=\"sidebar-box\">
                <div class=\"bio text-center\">
                  <div class=\"bio-body\">
                    <h2>Qui sommes-nous?</h2>
                    <br>
                    <p>
                      Ce qui définit le progrès dans le domaine politique, c'est que sans trêve, les créateurs triomphent de l'esprit d'inertie sans que la violence ou qu'une révolution soit nécessaire.
                    <br>
                      Notre association, issue de la  loi de 1901,souhaite faire évoluer la démocratie ,sans entrer dans le jeu politique représentatif, en faisant intervenir le citoyen de façon active et responsable dans toutes les décisions qui concernent la cité.
                      <br>
                      Nous créons un site pour vous informer, et vous tenir au courant de toutes nos démarches auprès des  élus.
                      <br>
                      ADHEREZ à ARCADES13127!
                    </p>
                    <p class=\"social\">
                      <a href=\"#\" class=\"p-2\"><span class=\"fa fa-facebook\"></span></a>
                      <a href=\"#\" class=\"p-2\"><span class=\"fa fa-twitter\"></span></a>
                      <a href=\"#\" class=\"p-2\"><span class=\"fa fa-instagram\"></span></a>
                      <a href=\"#\" class=\"p-2\"><span class=\"fa fa-youtube-play\"></span></a>
                    </p>
                  </div>
                </div>
              </div>
              <!-- END sidebar-box -->
              <div class=\"sidebar-box\">
                <h3 class=\"heading\">Réseaux sociaux</h3>
                <div class=\"post-entry-sidebar\">
                  <div class=\"fb-page\" data-href=\"https://www.facebook.com/JelikeVitrolles/\" data-tabs=\"timeline\" data-width=\"\" data-height=\"\" data-small-header=\"false\" data-adapt-container-width=\"true\" data-hide-cover=\"false\" data-show-facepile=\"true\"><blockquote cite=\"https://www.facebook.com/JelikeVitrolles/\" class=\"fb-xfbml-parse-ignore\"><a href=\"https://www.facebook.com/JelikeVitrolles/\">Je Like Vitrolles</a></blockquote></div>
                </div>
              </div>
              <!-- END sidebar-box -->
            </div>
            <!-- END sidebar -->

          </div>
        </div>
      </section>


      ";
    }

    public function getTemplateName()
    {
        return "blog/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 71,  210 => 66,  205 => 64,  197 => 61,  193 => 60,  190 => 59,  186 => 58,  158 => 33,  147 => 25,  131 => 13,  127 => 12,  120 => 9,  116 => 8,  71 => 119,  69 => 12,  66 => 11,  64 => 8,  60 => 6,  56 => 5,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "blog/index.html.twig", "/Users/vellacyril/PhpstormProjects/arcades copie 2/templates/blog/index.html.twig");
    }
}
