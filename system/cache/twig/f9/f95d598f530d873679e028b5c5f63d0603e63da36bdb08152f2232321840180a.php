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

/* admin.plugins.form.html.twig */
class __TwigTemplate_fea68cbac4a0dd5c4a82204862854d66b7fb042d82ffbbe09ef822d62344e73f extends \Twig\Template
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
\t<div class=\"col-md-3\">
\t\t<div class=\"box box-primary\">
\t\t\t<div class=\"box-header with-border\">
\t\t\t\t<h3 class=\"box-title\">Install plugin:</h3>
\t\t\t\t<div class=\"box-tools pull-right\">
\t\t\t\t\t<button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"collapse\"><i class=\"fa fa-minus\"></i>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"box-body\">
\t\t\t\t<form enctype=\"multipart/form-data\" method=\"post\" action=\"";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("ADMIN_URL"), "html", null, true);
        echo "?p=plugins\">
\t\t\t\t\t<input type=\"hidden\" name=\"upload_plugin\"/>
\t\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"exampleInputFile\">File input</label>
\t\t\t\t\t\t\t<input type=\"file\" name=\"plugin\" accept=\".zip\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"box-footer\">
\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-success\"><i class=\"fa fa-check\"></i> Upload</button>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "admin.plugins.form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 12,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "admin.plugins.form.html.twig", "D:\\xampp\\htdocs\\system\\templates\\admin.plugins.form.html.twig");
    }
}
