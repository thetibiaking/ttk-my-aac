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

/* characters.html.twig */
class __TwigTemplate_1b80338b7154f0d1997afcff7e8ad89387a1b6d459222250331685f611c1c37a extends \Twig\Template
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
        echo "<script type=\"text/javascript\" src=\"tools/js/tipped.js\"></script>
<link rel=\"stylesheet\" type=\"text/css\" href=\"tools/css/tipped.css\"/>
<script>
\t\$(document).ready(function() {
\t    Tipped.create('.item_image');
\t});
</script>
";
        // line 8
        $context["rows"] = 0;
        // line 9
        echo "
";
        // line 10
        if (($context["canEdit"] ?? null)) {
            // line 11
            echo "<a href=\"admin/?p=players&id=";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["player"] ?? null), "getId", [], "method"), "html", null, true);
            echo "\" title=\"Edit in Admin Panel\" target=\"_blank\">
\t";
            // line 12
            $context["button_name"] = "Edit Character";
            // line 13
            echo "\t";
            $this->loadTemplate("buttons.base.html.twig", "characters.html.twig", 13)->display($context);
            // line 14
            echo "</a>
<br>
";
        }
        // line 17
        echo "
<!-- CHARACTER INFORMATION -->
<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">
<tr>
<td>
<div class=\"TableContainer\">
\t<div class=\"CaptionContainer\">
\t\t<div class=\"CaptionInnerContainer\">
\t\t\t<span class=\"CaptionEdgeLeftTop\" style=\"background-image:url(";
        // line 25
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/box-frame-edge.gif);\"></span>
\t\t\t<span class=\"CaptionEdgeRightTop\" style=\"background-image:url(";
        // line 26
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/box-frame-edge.gif);\"></span>
\t\t\t<span class=\"CaptionBorderTop\" style=\"background-image:url(";
        // line 27
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/table-headline-border.gif);\"></span>
\t\t\t<span class=\"CaptionVerticalLeft\" style=\"background-image:url(";
        // line 28
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/box-frame-vertical.gif);\"></span>
\t\t\t<div class=\"Text\">Character Information</div>
\t\t\t<span class=\"CaptionVerticalRight\" style=\"background-image:url(";
        // line 30
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/box-frame-vertical.gif);\"></span>
\t\t\t<span class=\"CaptionBorderBottom\" style=\"background-image:url(";
        // line 31
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/table-headline-border.gif);\"></span>
\t\t\t<span class=\"CaptionEdgeLeftBottom\" style=\"background-image:url(";
        // line 32
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/box-frame-edge.gif);\"></span>
\t\t\t<span class=\"CaptionEdgeRightBottom\" style=\"background-image:url(";
        // line 33
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/box-frame-edge.gif);\"></span>
\t\t</div>
\t</div>
\t<table class=\"Table3\" cellpadding=\"0\" cellspacing=\"0\">
\t<tbody>
\t<tr>
\t<td>
\t<div class=\"InnerTableContainer\">
\t<table style=\"width:100%;\">
\t<tbody>
\t<tr>
\t<td>
\t<div class=\"TableContentContainer\">
\t<table class=\"TableContent\" width=\"100%\" style=\"border:1px solid #faf0d7;\">
\t<tbody>

\t";
        // line 49
        $context["rows"] = (($context["rows"] ?? null) + 1);
        // line 50
        echo "\t<tr bgcolor=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getStyle')->getCallable(), [($context["rows"] ?? null)]), "html", null, true);
        echo "\">
\t<td width=\"20%\" class=\"LabelV175\">Name:</td>
\t<td>";
        // line 52
        if ( !(null === ($context["skull"] ?? null))) {
            echo "<img src=\"images/";
            echo twig_escape_filter($this->env, ($context["skull"] ?? null), "html", null, true);
            echo ".gif\">";
        }
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["player"] ?? null), "getName", [], "method"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["oldName"] ?? null), "html", null, true);
        echo " ";
        if ($this->getAttribute(($context["player"] ?? null), "isOnline", [], "method")) {
            echo "<img src=\"";
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/on.gif\" title=\"Online\">";
        } else {
            echo "<img src=\"";
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/off.gif\" title=\"Offline\">";
        }
        echo "<div style=\"float: right\"></div></td>
\t</tr>

\t";
        // line 55
        $context["rows"] = (($context["rows"] ?? null) + 1);
        // line 56
        echo "\t<tr bgcolor=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getStyle')->getCallable(), [($context["rows"] ?? null)]), "html", null, true);
        echo "\">
\t<td class=\"LabelV175\">Country:</td>
\t<td>";
        // line 58
        echo twig_escape_filter($this->env, ($context["country"] ?? null), "html", null, true);
        echo " ";
        echo ($context["flag"] ?? null);
        echo "</td>
\t</tr>

\t";
        // line 61
        $context["rows"] = (($context["rows"] ?? null) + 1);
        // line 62
        echo "\t<tr bgcolor=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getStyle')->getCallable(), [($context["rows"] ?? null)]), "html", null, true);
        echo "\">
\t<td class=\"LabelV175\">Sex:</td>
\t<td>";
        // line 64
        echo twig_escape_filter($this->env, ($context["sex"] ?? null), "html", null, true);
        echo "</td>
\t</tr>

\t";
        // line 67
        $context["rows"] = (($context["rows"] ?? null) + 1);
        // line 68
        echo "\t<tr bgcolor=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getStyle')->getCallable(), [($context["rows"] ?? null)]), "html", null, true);
        echo "\">
\t<td class=\"LabelV175\">Vocation:</td>
\t<td>";
        // line 70
        echo twig_escape_filter($this->env, ($context["vocation"] ?? null), "html", null, true);
        echo "</td>
\t</tr>

\t";
        // line 73
        $context["rows"] = (($context["rows"] ?? null) + 1);
        // line 74
        echo "\t<tr bgcolor=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getStyle')->getCallable(), [($context["rows"] ?? null)]), "html", null, true);
        echo "\">
\t<td class=\"LabelV175\">Level:</td>
\t<td>";
        // line 76
        echo twig_escape_filter($this->env, $this->getAttribute(($context["player"] ?? null), "getLevel", [], "method"), "html", null, true);
        echo "</td>
\t</tr>

\t";
        // line 79
        $context["rows"] = (($context["rows"] ?? null) + 1);
        // line 80
        echo "\t<tr bgcolor=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getStyle')->getCallable(), [($context["rows"] ?? null)]), "html", null, true);
        echo "\">
\t\t<td class=\"LabelV175\">Achievement Points:</td>
\t\t<td>";
        // line 82
        echo twig_escape_filter($this->env, ($context["achievementPoints"] ?? null), "html", null, true);
        echo "</td>
\t</tr>

\t";
        // line 85
        $context["rows"] = (($context["rows"] ?? null) + 1);
        // line 86
        echo "\t<tr bgcolor=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getStyle')->getCallable(), [($context["rows"] ?? null)]), "html", null, true);
        echo "\">
\t<td class=\"LabelV175\">Residence:</td>
\t<td>";
        // line 88
        echo twig_escape_filter($this->env, ($context["town"] ?? null), "html", null, true);
        echo "</td>
\t</tr>

\t";
        // line 91
        if (($context["frags_enabled"] ?? null)) {
            // line 92
            echo "\t";
            $context["rows"] = (($context["rows"] ?? null) + 1);
            // line 93
            echo "\t<tr bgcolor=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getStyle')->getCallable(), [($context["rows"] ?? null)]), "html", null, true);
            echo "\">
\t<td class=\"LabelV175\">Frags:</td>
\t<td>";
            // line 95
            echo twig_escape_filter($this->env, ($context["frags_count"] ?? null), "html", null, true);
            echo "</td>
\t</tr>
\t";
        }
        // line 98
        echo "
\t";
        // line 99
        if ($this->getAttribute($this->getAttribute(($context["config"] ?? null), "characters", []), "balance", [])) {
            // line 100
            echo "\t";
            $context["rows"] = (($context["rows"] ?? null) + 1);
            // line 101
            echo "\t<tr bgcolor=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getStyle')->getCallable(), [($context["rows"] ?? null)]), "html", null, true);
            echo "\">
\t<td class=\"LabelV175\">Balance:</td>
\t<td>";
            // line 103
            echo twig_escape_filter($this->env, $this->getAttribute(($context["player"] ?? null), "getBalance", [], "method"), "html", null, true);
            echo " Gold Coins.</td>
\t</tr>
\t";
        }
        // line 106
        echo "
\t";
        // line 107
        if ($this->getAttribute(($context["house"] ?? null), "found", [])) {
            // line 108
            echo "\t";
            $context["rows"] = (($context["rows"] ?? null) + 1);
            // line 109
            echo "\t<tr bgcolor=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getStyle')->getCallable(), [($context["rows"] ?? null)]), "html", null, true);
            echo "\">
\t<td class=\"LabelV175\">House:</td>
\t<td><a href=\"\">";
            // line 111
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["house"] ?? null), "name", []) . $this->getAttribute(($context["house"] ?? null), "town", [])) . $this->getAttribute(($context["house"] ?? null), "add", [])), "html", null, true);
            echo "</a></td>
