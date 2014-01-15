<?php

/* ESDIBInventariBundle:Items:items.html.twig */
class __TwigTemplate_1266a3bad3f992c0ebae59c317811b13a9f495a0ce905a0381580e61e3aeaf6e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("ESDIBInventariBundle:Items:layout.html.twig");

        $this->blocks = array(
            'select_rows' => array($this, 'block_select_rows'),
            'rotuls' => array($this, 'block_rotuls'),
            'files' => array($this, 'block_files'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ESDIBInventariBundle:Items:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_select_rows($context, array $blocks = array())
    {
        // line 5
        echo "        <select id=\"max_rows\">
            <option value=\"5\"  ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "select_rows"), 0, array(), "array"), "html", null, true);
        echo "> 5</option>
            <option value=\"10\" ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "select_rows"), 1, array(), "array"), "html", null, true);
        echo ">10</option>
            <option value=\"15\" ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "select_rows"), 2, array(), "array"), "html", null, true);
        echo ">15</option>
            <option value=\"20\" ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "select_rows"), 3, array(), "array"), "html", null, true);
        echo ">20</option>
        </select>
";
    }

    // line 14
    public function block_rotuls($context, array $blocks = array())
    {
        // line 16
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "rotuls"));
        foreach ($context['_seq'] as $context["_key"] => $context["rotul"]) {
            // line 17
            echo "\t   <td>";
            echo twig_escape_filter($this->env, $this->getContext($context, "rotul"), "html", null, true);
            echo "</td>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rotul'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 21
    public function block_files($context, array $blocks = array())
    {
        // line 23
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "files"));
        foreach ($context['_seq'] as $context["_key"] => $context["fila"]) {
            // line 24
            echo "\t<tr>
\t   <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "fila"), "id"), "html", null, true);
            echo "</td>
\t   <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "fila"), "nom"), "html", null, true);
            echo "</td>
\t   <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "fila"), "preu"), "html", null, true);
            echo "</td>
\t</tr>\t
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fila'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "ESDIBInventariBundle:Items:items.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 27,  89 => 26,  85 => 25,  82 => 24,  77 => 23,  74 => 21,  63 => 17,  58 => 16,  55 => 14,  48 => 9,  44 => 8,  40 => 7,  36 => 6,  33 => 5,  30 => 4,);
    }
}
