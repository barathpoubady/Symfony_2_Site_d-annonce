<?php

/* SaSiteBundle:Form:fields.html.twig */
class __TwigTemplate_a4817910bbc68cef04875f329a6c64ed9c204bf965987c840c4d7c97ecfb31df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_row' => array($this, 'block_form_row'),
            'submit_widget' => array($this, 'block_submit_widget'),
            'form_label' => array($this, 'block_form_label'),
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'field_errors' => array($this, 'block_field_errors'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 17
        echo "

";
        // line 19
        $this->displayBlock('submit_widget', $context, $blocks);
        // line 35
        echo "



";
        // line 39
        $this->displayBlock('form_label', $context, $blocks);
        // line 55
        echo "

";
        // line 57
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 72
        echo "

       ";
        // line 74
        $this->displayBlock('field_errors', $context, $blocks);
        // line 86
        echo "
";
    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        // line 4
        $context["help"] = (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "help", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "help", array(), "array"), null)) : (null));
        // line 5
        echo "<div class=\"form-group\">
    <label class=\"col-sm-3 control-l
           abel\">";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        echo "</label>
    <div class=\"col-sm-6\">
        ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
        ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        ";
        // line 11
        if (array_key_exists("help", $context)) {
            // line 12
            echo "        <span class=\"help-inline\">";
            echo twig_escape_filter($this->env, (isset($context["help"]) ? $context["help"] : $this->getContext($context, "help")), "html", null, true);
            echo "</span>
        ";
        }
        // line 14
        echo "    </div>
</div>
";
    }

    // line 19
    public function block_submit_widget($context, array $blocks = array())
    {
        // line 20
        ob_start();
        // line 21
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "submit")) : ("submit"));
        // line 22
        if (twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
            // line 23
            $context["label"] = $this->env->getExtension('form')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
        }
        // line 25
        echo "
<div class=\"form-group\">
    <label class=\"col-sm-3 control-label\"></label>
    <div class=\"col-sm-6\">
        <button class=\"btn btn-success\" type=\"submit\" ";
        // line 29
        $this->displayBlock("button_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
        echo "</button>
    </div>
</div>

";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 39
    public function block_form_label($context, array $blocks = array())
    {
        // line 40
        ob_start();
        // line 41
        if ((!((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false))) {
            // line 42
            if ((!(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound")))) {
                // line 43
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("for" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
            }
            // line 45
            if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
                // line 46
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " required"))));
            }
            // line 48
            if (twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
                // line 49
                $context["label"] = $this->env->getExtension('form')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
            }
            // line 51
            echo "<label";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
            echo " :</label>
";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 57
    public function block_form_widget_simple($context, array $blocks = array())
    {
        // line 58
        ob_start();
        // line 59
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "text")) : ("text"));
        // line 60
        echo "
";
        // line 61
        if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "file")) {
            // line 62
            echo "<input type=\"";
            echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
            echo "\" ";
            $this->displayBlock("widget_attributes", $context, $blocks);
            echo " ";
            if ((!twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))))) {
                echo "value=\"";
                echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
                echo "\" ";
            }
            echo " />
       ";
            // line 63
            if (array_key_exists("web_path", $context)) {
                // line 64
                echo "       <p><img src=\"";
                echo twig_escape_filter($this->env, (isset($context["web_path"]) ? $context["web_path"] : $this->getContext($context, "web_path")), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
                echo "\" style=\"max-width: 150px;max-height: 100px;\"></p>
";
            }
        } else {
            // line 67
            echo "<input type=\"";
            echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
            echo "\" ";
            $this->displayBlock("widget_attributes", $context, $blocks);
            echo " ";
            if ((!twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))))) {
                echo "value=\"";
                echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
                echo "\" ";
            }
            echo " />
       ";
        }
        // line 69
        echo "
       ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 71
        echo "       ";
    }

    // line 74
    public function block_field_errors($context, array $blocks = array())
    {
        // line 75
        echo "       ";
        ob_start();
        // line 76
        echo "       ";
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 77
            echo "       <div class=\"error\">
    ";
            // line 78
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 79
                echo "    <div>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($context["error"], "messageTemplate", array()), $this->getAttribute($context["error"], "messageParameters", array()), "validators"), "html", null, true);
                echo "</div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 81
            echo "</div>
<br>
";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "SaSiteBundle:Form:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  253 => 81,  244 => 79,  240 => 78,  237 => 77,  234 => 76,  231 => 75,  228 => 74,  224 => 71,  220 => 69,  206 => 67,  197 => 64,  195 => 63,  182 => 62,  180 => 61,  177 => 60,  175 => 59,  173 => 58,  170 => 57,  148 => 51,  145 => 49,  143 => 48,  140 => 46,  138 => 45,  135 => 43,  133 => 42,  131 => 41,  129 => 40,  126 => 39,  114 => 29,  108 => 25,  105 => 23,  103 => 22,  101 => 21,  99 => 20,  96 => 19,  90 => 14,  84 => 12,  82 => 11,  78 => 10,  74 => 9,  69 => 7,  65 => 5,  63 => 4,  60 => 3,  55 => 86,  53 => 74,  49 => 72,  47 => 57,  43 => 55,  41 => 39,  35 => 35,  33 => 19,  29 => 17,  27 => 3,  24 => 2,);
    }
}
