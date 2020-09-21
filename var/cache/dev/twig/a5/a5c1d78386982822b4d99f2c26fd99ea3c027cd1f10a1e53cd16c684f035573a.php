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

/* @EasyAdmin/form/bootstrap_4.html.twig */
class __TwigTemplate_993082d6542d892f871b8bf400cfc9f1cd5b1479b7213c0bd7318494075b7a64 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        // line 1
        $_trait_0 = $this->loadTemplate("bootstrap_4_layout.html.twig", "@EasyAdmin/form/bootstrap_4.html.twig", 1);
        if (!$_trait_0->isTraitable()) {
            throw new RuntimeError('Template "'."bootstrap_4_layout.html.twig".'" cannot be used as a trait.', 1, $this->source);
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            [
                'form_start' => [$this, 'block_form_start'],
                'form_widget' => [$this, 'block_form_widget'],
                'form_widget_simple' => [$this, 'block_form_widget_simple'],
                'date_widget' => [$this, 'block_date_widget'],
                'time_widget' => [$this, 'block_time_widget'],
                'choice_widget_collapsed' => [$this, 'block_choice_widget_collapsed'],
                'file_widget' => [$this, 'block_file_widget'],
                'form_row' => [$this, 'block_form_row'],
                'collection_row' => [$this, 'block_collection_row'],
                'button_row' => [$this, 'block_button_row'],
                'form_label' => [$this, 'block_form_label'],
                'form_widget_compound' => [$this, 'block_form_widget_compound'],
                'empty_collection' => [$this, 'block_empty_collection'],
                'vich_file_row' => [$this, 'block_vich_file_row'],
                'vich_file_widget' => [$this, 'block_vich_file_widget'],
                'vich_image_row' => [$this, 'block_vich_image_row'],
                'vich_image_widget' => [$this, 'block_vich_image_widget'],
                'easyadmin_rest' => [$this, 'block_easyadmin_rest'],
                'item_actions' => [$this, 'block_item_actions'],
                'easyadmin_widget' => [$this, 'block_easyadmin_widget'],
                'easyadmin_widget_groups' => [$this, 'block_easyadmin_widget_groups'],
                'easyadmin_autocomplete_widget' => [$this, 'block_easyadmin_autocomplete_widget'],
                'easyadmin_autocomplete_inner_label' => [$this, 'block_easyadmin_autocomplete_inner_label'],
                'easyadmin_code_editor_widget' => [$this, 'block_easyadmin_code_editor_widget'],
                'easyadmin_text_editor_widget' => [$this, 'block_easyadmin_text_editor_widget'],
                'easyadmin_section_row' => [$this, 'block_easyadmin_section_row'],
                'easyadmin_batch_widget' => [$this, 'block_easyadmin_batch_widget'],
                'easyadmin_filters_widget' => [$this, 'block_easyadmin_filters_widget'],
                'easyadmin_numeric_filter_widget' => [$this, 'block_easyadmin_numeric_filter_widget'],
                'easyadmin_datetime_filter_widget' => [$this, 'block_easyadmin_datetime_filter_widget'],
                'easyadmin_fileupload_widget' => [$this, 'block_easyadmin_fileupload_widget'],
            ]
        );
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/form/bootstrap_4.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('form_start', $context, $blocks);
        // line 21
        echo "
";
        // line 23
        echo "
";
        // line 24
        $this->displayBlock('form_widget', $context, $blocks);
        // line 59
        echo "
";
        // line 60
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 70
        echo "
";
        // line 71
        $this->displayBlock('date_widget', $context, $blocks);
        // line 76
        echo "
";
        // line 77
        $this->displayBlock('time_widget', $context, $blocks);
        // line 82
        echo "
";
        // line 83
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 111
        echo "
";
        // line 112
        $this->displayBlock('file_widget', $context, $blocks);
        // line 129
        echo "
";
        // line 131
        echo "
";
        // line 132
        $this->displayBlock('form_row', $context, $blocks);
        // line 174
        echo "
";
        // line 175
        $this->displayBlock('collection_row', $context, $blocks);
        // line 210
        echo "
";
        // line 211
        $this->displayBlock('button_row', $context, $blocks);
        // line 216
        echo "
";
        // line 218
        echo "
";
        // line 219
        $this->displayBlock('form_label', $context, $blocks);
        // line 243
        echo "
";
        // line 246
        $this->displayBlock('form_widget_compound', $context, $blocks);
        // line 262
        $this->displayBlock('empty_collection', $context, $blocks);
        // line 267
        echo "
";
        // line 268
        $this->displayBlock('vich_file_row', $context, $blocks);
        // line 272
        echo "
";
        // line 273
        $this->displayBlock('vich_file_widget', $context, $blocks);
        // line 312
        echo "
";
        // line 313
        $this->displayBlock('vich_image_row', $context, $blocks);
        // line 317
        echo "
";
        // line 318
        $this->displayBlock('vich_image_widget', $context, $blocks);
        // line 359
        echo "
";
        // line 360
        $this->displayBlock('easyadmin_rest', $context, $blocks);
        // line 369
        echo "
";
        // line 370
        $this->displayBlock('item_actions', $context, $blocks);
        // line 399
        echo "
";
        // line 401
        $this->displayBlock('easyadmin_widget', $context, $blocks);
        // line 446
        echo "
";
        // line 447
        $this->displayBlock('easyadmin_widget_groups', $context, $blocks);
        // line 483
        echo "
";
        // line 485
        $this->displayBlock('easyadmin_autocomplete_widget', $context, $blocks);
        // line 496
        echo "
";
        // line 497
        $this->displayBlock('easyadmin_autocomplete_inner_label', $context, $blocks);
        // line 501
        echo "
";
        // line 503
        $this->displayBlock('easyadmin_code_editor_widget', $context, $blocks);
        // line 519
        echo "
";
        // line 521
        $this->displayBlock('easyadmin_text_editor_widget', $context, $blocks);
        // line 527
        echo "
";
        // line 529
        $this->displayBlock('easyadmin_section_row', $context, $blocks);
        // line 542
        echo "
";
        // line 544
        $this->displayBlock('easyadmin_batch_widget', $context, $blocks);
        // line 559
        echo "
";
        // line 561
        $this->displayBlock('easyadmin_filters_widget', $context, $blocks);
        // line 611
        echo "
";
        // line 612
        $this->displayBlock('easyadmin_numeric_filter_widget', $context, $blocks);
        // line 628
        echo "
";
        // line 629
        $this->displayBlock('easyadmin_datetime_filter_widget', $context, $blocks);
        // line 632
        echo "
