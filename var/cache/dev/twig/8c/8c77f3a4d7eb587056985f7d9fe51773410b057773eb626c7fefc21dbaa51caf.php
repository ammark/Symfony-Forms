<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_ca12291d05f22414e31f3a024558f767f9330b17855aa5d9939d8d7ff71e3903 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6c9b0b5929c35ecc1b62088b999ca447bf29c0cbdb1145651bdf27379219d693 = $this->env->getExtension("native_profiler");
        $__internal_6c9b0b5929c35ecc1b62088b999ca447bf29c0cbdb1145651bdf27379219d693->enter($__internal_6c9b0b5929c35ecc1b62088b999ca447bf29c0cbdb1145651bdf27379219d693_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6c9b0b5929c35ecc1b62088b999ca447bf29c0cbdb1145651bdf27379219d693->leave($__internal_6c9b0b5929c35ecc1b62088b999ca447bf29c0cbdb1145651bdf27379219d693_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5a77062a3d62fee48614d00d4cac8221f31cef1ed615bc1634f8e7a2a2044c3e = $this->env->getExtension("native_profiler");
        $__internal_5a77062a3d62fee48614d00d4cac8221f31cef1ed615bc1634f8e7a2a2044c3e->enter($__internal_5a77062a3d62fee48614d00d4cac8221f31cef1ed615bc1634f8e7a2a2044c3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_5a77062a3d62fee48614d00d4cac8221f31cef1ed615bc1634f8e7a2a2044c3e->leave($__internal_5a77062a3d62fee48614d00d4cac8221f31cef1ed615bc1634f8e7a2a2044c3e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_5497a2ac48ec5cb765c2a01e988041a8b63dbaa4825eb5fd728a3a84ffae241a = $this->env->getExtension("native_profiler");
        $__internal_5497a2ac48ec5cb765c2a01e988041a8b63dbaa4825eb5fd728a3a84ffae241a->enter($__internal_5497a2ac48ec5cb765c2a01e988041a8b63dbaa4825eb5fd728a3a84ffae241a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_5497a2ac48ec5cb765c2a01e988041a8b63dbaa4825eb5fd728a3a84ffae241a->leave($__internal_5497a2ac48ec5cb765c2a01e988041a8b63dbaa4825eb5fd728a3a84ffae241a_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_e7facbcabca348b86d71ea6be58967e7757048f80e7db3492af2bf472f57677c = $this->env->getExtension("native_profiler");
        $__internal_e7facbcabca348b86d71ea6be58967e7757048f80e7db3492af2bf472f57677c->enter($__internal_e7facbcabca348b86d71ea6be58967e7757048f80e7db3492af2bf472f57677c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_e7facbcabca348b86d71ea6be58967e7757048f80e7db3492af2bf472f57677c->leave($__internal_e7facbcabca348b86d71ea6be58967e7757048f80e7db3492af2bf472f57677c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
