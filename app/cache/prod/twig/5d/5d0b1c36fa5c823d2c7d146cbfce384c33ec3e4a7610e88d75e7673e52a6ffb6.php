<?php

/* MopaBootstrapBundle:Form:fields.html.twig */
class __TwigTemplate_6f10d23b5470d8156a580d31a2f2e95506ae5a93c3ee4ec429e574e351ce2e2b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "MopaBootstrapBundle:Form:fields.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'button_attributes' => array($this, 'block_button_attributes'),
                'button_widget' => array($this, 'block_button_widget'),
                'button_row' => array($this, 'block_button_row'),
                'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
                'textarea_widget' => array($this, 'block_textarea_widget'),
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'form_widget_compound' => array($this, 'block_form_widget_compound'),
                'form_tabs' => array($this, 'block_form_tabs'),
                'tabs_widget' => array($this, 'block_tabs_widget'),
                'form_tab' => array($this, 'block_form_tab'),
                'collection_widget' => array($this, 'block_collection_widget'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'money_widget' => array($this, 'block_money_widget'),
                'file_widget' => array($this, 'block_file_widget'),
                'form_legend' => array($this, 'block_form_legend'),
                'form_label' => array($this, 'block_form_label'),
                'help_label' => array($this, 'block_help_label'),
                'help_label_tooltip' => array($this, 'block_help_label_tooltip'),
                'help_block_tooltip' => array($this, 'block_help_block_tooltip'),
                'help_label_popover' => array($this, 'block_help_label_popover'),
                'help_block_popover' => array($this, 'block_help_block_popover'),
                'form_actions_widget' => array($this, 'block_form_actions_widget'),
                'form_actions_row' => array($this, 'block_form_actions_row'),
                'form_rows_visible' => array($this, 'block_form_rows_visible'),
                'form_row' => array($this, 'block_form_row'),
                'form_message' => array($this, 'block_form_message'),
                'form_help' => array($this, 'block_form_help'),
                'form_widget_add_btn' => array($this, 'block_form_widget_add_btn'),
                'form_widget_remove_btn' => array($this, 'block_form_widget_remove_btn'),
                'collection_button' => array($this, 'block_collection_button'),
                'label_asterisk' => array($this, 'block_label_asterisk'),
                'widget_addon' => array($this, 'block_widget_addon'),
                'widget_btns' => array($this, 'block_widget_btns'),
                'form_errors' => array($this, 'block_form_errors'),
                'error_type' => array($this, 'block_error_type'),
                'widget_form_group_start' => array($this, 'block_widget_form_group_start'),
                'help_widget_popover' => array($this, 'block_help_widget_popover'),
                'widget_form_group_end' => array($this, 'block_widget_form_group_end'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
";
        // line 4
        $this->displayBlock('button_attributes', $context, $blocks);
        // line 8
        echo "
";
        // line 9
        $this->displayBlock('button_widget', $context, $blocks);
        // line 28
        echo "
";
        // line 29
        $this->displayBlock('button_row', $context, $blocks);
        // line 45
        echo "
";
        // line 47
        echo "
";
        // line 48
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 52
        echo "
";
        // line 53
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 72
        echo "
";
        // line 73
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 109
        echo "
";
        // line 110
        $this->displayBlock('form_widget_compound', $context, $blocks);
        // line 135
        echo "
";
        // line 136
        $this->displayBlock('form_tabs', $context, $blocks);
        // line 141
        echo "
";
        // line 142
        $this->displayBlock('tabs_widget', $context, $blocks);
        // line 157
        echo "
";
        // line 158
        $this->displayBlock('form_tab', $context, $blocks);
        // line 164
        echo "
";
        // line 165
        $this->displayBlock('collection_widget', $context, $blocks);
        // line 195
        echo "

";
        // line 197
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 237
        echo "
";
        // line 238
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 282
        echo "
";
        // line 283
        $this->displayBlock('date_widget', $context, $blocks);
        // line 315
        echo "
";
        // line 316
        $this->displayBlock('time_widget', $context, $blocks);
        // line 350
        echo "
";
        // line 351
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 382
        echo "
";
        // line 383
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 389
        echo "
";
        // line 390
        $this->displayBlock('money_widget', $context, $blocks);
        // line 396
        echo "
";
        // line 397
        $this->displayBlock('file_widget', $context, $blocks);
        // line 413
        echo "
";
        // line 415
        echo "
";
        // line 416
        $this->displayBlock('form_legend', $context, $blocks);
        // line 431
        echo "
";
        // line 432
        $this->displayBlock('form_label', $context, $blocks);
        // line 474
        echo "
";
        // line 475
        $this->displayBlock('help_label', $context, $blocks);
        // line 478
        echo "
";
        // line 479
        $this->displayBlock('help_label_tooltip', $context, $blocks);
        // line 491
        echo "
";
        // line 492
        $this->displayBlock('help_block_tooltip', $context, $blocks);
        // line 496
        echo "
";
        // line 497
        $this->displayBlock('help_label_popover', $context, $blocks);
        // line 509
        echo "
";
        // line 510
        $this->displayBlock('help_block_popover', $context, $blocks);
        // line 514
        echo "
";
        // line 515
        $this->displayBlock('form_actions_widget', $context, $blocks);
        // line 520
        echo "
";
        // line 522
        $this->displayBlock('form_actions_row', $context, $blocks);
        // line 525
        echo "
";
        // line 526
        $this->displayBlock('form_rows_visible', $context, $blocks);
        // line 540
        echo "
";
        // line 541
        $this->displayBlock('form_row', $context, $blocks);
        // line 578
        echo "
";
        // line 580
        echo "
";
        // line 581
        $this->displayBlock('form_message', $context, $blocks);
        // line 590
        echo "
";
        // line 592
        echo "
";
        // line 593
        $this->displayBlock('form_help', $context, $blocks);
        // line 604
        echo "
";
        // line 605
        $this->displayBlock('form_widget_add_btn', $context, $blocks);
        // line 614
        echo "
";
        // line 615
        $this->displayBlock('form_widget_remove_btn', $context, $blocks);
        // line 636
        echo "
";
        // line 637
        $this->displayBlock('collection_button', $context, $blocks);
        // line 648
        echo "
";
        // line 649
        $this->displayBlock('label_asterisk', $context, $blocks);
        // line 656
        echo "
";
        // line 657
        $this->displayBlock('widget_addon', $context, $blocks);
        // line 664
        echo "
";
        // line 665
        $this->displayBlock('widget_btns', $context, $blocks);
        // line 678
        echo "
";
        // line 680
        echo "
";
        // line 681
        $this->displayBlock('form_errors', $context, $blocks);
        // line 707
        echo "
";
        // line 709
        echo "
";
        // line 710
        $this->displayBlock('error_type', $context, $blocks);
        // line 721
        echo "
";
        // line 723
        echo "
";
        // line 724
        $this->displayBlock('widget_form_group_start', $context, $blocks);
        // line 761
        echo "
";
        // line 762
        $this->displayBlock('help_widget_popover', $context, $blocks);
        // line 769
        echo "
";
        // line 770
        $this->displayBlock('widget_form_group_end', $context, $blocks);
    }

    // line 4
    public function block_button_attributes($context, array $blocks = array())
    {
        // line 5
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("class" => ("btn " . (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "btn-default")) : ("btn-default")))));
        // line 6
        echo "    ";
        $this->displayParentBlock("button_attributes", $context, $blocks);
        echo "
