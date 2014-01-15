<?php

/* ESDIBInventariBundle:Item:item.html.twig */
class __TwigTemplate_98dabb625ff3d31078ff53371d1433df5a82f3dcb9304519a363706e1eb377ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<p>
L'objecte te id=";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "id"), "html", null, true);
        echo ", 
el nom es ";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "nom"), "html", null, true);
        echo " 
i el preu es ";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "preu"), "html", null, true);
        echo "
<p>";
    }

    public function getTemplateName()
    {
        return "ESDIBInventariBundle:Item:item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }
}
