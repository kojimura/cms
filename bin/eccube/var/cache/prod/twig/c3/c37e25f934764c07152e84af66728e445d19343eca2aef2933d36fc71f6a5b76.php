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

/* bootstrap_5_horizontal_layout.html.twig */
class __TwigTemplate_12196f475d816d60cb102e644a21078db77b4c5009b51cb8b399f448c1d36530 extends \Eccube\Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        // line 1
        $_trait_0 = $this->loadTemplate("bootstrap_5_layout.html.twig", "bootstrap_5_horizontal_layout.html.twig", 1);
        if (!$_trait_0->isTraitable()) {
            throw new RuntimeError('Template "'."bootstrap_5_layout.html.twig".'" cannot be used as a trait.', 1, $this->source);
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            [
                'form_label' => [$this, 'block_form_label'],
                'form_label_class' => [$this, 'block_form_label_class'],
                'form_row' => [$this, 'block_form_row'],
                'fieldset_form_row' => [$this, 'block_fieldset_form_row'],
                'submit_row' => [$this, 'block_submit_row'],
                'reset_row' => [$this, 'block_reset_row'],
                'button_row' => [$this, 'block_button_row'],
                'checkbox_row' => [$this, 'block_checkbox_row'],
                'form_group_class' => [$this, 'block_form_group_class'],
            ]
        );
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_label', $context, $blocks);
        // line 19
        echo "
";
        // line 20
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 23
        echo "
";
        // line 25
        echo "
";
        // line 26
        $this->displayBlock('form_row', $context, $blocks);
        // line 72
        echo "
";
        // line 73
        $this->displayBlock('fieldset_form_row', $context, $blocks);
        // line 89
        echo "
";
        // line 90
        $this->displayBlock('submit_row', $context, $blocks);
        // line 98
        echo "
";
        // line 99
        $this->displayBlock('reset_row', $context, $blocks);
        // line 107
        echo "
";
        // line 108
        $this->displayBlock('button_row', $context, $blocks);
        // line 116
        echo "
";
        // line 117
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 127
        echo "
