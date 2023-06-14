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

/* account.create.html.twig */
class __TwigTemplate_df70b6edc847d8b5cf5388098f86e4e446f4403e571714d39b64c46a063fb829 extends \Twig\Template
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
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('hook')->getCallable(), ["HOOK_ACCOUNT_CREATE_BEFORE_FORM"]), "html", null, true);
        echo "
<form action=\"";
        // line 2
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getLink')->getCallable(), ["account/create"]), "html", null, true);
        echo "\" method=\"post\" id=\"createaccount\">
\t<div class=\"TableContainer\" >
\t\t<table class=\"Table5\" cellpadding=\"0\" cellspacing=\"0\" >
\t\t\t<div class=\"CaptionContainer\" >
\t\t\t\t<div class=\"CaptionInnerContainer\" >
\t\t\t\t\t<span class=\"CaptionEdgeLeftTop\" style=\"background-image:url(";
        // line 7
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/box-frame-edge.gif);\" /></span>
\t\t\t\t\t<span class=\"CaptionEdgeRightTop\" style=\"background-image:url(";
        // line 8
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/box-frame-edge.gif);\" /></span>
\t\t\t\t\t<span class=\"CaptionBorderTop\" style=\"background-image:url(";
        // line 9
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/table-headline-border.gif);\" ></span>
\t\t\t\t\t<span class=\"CaptionVerticalLeft\" style=\"background-image:url(";
        // line 10
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/box-frame-vertical.gif);\" /></span>
\t\t\t\t\t<div class=\"Text\" >Create ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["config"] ?? null), "lua", []), "serverName", []), "html", null, true);
        echo " Account</div>
\t\t\t\t\t<span class=\"CaptionVerticalRight\" style=\"background-image:url(";
        // line 12
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/box-frame-vertical.gif);\" /></span>
\t\t\t\t\t<span class=\"CaptionBorderBottom\" style=\"background-image:url(";
        // line 13
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/table-headline-border.gif);\" ></span>
\t\t\t\t\t<span class=\"CaptionEdgeLeftBottom\" style=\"background-image:url(";
        // line 14
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/box-frame-edge.gif);\" /></span>
\t\t\t\t\t<span class=\"CaptionEdgeRightBottom\" style=\"background-image:url(";
        // line 15
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/box-frame-edge.gif);\" /></span>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<tr>
\t\t\t\t<td>
\t\t\t\t\t<div class=\"InnerTableContainer\" >
\t\t\t\t\t\t<table style=\"width:100%;\" >
\t\t\t\t\t\t\t";
        // line 22
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('hook')->getCallable(), ["HOOK_ACCOUNT_CREATE_BEFORE_BOXES"]), "html", null, true);
        echo "
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<div class=\"TableShadowContainerRightTop\"> <div class=\"TableShadowRightTop\" style=\"background-image:url(";
        // line 25
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/table-shadow-rt.gif);\"></div></div>
\t\t\t\t\t\t\t\t\t<div class=\"TableContentAndRightShadow\" style=\"background-image:url(";
        // line 26
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/table-shadow-rm.gif);\">
\t\t\t\t\t\t\t\t\t\t<div class=\"TableContentContainer\">
\t\t\t\t\t\t\t\t\t\t\t<table class=\"TableContent\" width=\"100%\" style=\"border:1px solid #faf0d7;\">
\t\t\t\t\t\t\t\t\t\t\t\t<tbody>

