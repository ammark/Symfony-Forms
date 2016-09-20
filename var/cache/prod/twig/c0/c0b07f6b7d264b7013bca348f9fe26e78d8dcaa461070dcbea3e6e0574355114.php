<?php

/* genus/show.html.twig */
class __TwigTemplate_0a34e0d8ed03703fa5f3e7554d5e2c2e9070f50625c400a2f4513264edfd63f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "genus/show.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
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
    public function block_title($context, array $blocks = array())
    {
        echo "Genus ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["genus"]) ? $context["genus"] : null), "name", array()), "html", null, true);
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    <h2 class=\"genus-name\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["genus"]) ? $context["genus"] : null), "name", array()), "html", null, true);
        echo "</h2>

    <div class=\"sea-creature-container\">
        <div class=\"genus-photo\"></div>
        <div class=\"genus-details\">
            <dl class=\"genus-details-list\">
                <dt>Subfamily:</dt>
                <dd>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["genus"]) ? $context["genus"] : null), "subFamily", array()), "name", array()), "html", null, true);
        echo "</dd>
                <dt>Known Species:</dt>
                <dd>";
        // line 15
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["genus"]) ? $context["genus"] : null), "speciesCount", array())), "html", null, true);
        echo "</dd>
                <dt>Fun Fact:</dt>
                <dd>";
        // line 17
        echo $this->env->getExtension('app_markdown')->parseMarkdown($this->getAttribute((isset($context["genus"]) ? $context["genus"] : null), "funFact", array()));
        echo "</dd>
                <dt>Recent Notes</dt>
                <dd>";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["recentNoteCount"]) ? $context["recentNoteCount"] : null), "html", null, true);
        echo "</dd>
            </dl>
        </div>
    </div>
    <div id=\"js-notes-wrapper\"></div>
";
    }

    // line 26
    public function block_javascripts($context, array $blocks = array())
    {
        // line 27
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/react/0.14.3/react.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/react/0.14.3/react-dom.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/babel-core/5.8.23/browser.min.js\"></script>

    <script type=\"text/babel\" src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/notes.react.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/babel\">
        var notesUrl = '";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("genus_show_notes", array("name" => $this->getAttribute((isset($context["genus"]) ? $context["genus"] : null), "name", array()))), "html", null, true);
        echo "';

        ReactDOM.render(
          <NoteSection url={notesUrl} />,
          document.getElementById('js-notes-wrapper')
        );
    </script>
";
    }

    public function getTemplateName()
    {
        return "genus/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 34,  88 => 32,  79 => 27,  76 => 26,  66 => 19,  61 => 17,  56 => 15,  51 => 13,  40 => 6,  37 => 5,  30 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block title %}Genus {{ genus.name }}{% endblock %}*/
/* */
/* {% block body %}*/
/*     <h2 class="genus-name">{{ genus.name }}</h2>*/
/* */
/*     <div class="sea-creature-container">*/
/*         <div class="genus-photo"></div>*/
/*         <div class="genus-details">*/
/*             <dl class="genus-details-list">*/
/*                 <dt>Subfamily:</dt>*/
/*                 <dd>{{ genus.subFamily.name }}</dd>*/
/*                 <dt>Known Species:</dt>*/
/*                 <dd>{{ genus.speciesCount|number_format }}</dd>*/
/*                 <dt>Fun Fact:</dt>*/
/*                 <dd>{{ genus.funFact|markdownify }}</dd>*/
/*                 <dt>Recent Notes</dt>*/
/*                 <dd>{{ recentNoteCount }}</dd>*/
/*             </dl>*/
/*         </div>*/
/*     </div>*/
/*     <div id="js-notes-wrapper"></div>*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/*     {{ parent() }}*/
/*     <script src="https://cdnjs.cloudflare.com/ajax/libs/react/0.14.3/react.js"></script>*/
/*     <script src="https://cdnjs.cloudflare.com/ajax/libs/react/0.14.3/react-dom.js"></script>*/
/*     <script src="https://cdnjs.cloudflare.com/ajax/libs/babel-core/5.8.23/browser.min.js"></script>*/
/* */
/*     <script type="text/babel" src="{{ asset('js/notes.react.js') }}"></script>*/
/*     <script type="text/babel">*/
/*         var notesUrl = '{{ path('genus_show_notes', {'name': genus.name}) }}';*/
/* */
/*         ReactDOM.render(*/
/*           <NoteSection url={notesUrl} />,*/
/*           document.getElementById('js-notes-wrapper')*/
/*         );*/
/*     </script>*/
/* {% endblock %}*/
/* */
