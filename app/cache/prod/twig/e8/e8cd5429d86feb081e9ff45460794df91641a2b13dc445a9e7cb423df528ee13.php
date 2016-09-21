<?php

/* MopaBootstrapBundle::base.html.twig */
class __TwigTemplate_73d335b8a47b755b8a0177fa1ec0b24631385468b3d782f8fbea2fa8368041d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'html_tag' => array($this, 'block_html_tag'),
            'head' => array($this, 'block_head'),
            'head_style' => array($this, 'block_head_style'),
            'head_script' => array($this, 'block_head_script'),
            'title' => array($this, 'block_title'),
            'favicon' => array($this, 'block_favicon'),
            'head_bottom' => array($this, 'block_head_bottom'),
            'body_tag' => array($this, 'block_body_tag'),
            'body_start' => array($this, 'block_body_start'),
            'body' => array($this, 'block_body'),
            'navbar' => array($this, 'block_navbar'),
            'container' => array($this, 'block_container'),
            'container_div_start' => array($this, 'block_container_div_start'),
            'container_class' => array($this, 'block_container_class'),
            'header' => array($this, 'block_header'),
            'content_div_start' => array($this, 'block_content_div_start'),
            'page_header' => array($this, 'block_page_header'),
            'headline' => array($this, 'block_headline'),
            'flashes' => array($this, 'block_flashes'),
            'content_row' => array($this, 'block_content_row'),
            'content' => array($this, 'block_content'),
            'content_content' => array($this, 'block_content_content'),
            'content_sidebar' => array($this, 'block_content_sidebar'),
            'content_div_end' => array($this, 'block_content_div_end'),
            'footer_tag_start' => array($this, 'block_footer_tag_start'),
            'footer' => array($this, 'block_footer'),
            'footer_tag_end' => array($this, 'block_footer_tag_end'),
            'container_div_end' => array($this, 'block_container_div_end'),
            'body_end_before_js' => array($this, 'block_body_end_before_js'),
            'foot_script' => array($this, 'block_foot_script'),
            'foot_script_assetic' => array($this, 'block_foot_script_assetic'),
            'body_end' => array($this, 'block_body_end'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["__internal_c6cc0bf38aee1b56d335bd657d4a6301070dbfcb6b783bb77e0c2f1107e5155d"] = $this->loadTemplate("MopaBootstrapBundle::flash.html.twig", "MopaBootstrapBundle::base.html.twig", 1);
        // line 2
        echo "
<!DOCTYPE html>

";
        // line 5
        $this->displayBlock('html_tag', $context, $blocks);
        // line 8
        echo "
";
        // line 9
        $this->displayBlock('head', $context, $blocks);
        // line 38
        echo "
";
        // line 39
        $this->displayBlock('body_tag', $context, $blocks);
        // line 42
        echo "
";
        // line 43
        $this->displayBlock('body_start', $context, $blocks);
        // line 45
        echo "
";
        // line 46
        $this->displayBlock('body', $context, $blocks);
        // line 126
        echo "
";
        // line 127
        $this->displayBlock('body_end', $context, $blocks);
        // line 129
        echo "</body>
</html>
";
    }

    // line 5
    public function block_html_tag($context, array $blocks = array())
    {
        // line 6
        echo "<html lang=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "locale", array()), "html", null, true);
        echo "\">
";
    }

    // line 9
    public function block_head($context, array $blocks = array())
    {
        // line 10
        echo "<head>
    <meta charset=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
    ";
        // line 12
        $this->displayBlock('head_style', $context, $blocks);
        // line 19
        echo "
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

    ";
        // line 22
        $this->displayBlock('head_script', $context, $blocks);
        // line 31
        echo "
    <title>";
        // line 32
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 33
        $this->displayBlock('favicon', $context, $blocks);
        // line 34
        echo "    ";
        $this->displayBlock('head_bottom', $context, $blocks);
        // line 36
        echo "</head>
";
    }

    // line 12
    public function block_head_style($context, array $blocks = array())
    {
        // line 13
        echo "    ";
        // line 14
        echo "    ";
        // line 18
        echo "    ";
    }

    // line 22
    public function block_head_script($context, array $blocks = array())
    {
        // line 23
        echo "    ";
        // line 30
        echo "    ";
    }

    // line 32
    public function block_title($context, array $blocks = array())
    {
        echo "Mopa Bootstrap Bundle";
    }

    // line 33
    public function block_favicon($context, array $blocks = array())
    {
        echo "<link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />";
    }

    // line 34
    public function block_head_bottom($context, array $blocks = array())
    {
        // line 35
        echo "    ";
    }

    // line 39
    public function block_body_tag($context, array $blocks = array())
    {
        // line 40
        echo "<body>
";
    }

    // line 43
    public function block_body_start($context, array $blocks = array())
    {
    }

    // line 46
    public function block_body($context, array $blocks = array())
    {
        // line 47
        echo "    ";
        $this->displayBlock('navbar', $context, $blocks);
        // line 50
        echo "
    ";
        // line 51
        $this->displayBlock('container', $context, $blocks);
        // line 105
        echo "
    ";
        // line 106
        $this->displayBlock('body_end_before_js', $context, $blocks);
        // line 108
        echo "
    ";
        // line 109
        $this->displayBlock('foot_script', $context, $blocks);
    }

    // line 47
    public function block_navbar($context, array $blocks = array())
    {
        // line 48
        echo "    <!-- No navbar included here to reduce dependencies, see https://github.com/phiamo/MopaBootstrapSandboxBundle/blob/master/Resources/views/base.html.twig for howto include it -->
    ";
    }

    // line 51
    public function block_container($context, array $blocks = array())
    {
        // line 52
        echo "    ";
        $this->displayBlock('container_div_start', $context, $blocks);
        // line 53
        echo "        ";
        $this->displayBlock('header', $context, $blocks);
        // line 55
        echo "
        ";
        // line 56
        $this->displayBlock('content_div_start', $context, $blocks);
        // line 57
        echo "            ";
        $this->displayBlock('page_header', $context, $blocks);
        // line 62
        echo "
            ";
        // line 63
        $this->displayBlock('flashes', $context, $blocks);
        // line 72
        echo "
            ";
        // line 73
        $this->displayBlock('content_row', $context, $blocks);
        // line 89
        echo "
        ";
        // line 90
        $this->displayBlock('content_div_end', $context, $blocks);
        // line 91
        echo "
        ";
        // line 92
        $this->displayBlock('footer_tag_start', $context, $blocks);
        // line 95
        echo "
        ";
        // line 96
        $this->displayBlock('footer', $context, $blocks);
        // line 99
        echo "
        ";
        // line 100
        $this->displayBlock('footer_tag_end', $context, $blocks);
        // line 103
        echo "    ";
        $this->displayBlock('container_div_end', $context, $blocks);
        // line 104
        echo "    ";
    }

    // line 52
    public function block_container_div_start($context, array $blocks = array())
    {
        echo "<div class=\"";
        $this->displayBlock('container_class', $context, $blocks);
        echo "\">";
    }

    public function block_container_class($context, array $blocks = array())
    {
        echo "container";
    }

    // line 53
    public function block_header($context, array $blocks = array())
    {
        // line 54
        echo "        ";
    }

    // line 56
    public function block_content_div_start($context, array $blocks = array())
    {
        echo "<div class=\"content\">";
    }

    // line 57
    public function block_page_header($context, array $blocks = array())
    {
        // line 58
        echo "            <div class=\"page-header\">
                  <h1>";
        // line 59
        $this->displayBlock('headline', $context, $blocks);
        echo "</h1>
            </div>
            ";
    }

    public function block_headline($context, array $blocks = array())
    {
        echo "Mopa Bootstrap Bundle";
    }

    // line 63
    public function block_flashes($context, array $blocks = array())
    {
        // line 64
        echo "            ";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "peekAll", array())) > 0)) {
            // line 65
            echo "            <div class=\"row\">
                <div class=\"col-sm-12\">
                ";
            // line 67
            echo $context["__internal_c6cc0bf38aee1b56d335bd657d4a6301070dbfcb6b783bb77e0c2f1107e5155d"]->getsession_flash();
            echo "
                </div>
            </div>
            ";
        }
        // line 71
        echo "            ";
    }

    // line 73
    public function block_content_row($context, array $blocks = array())
    {
        // line 74
        echo "            <div class=\"row\">
                ";
        // line 75
        $this->displayBlock('content', $context, $blocks);
        // line 87
        echo "            </div>
            ";
    }

    // line 75
    public function block_content($context, array $blocks = array())
    {
        // line 76
        echo "                <div class=\"col-sm-9\">
                    ";
        // line 77
        $this->displayBlock('content_content', $context, $blocks);
        // line 80
        echo "                </div>
                <div class=\"col-sm-3\">
                    ";
        // line 82
        $this->displayBlock('content_sidebar', $context, $blocks);
        // line 85
        echo "                </div>
                ";
    }

    // line 77
    public function block_content_content($context, array $blocks = array())
    {
        // line 78
        echo "                    <strong>Hier könnte Ihre Werbung stehen ... </strong>
                    ";
    }

    // line 82
    public function block_content_sidebar($context, array $blocks = array())
    {
        // line 83
        echo "                    <h2>Sidebar</h2>
                    ";
    }

    // line 90
    public function block_content_div_end($context, array $blocks = array())
    {
        echo "</div>";
    }

    // line 92
    public function block_footer_tag_start($context, array $blocks = array())
    {
        // line 93
        echo "        <footer>
        ";
    }

    // line 96
    public function block_footer($context, array $blocks = array())
    {
        // line 97
        echo "        <p>&copy; <a href=\"http://www.mohrenweiserpartner.de\" target=\"_blank\">Mohrenweiser & Partner</a> 2011-2015</p>
        ";
    }

    // line 100
    public function block_footer_tag_end($context, array $blocks = array())
    {
        // line 101
        echo "        </footer>
        ";
    }

    // line 103
    public function block_container_div_end($context, array $blocks = array())
    {
        echo "</div><!-- /container -->";
    }

    // line 106
    public function block_body_end_before_js($context, array $blocks = array())
    {
        // line 107
        echo "    ";
    }

    // line 109
    public function block_foot_script($context, array $blocks = array())
    {
        // line 110
        echo "    ";
        // line 114
        echo "    ";
        $this->displayBlock('foot_script_assetic', $context, $blocks);
        // line 117
        echo "
    <script type=\"text/javascript\">
        \$(document).ready(function () {
            \$('[data-toggle=\"tooltip\"]').tooltip();
            \$('[data-toggle=\"popover\"]').popover();
        });
    </script>
    ";
    }

    // line 114
    public function block_foot_script_assetic($context, array $blocks = array())
    {
        // line 115
        echo "        ";
        // line 116
        echo "    ";
    }

    // line 127
    public function block_body_end($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "MopaBootstrapBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  460 => 127,  456 => 116,  454 => 115,  451 => 114,  440 => 117,  437 => 114,  435 => 110,  432 => 109,  428 => 107,  425 => 106,  419 => 103,  414 => 101,  411 => 100,  406 => 97,  403 => 96,  398 => 93,  395 => 92,  389 => 90,  384 => 83,  381 => 82,  376 => 78,  373 => 77,  368 => 85,  366 => 82,  362 => 80,  360 => 77,  357 => 76,  354 => 75,  349 => 87,  347 => 75,  344 => 74,  341 => 73,  337 => 71,  330 => 67,  326 => 65,  323 => 64,  320 => 63,  308 => 59,  305 => 58,  302 => 57,  296 => 56,  292 => 54,  289 => 53,  276 => 52,  272 => 104,  269 => 103,  267 => 100,  264 => 99,  262 => 96,  259 => 95,  257 => 92,  254 => 91,  252 => 90,  249 => 89,  247 => 73,  244 => 72,  242 => 63,  239 => 62,  236 => 57,  234 => 56,  231 => 55,  228 => 53,  225 => 52,  222 => 51,  217 => 48,  214 => 47,  210 => 109,  207 => 108,  205 => 106,  202 => 105,  200 => 51,  197 => 50,  194 => 47,  191 => 46,  186 => 43,  181 => 40,  178 => 39,  174 => 35,  171 => 34,  163 => 33,  157 => 32,  153 => 30,  151 => 23,  148 => 22,  144 => 18,  142 => 14,  140 => 13,  137 => 12,  132 => 36,  129 => 34,  127 => 33,  123 => 32,  120 => 31,  118 => 22,  113 => 19,  111 => 12,  107 => 11,  104 => 10,  101 => 9,  94 => 6,  91 => 5,  85 => 129,  83 => 127,  80 => 126,  78 => 46,  75 => 45,  73 => 43,  70 => 42,  68 => 39,  65 => 38,  63 => 9,  60 => 8,  58 => 5,  53 => 2,  51 => 1,);
    }
}
/* {% from 'MopaBootstrapBundle::flash.html.twig' import session_flash %}*/
/* */
/* <!DOCTYPE html>*/
/* */
/* {% block html_tag %}*/
/* <html lang="{{ app.request.locale }}">*/
/* {% endblock html_tag %}*/
/* */
/* {% block head %}*/
/* <head>*/
/*     <meta charset="{{ _charset }}" />*/
/*     {% block head_style %}*/
/*     {# Override this block to add your own files! #}*/
/*     {# To use this without less or sass use the base.html.twig template as your base*/
/*      # Be sure you understand whats going on: have a look into*/
/*      # https://github.com/phiamo/MopaBootstrapBundle/blob/master/Resources/doc/css-vs-less.md*/
/*      #}*/
/*     {% endblock head_style %}*/
/* */
/*     <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/* */
/*     {% block head_script %}*/
/*     {# Overwrite this block to add your own js here, to get them generated into final files*/
/*     {% javascripts*/
/*         'http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js'*/
/*     %}*/
/*         <script type="text/javascript" src="{{ asset_url }}"></script>*/
/*     {% endjavascripts %}*/
/*      #}*/
/*     {% endblock head_script %}*/
/* */
/*     <title>{% block title %}Mopa Bootstrap Bundle{% endblock title %}</title>*/
/*     {% block favicon %}<link rel="shortcut icon" href="{{ asset('favicon.ico') }}" />{% endblock %}*/
/*     {% block head_bottom %}*/
/*     {% endblock head_bottom %}*/
/* </head>*/
/* {% endblock head %}*/
/* */
/* {% block body_tag %}*/
/* <body>*/
/* {% endblock body_tag %}*/
/* */
/* {% block body_start %}*/
/* {% endblock body_start %}*/
/* */
/* {% block body %}*/
/*     {% block navbar %}*/
/*     <!-- No navbar included here to reduce dependencies, see https://github.com/phiamo/MopaBootstrapSandboxBundle/blob/master/Resources/views/base.html.twig for howto include it -->*/
/*     {% endblock navbar %}*/
/* */
/*     {% block container %}*/
/*     {% block container_div_start %}<div class="{% block container_class %}container{% endblock container_class %}">{% endblock container_div_start %}*/
/*         {% block header %}*/
/*         {% endblock header %}*/
/* */
/*         {% block content_div_start %}<div class="content">{% endblock content_div_start %}*/
/*             {% block page_header %}*/
/*             <div class="page-header">*/
/*                   <h1>{% block headline %}Mopa Bootstrap Bundle{% endblock headline %}</h1>*/
/*             </div>*/
/*             {% endblock page_header %}*/
/* */
/*             {% block flashes %}*/
/*             {% if app.session.flashbag.peekAll|length > 0 %}*/
/*             <div class="row">*/
/*                 <div class="col-sm-12">*/
/*                 {{ session_flash() }}*/
/*                 </div>*/
/*             </div>*/
/*             {% endif %}*/
/*             {% endblock flashes %}*/
/* */
/*             {% block content_row %}*/
/*             <div class="row">*/
/*                 {% block content %}*/
/*                 <div class="col-sm-9">*/
/*                     {% block content_content %}*/
/*                     <strong>Hier könnte Ihre Werbung stehen ... </strong>*/
/*                     {% endblock content_content %}*/
/*                 </div>*/
/*                 <div class="col-sm-3">*/
/*                     {% block content_sidebar %}*/
/*                     <h2>Sidebar</h2>*/
/*                     {% endblock content_sidebar %}*/
/*                 </div>*/
/*                 {% endblock content %}*/
/*             </div>*/
/*             {% endblock content_row %}*/
/* */
/*         {% block content_div_end %}</div>{% endblock content_div_end %}*/
/* */
/*         {% block footer_tag_start %}*/
/*         <footer>*/
/*         {% endblock footer_tag_start %}*/
/* */
/*         {% block footer %}*/
/*         <p>&copy; <a href="http://www.mohrenweiserpartner.de" target="_blank">Mohrenweiser & Partner</a> 2011-2015</p>*/
/*         {% endblock footer %}*/
/* */
/*         {% block footer_tag_end %}*/
/*         </footer>*/
/*         {% endblock footer_tag_end %}*/
/*     {% block container_div_end %}</div><!-- /container -->{% endblock container_div_end %}*/
/*     {% endblock container %}*/
/* */
/*     {% block body_end_before_js %}*/
/*     {% endblock body_end_before_js %}*/
/* */
/*     {% block foot_script %}*/
/*     {# To only use a subset or add more js overwrite and copy paste this block*/
/*     To speed up page loads save a copy of jQuery in your project and override this block to include the correct path*/
/*     Otherwise the regeneration is done on every load in dev more with use_controller: true*/
/*      #}*/
/*     {% block foot_script_assetic %}*/
/*         {# Please add the javascripts you need in your project #}*/
/*     {% endblock foot_script_assetic %}*/
/* */
/*     <script type="text/javascript">*/
/*         $(document).ready(function () {*/
/*             $('[data-toggle="tooltip"]').tooltip();*/
/*             $('[data-toggle="popover"]').popover();*/
/*         });*/
/*     </script>*/
/*     {% endblock foot_script %}*/
/* {% endblock body %}*/
/* */
/* {% block body_end %}*/
/* {% endblock body_end %}*/
/* </body>*/
/* </html>*/
/* */
