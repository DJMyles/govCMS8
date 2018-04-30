<?php

/* themes/contrib/govcms8_ui/templates/layout/page.html.twig */
class __TwigTemplate_c0c6b26f90f7b89dfb8b344b477ecdb881e04cd21418161e8c769cee104cac10 extends Twig_Template
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
        $tags = array("include" => 1, "if" => 7, "set" => 14);
        $filters = array("trim" => 7, "striptags" => 7, "render" => 7);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('include', 'if', 'set'),
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
        $this->loadTemplate((($context["directory"] ?? null) . "/templates/partials/_header.html.twig"), "themes/contrib/govcms8_ui/templates/layout/page.html.twig", 1)->display($context);
        // line 2
        echo "<main class=\"container\">
    <a id=\"main-content\" tabindex=\"-1\"></a>
    <div id=\"main\" class=\"main-container row\">
        <div id=\"content\">
            <div class=\"title-block\">
                ";
        // line 7
        if (($this->getAttribute(($context["page"] ?? null), "breadcrumb", array(), "any", true, true) && twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["page"] ?? null), "breadcrumb", array())))))) {
            // line 8
            echo "                    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "breadcrumb", array()), "html", null, true));
            echo "
                ";
        }
        // line 10
        echo "                ";
        if (($this->getAttribute(($context["page"] ?? null), "help", array(), "any", true, true) && twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["page"] ?? null), "help", array())))))) {
            // line 11
            echo "                    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "help", array()), "html", null, true));
            echo "
                ";
        }
        // line 13
        echo "            </div>
            ";
        // line 14
        $context["left_exists"] = array_key_exists("sidebar_first_exists", $context);
        // line 15
        echo "            ";
        $context["right_exists"] = array_key_exists("sidebar_second_exists", $context);
        // line 16
        echo "            ";
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", array())) {
            // line 17
            echo "                <aside class=\"col-sm-3\" role=\"complementary\">
                    ";
            // line 18
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_first", array()), "html", null, true));
            echo "
                </aside>
            ";
        }
        // line 21
        echo "
            ";
        // line 23
        $context["content_classes"] = array(0 => (((        // line 24
($context["left_exists"] ?? null) && ($context["right_exists"] ?? null))) ? ("col-sm-6") : ("")), 1 => ((( !        // line 25
($context["left_exists"] ?? null) &&  !($context["right_exists"] ?? null))) ? ("col-sm-12") : ("")), 2 => ((((        // line 26
($context["left_exists"] ?? null) &&  !($context["right_exists"] ?? null)) || ( !($context["left_exists"] ?? null) && ($context["right_exists"] ?? null)))) ? ("col-sm-9") : ("")));
        // line 29
        echo "            <section id=\"main-content-section\" ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content_attributes"] ?? null), "addClass", array(0 => ($context["content_classes"] ?? null)), "method"), "html", null, true));
        echo " role=\"main\">
                <div id=\"page-content\">
                    ";
        // line 31
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
        echo "
                </div>
            </section>

            ";
        // line 35
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", array())) {
            // line 36
            echo "                <aside class=\"col-sm-3 right-bar\" role=\"complementary\">
                    ";
            // line 37
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_second", array()), "html", null, true));
            echo "
                </aside>
            ";
        }
        // line 40
        echo "        </div>
    </div>
</main>

";
        // line 44
        $this->loadTemplate((($context["directory"] ?? null) . "/templates/partials/_footer.html.twig"), "themes/contrib/govcms8_ui/templates/layout/page.html.twig", 44)->display($context);
    }

    public function getTemplateName()
    {
        return "themes/contrib/govcms8_ui/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 44,  121 => 40,  115 => 37,  112 => 36,  110 => 35,  103 => 31,  97 => 29,  95 => 26,  94 => 25,  93 => 24,  92 => 23,  89 => 21,  83 => 18,  80 => 17,  77 => 16,  74 => 15,  72 => 14,  69 => 13,  63 => 11,  60 => 10,  54 => 8,  52 => 7,  45 => 2,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/contrib/govcms8_ui/templates/layout/page.html.twig", "/var/www/govcms8.local/docroot/themes/contrib/govcms8_ui/templates/layout/page.html.twig");
    }
}
