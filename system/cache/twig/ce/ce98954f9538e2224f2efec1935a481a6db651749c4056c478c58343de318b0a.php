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

/* hint.html.twig */
class __TwigTemplate_c3300516ce3d0d484ee0579e4c91a674284a73a31ad319fb72eeb48eb1a8578a extends \Twig\Template
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
        echo "To play on ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["config"] ?? null), "lua", []), "serverName", []), "html", null, true);
        echo " you need an account.
All you have to do to create your new account is to enter an account ";
        // line 2
        if (twig_constant("USE_ACCOUNT_NAME")) {
            echo "name";
        } else {
            echo "number";
        }
        echo ", password";
        if ($this->getAttribute(($context["config"] ?? null), "recaptcha_enabled", [])) {
            echo ", confirm reCAPTCHA";
        }
        if ($this->getAttribute(($context["config"] ?? null), "account_country", [])) {
            echo ", country";
        }
        echo " and your email address.
Also you have to agree to the terms presented below. If you have done so, your account ";
        // line 3
        if (twig_constant("USE_ACCOUNT_NAME")) {
            echo "name";
        } else {
            echo "number";
        }
        echo " will be shown on the following page and your account password will be sent to your email address along with further instructions. If you do not receive the email with your password, please check your spam filter.<br/><br/>
";
    }

    public function getTemplateName()
    {
        return "hint.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 3,  35 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "hint.html.twig", "D:\\xampp\\htdocs\\plugins\\account-create-hint\\hint.html.twig");
    }
}
