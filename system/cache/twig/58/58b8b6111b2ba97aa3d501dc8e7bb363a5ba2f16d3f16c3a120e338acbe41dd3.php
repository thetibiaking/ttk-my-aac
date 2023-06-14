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

/* account.login.html.twig */
class __TwigTemplate_99c4b944db49c5a454df3acca41b3513e5bd001dea64540ddde9b29aa0c1ff5a extends \Twig\Template
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
        echo "<form action=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getLink')->getCallable(), ["account/manage"]), "html", null, true);
        echo "\" method=\"post\" style=\"margin: 0px; padding: 0px;\">
\t";
        // line 2
        if ( !(null === ($context["redirect"] ?? null))) {
            // line 3
            echo "\t\t<input type=\"hidden\" name=\"redirect\" value=\"";
            echo twig_escape_filter($this->env, ($context["redirect"] ?? null), "html", null, true);
            echo "\" />
\t";
        }
        // line 5
        echo "\t<div class=\"TableContainer\" >
\t\t<table class=\"Table4\" cellpadding=\"0\" cellspacing=\"0\" >
\t\t\t<div class=\"CaptionContainer\" >
\t\t\t\t<div class=\"CaptionInnerContainer\" >
\t\t\t\t\t<span class=\"CaptionEdgeLeftTop\" style=\"background-image:url(";
        // line 9
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/box-frame-edge.gif);\" /></span>
\t\t\t\t\t<span class=\"CaptionEdgeRightTop\" style=\"background-image:url(";
        // line 10
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/box-frame-edge.gif);\" /></span>
\t\t\t\t\t<span class=\"CaptionBorderTop\" style=\"background-image:url(";
        // line 11
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/table-headline-border.gif);\" ></span>
\t\t\t\t\t<span class=\"CaptionVerticalLeft\" style=\"background-image:url(";
        // line 12
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/box-frame-vertical.gif);\" /></span>
\t\t\t\t\t<div class=\"Text\" >Account Login</div>
\t\t\t\t\t<span class=\"CaptionVerticalRight\" style=\"background-image:url(";
        // line 14
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/box-frame-vertical.gif);\" /></span>
\t\t\t\t\t<span class=\"CaptionBorderBottom\" style=\"background-image:url(";
        // line 15
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/table-headline-border.gif);\" ></span>
\t\t\t\t\t<span class=\"CaptionEdgeLeftBottom\" style=\"background-image:url(";
        // line 16
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/box-frame-edge.gif);\" /></span>
\t\t\t\t\t<span class=\"CaptionEdgeRightBottom\" style=\"background-image:url(";
        // line 17
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/box-frame-edge.gif);\" /></span>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<tr>
\t\t\t\t<td>
\t\t\t\t\t<div class=\"InnerTableContainer\" >
\t\t\t\t\t\t<table style=\"width:100%;\">
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<div class=\"TableContentContainer\" >
\t\t\t\t\t\t\t\t\t\t\t<table class=\"TableContent\" width=\"100%\" style=\"border:1px solid #faf0d7;\">
\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table style=\"float: left; width: 100%;\" cellpadding=\"0\" cellspacing=\"0\" >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"LabelV\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span";
        // line 35
        if ( !(null === ($context["error"] ?? null))) {
            echo " class=\"red\"";
        }
        echo ">";
        echo twig_escape_filter($this->env, ($context["account_login_by"] ?? null), "html", null, true);
        echo ":</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><input style=\"width: 100%;\" type=\"text\" name=\"account_login\" size=\"35\" maxlength=\"30\" autofocus /></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"LabelV\" ><span";
        // line 40
        if ( !(null === ($context["error"] ?? null))) {
            echo " class=\"red\"";
        }
        echo ">Tibia Password:</span></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><input style=\"width: 100%;\" type=\"password\" name=\"password_login\" size=\"35\" maxlength=\"29\" /></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"LabelV\" ></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><input type=\"checkbox\" id=\"remember_me\" name=\"remember_me\" value=\"true\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"remember_me\"> Remember me</label></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td id=\"LoginFormButtonCell\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table style=\"float: left; width: 100%;\" cellpadding=\"0\" cellspacing=\"0\" >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div style=\"float: right; font-size: 1px;\" >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"page\" value=\"overview\" >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 54
        echo twig_include($this->env, $context, "buttons.login.html.twig");
        echo "
