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

/* admin.pages.html.twig */
class __TwigTemplate_57a9c61c510ea1849a9b891783cbb2bea2b4aeae2194b8a21b74a0fd52ffcf69 extends \Twig\Template
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
\t\t<h3 class=\"box-title\">Pages:</h3>
\t\t<div class=\"box-tools pull-right\">
\t\t\t<a href=\"?p=pages&action=new\" title=\"New\"><span class=\"btn btn-success\"><i class=\"fa fa-plus-circle\"></i> New</span></a>
\t\t</div>
\t</div>
\t<div class=\"box-body\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-sm-12\">
\t\t\t\t<table id=\"tb_pages\">
\t\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Name</th>
\t\t\t\t\t\t<th>Title</th>
\t\t\t\t\t\t<th>PHP</th>
\t\t\t\t\t\t<th style=\"width: 150px;\">Options</th>
\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["pages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 22
            echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>";
            // line 23
            echo $this->getAttribute($context["page"], "link", []);
            echo "</td>
\t\t\t\t\t\t\t<td><i>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "title", []), "html", null, true);
            echo "</i></td>
\t\t\t\t\t\t\t<td>";
            // line 25
            if ($this->getAttribute($context["page"], "php", [])) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a href=\"?p=pages&action=edit&id=";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "id", []), "html", null, true);
            echo "\" class=\"ico\" title=\"Edit\"><span
\t\t\t\t\t\t\t\t\t\t\tclass=\"btn btn-success btn-sm edit\"><i
\t\t\t\t\t\t\t\t\t\t\t\tclass=\"fa fa-edit\"></i></span></a>
\t\t\t\t\t\t\t\t<a href=\"?p=pages&action=delete&id=";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "id", []), "html", null, true);
            echo "\" class=\"ico\"
\t\t\t\t\t\t\t\t   onclick=\"return confirm('Are you sure?');\" title=\"Delete\"><span
\t\t\t\t\t\t\t\t\t\t\tclass=\"btn btn-danger btn-sm delete\"><i
\t\t\t\t\t\t\t\t\t\t\t\tclass=\"fa fa-trash\"></i></span></a>
\t\t\t\t\t\t\t\t<a href=\"?p=pages&action=hide&id=";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "id", []), "html", null, true);
            echo "\" class=\"ico\"
\t\t\t\t\t\t\t\t   title=\"";
            // line 35
            if (($this->getAttribute($context["page"], "hidden", []) != 1)) {
                echo "Hide";
            } else {
                echo "Show";
            }
            echo "\">
\t\t\t\t\t\t\t\t\t";
            // line 36
            if (($this->getAttribute($context["page"], "hidden", []) != 1)) {
                // line 37
                echo "\t\t\t\t\t\t\t\t\t\t<span class=\"btn btn-primary btn-sm\"><i
\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"fa fa-eye\"></i></span>
\t\t\t\t\t\t\t\t\t";
            } else {
                // line 40
                echo "\t\t\t\t\t\t\t\t\t\t<span class=\"btn btn-default btn-sm\"><i
\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"fa fa-eye-slash\"></i></span>
\t\t\t\t\t\t\t\t\t";
            }
            // line 43
            echo "\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<script>
\t\$(function () {
\t\t\$('#tb_pages').DataTable()
\t})
</script>
";
    }

    public function getTemplateName()
    {
        return "admin.pages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 47,  113 => 43,  108 => 40,  103 => 37,  101 => 36,  93 => 35,  89 => 34,  82 => 30,  76 => 27,  67 => 25,  63 => 24,  59 => 23,  56 => 22,  52 => 21,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "admin.pages.html.twig", "D:\\xampp\\htdocs\\system\\templates\\admin.pages.html.twig");
    }
}