\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 31
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('hook')->getCallable(), ["HOOK_ACCOUNT_CREATE_BEFORE_ACCOUNT"]), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 33
        if ($this->getAttribute(($context["config"] ?? null), "account_login_by_email", [])) {
            // line 34
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"LabelV\" style=\"width: 150px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span";
            // line 36
            if ($this->getAttribute(($context["errors"] ?? null), "account", [], "any", true, true)) {
                echo " class=\"red\"";
            }
            echo ">Account ";
            if (twig_constant("USE_ACCOUNT_NAME")) {
                echo "Name";
            } else {
                echo "Number";
            }
            echo ":</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"account\" id=\"account_input\" size=\"30\" maxlength=\"";
            // line 39
            if (twig_constant("USE_ACCOUNT_NAME")) {
                echo "30";
            } else {
                echo "10";
            }
            echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img id=\"account_indicator\" src=\"images/global/general/";
            // line 40
            if (( !($context["save"] ?? null) || $this->getAttribute(($context["errors"] ?? null), "account", [], "any", true, true))) {
                echo "n";
            }
            echo "ok.gif\" style=\"display: none;\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 41
            if (twig_constant("USE_ACCOUNT_NAME")) {
                // line 42
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"SuggestAccountNumber\">[<a href=\"#\">suggest number</a>]</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 44
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 47
        echo "\t\t\t\t\t\t\t\t\t\t\t\t<tr><td></td><td><span id=\"account_error\" class=\"FormFieldError\">";
        if ($this->getAttribute(($context["errors"] ?? null), "account", [], "any", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["errors"] ?? null), "account", []), "html", null, true);
        }
        echo "</span></td></tr>
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 48
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('hook')->getCallable(), ["HOOK_ACCOUNT_CREATE_AFTER_ACCOUNT"]), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"LabelV\" style=\"width: 150px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span";
        // line 51
        if ($this->getAttribute(($context["errors"] ?? null), "email", [], "any", true, true)) {
            echo " class=\"red\"";
        }
        echo ">Email Address:</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"email\" id=\"email\" size=\"30\" maxlength=\"50\" value=\"";
        // line 54
        echo twig_escape_filter($this->env, ($context["email"] ?? null), "html", null, true);
        echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img id=\"email_indicator\" src=\"images/global/general/";
        // line 55
        if (( !($context["save"] ?? null) || $this->getAttribute(($context["errors"] ?? null), "email", [], "any", true, true))) {
            echo "n";
        }
        echo "ok.gif\" style=\"display: none;\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td><td><span id=\"email_error\" class=\"FormFieldError\">";
        // line 59
        if ($this->getAttribute(($context["errors"] ?? null), "email", [], "any", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["errors"] ?? null), "email", []), "html", null, true);
        }
        echo "</span></td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 62
        if (($this->getAttribute(($context["config"] ?? null), "mail_enabled", []) && $this->getAttribute(($context["config"] ?? null), "account_mail_verify", []))) {
            // line 63
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<tr><td></td><td><span><strong>Please use real address!<br/>We will send a link to validate your Email.</strong></span></td></tr>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 65
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 66
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('hook')->getCallable(), ["HOOK_ACCOUNT_CREATE_AFTER_EMAIL"]), "html", null, true);
        echo "

                                                ";
        // line 68
        if ($this->getAttribute(($context["config"] ?? null), "account_country", [])) {
            // line 69
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"LabelV\" style=\"width: 150px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span";
            // line 71
            if ($this->getAttribute($this->getAttribute(($context["errors"] ?? null), "country", [], "any", false, true), 0, [], "array", true, true)) {
                echo " class=\"red\"";
            }
            echo ">Country:</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"country\" id=\"account_country\">
                                                                ";
            // line 75
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
            foreach ($context['_seq'] as $context["code"] => $context["country_"]) {
                // line 76
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_escape_filter($this->env, $context["code"], "html", null, true);
                echo "\"";
                if ((((isset($context["country"]) || array_key_exists("country", $context)) && (($context["country"] ?? null) == $context["code"])) || ((null === ($context["country"] ?? null)) && (($context["country_recognized"] ?? null) == $context["code"])))) {
                    echo "selected";
                }
                echo ">";
                echo twig_escape_filter($this->env, $context["country_"], "html", null, true);
                echo "</option>
                                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['code'], $context['country_'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 78
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"\" id=\"account_country_img\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
                                                    ";
            // line 82
            if ($this->getAttribute(($context["errors"] ?? null), "country", [], "any", true, true)) {
                // line 83
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr><td></td><td><span class=\"FormFieldError\">";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["errors"] ?? null), "country", []), "html", null, true);
                echo "</span></td></tr>
                                                    ";
            }
            // line 85
            echo "                                                ";
        }
        // line 86
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 87
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('hook')->getCallable(), ["HOOK_ACCOUNT_CREATE_AFTER_COUNTRY"]), "html", null, true);
        echo "

