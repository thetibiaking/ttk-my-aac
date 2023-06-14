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

/* account.create_character.html.twig */
class __TwigTemplate_da85792f49dce1533a3bf7dc3fd531dfe7105af68b754a324e74237c4ff1ca34 extends \Twig\Template
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
        echo "Please choose a name";
        if ((twig_length_filter($this->env, $this->getAttribute(($context["config"] ?? null), "character_samples", [])) > 1)) {
            echo ", vocation";
        }
        // line 2
        if ((twig_length_filter($this->env, $this->getAttribute(($context["config"] ?? null), "character_towns", [])) > 1)) {
            echo ", town";
        }
        echo " and sex for your character as well as the game world on which you want the character to live. If you cannot think of any fantasy names, click on the link below the name field to get some suggestions for a name.
<br>
<br>
In any case the name must not violate the naming conventions stated in the <a href=\"?subtopic=rules\" target=\"_blank\">";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["config"] ?? null), "lua", []), "serverName", []), "html", null, true);
        echo " Rules</a>, or your character might get deleted or name locked.
";
        // line 6
        if ((twig_length_filter($this->env, $this->getAttribute(($context["account_logged"] ?? null), "getPlayersList", [], "method")) >= $this->getAttribute(($context["config"] ?? null), "characters_per_account", []))) {
            // line 7
            echo "<b><span style=\"color: red\"> You have maximum number of characters per account on your account. Delete one before you make new.</span></b>
";
        }
        // line 9
        echo "<br>
<br>
<br>

<form action=\"";
        // line 13
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getLink')->getCallable(), ["account/character/create"]), "html", null, true);
        echo "\" method=\"post\">
<input type=\"hidden\" name=\"save\" value=\"1\">

<div class=\"TableContainer\">
  <div class=\"CaptionContainer\">
    <div class=\"CaptionInnerContainer\"> <span class=\"CaptionEdgeLeftTop\" style=\"background-image:url(";
        // line 18
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/box-frame-edge.gif);\"></span> <span class=\"CaptionEdgeRightTop\" style=\"background-image:url(";
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/box-frame-edge.gif);\"></span> <span class=\"CaptionBorderTop\" style=\"background-image:url(";
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/table-headline-border.gif);\"></span> <span class=\"CaptionVerticalLeft\" style=\"background-image:url(";
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/box-frame-vertical.gif);\"></span>
      <div class=\"Text\">Create Character</div>
      <span class=\"CaptionVerticalRight\" style=\"background-image:url(";
        // line 20
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/box-frame-vertical.gif);\"></span> <span class=\"CaptionBorderBottom\" style=\"background-image:url(";
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/table-headline-border.gif);\"></span> <span class=\"CaptionEdgeLeftBottom\" style=\"background-image:url(";
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/box-frame-edge.gif);\"></span> <span class=\"CaptionEdgeRightBottom\" style=\"background-image:url(";
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/box-frame-edge.gif);\"></span> </div>
  </div>
  <table class=\"Table3\" cellpadding=\"0\" cellspacing=\"0\">
    <tbody>
      <tr>
        <td><div class=\"InnerTableContainer\">
            <table style=\"width:100%;\">
              <tbody>
                <tr>
                  <td><div class=\"TableContentContainer\">
                      <table class=\"TableContent\" width=\"100%\" style=\"border:1px solid #faf0d7;\">
                        <tbody>
                          <tr class=\"LabelH\">
                            <td style=\"width:50%;\"><span>Name</span></td>
                            <td><span>Sex</span></td>
                          </tr>
                          <tr class=\"Even\">
                            <td><input name=\"name\" id=\"character_name\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "\" size=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["config"] ?? null), "character_name_max_length", []), "html", null, true);
        echo "\" maxlength=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["config"] ?? null), "character_name_max_length", []), "html", null, true);
        echo "\" >
\t\t\t\t\t\t\t<img id=\"character_indicator\" src=\"images/global/general/";
        // line 38
        if (( !($context["save"] ?? null) || $this->getAttribute(($context["errors"] ?? null), "name", [], "any", true, true))) {
            echo "n";
        }
        echo "ok.gif\" />
                              <br>
                              <small><div id=\"character_error\">";
        // line 40
        if (( !($context["save"] ?? null) || $this->getAttribute(($context["errors"] ?? null), "name", [], "any", true, true))) {
            echo "Please enter your character name.";
        }
        echo "</div></small>
                            <td>
