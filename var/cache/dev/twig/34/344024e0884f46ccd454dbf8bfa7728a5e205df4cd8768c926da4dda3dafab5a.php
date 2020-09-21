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
class __TwigTemplate_02c754f9dbbca10d12807fb800dc43452c089e525abe128af9b205d3a13073c6 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "blog/index.html.twig", 1);
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

        echo "Association Arcades Vitrolles";
        
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 9
        echo "        ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
      ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["diapo"]) || array_key_exists("diapo", $context) ? $context["diapo"] : (function () { throw new RuntimeError('Variable "diapo" does not exist.', 25, $this->source); })()), "diapo1", [], "any", false, false, false, 25), "html", null, true);
        echo "</h1>
                    </div>
                  </div>
                </div>

                <div>
                  <div class=\"a-block d-flex align-items-center height-lg\" style=\"background-image: url('/images/main.jpg'); background-position: center\">
                    <div class=\"text half-to-full\">
                      <h1 class=\"txt-presentation animated pulse infinite delay-2s\">";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["diapo"]) || array_key_exists("diapo", $context) ? $context["diapo"] : (function () { throw new RuntimeError('Variable "diapo" does not exist.', 33, $this->source); })()), "diapo2", [], "any", false, false, false, 33), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 58, $this->source); })()));
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
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 71, $this->source); })()));
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  275 => 71,  264 => 66,  259 => 64,  251 => 61,  247 => 60,  244 => 59,  240 => 58,  212 => 33,  201 => 25,  185 => 13,  175 => 12,  162 => 9,  152 => 8,  101 => 119,  99 => 12,  96 => 11,  94 => 8,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Association Arcades Vitrolles{% endblock %}

{% block body %}

    <div class=\"wrap\">
      {% block header %}
        {{ parent() }}
      {% endblock%}

      {% block main %}
      {{ parent() }}


      <section class=\"site-section pt-5 pb-5\">
        <div class=\"container-fluid\">
          <div class=\"row\">
            <div class=\"col-md-12\">

              <div class=\"owl-carousel owl-theme home-slider\">
                <div>
                  <div class=\"a-block d-flex align-items-center height-lg\" style=\"background-image: url('/images/second.jpg'); background-position: top\">
                    <div class=\"text half-to-full\">
                      <h1 class=\"txt-presentation animated pulse infinite delay-2s\">{{ diapo.diapo1 }}</h1>
                    </div>
                  </div>
                </div>

                <div>
                  <div class=\"a-block d-flex align-items-center height-lg\" style=\"background-image: url('/images/main.jpg'); background-position: center\">
                    <div class=\"text half-to-full\">
                      <h1 class=\"txt-presentation animated pulse infinite delay-2s\">{{ diapo.diapo2 }}</h1>
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
                {% for article in articles %}
                <div class=\"col-md-6\">
                  <a href=\"{{ path('show', {'id': article.id}) }}\" class=\"blog-entry element-animate\" data-animate-effect=\"fadeIn\">
                    <img src=\"{{ vich_uploader_asset(article, 'imageFile') }}\" alt=\"{{ article.name }}\">
                    <div class=\"blog-content-body\">
                      <div class=\"post-meta\">
                        <span class=\"mr-2\">Publié le : {{ article.dates |date('d-m-Y')}} </span>
                      </div>
                      <h2>{{ article.name }}</h2>
                    </div>
                  </a>
                </div>
              {% endfor %}
                {{ knp_pagination_render(articles) }}
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


      {% endblock %}

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
{% endblock %}
", "blog/index.html.twig", "/Users/vellacyril/PhpstormProjects/arcades/templates/blog/index.html.twig");
    }
}