\t</tr>
\t";
        }
        // line 114
        echo "
\t";
        // line 115
        if ( !(null === $this->getAttribute(($context["guild"] ?? null), "rank", []))) {
            // line 116
            echo "\t";
            $context["rows"] = (($context["rows"] ?? null) + 1);
            // line 117
            echo "\t<tr bgcolor=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getStyle')->getCallable(), [($context["rows"] ?? null)]), "html", null, true);
            echo "\">
\t<td class=\"LabelV175\">Guild membership:</td>
\t<td>";
            // line 119
            echo twig_escape_filter($this->env, $this->getAttribute(($context["guild"] ?? null), "rank", []), "html", null, true);
            echo " of the <a href=\"\">";
            echo $this->getAttribute(($context["guild"] ?? null), "link", []);
            echo "</a></td>
\t</tr>
\t";
        }
        // line 122
        echo "
\t";
        // line 123
        if (($context["marriage_enabled"] ?? null)) {
            // line 124
            echo "\t";
            $context["rows"] = (($context["rows"] ?? null) + 1);
            // line 125
            echo "\t<tr bgcolor=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getStyle')->getCallable(), [($context["rows"] ?? null)]), "html", null, true);
            echo "\">
\t<td class=\"LabelV175\">Marital status:</td>
\t<td><a href=\"\">";
            // line 127
            echo twig_escape_filter($this->env, ($context["marital_status"] ?? null), "html", null, true);
            echo "</a></td>
\t</tr>
\t";
        }
        // line 130
        echo "
\t";
        // line 131
        $context["rows"] = (($context["rows"] ?? null) + 1);
        // line 132
        echo "\t<tr bgcolor=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getStyle')->getCallable(), [($context["rows"] ?? null)]), "html", null, true);
        echo "\">
\t<td class=\"LabelV175\">Last Login:</td>
\t<td>";
        // line 134
        if (($this->getAttribute(($context["player"] ?? null), "getLastLogin", [], "method") == 0)) {
            echo "Never logged in.";
        } else {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["player"] ?? null), "getLastLogin", [], "method"), "M d Y, H:i:s"), "html", null, true);
            echo " CEST";
        }
        echo "</td>
\t</tr>

\t";
        // line 137
        if ( !(null === ($context["comment"] ?? null))) {
            // line 138
            echo "\t";
            $context["rows"] = (($context["rows"] ?? null) + 1);
            // line 139
            echo "\t<tr bgcolor=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getStyle')->getCallable(), [($context["rows"] ?? null)]), "html", null, true);
            echo "\">
\t<td class=\"LabelV175\">Comment:</td>
\t<td>";
            // line 141
            echo ($context["comment"] ?? null);
            echo "</td>
\t</tr>
\t";
        }
        // line 144
        echo "
\t";
        // line 145
        $context["rows"] = (($context["rows"] ?? null) + 1);
        // line 146
        echo "\t<tr bgcolor=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getStyle')->getCallable(), [($context["rows"] ?? null)]), "html", null, true);
        echo "\">
\t<td class=\"LabelV175\">Account Status:</td>
\t<td>";
        // line 148
        if ($this->getAttribute(($context["account"] ?? null), "isPremium", [], "method")) {
            echo "<font color=\"green\"><b>Premium Account</b></font>";
        } else {
            echo "<font color=\"red\">Free Account</font>";
        }
        echo "</td>
\t</tr>

\t</tbody>
\t</table>
\t</div>
\t</td>
\t</tr>
\t</tbody>
\t</table>
\t</div>
\t</td>
\t</tr>
\t</tbody>
\t</table>
</div>
</td>
</tr>
</table>

<br>

<!-- ACCOUNT INFORMATION -->
<div class=\"TableContainer\">
<div class=\"CaptionContainer\">
<div class=\"CaptionInnerContainer\">
\t<span class=\"CaptionEdgeLeftTop\" style=\"background-image:url(";
        // line 174
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/box-frame-edge.gif);\"></span>
\t<span class=\"CaptionEdgeRightTop\" style=\"background-image:url(";
        // line 175
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/box-frame-edge.gif);\"></span>
\t<span class=\"CaptionBorderTop\" style=\"background-image:url(";
        // line 176
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/table-headline-border.gif);\"></span>
\t<span class=\"CaptionVerticalLeft\" style=\"background-image:url(";
        // line 177
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/box-frame-vertical.gif);\"></span>
\t<div class=\"Text\">Account Information</div>
\t<span class=\"CaptionVerticalRight\" style=\"background-image:url(";
        // line 179
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/box-frame-vertical.gif);\"></span>
\t<span class=\"CaptionBorderBottom\" style=\"background-image:url(";
        // line 180
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/table-headline-border.gif);\"></span>
\t<span class=\"CaptionEdgeLeftBottom\" style=\"background-image:url(";
        // line 181
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/box-frame-edge.gif);\"></span>
\t<span class=\"CaptionEdgeRightBottom\" style=\"background-image:url(";
        // line 182
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/box-frame-edge.gif);\"></span>
</div></div>
<table class=\"Table3\" cellpadding=\"0\" cellspacing=\"0\">
<tbody><tr>
<td>
<div class=\"InnerTableContainer\">
<table style=\"width:100%;\"><tbody><tr><td>
<div class=\"TableContentContainer\">
<table class=\"TableContent\" width=\"100%\" style=\"border:1px solid #faf0d7;\">
<tbody>
";
        // line 192
        $context["group"] = $this->getAttribute(($context["player"] ?? null), "getGroup", [], "method");
        // line 193
        if (($this->getAttribute(($context["group"] ?? null), "isLoaded", [], "method") && ($this->getAttribute(($context["group"] ?? null), "getId", [], "method") != 1))) {
            // line 194
            $context["rows"] = (($context["rows"] ?? null) + 1);
            // line 195
            echo "<tr bgcolor=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getStyle')->getCallable(), [($context["rows"] ?? null)]), "html", null, true);
            echo "\">
<td class=\"LabelV175\">Position:</td>
<td>";
            // line 197
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute(($context["group"] ?? null), "getName", [], "method")), "html", null, true);
            echo "</td>
</tr>
";
        }
        // line 200
        $context["rows"] = (($context["rows"] ?? null) + 1);
        // line 201
        echo "<tr bgcolor=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getStyle')->getCallable(), [($context["rows"] ?? null)]), "html", null, true);
        echo "\">
<td class=\"LabelV175\">Created:</td>
<td>";
        // line 203
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["account"] ?? null), "getCreated", [], "method"), "M d Y, g:i:s"), "html", null, true);
        echo " CET
\t\t";
        // line 204
        if ((preg_match("/^\\d+\$/", ($context["bannedUntil"] ?? null)) || (($context["bannedUntil"] ?? null) == "-1"))) {
            // line 205
            echo "\t\t\t<span style=\"color: red\">[Banished ";
            if ((($context["bannedUntil"] ?? null) == "-1")) {
                echo "forever";
            } else {
                echo "until ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["bannedUntil"] ?? null), "d F Y, h:s"), "html", null, true);
            }
            echo "]</span>
\t\t";
        } else {
            // line 207
            echo "\t";
            echo ($context["bannedUntil"] ?? null);
            echo "
\t";
        }
        // line 208
        echo "</td>
</tr>
</tbody></table>
</div></td></tr>
</tbody></table>
</div>
</td>
</tr>
</tbody></table></div>

<br>

<!-- CHARACTER DETAILS -->
<div class=\"TableContainer\">
<div class=\"CaptionContainer\">
<div class=\"CaptionInnerContainer\">
\t<span class=\"CaptionEdgeLeftTop\" style=\"background-image:url(";
        // line 224
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/box-frame-edge.gif);\"></span>
\t<span class=\"CaptionEdgeRightTop\" style=\"background-image:url(";
        // line 225
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/box-frame-edge.gif);\"></span>
\t<span class=\"CaptionBorderTop\" style=\"background-image:url(";
        // line 226
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/table-headline-border.gif);\"></span>
\t<span class=\"CaptionVerticalLeft\" style=\"background-image:url(";
        // line 227
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/box-frame-vertical.gif);\"></span>
\t<div class=\"Text\">Character Details</div>
\t<span class=\"CaptionVerticalRight\" style=\"background-image:url(";
        // line 229
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/box-frame-vertical.gif);\"></span>
\t<span class=\"CaptionBorderBottom\" style=\"background-image:url(";
        // line 230
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/table-headline-border.gif);\"></span>
\t<span class=\"CaptionEdgeLeftBottom\" style=\"background-image:url(";
        // line 231
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/box-frame-edge.gif);\"></span>
\t<span class=\"CaptionEdgeRightBottom\" style=\"background-image:url(";
        // line 232
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/box-frame-edge.gif);\"></span>
</div></div>
<table class=\"Table3\" cellpadding=\"0\" cellspacing=\"0\">
<tbody>
<tr>
<td style=\"width: 10rem;\">
<!-- OUTFIT -->
";
        // line 239
        if ($this->getAttribute($this->getAttribute(($context["config"] ?? null), "characters", []), "outfit", [])) {
            // line 240
            echo "<div class=\"InnerTableContainer\">
<table><tbody><tr><td>
<div class=\"TableContentContainer\">
<table class=\"TableContent\" width=\"100%\" style=\"border:1px solid #faf0d7;\"><tbody>
<tr bgcolor=\"";
            // line 244
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getStyle')->getCallable(), [2]), "html", null, true);
            echo "\">
<td align=\"center\" style=\"border:0px; width: 60px;\">
<b>Current outfit:</b>
</td>
<td style=\"border:0px;\">
<div style=\"width:64px; height:64px;\">
<img style=\"margin-left:";
            // line 250
            if (twig_in_filter($this->getAttribute(($context["player"] ?? null), "getLookType", [], "method"), [0 => 75, 1 => 266, 2 => 302])) {
                echo "-15px;margin-top:-15px;width:64px;height:64px;";
            } else {
                echo "-15px;margin-top:-15px;width:64px;height:64px;";
            }
            echo "\" src=\"";
            echo twig_escape_filter($this->env, ($context["outfit"] ?? null), "html", null, true);
            echo "\" alt=\"player outfit\"/>
</div>
</td>
</tr>
</tbody></table>
</div></td>
</tr>
</tbody></table>
</div>
<!-- OUTFIT END -->
";
        }
        // line 261
        echo "
