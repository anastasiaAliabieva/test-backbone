<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_9d3499b5d7a2f3436c6261dc7176d2404e671524a0415fe46ccd6af1d4463fc1 extends Twig_Template
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
        $__internal_f297cb95417b143deea37b73f6d9ee2e7d8c329e2eb6bc4f9c2594278598b85b = $this->env->getExtension("native_profiler");
        $__internal_f297cb95417b143deea37b73f6d9ee2e7d8c329e2eb6bc4f9c2594278598b85b->enter($__internal_f297cb95417b143deea37b73f6d9ee2e7d8c329e2eb6bc4f9c2594278598b85b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_f297cb95417b143deea37b73f6d9ee2e7d8c329e2eb6bc4f9c2594278598b85b->leave($__internal_f297cb95417b143deea37b73f6d9ee2e7d8c329e2eb6bc4f9c2594278598b85b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
