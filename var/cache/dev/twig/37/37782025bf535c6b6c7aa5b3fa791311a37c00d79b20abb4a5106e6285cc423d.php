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

/* @EasyAdmin/page/login.html.twig */
class __TwigTemplate_f3c644d634049f3807f7a1dcf703d821a644e212665cdb7c6306f71034a4335b extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body_class' => [$this, 'block_body_class'],
            'wrapper_wrapper' => [$this, 'block_wrapper_wrapper'],
            'header_logo' => [$this, 'block_header_logo'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return $this->loadTemplate($this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getBackendConfiguration("design.templates.layout"), "@EasyAdmin/page/login.html.twig", 2);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/page/login.html.twig"));

        // line 1
        $context["__internal_8f3261eaabdf441b084b09d925732ab88546285950061441137236c2f1968cc8"] = $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getBackendConfiguration("translation_domain");
        // line 2
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_body_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_class"));

        echo "page-login";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_wrapper_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "wrapper_wrapper"));

        // line 7
        echo "    ";
        $context["_username_label"] = (((isset($context["username_label"]) || array_key_exists("username_label", $context))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["username_label"] ?? null), [],         // line 1
($context["__internal_8f3261eaabdf441b084b09d925732ab88546285950061441137236c2f1968cc8"] ?? null))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("login.username", [], "EasyAdminBundle")));
        // line 8
        echo "    ";
        $context["_password_label"] = (((isset($context["password_label"]) || array_key_exists("password_label", $context))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["password_label"] ?? null), [],         // line 1
($context["__internal_8f3261eaabdf441b084b09d925732ab88546285950061441137236c2f1968cc8"] ?? null))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("login.password", [], "EasyAdminBundle")));
        // line 9
        echo "    ";
        $context["_sign_in_label"] = (((isset($context["sign_in_label"]) || array_key_exists("sign_in_label", $context))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["sign_in_label"] ?? null), [],         // line 1
($context["__internal_8f3261eaabdf441b084b09d925732ab88546285950061441137236c2f1968cc8"] ?? null))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("login.sign_in", [], "EasyAdminBundle")));
        // line 10
        echo "
    <div class=\"login-wrapper\">
        <header class=\"main-header mb-4\">
            <div id=\"header-logo\">
                ";
        // line 14
        $this->displayBlock('header_logo', $context, $blocks);
        // line 19
        echo "            </div>
        </header>

        ";
        // line 22
        if ((((isset($context["error"]) || array_key_exists("error", $context))) ? (_twig_default_filter(($context["error"] ?? null), false)) : (false))) {
            // line 23
            echo "            <div class=\"w-100 alert alert-danger\">
                ";
            // line 24
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageKey", [], "any", false, false, false, 24), twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageData", [], "any", false, false, false, 24), "security"), "html", null, true);
            echo "
            </div>
        ";
        }
        // line 27
        echo "
        <section class=\"content\">
            <form method=\"post\" action=\"";
        // line 29
        echo twig_escape_filter($this->env, (((isset($context["action"]) || array_key_exists("action", $context))) ? (_twig_default_filter(($context["action"] ?? null), "")) : ("")), "html", null, true);
        echo "\">
                ";
        // line 30
        if ((((isset($context["csrf_token_intention"]) || array_key_exists("csrf_token_intention", $context))) ? (_twig_default_filter(($context["csrf_token_intention"] ?? null), false)) : (false))) {
            // line 31
            echo "                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(($context["csrf_token_intention"] ?? null)), "html", null, true);
            echo "\">
                ";
        }
        // line 33
        echo "
                <input type=\"hidden\" name=\"";
        // line 34
        echo twig_escape_filter($this->env, (((isset($context["target_path_parameter"]) || array_key_exists("target_path_parameter", $context))) ? (_twig_default_filter(($context["target_path_parameter"] ?? null), "_target_path")) : ("_target_path")), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, (((isset($context["target_path"]) || array_key_exists("target_path", $context))) ? (_twig_default_filter(($context["target_path"] ?? null), $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("easyadmin"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("easyadmin"))), "html", null, true);
        echo "\" />

                <div class=\"form-group field-text\">
                    <label for=\"username\" class=\"sr-only form-control-label required\">";
        // line 37
        echo twig_escape_filter($this->env, ($context["_username_label"] ?? null), "html", null, true);
        echo "</label>
                    <div class=\"form-widget form-widget-with-icon\">
                        <i class=\"fa fa-fw fa-user\"></i>
                        <input type=\"text\" id=\"username\" name=\"";
        // line 40
        echo twig_escape_filter($this->env, (((isset($context["username_parameter"]) || array_key_exists("username_parameter", $context))) ? (_twig_default_filter(($context["username_parameter"] ?? null), "_username")) : ("_username")), "html", null, true);
        echo "\" class=\"form-control\" placeholder=\"";
        echo twig_escape_filter($this->env, ($context["_username_label"] ?? null), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, (((isset($context["last_username"]) || array_key_exists("last_username", $context))) ? (_twig_default_filter(($context["last_username"] ?? null), "")) : ("")), "html", null, true);
        echo "\" required autofocus>
                    </div>
                </div>

                <div class=\"form-group field-password\">
                    <label for=\"password\" class=\"sr-only form-control-label required\">";
        // line 45
        echo twig_escape_filter($this->env, ($context["_password_label"] ?? null), "html", null, true);
        echo "</label>
                    <div class=\"form-widget form-widget-with-icon\">
                        <i class=\"fa fa-fw fa-lock\"></i>
                        <input type=\"password\" id=\"password\" name=\"";
        // line 48
        echo twig_escape_filter($this->env, (((isset($context["password_parameter"]) || array_key_exists("password_parameter", $context))) ? (_twig_default_filter(($context["password_parameter"] ?? null), "_password")) : ("_password")), "html", null, true);
        echo "\" class=\"form-control\" placeholder=\"";
        echo twig_escape_filter($this->env, ($context["_password_label"] ?? null), "html", null, true);
        echo "\" required>
                    </div>
                </div>

                <div class=\"form-group field-button\">
                    <button type=\"submit\" class=\"btn btn-primary btn-lg btn-block\" onclick=\"this.form.submit(); this.disabled=true;\">";
        // line 53
        echo twig_escape_filter($this->env, ($context["_sign_in_label"] ?? null), "html", null, true);
        echo "</button>
                </div>
            </form>
        </section>
    </div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 14
    public function block_header_logo($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header_logo"));

        // line 15
        echo "                    <a class=\"logo ";
        echo (((twig_length_filter($this->env, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getBackendConfiguration("site_name")) > 14)) ? ("logo-long") : (""));
        echo "\" title=\"";
        echo twig_escape_filter($this->env, strip_tags($this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getBackendConfiguration("site_name")), "html", null, true);
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("easyadmin");
        echo "\">
                        ";
        // line 16
        echo $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getBackendConfiguration("site_name");
        echo "
                    </a>
                ";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/page/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 16,  193 => 15,  186 => 14,  173 => 53,  163 => 48,  157 => 45,  145 => 40,  139 => 37,  131 => 34,  128 => 33,  122 => 31,  120 => 30,  116 => 29,  112 => 27,  106 => 24,  103 => 23,  101 => 22,  96 => 19,  94 => 14,  88 => 10,  86 => 1,  84 => 9,  82 => 1,  80 => 8,  78 => 1,  76 => 7,  69 => 6,  56 => 4,  49 => 2,  47 => 1,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/page/login.html.twig", "/Users/vellacyril/PhpstormProjects/arcades/vendor/easycorp/easyadmin-bundle/src/Resources/views/page/login.html.twig");
    }
}
