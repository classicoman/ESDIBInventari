<?php

/* ESDIBInventariBundle:Items:layout.html.twig */
class __TwigTemplate_a2a3ac064d0ba8881f415f6fc2623fe407181fb3109b9d812d1f633f5d8082cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'select_rows' => array($this, 'block_select_rows'),
            'rotuls' => array($this, 'block_rotuls'),
            'files' => array($this, 'block_files'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<html>
  <head>
\t<link href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ESDIBInventari/css/listings.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
  </head>
<body>



<div id=\"listing_header\">
    
    <div id=\"pageName\">Items Actius</div>
    
    <div id=\"row_navigator\">
        <!-- First MAX_ROWS registers --> 
        <div id=\"prev_and_next\">
            <div id=\"first_registers\" onmouseover=\"\" style=\"cursor: pointer;\" 
                 class=\"";
        // line 17
        echo ((($this->getContext($context, "first") != 0)) ? ("active") : ("disabled"));
        echo "\"
                 onclick=\"window.location='";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("show_items", array("max" => $this->getContext($context, "max"), "first" => 0)), "html", null, true);
        echo "'\">
            Principi</div>
                 
            <div id=\"prev_registers\" onmouseover=\"\" style=\"cursor: pointer;\"
                 class=\"";
        // line 22
        echo ((($this->getContext($context, "first") != 0)) ? ("active") : ("disabled"));
        echo "\"
                 onclick=\"window.location='";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("show_items", array("max" => $this->getContext($context, "max"), "first" => ($this->getContext($context, "first") - $this->getContext($context, "max")))), "html", null, true);
        echo "'\">
            Previs</div>
            <!-- Next MAX_ROWS registers --> 
            <div id=\"next_registers\" onmouseover=\"\" style=\"cursor: pointer;\" 
                 class=\"";
        // line 27
        echo (((($this->getContext($context, "first") + $this->getContext($context, "max")) < $this->getContext($context, "num_of_items"))) ? ("active") : ("disabled"));
        echo "\"
                 onclick=\"window.location='";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("show_items", array("max" => $this->getContext($context, "max"), "first" => ($this->getContext($context, "first") + $this->getContext($context, "max")))), "html", null, true);
        echo "'\">
            Pròxs.</div>
        </div>
        
        <div id=\"num_of_rows\"> ";
        // line 32
        echo twig_escape_filter($this->env, $this->getContext($context, "num_of_items"), "html", null, true);
        echo " items </div>
    </div>
    
    <div class=\"count_registers\">
        ";
        // line 36
        $this->displayBlock('select_rows', $context, $blocks);
        // line 37
        echo "    </div>
    
</div>

<!-- PRINT FORM AND ROWS -->

<!-- VIEWER --><!-- Rows -->
    <table class=\"listing\">
        <thead><tr>
            ";
        // line 46
        $this->displayBlock('rotuls', $context, $blocks);
        // line 47
        echo "        </tr></thead>  
        <tbody>
            ";
        // line 49
        $this->displayBlock('files', $context, $blocks);
        // line 50
        echo "        </tbody>        
    </table>
</body>
</html>";
    }

    // line 36
    public function block_select_rows($context, array $blocks = array())
    {
    }

    // line 46
    public function block_rotuls($context, array $blocks = array())
    {
    }

    // line 49
    public function block_files($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "ESDIBInventariBundle:Items:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 49,  116 => 46,  111 => 36,  104 => 50,  102 => 49,  98 => 47,  96 => 46,  85 => 37,  83 => 36,  76 => 32,  69 => 28,  65 => 27,  58 => 23,  54 => 22,  47 => 18,  43 => 17,  26 => 3,  22 => 1,);
    }
}
