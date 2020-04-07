<?php
/* Smarty version 3.1.30, created on 2017-06-23 11:19:06
  from "D:\wamp64\www\vr\uu\core\common\smarty\demo\templates\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_594cf92a5eeed1_96506401',
  'has_nocache_code' => true,
  'file_dependency' => 
  array (
    '1ef7ec89aa9d4e9f3332292d1a318e1a2cf73a7c' => 
    array (
      0 => 'D:\\wamp64\\www\\vr\\uu\\core\\common\\smarty\\demo\\templates\\index.tpl',
      1 => 1470595609,
      2 => 'file',
    ),
    'da641710075519494d1532392b9f1d659df7210f' => 
    array (
      0 => 'D:\\wamp64\\www\\vr\\uu\\core\\common\\smarty\\demo\\templates\\header.tpl',
      1 => 1470595609,
      2 => 'file',
    ),
    'a0688e09db5e9d98ad3eef2fbe9634913184d5f7' => 
    array (
      0 => 'D:\\wamp64\\www\\vr\\uu\\core\\common\\smarty\\demo\\templates\\footer.tpl',
      1 => 1470595609,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 120,
),true)) {
function content_594cf92a5eeed1_96506401 (Smarty_Internal_Template $_smarty_tpl) {
?>

<HTML>
<HEAD>
<TITLE>foo - <?php echo $_smarty_tpl->tpl_vars['Name']->value;?>
</TITLE>
</HEAD>
<BODY bgcolor="#ffffff">


<PRE>


    <b>        
        Title: Welcome To Smarty!
        </b>
    The current date and time is 2017-06-23 11:19:06

    The value of global assigned variable $SCRIPT_NAME is /vr/uu/core/common/smarty/demo/index.php

    Example of accessing server environment variable SERVER_NAME: 127.0.0.1

    The value of {$Name} is <b><?php echo $_smarty_tpl->tpl_vars['Name']->value;?>
</b>

variable modifier example of {$Name|upper}

<b><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['Name']->value, 'UTF-8');?>
</b>


An example of a section loop:

            none
    
    An example of section looped key values:

        <p>

        testing strip tags
        <table border=0><tr><td><A HREF="/vr/uu/core/common/smarty/demo/index.php"><font color="red">This is a test </font></A></td></tr></table>

</PRE>

This is an example of the html_select_date function:

<form>
    <select name="Date_Month">
<option value="01">January</option>
<option value="02">February</option>
<option value="03">March</option>
<option value="04">April</option>
<option value="05">May</option>
<option value="06" selected="selected">June</option>
<option value="07">July</option>
<option value="08">August</option>
<option value="09">September</option>
<option value="10">October</option>
<option value="11">November</option>
<option value="12">December</option>
</select>
<select name="Date_Day">
<option value="1">01</option>
<option value="2">02</option>
<option value="3">03</option>
<option value="4">04</option>
<option value="5">05</option>
<option value="6">06</option>
<option value="7">07</option>
<option value="8">08</option>
<option value="9">09</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23" selected="selected">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option>
</select>
<select name="Date_Year">
<option value="1998">1998</option>
<option value="1999">1999</option>
<option value="2000">2000</option>
<option value="2001">2001</option>
<option value="2002">2002</option>
<option value="2003">2003</option>
<option value="2004">2004</option>
<option value="2005">2005</option>
<option value="2006">2006</option>
<option value="2007">2007</option>
<option value="2008">2008</option>
<option value="2009">2009</option>
<option value="2010">2010</option>
</select>
</form>

This is an example of the html_select_time function:

<form>
    <select name="Time_Hour">
<option value="01">01</option>
<option value="02">02</option>
<option value="03">03</option>
<option value="04">04</option>
<option value="05">05</option>
<option value="06">06</option>
<option value="07">07</option>
<option value="08">08</option>
<option value="09">09</option>
<option value="10">10</option>
<option value="11" selected="selected">11</option>
<option value="12">12</option>
</select>
<select name="Time_Minute">
<option value="00">00</option>
<option value="01">01</option>
<option value="02">02</option>
<option value="03">03</option>
<option value="04">04</option>
<option value="05">05</option>
<option value="06">06</option>
<option value="07">07</option>
<option value="08">08</option>
<option value="09">09</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19" selected="selected">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option>
<option value="32">32</option>
<option value="33">33</option>
<option value="34">34</option>
<option value="35">35</option>
<option value="36">36</option>
<option value="37">37</option>
<option value="38">38</option>
<option value="39">39</option>
<option value="40">40</option>
<option value="41">41</option>
<option value="42">42</option>
<option value="43">43</option>
<option value="44">44</option>
<option value="45">45</option>
<option value="46">46</option>
<option value="47">47</option>
<option value="48">48</option>
<option value="49">49</option>
<option value="50">50</option>
<option value="51">51</option>
<option value="52">52</option>
<option value="53">53</option>
<option value="54">54</option>
<option value="55">55</option>
<option value="56">56</option>
<option value="57">57</option>
<option value="58">58</option>
<option value="59">59</option>
</select>
<select name="Time_Second">
<option value="00">00</option>
<option value="01">01</option>
<option value="02">02</option>
<option value="03">03</option>
<option value="04">04</option>
<option value="05">05</option>
<option value="06" selected="selected">06</option>
<option value="07">07</option>
<option value="08">08</option>
<option value="09">09</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option>
<option value="32">32</option>
<option value="33">33</option>
<option value="34">34</option>
<option value="35">35</option>
<option value="36">36</option>
<option value="37">37</option>
<option value="38">38</option>
<option value="39">39</option>
<option value="40">40</option>
<option value="41">41</option>
<option value="42">42</option>
<option value="43">43</option>
<option value="44">44</option>
<option value="45">45</option>
<option value="46">46</option>
<option value="47">47</option>
<option value="48">48</option>
<option value="49">49</option>
<option value="50">50</option>
<option value="51">51</option>
<option value="52">52</option>
<option value="53">53</option>
<option value="54">54</option>
<option value="55">55</option>
<option value="56">56</option>
<option value="57">57</option>
<option value="58">58</option>
<option value="59">59</option>
</select>
<select name="Time_Meridian">
<option value="am" selected="selected">AM</option>
<option value="pm">PM</option>
</select>
</form>

This is an example of the html_options function:

<form>
    <select name=states>
        <br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: option_values in D:\wamp64\www\vr\uu\core\common\smarty\demo\templates_c\1ef7ec89aa9d4e9f3332292d1a318e1a2cf73a7c_0.file.index.tpl.cache.php on line <i>154</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0007</td><td bgcolor='#eeeeec' align='right'>236872</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='D:\wamp64\www\vr\uu\core\common\smarty\demo\index.php' bgcolor='#eeeeec'>...\index.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0103</td><td bgcolor='#eeeeec' align='right'>813872</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='D:\wamp64\www\vr\uu\core\common\smarty\demo\index.php' bgcolor='#eeeeec'>...\index.php<b>:</b>18</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0103</td><td bgcolor='#eeeeec' align='right'>814784</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='D:\wamp64\www\vr\uu\core\common\smarty\libs\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>...\smarty_internal_templatebase.php<b>:</b>114</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0136</td><td bgcolor='#eeeeec' align='right'>989288</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='D:\wamp64\www\vr\uu\core\common\smarty\libs\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>...\smarty_internal_templatebase.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0160</td><td bgcolor='#eeeeec' align='right'>1127248</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='D:\wamp64\www\vr\uu\core\common\smarty\libs\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>...\smarty_internal_template.php<b>:</b>179</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0166</td><td bgcolor='#eeeeec' align='right'>1167904</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='D:\wamp64\www\vr\uu\core\common\smarty\libs\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>...\smarty_template_cached.php<b>:</b>142</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0178</td><td bgcolor='#eeeeec' align='right'>1249824</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='D:\wamp64\www\vr\uu\core\common\smarty\libs\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>...\smarty_internal_runtime_updatecache.php<b>:</b>89</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.0184</td><td bgcolor='#eeeeec' align='right'>1309240</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='D:\wamp64\www\vr\uu\core\common\smarty\libs\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>...\smarty_template_compiled.php<b>:</b>170</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.0184</td><td bgcolor='#eeeeec' align='right'>1311200</td><td bgcolor='#eeeeec'>content_594cf1858fb548_68830874(  )</td><td title='D:\wamp64\www\vr\uu\core\common\smarty\libs\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>...\smarty_template_resource_base.php<b>:</b>128</td></tr>
</table></font>
<br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Trying to get property of non-object in D:\wamp64\www\vr\uu\core\common\smarty\demo\templates_c\1ef7ec89aa9d4e9f3332292d1a318e1a2cf73a7c_0.file.index.tpl.cache.php on line <i>154</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0007</td><td bgcolor='#eeeeec' align='right'>236872</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='D:\wamp64\www\vr\uu\core\common\smarty\demo\index.php' bgcolor='#eeeeec'>...\index.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0103</td><td bgcolor='#eeeeec' align='right'>813872</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='D:\wamp64\www\vr\uu\core\common\smarty\demo\index.php' bgcolor='#eeeeec'>...\index.php<b>:</b>18</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0103</td><td bgcolor='#eeeeec' align='right'>814784</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='D:\wamp64\www\vr\uu\core\common\smarty\libs\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>...\smarty_internal_templatebase.php<b>:</b>114</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0136</td><td bgcolor='#eeeeec' align='right'>989288</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='D:\wamp64\www\vr\uu\core\common\smarty\libs\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>...\smarty_internal_templatebase.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0160</td><td bgcolor='#eeeeec' align='right'>1127248</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='D:\wamp64\www\vr\uu\core\common\smarty\libs\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>...\smarty_internal_template.php<b>:</b>179</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0166</td><td bgcolor='#eeeeec' align='right'>1167904</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='D:\wamp64\www\vr\uu\core\common\smarty\libs\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>...\smarty_template_cached.php<b>:</b>142</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0178</td><td bgcolor='#eeeeec' align='right'>1249824</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='D:\wamp64\www\vr\uu\core\common\smarty\libs\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>...\smarty_internal_runtime_updatecache.php<b>:</b>89</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.0184</td><td bgcolor='#eeeeec' align='right'>1309240</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='D:\wamp64\www\vr\uu\core\common\smarty\libs\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>...\smarty_template_compiled.php<b>:</b>170</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.0184</td><td bgcolor='#eeeeec' align='right'>1311200</td><td bgcolor='#eeeeec'>content_594cf1858fb548_68830874(  )</td><td title='D:\wamp64\www\vr\uu\core\common\smarty\libs\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>...\smarty_template_resource_base.php<b>:</b>128</td></tr>
</table></font>
<br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: option_selected in D:\wamp64\www\vr\uu\core\common\smarty\demo\templates_c\1ef7ec89aa9d4e9f3332292d1a318e1a2cf73a7c_0.file.index.tpl.cache.php on line <i>154</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0007</td><td bgcolor='#eeeeec' align='right'>236872</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='D:\wamp64\www\vr\uu\core\common\smarty\demo\index.php' bgcolor='#eeeeec'>...\index.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0103</td><td bgcolor='#eeeeec' align='right'>813872</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='D:\wamp64\www\vr\uu\core\common\smarty\demo\index.php' bgcolor='#eeeeec'>...\index.php<b>:</b>18</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0103</td><td bgcolor='#eeeeec' align='right'>814784</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='D:\wamp64\www\vr\uu\core\common\smarty\libs\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>...\smarty_internal_templatebase.php<b>:</b>114</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0136</td><td bgcolor='#eeeeec' align='right'>989288</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='D:\wamp64\www\vr\uu\core\common\smarty\libs\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>...\smarty_internal_templatebase.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0160</td><td bgcolor='#eeeeec' align='right'>1127248</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='D:\wamp64\www\vr\uu\core\common\smarty\libs\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>...\smarty_internal_template.php<b>:</b>179</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0166</td><td bgcolor='#eeeeec' align='right'>1167904</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='D:\wamp64\www\vr\uu\core\common\smarty\libs\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>...\smarty_template_cached.php<b>:</b>142</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0178</td><td bgcolor='#eeeeec' align='right'>1249824</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='D:\wamp64\www\vr\uu\core\common\smarty\libs\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>...\smarty_internal_runtime_updatecache.php<b>:</b>89</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.0184</td><td bgcolor='#eeeeec' align='right'>1309240</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='D:\wamp64\www\vr\uu\core\common\smarty\libs\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>...\smarty_template_compiled.php<b>:</b>170</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.0184</td><td bgcolor='#eeeeec' align='right'>1311200</td><td bgcolor='#eeeeec'>content_594cf1858fb548_68830874(  )</td><td title='D:\wamp64\www\vr\uu\core\common\smarty\libs\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>...\smarty_template_resource_base.php<b>:</b>128</td></tr>
</table></font>
<br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Trying to get property of non-object in D:\wamp64\www\vr\uu\core\common\smarty\demo\templates_c\1ef7ec89aa9d4e9f3332292d1a318e1a2cf73a7c_0.file.index.tpl.cache.php on line <i>154</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0007</td><td bgcolor='#eeeeec' align='right'>236872</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='D:\wamp64\www\vr\uu\core\common\smarty\demo\index.php' bgcolor='#eeeeec'>...\index.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0103</td><td bgcolor='#eeeeec' align='right'>813872</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='D:\wamp64\www\vr\uu\core\common\smarty\demo\index.php' bgcolor='#eeeeec'>...\index.php<b>:</b>18</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0103</td><td bgcolor='#eeeeec' align='right'>814784</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='D:\wamp64\www\vr\uu\core\common\smarty\libs\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>...\smarty_internal_templatebase.php<b>:</b>114</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0136</td><td bgcolor='#eeeeec' align='right'>989288</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='D:\wamp64\www\vr\uu\core\common\smarty\libs\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>...\smarty_internal_templatebase.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0160</td><td bgcolor='#eeeeec' align='right'>1127248</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='D:\wamp64\www\vr\uu\core\common\smarty\libs\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>...\smarty_internal_template.php<b>:</b>179</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0166</td><td bgcolor='#eeeeec' align='right'>1167904</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='D:\wamp64\www\vr\uu\core\common\smarty\libs\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>...\smarty_template_cached.php<b>:</b>142</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0178</td><td bgcolor='#eeeeec' align='right'>1249824</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='D:\wamp64\www\vr\uu\core\common\smarty\libs\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>...\smarty_internal_runtime_updatecache.php<b>:</b>89</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.0184</td><td bgcolor='#eeeeec' align='right'>1309240</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='D:\wamp64\www\vr\uu\core\common\smarty\libs\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>...\smarty_template_compiled.php<b>:</b>170</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.0184</td><td bgcolor='#eeeeec' align='right'>1311200</td><td bgcolor='#eeeeec'>content_594cf1858fb548_68830874(  )</td><td title='D:\wamp64\www\vr\uu\core\common\smarty\libs\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>...\smarty_template_resource_base.php<b>:</b>128</td></tr>
</table></font>
<br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: option_output in D:\wamp64\www\vr\uu\core\common\smarty\demo\templates_c\1ef7ec89aa9d4e9f3332292d1a318e1a2cf73a7c_0.file.index.tpl.cache.php on line <i>154</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0007</td><td bgcolor='#eeeeec' align='right'>236872</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='D:\wamp64\www\vr\uu\core\common\smarty\demo\index.php' bgcolor='#eeeeec'>...\index.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0103</td><td bgcolor='#eeeeec' align='right'>813872</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='D:\wamp64\www\vr\uu\core\common\smarty\demo\index.php' bgcolor='#eeeeec'>...\index.php<b>:</b>18</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0103</td><td bgcolor='#eeeeec' align='right'>814784</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='D:\wamp64\www\vr\uu\core\common\smarty\libs\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>...\smarty_internal_templatebase.php<b>:</b>114</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0136</td><td bgcolor='#eeeeec' align='right'>989288</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='D:\wamp64\www\vr\uu\core\common\smarty\libs\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>...\smarty_internal_templatebase.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0160</td><td bgcolor='#eeeeec' align='right'>1127248</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='D:\wamp64\www\vr\uu\core\common\smarty\libs\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>...\smarty_internal_template.php<b>:</b>179</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0166</td><td bgcolor='#eeeeec' align='right'>1167904</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='D:\wamp64\www\vr\uu\core\common\smarty\libs\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>...\smarty_template_cached.php<b>:</b>142</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0178</td><td bgcolor='#eeeeec' align='right'>1249824</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='D:\wamp64\www\vr\uu\core\common\smarty\libs\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>...\smarty_internal_runtime_updatecache.php<b>:</b>89</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.0184</td><td bgcolor='#eeeeec' align='right'>1309240</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='D:\wamp64\www\vr\uu\core\common\smarty\libs\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>...\smarty_template_compiled.php<b>:</b>170</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.0184</td><td bgcolor='#eeeeec' align='right'>1311200</td><td bgcolor='#eeeeec'>content_594cf1858fb548_68830874(  )</td><td title='D:\wamp64\www\vr\uu\core\common\smarty\libs\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>...\smarty_template_resource_base.php<b>:</b>128</td></tr>
</table></font>
<br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Trying to get property of non-object in D:\wamp64\www\vr\uu\core\common\smarty\demo\templates_c\1ef7ec89aa9d4e9f3332292d1a318e1a2cf73a7c_0.file.index.tpl.cache.php on line <i>154</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0007</td><td bgcolor='#eeeeec' align='right'>236872</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='D:\wamp64\www\vr\uu\core\common\smarty\demo\index.php' bgcolor='#eeeeec'>...\index.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0103</td><td bgcolor='#eeeeec' align='right'>813872</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='D:\wamp64\www\vr\uu\core\common\smarty\demo\index.php' bgcolor='#eeeeec'>...\index.php<b>:</b>18</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0103</td><td bgcolor='#eeeeec' align='right'>814784</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='D:\wamp64\www\vr\uu\core\common\smarty\libs\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>...\smarty_internal_templatebase.php<b>:</b>114</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0136</td><td bgcolor='#eeeeec' align='right'>989288</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='D:\wamp64\www\vr\uu\core\common\smarty\libs\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>...\smarty_internal_templatebase.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0160</td><td bgcolor='#eeeeec' align='right'>1127248</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='D:\wamp64\www\vr\uu\core\common\smarty\libs\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>...\smarty_internal_template.php<b>:</b>179</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0166</td><td bgcolor='#eeeeec' align='right'>1167904</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='D:\wamp64\www\vr\uu\core\common\smarty\libs\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>...\smarty_template_cached.php<b>:</b>142</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0178</td><td bgcolor='#eeeeec' align='right'>1249824</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='D:\wamp64\www\vr\uu\core\common\smarty\libs\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>...\smarty_internal_runtime_updatecache.php<b>:</b>89</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.0184</td><td bgcolor='#eeeeec' align='right'>1309240</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='D:\wamp64\www\vr\uu\core\common\smarty\libs\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>...\smarty_template_compiled.php<b>:</b>170</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.0184</td><td bgcolor='#eeeeec' align='right'>1311200</td><td bgcolor='#eeeeec'>content_594cf1858fb548_68830874(  )</td><td title='D:\wamp64\www\vr\uu\core\common\smarty\libs\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>...\smarty_template_resource_base.php<b>:</b>128</td></tr>
</table></font>

    </select>
</form>

</BODY>
</HTML>

<?php }
}
