<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_70bd8e76d99d3520c2ae7a53729e7712be8003bf2d2193238b9611a8fe9cbdba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_e8caec1c75d1e9a6389e46d1abdd125fad3dd1f7c2468a0286c608d4f05ed0ba = $this->env->getExtension("native_profiler");
        $__internal_e8caec1c75d1e9a6389e46d1abdd125fad3dd1f7c2468a0286c608d4f05ed0ba->enter($__internal_e8caec1c75d1e9a6389e46d1abdd125fad3dd1f7c2468a0286c608d4f05ed0ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e8caec1c75d1e9a6389e46d1abdd125fad3dd1f7c2468a0286c608d4f05ed0ba->leave($__internal_e8caec1c75d1e9a6389e46d1abdd125fad3dd1f7c2468a0286c608d4f05ed0ba_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7cb63493ea10abf321ec499201f4bc4a14acc008367a9a1534914c17474bb466 = $this->env->getExtension("native_profiler");
        $__internal_7cb63493ea10abf321ec499201f4bc4a14acc008367a9a1534914c17474bb466->enter($__internal_7cb63493ea10abf321ec499201f4bc4a14acc008367a9a1534914c17474bb466_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_7cb63493ea10abf321ec499201f4bc4a14acc008367a9a1534914c17474bb466->leave($__internal_7cb63493ea10abf321ec499201f4bc4a14acc008367a9a1534914c17474bb466_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a2412201bc5afed939d7bed68b5d530851f11440a4fad2f3f7163dbd885e0b17 = $this->env->getExtension("native_profiler");
        $__internal_a2412201bc5afed939d7bed68b5d530851f11440a4fad2f3f7163dbd885e0b17->enter($__internal_a2412201bc5afed939d7bed68b5d530851f11440a4fad2f3f7163dbd885e0b17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_a2412201bc5afed939d7bed68b5d530851f11440a4fad2f3f7163dbd885e0b17->leave($__internal_a2412201bc5afed939d7bed68b5d530851f11440a4fad2f3f7163dbd885e0b17_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_82777502b52532770b6724fc19643081dab418c65197ed439cb8e2d3485c36ba = $this->env->getExtension("native_profiler");
        $__internal_82777502b52532770b6724fc19643081dab418c65197ed439cb8e2d3485c36ba->enter($__internal_82777502b52532770b6724fc19643081dab418c65197ed439cb8e2d3485c36ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_82777502b52532770b6724fc19643081dab418c65197ed439cb8e2d3485c36ba->leave($__internal_82777502b52532770b6724fc19643081dab418c65197ed439cb8e2d3485c36ba_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
