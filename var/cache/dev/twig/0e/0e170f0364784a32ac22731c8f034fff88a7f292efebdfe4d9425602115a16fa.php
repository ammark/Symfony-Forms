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
        $__internal_a5afc561235b17170700260e74db62c814e844d089fbd5326e3b65aa52e988df = $this->env->getExtension("native_profiler");
        $__internal_a5afc561235b17170700260e74db62c814e844d089fbd5326e3b65aa52e988df->enter($__internal_a5afc561235b17170700260e74db62c814e844d089fbd5326e3b65aa52e988df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a5afc561235b17170700260e74db62c814e844d089fbd5326e3b65aa52e988df->leave($__internal_a5afc561235b17170700260e74db62c814e844d089fbd5326e3b65aa52e988df_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_054ea390dd742a1d5b2b94c680470cf67fa338d3b27d5b42218e39874ae684b4 = $this->env->getExtension("native_profiler");
        $__internal_054ea390dd742a1d5b2b94c680470cf67fa338d3b27d5b42218e39874ae684b4->enter($__internal_054ea390dd742a1d5b2b94c680470cf67fa338d3b27d5b42218e39874ae684b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_054ea390dd742a1d5b2b94c680470cf67fa338d3b27d5b42218e39874ae684b4->leave($__internal_054ea390dd742a1d5b2b94c680470cf67fa338d3b27d5b42218e39874ae684b4_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4b1cb090cd9c3fa90d74df998fa2d3e4771eb63ea4d72268599fbd75426a476d = $this->env->getExtension("native_profiler");
        $__internal_4b1cb090cd9c3fa90d74df998fa2d3e4771eb63ea4d72268599fbd75426a476d->enter($__internal_4b1cb090cd9c3fa90d74df998fa2d3e4771eb63ea4d72268599fbd75426a476d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_4b1cb090cd9c3fa90d74df998fa2d3e4771eb63ea4d72268599fbd75426a476d->leave($__internal_4b1cb090cd9c3fa90d74df998fa2d3e4771eb63ea4d72268599fbd75426a476d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_292e28e800eed218683b4ee4553c81d2bef59514b044fe071af7daafcf558959 = $this->env->getExtension("native_profiler");
        $__internal_292e28e800eed218683b4ee4553c81d2bef59514b044fe071af7daafcf558959->enter($__internal_292e28e800eed218683b4ee4553c81d2bef59514b044fe071af7daafcf558959_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_292e28e800eed218683b4ee4553c81d2bef59514b044fe071af7daafcf558959->leave($__internal_292e28e800eed218683b4ee4553c81d2bef59514b044fe071af7daafcf558959_prof);

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
