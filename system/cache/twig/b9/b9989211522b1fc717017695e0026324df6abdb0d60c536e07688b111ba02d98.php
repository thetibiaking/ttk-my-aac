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

/* admin.login.html.twig */
class __TwigTemplate_07e01f6678f9a6e2879500bcc18b06e904dad26667a5e01c2ae71c41b59bebb9 extends \Twig\Template
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
        echo "<div class=\"vh-100\" style=\"display: flex; align-items: center;\">
\t<div class=\"form-signin\">
\t\t";
        // line 3
        if (($context["logout"] ?? null)) {
            // line 4
            echo "\t\t\t<div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
\t\t\t  ";
            // line 5
            echo twig_escape_filter($this->env, ($context["logout"] ?? null), "html", null, true);
            echo "
\t\t\t  <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
\t\t\t</div>
\t\t";
        }
        // line 9
        echo "\t\t<form method=\"post\">
\t\t<main class=\"form-signin text-center\">
\t\t\t<h1 class=\"h3 mb-3 fw-normal\">Please sign in</h1>
\t\t\t<div class=\"form-floating\">
\t\t\t  <input type=\"email\" class=\"form-control\" id=\"account-name-input\" name=\"account_login\" placeholder=\"";
        // line 13
        echo twig_escape_filter($this->env, ($context["account_login_by"] ?? null), "html", null, true);
        echo "\" required autofocus>
\t\t\t  <label for=\"floatingInput\" style=\"color: #000;\">Email address</label>
\t\t\t</div>
\t\t\t<div class=\"form-floating\">
\t\t\t  <input type=\"password\" class=\"form-control\" placeholder=\"Password\" name=\"password_login\" placeholder=\"Password\" required>
\t\t\t  <label for=\"floatingPassword\" style=\"color: #000;\">Password</label>
\t\t\t</div>
\t\t\t<div class=\"checkbox mb-3\">
\t\t\t  <label>
\t\t\t\t<input type=\"checkbox\" id=\"remember_me\" name=\"remember_me\" value=\"true\"> Remember me
\t\t\t  </label>
\t\t\t</div>
\t\t\t<input type=\"hidden\" name=\"admin\" value=\"1\"/>
\t\t\t<button type=\"submit\" class=\"w-100 btn btn-lg btn-primary\" type=\"submit\">Sign in</button>
\t\t\t<p class=\"mt-5 mb-3 text-muted\">MyAAC v0.8.6</p>
\t\t</main>
\t\t</form>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "admin.login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 13,  46 => 9,  39 => 5,  36 => 4,  34 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "admin.login.html.twig", "D:\\xampp\\htdocs\\system\\templates\\admin.login.html.twig");
    }
}