";
        // line 633
        $this->displayBlock('easyadmin_fileupload_widget', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        if (("easyadmin" == twig_first($this->env, twig_slice($this->env, ($context["block_prefixes"] ?? null),  -2)))) {
            // line 5
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_join_filter([0 => ((twig_get_attribute($this->env, $this->source,             // line 6
($context["attr"] ?? null), "class", [], "any", true, true, false, 6)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 6), "")) : ("")), 1 => (twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "view", [], "any", false, false, false, 6) . "-form")], " "), "data-view" => twig_get_attribute($this->env, $this->source,             // line 7
($context["easyadmin"] ?? null), "view", [], "any", false, false, false, 7), "data-entity" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 8
($context["easyadmin"] ?? null), "entity", [], "any", false, false, false, 8), "name", [], "any", false, false, false, 8), "data-entity-id" => (((twig_get_attribute($this->env, $this->source,             // line 9
($context["value"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "entity", [], "any", false, false, false, 9), "primary_key_field_name", [], "any", false, false, false, 9), [], "any", true, true, false, 9) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["value"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "entity", [], "any", false, false, false, 9), "primary_key_field_name", [], "any", false, false, false, 9), [], "any", false, false, false, 9)))) ? (twig_get_attribute($this->env, $this->source, ($context["value"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "entity", [], "any", false, false, false, 9), "primary_key_field_name", [], "any", false, false, false, 9), [], "any", false, false, false, 9)) : (""))]);
            // line 11
            echo "    ";
        }
        // line 12
        echo "
    ";
        // line 13
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 13), "errors", [], "any", false, false, false, 13)) > 0)) {
            // line 14
            echo "        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
            echo "
    ";
        }
        // line 17
        $this->displayParentBlock("form_start", $context, $blocks);
        // line 19
        echo "<input type=\"hidden\" name=\"referer\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 19), "query", [], "any", false, false, false, 19), "get", [0 => "referer", 1 => ""], "method", false, false, false, 19), "html", null, true);
        echo "\"/>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 24
    public function block_form_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_widget"));

        // line 25
        echo "    ";
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "parent", [], "any", false, true, false, 25), "vars", [], "any", false, true, false, 25), "allow_delete", [], "any", true, true, false, 25)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "parent", [], "any", false, true, false, 25), "vars", [], "any", false, true, false, 25), "allow_delete", [], "any", false, false, false, 25), false)) : (false))) {
            // line 26
            echo "        ";
            ob_start(function () { return ''; });
            // line 27
            echo "        \$(function() {
            event.preventDefault();

            var containerDiv = \$('#";
            // line 30
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "').parents('.form-group:first');
            var parentDiv = containerDiv.parents('[data-prototype]:first');
            containerDiv.remove();
            parentDiv.trigger('easyadmin.collection.item-deleted');

            var hasCountAttr = parentDiv.data('count');

            if (hasCountAttr === undefined) {
                var numItems = parentDiv.children('div.form-group').length;
                parentDiv.data('count', ++numItems)
            }

            if (0 == parentDiv.children().length && 'undefined' !== parentDiv.attr('data-empty-collection')) {
                \$(parentDiv.attr('data-empty-collection')).insertBefore(parentDiv);
            }
        });
        ";
            $context["remove_item_javascript"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 47
            echo "
        <div class=\"field-collection-item-row\">
            ";
            // line 49
            $this->displayParentBlock("form_widget", $context, $blocks);
            echo "

            <a class=\"field-collection-item-action\" id=\"easyadmin-remove-collection-item-";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 51), "id", [], "any", false, false, false, 51), "html", null, true);
            echo "\" href=\"#\" onclick=\"";
            echo ($context["remove_item_javascript"] ?? null);
            echo "; return false;\" title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.remove_item", [], "EasyAdminBundle"), "html", null, true);
            echo "\">
                &times;
            </a>
        </div>
    ";
        } else {
            // line 56
            echo "        ";
            $this->displayParentBlock("form_widget", $context, $blocks);
            echo "
    ";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 60
    public function block_form_widget_simple($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 61
        if (( !(isset($context["type"]) || array_key_exists("type", $context)) || !twig_in_filter(($context["type"] ?? null), [0 => "file", 1 => "hidden"]))) {
            // line 62
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter(((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 62)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 62), "")) : ("")))]);
        }
        // line 64
        if (((isset($context["type"]) || array_key_exists("type", $context)) && ((($context["type"] ?? null) == "range") || (($context["type"] ?? null) == "color")))) {
            // line 65
            echo "        ";
            // line 66
            $context["required"] = false;
        }
        // line 68
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 71
    public function block_date_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "date_widget"));

        // line 72
        echo "<div class=\"datetime-widget datetime-widget-date\">";
        // line 73
        $this->displayParentBlock("date_widget", $context, $blocks);
        // line 74
        echo "</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 77
    public function block_time_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "time_widget"));

        // line 78
        echo "<div class=\"datetime-widget datetime-widget-time\">";
        // line 79
        $this->displayParentBlock("time_widget", $context, $blocks);
        // line 80
        echo "</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 83
    public function block_choice_widget_collapsed($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 84
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter(((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 84)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 84), "")) : ("")))]);
        // line 85
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        // line 87
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "parent", [], "any", false, true, false, 87), "vars", [], "any", false, true, false, 87), "allow_delete", [], "any", true, true, false, 87)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "parent", [], "any", false, true, false, 87), "vars", [], "any", false, true, false, 87), "allow_delete", [], "any", false, false, false, 87), false)) : (false))) {
            // line 88
            echo "        ";
            ob_start(function () { return ''; });
            // line 89
            echo "            \$(function() {
                event.preventDefault();

                var containerDiv = \$('#";
            // line 92
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "').parents('.form-group:first');
                var parentDiv = containerDiv.parents('[data-prototype]:first');
                containerDiv.remove();
                parentDiv.trigger('easyadmin.collection.item-deleted');

                if (0 == parentDiv.children().length && 'undefined' !== parentDiv.attr('data-empty-collection')) {
                    \$(parentDiv.attr('data-empty-collection')).insertBefore(parentDiv);
                }
            });
        ";
            $context["remove_item_javascript"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 102
            echo "
        <div class=\"text-right field-collection-item-action\">
            <a id=\"easyadmin-remove-collection-item-";
            // line 104
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 104), "id", [], "any", false, false, false, 104), "html", null, true);
            echo "\" href=\"#\" onclick=\"";
            echo ($context["remove_item_javascript"] ?? null);
            echo "\" class=\"text-danger\">
                <i class=\"fa fa-fw fa-remove\"></i>
                ";
            // line 106
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.remove_item", [], "EasyAdminBundle"), "html", null, true);
            echo "
            </a>
        </div>
    ";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 112
    public function block_file_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "file_widget"));

        // line 113
        if ((((isset($context["vich"]) || array_key_exists("vich", $context))) ? (_twig_default_filter(($context["vich"] ?? null), false)) : (false))) {
            // line 114
            $context["type"] = (((isset($context["type"]) || array_key_exists("type", $context))) ? (_twig_default_filter(($context["type"] ?? null), "file")) : ("file"));
            // line 115
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 117
            $this->displayParentBlock("file_widget", $context, $blocks);
            // line 119
            echo "<script>
            document.querySelector('#";
            // line 120
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "').addEventListener('change', function() {
                const fileName = this.value.replace('C:\\\\fakepath\\\\', '');
                const customInputFileLabel = document.querySelector('#";
            // line 122
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo " ~ .custom-file-label');
                customInputFileLabel.classList.add('selected');
                customInputFileLabel.innerHTML = fileName;
            });
        </script>
    ";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 132
    public function block_form_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_row"));

        // line 133
        $context["_field_type"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", [], "any", false, true, false, 133), "fieldType", [], "any", true, true, false, 133)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", [], "any", false, true, false, 133), "fieldType", [], "any", false, false, false, 133), "default")) : ("default"));
        // line 134
        echo "    <div class=\"form-group ";
        if ((( !($context["compound"] ?? null) || (((isset($context["force_error"]) || array_key_exists("force_error", $context))) ? (_twig_default_filter(($context["force_error"] ?? null), false)) : (false))) &&  !($context["valid"] ?? null))) {
            echo "has-error";
        }
        echo " field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, ($context["block_prefixes"] ?? null),  -2)), "html", null, true);
        echo "\">";
        // line 135
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
        // line 136
        echo "<div class=\"form-widget\">
            ";
        // line 137
        $context["has_prepend_html"] =  !(null === ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", [], "any", false, true, false, 137), "prepend_html", [], "any", true, true, false, 137)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", [], "any", false, true, false, 137), "prepend_html", [], "any", false, false, false, 137), null)) : (null)));
        // line 138
        echo "            ";
        $context["has_append_html"] =  !(null === ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", [], "any", false, true, false, 138), "append_html", [], "any", true, true, false, 138)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", [], "any", false, true, false, 138), "append_html", [], "any", false, false, false, 138), null)) : (null)));
        // line 139
        echo "            ";
        $context["has_input_groups"] = (($context["has_prepend_html"] ?? null) || ($context["has_append_html"] ?? null));
        // line 140
        echo "
            ";
        // line 141
        if (($context["has_input_groups"] ?? null)) {
            echo "<div class=\"input-group\">";
        }
        // line 142
        echo "                ";
        if (($context["has_prepend_html"] ?? null)) {
            // line 143
            echo "                    <div class=\"input-group-prepend\">
                        <span class=\"input-group-text\">";
            // line 144
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", [], "any", false, false, false, 144), "prepend_html", [], "any", false, false, false, 144);
            echo "</span>
                    </div>
                ";
        }
        // line 148
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 150
        if (($context["has_append_html"] ?? null)) {
            // line 151
            echo "                    <div class=\"input-group-append\">
                        <span class=\"input-group-text\">";
            // line 152
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", [], "any", false, false, false, 152), "append_html", [], "any", false, false, false, 152);
            echo "</span>
                    </div>
                ";
        }
        // line 155
        echo "            ";
        if (($context["has_input_groups"] ?? null)) {
            echo "</div>";
        }
        // line 156
        echo "
            ";
        // line 157
        if ((twig_in_filter(($context["_field_type"] ?? null), [0 => "datetime", 1 => "datetime_immutable", 2 => "date", 3 => "date_immutable", 4 => "dateinterval", 5 => "time", 6 => "time_immutable", 7 => "birthday"]) && ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", [], "any", false, true, false, 157), "nullable", [], "any", true, true, false, 157)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", [], "any", false, true, false, 157), "nullable", [], "any", false, false, false, 157), false)) : (false)))) {
            // line 158
            echo "                <div class=\"nullable-control\">
                    <label>
                        <input type=\"checkbox\" ";
            // line 160
            if ((null === ($context["data"] ?? null))) {
                echo "checked=\"checked\"";
            }
            echo ">
                        ";
            // line 161
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.nullable_field", [], "EasyAdminBundle"), "html", null, true);
            echo "
                    </label>
                </div>
            ";
        }
        // line 165
        echo "
            ";
        // line 166
        if ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", [], "any", false, true, false, 166), "help", [], "any", true, true, false, 166)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", [], "any", false, true, false, 166), "help", [], "any", false, false, false, 166), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 166), "help", [], "any", false, false, false, 166))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 166), "help", [], "any", false, false, false, 166))) != "")) {
            // line 167
            echo "                <small class=\"form-help\">";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", [], "any", false, true, false, 167), "help", [], "any", true, true, false, 167)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", [], "any", false, true, false, 167), "help", [], "any", false, false, false, 167), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 167), "help", [], "any", false, false, false, 167))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 167), "help", [], "any", false, false, false, 167))), array(), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 167), "translation_domain", [], "any", false, false, false, 167));
            echo "</small>
            ";
        }
        // line 170
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 171
        echo "</div>
    </div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 175
    public function block_collection_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "collection_row"));

        // line 176
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        echo "

    ";
        // line 178
        if ((((isset($context["allow_add"]) || array_key_exists("allow_add", $context))) ? (_twig_default_filter(($context["allow_add"] ?? null), false)) : (false))) {
            // line 179
            echo "        ";
            ob_start(function () { return ''; });
            // line 180
            echo "            \$(function() {
                event.preventDefault();

                var collection = \$('#";
            // line 183
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "');
                // Use a counter to avoid having the same index more than once
                var numItems = collection.data('count') || collection.children('div.form-group').length;

                collection.prev('.collection-empty').remove();

                var newItem = collection.attr('data-prototype')
                    .replace(/\\>";
            // line 190
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["prototype"] ?? null), "vars", [], "any", false, false, false, 190), "name", [], "any", false, false, false, 190), "html", null, true);
            echo "label__\\</g, '>' + numItems + '<')
                    .replace(/_";
            // line 191
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "_";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["prototype"] ?? null), "vars", [], "any", false, false, false, 191), "name", [], "any", false, false, false, 191), "html", null, true);
            echo "/g, '_";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "_' + numItems)
                    .replace(/";
            // line 192
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\\]\\[";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["prototype"] ?? null), "vars", [], "any", false, false, false, 192), "name", [], "any", false, false, false, 192), "html", null, true);
            echo "\\]/g, '";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "][' + numItems + ']')
                ;

                // Increment the counter and store it in the collection
                collection.data('count', ++numItems);

                collection.append(newItem).trigger('easyadmin.collection.item-added');
            });
        ";
            $context["js_add_item"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 201
            echo "
        <div class=\"form-group field-collection-action\">
            <a id=\"easyadmin-add-collection-item-";
            // line 203
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 203), "id", [], "any", false, false, false, 203), "html", null, true);
            echo "\" href=\"#\" onclick=\"";
            echo ($context["js_add_item"] ?? null);
            echo "; return false;\">
                <i class=\"fa fa-plus pr-1\"></i>
                ";
            // line 205
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.add_new_item", [], "EasyAdminBundle"), "html", null, true);
            echo "
            </a>
        </div>
    ";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 211
    public function block_button_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "button_row"));

        // line 212
        echo "<div class=\"form-group field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, ($context["block_prefixes"] ?? null),  -2)), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", [], "any", false, true, false, 212), "css_class", [], "any", true, true, false, 212)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", [], "any", false, true, false, 212), "css_class", [], "any", false, false, false, 212), "")) : ("")), "html", null, true);
        echo "\">";
        // line 213
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 214
        echo "</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 219
    public function block_form_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_label"));

        // line 220
        if ( !(($context["label"] ?? null) === false)) {
            // line 221
            if (((isset($context["compound"]) || array_key_exists("compound", $context)) && ($context["compound"] ?? null))) {
                // line 222
                $context["element"] = "legend";
                // line 223
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 223)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 223), "")) : ("")) . " col-form-label"))]);
            } else {
                // line 225
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["for" => ($context["id"] ?? null), "class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 225)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 225), "")) : ("")) . " form-control-label"))]);
            }
            // line 227
            if (($context["required"] ?? null)) {
                // line 228
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 228)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 228), "")) : ("")) . " required"))]);
            }
            // line 230
            if (twig_test_empty(($context["label"] ?? null))) {
                // line 231
                if ( !twig_test_empty(($context["label_format"] ?? null))) {
                    // line 232
                    $context["label"] = twig_replace_filter(($context["label_format"] ?? null), ["%name%" =>                     // line 233
($context["name"] ?? null), "%id%" =>                     // line 234
($context["id"] ?? null)]);
                } else {
                    // line 237
                    $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(($context["name"] ?? null));
                }
            }
            // line 240
            echo "<";
            echo twig_escape_filter($this->env, (((isset($context["element"]) || array_key_exists("element", $context))) ? (_twig_default_filter(($context["element"] ?? null), "label")) : ("label")), "html", null, true);
            if (($context["label_attr"] ?? null)) {
                $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ["attr" => ($context["label_attr"] ?? null)];
                if (!twig_test_iterable($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4)) {
                    throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 240, $this->getSourceContext());
                }
                $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_to_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4);
                $context['_parent'] = $context;
                $context = $this->env->mergeGlobals(array_merge($context, $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4));
                $this->displayBlock("attributes", $context, $blocks);
                $context = $context['_parent'];
            }
            echo ">";
            echo twig_escape_filter($this->env, (((($context["translation_domain"] ?? null) === false)) ? (($context["label"] ?? null)) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["label"] ?? null), [], ($context["translation_domain"] ?? null)))), "html", null, true);
            echo "</";
            echo twig_escape_filter($this->env, (((isset($context["element"]) || array_key_exists("element", $context))) ? (_twig_default_filter(($context["element"] ?? null), "label")) : ("label")), "html", null, true);
            echo ">";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 246
    public function block_form_widget_compound($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 247
        echo "<div class=\"form-widget-compound\">
        ";
        // line 250
        echo "        ";
        $context["isEmptyCollection"] = (twig_test_iterable(($context["value"] ?? null)) && twig_test_empty(($context["value"] ?? null)));
        // line 251
        echo "        ";
        if (($context["isEmptyCollection"] ?? null)) {
            // line 252
            echo "            ";
            $this->displayBlock("empty_collection", $context, $blocks);
            echo "
        ";
        }
        // line 254
        echo "        ";
        if ((($context["isEmptyCollection"] ?? null) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 254), "prototype", [], "any", true, true, false, 254))) {
            // line 255
            echo "            ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["data-empty-collection" =>             $this->renderBlock("empty_collection", $context, $blocks)]);
            // line 256
            echo "        ";
        }
        // line 257
        echo "
        ";
        // line 258
        $this->displayParentBlock("form_widget_compound", $context, $blocks);
        echo "
    </div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 262
    public function block_empty_collection($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "empty_collection"));

        // line 263
        echo "    <div class=\"empty collection-empty\">
        ";
        // line 264
        echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "entity", [], "any", false, false, false, 264), "templates", [], "any", false, false, false, 264), "label_empty", [], "any", false, false, false, 264));
        echo "
    </div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 268
    public function block_vich_file_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vich_file_row"));

        // line 269
        echo "    ";
        $context["force_error"] = true;
        // line 270
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 273
    public function block_vich_file_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vich_file_widget"));

        // line 274
        echo "    <div class=\"easyadmin-vich-file\">
        ";
        // line 275
        if ( !twig_test_empty((((isset($context["download_uri"]) || array_key_exists("download_uri", $context))) ? (_twig_default_filter(($context["download_uri"] ?? null), "")) : ("")))) {
            // line 276
            echo "            ";
            $context["download_title"] = ((twig_last($this->env, twig_split_filter($this->env, ($context["download_uri"] ?? null), "/"))) ? (twig_last($this->env, twig_split_filter($this->env, ($context["download_uri"] ?? null), "/"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("download", [], "VichUploaderBundle")));
            // line 277
            echo "            ";
            $context["file_extension"] = twig_last($this->env, twig_split_filter($this->env, ($context["download_uri"] ?? null), "."));
            // line 278
            echo "            ";
            $context["extension_icons"] = ["gif" => "fa-file-image-o", "jpg" => "fa-file-image-o", "pdf" => "fa-file-pdf-o", "png" => "fa-file-image-o", "zip" => "fa-file-archive-o"];
            // line 285
            echo "            <a class=\"easyadmin-vich-file-name\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["download_uri"] ?? null)), "html", null, true);
            echo "\">
                <i class=\"fa fa-fw ";
            // line 286
            (((twig_get_attribute($this->env, $this->source, ($context["extension_icons"] ?? null), ($context["file_extension"] ?? null), [], "array", true, true, false, 286) &&  !(null === (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["extension_icons"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[($context["file_extension"] ?? null)] ?? null) : null)))) ? (print (twig_escape_filter($this->env, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["extension_icons"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[($context["file_extension"] ?? null)] ?? null) : null), "html", null, true))) : (print ("fa-file-o")));
            echo "\"></i>
                ";
            // line 287
            echo twig_escape_filter($this->env, ($context["download_title"] ?? null), "html", null, true);
            echo "
            </a>
        ";
        }
        // line 290
        echo "
        ";
        // line 291
        ob_start(function () { return ''; });
        // line 292
        echo "            var newFile = document.getElementById('";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 292), "vars", [], "any", false, false, false, 292), "id", [], "any", false, false, false, 292), "html", null, true);
        echo "').files[0];
            var fileSizeInMegabytes = newFile.size > 1024 * 1024;
            var fileSize = fileSizeInMegabytes ? newFile.size / (1024 * 1024) : newFile.size / 1024;
            document.getElementById('";
        // line 295
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 295), "vars", [], "any", false, false, false, 295), "id", [], "any", false, false, false, 295), "html", null, true);
        echo "_new_file_name').innerText = newFile.name + ' (' + fileSize.toFixed(2) + ' ' + (fileSizeInMegabytes ? 'MB' : 'KB') + ')';
        ";
        $context["file_upload_js"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 297
        echo "
        <div class=\"easyadmin-vich-file-actions\">
            ";
        // line 300
        echo "            <div class=\"btn btn-secondary input-file-container\">
                <i class=\"fa fa-fw fa-upload\"></i> ";
        // line 301
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.choose_file", [], "EasyAdminBundle"), "html", null, true);
        echo "
                ";
        // line 302
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 302), 'widget', ["attr" => ["onchange" => ($context["file_upload_js"] ?? null)], "vich" => true]);
        echo "
            </div>

            ";
        // line 305
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "delete", [], "any", true, true, false, 305)) {
            // line 306
            echo "                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "delete", [], "any", false, false, false, 306), 'row', ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("form.label.delete", [], "VichUploaderBundle")]);
            echo "
            ";
        }
        // line 308
        echo "        </div>
        <div class=\"small\" id=\"";
        // line 309
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 309), "vars", [], "any", false, false, false, 309), "id", [], "any", false, false, false, 309), "html", null, true);
        echo "_new_file_name\"></div>
    </div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 313
    public function block_vich_image_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vich_image_row"));

        // line 314
        echo "    ";
        $context["force_error"] = true;
        // line 315
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 318
    public function block_vich_image_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vich_image_widget"));

        // line 319
        echo "    <div class=\"easyadmin-vich-image\">
        ";
        // line 320
        if ( !twig_test_empty((((isset($context["image_uri"]) || array_key_exists("image_uri", $context))) ? (_twig_default_filter(($context["image_uri"] ?? null), "")) : ("")))) {
            // line 321
            echo "            ";
            if (twig_test_empty((((isset($context["download_uri"]) || array_key_exists("download_uri", $context))) ? (_twig_default_filter(($context["download_uri"] ?? null), "")) : ("")))) {
                // line 322
                echo "                <div class=\"easyadmin-thumbnail\">
                    <img style=\"cursor: initial\" src=\"";
                // line 323
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["image_uri"] ?? null)), "html", null, true);
                echo "\">
                </div>
            ";
            } else {
                // line 326
                echo "                ";
                $context["_lightbox_id"] = ("easyadmin-lightbox-" . ($context["id"] ?? null));
                // line 327
                echo "
                <a href=\"#\" class=\"easyadmin-thumbnail\" data-featherlight=\"#";
                // line 328
                echo twig_escape_filter($this->env, ($context["_lightbox_id"] ?? null), "html", null, true);
                echo "\" data-featherlight-close-on-click=\"anywhere\">
                    <img src=\"";
                // line 329
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["download_uri"] ?? null)), "html", null, true);
                echo "\">
                </a>

                <div id=\"";
                // line 332
                echo twig_escape_filter($this->env, ($context["_lightbox_id"] ?? null), "html", null, true);
                echo "\" class=\"easyadmin-lightbox\">
                    <img src=\"";
                // line 333
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["download_uri"] ?? null)), "html", null, true);
                echo "\">
                </div>
            ";
            }
            // line 336
            echo "        ";
        }
        // line 337
        echo "
        ";
        // line 338
        ob_start(function () { return ''; });
        // line 339
        echo "            var newFile = document.getElementById('";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 339), "vars", [], "any", false, false, false, 339), "id", [], "any", false, false, false, 339), "html", null, true);
        echo "').files[0];
            var fileSizeInMegabytes = newFile.size > 1024 * 1024;
            var fileSize = fileSizeInMegabytes ? newFile.size / (1024 * 1024) : newFile.size / 1024;
            document.getElementById('";
        // line 342
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 342), "vars", [], "any", false, false, false, 342), "id", [], "any", false, false, false, 342), "html", null, true);
        echo "_new_file_name').innerText = newFile.name + ' (' + fileSize.toFixed(2) + ' ' + (fileSizeInMegabytes ? 'MB' : 'KB') + ')';
        ";
        $context["file_upload_js"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 344
        echo "
        <div class=\"easyadmin-vich-image-actions\">
            ";
        // line 347
        echo "            <div class=\"btn btn-secondary input-file-container\">
                <i class=\"fa fa-fw fa-upload\"></i> ";
        // line 348
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.choose_file", [], "EasyAdminBundle"), "html", null, true);
        echo "
                ";
        // line 349
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 349), 'widget', ["attr" => ["onchange" => ($context["file_upload_js"] ?? null)], "vich" => true]);
        echo "
            </div>

            ";
        // line 352
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "delete", [], "any", true, true, false, 352)) {
            // line 353
            echo "                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "delete", [], "any", false, false, false, 353), 'row', ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("form.label.delete", [], "VichUploaderBundle")]);
            echo "
            ";
        }
        // line 355
        echo "        </div>
        <div class=\"small\" id=\"";
        // line 356
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 356), "vars", [], "any", false, false, false, 356), "id", [], "any", false, false, false, 356), "html", null, true);
        echo "_new_file_name\"></div>
    </div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 360
    public function block_easyadmin_rest($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "easyadmin_rest"));

        // line 361
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        // line 363
        echo "<section class=\"content-footer\">
        <div class=\"form-actions\">";
        // line 365
        $this->displayBlock("item_actions", $context, $blocks);
        // line 366
        echo "</div>
    </section>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 370
    public function block_item_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "item_actions"));

        // line 371
        echo "    ";
        $context["_translation_domain"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "entity", [], "any", false, false, false, 371), "translation_domain", [], "any", false, false, false, 371);
        // line 372
        echo "    ";
        $context["_trans_parameters"] = ["%entity_name%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "entity", [], "any", false, false, false, 372), "name", [], "any", false, false, false, 372), array(), ($context["_translation_domain"] ?? null)), "%entity_label%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "entity", [], "any", false, false, false, 372), "label", [], "any", false, false, false, 372), array(), ($context["_translation_domain"] ?? null))];
        // line 373
        echo "
    ";
        // line 375
        echo "    <button type=\"submit\" class=\"btn btn-primary action-save\">
        <span class=\"btn-label\">";
        // line 376
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.save", ($context["_trans_parameters"] ?? null), ($context["_translation_domain"] ?? null)), "html", null, true);
        echo "</span>
    </button>

    ";
        // line 379
        $context["_entity_actions"] = (((twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "view", [], "any", false, false, false, 379) == "new")) ? ($this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getActionsForItem("new", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 380
($context["easyadmin"] ?? null), "entity", [], "any", false, false, false, 380), "name", [], "any", false, false, false, 380))) : ($this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getActionsForItem("edit", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 381
($context["easyadmin"] ?? null), "entity", [], "any", false, false, false, 381), "name", [], "any", false, false, false, 381))));
        // line 382
        echo "
    ";
        // line 383
        $context["_entity_id"] = (((twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "view", [], "any", false, false, false, 383) == "new")) ? (null) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 385
