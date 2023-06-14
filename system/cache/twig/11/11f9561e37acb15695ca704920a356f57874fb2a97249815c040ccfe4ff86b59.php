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

/* admin.pages.form.html.twig */
class __TwigTemplate_71d1e9b4dbe5db0c0d823292ea787a2886638b694f2183af1b664a223116d8f8 extends \Twig\Template
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
        if (($context["action"] ?? null)) {
            // line 2
            echo "\t<div class=\"row\">
\t\t<form class=\"form-horizontal\" method=\"post\"
\t\t\t  action=\"?p=pages&action=";
            // line 4
            if ((($context["action"] ?? null) == "edit")) {
                echo "edit";
            } else {
                echo "add";
            }
            echo "\">
\t\t\t";
            // line 5
            if ((($context["action"] ?? null) == "edit")) {
                // line 6
                echo "\t\t\t\t<input type=\"hidden\" name=\"id\" value=\"";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo "\"/>
\t\t\t";
            }
            // line 8
            echo "\t\t\t<div class=\"col-md-8\" id=\"page-edit-table\">
\t\t\t\t<div class=\"box box-info\">
\t\t\t\t\t<div class=\"box-header with-border\">
\t\t\t\t\t\t<h3 class=\"box-title\">";
            // line 11
            if ((($context["action"] ?? null) == "edit")) {
                echo "Edit";
            } else {
                echo "Add";
            }
            echo " page</h3>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"name\" class=\"col-sm-2 control-label\">Link/name</label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<input type=\"text\" id=\"name\" name=\"name\" class=\"form-control\" autocomplete=\"off\"
\t\t\t\t\t\t\t\t\t   maxlength=\"29\"
\t\t\t\t\t\t\t\t\t   style=\"cursor: auto;\" value=\"";
            // line 19
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"title\" class=\"col-sm-2 control-label\">Title</label>

\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<input type=\"text\" id=\"title\" name=\"title\" class=\"form-control\" autocomplete=\"off\"
\t\t\t\t\t\t\t\t\t   maxlength=\"29\"
\t\t\t\t\t\t\t\t\t   style=\"cursor: auto;\" value=\"";
            // line 28
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"php\" class=\"col-sm-2 control-label\">PHP</label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"php\" name=\"php\"
\t\t\t\t\t\t\t\t\t   title=\"Check if page should be executed as PHP\"
\t\t\t\t\t\t\t\t\t   value=\"1\"";
            // line 36
            if (($context["php"] ?? null)) {
                echo " checked";
            }
            if ((($context["action"] ?? null) == "edit")) {
                echo " disabled";
            }
            echo "/>
\t\t\t\t\t\t\t\t";
            // line 37
            if ((($context["action"] ?? null) == "edit")) {
                // line 38
                echo "\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"php\" value=\"";
                if (($context["php"] ?? null)) {
                    echo "1";
                } else {
                    echo "0";
                }
                echo "\"/>
\t\t\t\t\t\t\t\t";
            }
            // line 40
            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            // line 42
            if ( !($context["php"] ?? null)) {
                // line 43
                echo "\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"enable_tinymce\" class=\"col-sm-2 control-label\">Enable TinyMCE</label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"enable_tinymce\" name=\"enable_tinymce\"
\t\t\t\t\t\t\t\t\t   title=\"Check if you want to use TinyMCE Editor\"
\t\t\t\t\t\t\t\t\t   value=\"1\"";
                // line 48
                if (($context["enable_tinymce"] ?? null)) {
                    echo " checked";
                }
                if ((($context["action"] ?? null) == "edit")) {
                    echo " disabled";
                }
                echo "/>
\t\t\t\t\t\t\t\t";
                // line 49
                if ((($context["action"] ?? null) == "edit")) {
                    // line 50
                    echo "\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"enable_tinymce\" value=\"";
                    if (($context["enable_tinymce"] ?? null)) {
                        echo "1";
                    } else {
                        echo "0";
                    }
                    echo "\"/>
\t\t\t\t\t\t\t\t";
                }
                // line 52
                echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            // line 55
            echo "\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"body\" class=\"col-sm-2 control-label\">Content</label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\" id=\"body-parent\">
                                <textarea class=\"form-control\" id=\"body\" name=\"body\" maxlength=\"65000\" cols=\"50\"
\t\t\t\t\t\t\t\t\t\t  rows=\"5\">";
            // line 59
            echo ($context["body"] ?? null);
            echo "</textarea>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"access\" class=\"col-sm-2 control-label\">Access</label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<select class=\"form-control\" id=\"access\" name=\"access\">
\t\t\t\t\t\t\t\t\t";
            // line 66
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["groups"] ?? null));
            foreach ($context['_seq'] as $context["id"] => $context["group"]) {
                // line 67
                echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "getId", [], "method"), "html", null, true);
                echo "\"";
                if ((($context["access"] ?? null) == $this->getAttribute($context["group"], "getId", [], "method"))) {
                    echo " selected";
                }
                echo ">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "getName", [], "method"), "html", null, true);
                echo "</option>
