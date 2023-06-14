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

/* library/afflictedstrider.html.twig */
class __TwigTemplate_0db69991de48cdb6a0b03d25b6a284530cad22628b55d2b3f6e78728006f0792 extends \Twig\Template
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
        echo "<div style=\"position: relative; height: 15px; width: 100%;\"> <a style=\"float: right;\" href=\"?subtopic=creatures&race=amazon\">next <img src=\"images/arrow_right.gif\" width=\"15\" height=\"11\" border=\"0\"/></a> <a style=\"position: absolute;\" href=\"?subtopic=creatures&race=adultgoanna\"><img src=\"images/arrow_left.gif\" width=\"15\" height=\"11\" border=\"0\"/> previous</a> <div style=\"position: absolute; width: 80%; margin-left: 10%; margin-right: 10%; text-align: center;\"><a href=\"?subtopic=creatures\"><img src=\"images/arrow_up.gif\" width=\"11\" height=\"15\" border=\"0\"/> back</a></div></div><div style=\"position: relative; top: 25px; clear: both; \"><div style=\"height: 64px; margin-bottom: 5px;\"> <h2 style=\"float: right;\">Afflicted Striders</h2> <img src=\"images/library/afflictedstrider.gif\"/></div><div style=\"margin-bottom: 35px; clear: both;\"> <p>The afflicted striders are purposely infected with a rare parasite that significantly alters their physiology and psyche. It mainly seems to make them more aggressive and physically capable, though it also significantly reduces their life span. Those Below always showed little restraint in using such methods in disregard of their minions but such tactics and with them the deployment of afflicted striders have become more common recently. This might hint at a shift of leadership or strategy.<br/>The afflicted striders behave even more violently und unforeseeable under the influence of the parasites, yet they seem strangely more prone to acts of violence aimed purposely to be discarded as the effect of raised aggression. The suggestion that the tiny parasites are raising the striders intelligence or are intelligent themselves and acting on purpose seems a bit farfetched though. A more recent theory suggests that the parasites make the striders more susceptible to the influence of creatures such as the feared brainstealer. This would explain their existence in certain battle forces while they are lacking in others. A further, more daring theory even suggests that the small parasites are part of a hive mind and that there is one or more master parasites hidden in the depths of Those Below territory that mastermind their control. This would still leave unexplained why they are spread amongst forces in such unequal manner and the efficiency of said method would be questionable at best. Even the inflicted striders are obviously only beasts that primarily follow their basic impulses and don't express any higher strategy of some kind. Still they are a dangerous foe and even disjointed from any army are a threat to any area that they are encountered in.<br/>Though the parasites seem only to infest striders, everyone who loots items from such a creature should clean them thoroughly.</p> <p>Afflicted Striders have 10000 hitpoints. They cannot be paralysed. Moreover, they are strong against death, earth and physical damage. On the other hand, they are weak against fire damage. These creatures can neither be summoned nor convinced. In addition, they are able to sense invisible creatures.</p> <p>Afflicted Striders yield 5700 experience points. They carry afflicted strider worms, platinum coins and sometimes other items with them.</p> </div></div>";
    }

    public function getTemplateName()
    {
        return "library/afflictedstrider.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "library/afflictedstrider.html.twig", "D:\\xampp\\htdocs\\system\\templates\\library\\afflictedstrider.html.twig");
    }
}