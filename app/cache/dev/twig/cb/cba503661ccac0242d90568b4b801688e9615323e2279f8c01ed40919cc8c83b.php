<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_3b7cd1e59d888a3ca23b05553a56252b6db707dd8b44b5fa2a180e49e26778ad extends Twig_Template
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
        $__internal_c2d34999e52d9ec52d40b0bd2aed0212689762412a121b7d8606e93677f06619 = $this->env->getExtension("native_profiler");
        $__internal_c2d34999e52d9ec52d40b0bd2aed0212689762412a121b7d8606e93677f06619->enter($__internal_c2d34999e52d9ec52d40b0bd2aed0212689762412a121b7d8606e93677f06619_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_c2d34999e52d9ec52d40b0bd2aed0212689762412a121b7d8606e93677f06619->leave($__internal_c2d34999e52d9ec52d40b0bd2aed0212689762412a121b7d8606e93677f06619_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
