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

/* admin.news.form.html.twig */
class __TwigTemplate_9124f5c61a05fdfe60a0b7ba67067868a2e8b0b5e04943cbb0b750763373f908 extends \Twig\Template
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
\t\t<form method=\"post\" action=\"";
            // line 3
            echo twig_escape_filter($this->env, ($context["news_link_form"] ?? null), "html", null, true);
            echo "\" id=\"news-edit-form\">
\t\t\t";
            // line 4
            if ((($context["action"] ?? null) == "edit")) {
                // line 5
                echo "\t\t\t\t<input type=\"hidden\" name=\"id\" value=\"";
                echo twig_escape_filter($this->env, ($context["news_id"] ?? null), "html", null, true);
                echo "\"/>
\t\t\t";
            }
            // line 7
            echo "\t\t\t<div class=\"col-md-8\" id=\"page-edit-table\">
\t\t\t\t<div class=\"box box-info\">
\t\t\t\t\t<div class=\"box-header with-border\">
\t\t\t\t\t\t<h3 class=\"box-title\">";
            // line 10
            if ((($context["action"] ?? null) == "edit")) {
                echo "Edit";
            } else {
                echo "Add";
            }
            echo " news</h3>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"title\" class=\"col-sm-2 control-label\">Title</label>

\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<input type=\"text\" id=\"title\" name=\"title\" class=\"form-control\" autocomplete=\"off\" style=\"cursor: auto;\" value=\"";
            // line 18
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"body\" class=\"col-sm-2 control-label\">Content</label>

\t\t\t\t\t\t\t<div class=\"col-sm-10\" id=\"body-parent\">
                                <textarea class=\"form-control\" id=\"body\" name=\"body\" maxlength=\"65000\" cols=\"50\" rows=\"5\">";
            // line 26
            echo ($context["body"] ?? null);
            echo "</textarea>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"select-type\" class=\"col-sm-2 control-label\">Type</label>

\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"type\" id=\"select-type\">
\t\t\t\t\t\t\t\t\t<option value=\"";
            // line 35
            echo twig_escape_filter($this->env, twig_constant("NEWS"), "html", null, true);
            echo "\" ";
            if (((isset($context["type"]) || array_key_exists("type", $context)) && (($context["type"] ?? null) == twig_constant("NEWS")))) {
                echo "selected=\"yes\"";
            }
            if (((($context["action"] ?? null) == "edit") && (($context["type"] ?? null) != twig_constant("NEWS")))) {
                echo " disabled";
            }
            echo ">News</option>
\t\t\t\t\t\t\t\t\t<option value=\"";
            // line 36
            echo twig_escape_filter($this->env, twig_constant("TICKER"), "html", null, true);
            echo "\" ";
            if (((isset($context["type"]) || array_key_exists("type", $context)) && (($context["type"] ?? null) == twig_constant("TICKER")))) {
                echo "selected=\"yes\"";
            }
            if (((($context["action"] ?? null) == "edit") && (($context["type"] ?? null) != twig_constant("TICKER")))) {
                echo " disabled";
            }
            echo ">Ticket</option>
\t\t\t\t\t\t\t\t\t<option value=\"";
            // line 37
            echo twig_escape_filter($this->env, twig_constant("ARTICLE"), "html", null, true);
            echo "\" ";
            if (((isset($context["type"]) || array_key_exists("type", $context)) && (($context["type"] ?? null) == twig_constant("ARTICLE")))) {
                echo "selected=\"yes\"";
            }
            if (((($context["action"] ?? null) == "edit") && (($context["type"] ?? null) != twig_constant("ARTICLE")))) {
                echo " disabled";
            }
            echo ">Article</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div id=\"article-text\" class=\"form-group\"";
            // line 42
            if (( !(isset($context["type"]) || array_key_exists("type", $context)) || (($context["type"] ?? null) != twig_constant("ARTICLE")))) {
                echo " style=\"display: none;\"";
            }
            echo ">
\t\t\t\t\t\t\t<label for=\"article_text\" class=\"col-sm-2 control-label\">Article short text</label>

\t\t\t\t\t\t\t<div class=\"col-sm-10\" id=\"body-parent\">
\t\t\t\t\t\t\t\t<textarea class=\"form-control\" name=\"article_text\" id=\"article_text\" cols=\"50\" rows=\"5\">";
            // line 46
            if ( !twig_test_empty(($context["article_text"] ?? null))) {
                echo twig_escape_filter($this->env, ($context["article_text"] ?? null), "html", null, true);
            }
            echo "</textarea>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div id=\"article-image\" class=\"form-group\"";
            // line 50
            if (( !(isset($context["type"]) || array_key_exists("type", $context)) || (($context["type"] ?? null) != twig_constant("ARTICLE")))) {
                echo " style=\"display: none;\"";
            }
            echo ">