";
    }

    // line 9
    public function block_button_widget($context, array $blocks = array())
    {
        // line 10
        ob_start();
        // line 11
        echo "    ";
        if (twig_test_empty((isset($context["label"]) ? $context["label"] : null))) {
            // line 12
            if ((array_key_exists("label_format", $context) &&  !twig_test_empty((isset($context["label_format"]) ? $context["label_format"] : null)))) {
                // line 13
                $context["label"] = twig_replace_filter((isset($context["label_format"]) ? $context["label_format"] : null), array("%name%" =>                 // line 14
(isset($context["name"]) ? $context["name"] : null), "%id%" =>                 // line 15
(isset($context["id"]) ? $context["id"] : null)));
            } else {
                // line 18
                $context["label"] = $this->env->getExtension('form')->humanize((isset($context["name"]) ? $context["name"] : null));
            }
        }
        // line 21
        echo "    <button type=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : null), "button")) : ("button")), "html", null, true);
        echo "\" ";
        $this->displayBlock("button_attributes", $context, $blocks);
        echo ">
    ";
        // line 22
        if ( !twig_test_empty((isset($context["icon"]) ? $context["icon"] : null))) {
            // line 23
            echo "            ";
            echo $this->env->getExtension('mopa_bootstrap_icon')->renderIcon($this->env, (isset($context["icon"]) ? $context["icon"] : null), ((array_key_exists("icon_inverted", $context)) ? (_twig_default_filter((isset($context["icon_inverted"]) ? $context["icon_inverted"] : null), false)) : (false)));
            echo "
    ";
        }
        // line 25
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : null), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null)), "html", null, true);
        echo "</button>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 29
    public function block_button_row($context, array $blocks = array())
    {
        // line 30
        echo "    ";
        ob_start();
        // line 31
        echo "        ";
        if ((array_key_exists("button_offset", $context) &&  !twig_test_empty((isset($context["button_offset"]) ? $context["button_offset"] : null)))) {
            // line 32
            echo "            ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("for" => (isset($context["id"]) ? $context["id"] : null), "class" => (isset($context["button_offset"]) ? $context["button_offset"] : null)));
            // line 33
            echo "            <div class=\"form-group\">
                <div ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : null));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">
                ";
            // line 35
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
            echo "
                </div>
            </div>
        ";
        } else {
            // line 39
            echo "            <div>
                ";
            // line 40
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
            echo "
            </div>
        ";
        }
        // line 43
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 48
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        // line 49
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("class" => (((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " ") . (isset($context["widget_form_control_class"]) ? $context["widget_form_control_class"] : null))));
        // line 50
        echo "    ";
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        echo "
";
    }

    // line 53
    public function block_textarea_widget($context, array $blocks = array())
    {
        // line 54
        echo "    ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : null), "text")) : ("text"));
        // line 55
        echo "    ";
        if ((((isset($context["type"]) ? $context["type"] : null) != "hidden") && ( !(null === ((array_key_exists("widget_addon_prepend", $context)) ? (_twig_default_filter((isset($context["widget_addon_prepend"]) ? $context["widget_addon_prepend"] : null), null)) : (null))) ||  !(null === ((array_key_exists("widget_addon_append", $context)) ? (_twig_default_filter((isset($context["widget_addon_append"]) ? $context["widget_addon_append"] : null), null)) : (null)))))) {
            // line 56
            echo "    <div class=\"input-group\">
        ";
            // line 57
            if ( !(null === ((array_key_exists("widget_addon_prepend", $context)) ? (_twig_default_filter((isset($context["widget_addon_prepend"]) ? $context["widget_addon_prepend"] : null), null)) : (null)))) {
                // line 58
                echo "            ";
                $context["widget_addon"] = (isset($context["widget_addon_prepend"]) ? $context["widget_addon_prepend"] : null);
                // line 59
                echo "            ";
                $this->displayBlock("widget_addon", $context, $blocks);
                echo "
        ";
            }
            // line 61
            echo "    ";
        }
        // line 62
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("class" => (((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " ") . (isset($context["widget_form_control_class"]) ? $context["widget_form_control_class"] : null))));
        // line 63
        echo "    ";
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        echo "
    ";
        // line 64
        if ((((isset($context["type"]) ? $context["type"] : null) != "hidden") && ( !(null === ((array_key_exists("widget_addon_prepend", $context)) ? (_twig_default_filter((isset($context["widget_addon_prepend"]) ? $context["widget_addon_prepend"] : null), null)) : (null))) ||  !(null === ((array_key_exists("widget_addon_append", $context)) ? (_twig_default_filter((isset($context["widget_addon_append"]) ? $context["widget_addon_append"] : null), null)) : (null)))))) {
            // line 65
            echo "        ";
            if ( !(null === ((array_key_exists("widget_addon_append", $context)) ? (_twig_default_filter((isset($context["widget_addon_append"]) ? $context["widget_addon_append"] : null), null)) : (null)))) {
                // line 66
                echo "        ";
                $context["widget_addon"] = (isset($context["widget_addon_append"]) ? $context["widget_addon_append"] : null);
                // line 67
                echo "        ";
                $this->displayBlock("widget_addon", $context, $blocks);
                echo "
        ";
            }
            // line 69
            echo "    </div>
    ";
        }
    }

    // line 73
    public function block_form_widget_simple($context, array $blocks = array())
    {
        // line 74
        ob_start();
        // line 75
        echo "    ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : null), "text")) : ("text"));
        // line 76
        echo "    ";
        if ((((isset($context["type"]) ? $context["type"] : null) != "hidden") && ((( !(null === ((array_key_exists("widget_addon_prepend", $context)) ? (_twig_default_filter((isset($context["widget_addon_prepend"]) ? $context["widget_addon_prepend"] : null), null)) : (null))) ||  !(null === ((array_key_exists("widget_addon_append", $context)) ? (_twig_default_filter((isset($context["widget_addon_append"]) ? $context["widget_addon_append"] : null), null)) : (null)))) ||  !(null === ((array_key_exists("widget_btn_prepend", $context)) ? (_twig_default_filter((isset($context["widget_btn_prepend"]) ? $context["widget_btn_prepend"] : null), null)) : (null)))) ||  !(null === ((array_key_exists("widget_btn_append", $context)) ? (_twig_default_filter((isset($context["widget_btn_append"]) ? $context["widget_btn_append"] : null), null)) : (null)))))) {
            // line 77
            echo "    <div class=\"input-group\">
        ";
            // line 78
            if ( !(null === ((array_key_exists("widget_btn_prepend", $context)) ? (_twig_default_filter((isset($context["widget_btn_prepend"]) ? $context["widget_btn_prepend"] : null), null)) : (null)))) {
                // line 79
                echo "            ";
                $context["widget_btns"] = (isset($context["widget_btn_prepend"]) ? $context["widget_btn_prepend"] : null);
                // line 80
                echo "            ";
                $this->displayBlock("widget_btns", $context, $blocks);
                echo "
        ";
            }
            // line 82
            echo "        ";
            if ( !(null === ((array_key_exists("widget_addon_prepend", $context)) ? (_twig_default_filter((isset($context["widget_addon_prepend"]) ? $context["widget_addon_prepend"] : null), null)) : (null)))) {
                // line 83
                echo "            ";
                $context["widget_addon"] = (isset($context["widget_addon_prepend"]) ? $context["widget_addon_prepend"] : null);
                // line 84
                echo "            ";
                $this->displayBlock("widget_addon", $context, $blocks);
                echo "
        ";
            }
            // line 86
            echo "    ";
        }
        // line 87
        echo "    ";
        if ( !((array_key_exists("widget_remove_btn", $context)) ? (_twig_default_filter((isset($context["widget_remove_btn"]) ? $context["widget_remove_btn"] : null), null)) : (null))) {
            // line 88
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("class" => ((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " not-removable")));
            // line 89
            echo "    ";
        }
        // line 90
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("class" => trim((((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " ") . (isset($context["widget_form_control_class"]) ? $context["widget_form_control_class"] : null)))));
        // line 91
        echo "    ";
        if (((isset($context["static_text"]) ? $context["static_text"] : null) === true)) {
            // line 92
            echo "        <p class=\"form-control-static\">";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
            echo "</p>
    ";
        } else {
            // line 94
            echo "        ";
            $this->displayParentBlock("form_widget_simple", $context, $blocks);
            echo "
    ";
        }
        // line 96
        echo "    ";
        if ((((isset($context["type"]) ? $context["type"] : null) != "hidden") && ((( !(null === ((array_key_exists("widget_addon_prepend", $context)) ? (_twig_default_filter((isset($context["widget_addon_prepend"]) ? $context["widget_addon_prepend"] : null), null)) : (null))) ||  !(null === ((array_key_exists("widget_addon_append", $context)) ? (_twig_default_filter((isset($context["widget_addon_append"]) ? $context["widget_addon_append"] : null), null)) : (null)))) ||  !(null === ((array_key_exists("widget_btn_prepend", $context)) ? (_twig_default_filter((isset($context["widget_btn_prepend"]) ? $context["widget_btn_prepend"] : null), null)) : (null)))) ||  !(null === ((array_key_exists("widget_btn_append", $context)) ? (_twig_default_filter((isset($context["widget_btn_append"]) ? $context["widget_btn_append"] : null), null)) : (null)))))) {
            // line 97
            echo "        ";
            if ( !(null === ((array_key_exists("widget_addon_append", $context)) ? (_twig_default_filter((isset($context["widget_addon_append"]) ? $context["widget_addon_append"] : null), null)) : (null)))) {
                // line 98
                echo "            ";
                $context["widget_addon"] = (isset($context["widget_addon_append"]) ? $context["widget_addon_append"] : null);
                // line 99
                echo "            ";
                $this->displayBlock("widget_addon", $context, $blocks);
                echo "
        ";
            }
            // line 101
            echo "        ";
            if ( !(null === ((array_key_exists("widget_btn_append", $context)) ? (_twig_default_filter((isset($context["widget_btn_append"]) ? $context["widget_btn_append"] : null), null)) : (null)))) {
                // line 102
                echo "            ";
                $context["widget_btns"] = (isset($context["widget_btn_append"]) ? $context["widget_btn_append"] : null);
                // line 103
                echo "            ";
                $this->displayBlock("widget_btns", $context, $blocks);
                echo "
        ";
            }
            // line 105
            echo "    </div>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 110
    public function block_form_widget_compound($context, array $blocks = array())
    {
        // line 111
        ob_start();
        // line 112
        echo "    ";
        if (($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", array()) == null)) {
            // line 113
            echo "        ";
            if ((isset($context["render_fieldset"]) ? $context["render_fieldset"] : null)) {
                echo "<fieldset>";
            }
            // line 114
            echo "        ";
            if ((isset($context["show_legend"]) ? $context["show_legend"] : null)) {
                $this->displayBlock("form_legend", $context, $blocks);
            }
            // line 115
            echo "    ";
        }
        // line 116
        echo "
    ";
        // line 117
        if ($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "tabbed", array())) {
            // line 118
            echo "        ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'tabs');
            echo "
        <div class=\"tab-content\">
    ";
        }
        // line 121
        echo "
    ";
        // line 122
        $this->displayBlock("form_rows_visible", $context, $blocks);
        echo "

    ";
        // line 124
        if ($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "tabbed", array())) {
            // line 125
            echo "        </div>
    ";
        }
        // line 127
        echo "
    ";
        // line 128
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "

    ";
        // line 130
        if (($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", array()) == null)) {
            // line 131
            echo "        ";
            if ((isset($context["render_fieldset"]) ? $context["render_fieldset"] : null)) {
                echo "</fieldset>";
            }
            // line 132
            echo "    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 136
    public function block_form_tabs($context, array $blocks = array())
    {
        // line 137
        if ($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array(), "any", false, true), "tabsView", array(), "any", true, true)) {
            // line 138
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "tabsView", array()), 'widget');
            echo "
";
        }
    }

    // line 142
    public function block_tabs_widget($context, array $blocks = array())
    {
        // line 143
        ob_start();
        // line 144
        echo "<ul class=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "attr", array()), "class", array()), "html", null, true);
        echo "\">
    ";
        // line 145
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "tabs", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
            // line 146
            echo "        ";
            $context["class"] = ((($this->getAttribute($context["tab"], "active", array())) ? ("active ") : ("")) . (($this->getAttribute($context["tab"], "disabled", array())) ? ("disabled") : ("")));
            // line 147
            echo "        <li";
            if ( !twig_test_empty(trim((isset($context["class"]) ? $context["class"] : null)))) {
                echo " class=\"";
                echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : null), "html", null, true);
                echo "\"";
            }
            echo ">
            <a data-toggle=\"tab\" href=\"#";
            // line 148
            echo twig_escape_filter($this->env, $this->getAttribute($context["tab"], "id", array()), "html", null, true);
            echo "\">
                ";
            // line 149
            if ($this->getAttribute($context["tab"], "icon", array())) {
                echo $this->env->getExtension('mopa_bootstrap_icon')->renderIcon($this->env, $this->getAttribute($context["tab"], "icon", array()));
            }
            // line 150
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($context["tab"], "label", array()), array(), $this->getAttribute($context["tab"], "translation_domain", array())), "html", null, true);
            echo "
            </a>
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 154
        echo "</ul>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 158
    public function block_form_tab($context, array $blocks = array())
    {
        // line 159
        echo "    ";
        $context["tab_attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("class" => ((("tab-pane" . (($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "tab_active", array())) ? (" active") : (""))) . " ") . (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : (""))), "id" => (isset($context["id"]) ? $context["id"] : null)));
        // line 160
        echo "    <div";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tab_attr"]) ? $context["tab_attr"] : null));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ">
        ";
        // line 161
        $this->displayBlock("form_widget", $context, $blocks);
        echo "
    </div>
";
    }

    // line 165
    public function block_collection_widget($context, array $blocks = array())
    {
        // line 166
        ob_start();
        // line 167
        echo "    ";
        if (array_key_exists("prototype", $context)) {
            // line 168
            echo "        ";
            $context["prototype_markup"] = $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["prototype"]) ? $context["prototype"] : null), 'row');
            // line 169
            echo "        ";
            $context["data_prototype_name"] = (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array(), "any", false, true), "form", array(), "any", false, true), "vars", array(), "any", false, true), "prototype", array(), "any", false, true), "vars", array(), "any", false, true), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array(), "any", false, true), "form", array(), "any", false, true), "vars", array(), "any", false, true), "prototype", array(), "any", false, true), "vars", array(), "any", false, true), "name", array()), "__name__")) : ("__name__"));
            // line 170
            echo "        ";
            $context["data_prototype_label"] = (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array(), "any", false, true), "form", array(), "any", false, true), "vars", array(), "any", false, true), "prototype", array(), "any", false, true), "vars", array(), "any", false, true), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array(), "any", false, true), "form", array(), "any", false, true), "vars", array(), "any", false, true), "prototype", array(), "any", false, true), "vars", array(), "any", false, true), "label", array()), "__name__label__")) : ("__name__label__"));
            // line 171
            echo "        ";
            $context["widget_form_group_attr"] = twig_array_merge(twig_array_merge((isset($context["widget_form_group_attr"]) ? $context["widget_form_group_attr"] : null), array("data-prototype" =>             // line 172
(isset($context["prototype_markup"]) ? $context["prototype_markup"] : null), "data-prototype-name" =>             // line 173
(isset($context["data_prototype_name"]) ? $context["data_prototype_name"] : null), "data-prototype-label" =>             // line 174
(isset($context["data_prototype_label"]) ? $context["data_prototype_label"] : null))),             // line 175
(isset($context["attr"]) ? $context["attr"] : null));
            // line 176
            echo "    ";
        }
        // line 177
        echo "    ";
        // line 178
        echo "\t";
        if ((twig_in_filter("collection", $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "block_prefixes", array())) && $this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true))) {
            // line 179
            echo "\t\t";
            $context["widget_form_group_attr"] = twig_array_merge((isset($context["widget_form_group_attr"]) ? $context["widget_form_group_attr"] : null), array("class" => (((($this->getAttribute((isset($context["widget_form_group_attr"]) ? $context["widget_form_group_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["widget_form_group_attr"]) ? $context["widget_form_group_attr"] : null), "class", array()), "row")) : ("row")) . " ") . $this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()))));
            // line 180
            echo "\t";
        }
        // line 181
        echo "    ";
        // line 182
        echo "    ";
        $context["widget_form_group_attr"] = twig_array_merge((isset($context["widget_form_group_attr"]) ? $context["widget_form_group_attr"] : null), array("id" => (("collection" . (isset($context["id"]) ? $context["id"] : null)) . "_form_group"), "class" => ((($this->getAttribute((isset($context["widget_form_group_attr"]) ? $context["widget_form_group_attr"] : null), "class", array()) . " collection-items ") . (isset($context["id"]) ? $context["id"] : null)) . "_form_group")));
        // line 183
        echo "
    <div ";
        // line 184
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["widget_form_group_attr"]) ? $context["widget_form_group_attr"] : null));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ">
    ";
        // line 186
        echo "    ";
        if (((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "value", array())) == 0) && array_key_exists("prototype", $context))) {
            // line 187
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["prototype_names"]) ? $context["prototype_names"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["name"]) {
                // line 188
                echo "            ";
                echo twig_replace_filter((isset($context["prototype_markup"]) ? $context["prototype_markup"] : null), array("__name__" => $context["name"]));
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 190
            echo "    ";
        }
        // line 191
        echo "    ";
        $this->displayBlock("form_widget", $context, $blocks);
        echo "
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 197
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        // line 198
        echo "    ";
        ob_start();
        // line 199
        echo "        ";
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : null), array("class" => (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : (""))));
        // line 200
        echo "        ";
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : null), array("class" => (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()) . " ") . ((((isset($context["widget_type"]) ? $context["widget_type"] : null) != "")) ? ((((((isset($context["multiple"]) ? $context["multiple"] : null)) ? ("checkbox") : ("radio")) . "-") . (isset($context["widget_type"]) ? $context["widget_type"] : null))) : ("")))));
        // line 201
        echo "        ";
        if ((isset($context["expanded"]) ? $context["expanded"] : null)) {
            // line 202
            echo "            ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("class" => (((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " ") . (isset($context["horizontal_input_wrapper_class"]) ? $context["horizontal_input_wrapper_class"] : null))));
            // line 203
            echo "        ";
        }
        // line 204
        echo "        ";
        if (((isset($context["widget_type"]) ? $context["widget_type"] : null) == "inline-btn")) {
            // line 205
            echo "            <div class=\"btn-group\" data-toggle=\"buttons\">
        ";
        }
        // line 207
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 208
            echo "            ";
            if (!twig_in_filter((isset($context["widget_type"]) ? $context["widget_type"] : null), array(0 => "inline", 1 => "inline-btn"))) {
                // line 209
                echo "                <div class=\"";
                echo (((isset($context["multiple"]) ? $context["multiple"] : null)) ? ("checkbox") : ("radio"));
                echo "\"";
                // line 210
                if (((isset($context["widget_type"]) ? $context["widget_type"] : null) == "inline-btn")) {
                    echo " class=\"btn-group\" data-toggle=\"buttons\"";
                }
                echo ">
            ";
            }
            // line 212
            echo "            ";
            if (((isset($context["widget_type"]) ? $context["widget_type"] : null) == "inline-btn")) {
                // line 213
                echo "                ";
                $context["label_attr"] = twig_array_merge(((array_key_exists("label_attr", $context)) ? (_twig_default_filter((isset($context["label_attr"]) ? $context["label_attr"] : null), array())) : (array())), array("class" => ("btn " . (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))));
                // line 214
                echo "            ";
            }
            // line 215
            echo "            ";
            if (($this->getAttribute($this->getAttribute($context["child"], "vars", array()), "checked", array()) && ((isset($context["widget_type"]) ? $context["widget_type"] : null) == "inline-btn"))) {
                // line 216
                echo "                ";
                $context["label_attr_copy"] = twig_array_merge(((array_key_exists("label_attr", $context)) ? (_twig_default_filter((isset($context["label_attr"]) ? $context["label_attr"] : null), array())) : (array())), array("class" => ("active " . (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))));
                // line 217
                echo "            ";
            } else {
                // line 218
                echo "                ";
                $context["label_attr_copy"] = ((array_key_exists("label_attr", $context)) ? (_twig_default_filter((isset($context["label_attr"]) ? $context["label_attr"] : null), array())) : (array()));
                // line 219
                echo "            ";
            }
            // line 220
            echo "            <label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr_copy"]) ? $context["label_attr_copy"] : null));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">
            ";
            // line 221
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'widget', array("horizontal_label_class" => (isset($context["horizontal_label_class"]) ? $context["horizontal_label_class"] : null), "horizontal_input_wrapper_class" => (isset($context["horizontal_input_wrapper_class"]) ? $context["horizontal_input_wrapper_class"] : null), "attr" => array("class" => (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_class", array()), "")) : ("")))));
            echo "
            ";
            // line 222
            if ((((isset($context["widget_type"]) ? $context["widget_type"] : null) == "inline-btn") || ((isset($context["widget_checkbox_label"]) ? $context["widget_checkbox_label"] : null) == "widget"))) {
                // line 223
                echo "                ";
                echo $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($context["child"], "vars", array()), "label", array()), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null));
                echo "
            ";
            } else {
                // line 225
                echo "                ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($context["child"], "vars", array()), "label", array()), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null)), "html", null, true);
                echo "
            ";
            }
            // line 227
            echo "            </label>
            ";
            // line 228
            if (!twig_in_filter((isset($context["widget_type"]) ? $context["widget_type"] : null), array(0 => "inline", 1 => "inline-btn"))) {
                // line 229
                echo "                </div>
            ";
            }
            // line 231
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 232
        echo "        ";
        if (((isset($context["widget_type"]) ? $context["widget_type"] : null) == "inline-btn")) {
            // line 233
            echo "            </div>
        ";
        }
        // line 235
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 238
    public function block_checkbox_widget($context, array $blocks = array())
    {
        // line 239
        echo "    ";
        ob_start();
        // line 240
        echo "        ";
        if (( !((isset($context["label"]) ? $context["label"] : null) === false) && twig_test_empty((isset($context["label"]) ? $context["label"] : null)))) {
            // line 241
            if ((array_key_exists("label_format", $context) &&  !twig_test_empty((isset($context["label_format"]) ? $context["label_format"] : null)))) {
                // line 242
                $context["label"] = twig_replace_filter((isset($context["label_format"]) ? $context["label_format"] : null), array("%name%" =>                 // line 243
(isset($context["name"]) ? $context["name"] : null), "%id%" =>                 // line 244
(isset($context["id"]) ? $context["id"] : null)));
            } else {
                // line 247
                $context["label"] = $this->env->getExtension('form')->humanize((isset($context["name"]) ? $context["name"] : null));
            }
        }
        // line 250
        echo "        ";
        if ((($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", array()) != null) && !twig_in_filter("choice", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", array()), "vars", array()), "block_prefixes", array())))) {
            // line 251
            echo "            <div";
            // line 252
            if (((isset($context["widget_type"]) ? $context["widget_type"] : null) == "inline-btn")) {
                echo " class=\"btn-group\" data-toggle=\"buttons\"";
            } else {
                // line 253
                echo " class=\"checkbox\"";
            }
            // line 254
            echo ">
        ";
        }
        // line 256
        echo "        ";
        if (((($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", array()) != null) && !twig_in_filter("choice", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", array()), "vars", array()), "block_prefixes", array()))) && (isset($context["label_render"]) ? $context["label_render"] : null))) {
            // line 257
            echo "            ";
            if (((isset($context["widget_type"]) ? $context["widget_type"] : null) == "inline-btn")) {
                // line 258
                echo "                ";
                $context["label_attr"] = ((array_key_exists("attr", $context)) ? (_twig_default_filter((isset($context["attr"]) ? $context["attr"] : null), array())) : (array()));
                // line 259
                echo "                ";
                if ((isset($context["checked"]) ? $context["checked"] : null)) {
                    // line 260
                    echo "                    ";
                    $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : null), array("class" => ("active " . (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")))));
                    // line 261
                    echo "                ";
                }
                // line 262
                echo "            ";
            }
            // line 263
            echo "            <label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : null));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 264
            if ( !(isset($context["horizontal"]) ? $context["horizontal"] : null)) {
                echo " class=\"checkbox-inline\"";
            }
            echo ">
        ";
        }
        // line 266
        echo "        <input type=\"checkbox\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) ? $context["checked"] : null)) {
            echo " checked=\"checked\"";
        }
        echo "/>
        ";
        // line 267
        if ((($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", array()) != null) && !twig_in_filter("choice", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", array()), "vars", array()), "block_prefixes", array())))) {
            // line 268
            echo "            ";
            if ((isset($context["label_render"]) ? $context["label_render"] : null)) {
                // line 269
                echo "                ";
                if (twig_in_filter((isset($context["widget_checkbox_label"]) ? $context["widget_checkbox_label"] : null), array(0 => "both", 1 => "widget"))) {
                    // line 270
                    echo "                    ";
                    echo $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : null), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null));
                    echo "
                ";
                } else {
                    // line 272
                    echo "                    ";
                    $this->displayBlock("form_help", $context, $blocks);
                    echo "
                ";
                }
                // line 274
                echo "                </label>
            ";
            }
            // line 276
            echo "        ";
        }
        // line 277
        echo "        ";
        if ((($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", array()) != null) && !twig_in_filter("choice", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", array()), "vars", array()), "block_prefixes", array())))) {
            // line 278
            echo "            </div>
        ";
        }
        // line 280
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 283
    public function block_date_widget($context, array $blocks = array())
    {
        // line 284
        ob_start();
        // line 285
        if (((isset($context["widget"]) ? $context["widget"] : null) == "single_text")) {
            // line 286
            echo "    ";
            if (array_key_exists("datepicker", $context)) {
                // line 287
                echo "        ";
                $context["widget_addon_icon"] = (($this->getAttribute((isset($context["widget_addon_append"]) ? $context["widget_addon_append"] : null), "icon", array(), "any", true, true)) ? ($this->getAttribute((isset($context["widget_addon_append"]) ? $context["widget_addon_append"] : null), "icon", array())) : ("calendar"));
                // line 288
                echo "        <div ";
                if ($this->getAttribute((isset($context["datepicker"]) ? $context["datepicker"] : null), "attr", array(), "any", true, true)) {
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["datepicker"]) ? $context["datepicker"] : null), "attr", array()));
                    foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                        echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                        echo "=\"";
                        echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                        echo "\" ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                }
                echo " data-provider=\"datepicker\" class=\"input-group date\" data-date=\"";
                echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
                echo "\" data-link-field=\"";
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                echo "\" data-link-format=\"yyyy-mm-dd\">
            <input type=\"hidden\" value=\"";
                // line 289
                echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
                echo "\" ";
                $this->displayBlock("widget_attributes", $context, $blocks);
                echo ">
            ";
                // line 290
                if ((array_key_exists("widget_reset_icon", $context) && ((isset($context["widget_reset_icon"]) ? $context["widget_reset_icon"] : null) == true))) {
                    // line 291
                    echo "                <span class=\"input-group-addon\">";
                    echo $this->env->getExtension('mopa_bootstrap_icon')->renderIcon($this->env, "remove");
                    echo "</span>
            ";
                }
                // line 293
                echo "            ";
                // line 294
                echo "            ";
                $context["id"] = ((isset($context["id"]) ? $context["id"] : null) . "_mopa_picker_display");
                // line 295
                echo "            ";
                $context["full_name"] = null;
                // line 296
                echo "            ";
                $context["type"] = "text";
                // line 297
                echo "            ";
                $this->displayBlock("form_widget_simple", $context, $blocks);
                echo "
            <span class=\"input-group-addon\">";
                // line 298
                echo $this->env->getExtension('mopa_bootstrap_icon')->renderIcon($this->env, (isset($context["widget_addon_icon"]) ? $context["widget_addon_icon"] : null));
                echo "</span>
        </div>
    ";
            } else {
                // line 301
                echo "        ";
                $this->displayBlock("form_widget_simple", $context, $blocks);
                echo "
    ";
            }
        } else {
            // line 304
            echo "    ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("class" => (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "inline")) : ("inline"))));
            // line 305
            echo "    \t<div class=\"row\">
        ";
            // line 306
            echo twig_replace_filter((isset($context["date_pattern"]) ? $context["date_pattern"] : null), array("{{ year }}" => (((("<div class=\"" . (($this->getAttribute(            // line 307
(isset($context["date_wrapper_class"]) ? $context["date_wrapper_class"] : null), "year", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["date_wrapper_class"]) ? $context["date_wrapper_class"] : null), "year", array(), "array"), "col-xs-4")) : ("col-xs-4"))) . "\">") . $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "year", array()), 'widget', array("attr" => array("class" => ((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_class", array()), "")) : ("")) . ""))))) . "</div>"), "{{ month }}" => (((("<div class=\"" . (($this->getAttribute(            // line 308
(isset($context["date_wrapper_class"]) ? $context["date_wrapper_class"] : null), "month", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["date_wrapper_class"]) ? $context["date_wrapper_class"] : null), "month", array(), "array"), "col-xs-4")) : ("col-xs-4"))) . "\">") . $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "month", array()), 'widget', array("attr" => array("class" => ((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_class", array()), "")) : ("")) . ""))))) . "</div>"), "{{ day }}" => (((("<div class=\"" . (($this->getAttribute(            // line 309
(isset($context["date_wrapper_class"]) ? $context["date_wrapper_class"] : null), "day", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["date_wrapper_class"]) ? $context["date_wrapper_class"] : null), "day", array(), "array"), "col-xs-4")) : ("col-xs-4"))) . "\">") . $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "day", array()), 'widget', array("attr" => array("class" => ((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_class", array()), "")) : ("")) . ""))))) . "</div>")));
            // line 310
            echo "
        </div>
";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 316
    public function block_time_widget($context, array $blocks = array())
    {
        // line 317
        ob_start();
        // line 318
        if (((isset($context["widget"]) ? $context["widget"] : null) == "single_text")) {
            // line 319
            echo "    ";
            if (array_key_exists("timepicker", $context)) {
                // line 320
                echo "        ";
                $context["widget_addon_icon"] = (($this->getAttribute((isset($context["widget_addon_append"]) ? $context["widget_addon_append"] : null), "icon", array(), "any", true, true)) ? ($this->getAttribute((isset($context["widget_addon_append"]) ? $context["widget_addon_append"] : null), "icon", array())) : ("time"));
                // line 321
                echo "        <div ";
                if ($this->getAttribute((isset($context["timepicker"]) ? $context["timepicker"] : null), "attr", array(), "any", true, true)) {
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["timepicker"]) ? $context["timepicker"] : null), "attr", array()));
                    foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                        echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                        echo "=\"";
                        echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                        echo "\" ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                }
                echo " data-provider=\"timepicker\" class=\"input-group date\" data-date=\"";
                echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
                echo "\" data-link-field=\"";
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                echo "\" data-link-format=\"hh:ii\">
            <input type=\"hidden\" value=\"";
                // line 322
                echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
                echo "\" ";
                $this->displayBlock("widget_attributes", $context, $blocks);
                echo ">
            ";
                // line 323
                if ((array_key_exists("widget_reset_icon", $context) && ((isset($context["widget_reset_icon"]) ? $context["widget_reset_icon"] : null) == true))) {
                    // line 324
                    echo "                <span class=\"input-group-addon\">";
                    echo $this->env->getExtension('mopa_bootstrap_icon')->renderIcon($this->env, "remove");
                    echo "</span>
            ";
                }
                // line 326
                echo "            ";
                // line 327
                echo "            ";
                $context["id"] = ((isset($context["id"]) ? $context["id"] : null) . "_mopa_picker_display");
                // line 328
                echo "            ";
                $context["full_name"] = null;
                // line 329
                echo "            ";
                $context["type"] = "text";
                // line 330
                echo "            ";
                $this->displayBlock("form_widget_simple", $context, $blocks);
                echo "
            <span class=\"input-group-addon\">";
                // line 331
                echo $this->env->getExtension('mopa_bootstrap_icon')->renderIcon($this->env, (isset($context["widget_addon_icon"]) ? $context["widget_addon_icon"] : null));
                echo "</span>
        </div>
    ";
            } else {
                // line 334
                echo "        ";
                $this->displayBlock("form_widget_simple", $context, $blocks);
                echo "
    ";
            }
        } else {
            // line 337
            echo "    ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("class" => (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : (""))));
            // line 338
            echo "    ";
            ob_start();
            // line 339
            echo "    ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "hour", array()), 'widget', array("horizontal_input_wrapper_class" => ((array_key_exists("horizontal_input_wrapper_class", $context)) ? (_twig_default_filter((isset($context["horizontal_input_wrapper_class"]) ? $context["horizontal_input_wrapper_class"] : null), "col-sm-2")) : ("col-sm-2"))));
            echo "
    ";
            // line 340
            if ((isset($context["with_minutes"]) ? $context["with_minutes"] : null)) {
                // line 341
                echo "        ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "minute", array()), 'widget', array("horizontal_input_wrapper_class" => ((array_key_exists("horizontal_input_wrapper_class", $context)) ? (_twig_default_filter((isset($context["horizontal_input_wrapper_class"]) ? $context["horizontal_input_wrapper_class"] : null), "col-sm-2")) : ("col-sm-2"))));
                echo "
    ";
            }
            // line 343
            echo "    ";
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : null)) {
                // line 344
                echo "        :";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "second", array()), 'widget', array("horizontal_input_wrapper_class" => ((array_key_exists("horizontal_input_wrapper_class", $context)) ? (_twig_default_filter((isset($context["horizontal_input_wrapper_class"]) ? $context["horizontal_input_wrapper_class"] : null), "col-sm-2")) : ("col-sm-2"))));
                echo "
    ";
            }
            // line 346
            echo "    ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 351
    public function block_datetime_widget($context, array $blocks = array())
    {
        // line 352
        ob_start();
        // line 353
        echo "    ";
        if (((isset($context["widget"]) ? $context["widget"] : null) == "single_text")) {
            // line 354
            echo "        ";
            if (array_key_exists("datetimepicker", $context)) {
                // line 355
                echo "            ";
                $context["widget_addon_icon"] = (($this->getAttribute((isset($context["widget_addon_append"]) ? $context["widget_addon_append"] : null), "icon", array(), "any", true, true)) ? ($this->getAttribute((isset($context["widget_addon_append"]) ? $context["widget_addon_append"] : null), "icon", array())) : ("th"));
                // line 356
                echo "            <div ";
                if ($this->getAttribute((isset($context["datetimepicker"]) ? $context["datetimepicker"] : null), "attr", array(), "any", true, true)) {
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["datetimepicker"]) ? $context["datetimepicker"] : null), "attr", array()));
                    foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                        echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                        echo "=\"";
                        echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                        echo "\" ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                }
                echo " data-provider=\"datetimepicker\" class=\"input-group date\" data-date=\"";
                if ((isset($context["value"]) ? $context["value"] : null)) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "Y-m-d H:i"), "html", null, true);
                }
                echo "\" data-link-field=\"";
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                echo "\" data-link-format=\"yyyy-mm-dd hh:ii\">
                <input type=\"hidden\" value=\"";
                // line 357
                if ((isset($context["value"]) ? $context["value"] : null)) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "Y-m-d H:i"), "html", null, true);
                }
                echo "\" ";
                $this->displayBlock("widget_attributes", $context, $blocks);
                echo ">
                ";
                // line 358
                if ((array_key_exists("widget_reset_icon", $context) && ((isset($context["widget_reset_icon"]) ? $context["widget_reset_icon"] : null) == true))) {
                    // line 359
                    echo "                    <span class=\"input-group-addon\">";
                    echo $this->env->getExtension('mopa_bootstrap_icon')->renderIcon($this->env, "remove");
                    echo "</span>
                ";
                }
                // line 361
                echo "                ";
                // line 362
                echo "                ";
                $context["id"] = ((isset($context["id"]) ? $context["id"] : null) . "_mopa_picker_display");
                // line 363
                echo "                ";
                $context["full_name"] = null;
                // line 364
                echo "                ";
                $context["type"] = "text";
                // line 365
                echo "                ";
                $this->displayBlock("form_widget_simple", $context, $blocks);
                echo "
                <span class=\"input-group-addon\">";
                // line 366
                echo $this->env->getExtension('mopa_bootstrap_icon')->renderIcon($this->env, (isset($context["widget_addon_icon"]) ? $context["widget_addon_icon"] : null));
                echo "</span>
            </div>
        ";
            } else {
                // line 369
                echo "            ";
                $this->displayBlock("form_widget_simple", $context, $blocks);
                echo "
        ";
            }
            // line 371
            echo "    ";
        } else {
            // line 372
            echo "            ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("class" => (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : (""))));
            // line 373
            echo "            <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
                ";
            // line 374
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "date", array()), 'errors');
            echo "
                ";
            // line 375
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "time", array()), 'errors');
            echo "
                ";
            // line 376
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "date", array()), 'widget', array("attr" => array("class" => (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_class", array()), "")) : (""))), "horizontal_input_wrapper_class" => ((array_key_exists("horizontal_input_wrapper_class", $context)) ? (_twig_default_filter((isset($context["horizontal_input_wrapper_class"]) ? $context["horizontal_input_wrapper_class"] : null), "col-sm-3")) : ("col-sm-3"))));
            echo "
                ";
            // line 377
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "time", array()), 'widget', array("attr" => array("class" => (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_class", array()), "")) : (""))), "horizontal_input_wrapper_class" => ((array_key_exists("horizontal_input_wrapper_class", $context)) ? (_twig_default_filter((isset($context["horizontal_input_wrapper_class"]) ? $context["horizontal_input_wrapper_class"] : null), "col-sm-2")) : ("col-sm-2"))));
            echo "
            </div>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 383
    public function block_percent_widget($context, array $blocks = array())
    {
        // line 384
        ob_start();
        // line 385
        echo "    ";
        $context["widget_addon_append"] = twig_array_merge((isset($context["widget_addon_append"]) ? $context["widget_addon_append"] : null), array("text" => (($this->getAttribute((isset($context["widget_addon_append"]) ? $context["widget_addon_append"] : null), "text", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["widget_addon_append"]) ? $context["widget_addon_append"] : null), "text", array()), "%")) : ("%"))));
        // line 386
        echo "    ";
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 390
    public function block_money_widget($context, array $blocks = array())
    {
        // line 391
        ob_start();
        // line 392
        echo "    ";
        $context["widget_addon_prepend"] = ((((((isset($context["widget_addon_prepend"]) ? $context["widget_addon_prepend"] : null) != false) || ((isset($context["widget_addon_prepend"]) ? $context["widget_addon_prepend"] : null) == null)) && ((isset($context["money_pattern"]) ? $context["money_pattern"] : null) != "{{ widget }}"))) ? (array("text" => twig_replace_filter((isset($context["money_pattern"]) ? $context["money_pattern"] : null), array("{{ widget }}" => "")))) : (((array_key_exists("widget_addon_prepend", $context)) ? (_twig_default_filter((isset($context["widget_addon_prepend"]) ? $context["widget_addon_prepend"] : null), null)) : (null))));
        // line 393
        echo "    ";
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 397
    public function block_file_widget($context, array $blocks = array())
    {
        // line 398
        ob_start();
        // line 399
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : null), "file")) : ("file"));
        // line 400
        echo "    ";
        if ( !(null === ((array_key_exists("widget_addon_prepend", $context)) ? (_twig_default_filter((isset($context["widget_addon_prepend"]) ? $context["widget_addon_prepend"] : null), null)) : (null)))) {
            // line 401
            echo "        ";
            $context["widget_addon"] = (isset($context["widget_addon_prepend"]) ? $context["widget_addon_prepend"] : null);
            // line 402
            echo "        ";
            $this->displayBlock("widget_addon", $context, $blocks);
            echo "
    ";
        }
        // line 404
        echo "<input type=\"";
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
        echo "\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo "/>
";
        // line 405
        if ((((isset($context["type"]) ? $context["type"] : null) != "hidden") &&  !(null === (($this->getAttribute((isset($context["widget_addon"]) ? $context["widget_addon"] : null), "type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["widget_addon"]) ? $context["widget_addon"] : null), "type", array()), null)) : (null))))) {
            // line 406
            echo "    ";
            if ( !(null === ((array_key_exists("widget_addon_append", $context)) ? (_twig_default_filter((isset($context["widget_addon_append"]) ? $context["widget_addon_append"] : null), null)) : (null)))) {
                // line 407
                echo "        ";
                $context["widget_addon"] = (isset($context["widget_addon_append"]) ? $context["widget_addon_append"] : null);
                // line 408
                echo "        ";
                $this->displayBlock("widget_addon", $context, $blocks);
                echo "
    ";
            }
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 416
    public function block_form_legend($context, array $blocks = array())
    {
        // line 417
        ob_start();
        // line 418
        echo "    ";
        if (twig_test_empty((isset($context["label"]) ? $context["label"] : null))) {
            // line 419
            if ((array_key_exists("label_format", $context) &&  !twig_test_empty((isset($context["label_format"]) ? $context["label_format"] : null)))) {
                // line 420
                $context["label"] = twig_replace_filter((isset($context["label_format"]) ? $context["label_format"] : null), array("%name%" =>                 // line 421
(isset($context["name"]) ? $context["name"] : null), "%id%" =>                 // line 422
(isset($context["id"]) ? $context["id"] : null)));
            } else {
                // line 425
                $context["label"] = $this->env->getExtension('form')->humanize((isset($context["name"]) ? $context["name"] : null));
            }
        }
        // line 428
        echo "    <";
        echo twig_escape_filter($this->env, (isset($context["legend_tag"]) ? $context["legend_tag"] : null), "html", null, true);
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : null), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null)), "html", null, true);
        echo "</";
        echo twig_escape_filter($this->env, (isset($context["legend_tag"]) ? $context["legend_tag"] : null), "html", null, true);
        echo ">
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 432
    public function block_form_label($context, array $blocks = array())
    {
        // line 433
        if ((!twig_in_filter("checkbox", (isset($context["block_prefixes"]) ? $context["block_prefixes"] : null)) || twig_in_filter((isset($context["widget_checkbox_label"]) ? $context["widget_checkbox_label"] : null), array(0 => "label", 1 => "both")))) {
            // line 434
            ob_start();
            // line 435
            echo "    ";
            if ( !((isset($context["label"]) ? $context["label"] : null) === false)) {
                // line 436
                echo "        ";
                if (twig_test_empty((isset($context["label"]) ? $context["label"] : null))) {
                    // line 437
                    if ((array_key_exists("label_format", $context) &&  !twig_test_empty((isset($context["label_format"]) ? $context["label_format"] : null)))) {
                        // line 438
                        $context["label"] = twig_replace_filter((isset($context["label_format"]) ? $context["label_format"] : null), array("%name%" =>                         // line 439
(isset($context["name"]) ? $context["name"] : null), "%id%" =>                         // line 440
(isset($context["id"]) ? $context["id"] : null)));
                    } else {
                        // line 443
                        $context["label"] = $this->env->getExtension('form')->humanize((isset($context["name"]) ? $context["name"] : null));
                    }
                }
                // line 446
                echo "        ";
                if ( !(isset($context["compound"]) ? $context["compound"] : null)) {
                    // line 447
                    echo "            ";
                    $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : null), array("for" => (isset($context["id"]) ? $context["id"] : null)));
                    // line 448
                    echo "        ";
                }
                // line 449
                echo "        ";
                $context["label_attr_class"] = "";
                // line 450
                echo "        ";
                if ((isset($context["horizontal"]) ? $context["horizontal"] : null)) {
                    // line 451
                    echo "            ";
                    $context["label_attr_class"] = (("control-label " . (isset($context["label_attr_class"]) ? $context["label_attr_class"] : null)) . (isset($context["horizontal_label_class"]) ? $context["horizontal_label_class"] : null));
                    // line 452
                    echo "        ";
                }
                // line 453
                echo "        ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : null), array("class" => trim(((((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " ") . (isset($context["label_attr_class"]) ? $context["label_attr_class"] : null)) . (((isset($context["required"]) ? $context["required"] : null)) ? (" required") : (" optional"))))));
                // line 454
                echo "        <label";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : null));
                foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                    echo " ";
                    echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                    echo "\"";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo ">
        ";
                // line 455
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : null), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null)), "html", null, true);
                // line 456
                $this->displayBlock("label_asterisk", $context, $blocks);
                echo "
        ";
                // line 457
                if (((twig_in_filter("collection", $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "block_prefixes", array())) && ((array_key_exists("widget_add_btn", $context)) ? (_twig_default_filter((isset($context["widget_add_btn"]) ? $context["widget_add_btn"] : null), null)) : (null))) && ($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "allow_add", array()) == true))) {
                    // line 458
                    echo "            &nbsp;";
                    $this->displayBlock("form_widget_add_btn", $context, $blocks);
                    echo "
        ";
                }
                // line 460
                echo "        ";
                if ((isset($context["help_label"]) ? $context["help_label"] : null)) {
                    // line 461
                    echo "            ";
                    $this->displayBlock("help_label", $context, $blocks);
                    echo "
        ";
                }
                // line 463
                echo "        ";
                if ($this->getAttribute((isset($context["help_label_tooltip"]) ? $context["help_label_tooltip"] : null), "title", array())) {
                    // line 464
                    echo "            ";
                    $this->displayBlock("help_label_tooltip", $context, $blocks);
                    echo "
        ";
                }
                // line 466
                echo "        ";
                if ($this->getAttribute((isset($context["help_label_popover"]) ? $context["help_label_popover"] : null), "title", array())) {
                    // line 467
                    echo "            ";
                    $this->displayBlock("help_label_popover", $context, $blocks);
                    echo "
        ";
                }
                // line 469
                echo "        </label>
    ";
            }
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        }
    }

    // line 475
    public function block_help_label($context, array $blocks = array())
    {
        // line 476
        echo "    <span class=\"help-block\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["help_label"]) ? $context["help_label"] : null), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null)), "html", null, true);
        echo "</span>
";
    }

    // line 479
    public function block_help_label_tooltip($context, array $blocks = array())
    {
        // line 480
        echo "    <span class=\"help-block\">
        <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"";
        // line 481
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["help_label_tooltip"]) ? $context["help_label_tooltip"] : null), "placement", array()), "html", null, true);
        echo "\" data-title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["help_label_tooltip"]) ? $context["help_label_tooltip"] : null), "title", array()), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null)), "html", null, true);
        echo "\">
            ";
        // line 482
        if ( !($this->getAttribute((isset($context["help_label_tooltip"]) ? $context["help_label_tooltip"] : null), "icon", array()) === false)) {
            // line 483
            echo "                ";
            echo $this->env->getExtension('mopa_bootstrap_icon')->renderIcon($this->env, $this->getAttribute((isset($context["help_label_tooltip"]) ? $context["help_label_tooltip"] : null), "icon", array()));
            echo "
            ";
        }
        // line 485
        echo "            ";
        if ( !($this->getAttribute((isset($context["help_label_tooltip"]) ? $context["help_label_tooltip"] : null), "text", array()) === null)) {
            // line 486
            echo "                ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["help_label_tooltip"]) ? $context["help_label_tooltip"] : null), "text", array()), "html", null, true);
            echo "
            ";
        }
        // line 488
        echo "        </a>
    </span>