";
        // line 128
        $this->displayBlock('form_group_class', $context, $blocks);
    }

    // line 5
    public function block_form_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        if ((($context["label"] ?? null) === false)) {
            // line 7
            echo "<div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>";
        } else {
            // line 9
            $context["row_class"] = ((array_key_exists("row_class", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["row_class"] ?? null), 9, $this->source), ((twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, true, 9)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, true, 9), 9, $this->source), "")) : ("")))) : (((twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, true, 9)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, true, 9), 9, $this->source), "")) : (""))));
            // line 10
            if ((!twig_in_filter("form-floating", ($context["row_class"] ?? null)) && !twig_in_filter("input-group", ($context["row_class"] ?? null)))) {
                // line 11
                if (( !array_key_exists("expanded", $context) ||  !($context["expanded"] ?? null))) {
                    // line 12
                    $context["label_attr"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["label_attr"] ?? null), 12, $this->source), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, true, 12)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, true, 12), 12, $this->source), "")) : ("")) . " col-form-label"))]);
                }
                // line 14
                $context["label_attr"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["label_attr"] ?? null), 14, $this->source), ["class" => twig_trim_filter(((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, true, 14)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, true, 14), 14, $this->source), "")) : ("")) . " ") .                 $this->renderBlock("form_label_class", $context, $blocks)))]);
            }
            // line 16
            $this->displayParentBlock("form_label", $context, $blocks);
        }
    }

    // line 20
    public function block_form_label_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "col-sm-2";
    }

    // line 26
    public function block_form_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 27
        if ((array_key_exists("expanded", $context) && ($context["expanded"] ?? null))) {
            // line 28
            $this->displayBlock("fieldset_form_row", $context, $blocks);
        } else {
            // line 30
            $context["widget_attr"] = [];
            // line 31
            if ( !twig_test_empty(($context["help"] ?? null))) {
                // line 32
                $context["widget_attr"] = ["attr" => ["aria-describedby" => ($this->sandbox->ensureToStringAllowed(($context["id"] ?? null), 32, $this->source) . "_help")]];
            }
            // line 34
            $context["row_class"] = ((array_key_exists("row_class", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["row_class"] ?? null), 34, $this->source), ((twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, true, 34)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, true, 34), 34, $this->source), "mb-3")) : ("mb-3")))) : (((twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, true, 34)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, true, 34), 34, $this->source), "mb-3")) : ("mb-3"))));
            // line 35
            $context["is_form_floating"] = ((array_key_exists("is_form_floating", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["is_form_floating"] ?? null), 35, $this->source), twig_in_filter("form-floating", ($context["row_class"] ?? null)))) : (twig_in_filter("form-floating", ($context["row_class"] ?? null))));
            // line 36
            $context["is_input_group"] = ((array_key_exists("is_input_group", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["is_input_group"] ?? null), 36, $this->source), twig_in_filter("input-group", ($context["row_class"] ?? null)))) : (twig_in_filter("input-group", ($context["row_class"] ?? null))));
            // line 38
            $context["row_class"] = twig_replace_filter($this->sandbox->ensureToStringAllowed(($context["row_class"] ?? null), 38, $this->source), ["form-floating" => "", "input-group" => ""]);
            // line 39
            echo "<div";
            $__internal_compile_0 = ["attr" => twig_array_merge(($context["row_attr"] ?? null), ["class" => twig_trim_filter(((($context["row_class"] ?? null) . " row") . (((( !($context["compound"] ?? null) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? null), false)) : (false))) &&  !($context["valid"] ?? null))) ? (" is-invalid") : (""))))])];
            if (!twig_test_iterable($__internal_compile_0)) {
                throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 39, $this->getSourceContext());
            }
            $__internal_compile_0 = twig_to_array($__internal_compile_0);
            $context['_parent'] = $context;
            $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_0));
            $this->displayBlock("attributes", $context, $blocks);
            $context = $context['_parent'];
            echo ">";
            // line 40
            if ((($context["is_form_floating"] ?? null) || ($context["is_input_group"] ?? null))) {
                // line 41
                echo "<div class=\"";
                $this->displayBlock("form_label_class", $context, $blocks);
                echo "\"></div>
                <div class=\"";
                // line 42
                $this->displayBlock("form_group_class", $context, $blocks);
                echo "\">";
                // line 43
                if (($context["is_form_floating"] ?? null)) {
                    // line 44
                    echo "<div class=\"form-floating\">";
                    // line 45
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 45, $this->source), 'widget', $this->sandbox->ensureToStringAllowed(($context["widget_attr"] ?? null), 45, $this->source));
                    // line 46
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 46, $this->source), 'label');
                    // line 47
                    echo "</div>";
                } elseif (                // line 48
($context["is_input_group"] ?? null)) {
                    // line 49
                    echo "<div class=\"input-group\">";
                    // line 50
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 50, $this->source), 'label');
                    // line 51
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 51, $this->source), 'widget', $this->sandbox->ensureToStringAllowed(($context["widget_attr"] ?? null), 51, $this->source));
                    // line 53
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 53, $this->source), 'help');
                    // line 54
                    echo "</div>";
                }
                // line 56
                if ( !($context["is_input_group"] ?? null)) {
                    // line 57
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 57, $this->source), 'help');
                }
                // line 59
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 59, $this->source), 'errors');
                // line 60
                echo "</div>";
            } else {
                // line 62
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 62, $this->source), 'label');
                // line 63
                echo "<div class=\"";
                $this->displayBlock("form_group_class", $context, $blocks);
                echo "\">";
                // line 64
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 64, $this->source), 'widget', $this->sandbox->ensureToStringAllowed(($context["widget_attr"] ?? null), 64, $this->source));
                // line 65
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 65, $this->source), 'help');
                // line 66
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 66, $this->source), 'errors');
                // line 67
                echo "</div>";
            }
            // line 69
            echo "</div>";
        }
    }

    // line 73
    public function block_fieldset_form_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 74
        $context["widget_attr"] = [];
        // line 75
        if ( !twig_test_empty(($context["help"] ?? null))) {
            // line 76
            $context["widget_attr"] = ["attr" => ["aria-describedby" => ($this->sandbox->ensureToStringAllowed(($context["id"] ?? null), 76, $this->source) . "_help")]];
        }
        // line 78
        echo "<fieldset";
        $__internal_compile_1 = ["attr" => twig_array_merge(($context["row_attr"] ?? null), ["class" => twig_trim_filter(((twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, true, 78)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, true, 78), "mb-3")) : ("mb-3")))])];
        if (!twig_test_iterable($__internal_compile_1)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 78, $this->getSourceContext());
        }
        $__internal_compile_1 = twig_to_array($__internal_compile_1);
        $context['_parent'] = $context;
        $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_1));
        $this->displayBlock("attributes", $context, $blocks);
        $context = $context['_parent'];
        echo ">
        <div class=\"row";
        // line 79
        if ((( !($context["compound"] ?? null) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? null), false)) : (false))) &&  !($context["valid"] ?? null))) {
            echo " is-invalid";
        }
        echo "\">";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 80, $this->source), 'label');
        // line 81
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 82, $this->source), 'widget', $this->sandbox->ensureToStringAllowed(($context["widget_attr"] ?? null), 82, $this->source));
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 83, $this->source), 'help');
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 84, $this->source), 'errors');
        // line 85
        echo "</div>
        </div>
    </fieldset>";
    }

    // line 90
    public function block_submit_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 91
        echo "<div";
        $__internal_compile_2 = ["attr" => twig_array_merge(($context["row_attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, true, 91)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, true, 91), "mb-3")) : ("mb-3")) . " row"))])];
        if (!twig_test_iterable($__internal_compile_2)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 91, $this->getSourceContext());
        }
        $__internal_compile_2 = twig_to_array($__internal_compile_2);
        $context['_parent'] = $context;
        $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_2));
        $this->displayBlock("attributes", $context, $blocks);
        $context = $context['_parent'];
        echo ">";
        // line 92
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 93
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 94
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 94, $this->source), 'widget');
        // line 95
        echo "</div>";
        // line 96
        echo "</div>";
    }

    // line 99
    public function block_reset_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 100
        echo "<div";
        $__internal_compile_3 = ["attr" => twig_array_merge(($context["row_attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, true, 100)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, true, 100), "mb-3")) : ("mb-3")) . " row"))])];
        if (!twig_test_iterable($__internal_compile_3)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 100, $this->getSourceContext());
        }
        $__internal_compile_3 = twig_to_array($__internal_compile_3);
        $context['_parent'] = $context;
        $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_3));
        $this->displayBlock("attributes", $context, $blocks);
        $context = $context['_parent'];
        echo ">";
        // line 101
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 102
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 103
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 103, $this->source), 'widget');
        // line 104
        echo "</div>";
        // line 105
        echo "</div>";
    }

    // line 108
    public function block_button_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 109
        echo "<div";
        $__internal_compile_4 = ["attr" => twig_array_merge(($context["row_attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, true, 109)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, true, 109), "mb-3")) : ("mb-3")) . " row"))])];
        if (!twig_test_iterable($__internal_compile_4)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 109, $this->getSourceContext());
        }
        $__internal_compile_4 = twig_to_array($__internal_compile_4);
        $context['_parent'] = $context;
        $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_4));
        $this->displayBlock("attributes", $context, $blocks);
        $context = $context['_parent'];
        echo ">";
        // line 110
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 111
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 112
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 112, $this->source), 'widget');
        // line 113
        echo "</div>";
        // line 114
        echo "</div>";
    }

    // line 117
    public function block_checkbox_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 118
        echo "<div";
        $__internal_compile_5 = ["attr" => twig_array_merge(($context["row_attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, true, 118)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, true, 118), "mb-3")) : ("mb-3")) . " row"))])];
        if (!twig_test_iterable($__internal_compile_5)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 118, $this->getSourceContext());
        }
        $__internal_compile_5 = twig_to_array($__internal_compile_5);
        $context['_parent'] = $context;
        $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_5));
        $this->displayBlock("attributes", $context, $blocks);
        $context = $context['_parent'];
        echo ">";
        // line 119
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 120
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 121
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 121, $this->source), 'widget');
        // line 122
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 122, $this->source), 'help');
        // line 123
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 123, $this->source), 'errors');
        // line 124
        echo "</div>";
        // line 125
        echo "</div>";
    }

    // line 128
    public function block_form_group_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 129
        echo "col-sm-10";
    }

    public function getTemplateName()
    {
        return "bootstrap_5_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  431 => 129,  427 => 128,  423 => 125,  421 => 124,  419 => 123,  417 => 122,  415 => 121,  411 => 120,  407 => 119,  395 => 118,  391 => 117,  387 => 114,  385 => 113,  383 => 112,  379 => 111,  375 => 110,  363 => 109,  359 => 108,  355 => 105,  353 => 104,  351 => 103,  347 => 102,  343 => 101,  331 => 100,  327 => 99,  323 => 96,  321 => 95,  319 => 94,  315 => 93,  311 => 92,  299 => 91,  295 => 90,  289 => 85,  287 => 84,  285 => 83,  283 => 82,  279 => 81,  277 => 80,  272 => 79,  259 => 78,  256 => 76,  254 => 75,  252 => 74,  248 => 73,  243 => 69,  240 => 67,  238 => 66,  236 => 65,  234 => 64,  230 => 63,  228 => 62,  225 => 60,  223 => 59,  220 => 57,  218 => 56,  215 => 54,  213 => 53,  211 => 51,  209 => 50,  207 => 49,  205 => 48,  203 => 47,  201 => 46,  199 => 45,  197 => 44,  195 => 43,  192 => 42,  187 => 41,  185 => 40,  173 => 39,  171 => 38,  169 => 36,  167 => 35,  165 => 34,  162 => 32,  160 => 31,  158 => 30,  155 => 28,  153 => 27,  149 => 26,  145 => 21,  141 => 20,  136 => 16,  133 => 14,  130 => 12,  128 => 11,  126 => 10,  124 => 9,  119 => 7,  117 => 6,  113 => 5,  109 => 128,  106 => 127,  104 => 117,  101 => 116,  99 => 108,  96 => 107,  94 => 99,  91 => 98,  89 => 90,  86 => 89,  84 => 73,  81 => 72,  79 => 26,  76 => 25,  73 => 23,  71 => 20,  68 => 19,  66 => 5,  63 => 4,  60 => 2,  30 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "bootstrap_5_horizontal_layout.html.twig", "/var/www/sub-domains/kojimura.xyz/kojimura/eccube/vendor/symfony/twig-bridge/Resources/views/Form/bootstrap_5_horizontal_layout.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("block" => 5, "if" => 6, "set" => 9, "with" => 39);
        static $filters = array("default" => 9, "merge" => 12, "trim" => 12, "replace" => 38);
        static $functions = array("form_widget" => 45, "form_label" => 46, "form_help" => 53, "form_errors" => 59);

        try {
            $this->sandbox->checkSecurity(
                ['block', 'if', 'set', 'with'],
                ['default', 'merge', 'trim', 'replace'],
                ['form_widget', 'form_label', 'form_help', 'form_errors']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
