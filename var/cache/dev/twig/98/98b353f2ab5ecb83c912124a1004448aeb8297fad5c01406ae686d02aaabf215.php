<?php

/* base.html.twig */
class __TwigTemplate_989861df9a68cb57fdc4053cb6cbab1431a6f50f15c18711683fa0282012e2bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8f295001b6abd8a52614b94f95f3431be77b3a3b0d3a5681e725cad601e284cf = $this->env->getExtension("native_profiler");
        $__internal_8f295001b6abd8a52614b94f95f3431be77b3a3b0d3a5681e725cad601e284cf->enter($__internal_8f295001b6abd8a52614b94f95f3431be77b3a3b0d3a5681e725cad601e284cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <div class=\"search-bar\">
            <form method=\"GET\" action=\"\" class=\"js-sea-search sea-search\">
                <input type=\"search\" name=\"q\" placeholder=\"Search Sea Creatures\" autocomplete=\"off\" class=\"search-input\">
            </form>
        </div>
        <header class=\"header\">
            <img class=\"logo-icon\" src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/aquanote-logo.png"), "html", null, true);
        echo "\">
            <h1 class=\"logo\">AquaNote</h1>
            <ul class=\"navi\">
                <li class=\"search\"><a href=\"#\" class=\"js-header-search-toggle\"><i class=\"fa fa-search\"></i></a></li>
                <li><a href=\"#\">Login</a></li>
            </ul>
        </header>

        <div class=\"main-content\">
            ";
        // line 30
        $this->displayBlock('body', $context, $blocks);
        // line 31
        echo "        </div>

        <div class=\"footer\">
            <p class=\"footer-text\">Made with <span class=\"heart\"><3</span> <a href=\"https://knpuniversity.com\">KnpUniversity</a></p>
        </div>

        ";
        // line 37
        $this->displayBlock('javascripts', $context, $blocks);
        // line 41
        echo "    </body>
</html>
";
        
        $__internal_8f295001b6abd8a52614b94f95f3431be77b3a3b0d3a5681e725cad601e284cf->leave($__internal_8f295001b6abd8a52614b94f95f3431be77b3a3b0d3a5681e725cad601e284cf_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c59c4b4d606afab2afeedb37a94c3d891db215043a0d3ed1eecc2ed4d95b232b = $this->env->getExtension("native_profiler");
        $__internal_c59c4b4d606afab2afeedb37a94c3d891db215043a0d3ed1eecc2ed4d95b232b->enter($__internal_c59c4b4d606afab2afeedb37a94c3d891db215043a0d3ed1eecc2ed4d95b232b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AquaNote!";
        
        $__internal_c59c4b4d606afab2afeedb37a94c3d891db215043a0d3ed1eecc2ed4d95b232b->leave($__internal_c59c4b4d606afab2afeedb37a94c3d891db215043a0d3ed1eecc2ed4d95b232b_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_cbe7ef5cd3e3da7ad0d9cc562a4ab8789d49ceec7c2ee89cd3dea887667af3ae = $this->env->getExtension("native_profiler");
        $__internal_cbe7ef5cd3e3da7ad0d9cc562a4ab8789d49ceec7c2ee89cd3dea887667af3ae->enter($__internal_cbe7ef5cd3e3da7ad0d9cc562a4ab8789d49ceec7c2ee89cd3dea887667af3ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/styles.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/fontawesome/css/font-awesome.min.css"), "html", null, true);
        echo "\">
        ";
        
        $__internal_cbe7ef5cd3e3da7ad0d9cc562a4ab8789d49ceec7c2ee89cd3dea887667af3ae->leave($__internal_cbe7ef5cd3e3da7ad0d9cc562a4ab8789d49ceec7c2ee89cd3dea887667af3ae_prof);

    }

    // line 30
    public function block_body($context, array $blocks = array())
    {
        $__internal_6c1c8eb0dda1ecd17c92b6f67c5ed77cfa2291adcf065957d7b72b31af1e89b6 = $this->env->getExtension("native_profiler");
        $__internal_6c1c8eb0dda1ecd17c92b6f67c5ed77cfa2291adcf065957d7b72b31af1e89b6->enter($__internal_6c1c8eb0dda1ecd17c92b6f67c5ed77cfa2291adcf065957d7b72b31af1e89b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6c1c8eb0dda1ecd17c92b6f67c5ed77cfa2291adcf065957d7b72b31af1e89b6->leave($__internal_6c1c8eb0dda1ecd17c92b6f67c5ed77cfa2291adcf065957d7b72b31af1e89b6_prof);

    }

    // line 37
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9fdf434d1d1d2684d3c9d9cabd272b7e908e7caa2334c4438a42311746276390 = $this->env->getExtension("native_profiler");
        $__internal_9fdf434d1d1d2684d3c9d9cabd272b7e908e7caa2334c4438a42311746276390->enter($__internal_9fdf434d1d1d2684d3c9d9cabd272b7e908e7caa2334c4438a42311746276390_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 38
        echo "            <script src=\"//code.jquery.com/jquery-2.1.4.min.js\"></script>
            <script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_9fdf434d1d1d2684d3c9d9cabd272b7e908e7caa2334c4438a42311746276390->leave($__internal_9fdf434d1d1d2684d3c9d9cabd272b7e908e7caa2334c4438a42311746276390_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 39,  138 => 38,  132 => 37,  121 => 30,  112 => 10,  108 => 9,  103 => 8,  97 => 7,  85 => 5,  76 => 41,  74 => 37,  66 => 31,  64 => 30,  52 => 21,  39 => 12,  37 => 7,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="utf-8">*/
/*         <title>{% block title %}AquaNote!{% endblock %}</title>*/
/* */
/*         {% block stylesheets %}*/
/*             <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">*/
/*             <link rel="stylesheet" href="{{ asset('css/styles.css') }}">*/
/*             <link rel="stylesheet" href="{{ asset('vendor/fontawesome/css/font-awesome.min.css') }}">*/
/*         {% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         <div class="search-bar">*/
/*             <form method="GET" action="" class="js-sea-search sea-search">*/
/*                 <input type="search" name="q" placeholder="Search Sea Creatures" autocomplete="off" class="search-input">*/
/*             </form>*/
/*         </div>*/
/*         <header class="header">*/
/*             <img class="logo-icon" src="{{ asset('images/aquanote-logo.png') }}">*/
/*             <h1 class="logo">AquaNote</h1>*/
/*             <ul class="navi">*/
/*                 <li class="search"><a href="#" class="js-header-search-toggle"><i class="fa fa-search"></i></a></li>*/
/*                 <li><a href="#">Login</a></li>*/
/*             </ul>*/
/*         </header>*/
/* */
/*         <div class="main-content">*/
/*             {% block body %}{% endblock %}*/
/*         </div>*/
/* */
/*         <div class="footer">*/
/*             <p class="footer-text">Made with <span class="heart"><3</span> <a href="https://knpuniversity.com">KnpUniversity</a></p>*/
/*         </div>*/
/* */
/*         {% block javascripts %}*/
/*             <script src="//code.jquery.com/jquery-2.1.4.min.js"></script>*/
/*             <script src="{{ asset('js/main.js') }}"></script>*/
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