\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"LabelV\" style=\"width: 150px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span";
        // line 91
        if ($this->getAttribute(($context["errors"] ?? null), "password", [], "any", true, true)) {
            echo " class=\"red\"";
        }
        echo ">Password:</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"password\" name=\"password\" id=\"password\" value=\"\" size=\"30\" maxlength=\"29\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img id=\"password_indicator\" src=\"images/global/general/";
        // line 95
        if (( !($context["save"] ?? null) || $this->getAttribute(($context["errors"] ?? null), "password", [], "any", true, true))) {
            echo "n";
        }
        echo "ok.gif\" style=\"display: none;\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t<tr><td></td><td><span id=\"password_error\" class=\"FormFieldError\">";
        // line 98
        if ($this->getAttribute(($context["errors"] ?? null), "password", [], "any", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["errors"] ?? null), "password", []), "html", null, true);
        }
        echo "</span></td></tr>
\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"LabelV\" style=\"width: 150px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span";
        // line 101
        if ($this->getAttribute(($context["errors"] ?? null), "password", [], "any", true, true)) {
            echo " class=\"red\"";
        }
        echo ">Repeat password:</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"password\" name=\"password2\" id=\"password2\" value=\"\" size=\"30\" maxlength=\"29\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img id=\"password2_indicator\" src=\"images/global/general/";
        // line 105
        if (( !($context["save"] ?? null) || $this->getAttribute(($context["errors"] ?? null), "password", [], "any", true, true))) {
            echo "n";
        }
        echo "ok.gif\" style=\"display: none;\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t<tr><td></td><td><span id=\"password2_error\" class=\"FormFieldError\">";
        // line 108
        if ($this->getAttribute(($context["errors"] ?? null), "password", [], "any", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["errors"] ?? null), "password", []), "html", null, true);
        }
        echo "</span></td></tr>

\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 110
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('hook')->getCallable(), ["HOOK_ACCOUNT_CREATE_AFTER_PASSWORDS"]), "html", null, true);
        echo "

                                                ";
        // line 112
        if ($this->getAttribute(($context["config"] ?? null), "recaptcha_enabled", [])) {
            // line 113
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"LabelV\" style=\"width: 150px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span";
            // line 115
            if ($this->getAttribute($this->getAttribute(($context["errors"] ?? null), "verification", [], "any", false, true), 0, [], "array", true, true)) {
                echo " class=\"red\"";
            }
            echo ">Verification:</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"g-recaptcha\" data-sitekey=\"";
            // line 118
            echo twig_escape_filter($this->env, $this->getAttribute(($context["config"] ?? null), "recaptcha_site_key", []), "html", null, true);
            echo "\" data-theme=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["config"] ?? null), "recaptcha_theme", []), "html", null, true);
            echo "\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
                                                    ";
            // line 121
            if ($this->getAttribute(($context["errors"] ?? null), "verification", [], "any", true, true)) {
                // line 122
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr><td></td><td><span class=\"FormFieldError\">";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["errors"] ?? null), "verification", []), "html", null, true);
                echo "</span></td></tr>
                                                    ";
            }
            // line 124
            echo "                                                ";
        }
        // line 125
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 126
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('hook')->getCallable(), ["HOOK_ACCOUNT_CREATE_AFTER_RECAPTCHA"]), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"TableShadowContainer\">
\t\t\t\t\t\t\t\t\t\t<div class=\"TableBottomShadow\" style=\"background-image:url(";
        // line 132
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/table-shadow-bm.gif);\"> <div class=\"TableBottomLeftShadow\" style=\"background-image:url(";
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/table-shadow-bl.gif);\"></div> <div class=\"TableBottomRightShadow\" style=\"background-image:url(";
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/table-shadow-br.gif);\"></div> </div></div>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t";
        // line 136
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('hook')->getCallable(), ["HOOK_ACCOUNT_CREATE_BETWEEN_BOXES_1"]), "html", null, true);
        echo "

\t\t\t\t\t\t\t";
        // line 138
        if ((( !$this->getAttribute(($context["config"] ?? null), "mail_enabled", []) ||  !$this->getAttribute(($context["config"] ?? null), "account_mail_verify", [])) && $this->getAttribute(($context["config"] ?? null), "account_create_character_create", []))) {
            // line 139
            echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<div class=\"TableShadowContainerRightTop\">
\t\t\t\t\t\t\t\t\t\t<div class=\"TableShadowRightTop\" style=\"background-image:url(";
            // line 142
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/global/content/table-shadow-rt.gif);\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"TableContentAndRightShadow\" style=\"background-image:url(";
            // line 144
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/global/content/table-shadow-rm.gif);\">
\t\t\t\t\t\t\t\t\t\t<div class=\"TableContentContainer\">
\t\t\t\t\t\t\t\t\t\t\t<table class=\"TableContent\" width=\"100%\" style=\"border:1px solid #faf0d7;\">
\t\t\t\t\t\t\t\t\t\t\t\t<tbody>