";
        // line 262
        if ($this->getAttribute($this->getAttribute(($context["config"] ?? null), "characters", []), "equipment", [])) {
            // line 263
            echo "<!-- EQUIPMENT -->
<div class=\"InnerTableContainer\">
<table><tbody><tr><td>
<div class=\"TableContentContainer\">
<table class=\"TableContent\" width=\"100%\" style=\"border:1px solid #faf0d7;\"><tbody>
<tr bgcolor=\"";
            // line 268
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getStyle')->getCallable(), [2]), "html", null, true);
            echo "\">
<td align=\"center\">
<b>Inventory:</b>
</td>
</tr>
<tr bgcolor=\"";
            // line 273
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getStyle')->getCallable(), [2]), "html", null, true);
            echo "\">
\t<td>
\t\t<table width=\"100\" align=\"center\" cellspacing=\"0\" cellpadding=\"0\">
\t\t\t<tr>
\t\t\t\t<td style=\"border:0px; padding:0px;\">
\t\t\t\t\t<table cellspacing=\"0\" style=\"background: #292929;\">
\t\t\t\t\t\t<tr><td style=\"border:1px solid #808080;\">";
            // line 279
            echo $this->getAttribute(($context["equipment"] ?? null), 2, [], "array");
            echo "</td></tr>
\t\t\t\t\t\t<tr><td style=\"border:1px solid #808080;\">";
            // line 280
            echo $this->getAttribute(($context["equipment"] ?? null), 6, [], "array");
            echo "</td></tr>
\t\t\t\t\t\t<tr><td style=\"border:1px solid #808080;\">";
            // line 281
            echo $this->getAttribute(($context["equipment"] ?? null), 9, [], "array");
            echo "</td></tr>
\t\t\t\t\t\t<tr><td style=\"color: #fff; text-align: center; font-size: 10px;\">Soul: ";
            // line 282
            echo twig_escape_filter($this->env, ($context["soul"] ?? null), "html", null, true);
            echo "</td></tr>
\t\t\t\t\t</table>
\t\t\t\t</td>
\t\t\t\t<td style=\"border:0px; padding:0px;\">
\t\t\t\t\t<table cellspacing=\"0\" style=\"background: #292929;\">
\t\t\t\t\t\t<tr><td style=\"border:1px solid #808080;\">";
            // line 287
            echo $this->getAttribute(($context["equipment"] ?? null), 1, [], "array");
            echo "</td></tr>
\t\t\t\t\t\t<tr><td style=\"border:1px solid #808080;\">";
            // line 288
            echo $this->getAttribute(($context["equipment"] ?? null), 4, [], "array");
            echo "</td></tr>
\t\t\t\t\t\t<tr><td style=\"border:1px solid #808080;\">";
            // line 289
            echo $this->getAttribute(($context["equipment"] ?? null), 7, [], "array");
            echo "</td></tr>
\t\t\t\t\t\t<tr><td style=\"border:1px solid #808080;\">";
            // line 290
            echo $this->getAttribute(($context["equipment"] ?? null), 8, [], "array");
            echo "</td></tr>
\t\t\t\t\t</table>
\t\t\t\t</td>
\t\t\t\t<td style=\"border:0px; padding:0px;\">
\t\t\t\t\t<table cellspacing=\"0\" style=\"background: #292929;\">
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t<td style=\"border:1px solid #808080;\">";
            // line 296
            echo $this->getAttribute(($context["equipment"] ?? null), 3, [], "array");
            echo "</td></tr>
\t\t\t\t\t\t<tr><td style=\"border:1px solid #808080;\">";
            // line 297
            echo $this->getAttribute(($context["equipment"] ?? null), 5, [], "array");
            echo "</td></tr>
\t\t\t\t\t\t<tr><td style=\"border:1px solid #808080;\">";
            // line 298
            echo $this->getAttribute(($context["equipment"] ?? null), 10, [], "array");
            echo "</td></tr>
\t\t\t\t\t\t<tr><td style=\"color: #fff; text-align: center; font-size: 10px;\">Cap: ";
            // line 299
            echo twig_escape_filter($this->env, ($context["cap"] ?? null), "html", null, true);
            echo "</td></tr>
\t\t\t\t\t</table>
\t\t\t\t</td>
\t\t\t</tr>
\t\t</table>
\t</td>
</tr>
</tbody></table>
</div></td>
</tr>
</tbody></table>
</div>
<!-- EQUIPMENT_END -->
";
        }
        // line 313
        echo "</td>

<!-- LIFE MANA -->
<td>
<div class=\"InnerTableContainer\">
<table style=\"width:100%;\"><tbody><tr><td>
<div class=\"TableContentContainer\">
<table class=\"TableContent\" width=\"100%\" style=\"border:1px solid #faf0d7;\"><tbody>
<tr bgcolor=\"";
        // line 321
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getStyle')->getCallable(), [2]), "html", null, true);
        echo "\">
<td style=\"border:0px; width:15%; text-align: right;\"><b>Health:</b></td>
<td style=\"border:0px; text-align: center;\">
";
        // line 324
        echo twig_escape_filter($this->env, ($context["health_current"] ?? null), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, ($context["health_max"] ?? null), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["health_percent"] ?? null), "html", null, true);
        echo "%)
<div class=\"progress\">
  <div class=\"progress-bar bg-danger\" role=\"progressbar\" aria-valuenow=\"";
        // line 326
        echo twig_escape_filter($this->env, ($context["health_percent"] ?? null), "html", null, true);
        echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: ";
        echo twig_escape_filter($this->env, ($context["health_percent"] ?? null), "html", null, true);
        echo "%;\"></div>
</div>
</td>
</tr>
<tr bgcolor=\"";
        // line 330
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getStyle')->getCallable(), [2]), "html", null, true);
        echo "\">
<td style=\"border:0px; width:15%; text-align: right;\"><b>Mana:</b></td>
<td style=\"border:0px; text-align: center;\">
";
        // line 333
        echo twig_escape_filter($this->env, ($context["mana_current"] ?? null), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, ($context["mana_max"] ?? null), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["mana_percent"] ?? null), "html", null, true);
        echo "%)
<div class=\"progress\">
  <div class=\"progress-bar bg-default\" role=\"progressbar\" aria-valuenow=\"";
        // line 335
        echo twig_escape_filter($this->env, ($context["mana_percent"] ?? null), "html", null, true);
        echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: ";
        echo twig_escape_filter($this->env, ($context["mana_percent"] ?? null), "html", null, true);
        echo "%;\"></div>
</div>
</td>
</tr>
</tbody></table>
</div></td>
</tr>
</tbody></table>
</div>
<!-- LIFE MANA END -->

<!-- EXPERIENCE -->
<div class=\"InnerTableContainer\">
<table style=\"width:100%;\"><tbody><tr><td>
<div class=\"TableContentContainer\">
<table class=\"TableContent\" width=\"100%\" style=\"border:1px solid #faf0d7;\"><tbody>
<tr bgcolor=\"";
        // line 351
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getStyle')->getCallable(), [2]), "html", null, true);
        echo "\">
<td style=\"border:0px; width:15%; text-align: right;\"><b>Experience:</b></td>
<td style=\"border:0px; text-align: center;\">
Have <b>";
        // line 354
        echo twig_escape_filter($this->env, $this->getAttribute(($context["player"] ?? null), "getExperience", [], "method"), "html", null, true);
        echo "</b> and need <b>";
        echo twig_escape_filter($this->env, ($context["expLeft"] ?? null), "html", null, true);
        echo "</b> to Level <b>";
        echo twig_escape_filter($this->env, ($this->getAttribute(($context["player"] ?? null), "getLevel", [], "method") + 1), "html", null, true);
        echo "</b>.
