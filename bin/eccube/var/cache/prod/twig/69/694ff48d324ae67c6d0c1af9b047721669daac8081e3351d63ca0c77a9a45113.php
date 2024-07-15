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

/* form_div_layout.html.twig */
class __TwigTemplate_73127d4dda8d140e3334c3cdff9155e7cf0d84bf1444bfd4a7808573798095c0 extends \Eccube\Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'form_widget' => [$this, 'block_form_widget'],
            'form_widget_simple' => [$this, 'block_form_widget_simple'],
            'form_widget_compound' => [$this, 'block_form_widget_compound'],
            'collection_widget' => [$this, 'block_collection_widget'],
            'textarea_widget' => [$this, 'block_textarea_widget'],
            'choice_widget' => [$this, 'block_choice_widget'],
            'choice_widget_expanded' => [$this, 'block_choice_widget_expanded'],
            'choice_widget_collapsed' => [$this, 'block_choice_widget_collapsed'],
            'choice_widget_options' => [$this, 'block_choice_widget_options'],
            'checkbox_widget' => [$this, 'block_checkbox_widget'],
            'radio_widget' => [$this, 'block_radio_widget'],
            'datetime_widget' => [$this, 'block_datetime_widget'],
            'date_widget' => [$this, 'block_date_widget'],
            'time_widget' => [$this, 'block_time_widget'],
            'dateinterval_widget' => [$this, 'block_dateinterval_widget'],
            'number_widget' => [$this, 'block_number_widget'],
            'integer_widget' => [$this, 'block_integer_widget'],
            'money_widget' => [$this, 'block_money_widget'],
            'url_widget' => [$this, 'block_url_widget'],
            'search_widget' => [$this, 'block_search_widget'],
            'percent_widget' => [$this, 'block_percent_widget'],
            'password_widget' => [$this, 'block_password_widget'],
            'hidden_widget' => [$this, 'block_hidden_widget'],
            'email_widget' => [$this, 'block_email_widget'],
            'range_widget' => [$this, 'block_range_widget'],
            'button_widget' => [$this, 'block_button_widget'],
            'submit_widget' => [$this, 'block_submit_widget'],
            'reset_widget' => [$this, 'block_reset_widget'],
            'tel_widget' => [$this, 'block_tel_widget'],
            'color_widget' => [$this, 'block_color_widget'],
            'week_widget' => [$this, 'block_week_widget'],
            'form_label' => [$this, 'block_form_label'],
            'button_label' => [$this, 'block_button_label'],
            'form_help' => [$this, 'block_form_help'],
            'repeated_row' => [$this, 'block_repeated_row'],
            'form_row' => [$this, 'block_form_row'],
            'button_row' => [$this, 'block_button_row'],
            'hidden_row' => [$this, 'block_hidden_row'],
            'form' => [$this, 'block_form'],
            'form_start' => [$this, 'block_form_start'],
            'form_end' => [$this, 'block_form_end'],
            'form_errors' => [$this, 'block_form_errors'],
            'form_rest' => [$this, 'block_form_rest'],
            'form_rows' => [$this, 'block_form_rows'],
            'widget_attributes' => [$this, 'block_widget_attributes'],
            'widget_container_attributes' => [$this, 'block_widget_container_attributes'],
            'button_attributes' => [$this, 'block_button_attributes'],
            'attributes' => [$this, 'block_attributes'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        $this->displayBlock('form_widget', $context, $blocks);
        // line 11
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 20
        $this->displayBlock('form_widget_compound', $context, $blocks);
        // line 30
        $this->displayBlock('collection_widget', $context, $blocks);
        // line 37
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 41
        $this->displayBlock('choice_widget', $context, $blocks);
        // line 49
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 58
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 80
        $this->displayBlock('choice_widget_options', $context, $blocks);
        // line 93
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 97
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 101
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 114
        $this->displayBlock('date_widget', $context, $blocks);
        // line 128
        $this->displayBlock('time_widget', $context, $blocks);
        // line 139
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 174
        $this->displayBlock('number_widget', $context, $blocks);
        // line 180
        $this->displayBlock('integer_widget', $context, $blocks);
        // line 185
        $this->displayBlock('money_widget', $context, $blocks);
        // line 189
        $this->displayBlock('url_widget', $context, $blocks);
        // line 194
        $this->displayBlock('search_widget', $context, $blocks);
        // line 199
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 204
        $this->displayBlock('password_widget', $context, $blocks);
        // line 209
        $this->displayBlock('hidden_widget', $context, $blocks);
        // line 214
        $this->displayBlock('email_widget', $context, $blocks);
        // line 219
        $this->displayBlock('range_widget', $context, $blocks);
        // line 224
        $this->displayBlock('button_widget', $context, $blocks);
        // line 252
        $this->displayBlock('submit_widget', $context, $blocks);
        // line 257
        $this->displayBlock('reset_widget', $context, $blocks);
        // line 262
        $this->displayBlock('tel_widget', $context, $blocks);
        // line 267
        $this->displayBlock('color_widget', $context, $blocks);
        // line 272
        $this->displayBlock('week_widget', $context, $blocks);
        // line 285
        $this->displayBlock('form_label', $context, $blocks);
        // line 321
        $this->displayBlock('button_label', $context, $blocks);
        // line 324
        echo "
";
        // line 325
        $this->displayBlock('form_help', $context, $blocks);
        // line 345
        echo "
";
        // line 348
        $this->displayBlock('repeated_row', $context, $blocks);
        // line 356
        $this->displayBlock('form_row', $context, $blocks);
        // line 369
        $this->displayBlock('button_row', $context, $blocks);
        // line 375
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 381
        $this->displayBlock('form', $context, $blocks);
        // line 387
        $this->displayBlock('form_start', $context, $blocks);
        // line 401
        $this->displayBlock('form_end', $context, $blocks);
        // line 408
        $this->displayBlock('form_errors', $context, $blocks);
        // line 418
        $this->displayBlock('form_rest', $context, $blocks);
        // line 439
        echo "
";
        // line 442
        $this->displayBlock('form_rows', $context, $blocks);
        // line 448
        $this->displayBlock('widget_attributes', $context, $blocks);
        // line 455
        $this->displayBlock('widget_container_attributes', $context, $blocks);
        // line 460
        $this->displayBlock('button_attributes', $context, $blocks);
        // line 465
        $this->displayBlock('attributes', $context, $blocks);
    }

    // line 3
    public function block_form_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        if (($context["compound"] ?? null)) {
            // line 5
            $this->displayBlock("form_widget_compound", $context, $blocks);
        } else {
            // line 7
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
    }

    // line 11
    public function block_form_widget_simple($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["type"] ?? null), 12, $this->source), "text")) : ("text"));
        // line 13
        if (((($context["type"] ?? null) == "range") || (($context["type"] ?? null) == "color"))) {
            // line 15
            $context["required"] = false;
        }
        // line 17
        echo "<input type=\"";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["type"] ?? null), 17, $this->source), "html", null, true);
        echo "\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty(($context["value"] ?? null))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["value"] ?? null), 17, $this->source), "html", null, true);
            echo "\" ";
        }
        echo "/>";
    }

    // line 20
    public function block_form_widget_compound($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 22
        if (Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? null))) {
            // line 23
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 23, $this->source), 'errors');
        }
        // line 25
        $this->displayBlock("form_rows", $context, $blocks);
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 26, $this->source), 'rest');
        // line 27
        echo "</div>";
    }

    // line 30
    public function block_collection_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 31
        if ((array_key_exists("prototype", $context) &&  !twig_get_attribute($this->env, $this->source, ($context["prototype"] ?? null), "rendered", [], "any", false, false, true, 31))) {
            // line 32
            $context["attr"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["attr"] ?? null), 32, $this->source), ["data-prototype" => $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(($context["prototype"] ?? null), 32, $this->source), 'row')]);
        }
        // line 34
        $this->displayBlock("form_widget", $context, $blocks);
    }

    // line 37
    public function block_textarea_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 38
        echo "<textarea ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["value"] ?? null), 38, $this->source), "html", null, true);
        echo "</textarea>";
    }

    // line 41
    public function block_choice_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 42
        if (($context["expanded"] ?? null)) {
            // line 43
            $this->displayBlock("choice_widget_expanded", $context, $blocks);
        } else {
            // line 45
            $this->displayBlock("choice_widget_collapsed", $context, $blocks);
        }
    }

    // line 49
    public function block_choice_widget_expanded($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 50
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 52
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed($context["child"], 52, $this->source), 'widget');
            // line 53
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed($context["child"], 53, $this->source), 'label', ["translation_domain" => ($context["choice_translation_domain"] ?? null)]);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "</div>";
    }

    // line 58
    public function block_choice_widget_collapsed($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 59
        if (((((($context["required"] ?? null) && (null === ($context["placeholder"] ?? null))) &&  !($context["placeholder_in_choices"] ?? null)) &&  !($context["multiple"] ?? null)) && ( !twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "size", [], "any", true, true, true, 59) || (twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "size", [], "any", false, false, true, 59) <= 1)))) {
            // line 60
            $context["required"] = false;
        }
        // line 62
        echo "<select ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (($context["multiple"] ?? null)) {
            echo " multiple=\"multiple\"";
        }
        echo ">";
        // line 63
        if ( !(null === ($context["placeholder"] ?? null))) {
            // line 64
            echo "<option value=\"\"";
            if ((($context["required"] ?? null) && twig_test_empty(($context["value"] ?? null)))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            (((($context["placeholder"] ?? null) != "")) ? (print (twig_escape_filter($this->env, (((($context["translation_domain"] ?? null) === false)) ? (($context["placeholder"] ?? null)) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["placeholder"] ?? null), [], ($context["translation_domain"] ?? null)))), "html", null, true))) : (print ("")));
            echo "</option>";
        }
        // line 66
        if ((twig_length_filter($this->env, ($context["preferred_choices"] ?? null)) > 0)) {
            // line 67
            $context["options"] = ($context["preferred_choices"] ?? null);
            // line 68
            echo "            ";
            $context["render_preferred_choices"] = true;
            // line 69
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 70
            if (((twig_length_filter($this->env, ($context["choices"] ?? null)) > 0) &&  !(null === ($context["separator"] ?? null)))) {
                // line 71
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["separator"] ?? null), 71, $this->source), "html", null, true);
                echo "</option>";
            }
        }
        // line 74
        $context["options"] = ($context["choices"] ?? null);
        // line 75
        $context["render_preferred_choices"] = false;
        // line 76
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 77
        echo "</select>";
    }

    // line 80
    public function block_choice_widget_options($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
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
        foreach ($context['_seq'] as $context["group_label"] => $context["choice"]) {
            // line 82
            if (twig_test_iterable($context["choice"])) {
                // line 83
                echo "<optgroup label=\"";
                echo twig_escape_filter($this->env, (((($context["choice_translation_domain"] ?? null) === false)) ? ($context["group_label"]) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->sandbox->ensureToStringAllowed($context["group_label"], 83, $this->source), [], $this->sandbox->ensureToStringAllowed(($context["choice_translation_domain"] ?? null), 83, $this->source)))), "html", null, true);
                echo "\">
                ";
                // line 84
                $context["options"] = $context["choice"];
                // line 85
                $this->displayBlock("choice_widget_options", $context, $blocks);
                // line 86
                echo "</optgroup>";
            } else {
                // line 88
                echo "<option value=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["choice"], "value", [], "any", false, false, true, 88), 88, $this->source), "html", null, true);
                echo "\"";
                if (twig_get_attribute($this->env, $this->source, $context["choice"], "attr", [], "any", false, false, true, 88)) {
                    $__internal_compile_0 = ["attr" => twig_get_attribute($this->env, $this->source, $context["choice"], "attr", [], "any", false, false, true, 88)];
                    if (!twig_test_iterable($__internal_compile_0)) {
                        throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 88, $this->getSourceContext());
                    }
                    $__internal_compile_0 = twig_to_array($__internal_compile_0);
                    $context['_parent'] = $context;
                    $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_0));
                    $this->displayBlock("attributes", $context, $blocks);
                    $context = $context['_parent'];
                }
                if (( !((array_key_exists("render_preferred_choices", $context)) ? (_twig_default_filter(($context["render_preferred_choices"] ?? null), false)) : (false)) && Symfony\Bridge\Twig\Extension\twig_is_selected_choice($context["choice"], ($context["value"] ?? null)))) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, (((($context["choice_translation_domain"] ?? null) === false)) ? (twig_get_attribute($this->env, $this->source, $context["choice"], "label", [], "any", false, false, true, 88)) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["choice"], "label", [], "any", false, false, true, 88), 88, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["choice"], "labelTranslationParameters", [], "any", false, false, true, 88), 88, $this->source), $this->sandbox->ensureToStringAllowed(($context["choice_translation_domain"] ?? null), 88, $this->source)))), "html", null, true);
                echo "</option>";
            }
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
        unset($context['_seq'], $context['_iterated'], $context['group_label'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 93
    public function block_checkbox_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 94
        echo "<input type=\"checkbox\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["value"] ?? null), 94, $this->source), "html", null, true);
            echo "\"";
        }
        if (($context["checked"] ?? null)) {
            echo " checked=\"checked\"";
        }
        echo " />";
    }

    // line 97
    public function block_radio_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 98
        echo "<input type=\"radio\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["value"] ?? null), 98, $this->source), "html", null, true);
            echo "\"";
        }
        if (($context["checked"] ?? null)) {
            echo " checked=\"checked\"";
        }
        echo " />";
    }

    // line 101
    public function block_datetime_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 102
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 103
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 105
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 106
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "date", [], "any", false, false, true, 106), 106, $this->source), 'errors');
            // line 107
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "time", [], "any", false, false, true, 107), 107, $this->source), 'errors');
            // line 108
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "date", [], "any", false, false, true, 108), 108, $this->source), 'widget');
            // line 109
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "time", [], "any", false, false, true, 109), 109, $this->source), 'widget');
            // line 110
            echo "</div>";
        }
    }

    // line 114
    public function block_date_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 115
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 116
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 118
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 119
            echo twig_replace_filter($this->sandbox->ensureToStringAllowed(($context["date_pattern"] ?? null), 119, $this->source), ["{{ year }}" =>             // line 120
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "year", [], "any", false, false, true, 120), 120, $this->source), 'widget'), "{{ month }}" =>             // line 121
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "month", [], "any", false, false, true, 121), 121, $this->source), 'widget'), "{{ day }}" =>             // line 122
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "day", [], "any", false, false, true, 122), 122, $this->source), 'widget')]);
            // line 124
            echo "</div>";
        }
    }

    // line 128
    public function block_time_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 129
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 130
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 132
            $context["vars"] = (((($context["widget"] ?? null) == "text")) ? (["attr" => ["size" => 1]]) : ([]));
            // line 133
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 134
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "hour", [], "any", false, false, true, 134), 134, $this->source), 'widget', $this->sandbox->ensureToStringAllowed(($context["vars"] ?? null), 134, $this->source));
            if (($context["with_minutes"] ?? null)) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "minute", [], "any", false, false, true, 134), 134, $this->source), 'widget', $this->sandbox->ensureToStringAllowed(($context["vars"] ?? null), 134, $this->source));
            }
            if (($context["with_seconds"] ?? null)) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "second", [], "any", false, false, true, 134), 134, $this->source), 'widget', $this->sandbox->ensureToStringAllowed(($context["vars"] ?? null), 134, $this->source));
            }
            // line 135
            echo "        </div>";
        }
    }

    // line 139
    public function block_dateinterval_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 140
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 141
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 143
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 144
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 144, $this->source), 'errors');
            // line 145
            echo "<table class=\"";
            echo twig_escape_filter($this->env, ((array_key_exists("table_class", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["table_class"] ?? null), 145, $this->source), "")) : ("")), "html", null, true);
            echo "\" role=\"presentation\">
                <thead>
                    <tr>";
            // line 148
            if (($context["with_years"] ?? null)) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "years", [], "any", false, false, true, 148), 148, $this->source), 'label');
                echo "</th>";
            }
            // line 149
            if (($context["with_months"] ?? null)) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "months", [], "any", false, false, true, 149), 149, $this->source), 'label');
                echo "</th>";
            }
            // line 150
            if (($context["with_weeks"] ?? null)) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "weeks", [], "any", false, false, true, 150), 150, $this->source), 'label');
                echo "</th>";
            }
            // line 151
            if (($context["with_days"] ?? null)) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "days", [], "any", false, false, true, 151), 151, $this->source), 'label');
                echo "</th>";
            }
            // line 152
            if (($context["with_hours"] ?? null)) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "hours", [], "any", false, false, true, 152), 152, $this->source), 'label');
                echo "</th>";
            }
            // line 153
            if (($context["with_minutes"] ?? null)) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "minutes", [], "any", false, false, true, 153), 153, $this->source), 'label');
                echo "</th>";
            }
            // line 154
            if (($context["with_seconds"] ?? null)) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "seconds", [], "any", false, false, true, 154), 154, $this->source), 'label');
                echo "</th>";
            }
            // line 155
            echo "</tr>
                </thead>
                <tbody>
                    <tr>";
            // line 159
            if (($context["with_years"] ?? null)) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "years", [], "any", false, false, true, 159), 159, $this->source), 'widget');
                echo "</td>";
            }
            // line 160
            if (($context["with_months"] ?? null)) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "months", [], "any", false, false, true, 160), 160, $this->source), 'widget');
                echo "</td>";
            }
            // line 161
            if (($context["with_weeks"] ?? null)) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "weeks", [], "any", false, false, true, 161), 161, $this->source), 'widget');
                echo "</td>";
            }
            // line 162
            if (($context["with_days"] ?? null)) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "days", [], "any", false, false, true, 162), 162, $this->source), 'widget');
                echo "</td>";
            }
            // line 163
            if (($context["with_hours"] ?? null)) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "hours", [], "any", false, false, true, 163), 163, $this->source), 'widget');
                echo "</td>";
            }
            // line 164
            if (($context["with_minutes"] ?? null)) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "minutes", [], "any", false, false, true, 164), 164, $this->source), 'widget');
                echo "</td>";
            }
            // line 165
            if (($context["with_seconds"] ?? null)) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "seconds", [], "any", false, false, true, 165), 165, $this->source), 'widget');
                echo "</td>";
            }
            // line 166
            echo "</tr>
                </tbody>
            </table>";
            // line 169
            if (($context["with_invert"] ?? null)) {
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "invert", [], "any", false, false, true, 169), 169, $this->source), 'widget');
            }
            // line 170
            echo "</div>";
        }
    }

    // line 174
    public function block_number_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 176
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["type"] ?? null), 176, $this->source), "text")) : ("text"));
        // line 177
        $this->displayBlock("form_widget_simple", $context, $blocks);
    }

    // line 180
    public function block_integer_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 181
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["type"] ?? null), 181, $this->source), "number")) : ("number"));
        // line 182
        $this->displayBlock("form_widget_simple", $context, $blocks);
    }

    // line 185
    public function block_money_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 186
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->encodeCurrency($this->env, $this->sandbox->ensureToStringAllowed(($context["money_pattern"] ?? null), 186, $this->source),         $this->renderBlock("form_widget_simple", $context, $blocks));
    }

    // line 189
    public function block_url_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 190
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["type"] ?? null), 190, $this->source), "url")) : ("url"));
        // line 191
        $this->displayBlock("form_widget_simple", $context, $blocks);
    }

    // line 194
    public function block_search_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 195
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["type"] ?? null), 195, $this->source), "search")) : ("search"));
        // line 196
        $this->displayBlock("form_widget_simple", $context, $blocks);
    }

    // line 199
    public function block_percent_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 200
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["type"] ?? null), 200, $this->source), "text")) : ("text"));
        // line 201
        $this->displayBlock("form_widget_simple", $context, $blocks);
        if (($context["symbol"] ?? null)) {
            echo " ";
            echo twig_escape_filter($this->env, ((array_key_exists("symbol", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["symbol"] ?? null), 201, $this->source), "%")) : ("%")), "html", null, true);
        }
    }

    // line 204
    public function block_password_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 205
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["type"] ?? null), 205, $this->source), "password")) : ("password"));
        // line 206
        $this->displayBlock("form_widget_simple", $context, $blocks);
    }

    // line 209
    public function block_hidden_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 210
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["type"] ?? null), 210, $this->source), "hidden")) : ("hidden"));
        // line 211
        $this->displayBlock("form_widget_simple", $context, $blocks);
    }

    // line 214
    public function block_email_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 215
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["type"] ?? null), 215, $this->source), "email")) : ("email"));
        // line 216
        $this->displayBlock("form_widget_simple", $context, $blocks);
    }

    // line 219
    public function block_range_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 220
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["type"] ?? null), 220, $this->source), "range")) : ("range"));
        // line 221
        $this->displayBlock("form_widget_simple", $context, $blocks);
    }

    // line 224
    public function block_button_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 225
        if (twig_test_empty(($context["label"] ?? null))) {
            // line 226
            if ( !twig_test_empty(($context["label_format"] ?? null))) {
                // line 227
                $context["label"] = twig_replace_filter($this->sandbox->ensureToStringAllowed(($context["label_format"] ?? null), 227, $this->source), ["%name%" =>                 // line 228
($context["name"] ?? null), "%id%" =>                 // line 229
($context["id"] ?? null)]);
            } elseif ( !(            // line 231
($context["label"] ?? null) === false)) {
                // line 232
                $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize($this->sandbox->ensureToStringAllowed(($context["name"] ?? null), 232, $this->source));
            }
        }
        // line 235
        echo "<button type=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["type"] ?? null), 235, $this->source), "button")) : ("button")), "html", null, true);
        echo "\" ";
        $this->displayBlock("button_attributes", $context, $blocks);
        echo ">";
        // line 236
        if ((($context["translation_domain"] ?? null) === false)) {
            // line 237
            if ((($context["label_html"] ?? null) === false)) {
                // line 238
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 238, $this->source), "html", null, true);
            } else {
                // line 240
                echo $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 240, $this->source);
            }
        } else {
            // line 243
            if ((($context["label_html"] ?? null) === false)) {
                // line 244
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 244, $this->source), $this->sandbox->ensureToStringAllowed(($context["label_translation_parameters"] ?? null), 244, $this->source), $this->sandbox->ensureToStringAllowed(($context["translation_domain"] ?? null), 244, $this->source)), "html", null, true);
            } else {
                // line 246
                echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 246, $this->source), $this->sandbox->ensureToStringAllowed(($context["label_translation_parameters"] ?? null), 246, $this->source), $this->sandbox->ensureToStringAllowed(($context["translation_domain"] ?? null), 246, $this->source));
            }
        }
        // line 249
        echo "</button>";
    }

    // line 252
    public function block_submit_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 253
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["type"] ?? null), 253, $this->source), "submit")) : ("submit"));
        // line 254
        $this->displayBlock("button_widget", $context, $blocks);
    }

    // line 257
    public function block_reset_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 258
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["type"] ?? null), 258, $this->source), "reset")) : ("reset"));
        // line 259
        $this->displayBlock("button_widget", $context, $blocks);
    }

    // line 262
    public function block_tel_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 263
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["type"] ?? null), 263, $this->source), "tel")) : ("tel"));
        // line 264
        $this->displayBlock("form_widget_simple", $context, $blocks);
    }

    // line 267
    public function block_color_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 268
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["type"] ?? null), 268, $this->source), "color")) : ("color"));
        // line 269
        $this->displayBlock("form_widget_simple", $context, $blocks);
    }

    // line 272
    public function block_week_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 273
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 274
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 276
            $context["vars"] = (((($context["widget"] ?? null) == "text")) ? (["attr" => ["size" => 1]]) : ([]));
            // line 277
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 278
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "year", [], "any", false, false, true, 278), 278, $this->source), 'widget', $this->sandbox->ensureToStringAllowed(($context["vars"] ?? null), 278, $this->source));
            echo "-";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "week", [], "any", false, false, true, 278), 278, $this->source), 'widget', $this->sandbox->ensureToStringAllowed(($context["vars"] ?? null), 278, $this->source));
            echo "
        </div>";
        }
    }

    // line 285
    public function block_form_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 286
        if ( !(($context["label"] ?? null) === false)) {
            // line 287
            if ( !($context["compound"] ?? null)) {
                // line 288
                $context["label_attr"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["label_attr"] ?? null), 288, $this->source), ["for" => ($context["id"] ?? null)]);
            }
            // line 290
            if (($context["required"] ?? null)) {
                // line 291
                $context["label_attr"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["label_attr"] ?? null), 291, $this->source), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, true, 291)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, true, 291), 291, $this->source), "")) : ("")) . " required"))]);
            }
            // line 293
            if (twig_test_empty(($context["label"] ?? null))) {
                // line 294
                if ( !twig_test_empty(($context["label_format"] ?? null))) {
                    // line 295
                    $context["label"] = twig_replace_filter($this->sandbox->ensureToStringAllowed(($context["label_format"] ?? null), 295, $this->source), ["%name%" =>                     // line 296
($context["name"] ?? null), "%id%" =>                     // line 297
($context["id"] ?? null)]);
                } else {
                    // line 300
                    $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize($this->sandbox->ensureToStringAllowed(($context["name"] ?? null), 300, $this->source));
                }
            }
            // line 303
            echo "<";
            echo twig_escape_filter($this->env, ((array_key_exists("element", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["element"] ?? null), 303, $this->source), "label")) : ("label")), "html", null, true);
            if (($context["label_attr"] ?? null)) {
                $__internal_compile_1 = ["attr" => ($context["label_attr"] ?? null)];
                if (!twig_test_iterable($__internal_compile_1)) {
                    throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 303, $this->getSourceContext());
                }
                $__internal_compile_1 = twig_to_array($__internal_compile_1);
                $context['_parent'] = $context;
                $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_1));
                $this->displayBlock("attributes", $context, $blocks);
                $context = $context['_parent'];
            }
            echo ">";
            // line 304
            if ((($context["translation_domain"] ?? null) === false)) {
                // line 305
                if ((($context["label_html"] ?? null) === false)) {
                    // line 306
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 306, $this->source), "html", null, true);
                } else {
                    // line 308
                    echo $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 308, $this->source);
                }
            } else {
                // line 311
                if ((($context["label_html"] ?? null) === false)) {
                    // line 312
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 312, $this->source), $this->sandbox->ensureToStringAllowed(($context["label_translation_parameters"] ?? null), 312, $this->source), $this->sandbox->ensureToStringAllowed(($context["translation_domain"] ?? null), 312, $this->source)), "html", null, true);
                } else {
                    // line 314
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 314, $this->source), $this->sandbox->ensureToStringAllowed(($context["label_translation_parameters"] ?? null), 314, $this->source), $this->sandbox->ensureToStringAllowed(($context["translation_domain"] ?? null), 314, $this->source));
                }
            }
            // line 317
            echo "</";
            echo twig_escape_filter($this->env, ((array_key_exists("element", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["element"] ?? null), 317, $this->source), "label")) : ("label")), "html", null, true);
            echo ">";
        }
    }

    // line 321
    public function block_button_label($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 325
    public function block_form_help($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 326
        if ( !twig_test_empty(($context["help"] ?? null))) {
            // line 327
            $context["help_attr"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["help_attr"] ?? null), 327, $this->source), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["help_attr"] ?? null), "class", [], "any", true, true, true, 327)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["help_attr"] ?? null), "class", [], "any", false, false, true, 327), 327, $this->source), "")) : ("")) . " help-text"))]);
            // line 328
            echo "<p id=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["id"] ?? null), 328, $this->source), "html", null, true);
            echo "_help\"";
            $__internal_compile_2 = ["attr" => ($context["help_attr"] ?? null)];
            if (!twig_test_iterable($__internal_compile_2)) {
                throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 328, $this->getSourceContext());
            }
            $__internal_compile_2 = twig_to_array($__internal_compile_2);
            $context['_parent'] = $context;
            $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_2));
            $this->displayBlock("attributes", $context, $blocks);
            $context = $context['_parent'];
            echo ">";
            // line 329
            if ((($context["translation_domain"] ?? null) === false)) {
                // line 330
                if ((($context["help_html"] ?? null) === false)) {
                    // line 331
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["help"] ?? null), 331, $this->source), "html", null, true);
                } else {
                    // line 333
                    echo $this->sandbox->ensureToStringAllowed(($context["help"] ?? null), 333, $this->source);
                }
            } else {
                // line 336
                if ((($context["help_html"] ?? null) === false)) {
                    // line 337
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->sandbox->ensureToStringAllowed(($context["help"] ?? null), 337, $this->source), $this->sandbox->ensureToStringAllowed(($context["help_translation_parameters"] ?? null), 337, $this->source), $this->sandbox->ensureToStringAllowed(($context["translation_domain"] ?? null), 337, $this->source)), "html", null, true);
                } else {
                    // line 339
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->sandbox->ensureToStringAllowed(($context["help"] ?? null), 339, $this->source), $this->sandbox->ensureToStringAllowed(($context["help_translation_parameters"] ?? null), 339, $this->source), $this->sandbox->ensureToStringAllowed(($context["translation_domain"] ?? null), 339, $this->source));
                }
            }
            // line 342
            echo "</p>";
        }
    }

    // line 348
    public function block_repeated_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 353
        $this->displayBlock("form_rows", $context, $blocks);
    }

    // line 356
    public function block_form_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 357
        $context["widget_attr"] = [];
        // line 358
        if ( !twig_test_empty(($context["help"] ?? null))) {
            // line 359
            $context["widget_attr"] = ["attr" => ["aria-describedby" => ($this->sandbox->ensureToStringAllowed(($context["id"] ?? null), 359, $this->source) . "_help")]];
        }
        // line 361
        echo "<div";
        $__internal_compile_3 = ["attr" => ($context["row_attr"] ?? null)];
        if (!twig_test_iterable($__internal_compile_3)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 361, $this->getSourceContext());
        }
        $__internal_compile_3 = twig_to_array($__internal_compile_3);
        $context['_parent'] = $context;
        $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_3));
        $this->displayBlock("attributes", $context, $blocks);
        $context = $context['_parent'];
        echo ">";
        // line 362
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 362, $this->source), 'label');
        // line 363
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 363, $this->source), 'errors');
        // line 364
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 364, $this->source), 'widget', $this->sandbox->ensureToStringAllowed(($context["widget_attr"] ?? null), 364, $this->source));
        // line 365
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 365, $this->source), 'help');
        // line 366
        echo "</div>";
    }

    // line 369
    public function block_button_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 370
        echo "<div";
        $__internal_compile_4 = ["attr" => ($context["row_attr"] ?? null)];
        if (!twig_test_iterable($__internal_compile_4)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 370, $this->getSourceContext());
        }
        $__internal_compile_4 = twig_to_array($__internal_compile_4);
        $context['_parent'] = $context;
        $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_4));
        $this->displayBlock("attributes", $context, $blocks);
        $context = $context['_parent'];
        echo ">";
        // line 371
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 371, $this->source), 'widget');
        // line 372
        echo "</div>";
    }

    // line 375
    public function block_hidden_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 376
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 376, $this->source), 'widget');
    }

    // line 381
    public function block_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 382
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock($this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 382, $this->source), 'form_start');
        // line 383
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 383, $this->source), 'widget');
        // line 384
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock($this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 384, $this->source), 'form_end');
    }

    // line 387
    public function block_form_start($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 388
        twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "setMethodRendered", [], "method", false, false, true, 388);
        // line 389
        $context["method"] = twig_upper_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["method"] ?? null), 389, $this->source));
        // line 390
        if (twig_in_filter(($context["method"] ?? null), [0 => "GET", 1 => "POST"])) {
            // line 391
            $context["form_method"] = ($context["method"] ?? null);
        } else {
            // line 393
            $context["form_method"] = "POST";
        }
        // line 395
        echo "<form";
        if ((($context["name"] ?? null) != "")) {
            echo " name=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["name"] ?? null), 395, $this->source), "html", null, true);
            echo "\"";
        }
        echo " method=\"";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["form_method"] ?? null), 395, $this->source)), "html", null, true);
        echo "\"";
        if ((($context["action"] ?? null) != "")) {
            echo " action=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["action"] ?? null), 395, $this->source), "html", null, true);
            echo "\"";
        }
        $this->displayBlock("attributes", $context, $blocks);
        if (($context["multipart"] ?? null)) {
            echo " enctype=\"multipart/form-data\"";
        }
        echo ">";
        // line 396
        if ((($context["form_method"] ?? null) != ($context["method"] ?? null))) {
            // line 397
            echo "<input type=\"hidden\" name=\"_method\" value=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["method"] ?? null), 397, $this->source), "html", null, true);
            echo "\" />";
        }
    }

    // line 401
    public function block_form_end($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 402
        if (( !array_key_exists("render_rest", $context) || ($context["render_rest"] ?? null))) {
            // line 403
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 403, $this->source), 'rest');
        }
        // line 405
        echo "</form>";
    }

    // line 408
    public function block_form_errors($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 409
        if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 0)) {
            // line 410
            echo "<ul>";
            // line 411
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 412
                echo "<li>";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, true, 412), 412, $this->source), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 414
            echo "</ul>";
        }
    }

    // line 418
    public function block_form_rest($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 419
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 420
            if ( !twig_get_attribute($this->env, $this->source, $context["child"], "rendered", [], "any", false, false, true, 420)) {
                // line 421
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed($context["child"], 421, $this->source), 'row');
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 425
        if (( !twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "methodRendered", [], "any", false, false, true, 425) && Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? null)))) {
            // line 426
            twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "setMethodRendered", [], "method", false, false, true, 426);
            // line 427
            $context["method"] = twig_upper_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["method"] ?? null), 427, $this->source));
            // line 428
            if (twig_in_filter(($context["method"] ?? null), [0 => "GET", 1 => "POST"])) {
                // line 429
                $context["form_method"] = ($context["method"] ?? null);
            } else {
                // line 431
                $context["form_method"] = "POST";
            }
            // line 434
            if ((($context["form_method"] ?? null) != ($context["method"] ?? null))) {
                // line 435
                echo "<input type=\"hidden\" name=\"_method\" value=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["method"] ?? null), 435, $this->source), "html", null, true);
                echo "\" />";
            }
        }
    }

    // line 442
    public function block_form_rows($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 443
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, ($context["form"] ?? null), function ($__child__) use ($context, $macros) { $context["child"] = $__child__; return  !twig_get_attribute($this->env, $this->source, $context["child"], "rendered", [], "any", false, false, true, 443); }));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 444
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed($context["child"], 444, $this->source), 'row');
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 448
    public function block_widget_attributes($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 449
        echo "id=\"";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["id"] ?? null), 449, $this->source), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["full_name"] ?? null), 449, $this->source), "html", null, true);
        echo "\"";
        // line 450
        if (($context["disabled"] ?? null)) {
            echo " disabled=\"disabled\"";
        }
        // line 451
        if (($context["required"] ?? null)) {
            echo " required=\"required\"";
        }
        // line 452
        $this->displayBlock("attributes", $context, $blocks);
    }

    // line 455
    public function block_widget_container_attributes($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 456
        if ( !twig_test_empty(($context["id"] ?? null))) {
            echo "id=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["id"] ?? null), 456, $this->source), "html", null, true);
            echo "\"";
        }
        // line 457
        $this->displayBlock("attributes", $context, $blocks);
    }

    // line 460
    public function block_button_attributes($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 461
        echo "id=\"";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["id"] ?? null), 461, $this->source), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["full_name"] ?? null), 461, $this->source), "html", null, true);
        echo "\"";
        if (($context["disabled"] ?? null)) {
            echo " disabled=\"disabled\"";
        }
        // line 462
        $this->displayBlock("attributes", $context, $blocks);
    }

    // line 465
    public function block_attributes($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 466
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["attr"] ?? null));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 467
            echo " ";
            // line 468
            if (twig_in_filter($context["attrname"], [0 => "placeholder", 1 => "title"])) {
                // line 469
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["attrname"], 469, $this->source), "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, ((((($context["translation_domain"] ?? null) === false) || (null === $context["attrvalue"]))) ? ($context["attrvalue"]) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->sandbox->ensureToStringAllowed($context["attrvalue"], 469, $this->source), $this->sandbox->ensureToStringAllowed(($context["attr_translation_parameters"] ?? null), 469, $this->source), $this->sandbox->ensureToStringAllowed(($context["translation_domain"] ?? null), 469, $this->source)))), "html", null, true);
                echo "\"";
            } elseif ((            // line 470
$context["attrvalue"] === true)) {
                // line 471
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["attrname"], 471, $this->source), "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["attrname"], 471, $this->source), "html", null, true);
                echo "\"";
            } elseif ( !(            // line 472
$context["attrvalue"] === false)) {
                // line 473
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["attrname"], 473, $this->source), "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["attrvalue"], 473, $this->source), "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "form_div_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1324 => 473,  1322 => 472,  1317 => 471,  1315 => 470,  1310 => 469,  1308 => 468,  1306 => 467,  1302 => 466,  1298 => 465,  1294 => 462,  1285 => 461,  1281 => 460,  1277 => 457,  1271 => 456,  1267 => 455,  1263 => 452,  1259 => 451,  1255 => 450,  1249 => 449,  1245 => 448,  1237 => 444,  1233 => 443,  1229 => 442,  1221 => 435,  1219 => 434,  1216 => 431,  1213 => 429,  1211 => 428,  1209 => 427,  1207 => 426,  1205 => 425,  1198 => 421,  1196 => 420,  1192 => 419,  1188 => 418,  1183 => 414,  1175 => 412,  1171 => 411,  1169 => 410,  1167 => 409,  1163 => 408,  1159 => 405,  1156 => 403,  1154 => 402,  1150 => 401,  1143 => 397,  1141 => 396,  1121 => 395,  1118 => 393,  1115 => 391,  1113 => 390,  1111 => 389,  1109 => 388,  1105 => 387,  1101 => 384,  1099 => 383,  1097 => 382,  1093 => 381,  1089 => 376,  1085 => 375,  1081 => 372,  1079 => 371,  1067 => 370,  1063 => 369,  1059 => 366,  1057 => 365,  1055 => 364,  1053 => 363,  1051 => 362,  1039 => 361,  1036 => 359,  1034 => 358,  1032 => 357,  1028 => 356,  1024 => 353,  1020 => 348,  1015 => 342,  1011 => 339,  1008 => 337,  1006 => 336,  1002 => 333,  999 => 331,  997 => 330,  995 => 329,  981 => 328,  979 => 327,  977 => 326,  973 => 325,  967 => 321,  960 => 317,  956 => 314,  953 => 312,  951 => 311,  947 => 308,  944 => 306,  942 => 305,  940 => 304,  925 => 303,  921 => 300,  918 => 297,  917 => 296,  916 => 295,  914 => 294,  912 => 293,  909 => 291,  907 => 290,  904 => 288,  902 => 287,  900 => 286,  896 => 285,  887 => 278,  882 => 277,  880 => 276,  877 => 274,  875 => 273,  871 => 272,  867 => 269,  865 => 268,  861 => 267,  857 => 264,  855 => 263,  851 => 262,  847 => 259,  845 => 258,  841 => 257,  837 => 254,  835 => 253,  831 => 252,  827 => 249,  823 => 246,  820 => 244,  818 => 243,  814 => 240,  811 => 238,  809 => 237,  807 => 236,  801 => 235,  797 => 232,  795 => 231,  793 => 229,  792 => 228,  791 => 227,  789 => 226,  787 => 225,  783 => 224,  779 => 221,  777 => 220,  773 => 219,  769 => 216,  767 => 215,  763 => 214,  759 => 211,  757 => 210,  753 => 209,  749 => 206,  747 => 205,  743 => 204,  735 => 201,  733 => 200,  729 => 199,  725 => 196,  723 => 195,  719 => 194,  715 => 191,  713 => 190,  709 => 189,  705 => 186,  701 => 185,  697 => 182,  695 => 181,  691 => 180,  687 => 177,  685 => 176,  681 => 174,  676 => 170,  672 => 169,  668 => 166,  662 => 165,  656 => 164,  650 => 163,  644 => 162,  638 => 161,  632 => 160,  626 => 159,  621 => 155,  615 => 154,  609 => 153,  603 => 152,  597 => 151,  591 => 150,  585 => 149,  579 => 148,  573 => 145,  571 => 144,  567 => 143,  564 => 141,  562 => 140,  558 => 139,  553 => 135,  543 => 134,  538 => 133,  536 => 132,  533 => 130,  531 => 129,  527 => 128,  522 => 124,  520 => 122,  519 => 121,  518 => 120,  517 => 119,  513 => 118,  510 => 116,  508 => 115,  504 => 114,  499 => 110,  497 => 109,  495 => 108,  493 => 107,  491 => 106,  487 => 105,  484 => 103,  482 => 102,  478 => 101,  464 => 98,  460 => 97,  446 => 94,  442 => 93,  406 => 88,  403 => 86,  401 => 85,  399 => 84,  394 => 83,  392 => 82,  375 => 81,  371 => 80,  367 => 77,  365 => 76,  363 => 75,  361 => 74,  355 => 71,  353 => 70,  351 => 69,  348 => 68,  346 => 67,  344 => 66,  335 => 64,  333 => 63,  326 => 62,  323 => 60,  321 => 59,  317 => 58,  313 => 55,  307 => 53,  305 => 52,  301 => 51,  297 => 50,  293 => 49,  288 => 45,  285 => 43,  283 => 42,  279 => 41,  271 => 38,  267 => 37,  263 => 34,  260 => 32,  258 => 31,  254 => 30,  250 => 27,  248 => 26,  246 => 25,  243 => 23,  241 => 22,  237 => 21,  233 => 20,  219 => 17,  216 => 15,  214 => 13,  212 => 12,  208 => 11,  203 => 7,  200 => 5,  198 => 4,  194 => 3,  190 => 465,  188 => 460,  186 => 455,  184 => 448,  182 => 442,  179 => 439,  177 => 418,  175 => 408,  173 => 401,  171 => 387,  169 => 381,  167 => 375,  165 => 369,  163 => 356,  161 => 348,  158 => 345,  156 => 325,  153 => 324,  151 => 321,  149 => 285,  147 => 272,  145 => 267,  143 => 262,  141 => 257,  139 => 252,  137 => 224,  135 => 219,  133 => 214,  131 => 209,  129 => 204,  127 => 199,  125 => 194,  123 => 189,  121 => 185,  119 => 180,  117 => 174,  115 => 139,  113 => 128,  111 => 114,  109 => 101,  107 => 97,  105 => 93,  103 => 80,  101 => 58,  99 => 49,  97 => 41,  95 => 37,  93 => 30,  91 => 20,  89 => 11,  87 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("", "form_div_layout.html.twig", "/var/www/sub-domains/kojimura.xyz/kojimura/eccube/vendor/symfony/twig-bridge/Resources/views/Form/form_div_layout.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("block" => 3, "if" => 4, "set" => 12, "for" => 51, "with" => 88, "do" => 388);
        static $filters = array("default" => 12, "escape" => 17, "merge" => 32, "trans" => 64, "length" => 66, "raw" => 123, "replace" => 119, "form_encode_currency" => 186, "humanize" => 232, "trim" => 291, "upper" => 389, "lower" => 395, "filter" => 443);
        static $functions = array("form_errors" => 23, "form_rest" => 26, "form_row" => 32, "form_widget" => 52, "form_label" => 53, "form_help" => 365, "form_start" => 382, "form_end" => 384);

        try {
            $this->sandbox->checkSecurity(
                ['block', 'if', 'set', 'for', 'with', 'do'],
                ['default', 'escape', 'merge', 'trans', 'length', 'raw', 'replace', 'form_encode_currency', 'humanize', 'trim', 'upper', 'lower', 'filter'],
                ['form_errors', 'form_rest', 'form_row', 'form_widget', 'form_label', 'form_help', 'form_start', 'form_end']
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
