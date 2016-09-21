<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_10de2b1be9e409dcbebbf11417b7feee406ea3f812d1512ffd5bca990befded0 extends Twig_Template
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
        $__internal_d67619f6e87966a9498cc43fc7686255b4c4878f48f0b82150106bdfb50646f4 = $this->env->getExtension("native_profiler");
        $__internal_d67619f6e87966a9498cc43fc7686255b4c4878f48f0b82150106bdfb50646f4->enter($__internal_d67619f6e87966a9498cc43fc7686255b4c4878f48f0b82150106bdfb50646f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_d67619f6e87966a9498cc43fc7686255b4c4878f48f0b82150106bdfb50646f4->leave($__internal_d67619f6e87966a9498cc43fc7686255b4c4878f48f0b82150106bdfb50646f4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