</td>
</tr>
<tr bgcolor=\"";
        // line 357
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getStyle')->getCallable(), [2]), "html", null, true);
        echo "\">
<td style=\"border:0px; width:15%; text-align: right;\"><b>Percent:</b></td>
<td style=\"border:0px; text-align: center;\">
";
        // line 360
        echo twig_escape_filter($this->env, $this->getAttribute(($context["player"] ?? null), "getExperience", [], "method"), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, ($context["expNext"] ?? null), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["expLeftPercent"] ?? null), "html", null, true);
        echo "%)
<div class=\"progress\">
\t<div class=\"progress-bar bg-success\" role=\"progressbar\" aria-valuenow=\"";
        // line 362
        echo twig_escape_filter($this->env, ($context["expLeftPercent"] ?? null), "html", null, true);
        echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:";
        echo twig_escape_filter($this->env, ($context["expLeftPercent"] ?? null), "html", null, true);
        echo "%\"></div>
</div>
</td>
</tr>
</tbody></table>
</div></td>
</tr>
</tbody></table>
</div>
<!-- EXPERIENCE END -->

";
        // line 373
        if ($this->getAttribute($this->getAttribute(($context["config"] ?? null), "characters", []), "skills", [])) {
            // line 374
            echo "<!-- SKILLS -->
<div class=\"InnerTableContainer\">
<table style=\"width:100%;\"><tbody><tr><td>
<div class=\"TableContentContainer\">
<table class=\"TableContent\" width=\"100%\" style=\"border:1px solid #faf0d7;\"><tbody>
<tr bgcolor=\"";
            // line 379
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getStyle')->getCallable(), [2]), "html", null, true);
            echo "\" style=\"text-align: center;\">
<td style=\"border:0px;\"><img style=\"\" src=\"https://www.tibiawiki.com.br/images/0/05/Journal_Shield.gif\"/></td>
<td style=\"border:0px;\"><img style=\"\" src=\"https://www.tibiawiki.com.br/images/3/31/Lasting_Exercise_Rod.gif\"/></td>
<td style=\"border:0px;\"><img style=\"\" src=\"https://www.tibiawiki.com.br/images/8/8a/Pair_of_Iron_Fists.gif\"/></td>
<td style=\"border:0px;\"><img style=\"\" src=\"https://www.tibiawiki.com.br/images/3/3b/Lasting_Exercise_Club.gif\"/></td>
<td style=\"border:0px;\"><img style=\"\" src=\"https://www.tibiawiki.com.br/images/d/db/Lasting_Exercise_Sword.gif\"/></td>
<td style=\"border:0px;\"><img style=\"\" src=\"https://www.tibiawiki.com.br/images/4/44/Lasting_Exercise_Axe.gif\"/></td>
<td style=\"border:0px;\"><img style=\"\" src=\"https://www.tibiawiki.com.br/images/7/7c/Lasting_Exercise_Bow.gif\"/></td>
<td style=\"border:0px;\"><img style=\"\" src=\"https://www.tibiawiki.com.br/images/2/2f/Broken_Wooden_Shield.gif\"/></td>
<td style=\"border:0px;\"><img style=\"\" src=\"https://www.tibiawiki.com.br/images/1/1f/Fishing_Rod.gif\"/></td>
</tr>
<tr bgcolor=\"";
            // line 390
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getStyle')->getCallable(), [2]), "html", null, true);
            echo "\" style=\"text-align: center;\">
<td style=\"border:0px;\"><b>Level</b></td>
<td style=\"border:0px;\"><b>ML</b></td>
<td style=\"border:0px;\"><b>Fist</b></td>
<td style=\"border:0px;\"><b>Club</b></td>
<td style=\"border:0px;\"><b>Sword</b></td>
<td style=\"border:0px;\"><b>Axe</b></td>
<td style=\"border:0px;\"><b>Dist</b></td>
<td style=\"border:0px;\"><b>Def</b></td>
<td style=\"border:0px;\"><b>Fish</b></td>
</tr>
<tr bgcolor=\"";
            // line 401
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getStyle')->getCallable(), [2]), "html", null, true);
            echo "\" style=\"text-align: center;\">
<td style=\"border:0px;\">";
            // line 402
            echo twig_escape_filter($this->env, $this->getAttribute(($context["player"] ?? null), "getLevel", [], "method"), "html", null, true);
            echo "</td>
";
            // line 403
            $context["i"] = 0;
            // line 404
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["skills"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["skill"]) {
                // line 405
                $context["i"] = (($context["i"] ?? null) + 1);
                // line 406
                echo "\t<td style=\"border:0px;\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["skill"], "value", []), "html", null, true);
                echo "</td>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['skill'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 408
            echo "</tr>
</tbody></table>
</div></td>
</tr>
</tbody></table>
</div>
<!-- SKILLS END -->
";
        }
        // line 416
        echo "</td>
</tr>
</tbody></table></div>

<br>

<div class=\"TableContainer\">
<div class=\"CaptionContainer\">
<div class=\"CaptionInnerContainer\">
\t<span class=\"CaptionEdgeLeftTop\" style=\"background-image:url(";
        // line 425
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/box-frame-edge.gif);\"></span>
\t<span class=\"CaptionEdgeRightTop\" style=\"background-image:url(";
        // line 426
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/box-frame-edge.gif);\"></span>
\t<span class=\"CaptionBorderTop\" style=\"background-image:url(";
        // line 427
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/table-headline-border.gif);\"></span>
\t<span class=\"CaptionVerticalLeft\" style=\"background-image:url(";
        // line 428
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/box-frame-vertical.gif);\"></span>
\t<div class=\"Text\">Character Quests</div>
\t<span class=\"CaptionVerticalRight\" style=\"background-image:url(";
        // line 430
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/box-frame-vertical.gif);\"></span>
\t<span class=\"CaptionBorderBottom\" style=\"background-image:url(";
        // line 431
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/table-headline-border.gif);\"></span>
\t<span class=\"CaptionEdgeLeftBottom\" style=\"background-image:url(";
        // line 432
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/box-frame-edge.gif);\"></span>
\t<span class=\"CaptionEdgeRightBottom\" style=\"background-image:url(";
        // line 433
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/box-frame-edge.gif);\"></span>
</div></div>
\t<div style=\"top: 15px;\" id=\"QuestsCollapse\" class=\"BigToggleButton\" onclick=\"CollapseTable('QuestsCollapseContainer'); \$('#labelshow').html(\$('#labelshow').html() == 'show' ? 'hide' : 'show');\" onmouseover=\"ActivateHelperDiv(\$(this), '', 'Click here to expand the list of Quests.', '');\" onmouseout=\"\$('#HelperDivContainer').hide();\">
\t\t<div id=\"Indicator_QuestsCollapseContainer\" class=\"CircleSymbolMinus\" style=\"position: absolute; height: 18px; width: 18px; top: -8px; right: -8px; z-index: 99; cursor: pointer; background-image: url(";
        // line 436
        echo twig_escape_filter($this->env, ($context["BASE_URL"] ?? null), "html", null, true);
        echo "templates/tibiacom/images/global/content/circle-symbol-plus.gif);\"></div>
\t</div>
<table class=\"Table3\" cellpadding=\"0\" cellspacing=\"0\">
<tbody><tr>
<td>
<div class=\"InnerTableContainer\" id=\"QuestsCollapseContainer\" style=\"display: none\">
<table style=\"width:100%;\"><tbody><tr><td>
<div class=\"TableContentContainer\">
<table class=\"TableContent\" width=\"100%\" style=\"border:1px solid #faf0d7;\">
<tbody>
";
        // line 446
        $context["i"] = 0;
        // line 447
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["quests"] ?? null));
        foreach ($context['_seq'] as $context["name"] => $context["done"]) {
            // line 448
            $context["i"] = (($context["i"] ?? null) + 1);
            // line 449
            $context["rows"] = (($context["rows"] ?? null) + 1);
            // line 450
            echo "<tr bgcolor=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getStyle')->getCallable(), [($context["rows"] ?? null)]), "html", null, true);
            echo "\">
<td style=\"width: 90%;\" class=\"LabelV175\">";
            // line 451
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "</td>
<td><img src=\"templates/tibiacom/images/premiumfeatures/icon_";
            // line 452
            if ($context["done"]) {
                echo "yes";
            } else {
                echo "no";
            }
            echo ".png\" title=\"";
            if ($context["done"]) {
                echo "Completed";
            } else {
                echo "Incomplete";
            }
            echo "\"></td>
</tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['done'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 455
        echo "</tbody></table>
</div></td></tr>
</tbody></table>
</div>
</td>
</tr>
</tbody></table></div>
<br>
<div class=\"TableContainer\">
\t<div class=\"CaptionContainer\">
\t\t<div class=\"CaptionInnerContainer\">
\t\t\t<span class=\"CaptionEdgeLeftTop\" style=\"background-image:url(";
        // line 466
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/box-frame-edge.gif);\"></span>
\t\t\t<span class=\"CaptionEdgeRightTop\" style=\"background-image:url(";
        // line 467
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/box-frame-edge.gif);\"></span>
\t\t\t<span class=\"CaptionBorderTop\" style=\"background-image:url(";
        // line 468
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/table-headline-border.gif);\"></span>
\t\t\t<span class=\"CaptionVerticalLeft\" style=\"background-image:url(";
        // line 469
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/box-frame-vertical.gif);\"></span>
\t\t\t<div class=\"Text\">Account Achievements</div>
\t\t\t<span class=\"CaptionVerticalRight\" style=\"background-image:url(";
        // line 471
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/box-frame-vertical.gif);\"></span>
\t\t\t<span class=\"CaptionBorderBottom\" style=\"background-image:url(";
        // line 472
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/table-headline-border.gif);\"></span>
\t\t\t<span class=\"CaptionEdgeLeftBottom\" style=\"background-image:url(";
        // line 473
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/box-frame-edge.gif);\"></span>
\t\t\t<span class=\"CaptionEdgeRightBottom\" style=\"background-image:url(";
        // line 474
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/box-frame-edge.gif);\"></span>
\t\t</div>
\t</div>
\t<div style=\"top: 15px;\" id=\"AchievementsCollapse\" class=\"BigToggleButton\" onclick=\"CollapseTable('AchievementsCollapseContainer'); \$('#labelshow').html(\$('#labelshow').html() == 'show' ? 'hide' : 'show');\" onmouseover=\"ActivateHelperDiv(\$(this), '', 'Click here to expand the Achievements list.', '');\" onmouseout=\"\$('#HelperDivContainer').hide();\">
\t\t<div id=\"Indicator_AchievementsCollapseContainer\" class=\"CircleSymbolMinus\" style=\"position: absolute; height: 18px; width: 18px; top: -8px; right: -8px; z-index: 99; cursor: pointer; background-image: url(";
        // line 478
        echo twig_escape_filter($this->env, ($context["BASE_URL"] ?? null), "html", null, true);
        echo "templates/tibiacom/images/global/content/circle-symbol-plus.gif);\"></div>
