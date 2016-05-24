<?php

/* SaSiteBundle:Default:annonce.html.twig */
class __TwigTemplate_9361b0f6bc1c0c4a04ded2529d88920b670913e3b7fb6a6d982d58da169fda85 extends Twig_Template
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
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("SaSiteBundle:Default:nom"));
        echo "
    
    <div align=\"center\"><img src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("symfony2.png"), "html", null, true);
        echo "\" width=\"200\" alt=\"image_symfony2\"></div>
    
";
    }

    public function getTemplateName()
    {
        return "SaSiteBundle:Default:annonce.html.twig";
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
