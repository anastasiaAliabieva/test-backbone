<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_1854dd387eb903071bff348074b06d3ed252864b9f4cb7bca48681337cad58ac extends Twig_Template
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
        $__internal_8a14c945d2f0f725d805e0086132155f391d68f449116cb4ee1b25cb6e8cf60c = $this->env->getExtension("native_profiler");
        $__internal_8a14c945d2f0f725d805e0086132155f391d68f449116cb4ee1b25cb6e8cf60c->enter($__internal_8a14c945d2f0f725d805e0086132155f391d68f449116cb4ee1b25cb6e8cf60c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_8a14c945d2f0f725d805e0086132155f391d68f449116cb4ee1b25cb6e8cf60c->leave($__internal_8a14c945d2f0f725d805e0086132155f391d68f449116cb4ee1b25cb6e8cf60c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