";
    }

    // line 492
    public function block_help_block_tooltip($context, array $blocks = array())
    {
        // line 493
        echo "    ";
        $context["help_label_tooltip"] = (isset($context["help_block_tooltip"]) ? $context["help_block_tooltip"] : null);
        // line 494
        echo "    ";
        $this->displayBlock("help_label_tooltip", $context, $blocks);
        echo "
";
    }

    // line 497
    public function block_help_label_popover($context, array $blocks = array())
    {
        // line 498
        echo "    <span class=\"help-block\">
        <a href=\"#\" data-toggle=\"popover\" data-trigger=\"hover\" data-placement=\"";
        // line 499
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["help_label_popover"]) ? $context["help_label_popover"] : null), "placement", array()), "html", null, true);
        echo "\" data-title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["help_label_popover"]) ? $context["help_label_popover"] : null), "title", array()), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null)), "html", null, true);
        echo "\" data-content=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["help_label_popover"]) ? $context["help_label_popover"] : null), "content", array()), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null)), "html", null, true);
        echo "\" data-html=\"true\">
            ";
        // line 500
        if ( !($this->getAttribute((isset($context["help_label_popover"]) ? $context["help_label_popover"] : null), "icon", array()) === false)) {
            // line 501
            echo "                ";
            echo $this->env->getExtension('mopa_bootstrap_icon')->renderIcon($this->env, $this->getAttribute((isset($context["help_label_popover"]) ? $context["help_label_popover"] : null), "icon", array()));
            echo "
            ";
        }
        // line 503
        echo "            ";
        if ( !($this->getAttribute((isset($context["help_label_popover"]) ? $context["help_label_popover"] : null), "text", array()) === null)) {
            // line 504
            echo "                ";
            echo $this->getAttribute((isset($context["help_label_popover"]) ? $context["help_label_popover"] : null), "text", array());
            echo "
            ";
        }
        // line 506
        echo "        </a>
    </span>
