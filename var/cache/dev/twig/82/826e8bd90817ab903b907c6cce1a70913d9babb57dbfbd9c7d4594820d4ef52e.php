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

/* @EasyAdmin/default/list.html.twig */
class __TwigTemplate_e48dcf0d9a1eb1362663725854c2667fbaa9b82eed6228424c36fef568124916 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body_id' => [$this, 'block_body_id'],
            'body_class' => [$this, 'block_body_class'],
            'content_title' => [$this, 'block_content_title'],
            'global_actions' => [$this, 'block_global_actions'],
            'search_action' => [$this, 'block_search_action'],
            'search_form' => [$this, 'block_search_form'],
            'filters_action' => [$this, 'block_filters_action'],
            'new_action' => [$this, 'block_new_action'],
            'batch_actions' => [$this, 'block_batch_actions'],
            'content_header' => [$this, 'block_content_header'],
            'main' => [$this, 'block_main'],
            'table_head' => [$this, 'block_table_head'],
            'table_body' => [$this, 'block_table_body'],
            'item_actions' => [$this, 'block_item_actions'],
            'delete_form' => [$this, 'block_delete_form'],
            'content_footer' => [$this, 'block_content_footer'],
            'paginator' => [$this, 'block_paginator'],
            'body_javascript' => [$this, 'block_body_javascript'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 5
        return $this->loadTemplate(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "templates", [], "any", false, false, false, 5), "layout", [], "any", false, false, false, 5), "@EasyAdmin/default/list.html.twig", 5);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/default/list.html.twig"));

        // line 1
        $context["_entity_config"] = $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getEntityConfiguration(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 1), "query", [], "any", false, false, false, 1), "get", [0 => "entity"], "method", false, false, false, 1));
        // line 2
        $context["__internal_211b571dfe9a34faeae28a7d1c31b38094a7445744418f2974d64147a26f391c"] = twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "translation_domain", [], "any", false, false, false, 2);
        // line 3
        $context["_trans_parameters"] = ["%entity_name%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "name", [], "any", false, false, false, 3), [],         // line 2
($context["__internal_211b571dfe9a34faeae28a7d1c31b38094a7445744418f2974d64147a26f391c"] ?? null)), "%entity_label%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source,         // line 3
($context["_entity_config"] ?? null), "label", [], "any", false, false, false, 3), [],         // line 2
($context["__internal_211b571dfe9a34faeae28a7d1c31b38094a7445744418f2974d64147a26f391c"] ?? null))];
        // line 7
        $context["_request_parameters"] = twig_array_merge(twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 7), "query", [], "any", false, false, false, 7), "all", [], "any", false, false, false, 7), (((isset($context["_request_parameters"]) || array_key_exists("_request_parameters", $context))) ? (_twig_default_filter(($context["_request_parameters"] ?? null), [])) : ([]))), ["action" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 8
($context["app"] ?? null), "request", [], "any", false, false, false, 8), "get", [0 => "action"], "method", false, false, false, 8), "entity" => twig_get_attribute($this->env, $this->source,         // line 9
($context["_entity_config"] ?? null), "name", [], "any", false, false, false, 9), "menuIndex" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 10
($context["app"] ?? null), "request", [], "any", false, false, false, 10), "get", [0 => "menuIndex"], "method", false, false, false, 10), "submenuIndex" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 11
($context["app"] ?? null), "request", [], "any", false, false, false, 11), "get", [0 => "submenuIndex"], "method", false, false, false, 11), "sortField" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 12
($context["app"] ?? null), "request", [], "any", false, false, false, 12), "get", [0 => "sortField"], "method", false, false, false, 12), "sortDirection" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 13
($context["app"] ?? null), "request", [], "any", false, false, false, 13), "get", [0 => "sortDirection"], "method", false, false, false, 13), "page" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 14
($context["app"] ?? null), "request", [], "any", false, false, false, 14), "get", [0 => "page", 1 => 1], "method", false, false, false, 14), "filters" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 15
($context["app"] ?? null), "request", [], "any", false, false, false, 15), "get", [0 => "filters", 1 => []], "method", false, false, false, 15), "referer" => null]);
        // line 19
        if (("search" == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 19), "get", [0 => "action"], "method", false, false, false, 19))) {
            // line 20
            $context["_request_parameters"] = twig_array_merge(($context["_request_parameters"] ?? null), ["query" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 21
($context["app"] ?? null), "request", [], "any", false, true, false, 21), "get", [0 => "query"], "method", true, true, false, 21)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 21), "get", [0 => "query"], "method", false, false, false, 21), "")) : (""))]);
        }
        // line 25
        $context["_request_parameters"] = twig_array_merge(($context["_request_parameters"] ?? null), ["referer" => twig_urlencode_filter($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("easyadmin", ($context["_request_parameters"] ?? null)))]);
        // line 26
        $context["_has_batch_actions"] = ((isset($context["batch_form"]) || array_key_exists("batch_form", $context)) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["batch_form"] ?? null), "vars", [], "any", false, false, false, 26), "batch_actions", [], "any", false, false, false, 26)) > 0));
        // line 27
        $context["_has_filters"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "list", [], "any", false, true, false, 27), "filters", [], "any", true, true, false, 27)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "list", [], "any", false, true, false, 27), "filters", [], "any", false, false, false, 27), false)) : (false));
        // line 5
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 29
    public function block_body_id($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_id"));

        echo twig_escape_filter($this->env, ("easyadmin-list-" . twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "name", [], "any", false, false, false, 29)), "html", null, true);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 30
    public function block_body_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("list list-" . twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "name", [], "any", false, false, false, 30))), "html", null, true);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 32
    public function block_content_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_title"));

        // line 33
        echo "    ";
        ob_start(function () { return ''; });
        // line 34
        echo "        ";
        if (("search" == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 34), "get", [0 => "action"], "method", false, false, false, 34))) {
            // line 35
            echo "            ";
            $context["_default_title"] = $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->transchoice("search.page_title", twig_get_attribute($this->env, $this->source, ($context["paginator"] ?? null), "nbResults", [], "any", false, false, false, 35), [], "EasyAdminBundle");
            // line 36
            echo "            ";
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "search", [], "any", false, true, false, 36), "title", [], "any", true, true, false, 36)) ? ($this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->transchoice(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "search", [], "any", false, false, false, 36), "title", [], "any", false, false, false, 36), twig_get_attribute($this->env, $this->source, ($context["paginator"] ?? null), "nbResults", [], "any", false, false, false, 36), [],             // line 2
($context["__internal_211b571dfe9a34faeae28a7d1c31b38094a7445744418f2974d64147a26f391c"] ?? null))) : (            // line 36
($context["_default_title"] ?? null)));
            echo "
        ";
        } else {
            // line 38
            echo "            ";
            $context["_default_title"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("list.page_title", ($context["_trans_parameters"] ?? null), "EasyAdminBundle");
            // line 39
            echo "            ";
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "list", [], "any", false, true, false, 39), "title", [], "any", true, true, false, 39)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "list", [], "any", false, false, false, 39), "title", [], "any", false, false, false, 39), ($context["_trans_parameters"] ?? null),             // line 2
($context["__internal_211b571dfe9a34faeae28a7d1c31b38094a7445744418f2974d64147a26f391c"] ?? null))) : (            // line 39
($context["_default_title"] ?? null)));
            echo "
        ";
        }
        // line 41
        echo "    ";
        $___internal_6f6b739bcbdf4ca234c388aa0a6820fa13aa88e4991a88b6a4df9ff7a2e05aa8_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 33
        echo twig_spaceless($___internal_6f6b739bcbdf4ca234c388aa0a6820fa13aa88e4991a88b6a4df9ff7a2e05aa8_);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 44
    public function block_global_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "global_actions"));

        // line 45
        echo "    ";
        if ($this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->isActionEnabled("list", "search", twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "name", [], "any", false, false, false, 45))) {
            // line 46
            echo "        ";
            $context["_action"] = $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getActionConfiguration("list", "search", twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "name", [], "any", false, false, false, 46));
            // line 47
            echo "
        ";
            // line 48
            $this->displayBlock('search_action', $context, $blocks);
            // line 80
            echo "    ";
        }
        // line 81
        echo "
    ";
        // line 82
        if (($context["_has_filters"] ?? null)) {
            // line 83
            echo "        ";
            $context["_applied_filters"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 83), "attributes", [], "any", false, true, false, 83), "get", [0 => "easyadmin"], "method", false, true, false, 83), "filters", [], "any", false, true, false, 83), "applied", [], "any", true, true, false, 83)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 83), "attributes", [], "any", false, true, false, 83), "get", [0 => "easyadmin"], "method", false, true, false, 83), "filters", [], "any", false, true, false, 83), "applied", [], "any", false, false, false, 83), false)) : (false));
            // line 84
            echo "        ";
            $this->displayBlock('filters_action', $context, $blocks);
            // line 96
            echo "    ";
        }
        // line 97
        echo "
    ";
        // line 98
        if ($this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->isActionEnabled("list", "new", twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "name", [], "any", false, false, false, 98))) {
            // line 99
            echo "        ";
            $context["_action"] = $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getActionConfiguration("list", "new", twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "name", [], "any", false, false, false, 99));
            // line 100
            echo "        ";
            $this->displayBlock('new_action', $context, $blocks);
            // line 108
            echo "    ";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 48
    public function block_search_action($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "search_action"));

        // line 49
        echo "            <div class=\"form-action form-action-search ";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["_action"] ?? null), "css_class", [], "any", true, true, false, 49)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["_action"] ?? null), "css_class", [], "any", false, false, false, 49), "")) : ("")), "html", null, true);
        echo "\">
                <form method=\"get\" action=\"";
        // line 50
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("easyadmin");
        echo "\">
                    ";
        // line 51
        $this->displayBlock('search_form', $context, $blocks);
        // line 77
        echo "                </form>
            </div>
        ";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 51
    public function block_search_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "search_form"));

        // line 52
        echo "                        <input type=\"hidden\" name=\"action\" value=\"search\">
                        <input type=\"hidden\" name=\"entity\" value=\"";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["_request_parameters"] ?? null), "entity", [], "any", false, false, false, 53), "html", null, true);
        echo "\">
                        ";
        // line 60
        echo "                        ";
        if (twig_in_filter("sortField", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 60), "uri", [], "any", false, false, false, 60))) {
            // line 61
            echo "                            <input type=\"hidden\" name=\"sortField\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["_request_parameters"] ?? null), "sortField", [], "any", false, false, false, 61), "html", null, true);
            echo "\">
                        ";
        }
        // line 63
        echo "                        ";
        if (twig_in_filter("sortDirection", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 63), "uri", [], "any", false, false, false, 63))) {
            // line 64
            echo "                            <input type=\"hidden\" name=\"sortDirection\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["_request_parameters"] ?? null), "sortDirection", [], "any", false, false, false, 64), "html", null, true);
            echo "\">
                        ";
        }
        // line 66
        echo "                        <input type=\"hidden\" name=\"menuIndex\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["_request_parameters"] ?? null), "menuIndex", [], "any", false, false, false, 66), "html", null, true);
        echo "\">
                        <input type=\"hidden\" name=\"submenuIndex\" value=\"";
        // line 67
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["_request_parameters"] ?? null), "submenuIndex", [], "any", false, false, false, 67), "html", null, true);
        echo "\">
                        ";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getFormHiddenParams(twig_get_attribute($this->env, $this->source, ($context["_request_parameters"] ?? null), "filters", [], "any", false, false, false, 68), "filters"));
        foreach ($context['_seq'] as $context["name"] => $context["value"]) {
            // line 69
            echo "                        <input type=\"hidden\" name=\"";
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "\">
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "                        <div class=\"form-group\">
                            <div class=\"form-widget\">
                                <input class=\"form-control\" type=\"search\" name=\"query\" value=\"";
        // line 73
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 73), "get", [0 => "query"], "method", true, true, false, 73)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 73), "get", [0 => "query"], "method", false, false, false, 73), "")) : ("")), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((twig_get_attribute($this->env, $this->source, ($context["_action"] ?? null), "label", [], "any", true, true, false, 73)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["_action"] ?? null), "label", [], "any", false, false, false, 73), "action.search")) : ("action.search")), ($context["_trans_parameters"] ?? null),         // line 2
($context["__internal_211b571dfe9a34faeae28a7d1c31b38094a7445744418f2974d64147a26f391c"] ?? null)), "html", null, true);
        // line 73
        echo "\">
                            </div>
                        </div>
                    ";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 84
    public function block_filters_action($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "filters_action"));

        // line 85
        echo "            <div class=\"btn-group action-filters\">
                <a href=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("easyadmin", twig_array_merge(($context["_request_parameters"] ?? null), ["action" => "filters", "referer_action" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 86), "get", [0 => "action"], "method", false, false, false, 86)])), "html", null, true);
        echo "\" class=\"btn btn-secondary btn-labeled btn-labeled-right action-filters-button ";
        echo ((($context["_applied_filters"] ?? null)) ? ("action-filters-applied") : (""));
        echo "\" data-modal=\"#modal-filters\">
                    <i class=\"fa fa-filter fa-fw\"></i> ";
        // line 87
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("filter.title", ($context["_trans_parameters"] ?? null), "EasyAdminBundle"), "html", null, true);
        if (($context["_applied_filters"] ?? null)) {
            echo " <span class=\"text-primary\">(";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["_applied_filters"] ?? null)), "html", null, true);
            echo ")</span>";
        }
        // line 88
        echo "                </a>
                ";
        // line 89
        if (($context["_applied_filters"] ?? null)) {
            // line 90
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("easyadmin", twig_array_merge(($context["_request_parameters"] ?? null), ["filters" => null])), "html", null, true);
            echo "\" class=\"btn btn-secondary action-filters-reset\">
                        <i class=\"fa fa-close\"></i>
                    </a>
                ";
        }
        // line 94
        echo "            </div>
        ";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 100
    public function block_new_action($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "new_action"));

        // line 101
        echo "            <div class=\"button-action\">
                <a class=\"";
        // line 102
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["_action"] ?? null), "css_class", [], "any", true, true, false, 102)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["_action"] ?? null), "css_class", [], "any", false, false, false, 102), "")) : ("")), "html", null, true);
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("easyadmin", twig_array_merge(($context["_request_parameters"] ?? null), ["action" => twig_get_attribute($this->env, $this->source, ($context["_action"] ?? null), "name", [], "any", false, false, false, 102)])), "html", null, true);
        echo "\" target=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["_action"] ?? null), "target", [], "any", false, false, false, 102), "html", null, true);
        echo "\">
                    ";
        // line 103
        if (twig_get_attribute($this->env, $this->source, ($context["_action"] ?? null), "icon", [], "any", false, false, false, 103)) {
            echo "<i class=\"fa fa-fw fa-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["_action"] ?? null), "icon", [], "any", false, false, false, 103), "html", null, true);
            echo "\"></i>";
        }
        // line 104
        echo "                    ";
        (((twig_get_attribute($this->env, $this->source, ($context["_action"] ?? null), "label", [], "any", true, true, false, 104) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["_action"] ?? null), "label", [], "any", false, false, false, 104)))) ? (print (twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["_action"] ?? null), "label", [], "any", false, false, false, 104), ($context["_trans_parameters"] ?? null),         // line 2
