<?php

/* SaSiteBundle:Form:login.html.twig */
class __TwigTemplate_cd315af5a2634cc002024c8bc162741eba159d7cd3f9b547b1c0b3b30e5100a7 extends Twig_Template
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
        // line 6
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 7
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message", array()), "html", null, true);
            echo "</div>
";
        }
        // line 9
        echo "


<form action=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("site.login_check");
        echo "\" method=\"POST\" >
\t<div class=\"form-group\">
\t\t<label for=\"inputUsernameEmail\">Username</label>
\t\t<input type=\"text\" required=\"required\" class=\"form-control\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" name=\"_username\" id=\"username\">
\t</div>

\t<div class=\"form-group\">
\t\t<label for=\"inputPassword\">Password</label>
\t\t<input type=\"password\" class=\"form-control\" name=\"_password\" required=\"required\" id=\"password\">
\t</div>

\t<div class=\"checkbox pull-left\">
\t\t<label>
\t\t<input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
\t\t<label for=\"remember_me\">Remember me</label>
\t\t</label>
\t</div>

\t<button type=\"submit\" class=\"pull-right btn btn btn-primary\">
\t\tLog In
\t</button>
</form>
    
";
    }

    public function getTemplateName()
    {
        return "SaSiteBundle:Form:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 15,  47 => 12,  42 => 9,  36 => 7,  34 => 6,  31 => 4,  28 => 3,);
    }
}