\t\t\t\t\t\t\t";
        // line 42
        $context["i"] = 0;
        // line 43
        echo "\t\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, $this->getAttribute(($context["config"] ?? null), "genders", []), true));
        foreach ($context['_seq'] as $context["id"] => $context["gender"]) {
            // line 44
            echo "\t\t\t\t\t\t\t";
            $context["i"] = (($context["i"] ?? null) + 1);
            // line 45
            echo "\t\t\t\t\t\t\t<input type=\"radio\" name=\"sex\" id=\"sex";
            echo twig_escape_filter($this->env, ($context["i"] ?? null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $context["id"], "html", null, true);
            echo "\"";
            if (( !(null === ($context["sex"] ?? null)) && (($context["sex"] ?? null) == $context["id"]))) {
                echo " checked=\"checked\"";
            }
            // line 46
            echo "\t\t\t\t\t\t\t><label for=\"sex";
            echo twig_escape_filter($this->env, ($context["i"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, $context["gender"]), "html", null, true);
            echo "</label><br/>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['gender'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "\t\t\t\t\t\t\t</td>
                          </tr>
                        </tbody>
                      </table>
                    </div></td>
                </tr>
                <tr>
                  <td><div class=\"TableContentContainer\">
                      <table class=\"TableContent\" width=\"100%\" style=\"border:1px solid #faf0d7;\">
                        <tbody>
                          <tr class=\"LabelH\">
                            <td colspan=\"2\">Game World</td>
                          </tr>
                          <tr id=\"filterbox_servertype\" style=\"\">
                            <td style=\"padding: 1em\"><b>Filter by game world category</b><br>
                              <div style=\"text-align: justify\">There are different game world categories to choose from. Regular game worlds are the default category, where all game features work as described in the <a href=\"https://www.tibia.com/gameguides/?subtopic=manual\">manual</a>.<br>
                                Experimental game worlds are special game worlds, which are sometimes used to test new features. Characters on these game worlds can be played normally, though they may be affected by restrictions during tests.<br>
                                For details on experimental worlds, please see the corresponding <a href=\"https://www.tibia.com/gameguides/?subtopic=manual\">manual</a> section.<br>
                                Finally, you can choose if you like to play on a game world which has been protected by BattlEye from the start. BattlEye is a software that prevents the use of cheat software. It is running in the background while you are playing Tibia. For more information, please have a look at our <a href=\"https://www.tibia.com/support/?subtopic=gethelp&amp;topicid=41\">FAQ</a>.<br>
                              </div>
                              <br>
                              <div align=\"center\">
                                <table>
                                  <tbody>
                                    <tr>
                                      <td valign=\"top\" style=\"border:0px;\"><script>CreateFilterOption('server_type', 'REG', 'Regular Game World')</script>
                                        <div class=\"OptionContainer\">
                                          <label for=\"option_server_type_REG\" id=\"option_server_type_REG_label\">
                                            <input type=\"radio\" name=\"server_type\" id=\"option_server_type_REG\" checked value=\"REG\">
                                            Regular Game World</label>
                                        </div>
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </div>
                              </td>
                          </tr>
                          <tr id=\"filterbox_location\" style=\"\">
                            <td style=\"padding: 1em\"><b>Filter by game world location</b><br>
                              <div style=\"text-align: justify\">For a good connection and with this the best possible gaming experience, please select a game world that is situated nearest your own location.</div>
                              <br>
                              <div align=\"center\">
                                <table>
                                  <tbody>
                                    <tr>
\t\t\t\t\t\t\t\t\t";
        // line 94
        if (($this->getAttribute($this->getAttribute(($context["config"] ?? null), "lua", []), "location", []) == "Europe")) {
            // line 95
            echo "                                      <td style=\"border:0px;width:20%;\">
                                        <div class=\"OptionContainer\">
                                          <label for=\"option_server_location_EUR\" id=\"option_server_location_EUR_label\"><img class=\"WorldLocationIcon\" src=\"";
            // line 97
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/global/content/option_server_location_eur.png\" alt=\"World Location\"><br>
                                            <input type=\"radio\" name=\"server_location\" id=\"option_server_location_EUR\" checked value=\"EUR\">
                                            Europe</label>
                                        </div>
                                        &nbsp;&nbsp;</td>
\t\t\t\t\t\t\t\t\t";
        }
        // line 103
        echo "\t\t\t\t\t\t\t\t\t";
        if (($this->getAttribute($this->getAttribute(($context["config"] ?? null), "lua", []), "location", []) == "North America")) {
            // line 104
            echo "                                      <td style=\"border:0px;width:20%;\">
                                        <div class=\"OptionContainer\">
                                          <label for=\"option_server_location_USA\" id=\"option_server_location_USA_label\"><img class=\"WorldLocationIcon\" src=\"";
            // line 106
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/global/content/option_server_location_usa.png\" alt=\"World Location\"><br>
                                            <input type=\"radio\" name=\"server_location\" id=\"option_server_location_USA\" checked value=\"USA\">
                                            North America</label>
                                        </div>
                                        &nbsp;&nbsp;</td>
\t\t\t\t\t\t\t\t\t";
        }
        // line 112
        echo "\t\t\t\t\t\t\t\t\t";
        if (($this->getAttribute($this->getAttribute(($context["config"] ?? null), "lua", []), "location", []) == "South America")) {
            // line 113
            echo "                                      <td style=\"border:0px;width:20%;\">
                                        <div class=\"OptionContainer\">
                                          <label for=\"option_server_location_BRA\" id=\"option_server_location_BRA_label\"><img class=\"WorldLocationIcon\" src=\"";
            // line 115
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/global/content/option_server_location_bra.png\" alt=\"World Location\"><br>
                                            <input type=\"radio\" name=\"server_location\" id=\"option_server_location_BRA\" checked value=\"BRA\">
                                            South&nbsp;America</label>
                                        </div>
                                        &nbsp;&nbsp;</td>
\t\t\t\t\t\t\t\t\t";
        }
        // line 121
        echo "                                    </tr>
                                  </tbody>
                                </table>
                              </div></td>
                          </tr>
                          <tr id=\"filterbox_pvp\" style=\"display: block;\">
                            <td style=\"padding: 1em\"><b>Filter by game world PvP type</b><br>
                              <div style=\"text-align: justify\">There are five different game world types that differ in the strictness of PvP rules. For a detailed description, please have a look at our <a href=\"\" target=\"_blank\">manual</a>. If you cannot decide for a game world type, we recommend playing on optional PvP.</div>
                              <br>
                              <div align=\"center\">
                                <table cellpadding=\"0\">
                                  <tbody>
                                    <tr>
\t\t\t\t\t\t\t\t\t";
        // line 134
        if (($this->getAttribute($this->getAttribute(($context["config"] ?? null), "lua", []), "worldType", []) == "no-pvp")) {
            // line 135
            echo "                                      <td width=\"33%\" align=\"center\" valign=\"top\" style=\"border:0px;\"><b>
                                        <div class=\"OptionContainer\">
                                          <label for=\"option_server_pvp_type_optional\" id=\"option_server_pvp_type_optional_label\"><img class=\"ServerInformationIcon\" src=\"";
            // line 137
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/global/content/option_server_pvp_type_optional.gif\" alt=\"Server PVP Type\" value=\"optional\"><br>
                                            <input type=\"radio\" name=\"server_pvp_type\" id=\"option_server_pvp_type_optional\" onclick=\"UpdateServerList(this)\" value=\"optional\">
                                            Optional PvP</label>
                                        </div>
                                        </b>&nbsp;&nbsp;Only if both sides agree, characters can be fought<br></td>
\t\t\t\t\t\t\t\t\t";
        }
        // line 143
        echo "\t\t\t\t\t\t\t\t\t";
        if (($this->getAttribute($this->getAttribute(($context["config"] ?? null), "lua", []), "worldType", []) == "pvp")) {
            // line 144
            echo "                                      <td width=\"33%\" align=\"center\" valign=\"top\" style=\"border:0px;\"><b>
                                        <div class=\"OptionContainer\">
                                          <label for=\"option_server_pvp_type_open\" id=\"option_server_pvp_type_open_label\"><img class=\"ServerInformationIcon\" src=\"";
            // line 146
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/global/content/option_server_pvp_type_open.gif\" alt=\"Server PVP Type\" value=\"open\"><br>
                                            <input type=\"radio\" name=\"server_pvp_type\" id=\"option_server_pvp_type_open\" onclick=\"UpdateServerList(this)\" value=\"open\">
                                            Open PvP</label>
                                        </div>
                                        </b>&nbsp;&nbsp;Killing other characters is possible, but restricted<br></td>
\t\t\t\t\t\t\t\t\t";
        }
        // line 152
        echo "\t\t\t\t\t\t\t\t\t";
        if (($this->getAttribute($this->getAttribute(($context["config"] ?? null), "lua", []), "worldType", []) == "pvp-enforced")) {
            // line 153
            echo "                                      <td width=\"33%\" align=\"center\" valign=\"top\" style=\"border:0px;\"><b>
                                        <div class=\"OptionContainer\">
                                          <label for=\"option_server_pvp_type_hardcore\" id=\"option_server_pvp_type_hardcore_label\" style=\"color: rgb(90, 40, 0);\"><img class=\"ServerInformationIcon\" src=\"";
            // line 155
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/global/content/option_server_pvp_type_hardcore.gif\" alt=\"Server PVP Type\" value=\"hardcore\"><br>
                                            <input type=\"radio\" name=\"server_pvp_type\" id=\"option_server_pvp_type_hardcore\" onclick=\"UpdateServerList(this)\" value=\"hardcore\">
                                            Hardcore PvP</label>
                                        </div>
                                        </b>&nbsp;&nbsp;Killing other characters is not restricted at all<br></td>
\t\t\t\t\t\t\t\t\t";
        }
        // line 161
        echo "                                    </tr>
                                    <tr>
\t\t\t\t\t\t\t\t\t";
        // line 163
        if (($this->getAttribute($this->getAttribute(($context["config"] ?? null), "lua", []), "worldType", []) == "retro")) {
            // line 164
            echo "                                      <td width=\"33%\" align=\"center\" valign=\"top\" style=\"border:0px;\"></td>
\t\t\t\t\t\t\t\t\t  
                                      <td width=\"33%\" align=\"center\" valign=\"top\" style=\"border:0px;\"><b> 
                                        <div class=\"OptionContainer\">
                                          <label for=\"option_server_pvp_type_retro\" id=\"option_server_pvp_type_retro_label\"><img class=\"ServerInformationIcon\" src=\"";
            // line 168
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/global/content/option_server_pvp_type_retro.gif\" alt=\"Server PVP Type\" value=\"retro\"><br>
                                            <input type=\"radio\" name=\"server_pvp_type\" id=\"option_server_pvp_type_retro\" onclick=\"UpdateServerList(this)\" value=\"retro\">
                                            Retro Open PvP</label>
                                        </div>
                                        </b> &nbsp;&nbsp;Killing other characters is possible, but restricted (old PvP rules)<br></td>
\t\t\t\t\t\t\t\t\t";
        }
        // line 174
        echo "\t\t\t\t\t\t\t\t\t";
        if (($this->getAttribute($this->getAttribute(($context["config"] ?? null), "lua", []), "worldType", []) == "retro-enforced")) {
            // line 175
            echo "                                      <td width=\"33%\" align=\"center\" valign=\"top\" style=\"border:0px;\"><b>
                                        <div class=\"OptionContainer\">
                                          <label for=\"option_server_pvp_type_retrohardcore\" id=\"option_server_pvp_type_retrohardcore_label\"><img class=\"ServerInformationIcon\" src=\"";
            // line 177
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/global/content/option_server_pvp_type_retrohardcore.gif\" alt=\"Server PVP Type\" value=\"retrohardcore\"><br>
                                            <input type=\"radio\" name=\"server_pvp_type\" id=\"option_server_pvp_type_retrohardcore\" onclick=\"UpdateServerList(this)\" value=\"retrohardcore\">
                                            Retro Hardcore PvP</label>
                                        </div>
                                        </b>&nbsp;&nbsp;Killing other characters is not restricted at all (old PvP rules)<br></td>
\t\t\t\t\t\t\t\t\t";
        }
        // line 183
        echo "                                    </tr>
                                  </tbody>
                                </table>
                              </div></td>
                          </tr>
                          <tr class=\"Even\">
                            <td colspan=\"2\"><table id=\"js_world_box\" width=\"100%\">
                                <tbody>
                                  <tr id=\"world_list_tr\">
                                    <td style=\"border-style: none\" align=\"center\">
                                      <div style=\"width: 15em; position: relative; text-align: left;\">
                                        <input type=\"radio\" name=\"world\" id=\"server_";
        // line 194
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["config"] ?? null), "lua", []), "serverName", []), "html", null, true);
        echo "\" value=\"server_";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["config"] ?? null), "lua", []), "serverName", []), "html", null, true);
        echo "\" checked>
                                        <label for=\"server_";
        // line 195
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["config"] ?? null), "lua", []), "serverName", []), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["config"] ?? null), "lua", []), "serverName", []), "html", null, true);
        echo "</label>
                                        <span style=\"position:relative;top:0px;margin-left:5px;\"><a href=\"\" target=\"_blank\"><span class=\"HelperDivIndicator\" onmouseover=\"ActivateHelperDiv(\$(this), '<b>BattlEye Protected Game World</b>', '<p>On this game world, BattlEye blocks cheats from the game. The game world has been protected by BattlEye since April 19, 2018.</p>', 'server_";
        // line 196
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["config"] ?? null), "lua", []), "serverName", []), "html", null, true);
        echo "_helper2');\" onmouseout=\"\$('#HelperDivContainer').hide();\"><img style=\"border:0px;\" src=\"";
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/icon_battleye.gif\" alt=\"special offer\"></span></a><span id=\"server_";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["config"] ?? null), "lua", []), "serverName", []), "html", null, true);
        echo "_helper2\"></span></span></div>
                                      &nbsp;<br></td>
                                  </tr>
                                </tbody>
                              </table>
                              </td>
                          </tr>
                        </tbody>
                      </table>
                    </div></td>
                </tr>