\t</div>
\t<table class=\"Table3\" cellpadding=\"0\" cellspacing=\"0\">
\t\t<tbody><tr>
\t\t\t<td>
\t\t\t\t<div class=\"InnerTableContainer\" id=\"AchievementsCollapseContainer\" style=\"display: none\">
\t\t\t\t\t<table style=\"width:100%;\"><tbody><tr><td>
\t\t\t\t\t\t\t\t<div class=\"TableContentContainer\">
\t\t\t\t\t\t\t\t\t<table class=\"TableContent\" width=\"100%\" style=\"border:1px solid #faf0d7;\">
\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t";
        // line 488
        $context["i"] = 0;
        // line 489
        echo "\t\t\t\t\t\t\t\t\t\t";
        if ((($context["achievementPoints"] ?? null) > 0)) {
            // line 490
            echo "\t\t\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["achievements"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["achievement"]) {
                // line 491
                echo "\t\t\t\t\t\t\t\t\t\t\t";
                $context["i"] = (($context["i"] ?? null) + 1);
                // line 492
                echo "\t\t\t\t\t\t\t\t\t\t\t";
                $context["rows"] = (($context["rows"] ?? null) + 1);
                // line 493
                echo "\t\t\t\t\t\t\t\t\t\t\t<tr bgcolor=\"";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getStyle')->getCallable(), [($context["rows"] ?? null)]), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 494
                if (($this->getAttribute($context["achievement"], "grade", []) == 1)) {
                    // line 495
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<td><img src=\"";
                    echo twig_escape_filter($this->env, ($context["BASE_URL"] ?? null), "html", null, true);
                    echo "images/global/general/achievement-grade-symbol.gif\" alt=\"Tibia Achievement\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 497
                echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                if (($this->getAttribute($context["achievement"], "grade", []) == 2)) {
                    // line 498
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<td><img src=\"";
                    echo twig_escape_filter($this->env, ($context["BASE_URL"] ?? null), "html", null, true);
                    echo "images/global/general/achievement-grade-symbol.gif\" alt=\"Tibia Achievement\"><img src=\"";
                    echo twig_escape_filter($this->env, ($context["BASE_URL"] ?? null), "html", null, true);
                    echo "images/global/general/achievement-grade-symbol.gif\" alt=\"Tibia Achievement\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 500
                echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                if (($this->getAttribute($context["achievement"], "grade", []) == 3)) {
                    // line 501
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<td><img src=\"";
                    echo twig_escape_filter($this->env, ($context["BASE_URL"] ?? null), "html", null, true);
                    echo "images/global/general/achievement-grade-symbol.gif\" alt=\"Tibia Achievement\"><img src=\"";
                    echo twig_escape_filter($this->env, ($context["BASE_URL"] ?? null), "html", null, true);
                    echo "images/global/general/achievement-grade-symbol.gif\" alt=\"Tibia Achievement\"><img src=\"";
                    echo twig_escape_filter($this->env, ($context["BASE_URL"] ?? null), "html", null, true);
                    echo "images/global/general/achievement-grade-symbol.gif\" alt=\"Tibia Achievement\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 503
                echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                if (($this->getAttribute($context["achievement"], "grade", []) == 4)) {
                    // line 504
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<td><img src=\"";
                    echo twig_escape_filter($this->env, ($context["BASE_URL"] ?? null), "html", null, true);
                    echo "images/global/general/achievement-grade-symbol.gif\" alt=\"Tibia Achievement\"><img src=\"";
                    echo twig_escape_filter($this->env, ($context["BASE_URL"] ?? null), "html", null, true);
                    echo "images/global/general/achievement-grade-symbol.gif\" alt=\"Tibia Achievement\"><img src=\"";
                    echo twig_escape_filter($this->env, ($context["BASE_URL"] ?? null), "html", null, true);
                    echo "images/global/general/achievement-grade-symbol.gif\" alt=\"Tibia Achievement\"><img src=\"";
                    echo twig_escape_filter($this->env, ($context["BASE_URL"] ?? null), "html", null, true);
                    echo "images/global/general/achievement-grade-symbol.gif\" alt=\"Tibia Achievement\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 506
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<td style=\"width: 75%;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 507
                echo twig_escape_filter($this->env, $this->getAttribute($context["achievement"], "name", []), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 508
                if (($this->getAttribute($context["achievement"], "secret", []) == 1)) {
                    // line 509
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"SecretAchievementIcon\" src=\"";
                    echo twig_escape_filter($this->env, ($context["BASE_URL"] ?? null), "html", null, true);
                    echo "images/global/general/achievement-secret-symbol.gif\" alt=\"Tibia Secret Achievement\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 511
                echo "\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['achievement'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 514
            echo "\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 515
            echo "\t\t\t\t\t\t\t\t\t\t\t<tr bgcolor=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getStyle')->getCallable(), [($context["rows"] ?? null)]), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<td style=\"text-align: center;\">This character has no achievement.</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 519
        echo "\t\t\t\t\t\t\t\t\t\t</tbody></table>
\t\t\t\t\t\t\t\t</div></td></tr>
\t\t\t\t\t\t</tbody></table>
\t\t\t\t</div>
\t\t\t</td>
\t\t</tr>
\t\t</tbody></table></div>
<br>

";
        // line 528
        if ((twig_length_filter($this->env, ($context["deaths"] ?? null)) > 0)) {
            // line 529
            echo "<!-- DEATHS -->
<div class=\"TableContainer\">
\t<div class=\"CaptionContainer\">
\t\t<div class=\"CaptionInnerContainer\">
\t\t\t<span class=\"CaptionEdgeLeftTop\" style=\"background-image:url(";
            // line 533
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/global/content/box-frame-edge.gif);\"></span>
\t\t\t<span class=\"CaptionEdgeRightTop\" style=\"background-image:url(";
            // line 534
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/global/content/box-frame-edge.gif);\"></span>
\t\t\t<span class=\"CaptionBorderTop\" style=\"background-image:url(";
            // line 535
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/global/content/table-headline-border.gif);\"></span>
\t\t\t<span class=\"CaptionVerticalLeft\" style=\"background-image:url(";
            // line 536
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/global/content/box-frame-vertical.gif);\"></span>
\t\t\t<div class=\"Text\">Character Deaths</div>
\t\t\t<span class=\"CaptionVerticalRight\" style=\"background-image:url(";
            // line 538
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/global/content/box-frame-vertical.gif);\"></span>
\t\t\t<span class=\"CaptionBorderBottom\" style=\"background-image:url(";
            // line 539
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/global/content/table-headline-border.gif);\"></span>
\t\t\t<span class=\"CaptionEdgeLeftBottom\" style=\"background-image:url(";
            // line 540
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/global/content/box-frame-edge.gif);\"></span>
\t\t\t<span class=\"CaptionEdgeRightBottom\" style=\"background-image:url(";
            // line 541
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/global/content/box-frame-edge.gif);\"></span>
\t\t</div></div>
\t<div style=\"top: 15px;\" id=\"DeathsCollapse\" class=\"BigToggleButton\" onclick=\"CollapseTable('DeathsCollapseContainer'); \$('#labelshow').html(\$('#labelshow').html() == 'show' ? 'hide' : 'show');\" onmouseover=\"ActivateHelperDiv(\$(this), '', 'Click here to expand the list of Deaths.', '');\" onmouseout=\"\$('#HelperDivContainer').hide();\">
\t\t<div id=\"Indicator_DeathsCollapseContainer\" class=\"CircleSymbolMinus\" style=\"position: absolute; height: 18px; width: 18px; top: -8px; right: -8px; z-index: 99; cursor: pointer; background-image: url(";
            // line 544
            echo twig_escape_filter($this->env, ($context["BASE_URL"] ?? null), "html", null, true);
            echo "templates/tibiacom/images/global/content/circle-symbol-plus.gif);\"></div>