\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 149
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('hook')->getCallable(), ["HOOK_ACCOUNT_CREATE_BEFORE_CHARACTER_NAME"]), "html", null, true);
            echo "

\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"LabelV\" style=\"width: 150px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span";
            // line 153
            if ($this->getAttribute(($context["errors"] ?? null), "name", [], "any", true, true)) {
                echo " class=\"red\"";
            }
            echo ">Character Name:</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input id=\"character_name\" name=\"name\" size=\"";
            // line 156
            echo twig_escape_filter($this->env, $this->getAttribute(($context["config"] ?? null), "character_name_max_length", []), "html", null, true);
            echo "\" maxlength=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["config"] ?? null), "character_name_max_length", []), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img id=\"character_indicator\" src=\"images/global/general/";
            // line 157
            if (( !($context["save"] ?? null) || $this->getAttribute(($context["errors"] ?? null), "name", [], "any", true, true))) {
                echo "n";
            }
            echo "ok.gif\" style=\"display: none;\" />\t\t\t\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span id=\"character_error\" class=\"FormFieldError\">";
            // line 163
            if ($this->getAttribute(($context["errors"] ?? null), "name", [], "any", true, true)) {
                echo twig_escape_filter($this->env, $this->getAttribute(($context["errors"] ?? null), "name", []), "html", null, true);
            }
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 167
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('hook')->getCallable(), ["HOOK_ACCOUNT_CREATE_AFTER_CHARACTER_NAME"]), "html", null, true);
            echo "

\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"LabelV\" style=\"width: 150px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span";
            // line 171
            if ($this->getAttribute(($context["errors"] ?? null), "sex", [], "any", true, true)) {
                echo " class=\"red\"";
            }
            echo ">Sex:</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table width=\"100%\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
                                                                    ";
            // line 178
            $context["i"] = 0;
            // line 179
            echo "                                                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, $this->getAttribute(($context["config"] ?? null), "genders", []), true));
            foreach ($context['_seq'] as $context["id"] => $context["gender"]) {
                // line 180
                echo "                                                                        ";
                $context["i"] = (($context["i"] ?? null) + 1);
                // line 181
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"margin-right:15px;\" class=\"OptionContainer\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"sex\" id=\"sex";
                // line 182
                echo twig_escape_filter($this->env, ($context["i"] ?? null), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, $context["id"], "html", null, true);
                echo "\"";
                if (( !(null === ($context["sex"] ?? null)) && (($context["sex"] ?? null) == $context["id"]))) {
                    echo " checked=\"checked\"";
                }
                echo ">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"sex";
                // line 183
                echo twig_escape_filter($this->env, ($context["i"] ?? null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_lower_filter($this->env, $context["gender"]), "html", null, true);
                echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['id'], $context['gender'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 186
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span id=\"sex_error\" class=\"FormFieldError\">";
            // line 197
            if ($this->getAttribute(($context["errors"] ?? null), "sex", [], "any", true, true)) {
                echo twig_escape_filter($this->env, $this->getAttribute(($context["errors"] ?? null), "sex", []), "html", null, true);
            }
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 201
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('hook')->getCallable(), ["HOOK_ACCOUNT_CREATE_AFTER_SEX"]), "html", null, true);
            echo "

                                                ";
            // line 203
            if ((twig_length_filter($this->env, $this->getAttribute(($context["config"] ?? null), "character_samples", [])) > 1)) {
                // line 204
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"LabelV\" style=\"width: 150px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span";
                // line 206
                if ($this->getAttribute(($context["errors"] ?? null), "vocation", [], "any", true, true)) {
                    echo " class=\"red\"";
                }
                echo ">Vocation:</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table width=\"100%\" >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
                                                           \t\t";
                // line 213
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["config"] ?? null), "character_samples", []));
                foreach ($context['_seq'] as $context["key"] => $context["sample_char"]) {
                    // line 214
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"margin-right:15px;\" class=\"OptionContainer\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vocation\" id=\"vocation";
                    // line 215
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "\" value=\"";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "\"
                                                                                ";
                    // line 216
                    if (( !(null === ($context["vocation"] ?? null)) && (($context["vocation"] ?? null) == $context["key"]))) {
                        echo " checked=\"checked\"";
                    }
                    echo ">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"vocation";
                    // line 217
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["config"] ?? null), "vocations", [], "array"), $context["key"], [], "array"), "html", null, true);
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                            \t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['sample_char'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 220
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span id=\"vocation_error\" class=\"FormFieldError\">";
                // line 229
                if ($this->getAttribute(($context["errors"] ?? null), "vocation", [], "any", true, true)) {
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["errors"] ?? null), "vocation", []), "html", null, true);
                }
                echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 233
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 234
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('hook')->getCallable(), ["HOOK_ACCOUNT_CREATE_AFTER_VOCATION"]), "html", null, true);
            echo "

                                                ";
            // line 236
            if ((twig_length_filter($this->env, $this->getAttribute(($context["config"] ?? null), "character_towns", [])) > 1)) {
                // line 237
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"LabelV\" style=\"width: 150px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span";
                // line 239
                if ($this->getAttribute(($context["errors"] ?? null), "town", [], "any", true, true)) {
                    echo " class=\"red\"";
                }
                echo ">Select your town:</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table width=\"100%\" >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 246
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["config"] ?? null), "character_towns", []));
                foreach ($context['_seq'] as $context["_key"] => $context["town_id"]) {
                    // line 247
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"margin-right:15px;\" class=\"OptionContainer\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"town\" id=\"town";
                    // line 248
                    echo twig_escape_filter($this->env, $context["town_id"], "html", null, true);
                    echo "\" value=\"";
                    echo twig_escape_filter($this->env, $context["town_id"], "html", null, true);
                    echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 249
                    if (( !(null === ($context["town"] ?? null)) && (($context["town"] ?? null) == $context["town_id"]))) {
                        echo " checked=\"checked\"";
                    }
                    echo ">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"town";
                    // line 250
                    echo twig_escape_filter($this->env, $context["town_id"], "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["config"] ?? null), "towns", []), $context["town_id"], [], "array"), "html", null, true);
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['town_id'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 253
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
                                                ";
            }
            // line 260
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 261
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('hook')->getCallable(), ["HOOK_ACCOUNT_CREATE_AFTER_TOWNS"]), "html", null, true);
            echo "