($context["__internal_211b571dfe9a34faeae28a7d1c31b38094a7445744418f2974d64147a26f391c"] ?? null)), "html", null, true))) : (print ("")));
        // line 104
        echo "
                </a>
            </div>
        ";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 111
    public function block_batch_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "batch_actions"));

        // line 112
        echo "    ";
        if (($context["_has_batch_actions"] ?? null)) {
            // line 113
            echo "        <div class=\"batch-actions\" style=\"display: none\">
            ";
            // line 114
            $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["batch_form"] ?? null), $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getBackendConfiguration("design.form_theme"), false);
            // line 115
            echo "            ";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["batch_form"] ?? null), 'form');
            echo "

            ";
            // line 117
            echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_batch_action_modal.html.twig", ["_translation_domain" => twig_get_attribute($this->env, $this->source,             // line 118
($context["_entity_config"] ?? null), "translation_domain", [], "any", false, false, false, 118), "_trans_parameters" =>             // line 119
($context["_trans_parameters"] ?? null), "_entity_config" =>             // line 120
($context["_entity_config"] ?? null)], false);
            // line 121
            echo "
        </div>
    ";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 126
    public function block_content_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_header"));

        // line 127
        echo "    ";
        $this->displayParentBlock("content_header", $context, $blocks);
        echo "
    ";
        // line 128
        $this->displayBlock("batch_actions", $context, $blocks);
        echo "
    ";
        // line 129
        if (($context["_has_filters"] ?? null)) {
            // line 130
            echo "        ";
            echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_filters_modal.html.twig");
            echo "
    ";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 134
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 135
        echo "    ";
        $context["_fields_visible_by_user"] = twig_array_filter(($context["fields"] ?? null), function ($__metadata__, $__field__) use ($context, $macros) { $context["metadata"] = $__metadata__; $context["field"] = $__field__; return $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->isGranted(twig_get_attribute($this->env, $this->source, ($context["metadata"] ?? null), "permission", [], "any", false, false, false, 135)); });
        // line 136
        echo "    ";
        $context["_number_of_hidden_results"] = 0;
        // line 137
        echo "    ";
        $context["_list_item_actions"] = $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getActionsForItem("list", twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "name", [], "any", false, false, false, 137));
        // line 138
        echo "
    <table class=\"table datagrid\">
        <thead>
        ";
        // line 141
        $this->displayBlock('table_head', $context, $blocks);
        // line 171
        echo "        </thead>

        <tbody>
        ";
        // line 174
        $this->displayBlock('table_body', $context, $blocks);
        // line 233
        echo "        </tbody>
    </table>

    ";
        // line 236
        $this->displayBlock('delete_form', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 141
    public function block_table_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_head"));

        // line 142
        echo "            <tr>
                ";
        // line 143
        if (($context["_has_batch_actions"] ?? null)) {
            // line 144
            echo "                    <th width=\"1px\"><span><input type=\"checkbox\" class=\"form-batch-checkbox-all\"></span></th>
                ";
        }
        // line 146
        echo "
                ";
        // line 147
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["_fields_visible_by_user"] ?? null));
        foreach ($context['_seq'] as $context["field"] => $context["metadata"]) {
            // line 148
            echo "                    ";
            $context["isSortingField"] = ((twig_get_attribute($this->env, $this->source, $context["metadata"], "property", [], "any", false, false, false, 148) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 148), "get", [0 => "sortField"], "method", false, false, false, 148)) || (("association" == twig_get_attribute($this->env, $this->source, $context["metadata"], "type", [], "any", false, false, false, 148)) && (is_string($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 148), "get", [0 => "sortField"], "method", false, false, false, 148)) && is_string($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = (twig_get_attribute($this->env, $this->source, $context["metadata"], "property", [], "any", false, false, false, 148) . ".")) && ('' === $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 || 0 === strpos($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4, $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144)))));
            // line 149
            echo "                    ";
            $context["nextSortDirection"] = ((($context["isSortingField"] ?? null)) ? ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 149), "get", [0 => "sortDirection"], "method", false, false, false, 149) == "DESC")) ? ("ASC") : ("DESC"))) : ("DESC"));
            // line 150
            echo "                    ";
            $context["_column_label"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["metadata"], "label", [], "any", false, false, false, 150), ($context["_trans_parameters"] ?? null),             // line 2
