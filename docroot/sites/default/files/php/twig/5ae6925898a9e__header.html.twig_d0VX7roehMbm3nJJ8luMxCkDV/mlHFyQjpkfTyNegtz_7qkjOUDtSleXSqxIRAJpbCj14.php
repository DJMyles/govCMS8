<?php

/* themes/contrib/govcms8_ui/templates/partials/_header.html.twig */
class __TwigTemplate_6d47354c0fe6cbe127ff88a71980a67d354cea25db0bc15839e8773e7771a929 extends Twig_Template
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
        $tags = array("if" => 15);
        $filters = array("trim" => 15, "striptags" => 15, "render" => 15);
        $functions = array("url" => 6);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
                array('trim', 'striptags', 'render'),
                array('url')
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
        echo "<header class=\"navbar\">
  <div class=\"container vcenter\">
    <div class=\"row\">
      <div class=\"col-md-8 col-sm-12\">
        <div class=\"navbar-header\">
          <a href=\"";
        // line 6
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("<front>")));
        echo "\" class=\"brand navbar-left has-img vcenter\">
            <img src=\"";
        // line 7
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (($context["base_path"] ?? null) . ($context["directory"] ?? null)), "html", null, true));
        echo "/logo.svg\" alt=\"Home\" height=\"70\">
            <h1 class=\"brand-heading style-line CoT-ignore\">
              ";
        // line 9
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["site_name"] ?? null), "html", null, true));
        echo "
              <span class=\"label\">alpha</span>
            </h1>
          </a>
        </div>
      </div>
      ";
        // line 15
        if (($this->getAttribute(($context["page"] ?? null), "header", array(), "any", true, true) && twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["page"] ?? null), "header", array())))))) {
            // line 16
            echo "        <div class=\"col-md-4 col-sm-12\">
          <form class=\"input-group\" block=\"block-searchform\" region=\"header\" action=\"/search\" method=\"get\" id=\"search-block-form\" accept-charset=\"UTF-8\" data-drupal-form-fields=\"edit-keys\">
            <input class=\"form-control\" placeholder=\"Search for…\" data-drupal-selector=\"edit-keys\" type=\"text\" title=\"\" id=\"edit-keys\" name=\"keys\" value=\"\" data-toggle=\"tooltip\" data-placement=\"top\" data-original-title=\"Search\">
            <span class=\"input-group-btn\">
              <button class=\"btn btn-default\" data-drupal-selector=\"edit-submit\" type=\"submit\" id=\"edit-submit\" title=\"\" data-toggle=\"tooltip\" data-placement=\"top\">
                <i class=\"glyphicon glyphicon-search\"></i>
                <span class=\"sr-only\">Search</span>
              </button>
            </span>
          </form>
        </div>
      ";
        }
        // line 28
        echo "    </div>
  </div>
</header>
<div class=\"main-nav\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-12\">
        <nav class=\"navbar-collapse collapse\" id=\"main-navigation\">
          <ul class=\"nav navbar-nav nav-tabs nav-justified\">
            <div class=\"";
        // line 37
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["nav_class"] ?? null), "html", null, true));
        echo "\">
              ";
        // line 38
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "nav", array()), "html", null, true));
        echo "
            </div>
          </ul>
        </nav>
      </div>
      ";
        // line 43
        if (($this->getAttribute(($context["page"] ?? null), "nav_search", array(), "any", true, true) && twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["page"] ?? null), "nav_search", array())))))) {
            // line 44
            echo "        <div class=\"col-sm-3\">
          <form class=\"input-group\" block=\"block-searchform\" region=\"nav\" action=\"/search/node\" method=\"get\" id=\"search-block-form\" accept-charset=\"UTF-8\">
            <input class=\"form-control\" placeholder=\"Search for…\" data-drupal-selector=\"edit-keys\" type=\"search\" id=\"edit-keys\" name=\"keys\">
            <span class=\"input-group-btn\">
              <button class=\"btn btn-default\" id=\"edit-submit\" type=\"search\" data-toggle=\"tooltip\" data-placement=\"top\">
                <i class=\"glyphicon glyphicon-search\"></i>
                <span class=\"sr-only\">Search</span>
              </button>
            </span>
          </form>
        </div>
      ";
        }
        // line 56
        echo "    </div>
  </div>
</div>
";
        // line 59
        if (($this->getAttribute(($context["page"] ?? null), "highlighted", array()) && twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["page"] ?? null), "highlighted", array())))))) {
            // line 60
            echo "  <div class=\"jumbotron\">
    <div id=\"highlight-region\" class=\"container\">
      ";
            // line 62
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "highlighted", array()), "html", null, true));
            echo "
    </div>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/contrib/govcms8_ui/templates/partials/_header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 62,  130 => 60,  128 => 59,  123 => 56,  109 => 44,  107 => 43,  99 => 38,  95 => 37,  84 => 28,  70 => 16,  68 => 15,  59 => 9,  54 => 7,  50 => 6,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/contrib/govcms8_ui/templates/partials/_header.html.twig", "/var/www/govcms8.local/docroot/themes/contrib/govcms8_ui/templates/partials/_header.html.twig");
    }
}