\t\t\t\t";
        // line 207
        if ((twig_length_filter($this->env, $this->getAttribute(($context["config"] ?? null), "character_samples", [])) > 1)) {
            // line 208
            echo "                <tr>
                  <td><div class=\"TableContentContainer\">
                      <table class=\"TableContent\" width=\"100%\" style=\"border:1px solid #faf0d7;\">
                        <tbody>
                          <tr class=\"LabelH\">
                            <td colspan=\"2\">Select your vocation</td>
                          </tr>
\t\t\t\t\t\t  <tr class=\"Even\">
                          ";
            // line 216
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["config"] ?? null), "character_samples", []));
            foreach ($context['_seq'] as $context["key"] => $context["sample_char"]) {
                // line 217
                echo "\t\t\t\t\t\t\t  <td>
\t\t\t\t\t\t\t\t  <input type=\"radio\" name=\"vocation\" id=\"vocation";
                // line 218
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\"
\t\t\t\t\t\t\t\t  ";
                // line 219
                if (( !(null === ($context["vocation"] ?? null)) && (($context["vocation"] ?? null) == $context["key"]))) {
                    echo " checked=\"checked\"";
                }
                echo ">
\t\t\t\t\t\t\t\t  <label for=\"vocation";
                // line 220
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["config"] ?? null), "vocations", [], "array"), $context["key"], [], "array"), "html", null, true);
                echo "</label>
