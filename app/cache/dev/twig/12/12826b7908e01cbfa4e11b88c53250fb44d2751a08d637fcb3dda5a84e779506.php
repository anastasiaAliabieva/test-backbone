<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_8fb18570fc6f93fcf05c6facfad81d0a4fa691f6315b8408ed3bdcca18952656 extends Twig_Template
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
        $__internal_0390e281445d08144d353c75058db26d1fbf49a671eec07a6a233aed7e7bc9b7 = $this->env->getExtension("native_profiler");
        $__internal_0390e281445d08144d353c75058db26d1fbf49a671eec07a6a233aed7e7bc9b7->enter($__internal_0390e281445d08144d353c75058db26d1fbf49a671eec07a6a233aed7e7bc9b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_0390e281445d08144d353c75058db26d1fbf49a671eec07a6a233aed7e7bc9b7->leave($__internal_0390e281445d08144d353c75058db26d1fbf49a671eec07a6a233aed7e7bc9b7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