\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"TableShadowContainer\">
\t\t\t\t\t\t\t\t\t\t<div class=\"TableBottomShadow\" style=\"background-image:url(";
            // line 268
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/global/content/table-shadow-bm.gif);\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"TableBottomLeftShadow\" style=\"background-image:url(";
            // line 269
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/global/content/table-shadow-bl.gif);\"></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"TableBottomRightShadow\" style=\"background-image:url(";
            // line 270
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/global/content/table-shadow-br.gif);\"></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t";
        }
        // line 276
        echo "
\t\t\t\t\t\t\t";
        // line 277
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('hook')->getCallable(), ["HOOK_ACCOUNT_CREATE_BETWEEN_BOXES_2"]), "html", null, true);
        echo "

\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<div class=\"TableShadowContainerRightTop\">
\t\t\t\t\t\t\t\t\t\t<div class=\"TableShadowRightTop\" style=\"background-image:url(";
        // line 282
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/table-shadow-rt.gif);\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"TableContentAndRightShadow\" style=\"background-image:url(";
        // line 284
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/table-shadow-rm.gif);\">
\t\t\t\t\t\t\t\t\t\t<div class=\"TableContentContainer\">
\t\t\t\t\t\t\t\t\t\t\t<table class=\"TableContent\" width=\"100%\" style=\"border:1px solid #faf0d7;\">
\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"2\" ><b>Please select the following check box:</b></td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"2\" >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span><input type=\"checkbox\" id=\"accept_rules\" name=\"accept_rules\" value=\"true\"";
        // line 293
        if (($context["accept_rules"] ?? null)) {
            echo "checked";
        }
        echo "/> <label for=\"accept_rules\">I agree to the <a href=\"?subtopic=rules\" target=\"_blank\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["config"] ?? null), "lua", []), "serverName", []), "html", null, true);
        echo " Rules</a>.</label></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
                                                ";
        // line 296
        if ($this->getAttribute(($context["errors"] ?? null), "accept_rules", [], "any", true, true)) {
            // line 297
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"FormFieldError\">";
            // line 299
            echo twig_escape_filter($this->env, $this->getAttribute(($context["errors"] ?? null), "accept_rules", []), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
                                                ";
        }
        // line 303
        echo "\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"TableShadowContainer\">
\t\t\t\t\t\t\t\t\t\t<div class=\"TableBottomShadow\" style=\"background-image:url(";
        // line 308
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/table-shadow-bm.gif);\"> <div class=\"TableBottomLeftShadow\" style=\"background-image:url(";
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/table-shadow-bl.gif);\"></div> <div class=\"TableBottomRightShadow\" style=\"background-image:url(";
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/table-shadow-br.gif);\"></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t";
        // line 314
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('hook')->getCallable(), ["HOOK_ACCOUNT_CREATE_AFTER_BOXES"]), "html", null, true);
        echo "

