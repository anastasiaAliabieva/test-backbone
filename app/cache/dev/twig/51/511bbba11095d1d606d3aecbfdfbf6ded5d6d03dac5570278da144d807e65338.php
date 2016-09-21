<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_2c4a9634f63b136f89958cc2e448cdf751adbf9197c8f2415c4cc6f953fb1b47 extends Twig_Template
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
        $__internal_f9feb84edc637c298e0010838ad11b932f56a5e175f7b0ca42ba94e283f0ccaa = $this->env->getExtension("native_profiler");
        $__internal_f9feb84edc637c298e0010838ad11b932f56a5e175f7b0ca42ba94e283f0ccaa->enter($__internal_f9feb84edc637c298e0010838ad11b932f56a5e175f7b0ca42ba94e283f0ccaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_f9feb84edc637c298e0010838ad11b932f56a5e175f7b0ca42ba94e283f0ccaa->leave($__internal_f9feb84edc637c298e0010838ad11b932f56a5e175f7b0ca42ba94e283f0ccaa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
