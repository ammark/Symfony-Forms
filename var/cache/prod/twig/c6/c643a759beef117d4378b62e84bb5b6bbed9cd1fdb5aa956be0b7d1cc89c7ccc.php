<?php

/* admin/genus/list.html.twig */
class __TwigTemplate_b159960e84be5c992b580a2e88416059b2ff600fe008dc35caf66fbf214d6da0 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
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
        $context['_seq'] = twig_ensure_traversable((isset($context["genuses"]) ? $context["genuses"] : null));
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
        return array (  75 => 29,  63 => 23,  59 => 22,  56 => 21,  52 => 20,  38 => 9,  31 => 4,  28 => 3,  11 => 1,);
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
