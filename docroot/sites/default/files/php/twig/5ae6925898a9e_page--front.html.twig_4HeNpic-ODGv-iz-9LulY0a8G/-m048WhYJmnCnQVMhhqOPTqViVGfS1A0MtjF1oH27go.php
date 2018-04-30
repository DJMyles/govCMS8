<?php

/* themes/contrib/govcms8_ui/templates/layout/page--front.html.twig */
class __TwigTemplate_d23923b749b79384c411a3a076aa4cc09c2e160d5196d6c097701514c73038a0 extends Twig_Template
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
        $tags = array("include" => 1);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('include'),
                array(),
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
        $this->loadTemplate((($context["directory"] ?? null) . "/templates/partials/_header.html.twig"), "themes/contrib/govcms8_ui/templates/layout/page--front.html.twig", 1)->display($context);
        // line 2
        echo "
<div class=\"navbar hero light\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-12\">
        <h1 class=\"brand-heading CoT-ignore\">
          Welcome to govCMS8
        </h1>
      </div>
      <div class=\"col-md-12\">
        <p class=\"tagline\">
          Running on the shiny, new, Drupal 8! 😛
        </p>
        <p>
          Managed by the Australian Government Department of Finance, govCMS is a content management system available to all levels of Australian government. Built on Drupal, we aim to simplify Government ICT and eliminate duplication of activities across
          agencies by providing them with a platform to design, develop and host websites. This reduces the technology and compliance burden on government agencies while providing a more cost-effective option for managing websites, allowing agencies to focus
          on providing high quality content and services to people.
        </p>
        <p>
          Development of govCMS8 is currently occurring over at
          <a href=\"https://github.com/govcms/govcms8\">GitHub</a>
        </p>
        <p>
          <a class=\"cta-link\" href=\"https://www.govcms.gov.au/apply-site\">Call to action</a>
        </p>
      </div>
    </div>
  </div>
</div>

";
        // line 32
        $this->loadTemplate((($context["directory"] ?? null) . "/templates/partials/_footer.html.twig"), "themes/contrib/govcms8_ui/templates/layout/page--front.html.twig", 32)->display($context);
    }

    public function getTemplateName()
    {
        return "themes/contrib/govcms8_ui/templates/layout/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 32,  45 => 2,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/contrib/govcms8_ui/templates/layout/page--front.html.twig", "/var/www/govcms8.local/docroot/themes/contrib/govcms8_ui/templates/layout/page--front.html.twig");
    }
}