\t\t\t\t\t\t\t  </td>
                          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['sample_char'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 223
            echo "\t\t\t\t\t\t  </tr>
                        </tbody>
                      </table>
                    </div></td>
                </tr>
\t\t\t\t";
        }
        // line 229
        echo "\t\t\t\t
\t\t\t\t";
        // line 230
        if ((twig_length_filter($this->env, $this->getAttribute(($context["config"] ?? null), "character_towns", [])) > 1)) {
            // line 231
            echo "\t\t\t\t<tr>
                  <td><div class=\"TableContentContainer\">
                      <table class=\"TableContent\" width=\"100%\" style=\"border:1px solid #faf0d7;\">
                        <tbody>
                          <tr class=\"LabelH\">
                            <td colspan=\"2\">Select your town</td>
                          </tr>
                          <tr class=\"Odd\">
                          ";
            // line 239
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["config"] ?? null), "character_towns", []));
            foreach ($context['_seq'] as $context["_key"] => $context["town_id"]) {
                // line 240
                echo "\t\t\t\t\t\t\t  <td>
\t\t\t\t\t\t\t\t  <input type=\"radio\" name=\"town\" id=\"town";
                // line 241
                echo twig_escape_filter($this->env, $context["town_id"], "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, $context["town_id"], "html", null, true);
                echo "\"
\t\t\t\t\t\t\t\t  ";
                // line 242
                if (( !(null === ($context["town"] ?? null)) && (($context["town"] ?? null) == $context["town_id"]))) {
                    echo " checked=\"checked\"";
                }
                echo ">
\t\t\t\t\t\t\t\t  <label for=\"town";
                // line 243
                echo twig_escape_filter($this->env, $context["town_id"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["config"] ?? null), "towns", []), $context["town_id"], [], "array"), "html", null, true);
                echo "</label>
