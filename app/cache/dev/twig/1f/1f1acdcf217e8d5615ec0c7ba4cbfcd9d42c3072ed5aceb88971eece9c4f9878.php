<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_dcd8bdd3daad36ad02a1b4d3c6b65806beb29877b593771e079d6562d4a937ad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c7809cf1ba0930b70f0f2eb78d412c74b53666cee44744fa61f78a576a0b5d11 = $this->env->getExtension("native_profiler");
        $__internal_c7809cf1ba0930b70f0f2eb78d412c74b53666cee44744fa61f78a576a0b5d11->enter($__internal_c7809cf1ba0930b70f0f2eb78d412c74b53666cee44744fa61f78a576a0b5d11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_c7809cf1ba0930b70f0f2eb78d412c74b53666cee44744fa61f78a576a0b5d11->leave($__internal_c7809cf1ba0930b70f0f2eb78d412c74b53666cee44744fa61f78a576a0b5d11_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
