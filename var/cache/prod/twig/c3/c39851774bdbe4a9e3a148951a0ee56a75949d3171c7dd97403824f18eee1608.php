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

/* @VichUploader/Form/fields.html.twig */
class __TwigTemplate_9810c800659fe8f7febff6f13426df84ac89daab44f3c99ec9d1e58a1f06d8df extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'vich_file_row' => [$this, 'block_vich_file_row'],
            'vich_file_widget' => [$this, 'block_vich_file_widget'],
            'vich_image_row' => [$this, 'block_vich_image_row'],
            'vich_image_widget' => [$this, 'block_vich_image_widget'],
            'vich_file_label' => [$this, 'block_vich_file_label'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('vich_file_row', $context, $blocks);
        // line 6
        $this->displayBlock('vich_file_widget', $context, $blocks);
        // line 19
        $this->displayBlock('vich_image_row', $context, $blocks);
        // line 24
        $this->displayBlock('vich_image_widget', $context, $blocks);
        // line 40
        $this->displayBlock('vich_file_label', $context, $blocks);
    }

    // line 1
    public function block_vich_file_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $context["force_error"] = true;
        // line 3
        $this->displayBlock("form_row", $context, $blocks);
    }

    // line 6
    public function block_vich_file_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "<div class=\"vich-file\">";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 8), 'widget');
        // line 9
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "delete", [], "any", true, true, false, 9)) {
            // line 10
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "delete", [], "any", false, false, false, 10), 'row');
        }
        // line 13
        if (($context["download_uri"] ?? null)) {
            // line 14
            echo "<a href=\"";
            echo twig_escape_filter($this->env, (((($context["asset_helper"] ?? null) === true)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["download_uri"] ?? null))) : (($context["download_uri"] ?? null))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (((($context["translation_domain"] ?? null) === false)) ? (($context["download_label"] ?? null)) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["download_label"] ?? null), [], ($context["translation_domain"] ?? null)))), "html", null, true);
            echo "</a>";
        }
        // line 16
        echo "</div>";
    }

    // line 19
    public function block_vich_image_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        $context["force_error"] = true;
        // line 21
        $this->displayBlock("form_row", $context, $blocks);
    }

    // line 24
    public function block_vich_image_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "<div class=\"vich-image\">";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 26), 'widget');
        // line 27
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "delete", [], "any", true, true, false, 27)) {
            // line 28
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "delete", [], "any", false, false, false, 28), 'row');
        }
        // line 31
        if (($context["image_uri"] ?? null)) {
            // line 32
            echo "<a href=\"";
            echo twig_escape_filter($this->env, (((($context["asset_helper"] ?? null) === true)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["image_uri"] ?? null))) : (($context["image_uri"] ?? null))), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, (((($context["asset_helper"] ?? null) === true)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["image_uri"] ?? null))) : (($context["image_uri"] ?? null))), "html", null, true);
            echo "\" alt=\"\" /></a>";
        }
        // line 34
        if (($context["download_uri"] ?? null)) {
            // line 35
            echo "<a href=\"";
            echo twig_escape_filter($this->env, (((($context["asset_helper"] ?? null) === true)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["download_uri"] ?? null))) : (($context["download_uri"] ?? null))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (((($context["translation_domain"] ?? null) === false)) ? (($context["download_label"] ?? null)) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["download_label"] ?? null), [], ($context["translation_domain"] ?? null)))), "html", null, true);
            echo "</a>";
        }
        // line 37
        echo "</div>";
    }

    // line 40
    public function block_vich_file_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 41
        $context["label"] = _twig_default_filter($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["label"] ?? null)), ($context["label"] ?? null));
        // line 42
        $this->displayBlock("form_label", $context, $blocks);
    }

    public function getTemplateName()
    {
        return "@VichUploader/Form/fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  141 => 42,  139 => 41,  135 => 40,  131 => 37,  124 => 35,  122 => 34,  115 => 32,  113 => 31,  110 => 28,  108 => 27,  106 => 26,  104 => 25,  100 => 24,  96 => 21,  94 => 20,  90 => 19,  86 => 16,  79 => 14,  77 => 13,  74 => 10,  72 => 9,  70 => 8,  68 => 7,  64 => 6,  60 => 3,  58 => 2,  54 => 1,  50 => 40,  48 => 24,  46 => 19,  44 => 6,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@VichUploader/Form/fields.html.twig", "/Users/vellacyril/PhpstormProjects/arcades/vendor/vich/uploader-bundle/Resources/views/Form/fields.html.twig");
    }
}
