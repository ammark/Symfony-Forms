<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_7386265da91b567b31bb12a09cf7a3fd4fcd6fc2eb570a52f482273a49355b11 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_702c891bb546e2295308a5995703e668d04d5a7ab01c5fcb6089e6be5e589a2d = $this->env->getExtension("native_profiler");
        $__internal_702c891bb546e2295308a5995703e668d04d5a7ab01c5fcb6089e6be5e589a2d->enter($__internal_702c891bb546e2295308a5995703e668d04d5a7ab01c5fcb6089e6be5e589a2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_702c891bb546e2295308a5995703e668d04d5a7ab01c5fcb6089e6be5e589a2d->leave($__internal_702c891bb546e2295308a5995703e668d04d5a7ab01c5fcb6089e6be5e589a2d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_05c2d7e30b70c4631413007b207693e471ddde17a27d5c0d2285e83d2141d9ef = $this->env->getExtension("native_profiler");
        $__internal_05c2d7e30b70c4631413007b207693e471ddde17a27d5c0d2285e83d2141d9ef->enter($__internal_05c2d7e30b70c4631413007b207693e471ddde17a27d5c0d2285e83d2141d9ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_05c2d7e30b70c4631413007b207693e471ddde17a27d5c0d2285e83d2141d9ef->leave($__internal_05c2d7e30b70c4631413007b207693e471ddde17a27d5c0d2285e83d2141d9ef_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_955a3ccdcfe3400d5726f8e27871e46e8f74e8c74273f965d5b4f288111a2e07 = $this->env->getExtension("native_profiler");
        $__internal_955a3ccdcfe3400d5726f8e27871e46e8f74e8c74273f965d5b4f288111a2e07->enter($__internal_955a3ccdcfe3400d5726f8e27871e46e8f74e8c74273f965d5b4f288111a2e07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_955a3ccdcfe3400d5726f8e27871e46e8f74e8c74273f965d5b4f288111a2e07->leave($__internal_955a3ccdcfe3400d5726f8e27871e46e8f74e8c74273f965d5b4f288111a2e07_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_23b568d3432607f7b0bfcd8f9a12af17a81702969ab414d3f3ff28450b82f519 = $this->env->getExtension("native_profiler");
        $__internal_23b568d3432607f7b0bfcd8f9a12af17a81702969ab414d3f3ff28450b82f519->enter($__internal_23b568d3432607f7b0bfcd8f9a12af17a81702969ab414d3f3ff28450b82f519_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_23b568d3432607f7b0bfcd8f9a12af17a81702969ab414d3f3ff28450b82f519->leave($__internal_23b568d3432607f7b0bfcd8f9a12af17a81702969ab414d3f3ff28450b82f519_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