\t\t\t\t\t\t\t<label for=\"article_image\" class=\"col-sm-2 control-label\">Article image</label>

\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" name=\"article_image\" id=\"article_image\" value=\"";
            // line 54
            if ( !twig_test_empty(($context["article_image"] ?? null))) {
                echo twig_escape_filter($this->env, ($context["article_image"] ?? null), "html", null, true);
            } else {
                echo "images/news/announcement.jpg";
            }
            echo "\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t";
            // line 58
            if ((($context["action"] ?? null) == "edit")) {
                // line 59
                echo "\t\t\t\t\t\t\t";
                if ((isset($context["player"]) || array_key_exists("player", $context))) {
                    // line 60
                    echo "\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"author\" class=\"col-sm-2 control-label\">Author</label>

\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<select class=\"form-control\" id=\"author\" name=\"original_id\" disabled=\"disabled\">
\t\t\t\t\t\t\t\t\t\t<option value=\"";
                    // line 65
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["player"] ?? null), "getId", [], "method"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["player"] ?? null), "getName", [], "method"), "html", null, true);
                    echo "</option>
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                }
                // line 70
                echo "\t\t\t\t\t\t";
            }
            // line 71
            echo "
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"player_id\" class=\"col-sm-2 control-label\">";
            // line 73
            if ((($context["action"] ?? null) == "edit")) {
                echo "Modified by";
            } else {
                echo "Author";
            }
            echo "</label>

\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"player_id\" id=\"player_id\">
\t\t\t\t\t\t\t\t\t";
            // line 77
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["account_players"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["player"]) {
                // line 78
                echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["player"], "getId", [], "method"), "html", null, true);
                echo "\"";
                if (((isset($context["player_id"]) || array_key_exists("player_id", $context)) && ($this->getAttribute($context["player"], "getId", [], "method") == ($context["player_id"] ?? null)))) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["player"], "getName", [], "method"), "html", null, true);
                echo "</option>
\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['player'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 80
            echo "\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t";
            // line 84
            if ((($context["action"] ?? null) != "edit")) {
                // line 85
                echo "\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"forum_section\" class=\"col-sm-2 control-label\">Create forum thread in section:</label>

\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"forum_section\" id=\"forum_section\">
\t\t\t\t\t\t\t\t\t<option value=\"-1\">None</option>
\t\t\t\t\t\t\t\t\t\t";
                // line 91
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["forum_boards"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["section"]) {
                    // line 92
                    echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["section"], "id", []), "html", null, true);
                    echo "\" ";
                    if (((isset($context["forum_section"]) || array_key_exists("forum_section", $context)) && (($context["forum_section"] ?? null) == $this->getAttribute($context["section"], "id", [])))) {
                        echo "checked=\"yes\"";
                    }
                    echo ">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["section"], "name", []), "html", null, true);
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['section'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 94
                echo "\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            } elseif ( !(null ===             // line 97
($context["comments"] ?? null))) {
                // line 98
                echo "\t\t\t\t\t\t\t<input type=\"hidden\" name=\"forum_section\" id=\"forum_section\" value=\"";
                echo twig_escape_filter($this->env, ($context["comments"] ?? null), "html", null, true);
                echo "\" />
\t\t\t\t\t\t";
            }
            // line 100
            echo "
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"category\" class=\"col-sm-2 control-label\">Category</label>

