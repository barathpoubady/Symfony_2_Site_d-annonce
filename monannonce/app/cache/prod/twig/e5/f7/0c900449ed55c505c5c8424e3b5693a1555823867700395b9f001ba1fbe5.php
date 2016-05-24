<?php

/* SaSiteBundle:Default:accueil.html.twig */
class __TwigTemplate_e5f70c900449ed55c505c5c8424e3b5693a1555823867700395b9f001ba1fbe5 extends Twig_Template
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
        echo "

 <!--/stories-->
<div class=\"row\">    
  <br>
  <div class=\"col-md-2 col-sm-3 text-center\">
    <a class=\"story-title\" href=\"#\"><img alt=\"\" src=\"http://api.randomuser.me/portraits/thumb/men/58.jpg\" style=\"width:100px;height:100px\" class=\"img-circle\"></a>
  </div>
  <div class=\"col-md-10 col-sm-9\">
      <h2> ";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
        echo " </h2>
    <h3>Repurpose Content to Reach a Wider Audience</h3>
    <div class=\"row\">
      <div class=\"col-xs-9\">
        <h4><span class=\"label label-default\">97thfloor.com</span></h4><h4>
        <small style=\"font-family:courier,'new courier';\" class=\"text-muted\">2 hours ago  • <a href=\"#\" class=\"text-muted\">Read More</a></small>
        </h4></div>
      <div class=\"col-xs-3\"></div>
    </div>
    <br><br>
  </div>
</div>
<hr>




";
    }

    public function getTemplateName()
    {
        return "SaSiteBundle:Default:accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 10,  19 => 1,);
    }
}
