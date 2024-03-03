<style>
    .discord{
        width: 180px;
        height: 110px;
    }
    .discord_header{
        height: 45px;
        width: 180px;
        background-image: url('templates/tibiacom/images/themeboxes/box_top.png');
        font-family: Verdana;
        font-weight: bold;
        color: #d5c3af;
        line-height: 65px;
    }
    .discord_bottom{
        height: 30px;
        width: 180px;
        margin-top: -5px;
        background-image: url('templates/tibiacom/images/themeboxes/box-bottom.gif');
    }
    .discord_content{
        padding: 0px 10px;
        width: 160px;
        height: 120px;
        background-image: url('https://static.tibia.com/images/global/themeboxes/networks/networksbox.png');
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .discord_button{
        height: 30px;
        width: 148px;
        border: 0;
        background: url('templates/tibiacom/images/themeboxes/button.png');
        font-family: Verdana;
        font-weight: 100;
        color: #d5c3af;
        font-size: 12px;
        cursor: pointer;
    }
    .discord_button:hover{
        background: url('templates/tibiacom/images/themeboxes/button_over.png');
        color: #fff;
    }
</style>
<div class="discord">
   
    <div class="discord_content">
        
    
        

        <a href="<?php echo $config['discord_link']; ?>"><div class="BigButton" style="background-image:url(<?php echo $template_path ?>/images/global/buttons/button.png); width: 142px; height: 34px;"><div onmouseover="MouseOverBigButton(this);" onmouseout="MouseOutBigButton(this);"><div class="BigButtonOver" style="background-image: url(<?php echo $template_path ?>/images/global/buttons/button_hover.png); visibility: hidden;"></div><input class="BigButtonText" style="width: 142px; height: 34px;" type="button" value="Discord"></div></div></a>

            
        </a>
    </div>
    <div class="discord_bottom"></div>
</div>
