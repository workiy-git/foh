<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/bootstrap/templates/system/container.html.twig */
<<<<<<<< Updated upstream:fountainofhealth.ca/sites/default/files/php/twig/649061e1cf6f8_container.html.twig_BMMWsA2RbPAS0VDH6ABSc1I29/rksfrG88xfAq1SZgK4Baa-h37UT2QOhja_GO0GoqFjQ.php
class __TwigTemplate_0dfb8d77f51fed801191cb3cba34961e extends Template
========
class __TwigTemplate_56d924eb3a385d47ccf4c36b58459124 extends Template
>>>>>>>> Stashed changes:fountainofhealth.ca/sites/default/files/php/twig/649410c1df9ad_container.html.twig_uNhFxfRORNyeuhX-kx9lGTeuz/ybHDpazSGukrZbhBT6Ri_NEoWY5qJPWzxEddkxA3Duw.php
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        $context["classes"] = [0 => (( !twig_get_attribute($this->env, $this->source,         // line 24
($context["attributes"] ?? null), "hasClass", [0 => "toolbar-menu-administration"], "method", false, false, true, 24)) ? ("form-group") : ("")), 1 => ((        // line 25
($context["has_parent"] ?? null)) ? ("js-form-wrapper") : ("")), 2 => ((        // line 26
($context["has_parent"] ?? null)) ? ("form-wrapper") : (""))];
        // line 29
        echo "<div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 29), 29, $this->source), "html", null, true);
        echo ">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null), 29, $this->source), "html", null, true);
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "themes/bootstrap/templates/system/container.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 29,  42 => 26,  41 => 25,  40 => 24,  39 => 23,);
    }

    public function getSourceContext()
    {
<<<<<<<< Updated upstream:fountainofhealth.ca/sites/default/files/php/twig/649061e1cf6f8_container.html.twig_BMMWsA2RbPAS0VDH6ABSc1I29/rksfrG88xfAq1SZgK4Baa-h37UT2QOhja_GO0GoqFjQ.php
        return new Source("", "themes/bootstrap/templates/system/container.html.twig", "D:\\xampp\\htdocs\\fountainofhealth.ca\\themes\\bootstrap\\templates\\system\\container.html.twig");
========
        return new Source("", "themes/bootstrap/templates/system/container.html.twig", "D:\\xampp\\htdocs\\FOH\\fountainofhealth.ca\\themes\\bootstrap\\templates\\system\\container.html.twig");
>>>>>>>> Stashed changes:fountainofhealth.ca/sites/default/files/php/twig/649410c1df9ad_container.html.twig_uNhFxfRORNyeuhX-kx9lGTeuz/ybHDpazSGukrZbhBT6Ri_NEoWY5qJPWzxEddkxA3Duw.php
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 23);
        static $filters = array("escape" => 29);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set'],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
