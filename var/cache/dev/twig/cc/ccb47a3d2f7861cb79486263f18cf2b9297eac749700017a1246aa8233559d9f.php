<?php

/* admin/genus/new.html.twig */
class __TwigTemplate_794952a2a6cf26d5f407b5aedc7ef978a7372dfdcfb11d489cdb036979d22e55 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "admin/genus/new.html.twig", 1);
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
        $__internal_db75e3cfebb583b3ec3e1625625d6bb03c0edd64adb39b18df07273699df8570 = $this->env->getExtension("native_profiler");
        $__internal_db75e3cfebb583b3ec3e1625625d6bb03c0edd64adb39b18df07273699df8570->enter($__internal_db75e3cfebb583b3ec3e1625625d6bb03c0edd64adb39b18df07273699df8570_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/genus/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_db75e3cfebb583b3ec3e1625625d6bb03c0edd64adb39b18df07273699df8570->leave($__internal_db75e3cfebb583b3ec3e1625625d6bb03c0edd64adb39b18df07273699df8570_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_13953bdf9b79c4109d2edf7251fb7bb66aab686a4bf60596497c03f92a2e6979 = $this->env->getExtension("native_profiler");
        $__internal_13953bdf9b79c4109d2edf7251fb7bb66aab686a4bf60596497c03f92a2e6979->enter($__internal_13953bdf9b79c4109d2edf7251fb7bb66aab686a4bf60596497c03f92a2e6979_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                <h1>New Genus</h1>
                ";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["genusForm"]) ? $context["genusForm"] : $this->getContext($context, "genusForm")), 'form_start');
        echo "
                    ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["genusForm"]) ? $context["genusForm"] : $this->getContext($context, "genusForm")), 'widget');
        echo "
                    <button type=\"submit\" class=\"btn btn-primary\">Save</button>
                ";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["genusForm"]) ? $context["genusForm"] : $this->getContext($context, "genusForm")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_13953bdf9b79c4109d2edf7251fb7bb66aab686a4bf60596497c03f92a2e6979->leave($__internal_13953bdf9b79c4109d2edf7251fb7bb66aab686a4bf60596497c03f92a2e6979_prof);

    }

    public function getTemplateName()
    {
        return "admin/genus/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 11,  50 => 9,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-xs-12">*/
/*                 <h1>New Genus</h1>*/
/*                 {{ form_start(genusForm) }}*/
/*                     {{ form_widget(genusForm) }}*/
/*                     <button type="submit" class="btn btn-primary">Save</button>*/
/*                 {{ form_end(genusForm) }}*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