\t</div>
\t<table class=\"Table3\" cellpadding=\"0\" cellspacing=\"0\">
\t\t<tbody><tr>
\t\t\t<td>
\t\t\t\t<div class=\"InnerTableContainer\" id=\"DeathsCollapseContainer\" style=\"display: none\">
\t\t\t\t\t<table style=\"width:100%;\"><tbody><tr><td>
\t\t\t\t\t\t\t\t<div class=\"TableContentContainer\">
\t\t\t\t\t\t\t\t\t<table class=\"TableContent\" width=\"100%\" style=\"border:1px solid #faf0d7;\">
\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t";
            // line 554
            $context["i"] = 0;
            // line 555
            echo "\t\t\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["deaths"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["death"]) {
                // line 556
                echo "\t\t\t\t\t\t\t\t\t\t\t";
                $context["i"] = (($context["i"] ?? null) + 1);
                // line 557
                echo "\t\t\t\t\t\t\t\t\t\t\t";
                $context["rows"] = (($context["rows"] ?? null) + 1);
                // line 558
                echo "\t\t\t\t\t\t\t\t\t\t\t<tr bgcolor=\"";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getStyle')->getCallable(), [($context["rows"] ?? null)]), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<td>";
                // line 559
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["death"], "time", []), "j M Y, H:i"), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>";
                // line 560
                echo $this->getAttribute($context["death"], "description", []);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['death'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 563
            echo "\t\t\t\t\t\t\t\t\t\t</tbody></table>
\t\t\t\t\t\t\t\t</div></td></tr>
\t\t\t\t\t\t</tbody></table>
\t\t\t\t</div>
\t\t\t</td>
\t\t</tr>
\t\t</tbody></table></div>
<br>
<!-- DEATHS_END -->
";
        }
        // line 573
        echo "


";
        // line 576
        if ((twig_length_filter($this->env, ($context["frags"] ?? null)) > 0)) {
            // line 577
            echo "<!-- FRAGS -->
<div class=\"TableContainer\">
\t<div class=\"CaptionContainer\">
\t\t<div class=\"CaptionInnerContainer\">
\t\t\t<span class=\"CaptionEdgeLeftTop\" style=\"background-image:url(";
            // line 581
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/global/content/box-frame-edge.gif);\"></span>
\t\t\t<span class=\"CaptionEdgeRightTop\" style=\"background-image:url(";
            // line 582
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/global/content/box-frame-edge.gif);\"></span>
\t\t\t<span class=\"CaptionBorderTop\" style=\"background-image:url(";
            // line 583
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/global/content/table-headline-border.gif);\"></span>
\t\t\t<span class=\"CaptionVerticalLeft\" style=\"background-image:url(";
            // line 584
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/global/content/box-frame-vertical.gif);\"></span>
\t\t\t<div class=\"Text\">Character Frags</div>
\t\t\t<span class=\"CaptionVerticalRight\" style=\"background-image:url(";
            // line 586
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/global/content/box-frame-vertical.gif);\"></span>
\t\t\t<span class=\"CaptionBorderBottom\" style=\"background-image:url(";
            // line 587
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/global/content/table-headline-border.gif);\"></span>
\t\t\t<span class=\"CaptionEdgeLeftBottom\" style=\"background-image:url(";
            // line 588
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/global/content/box-frame-edge.gif);\"></span>
\t\t\t<span class=\"CaptionEdgeRightBottom\" style=\"background-image:url(";
            // line 589
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/global/content/box-frame-edge.gif);\"></span>
\t\t</div></div>
\t<div style=\"top: 15px;\" id=\"FragsCollapse\" class=\"BigToggleButton\" onclick=\"CollapseTable('FragsCollapseContainer'); \$('#labelshow').html(\$('#labelshow').html() == 'show' ? 'hide' : 'show');\" onmouseover=\"ActivateHelperDiv(\$(this), '', 'Click here to expand the list of Frags.', '');\" onmouseout=\"\$('#HelperDivContainer').hide();\">
\t\t<div id=\"Indicator_FragsCollapseContainer\" class=\"CircleSymbolMinus\" style=\"position: absolute; height: 18px; width: 18px; top: -8px; right: -8px; z-index: 99; cursor: pointer; background-image: url(";
            // line 592
            echo twig_escape_filter($this->env, ($context["BASE_URL"] ?? null), "html", null, true);
            echo "templates/tibiacom/images/global/content/circle-symbol-plus.gif);\"></div>
\t</div>
\t<table class=\"Table3\" cellpadding=\"0\" cellspacing=\"0\">
\t\t<tbody><tr>
\t\t\t<td>
\t\t\t\t<div class=\"InnerTableContainer\" id=\"FragsCollapseContainer\" style=\"display: none\">
\t\t\t\t\t<table style=\"width:100%;\"><tbody><tr><td>
\t\t\t\t\t\t\t\t<div class=\"TableContentContainer\">
\t\t\t\t\t\t\t\t\t<table class=\"TableContent\" width=\"100%\" style=\"border:1px solid #faf0d7;\">
\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t";
            // line 602
            $context["i"] = 0;
            // line 603
            echo "\t\t\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["frags"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["frag"]) {
                // line 604
                echo "\t\t\t\t\t\t\t\t\t\t\t";
                $context["i"] = (($context["i"] ?? null) + 1);
                // line 605
                echo "\t\t\t\t\t\t\t\t\t\t\t<tr bgcolor=\"";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getStyle')->getCallable(), [($context["i"] ?? null)]), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<td width=\"20%\" align=\"center\">";
                // line 606
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["frag"], "time", []), "j M Y, H:i"), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>";
                // line 607
                echo $this->getAttribute($context["frag"], "description", []);
                echo "(";
                if ($this->getAttribute($context["frag"], "unjustified", [])) {
                    echo "<span style=\"color: red; font-size: 10px\">Unjustified</span>";
                } else {
                    echo "<span style=\"color: green; font-size: 10px\">Justified</span>";
                }
                echo ")</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['frag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 610
            echo "\t\t\t\t\t\t\t\t\t\t</tbody></table>
\t\t\t\t\t\t\t\t</div></td></tr>
\t\t\t\t\t\t</tbody></table>
\t\t\t\t</div>
\t\t\t</td>
\t\t</tr>
\t\t</tbody></table></div>
<br>
<!-- FRAGS_END -->
";
        }
        // line 620
        echo "

";
        // line 622
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('hook')->getCallable(), [twig_constant("HOOK_CHARACTERS_BEFORE_SIGNATURE")]), "html", null, true);
        echo "
";
        // line 623
        if ($this->getAttribute(($context["config"] ?? null), "signature_enabled", [])) {
            // line 624
            echo "<!-- SIGNATURE -->
<div class=\"TableContainer\">
\t<div class=\"CaptionContainer\">
\t\t<div class=\"CaptionInnerContainer\">
\t\t\t<span class=\"CaptionEdgeLeftTop\" style=\"background-image:url(";
            // line 628
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/global/content/box-frame-edge.gif);\"></span>
\t\t\t<span class=\"CaptionEdgeRightTop\" style=\"background-image:url(";
            // line 629
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/global/content/box-frame-edge.gif);\"></span>
\t\t\t<span class=\"CaptionBorderTop\" style=\"background-image:url(";
            // line 630
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/global/content/table-headline-border.gif);\"></span>
\t\t\t<span class=\"CaptionVerticalLeft\" style=\"background-image:url(";
            // line 631
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/global/content/box-frame-vertical.gif);\"></span>
\t\t\t<div class=\"Text\">Character Signature</div>
\t\t\t<span class=\"CaptionVerticalRight\" style=\"background-image:url(";
            // line 633
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/global/content/box-frame-vertical.gif);\"></span>
\t\t\t<span class=\"CaptionBorderBottom\" style=\"background-image:url(";
            // line 634
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/global/content/table-headline-border.gif);\"></span>
\t\t\t<span class=\"CaptionEdgeLeftBottom\" style=\"background-image:url(";
            // line 635
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/global/content/box-frame-edge.gif);\"></span>
\t\t\t<span class=\"CaptionEdgeRightBottom\" style=\"background-image:url(";
            // line 636
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/global/content/box-frame-edge.gif);\"></span>
\t\t</div></div>
\t<div style=\"top: 15px;\" id=\"FragsCollapse\" class=\"BigToggleButton\" onclick=\"CollapseTable('FragsCollapseContainer'); \$('#labelshow').html(\$('#labelshow').html() == 'show' ? 'hide' : 'show');\" onmouseover=\"ActivateHelperDiv(\$(this), '', 'Click here to view the Signature.', '');\" onmouseout=\"\$('#HelperDivContainer').hide();\">
\t\t<div id=\"Indicator_FragsCollapseContainer\" class=\"CircleSymbolMinus\" style=\"position: absolute; height: 18px; width: 18px; top: -8px; right: -8px; z-index: 99; cursor: pointer; background-image: url(";
            // line 639
            echo twig_escape_filter($this->env, ($context["BASE_URL"] ?? null), "html", null, true);
            echo "templates/tibiacom/images/global/content/circle-symbol-plus.gif);\"></div>
