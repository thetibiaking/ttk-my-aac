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

/* admin.plugins.html.twig */
class __TwigTemplate_e0967677c81d9d509b8b411ec13e494455f22343264b6865fbb2ee04675b9784 extends \Twig\Template
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
\t<div class=\"col-xs-12\">
\t\t<div class=\"box\">
\t\t\t<div class=\"box-header\">
\t\t\t\t<h3 class=\"box-title\">Installed plugins:</h3>
\t\t\t</div>
\t\t\t<div class=\"box-body\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t<table id=\"tb_plugins\">
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th>Name</th>
\t\t\t\t\t\t\t\t<th>Version</th>
\t\t\t\t\t\t\t\t<th>Author</th>
\t\t\t\t\t\t\t\t<th>Filename</th>
\t\t\t\t\t\t\t\t<th style=\"width: 55px;\">Options</th>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["plugins"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["plugin"]) {
            // line 22
            echo "\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td><b>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["plugin"], "name", []), "html", null, true);
            echo "</b><br>
\t\t\t\t\t\t\t\t\t\t<small>";
            // line 24
            echo $this->getAttribute($context["plugin"], "description", []);
            echo "</small>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["plugin"], "version", []), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t<td><b>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["plugin"], "author", []), "html", null, true);
            echo "</b><br>
\t\t\t\t\t\t\t\t\t\t<small>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["plugin"], "contact", []), "html", null, true);
            echo "</small>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["plugin"], "file", []), "html", null, true);
            echo ".json</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t";
            // line 32
            if ($this->getAttribute($context["plugin"], "uninstall", [])) {
                // line 33
                echo "\t\t\t\t\t\t\t\t\t\t\t<a href=\"?p=plugins&uninstall=";
                echo twig_escape_filter($this->env, $this->getAttribute($context["plugin"], "file", []), "html", null, true);
                echo "\" title=\"Uninstall\"
\t\t\t\t\t\t\t\t\t\t\t   onclick=\"return confirm('Are you sure?');\"><span
\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"btn btn-danger btn-sm delete btn-flat\"><i
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"fa fa-trash\"></i></span></a>
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 37
            echo "</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['plugin'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<script>
\t\$(function () {
\t\t\$('#tb_plugins').DataTable()
\t})
</script>
";
    }

    public function getTemplateName()
    {
        return "admin.plugins.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 40,  97 => 37,  88 => 33,  86 => 32,  81 => 30,  76 => 28,  72 => 27,  68 => 26,  63 => 24,  59 => 23,  56 => 22,  52 => 21,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "admin.plugins.html.twig", "D:\\xampp\\htdocs\\system\\templates\\admin.plugins.html.twig");
    }
}