</form>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div style=\"width: 2px; height: 2px;\" ></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<form action=\"";
        // line 57
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getLink')->getCallable(), ["account/lost"]), "html", null, true);
        echo "\" method=\"post\" style=\"padding:0px;margin:0px;\" >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 58
        echo twig_include($this->env, $context, "buttons.account_lost.html.twig");
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</table>
\t\t\t\t\t</div>
\t\t\t\t</td>
\t\t\t</tr>
\t\t</table>
\t</div>

<br/>

<div style=\"text-align:center\">
\t<h1>New to ";
        // line 81
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["config"] ?? null), "lua", []), "serverName", []), "html", null, true);
        echo "?</h1>
</div>
<div class=\"TableContainer\">
<div class=\"CaptionContainer\">
<div class=\"CaptionInnerContainer\">
<span class=\"CaptionEdgeLeftTop\" style=\"background-image:url(";
        // line 86
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/box-frame-edge.gif);\"></span>
<span class=\"CaptionEdgeRightTop\" style=\"background-image:url(";
        // line 87
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/box-frame-edge.gif);\"></span>
<span class=\"CaptionBorderTop\" style=\"background-image:url(";
        // line 88
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/table-headline-border.gif);\"></span>
<span class=\"CaptionVerticalLeft\" style=\"background-image:url(";
        // line 89
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/box-frame-vertical.gif);\"></span>
<div class=\"Text\">New Player</div>
<span class=\"CaptionVerticalRight\" style=\"background-image:url(";
        // line 91
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/box-frame-vertical.gif);\"></span>
<span class=\"CaptionBorderBottom\" style=\"background-image:url(";
        // line 92
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/table-headline-border.gif);\"></span>
<span class=\"CaptionEdgeLeftBottom\" style=\"background-image:url(";
        // line 93
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/box-frame-edge.gif);\"></span>
<span class=\"CaptionEdgeRightBottom\" style=\"background-image:url(";
        // line 94
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/box-frame-edge.gif);\"></span>
</div>
</div>
<table class=\"Table3\" cellpadding=\"0\" cellspacing=\"0\">
<tbody>
<tr>
<td>
\t<div class=\"InnerTableContainer\">
\t\t<table style=\"width:100%;\">
\t\t\t<tbody>
\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t<div class=\"TableContentContainer\">
\t\t\t\t\t\t\t<table class=\"TableContent\" width=\"100%\" style=\"border:1px solid #faf0d7;\">
\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<div style=\"float: right; margin-top: 20px;\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 112
        ob_start(function () { return ''; });
        // line 113
        echo "\t\t\t\t\t\t\t\t\t\t\t\t<form class=\"MediumButtonForm\" action=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getLink')->getCallable(), ["account/create"]), "html", null, true);
        echo "\" method=\"post\" >
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"MediumButtonBackground\" style=\"background-image:url(";
        // line 114
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/buttons/mediumbutton.gif)\" onMouseOver=\"MouseOverBigButton(this);\" onMouseOut=\"MouseOutBigButton(this);\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"MediumButtonOver\" style=\"background-image:url(";
        // line 115
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/buttons/mediumbutton-over.gif)\" onMouseOver=\"MouseOverBigButton(this);\" onMouseOut=\"MouseOutBigButton(this);\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"MediumButtonText\" type=\"image\" name=\"Create Account\" alt=\"Create Account\" src=\"";
        // line 116
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/buttons/mediumbutton_createaccount.png\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 120
        echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div id=\"LoginCreateAccountBox\"><p><b>";
        // line 121
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["config"] ?? null), "lua", []), "serverName", []), "html", null, true);
        echo "...</b></p>
\t\t\t\t\t\t\t\t\t\t<div style=\"margin-left: 10px;\"><p>... where hardcore gaming meets fantasy.</p><p>... where friendships last a lifetime.</p><p>... unites adventurers since 1997!</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t</div>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</tbody>
\t\t</table>
\t</div>
</td>
</tr>
</tbody>
</table>
</div>

";
    }

    public function getTemplateName()
    {
        return "account.login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 121,  246 => 120,  239 => 116,  235 => 115,  231 => 114,  226 => 113,  224 => 112,  203 => 94,  199 => 93,  195 => 92,  191 => 91,  186 => 89,  182 => 88,  178 => 87,  174 => 86,  166 => 81,  140 => 58,  136 => 57,  130 => 54,  111 => 40,  99 => 35,  78 => 17,  74 => 16,  70 => 15,  66 => 14,  61 => 12,  57 => 11,  53 => 10,  49 => 9,  43 => 5,  37 => 3,  35 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "account.login.html.twig", "D:\\xampp\\htdocs\\templates\\tibiacom\\account.login.html.twig");
    }
}
