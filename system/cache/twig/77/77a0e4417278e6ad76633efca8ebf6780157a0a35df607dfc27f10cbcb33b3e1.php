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

/* admin.news.html.twig */
class __TwigTemplate_849a1a1c40609533fe77c444fbd8a5dfd21dce833f39efdcefa3a707ac5d0f70 extends \Twig\Template
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
        echo "<div class=\"box\">
\t<div class=\"box-header\">
\t\t<h3 class=\"box-title\">News:</h3>
\t\t<div class=\"box-tools pull-right\">
\t\t\t<a href=\"?p=news&action=new&type=1\"><span class=\"btn btn-success\"><i class=\"fa fa-plus-circle\"></i> New</span></a>
\t\t</div>
\t</div>
\t<div class=\"box-body\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-sm-12\">
\t\t\t\t<table class=\"tb_datatable\">
\t\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th width=\"5%\">ID</th>
\t\t\t\t\t\t<th>Title</th>
\t\t\t\t\t\t<th>Date</th>
\t\t\t\t\t\t<th>Player</th>
\t\t\t\t\t\t<th style=\"width: 150px;\">Options</th>
\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["newses"] ?? null), twig_constant("NEWS"), [], "array"));
        foreach ($context['_seq'] as $context["_key"] => $context["news"]) {
            // line 23
            echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>";
            // line 24
            echo $this->getAttribute($context["news"], "id", []);
            echo "</td>
\t\t\t\t\t\t\t<td><i><a href=\"?p=news&action=edit&id=";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["news"], "id", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["news"], "title", []), "html", null, true);
            echo "</a></i></td>
\t\t\t\t\t\t\t<td>";
            // line 26
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["news"], "date", []), $this->getAttribute(($context["config"] ?? null), "news_date_format", [])), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td><a target=\"_blank\" rel=\"noopener noreferrer\" href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["news"], "player_link", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["news"], "player_name", []), "html", null, true);
            echo "</a></td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a href=\"?p=news&action=edit&id=";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["news"], "id", []), "html", null, true);
            echo "\" class=\"ico\" title=\"Edit\">
\t\t\t\t\t\t\t\t\t<span class=\"btn btn-success btn-sm edit\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-edit\"></i>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t<a href=\"?p=news&action=delete&id=";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["news"], "id", []), "html", null, true);
            echo "\" class=\"ico\" onclick=\"return confirm('Are you sure?');\" title=\"Delete\">
\t\t\t\t\t\t\t\t\t<span class=\"btn btn-danger btn-sm delete\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-trash\"></i>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t<a href=\"?p=news&action=hide&id=";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["news"], "id", []), "html", null, true);
            echo "\" class=\"ico\" title=\"";
            if (($this->getAttribute($context["news"], "hidden", []) != 1)) {
                echo "Hide";
            } else {
                echo "Show";
            }
            echo "\">
\t\t\t\t\t\t\t\t\t";
            // line 42
            if (($this->getAttribute($context["news"], "hidden", []) != 1)) {
                // line 43
                echo "\t\t\t\t\t\t\t\t\t\t<span class=\"btn btn-primary btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-eye\"></i>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t";
            } else {
                // line 47
                echo "\t\t\t\t\t\t\t\t\t\t<span class=\"btn btn-default btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-eye-slash\"></i>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t";
            }
            // line 51
            echo "\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['news'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>
\t\t</div>
\t</div>
</div>

