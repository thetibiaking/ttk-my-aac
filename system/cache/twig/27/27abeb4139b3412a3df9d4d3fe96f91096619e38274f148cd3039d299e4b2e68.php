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

/* account.logout.html.twig */
class __TwigTemplate_8059351626d070c9fa3806980d16723f81fc875e48eb7b9ee7be5a1b9cc5386e extends \Twig\Template
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
        echo "<div class=\"TableContainer\">
\t<table class=\"Table1\" cellpadding=\"0\" cellspacing=\"0\" >
\t\t<div class=\"CaptionContainer\">
\t\t\t<div class=\"CaptionInnerContainer\" >
\t\t\t\t<span class=\"CaptionEdgeLeftTop\" style=\"background-image:url(";
        // line 5
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/box-frame-edge.gif);\"/></span>
\t\t\t\t<span class=\"CaptionEdgeRightTop\" style=\"background-image:url(";
        // line 6
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/box-frame-edge.gif);\"/></span>
\t\t\t\t<span class=\"CaptionBorderTop\" style=\"background-image:url(";
        // line 7
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/table-headline-border.gif);\" ></span>
\t\t\t\t<span class=\"CaptionVerticalLeft\" style=\"background-image:url(";
        // line 8
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/box-frame-vertical.gif);\"/></span>
\t\t\t\t<div class=\"Text\">Logout Successful</div>
\t\t\t\t<span class=\"CaptionVerticalRight\" style=\"background-image:url(";
        // line 10
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/box-frame-vertical.gif);\"/></span>
\t\t\t\t<span class=\"CaptionBorderBottom\" style=\"background-image:url(";
        // line 11
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/table-headline-border.gif);\" ></span>
\t\t\t\t<span class=\"CaptionEdgeLeftBottom\" style=\"background-image:url(";
        // line 12
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/box-frame-edge.gif);\"/></span>
\t\t\t\t<span class=\"CaptionEdgeRightBottom\" style=\"background-image:url(";
        // line 13
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/box-frame-edge.gif);\"/></span>
\t\t\t</div>
\t\t</div>
\t\t<tr>
\t\t\t<td>
\t\t\t\t<div class=\"InnerTableContainer\">
\t\t\t\t\t<table style=\"width:100%;\">
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>You have logged out of your ";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute(($context["config"] ?? null), "serverName", []), "html", null, true);
        echo " account. In order to view your account you need to <a href=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getLink')->getCallable(), ["account/manage"]), "html", null, true);
        echo "\" >log in</a> again.</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t</td>
\t\t</tr>
\t</table>
</div>";
    }

    public function getTemplateName()
    {
        return "account.logout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 21,  65 => 13,  61 => 12,  57 => 11,  53 => 10,  48 => 8,  44 => 7,  40 => 6,  36 => 5,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "account.logout.html.twig", "D:\\xampp\\htdocs\\system\\templates\\account.logout.html.twig");
    }
}
