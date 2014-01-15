<?php

/* FenixProvaBundle:Prova:index.html.twig */
class __TwigTemplate_9b99b8dcd4f57f152430de7127d3fb68dff8053db748c78b7020fa93cc778c94 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<h1>Hello ";
        echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
        echo "!</h1>
<h2>He estat generat amb Twig!</h2>
<p>Aquesta ha estat la meva primera prova amb Twig en particular, i amb Symfony en general</p>
<p>Els propers dies em dedicaré a anar creant una aplicacio d'<strong>Inventari per a la EASDIB</strong> i
d'aquesta manera anar perseverant en els <i>nuts and bolts</i> - si realment s'escriu així - d'aquest
Framework tan potent
</p>
";
    }

    public function getTemplateName()
    {
        return "FenixProvaBundle:Prova:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,);
    }
}