\t</div>
\t<table class=\"Table5\" cellpadding=\"0\" cellspacing=\"0\">
\t\t<tbody><tr>
\t\t\t<td>
\t\t\t\t<div class=\"InnerTableContainer\" id=\"FragsCollapseContainer\" style=\"display: none\">
\t\t\t\t\t<table style=\"width:100%;\"><tbody><tr><td>
\t\t\t\t\t\t\t\t<div class=\"TableContentContainer\">
\t\t\t\t\t\t\t\t\t<table class=\"TableContent\" width=\"100%\" style=\"border:1px solid #faf0d7;\">
\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td align=\"center\">
\t\t\t\t\t\t\t\t\t\t\t\t<script type=\"text/javascript\">
\t\t\t\t\t\t\t\t\t\t\t\t\tfunction copyData(containerid) {
\t\t\t\t\t\t\t\t\t\t\t\t\t\tvar range = document.createRange();

\t\t\t\t\t\t\t\t\t\t\t\t\t\trange.selectNode(containerid);
\t\t\t\t\t\t\t\t\t\t\t\t\t\twindow.getSelection().removeAllRanges(); 
\t\t\t\t\t\t\t\t\t\t\t\t\t\twindow.getSelection().addRange(range); 
\t\t\t\t\t\t\t\t\t\t\t\t\t\tdocument.execCommand(\"copy\");
\t\t\t\t\t\t\t\t\t\t\t\t\t\twindow.getSelection().removeAllRanges();
\t\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
            // line 662
            echo twig_escape_filter($this->env, ($context["signature_url"] ?? null), "html", null, true);
            echo "\" alt=\"Signature for player ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["player"] ?? null), "getName", [], "method"), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<table class=\"TableContent\" width=\"100%\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"LabelV80\">Website:</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><input type=\"text\" id=\"inputSignatureWebsite\" class=\"input_clipboard\" value=\"<a href=&quot;";
            // line 668
            echo twig_escape_filter($this->env, ($context["player_link"] ?? null), "html", null, true);
            echo "&quot;><img src=&quot;";
            echo twig_escape_filter($this->env, ($context["signature_url"] ?? null), "html", null, true);
            echo "&quot;></a>\" style=\"width: 100%;\" onclick=\"this.select()\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><button onclick=\"copyData(inputSignatureWebsite)\" class=\"btn_clipboard\">Copy</button></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"LabelV80\">Forum:</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><input type=\"text\" id=\"inputSignatureForum\" class=\"input_clipboard\" value=\"[URL=";
            // line 673
            echo twig_escape_filter($this->env, ($context["player_link"] ?? null), "html", null, true);
            echo "][IMG]";
            echo twig_escape_filter($this->env, ($context["signature_url"] ?? null), "html", null, true);
            echo "[/IMG][/URL]\" style=\"width: 100%;\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><button onclick=\"copyData(inputSignatureForum)\" class=\"btn_clipboard\">Copy</button></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"LabelV80\">Direct link:</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><input type=\"text\" id=\"inputSignatureDirectLink\" class=\"input_clipboard\" value=\"";
            // line 678
            echo twig_escape_filter($this->env, ($context["signature_url"] ?? null), "html", null, true);
            echo "\" style=\"width: 100%;\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><button onclick=\"copyData(inputSignatureDirectLink)\" class=\"btn_clipboard\">Copy</button></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t</tbody></table>
\t\t\t\t\t\t\t\t</div></td></tr>
\t\t\t\t\t\t</tbody></table>
\t\t\t\t</div>
\t\t\t</td>
\t\t</tr>
\t\t</tbody></table></div>
<br>
<!-- SIGNATURE_END -->
";
        }
        // line 694
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('hook')->getCallable(), [twig_constant("HOOK_CHARACTERS_AFTER_SIGNATURE")]), "html", null, true);
        echo "


<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\"><tr>
\t<td>
\t\t";
        // line 699
        if ( !($context["hidden"] ?? null)) {
            // line 700
            echo "\t\t";
            $context["rows"] = 0;
            // line 701
            echo "<div class=\"TableContainer\">
<div class=\"CaptionContainer\">
<div class=\"CaptionInnerContainer\">
\t<span class=\"CaptionEdgeLeftTop\" style=\"background-image:url(";
            // line 704
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/global/content/box-frame-edge.gif);\"></span>
\t<span class=\"CaptionEdgeRightTop\" style=\"background-image:url(";
            // line 705
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/global/content/box-frame-edge.gif);\"></span>
\t<span class=\"CaptionBorderTop\" style=\"background-image:url(";
            // line 706
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/global/content/table-headline-border.gif);\"></span>
\t<span class=\"CaptionVerticalLeft\" style=\"background-image:url(";
            // line 707
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/global/content/box-frame-vertical.gif);\"></span>
\t<div class=\"Text\">Characters</div>
\t<span class=\"CaptionVerticalRight\" style=\"background-image:url(";
            // line 709
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/global/content/box-frame-vertical.gif);\"></span>
\t<span class=\"CaptionBorderBottom\" style=\"background-image:url(";
            // line 710
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/global/content/table-headline-border.gif);\"></span>
\t<span class=\"CaptionEdgeLeftBottom\" style=\"background-image:url(";
            // line 711
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/global/content/box-frame-edge.gif);\"></span>
\t<span class=\"CaptionEdgeRightBottom\" style=\"background-image:url(";
            // line 712
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/global/content/box-frame-edge.gif);\"></span>
</div></div>
<table class=\"Table3\" cellpadding=\"0\" cellspacing=\"0\">
<tbody><tr>
<td>
<div class=\"InnerTableContainer\">
<table style=\"width:100%;\"><tbody><tr><td>
<div class=\"TableContentContainer\">
<table class=\"TableContent\" width=\"100%\">
<tbody>
<tr bgcolor=\"";
            // line 722
            echo twig_escape_filter($this->env, $this->getAttribute(($context["config"] ?? null), "darkborder", []), "html", null, true);
            echo "\">
\t\t\t\t<td width=\"40%\"><B>Name</b></td>
\t\t\t\t<td width=\"15%\"><B>Level</b></td>
\t\t\t\t<td width=\"20%\"><B>Vocation</b></td>
\t\t\t\t<td width=\"25%\"><b>Status</b></td>
\t\t\t\t<td><b>&#160;</b></td>
\t\t\t</tr>
\t\t\t";
            // line 729
            $context["i"] = 0;
            // line 730
            echo "\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["account_players"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["player"]) {
                // line 731
                echo "\t\t\t\t";
                if (( !$this->getAttribute($context["player"], "isHidden", [], "method") && ($this->getAttribute(call_user_func_array($this->env->getFunction('config')->getCallable(), ["characters"]), "deleted", [], "array") ||  !$this->getAttribute($context["player"], "isDeleted", [], "method")))) {
                    // line 732
                    echo "\t\t\t\t";
                    $context["i"] = (($context["i"] ?? null) + 1);
                    // line 733
                    echo "\t\t\t<tr bgcolor=\"";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getStyle')->getCallable(), [($context["i"] ?? null)]), "html", null, true);
                    echo "\">
\t\t\t\t<td>
\t\t\t\t\t<nobr>";
                    // line 735
                    echo twig_escape_filter($this->env, ($context["i"] ?? null), "html", null, true);
                    echo ".&#160;";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["player"], "getName", [], "method"), "html", null, true);
                    if ($this->getAttribute($context["player"], "isDeleted", [], "method")) {
                        echo "<span style=\"color: red\"> [DELETED]</span>";
                    }
                    echo "</nobr>
\t\t\t\t</td>
\t\t\t\t<td>";
                    // line 737
                    echo twig_escape_filter($this->env, $this->getAttribute($context["player"], "getLevel", [], "method"), "html", null, true);
                    echo "</td>
\t\t\t\t<td>";
                    // line 738
                    echo twig_escape_filter($this->env, $this->getAttribute($context["player"], "getVocationName", [], "method"), "html", null, true);
                    echo "</td>
\t\t\t\t<td>";
                    // line 739
                    if ($this->getAttribute($context["player"], "isOnline", [], "method")) {
                        echo "<img src=\"";
                        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
                        echo "/images/on.gif\" title=\"Online\">";
                    } else {
                        echo "<img src=\"";
                        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
                        echo "/images/off.gif\" title=\"Offline\">";
                    }
                    echo "</td>
