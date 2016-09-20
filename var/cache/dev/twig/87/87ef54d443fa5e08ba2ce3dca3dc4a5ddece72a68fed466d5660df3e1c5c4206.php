<?php

/* base.html.twig */
class __TwigTemplate_36da206cb0a946364c90fd0f2cc98818e8697b6b6ff73943c2e0aefd55c843db extends Twig_Template
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
        $__internal_6d5934884767e3a676d13fca8ebfdd83803cdd7ce1a2a7b41fbc12dc42651bb9 = $this->env->getExtension("native_profiler");
        $__internal_6d5934884767e3a676d13fca8ebfdd83803cdd7ce1a2a7b41fbc12dc42651bb9->enter($__internal_6d5934884767e3a676d13fca8ebfdd83803cdd7ce1a2a7b41fbc12dc42651bb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_6d5934884767e3a676d13fca8ebfdd83803cdd7ce1a2a7b41fbc12dc42651bb9->leave($__internal_6d5934884767e3a676d13fca8ebfdd83803cdd7ce1a2a7b41fbc12dc42651bb9_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_82ed78b7692355201894343346932a37b22a04c96013acd62e09a21ecc7e9e97 = $this->env->getExtension("native_profiler");
        $__internal_82ed78b7692355201894343346932a37b22a04c96013acd62e09a21ecc7e9e97->enter($__internal_82ed78b7692355201894343346932a37b22a04c96013acd62e09a21ecc7e9e97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AquaNote!";
        
        $__internal_82ed78b7692355201894343346932a37b22a04c96013acd62e09a21ecc7e9e97->leave($__internal_82ed78b7692355201894343346932a37b22a04c96013acd62e09a21ecc7e9e97_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2f52be8c90592d6a42ab1db15e66faf0a28b415dd8d26714819a244bf0fd09cc = $this->env->getExtension("native_profiler");
        $__internal_2f52be8c90592d6a42ab1db15e66faf0a28b415dd8d26714819a244bf0fd09cc->enter($__internal_2f52be8c90592d6a42ab1db15e66faf0a28b415dd8d26714819a244bf0fd09cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_2f52be8c90592d6a42ab1db15e66faf0a28b415dd8d26714819a244bf0fd09cc->leave($__internal_2f52be8c90592d6a42ab1db15e66faf0a28b415dd8d26714819a244bf0fd09cc_prof);

    }

    // line 30
    public function block_body($context, array $blocks = array())
    {
        $__internal_8407e4d1392cd336137ee0e7b93e344e831280d93787d098d4922af16b164627 = $this->env->getExtension("native_profiler");
        $__internal_8407e4d1392cd336137ee0e7b93e344e831280d93787d098d4922af16b164627->enter($__internal_8407e4d1392cd336137ee0e7b93e344e831280d93787d098d4922af16b164627_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8407e4d1392cd336137ee0e7b93e344e831280d93787d098d4922af16b164627->leave($__internal_8407e4d1392cd336137ee0e7b93e344e831280d93787d098d4922af16b164627_prof);

    }

    // line 37
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_04152339380055ff683508213184d2cee56f9b36673a40f206e553bac593fc5c = $this->env->getExtension("native_profiler");
        $__internal_04152339380055ff683508213184d2cee56f9b36673a40f206e553bac593fc5c->enter($__internal_04152339380055ff683508213184d2cee56f9b36673a40f206e553bac593fc5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 38
        echo "            <script src=\"//code.jquery.com/jquery-2.1.4.min.js\"></script>
            <script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_04152339380055ff683508213184d2cee56f9b36673a40f206e553bac593fc5c->leave($__internal_04152339380055ff683508213184d2cee56f9b36673a40f206e553bac593fc5c_prof);

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
