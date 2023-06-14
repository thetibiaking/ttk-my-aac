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

/* admin.dashboard.html.twig */
class __TwigTemplate_5029782e41a05a20485bf7b130e4e0006f2c418ee1bc8d53a0699523f4d31965 extends \Twig\Template
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
\t<div class=\"col-md-6\">
\t\t<div class=\"box box-warning\">
\t\t\t<div class=\"box-header with-border\">
\t\t\t\t<h3 class=\"box-title\">Maintenance</h3>
\t\t\t\t<div class=\"box-tools float-end\">
\t\t\t\t\t<button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"collapse\"><i class=\"fa fa-minus\"></i>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"box-body\">
\t\t\t\t<form action=\"?p=dashboard&maintenance\" method=\"post\" class=\"form-horizontal\">
\t\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"status\" class=\"col-sm-2 control-label\">Website:</label>
\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t<select class=\"form-control form-select\" id=\"status\" name=\"status\">
\t\t\t\t\t\t\t\t\t<option value=\"0\"";
        // line 18
        if ( !($context["is_closed"] ?? null)) {
            echo " selected";
        }
        echo ">Open</option>
\t\t\t\t\t\t\t\t\t<option value=\"1\"";
        // line 19
        if (($context["is_closed"] ?? null)) {
            echo " selected";
        }
        echo ">Closed</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"message\" class=\"col-sm-2 control-label\">Message:<br>
\t\t\t\t\t\t\t\t<small>(only if closed)</small>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<div class=\"col-sm-12\">
                                <textarea name=\"message\" cols=\"40\" class=\"form-control\" rows=\"5\" maxlength=\"255\"
\t\t\t\t\t\t\t\t\t\t  placeholder=\"Enter ...\">";
        // line 29
        echo twig_escape_filter($this->env, ($context["closed_message"] ?? null), "html", null, true);
        echo "</textarea>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"box-footer\">
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#clearcacheModal\"><i class=\"fa-solid fa-trash-can\"></i> Clear Cache</button>
\t\t\t\t\t\t<div class=\"float-end\">
\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-success\"><i class=\"fa-solid fa-circle-check\"></i> Update</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t</div>
<div class=\"modal fade\" id=\"clearcacheModal\" tabindex=\"-1\" aria-labelledby=\"clearcacheModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-sm\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"clearcacheModalLabel\">Clear Cache</h5>
        <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
      </div>
      <div class=\"modal-body\">
\t\tAre you sure?
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\"><i class=\"fa-solid fa-circle-x\"></i> Close</button>
        <a href=\"?p=dashboard&clear_cache\"><span class=\"btn btn-success\"><i class=\"fa-solid fa-circle-check\"></i> Confirm</span></a>
      </div>
    </div>
  </div>
</div>
\t";
        // line 60
        if (twig_test_iterable(($context["points"] ?? null))) {
            // line 61
            echo "\t\t<div class=\"col-md-3\">
\t\t\t<div class=\"box\">
\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t<h3 class=\"box-title\">Top 10 - Most premium points</h3>
\t\t\t\t\t<div class=\"box-tools float-end\">
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"collapse\"><i class=\"fa fa-minus\"></i>
\t\t\t\t\t\t</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"box-body no-padding\">
\t\t\t\t\t<table class=\"table table-condensed\">
\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>#</th>
\t\t\t\t\t\t\t<th>Account ";
            // line 75
            echo twig_escape_filter($this->env, ($context["account_type"] ?? null), "html", null, true);
            echo "</th>
\t\t\t\t\t\t\t<th>Premium points</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
            // line 78
            $context["i"] = 0;
            // line 79
            echo "\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["points"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
                // line 80
                echo "\t\t\t\t\t\t\t";
                $context["i"] = (($context["i"] ?? null) + 1);
                // line 81
                echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>";
                // line 82
                echo twig_escape_filter($this->env, ($context["i"] ?? null), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t<td>";
                // line 83
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "name", []), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t<td>";
                // line 84
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "premium_points", []), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 87
            echo "\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t";
        }
        // line 93
        echo "\t";
        if (twig_test_iterable(($context["coins"] ?? null))) {
            // line 94
            echo "\t\t<div class=\"col-md-3\">
\t\t\t<div class=\"box\">
\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t<h3 class=\"box-title\">Top 10 - Most coins</h3>
\t\t\t\t\t<div class=\"box-tools float-end\">
\t\t\t\t\t<button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"collapse\"><i class=\"fa fa-minus\"></i>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"box-body no-padding\">
\t\t\t\t\t<table class=\"table table-condensed\">
\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>#</th>
\t\t\t\t\t\t\t<th>Account ";
            // line 108
            echo twig_escape_filter($this->env, ($context["account_type"] ?? null), "html", null, true);
            echo "</th>
\t\t\t\t\t\t\t<th>Tibia coins</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
            // line 111
            $context["i"] = 0;
            // line 112
            echo "\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["coins"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
                // line 113
                echo "\t\t\t\t\t\t\t";
                $context["i"] = (($context["i"] ?? null) + 1);
                // line 114
                echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>";
                // line 115
                echo twig_escape_filter($this->env, ($context["i"] ?? null), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t<td>";
                // line 116
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "name", []), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t<td>";
                // line 117
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "coins", []), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 120
            echo "\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t";
        }
        // line 126
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "admin.dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  229 => 126,  221 => 120,  212 => 117,  208 => 116,  204 => 115,  201 => 114,  198 => 113,  193 => 112,  191 => 111,  185 => 108,  169 => 94,  166 => 93,  158 => 87,  149 => 84,  145 => 83,  141 => 82,  138 => 81,  135 => 80,  130 => 79,  128 => 78,  122 => 75,  106 => 61,  104 => 60,  70 => 29,  55 => 19,  49 => 18,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "admin.dashboard.html.twig", "D:\\xampp\\htdocs\\system\\templates\\admin.dashboard.html.twig");
    }
}
