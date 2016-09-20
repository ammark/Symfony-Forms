<?php

/* genus/list.html.twig */
class __TwigTemplate_c3d19a52897f4cb7c7181955d0b9ea51b3e09fc73cdf3ff1ac6a0b1a66ceb093 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "genus/list.html.twig", 1);
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
        $__internal_01728c8996dd47ca3f79f96f477e8c41519f7ea7e306d82cbf38177a35f3d6f0 = $this->env->getExtension("native_profiler");
        $__internal_01728c8996dd47ca3f79f96f477e8c41519f7ea7e306d82cbf38177a35f3d6f0->enter($__internal_01728c8996dd47ca3f79f96f477e8c41519f7ea7e306d82cbf38177a35f3d6f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "genus/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_01728c8996dd47ca3f79f96f477e8c41519f7ea7e306d82cbf38177a35f3d6f0->leave($__internal_01728c8996dd47ca3f79f96f477e8c41519f7ea7e306d82cbf38177a35f3d6f0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_426fcda3d850dfffd44ebc7b1c703b7f6beb185136b6db30861140a6398f6432 = $this->env->getExtension("native_profiler");
        $__internal_426fcda3d850dfffd44ebc7b1c703b7f6beb185136b6db30861140a6398f6432->enter($__internal_426fcda3d850dfffd44ebc7b1c703b7f6beb185136b6db30861140a6398f6432_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <table class=\"table table-striped\">
        <thead>
            <tr>
                <th>Genus</th>
                <th># of species</th>
                <th>Last updated</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["genuses"]) ? $context["genuses"] : $this->getContext($context, "genuses")));
        foreach ($context['_seq'] as $context["_key"] => $context["genus"]) {
            // line 14
            echo "                <tr>
                    <td>
                        <a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("genus_show", array("genusName" => $this->getAttribute($context["genus"], "name", array()))), "html", null, true);
            echo "\">
                            ";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["genus"], "name", array()), "html", null, true);
            echo "
                        </a>
                    </td>
                    <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["genus"], "speciesCount", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 21
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["genus"], "updatedAt", array()), "Y-m-d"), "html", null, true);
            echo "</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['genus'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "        </tbody>
    </table>
";
        
        $__internal_426fcda3d850dfffd44ebc7b1c703b7f6beb185136b6db30861140a6398f6432->leave($__internal_426fcda3d850dfffd44ebc7b1c703b7f6beb185136b6db30861140a6398f6432_prof);

    }

    public function getTemplateName()
    {
        return "genus/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 24,  73 => 21,  69 => 20,  63 => 17,  59 => 16,  55 => 14,  51 => 13,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <table class="table table-striped">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Genus</th>*/
/*                 <th># of species</th>*/
/*                 <th>Last updated</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*             {% for genus in genuses %}*/
/*                 <tr>*/
/*                     <td>*/
/*                         <a href="{{ path('genus_show', {'genusName': genus.name}) }}">*/
/*                             {{ genus.name }}*/
/*                         </a>*/
/*                     </td>*/
/*                     <td>{{ genus.speciesCount }}</td>*/
/*                     <td>{{ genus.updatedAt|date('Y-m-d') }}</td>*/
/*                 </tr>*/
/*             {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* {% endblock %}*/
/* */
