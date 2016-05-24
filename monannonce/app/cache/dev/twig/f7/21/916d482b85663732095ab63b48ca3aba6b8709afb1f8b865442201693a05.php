<?php

/* SaSiteBundle:Default:index.html.twig */
class __TwigTemplate_f721916d482b85663732095ab63b48ca3aba6b8709afb1f8b865442201693a05 extends Twig_Template
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
        echo "    
    ";
        // line 5
        echo twig_include($this->env, $context, "SaSiteBundle:Default:accueil.html.twig");
        echo "
    
    <div align=\"center\"><img src=";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("symfony2.png"), "html", null, true);
        echo " alt=\"image_symfony2\"></div>
    
";
    }

    public function getTemplateName()
    {
        return "SaSiteBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 7,  34 => 5,  31 => 4,  28 => 3,);
    }
}
