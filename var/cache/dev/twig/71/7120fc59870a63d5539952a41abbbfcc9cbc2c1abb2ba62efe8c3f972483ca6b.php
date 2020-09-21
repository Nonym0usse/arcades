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

/* gallery/index.html.twig */
class __TwigTemplate_ba5db81f850a55a26bd916bf3bcfabd3dbc4071d374e0d04fd4feded283ad5d5 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gallery/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gallery/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "gallery/index.html.twig", 1);
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

        echo "Galerie d'images - Association Arcades Vitrolles";
        
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
        // line 90
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
        <script>
            var initPhotoSwipeFromDOM = function(gallerySelector) {

                // parse slide data (url, title, size ...) from DOM elements
                // (children of gallerySelector)
                var parseThumbnailElements = function(el) {
                    var thumbElements = el.childNodes,
                        numNodes = thumbElements.length,
                        items = [],
                        figureEl,
                        linkEl,
                        size,
                        item;

                    for(var i = 0; i < numNodes; i++) {

                        figureEl = thumbElements[i]; // <figure> element
                        //console.log(thumbElements[i]);
                        // include only element nodes
                        if(figureEl.nodeType !== 1) {
                            continue;
                        }

                        linkEl = figureEl.children[0]; // <a> element
                        //console.log(linkEl);
                        size = linkEl.getAttribute('data-size').split('x');

                        // create slide object
                        item = {
                            src: linkEl.getAttribute('href'),
                            w: parseInt(size[0], 10),
                            h: parseInt(size[1], 10)
                        };



                        if(figureEl.children.length > 1) {
                            // <figcaption> content
                            item.title = figureEl.children[1].innerHTML;
                        }

                        if(linkEl.children.length > 0) {
                            // <img> thumbnail element, retrieving thumbnail url
                            item.msrc = linkEl.children[0].getAttribute('src');
                        }

                        item.el = figureEl; // save link to element for getThumbBoundsFn
                        items.push(item);
                    }

                    return items;
                };

                // find nearest parent element
                var closest = function closest(el, fn) {
                    return el && ( fn(el) ? el : closest(el.parentNode, fn) );
                };

                // triggers when user clicks on thumbnail
                var onThumbnailsClick = function(e) {
                    e = e || window.event;
                    e.preventDefault ? e.preventDefault() : e.returnValue = false;

                    var eTarget = e.target || e.srcElement;

                    // find root element of slide
                    var clickedListItem = closest(eTarget, function(el) {
                        return (el.tagName && el.tagName.toUpperCase() === 'FIGURE');
                    });

                    if(!clickedListItem) {
                        return;
                    }

                    // find index of clicked item by looping through all child nodes
                    // alternatively, you may define index via data- attribute
                    var clickedGallery = clickedListItem.parentNode,
                        childNodes = clickedListItem.parentNode.childNodes,
                        numChildNodes = childNodes.length,
                        nodeIndex = 0,
                        index;

                    for (var i = 0; i < numChildNodes; i++) {
                        if(childNodes[i].nodeType !== 1) {
                            continue;
                        }

                        if(childNodes[i] === clickedListItem) {
                            index = nodeIndex;
                            break;
                        }
                        nodeIndex++;
                    }



                    if(index >= 0) {
                        // open PhotoSwipe if valid index found
                        openPhotoSwipe( index, clickedGallery );
                    }
                    return false;
                };

                // parse picture index and gallery index from URL (#&pid=1&gid=2)
                var photoswipeParseHash = function() {
                    var hash = window.location.hash.substring(1),
                        params = {};

                    if(hash.length < 5) {
                        return params;
                    }

                    var vars = hash.split('&');
                    for (var i = 0; i < vars.length; i++) {
                        if(!vars[i]) {
                            continue;
                        }
                        var pair = vars[i].split('=');
                        if(pair.length < 2) {
                            continue;
                        }
                        params[pair[0]] = pair[1];
                    }

                    if(params.gid) {
                        params.gid = parseInt(params.gid, 10);
                    }

                    return params;
                };

                var openPhotoSwipe = function(index, galleryElement, disableAnimation, fromURL) {
                    var pswpElement = document.querySelectorAll('.pswp')[0],
                        gallery,
                        options,
                        items;

                    items = parseThumbnailElements(galleryElement);

                    // define options (if needed)
                    options = {

                        // define gallery index (for URL)
                        galleryUID: galleryElement.getAttribute('data-pswp-uid'),

                        getThumbBoundsFn: function(index) {
                            // See Options -> getThumbBoundsFn section of documentation for more info
                            var thumbnail = items[index].el.getElementsByTagName('img')[0], // find thumbnail
                                pageYScroll = window.pageYOffset || document.documentElement.scrollTop,
                                rect = thumbnail.getBoundingClientRect();

                            return {x:rect.left, y:rect.top + pageYScroll, w:rect.width};
                        }

                    };

                    // PhotoSwipe opened from URL
                    if(fromURL) {
                        if(options.galleryPIDs) {
                            // parse real index when custom PIDs are used
                            // http://photoswipe.com/documentation/faq.html#custom-pid-in-url
                            for(var j = 0; j < items.length; j++) {
                                if(items[j].pid == index) {
                                    options.index = j;
                                    break;
                                }
                            }
                        } else {
                            // in URL indexes start from 1
                            options.index = parseInt(index, 10) - 1;
                        }
                    } else {
                        options.index = parseInt(index, 10);
                    }

                    // exit if index not found
                    if( isNaN(options.index) ) {
                        return;
                    }

                    if(disableAnimation) {
                        options.showAnimationDuration = 0;
                    }

                    // Pass data to PhotoSwipe and initialize it
                    gallery = new PhotoSwipe( pswpElement, PhotoSwipeUI_Default, items, options);
                    gallery.init();
                };

                // loop through all gallery elements and bind events
                var galleryElements = document.querySelectorAll( gallerySelector );

                for(var i = 0, l = galleryElements.length; i < l; i++) {
                    galleryElements[i].setAttribute('data-pswp-uid', i+1);
                    galleryElements[i].onclick = onThumbnailsClick;
                }

                // Parse URL and open gallery if it contains #&pid=3&gid=1
                var hashData = photoswipeParseHash();
                if(hashData.pid && hashData.gid) {
                    openPhotoSwipe( hashData.pid ,  galleryElements[ hashData.gid - 1 ], true, true );
                }
            };

            // execute above function
            initPhotoSwipeFromDOM('.my-gallery');
        </script>

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
        echo "            ";
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
        echo "            ";
        $this->displayParentBlock("main", $context, $blocks);
        echo "


            <section class=\"site-section py-sm\">
                <div class=\"container\">
                    ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["text"]) || array_key_exists("text", $context) ? $context["text"] : (function () { throw new RuntimeError('Variable "text" does not exist.', 18, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["texts"]) {
            // line 19
            echo "                    <h1>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["texts"], "text", [], "any", false, false, false, 19), "html", null, true);
            echo "</h1>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['texts'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "                    <div class=\"row blog-entries\">
                        <div class=\"col-md-12\">
                                <div class=\"row\" style=\"padding-top: 40px\">
                                    ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["gallery"]) || array_key_exists("gallery", $context) ? $context["gallery"] : (function () { throw new RuntimeError('Variable "gallery" does not exist.', 24, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["picture"]) {
            // line 25
            echo "                                    <div class=\"col-lg-4 col-md-4 col-sm-12 col-xs-12\">
                                        <div class=\"my-gallery\" itemscope>
                                        <figure itemprop=\"associatedMedia\" itemscope itemtype=\"http://schema.org/ImageGallery\">
                                            <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["picture"], "imageFile"), "html", null, true);
            echo "\" itemprop=\"contentUrl\" title=\"Snoop Ray\" data-size=\"1024x1024\">
                                                <img src=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["picture"], "imageFile"), "html", null, true);
            echo "\" class=\"gallery-content\" itemprop=\"thumbnail\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["picture"], "subtitle", [], "any", false, false, false, 29), "html", null, true);
            echo "\" />
                                            </a>
                                            <figcaption itemprop=\"caption description\">";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["picture"], "subtitle", [], "any", false, false, false, 31), "html", null, true);
            echo "</figcaption>
                                        </figure>
                                        </div>
                                        <h6 class=\"subtitle-gallery\">";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["picture"], "subtitle", [], "any", false, false, false, 34), "html", null, true);
            echo "</h6>
                                    </div>

                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['picture'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "                            </div>

                            <div class=\"pswp\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
                                    <div class=\"pswp__bg\"></div>
                                    <div class=\"pswp__scroll-wrap\">
                                        <div class=\"pswp__container\">
                                            <div class=\"pswp__item\"></div>
                                            <div class=\"pswp__item\"></div>
                                            <div class=\"pswp__item\"></div>
                                        </div>

                                        <div class=\"pswp__ui pswp__ui--hidden\">
                                            <div class=\"pswp__top-bar\">
                                                <div class=\"pswp__counter\"></div>
                                                <button class=\"pswp__button pswp__button--close\" title=\"Close (Esc)\"></button>
                                                <button class=\"pswp__button pswp__button--share\" title=\"Share\"></button>
                                                <button class=\"pswp__button pswp__button--fs\" title=\"Toggle fullscreen\"></button>
                                                <button class=\"pswp__button pswp__button--zoom\" title=\"Zoom in/out\"></button>

                                                <div class=\"pswp__preloader\">
                                                    <div class=\"pswp__preloader__icn\">
                                                        <div class=\"pswp__preloader__cut\">
                                                            <div class=\"pswp__preloader__donut\"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class=\"pswp__share-modal pswp__share-modal--hidden pswp__single-tap\">
                                                <div class=\"pswp__share-tooltip\"></div>
                                            </div>

                                            <button class=\"pswp__button pswp__button--arrow--left\" title=\"Previous (arrow left)\">
                                            </button>
                                            <button class=\"pswp__button pswp__button--arrow--right\" title=\"Next (arrow right)\">
                                            </button>
                                            <div class=\"pswp__caption\">
                                                <div class=\"pswp__caption__center\"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                ";
        // line 81
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["gallery"]) || array_key_exists("gallery", $context) ? $context["gallery"] : (function () { throw new RuntimeError('Variable "gallery" does not exist.', 81, $this->source); })()));
        echo "
                            </div>
                        </div>
                    </div>
                </div>
            </section>


        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "gallery/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  500 => 81,  455 => 38,  445 => 34,  439 => 31,  432 => 29,  428 => 28,  423 => 25,  419 => 24,  414 => 21,  405 => 19,  401 => 18,  392 => 13,  382 => 12,  369 => 9,  359 => 8,  101 => 90,  99 => 12,  96 => 11,  94 => 8,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Galerie d'images - Association Arcades Vitrolles{% endblock %}

