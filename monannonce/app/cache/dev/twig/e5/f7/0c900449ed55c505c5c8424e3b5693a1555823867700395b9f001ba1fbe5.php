<?php

/* SaSiteBundle:Default:accueil.html.twig */
class __TwigTemplate_e5f70c900449ed55c505c5c8424e3b5693a1555823867700395b9f001ba1fbe5 extends Twig_Template
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
        $context['_seq'] = twig_ensure_traversable((isset($context["annonces"]) ? $context["annonces"] : $this->getContext($context, "annonces")));
        foreach ($context['_seq'] as $context["_key"] => $context["annonce"]) {
            // line 6
            echo "    <!--/stories-->
   <div class=\"row\">    
     <br>
     <div class=\"col-md-2 col-sm-3 text-center\">
        ";
            // line 10
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 11
                echo "           ";
                if (($this->getAttribute($context["annonce"], "user", array()) == $context["user"])) {
                    echo " 
            <a class=\"story-title\" href=\"#\"><img alt=\"\" src=\"";
                    // line 12
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($context["user"], "avatar", array())), "html", null, true);
                    echo "\" style=\"width:100px;height:100px\" class=\"img-circle\"></a>
           ";
                }
                // line 13
                echo " 
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo " 
     </div>
     <div class=\"col-md-10 col-sm-9\">
          
      
       <div class=\"row\">
         <div class=\"col-xs-6\">
         <div class=\"thumbnail\"> 
            <div class=\"row\">
             <div class=\"col-xs-6\">
             ";
            // line 24
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["annoncePhotos"]) ? $context["annoncePhotos"] : $this->getContext($context, "annoncePhotos")));
            foreach ($context['_seq'] as $context["_key"] => $context["annoncePhoto"]) {
                // line 25
                echo "               ";
                if (($context["annonce"] == $this->getAttribute($context["annoncePhoto"], "annonce", array()))) {
                    echo " 
                <a class=\"story-title\" href=\"#\"><img alt=\"\" src=\"";
                    // line 26
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($context["annoncePhoto"], "filePhoto", array())), "html", null, true);
                    echo "\" style=\"width:100%; padding:10px;\" /></a>
               ";
                }
                // line 27
                echo " 
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['annoncePhoto'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo " 
             </div>
           <div class=\"col-xs-6\" >
            <h3>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "titre", array()), "html", null, true);
            echo "</h3>
             ";
            // line 32
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["typeAnnonces"]) ? $context["typeAnnonces"] : $this->getContext($context, "typeAnnonces")));
            foreach ($context['_seq'] as $context["_key"] => $context["typeAnnonce"]) {
                // line 33
                echo "               ";
                if (($this->getAttribute($context["annonce"], "annonceType", array()) == $context["typeAnnonce"])) {
                    echo " 
             <h4><span class=\"label label-default\">";
                    // line 34
                    echo twig_escape_filter($this->env, $this->getAttribute($context["typeAnnonce"], "nom", array()), "html", null, true);
                    echo "</span></h4>
                ";
                }
                // line 35
                echo " 
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['typeAnnonce'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo " 
             
             </div>
            <div class=\"col-xs-12\" style=\"padding-top: 10px;\">
               <div class=\"well\" style=\"margin: 10px;\">
                <h4>
                    <strong><u>Lieu</u></strong>  
                    <h5>
                        ";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "adresse", array()), "html", null, true);
            echo "<br/>
                        ";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "ville", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "cp", array()), "html", null, true);
            echo "<br/>
                    </h5>
                   <small style=\"font-family:courier,'new courier';\" class=\"text-muted\">Crée le :";
            // line 47
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["annonce"], "created", array()), "d/m/Y"), "html", null, true);
            echo "
                    <br/> Modifié le : ";
            // line 48
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["annonce"], "updated", array()), "d/m/Y"), "html", null, true);
            echo "</small>
                    
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
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "nbrPlace", array()), "html", null, true);
            echo "</span>
                  Nombre de place total
                </li>
                <li class=\"list-group-item\">
                  <span class=\"badge\">";
            // line 64
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["annonce"], "dateDebut", array()), "d/m/Y"), "html", null, true);
            echo "</span>
                  Date début
                </li>
                <li class=\"list-group-item\">
                  <span class=\"badge\">";
            // line 68
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["annonce"], "dateFin", array()), "d/m/Y"), "html", null, true);
            echo "</span>
                  Date de fin
                </li>
                <li class=\"list-group-item\">
                    <a href=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("site.annonce", array("id_annonce" => $this->getAttribute($context["annonce"], "id", array()))), "html", null, true);
            echo "\"><button type=\"button\" class=\"btn btn-primary\">Voir cette annonce </button></a>
                </i>
              </ul> 
            </div>
       </div>
       <br><br>
     </div>
   </div>
   <hr>
   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['annonce'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "    
    
    <div align=\"center\"><img src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("symfony2.png"), "html", null, true);
        echo "\" style=\"width:200px\" alt=\"image_symfony2\"></div>
    
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
        return array (  209 => 84,  205 => 82,  189 => 72,  182 => 68,  175 => 64,  168 => 60,  153 => 48,  149 => 47,  142 => 45,  138 => 44,  128 => 36,  121 => 35,  116 => 34,  111 => 33,  107 => 32,  103 => 31,  98 => 28,  91 => 27,  86 => 26,  81 => 25,  77 => 24,  65 => 14,  58 => 13,  53 => 12,  48 => 11,  44 => 10,  38 => 6,  34 => 5,  31 => 4,  28 => 3,);
    }
}
