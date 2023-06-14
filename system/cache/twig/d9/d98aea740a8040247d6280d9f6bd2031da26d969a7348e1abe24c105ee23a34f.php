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

/* mail.account.verify.html.twig */
class __TwigTemplate_fec660e71014475733f77d96d19804abdc2370246dc08a0b0196613bb859926f extends \Twig\Template
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
        echo "Hello!<br/>
<br/>
Thank you for registering on ";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["config"] ?? null), "lua", []), "serverName", []), "html", null, true);
        echo "!<br/>
<br/>
Here are the details of your account:<br/>
Account ";
        // line 6
        if (twig_constant("USE_ACCOUNT_NAME")) {
            echo "Name";
        } else {
            echo "Number";
        }
        echo ": ";
        echo twig_escape_filter($this->env, ($context["account"] ?? null), "html", null, true);
        echo "<br/>
Password: ************ (hidden for security reasons)<br/>
<br/>
To verify your email address please click the link below:<br/>
";
        // line 10
        echo ($context["verify_url"] ?? null);
        echo "<br/>
If you haven't registered on ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["config"] ?? null), "lua", []), "serverName", []), "html", null, true);
        echo " please ignore this email.";
    }

    public function getTemplateName()
    {
        return "mail.account.verify.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 11,  53 => 10,  40 => 6,  34 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "mail.account.verify.html.twig", "D:\\xampp\\htdocs\\system\\templates\\mail.account.verify.html.twig");
    }
}
