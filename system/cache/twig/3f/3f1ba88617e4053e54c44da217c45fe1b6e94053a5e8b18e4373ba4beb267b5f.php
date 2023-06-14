<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* admin.statistics.html.twig */
class __TwigTemplate_ed17a31c788401b4090e7c3ca1908ec9d02f3da8b205e8c519be2cadc1c124e6 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<div class=\"row\">
\t<div class=\"col-md-2 col-sm-6 col-xs-12\">
\t\t<div class=\"info-box\">
\t\t\t<span class=\"info-box-icon bg-aqua\"><i class=\"fa-solid fa-users\"></i></span>
\t\t\t<div class=\"info-box-content\">
\t\t\t\t<span class=\"info-box-text\">Total accounts:</span>
\t\t\t\t<span class=\"info-box-number\">";
        // line 7
        echo twig_escape_filter($this->env, ($context["total_accounts"] ?? null), "html", null, true);
        echo "</span>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"col-md-2 col-sm-6 col-xs-12\">
\t\t<div class=\"info-box\">
\t\t\t<span class=\"info-box-icon bg-red\"><i class=\"fa-solid fa-user\"></i></span>
\t\t\t<div class=\"info-box-content\">
\t\t\t\t<span class=\"info-box-text\">Total players:</span>
\t\t\t\t<span class=\"info-box-number\">";
        // line 16
        echo twig_escape_filter($this->env, ($context["total_players"] ?? null), "html", null, true);
        echo "</span>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"col-md-2 col-sm-6 col-xs-12\">
\t\t<div class=\"info-box\">
\t\t\t<span class=\"info-box-icon bg-green\"><i class=\"fa-solid fa-user-shield\"></i></span>
\t\t\t<div class=\"info-box-content\">
\t\t\t\t<span class=\"info-box-text\">Total guilds:</span>
\t\t\t\t<span class=\"info-box-number\">";
        // line 25
        echo twig_escape_filter($this->env, ($context["total_guilds"] ?? null), "html", null, true);
        echo "</span>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"col-md-2 col-sm-6 col-xs-12\">
\t\t<div class=\"info-box\">
\t\t\t<span class=\"info-box-icon bg-yellow\"><i class=\"fa-solid fa-house-user\"></i></span>
\t\t\t<div class=\"info-box-content\">
\t\t\t\t<span class=\"info-box-text\">Total houses:</span>
\t\t\t\t<span class=\"info-box-number\">";
        // line 34
        echo twig_escape_filter($this->env, ($context["total_houses"] ?? null), "html", null, true);
        echo "</span>
\t\t\t</div>
\t\t</div>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "admin.statistics.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 34,  62 => 25,  50 => 16,  38 => 7,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "admin.statistics.html.twig", "D:\\xampp\\htdocs\\system\\templates\\admin.statistics.html.twig");
    }
}
