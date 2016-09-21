<?php

/* MopaBootstrapBundle::base_initializr.html.twig */
class __TwigTemplate_9615b8ffe3d624e3924735577cde865687f14004b32e29e1323d3294e01ac932 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MopaBootstrapBundle::base_less.html.twig", "MopaBootstrapBundle::base_initializr.html.twig", 1);
        $this->blocks = array(
            'html_tag' => array($this, 'block_html_tag'),
            'head' => array($this, 'block_head'),
            'dns_prefetch' => array($this, 'block_dns_prefetch'),
            'title' => array($this, 'block_title'),
            'head_style' => array($this, 'block_head_style'),
            'head_script' => array($this, 'block_head_script'),
            'body_start' => array($this, 'block_body_start'),
            'body' => array($this, 'block_body'),
            'navbar' => array($this, 'block_navbar'),
            'container' => array($this, 'block_container'),
            'foot_script' => array($this, 'block_foot_script'),
            'jquery' => array($this, 'block_jquery'),
            'jquery_cdn_url' => array($this, 'block_jquery_cdn_url'),
            'jquery_local_url' => array($this, 'block_jquery_local_url'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MopaBootstrapBundle::base_less.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_html_tag($context, array $blocks = array())
    {
        // line 4
        echo "<!--[if lt IE 7]>      <html class=\"no-js lt-ie9 lt-ie8 lt-ie7\"> <![endif]-->
<!--[if IE 7]>         <html class=\"no-js lt-ie9 lt-ie8\"> <![endif]-->
<!--[if IE 8]>         <html class=\"no-js lt-ie9\"> <![endif]-->
<!--[if gt IE 8]><!--> <html class=\"no-js\"> <!--<![endif]-->

";
    }

    // line 14
    public function block_head($context, array $blocks = array())
    {
        // line 15
        echo "<head>
    <meta charset=\"utf-8\" />

    ";
        // line 20
        echo "    ";
        $this->displayBlock('dns_prefetch', $context, $blocks);
        // line 27
        echo "
    ";
        // line 33
        echo "    <!--[if IE]><meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\" /><![endif]-->

    ";
        // line 37
        echo "    <meta name=\"viewport\" content=\"width=device-width\" />

    ";
        // line 39
        $context["meta_robots"] = "";
        // line 40
        echo "    ";
        $context["metatitle"] = "";
        // line 41
        echo "    ";
        if (array_key_exists("meta", $context)) {
            // line 42
            echo "        ";
            if ($this->getAttribute((isset($context["meta"]) ? $context["meta"] : null), "description", array(), "any", true, true)) {
                // line 43
                echo "            <meta name=\"description\" content=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["meta"]) ? $context["meta"] : null), "description", array(), "array"), "html", null, true);
                echo "\" />
        ";
            }
            // line 45
            echo "        ";
            if ($this->getAttribute((isset($context["meta"]) ? $context["meta"] : null), "keywords", array(), "any", true, true)) {
                // line 46
                echo "            <meta name=\"keywords\" content=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["meta"]) ? $context["meta"] : null), "keywords", array(), "array"), "html", null, true);
                echo "\" />
        ";
            }
            // line 48
            echo "        ";
            if ($this->getAttribute((isset($context["meta"]) ? $context["meta"] : null), "author_name", array(), "any", true, true)) {
                // line 49
                echo "            <meta name=\"author\" content=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["meta"]) ? $context["meta"] : null), "author_name", array(), "array"), "html", null, true);
                echo "\" />
        ";
            }
            // line 51
            echo "        ";
            if (($this->getAttribute((isset($context["meta"]) ? $context["meta"] : null), "author_url", array(), "any", true, true) && $this->getAttribute((isset($context["meta"]) ? $context["meta"] : null), "author_name", array(), "any", true, true))) {
                // line 52
                echo "            ";
                // line 53
                echo "            <link rel=\"author\" href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["meta"]) ? $context["meta"] : null), "author_url", array(), "array"), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["meta"]) ? $context["meta"] : null), "author_name", array(), "array"), "html", null, true);
                echo "\" />
        ";
            }
            // line 55
            echo "        ";
            if ($this->getAttribute((isset($context["meta"]) ? $context["meta"] : null), "title", array(), "any", true, true)) {
                // line 56
                echo "            ";
                $context["metatitle"] = $this->getAttribute((isset($context["meta"]) ? $context["meta"] : null), "title", array());
                // line 57
                echo "        ";
            }
            // line 58
            echo "
        ";
            // line 61
            echo "
        ";
            // line 65
            echo "
        ";
            // line 68
            echo "
        <link rel=\"shortcut icon\" href=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
            echo "\" />
        <link rel=\"apple-touch-icon\" href=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("apple-touch-icon.png"), "html", null, true);
            echo "\" />

        ";
            // line 73
            echo "        ";
            if ($this->getAttribute((isset($context["meta"]) ? $context["meta"] : null), "sitemap", array(), "array", true, true)) {
                // line 74
                echo "        <link rel=\"sitemap\" type=\"application/xml\" title=\"Sitemap\" href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["meta"]) ? $context["meta"] : null), "sitemap", array(), "array"), "html", null, true);
                echo "\" />
        ";
            }
            // line 76
            echo "
        ";
            // line 78
            echo "        ";
            if ($this->getAttribute((isset($context["meta"]) ? $context["meta"] : null), "feed_atom", array(), "array", true, true)) {
                // line 79
                echo "        <link rel=\"alternate\" type=\"application/atom+xml\" title=\"Atom\" href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["meta"]) ? $context["meta"] : null), "feed_atom", array(), "array"), "html", null, true);
                echo "\" />
        ";
            }
            // line 81
            echo "        ";
            if ($this->getAttribute((isset($context["meta"]) ? $context["meta"] : null), "feed_rss", array(), "array", true, true)) {
                // line 82
                echo "        <link rel=\"alternate\" type=\"application/rss+xml\" title=\"RSS\" href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["meta"]) ? $context["meta"] : null), "feed_rss", array(), "array"), "html", null, true);
                echo "\" />
        ";
            }
            // line 84
            echo "
        ";
            // line 86
            echo "        ";
            if ($this->getAttribute((isset($context["meta"]) ? $context["meta"] : null), "noindex", array(), "array")) {
                // line 87
                echo "            ";
                $context["meta_robots"] = "noindex,";
                // line 88
                echo "        ";
            }
            // line 89
            echo "        ";
            if ($this->getAttribute((isset($context["meta"]) ? $context["meta"] : null), "nofollow", array(), "array")) {
                // line 90
                echo "            ";
                $context["meta_robots"] = ((isset($context["meta_robots"]) ? $context["meta_robots"] : null) . "nofollow");
                // line 91
                echo "        ";
            } else {
                // line 92
                echo "            ";
                $context["meta_robots"] = ((isset($context["meta_robots"]) ? $context["meta_robots"] : null) . "follow");
                // line 93
                echo "        ";
            }
            // line 94
            echo "    ";
        }
        // line 95
        echo "
    <meta name=\"robots\" content=\"";
        // line 96
        echo twig_escape_filter($this->env, (isset($context["meta_robots"]) ? $context["meta_robots"] : null), "html", null, true);
        echo "\" />
    <title>";
        // line 97
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    ";
        // line 99
        if ($this->getAttribute((isset($context["google"]) ? $context["google"] : null), "wt", array(), "array", true, true)) {
            // line 100
            echo "        <meta name=\"google-site-verification\" content=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["google"]) ? $context["google"] : null), "wt", array(), "array"), "html", null, true);
            echo "\" />
    ";
        }
        // line 102
        echo "
    ";
        // line 106
        echo "
    ";
        // line 108
        echo "    ";
        $this->displayBlock('head_style', $context, $blocks);
        // line 117
        echo "
    ";
        // line 118
        $this->displayBlock('head_script', $context, $blocks);
        // line 121
        echo "</head>
";
    }

    // line 20
    public function block_dns_prefetch($context, array $blocks = array())
    {
        // line 21
        echo "        ";
        if (array_key_exists("dns_prefetch", $context)) {
            // line 22
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["dns_prefetch"]) ? $context["dns_prefetch"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["domain"]) {
                // line 23
                echo "            <link rel=\"dns-prefetch\" href=\"";
                echo twig_escape_filter($this->env, $context["domain"], "html", null, true);
                echo "\" />
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['domain'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "        ";
        }
        // line 26
        echo "    ";
    }

    // line 97
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, (isset($context["metatitle"]) ? $context["metatitle"] : null), "html", null, true);
    }

    // line 108
    public function block_head_style($context, array $blocks = array())
    {
        // line 109
        echo "        ";
        $this->displayParentBlock("head_style", $context, $blocks);
        echo "

        ";
        // line 113
        echo "        ";
        if ((isset($context["diagnostic_mode"]) ? $context["diagnostic_mode"] : null)) {
            // line 114
            echo "            <link href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/mopabootstrap/css/diagnostic.css"), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
        ";
        }
        // line 116
        echo "    ";
    }

    // line 118
    public function block_head_script($context, array $blocks = array())
    {
        // line 119
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/mopabootstrap/js/modernizr-2.7.1-respond-1.4.2.min.js"), "html", null, true);
        echo "\"></script>
    ";
    }

    // line 124
    public function block_body_start($context, array $blocks = array())
    {
        // line 125
        echo "<!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href=\"http://browsehappy.com/\">Upgrade to a different browser</a> or <a href=\"http://www.google.com/chromeframe/?redirect=true\">install Google Chrome Frame</a> to experience this site.</p><![endif]-->
";
    }

    // line 128
    public function block_body($context, array $blocks = array())
    {
        // line 129
        echo "    ";
        $this->displayBlock('navbar', $context, $blocks);
        // line 132
        echo "
    ";
        // line 133
        $this->displayBlock('container', $context, $blocks);
        // line 136
        echo "
    ";
        // line 137
        $this->displayBlock('foot_script', $context, $blocks);
    }

    // line 129
    public function block_navbar($context, array $blocks = array())
    {
        // line 130
        echo "    ";
        $this->displayParentBlock("navbar", $context, $blocks);
        echo "
    ";
    }

    // line 133
    public function block_container($context, array $blocks = array())
    {
        // line 134
        echo "    ";
        $this->displayParentBlock("container", $context, $blocks);
        echo "
    ";
    }

    // line 137
    public function block_foot_script($context, array $blocks = array())
    {
        // line 138
        echo "    ";
        $this->displayBlock('jquery', $context, $blocks);
        // line 144
        echo "    ";
        // line 146
        echo "    ";
        // line 148
        echo "    ";
        if ($this->getAttribute((isset($context["google"]) ? $context["google"] : null), "analytics", array(), "array", true, true)) {
            // line 149
            echo "    <script>
        (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
        function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
        e=o.createElement(i);r=o.getElementsByTagName(i)[0];
        e.src='//www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
        ga('create','";
            // line 155
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["google"]) ? $context["google"] : null), "analytics", array(), "array"), "html", null, true);
            echo "');ga('send','pageview');