($context["__internal_211b571dfe9a34faeae28a7d1c31b38094a7445744418f2974d64147a26f391c"] ?? null));
            // line 151
            echo "                    ";
            $context["_column_icon"] = ((($context["isSortingField"] ?? null)) ? ((((($context["nextSortDirection"] ?? null) == "DESC")) ? ("fa-arrow-up") : ("fa-arrow-down"))) : ("fa-sort"));
            // line 152
            echo "
                    <th class=\"";
            // line 153
            echo ((($context["isSortingField"] ?? null)) ? ("sorted") : (""));
            echo " ";
            echo ((twig_get_attribute($this->env, $this->source, $context["metadata"], "virtual", [], "any", false, false, false, 153)) ? ("virtual") : (""));
            echo " ";
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, $context["metadata"], "dataType", [], "any", false, false, false, 153)), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["metadata"], "css_class", [], "any", false, false, false, 153), "html", null, true);
            echo "\" ";
            echo (($this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getBackendConfiguration("design.rtl")) ? ("dir=\"rtl\"") : (""));
            echo ">
                        ";
            // line 154
            if (twig_get_attribute($this->env, $this->source, $context["metadata"], "sortable", [], "any", false, false, false, 154)) {
                // line 155
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("easyadmin", twig_array_merge(($context["_request_parameters"] ?? null), ["page" => 1, "sortField" => twig_get_attribute($this->env, $this->source, $context["metadata"], "property", [], "any", false, false, false, 155), "sortDirection" => ($context["nextSortDirection"] ?? null)])), "html", null, true);
                echo "\">
                                ";
                // line 156
                echo ($context["_column_label"] ?? null);
                echo " <i class=\"fa fa-fw ";
                echo twig_escape_filter($this->env, ($context["_column_icon"] ?? null), "html", null, true);
                echo "\"></i>
                            </a>
                        ";
            } else {
                // line 159
                echo "                            <span>";
                echo ($context["_column_label"] ?? null);
                echo "</span>
                        ";
            }
            // line 161
            echo "                    </th>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['field'], $context['metadata'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 163
        echo "
                ";
        // line 164
        if ((twig_length_filter($this->env, ($context["_list_item_actions"] ?? null)) > 0)) {
            // line 165
            echo "                    <th ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "list", [], "any", false, false, false, 165), "collapse_actions", [], "any", false, false, false, 165)) {
                echo "width=\"10px\"";
            }
            echo " ";
            echo (($this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getBackendConfiguration("design.rtl")) ? ("dir=\"rtl\"") : (""));
            echo ">
                        <span class=\"sr-only\">";
            // line 166
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("list.row_actions", ($context["_trans_parameters"] ?? null), "EasyAdminBundle"), "html", null, true);
            echo "</span>
                    </th>
                ";
        }
        // line 169
        echo "            </tr>
        ";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 174
    public function block_table_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_body"));

        // line 175
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["paginator"] ?? null), "currentPageResults", [], "any", false, false, false, 175));
        $context['_iterated'] = false;
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 176
            echo "                ";
            if ( !$this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->isGranted(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "list", [], "any", false, false, false, 176), "item_permission", [], "any", false, false, false, 176), $context["item"])) {
                // line 177
                echo "                    ";
                $context["_number_of_hidden_results"] = (($context["_number_of_hidden_results"] ?? null) + 1);
                // line 178
                echo "                ";
            } else {
                // line 179
                echo "                    ";
                // line 180
                echo "                    ";
                $context["_item_id"] = ("" . twig_get_attribute($this->env, $this->source, $context["item"], twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "primary_key_field_name", [], "any", false, false, false, 180), [], "any", false, false, false, 180));
                // line 181
                echo "                    <tr data-id=\"";
                echo twig_escape_filter($this->env, ($context["_item_id"] ?? null), "html", null, true);
                echo "\">
                        ";
                // line 182
                if (($context["_has_batch_actions"] ?? null)) {
                    // line 183
                    echo "                            <td><input type=\"checkbox\" class=\"form-batch-checkbox\" value=\"";
                    echo twig_escape_filter($this->env, ($context["_item_id"] ?? null), "html", null, true);
                    echo "\"></td>
                        ";
                }
                // line 185
                echo "
                        ";
                // line 186
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["_fields_visible_by_user"] ?? null));
                foreach ($context['_seq'] as $context["field"] => $context["metadata"]) {
                    // line 187
                    echo "                            ";
                    $context["isSortingField"] = (twig_get_attribute($this->env, $this->source, $context["metadata"], "property", [], "any", false, false, false, 187) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 187), "get", [0 => "sortField"], "method", false, false, false, 187));
                    // line 188
                    echo "                            ";
                    $context["_column_label"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((twig_get_attribute($this->env, $this->source, $context["metadata"], "label", [], "any", false, false, false, 188)) ? (twig_get_attribute($this->env, $this->source, $context["metadata"], "label", [], "any", false, false, false, 188)) : ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize($context["field"]))), ($context["_trans_parameters"] ?? null),                     // line 2
