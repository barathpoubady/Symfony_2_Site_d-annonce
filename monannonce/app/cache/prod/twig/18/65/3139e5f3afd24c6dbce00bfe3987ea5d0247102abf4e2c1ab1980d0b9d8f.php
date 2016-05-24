<?php

/* ::base.html.twig */
class __TwigTemplate_18653139e5f3afd24c6dbce00bfe3987ea5d0247102abf4e2c1ab1980d0b9d8f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
\t<head>
\t\t<meta http-equiv=\"content-type\" content=\"text/html; charset=UTF-8\">
\t\t<meta charset=\"utf-8\">
\t\t<title>Annonce SF2-Bootstrap3</title>
\t\t<meta name=\"generator\" content=\"Bootply\" />
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
\t\t<!-- Bootstrap -->
                <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
\t\t<link href=\"//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css\" rel=\"stylesheet\">
\t\t<!--[if lt IE 9]>
\t\t\t<script src=\"//html5shim.googlecode.com/svn/trunk/html5.js\"></script>
\t\t<![endif]-->
\t\t<link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/styles.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t</head>
\t<body>

        ";
        // line 19
        echo twig_include($this->env, $context, "SaSiteBundle:Default:menu.html.twig");
        echo "

        <div id=\"masthead\">  
          <div class=\"container\">
            <div class=\"row\">
              <div class=\"col-md-7\">
                <h1>Storystrap
                  <p class=\"lead\"></p>
                </h1>
              </div>
              <div class=\"col-md-5\">
                <div class=\"well well-lg\"> 
                  <div class=\"row\">
                    <div class=\"col-sm-12\">


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
        

        <div class=\"container\">
            <div class=\"row\">

                <div class=\"col-md-12\"> 

                  <div class=\"panel\">
                    <div class=\"panel-body\">
                        ";
        // line 60
        $this->displayBlock('body', $context, $blocks);
        // line 62
        echo "                    </div>
                  </div>
                </div>
            </div>
        </div> 
                    
                   

        <script src=\"http://code.jquery.com/jquery.js\"></script>
        <script src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    </body>
</html>
";
    }

    // line 60
    public function block_body($context, array $blocks = array())
    {
        // line 61
        echo "                        ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 61,  111 => 60,  103 => 71,  92 => 62,  90 => 60,  46 => 19,  39 => 15,  31 => 10,  20 => 1,);
    }
}