\t";
            // line 156
            if ($this->getAttribute((isset($context["google"]) ? $context["google"] : null), "extendedanalytics", array(), "array")) {
                // line 157
                echo "\t\tga('require', 'displayfeatures');
\t";
            }
            // line 159
            echo "    </script>
    ";
        }
        // line 161
        echo "    ";
        $this->displayParentBlock("foot_script", $context, $blocks);
        echo "
    ";
    }

    // line 138
    public function block_jquery($context, array $blocks = array())
    {
        // line 139
        echo "      ";
        // line 141
        echo "      <script src=\"";
        $this->displayBlock('jquery_cdn_url', $context, $blocks);
        echo "\"></script>
      <script>window.jQuery || document.write('<script src=\"";
        // line 142
        $this->displayBlock('jquery_local_url', $context, $blocks);
        echo "\"><\\/script>')</script>
    ";
    }

    // line 141
    public function block_jquery_cdn_url($context, array $blocks = array())
    {
        echo "//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js";
    }

    // line 142
    public function block_jquery_local_url($context, array $blocks = array())
    {
        echo "../js/libs/jquery-1.11.0.min.js";
    }

    public function getTemplateName()
    {
        return "MopaBootstrapBundle::base_initializr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  427 => 142,  421 => 141,  415 => 142,  410 => 141,  408 => 139,  405 => 138,  398 => 161,  394 => 159,  390 => 157,  388 => 156,  384 => 155,  376 => 149,  373 => 148,  371 => 146,  369 => 144,  366 => 138,  363 => 137,  356 => 134,  353 => 133,  346 => 130,  343 => 129,  339 => 137,  336 => 136,  334 => 133,  331 => 132,  328 => 129,  325 => 128,  320 => 125,  317 => 124,  310 => 119,  307 => 118,  303 => 116,  297 => 114,  294 => 113,  288 => 109,  285 => 108,  279 => 97,  275 => 26,  272 => 25,  263 => 23,  258 => 22,  255 => 21,  252 => 20,  247 => 121,  245 => 118,  242 => 117,  239 => 108,  236 => 106,  233 => 102,  227 => 100,  225 => 99,  220 => 97,  216 => 96,  213 => 95,  210 => 94,  207 => 93,  204 => 92,  201 => 91,  198 => 90,  195 => 89,  192 => 88,  189 => 87,  186 => 86,  183 => 84,  177 => 82,  174 => 81,  168 => 79,  165 => 78,  162 => 76,  156 => 74,  153 => 73,  148 => 70,  144 => 69,  141 => 68,  138 => 65,  135 => 61,  132 => 58,  129 => 57,  126 => 56,  123 => 55,  115 => 53,  113 => 52,  110 => 51,  104 => 49,  101 => 48,  95 => 46,  92 => 45,  86 => 43,  83 => 42,  80 => 41,  77 => 40,  75 => 39,  71 => 37,  67 => 33,  64 => 27,  61 => 20,  56 => 15,  53 => 14,  44 => 4,  41 => 3,  11 => 1,);
    }
}
/* {% extends 'MopaBootstrapBundle::base_less.html.twig' %}*/
/* */
/* {% block html_tag %}*/
/* <!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->*/
/* <!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->*/
/* <!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->*/
/* <!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->*/
/* */
/* {# make your site working offline with Application Cache (AppCache)*/
/*    http://www.html5rocks.com/en/tutorials/appcache/beginner/*/
/* <html manifest="manifest.appcache"> #}*/
/* {% endblock html_tag %}*/
/* */
/* {% block head %}*/
/* <head>*/
/*     <meta charset="utf-8" />*/
/* */
/*     {# About DNS prefetching: http://html5boilerplate.com/docs/DNS-Prefetching/*/
/*        If you fetch data from other domains, add them too #}*/
/*     {% block dns_prefetch %}*/
/*         {% if dns_prefetch is defined %}*/
/*             {% for domain in dns_prefetch %}*/
/*             <link rel="dns-prefetch" href="{{ domain }}" />*/
/*             {% endfor %}*/
/*         {% endif %}*/
/*     {% endblock dns_prefetch %}*/
/* */
/*     {# IE10 does not support plugins, such as Flash, in Metro Mode.*/
/*        If your site requires plugins, you can let users know that via the*/
/*        X-UA-Compatible meta element, which will prompt them to switch to Desktop Mode.*/
/*        http://html5boilerplate.com/docs/html-head/#prompt-users-to-switch-to-desktop-mode-in-ie10-metro*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1,requiresActiveX=true"> #}*/
/*     <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" /><![endif]-->*/
/* */
/*     {# WARNING: do not add "initial-scale=1" to viewport, breaks iOS view!*/
/*        https://github.com/h5bp/html5-boilerplate/issues/824 #}*/
/*     <meta name="viewport" content="width=device-width" />*/
/* */
/*     {% set meta_robots = '' %}*/
/*     {% set metatitle = '' %}*/
/*     {% if meta is defined %}*/
/*         {% if meta.description is defined %}*/
/*             <meta name="description" content="{{ meta['description'] }}" />*/
/*         {% endif %}*/
/*         {% if meta.keywords is defined %}*/
/*             <meta name="keywords" content="{{ meta['keywords'] }}" />*/
/*         {% endif %}*/
/*         {% if meta.author_name is defined %}*/
/*             <meta name="author" content="{{ meta['author_name'] }}" />*/
/*         {% endif %}*/
/*         {% if meta.author_url is defined and meta.author_name is defined %}*/
/*             {# example: href="/humans.txt" #}*/
/*             <link rel="author" href="{{ meta['author_url'] }}" title="{{ meta['author_name'] }}" />*/
/*         {% endif %}*/
/*         {% if meta.title is defined %}*/
/*             {% set metatitle = meta.title %}*/
/*         {% endif %}*/
/* */
/*         {# to be removed as HTML5 has no such tag*/
/*         <meta name="title" content="{{ meta_title|default('') }}"> #}*/
/* */
/*         {# read more about canonical urls and then decide whether enable this part or remove*/
/*            http://html5boilerplate.com/docs/html-head/#canonical-url*/
/*         <link rel="canonical" href=""> #}*/
/* */
/*         {# Official short link, poorly supported now*/
/*         <link rel="shortlink" href="h5bp.com"> #}*/
/* */
/*         <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" />*/
/*         <link rel="apple-touch-icon" href="{{ asset('apple-touch-icon.png') }}" />*/
/* */
/*         {# allow BOTs see SITEMAP #}*/
/*         {% if meta['sitemap'] is defined %}*/
/*         <link rel="sitemap" type="application/xml" title="Sitemap" href="{{ meta['sitemap'] }}" />*/
/*         {% endif %}*/
/* */
/*         {# Feeds RSS & ATOM #}*/
/*         {% if meta['feed_atom'] is defined %}*/
/*         <link rel="alternate" type="application/atom+xml" title="Atom" href="{{ meta['feed_atom'] }}" />*/
/*         {% endif %}*/
/*         {% if meta['feed_rss'] is defined %}*/
/*         <link rel="alternate" type="application/rss+xml" title="RSS" href="{{ meta['feed_rss'] }}" />*/
/*         {% endif %}*/
/* */
/*         {# this should be allowed to be changed from controller scope #}*/
/*         {% if meta['noindex'] %}*/
/*             {% set meta_robots = 'noindex,' %}*/
/*         {% endif %}*/
/*         {% if meta['nofollow'] %}*/
/*             {% set meta_robots = meta_robots ~ 'nofollow' %}*/
/*         {% else %}*/
/*             {% set meta_robots = meta_robots ~ 'follow' %}*/
/*         {% endif %}*/
/*     {% endif %}*/
/* */
/*     <meta name="robots" content="{{ meta_robots }}" />*/
/*     <title>{% block title%}{{ metatitle }}{% endblock %}</title>*/
/* */
/*     {% if google['wt'] is defined %}*/
/*         <meta name="google-site-verification" content="{{ google['wt'] }}" />*/
/*     {% endif %}*/
/* */
/*     {# Site Search Browser plugin:*/
/*        http://www.google.com/search?ie=UTF-8&q=how+to+make+browser+search+plugin*/
/*     <link rel="search" title="" type="application/opensearchdescription+xml" href=""> #}*/
/* */
/*     {# Override this block to add your own files! #}*/
/*     {% block head_style %}*/
/*         {{ parent() }}*/
/* */
/*         {# Find places where your CSS is broken, docs how to use:*/
/*            http://meyerweb.com/eric/tools/css/diagnostics/' #}*/
/*         {% if diagnostic_mode %}*/
/*             <link href="{{ asset('bundles/mopabootstrap/css/diagnostic.css') }}" type="text/css" rel="stylesheet" media="screen" />*/
/*         {% endif %}*/
/*     {% endblock head_style %}*/
/* */
/*     {% block head_script %}*/
/*         <script type="text/javascript" src="{{ asset('bundles/mopabootstrap/js/modernizr-2.7.1-respond-1.4.2.min.js') }}"></script>*/
/*     {% endblock head_script %}*/
/* </head>*/
/* {% endblock head %}*/
/* */
/* {% block body_start %}*/
/* <!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->*/
/* {% endblock body_start %}*/
/* */
/* {% block body %}*/
/*     {% block navbar %}*/
/*     {{ parent() }}*/
/*     {% endblock navbar %}*/
/* */
/*     {% block container %}*/
/*     {{ parent() }}*/
/*     {% endblock container %}*/
/* */
/*     {% block foot_script %}*/
/*     {% block jquery %}*/
/*       {# Load jQuery from Google CDN*/
/*        http://encosia.com/3-reasons-why-you-should-let-google-host-jquery-for-you/ #}*/
/*       <script src="{% block jquery_cdn_url %}//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js{% endblock jquery_cdn_url %}"></script>*/
/*       <script>window.jQuery || document.write('<script src="{% block jquery_local_url %}../js/libs/jquery-1.11.0.min.js{% endblock jquery_local_url %}"><\/script>')</script>*/
/*     {% endblock jquery %}*/
/*     {# Asynchronous Google Analytics snippet grabbed from:*/
/*        http://mathiasbynens.be/notes/async-analytics-snippet#dont-push-it #}*/
/*     {# more GA tweaks:*/
/*        http://html5boilerplate.com/docs/ga-augments/ #}*/
/*     {% if google['analytics'] is defined %}*/
/*     <script>*/
/*         (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=*/
/*         function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;*/
/*         e=o.createElement(i);r=o.getElementsByTagName(i)[0];*/
/*         e.src='//www.google-analytics.com/analytics.js';*/
/*         r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));*/
/*         ga('create','{{ google['analytics'] }}');ga('send','pageview');*/
/* 	{% if google['extendedanalytics'] %}*/
/* 		ga('require', 'displayfeatures');*/
/* 	{% endif %}*/
/*     </script>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/*     {% endblock foot_script %}*/
/* {% endblock body %}*/
/* */
