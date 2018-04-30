<?php

/* themes/contrib/govcms8_ui/templates/block/block--system-branding-block.html.twig */
class __TwigTemplate_67305b9f8f997ae8d139cc3d852bc774ed1c62ea1588178908f1ec580c788c86 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("block" => 15, "if" => 18);
        $filters = array("t" => 17);
        $functions = array("path" => 17);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('block', 'if'),
                array('t'),
                array('path')
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

        // line 15
        $this->displayBlock('content', $context, $blocks);
    }

    public function block_content($context, array $blocks = array())
    {
        // line 16
        echo "    <h2 class=\"brand brand-name has-img col-md-8\">
        <a href=\"";
        // line 17
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("<front>")));
        echo "\" title=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Home")));
        echo "\" rel=\"home\" class=\"site-logo site-logo-branding\">
        ";
        // line 18
        if (($context["govlogo"] ?? null)) {
            // line 19
            echo "            <img src=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["govlogo"] ?? null), "html", null, true));
            echo "\" alt=\"Australian Government\" height=\"70\" />
        ";
        }
        // line 21
        echo "        ";
        if (($context["site_logo"] ?? null)) {
            // line 22
            echo "            <img src=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["site_logo"] ?? null), "html", null, true));
            echo "\" alt=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Home")));
            echo "\" height=\"70\" />
        ";
        }
        // line 24
        echo "        ";
        if (($context["site_name"] ?? null)) {
            // line 25
            echo "            ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["site_name"] ?? null), "html", null, true));
            echo "
        ";
        }
        // line 27
        echo "        ";
        if (($context["site_slogan"] ?? null)) {
            // line 28
            echo "            <div class=\"site-slogan\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["site_slogan"] ?? null), "html", null, true));
            echo "</div>
        ";
        }
        // line 30
        echo "        </a>
    </h2>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/govcms8_ui/templates/block/block--system-branding-block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  96 => 30,  90 => 28,  87 => 27,  81 => 25,  78 => 24,  70 => 22,  67 => 21,  61 => 19,  59 => 18,  53 => 17,  50 => 16,  44 => 15,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/contrib/govcms8_ui/templates/block/block--system-branding-block.html.twig", "/var/www/govcms8.local/docroot/themes/contrib/govcms8_ui/templates/block/block--system-branding-block.html.twig");
    }
}