";
    }

    // line 510
    public function block_help_block_popover($context, array $blocks = array())
    {
        // line 511
        echo "    ";
        $context["help_label_popover"] = (isset($context["help_block_popover"]) ? $context["help_block_popover"] : null);
        // line 512
        echo "    ";
        $this->displayBlock("help_label_popover", $context, $blocks);
        echo "
";
    }

    // line 515
    public function block_form_actions_widget($context, array $blocks = array())
    {
        // line 516
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
            // line 517
            echo "        ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["button"], 'widget');
            echo "&nbsp; ";
            // line 518
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 522
    public function block_form_actions_row($context, array $blocks = array())
    {
        // line 523
        echo "    ";
        $this->displayBlock("button_row", $context, $blocks);
        echo "
";
    }

    // line 526
    public function block_form_rows_visible($context, array $blocks = array())
    {
        // line 527
        ob_start();
        // line 528
        echo "     ";
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : null)) > 0)) {
            // line 529
            echo "        <div class=\"symfony-form-errors\">
            ";
            // line 530
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
            echo "
        </div>
    ";
        }
        // line 533
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 534
            echo "        ";
            if (!twig_in_filter("hidden", $this->getAttribute($this->getAttribute($context["child"], "vars", array()), "block_prefixes", array()))) {
                echo " ";
                // line 535
                echo "            ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'row');
                echo "
        ";
            }
            // line 537
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 541
    public function block_form_row($context, array $blocks = array())
    {
        // line 542
        ob_start();
        // line 543
        echo "    ";
        if (twig_in_filter("tab", $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "block_prefixes", array()))) {
            // line 544
            echo "        ";
            $this->displayBlock("form_tab", $context, $blocks);
            echo "
    ";
        } elseif ((        // line 545
(isset($context["embed_form"]) ? $context["embed_form"] : null) === true)) {
            // line 546
            echo "        ";
            if ( !twig_test_empty((isset($context["widget_prefix"]) ? $context["widget_prefix"] : null))) {
                echo $this->env->getExtension('translator')->trans((isset($context["widget_prefix"]) ? $context["widget_prefix"] : null), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null));
            }
            echo " ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget', $context);
            echo " ";
            if ( !twig_test_empty((isset($context["widget_suffix"]) ? $context["widget_suffix"] : null))) {
                echo $this->env->getExtension('translator')->trans((isset($context["widget_suffix"]) ? $context["widget_suffix"] : null), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null));
            }
            // line 547
            echo "    ";
        } else {
            // line 548
            echo "        ";
            $this->displayBlock("widget_form_group_start", $context, $blocks);
            echo "

        ";
            // line 550
            $context["show_horizontal_wrapper"] = ((isset($context["horizontal"]) ? $context["horizontal"] : null) &&  !(( !(null === $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", array())) && twig_in_filter("collection", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", array()), "vars", array()), "block_prefixes", array()))) && ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", array()), "vars", array()), "horizontal_wrap_children", array()) === false)));
            // line 551
            echo "
        ";
            // line 552
            if (((isset($context["horizontal"]) ? $context["horizontal"] : null) &&  !(isset($context["label_render"]) ? $context["label_render"] : null))) {
                // line 553
                echo "            ";
                $context["horizontal_input_wrapper_class"] = (((isset($context["horizontal_input_wrapper_class"]) ? $context["horizontal_input_wrapper_class"] : null) . " ") . (isset($context["horizontal_label_offset_class"]) ? $context["horizontal_label_offset_class"] : null));
                // line 554
                echo "        ";
            }
            // line 555
            echo "
        ";
            // line 556
            if ((isset($context["show_horizontal_wrapper"]) ? $context["show_horizontal_wrapper"] : null)) {
                // line 557
                echo "        <div class=\"";
                echo twig_escape_filter($this->env, (isset($context["horizontal_input_wrapper_class"]) ? $context["horizontal_input_wrapper_class"] : null), "html", null, true);
                echo "\">
        ";
            }
            // line 559
            echo "
        ";
            // line 560
            if ( !twig_test_empty((isset($context["widget_prefix"]) ? $context["widget_prefix"] : null))) {
                echo $this->env->getExtension('translator')->trans((isset($context["widget_prefix"]) ? $context["widget_prefix"] : null), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null));
            }
            echo " ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget', $context);
            echo " ";
            if ( !twig_test_empty((isset($context["widget_suffix"]) ? $context["widget_suffix"] : null))) {
                echo $this->env->getExtension('translator')->trans((isset($context["widget_suffix"]) ? $context["widget_suffix"] : null), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null));
            }
            // line 561
            echo "
        ";
            // line 562
            $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : null), "text")) : ("text"));
            // line 563
            echo "        ";
            if (((isset($context["type"]) ? $context["type"] : null) != "hidden")) {
                // line 564
                echo "        ";
                $this->displayBlock("form_message", $context, $blocks);
                echo "
        ";
            }
            // line 566
            echo "
        ";
            // line 567
            if ((isset($context["show_horizontal_wrapper"]) ? $context["show_horizontal_wrapper"] : null)) {
                // line 568
                echo "        </div>
        ";
            }
            // line 570
            echo "
        ";
            // line 571
            if (((( !(null === $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", array())) && twig_in_filter("collection", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", array()), "vars", array()), "block_prefixes", array()))) && ((array_key_exists("widget_remove_btn", $context)) ? (_twig_default_filter((isset($context["widget_remove_btn"]) ? $context["widget_remove_btn"] : null), null)) : (null))) && (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", array(), "any", false, true), "vars", array(), "any", false, true), "allow_delete", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", array(), "any", false, true), "vars", array(), "any", false, true), "allow_delete", array()), false)) : (false)))) {
                // line 572
                echo "            ";
                $this->displayBlock("form_widget_remove_btn", $context, $blocks);
                echo "
        ";
            }
            // line 574
            $this->displayBlock("widget_form_group_end", $context, $blocks);
            echo "
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 581
    public function block_form_message($context, array $blocks = array())
    {
        // line 582
        ob_start();
        // line 583
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "

    ";
        // line 585
        if (((!twig_in_filter("checkbox", (isset($context["block_prefixes"]) ? $context["block_prefixes"] : null)) || ((isset($context["widget_checkbox_label"]) ? $context["widget_checkbox_label"] : null) != "label")) && (isset($context["help_block"]) ? $context["help_block"] : null))) {
            // line 586
            echo "        ";
            $this->displayBlock("form_help", $context, $blocks);
            echo "
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 593
    public function block_form_help($context, array $blocks = array())
    {
        // line 594
        ob_start();
        // line 595
        echo "    ";
        if ((isset($context["help_block"]) ? $context["help_block"] : null)) {
            echo "<p class=\"help-block\">";
            echo $this->env->getExtension('translator')->trans((isset($context["help_block"]) ? $context["help_block"] : null), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null));
            echo "</p>";
        }
        // line 596
        echo "    ";
        if ($this->getAttribute((isset($context["help_block_tooltip"]) ? $context["help_block_tooltip"] : null), "title", array())) {
            // line 597
            echo "        &nbsp;";
            $this->displayBlock("help_block_tooltip", $context, $blocks);
            echo "
    ";
        }
        // line 599
        echo "    ";
        if ($this->getAttribute((isset($context["help_block_popover"]) ? $context["help_block_popover"] : null), "title", array())) {
            // line 600
            echo "        &nbsp;";
            $this->displayBlock("help_block_popover", $context, $blocks);
            echo "
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 605
    public function block_form_widget_add_btn($context, array $blocks = array())
    {
        // line 606
        ob_start();
        // line 607
        echo "    ";
        if (((array_key_exists("widget_add_btn", $context)) ? (_twig_default_filter((isset($context["widget_add_btn"]) ? $context["widget_add_btn"] : null), null)) : (null))) {
            // line 608
            echo "        ";
            $context["button_type"] = "add";
            // line 609
            echo "        ";
            $context["button_values"] = (isset($context["widget_add_btn"]) ? $context["widget_add_btn"] : null);
            // line 610
            echo "        ";
            $this->displayBlock("collection_button", $context, $blocks);
            echo "
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 615
    public function block_form_widget_remove_btn($context, array $blocks = array())
    {
        // line 616
        ob_start();
        // line 617
        echo "    ";
        if (($this->getAttribute((isset($context["widget_remove_btn"]) ? $context["widget_remove_btn"] : null), "wrapper_div", array(), "any", true, true) &&  !($this->getAttribute((isset($context["widget_remove_btn"]) ? $context["widget_remove_btn"] : null), "wrapper_div", array()) === false))) {
            // line 618
            echo "        <div class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["widget_remove_btn"]) ? $context["widget_remove_btn"] : null), "wrapper_div", array()), "class", array()), "html", null, true);
            echo "\">
    ";
        }
        // line 620
        echo "    ";
        if (($this->getAttribute((isset($context["widget_remove_btn"]) ? $context["widget_remove_btn"] : null), "horizontal_wrapper_div", array(), "any", true, true) &&  !($this->getAttribute((isset($context["widget_remove_btn"]) ? $context["widget_remove_btn"] : null), "horizontal_wrapper_div", array()) === false))) {
            // line 621
            echo "        <div class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["widget_remove_btn"]) ? $context["widget_remove_btn"] : null), "horizontal_wrapper_div", array()), "class", array()), "html", null, true);
            echo "\">
    ";
        }
        // line 623
        echo "    ";
        if (((array_key_exists("widget_remove_btn", $context)) ? (_twig_default_filter((isset($context["widget_remove_btn"]) ? $context["widget_remove_btn"] : null), null)) : (null))) {
            // line 624
            echo "    ";
            $context["button_type"] = "remove";
            // line 625
            echo "    ";
            $context["button_values"] = (isset($context["widget_remove_btn"]) ? $context["widget_remove_btn"] : null);
            // line 626
            echo "    ";
            $this->displayBlock("collection_button", $context, $blocks);
            echo "
    ";
        }
        // line 628
        echo "    ";
        if (($this->getAttribute((isset($context["widget_remove_btn"]) ? $context["widget_remove_btn"] : null), "horizontal_wrapper_div", array(), "any", true, true) &&  !($this->getAttribute((isset($context["widget_remove_btn"]) ? $context["widget_remove_btn"] : null), "horizontal_wrapper_div", array()) === false))) {
            // line 629
            echo "        </div>
    ";
        }
        // line 631
        echo "    ";
        if (($this->getAttribute((isset($context["widget_remove_btn"]) ? $context["widget_remove_btn"] : null), "wrapper_div", array(), "any", true, true) &&  !($this->getAttribute((isset($context["widget_remove_btn"]) ? $context["widget_remove_btn"] : null), "wrapper_div", array()) === false))) {
            // line 632
            echo "        </div>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 637
    public function block_collection_button($context, array $blocks = array())
    {
        // line 638
        echo "<a ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["button_values"]) ? $context["button_values"] : null), "attr", array()));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " data-collection-";
        echo twig_escape_filter($this->env, (isset($context["button_type"]) ? $context["button_type"] : null), "html", null, true);
        echo "-btn=\".";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "id", array(), "array"), "html", null, true);
        echo "_form_group\">
";
        // line 639
        if ( !(null === $this->getAttribute((isset($context["button_values"]) ? $context["button_values"] : null), "icon", array()))) {
            // line 640
            echo "    ";
            echo $this->env->getExtension('mopa_bootstrap_icon')->renderIcon($this->env, $this->getAttribute((isset($context["button_values"]) ? $context["button_values"] : null), "icon", array()), (($this->getAttribute((isset($context["button_values"]) ? $context["button_values"] : null), "icon_inverted", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["button_values"]) ? $context["button_values"] : null), "icon_inverted", array()), false)) : (false)));
            echo "
";
        }
        // line 642
        if ($this->getAttribute((isset($context["button_values"]) ? $context["button_values"] : null), "label", array(), "any", true, true)) {
            // line 643
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["button_values"]) ? $context["button_values"] : null), "label", array()), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null)), "html", null, true);
            echo "
