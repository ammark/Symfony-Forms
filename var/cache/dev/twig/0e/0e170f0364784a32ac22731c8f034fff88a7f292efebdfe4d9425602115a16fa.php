<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_baf4ab603f69429eefcba35ee970d4da19e3811951ebd90f11cb048e7445cea9 extends Twig_Template
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
        $__internal_d79642d13e3366c62d543c3d34a73e0325cf19b70b0e3c9f74c0aecaea16bc44 = $this->env->getExtension("native_profiler");
        $__internal_d79642d13e3366c62d543c3d34a73e0325cf19b70b0e3c9f74c0aecaea16bc44->enter($__internal_d79642d13e3366c62d543c3d34a73e0325cf19b70b0e3c9f74c0aecaea16bc44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d79642d13e3366c62d543c3d34a73e0325cf19b70b0e3c9f74c0aecaea16bc44->leave($__internal_d79642d13e3366c62d543c3d34a73e0325cf19b70b0e3c9f74c0aecaea16bc44_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3ec5690917d1f8f080d900897579d32ac8ffd6c130075caf5ef6fc57199f1fcf = $this->env->getExtension("native_profiler");
        $__internal_3ec5690917d1f8f080d900897579d32ac8ffd6c130075caf5ef6fc57199f1fcf->enter($__internal_3ec5690917d1f8f080d900897579d32ac8ffd6c130075caf5ef6fc57199f1fcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_3ec5690917d1f8f080d900897579d32ac8ffd6c130075caf5ef6fc57199f1fcf->leave($__internal_3ec5690917d1f8f080d900897579d32ac8ffd6c130075caf5ef6fc57199f1fcf_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4664067b78b6498b8d0d73fe19af1db10a1d683cd9f5512bc657b666e6d29f43 = $this->env->getExtension("native_profiler");
        $__internal_4664067b78b6498b8d0d73fe19af1db10a1d683cd9f5512bc657b666e6d29f43->enter($__internal_4664067b78b6498b8d0d73fe19af1db10a1d683cd9f5512bc657b666e6d29f43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_4664067b78b6498b8d0d73fe19af1db10a1d683cd9f5512bc657b666e6d29f43->leave($__internal_4664067b78b6498b8d0d73fe19af1db10a1d683cd9f5512bc657b666e6d29f43_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_eef9c3b0491314453de26a583a3d8e7d054a483ab8357b24597378411526f885 = $this->env->getExtension("native_profiler");
        $__internal_eef9c3b0491314453de26a583a3d8e7d054a483ab8357b24597378411526f885->enter($__internal_eef9c3b0491314453de26a583a3d8e7d054a483ab8357b24597378411526f885_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_eef9c3b0491314453de26a583a3d8e7d054a483ab8357b24597378411526f885->leave($__internal_eef9c3b0491314453de26a583a3d8e7d054a483ab8357b24597378411526f885_prof);

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