\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t";
            // line 105
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["id"] => $context["cat"]) {
                // line 106
                echo "\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"category\" id=\"category\" value=\"";
                echo twig_escape_filter($this->env, $context["id"], "html", null, true);
                echo "\" ";
                if ((((($context["category"] ?? null) == 0) && ($context["id"] == 1)) || (($context["category"] ?? null) == $context["id"]))) {
                    echo "checked=\"yes\"";
                }
                echo "/>
\t\t\t\t\t\t\t\t\t<img src=\"";
                // line 107
                echo twig_escape_filter($this->env, twig_constant("BASE_URL"), "html", null, true);
                echo "/images/news/icon_";
                echo twig_escape_filter($this->env, $this->getAttribute($context["cat"], "icon_id", []), "html", null, true);
                echo "_small.gif\" />
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['id'], $context['cat'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 109
            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"box-footer\">
\t\t\t\t\t\t<td align=\"right\"><input type=\"submit\" class=\"btn btn-info pull-right\" value=\"Save\"/></td>
\t\t\t\t\t\t<td align=\"left\">
\t\t\t\t\t\t\t<input type=\"button\" onclick=\"window.location = '";
            // line 116
            echo twig_escape_filter($this->env, twig_constant("ADMIN_URL"), "html", null, true);
            echo "?p=news';\" class=\"btn btn-default\" value=\"Cancel\"/>
\t\t\t\t\t\t</td>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</form>
\t</div>

\t";
            // line 124
            if ((($context["action"] ?? null) != "edit")) {
                // line 125
                echo "\t<script type=\"text/javascript\">
\t\t\$(document).ready(function() {
\t\t\t\$(\"#news-edit\").hide();

\t\t\t\$(\"#news-button\").click(function() {
\t\t\t\t\$(\"#news-edit\").toggle();
\t\t\t\treturn false;
\t\t\t});

\t\t\t\$('#select-type').change(function() {
\t\t\t    var value = \$('#select-type').val();
\t\t\t\tif(value == ";
                // line 136
                echo twig_escape_filter($this->env, twig_constant("ARTICLE"), "html", null, true);
                echo ") {
\t                \$('#article-text').show();
\t\t\t\t    \$('#article-image').show();
\t\t\t\t}
\t\t\t\telse {
\t                \$('#article-text').hide();
\t\t\t\t    \$('#article-image').hide();
\t            }
\t\t\t});
\t\t});
\t</script>
\t";
            }
            // line 148
            echo "
\t<script type=\"text/javascript\" src=\"";
            // line 149
            echo twig_escape_filter($this->env, twig_constant("BASE_URL"), "html", null, true);
            echo "tools/tinymce/tinymce.min.js\"></script>
\t<script type=\"text/javascript\">
\t\tvar unsaved = false;
\t\tvar lastContent = '';

\t\ttinymce.init({
\t\t\tselector : \"#body\",
\t\t\ttheme : \"modern\",
\t\t\tplugins: 'print preview searchreplace autolink directionality visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists textcolor wordcount spellchecker imagetools contextmenu colorpicker textpattern help code emoticons',
\t\t\ttoolbar1: 'formatselect | bold italic strikethrough forecolor backcolor | emoticons link | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent  | removeformat code',
\t\t\timage_advtab: true,
\t\t\tsetup: function(ed){
\t\t\t\ted.on('Change', function(e) {
\t\t\t\t\tif(ed.getContent() != lastContent) {
\t\t\t\t\t\tunsaved = true;
\t\t\t\t\t}
\t\t\t\t});
\t\t\t}
\t\t});

\t\t\$(document).ready(function() {
\t\t\t\$(\":input\").change(function(){ //trigers change in all input fields including text type
\t\t\t\tunsaved = true;
\t\t\t});

\t\t\t\$(\"#news-edit-form\").submit(function( event ) {
\t\t\t\tunsaved = false;
\t\t\t});

\t\t\tlastContent = \$(\"#body\").val();
\t\t});

\t\tfunction unloadPage(){
\t\t\tif(unsaved){
\t\t\t\treturn \"You have unsaved changes on this page. Do you want to leave this page and discard your changes or stay on this page?\";
\t\t\t}
\t\t}

\t\twindow.onbeforeunload = unloadPage;
\t</script>
";
        }
    }

    public function getTemplateName()
    {
        return "admin.news.form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  355 => 149,  352 => 148,  337 => 136,  324 => 125,  322 => 124,  311 => 116,  302 => 109,  292 => 107,  283 => 106,  279 => 105,  272 => 100,  266 => 98,  264 => 97,  259 => 94,  244 => 92,  240 => 91,  232 => 85,  230 => 84,  224 => 80,  209 => 78,  205 => 77,  194 => 73,  190 => 71,  187 => 70,  177 => 65,  170 => 60,  167 => 59,  165 => 58,  154 => 54,  145 => 50,  136 => 46,  127 => 42,  112 => 37,  101 => 36,  90 => 35,  78 => 26,  67 => 18,  52 => 10,  47 => 7,  41 => 5,  39 => 4,  35 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "admin.news.form.html.twig", "D:\\xampp\\htdocs\\system\\templates\\admin.news.form.html.twig");
    }
}
