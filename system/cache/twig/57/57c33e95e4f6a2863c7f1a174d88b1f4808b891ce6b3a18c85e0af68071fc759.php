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

/* error_box.html.twig */
class __TwigTemplate_6908cd6631f614e4d110cad52a09a76d127e8d83d5dd10e441ea89d9b36cccc1 extends \Twig\Template
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
        echo "<div class=\"SmallBox\" >
\t<div class=\"MessageContainer\">
\t\t<div class=\"BoxFrameHorizontal\" style=\"background-image:url(";
        // line 3
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/box-frame-horizontal.gif);\"></div>
\t\t<div class=\"BoxFrameEdgeLeftTop\" style=\"background-image:url(";
        // line 4
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/box-frame-edge.gif);\"></div>
\t\t<div class=\"BoxFrameEdgeRightTop\" style=\"background-image:url(";
        // line 5
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/box-frame-edge.gif);\"></div>
\t\t<div class=\"ErrorMessage\">
\t\t\t<div class=\"BoxFrameVerticalLeft\" style=\"background-image:url(";
        // line 7
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/box-frame-vertical.gif);\"></div>
\t\t\t<div class=\"BoxFrameVerticalRight\" style=\"background-image:url(";
        // line 8
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/box-frame-vertical.gif);\"></div>
\t\t\t<div class=\"AttentionSign\" style=\"background-image:url(";
        // line 9
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/attentionsign.gif);\"></div>
\t\t\t<b>The Following Errors Have Occurred:</b><br/>
\t\t\t";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 12
            echo "\t\t\t<li>";
            echo strip_tags($context["error"], "<b>");
            echo "</li>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "\t\t</div>
\t\t<div class=\"BoxFrameHorizontal\" style=\"background-image:url(";
        // line 15
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/box-frame-horizontal.gif);\"></div>
\t\t<div class=\"BoxFrameEdgeRightBottom\" style=\"background-image:url(";
        // line 16
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/box-frame-edge.gif);\"></div>
\t\t<div class=\"BoxFrameEdgeLeftBottom\" style=\"background-image:url(";
        // line 17
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/box-frame-edge.gif);\"></div>
\t</div>
</div>
<br/>";
    }

    public function getTemplateName()
    {
        return "error_box.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 17,  80 => 16,  76 => 15,  73 => 14,  64 => 12,  60 => 11,  55 => 9,  51 => 8,  47 => 7,  42 => 5,  38 => 4,  34 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "error_box.html.twig", "D:\\xampp\\htdocs\\system\\templates\\error_box.html.twig");
    }
}
