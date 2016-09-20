<?php

/* admin/genus/list.html.twig */
class __TwigTemplate_83450ce9ccd66d43d02b5de3a4bddb4a63511ab2aa4e154314ecd20963d473fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "admin/genus/list.html.twig", 1);
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
        $__internal_b07f2548eaec2c5bf04d1765b4adc37c2431cd9780f29734d48ec1fb3edbf42e = $this->env->getExtension("native_profiler");
        $__internal_b07f2548eaec2c5bf04d1765b4adc37c2431cd9780f29734d48ec1fb3edbf42e->enter($__internal_b07f2548eaec2c5bf04d1765b4adc37c2431cd9780f29734d48ec1fb3edbf42e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/genus/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b07f2548eaec2c5bf04d1765b4adc37c2431cd9780f29734d48ec1fb3edbf42e->leave($__internal_b07f2548eaec2c5bf04d1765b4adc37c2431cd9780f29734d48ec1fb3edbf42e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1d9da358511b6fa1432a19b627e4d3f4d522c392a03f84d3860f6e72bf535754 = $this->env->getExtension("native_profiler");
        $__internal_1d9da358511b6fa1432a19b627e4d3f4d522c392a03f84d3860f6e72bf535754->enter($__internal_1d9da358511b6fa1432a19b627e4d3f4d522c392a03f84d3860f6e72bf535754_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">
        <div class=\"row\">

            <div class=\"col-xs-12\">
                <div class=\"pull-right\" style=\"margin-bottom: 10px; margin-top: 20px;\">
                    <a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("admin_genus_new");
        echo "\" class=\"btn btn-primary pull-right\">Add <span class=\"fa fa-plus-circle\"></span></a>
                </div>

                <h1>Genuses</h1>

                <table class=\"table table-striped\">
                    <tr>
                        <th>Genus</th>
                        <th>SubFamily</th>
                        <th>&nbsp;</th>
                    </tr>
                    ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["genuses"]) ? $context["genuses"] : $this->getContext($context, "genuses")));
        foreach ($context['_seq'] as $context["_key"] => $context["genus"]) {
            // line 21
            echo "                        <tr>
                            <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["genus"], "name", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["genus"], "subFamily", array()), "name", array()), "html", null, true);
            echo "</td>
                            <td>
                                <a href=\"#\" class=\"btn btn-xs btn-success\"><span class=\"fa fa-pencil\"></span></a>
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['genus'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "                </table>
            </div>
        </div>
    </div>
";
        
        $__internal_1d9da358511b6fa1432a19b627e4d3f4d522c392a03f84d3860f6e72bf535754->leave($__internal_1d9da358511b6fa1432a19b627e4d3f4d522c392a03f84d3860f6e72bf535754_prof);

    }

    public function getTemplateName()
    {
        return "admin/genus/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 29,  72 => 23,  68 => 22,  65 => 21,  61 => 20,  47 => 9,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <div class="container">*/
/*         <div class="row">*/
/* */
/*             <div class="col-xs-12">*/
/*                 <div class="pull-right" style="margin-bottom: 10px; margin-top: 20px;">*/
/*                     <a href="{{ path('admin_genus_new') }}" class="btn btn-primary pull-right">Add <span class="fa fa-plus-circle"></span></a>*/
/*                 </div>*/
/* */
/*                 <h1>Genuses</h1>*/
/* */
/*                 <table class="table table-striped">*/
/*                     <tr>*/
/*                         <th>Genus</th>*/
/*                         <th>SubFamily</th>*/
/*                         <th>&nbsp;</th>*/
/*                     </tr>*/
/*                     {% for genus in genuses %}*/
/*                         <tr>*/
/*                             <td>{{ genus.name }}</td>*/
/*                             <td>{{ genus.subFamily.name }}</td>*/
/*                             <td>*/
/*                                 <a href="#" class="btn btn-xs btn-success"><span class="fa fa-pencil"></span></a>*/
/*                             </td>*/
/*                         </tr>*/
/*                     {% endfor %}*/
/*                 </table>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