($context["__internal_211b571dfe9a34faeae28a7d1c31b38094a7445744418f2974d64147a26f391c"] ?? null));
                    // line 189
                    echo "
                            <td class=\"";
                    // line 190
                    echo ((($context["isSortingField"] ?? null)) ? ("sorted") : (""));
                    echo " ";
                    echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, $context["metadata"], "dataType", [], "any", false, false, false, 190)), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["metadata"], "css_class", [], "any", false, false, false, 190), "html", null, true);
                    echo "\" ";
                    echo (($this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getBackendConfiguration("design.rtl")) ? ("dir=\"rtl\"") : (""));
                    echo ">
                                ";
                    // line 191
                    echo $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->renderEntityField($this->env, "list", twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "name", [], "any", false, false, false, 191), $context["item"], $context["metadata"]);
                    echo "
                            </td>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['field'], $context['metadata'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 194
                echo "
                        ";
                // line 195
                if ((twig_length_filter($this->env, ($context["_list_item_actions"] ?? null)) > 0)) {
                    // line 196
                    echo "                            ";
                    $context["_column_label"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("list.row_actions", ($context["_trans_parameters"] ?? null), "EasyAdminBundle");
                    // line 197
                    echo "                            <td class=\"actions\">
                                ";
                    // line 198
                    $this->displayBlock('item_actions', $context, $blocks);
                    // line 213
                    echo "                            </td>
                        ";
                }
                // line 215
                echo "                    </tr>
                ";
            }
            // line 217
            echo "            ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 218
            echo "                <tr>
                    <td class=\"no-results\" colspan=\"";
            // line 219
            echo twig_escape_filter($this->env, (twig_length_filter($this->env, ($context["_fields_visible_by_user"] ?? null)) + 1), "html", null, true);
            echo "\">
                        ";
            // line 220
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("search.no_results", ($context["_trans_parameters"] ?? null), "EasyAdminBundle"), "html", null, true);
            echo "
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 224
        echo "
            ";
        // line 225
        if ((($context["_number_of_hidden_results"] ?? null) > 0)) {
            // line 226
            echo "                <tr class=\"datagrid-row-empty\">
                    <td class=\"text-center\" colspan=\"";
            // line 227
            echo twig_escape_filter($this->env, (twig_length_filter($this->env, ($context["_fields_visible_by_user"] ?? null)) + 1), "html", null, true);
            echo "\">
                        <span class=\"datagrid-row-empty-message\"><i class=\"fa fa-lock mr-1\"></i> ";
            // line 228
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("security.list.hidden_results", [], "EasyAdminBundle"), "html", null, true);
            echo "</span>
                    </td>
                </tr>
            ";
        }
        // line 232
        echo "        ";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 198
    public function block_item_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "item_actions"));

        // line 199
        echo "                                    ";
        $context["_actions_template"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "list", [], "any", false, false, false, 199), "collapse_actions", [], "any", false, false, false, 199)) ? ("@EasyAdmin/default/includes/_actions_dropdown.html.twig") : ("@EasyAdmin/default/includes/_actions.html.twig"));
        // line 203
        echo "                                    ";
        echo twig_include($this->env, $context, ($context["_actions_template"] ?? null), ["actions" =>         // line 204
($context["_list_item_actions"] ?? null), "entity_config" =>         // line 205
($context["_entity_config"] ?? null), "request_parameters" =>         // line 206
($context["_request_parameters"] ?? null), "translation_domain" => twig_get_attribute($this->env, $this->source,         // line 207
($context["_entity_config"] ?? null), "translation_domain", [], "any", false, false, false, 207), "trans_parameters" =>         // line 208
($context["_trans_parameters"] ?? null), "item_id" =>         // line 209
($context["_item_id"] ?? null), "item" =>         // line 210
($context["item"] ?? null)], false);
        // line 211
        echo "
                                ";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 236
    public function block_delete_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "delete_form"));

        // line 237
        echo "        ";
        $context["referer"] = (((((twig_get_attribute($this->env, $this->source, ($context["paginator"] ?? null), "currentPage", [], "any", false, false, false, 237) == twig_get_attribute($this->env, $this->source, ($context["paginator"] ?? null), "nbPages", [], "any", false, false, false, 237)) && (1 != twig_get_attribute($this->env, $this->source, ($context["paginator"] ?? null), "currentPage", [], "any", false, false, false, 237))) && (1 == twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["paginator"] ?? null), "currentPageResults", [], "any", false, false, false, 237))))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("easyadmin", twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 238
($context["app"] ?? null), "request", [], "any", false, false, false, 238), "query", [], "any", false, false, false, 238), ["page" => (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 238), "query", [], "any", false, false, false, 238), "get", [0 => "page"], "method", false, false, false, 238) - 1)]))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 239
($context["app"] ?? null), "request", [], "any", false, false, false, 239), "requestUri", [], "any", false, false, false, 239)));
        // line 241
        echo "
        ";
        // line 242
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_delete_form.html.twig", ["view" => "list", "referer" =>         // line 244
($context["referer"] ?? null), "delete_form" =>         // line 245
($context["delete_form_template"] ?? null), "_translation_domain" => twig_get_attribute($this->env, $this->source,         // line 246
($context["_entity_config"] ?? null), "translation_domain", [], "any", false, false, false, 246), "_trans_parameters" =>         // line 247
($context["_trans_parameters"] ?? null), "_entity_config" =>         // line 248
($context["_entity_config"] ?? null)], false);
        // line 249
        echo "
    ";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 253
    public function block_content_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_footer"));

        // line 254
        echo "    ";
        $this->displayBlock('paginator', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_paginator($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "paginator"));

        // line 255
        echo "        ";
        echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "templates", [], "any", false, false, false, 255), "paginator", [], "any", false, false, false, 255));
        echo "
    ";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 259
    public function block_body_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_javascript"));

        // line 260
        echo "    ";
        $this->displayParentBlock("body_javascript", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function() {
            const toggles = document.querySelectorAll('.checkbox-switch input[type=\"checkbox\"]');
            for (i = 0; i < toggles.length; i++) {
                toggles[i].addEventListener('change', function () {
                    const toggle = this;
                    const newValue = this.checked;
                    const oldValue = !newValue;
                    const propertyName = this.closest('.checkbox-switch').dataset.propertyname;

                    const toggleUrl = \"";
        // line 272
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("easyadmin", ["action" => "edit", "entity" => twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "name", [], "any", false, false, false, 272), "view" => "list"]);
        echo "\"
                        + \"&id=\" + this.closest('tr').dataset.id
                        + \"&property=\" + propertyName
                        + \"&newValue=\" + newValue.toString();

                    let toggleRequest = \$.ajax({ type: \"GET\", url: toggleUrl, data: {} });

                    toggleRequest.done(function(result) {});

                    toggleRequest.fail(function() {
                        // in case of error, restore the original value and disable the toggle
                        toggle.checked = oldValue;
                        toggle.disabled = true;
                        toggle.closest('.checkbox-switch').classList.add('disabled');
                    });
                });
            }

            \$('.action-delete').on('click', function(e) {
                e.preventDefault();
                const id = \$(this).parents('tr').first().data('id');

                \$('#modal-delete').modal({ backdrop: true, keyboard: true })
                    .off('click', '#modal-delete-button')
                    .on('click', '#modal-delete-button', function () {
                        let deleteForm = \$('#delete-form');
                        deleteForm.attr('action', deleteForm.attr('action').replace('__id__', id));
                        deleteForm.trigger('submit');
                    });
            });

            ";
        // line 303
        if (($context["_has_filters"] ?? null)) {
            // line 304
            echo "            // HTML5 specifies that a <script> tag inserted with innerHTML should not execute
            // https://developer.mozilla.org/en-US/docs/Web/API/Element/innerHTML#Security_considerations
            // That's why we can't use just 'innerHTML'. See https://stackoverflow.com/a/47614491/2804294
            var setInnerHTML = function(element, htmlContent) {
                element.innerHTML = htmlContent;
                Array.from(element.querySelectorAll('script')).forEach( oldScript => {
                    const newScript = document.createElement('script');
                    Array.from(oldScript.attributes)
                        .forEach(attr => newScript.setAttribute(attr.name, attr.value));
                    newScript.appendChild(document.createTextNode(oldScript.innerHTML));
                    oldScript.parentNode.replaceChild(newScript, oldScript);
                });
            };

            document.querySelector('.action-filters-button').addEventListener('click', function(event) {
                let filterButton = event.currentTarget;
                let filterModal = document.querySelector(filterButton.dataset.modal);
                let filterModalBody = filterModal.querySelector('.modal-body');

                \$(filterModal).modal({ backdrop: true, keyboard: true });
                filterModalBody.innerHTML = '<div class=\"fa-3x px-3 py-3 text-muted text-center\"><i class=\"fas fa-circle-notch fa-spin\"></i></div>';

                \$.get(filterButton.getAttribute('href'), function (response) {
                    setInnerHTML(filterModalBody, response);
                });

                event.preventDefault();
                event.stopPropagation();
            });
            ";
        }
        // line 334
        echo "
            ";
        // line 335
        if (($context["_has_batch_actions"] ?? null)) {
            // line 336
            echo "            const titleContent = \$('.content-header-title > .title').html();
            \$(document).on('click', '.deselect-batch-button', function () {
                \$(this).closest('.content').find(':checkbox.form-batch-checkbox-all').prop('checked', false).trigger('change');
            });
            \$(document).on('change', '.form-batch-checkbox-all', function () {
                \$(this).closest('.content').find(':checkbox.form-batch-checkbox').prop('checked', \$(this).prop('checked')).trigger('change');
            });
            \$(document).on('change', '.form-batch-checkbox', function () {
                const \$content = \$(this).closest('.content');
                let \$input = \$content.find(':hidden#batch_form_ids');
                let ids = \$input.val() ? \$input.val().split(',') : [];
                const id = \$(this).val();

                if (\$(this).prop('checked')) {
                    if (-1 === ids.indexOf(id)) {
                        ids.push(id);
                    }
                } else {
                    ids = ids.filter(function(value) { return value !== id });
                    \$content.find(':checkbox.form-batch-checkbox-all').prop('checked', false);
                }

                if (0 === ids.length) {
                    \$content.find('.global-actions').show();
                    \$content.find('.batch-actions').hide();
                    \$content.find('table').removeClass('table-batch');
                } else {
                    \$content.find('.batch-actions').show();
                    \$content.find('.global-actions').hide();
                    \$content.find('table').addClass('table-batch');
                }

                \$input.val(ids.join(','));
                \$content.find('.content-header-title > .title').html(0 === ids.length ? titleContent : '');
            });

            let modalTitle = \$('#batch-action-confirmation-title');
            const titleContentWithPlaceholders = modalTitle.text();
            \$('button[name=\"batch_form[name]\"].batch-action-requires-confirmation').on('click', function (event) {
                event.preventDefault();
                event.stopPropagation();
                let \$button = \$(this);

                const actionName = \$button.text();
                const numberOfSelectedItems = \$('input[type=\"checkbox\"].form-batch-checkbox:checked').length;
                modalTitle.text(titleContentWithPlaceholders
                    .replace('%action_name%', actionName)
                    .replace('%num_items%', numberOfSelectedItems));

                \$('#modal-batch-action').modal({ backdrop : true, keyboard : true })
                    .off('click', '#modal-batch-action-button')
                    .on('click', '#modal-batch-action-button', function () {
                        \$button.unbind('click');
                        \$button.trigger('click');

                        modalTitle.text(titleContentWithPlaceholders);
                    });
            });
            ";
        }
        // line 395
        echo "        });
    </script>

    ";
        // line 398
        if (("search" == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 398), "get", [0 => "action"], "method", false, false, false, 398))) {
            // line 399
            echo "        <script type=\"text/javascript\">
            const _search_query = \"";
            // line 400
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 400), "get", [0 => "query"], "method", true, true, false, 400)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 400), "get", [0 => "query"], "method", false, false, false, 400), "")) : ("")), "js"), "html", null, true);
            echo "\";
            // the original query is prepended to allow matching exact phrases in addition to single words
            \$('#main').find('table tbody td:not(.actions)').highlight(\$.merge([_search_query], _search_query.split(' ')));
        </script>
    ";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1045 => 400,  1042 => 399,  1040 => 398,  1035 => 395,  974 => 336,  972 => 335,  969 => 334,  937 => 304,  935 => 303,  901 => 272,  885 => 260,  878 => 259,  868 => 255,  854 => 254,  847 => 253,  839 => 249,  837 => 248,  836 => 247,  835 => 246,  834 => 245,  833 => 244,  832 => 242,  829 => 241,  827 => 239,  826 => 238,  824 => 237,  817 => 236,  809 => 211,  807 => 210,  806 => 209,  805 => 208,  804 => 207,  803 => 206,  802 => 205,  801 => 204,  799 => 203,  796 => 199,  789 => 198,  782 => 232,  775 => 228,  771 => 227,  768 => 226,  766 => 225,  763 => 224,  753 => 220,  749 => 219,  746 => 218,  733 => 217,  729 => 215,  725 => 213,  723 => 198,  720 => 197,  717 => 196,  715 => 195,  712 => 194,  703 => 191,  693 => 190,  690 => 189,  688 => 2,  686 => 188,  683 => 187,  679 => 186,  676 => 185,  670 => 183,  668 => 182,  663 => 181,  660 => 180,  658 => 179,  655 => 178,  652 => 177,  649 => 176,  630 => 175,  623 => 174,  615 => 169,  609 => 166,  600 => 165,  598 => 164,  595 => 163,  588 => 161,  582 => 159,  574 => 156,  569 => 155,  567 => 154,  555 => 153,  552 => 152,  549 => 151,  547 => 2,  545 => 150,  542 => 149,  539 => 148,  535 => 147,  532 => 146,  528 => 144,  526 => 143,  523 => 142,  516 => 141,  509 => 236,  504 => 233,  502 => 174,  497 => 171,  495 => 141,  490 => 138,  487 => 137,  484 => 136,  481 => 135,  474 => 134,  463 => 130,  461 => 129,  457 => 128,  452 => 127,  445 => 126,  435 => 121,  433 => 120,  432 => 119,  431 => 118,  430 => 117,  424 => 115,  422 => 114,  419 => 113,  416 => 112,  409 => 111,  399 => 104,  397 => 2,  395 => 104,  389 => 103,  381 => 102,  378 => 101,  371 => 100,  363 => 94,  355 => 90,  353 => 89,  350 => 88,  343 => 87,  337 => 86,  334 => 85,  327 => 84,  317 => 73,  315 => 2,  312 => 73,  308 => 71,  297 => 69,  293 => 68,  289 => 67,  284 => 66,  278 => 64,  275 => 63,  269 => 61,  266 => 60,  262 => 53,  259 => 52,  252 => 51,  243 => 77,  241 => 51,  237 => 50,  232 => 49,  225 => 48,  217 => 108,  214 => 100,  211 => 99,  209 => 98,  206 => 97,  203 => 96,  200 => 84,  197 => 83,  195 => 82,  192 => 81,  189 => 80,  187 => 48,  184 => 47,  181 => 46,  178 => 45,  171 => 44,  164 => 33,  161 => 41,  156 => 39,  155 => 2,  153 => 39,  150 => 38,  145 => 36,  144 => 2,  142 => 36,  139 => 35,  136 => 34,  133 => 33,  126 => 32,  113 => 30,  100 => 29,  93 => 5,  91 => 27,  89 => 26,  87 => 25,  84 => 21,  83 => 20,  81 => 19,  79 => 15,  78 => 14,  77 => 13,  76 => 12,  75 => 11,  74 => 10,  73 => 9,  72 => 8,  71 => 7,  69 => 2,  68 => 3,  67 => 2,  66 => 3,  64 => 2,  62 => 1,  52 => 5,);
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/default/list.html.twig", "/Users/vellacyril/PhpstormProjects/arcades/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/list.html.twig");
    }
}