{% block body %}

    <div class=\"wrap\">
        {% block header %}
            {{ parent() }}
        {% endblock%}

        {% block main %}
            {{ parent() }}


            <section class=\"site-section py-sm\">
                <div class=\"container\">
                    {% for texts in text %}
                    <h1>{{texts.text}}</h1>
                    {% endfor %}
                    <div class=\"row blog-entries\">
                        <div class=\"col-md-12\">
                                <div class=\"row\" style=\"padding-top: 40px\">
                                    {% for picture in gallery %}
                                    <div class=\"col-lg-4 col-md-4 col-sm-12 col-xs-12\">
                                        <div class=\"my-gallery\" itemscope>
                                        <figure itemprop=\"associatedMedia\" itemscope itemtype=\"http://schema.org/ImageGallery\">
                                            <a href=\"{{ vich_uploader_asset(picture, 'imageFile') }}\" itemprop=\"contentUrl\" title=\"Snoop Ray\" data-size=\"1024x1024\">
                                                <img src=\"{{ vich_uploader_asset(picture, 'imageFile') }}\" class=\"gallery-content\" itemprop=\"thumbnail\" alt=\"{{ picture.subtitle }}\" />
                                            </a>
                                            <figcaption itemprop=\"caption description\">{{picture.subtitle}}</figcaption>
                                        </figure>
                                        </div>
                                        <h6 class=\"subtitle-gallery\">{{picture.subtitle}}</h6>
                                    </div>

                                    {% endfor %}
                            </div>

                            <div class=\"pswp\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
                                    <div class=\"pswp__bg\"></div>
                                    <div class=\"pswp__scroll-wrap\">
                                        <div class=\"pswp__container\">
                                            <div class=\"pswp__item\"></div>
                                            <div class=\"pswp__item\"></div>
                                            <div class=\"pswp__item\"></div>
                                        </div>

                                        <div class=\"pswp__ui pswp__ui--hidden\">
                                            <div class=\"pswp__top-bar\">
                                                <div class=\"pswp__counter\"></div>
                                                <button class=\"pswp__button pswp__button--close\" title=\"Close (Esc)\"></button>
                                                <button class=\"pswp__button pswp__button--share\" title=\"Share\"></button>
                                                <button class=\"pswp__button pswp__button--fs\" title=\"Toggle fullscreen\"></button>
                                                <button class=\"pswp__button pswp__button--zoom\" title=\"Zoom in/out\"></button>

                                                <div class=\"pswp__preloader\">
                                                    <div class=\"pswp__preloader__icn\">
                                                        <div class=\"pswp__preloader__cut\">
                                                            <div class=\"pswp__preloader__donut\"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class=\"pswp__share-modal pswp__share-modal--hidden pswp__single-tap\">
                                                <div class=\"pswp__share-tooltip\"></div>
                                            </div>

                                            <button class=\"pswp__button pswp__button--arrow--left\" title=\"Previous (arrow left)\">
                                            </button>
                                            <button class=\"pswp__button pswp__button--arrow--right\" title=\"Next (arrow right)\">
                                            </button>
                                            <div class=\"pswp__caption\">
                                                <div class=\"pswp__caption__center\"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{ knp_pagination_render(gallery) }}
                            </div>
                        </div>
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
        <script>
            var initPhotoSwipeFromDOM = function(gallerySelector) {

                // parse slide data (url, title, size ...) from DOM elements
                // (children of gallerySelector)
                var parseThumbnailElements = function(el) {
                    var thumbElements = el.childNodes,
                        numNodes = thumbElements.length,
                        items = [],
                        figureEl,
                        linkEl,
                        size,
                        item;

                    for(var i = 0; i < numNodes; i++) {

                        figureEl = thumbElements[i]; // <figure> element
                        //console.log(thumbElements[i]);
                        // include only element nodes
                        if(figureEl.nodeType !== 1) {
                            continue;
                        }

                        linkEl = figureEl.children[0]; // <a> element
                        //console.log(linkEl);
                        size = linkEl.getAttribute('data-size').split('x');

                        // create slide object
                        item = {
                            src: linkEl.getAttribute('href'),
                            w: parseInt(size[0], 10),
                            h: parseInt(size[1], 10)
                        };



                        if(figureEl.children.length > 1) {
                            // <figcaption> content
                            item.title = figureEl.children[1].innerHTML;
                        }

                        if(linkEl.children.length > 0) {
                            // <img> thumbnail element, retrieving thumbnail url
                            item.msrc = linkEl.children[0].getAttribute('src');
                        }

                        item.el = figureEl; // save link to element for getThumbBoundsFn
                        items.push(item);
                    }

                    return items;
                };

                // find nearest parent element
                var closest = function closest(el, fn) {
                    return el && ( fn(el) ? el : closest(el.parentNode, fn) );
                };

                // triggers when user clicks on thumbnail
                var onThumbnailsClick = function(e) {
                    e = e || window.event;
                    e.preventDefault ? e.preventDefault() : e.returnValue = false;

                    var eTarget = e.target || e.srcElement;

                    // find root element of slide
                    var clickedListItem = closest(eTarget, function(el) {
                        return (el.tagName && el.tagName.toUpperCase() === 'FIGURE');
                    });

                    if(!clickedListItem) {
                        return;
                    }

                    // find index of clicked item by looping through all child nodes
                    // alternatively, you may define index via data- attribute
                    var clickedGallery = clickedListItem.parentNode,
                        childNodes = clickedListItem.parentNode.childNodes,
                        numChildNodes = childNodes.length,
                        nodeIndex = 0,
                        index;

                    for (var i = 0; i < numChildNodes; i++) {
                        if(childNodes[i].nodeType !== 1) {
                            continue;
                        }

                        if(childNodes[i] === clickedListItem) {
                            index = nodeIndex;
                            break;
                        }
                        nodeIndex++;
                    }



                    if(index >= 0) {
                        // open PhotoSwipe if valid index found
                        openPhotoSwipe( index, clickedGallery );
                    }
                    return false;
                };

                // parse picture index and gallery index from URL (#&pid=1&gid=2)
                var photoswipeParseHash = function() {
                    var hash = window.location.hash.substring(1),
                        params = {};

                    if(hash.length < 5) {
                        return params;
                    }

                    var vars = hash.split('&');
                    for (var i = 0; i < vars.length; i++) {
                        if(!vars[i]) {
                            continue;
                        }
                        var pair = vars[i].split('=');
                        if(pair.length < 2) {
                            continue;
                        }
                        params[pair[0]] = pair[1];
                    }

                    if(params.gid) {
                        params.gid = parseInt(params.gid, 10);
                    }

                    return params;
                };

                var openPhotoSwipe = function(index, galleryElement, disableAnimation, fromURL) {
                    var pswpElement = document.querySelectorAll('.pswp')[0],
                        gallery,
                        options,
                        items;

                    items = parseThumbnailElements(galleryElement);

                    // define options (if needed)
                    options = {

                        // define gallery index (for URL)
                        galleryUID: galleryElement.getAttribute('data-pswp-uid'),

                        getThumbBoundsFn: function(index) {
                            // See Options -> getThumbBoundsFn section of documentation for more info
                            var thumbnail = items[index].el.getElementsByTagName('img')[0], // find thumbnail
                                pageYScroll = window.pageYOffset || document.documentElement.scrollTop,
                                rect = thumbnail.getBoundingClientRect();

                            return {x:rect.left, y:rect.top + pageYScroll, w:rect.width};
                        }

                    };

                    // PhotoSwipe opened from URL
                    if(fromURL) {
                        if(options.galleryPIDs) {
                            // parse real index when custom PIDs are used
                            // http://photoswipe.com/documentation/faq.html#custom-pid-in-url
                            for(var j = 0; j < items.length; j++) {
                                if(items[j].pid == index) {
                                    options.index = j;
                                    break;
                                }
                            }
                        } else {
                            // in URL indexes start from 1
                            options.index = parseInt(index, 10) - 1;
                        }
                    } else {
                        options.index = parseInt(index, 10);
                    }

                    // exit if index not found
                    if( isNaN(options.index) ) {
                        return;
                    }

                    if(disableAnimation) {
                        options.showAnimationDuration = 0;
                    }

                    // Pass data to PhotoSwipe and initialize it
                    gallery = new PhotoSwipe( pswpElement, PhotoSwipeUI_Default, items, options);
                    gallery.init();
                };

                // loop through all gallery elements and bind events
                var galleryElements = document.querySelectorAll( gallerySelector );

                for(var i = 0, l = galleryElements.length; i < l; i++) {
                    galleryElements[i].setAttribute('data-pswp-uid', i+1);
                    galleryElements[i].onclick = onThumbnailsClick;
                }

                // Parse URL and open gallery if it contains #&pid=3&gid=1
                var hashData = photoswipeParseHash();
                if(hashData.pid && hashData.gid) {
                    openPhotoSwipe( hashData.pid ,  galleryElements[ hashData.gid - 1 ], true, true );
                }
            };

            // execute above function
            initPhotoSwipeFromDOM('.my-gallery');
        </script>

    </div>
{% endblock %}
", "gallery/index.html.twig", "/home/microvelcm/arcades/templates/gallery/index.html.twig");
    }
}