\t\t\t\t\t\t</table>
\t\t\t\t\t</div>
\t\t\t\t</td>
\t\t\t</tr>
\t\t</table>
\t</div>
\t<br/>
\t";
        // line 323
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('hook')->getCallable(), ["HOOK_ACCOUNT_CREATE_BEFORE_SUBMIT_BUTTON"]), "html", null, true);
        echo "
\t<table width=\"100%\">
\t\t<tr align=\"center\">
\t\t\t<td>
\t\t\t\t<table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" >
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td style=\"border:0px;\" >
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"save\" value=\"1\" >
\t\t\t\t\t\t\t";
        // line 331
        echo twig_include($this->env, $context, "buttons.submit.html.twig");
        echo "
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t</table>
\t\t\t</td>
\t\t</tr>
\t</table>
</form>
";
        // line 339
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('hook')->getCallable(), ["HOOK_ACCOUNT_CREATE_AFTER_FORM"]), "html", null, true);
        echo "
<script type=\"text/javascript\" src=\"tools/check_name.js\"></script>
<style>
\t#SuggestAccountNumber {
\t\tfont-size: 7pt;
\t}
\t#SuggestCharacterName {
\t\tfont-size: 7pt;
\t}
</style>";
    }

    public function getTemplateName()
    {
        return "account.create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  795 => 339,  784 => 331,  773 => 323,  761 => 314,  748 => 308,  741 => 303,  734 => 299,  730 => 297,  728 => 296,  718 => 293,  706 => 284,  701 => 282,  693 => 277,  690 => 276,  681 => 270,  677 => 269,  673 => 268,  663 => 261,  660 => 260,  651 => 253,  640 => 250,  634 => 249,  628 => 248,  625 => 247,  621 => 246,  609 => 239,  605 => 237,  603 => 236,  598 => 234,  595 => 233,  586 => 229,  575 => 220,  564 => 217,  558 => 216,  552 => 215,  549 => 214,  545 => 213,  533 => 206,  529 => 204,  527 => 203,  522 => 201,  513 => 197,  500 => 186,  489 => 183,  479 => 182,  476 => 181,  473 => 180,  468 => 179,  466 => 178,  454 => 171,  447 => 167,  438 => 163,  427 => 157,  419 => 156,  411 => 153,  404 => 149,  396 => 144,  391 => 142,  386 => 139,  384 => 138,  379 => 136,  368 => 132,  359 => 126,  356 => 125,  353 => 124,  347 => 122,  345 => 121,  337 => 118,  329 => 115,  325 => 113,  323 => 112,  318 => 110,  311 => 108,  303 => 105,  294 => 101,  286 => 98,  278 => 95,  269 => 91,  262 => 87,  259 => 86,  256 => 85,  250 => 83,  248 => 82,  242 => 78,  227 => 76,  223 => 75,  214 => 71,  210 => 69,  208 => 68,  203 => 66,  200 => 65,  196 => 63,  194 => 62,  186 => 59,  177 => 55,  173 => 54,  165 => 51,  159 => 48,  152 => 47,  147 => 44,  143 => 42,  141 => 41,  135 => 40,  127 => 39,  113 => 36,  109 => 34,  107 => 33,  102 => 31,  94 => 26,  90 => 25,  84 => 22,  74 => 15,  70 => 14,  66 => 13,  62 => 12,  58 => 11,  54 => 10,  50 => 9,  46 => 8,  42 => 7,  34 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "account.create.html.twig", "D:\\xampp\\htdocs\\system\\templates\\account.create.html.twig");
    }
}