\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['id'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            echo "\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"box-footer\">
\t\t\t\t\t\t<td align=\"right\"><input type=\"submit\" class=\"btn btn-info pull-right\" value=\"Save\"/></td>
\t\t\t\t\t\t<td align=\"left\">
\t\t\t\t\t\t\t<input type=\"button\" onclick=\"window.location = '";
            // line 76
            echo twig_escape_filter($this->env, twig_constant("ADMIN_URL"), "html", null, true);
            echo "?p=pages';\"
\t\t\t\t\t\t\t\t   class=\"btn btn-default\" value=\"Cancel\"/>
\t\t\t\t\t\t</td>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</form>
\t</div>

\t<script type=\"text/javascript\" src=\"";
            // line 85
            echo twig_escape_filter($this->env, twig_constant("BASE_URL"), "html", null, true);
            echo "tools/tinymce/tinymce.min.js\"></script>
\t<script type=\"text/javascript\">
\t\t\$(function () {
\t\t\t\$('#enable_tinymce').on('change', function (e) {
\t\t\t\tif (!this.checked) {
\t\t\t\t\ttinymce.remove('#body');
\t\t\t\t} else {
\t\t\t\t\tif (tinymce.editors.length > 0) {
\t\t\t\t\t\ttinymce.activeEditor.show();
\t\t\t\t\t}
\t\t\t\t\telse {
\t\t\t\t\t\tinit_tinymce();
\t\t\t\t\t}
\t\t\t\t}
\t\t\t});

\t\t\t";
            // line 101
            if (( !($context["php"] ?? null) && ($context["enable_tinymce"] ?? null))) {
                // line 102
                echo "\t\t\tinit_tinymce();
\t\t\t";
            }
            // line 104
            echo "
\t\t\tfunction init_tinymce() {
\t\t\t\ttinymce.init({
\t\t\t\t\tselector: \"#body\",
\t\t\t\t\ttheme: \"modern\",
\t\t\t\t\tplugins: 'code print preview searchreplace autolink directionality visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists textcolor wordcount spellchecker imagetools contextmenu colorpicker textpattern help emoticons',
\t\t\t\t\ttoolbar1: 'formatselect | bold italic strikethrough forecolor backcolor | emoticons link | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent  | removeformat code',
\t\t\t\t\timage_advtab: true,
\t\t\t\t\trelative_urls: false,
\t\t\t\t\tremove_script_host: false,
\t\t\t\t\tdocument_base_url: \"";
            // line 114
            echo twig_escape_filter($this->env, twig_constant("BASE_URL"), "html", null, true);
            echo "\"
\t\t\t\t});
\t\t\t}

\t\t\tfunction decodeHtml(html) {
\t\t\t\tvar txt = document.createElement(\"textarea\");
\t\t\t\ttxt.innerHTML = html;
\t\t\t\treturn txt.value;
\t\t\t}
\t\t});
\t</script>  ";
        }
    }

    public function getTemplateName()
    {
        return "admin.pages.form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  248 => 114,  236 => 104,  232 => 102,  230 => 101,  211 => 85,  199 => 76,  190 => 69,  175 => 67,  171 => 66,  161 => 59,  155 => 55,  150 => 52,  140 => 50,  138 => 49,  129 => 48,  122 => 43,  120 => 42,  116 => 40,  106 => 38,  104 => 37,  95 => 36,  84 => 28,  72 => 19,  57 => 11,  52 => 8,  46 => 6,  44 => 5,  36 => 4,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "admin.pages.form.html.twig", "D:\\xampp\\htdocs\\system\\templates\\admin.pages.form.html.twig");
    }
}
