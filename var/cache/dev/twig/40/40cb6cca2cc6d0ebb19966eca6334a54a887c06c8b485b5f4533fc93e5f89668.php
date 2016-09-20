<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_3993fdfed1b53f2ba84d5227ea7000e0a0b4447db0ba54874f27ca84a508be66 extends Twig_Template
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
        $__internal_5dfcefad3220cdaf22078ff4b798f5afeed6383ffe409b8d2f75303c7fd2ecc4 = $this->env->getExtension("native_profiler");
        $__internal_5dfcefad3220cdaf22078ff4b798f5afeed6383ffe409b8d2f75303c7fd2ecc4->enter($__internal_5dfcefad3220cdaf22078ff4b798f5afeed6383ffe409b8d2f75303c7fd2ecc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5dfcefad3220cdaf22078ff4b798f5afeed6383ffe409b8d2f75303c7fd2ecc4->leave($__internal_5dfcefad3220cdaf22078ff4b798f5afeed6383ffe409b8d2f75303c7fd2ecc4_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_966f41b8bc396c1ff1086a65d9b1ed8a1c457cf6b9acb7fc4630ea195af8591e = $this->env->getExtension("native_profiler");
        $__internal_966f41b8bc396c1ff1086a65d9b1ed8a1c457cf6b9acb7fc4630ea195af8591e->enter($__internal_966f41b8bc396c1ff1086a65d9b1ed8a1c457cf6b9acb7fc4630ea195af8591e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_966f41b8bc396c1ff1086a65d9b1ed8a1c457cf6b9acb7fc4630ea195af8591e->leave($__internal_966f41b8bc396c1ff1086a65d9b1ed8a1c457cf6b9acb7fc4630ea195af8591e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_25a6b916a33e2e34068a76cdecadfd76e7da79b17d44631223e0131e7ad0e653 = $this->env->getExtension("native_profiler");
        $__internal_25a6b916a33e2e34068a76cdecadfd76e7da79b17d44631223e0131e7ad0e653->enter($__internal_25a6b916a33e2e34068a76cdecadfd76e7da79b17d44631223e0131e7ad0e653_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_25a6b916a33e2e34068a76cdecadfd76e7da79b17d44631223e0131e7ad0e653->leave($__internal_25a6b916a33e2e34068a76cdecadfd76e7da79b17d44631223e0131e7ad0e653_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_dbf4160fa9fe25367bf4cbd46bc3f3bb0900b51fe41c0736602cd2750f4c5f76 = $this->env->getExtension("native_profiler");
        $__internal_dbf4160fa9fe25367bf4cbd46bc3f3bb0900b51fe41c0736602cd2750f4c5f76->enter($__internal_dbf4160fa9fe25367bf4cbd46bc3f3bb0900b51fe41c0736602cd2750f4c5f76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_dbf4160fa9fe25367bf4cbd46bc3f3bb0900b51fe41c0736602cd2750f4c5f76->leave($__internal_dbf4160fa9fe25367bf4cbd46bc3f3bb0900b51fe41c0736602cd2750f4c5f76_prof);

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
