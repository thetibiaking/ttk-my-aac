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

/* guilds.list.html.twig */
class __TwigTemplate_765c8cb813358f0ed914dc0eb59b1f8f7a780e7bf687c0b463a984b7a3b94521 extends \Twig\Template
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
        echo "Please select the game world of your choice to see the list of all existing guilds on it. Click on any view button to get more information about a guild. See the manual for a detailed description about guilds and their benefits.
<br>
<br>
<br>
<div class=\"TableContainer\">
    <div class=\"CaptionContainer\">
        <div class=\"CaptionInnerContainer\">
            <span class=\"CaptionEdgeLeftTop\" style=\"background-image:url(";
        // line 8
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/box-frame-edge.gif);\"></span>
            <span class=\"CaptionEdgeRightTop\" style=\"background-image:url(";
        // line 9
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/box-frame-edge.gif);\"></span>
            <span class=\"CaptionBorderTop\" style=\"background-image:url(";
        // line 10
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/table-headline-border.gif);\"></span>
            <span class=\"CaptionVerticalLeft\" style=\"background-image:url(";
        // line 11
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/box-frame-vertical.gif);\"></span>
            <div class=\"Text\">Active Guilds on ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["config"] ?? null), "lua", []), "serverName", []), "html", null, true);
        echo "</div>
            <span class=\"CaptionVerticalRight\" style=\"background-image:url(";
        // line 13
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/box-frame-vertical.gif);\"></span>
            <span class=\"CaptionBorderBottom\" style=\"background-image:url(";
        // line 14
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/table-headline-border.gif);\"></span>
            <span class=\"CaptionEdgeLeftBottom\" style=\"background-image:url(";
        // line 15
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/box-frame-edge.gif);\"></span>
            <span class=\"CaptionEdgeRightBottom\" style=\"background-image:url(";
        // line 16
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/box-frame-edge.gif);\"></span>
        </div>
    </div>

    <table class=\"Table3\">
        <tbody>
            <tr>
                <td>
                    <div class=\"InnerTableContainer\">
                        <table style=\"width:100%;\">
                            <tbody>
                                <tr>
                                    <td>
                                        
                                        <div class=\"TableContentAndRightShadow\">
                                            <div class=\"TableContentContainer\">
                                                <table class=\"TableContent\" width=\"100%\">
                                                    <tbody>
                                                        ";
        // line 34
        if ((twig_length_filter($this->env, ($context["guilds"] ?? null)) > 0)) {
            // line 35
            echo "                                                        <tr bgcolor=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["config"] ?? null), "darkborder", []), "html", null, true);
            echo "\">
                                                            <td width=\"64\"><b>Logo</b></td>
                                                            <td><b>Description</b></td>
                                                            <td width=\"12%\"><b>&nbsp;</b></td>
                                                        </tr>

                                                            ";
            // line 41
            $context["i"] = 0;
            // line 42
            echo "                                                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["guilds"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["guild"]) {
                // line 43
                echo "                                                            ";
                $context["i"] = (($context["i"] ?? null) + 1);
                // line 44
                echo "                                                            <tr bgcolor=\"";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getStyle')->getCallable(), [($context["i"] ?? null)]), "html", null, true);
                echo "\">
                                                                <td>
                                                                    <img src=\"images/guilds/";
                // line 46
                echo twig_escape_filter($this->env, $this->getAttribute($context["guild"], "logo", []), "html", null, true);
                echo "\" width=\"64\" height=\"64\">
                                                                </td>

                                                                <td>
                                                                    <span";
                // line 50
                if ( !twig_test_empty($this->getAttribute($context["guild"], "description", []))) {
                    echo " valign=\"top\"";
                }
                echo ">
                                                                        <b>";
                // line 51
                echo twig_escape_filter($this->env, $this->getAttribute($context["guild"], "name", []), "html", null, true);
                echo "</b>";
                if (($context["isAdmin"] ?? null)) {
                    echo "<a href=\"?subtopic=guilds&action=delete_by_admin&guild=";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["guild"], "name", []), "html", null, true);
                    echo "\"> [DELETE]</a>";
                }
                // line 52
                echo "                                                                    </span>

                                                                    ";
                // line 54
                if ( !twig_test_empty($this->getAttribute($context["guild"], "description", []))) {
                    // line 55
                    echo "                                                                    <br>
                                                                    <span>";
                    // line 56
                    echo $this->getAttribute($context["guild"], "description", []);
                    echo "</span>
                                                                    ";
                }
                // line 58
                echo "                                                                </td>

                                                                <td>
                                                                    <table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"100%\">
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style=\"border:0;\">
                                                                                    <form action=\"";
                // line 65
                echo twig_escape_filter($this->env, $this->getAttribute($context["guild"], "link", []), "html", null, true);
                echo "\" method=\"post\">
                                                                                        ";
                // line 66
                echo twig_include($this->env, $context, "buttons.view.html.twig");
                echo "
                                                                                    </form>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['guild'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 75
            echo "                                                        ";
        } else {
            // line 76
            echo "                                                        <tr bgcolor=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["config"] ?? null), "darkborder", []), "html", null, true);
            echo "\">
                                                            <td valign=\"top\">
                                                                <b>Create Guild</b>
                                                                <br/>
                                                                Actually there is no guild on server.";
            // line 80
            if (($context["logged"] ?? null)) {
                echo " Create first! Press button \"Create Guild\"";
            }
            // line 81
            echo "                                                            </td>

                                                            ";
            // line 83
            if (($context["logged"] ?? null)) {
                // line 84
                echo "                                                            <td>
                                                                <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">
                                                                    <form action=\"?subtopic=guilds&action=create\" method=\"post\">
                                                                        <form action=\"?subtopic=guilds&action=create\" method=\"post\">
                                                                            ";
                // line 88
                $context["button_name"] = "Found Guild";
                // line 89
                echo "                                                                            ";
                $context["button_image"] = "_sbutton_foundguild";
                // line 90
                echo "                                                                            ";
                $this->loadTemplate("buttons.base.html.twig", "guilds.list.html.twig", 90)->display($context);
                // line 91
                echo "                                                                        </form>
                                                                    </form>
                                                                </table>
                                                            </td>
                                                            ";
            }
            // line 96
            echo "                                                        </tr>
                                                        ";
        }
        // line 98
        echo "                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<br>

