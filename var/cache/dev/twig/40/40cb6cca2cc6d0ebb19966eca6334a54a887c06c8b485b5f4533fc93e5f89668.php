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
        $__internal_1d5e51ee1317889927061cce32781e09aa5ccd105b848357387ff4cb031474ec = $this->env->getExtension("native_profiler");
        $__internal_1d5e51ee1317889927061cce32781e09aa5ccd105b848357387ff4cb031474ec->enter($__internal_1d5e51ee1317889927061cce32781e09aa5ccd105b848357387ff4cb031474ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1d5e51ee1317889927061cce32781e09aa5ccd105b848357387ff4cb031474ec->leave($__internal_1d5e51ee1317889927061cce32781e09aa5ccd105b848357387ff4cb031474ec_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4bde18905117116c7ce82617289a8fed4c5addaab3dac534245822a24d11d986 = $this->env->getExtension("native_profiler");
        $__internal_4bde18905117116c7ce82617289a8fed4c5addaab3dac534245822a24d11d986->enter($__internal_4bde18905117116c7ce82617289a8fed4c5addaab3dac534245822a24d11d986_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4bde18905117116c7ce82617289a8fed4c5addaab3dac534245822a24d11d986->leave($__internal_4bde18905117116c7ce82617289a8fed4c5addaab3dac534245822a24d11d986_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e168752919ad51b114c80151927f21875fffacb67659a6fe9de631074933867d = $this->env->getExtension("native_profiler");
        $__internal_e168752919ad51b114c80151927f21875fffacb67659a6fe9de631074933867d->enter($__internal_e168752919ad51b114c80151927f21875fffacb67659a6fe9de631074933867d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e168752919ad51b114c80151927f21875fffacb67659a6fe9de631074933867d->leave($__internal_e168752919ad51b114c80151927f21875fffacb67659a6fe9de631074933867d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_99b51341d6d1a8dd4e800abbde3c179b000c9f3f2896f16a1858d2a7addf43c6 = $this->env->getExtension("native_profiler");
        $__internal_99b51341d6d1a8dd4e800abbde3c179b000c9f3f2896f16a1858d2a7addf43c6->enter($__internal_99b51341d6d1a8dd4e800abbde3c179b000c9f3f2896f16a1858d2a7addf43c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_99b51341d6d1a8dd4e800abbde3c179b000c9f3f2896f16a1858d2a7addf43c6->leave($__internal_99b51341d6d1a8dd4e800abbde3c179b000c9f3f2896f16a1858d2a7addf43c6_prof);

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
