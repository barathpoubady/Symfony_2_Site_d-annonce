<?php

/* SaSiteBundle:Default:menu.html.twig */
class __TwigTemplate_9674ed8a3317263754aa91bd549b5e6613c80972a00a409f491780f264297bfd extends Twig_Template
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
";
        // line 2
        if (((isset($context["connecte"]) ? $context["connecte"] : $this->getContext($context, "connecte")) == 1)) {
            // line 3
            echo " <header class=\"navbar navbar-bright navbar-fixed-top\" role=\"banner\">
  <div class=\"container\">
    <div class=\"navbar-header\">
      <button class=\"navbar-toggle\" type=\"button\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
        <span class=\"sr-only\">Toggle navigation</span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
      </button>
      <a href=\"";
            // line 12
            echo $this->env->getExtension('routing')->getPath("site.accueil");
            echo "\" class=\"navbar-brand\">Home</a>
    </div>
    <nav class=\"collapse navbar-collapse\" role=\"navigation\">
      <ul class=\"nav navbar-nav\">
        <li>
          <a href=\"";
            // line 17
            echo $this->env->getExtension('routing')->getPath("site.liste_annonce");
            echo "\">Mes annonces</a>
        </li>
        <li>
          <a href=\"";
            // line 20
            echo $this->env->getExtension('routing')->getPath("site.annonce_ajoute");
            echo "\">Ajouter une annonce</a>
        </li>
        <li>
          <a href=\"";
            // line 23
            echo $this->env->getExtension('routing')->getPath("site.profil");
            echo "\">Profils</a>
        </li>
        <li>
          <a href=\"";
            // line 26
            echo $this->env->getExtension('routing')->getPath("site.logout");
            echo "\">Déconnexion</a>
        </li>
      </ul>
      <ul class=\"nav navbar-right navbar-nav\">
        <li class=\"dropdown\">
          <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">RECHERCHER une annonce <i class=\"glyphicon glyphicon-search\"></i></a>
          <!--<ul class=\"dropdown-menu\" style=\"padding:12px;\">
            <form class=\"form-inline\">
              <button type=\"submit\" class=\"btn btn-default pull-right\"><i class=\"glyphicon glyphicon-search\"></i></button><input type=\"text\" class=\"form-control pull-left\" placeholder=\"Search\">
            </form>
          </ul>-->
        </li>
      </ul>
    </nav>
  </div>
</header>

";
            // line 43
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 44
                echo "<div id=\"masthead\">  
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-7\">
          <h1>";
                // line 48
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "prenom", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "nom", array()), "html", null, true);
                echo "
            <p class=\"lead\"></p>
          </h1>
        </div>
        <div class=\"col-md-5\">
          <div class=\"well well-lg\"> 
            <div class=\"row\">
                
              <div class=\"col-xs-4 col-sm-4\">
                  <img src=\"";
                // line 57
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($context["user"], "avatar", array())), "html", null, true);
                echo "\" style=\"width:100%;\" alt=\"image_profil_connexion\">
              </div>
              <div class=\"col-xs-8 col-sm-8\">

                  <h3>
            <p class=\"lead\">";
                // line 62
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["user"], "created", array()), "d/m/Y"), "html", null, true);
                echo " </p>
          </h3>       
              </div>
            </div>
          </div>
        </div>
      </div> 
    </div><!-- /cont -->

    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"top-spacer\"> </div>
        </div>
      </div> 
    </div><!-- /cont -->

</div>

 ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 82
            echo "      
";
        } else {
            // line 84
            echo "   <header class=\"navbar navbar-bright navbar-fixed-top\" role=\"banner\">
  <div class=\"container\">
    <div class=\"navbar-header\">
      <button class=\"navbar-toggle\" type=\"button\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
        <span class=\"sr-only\">Toggle navigation</span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
      </button>
      <a href=\"";
            // line 93
            echo $this->env->getExtension('routing')->getPath("site.accueil");
            echo "\" class=\"navbar-brand\">Home</a>
    </div>
    <nav class=\"collapse navbar-collapse\" role=\"navigation\">
      <ul class=\"nav navbar-nav\">
        <li>
          <a href=\"#\">S'inscrire</a>
        </li>
        <li>
          <a href=\"";
            // line 101
            echo $this->env->getExtension('routing')->getPath("site.login");
            echo "\">Connexion</a>
        </li>

      </ul>
      <ul class=\"nav navbar-right navbar-nav\">
        <li class=\"dropdown\">
          <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">RECHERCHER une annonce <i class=\"glyphicon glyphicon-search\"></i></a>
          <!--<ul class=\"dropdown-menu\" style=\"padding:12px;\">
            <form class=\"form-inline\">
              <button type=\"submit\" class=\"btn btn-default pull-right\"><i class=\"glyphicon glyphicon-search\"></i></button><input type=\"text\" class=\"form-control pull-left\" placeholder=\"Search\">
            </form>
          </ul>-->
        </li>
      </ul>
    </nav>
  </div>
</header>
      
          <div id=\"masthead\">  
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-7\">
          <h1>Portail Annonce
            <p class=\"lead\"></p>
          </h1>
        </div>
        <div class=\"col-md-5\">
          <div class=\"well well-lg\"> 
            <div class=\"row\">
              <div class=\"col-sm-12\">

                  <h3>Bienvenue sur le site d'annonce
            <p class=\"lead\"></p>
          </h3>       
              </div>
            </div>
          </div>
        </div>
      </div> 
    </div><!-- /cont -->

    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"top-spacer\"> </div>
        </div>
      </div> 
    </div><!-- /cont -->

</div>
      
";
        }
        // line 153
        echo "






";
    }

    public function getTemplateName()
    {
        return "SaSiteBundle:Default:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 153,  167 => 101,  156 => 93,  145 => 84,  141 => 82,  113 => 62,  105 => 57,  91 => 48,  85 => 44,  81 => 43,  61 => 26,  55 => 23,  49 => 20,  43 => 17,  35 => 12,  24 => 3,  22 => 2,  19 => 1,);
    }
}