<table border=\"0\" cellspacing=\"1\" cellpadding=\"4\" width=\"100%\">
    <tbody>
        <tr>
            <td align=\"center\">
                <img src=\"";
        // line 119
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "images/general/blank.gif\" width=\"80\" height=\"1\" border=\"0\">
            </td>

            <td align=\"center\">
                <table border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
                    <tbody>
                        ";
        // line 125
        if (($context["logged"] ?? null)) {
            // line 126
            echo "                        No guild found that suits your needs?
                        <form action=\"?subtopic=guilds&action=create\" method=\"post\">
                            ";
            // line 128
            $context["button_name"] = "Found Guild";
            // line 129
            echo "                            ";
            $context["button_image"] = "_sbutton_foundguild";
            // line 130
            echo "                            ";
            $this->loadTemplate("buttons.base.html.twig", "guilds.list.html.twig", 130)->display($context);
            // line 131
            echo "                        </form>
                        ";
        } else {
            // line 133
            echo "                        <b>Before you can create a guild you must login.</b>
                        <br/>
                        <form action=\"?subtopic=accountmanagement&redirect=";
            // line 135
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getLink')->getCallable(), ["guilds"]), "html", null, true);
            echo "\" method=\"post\">
                            ";
            // line 136
            $this->loadTemplate("buttons.login.html.twig", "guilds.list.html.twig", 136)->display($context);
            // line 137
            echo "                        </form>
                        ";
        }
        // line 139
        echo "                    </tbody>
                </table>

                ";
        // line 142
        if (($context["logged"] ?? null)) {
            // line 143
            echo "                    <br/>
                    If you have any problem with guilds try:
                    <br/>
                    <a href=\"?subtopic=guilds&action=cleanup_players\">Cleanup players</a> - can't join guild/be invited? Can't create guild? Try cleanup players.
                    <br/>
                    <a href=\"?subtopic=guilds&action=cleanup_guilds\">Cleanup guilds</a> - made guild, you are a leader, but you are not on players list? Cleanup guilds!
                ";
        }
        // line 150
        echo "            </td>

            <td align=\"center\">
                <img src=\"";
        // line 153
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/general/blank.gif\" width=\"80\" height=\"1\" border=\"0\">
            </td>
        </tr>
    </tbody>
</table>




";
    }

    public function getTemplateName()
    {
        return "guilds.list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  335 => 153,  330 => 150,  321 => 143,  319 => 142,  314 => 139,  310 => 137,  308 => 136,  304 => 135,  300 => 133,  296 => 131,  293 => 130,  290 => 129,  288 => 128,  284 => 126,  282 => 125,  273 => 119,  250 => 98,  246 => 96,  239 => 91,  236 => 90,  233 => 89,  231 => 88,  225 => 84,  223 => 83,  219 => 81,  215 => 80,  207 => 76,  204 => 75,  181 => 66,  177 => 65,  168 => 58,  163 => 56,  160 => 55,  158 => 54,  154 => 52,  146 => 51,  140 => 50,  133 => 46,  127 => 44,  124 => 43,  106 => 42,  104 => 41,  94 => 35,  92 => 34,  71 => 16,  67 => 15,  63 => 14,  59 => 13,  55 => 12,  51 => 11,  47 => 10,  43 => 9,  39 => 8,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "guilds.list.html.twig", "D:\\xampp\\htdocs\\system\\templates\\guilds.list.html.twig");
    }
}
