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

/* @EasyAdmin/default/new.html.twig */
class __TwigTemplate_85d312b0e26e2f09178ac632d7c2345642e0b3a389fbdbca0584ec9f9f6bda91 extends \Twig\Template
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
            'content_footer_wrapper' => [$this, 'block_content_footer_wrapper'],
            'main' => [$this, 'block_main'],
            'entity_form' => [$this, 'block_entity_form'],
            'body_javascript' => [$this, 'block_body_javascript'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 7
        return $this->loadTemplate(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "templates", [], "any", false, false, false, 7), "layout", [], "any", false, false, false, 7), "@EasyAdmin/default/new.html.twig", 7);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/default/new.html.twig"));

        // line 1
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? null), $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getBackendConfiguration("design.form_theme"), false);
        // line 3
        $context["_entity_config"] = $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getEntityConfiguration(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 3), "query", [], "any", false, false, false, 3), "get", [0 => "entity"], "method", false, false, false, 3));
        // line 4
        $context["__internal_2076e80bb6dff4242ca2dc5095a5da1a7e42a23fba8900adbaf4f90229538009"] = twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "translation_domain", [], "any", false, false, false, 4);
        // line 5
        $context["_trans_parameters"] = ["%entity_name%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "name", [], "any", false, false, false, 5), [],         // line 4
($context["__internal_2076e80bb6dff4242ca2dc5095a5da1a7e42a23fba8900adbaf4f90229538009"] ?? null)), "%entity_label%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source,         // line 5
($context["_entity_config"] ?? null), "label", [], "any", false, false, false, 5), [],         // line 4
($context["__internal_2076e80bb6dff4242ca2dc5095a5da1a7e42a23fba8900adbaf4f90229538009"] ?? null))];
        // line 7
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_body_id($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_id"));

        echo twig_escape_filter($this->env, ("easyadmin-new-" . twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "name", [], "any", false, false, false, 9)), "html", null, true);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_body_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("new new-" . twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "name", [], "any", false, false, false, 10))), "html", null, true);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block_content_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_title"));

        // line 13
        echo "    ";
        ob_start(function () { return ''; });
        // line 14
        echo "        ";
        $context["_default_title"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("new.page_title", ($context["_trans_parameters"] ?? null), "EasyAdminBundle");
        // line 15
        echo "        ";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "new", [], "any", false, true, false, 15), "title", [], "any", true, true, false, 15)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "new", [], "any", false, false, false, 15), "title", [], "any", false, false, false, 15), ($context["_trans_parameters"] ?? null),         // line 4
($context["__internal_2076e80bb6dff4242ca2dc5095a5da1a7e42a23fba8900adbaf4f90229538009"] ?? null))) : (        // line 15
($context["_default_title"] ?? null))), "html", null, true);
        echo "
    ";
        $___internal_902daa7586847d405142fcc757f9df9fdcb67869797e7f0ce29a41992b31f7fc_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 13
        echo twig_spaceless($___internal_902daa7586847d405142fcc757f9df9fdcb67869797e7f0ce29a41992b31f7fc_);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 19
    public function block_content_footer_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_footer_wrapper"));

        echo "";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 21
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 22
        echo "    ";
        $this->displayBlock('entity_form', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_entity_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "entity_form"));

        // line 23
        echo "        ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form');
        echo "
    ";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 27
    public function block_body_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_javascript"));

        // line 28
        echo "    ";
        $this->displayParentBlock("body_javascript", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function() {
            \$('.new-form').areYouSure({ 'message': '";
        // line 32
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("form.are_you_sure", [], "EasyAdminBundle"), "js"), "html", null, true);
        echo "' });

            const entityForm = document.querySelector('form.new-form');
            const formSubmitButton = entityForm.querySelector('button[type=\"submit\"]');
            const inputFieldsSelector = 'input,select,textarea';

            // Adding visual feedback for invalid fields: any \".form-group\" with invalid fields
            // receives \"has-error\" class. The class is removed on click on the \".form-group\"
            // itself to support custom/complex fields.
            formSubmitButton.addEventListener('click', function() {
                entityForm.querySelectorAll(inputFieldsSelector).forEach(function (input) {
                    if (!input.validity.valid) {
                        const formGroup = input.closest('div.form-group');

                        formGroup.classList.add('has-error');

                        formGroup.addEventListener('click', function onFormGroupClick() {
                            formGroup.classList.remove('has-error');
                            formGroup.removeEventListener('click', onFormGroupClick);
                        });
                    }
                });
            });

            // forms with tabs require some special treatment for errors. The problem
            // is when the field with errors is included in a tab not currently visible.
            // Browser shows this error \"An invalid form control with name='...' is not focusable.\"
            // So, the user clicks on Submit button, the form is not submitted and the error
            // is not displayed. This JavaScript code ensures that each tab shows a badge with
            // the number of errors in it.
            formSubmitButton.addEventListener('click', function() {
                const formTabPanes = entityForm.querySelectorAll('.tab-pane');
                if (0 === formTabPanes.length) {
                    return;
                }

                let firstNavTabItemWithError = null;

                formTabPanes.forEach(function (tabPane) {
                    let tabPaneNumErrors = 0;
                    tabPane.querySelectorAll(inputFieldsSelector).forEach(function (input) {
                        if (!input.validity.valid) {
                            tabPaneNumErrors++;
                        }
                    });

                    let navTabItem = entityForm.querySelector('.nav-item a[href=\"#' + tabPane.id + '\"]');
                    let existingErrorBadge = navTabItem.querySelector('span.badge.badge-danger');
                    if (null !== existingErrorBadge) {
                        navTabItem.removeChild(existingErrorBadge);
                    }

                    if (tabPaneNumErrors > 0) {
                        let newErrorBadge = document.createElement('span');
                        newErrorBadge.classList.add('badge', 'badge-danger');
                        newErrorBadge.title = 'form.tab.error_badge_title';
                        newErrorBadge.textContent = tabPaneNumErrors;

                        navTabItem.appendChild(newErrorBadge);

                        if (null === firstNavTabItemWithError) {
                            firstNavTabItemWithError = navTabItem;
                        }
                    }
                });

                if (firstNavTabItemWithError) {
                    firstNavTabItemWithError.click();
                }
            });

            // prevent multiple form submissions to avoid creating duplicated entities
            entityForm.addEventListener('submit', function() {
                // this timeout is needed to include the disabled button into the submitted form
                setTimeout(function() {
                    const submitButtons = entityForm.querySelectorAll('[type=\"submit\"]');
                    submitButtons.forEach(function(button) {
                        button.setAttribute('disabled', 'disabled');
                    });
                }, 1);
            }, false);
        });
    </script>

    ";
        // line 116
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_select2_widget.html.twig");
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  269 => 116,  182 => 32,  174 => 28,  167 => 27,  157 => 23,  143 => 22,  136 => 21,  123 => 19,  116 => 13,  111 => 15,  110 => 4,  108 => 15,  105 => 14,  102 => 13,  95 => 12,  82 => 10,  69 => 9,  62 => 7,  60 => 4,  59 => 5,  58 => 4,  57 => 5,  55 => 4,  53 => 3,  51 => 1,  41 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/default/new.html.twig", "/Users/vellacyril/PhpstormProjects/arcades/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/new.html.twig");
    }
}
