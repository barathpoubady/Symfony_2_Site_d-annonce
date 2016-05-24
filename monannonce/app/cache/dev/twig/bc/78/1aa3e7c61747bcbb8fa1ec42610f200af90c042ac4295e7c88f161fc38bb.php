<?php

/* SaSiteBundle:Annonce:afficheAnnonce.html.twig */
class __TwigTemplate_bc781aa3e7c61747bcbb8fa1ec42610f200af90c042ac4295e7c88f161fc38bb extends Twig_Template
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 6
            echo "        <p class=\"bg-danger\">
            ";
            // line 7
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "
    ";
        // line 11
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["annonces"]) ? $context["annonces"] : $this->getContext($context, "annonces")));
        foreach ($context['_seq'] as $context["_key"] => $context["annonce"]) {
            // line 12
            echo "    <!--/stories-->
   <div class=\"row\">    
     <br>
     <div class=\"col-md-2 col-sm-3 text-center\">
        ";
            // line 16
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 17
                echo "           ";
                if (($this->getAttribute($context["annonce"], "user", array()) == $context["user"])) {
                    echo " 
            <a class=\"story-title\" href=\"#\"><img alt=\"\" src=\"";
                    // line 18
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($context["user"], "avatar", array())), "html", null, true);
                    echo "\" style=\"width:100px;height:100px\" class=\"img-circle\"></a>
           ";
                }
                // line 19
                echo " 
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo " 
     </div>
     <div class=\"col-md-10 col-sm-9\">
          
      
       
       <br><br>
     </div>
   </div>
   <hr>

    <div id=\"map-canvas\"></div>
<div class=\"container-fluid\" id=\"main\">
  <div class=\"row\">
    <div class=\"col-xs-8\" id=\"left\">
        <div class=\"row\">
         <div class=\"col-xs-7\">
         <div class=\"thumbnail\"> 
            <div class=\"row\">
             <div class=\"col-xs-6\">
             ";
            // line 40
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["annoncePhotos"]) ? $context["annoncePhotos"] : $this->getContext($context, "annoncePhotos")));
            foreach ($context['_seq'] as $context["_key"] => $context["annoncePhoto"]) {
                // line 41
                echo "               ";
                if (($context["annonce"] == $this->getAttribute($context["annoncePhoto"], "annonce", array()))) {
                    echo " 
                <a class=\"story-title\" href=\"#\"><img alt=\"\" src=\"";
                    // line 42
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($context["annoncePhoto"], "filePhoto", array())), "html", null, true);
                    echo "\" style=\"width:100%; padding:10px;\" /></a>
               ";
                }
                // line 43
                echo " 
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['annoncePhoto'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo " 
             </div>
           <div class=\"col-xs-6\" >
            <h3>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "titre", array()), "html", null, true);
            echo "</h3>
             ";
            // line 48
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["typeAnnonces"]) ? $context["typeAnnonces"] : $this->getContext($context, "typeAnnonces")));
            foreach ($context['_seq'] as $context["_key"] => $context["typeAnnonce"]) {
                // line 49
                echo "               ";
                if (($this->getAttribute($context["annonce"], "annonceType", array()) == $context["typeAnnonce"])) {
                    echo " 
             <h4><span class=\"label label-default\">";
                    // line 50
                    echo twig_escape_filter($this->env, $this->getAttribute($context["typeAnnonce"], "nom", array()), "html", null, true);
                    echo "</span></h4>
                ";
                }
                // line 51
                echo " 
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['typeAnnonce'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo " 
             
             </div>
            <div class=\"col-xs-12\" style=\"padding-top: 10px;\">
               <div class=\"well\" style=\"margin: 10px;\">
                <h4>
                    <strong><u>Lieu</u></strong>  
                    <h5>
                        ";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "adresse", array()), "html", null, true);
            echo "<br/>
                        ";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "ville", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "cp", array()), "html", null, true);
            echo "<br/>
                    </h5>
                   <small style=\"font-family:courier,'new courier';\" class=\"text-muted\">Crée le :";
            // line 63
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["annonce"], "created", array()), "d/m/Y"), "html", null, true);
            echo "
                    <br/> Modifié le : ";
            // line 64
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["annonce"], "updated", array()), "d/m/Y"), "html", null, true);
            echo "</small>
                    <br/> <br/>
                   <strong><u>Description</u></strong> <br/>
                   <h5> ";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "description", array()), "html", null, true);
            echo "</h5>
                </h4>
             </div>  
            </div>
            
             </div>
         </div>
         </div>
           <div class=\"col-xs-5\">
              <ul class=\"list-group\">
                <li class=\"list-group-item\">
                  <span class=\"badge\">";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "nbrPlace", array()), "html", null, true);
            echo "</span>
                  Nombre de place total
                </li>
                <li class=\"list-group-item\">
                  <span class=\"badge\">";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "nbrPlace", array()), "html", null, true);
            echo "</span>
                  Nombre de place restant
                </li>
                <li class=\"list-group-item\">
                  <span class=\"badge\">";
            // line 86
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["annonce"], "dateDebut", array()), "d/m/Y"), "html", null, true);
            echo "</span>
                  Date début
                </li>
                <li class=\"list-group-item\">
                  <span class=\"badge\">";
            // line 90
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["annonce"], "dateFin", array()), "d/m/Y"), "html", null, true);
            echo "</span>
                  Date de fin
                </li>
                <li class=\"list-group-item\">
                  <a href=\"";
            // line 94
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("site.participe", array("id_annonce" => $this->getAttribute($context["annonce"], "id", array()))), "html", null, true);
            echo "\"><button type=\"button\" class=\"btn btn-primary\">Participer </button></a>
                </i>
                <li class=\"list-group-item\">
                  <a href=\"";
            // line 97
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("site.messageAnnonce", array("id_annonce" => $this->getAttribute($context["annonce"], "id", array()))), "html", null, true);
            echo "\"><button type=\"button\" class=\"btn btn-warning\">Envoyer un message à l'éditeur </button></a>
                </i>
                
              </ul> 
            </div>
       </div>


    </div>
    <div class=\"col-xs-4\"><iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d42019.39508404667!2d2.41718475!3d48.83509110000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfr!2sfr!4v1416558076378\" width=\"100%\" height=\"500px\" frameborder=\"0\" style=\"border:0\"></iframe></div>
    
  </div>
</div>
    
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['annonce'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 112
        echo "      
        <div align=\"center\"><img src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("symfony2.png"), "html", null, true);
        echo "\" style=\"width:200px\" alt=\"image_symfony2\"></div>
      
";
    }

    public function getTemplateName()
    {
        return "SaSiteBundle:Annonce:afficheAnnonce.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  260 => 113,  257 => 112,  236 => 97,  230 => 94,  223 => 90,  216 => 86,  209 => 82,  202 => 78,  188 => 67,  182 => 64,  178 => 63,  171 => 61,  167 => 60,  157 => 52,  150 => 51,  145 => 50,  140 => 49,  136 => 48,  132 => 47,  127 => 44,  120 => 43,  115 => 42,  110 => 41,  106 => 40,  84 => 20,  77 => 19,  72 => 18,  67 => 17,  63 => 16,  57 => 12,  53 => 11,  50 => 10,  41 => 7,  38 => 6,  34 => 5,  31 => 4,  28 => 3,);
    }
}
