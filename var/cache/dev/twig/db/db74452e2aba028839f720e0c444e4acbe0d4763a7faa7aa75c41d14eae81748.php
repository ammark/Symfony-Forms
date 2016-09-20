<?php

/* main/homepage.html.twig */
class __TwigTemplate_69018bea28a1250aeb9b554279f5bcc6bc4ab41bac612ffe6afd0799ba151459 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "main/homepage.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7064ce0308fb0359012bd5d53356aa1cadc0af79fabe146cb8b96fa51e3f74ce = $this->env->getExtension("native_profiler");
        $__internal_7064ce0308fb0359012bd5d53356aa1cadc0af79fabe146cb8b96fa51e3f74ce->enter($__internal_7064ce0308fb0359012bd5d53356aa1cadc0af79fabe146cb8b96fa51e3f74ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "main/homepage.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7064ce0308fb0359012bd5d53356aa1cadc0af79fabe146cb8b96fa51e3f74ce->leave($__internal_7064ce0308fb0359012bd5d53356aa1cadc0af79fabe146cb8b96fa51e3f74ce_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_04a4673de0f8ded93ebe71b8c6fe6ed6e37938a8e57b1027820ad3cdc5cf2565 = $this->env->getExtension("native_profiler");
        $__internal_04a4673de0f8ded93ebe71b8c6fe6ed6e37938a8e57b1027820ad3cdc5cf2565->enter($__internal_04a4673de0f8ded93ebe71b8c6fe6ed6e37938a8e57b1027820ad3cdc5cf2565_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1 class=\"page-header text-center\">Welcome Aquanauts!</h1>
";
        
        $__internal_04a4673de0f8ded93ebe71b8c6fe6ed6e37938a8e57b1027820ad3cdc5cf2565->leave($__internal_04a4673de0f8ded93ebe71b8c6fe6ed6e37938a8e57b1027820ad3cdc5cf2565_prof);

    }

    public function getTemplateName()
    {
        return "main/homepage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1 class="page-header text-center">Welcome Aquanauts!</h1>*/
/* {% endblock %}*/
/* */