($context["easyadmin"] ?? null), "item", [], "any", false, false, false, 385), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "entity", [], "any", false, false, false, 385), "primary_key_field_name", [], "any", false, false, false, 385), [], "any", false, false, false, 385)));
        // line 386
        echo "
    ";
        // line 387
        $context["_request_parameters"] = ["entity" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "entity", [], "any", false, false, false, 387), "name", [], "any", false, false, false, 387), "referer" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 387), "query", [], "any", false, false, false, 387), "get", [0 => "referer"], "method", false, false, false, 387)];
        // line 388
        echo "
    ";
        // line 389
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_actions.html.twig", ["actions" =>         // line 390
($context["_entity_actions"] ?? null), "entity_config" => twig_get_attribute($this->env, $this->source,         // line 391
($context["easyadmin"] ?? null), "entity", [], "any", false, false, false, 391), "request_parameters" =>         // line 392
($context["_request_parameters"] ?? null), "translation_domain" =>         // line 393
($context["_translation_domain"] ?? null), "trans_parameters" =>         // line 394
($context["_trans_parameters"] ?? null), "item_id" =>         // line 395
($context["_entity_id"] ?? null), "item" => twig_get_attribute($this->env, $this->source,         // line 396
($context["easyadmin"] ?? null), "item", [], "any", false, false, false, 396)], false);
        // line 397
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 401
    public function block_easyadmin_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "easyadmin_widget"));

        // line 402
        echo "    ";
        $context["_translation_domain"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "entity", [], "any", false, false, false, 402), "translation_domain", [], "any", false, false, false, 402);
        // line 403
        echo "    <div class=\"row\">
        ";
        // line 404
        if ((twig_length_filter($this->env, ($context["easyadmin_form_tabs"] ?? null)) > 0)) {
            // line 405
            echo "            <div class=\"col-12\">
                <div class=\"nav-tabs-custom form-tabs\">
                    <ul class=\"nav nav-tabs\">
                        ";
            // line 408
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["easyadmin_form_tabs"] ?? null));
            foreach ($context['_seq'] as $context["tab_name"] => $context["tab_config"]) {
                // line 409
                echo "                            <li class=\"nav-item\">
                                <a class=\"nav-link ";
                // line 410
                if (twig_get_attribute($this->env, $this->source, $context["tab_config"], "active", [], "any", false, false, false, 410)) {
                    echo "active";
                }
                echo "\" href=\"#";
                echo twig_escape_filter($this->env, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = $context["tab_config"]) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["id"] ?? null) : null), "html", null, true);
                echo "\" id=\"";
                echo twig_escape_filter($this->env, (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = $context["tab_config"]) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["id"] ?? null) : null), "html", null, true);
                echo "-tab\" data-toggle=\"tab\">";
                // line 411
                if (((twig_get_attribute($this->env, $this->source, $context["tab_config"], "icon", [], "any", true, true, false, 411)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["tab_config"], "icon", [], "any", false, false, false, 411), false)) : (false))) {
                    // line 412
                    echo "<i class=\"fa fa-fw fa-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab_config"], "icon", [], "any", false, false, false, 412), "html", null, true);
                    echo "\"></i>";
                }
                // line 414
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = $context["tab_config"]) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["label"] ?? null) : null), array(), ($context["_translation_domain"] ?? null)), "html", null, true);
                // line 415
                if ((twig_get_attribute($this->env, $this->source, $context["tab_config"], "errors", [], "any", false, false, false, 415) > 0)) {
                    // line 416
                    echo "<span class=\"badge badge-danger\" title=\"";
                    echo twig_escape_filter($this->env, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->transchoice("form.tab.error_badge_title", twig_get_attribute($this->env, $this->source, $context["tab_config"], "errors", [], "any", false, false, false, 416), [], "EasyAdminBundle"), "html", null, true);
                    echo "\">";
                    // line 417
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab_config"], "errors", [], "any", false, false, false, 417), "html", null, true);
                    // line 418
                    echo "</span>";
                }
                // line 420
                echo "</a>
                            </li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['tab_name'], $context['tab_config'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 423
            echo "                    </ul>
                    <div class=\"tab-content\">
                        ";
            // line 425
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["easyadmin_form_tabs"] ?? null));
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
            foreach ($context['_seq'] as $context["tab_name"] => $context["tab_config"]) {
                // line 426
                echo "                            <div id=\"";
                echo twig_escape_filter($this->env, (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = $context["tab_config"]) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["id"] ?? null) : null), "html", null, true);
                echo "\" class=\"tab-pane ";
                if (twig_get_attribute($this->env, $this->source, $context["tab_config"], "active", [], "any", false, false, false, 426)) {
                    echo "active";
                }
                echo " ";
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["tab_config"], "css_class", [], "array", true, true, false, 426)) ? (_twig_default_filter((($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = $context["tab_config"]) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["css_class"] ?? null) : null), "")) : ("")), "html", null, true);
                echo "\">
                                ";
                // line 427
                if (((twig_get_attribute($this->env, $this->source, $context["tab_config"], "help", [], "array", true, true, false, 427)) ? (_twig_default_filter((($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = $context["tab_config"]) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136["help"] ?? null) : null), false)) : (false))) {
                    // line 428
                    echo "                                    <div class=\"content-header-help tab-help\">
                                        ";
                    // line 429
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = $context["tab_config"]) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386["help"] ?? null) : null), array(), ($context["_translation_domain"] ?? null));
                    echo "
                                    </div>
                                ";
                }
                // line 432
                echo "
                                <div class=\"row\">
                                    ";
                // line 434
                $this->displayBlock("easyadmin_widget_groups", $context, $blocks);
                echo "
                                </div>
                            </div>
                        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['tab_name'], $context['tab_config'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 438
            echo "                    </div>
                </div>
            </div>
        ";
        } else {
            // line 442
            echo "            ";
            $this->displayBlock("easyadmin_widget_groups", $context, $blocks);
            echo "
        ";
        }
        // line 444
        echo "    </div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 447
    public function block_easyadmin_widget_groups($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "easyadmin_widget_groups"));

        // line 448
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_filter(($context["easyadmin_form_groups"] ?? null), function ($__group_config__) use ($context, $macros) { $context["group_config"] = $__group_config__; return ( !twig_get_attribute($this->env, $this->source, $context["group_config"], "form_tab", [], "any", false, false, false, 448) || (twig_get_attribute($this->env, $this->source, $context["group_config"], "form_tab", [], "any", false, false, false, 448) == ($context["tab_name"] ?? null))); }));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["group_name"] => $context["group_config"]) {
            // line 449
            echo "        <div class=\"field-group col-";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["group_config"], "columns", [], "any", true, true, false, 449)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["group_config"], "columns", [], "any", false, false, false, 449), "12")) : ("12")), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["group_config"], "css_class", [], "any", true, true, false, 449)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["group_config"], "css_class", [], "any", false, false, false, 449), "")) : ("")), "html", null, true);
            echo "\">
            <fieldset>
                ";
            // line 451
            if (((((twig_get_attribute($this->env, $this->source, $context["group_config"], "label", [], "any", true, true, false, 451)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["group_config"], "label", [], "any", false, false, false, 451), false)) : (false)) || ((twig_get_attribute($this->env, $this->source, $context["group_config"], "icon", [], "any", true, true, false, 451)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["group_config"], "icon", [], "any", false, false, false, 451), false)) : (false))) || ((twig_get_attribute($this->env, $this->source, $context["group_config"], "collapsible", [], "any", true, true, false, 451)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["group_config"], "collapsible", [], "any", false, false, false, 451), false)) : (false)))) {
                // line 452
                echo "                    <legend class=\"";
                echo ((((twig_get_attribute($this->env, $this->source, $context["group_config"], "icon", [], "any", true, true, false, 452)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["group_config"], "icon", [], "any", false, false, false, 452), false)) : (false))) ? ("with-icon") : (""));
                echo "\">
                        ";
                // line 453
                if (((twig_get_attribute($this->env, $this->source, $context["group_config"], "icon", [], "any", true, true, false, 453)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["group_config"], "icon", [], "any", false, false, false, 453), false)) : (false))) {
                    // line 454
                    echo "                            <i class=\"fa fa-fw fa-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["group_config"], "icon", [], "any", false, false, false, 454), "html", null, true);
                    echo "\"></i>
                        ";
                }
                // line 456
                echo "                        ";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["group_config"], "label", [], "any", false, false, false, 456), array(), ($context["_translation_domain"] ?? null));
                echo "
                    </legend>

                    ";
                // line 459
                if (((twig_get_attribute($this->env, $this->source, $context["group_config"], "help", [], "any", true, true, false, 459)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["group_config"], "help", [], "any", false, false, false, 459), false)) : (false))) {
                    // line 460
                    echo "                        <div class=\"legend-help\">";
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["group_config"], "help", [], "any", false, false, false, 460), array(), ($context["_translation_domain"] ?? null));
                    echo "</div>
                    ";
                }
                // line 462
                echo "                ";
            }
            // line 463
            echo "
                <div class=\"row\">
                    ";
            // line 465
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_array_filter(($context["form"] ?? null), function ($__field__) use ($context, $macros) { $context["field"] = $__field__; return (!twig_in_filter("hidden", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 465), "block_prefixes", [], "any", false, false, false, 465)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 465), "easyadmin", [], "any", false, false, false, 465), "form_group", [], "any", false, false, false, 465) == $context["group_name"])); }));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 466
                echo "                        ";
                if (( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 466), "easyadmin", [], "any", false, false, false, 466), "form_tab", [], "any", false, false, false, 466) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 466), "easyadmin", [], "any", false, false, false, 466), "form_tab", [], "any", false, false, false, 466) == ($context["tab_name"] ?? null)))) {
                    // line 467
                    echo "                            <div class=\"col-";
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, true, false, 467), "easyadmin", [], "any", false, true, false, 467), "field", [], "any", false, true, false, 467), "columns", [], "any", true, true, false, 467)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, true, false, 467), "easyadmin", [], "any", false, true, false, 467), "field", [], "any", false, true, false, 467), "columns", [], "any", false, false, false, 467), "12")) : ("12")), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, true, false, 467), "easyadmin", [], "any", false, true, false, 467), "field", [], "any", false, true, false, 467), "css_class", [], "any", true, true, false, 467)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, true, false, 467), "easyadmin", [], "any", false, true, false, 467), "field", [], "any", false, true, false, 467), "css_class", [], "any", false, false, false, 467), "")) : ("")), "html", null, true);
                    echo "\">
                                ";
                    // line 468
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'row');
                    echo "
                            </div>
                        ";
                }
                // line 471
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 472
            echo "                </div>
            </fieldset>
        </div>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 476
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_array_filter(($context["form"] ?? null), function ($__field__) use ($context, $macros) { $context["field"] = $__field__; return (!twig_in_filter("hidden", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 476), "block_prefixes", [], "any", false, false, false, 476)) && ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 476), "easyadmin", [], "any", false, false, false, 476), "form_tab", [], "any", false, false, false, 476) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 476), "easyadmin", [], "any", false, false, false, 476), "form_tab", [], "any", false, false, false, 476) == ($context["tab_name"] ?? null)))); }));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 477
                echo "            <div class=\"col-";
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, true, false, 477), "easyadmin", [], "any", false, true, false, 477), "field", [], "any", false, true, false, 477), "columns", [], "any", true, true, false, 477)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, true, false, 477), "easyadmin", [], "any", false, true, false, 477), "field", [], "any", false, true, false, 477), "columns", [], "any", false, false, false, 477), "12")) : ("12")), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, true, false, 477), "easyadmin", [], "any", false, true, false, 477), "field", [], "any", false, true, false, 477), "css_class", [], "any", true, true, false, 477)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, true, false, 477), "easyadmin", [], "any", false, true, false, 477), "field", [], "any", false, true, false, 477), "css_class", [], "any", false, false, false, 477), "")) : ("")), "html", null, true);
                echo "\">
                ";
                // line 478
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'row');
                echo "
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 481
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['group_name'], $context['group_config'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 485
    public function block_easyadmin_autocomplete_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "easyadmin_autocomplete_widget"));

        // line 486
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "autocomplete", [], "any", false, false, false, 486), 'widget', ["attr" => twig_array_merge(        // line 487
($context["attr"] ?? null), ["required" =>         // line 488
($context["required"] ?? null), "data-easyadmin-autocomplete-url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("easyadmin", ["action" => "autocomplete", "entity" =>         // line 491
($context["autocomplete_entity_name"] ?? null)])])]);
        // line 494
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 497
    public function block_easyadmin_autocomplete_inner_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "easyadmin_autocomplete_inner_label"));

        // line 498
        echo "    ";
        $context["name"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "parent", [], "any", false, false, false, 498), "vars", [], "any", false, false, false, 498), "name", [], "any", false, false, false, 498);
        // line 499
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 503
    public function block_easyadmin_code_editor_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "easyadmin_code_editor_widget"));

        // line 504
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget', ["attr" => twig_array_merge(($context["attr"] ?? null), ["data-easyadmin-code-editor" => "true", "data-language" =>         // line 506
($context["language"] ?? null), "data-tab-size" =>         // line 507
($context["tabSize"] ?? null), "data-indent-with-tabs" => ((        // line 508
($context["indentWithTabs"] ?? null)) ? ("true") : ("false")), "data-js-url" => $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/easyadmin/form-type-code-editor.js"), "data-css-url" => $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/easyadmin/form-type-code-editor.css")])]);
        // line 511
        echo "

    ";
        // line 513
        if ( !(null === ($context["height"] ?? null))) {
            // line 514
            echo "        <style type=\"text/css\">
            #";
            // line 515
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo " + .CodeMirror { height: ";
            echo twig_escape_filter($this->env, ($context["height"] ?? null), "html", null, true);
            echo "px !important; max-height: none; }
        </style>
    ";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 521
    public function block_easyadmin_text_editor_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "easyadmin_text_editor_widget"));

        // line 522
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget', ["attr" => twig_array_merge(($context["attr"] ?? null), ["style" => "display: none"])]);
        echo "
    <div class=\"easyadmin-text-editor-wrapper\">
        <trix-editor input=\"";
        // line 524
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\" class=\"trix-content\" data-js-url=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/easyadmin/form-type-text-editor.js"), "html", null, true);
        echo "\" data-css-url=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/easyadmin/form-type-text-editor.css"), "html", null, true);
        echo "\"></trix-editor>
    </div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 529
    public function block_easyadmin_section_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "easyadmin_section_row"));

        // line 530
        echo "    ";
        $context["_translation_domain"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "entity", [], "any", false, false, false, 530), "translation_domain", [], "any", false, false, false, 530);
        // line 531
        echo "    <div class=\"form-section ";
        echo ((((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", [], "any", false, true, false, 531), "icon", [], "any", true, true, false, 531)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", [], "any", false, true, false, 531), "icon", [], "any", false, false, false, 531), false)) : (false)) == false) && (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", [], "any", false, true, false, 531), "label", [], "any", true, true, false, 531)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", [], "any", false, true, false, 531), "label", [], "any", false, false, false, 531), false)) : (false)) == false))) ? ("form-section-empty") : (""));
        echo " ";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", [], "any", false, true, false, 531), "css_class", [], "any", true, true, false, 531)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", [], "any", false, true, false, 531), "css_class", [], "any", false, false, false, 531), "")) : ("")), "html", null, true);
        echo "\">
        <h2>
            ";
        // line 533
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", [], "any", false, true, false, 533), "icon", [], "any", true, true, false, 533)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", [], "any", false, true, false, 533), "icon", [], "any", false, false, false, 533), false)) : (false))) {
            echo "<i class=\"fa fa-fw fa-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", [], "any", false, false, false, 533), "icon", [], "any", false, false, false, 533), "html", null, true);
            echo "\"></i>";
        }
        // line 534
        echo "            <span>";
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", [], "any", false, true, false, 534), "label", [], "any", true, true, false, 534)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", [], "any", false, true, false, 534), "label", [], "any", false, false, false, 534), false)) : (false))) {
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", [], "any", false, true, false, 534), "label", [], "any", true, true, false, 534)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", [], "any", false, true, false, 534), "label", [], "any", false, false, false, 534), "")) : ("")), array(), ($context["_translation_domain"] ?? null));
        }
        echo "</span>
        </h2>

        ";
        // line 537
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", [], "any", false, true, false, 537), "help", [], "any", true, true, false, 537)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", [], "any", false, true, false, 537), "help", [], "any", false, false, false, 537), false)) : (false))) {
            // line 538
            echo "            <p class=\"form-section-help\">";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", [], "any", false, false, false, 538), "help", [], "any", false, false, false, 538), array(), ($context["_translation_domain"] ?? null));
            echo "</p>
        ";
        }
        // line 540
        echo "    </div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 544
    public function block_easyadmin_batch_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "easyadmin_batch_widget"));

        // line 545
        echo "    ";
        $context["_translation_domain"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "entity", [], "any", false, false, false, 545), "translation_domain", [], "any", false, false, false, 545);
        // line 546
        echo "    ";
        $context["_trans_parameters"] = ["%entity_name%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "entity", [], "any", false, false, false, 546), "name", [], "any", false, false, false, 546), array(), ($context["_translation_domain"] ?? null)), "%entity_label%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "entity", [], "any", false, false, false, 546), "label", [], "any", false, false, false, 546), array(), ($context["_translation_domain"] ?? null))];
        // line 547
        echo "
    ";
        // line 548
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "ids", [], "any", false, false, false, 548), 'widget');
        echo "
    <button type=\"button\" class=\"btn btn-link deselect-batch-button\">";
        // line 549
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.deselect", ($context["_trans_parameters"] ?? null), ($context["_translation_domain"] ?? null)), "html", null, true);
        echo "</button>
    ";
        // line 550
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["batch_actions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
            // line 551
            echo "        <button type=\"submit\" class=\"btn ";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["action"], "css_class", [], "any", true, true, false, 551)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["action"], "css_class", [], "any", false, false, false, 551), "btn-secondary")) : ("btn-secondary")), "html", null, true);
            echo " ";
            if (twig_get_attribute($this->env, $this->source, $context["action"], "ask_confirm", [], "any", false, false, false, 551)) {
                echo "batch-action-requires-confirmation";
            }
            echo "\" title=\"";
            ((twig_test_empty(((twig_get_attribute($this->env, $this->source, $context["action"], "title", [], "any", true, true, false, 551)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["action"], "title", [], "any", false, false, false, 551), "")) : ("")))) ? (print ("")) : (print (twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["action"], "title", [], "any", false, false, false, 551), ($context["_trans_parameters"] ?? null)), "html", null, true))));
            echo "\" name=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 551), "vars", [], "any", false, false, false, 551), "full_name", [], "any", false, false, false, 551), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["action"], "name", [], "any", false, false, false, 551), "html", null, true);
            echo "\">";
            // line 552
            if (twig_get_attribute($this->env, $this->source, $context["action"], "icon", [], "any", false, false, false, 552)) {
                echo "<i class=\"fa fa-fw fa-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["action"], "icon", [], "any", false, false, false, 552), "html", null, true);
                echo "\"></i> ";
            }
            // line 553
            if ((twig_get_attribute($this->env, $this->source, $context["action"], "label", [], "any", true, true, false, 553) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["action"], "label", [], "any", false, false, false, 553)))) {
                // line 554
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["action"], "label", [], "any", false, false, false, 554), ($context["_trans_parameters"] ?? null), ($context["_translation_domain"] ?? null)), "html", null, true);
            }
            // line 556
            echo "</button>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 561
    public function block_easyadmin_filters_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "easyadmin_filters_widget"));

        // line 562
        echo "    ";
        $context["_translation_domain"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "entity", [], "any", false, false, false, 562), "translation_domain", [], "any", false, false, false, 562);
        // line 563
        echo "    ";
        $context["applied_filters"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "filters", [], "any", false, true, false, 563), "applied", [], "any", true, true, false, 563)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "filters", [], "any", false, true, false, 563), "applied", [], "any", false, false, false, 563), [])) : ([]));
        // line 564
        echo "
    ";
        // line 565
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 566
            echo "        <div class=\"filter-field ";
            if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 566)) {
                echo "border-bottom";
            }
            echo " py-1 px-3 ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 566)) {
                echo "pb-2";
            }
            echo "\">
            <div class=\"filter-heading\" id=\"filter-heading-";
            // line 567
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 567), "html", null, true);
            echo "\">
                <input type=\"checkbox\" class=\"filter-checkbox\" ";
            // line 568
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 568), "name", [], "any", false, false, false, 568), ($context["applied_filters"] ?? null))) {
                echo "checked";
            }
            echo ">
                <a data-toggle=\"collapse\" href=\"#filter-content-";
            // line 569
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 569), "html", null, true);
            echo "\" aria-expanded=\"";
            echo ((twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 569), "name", [], "any", false, false, false, 569), ($context["applied_filters"] ?? null))) ? ("true") : ("false"));
            echo "\" aria-controls=\"filter-content-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 569), "html", null, true);
            echo "\">
                    ";
            // line 570
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, true, false, 570), "label", [], "any", true, true, false, 570)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, true, false, 570), "label", [], "any", false, false, false, 570), $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 570), "name", [], "any", false, false, false, 570)))) : ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 570), "name", [], "any", false, false, false, 570)))), array(), ($context["_translation_domain"] ?? null)), "html", null, true);
            echo "
                </a>
            </div>
            <div id=\"filter-content-";
            // line 573
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 573), "html", null, true);
            echo "\" class=\"filter-content collapse ";
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 573), "name", [], "any", false, false, false, 573), ($context["applied_filters"] ?? null))) {
                echo "show";
            }
            echo "\" aria-labelledby=\"filter-heading-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 573), "html", null, true);
            echo "\">
                <div class=\"form-widget my-2\">
                    ";
            // line 575
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'widget');
            echo "
                </div>
            </div>
        </div>
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 580
        echo "
    <script>
        document.querySelectorAll('.filter-checkbox').forEach(filterCheckbox => {
            filterCheckbox.addEventListener('change', function () {
                const filterToggleLink = filterCheckbox.nextElementSibling;
                const filterExpandedAttribute = filterCheckbox.nextElementSibling.getAttribute('aria-expanded');

                if ((filterCheckbox.checked && 'false' === filterExpandedAttribute) || (!filterCheckbox.checked && 'true' === filterExpandedAttribute)) {
                    filterToggleLink.click();
                }
            });
        });

        // we can't use -> \"document.querySelector('form#filters').addEventListener('change', ...);\"
        // because it doesn't work with Select2 elements changes
        // TODO: when using the native datepicker, 'change' isn't fired (either in plain JavaScript
        // or jQuery) unless you input the entire date + time information
        \$(document).on('change', 'form#";
        // line 597
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 597), "id", [], "any", false, false, false, 597), "html", null, true);
        echo "', function (event) {
            if (event.target.classList.contains('filter-checkbox')) {
                return;
            }

            let filterCheckbox = event.target.closest('.filter-field').querySelector('.filter-checkbox');
            if (!filterCheckbox.checked) {
                filterCheckbox.checked = true;
            }
        });
    </script>

    ";
        // line 609
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_select2_widget.html.twig");
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 612
    public function block_easyadmin_numeric_filter_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "easyadmin_numeric_filter_widget"));

        // line 613
        echo "    <div class=\"form-widget-compound\">
        ";
        // line 614
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "comparison", [], "any", false, false, false, 614), 'row');
        echo "
        ";
        // line 615
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "value", [], "any", false, false, false, 615), 'row');
        echo "
        <div id=\"wrapper_";
        // line 616
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "value2", [], "any", false, false, false, 616), "vars", [], "any", false, false, false, 616), "id", [], "any", false, false, false, 616), "html", null, true);
        echo "\" ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "comparison", [], "any", false, false, false, 616), "vars", [], "any", false, false, false, 616), "value", [], "any", false, false, false, 616) != "between")) {
            echo "style=\"display: none\"";
        }
        echo ">
            ";
        // line 617
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "value2", [], "any", false, false, false, 617), 'row');
        echo "
        </div>
        <script>
            document.querySelector('#";
        // line 620
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "comparison", [], "any", false, false, false, 620), "vars", [], "any", false, false, false, 620), "id", [], "any", false, false, false, 620), "html", null, true);
        echo "').addEventListener('change', function(event) {
                const input = document.querySelector('#wrapper_";
        // line 621
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "value2", [], "any", false, false, false, 621), "vars", [], "any", false, false, false, 621), "id", [], "any", false, false, false, 621), "html", null, true);
        echo "');
                input.style.display = event.currentTarget.value === 'between' ? '' : 'none';
            });
        </script>
    </div>";
        // line 626
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 629
    public function block_easyadmin_datetime_filter_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "easyadmin_datetime_filter_widget"));

        // line 630
        echo "    ";
        $this->displayBlock("easyadmin_numeric_filter_widget", $context, $blocks);
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 633
    public function block_easyadmin_fileupload_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "easyadmin_fileupload_widget"));

        // line 634
        echo "    <div class=\"easyadmin-fileupload\">
        <div class=\"input-group\">
            ";
        // line 636
        $context["placeholder"] = "";
        // line 637
        echo "            ";
        $context["title"] = "";
        // line 638
        echo "            ";
        $context["filesLabel"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("files", [], "EasyAdminBundle");
        // line 639
        echo "            ";
        if (($context["currentFiles"] ?? null)) {
            // line 640
            echo "                ";
            if (($context["multiple"] ?? null)) {
                // line 641
                echo "                    ";
                $context["placeholder"] = ((twig_length_filter($this->env, ($context["currentFiles"] ?? null)) . " ") . ($context["filesLabel"] ?? null));
                // line 642
                echo "                ";
            } else {
                // line 643
                echo "                    ";
                $context["placeholder"] = twig_get_attribute($this->env, $this->source, twig_first($this->env, ($context["currentFiles"] ?? null)), "filename", [], "any", false, false, false, 643);
                // line 644
                echo "                    ";
                $context["title"] = twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_first($this->env, ($context["currentFiles"] ?? null)), "mTime", [], "any", false, false, false, 644));
                // line 645
                echo "                ";
            }
            // line 646
            echo "            ";
        }
        // line 647
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 647), 'widget', ["attr" => twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 647), "vars", [], "any", false, false, false, 647), "attr", [], "any", false, false, false, 647), ["placeholder" => ($context["placeholder"] ?? null), "title" => ($context["title"] ?? null), "data-files-label" => ($context["filesLabel"] ?? null)])]);
        echo "
            <div class=\"input-group-append\">
                <span class=\"input-group-text\" ";
        // line 649
        if (twig_test_empty(($context["currentFiles"] ?? null))) {
            echo "style=\"display: none\"";
        }
        echo ">";
        // line 650
        if (($context["currentFiles"] ?? null)) {
            // line 651
            if (($context["multiple"] ?? null)) {
                // line 652
                echo "                            ";
                echo twig_escape_filter($this->env, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->fileSize(twig_array_reduce(($context["currentFiles"] ?? null), function ($__carry__, $__file__) use ($context, $macros) { $context["carry"] = $__carry__; $context["file"] = $__file__; return (($context["carry"] ?? null) + twig_get_attribute($this->env, $this->source, ($context["file"] ?? null), "size", [], "any", false, false, false, 652)); })), "html", null, true);
                echo "
                        ";
            } else {
                // line 654
                echo "                            ";
                echo twig_escape_filter($this->env, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->fileSize(twig_get_attribute($this->env, $this->source, twig_first($this->env, ($context["currentFiles"] ?? null)), "size", [], "any", false, false, false, 654)), "html", null, true);
                echo "
                        ";
            }
        }
        // line 657
        echo "</span>
                ";
        // line 658
        if (($context["allow_delete"] ?? null)) {
            // line 659
            echo "                    <label class=\"btn easyadmin-fileupload-delete-btn\" ";
            if (twig_test_empty(($context["currentFiles"] ?? null))) {
                echo "style=\"display: none\"";
            }
            echo " for=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "delete", [], "any", false, false, false, 659), "vars", [], "any", false, false, false, 659), "id", [], "any", false, false, false, 659), "html", null, true);
            echo "\">
                        <i class=\"fa fa-trash-o\"></i>
                    </label>
                ";
        }
        // line 663
        echo "                <label class=\"btn\" for=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 663), "vars", [], "any", false, false, false, 663), "id", [], "any", false, false, false, 663), "html", null, true);
        echo "\">
                    <i class=\"fa fa-folder-open-o\"></i>
                </label>
            </div>
        </div>
        ";
        // line 668
        if ((($context["multiple"] ?? null) && ($context["currentFiles"] ?? null))) {
            // line 669
            echo "            <div class=\"form-control fileupload-list\">
                <table class=\"fileupload-table\">
                    <tbody>
                    ";
            // line 672
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["currentFiles"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                // line 673
                echo "                        <tr>
                            <td>
                                ";
                // line 675
                if (($context["download_path"] ?? null)) {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((($context["download_path"] ?? null) . twig_get_attribute($this->env, $this->source, $context["file"], "filename", [], "any", false, false, false, 675))), "html", null, true);
                    echo "\">";
                }
                // line 676
                echo "                                    <span title=\"";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["file"], "mTime", [], "any", false, false, false, 676)), "html", null, true);
                echo "\">
                                        <i class=\"fa fa-file-o\"></i> ";
                // line 677
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["file"], "filename", [], "any", false, false, false, 677), "html", null, true);
                echo "
                                    </span>
                                ";
                // line 679
                if (($context["download_path"] ?? null)) {
                    echo "</a>";
                }
                // line 680
                echo "                            </td>
                            <td class=\"text-right file-size\">";
                // line 681
                echo twig_escape_filter($this->env, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->fileSize(twig_get_attribute($this->env, $this->source, $context["file"], "size", [], "any", false, false, false, 681)), "html", null, true);
                echo "</td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 684
            echo "                    </tbody>
                </table>
            </div>
        ";
        }
        // line 688
        echo "        ";
        if (($context["allow_delete"] ?? null)) {
            // line 689
            echo "            <div style=\"display: none\">";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "delete", [], "any", false, false, false, 689), 'widget', ["label" => false]);
            echo "</div>
        ";
        }
        // line 691
        echo "    </div>
    ";
        // line 692
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 692), 'errors');
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/form/bootstrap_4.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  2037 => 692,  2034 => 691,  2028 => 689,  2025 => 688,  2019 => 684,  2010 => 681,  2007 => 680,  2003 => 679,  1998 => 677,  1993 => 676,  1987 => 675,  1983 => 673,  1979 => 672,  1974 => 669,  1972 => 668,  1963 => 663,  1951 => 659,  1949 => 658,  1946 => 657,  1939 => 654,  1933 => 652,  1931 => 651,  1929 => 650,  1924 => 649,  1918 => 647,  1915 => 646,  1912 => 645,  1909 => 644,  1906 => 643,  1903 => 642,  1900 => 641,  1897 => 640,  1894 => 639,  1891 => 638,  1888 => 637,  1886 => 636,  1882 => 634,  1875 => 633,  1865 => 630,  1858 => 629,  1851 => 626,  1844 => 621,  1840 => 620,  1834 => 617,  1826 => 616,  1822 => 615,  1818 => 614,  1815 => 613,  1808 => 612,  1799 => 609,  1784 => 597,  1765 => 580,  1746 => 575,  1735 => 573,  1729 => 570,  1721 => 569,  1715 => 568,  1711 => 567,  1700 => 566,  1683 => 565,  1680 => 564,  1677 => 563,  1674 => 562,  1667 => 561,  1655 => 556,  1652 => 554,  1650 => 553,  1644 => 552,  1630 => 551,  1626 => 550,  1622 => 549,  1618 => 548,  1615 => 547,  1612 => 546,  1609 => 545,  1602 => 544,  1594 => 540,  1588 => 538,  1586 => 537,  1577 => 534,  1571 => 533,  1563 => 531,  1560 => 530,  1553 => 529,  1539 => 524,  1533 => 522,  1526 => 521,  1513 => 515,  1510 => 514,  1508 => 513,  1504 => 511,  1502 => 508,  1501 => 507,  1500 => 506,  1498 => 504,  1491 => 503,  1484 => 499,  1481 => 498,  1474 => 497,  1466 => 494,  1464 => 491,  1463 => 488,  1462 => 487,  1460 => 486,  1453 => 485,  1442 => 481,  1433 => 478,  1426 => 477,  1421 => 476,  1413 => 472,  1407 => 471,  1401 => 468,  1394 => 467,  1391 => 466,  1387 => 465,  1383 => 463,  1380 => 462,  1374 => 460,  1372 => 459,  1365 => 456,  1359 => 454,  1357 => 453,  1352 => 452,  1350 => 451,  1342 => 449,  1336 => 448,  1329 => 447,  1321 => 444,  1315 => 442,  1309 => 438,  1291 => 434,  1287 => 432,  1281 => 429,  1278 => 428,  1276 => 427,  1265 => 426,  1248 => 425,  1244 => 423,  1236 => 420,  1233 => 418,  1231 => 417,  1227 => 416,  1225 => 415,  1223 => 414,  1218 => 412,  1216 => 411,  1207 => 410,  1204 => 409,  1200 => 408,  1195 => 405,  1193 => 404,  1190 => 403,  1187 => 402,  1180 => 401,  1172 => 397,  1170 => 396,  1169 => 395,  1168 => 394,  1167 => 393,  1166 => 392,  1165 => 391,  1164 => 390,  1163 => 389,  1160 => 388,  1158 => 387,  1155 => 386,  1153 => 385,  1152 => 383,  1149 => 382,  1147 => 381,  1146 => 380,  1145 => 379,  1139 => 376,  1136 => 375,  1133 => 373,  1130 => 372,  1127 => 371,  1120 => 370,  1111 => 366,  1109 => 365,  1106 => 363,  1104 => 361,  1097 => 360,  1087 => 356,  1084 => 355,  1078 => 353,  1076 => 352,  1070 => 349,  1066 => 348,  1063 => 347,  1059 => 344,  1054 => 342,  1047 => 339,  1045 => 338,  1042 => 337,  1039 => 336,  1033 => 333,  1029 => 332,  1023 => 329,  1019 => 328,  1016 => 327,  1013 => 326,  1007 => 323,  1004 => 322,  1001 => 321,  999 => 320,  996 => 319,  989 => 318,  979 => 315,  976 => 314,  969 => 313,  959 => 309,  956 => 308,  950 => 306,  948 => 305,  942 => 302,  938 => 301,  935 => 300,  931 => 297,  926 => 295,  919 => 292,  917 => 291,  914 => 290,  908 => 287,  904 => 286,  899 => 285,  896 => 278,  893 => 277,  890 => 276,  888 => 275,  885 => 274,  878 => 273,  868 => 270,  865 => 269,  858 => 268,  848 => 264,  845 => 263,  838 => 262,  829 => 258,  826 => 257,  823 => 256,  820 => 255,  817 => 254,  811 => 252,  808 => 251,  805 => 250,  802 => 247,  795 => 246,  770 => 240,  766 => 237,  763 => 234,  762 => 233,  761 => 232,  759 => 231,  757 => 230,  754 => 228,  752 => 227,  749 => 225,  746 => 223,  744 => 222,  742 => 221,  740 => 220,  733 => 219,  726 => 214,  724 => 213,  718 => 212,  711 => 211,  699 => 205,  692 => 203,  688 => 201,  672 => 192,  664 => 191,  660 => 190,  650 => 183,  645 => 180,  642 => 179,  640 => 178,  634 => 176,  627 => 175,  619 => 171,  617 => 170,  611 => 167,  609 => 166,  606 => 165,  599 => 161,  593 => 160,  589 => 158,  587 => 157,  584 => 156,  579 => 155,  573 => 152,  570 => 151,  568 => 150,  566 => 148,  560 => 144,  557 => 143,  554 => 142,  550 => 141,  547 => 140,  544 => 139,  541 => 138,  539 => 137,  536 => 136,  534 => 135,  526 => 134,  524 => 133,  517 => 132,  503 => 122,  498 => 120,  495 => 119,  493 => 117,  490 => 115,  488 => 114,  486 => 113,  479 => 112,  467 => 106,  460 => 104,  456 => 102,  443 => 92,  438 => 89,  435 => 88,  433 => 87,  431 => 85,  429 => 84,  422 => 83,  415 => 80,  413 => 79,  411 => 78,  404 => 77,  397 => 74,  395 => 73,  393 => 72,  386 => 71,  379 => 68,  376 => 66,  374 => 65,  372 => 64,  369 => 62,  367 => 61,  360 => 60,  349 => 56,  337 => 51,  332 => 49,  328 => 47,  308 => 30,  303 => 27,  300 => 26,  297 => 25,  290 => 24,  281 => 19,  279 => 17,  273 => 14,  271 => 13,  268 => 12,  265 => 11,  263 => 9,  262 => 8,  261 => 7,  260 => 6,  258 => 5,  256 => 4,  249 => 3,  242 => 633,  239 => 632,  237 => 629,  234 => 628,  232 => 612,  229 => 611,  227 => 561,  224 => 559,  222 => 544,  219 => 542,  217 => 529,  214 => 527,  212 => 521,  209 => 519,  207 => 503,  204 => 501,  202 => 497,  199 => 496,  197 => 485,  194 => 483,  192 => 447,  189 => 446,  187 => 401,  184 => 399,  182 => 370,  179 => 369,  177 => 360,  174 => 359,  172 => 318,  169 => 317,  167 => 313,  164 => 312,  162 => 273,  159 => 272,  157 => 268,  154 => 267,  152 => 262,  150 => 246,  147 => 243,  145 => 219,  142 => 218,  139 => 216,  137 => 211,  134 => 210,  132 => 175,  129 => 174,  127 => 132,  124 => 131,  121 => 129,  119 => 112,  116 => 111,  114 => 83,  111 => 82,  109 => 77,  106 => 76,  104 => 71,  101 => 70,  99 => 60,  96 => 59,  94 => 24,  91 => 23,  88 => 21,  86 => 3,  83 => 2,  30 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/form/bootstrap_4.html.twig", "/Users/vellacyril/PhpstormProjects/arcades/vendor/easycorp/easyadmin-bundle/src/Resources/views/form/bootstrap_4.html.twig");
    }
}
