<?php

/* SaSiteBundle:Annonce:listeAnnonce.html.twig */
class __TwigTemplate_b6919ca6dde4bc69186a068d39e88d804aecac34280e1f912a049a51b12851ca extends Twig_Template
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
    
<table class=\"table\">
        <thead>
            <tr>
                <th>id</th>
                <th>Titre</th>
                <th>Description</th>
                <th>Nb place</th>
                <th>Adresse</th>
                <th>Ville</th>
                <th>CP</th>
                <th>Date debut</th>
                <th>Date fin</th>
                <th>Création</th>
                <th>Modifer</th>
                <th>Etat</th>
            </tr>
        </thead>
        <tbody>
            
            ";
        // line 25
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["annonces"]) ? $context["annonces"] : $this->getContext($context, "annonces")));
        foreach ($context['_seq'] as $context["_key"] => $context["annonce"]) {
            // line 26
            echo "                    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 27
                echo "                       ";
                if (($this->getAttribute($context["annonce"], "user", array()) == $context["user"])) {
                    echo " 
                          ";
                    // line 28
                    if (($this->getAttribute($context["annonce"], "isActive", array()) == 1)) {
                        echo " 
                           <tr class=\"success\">
                                <td>";
                        // line 30
                        echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "id", array()), "html", null, true);
                        echo "</td>
                                <td>";
                        // line 31
                        echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "titre", array()), "html", null, true);
                        echo "</td>
                                <td>";
                        // line 32
                        echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "description", array()), "html", null, true);
                        echo "</td>
                                <td>";
                        // line 33
                        echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "nbrPlace", array()), "html", null, true);
                        echo "</td>
                                <td>";
                        // line 34
                        echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "adresse", array()), "html", null, true);
                        echo "</td>
                                <td>";
                        // line 35
                        echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "ville", array()), "html", null, true);
                        echo "</td>
                                <td>";
                        // line 36
                        echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "cp", array()), "html", null, true);
                        echo "</td>
                                <td>";
                        // line 37
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["annonce"], "dateDebut", array()), "d/m/Y"), "html", null, true);
                        echo "</td>
                                <td>";
                        // line 38
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["annonce"], "dateFin", array()), "d/m/Y"), "html", null, true);
                        echo "</td>
                                <td>";
                        // line 39
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["annonce"], "created", array()), "d/m/Y"), "html", null, true);
                        echo "</td>
                                <td>";
                        // line 40
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["annonce"], "updated", array()), "d/m/Y"), "html", null, true);
                        echo "</td>
                                <td><span class=\"glyphicon glyphicon-remove-circle\" aria-hidden=\"true\"></span></td>
                            </tr> 
                          ";
                    }
                    // line 44
                    echo "                          ";
                    if (($this->getAttribute($context["annonce"], "isActive", array()) == 0)) {
                        echo " 
                           <tr class=\"danger\">
                                <td>";
                        // line 46
                        echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "id", array()), "html", null, true);
                        echo "</td>
                                <td>";
                        // line 47
                        echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "titre", array()), "html", null, true);
                        echo "</td>
                                <td>";
                        // line 48
                        echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "description", array()), "html", null, true);
                        echo "</td>
                                <td>";
                        // line 49
                        echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "nbrPlace", array()), "html", null, true);
                        echo "</td>
                                <td>";
                        // line 50
                        echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "adresse", array()), "html", null, true);
                        echo "</td>
                                <td>";
                        // line 51
                        echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "ville", array()), "html", null, true);
                        echo "</td>
                                <td>";
                        // line 52
                        echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "cp", array()), "html", null, true);
                        echo "</td>
                                <td>";
                        // line 53
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["annonce"], "dateDebut", array()), "d/m/Y"), "html", null, true);
                        echo "</td>
                                <td>";
                        // line 54
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["annonce"], "dateFin", array()), "d/m/Y"), "html", null, true);
                        echo "</td>
                                <td>";
                        // line 55
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["annonce"], "created", array()), "d/m/Y"), "html", null, true);
                        echo "</td>
                                <td>";
                        // line 56
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["annonce"], "updated", array()), "d/m/Y"), "html", null, true);
                        echo "</td>
                                <td><span class=\"glyphicon glyphicon-ok-circle\" aria-hidden=\"true\"></span></td>
                            </tr>
                          ";
                    }
                    // line 59
                    echo " 
                       ";
                }
                // line 60
                echo " 
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo " 
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['annonce'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "  
            
            
           <!--<tr class=\"active\">
                <td>1</td>
                <td>Credit Card</td>
                <td>04/07/2014</td>
                <td>Call in to confirm</td>
            </tr>
            <tr class=\"success\">
                <td>2</td>
                <td>Water</td>
                <td>01/07/2014</td>
                <td>Paid</td>
            </tr>
            <tr class=\"info\">
                <td>3</td>
                <td>Internet</td>
                <td>05/07/2014</td>
                <td>Change plan</td>
            </tr>
            <tr class=\"warning\">
                <td>4</td>
                <td>Electricity</td>
                <td>03/07/2014</td>
                <td>Pending</td>
            </tr>
            <tr class=\"danger\">
                <td>5</td>
                <td>Telephone</td>
                <td>06/07/2014</td>
                <td>Due</td>
            </tr>-->

        </tbody>
    </table>
    
    
";
    }

    public function getTemplateName()
    {
        return "SaSiteBundle:Annonce:listeAnnonce.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 62,  184 => 61,  177 => 60,  173 => 59,  166 => 56,  162 => 55,  158 => 54,  154 => 53,  150 => 52,  146 => 51,  142 => 50,  138 => 49,  134 => 48,  130 => 47,  126 => 46,  120 => 44,  113 => 40,  109 => 39,  105 => 38,  101 => 37,  97 => 36,  93 => 35,  89 => 34,  85 => 33,  81 => 32,  77 => 31,  73 => 30,  68 => 28,  63 => 27,  58 => 26,  54 => 25,  31 => 4,  28 => 3,);
    }
}
