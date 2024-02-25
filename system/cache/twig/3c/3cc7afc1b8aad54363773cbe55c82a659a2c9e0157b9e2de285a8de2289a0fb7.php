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

/* admin.mailer.html.twig */
class __TwigTemplate_74ba0299ee2abf43fa83fc1d9d00e01b9f2c9588b159de405b4cd57720c8abec extends \Twig\Template
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
        echo "<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, twig_constant("BASE_URL"), "html", null, true);
        echo "tools/tinymce/tinymce.min.js\"></script>
<script type=\"text/javascript\">
\ttinymce.init({
\t\tselector: \"textarea\",
\t\ttheme: \"modern\",
\t\tplugins: 'print preview searchreplace autolink directionality visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists textcolor wordcount spellchecker imagetools contextmenu colorpicker textpattern help code emoticons',
\t\ttoolbar1: 'formatselect | bold italic strikethrough forecolor backcolor | emoticons link | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent  | removeformat code',
\t\timage_advtab: true,
\t\trelative_urls: false,
\t\tremove_script_host: false,
\t\tdocument_base_url: \"";
        // line 11
        echo twig_escape_filter($this->env, twig_constant("BASE_URL"), "html", null, true);
        echo "\"
\t});
</script>

<div class=\"row\">
\t<div class=\"col-md-8\">
\t\t<div class=\"box box-danger\">
\t\t\t<div class=\"box-header with-border\">
\t\t\t\t<h3 class=\"box-title\">Mailer</h3>
\t\t\t</div>
\t\t\t<form method=\"post\">
\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t<div align=\"center\" class=\"container\"><p class=\"alert alert-info alert-dismissible\" style=\"width: 100%;\">Sending mails may
\t\t\t\t\t\t\ttake some time if there are many users in db.</p></div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-xs-12 \">
\t\t\t\t\t\t\t\t<label for=\"mail_subject\" class=\"control-label\">Subject:</label>
\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" id=\"mail_subject\" name=\"mail_subject\"
\t\t\t\t\t\t\t\t\t   value=\"";
        // line 30
        echo twig_escape_filter($this->env, ($context["mail_subject"] ?? null), "html", null, true);
        echo "\" size=\"30\" maxlength=\"50\"/>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t\t<label for=\"mail_content\" class=\"control-label\">Content:</label>
\t\t\t\t\t<textarea id=\"mail_content\" name=\"mail_content\" style=\"width: 100%\"
\t\t\t\t\t\t\t  class=\"tinymce\">";
        // line 37
        echo twig_escape_filter($this->env, ($context["mail_content"] ?? null), "html", null, true);
        echo "</textarea>
\t\t\t\t</div>
\t\t\t\t<div class=\"box-footer\">
                    <div class=\"checkbox\">
                      <label>
                        <input type=\"checkbox\" name=\"preview\" id=\"preview\" value=\"1\"/> Just send test email to me (preview)
                      </label>
                    </div>
\t\t\t\t\t";
        // line 45
        if (($context["preview_done"] ?? null)) {
            echo " - <b>Done.</b>";
        }
        echo "<br/>
\t\t\t\t\t<button type=\"submit\" name=\"submit\" value=\"Send\" class=\"btn btn-success\"><i class=\"fa fa-send\"></i> Send</button>
\t\t\t\t</div>
\t\t\t</form>
\t\t</div>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "admin.mailer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 45,  76 => 37,  66 => 30,  44 => 11,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "admin.mailer.html.twig", "D:\\xampp\\htdocs\\system\\templates\\admin.mailer.html.twig");
    }
}