\t\t\t\t<td>
\t\t\t\t\t<table border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
\t\t\t\t\t\t<form action=\"";
                    // line 742
                    echo twig_escape_filter($this->env, ($context["characters_link"] ?? null), "html", null, true);
                    echo "\" method=post>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td style=\"border: 0;\">
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"name\" value=\"";
                    // line 745
                    echo twig_escape_filter($this->env, $this->getAttribute($context["player"], "getName", [], "method"), "html", null, true);
                    echo "\"/>

\t\t\t\t\t\t\t\t\t<div class=\"BigButton\" style=\"background-image:url(";
                    // line 747
                    echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
                    echo "/images/global/buttons/sbutton.gif)\">
<div onmouseover=\"MouseOverBigButton(this);\" onmouseout=\"MouseOutBigButton(this);\"><div class=\"BigButtonOver\" style=\"background-image: url(";
                    // line 748
                    echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
                    echo "/images/global/buttons/sbutton_over.gif); visibility: hidden;\"></div>
<input class=\"BigButtonText\" type=\"submit\" name=\"View ";
                    // line 749
                    echo twig_escape_filter($this->env, $this->getAttribute($context["player"], "getName", [], "method"), "html", null, true);
                    echo "\" alt=\"View ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["player"], "getName", [], "method"), "html", null, true);
                    echo "\" value=\"View\"></div>
</div>

";
                    // line 752
                    if (($context["canEdit"] ?? null)) {
                        // line 753
                        echo "<a href=\"admin/?p=players&id=";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["player"], "getId", [], "method"), "html", null, true);
                        echo "\" title=\"Edit in Admin Panel\" target=\"_blank\">
<div class=\"BigButton\" style=\"background-image:url(";
                        // line 754
                        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
                        echo "/images/global/buttons/sbutton.gif)\">
<div onmouseover=\"MouseOverBigButton(this);\" onmouseout=\"MouseOutBigButton(this);\"><div class=\"BigButtonOver\" style=\"background-image: url(";
                        // line 755
                        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
                        echo "/images/global/buttons/sbutton_over.gif); visibility: hidden;\"></div>
<input class=\"BigButtonText\" type=\"text\" name=\"Edit\" alt=\"Edit\" value=\"Edit\"></div>
</div>
</a>
";
                    }
                    // line 760
                    echo "\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</form>
\t\t\t\t\t</table>
\t\t\t\t</td>
\t\t\t</tr>
\t\t\t\t";
                }
                // line 767
                echo "\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['player'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 768
            echo "</tbody></table>
</div></td></tr>
</tbody></table>
</div>
</td>
</tr>
</tbody></table></div>
";
        }
        // line 776
        echo "
";
        // line 777
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('hook')->getCallable(), [twig_constant("HOOK_CHARACTERS_AFTER_CHARACTERS")]), "html", null, true);
        echo "

";
        // line 779
        if (($context["canEdit"] ?? null)) {
            // line 780
            echo "<br>
<a href=\"admin/?p=players&id=";
            // line 781
            echo twig_escape_filter($this->env, $this->getAttribute(($context["player"] ?? null), "getId", [], "method"), "html", null, true);
            echo "\" title=\"Edit in Admin Panel\" target=\"_blank\">
\t";
            // line 782
            $context["button_name"] = "Edit Character";
            // line 783
            echo "\t";
            $this->loadTemplate("buttons.base.html.twig", "characters.html.twig", 783)->display($context);
            // line 784
            echo "</a>
";
        }
        // line 786
        echo "\t\t</td>
\t</tr>
</table>
<br/>";
        // line 789
        echo ($context["search_form"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "characters.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1720 => 789,  1715 => 786,  1711 => 784,  1708 => 783,  1706 => 782,  1702 => 781,  1699 => 780,  1697 => 779,  1692 => 777,  1689 => 776,  1679 => 768,  1673 => 767,  1664 => 760,  1656 => 755,  1652 => 754,  1647 => 753,  1645 => 752,  1637 => 749,  1633 => 748,  1629 => 747,  1624 => 745,  1618 => 742,  1604 => 739,  1600 => 738,  1596 => 737,  1586 => 735,  1580 => 733,  1577 => 732,  1574 => 731,  1569 => 730,  1567 => 729,  1557 => 722,  1544 => 712,  1540 => 711,  1536 => 710,  1532 => 709,  1527 => 707,  1523 => 706,  1519 => 705,  1515 => 704,  1510 => 701,  1507 => 700,  1505 => 699,  1497 => 694,  1478 => 678,  1468 => 673,  1458 => 668,  1447 => 662,  1421 => 639,  1415 => 636,  1411 => 635,  1407 => 634,  1403 => 633,  1398 => 631,  1394 => 630,  1390 => 629,  1386 => 628,  1380 => 624,  1378 => 623,  1374 => 622,  1370 => 620,  1358 => 610,  1343 => 607,  1339 => 606,  1334 => 605,  1331 => 604,  1326 => 603,  1324 => 602,  1311 => 592,  1305 => 589,  1301 => 588,  1297 => 587,  1293 => 586,  1288 => 584,  1284 => 583,  1280 => 582,  1276 => 581,  1270 => 577,  1268 => 576,  1263 => 573,  1251 => 563,  1242 => 560,  1238 => 559,  1233 => 558,  1230 => 557,  1227 => 556,  1222 => 555,  1220 => 554,  1207 => 544,  1201 => 541,  1197 => 540,  1193 => 539,  1189 => 538,  1184 => 536,  1180 => 535,  1176 => 534,  1172 => 533,  1166 => 529,  1164 => 528,  1153 => 519,  1145 => 515,  1142 => 514,  1134 => 511,  1128 => 509,  1126 => 508,  1122 => 507,  1119 => 506,  1107 => 504,  1104 => 503,  1094 => 501,  1091 => 500,  1083 => 498,  1080 => 497,  1074 => 495,  1072 => 494,  1067 => 493,  1064 => 492,  1061 => 491,  1056 => 490,  1053 => 489,  1051 => 488,  1038 => 478,  1031 => 474,  1027 => 473,  1023 => 472,  1019 => 471,  1014 => 469,  1010 => 468,  1006 => 467,  1002 => 466,  989 => 455,  970 => 452,  966 => 451,  961 => 450,  959 => 449,  957 => 448,  953 => 447,  951 => 446,  938 => 436,  932 => 433,  928 => 432,  924 => 431,  920 => 430,  915 => 428,  911 => 427,  907 => 426,  903 => 425,  892 => 416,  882 => 408,  873 => 406,  871 => 405,  867 => 404,  865 => 403,  861 => 402,  857 => 401,  843 => 390,  829 => 379,  822 => 374,  820 => 373,  804 => 362,  795 => 360,  789 => 357,  779 => 354,  773 => 351,  752 => 335,  743 => 333,  737 => 330,  728 => 326,  719 => 324,  713 => 321,  703 => 313,  686 => 299,  682 => 298,  678 => 297,  674 => 296,  665 => 290,  661 => 289,  657 => 288,  653 => 287,  645 => 282,  641 => 281,  637 => 280,  633 => 279,  624 => 273,  616 => 268,  609 => 263,  607 => 262,  604 => 261,  584 => 250,  575 => 244,  569 => 240,  567 => 239,  557 => 232,  553 => 231,  549 => 230,  545 => 229,  540 => 227,  536 => 226,  532 => 225,  528 => 224,  510 => 208,  504 => 207,  493 => 205,  491 => 204,  487 => 203,  481 => 201,  479 => 200,  473 => 197,  467 => 195,  465 => 194,  463 => 193,  461 => 192,  448 => 182,  444 => 181,  440 => 180,  436 => 179,  431 => 177,  427 => 176,  423 => 175,  419 => 174,  386 => 148,  380 => 146,  378 => 145,  375 => 144,  369 => 141,  363 => 139,  360 => 138,  358 => 137,  347 => 134,  341 => 132,  339 => 131,  336 => 130,  330 => 127,  324 => 125,  321 => 124,  319 => 123,  316 => 122,  308 => 119,  302 => 117,  299 => 116,  297 => 115,  294 => 114,  288 => 111,  282 => 109,  279 => 108,  277 => 107,  274 => 106,  268 => 103,  262 => 101,  259 => 100,  257 => 99,  254 => 98,  248 => 95,  242 => 93,  239 => 92,  237 => 91,  231 => 88,  225 => 86,  223 => 85,  217 => 82,  211 => 80,  209 => 79,  203 => 76,  197 => 74,  195 => 73,  189 => 70,  183 => 68,  181 => 67,  175 => 64,  169 => 62,  167 => 61,  159 => 58,  153 => 56,  151 => 55,  127 => 52,  121 => 50,  119 => 49,  100 => 33,  96 => 32,  92 => 31,  88 => 30,  83 => 28,  79 => 27,  75 => 26,  71 => 25,  61 => 17,  56 => 14,  53 => 13,  51 => 12,  46 => 11,  44 => 10,  41 => 9,  39 => 8,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "characters.html.twig", "D:\\xampp\\htdocs\\system\\templates\\characters.html.twig");
    }
}