<div class=\"box\">
\t<div class=\"box-header\">
\t\t<h3 class=\"box-title\">Tickers:</h3>
\t\t<div class=\"box-tools pull-right\">
\t\t\t<a href=\"?p=news&action=new&type=2\"><span class=\"btn btn-success\"><i class=\"fa fa-plus-circle\"></i> New</span></a>
\t\t</div>
\t</div>
\t<div class=\"box-body\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-sm-12\">
\t\t\t\t<table class=\"tb_datatable\">
\t\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th width=\"5%\">ID</th>
\t\t\t\t\t\t<th>Title</th>
\t\t\t\t\t\t<th>Date</th>
\t\t\t\t\t\t<th>Player</th>
\t\t\t\t\t\t<th style=\"width: 150px;\">Options</th>
\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t";
        // line 83
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["newses"] ?? null), twig_constant("TICKER"), [], "array"));
        foreach ($context['_seq'] as $context["_key"] => $context["ticker"]) {
            // line 84
            echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>";
            // line 85
            echo $this->getAttribute($context["ticker"], "id", []);
            echo "</td>
\t\t\t\t\t\t\t<td><i><a href=\"?p=news&action=edit&id=";
            // line 86
            echo twig_escape_filter($this->env, $this->getAttribute($context["ticker"], "id", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ticker"], "title", []), "html", null, true);
            echo "</a></i></td>
\t\t\t\t\t\t\t<td>";
            // line 87
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["ticker"], "date", []), $this->getAttribute(($context["config"] ?? null), "news_date_format", [])), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td><a target=\"_blank\" rel=\"noopener noreferrer\" href=\"";
            // line 88
            echo twig_escape_filter($this->env, $this->getAttribute($context["ticker"], "player_link", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ticker"], "player_name", []), "html", null, true);
            echo "</a></td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a href=\"?p=news&action=edit&id=";
            // line 90
            echo twig_escape_filter($this->env, $this->getAttribute($context["ticker"], "id", []), "html", null, true);
            echo "\" class=\"ico\" title=\"Edit\">
\t\t\t\t\t\t\t\t\t<span class=\"btn btn-success btn-sm edit\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-edit\"></i>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t<a href=\"?p=news&action=delete&id=";
            // line 96
            echo twig_escape_filter($this->env, $this->getAttribute($context["ticker"], "id", []), "html", null, true);
            echo "\" class=\"ico\" onclick=\"return confirm('Are you sure?');\" title=\"Delete\">
\t\t\t\t\t\t\t\t\t<span class=\"btn btn-danger btn-sm delete\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-trash\"></i>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t<a href=\"?p=news&action=hide&id=";
            // line 102
            echo twig_escape_filter($this->env, $this->getAttribute($context["ticker"], "id", []), "html", null, true);
            echo "\" class=\"ico\" title=\"";
            if (($this->getAttribute(($context["news"] ?? null), "hidden", []) != 1)) {
                echo "Hide";
            } else {
                echo "Show";
            }
            echo "\">
\t\t\t\t\t\t\t\t\t";
            // line 103
            if (($this->getAttribute($context["ticker"], "hidden", []) != 1)) {
                // line 104
                echo "\t\t\t\t\t\t\t\t\t\t<span class=\"btn btn-primary btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-eye\"></i>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t";
            } else {
                // line 108
                echo "\t\t\t\t\t\t\t\t\t\t<span class=\"btn btn-default btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-eye-slash\"></i>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t";
            }
            // line 112
            echo "\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ticker'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 116
        echo "\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>
\t\t</div>
\t</div>
</div>

<div class=\"box\">
\t<div class=\"box-header\">
\t\t<h3 class=\"box-title\">Articles:</h3>
\t\t<div class=\"box-tools pull-right\">
\t\t\t<a href=\"?p=news&action=new&type=3\"><span class=\"btn btn-success\"><i class=\"fa fa-plus-circle\"></i> New</span></a>
\t\t</div>
\t</div>
\t<div class=\"box-body\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-sm-12\">
\t\t\t\t<table class=\"tb_datatable\">
\t\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th width=\"5%\">ID</th>
\t\t\t\t\t\t<th>Title</th>
\t\t\t\t\t\t<th>Date</th>
\t\t\t\t\t\t<th>Player</th>
\t\t\t\t\t\t<th style=\"width: 150px;\">Options</th>
\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t";
        // line 144
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["newses"] ?? null), twig_constant("ARTICLE"), [], "array"));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 145
            echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>";
            // line 146
            echo $this->getAttribute($context["article"], "id", []);
            echo "</td>
\t\t\t\t\t\t\t<td><i><a href=\"?p=news&action=edit&id=";
            // line 147
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "id", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", []), "html", null, true);
            echo "</a></i></td>
\t\t\t\t\t\t\t<td>";
            // line 148
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["article"], "date", []), $this->getAttribute(($context["config"] ?? null), "news_date_format", [])), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td><a target=\"_blank\" rel=\"noopener noreferrer\" href=\"";
            // line 149
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "player_link", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "player_name", []), "html", null, true);
            echo "</a></td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a href=\"?p=news&action=edit&id=";
            // line 151
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "id", []), "html", null, true);
            echo "\" class=\"ico\" title=\"Edit\">
\t\t\t\t\t\t\t\t\t<span class=\"btn btn-success btn-sm edit\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-edit\"></i>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"?p=news&action=delete&id=";
            // line 156
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "id", []), "html", null, true);
            echo "\" class=\"ico\" onclick=\"return confirm('Are you sure?');\" title=\"Delete\">
\t\t\t\t\t\t\t\t\t<span class=\"btn btn-danger btn-sm delete\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-trash\"></i>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"?p=news&action=hide&id=";
            // line 161
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "id", []), "html", null, true);
            echo "\" class=\"ico\" title=\"";
            if (($this->getAttribute(($context["news"] ?? null), "hidden", []) != 1)) {
                echo "Hide";
            } else {
                echo "Show";
            }
            echo "\">
\t\t\t\t\t\t\t\t\t";
            // line 162
            if (($this->getAttribute($context["article"], "hidden", []) != 1)) {
                // line 163
                echo "\t\t\t\t\t\t\t\t\t\t<span class=\"btn btn-primary btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-eye\"></i>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t";
            } else {
                // line 167
                echo "\t\t\t\t\t\t\t\t\t\t<span class=\"btn btn-default btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-eye-slash\"></i>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t";
            }
            // line 171
            echo "\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 175
        echo "\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>
\t\t</div>
\t</div>
</div>

<script>
\t\$(function () {
\t    \$('.tb_datatable').DataTable({
\t        \"order\": [[ 0, \"desc\" ]]
\t    });
\t});
</script>";
    }

    public function getTemplateName()
    {
        return "admin.news.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  348 => 175,  339 => 171,  333 => 167,  327 => 163,  325 => 162,  315 => 161,  307 => 156,  299 => 151,  292 => 149,  288 => 148,  282 => 147,  278 => 146,  275 => 145,  271 => 144,  241 => 116,  232 => 112,  226 => 108,  220 => 104,  218 => 103,  208 => 102,  199 => 96,  190 => 90,  183 => 88,  179 => 87,  173 => 86,  169 => 85,  166 => 84,  162 => 83,  132 => 55,  123 => 51,  117 => 47,  111 => 43,  109 => 42,  99 => 41,  90 => 35,  81 => 29,  74 => 27,  70 => 26,  64 => 25,  60 => 24,  57 => 23,  53 => 22,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "admin.news.html.twig", "D:\\xampp\\htdocs\\system\\templates\\admin.news.html.twig");
    }
}
