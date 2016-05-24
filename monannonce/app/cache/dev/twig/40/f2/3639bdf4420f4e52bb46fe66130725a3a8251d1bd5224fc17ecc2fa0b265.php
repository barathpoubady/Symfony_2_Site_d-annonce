<?php

/* SaSiteBundle:Default:profil.html.twig */
class __TwigTemplate_40f23639bdf4420f4e52bb46fe66130725a3a8251d1bd5224fc17ecc2fa0b265 extends Twig_Template
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
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["profils"]) ? $context["profils"] : $this->getContext($context, "profils")));
        foreach ($context['_seq'] as $context["_key"] => $context["profil"]) {
            // line 6
            echo "     <div class=\"panel panel-primary\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\">";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["profil"], "prenom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["profil"], "nom", array()), "html", null, true);
            echo "</h3>
      </div>
      <div class=\"row\">   
        <div class=\"panel-body col-xs-2\">
          ID : ";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["profil"], "username", array()), "html", null, true);
            echo "
        </div>
        <div class=\"panel-body col-xs-2\">
          MDP : ";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["profil"], "password", array()), "html", null, true);
            echo "
        </div>
        <div class=\"panel-body col-xs-3\">
          EMAIL : ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["profil"], "email", array()), "html", null, true);
            echo "
        </div>
        <div class=\"panel-body col-xs-3\">
          CODE POSTAL : ";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["profil"], "cp", array()), "html", null, true);
            echo "
        </div>
        <div class=\"panel-body col-xs-3\">
          VILLE : ";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["profil"], "ville", array()), "html", null, true);
            echo "
        </div>
        <div class=\"panel-body col-xs-3\">
          DATE D'INSCRIPTION : ";
            // line 27
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["profil"], "created", array()), "d/m/Y"), "html", null, true);
            echo "
        </div>
        <div class=\"panel-body col-xs-3\">
          DATE DE MAJ : 
        </div>
      </div>
    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['profil'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "   
";
    }

    public function getTemplateName()
    {
        return "SaSiteBundle:Default:profil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 34,  81 => 27,  75 => 24,  69 => 21,  63 => 18,  57 => 15,  51 => 12,  42 => 8,  38 => 6,  34 => 5,  31 => 4,  28 => 3,);
    }
}
