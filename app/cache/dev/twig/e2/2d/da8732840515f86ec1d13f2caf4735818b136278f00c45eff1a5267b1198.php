<?php

/* ESDIBInventariBundle:Item:listitems.html.twig */
class __TwigTemplate_e22dda8732840515f86ec1d13f2caf4735818b136278f00c45eff1a5267b1198 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("ESDIBInventariBundle::layout.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ESDIBInventariBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "\t<ul id=\"items\">
\t\t";
        // line 6
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "items"));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 7
            echo "\t   <li>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "nom"), "html", null, true);
            echo "</li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "\t</ul>
";
    }

    public function getTemplateName()
    {
        return "ESDIBInventariBundle:Item:listitems.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 9,  38 => 7,  34 => 6,  31 => 5,  28 => 3,);
    }
}
