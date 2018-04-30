<?php

/* themes/contrib/govcms8_ui/templates/partials/_footer.html.twig */
class __TwigTemplate_ddc0dc465728d72583fec1bc0fc05c0025de7f4b742615e9d391ef0450f54914 extends Twig_Template
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
        $tags = array("set" => 1, "if" => 3);
        $filters = array("trim" => 3, "striptags" => 3, "render" => 3);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if'),
                array('trim', 'striptags', 'render'),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 1
        $context["count"] = 0;
        // line 2
        echo "
";
        // line 3
        if (($this->getAttribute(($context["page"] ?? null), "jumbo_footer_1", array(), "any", true, true) && twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["page"] ?? null), "jumbo_footer_1", array())))))) {
            // line 4
            echo "  ";
            $context["count"] = (($context["count"] ?? null) + 1);
        }
        // line 6
        if (($this->getAttribute(($context["page"] ?? null), "jumbo_footer_2", array(), "any", true, true) && twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["page"] ?? null), "jumbo_footer_2", array())))))) {
            // line 7
            echo "  ";
            $context["count"] = (($context["count"] ?? null) + 1);
        }
        // line 9
        if (($this->getAttribute(($context["page"] ?? null), "jumbo_footer_3", array(), "any", true, true) && twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["page"] ?? null), "jumbo_footer_3", array())))))) {
            // line 10
            echo "  ";
            $context["count"] = (($context["count"] ?? null) + 1);
        }
        // line 12
        if (($this->getAttribute(($context["page"] ?? null), "jumbo_footer_4", array(), "any", true, true) && twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["page"] ?? null), "jumbo_footer_4", array())))))) {
            // line 13
            echo "  ";
            $context["count"] = (($context["count"] ?? null) + 1);
        }
        // line 15
        echo "
<footer>
  <h2 class=\"sr-only\">Footer links</h2>
  <div class=\"container\">
    ";
        // line 19
        if ((($context["count"] ?? null) > 0)) {
            // line 20
            echo "      ";
            $context["jumbo_content_class"] = (12 / ($context["count"] ?? null));
            // line 21
            echo "      <div class=\"row\">
        ";
            // line 22
            if (($this->getAttribute(($context["page"] ?? null), "jumbo_footer_1", array(), "any", true, true) && twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["page"] ?? null), "jumbo_footer_1", array())))))) {
                // line 23
                echo "          <div class=\"col-sm-6 col-md-";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["jumbo_content_class"] ?? null), "html", null, true));
                echo "\">
            ";
                // line 24
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "jumbo_footer_1", array()), "html", null, true));
                echo "
          </div>
        ";
            }
            // line 27
            echo "        ";
            if (($this->getAttribute(($context["page"] ?? null), "jumbo_footer_2", array(), "any", true, true) && twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["page"] ?? null), "jumbo_footer_2", array())))))) {
                // line 28
                echo "          <div class=\"col-sm-6 col-md-";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["jumbo_content_class"] ?? null), "html", null, true));
                echo "\">
            ";
                // line 29
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "jumbo_footer_2", array()), "html", null, true));
                echo "
          </div>
        ";
            }
            // line 32
            echo "        ";
            if (($this->getAttribute(($context["page"] ?? null), "jumbo_footer_3", array(), "any", true, true) && twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["page"] ?? null), "jumbo_footer_3", array())))))) {
                // line 33
                echo "          <div class=\"col-sm-6 col-md-";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["jumbo_content_class"] ?? null), "html", null, true));
                echo "\">
            ";
                // line 34
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "jumbo_footer_3", array()), "html", null, true));
                echo "
          </div>
        ";
            }
            // line 37
            echo "        ";
            if (($this->getAttribute(($context["page"] ?? null), "jumbo_footer_4", array(), "any", true, true) && twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["page"] ?? null), "jumbo_footer_4", array())))))) {
                // line 38
                echo "          <div class=\"col-sm-6 col-md-";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["jumbo_content_class"] ?? null), "html", null, true));
                echo "\">
            ";
                // line 39
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "jumbo_footer_4", array()), "html", null, true));
                echo "
          </div>
        ";
            }
            // line 42
            echo "      </div>
    ";
        }
        // line 44
        echo "    <div class=\"row\">
      ";
        // line 45
        $context["coa_footer_class"] = "col-md-12";
        // line 46
        echo "      ";
        if (array_key_exists("coa_bottom", $context)) {
            // line 47
            echo "        ";
            $context["coa_footer_class"] = "col-md-9";
            // line 48
            echo "        <div class=\"col-md-3\">
          <img src=\"";
            // line 49
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["coa_bottom"] ?? null), "html", null, true));
            echo "\" alt=\"Australian Government\" width=\"163\">
        </div>
      ";
        }
        // line 52
        echo "      <div class=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["coa_footer_class"] ?? null), "html", null, true));
        echo "\">
        ";
        // line 53
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer", array()), "html", null, true));
        echo "
        ";
        // line 54
        if (array_key_exists("footer_copyright", $context)) {
            // line 55
            echo "          <small>
            &copy;
            ";
            // line 57
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_copyright"] ?? null), "html", null, true));
            echo "
          </small>
        ";
        }
        // line 60
        echo "      </div>
    </div>
  </div>
</footer>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/govcms8_ui/templates/partials/_footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 60,  180 => 57,  176 => 55,  174 => 54,  170 => 53,  165 => 52,  159 => 49,  156 => 48,  153 => 47,  150 => 46,  148 => 45,  145 => 44,  141 => 42,  135 => 39,  130 => 38,  127 => 37,  121 => 34,  116 => 33,  113 => 32,  107 => 29,  102 => 28,  99 => 27,  93 => 24,  88 => 23,  86 => 22,  83 => 21,  80 => 20,  78 => 19,  72 => 15,  68 => 13,  66 => 12,  62 => 10,  60 => 9,  56 => 7,  54 => 6,  50 => 4,  48 => 3,  45 => 2,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/contrib/govcms8_ui/templates/partials/_footer.html.twig", "/var/www/govcms8.local/docroot/themes/contrib/govcms8_ui/templates/partials/_footer.html.twig");
    }
}