\t\t\t\t\t\t\t  </td>
                          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['town_id'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 246
            echo "                          </tr>
                        </tbody>
                      </table>
                    </div></td>
                </tr>
\t\t\t\t";
        }
        // line 252
        echo "\t\t\t\t
              </tbody>
            </table>
          </div></td>
      </tr>
    </tbody>
  </table>
</div>




\t<br/>
\t<table style=\"width:100%;\">
\t\t<tr align=\"center\">
\t\t\t<td>
\t\t\t\t<table border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td style=\"border:0px;\">
\t\t\t\t\t\t\t";
        // line 271
        echo twig_include($this->env, $context, "buttons.submit.html.twig");
        echo "
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
</form>
\t\t\t\t</table>
\t\t\t</td>
\t\t\t<td>
\t\t\t\t<table border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
\t\t\t\t\t<form action=\"";
        // line 279
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getLink')->getCallable(), ["account/manage"]), "html", null, true);
        echo "\" method=\"post\">
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td style=\"border:0px;\">
\t\t\t\t\t\t\t\t";
        // line 282
        echo twig_include($this->env, $context, "buttons.back.html.twig");
        echo "
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</form>
\t\t\t\t</table>
\t\t\t</td>
\t\t</tr>
\t</table>
<script type=\"text/javascript\" src=\"tools/check_name.js\"></script>";
    }

    public function getTemplateName()
    {
        return "account.create_character.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  534 => 282,  528 => 279,  517 => 271,  496 => 252,  488 => 246,  477 => 243,  471 => 242,  465 => 241,  462 => 240,  458 => 239,  448 => 231,  446 => 230,  443 => 229,  435 => 223,  424 => 220,  418 => 219,  412 => 218,  409 => 217,  405 => 216,  395 => 208,  393 => 207,  375 => 196,  369 => 195,  363 => 194,  350 => 183,  341 => 177,  337 => 175,  334 => 174,  325 => 168,  319 => 164,  317 => 163,  313 => 161,  304 => 155,  300 => 153,  297 => 152,  288 => 146,  284 => 144,  281 => 143,  272 => 137,  268 => 135,  266 => 134,  251 => 121,  242 => 115,  238 => 113,  235 => 112,  226 => 106,  222 => 104,  219 => 103,  210 => 97,  206 => 95,  204 => 94,  156 => 48,  145 => 46,  136 => 45,  133 => 44,  128 => 43,  126 => 42,  119 => 40,  112 => 38,  104 => 37,  78 => 20,  67 => 18,  59 => 13,  53 => 9,  49 => 7,  47 => 6,  43 => 5,  35 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "account.create_character.html.twig", "D:\\xampp\\htdocs\\system\\templates\\account.create_character.html.twig");
    }
}