";
        }
        // line 645
        echo "</a>

";
    }

    // line 649
    public function block_label_asterisk($context, array $blocks = array())
    {
        // line 650
        if ((isset($context["required"]) ? $context["required"] : null)) {
            // line 651
            if ((isset($context["render_required_asterisk"]) ? $context["render_required_asterisk"] : null)) {
                echo "&nbsp;<span class=\"asterisk\">*</span>";
            }
        } else {
            // line 653
            if ((isset($context["render_optional_text"]) ? $context["render_optional_text"] : null)) {
                echo "&nbsp;<span>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("(optional)", array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null)), "html", null, true);
                echo "</span>";
            }
        }
    }

    // line 657
    public function block_widget_addon($context, array $blocks = array())
    {
        // line 658
        ob_start();
        // line 659
        $context["widget_addon_icon"] = (($this->getAttribute((isset($context["widget_addon"]) ? $context["widget_addon"] : null), "icon", array(), "any", true, true)) ? ($this->getAttribute((isset($context["widget_addon"]) ? $context["widget_addon"] : null), "icon", array())) : (null));
        // line 660
        $context["widget_addon_icon_inverted"] = (($this->getAttribute((isset($context["widget_addon"]) ? $context["widget_addon"] : null), "icon_inverted", array(), "any", true, true)) ? ($this->getAttribute((isset($context["widget_addon"]) ? $context["widget_addon"] : null), "icon_inverted", array())) : (false));
        // line 661
        echo "    <span class=\"input-group-addon\">";
        echo (((($this->getAttribute((isset($context["widget_addon"]) ? $context["widget_addon"] : null), "text", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["widget_addon"]) ? $context["widget_addon"] : null), "text", array()), false)) : (false))) ? ($this->env->getExtension('translator')->trans($this->getAttribute((isset($context["widget_addon"]) ? $context["widget_addon"] : null), "text", array()), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null))) : ($this->env->getExtension('mopa_bootstrap_icon')->renderIcon($this->env, (isset($context["widget_addon_icon"]) ? $context["widget_addon_icon"] : null), (isset($context["widget_addon_icon_inverted"]) ? $context["widget_addon_icon_inverted"] : null))));
        echo "</span>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 665
    public function block_widget_btns($context, array $blocks = array())
    {
        // line 666
        ob_start();
        // line 667
        echo "    <span class=\"input-group-btn\">
    ";
        // line 668
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["widget_btns"]) ? $context["widget_btns"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["widget_btn"]) {
            // line 669
            echo "        <button type=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute($context["widget_btn"], "type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["widget_btn"], "type", array()), "button")) : ("button")), "html", null, true);
            echo "\" class=\"";
            echo twig_escape_filter($this->env, ("btn " . (($this->getAttribute($context["widget_btn"], "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["widget_btn"], "class", array()), "btn-default")) : ("btn-default"))), "html", null, true);
            echo "\">
        ";
            // line 670
            if ( !twig_test_empty($this->getAttribute($context["widget_btn"], "icon", array()))) {
                // line 671
                echo "                ";
                echo $this->env->getExtension('mopa_bootstrap_icon')->renderIcon($this->env, $this->getAttribute($context["widget_btn"], "icon", array()), (($this->getAttribute($context["widget_btn"], "icon_inverted", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["widget_btn"], "icon_inverted", array()), false)) : (false)));
                echo "
        ";
            }
            // line 673
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((($this->getAttribute($context["widget_btn"], "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["widget_btn"], "label", array()), "")) : ("")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null)), "html", null, true);
            echo "</button>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['widget_btn'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 675
        echo "    </span>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 681
    public function block_form_errors($context, array $blocks = array())
    {
        // line 682
        ob_start();
        // line 683
        if ((isset($context["error_delay"]) ? $context["error_delay"] : null)) {
            // line 684
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : null));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 685
                echo "        ";
                if (($this->getAttribute($context["loop"], "index", array()) == 1)) {
                    // line 686
                    echo "            ";
                    if ($this->getAttribute($context["child"], "set", array(0 => "errors", 1 => (isset($context["errors"]) ? $context["errors"] : null)), "method")) {
                    }
                    // line 687
                    echo "        ";
                }
                // line 688
                echo "    ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 690
            echo "    ";
            if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : null)) > 0)) {
                // line 691
                echo "        ";
                if (($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", array()) == null)) {
                    // line 692
                    echo "            ";
                    $context["__internal_a8a81f760b7373e9b469a27a50d1db926a026b2fe5cfaa4bd9fa0cfaa980055d"] = $this->loadTemplate("MopaBootstrapBundle::flash.html.twig", "MopaBootstrapBundle:Form:fields.html.twig", 692);
                    // line 693
                    echo "            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                        // line 694
                        echo "                ";
                        echo $context["__internal_a8a81f760b7373e9b469a27a50d1db926a026b2fe5cfaa4bd9fa0cfaa980055d"]->getflash("danger", $this->getAttribute($context["error"], "message", array()));
                        echo "
            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 696
                    echo "        ";
                } else {
                    // line 697
                    echo "            <span class=\"help-";
                    $this->displayBlock("error_type", $context, $blocks);
                    echo "\">
            ";
                    // line 698
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                        // line 699
                        echo "                ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                        echo " <br>
            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 701
                    echo "            </span>
        ";
                }
                // line 703
                echo "    ";
            }
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 710
    public function block_error_type($context, array $blocks = array())
    {
        // line 711
        ob_start();
        // line 712
        if ((isset($context["error_type"]) ? $context["error_type"] : null)) {
            // line 713
            echo "    ";
            echo twig_escape_filter($this->env, (isset($context["error_type"]) ? $context["error_type"] : null), "html", null, true);
            echo "
";
        } elseif (($this->getAttribute(        // line 714
(isset($context["form"]) ? $context["form"] : null), "parent", array()) == null)) {
            // line 715
            echo "    ";
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array(), "any", false, true), "error_type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array(), "any", false, true), "error_type", array()), "inline")) : ("inline")), "html", null, true);
            echo "
";
        } else {
            // line 717
            echo "    block
";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 724
    public function block_widget_form_group_start($context, array $blocks = array())
    {
        // line 725
        if ((((array_key_exists("widget_form_group", $context)) ? (_twig_default_filter((isset($context["widget_form_group"]) ? $context["widget_form_group"] : null), false)) : (false)) || ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", array()) == null))) {
            // line 726
            echo "    ";
            if (( !(null === $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", array())) && twig_in_filter("collection", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", array()), "vars", array()), "block_prefixes", array())))) {
                echo " ";
                // line 727
                echo "        ";
                if ( !(isset($context["omit_collection_item"]) ? $context["omit_collection_item"] : null)) {
                    // line 728
                    echo "            ";
                    // line 729
                    echo "        \t";
                    $context["widget_form_group_attr"] = twig_array_merge((isset($context["widget_form_group_attr"]) ? $context["widget_form_group_attr"] : null), array("class" => "collection-item"));
                    // line 730
                    echo "        ";
                }
                // line 731
                echo "    ";
            }
            // line 732
            echo "    ";
            if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : null)) > 0)) {
                // line 733
                echo "\t    ";
                // line 734
                echo "\t    ";
                $context["widget_form_group_attr"] = twig_array_merge((isset($context["widget_form_group_attr"]) ? $context["widget_form_group_attr"] : null), array("class" => ((($this->getAttribute((isset($context["widget_form_group_attr"]) ? $context["widget_form_group_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["widget_form_group_attr"]) ? $context["widget_form_group_attr"] : null), "class", array()), "")) : ("")) . " has-error")));
                // line 735
                echo "    ";
            }
            // line 736
            echo "    ";
            if (($this->getAttribute((isset($context["help_widget_popover"]) ? $context["help_widget_popover"] : null), "selector", array()) === null)) {
                // line 737
                echo "        ";
                $context["help_widget_popover"] = twig_array_merge((isset($context["help_widget_popover"]) ? $context["help_widget_popover"] : null), array("selector" => ("#" . (isset($context["id"]) ? $context["id"] : null))));
                // line 738
                echo "    ";
            }
            // line 739
            echo "    <div";
            if ( !($this->getAttribute((isset($context["help_widget_popover"]) ? $context["help_widget_popover"] : null), "title", array()) === null)) {
                $this->displayBlock("help_widget_popover", $context, $blocks);
            }
            echo " ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["widget_form_group_attr"]) ? $context["widget_form_group_attr"] : null));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">
    ";
            // line 741
            echo "    ";
            if (((((twig_length_filter($this->env, (isset($context["form"]) ? $context["form"] : null)) > 0) && ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", array()) != null)) && !twig_in_filter("field", $this->getAttribute($this->getAttribute(            // line 742
(isset($context["form"]) ? $context["form"] : null), "vars", array()), "block_prefixes", array()))) && !twig_in_filter("date", $this->getAttribute($this->getAttribute(            // line 743
(isset($context["form"]) ? $context["form"] : null), "vars", array()), "block_prefixes", array())))) {
                // line 744
                echo "        ";
                if ((isset($context["show_child_legend"]) ? $context["show_child_legend"] : null)) {
                    // line 745
                    echo "            ";
                    $this->displayBlock("form_legend", $context, $blocks);
                    echo "
        ";
                } elseif (                // line 746
(isset($context["label_render"]) ? $context["label_render"] : null)) {
                    // line 747
                    echo "            ";
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'label', (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : null), null)) : (null))) ? array() : array("label" => $_label_)));
                    echo "
        ";
                } else {
                    // line 749
                    echo "        ";
                }
                // line 750
                echo "    ";
            } else {
                // line 751
                echo "        ";
                if ((isset($context["label_render"]) ? $context["label_render"] : null)) {
                    // line 752
                    echo "            ";
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'label', (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : null), null)) : (null))) ? array() : array("label" => $_label_)));
                    echo "
        ";
                }
                // line 754
                echo "    ";
            }
        } else {
            // line 756
            echo "    ";
            if ((isset($context["label_render"]) ? $context["label_render"] : null)) {
                // line 757
                echo "        ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'label', (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : null), null)) : (null))) ? array() : array("label" => $_label_)));
                echo "
    ";
            }
        }
    }

    // line 762
    public function block_help_widget_popover($context, array $blocks = array())
    {
        // line 763
        echo " ";
        ob_start();
        // line 764
        echo " ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["help_widget_popover"]) ? $context["help_widget_popover"] : null));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 765
            echo " data-";
            echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["attrvalue"], array(), ((array_key_exists("domain", $context)) ? (_twig_default_filter((isset($context["domain"]) ? $context["domain"] : null), "messages")) : ("messages"))), "html", null, true);
            echo "\"
 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 767
        echo " ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 770
    public function block_widget_form_group_end($context, array $blocks = array())
    {
        // line 771
        ob_start();
        // line 772
        if ((((array_key_exists("widget_form_group", $context)) ? (_twig_default_filter((isset($context["widget_form_group"]) ? $context["widget_form_group"] : null), false)) : (false)) || ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", array()) == null))) {
            // line 773
            echo "    </div>
";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "MopaBootstrapBundle:Form:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  2470 => 773,  2468 => 772,  2466 => 771,  2463 => 770,  2458 => 767,  2447 => 765,  2442 => 764,  2439 => 763,  2436 => 762,  2427 => 757,  2424 => 756,  2420 => 754,  2414 => 752,  2411 => 751,  2408 => 750,  2405 => 749,  2399 => 747,  2397 => 746,  2392 => 745,  2389 => 744,  2387 => 743,  2386 => 742,  2384 => 741,  2364 => 739,  2361 => 738,  2358 => 737,  2355 => 736,  2352 => 735,  2349 => 734,  2347 => 733,  2344 => 732,  2341 => 731,  2338 => 730,  2335 => 729,  2333 => 728,  2330 => 727,  2326 => 726,  2324 => 725,  2321 => 724,  2314 => 717,  2308 => 715,  2306 => 714,  2301 => 713,  2299 => 712,  2297 => 711,  2294 => 710,  2287 => 703,  2283 => 701,  2274 => 699,  2270 => 698,  2265 => 697,  2262 => 696,  2253 => 694,  2248 => 693,  2245 => 692,  2242 => 691,  2239 => 690,  2224 => 688,  2221 => 687,  2217 => 686,  2214 => 685,  2196 => 684,  2194 => 683,  2192 => 682,  2189 => 681,  2183 => 675,  2174 => 673,  2168 => 671,  2166 => 670,  2159 => 669,  2155 => 668,  2152 => 667,  2150 => 666,  2147 => 665,  2139 => 661,  2137 => 660,  2135 => 659,  2133 => 658,  2130 => 657,  2121 => 653,  2116 => 651,  2114 => 650,  2111 => 649,  2105 => 645,  2099 => 643,  2097 => 642,  2091 => 640,  2089 => 639,  2069 => 638,  2066 => 637,  2059 => 632,  2056 => 631,  2052 => 629,  2049 => 628,  2043 => 626,  2040 => 625,  2037 => 624,  2034 => 623,  2028 => 621,  2025 => 620,  2019 => 618,  2016 => 617,  2014 => 616,  2011 => 615,  2002 => 610,  1999 => 609,  1996 => 608,  1993 => 607,  1991 => 606,  1988 => 605,  1979 => 600,  1976 => 599,  1970 => 597,  1967 => 596,  1960 => 595,  1958 => 594,  1955 => 593,  1946 => 586,  1944 => 585,  1938 => 583,  1936 => 582,  1933 => 581,  1925 => 574,  1919 => 572,  1917 => 571,  1914 => 570,  1910 => 568,  1908 => 567,  1905 => 566,  1899 => 564,  1896 => 563,  1894 => 562,  1891 => 561,  1881 => 560,  1878 => 559,  1872 => 557,  1870 => 556,  1867 => 555,  1864 => 554,  1861 => 553,  1859 => 552,  1856 => 551,  1854 => 550,  1848 => 548,  1845 => 547,  1834 => 546,  1832 => 545,  1827 => 544,  1824 => 543,  1822 => 542,  1819 => 541,  1810 => 537,  1804 => 535,  1800 => 534,  1795 => 533,  1789 => 530,  1786 => 529,  1783 => 528,  1781 => 527,  1778 => 526,  1771 => 523,  1768 => 522,  1760 => 518,  1756 => 517,  1751 => 516,  1748 => 515,  1741 => 512,  1738 => 511,  1735 => 510,  1729 => 506,  1723 => 504,  1720 => 503,  1714 => 501,  1712 => 500,  1704 => 499,  1701 => 498,  1698 => 497,  1691 => 494,  1688 => 493,  1685 => 492,  1679 => 488,  1673 => 486,  1670 => 485,  1664 => 483,  1662 => 482,  1656 => 481,  1653 => 480,  1650 => 479,  1643 => 476,  1640 => 475,  1632 => 469,  1626 => 467,  1623 => 466,  1617 => 464,  1614 => 463,  1608 => 461,  1605 => 460,  1599 => 458,  1597 => 457,  1593 => 456,  1591 => 455,  1575 => 454,  1572 => 453,  1569 => 452,  1566 => 451,  1563 => 450,  1560 => 449,  1557 => 448,  1554 => 447,  1551 => 446,  1547 => 443,  1544 => 440,  1543 => 439,  1542 => 438,  1540 => 437,  1537 => 436,  1534 => 435,  1532 => 434,  1530 => 433,  1527 => 432,  1515 => 428,  1511 => 425,  1508 => 422,  1507 => 421,  1506 => 420,  1504 => 419,  1501 => 418,  1499 => 417,  1496 => 416,  1486 => 408,  1483 => 407,  1480 => 406,  1478 => 405,  1471 => 404,  1465 => 402,  1462 => 401,  1459 => 400,  1457 => 399,  1455 => 398,  1452 => 397,  1444 => 393,  1441 => 392,  1439 => 391,  1436 => 390,  1428 => 386,  1425 => 385,  1423 => 384,  1420 => 383,  1411 => 377,  1407 => 376,  1403 => 375,  1399 => 374,  1394 => 373,  1391 => 372,  1388 => 371,  1382 => 369,  1376 => 366,  1371 => 365,  1368 => 364,  1365 => 363,  1362 => 362,  1360 => 361,  1354 => 359,  1352 => 358,  1344 => 357,  1321 => 356,  1318 => 355,  1315 => 354,  1312 => 353,  1310 => 352,  1307 => 351,  1300 => 346,  1294 => 344,  1291 => 343,  1285 => 341,  1283 => 340,  1278 => 339,  1275 => 338,  1272 => 337,  1265 => 334,  1259 => 331,  1254 => 330,  1251 => 329,  1248 => 328,  1245 => 327,  1243 => 326,  1237 => 324,  1235 => 323,  1229 => 322,  1208 => 321,  1205 => 320,  1202 => 319,  1200 => 318,  1198 => 317,  1195 => 316,  1187 => 310,  1185 => 309,  1184 => 308,  1183 => 307,  1182 => 306,  1179 => 305,  1176 => 304,  1169 => 301,  1163 => 298,  1158 => 297,  1155 => 296,  1152 => 295,  1149 => 294,  1147 => 293,  1141 => 291,  1139 => 290,  1133 => 289,  1112 => 288,  1109 => 287,  1106 => 286,  1104 => 285,  1102 => 284,  1099 => 283,  1094 => 280,  1090 => 278,  1087 => 277,  1084 => 276,  1080 => 274,  1074 => 272,  1068 => 270,  1065 => 269,  1062 => 268,  1060 => 267,  1047 => 266,  1040 => 264,  1026 => 263,  1023 => 262,  1020 => 261,  1017 => 260,  1014 => 259,  1011 => 258,  1008 => 257,  1005 => 256,  1001 => 254,  998 => 253,  994 => 252,  992 => 251,  989 => 250,  985 => 247,  982 => 244,  981 => 243,  980 => 242,  978 => 241,  975 => 240,  972 => 239,  969 => 238,  964 => 235,  960 => 233,  957 => 232,  951 => 231,  947 => 229,  945 => 228,  942 => 227,  936 => 225,  930 => 223,  928 => 222,  924 => 221,  908 => 220,  905 => 219,  902 => 218,  899 => 217,  896 => 216,  893 => 215,  890 => 214,  887 => 213,  884 => 212,  877 => 210,  873 => 209,  870 => 208,  865 => 207,  861 => 205,  858 => 204,  855 => 203,  852 => 202,  849 => 201,  846 => 200,  843 => 199,  840 => 198,  837 => 197,  828 => 191,  825 => 190,  816 => 188,  811 => 187,  808 => 186,  793 => 184,  790 => 183,  787 => 182,  785 => 181,  782 => 180,  779 => 179,  776 => 178,  774 => 177,  771 => 176,  769 => 175,  768 => 174,  767 => 173,  766 => 172,  764 => 171,  761 => 170,  758 => 169,  755 => 168,  752 => 167,  750 => 166,  747 => 165,  740 => 161,  724 => 160,  721 => 159,  718 => 158,  712 => 154,  701 => 150,  697 => 149,  693 => 148,  684 => 147,  681 => 146,  677 => 145,  672 => 144,  670 => 143,  667 => 142,  660 => 138,  658 => 137,  655 => 136,  649 => 132,  644 => 131,  642 => 130,  637 => 128,  634 => 127,  630 => 125,  628 => 124,  623 => 122,  620 => 121,  613 => 118,  611 => 117,  608 => 116,  605 => 115,  600 => 114,  595 => 113,  592 => 112,  590 => 111,  587 => 110,  580 => 105,  574 => 103,  571 => 102,  568 => 101,  562 => 99,  559 => 98,  556 => 97,  553 => 96,  547 => 94,  541 => 92,  538 => 91,  535 => 90,  532 => 89,  529 => 88,  526 => 87,  523 => 86,  517 => 84,  514 => 83,  511 => 82,  505 => 80,  502 => 79,  500 => 78,  497 => 77,  494 => 76,  491 => 75,  489 => 74,  486 => 73,  480 => 69,  474 => 67,  471 => 66,  468 => 65,  466 => 64,  461 => 63,  458 => 62,  455 => 61,  449 => 59,  446 => 58,  444 => 57,  441 => 56,  438 => 55,  435 => 54,  432 => 53,  425 => 50,  422 => 49,  419 => 48,  414 => 43,  408 => 40,  405 => 39,  398 => 35,  383 => 34,  380 => 33,  377 => 32,  374 => 31,  371 => 30,  368 => 29,  360 => 25,  354 => 23,  352 => 22,  345 => 21,  341 => 18,  338 => 15,  337 => 14,  336 => 13,  334 => 12,  331 => 11,  329 => 10,  326 => 9,  319 => 6,  316 => 5,  313 => 4,  309 => 770,  306 => 769,  304 => 762,  301 => 761,  299 => 724,  296 => 723,  293 => 721,  291 => 710,  288 => 709,  285 => 707,  283 => 681,  280 => 680,  277 => 678,  275 => 665,  272 => 664,  270 => 657,  267 => 656,  265 => 649,  262 => 648,  260 => 637,  257 => 636,  255 => 615,  252 => 614,  250 => 605,  247 => 604,  245 => 593,  242 => 592,  239 => 590,  237 => 581,  234 => 580,  231 => 578,  229 => 541,  226 => 540,  224 => 526,  221 => 525,  219 => 522,  216 => 520,  214 => 515,  211 => 514,  209 => 510,  206 => 509,  204 => 497,  201 => 496,  199 => 492,  196 => 491,  194 => 479,  191 => 478,  189 => 475,  186 => 474,  184 => 432,  181 => 431,  179 => 416,  176 => 415,  173 => 413,  171 => 397,  168 => 396,  166 => 390,  163 => 389,  161 => 383,  158 => 382,  156 => 351,  153 => 350,  151 => 316,  148 => 315,  146 => 283,  143 => 282,  141 => 238,  138 => 237,  136 => 197,  132 => 195,  130 => 165,  127 => 164,  125 => 158,  122 => 157,  120 => 142,  117 => 141,  115 => 136,  112 => 135,  110 => 110,  107 => 109,  105 => 73,  102 => 72,  100 => 53,  97 => 52,  95 => 48,  92 => 47,  89 => 45,  87 => 29,  84 => 28,  82 => 9,  79 => 8,  77 => 4,  74 => 2,  14 => 1,);
    }
}
/* {% use 'form_div_layout.html.twig' %}*/
/* */
/* {# Buttons #}*/
/* {% block button_attributes %}*/
/*     {% set attr = attr|merge({class: 'btn ' ~ attr.class | default("btn-default")}) %}*/
/*     {{ parent() }}*/
/* {% endblock button_attributes %}*/
/* */
/* {% block button_widget %}*/
/* {% spaceless %}*/
/*     {% if label is empty %}*/
/*         {%- if label_format is defined and label_format is not empty -%}*/
/*             {% set label = label_format|replace({*/
/*             '%name%': name,*/
/*             '%id%': id,*/
/*             }) %}*/
/*         {%- else -%}*/
/*             {% set label = name|humanize %}*/
/*         {%- endif -%}*/
/*     {% endif %}*/
/*     <button type="{{ type|default('button') }}" {{ block('button_attributes') }}>*/
/*     {% if icon is not empty %}*/
/*             {{ mopa_bootstrap_icon(icon, icon_inverted|default(false)) }}*/
/*     {% endif %}*/
/*     {{ label|trans({}, translation_domain) }}</button>*/
/* {% endspaceless %}*/
/* {% endblock button_widget %}*/
/* */
/* {% block button_row %}*/
/*     {% spaceless %}*/
/*         {% if button_offset is defined and button_offset is not empty %}*/
/*             {% set attr = attr|merge({'for': id, 'class': button_offset }) %}*/
/*             <div class="form-group">*/
/*                 <div {% for attrname, attrvalue in attr %} {{attrname}}="{{attrvalue}}"{% endfor %}>*/
/*                 {{ form_widget(form) }}*/
/*                 </div>*/
/*             </div>*/
/*         {% else %}*/
/*             <div>*/
/*                 {{ form_widget(form) }}*/
/*             </div>*/
/*         {% endif %}*/
/*     {% endspaceless %}*/
/* {% endblock button_row %}*/
/* */
/* {# Widgets #}*/
/* */
/* {% block choice_widget_collapsed %}*/
/*     {% set attr = attr|merge({'class': attr.class|default('') ~ ' ' ~ widget_form_control_class}) %}*/
/*     {{ parent() }}*/
/* {% endblock choice_widget_collapsed %}*/
/* */
/* {% block textarea_widget %}*/
/*     {% set type = type|default('text') %}*/
/*     {% if type != 'hidden' and ( widget_addon_prepend|default(null) is not null or widget_addon_append|default(null) is not null ) %}*/
/*     <div class="input-group">*/
/*         {% if widget_addon_prepend|default(null) is not null %}*/
/*             {% set widget_addon = widget_addon_prepend %}*/
/*             {{ block('widget_addon') }}*/
/*         {% endif %}*/
/*     {% endif %}*/
/*     {% set attr = attr|merge({'class': attr.class|default('') ~ ' ' ~ widget_form_control_class}) %}*/
/*     {{ parent() }}*/
/*     {% if type != 'hidden' and ( widget_addon_prepend|default(null) is not null or widget_addon_append|default(null) is not null ) %}*/
/*         {% if widget_addon_append|default(null) is not null %}*/
/*         {% set widget_addon = widget_addon_append %}*/
/*         {{ block('widget_addon') }}*/
/*         {% endif %}*/
/*     </div>*/
/*     {% endif %}*/
/* {% endblock textarea_widget %}*/
/* */
/* {% block form_widget_simple %}*/
/* {% spaceless %}*/
/*     {% set type = type|default('text') %}*/
/*     {% if type != 'hidden' and ( widget_addon_prepend|default(null) is not null or widget_addon_append|default(null) is not null or widget_btn_prepend|default(null) is not null or widget_btn_append|default(null) is not null ) %}*/
/*     <div class="input-group">*/
/*         {% if widget_btn_prepend|default(null) is not null %}*/
/*             {% set widget_btns = widget_btn_prepend %}*/
/*             {{ block('widget_btns') }}*/
/*         {% endif %}*/
/*         {% if widget_addon_prepend|default(null) is not null %}*/
/*             {% set widget_addon = widget_addon_prepend %}*/
/*             {{ block('widget_addon') }}*/
/*         {% endif %}*/
/*     {% endif %}*/
/*     {% if not widget_remove_btn|default(null) %}*/
/*         {% set attr = attr|merge({'class': attr.class|default('') ~ ' not-removable'}) %}*/
/*     {% endif %}*/
/*     {% set attr = attr|merge({'class': (attr.class|default('') ~ ' ' ~ widget_form_control_class)|trim}) %}*/
/*     {% if static_text is same as(true) %}*/
/*         <p class="form-control-static">{{ value }}</p>*/
/*     {% else %}*/
/*         {{ parent() }}*/
/*     {% endif %}*/
/*     {% if type != 'hidden' and ( widget_addon_prepend|default(null) is not null or widget_addon_append|default(null) is not null or widget_btn_prepend|default(null) is not null or widget_btn_append|default(null) is not null ) %}*/
/*         {% if widget_addon_append|default(null) is not null %}*/
/*             {% set widget_addon = widget_addon_append %}*/
/*             {{ block('widget_addon') }}*/
/*         {% endif %}*/
/*         {% if widget_btn_append|default(null) is not null %}*/
/*             {% set widget_btns = widget_btn_append %}*/
/*             {{ block('widget_btns') }}*/
/*         {% endif %}*/
/*     </div>*/
/*     {% endif %}*/
/* {% endspaceless %}*/
/* {% endblock form_widget_simple %}*/
/* */
/* {% block form_widget_compound %}*/
/* {% spaceless %}*/
/*     {% if form.parent == null %}*/
/*         {% if render_fieldset %}<fieldset>{% endif %}*/
/*         {% if show_legend %}{{ block('form_legend') }}{% endif %}*/
/*     {% endif %}*/
/* */
/*     {% if form.vars.tabbed %}*/
/*         {{ form_tabs(form) }}*/
/*         <div class="tab-content">*/
/*     {% endif %}*/
/* */
/*     {{ block('form_rows_visible') }}*/
/* */
/*     {% if form.vars.tabbed %}*/
/*         </div>*/
/*     {% endif %}*/
/* */
/*     {{ form_rest(form) }}*/
/* */
/*     {% if form.parent == null %}*/
/*         {% if render_fieldset %}</fieldset>{% endif %}*/
/*     {% endif %}*/
/* {% endspaceless %}*/
/* {% endblock form_widget_compound %}*/
/* */
/* {% block form_tabs %}*/
/* {% if form.vars.tabsView is defined %}*/
/* {{ form_widget(form.vars.tabsView) }}*/
/* {% endif %}*/
/* {% endblock %}*/
/* */
/* {% block tabs_widget %}*/
/* {% spaceless %}*/
/* <ul class="{{ form.vars.attr.class }}">*/
/*     {% for tab in form.vars.tabs %}*/
/*         {% set class = (tab.active ? 'active ' : '') ~ (tab.disabled ? 'disabled' : '') %}*/
/*         <li{% if class|trim is not empty %} class="{{ class }}"{% endif %}>*/
/*             <a data-toggle="tab" href="#{{ tab.id }}">*/
/*                 {% if tab.icon %}{{ mopa_bootstrap_icon(tab.icon) }}{% endif %}*/
/*                 {{ tab.label|trans({}, tab.translation_domain) }}*/
/*             </a>*/
/*         </li>*/
/*     {% endfor %}*/
/* </ul>*/
/* {% endspaceless %}*/
/* {% endblock %}*/
/* */
/* {% block form_tab %}*/
/*     {% set tab_attr = attr|merge({'class': 'tab-pane' ~ (form.vars.tab_active ? ' active' : '') ~ ' ' ~ attr.class|default(''), 'id': id}) %}*/
/*     <div{% for attrname, attrvalue in tab_attr %} {{ attrname }}="{{ attrvalue }}"{% endfor %}>*/
/*         {{ block('form_widget') }}*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block collection_widget %}*/
/* {% spaceless %}*/
/*     {% if prototype is defined %}*/
/*         {% set prototype_markup = form_row(prototype) %}*/
/*         {% set data_prototype_name = form.vars.form.vars.prototype.vars.name|default('__name__') %}*/
/*         {% set data_prototype_label = form.vars.form.vars.prototype.vars.label|default('__name__label__') %}*/
/*         {% set widget_form_group_attr = widget_form_group_attr|merge({*/
/*             'data-prototype': prototype_markup,*/
/*             'data-prototype-name': data_prototype_name,*/
/*             'data-prototype-label': data_prototype_label*/
/*         })|merge(attr) %}*/
/*     {% endif %}*/
/*     {# Add row by default use attr.class to change#}*/
/* 	{% if 'collection' in form.vars.block_prefixes and attr.class is defined %}*/
/* 		{% set widget_form_group_attr = widget_form_group_attr|merge({'class': widget_form_group_attr.class|default('row') ~ ' ' ~ attr.class}) %}*/
/* 	{% endif %}*/
/*     {# collection item adds class {form_id}_form-group  too #}*/
/*     {% set widget_form_group_attr = widget_form_group_attr|merge({'id': 'collection' ~ id ~ '_form_group', 'class': widget_form_group_attr.class ~ ' collection-items ' ~ id ~ '_form_group'}) %}*/
/* */
/*     <div {% for attrname,attrvalue in widget_form_group_attr %} {{attrname}}="{{attrvalue}}"{% endfor %}>*/
/*     {# Add initial prototype form #}*/
/*     {% if form.vars.value|length == 0 and prototype is defined %}*/
/*         {% for name in prototype_names %}*/
/*             {{ prototype_markup|replace({'__name__': name})|raw }}*/
/*         {% endfor %}*/
/*     {% endif %}*/
/*     {{ block('form_widget') }}*/
/*     </div>*/
/* {% endspaceless %}*/
/* {% endblock collection_widget %}*/
/* */
/* */
/* {% block choice_widget_expanded %}*/
/*     {% spaceless %}*/
/*         {% set label_attr = label_attr|merge({'class': (label_attr.class|default(''))}) %}*/
/*         {% set label_attr = label_attr|merge({'class': (label_attr.class ~ ' ' ~ (widget_type != '' ? (multiple ? 'checkbox' : 'radio') ~ '-' ~ widget_type : ''))}) %}*/
/*         {% if expanded %}*/
/*             {% set attr = attr|merge({'class': attr.class|default('') ~ ' ' ~ horizontal_input_wrapper_class}) %}*/
/*         {% endif %}*/
/*         {% if widget_type == 'inline-btn' %}*/
/*             <div class="btn-group" data-toggle="buttons">*/
/*         {% endif %}*/
/*         {% for child in form %}*/
/*             {% if widget_type not in ['inline', 'inline-btn'] %}*/
/*                 <div class="{{ multiple ? 'checkbox' : 'radio' }}"*/
/*                 {%- if widget_type == 'inline-btn' %} class="btn-group" data-toggle="buttons"{% endif %}>*/
/*             {% endif %}*/
/*             {% if widget_type == 'inline-btn' %}*/
/*                 {% set label_attr = label_attr|default({})|merge({'class': 'btn ' ~ label_attr.class|default('')}) %}*/
/*             {% endif %}*/
/*             {% if child.vars.checked and widget_type == 'inline-btn' %}*/
/*                 {% set label_attr_copy = label_attr|default({})|merge({'class': 'active ' ~ label_attr.class|default('')}) %}*/
/*             {% else %}*/
/*                 {% set label_attr_copy = label_attr|default({}) %}*/
/*             {% endif %}*/
/*             <label{% for attrname, attrvalue in label_attr_copy %} {{ attrname }}="{{ attrvalue }}"{% endfor %}>*/
/*             {{ form_widget(child, {'horizontal_label_class': horizontal_label_class, 'horizontal_input_wrapper_class': horizontal_input_wrapper_class, 'attr': {'class': attr.widget_class|default('') }}) }}*/
/*             {% if widget_type == 'inline-btn' or widget_checkbox_label == 'widget'%}*/
/*                 {{ child.vars.label|trans({}, translation_domain)|raw }}*/
/*             {% else %}*/
/*                 {{ child.vars.label|trans({}, translation_domain) }}*/
/*             {% endif %}*/
/*             </label>*/
/*             {% if widget_type not in ['inline', 'inline-btn'] %}*/
/*                 </div>*/
/*             {% endif %}*/
/*         {% endfor %}*/
/*         {% if widget_type == 'inline-btn' %}*/
/*             </div>*/
/*         {% endif %}*/
/*     {% endspaceless %}*/
/* {% endblock choice_widget_expanded %}*/
/* */
/* {% block checkbox_widget %}*/
/*     {% spaceless %}*/
/*         {% if label is not same as(false) and label is empty %}*/
/*             {%- if label_format is defined and label_format is not empty -%}*/
/*                 {% set label = label_format|replace({*/
/*                 '%name%': name,*/
/*                 '%id%': id,*/
/*                 }) %}*/
/*             {%- else -%}*/
/*                 {% set label = name|humanize %}*/
/*             {%- endif -%}*/
/*         {% endif %}*/
/*         {% if form.parent != null and 'choice' not in form.parent.vars.block_prefixes %}*/
/*             <div*/
/*             {%- if widget_type == 'inline-btn' %} class="btn-group" data-toggle="buttons"*/
/*             {%- else %} class="checkbox"*/
/*             {%- endif %}>*/
/*         {% endif %}*/
/*         {% if form.parent != null and 'choice' not in form.parent.vars.block_prefixes and label_render %}*/
/*             {% if widget_type == 'inline-btn' %}*/
/*                 {% set label_attr = attr|default({}) %}*/
/*                 {% if checked %}*/
/*                     {% set label_attr = label_attr|merge({'class': 'active ' ~ attr.class|default('')}) %}*/
/*                 {% endif %}*/
/*             {% endif %}*/
/*             <label{% for attrname, attrvalue in label_attr %} {{ attrname }}="{{ attrvalue }}"{% endfor %}*/
/*             {%- if not horizontal %} class="checkbox-inline"{% endif %}>*/
/*         {% endif %}*/
/*         <input type="checkbox" {{ block('widget_attributes') }}{% if value is defined %} value="{{ value }}"{% endif %}{% if checked %} checked="checked"{% endif %}/>*/
/*         {% if form.parent != null and 'choice' not in form.parent.vars.block_prefixes %}*/
/*             {% if label_render %}*/
/*                 {% if widget_checkbox_label in ['both', 'widget'] %}*/
/*                     {{ label|trans({}, translation_domain)|raw }}*/
/*                 {% else %}*/
/*                     {{ block('form_help') }}*/
/*                 {% endif %}*/
/*                 </label>*/
/*             {% endif %}*/
/*         {% endif %}*/
/*         {% if form.parent != null and 'choice' not in form.parent.vars.block_prefixes %}*/
/*             </div>*/
/*         {% endif %}*/
/*     {% endspaceless %}*/
/* {% endblock checkbox_widget %}*/
/* */
/* {% block date_widget %}*/
/* {% spaceless %}*/
/* {% if widget == 'single_text' %}*/
/*     {% if datepicker is defined %}*/
/*         {% set widget_addon_icon = widget_addon_append.icon is defined ? widget_addon_append.icon : 'calendar'  %}*/
/*         <div {% if datepicker.attr is defined %}{%- for attrname, attrvalue in datepicker.attr %}{{ attrname }}="{{ attrvalue }}" {% endfor %}{% endif %} data-provider="datepicker" class="input-group date" data-date="{{ value }}" data-link-field="{{ id }}" data-link-format="yyyy-mm-dd">*/
/*             <input type="hidden" value="{{ value }}" {{ block('widget_attributes') }}>*/
/*             {% if widget_reset_icon is defined and widget_reset_icon == true %}*/
/*                 <span class="input-group-addon">{{ mopa_bootstrap_icon('remove') }}</span>*/
/*             {% endif %}*/
/*             {# Clear the id & name attributes so that they don't override the hidden fields values #}*/
/*             {% set id = id ~ '_mopa_picker_display' %}*/
/*             {% set full_name = null %}*/
/*             {% set type = 'text' %}*/
/*             {{ block('form_widget_simple') }}*/
/*             <span class="input-group-addon">{{ mopa_bootstrap_icon(widget_addon_icon) }}</span>*/
/*         </div>*/
/*     {% else %}*/
/*         {{ block('form_widget_simple') }}*/
/*     {% endif %}*/
/* {% else %}*/
/*     {% set attr = attr|merge({'class': attr.class|default('inline')}) %}*/
/*     	<div class="row">*/
/*         {{ date_pattern|replace({*/
/*             '{{ year }}':  '<div class="'~date_wrapper_class['year']|default('col-xs-4')~'">'~form_widget(form.year, {'attr': {'class': attr.widget_class|default('') ~ ''}})~'</div>',*/
/*             '{{ month }}': '<div class="'~date_wrapper_class['month']|default('col-xs-4')~'">'~form_widget(form.month, {'attr': {'class': attr.widget_class|default('') ~ ''}})~'</div>',*/
/*             '{{ day }}':   '<div class="'~date_wrapper_class['day']|default('col-xs-4')~'">'~form_widget(form.day, {'attr': {'class': attr.widget_class|default('') ~ ''}})~'</div>',*/
/*         })|raw }}*/
/*         </div>*/
/* {% endif %}*/
/* {% endspaceless %}*/
/* {% endblock date_widget %}*/
/* */
/* {% block time_widget %}*/
/* {% spaceless %}*/
/* {% if widget == 'single_text' %}*/
/*     {% if timepicker is defined %}*/
/*         {% set widget_addon_icon = widget_addon_append.icon is defined ? widget_addon_append.icon : 'time'  %}*/
/*         <div {% if timepicker.attr is defined %}{%- for attrname, attrvalue in timepicker.attr %}{{ attrname }}="{{ attrvalue }}" {% endfor %}{% endif %} data-provider="timepicker" class="input-group date" data-date="{{ value }}" data-link-field="{{ id }}" data-link-format="hh:ii">*/
/*             <input type="hidden" value="{{ value }}" {{ block('widget_attributes') }}>*/
/*             {% if widget_reset_icon is defined and widget_reset_icon == true %}*/
/*                 <span class="input-group-addon">{{ mopa_bootstrap_icon('remove') }}</span>*/
/*             {% endif %}*/
/*             {# Clear the id & name attributes so that they don't override the hidden fields values #}*/
/*             {% set id = id ~ '_mopa_picker_display' %}*/
/*             {% set full_name = null %}*/
/*             {% set type = 'text' %}*/
/*             {{ block('form_widget_simple') }}*/
/*             <span class="input-group-addon">{{ mopa_bootstrap_icon(widget_addon_icon) }}</span>*/
/*         </div>*/
/*     {% else %}*/
/*         {{ block('form_widget_simple') }}*/
/*     {% endif %}*/
/* {% else %}*/
/*     {% set attr = attr|merge({'class': attr.class|default('')}) %}*/
/*     {% spaceless %}*/
/*     {{ form_widget(form.hour, { 'horizontal_input_wrapper_class': horizontal_input_wrapper_class|default('col-sm-2')}) }}*/
/*     {% if with_minutes %}*/
/*         {{ form_widget(form.minute, { 'horizontal_input_wrapper_class': horizontal_input_wrapper_class|default('col-sm-2')}) }}*/
/*     {% endif %}*/
/*     {% if with_seconds %}*/
/*         :{{ form_widget(form.second, { 'horizontal_input_wrapper_class': horizontal_input_wrapper_class|default('col-sm-2') }) }}*/
/*     {% endif %}*/
/*     {% endspaceless %}*/
/* {% endif %}*/
/* {% endspaceless %}*/
/* {% endblock time_widget %}*/
/* */
/* {% block datetime_widget %}*/
/* {% spaceless %}*/
/*     {% if widget == 'single_text' %}*/
/*         {% if datetimepicker is defined %}*/
/*             {% set widget_addon_icon = widget_addon_append.icon is defined ? widget_addon_append.icon : 'th'  %}*/
/*             <div {% if datetimepicker.attr is defined %}{%- for attrname, attrvalue in datetimepicker.attr %}{{ attrname }}="{{ attrvalue }}" {% endfor %}{% endif %} data-provider="datetimepicker" class="input-group date" data-date="{% if value %}{{ value|date('Y-m-d H:i') }}{% endif %}" data-link-field="{{ id }}" data-link-format="yyyy-mm-dd hh:ii">*/
/*                 <input type="hidden" value="{% if value %}{{ value|date('Y-m-d H:i') }}{% endif %}" {{ block('widget_attributes') }}>*/
/*                 {% if widget_reset_icon is defined and widget_reset_icon == true %}*/
/*                     <span class="input-group-addon">{{ mopa_bootstrap_icon('remove') }}</span>*/
/*                 {% endif %}*/
/*                 {# Clear the id & name attributes so that they don't override the hidden fields values #}*/
/*                 {% set id = id ~ '_mopa_picker_display' %}*/
/*                 {% set full_name = null %}*/
/*                 {% set type = 'text' %}*/
/*                 {{ block('form_widget_simple') }}*/
/*                 <span class="input-group-addon">{{ mopa_bootstrap_icon(widget_addon_icon) }}</span>*/
/*             </div>*/
/*         {% else %}*/
/*             {{ block('form_widget_simple') }}*/
/*         {% endif %}*/
/*     {% else %}*/
/*             {% set attr = attr|merge({'class': attr.class|default('')}) %}*/
/*             <div {{ block('widget_container_attributes') }}>*/
/*                 {{ form_errors(form.date) }}*/
/*                 {{ form_errors(form.time) }}*/
/*                 {{ form_widget(form.date, {'attr': {'class': attr.widget_class|default('')}, 'horizontal_input_wrapper_class': horizontal_input_wrapper_class|default('col-sm-3')}) }}*/
/*                 {{ form_widget(form.time, {'attr': {'class': attr.widget_class|default('')}, 'horizontal_input_wrapper_class': horizontal_input_wrapper_class|default('col-sm-2')}) }}*/
/*             </div>*/
/*     {% endif %}*/
/* {% endspaceless %}*/
/* {% endblock datetime_widget %}*/
/* */
/* {% block percent_widget %}*/
/* {% spaceless %}*/
/*     {% set widget_addon_append = widget_addon_append|merge({'text': widget_addon_append.text|default('%')}) %}*/
/*     {{ block('form_widget_simple') }}*/
/* {% endspaceless %}*/
/* {% endblock percent_widget %}*/
/* */
/* {% block money_widget %}*/
/* {% spaceless %}*/
/*     {% set widget_addon_prepend = (widget_addon_prepend != false or widget_addon_prepend == null) and money_pattern != '{{ widget }}' ? {'text': money_pattern|replace({ '{{ widget }}': ''})} : widget_addon_prepend|default(null) %}*/
/*     {{ block('form_widget_simple') }}*/
/* {% endspaceless %}*/
/* {% endblock money_widget %}*/
/* */
/* {% block file_widget %}*/
/* {% spaceless %}*/
/* {% set type = type|default('file') %}*/
/*     {% if widget_addon_prepend|default(null) is not null %}*/
/*         {% set widget_addon = widget_addon_prepend %}*/
/*         {{ block('widget_addon') }}*/
/*     {% endif %}*/
/* <input type="{{ type }}" {{ block('widget_attributes') }}/>*/
/* {% if type != 'hidden' and widget_addon.type|default(null) is not null %}*/
/*     {% if widget_addon_append|default(null) is not null %}*/
/*         {% set widget_addon = widget_addon_append %}*/
/*         {{ block('widget_addon') }}*/
/*     {% endif %}*/
/* {% endif %}*/
/* {% endspaceless %}*/
/* {% endblock file_widget %}*/
/* */
/* {# Labels #}*/
/* */
/* {% block form_legend %}*/
/* {% spaceless %}*/
/*     {% if label is empty %}*/
/*         {%- if label_format is defined and label_format is not empty -%}*/
/*             {% set label = label_format|replace({*/
/*             '%name%': name,*/
/*             '%id%': id,*/
/*             }) %}*/
/*         {%- else -%}*/
/*             {% set label = name|humanize %}*/
/*         {%- endif -%}*/
/*     {% endif %}*/
/*     <{{ legend_tag }}>{{ label|trans({}, translation_domain) }}</{{ legend_tag }}>*/
/* {% endspaceless %}*/
/* {% endblock form_legend %}*/
/* */
/* {% block form_label %}*/
/* {% if 'checkbox' not in block_prefixes or widget_checkbox_label in ['label', 'both'] %}*/
/* {% spaceless %}*/
/*     {% if label is not same as(false) %}*/
/*         {% if label is empty %}*/
/*             {%- if label_format is defined and label_format is not empty -%}*/
/*                 {% set label = label_format|replace({*/
/*                 '%name%': name,*/
/*                 '%id%': id,*/
/*                 }) %}*/
/*             {%- else -%}*/
/*                 {% set label = name|humanize %}*/
/*             {%- endif -%}*/
/*         {% endif %}*/
/*         {% if not compound %}*/
/*             {% set label_attr = label_attr|merge({'for': id}) %}*/
/*         {% endif %}*/
/*         {% set label_attr_class = '' %}*/
/*         {% if horizontal %}*/
/*             {% set label_attr_class = 'control-label ' ~ label_attr_class ~ horizontal_label_class %}*/
/*         {% endif %}*/
/*         {% set label_attr = label_attr|merge({'class': (label_attr.class|default('') ~ " " ~ label_attr_class ~ (required ? ' required' : ' optional'))|trim }) %}*/
/*         <label{% for attrname,attrvalue in label_attr %} {{attrname}}="{{attrvalue}}"{% endfor %}>*/
/*         {{ label|trans({}, translation_domain) }}*/
/*         {{- block('label_asterisk') }}*/
/*         {% if 'collection' in form.vars.block_prefixes and widget_add_btn|default(null) and form.vars.allow_add == true %}*/
/*             &nbsp;{{ block('form_widget_add_btn') }}*/
/*         {% endif %}*/
/*         {% if help_label %}*/
/*             {{ block('help_label') }}*/
/*         {% endif %}*/
/*         {% if help_label_tooltip.title %}*/
/*             {{ block('help_label_tooltip') }}*/
/*         {% endif %}*/
/*         {% if help_label_popover.title %}*/
/*             {{ block('help_label_popover') }}*/
/*         {% endif %}*/
/*         </label>*/
/*     {% endif %}*/
/* {% endspaceless %}*/
/* {% endif %}*/
/* {% endblock form_label %}*/
/* */
/* {% block help_label %}*/
/*     <span class="help-block">{{ help_label|trans({}, translation_domain) }}</span>*/
/* {% endblock help_label %}*/
/* */
/* {% block help_label_tooltip %}*/
/*     <span class="help-block">*/
/*         <a href="#" data-toggle="tooltip" data-placement="{{ help_label_tooltip.placement}}" data-title="{{ help_label_tooltip.title|trans({}, translation_domain) }}">*/
/*             {% if help_label_tooltip.icon is not same as(false) %}*/
/*                 {{ mopa_bootstrap_icon(help_label_tooltip.icon) }}*/
/*             {% endif %}*/
/*             {% if help_label_tooltip.text is not same as(null) %}*/
/*                 {{ help_label_tooltip.text }}*/
/*             {% endif %}*/
/*         </a>*/
/*     </span>*/
/* {% endblock help_label_tooltip %}*/
/* */
/* {% block help_block_tooltip %}*/
/*     {% set help_label_tooltip = help_block_tooltip %}*/
/*     {{ block('help_label_tooltip') }}*/
/* {% endblock help_block_tooltip %}*/
/* */
/* {% block help_label_popover %}*/
/*     <span class="help-block">*/
/*         <a href="#" data-toggle="popover" data-trigger="hover" data-placement="{{ help_label_popover.placement}}" data-title="{{ help_label_popover.title|trans({}, translation_domain) }}" data-content="{{ help_label_popover.content|trans({}, translation_domain) }}" data-html="true">*/
/*             {% if help_label_popover.icon is not same as(false) %}*/
/*                 {{ mopa_bootstrap_icon(help_label_popover.icon) }}*/
/*             {% endif %}*/
/*             {% if help_label_popover.text is not same as(null) %}*/
/*                 {{ help_label_popover.text|raw }}*/
/*             {% endif %}*/
/*         </a>*/
/*     </span>*/
/* {% endblock help_label_popover %}*/
/* */
/* {% block help_block_popover %}*/
/*     {% set help_label_popover = help_block_popover %}*/
/*     {{ block('help_label_popover') }}*/
/* {% endblock help_block_popover %}*/
/* */
/* {% block form_actions_widget %}*/
/*     {% for button in form.children %}*/
/*         {{ form_widget(button) }}&nbsp; {# this needs to be here due to https://github.com/twbs/bootstrap/issues/3245 #}*/
/*     {% endfor  %}*/
/* {% endblock %}*/
/* */
/* {# Rows #}*/
/* {% block form_actions_row %}*/
/*     {{ block('button_row')  }}*/
/* {% endblock %}*/
/* */
/* {% block form_rows_visible %}*/
/* {% spaceless %}*/
/*      {% if errors|length > 0 %}*/
/*         <div class="symfony-form-errors">*/
/*             {{ form_errors(form) }}*/
/*         </div>*/
/*     {% endif %}*/
/*     {% for child in form %}*/
/*         {% if 'hidden' not in child.vars.block_prefixes %} {# smbdy: why do we not add the hiddens of childs? 131024 phiamo: i think form rest should do this !? it was afaik removed because it cause side effekts #}*/
/*             {{ form_row(child) }}*/
/*         {% endif %}*/
/*     {% endfor %}*/
/* {% endspaceless %}*/
/* {% endblock form_rows_visible %}*/
/* */
/* {% block form_row %}*/
/* {% spaceless %}*/
/*     {% if 'tab' in form.vars.block_prefixes %}*/
/*         {{ block('form_tab') }}*/
/*     {% elseif embed_form is same as(true) %}*/
/*         {% if widget_prefix is not empty %}{{ widget_prefix|trans({}, translation_domain)|raw }}{% endif %} {{ form_widget(form, _context) }} {% if widget_suffix is not empty %}{{ widget_suffix|trans({}, translation_domain)|raw }}{% endif %}*/
/*     {% else %}*/
/*         {{ block('widget_form_group_start') }}*/
/* */
/*         {% set show_horizontal_wrapper = horizontal and not (form.parent is not null and 'collection' in form.parent.vars.block_prefixes and form.parent.vars.horizontal_wrap_children is same as(false)) %}*/
/* */
/*         {% if horizontal and not label_render %}*/
/*             {% set horizontal_input_wrapper_class = horizontal_input_wrapper_class ~ ' ' ~ horizontal_label_offset_class %}*/
/*         {% endif %}*/
/* */
/*         {% if show_horizontal_wrapper %}*/
/*         <div class="{{ horizontal_input_wrapper_class }}">*/
/*         {% endif %}*/
/* */
/*         {% if widget_prefix is not empty %}{{ widget_prefix|trans({}, translation_domain)|raw }}{% endif %} {{ form_widget(form, _context) }} {% if widget_suffix is not empty %}{{ widget_suffix|trans({}, translation_domain)|raw }}{% endif %}*/
/* */
/*         {% set type = type|default('text') %}*/
/*         {% if type != 'hidden' %}*/
/*         {{ block('form_message') }}*/
/*         {% endif %}*/
/* */
/*         {% if show_horizontal_wrapper %}*/
/*         </div>*/
/*         {% endif %}*/
/* */
/*         {% if form.parent is not null and 'collection' in form.parent.vars.block_prefixes and widget_remove_btn|default(null) and form.parent.vars.allow_delete|default(false) %}*/
/*             {{ block('form_widget_remove_btn') }}*/
/*         {% endif -%}*/
/*         {{ block('widget_form_group_end') }}*/
/*     {% endif %}*/
/* {% endspaceless %}*/
/* {% endblock form_row %}*/
/* */
/* {# Support #}*/
/* */
/* {% block form_message %}*/
/* {% spaceless %}*/
/*     {{ form_errors(form) }}*/
/* */
/*     {% if ('checkbox' not in block_prefixes or widget_checkbox_label != 'label') and help_block %}*/
/*         {{ block('form_help') }}*/
/*     {% endif %}*/
/* {% endspaceless %}*/
/* {% endblock form_message %}*/
/* */
/* {# Help #}*/
/* */
/* {% block form_help %}*/
/* {% spaceless %}*/
/*     {% if help_block %}<p class="help-block">{{ help_block|trans({}, translation_domain)|raw }}</p>{%endif %}*/
/*     {% if help_block_tooltip.title %}*/
/*         &nbsp;{{ block('help_block_tooltip') }}*/
/*     {% endif %}*/
/*     {% if help_block_popover.title %}*/
/*         &nbsp;{{ block('help_block_popover') }}*/
/*     {% endif %}*/
/* {% endspaceless %}*/
/* {% endblock form_help %}*/
/* */
/* {% block form_widget_add_btn %}*/
/* {% spaceless %}*/
/*     {% if widget_add_btn|default(null) %}*/
/*         {% set button_type = 'add' %}*/
/*         {% set button_values = widget_add_btn %}*/
/*         {{ block('collection_button') }}*/
/*     {% endif %}*/
/* {% endspaceless %}*/
/* {% endblock form_widget_add_btn %}*/
/* */
/* {% block form_widget_remove_btn %}*/
/* {% spaceless %}*/
/*     {% if widget_remove_btn.wrapper_div is defined and widget_remove_btn.wrapper_div is not same as(false) %}*/
/*         <div class="{{ widget_remove_btn.wrapper_div.class }}">*/
/*     {% endif %}*/
/*     {% if widget_remove_btn.horizontal_wrapper_div is defined and widget_remove_btn.horizontal_wrapper_div is not same as(false) %}*/
/*         <div class="{{ widget_remove_btn.horizontal_wrapper_div.class }}">*/
/*     {% endif %}*/
/*     {% if widget_remove_btn|default(null) %}*/
/*     {% set button_type = 'remove' %}*/
/*     {% set button_values = widget_remove_btn %}*/
/*     {{ block('collection_button') }}*/
/*     {% endif %}*/
/*     {% if widget_remove_btn.horizontal_wrapper_div is defined and widget_remove_btn.horizontal_wrapper_div is not same as(false) %}*/
/*         </div>*/
/*     {% endif %}*/
/*     {% if widget_remove_btn.wrapper_div is defined and widget_remove_btn.wrapper_div is not same as(false) %}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endspaceless %}*/
/* {% endblock form_widget_remove_btn %}*/
/* */
/* {% block collection_button %}*/
/* <a {% for attrname,attrvalue in button_values.attr %} {{attrname}}="{{attrvalue}}"{% endfor %} data-collection-{{ button_type }}-btn=".{{ form.vars['id'] }}_form_group">*/
/* {% if button_values.icon is not null %}*/
/*     {{ mopa_bootstrap_icon(button_values.icon, button_values.icon_inverted|default(false)) }}*/
/* {% endif %}*/
/* {% if button_values.label is defined %}*/
/*     {{ button_values.label|trans({}, translation_domain) }}*/
/* {% endif %}*/
/* </a>*/
/* */
/* {% endblock collection_button %}*/
/* */
/* {% block label_asterisk %}*/
/* {% if required %}*/
/*     {%- if render_required_asterisk %}&nbsp;<span class="asterisk">*</span>{% endif %}*/
/* {% else %}*/
/*     {%- if render_optional_text %}&nbsp;<span>{{ "(optional)"|trans({}, translation_domain) }}</span>{% endif %}*/
/* {% endif %}*/
/* {% endblock label_asterisk %}*/
/* */
/* {% block widget_addon %}*/
/* {% spaceless %}*/
/* {% set widget_addon_icon = widget_addon.icon is defined ? widget_addon.icon : null  %}*/
/* {% set widget_addon_icon_inverted = widget_addon.icon_inverted is defined ? widget_addon.icon_inverted : false  %}*/
/*     <span class="input-group-addon">{{ (widget_addon.text|default(false) ? widget_addon.text|trans({}, translation_domain)|raw : mopa_bootstrap_icon(widget_addon_icon, widget_addon_icon_inverted)) }}</span>*/
/* {% endspaceless %}*/
/* {% endblock widget_addon %}*/
/* */
/* {% block widget_btns %}*/
/* {% spaceless %}*/
/*     <span class="input-group-btn">*/
/*     {% for widget_btn in widget_btns %}*/
/*         <button type="{{ widget_btn.type | default('button') }}" class="{{ 'btn ' ~ widget_btn.class | default('btn-default') }}">*/
/*         {% if widget_btn.icon is not empty %}*/
/*                 {{ mopa_bootstrap_icon(widget_btn.icon, widget_btn.icon_inverted | default(false)) }}*/
/*         {% endif %}*/
/*         {{ widget_btn.label | default("") | trans({}, translation_domain) }}</button>*/
/*     {% endfor %}*/
/*     </span>*/
/* {% endspaceless %}*/
/* {% endblock widget_btns %}*/
/* */
/* {# Errors #}*/
/* */
/* {% block form_errors %}*/
/* {% spaceless %}*/
/* {% if error_delay %}*/
/*     {% for child in form %}*/
/*         {% if loop.index == 1 %}*/
/*             {% if child.set('errors', errors) %}{% endif %}*/
/*         {% endif %}*/
/*     {% endfor %}*/
/* {% else %}*/
/*     {% if errors|length > 0 %}*/
/*         {% if form.parent == null %}*/
/*             {% from 'MopaBootstrapBundle::flash.html.twig' import flash %}*/
/*             {% for error in errors %}*/
/*                 {{ flash('danger', error.message) }}*/
/*             {% endfor %}*/
/*         {% else %}*/
/*             <span class="help-{{ block('error_type') }}">*/
/*             {% for error in errors %}*/
/*                 {{ error.message }} <br>*/
/*             {% endfor %}*/
/*             </span>*/
/*         {% endif %}*/
/*     {% endif %}*/
/* {% endif %}*/
/* {% endspaceless %}*/
/* {% endblock form_errors %}*/
/* */
/* {# used to determine which type of error #}*/
/* */
/* {% block error_type %}*/
/* {% spaceless %}*/
/* {% if error_type %}*/
/*     {{ error_type }}*/
/* {% elseif form.parent == null %}*/
/*     {{ form.vars.error_type | default('inline') }}*/
/* {% else %}*/
/*     block*/
/* {% endif %}*/
/* {% endspaceless %}*/
/* {% endblock error_type %}*/
/* */
/* {# widget helper blocks #}*/
/* */
/* {% block widget_form_group_start %}*/
/* {% if widget_form_group|default(false) or form.parent == null %}*/
/*     {% if form.parent is not null and 'collection' in form.parent.vars.block_prefixes %} {# i am a collection child #}*/
/*         {% if not omit_collection_item %}*/
/*             {# collection item wrapper doesnt need form-group it gets added to childs anyways #}*/
/*         	{% set widget_form_group_attr = widget_form_group_attr|merge({class: 'collection-item'}) %}*/
/*         {% endif %}*/
/*     {% endif %}*/
/*     {% if errors|length > 0 %}*/
/* 	    {# Add Error Class to Widget Wrapper#}*/
/* 	    {% set widget_form_group_attr = widget_form_group_attr|merge({'class': widget_form_group_attr.class|default('') ~ ' has-error'}) %}*/
/*     {% endif %}*/
/*     {% if help_widget_popover.selector is same as(null) %}*/
/*         {% set help_widget_popover = help_widget_popover|merge({'selector': '#' ~ id }) %}*/
/*     {% endif %}*/
/*     <div{% if help_widget_popover.title is not same as(null) %}{{ block('help_widget_popover') }}{% endif %} {% for attrname,attrvalue in widget_form_group_attr %} {{attrname}}="{{attrvalue}}"{% endfor %}>*/
/*     {# a form item containing the field in block_prefixes is a near subform or a field directly #}*/
/*     {% if (form|length > 0 and form.parent != null)*/
/*         and 'field' not in form.vars.block_prefixes*/
/*         and 'date' not in form.vars.block_prefixes %}*/
/*         {% if show_child_legend%}*/
/*             {{ block('form_legend') }}*/
/*         {% elseif label_render %}*/
/*             {{ form_label(form, label|default(null)) }}*/
/*         {% else %}*/
/*         {% endif %}*/
/*     {% else %}*/
/*         {% if label_render %}*/
/*             {{ form_label(form, label|default(null)) }}*/
/*         {% endif %}*/
/*     {% endif %}*/
/* {% else %}*/
/*     {% if label_render %}*/
/*         {{ form_label(form, label|default(null)) }}*/
/*     {% endif %}*/
/* {% endif %}*/
/* {% endblock widget_form_group_start %}*/
/* */
/* {% block help_widget_popover %}*/
/*  {% spaceless %}*/
/*  {% for attrname,attrvalue in help_widget_popover %}*/
/*  data-{{attrname}}="{{attrvalue|trans({}, domain|default('messages'))}}"*/
/*  {% endfor %}*/
/*  {% endspaceless %}*/
/* {% endblock help_widget_popover %}*/
/* */
/* {% block widget_form_group_end %}*/
/* {% spaceless %}*/
/* {% if widget_form_group|default(false) or form.parent == null %}*/
/*     </div>*/
/* {% endif %}*/
/* {% endspaceless %}*/
/* {% endblock widget_form_group_end %}*/
/* */
