<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_52ee41571713ac1ef302057d787536dcd6c4269151eb4d8d7817df2bb7d6589f extends Twig_Template
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
        $__internal_d6cc63d12fe695055a7c581297a4c11e78e68e73b31270618ea1eb9884082749 = $this->env->getExtension("native_profiler");
        $__internal_d6cc63d12fe695055a7c581297a4c11e78e68e73b31270618ea1eb9884082749->enter($__internal_d6cc63d12fe695055a7c581297a4c11e78e68e73b31270618ea1eb9884082749_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_d6cc63d12fe695055a7c581297a4c11e78e68e73b31270618ea1eb9884082749->leave($__internal_d6cc63d12fe695055a7c581297a4c11e78e68e73b31270618ea1eb9884082749_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
