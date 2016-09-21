<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_94d7bafe1f4dcced5ba078e2564d365e737eac728764e04cc38db2797e280825 extends Twig_Template
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
        $__internal_db20daf410b66be621d430792d0a678eb9b83e447ea61f4cca94c749c1c0f25c = $this->env->getExtension("native_profiler");
        $__internal_db20daf410b66be621d430792d0a678eb9b83e447ea61f4cca94c749c1c0f25c->enter($__internal_db20daf410b66be621d430792d0a678eb9b83e447ea61f4cca94c749c1c0f25c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_db20daf410b66be621d430792d0a678eb9b83e447ea61f4cca94c749c1c0f25c->leave($__internal_db20daf410b66be621d430792d0a678eb9b83e447ea61f4cca94c749c1c0f25c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
