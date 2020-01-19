<?php
/* Smarty version 3.1.34-dev-7, created on 2020-01-19 20:20:38
  from 'E:\www\4um\server_global\public_html\templates\default\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e24ba16cb1320_46417685',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1af5633bcfc3d7fe069ad2d8a922e8009575acfa' => 
    array (
      0 => 'E:\\www\\4um\\server_global\\public_html\\templates\\default\\header.tpl',
      1 => 1579135944,
      2 => 'file',
    ),
    '924e384fd949374841c4993170f4a2158588fbd0' => 
    array (
      0 => 'E:\\www\\4um\\server_global\\public_html\\templates\\default\\menu.tpl',
      1 => 1579131389,
      2 => 'file',
    ),
    '14bfb3bdadb0dc9fbd4973870a1835431c2e01c0' => 
    array (
      0 => 'E:\\www\\4um\\server_global\\public_html\\templates\\default\\container.start.tpl',
      1 => 1578601905,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 120,
),true)) {
function content_5e24ba16cb1320_46417685 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>

<html lang="pl">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>4um Engine - Profil tester2</title>
<meta name="description" content=""/>



<style type="text/css">
			article, aside, details, figcaption, figure, footer, header, hgroup, nav, section{display:block;}
audio, canvas, video{display:inline-block;*display:inline;*zoom:1;}
audio:not([controls]){display:none;}
html{font-size:100%;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;}
a:focus{outline:thin dotted #333;outline:5px auto -webkit-focus-ring-color;outline-offset:-2px;}
a:hover, a:active{outline:0;}
sub, sup{position:relative;font-size:75%;line-height:0;vertical-align:baseline;}
sup{top:-0.5em;}
sub{bottom:-0.25em;}
img{max-width:100%;width:auto \9;height:auto;vertical-align:middle;border:0;-ms-interpolation-mode:bicubic;}
#map_canvas img, .google-maps img{max-width:none;}
button, input, select, textarea{margin:0;font-size:100%;vertical-align:middle;}
button, input{*overflow:visible;line-height:normal;}
button::-moz-focus-inner, input::-moz-focus-inner{padding:0;border:0;}
button, html input[type="button"], input[type="reset"], input[type="submit"]{-webkit-appearance:button;cursor:pointer;}
label, select, button, input[type="button"], input[type="reset"], input[type="submit"], input[type="radio"], input[type="checkbox"]{cursor:pointer;}
input[type="search"]{-webkit-box-sizing:content-box;-moz-box-sizing:content-box;box-sizing:content-box;-webkit-appearance:textfield;}
input[type="search"]::-webkit-search-decoration, input[type="search"]::-webkit-search-cancel-button{-webkit-appearance:none;}
textarea{overflow:auto;vertical-align:top;}
@media print{*{text-shadow:none !important;color:#000 !important;background:transparent !important;box-shadow:none !important;}
a, a:visited{text-decoration:underline;}
a[href]:after{content:" (" attr(href) ")";}
abbr[title]:after{content:" (" attr(title) ")";}
.ir a:after, a[href^="javascript:"]:after, a[href^="#"]:after{content:"";}
pre, blockquote{border:1px solid #999;page-break-inside:avoid;}
thead{display:table-header-group;}
tr, img{page-break-inside:avoid;}
img{max-width:100% !important;}
@page{margin:0.5cm;}
p, h2, h3{orphans:3;widows:3;}
h2, h3{page-break-after:avoid;}
}
.clearfix{*zoom:1;}
.clearfix:before, .clearfix:after{display:table;content:"";line-height:0;}
.clearfix:after{clear:both;}
.hide-text{font:0/0 a;color:transparent;text-shadow:none;background-color:transparent;border:0;}
.input-block-level{display:block;width:100%;min-height:33px;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;}
body{margin:0;font-family:Arial, Helvetica, sans-serif;font-size:14px;line-height:23px;color:#848484;background-color:#fff;}
a{color:#3e454c;text-decoration:none;}
a:hover, a:focus{color:#3498db;text-decoration:underline;}
.img-rounded{-webkit-border-radius:6px;-moz-border-radius:6px;border-radius:6px;}
.img-polaroid{padding:4px;background-color:#fff;border:1px solid #ccc;border:1px solid rgba(0,0,0,0.2);-webkit-box-shadow:0 1px 3px rgba(0,0,0,0.1);-moz-box-shadow:0 1px 3px rgba(0,0,0,0.1);box-shadow:0 1px 3px rgba(0,0,0,0.1);}
.img-circle{-webkit-border-radius:500px;-moz-border-radius:500px;border-radius:500px;}
.row{margin-left:-20px;*zoom:1;}
.row:before, .row:after{display:table;content:"";line-height:0;}
.row:after{clear:both;}
[class*="span"]{float:left;min-height:1px;margin-left:20px;}
.container, .navbar-static-top .container, .navbar-fixed-top .container, .navbar-fixed-bottom .container{width:940px;}
.span12{width:940px;}
.span11{width:860px;}
.span10{width:780px;}
.span9{width:700px;}
.span8{width:620px;}
.span7{width:540px;}
.span6{width:460px;}
.span5{width:380px;}
.span4{width:300px;}
.span3{width:220px;}
.span2{width:140px;}
.span1{width:60px;}
.offset12{margin-left:980px;}
.offset11{margin-left:900px;}
.offset10{margin-left:820px;}
.offset9{margin-left:740px;}
.offset8{margin-left:660px;}
.offset7{margin-left:580px;}
.offset6{margin-left:500px;}
.offset5{margin-left:420px;}
.offset4{margin-left:340px;}
.offset3{margin-left:260px;}
.offset2{margin-left:180px;}
.offset1{margin-left:100px;}
.row-fluid{width:100%;*zoom:1;}
.row-fluid:before, .row-fluid:after{display:table;content:"";line-height:0;}
.row-fluid:after{clear:both;}
.row-fluid [class*="span"]{display:block;width:100%;min-height:33px;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;float:left;margin-left:2.1276595744681%;*margin-left:2.0744680851064%;}
.row-fluid [class*="span"]:first-child{margin-left:0;}
.row-fluid .controls-row [class*="span"] + [class*="span"]{margin-left:2.1276595744681%;}
.row-fluid .span12{width:100%;*width:99.946808510638%;}
.row-fluid .span11{width:91.489361702128%;*width:91.436170212766%;}
.row-fluid .span10{width:82.978723404255%;*width:82.925531914894%;}
.row-fluid .span9{width:74.468085106383%;*width:74.414893617021%;}
.row-fluid .span8{width:65.957446808511%;*width:65.904255319149%;}
.row-fluid .span7{width:57.446808510638%;*width:57.393617021277%;}
.row-fluid .span6{width:48.936170212766%;*width:48.882978723404%;}
.row-fluid .span5{width:40.425531914894%;*width:40.372340425532%;}
.row-fluid .span4{width:31.914893617021%;*width:31.86170212766%;}
.row-fluid .span3{width:23.404255319149%;*width:23.351063829787%;}
.row-fluid .span2{width:14.893617021277%;*width:14.840425531915%;}
.row-fluid .span1{width:6.3829787234043%;*width:6.3297872340426%;}
.row-fluid .offset12{margin-left:104.25531914894%;*margin-left:104.14893617021%;}
.row-fluid .offset12:first-child{margin-left:102.12765957447%;*margin-left:102.02127659574%;}
.row-fluid .offset11{margin-left:95.744680851064%;*margin-left:95.63829787234%;}
.row-fluid .offset11:first-child{margin-left:93.617021276596%;*margin-left:93.510638297872%;}
.row-fluid .offset10{margin-left:87.234042553191%;*margin-left:87.127659574468%;}
.row-fluid .offset10:first-child{margin-left:85.106382978723%;*margin-left:85%;}
.row-fluid .offset9{margin-left:78.723404255319%;*margin-left:78.617021276596%;}
.row-fluid .offset9:first-child{margin-left:76.595744680851%;*margin-left:76.489361702128%;}
.row-fluid .offset8{margin-left:70.212765957447%;*margin-left:70.106382978723%;}
.row-fluid .offset8:first-child{margin-left:68.085106382979%;*margin-left:67.978723404255%;}
.row-fluid .offset7{margin-left:61.702127659574%;*margin-left:61.595744680851%;}
.row-fluid .offset7:first-child{margin-left:59.574468085106%;*margin-left:59.468085106383%;}
.row-fluid .offset6{margin-left:53.191489361702%;*margin-left:53.085106382979%;}
.row-fluid .offset6:first-child{margin-left:51.063829787234%;*margin-left:50.957446808511%;}
.row-fluid .offset5{margin-left:44.68085106383%;*margin-left:44.574468085106%;}
.row-fluid .offset5:first-child{margin-left:42.553191489362%;*margin-left:42.446808510638%;}
.row-fluid .offset4{margin-left:36.170212765957%;*margin-left:36.063829787234%;}
.row-fluid .offset4:first-child{margin-left:34.042553191489%;*margin-left:33.936170212766%;}
.row-fluid .offset3{margin-left:27.659574468085%;*margin-left:27.553191489362%;}
.row-fluid .offset3:first-child{margin-left:25.531914893617%;*margin-left:25.425531914894%;}
.row-fluid .offset2{margin-left:19.148936170213%;*margin-left:19.042553191489%;}
.row-fluid .offset2:first-child{margin-left:17.021276595745%;*margin-left:16.914893617021%;}
.row-fluid .offset1{margin-left:10.63829787234%;*margin-left:10.531914893617%;}
.row-fluid .offset1:first-child{margin-left:8.5106382978723%;*margin-left:8.4042553191489%;}
[class*="span"].hide, .row-fluid [class*="span"].hide{display:none;}
[class*="span"].pull-right, .row-fluid [class*="span"].pull-right{float:right;}
.container{margin-right:auto;margin-left:auto;*zoom:1;}
.container:before, .container:after{display:table;content:"";line-height:0;}
.container:after{clear:both;}
.container-fluid{padding-right:20px;padding-left:20px;*zoom:1;}
.container-fluid:before, .container-fluid:after{display:table;content:"";line-height:0;}
.container-fluid:after{clear:both;}
p{margin:0 0 11.5px;}
.lead{margin-bottom:23px;font-size:21px;font-weight:200;line-height:34.5px;}
small{font-size:85%;}
strong{font-weight:bold;}
em{font-style:italic;}
cite{font-style:normal;}
.muted{color:#bbbaba;}
a.muted:hover, a.muted:focus{color:#a2a0a0;}
.text-warning{color:#c09853;}
a.text-warning:hover, a.text-warning:focus{color:#a47e3c;}
.text-error{color:#b94a48;}
a.text-error:hover, a.text-error:focus{color:#953b39;}
.text-info{color:#3a87ad;}
a.text-info:hover, a.text-info:focus{color:#2d6987;}
.text-success{color:#468847;}
a.text-success:hover, a.text-success:focus{color:#356635;}
.text-left{text-align:left;}
.text-right{text-align:right;}
.text-center{text-align:center;}
h1, h2, h3, h4, h5, h6{margin:11.5px 0;font-family:inherit;font-weight:bold;line-height:23px;color:inherit;text-rendering:optimizelegibility;}
h1 small, h2 small, h3 small, h4 small, h5 small, h6 small{font-weight:normal;line-height:1;color:#bbbaba;}
h1, h2, h3{line-height:46px;}
h1{font-size:38.5px;}
h2{font-size:31.5px;}
h3{font-size:24.5px;}
h4{font-size:17.5px;}
h5{font-size:14px;}
h6{font-size:11.9px;}
h1 small{font-size:24.5px;}
h2 small{font-size:17.5px;}
h3 small{font-size:14px;}
h4 small{font-size:14px;}
.page-header{padding-bottom:10.5px;margin:23px 0 34.5px;border-bottom:1px solid #f5f5f6;}
ul, ol{padding:0;margin:0 0 11.5px 25px;}
ul ul, ul ol, ol ol, ol ul{margin-bottom:0;}
li{line-height:23px;}
ul.unstyled, ol.unstyled{margin-left:0;list-style:none;}
ul.inline, ol.inline{margin-left:0;list-style:none;}
ul.inline > li, ol.inline > li{display:inline-block;*display:inline;*zoom:1;padding-left:5px;padding-right:5px;}
dl{margin-bottom:23px;}
dt, dd{line-height:23px;}
dt{font-weight:bold;}
dd{margin-left:11.5px;}
.dl-horizontal{*zoom:1;}
.dl-horizontal:before, .dl-horizontal:after{display:table;content:"";line-height:0;}
.dl-horizontal:after{clear:both;}
.dl-horizontal dt{float:left;width:160px;clear:left;text-align:right;overflow:hidden;text-overflow:ellipsis;white-space:nowrap;}
.dl-horizontal dd{margin-left:180px;}
hr{margin:23px 0;border:0;border-top:1px solid #f5f5f6;border-bottom:1px solid #fff;}
abbr[title], abbr[data-original-title]{cursor:help;border-bottom:1px dotted #bbbaba;}
abbr.initialism{font-size:90%;text-transform:uppercase;}
blockquote{padding:0 0 0 15px;margin:0 0 23px;border-left:5px solid #f5f5f6;}
blockquote p{margin-bottom:0;font-size:17.5px;font-weight:300;line-height:1.25;}
blockquote small{display:block;line-height:23px;color:#bbbaba;}
blockquote small:before{content:'\2014 \00A0';}
blockquote.pull-right{float:right;padding-right:15px;padding-left:0;border-right:5px solid #f5f5f6;border-left:0;}
blockquote.pull-right p, blockquote.pull-right small{text-align:right;}
blockquote.pull-right small:before{content:'';}
blockquote.pull-right small:after{content:'\00A0 \2014';}
q:before, q:after, blockquote:before, blockquote:after{content:"";}
address{display:block;margin-bottom:23px;font-style:normal;line-height:23px;}
code, pre{padding:0 3px 2px;font-family:Monaco, Menlo, Consolas, "Courier New", monospace;font-size:12px;color:#272a31;-webkit-border-radius:3px;-moz-border-radius:3px;border-radius:3px;}
code{padding:2px 4px;color:#d14;background-color:#f7f7f9;border:1px solid #e1e1e8;white-space:nowrap;}
pre{display:block;padding:11px;margin:0 0 11.5px;font-size:13px;line-height:23px;word-break:break-all;word-wrap:break-word;white-space:pre;white-space:pre-wrap;background-color:#f5f5f5;border:1px solid #ccc;border:1px solid rgba(0,0,0,0.15);-webkit-border-radius:4px;-moz-border-radius:4px;border-radius:4px;}
pre.prettyprint{margin-bottom:23px;}
pre code{padding:0;color:inherit;white-space:pre;white-space:pre-wrap;background-color:transparent;border:0;}
.pre-scrollable{max-height:340px;overflow-y:scroll;}
form{margin:0 0 23px;}
fieldset{padding:0;margin:0;border:0;}
legend{display:block;width:100%;padding:0;margin-bottom:23px;font-size:21px;line-height:46px;color:#272a31;border:0;border-bottom:1px solid #e5e5e5;}
legend small{font-size:17.25px;color:#bbbaba;}
label, input, button, select, textarea{font-size:14px;font-weight:normal;line-height:23px;}
input, button, select, textarea{font-family:Arial, Helvetica, sans-serif;}
label{display:block;margin-bottom:5px;}
select, textarea, input[type="text"], input[type="password"], input[type="datetime"], input[type="datetime-local"], input[type="date"], input[type="month"], input[type="time"], input[type="week"], input[type="number"], input[type="email"], input[type="url"], input[type="search"], input[type="tel"], input[type="color"], .uneditable-input{display:inline-block;height:23px;padding:4px 6px;margin-bottom:11.5px;font-size:14px;line-height:23px;color:#3e454c;-webkit-border-radius:4px;-moz-border-radius:4px;border-radius:4px;vertical-align:middle;}
input, textarea, .uneditable-input{width:206px;}
textarea{height:auto;}
textarea, input[type="text"], input[type="password"], input[type="datetime"], input[type="datetime-local"], input[type="date"], input[type="month"], input[type="time"], input[type="week"], input[type="number"], input[type="email"], input[type="url"], input[type="search"], input[type="tel"], input[type="color"], .uneditable-input{background-color:#fff;border:1px solid #ccc;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,0.075);-moz-box-shadow:inset 0 1px 1px rgba(0,0,0,0.075);box-shadow:inset 0 1px 1px rgba(0,0,0,0.075);-webkit-transition:border linear .2s, box-shadow linear .2s;-moz-transition:border linear .2s, box-shadow linear .2s;-o-transition:border linear .2s, box-shadow linear .2s;transition:border linear .2s, box-shadow linear .2s;}
textarea:focus, input[type="text"]:focus, input[type="password"]:focus, input[type="datetime"]:focus, input[type="datetime-local"]:focus, input[type="date"]:focus, input[type="month"]:focus, input[type="time"]:focus, input[type="week"]:focus, input[type="number"]:focus, input[type="email"]:focus, input[type="url"]:focus, input[type="search"]:focus, input[type="tel"]:focus, input[type="color"]:focus, .uneditable-input:focus{border-color:rgba(82,168,236,0.8);outline:0;outline:thin dotted \9;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(82,168,236,.6);-moz-box-shadow:inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(82,168,236,.6);box-shadow:inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(82,168,236,.6);}
input[type="radio"], input[type="checkbox"]{margin:4px 0 0;*margin-top:0;margin-top:1px \9;line-height:normal;}
input[type="file"], input[type="image"], input[type="submit"], input[type="reset"], input[type="button"], input[type="radio"], input[type="checkbox"]{width:auto;}
select, input[type="file"]{height:33px;*margin-top:4px;line-height:33px;}
select{width:220px;border:1px solid #ccc;background-color:#fff;}
select[multiple], select[size]{height:auto;}
select:focus, input[type="file"]:focus, input[type="radio"]:focus, input[type="checkbox"]:focus{outline:thin dotted #333;outline:5px auto -webkit-focus-ring-color;outline-offset:-2px;}
.uneditable-input, .uneditable-textarea{color:#bbbaba;background-color:#fcfcfc;border-color:#ccc;-webkit-box-shadow:inset 0 1px 2px rgba(0,0,0,0.025);-moz-box-shadow:inset 0 1px 2px rgba(0,0,0,0.025);box-shadow:inset 0 1px 2px rgba(0,0,0,0.025);cursor:not-allowed;}
.uneditable-input{overflow:hidden;white-space:nowrap;}
.uneditable-textarea{width:auto;height:auto;}
input:-moz-placeholder, textarea:-moz-placeholder{color:#bbbaba;}
input:-ms-input-placeholder, textarea:-ms-input-placeholder{color:#bbbaba;}
input::-webkit-input-placeholder, textarea::-webkit-input-placeholder{color:#bbbaba;}
.radio, .checkbox{min-height:23px;padding-left:20px;}
.radio input[type="radio"], .checkbox input[type="checkbox"]{float:left;margin-left:-20px;}
.controls > .radio:first-child, .controls > .checkbox:first-child{padding-top:5px;}
.radio.inline, .checkbox.inline{display:inline-block;padding-top:5px;margin-bottom:0;vertical-align:middle;}
.radio.inline + .radio.inline, .checkbox.inline + .checkbox.inline{margin-left:10px;}
.input-mini{width:60px;}
.input-small{width:90px;}
.input-medium{width:150px;}
.input-large{width:210px;}
.input-xlarge{width:270px;}
.input-xxlarge{width:530px;}
input[class*="span"], select[class*="span"], textarea[class*="span"], .uneditable-input[class*="span"], .row-fluid input[class*="span"], .row-fluid select[class*="span"], .row-fluid textarea[class*="span"], .row-fluid .uneditable-input[class*="span"]{float:none;margin-left:0;}
.input-append input[class*="span"], .input-append .uneditable-input[class*="span"], .input-prepend input[class*="span"], .input-prepend .uneditable-input[class*="span"], .row-fluid input[class*="span"], .row-fluid select[class*="span"], .row-fluid textarea[class*="span"], .row-fluid .uneditable-input[class*="span"], .row-fluid .input-prepend [class*="span"], .row-fluid .input-append [class*="span"]{display:inline-block;}
input, textarea, .uneditable-input{margin-left:0;}
.controls-row [class*="span"] + [class*="span"]{margin-left:20px;}
input.span12, textarea.span12, .uneditable-input.span12{width:926px;}
input.span11, textarea.span11, .uneditable-input.span11{width:846px;}
input.span10, textarea.span10, .uneditable-input.span10{width:766px;}
input.span9, textarea.span9, .uneditable-input.span9{width:686px;}
input.span8, textarea.span8, .uneditable-input.span8{width:606px;}
input.span7, textarea.span7, .uneditable-input.span7{width:526px;}
input.span6, textarea.span6, .uneditable-input.span6{width:446px;}
input.span5, textarea.span5, .uneditable-input.span5{width:366px;}
input.span4, textarea.span4, .uneditable-input.span4{width:286px;}
input.span3, textarea.span3, .uneditable-input.span3{width:206px;}
input.span2, textarea.span2, .uneditable-input.span2{width:126px;}
input.span1, textarea.span1, .uneditable-input.span1{width:46px;}
.controls-row{*zoom:1;}
.controls-row:before, .controls-row:after{display:table;content:"";line-height:0;}
.controls-row:after{clear:both;}
.controls-row [class*="span"], .row-fluid .controls-row [class*="span"]{float:left;}
.controls-row .checkbox[class*="span"], .controls-row .radio[class*="span"]{padding-top:5px;}
input[disabled], select[disabled], textarea[disabled], input[readonly], select[readonly], textarea[readonly]{cursor:not-allowed;background-color:#f5f5f6;}
input[type="radio"][disabled], input[type="checkbox"][disabled], input[type="radio"][readonly], input[type="checkbox"][readonly]{background-color:transparent;}
.control-group.warning .control-label, .control-group.warning .help-block, .control-group.warning .help-inline{color:#c09853;}
.control-group.warning .checkbox, .control-group.warning .radio, .control-group.warning input, .control-group.warning select, .control-group.warning textarea{color:#c09853;}
.control-group.warning input, .control-group.warning select, .control-group.warning textarea{border-color:#c09853;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,0.075);-moz-box-shadow:inset 0 1px 1px rgba(0,0,0,0.075);box-shadow:inset 0 1px 1px rgba(0,0,0,0.075);}
.control-group.warning input:focus, .control-group.warning select:focus, .control-group.warning textarea:focus{border-color:#a47e3c;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,0.075), 0 0 6px #dbc59e;-moz-box-shadow:inset 0 1px 1px rgba(0,0,0,0.075), 0 0 6px #dbc59e;box-shadow:inset 0 1px 1px rgba(0,0,0,0.075), 0 0 6px #dbc59e;}
.control-group.warning .input-prepend .add-on, .control-group.warning .input-append .add-on{color:#c09853;background-color:#fcf8e3;border-color:#c09853;}
.control-group.error .control-label, .control-group.error .help-block, .control-group.error .help-inline{color:#b94a48;}
.control-group.error .checkbox, .control-group.error .radio, .control-group.error input, .control-group.error select, .control-group.error textarea{color:#b94a48;}
.control-group.error input, .control-group.error select, .control-group.error textarea{border-color:#b94a48;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,0.075);-moz-box-shadow:inset 0 1px 1px rgba(0,0,0,0.075);box-shadow:inset 0 1px 1px rgba(0,0,0,0.075);}
.control-group.error input:focus, .control-group.error select:focus, .control-group.error textarea:focus{border-color:#953b39;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,0.075), 0 0 6px #d59392;-moz-box-shadow:inset 0 1px 1px rgba(0,0,0,0.075), 0 0 6px #d59392;box-shadow:inset 0 1px 1px rgba(0,0,0,0.075), 0 0 6px #d59392;}
.control-group.error .input-prepend .add-on, .control-group.error .input-append .add-on{color:#b94a48;background-color:#f2dede;border-color:#b94a48;}
.control-group.success .control-label, .control-group.success .help-block, .control-group.success .help-inline{color:#468847;}
.control-group.success .checkbox, .control-group.success .radio, .control-group.success input, .control-group.success select, .control-group.success textarea{color:#468847;}
.control-group.success input, .control-group.success select, .control-group.success textarea{border-color:#468847;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,0.075);-moz-box-shadow:inset 0 1px 1px rgba(0,0,0,0.075);box-shadow:inset 0 1px 1px rgba(0,0,0,0.075);}
.control-group.success input:focus, .control-group.success select:focus, .control-group.success textarea:focus{border-color:#356635;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,0.075), 0 0 6px #7aba7b;-moz-box-shadow:inset 0 1px 1px rgba(0,0,0,0.075), 0 0 6px #7aba7b;box-shadow:inset 0 1px 1px rgba(0,0,0,0.075), 0 0 6px #7aba7b;}
.control-group.success .input-prepend .add-on, .control-group.success .input-append .add-on{color:#468847;background-color:#dff0d8;border-color:#468847;}
.control-group.info .control-label, .control-group.info .help-block, .control-group.info .help-inline{color:#3a87ad;}
.control-group.info .checkbox, .control-group.info .radio, .control-group.info input, .control-group.info select, .control-group.info textarea{color:#3a87ad;}
.control-group.info input, .control-group.info select, .control-group.info textarea{border-color:#3a87ad;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,0.075);-moz-box-shadow:inset 0 1px 1px rgba(0,0,0,0.075);box-shadow:inset 0 1px 1px rgba(0,0,0,0.075);}
.control-group.info input:focus, .control-group.info select:focus, .control-group.info textarea:focus{border-color:#2d6987;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,0.075), 0 0 6px #7ab5d3;-moz-box-shadow:inset 0 1px 1px rgba(0,0,0,0.075), 0 0 6px #7ab5d3;box-shadow:inset 0 1px 1px rgba(0,0,0,0.075), 0 0 6px #7ab5d3;}
.control-group.info .input-prepend .add-on, .control-group.info .input-append .add-on{color:#3a87ad;background-color:#d9edf7;border-color:#3a87ad;}
input:focus:invalid, textarea:focus:invalid, select:focus:invalid{color:#b94a48;border-color:#ee5f5b;}
input:focus:invalid:focus, textarea:focus:invalid:focus, select:focus:invalid:focus{border-color:#e9322d;-webkit-box-shadow:0 0 6px #f8b9b7;-moz-box-shadow:0 0 6px #f8b9b7;box-shadow:0 0 6px #f8b9b7;}
.form-actions{padding:22px 20px 23px;margin-top:23px;margin-bottom:23px;background-color:#f5f5f5;border-top:1px solid #e5e5e5;*zoom:1;}
.form-actions:before, .form-actions:after{display:table;content:"";line-height:0;}
.form-actions:after{clear:both;}
.help-block, .help-inline{color:#e1e1e1;}
.help-block{display:block;margin-bottom:11.5px;}
.help-inline{display:inline-block;*display:inline;*zoom:1;vertical-align:middle;padding-left:5px;}
.input-append, .input-prepend{display:inline-block;margin-bottom:11.5px;vertical-align:middle;font-size:0;white-space:nowrap;}
.input-append input, .input-append select, .input-append .uneditable-input, .input-append .dropdown-menu, .input-append .popover, .input-prepend input, .input-prepend select, .input-prepend .uneditable-input, .input-prepend .dropdown-menu, .input-prepend .popover{font-size:14px;}
.input-append input, .input-append select, .input-append .uneditable-input, .input-prepend input, .input-prepend select, .input-prepend .uneditable-input{position:relative;margin-bottom:0;*margin-left:0;vertical-align:top;-webkit-border-radius:0 4px 4px 0;-moz-border-radius:0 4px 4px 0;border-radius:0 4px 4px 0;}
.input-append input:focus, .input-append select:focus, .input-append .uneditable-input:focus, .input-prepend input:focus, .input-prepend select:focus, .input-prepend .uneditable-input:focus{z-index:2;}
.input-append .add-on, .input-prepend .add-on{display:inline-block;width:auto;height:23px;min-width:16px;padding:4px 5px;font-size:14px;font-weight:normal;line-height:23px;text-align:center;text-shadow:0 1px 0 #fff;background-color:#f5f5f6;border:1px solid #ccc;}
.input-append .add-on, .input-append .btn, .input-append .btn-group > .dropdown-toggle, .input-prepend .add-on, .input-prepend .btn, .input-prepend .btn-group > .dropdown-toggle{vertical-align:top;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;}
.input-append .active, .input-prepend .active{background-color:#a9dba9;border-color:#46a546;}
.input-prepend .add-on, .input-prepend .btn{margin-right:-1px;}
.input-prepend .add-on:first-child, .input-prepend .btn:first-child{-webkit-border-radius:4px 0 0 4px;-moz-border-radius:4px 0 0 4px;border-radius:4px 0 0 4px;}
.input-append input, .input-append select, .input-append .uneditable-input{-webkit-border-radius:4px 0 0 4px;-moz-border-radius:4px 0 0 4px;border-radius:4px 0 0 4px;}
.input-append input + .btn-group .btn:last-child, .input-append select + .btn-group .btn:last-child, .input-append .uneditable-input + .btn-group .btn:last-child{-webkit-border-radius:0 4px 4px 0;-moz-border-radius:0 4px 4px 0;border-radius:0 4px 4px 0;}
.input-append .add-on, .input-append .btn, .input-append .btn-group{margin-left:-1px;}
.input-append .add-on:last-child, .input-append .btn:last-child, .input-append .btn-group:last-child > .dropdown-toggle{-webkit-border-radius:0 4px 4px 0;-moz-border-radius:0 4px 4px 0;border-radius:0 4px 4px 0;}
.input-prepend.input-append input, .input-prepend.input-append select, .input-prepend.input-append .uneditable-input{-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;}
.input-prepend.input-append input + .btn-group .btn, .input-prepend.input-append select + .btn-group .btn, .input-prepend.input-append .uneditable-input + .btn-group .btn{-webkit-border-radius:0 4px 4px 0;-moz-border-radius:0 4px 4px 0;border-radius:0 4px 4px 0;}
.input-prepend.input-append .add-on:first-child, .input-prepend.input-append .btn:first-child{margin-right:-1px;-webkit-border-radius:4px 0 0 4px;-moz-border-radius:4px 0 0 4px;border-radius:4px 0 0 4px;}
.input-prepend.input-append .add-on:last-child, .input-prepend.input-append .btn:last-child{margin-left:-1px;-webkit-border-radius:0 4px 4px 0;-moz-border-radius:0 4px 4px 0;border-radius:0 4px 4px 0;}
.input-prepend.input-append .btn-group:first-child{margin-left:0;}
input.search-query{padding-right:14px;padding-right:4px \9;padding-left:14px;padding-left:4px \9;margin-bottom:0;-webkit-border-radius:15px;-moz-border-radius:15px;border-radius:15px;}
.form-search .input-append .search-query, .form-search .input-prepend .search-query{-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;}
.form-search .input-append .search-query{-webkit-border-radius:14px 0 0 14px;-moz-border-radius:14px 0 0 14px;border-radius:14px 0 0 14px;}
.form-search .input-append .btn{-webkit-border-radius:0 14px 14px 0;-moz-border-radius:0 14px 14px 0;border-radius:0 14px 14px 0;}
.form-search .input-prepend .search-query{-webkit-border-radius:0 14px 14px 0;-moz-border-radius:0 14px 14px 0;border-radius:0 14px 14px 0;}
.form-search .input-prepend .btn{-webkit-border-radius:14px 0 0 14px;-moz-border-radius:14px 0 0 14px;border-radius:14px 0 0 14px;}
.form-search input, .form-search textarea, .form-search select, .form-search .help-inline, .form-search .uneditable-input, .form-search .input-prepend, .form-search .input-append, .form-inline input, .form-inline textarea, .form-inline select, .form-inline .help-inline, .form-inline .uneditable-input, .form-inline .input-prepend, .form-inline .input-append, .form-horizontal input, .form-horizontal textarea, .form-horizontal select, .form-horizontal .help-inline, .form-horizontal .uneditable-input, .form-horizontal .input-prepend, .form-horizontal .input-append{display:inline-block;*display:inline;*zoom:1;margin-bottom:0;vertical-align:middle;}
.form-search .hide, .form-inline .hide, .form-horizontal .hide{display:none;}
.form-search label, .form-inline label, .form-search .btn-group, .form-inline .btn-group{display:inline-block;}
.form-search .input-append, .form-inline .input-append, .form-search .input-prepend, .form-inline .input-prepend{margin-bottom:0;}
.form-search .radio, .form-search .checkbox, .form-inline .radio, .form-inline .checkbox{padding-left:0;margin-bottom:0;vertical-align:middle;}
.form-search .radio input[type="radio"], .form-search .checkbox input[type="checkbox"], .form-inline .radio input[type="radio"], .form-inline .checkbox input[type="checkbox"]{float:left;margin-right:3px;margin-left:0;}
.control-group{margin-bottom:11.5px;}
legend + .control-group{margin-top:23px;-webkit-margin-top-collapse:separate;}
.form-horizontal .control-group{margin-bottom:23px;*zoom:1;}
.form-horizontal .control-group:before, .form-horizontal .control-group:after{display:table;content:"";line-height:0;}
.form-horizontal .control-group:after{clear:both;}
.form-horizontal .control-label{float:left;width:160px;padding-top:5px;text-align:right;}
.form-horizontal .controls{*display:inline-block;*padding-left:20px;margin-left:180px;*margin-left:0;}
.form-horizontal .controls:first-child{*padding-left:180px;}
.form-horizontal .help-block{margin-bottom:0;}
.form-horizontal input + .help-block, .form-horizontal select + .help-block, .form-horizontal textarea + .help-block, .form-horizontal .uneditable-input + .help-block, .form-horizontal .input-prepend + .help-block, .form-horizontal .input-append + .help-block{margin-top:11.5px;}
.form-horizontal .form-actions{padding-left:180px;}
table{max-width:100%;background-color:transparent;border-collapse:collapse;border-spacing:0;}
.table{width:100%;margin-bottom:23px;}
.table th, .table td{padding:8px;line-height:23px;text-align:left;vertical-align:top;border-top:1px solid #ddd;}
.table th{font-weight:bold;}
.table thead th{vertical-align:bottom;}
.table caption + thead tr:first-child th, .table caption + thead tr:first-child td, .table colgroup + thead tr:first-child th, .table colgroup + thead tr:first-child td, .table thead:first-child tr:first-child th, .table thead:first-child tr:first-child td{border-top:0;}
.table tbody + tbody{border-top:2px solid #ddd;}
.table .table{background-color:#fff;}
.table-condensed th, .table-condensed td{padding:4px 5px;}
.table-bordered{border:1px solid #ddd;border-collapse:separate;*border-collapse:collapse;border-left:0;-webkit-border-radius:4px;-moz-border-radius:4px;border-radius:4px;}
.table-bordered th, .table-bordered td{border-left:1px solid #ddd;}
.table-bordered caption + thead tr:first-child th, .table-bordered caption + tbody tr:first-child th, .table-bordered caption + tbody tr:first-child td, .table-bordered colgroup + thead tr:first-child th, .table-bordered colgroup + tbody tr:first-child th, .table-bordered colgroup + tbody tr:first-child td, .table-bordered thead:first-child tr:first-child th, .table-bordered tbody:first-child tr:first-child th, .table-bordered tbody:first-child tr:first-child td{border-top:0;}
.table-bordered thead:first-child tr:first-child > th:first-child, .table-bordered tbody:first-child tr:first-child > td:first-child, .table-bordered tbody:first-child tr:first-child > th:first-child{-webkit-border-top-left-radius:4px;-moz-border-radius-topleft:4px;border-top-left-radius:4px;}
.table-bordered thead:first-child tr:first-child > th:last-child, .table-bordered tbody:first-child tr:first-child > td:last-child, .table-bordered tbody:first-child tr:first-child > th:last-child{-webkit-border-top-right-radius:4px;-moz-border-radius-topright:4px;border-top-right-radius:4px;}
.table-bordered thead:last-child tr:last-child > th:first-child, .table-bordered tbody:last-child tr:last-child > td:first-child, .table-bordered tbody:last-child tr:last-child > th:first-child, .table-bordered tfoot:last-child tr:last-child > td:first-child, .table-bordered tfoot:last-child tr:last-child > th:first-child{-webkit-border-bottom-left-radius:4px;-moz-border-radius-bottomleft:4px;border-bottom-left-radius:4px;}
.table-bordered thead:last-child tr:last-child > th:last-child, .table-bordered tbody:last-child tr:last-child > td:last-child, .table-bordered tbody:last-child tr:last-child > th:last-child, .table-bordered tfoot:last-child tr:last-child > td:last-child, .table-bordered tfoot:last-child tr:last-child > th:last-child{-webkit-border-bottom-right-radius:4px;-moz-border-radius-bottomright:4px;border-bottom-right-radius:4px;}
.table-bordered tfoot + tbody:last-child tr:last-child td:first-child{-webkit-border-bottom-left-radius:0;-moz-border-radius-bottomleft:0;border-bottom-left-radius:0;}
.table-bordered tfoot + tbody:last-child tr:last-child td:last-child{-webkit-border-bottom-right-radius:0;-moz-border-radius-bottomright:0;border-bottom-right-radius:0;}
.table-bordered caption + thead tr:first-child th:first-child, .table-bordered caption + tbody tr:first-child td:first-child, .table-bordered colgroup + thead tr:first-child th:first-child, .table-bordered colgroup + tbody tr:first-child td:first-child{-webkit-border-top-left-radius:4px;-moz-border-radius-topleft:4px;border-top-left-radius:4px;}
.table-bordered caption + thead tr:first-child th:last-child, .table-bordered caption + tbody tr:first-child td:last-child, .table-bordered colgroup + thead tr:first-child th:last-child, .table-bordered colgroup + tbody tr:first-child td:last-child{-webkit-border-top-right-radius:4px;-moz-border-radius-topright:4px;border-top-right-radius:4px;}
.table-striped tbody > tr:nth-child(odd) > td, .table-striped tbody > tr:nth-child(odd) > th{background-color:#f9f9f9;}
.table-hover tbody tr:hover > td, .table-hover tbody tr:hover > th{background-color:#f5f5f5;}
table td[class*="span"], table th[class*="span"], .row-fluid table td[class*="span"], .row-fluid table th[class*="span"]{display:table-cell;float:none;margin-left:0;}
.table td.span1, .table th.span1{float:none;width:44px;margin-left:0;}
.table td.span2, .table th.span2{float:none;width:124px;margin-left:0;}
.table td.span3, .table th.span3{float:none;width:204px;margin-left:0;}
.table td.span4, .table th.span4{float:none;width:284px;margin-left:0;}
.table td.span5, .table th.span5{float:none;width:364px;margin-left:0;}
.table td.span6, .table th.span6{float:none;width:444px;margin-left:0;}
.table td.span7, .table th.span7{float:none;width:524px;margin-left:0;}
.table td.span8, .table th.span8{float:none;width:604px;margin-left:0;}
.table td.span9, .table th.span9{float:none;width:684px;margin-left:0;}
.table td.span10, .table th.span10{float:none;width:764px;margin-left:0;}
.table td.span11, .table th.span11{float:none;width:844px;margin-left:0;}
.table td.span12, .table th.span12{float:none;width:924px;margin-left:0;}
.table tbody tr.success > td{background-color:#dff0d8;}
.table tbody tr.error > td{background-color:#f2dede;}
.table tbody tr.warning > td{background-color:#fcf8e3;}
.table tbody tr.info > td{background-color:#d9edf7;}
.table-hover tbody tr.success:hover > td{background-color:#d0e9c6;}
.table-hover tbody tr.error:hover > td{background-color:#ebcccc;}
.table-hover tbody tr.warning:hover > td{background-color:#faf2cc;}
.table-hover tbody tr.info:hover > td{background-color:#c4e3f3;}
.dropup, .dropdown{position:relative;}
.dropdown-toggle{*margin-bottom:-3px;}
.dropdown-toggle:active, .open .dropdown-toggle{outline:0;}
.caret{display:inline-block;width:0;height:0;vertical-align:top;border-top:4px solid #000;border-right:4px solid transparent;border-left:4px solid transparent;content:"";}
.dropdown .caret{margin-top:8px;margin-left:2px;}
.dropdown-menu{position:absolute;top:100%;left:0;z-index:1000;display:none;float:left;min-width:160px;padding:5px 0;margin:2px 0 0;list-style:none;background-color:#fff;border:1px solid #ccc;border:1px solid rgba(0,0,0,0.2);*border-right-width:2px;*border-bottom-width:2px;-webkit-border-radius:6px;-moz-border-radius:6px;border-radius:6px;-webkit-box-shadow:0 5px 10px rgba(0,0,0,0.2);-moz-box-shadow:0 5px 10px rgba(0,0,0,0.2);box-shadow:0 5px 10px rgba(0,0,0,0.2);-webkit-background-clip:padding-box;-moz-background-clip:padding;background-clip:padding-box;}
.dropdown-menu.pull-right{right:0;left:auto;}
.dropdown-menu .divider{*width:100%;height:1px;margin:10.5px 1px;*margin:-5px 0 5px;overflow:hidden;background-color:#e5e5e5;border-bottom:1px solid #fff;}
.dropdown-menu > li > a{display:block;padding:3px 20px;clear:both;font-weight:normal;line-height:23px;color:#272a31;white-space:nowrap;}
.dropdown-menu > li > a:hover, .dropdown-menu > li > a:focus, .dropdown-submenu:hover > a, .dropdown-submenu:focus > a{text-decoration:none;color:#fff;background-color:#394046;background-image:-moz-linear-gradient(top,#3e454c,#33383e);background-image:-webkit-gradient(linear,0 0,0 100%,from(#3e454c),to(#33383e));background-image:-webkit-linear-gradient(top,#3e454c,#33383e);background-image:-o-linear-gradient(top,#3e454c,#33383e);background-image:linear-gradient(to bottom,#3e454c,#33383e);background-repeat:repeat-x;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff3e454c', endColorstr='#ff32383d', GradientType=0);}
.dropdown-menu > .active > a, .dropdown-menu > .active > a:hover, .dropdown-menu > .active > a:focus{color:#fff;text-decoration:none;outline:0;background-color:#394046;background-image:-moz-linear-gradient(top,#3e454c,#33383e);background-image:-webkit-gradient(linear,0 0,0 100%,from(#3e454c),to(#33383e));background-image:-webkit-linear-gradient(top,#3e454c,#33383e);background-image:-o-linear-gradient(top,#3e454c,#33383e);background-image:linear-gradient(to bottom,#3e454c,#33383e);background-repeat:repeat-x;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff3e454c', endColorstr='#ff32383d', GradientType=0);}
.dropdown-menu > .disabled > a, .dropdown-menu > .disabled > a:hover, .dropdown-menu > .disabled > a:focus{color:#bbbaba;}
.dropdown-menu > .disabled > a:hover, .dropdown-menu > .disabled > a:focus{text-decoration:none;background-color:transparent;background-image:none;filter:progid:DXImageTransform.Microsoft.gradient(enabled = false);cursor:default;}
.open{*z-index:1000;}
.open > .dropdown-menu{display:block;}
.pull-right > .dropdown-menu{right:0;left:auto;}
.dropup .caret, .navbar-fixed-bottom .dropdown .caret{border-top:0;border-bottom:4px solid #000;content:"";}
.dropup .dropdown-menu, .navbar-fixed-bottom .dropdown .dropdown-menu{top:auto;bottom:100%;margin-bottom:1px;}
.dropdown-submenu{position:relative;}
.dropdown-submenu > .dropdown-menu{top:0;left:100%;margin-top:-6px;margin-left:-1px;-webkit-border-radius:0 6px 6px 6px;-moz-border-radius:0 6px 6px 6px;border-radius:0 6px 6px 6px;}
.dropdown-submenu:hover > .dropdown-menu{display:block;}
.dropup .dropdown-submenu > .dropdown-menu{top:auto;bottom:0;margin-top:0;margin-bottom:-2px;-webkit-border-radius:5px 5px 5px 0;-moz-border-radius:5px 5px 5px 0;border-radius:5px 5px 5px 0;}
.dropdown-submenu > a:after{display:block;content:" ";float:right;width:0;height:0;border-color:transparent;border-style:solid;border-width:5px 0 5px 5px;border-left-color:#cccccc;margin-top:5px;margin-right:-10px;}
.dropdown-submenu:hover > a:after{border-left-color:#fff;}
.dropdown-submenu.pull-left{float:none;}
.dropdown-submenu.pull-left > .dropdown-menu{left:-100%;margin-left:10px;-webkit-border-radius:6px 0 6px 6px;-moz-border-radius:6px 0 6px 6px;border-radius:6px 0 6px 6px;}
.dropdown .dropdown-menu .nav-header{padding-left:20px;padding-right:20px;}
.typeahead{z-index:1051;margin-top:2px;-webkit-border-radius:4px;-moz-border-radius:4px;border-radius:4px;}
.well{min-height:20px;padding:19px;margin-bottom:20px;background-color:#f5f5f5;border:1px solid #e3e3e3;-webkit-border-radius:4px;-moz-border-radius:4px;border-radius:4px;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,0.05);-moz-box-shadow:inset 0 1px 1px rgba(0,0,0,0.05);box-shadow:inset 0 1px 1px rgba(0,0,0,0.05);}
.well blockquote{border-color:#ddd;border-color:rgba(0,0,0,0.15);}
.well-large{padding:24px;-webkit-border-radius:6px;-moz-border-radius:6px;border-radius:6px;}
.well-small{padding:9px;-webkit-border-radius:3px;-moz-border-radius:3px;border-radius:3px;}
.fade{opacity:0;-webkit-transition:opacity .15s linear;-moz-transition:opacity .15s linear;-o-transition:opacity .15s linear;transition:opacity .15s linear;}
.fade.in{opacity:1;}
.collapse{position:relative;height:0;overflow:hidden;-webkit-transition:height .35s ease;-moz-transition:height .35s ease;-o-transition:height .35s ease;transition:height .35s ease;}
.collapse.in{height:auto;}
.close{float:right;font-size:20px;font-weight:bold;line-height:23px;color:#000;text-shadow:0 1px 0 #ffffff;opacity:0.2;filter:alpha(opacity=20);}
.close:hover, .close:focus{color:#000;text-decoration:none;cursor:pointer;opacity:0.4;filter:alpha(opacity=40);}
button.close{padding:0;cursor:pointer;background:transparent;border:0;-webkit-appearance:none;}
.btn{display:inline-block;*display:inline;*zoom:1;padding:4px 12px;margin-bottom:0;font-size:14px;line-height:23px;text-align:center;vertical-align:middle;cursor:pointer;color:#272a31;text-shadow:0 1px 1px rgba(255,255,255,0.75);background-color:#f5f5f5;background-image:-moz-linear-gradient(top,#fff,#e6e6e6);background-image:-webkit-gradient(linear,0 0,0 100%,from(#fff),to(#e6e6e6));background-image:-webkit-linear-gradient(top,#fff,#e6e6e6);background-image:-o-linear-gradient(top,#fff,#e6e6e6);background-image:linear-gradient(to bottom,#fff,#e6e6e6);background-repeat:repeat-x;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffffff', endColorstr='#ffe5e5e5', GradientType=0);border-color:#e6e6e6 #e6e6e6 #bfbfbf;border-color:rgba(0,0,0,0.1) rgba(0,0,0,0.1) rgba(0,0,0,0.25);*background-color:#e6e6e6;filter:progid:DXImageTransform.Microsoft.gradient(enabled = false);border:1px solid #ccc;*border:0;border-bottom-color:#b3b3b3;-webkit-border-radius:4px;-moz-border-radius:4px;border-radius:4px;*margin-left:.3em;-webkit-box-shadow:inset 0 1px 0 rgba(255,255,255,.2), 0 1px 2px rgba(0,0,0,.05);-moz-box-shadow:inset 0 1px 0 rgba(255,255,255,.2), 0 1px 2px rgba(0,0,0,.05);box-shadow:inset 0 1px 0 rgba(255,255,255,.2), 0 1px 2px rgba(0,0,0,.05);}
.btn:hover, .btn:focus, .btn:active, .btn.active, .btn.disabled, .btn[disabled]{color:#272a31;background-color:#e6e6e6;*background-color:#d9d9d9;}
.btn:active, .btn.active{background-color:#cccccc \9;}
.btn:first-child{*margin-left:0;}
.btn:hover, .btn:focus{color:#272a31;text-decoration:none;background-position:0 -15px;-webkit-transition:background-position .1s linear;-moz-transition:background-position .1s linear;-o-transition:background-position .1s linear;transition:background-position .1s linear;}
.btn:focus{outline:thin dotted #333;outline:5px auto -webkit-focus-ring-color;outline-offset:-2px;}
.btn.active, .btn:active{background-image:none;outline:0;-webkit-box-shadow:inset 0 2px 4px rgba(0,0,0,.15), 0 1px 2px rgba(0,0,0,.05);-moz-box-shadow:inset 0 2px 4px rgba(0,0,0,.15), 0 1px 2px rgba(0,0,0,.05);box-shadow:inset 0 2px 4px rgba(0,0,0,.15), 0 1px 2px rgba(0,0,0,.05);}
.btn.disabled, .btn[disabled]{cursor:default;background-image:none;opacity:0.65;filter:alpha(opacity=65);-webkit-box-shadow:none;-moz-box-shadow:none;box-shadow:none;}
.btn-large{padding:11px 19px;font-size:17.5px;-webkit-border-radius:6px;-moz-border-radius:6px;border-radius:6px;}
.btn-large [class^="icon-"], .btn-large [class*=" icon-"]{margin-top:4px;}
.btn-small{padding:2px 10px;font-size:11.9px;-webkit-border-radius:3px;-moz-border-radius:3px;border-radius:3px;}
.btn-small [class^="icon-"], .btn-small [class*=" icon-"]{margin-top:0;}
.btn-mini [class^="icon-"], .btn-mini [class*=" icon-"]{margin-top:-1px;}
.btn-mini{padding:0 6px;font-size:10.5px;-webkit-border-radius:3px;-moz-border-radius:3px;border-radius:3px;}
.btn-block{display:block;width:100%;padding-left:0;padding-right:0;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;}
.btn-block + .btn-block{margin-top:5px;}
input[type="submit"].btn-block, input[type="reset"].btn-block, input[type="button"].btn-block{width:100%;}
.btn-primary.active, .btn-warning.active, .btn-danger.active, .btn-success.active, .btn-info.active, .btn-inverse.active{color:rgba(255,255,255,0.75);}
.btn-primary{color:#fff;text-shadow:0 -1px 0 rgba(0,0,0,0.25);background-color:#3e434c;background-image:-moz-linear-gradient(top,#3e454c,#3e404c);background-image:-webkit-gradient(linear,0 0,0 100%,from(#3e454c),to(#3e404c));background-image:-webkit-linear-gradient(top,#3e454c,#3e404c);background-image:-o-linear-gradient(top,#3e454c,#3e404c);background-image:linear-gradient(to bottom,#3e454c,#3e404c);background-repeat:repeat-x;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff3e454c', endColorstr='#ff3d404c', GradientType=0);border-color:#3e404c #3e404c #1c1d22;border-color:rgba(0,0,0,0.1) rgba(0,0,0,0.1) rgba(0,0,0,0.25);*background-color:#3e404c;filter:progid:DXImageTransform.Microsoft.gradient(enabled = false);}
.btn-primary:hover, .btn-primary:focus, .btn-primary:active, .btn-primary.active, .btn-primary.disabled, .btn-primary[disabled]{color:#fff;background-color:#3e404c;*background-color:#33343e;}
.btn-primary:active, .btn-primary.active{background-color:#272930 \9;}
.btn-warning{color:#fff;text-shadow:0 -1px 0 rgba(0,0,0,0.25);background-color:#faa732;background-image:-moz-linear-gradient(top,#fbb450,#f89406);background-image:-webkit-gradient(linear,0 0,0 100%,from(#fbb450),to(#f89406));background-image:-webkit-linear-gradient(top,#fbb450,#f89406);background-image:-o-linear-gradient(top,#fbb450,#f89406);background-image:linear-gradient(to bottom,#fbb450,#f89406);background-repeat:repeat-x;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#fffab44f', endColorstr='#fff89406', GradientType=0);border-color:#f89406 #f89406 #ad6704;border-color:rgba(0,0,0,0.1) rgba(0,0,0,0.1) rgba(0,0,0,0.25);*background-color:#f89406;filter:progid:DXImageTransform.Microsoft.gradient(enabled = false);}
.btn-warning:hover, .btn-warning:focus, .btn-warning:active, .btn-warning.active, .btn-warning.disabled, .btn-warning[disabled]{color:#fff;background-color:#f89406;*background-color:#df8505;}
.btn-warning:active, .btn-warning.active{background-color:#c67605 \9;}
.btn-danger{color:#fff;text-shadow:0 -1px 0 rgba(0,0,0,0.25);background-color:#da4f49;background-image:-moz-linear-gradient(top,#ee5f5b,#bd362f);background-image:-webkit-gradient(linear,0 0,0 100%,from(#ee5f5b),to(#bd362f));background-image:-webkit-linear-gradient(top,#ee5f5b,#bd362f);background-image:-o-linear-gradient(top,#ee5f5b,#bd362f);background-image:linear-gradient(to bottom,#ee5f5b,#bd362f);background-repeat:repeat-x;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffee5f5b', endColorstr='#ffbd362f', GradientType=0);border-color:#bd362f #bd362f #802420;border-color:rgba(0,0,0,0.1) rgba(0,0,0,0.1) rgba(0,0,0,0.25);*background-color:#bd362f;filter:progid:DXImageTransform.Microsoft.gradient(enabled = false);}
.btn-danger:hover, .btn-danger:focus, .btn-danger:active, .btn-danger.active, .btn-danger.disabled, .btn-danger[disabled]{color:#fff;background-color:#bd362f;*background-color:#a9302a;}
.btn-danger:active, .btn-danger.active{background-color:#942a25 \9;}
.btn-success{color:#fff;text-shadow:0 -1px 0 rgba(0,0,0,0.25);background-color:#5bb75b;background-image:-moz-linear-gradient(top,#62c462,#51a351);background-image:-webkit-gradient(linear,0 0,0 100%,from(#62c462),to(#51a351));background-image:-webkit-linear-gradient(top,#62c462,#51a351);background-image:-o-linear-gradient(top,#62c462,#51a351);background-image:linear-gradient(to bottom,#62c462,#51a351);background-repeat:repeat-x;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff62c462', endColorstr='#ff51a351', GradientType=0);border-color:#51a351 #51a351 #387038;border-color:rgba(0,0,0,0.1) rgba(0,0,0,0.1) rgba(0,0,0,0.25);*background-color:#51a351;filter:progid:DXImageTransform.Microsoft.gradient(enabled = false);}
.btn-success:hover, .btn-success:focus, .btn-success:active, .btn-success.active, .btn-success.disabled, .btn-success[disabled]{color:#fff;background-color:#51a351;*background-color:#499249;}
.btn-success:active, .btn-success.active{background-color:#408140 \9;}
.btn-info{color:#fff;text-shadow:0 -1px 0 rgba(0,0,0,0.25);background-color:#49afcd;background-image:-moz-linear-gradient(top,#5bc0de,#2f96b4);background-image:-webkit-gradient(linear,0 0,0 100%,from(#5bc0de),to(#2f96b4));background-image:-webkit-linear-gradient(top,#5bc0de,#2f96b4);background-image:-o-linear-gradient(top,#5bc0de,#2f96b4);background-image:linear-gradient(to bottom,#5bc0de,#2f96b4);background-repeat:repeat-x;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff5bc0de', endColorstr='#ff2f96b4', GradientType=0);border-color:#2f96b4 #2f96b4 #1f6377;border-color:rgba(0,0,0,0.1) rgba(0,0,0,0.1) rgba(0,0,0,0.25);*background-color:#2f96b4;filter:progid:DXImageTransform.Microsoft.gradient(enabled = false);}
.btn-info:hover, .btn-info:focus, .btn-info:active, .btn-info.active, .btn-info.disabled, .btn-info[disabled]{color:#fff;background-color:#2f96b4;*background-color:#2a85a0;}
.btn-info:active, .btn-info.active{background-color:#24748c \9;}
.btn-inverse{color:#fff;text-shadow:0 -1px 0 rgba(0,0,0,0.25);background-color:#363636;background-image:-moz-linear-gradient(top,#444,#222);background-image:-webkit-gradient(linear,0 0,0 100%,from(#444),to(#222));background-image:-webkit-linear-gradient(top,#444,#222);background-image:-o-linear-gradient(top,#444,#222);background-image:linear-gradient(to bottom,#444,#222);background-repeat:repeat-x;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff444444', endColorstr='#ff222222', GradientType=0);border-color:#222 #222 #000000;border-color:rgba(0,0,0,0.1) rgba(0,0,0,0.1) rgba(0,0,0,0.25);*background-color:#222;filter:progid:DXImageTransform.Microsoft.gradient(enabled = false);}
.btn-inverse:hover, .btn-inverse:focus, .btn-inverse:active, .btn-inverse.active, .btn-inverse.disabled, .btn-inverse[disabled]{color:#fff;background-color:#222;*background-color:#151515;}
.btn-inverse:active, .btn-inverse.active{background-color:#090909 \9;}
button.btn, input[type="submit"].btn{*padding-top:3px;*padding-bottom:3px;}
button.btn::-moz-focus-inner, input[type="submit"].btn::-moz-focus-inner{padding:0;border:0;}
button.btn.btn-large, input[type="submit"].btn.btn-large{*padding-top:7px;*padding-bottom:7px;}
button.btn.btn-small, input[type="submit"].btn.btn-small{*padding-top:3px;*padding-bottom:3px;}
button.btn.btn-mini, input[type="submit"].btn.btn-mini{*padding-top:1px;*padding-bottom:1px;}
.btn-link, .btn-link:active, .btn-link[disabled]{background-color:transparent;background-image:none;-webkit-box-shadow:none;-moz-box-shadow:none;box-shadow:none;}
.btn-link{border-color:transparent;cursor:pointer;color:#3e454c;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;}
.btn-link:hover, .btn-link:focus{color:#3498db;text-decoration:underline;background-color:transparent;}
.btn-link[disabled]:hover, .btn-link[disabled]:focus{color:#272a31;text-decoration:none;}
.btn-group{position:relative;display:inline-block;*display:inline;*zoom:1;font-size:0;vertical-align:middle;white-space:nowrap;*margin-left:.3em;}
.btn-group:first-child{*margin-left:0;}
.btn-group + .btn-group{margin-left:5px;}
.btn-toolbar{font-size:0;margin-top:11.5px;margin-bottom:11.5px;}
.btn-toolbar > .btn + .btn, .btn-toolbar > .btn-group + .btn, .btn-toolbar > .btn + .btn-group{margin-left:5px;}
.btn-group > .btn{position:relative;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;}
.btn-group > .btn + .btn{margin-left:-1px;}
.btn-group > .btn, .btn-group > .dropdown-menu, .btn-group > .popover{font-size:14px;}
.btn-group > .btn-mini{font-size:10.5px;}
.btn-group > .btn-small{font-size:11.9px;}
.btn-group > .btn-large{font-size:17.5px;}
.btn-group > .btn:first-child{margin-left:0;-webkit-border-top-left-radius:4px;-moz-border-radius-topleft:4px;border-top-left-radius:4px;-webkit-border-bottom-left-radius:4px;-moz-border-radius-bottomleft:4px;border-bottom-left-radius:4px;}
.btn-group > .btn:last-child, .btn-group > .dropdown-toggle{-webkit-border-top-right-radius:4px;-moz-border-radius-topright:4px;border-top-right-radius:4px;-webkit-border-bottom-right-radius:4px;-moz-border-radius-bottomright:4px;border-bottom-right-radius:4px;}
.btn-group > .btn.large:first-child{margin-left:0;-webkit-border-top-left-radius:6px;-moz-border-radius-topleft:6px;border-top-left-radius:6px;-webkit-border-bottom-left-radius:6px;-moz-border-radius-bottomleft:6px;border-bottom-left-radius:6px;}
.btn-group > .btn.large:last-child, .btn-group > .large.dropdown-toggle{-webkit-border-top-right-radius:6px;-moz-border-radius-topright:6px;border-top-right-radius:6px;-webkit-border-bottom-right-radius:6px;-moz-border-radius-bottomright:6px;border-bottom-right-radius:6px;}
.btn-group > .btn:hover, .btn-group > .btn:focus, .btn-group > .btn:active, .btn-group > .btn.active{z-index:2;}
.btn-group .dropdown-toggle:active, .btn-group.open .dropdown-toggle{outline:0;}
.btn-group > .btn + .dropdown-toggle{padding-left:8px;padding-right:8px;-webkit-box-shadow:inset 1px 0 0 rgba(255,255,255,.125), inset 0 1px 0 rgba(255,255,255,.2), 0 1px 2px rgba(0,0,0,.05);-moz-box-shadow:inset 1px 0 0 rgba(255,255,255,.125), inset 0 1px 0 rgba(255,255,255,.2), 0 1px 2px rgba(0,0,0,.05);box-shadow:inset 1px 0 0 rgba(255,255,255,.125), inset 0 1px 0 rgba(255,255,255,.2), 0 1px 2px rgba(0,0,0,.05);*padding-top:5px;*padding-bottom:5px;}
.btn-group > .btn-mini + .dropdown-toggle{padding-left:5px;padding-right:5px;*padding-top:2px;*padding-bottom:2px;}
.btn-group > .btn-small + .dropdown-toggle{*padding-top:5px;*padding-bottom:4px;}
.btn-group > .btn-large + .dropdown-toggle{padding-left:12px;padding-right:12px;*padding-top:7px;*padding-bottom:7px;}
.btn-group.open .dropdown-toggle{background-image:none;-webkit-box-shadow:inset 0 2px 4px rgba(0,0,0,.15), 0 1px 2px rgba(0,0,0,.05);-moz-box-shadow:inset 0 2px 4px rgba(0,0,0,.15), 0 1px 2px rgba(0,0,0,.05);box-shadow:inset 0 2px 4px rgba(0,0,0,.15), 0 1px 2px rgba(0,0,0,.05);}
.btn-group.open .btn.dropdown-toggle{background-color:#e6e6e6;}
.btn-group.open .btn-primary.dropdown-toggle{background-color:#3e404c;}
.btn-group.open .btn-warning.dropdown-toggle{background-color:#f89406;}
.btn-group.open .btn-danger.dropdown-toggle{background-color:#bd362f;}
.btn-group.open .btn-success.dropdown-toggle{background-color:#51a351;}
.btn-group.open .btn-info.dropdown-toggle{background-color:#2f96b4;}
.btn-group.open .btn-inverse.dropdown-toggle{background-color:#222;}
.btn .caret{margin-top:8px;margin-left:0;}
.btn-large .caret{margin-top:6px;}
.btn-large .caret{border-left-width:5px;border-right-width:5px;border-top-width:5px;}
.btn-mini .caret, .btn-small .caret{margin-top:8px;}
.dropup .btn-large .caret{border-bottom-width:5px;}
.btn-primary .caret, .btn-warning .caret, .btn-danger .caret, .btn-info .caret, .btn-success .caret, .btn-inverse .caret{border-top-color:#fff;border-bottom-color:#fff;}
.btn-group-vertical{display:inline-block;*display:inline;*zoom:1;}
.btn-group-vertical > .btn{display:block;float:none;max-width:100%;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;}
.btn-group-vertical > .btn + .btn{margin-left:0;margin-top:-1px;}
.btn-group-vertical > .btn:first-child{-webkit-border-radius:4px 4px 0 0;-moz-border-radius:4px 4px 0 0;border-radius:4px 4px 0 0;}
.btn-group-vertical > .btn:last-child{-webkit-border-radius:0 0 4px 4px;-moz-border-radius:0 0 4px 4px;border-radius:0 0 4px 4px;}
.btn-group-vertical > .btn-large:first-child{-webkit-border-radius:6px 6px 0 0;-moz-border-radius:6px 6px 0 0;border-radius:6px 6px 0 0;}
.btn-group-vertical > .btn-large:last-child{-webkit-border-radius:0 0 6px 6px;-moz-border-radius:0 0 6px 6px;border-radius:0 0 6px 6px;}
.alert{padding:8px 35px 8px 14px;margin-bottom:23px;text-shadow:0 1px 0 rgba(255,255,255,0.5);background-color:#fcf8e3;border:1px solid #fbeed5;-webkit-border-radius:4px;-moz-border-radius:4px;border-radius:4px;}
.alert, .alert h4{color:#c09853;}
.alert h4{margin:0;}
.alert .close{position:relative;top:-2px;right:-21px;line-height:23px;}
.alert-success{background-color:#dff0d8;border-color:#d6e9c6;color:#468847;}
.alert-success h4{color:#468847;}
.alert-danger, .alert-error{background-color:#f2dede;border-color:#eed3d7;color:#b94a48;}
.alert-danger h4, .alert-error h4{color:#b94a48;}
.alert-info{background-color:#d9edf7;border-color:#bce8f1;color:#3a87ad;}
.alert-info h4{color:#3a87ad;}
.alert-block{padding-top:14px;padding-bottom:14px;}
.alert-block > p, .alert-block > ul{margin-bottom:0;}
.alert-block p + p{margin-top:5px;}
.nav{margin-left:0;margin-bottom:23px;list-style:none;}
.nav > li > a{display:block;}
.nav > li > a:hover, .nav > li > a:focus{text-decoration:none;background-color:#f5f5f6;}
.nav > li > a > img{max-width:none;}
.nav > .pull-right{float:right;}
.nav-header{display:block;padding:3px 15px;font-size:11px;font-weight:bold;line-height:23px;color:#bbbaba;text-shadow:0 1px 0 rgba(255,255,255,0.5);text-transform:uppercase;}
.nav li + .nav-header{margin-top:9px;}
.nav-list{padding-left:15px;padding-right:15px;margin-bottom:0;}
.nav-list > li > a, .nav-list .nav-header{margin-left:-15px;margin-right:-15px;text-shadow:0 1px 0 rgba(255,255,255,0.5);}
.nav-list > li > a{padding:3px 15px;}
.nav-list > .active > a, .nav-list > .active > a:hover, .nav-list > .active > a:focus{color:#fff;text-shadow:0 -1px 0 rgba(0,0,0,0.2);background-color:#3e454c;}
.nav-list [class^="icon-"], .nav-list [class*=" icon-"]{margin-right:2px;}
.nav-list .divider{*width:100%;height:1px;margin:10.5px 1px;*margin:-5px 0 5px;overflow:hidden;background-color:#e5e5e5;border-bottom:1px solid #fff;}
.nav-tabs, .nav-pills{*zoom:1;}
.nav-tabs:before, .nav-tabs:after, .nav-pills:before, .nav-pills:after{display:table;content:"";line-height:0;}
.nav-tabs:after, .nav-pills:after{clear:both;}
.nav-tabs > li, .nav-pills > li{float:left;}
.nav-tabs > li > a, .nav-pills > li > a{padding-right:12px;padding-left:12px;margin-right:2px;line-height:14px;}
.nav-tabs{border-bottom:1px solid #ddd;}
.nav-tabs > li{margin-bottom:-1px;}
.nav-tabs > li > a{padding-top:8px;padding-bottom:8px;line-height:23px;border:1px solid transparent;-webkit-border-radius:4px 4px 0 0;-moz-border-radius:4px 4px 0 0;border-radius:4px 4px 0 0;}
.nav-tabs > li > a:hover, .nav-tabs > li > a:focus{border-color:#f5f5f6 #f5f5f6 #ddd;}
.nav-tabs > .active > a, .nav-tabs > .active > a:hover, .nav-tabs > .active > a:focus{color:#3e454c;background-color:#fff;border:1px solid #ddd;border-bottom-color:transparent;cursor:default;}
.nav-pills > li > a{padding-top:8px;padding-bottom:8px;margin-top:2px;margin-bottom:2px;-webkit-border-radius:5px;-moz-border-radius:5px;border-radius:5px;}
.nav-pills > .active > a, .nav-pills > .active > a:hover, .nav-pills > .active > a:focus{color:#fff;background-color:#3e454c;}
.nav-stacked > li{float:none;}
.nav-stacked > li > a{margin-right:0;}
.nav-tabs.nav-stacked{border-bottom:0;}
.nav-tabs.nav-stacked > li > a{border:1px solid #ddd;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;}
.nav-tabs.nav-stacked > li:first-child > a{-webkit-border-top-right-radius:4px;-moz-border-radius-topright:4px;border-top-right-radius:4px;-webkit-border-top-left-radius:4px;-moz-border-radius-topleft:4px;border-top-left-radius:4px;}
.nav-tabs.nav-stacked > li:last-child > a{-webkit-border-bottom-right-radius:4px;-moz-border-radius-bottomright:4px;border-bottom-right-radius:4px;-webkit-border-bottom-left-radius:4px;-moz-border-radius-bottomleft:4px;border-bottom-left-radius:4px;}
.nav-tabs.nav-stacked > li > a:hover, .nav-tabs.nav-stacked > li > a:focus{border-color:#ddd;z-index:2;}
.nav-pills.nav-stacked > li > a{margin-bottom:3px;}
.nav-pills.nav-stacked > li:last-child > a{margin-bottom:1px;}
.nav-tabs .dropdown-menu{-webkit-border-radius:0 0 6px 6px;-moz-border-radius:0 0 6px 6px;border-radius:0 0 6px 6px;}
.nav-pills .dropdown-menu{-webkit-border-radius:6px;-moz-border-radius:6px;border-radius:6px;}
.nav .dropdown-toggle .caret{border-top-color:#3e454c;border-bottom-color:#3e454c;margin-top:6px;}
.nav .dropdown-toggle:hover .caret, .nav .dropdown-toggle:focus .caret{border-top-color:#3498db;border-bottom-color:#3498db;}
.nav-tabs .dropdown-toggle .caret{margin-top:8px;}
.nav .active .dropdown-toggle .caret{border-top-color:#fff;border-bottom-color:#fff;}
.nav-tabs .active .dropdown-toggle .caret{border-top-color:#3e454c;border-bottom-color:#3e454c;}
.nav > .dropdown.active > a:hover, .nav > .dropdown.active > a:focus{cursor:pointer;}
.nav-tabs .open .dropdown-toggle, .nav-pills .open .dropdown-toggle, .nav > li.dropdown.open.active > a:hover, .nav > li.dropdown.open.active > a:focus{color:#fff;background-color:#bbbaba;border-color:#bbbaba;}
.nav li.dropdown.open .caret, .nav li.dropdown.open.active .caret, .nav li.dropdown.open a:hover .caret, .nav li.dropdown.open a:focus .caret{border-top-color:#fff;border-bottom-color:#fff;opacity:1;filter:alpha(opacity=100);}
.tabs-stacked .open > a:hover, .tabs-stacked .open > a:focus{border-color:#bbbaba;}
.tabbable{*zoom:1;}
.tabbable:before, .tabbable:after{display:table;content:"";line-height:0;}
.tabbable:after{clear:both;}
.tab-content{overflow:auto;}
.tabs-below > .nav-tabs, .tabs-right > .nav-tabs, .tabs-left > .nav-tabs{border-bottom:0;}
.tab-content > .tab-pane, .pill-content > .pill-pane{display:none;}
.tab-content > .active, .pill-content > .active{display:block;}
.tabs-below > .nav-tabs{border-top:1px solid #ddd;}
.tabs-below > .nav-tabs > li{margin-top:-1px;margin-bottom:0;}
.tabs-below > .nav-tabs > li > a{-webkit-border-radius:0 0 4px 4px;-moz-border-radius:0 0 4px 4px;border-radius:0 0 4px 4px;}
.tabs-below > .nav-tabs > li > a:hover, .tabs-below > .nav-tabs > li > a:focus{border-bottom-color:transparent;border-top-color:#ddd;}
.tabs-below > .nav-tabs > .active > a, .tabs-below > .nav-tabs > .active > a:hover, .tabs-below > .nav-tabs > .active > a:focus{border-color:transparent #ddd #ddd #ddd;}
.tabs-left > .nav-tabs > li, .tabs-right > .nav-tabs > li{float:none;}
.tabs-left > .nav-tabs > li > a, .tabs-right > .nav-tabs > li > a{min-width:74px;margin-right:0;margin-bottom:3px;}
.tabs-left > .nav-tabs{float:left;margin-right:19px;border-right:1px solid #ddd;}
.tabs-left > .nav-tabs > li > a{margin-right:-1px;-webkit-border-radius:4px 0 0 4px;-moz-border-radius:4px 0 0 4px;border-radius:4px 0 0 4px;}
.tabs-left > .nav-tabs > li > a:hover, .tabs-left > .nav-tabs > li > a:focus{border-color:#f5f5f6 #ddd #f5f5f6 #f5f5f6;}
.tabs-left > .nav-tabs .active > a, .tabs-left > .nav-tabs .active > a:hover, .tabs-left > .nav-tabs .active > a:focus{border-color:#ddd transparent #ddd #ddd;*border-right-color:#fff;}
.tabs-right > .nav-tabs{float:right;margin-left:19px;border-left:1px solid #ddd;}
.tabs-right > .nav-tabs > li > a{margin-left:-1px;-webkit-border-radius:0 4px 4px 0;-moz-border-radius:0 4px 4px 0;border-radius:0 4px 4px 0;}
.tabs-right > .nav-tabs > li > a:hover, .tabs-right > .nav-tabs > li > a:focus{border-color:#f5f5f6 #f5f5f6 #f5f5f6 #ddd;}
.tabs-right > .nav-tabs .active > a, .tabs-right > .nav-tabs .active > a:hover, .tabs-right > .nav-tabs .active > a:focus{border-color:#ddd #ddd #ddd transparent;*border-left-color:#fff;}
.nav > .disabled > a{color:#bbbaba;}
.nav > .disabled > a:hover, .nav > .disabled > a:focus{text-decoration:none;background-color:transparent;cursor:default;}
.navbar{overflow:visible;margin-bottom:23px;*position:relative;*z-index:2;}
.navbar-inner{min-height:40px;padding-left:20px;padding-right:20px;background-color:#fafafa;background-image:-moz-linear-gradient(top,#ffffff,#f2f2f2);background-image:-webkit-gradient(linear,0 0,0 100%,from(#ffffff),to(#f2f2f2));background-image:-webkit-linear-gradient(top,#ffffff,#f2f2f2);background-image:-o-linear-gradient(top,#ffffff,#f2f2f2);background-image:linear-gradient(to bottom,#ffffff,#f2f2f2);background-repeat:repeat-x;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffffff', endColorstr='#fff2f2f2', GradientType=0);border:1px solid #d4d4d4;-webkit-border-radius:4px;-moz-border-radius:4px;border-radius:4px;-webkit-box-shadow:0 1px 4px rgba(0,0,0,0.065);-moz-box-shadow:0 1px 4px rgba(0,0,0,0.065);box-shadow:0 1px 4px rgba(0,0,0,0.065);*zoom:1;}
.navbar-inner:before, .navbar-inner:after{display:table;content:"";line-height:0;}
.navbar-inner:after{clear:both;}
.navbar .container{width:auto;}
.nav-collapse.collapse{height:auto;overflow:visible;}
.navbar .brand{float:left;display:block;padding:8.5px 20px 8.5px;margin-left:-20px;font-size:20px;font-weight:200;color:#777;text-shadow:0 1px 0 #ffffff;}
.navbar .brand:hover, .navbar .brand:focus{text-decoration:none;}
.navbar-text{margin-bottom:0;line-height:40px;color:#777;}
.navbar-link{color:#777;}
.navbar-link:hover, .navbar-link:focus{color:#272a31;}
.navbar .divider-vertical{height:40px;margin:0 9px;border-left:1px solid #f2f2f2;border-right:1px solid #ffffff;}
.navbar .btn, .navbar .btn-group{margin-top:5px;}
.navbar .btn-group .btn, .navbar .input-prepend .btn, .navbar .input-append .btn, .navbar .input-prepend .btn-group, .navbar .input-append .btn-group{margin-top:0;}
.navbar-form{margin-bottom:0;*zoom:1;}
.navbar-form:before, .navbar-form:after{display:table;content:"";line-height:0;}
.navbar-form:after{clear:both;}
.navbar-form input, .navbar-form select, .navbar-form .radio, .navbar-form .checkbox{margin-top:5px;}
.navbar-form input, .navbar-form select, .navbar-form .btn{display:inline-block;margin-bottom:0;}
.navbar-form input[type="image"], .navbar-form input[type="checkbox"], .navbar-form input[type="radio"]{margin-top:3px;}
.navbar-form .input-append, .navbar-form .input-prepend{margin-top:5px;white-space:nowrap;}
.navbar-form .input-append input, .navbar-form .input-prepend input{margin-top:0;}
.navbar-search{position:relative;float:left;margin-top:5px;margin-bottom:0;}
.navbar-search .search-query{margin-bottom:0;padding:4px 14px;font-family:"Helvetica Neue", Helvetica, Arial, sans-serif;font-size:13px;font-weight:normal;line-height:1;-webkit-border-radius:15px;-moz-border-radius:15px;border-radius:15px;}
.navbar-static-top{position:static;margin-bottom:0;}
.navbar-static-top .navbar-inner{-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;}
.navbar-fixed-top, .navbar-fixed-bottom{position:fixed;right:0;left:0;z-index:1030;margin-bottom:0;}
.navbar-fixed-top .navbar-inner, .navbar-static-top .navbar-inner{border-width:0 0 1px;}
.navbar-fixed-bottom .navbar-inner{border-width:1px 0 0;}
.navbar-fixed-top .navbar-inner, .navbar-fixed-bottom .navbar-inner{padding-left:0;padding-right:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;}
.navbar-static-top .container, .navbar-fixed-top .container, .navbar-fixed-bottom .container{width:940px;}
.navbar-fixed-top{top:0;}
.navbar-fixed-top .navbar-inner, .navbar-static-top .navbar-inner{-webkit-box-shadow:0 1px 10px rgba(0,0,0,.1);-moz-box-shadow:0 1px 10px rgba(0,0,0,.1);box-shadow:0 1px 10px rgba(0,0,0,.1);}
.navbar-fixed-bottom{bottom:0;}
.navbar-fixed-bottom .navbar-inner{-webkit-box-shadow:0 -1px 10px rgba(0,0,0,.1);-moz-box-shadow:0 -1px 10px rgba(0,0,0,.1);box-shadow:0 -1px 10px rgba(0,0,0,.1);}
.navbar .nav{position:relative;left:0;display:block;float:left;margin:0 10px 0 0;}
.navbar .nav.pull-right{float:right;margin-right:0;}
.navbar .nav > li{float:left;}
.navbar .nav > li > a{float:none;padding:8.5px 15px 8.5px;color:#777;text-decoration:none;text-shadow:0 1px 0 #ffffff;}
.navbar .nav .dropdown-toggle .caret{margin-top:8px;}
.navbar .nav > li > a:focus, .navbar .nav > li > a:hover{background-color:transparent;color:#272a31;text-decoration:none;}
.navbar .nav > .active > a, .navbar .nav > .active > a:hover, .navbar .nav > .active > a:focus{color:#3e454c;text-decoration:none;background-color:#e6e6e6;-webkit-box-shadow:inset 0 3px 8px rgba(0,0,0,0.125);-moz-box-shadow:inset 0 3px 8px rgba(0,0,0,0.125);box-shadow:inset 0 3px 8px rgba(0,0,0,0.125);}
.navbar .btn-navbar{display:none;float:right;padding:7px 10px;margin-left:5px;margin-right:5px;color:#fff;text-shadow:0 -1px 0 rgba(0,0,0,0.25);background-color:#ededed;background-image:-moz-linear-gradient(top,#f2f2f2,#e6e6e6);background-image:-webkit-gradient(linear,0 0,0 100%,from(#f2f2f2),to(#e6e6e6));background-image:-webkit-linear-gradient(top,#f2f2f2,#e6e6e6);background-image:-o-linear-gradient(top,#f2f2f2,#e6e6e6);background-image:linear-gradient(to bottom,#f2f2f2,#e6e6e6);background-repeat:repeat-x;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#fff2f2f2', endColorstr='#ffe5e5e5', GradientType=0);border-color:#e6e6e6 #e6e6e6 #bfbfbf;border-color:rgba(0,0,0,0.1) rgba(0,0,0,0.1) rgba(0,0,0,0.25);*background-color:#e6e6e6;filter:progid:DXImageTransform.Microsoft.gradient(enabled = false);-webkit-box-shadow:inset 0 1px 0 rgba(255,255,255,.1), 0 1px 0 rgba(255,255,255,.075);-moz-box-shadow:inset 0 1px 0 rgba(255,255,255,.1), 0 1px 0 rgba(255,255,255,.075);box-shadow:inset 0 1px 0 rgba(255,255,255,.1), 0 1px 0 rgba(255,255,255,.075);}
.navbar .btn-navbar:hover, .navbar .btn-navbar:focus, .navbar .btn-navbar:active, .navbar .btn-navbar.active, .navbar .btn-navbar.disabled, .navbar .btn-navbar[disabled]{color:#fff;background-color:#e6e6e6;*background-color:#d9d9d9;}
.navbar .btn-navbar:active, .navbar .btn-navbar.active{background-color:#cccccc \9;}
.navbar .btn-navbar .icon-bar{display:block;width:18px;height:2px;background-color:#f5f5f5;-webkit-border-radius:1px;-moz-border-radius:1px;border-radius:1px;-webkit-box-shadow:0 1px 0 rgba(0,0,0,0.25);-moz-box-shadow:0 1px 0 rgba(0,0,0,0.25);box-shadow:0 1px 0 rgba(0,0,0,0.25);}
.btn-navbar .icon-bar + .icon-bar{margin-top:3px;}
.navbar .nav > li > .dropdown-menu:before{content:'';display:inline-block;border-left:7px solid transparent;border-right:7px solid transparent;border-bottom:7px solid #ccc;border-bottom-color:rgba(0,0,0,0.2);position:absolute;top:-7px;left:9px;}
.navbar .nav > li > .dropdown-menu:after{content:'';display:inline-block;border-left:6px solid transparent;border-right:6px solid transparent;border-bottom:6px solid #fff;position:absolute;top:-6px;left:10px;}
.navbar-fixed-bottom .nav > li > .dropdown-menu:before{border-top:7px solid #ccc;border-top-color:rgba(0,0,0,0.2);border-bottom:0;bottom:-7px;top:auto;}
.navbar-fixed-bottom .nav > li > .dropdown-menu:after{border-top:6px solid #fff;border-bottom:0;bottom:-6px;top:auto;}
.navbar .nav li.dropdown > a:hover .caret, .navbar .nav li.dropdown > a:focus .caret{border-top-color:#272a31;border-bottom-color:#272a31;}
.navbar .nav li.dropdown.open > .dropdown-toggle, .navbar .nav li.dropdown.active > .dropdown-toggle, .navbar .nav li.dropdown.open.active > .dropdown-toggle{background-color:#e6e6e6;color:#3e454c;}
.navbar .nav li.dropdown > .dropdown-toggle .caret{border-top-color:#777;border-bottom-color:#777;}
.navbar .nav li.dropdown.open > .dropdown-toggle .caret, .navbar .nav li.dropdown.active > .dropdown-toggle .caret, .navbar .nav li.dropdown.open.active > .dropdown-toggle .caret{border-top-color:#3e454c;border-bottom-color:#3e454c;}
.navbar .pull-right > li > .dropdown-menu, .navbar .nav > li > .dropdown-menu.pull-right{left:auto;right:0;}
.navbar .pull-right > li > .dropdown-menu:before, .navbar .nav > li > .dropdown-menu.pull-right:before{left:auto;right:12px;}
.navbar .pull-right > li > .dropdown-menu:after, .navbar .nav > li > .dropdown-menu.pull-right:after{left:auto;right:13px;}
.navbar .pull-right > li > .dropdown-menu .dropdown-menu, .navbar .nav > li > .dropdown-menu.pull-right .dropdown-menu{left:auto;right:100%;margin-left:0;margin-right:-1px;-webkit-border-radius:6px 0 6px 6px;-moz-border-radius:6px 0 6px 6px;border-radius:6px 0 6px 6px;}
.navbar-inverse .navbar-inner{background-color:#1b1b1b;background-image:-moz-linear-gradient(top,#222222,#111111);background-image:-webkit-gradient(linear,0 0,0 100%,from(#222222),to(#111111));background-image:-webkit-linear-gradient(top,#222222,#111111);background-image:-o-linear-gradient(top,#222222,#111111);background-image:linear-gradient(to bottom,#222222,#111111);background-repeat:repeat-x;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff222222', endColorstr='#ff111111', GradientType=0);border-color:#252525;}
.navbar-inverse .brand, .navbar-inverse .nav > li > a{color:#bbbaba;text-shadow:0 -1px 0 rgba(0,0,0,0.25);}
.navbar-inverse .brand:hover, .navbar-inverse .brand:focus, .navbar-inverse .nav > li > a:hover, .navbar-inverse .nav > li > a:focus{color:#fff;}
.navbar-inverse .brand{color:#bbbaba;}
.navbar-inverse .navbar-text{color:#bbbaba;}
.navbar-inverse .nav > li > a:focus, .navbar-inverse .nav > li > a:hover{background-color:transparent;color:#fff;}
.navbar-inverse .nav .active > a, .navbar-inverse .nav .active > a:hover, .navbar-inverse .nav .active > a:focus{color:#fff;background-color:#111111;}
.navbar-inverse .navbar-link{color:#bbbaba;}
.navbar-inverse .navbar-link:hover, .navbar-inverse .navbar-link:focus{color:#fff;}
.navbar-inverse .divider-vertical{border-left-color:#111111;border-right-color:#222222;}
.navbar-inverse .nav li.dropdown.open > .dropdown-toggle, .navbar-inverse .nav li.dropdown.active > .dropdown-toggle, .navbar-inverse .nav li.dropdown.open.active > .dropdown-toggle{background-color:#111111;color:#fff;}
.navbar-inverse .nav li.dropdown > a:hover .caret, .navbar-inverse .nav li.dropdown > a:focus .caret{border-top-color:#fff;border-bottom-color:#fff;}
.navbar-inverse .nav li.dropdown > .dropdown-toggle .caret{border-top-color:#bbbaba;border-bottom-color:#bbbaba;}
.navbar-inverse .nav li.dropdown.open > .dropdown-toggle .caret, .navbar-inverse .nav li.dropdown.active > .dropdown-toggle .caret, .navbar-inverse .nav li.dropdown.open.active > .dropdown-toggle .caret{border-top-color:#fff;border-bottom-color:#fff;}
.navbar-inverse .navbar-search .search-query{color:#fff;background-color:#515151;border-color:#111111;-webkit-box-shadow:inset 0 1px 2px rgba(0,0,0,.1), 0 1px 0 rgba(255,255,255,.15);-moz-box-shadow:inset 0 1px 2px rgba(0,0,0,.1), 0 1px 0 rgba(255,255,255,.15);box-shadow:inset 0 1px 2px rgba(0,0,0,.1), 0 1px 0 rgba(255,255,255,.15);-webkit-transition:none;-moz-transition:none;-o-transition:none;transition:none;}
.navbar-inverse .navbar-search .search-query:-moz-placeholder{color:#ccc;}
.navbar-inverse .navbar-search .search-query:-ms-input-placeholder{color:#ccc;}
.navbar-inverse .navbar-search .search-query::-webkit-input-placeholder{color:#ccc;}
.navbar-inverse .navbar-search .search-query:focus, .navbar-inverse .navbar-search .search-query.focused{padding:5px 15px;color:#272a31;text-shadow:0 1px 0 #fff;background-color:#fff;border:0;-webkit-box-shadow:0 0 3px rgba(0,0,0,0.15);-moz-box-shadow:0 0 3px rgba(0,0,0,0.15);box-shadow:0 0 3px rgba(0,0,0,0.15);outline:0;}
.navbar-inverse .btn-navbar{color:#fff;text-shadow:0 -1px 0 rgba(0,0,0,0.25);background-color:#0e0e0e;background-image:-moz-linear-gradient(top,#151515,#040404);background-image:-webkit-gradient(linear,0 0,0 100%,from(#151515),to(#040404));background-image:-webkit-linear-gradient(top,#151515,#040404);background-image:-o-linear-gradient(top,#151515,#040404);background-image:linear-gradient(to bottom,#151515,#040404);background-repeat:repeat-x;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff151515', endColorstr='#ff040404', GradientType=0);border-color:#040404 #040404 #000000;border-color:rgba(0,0,0,0.1) rgba(0,0,0,0.1) rgba(0,0,0,0.25);*background-color:#040404;filter:progid:DXImageTransform.Microsoft.gradient(enabled = false);}
.navbar-inverse .btn-navbar:hover, .navbar-inverse .btn-navbar:focus, .navbar-inverse .btn-navbar:active, .navbar-inverse .btn-navbar.active, .navbar-inverse .btn-navbar.disabled, .navbar-inverse .btn-navbar[disabled]{color:#fff;background-color:#040404;*background-color:#000000;}
.navbar-inverse .btn-navbar:active, .navbar-inverse .btn-navbar.active{background-color:#000000 \9;}
.breadcrumb{padding:8px 15px;margin:0 0 23px;list-style:none;background-color:#f5f5f5;-webkit-border-radius:4px;-moz-border-radius:4px;border-radius:4px;}
.breadcrumb > li{display:inline-block;*display:inline;*zoom:1;text-shadow:0 1px 0 #fff;}
.breadcrumb > li > .divider{padding:0 5px;color:#ccc;}
.breadcrumb > .active{color:#bbbaba;}
.pagination{margin:23px 0;}
.pagination ul{display:inline-block;*display:inline;*zoom:1;margin-left:0;margin-bottom:0;-webkit-border-radius:4px;-moz-border-radius:4px;border-radius:4px;-webkit-box-shadow:0 1px 2px rgba(0,0,0,0.05);-moz-box-shadow:0 1px 2px rgba(0,0,0,0.05);box-shadow:0 1px 2px rgba(0,0,0,0.05);}
.pagination ul > li{display:inline;}
.pagination ul > li > a, .pagination ul > li > span{float:left;padding:4px 12px;line-height:23px;text-decoration:none;background-color:#fff;border:1px solid #ddd;border-left-width:0;}
.pagination ul > li > a:hover, .pagination ul > li > a:focus, .pagination ul > .active > a, .pagination ul > .active > span{background-color:#f5f5f5;}
.pagination ul > .active > a, .pagination ul > .active > span{color:#bbbaba;cursor:default;}
.pagination ul > .disabled > span, .pagination ul > .disabled > a, .pagination ul > .disabled > a:hover, .pagination ul > .disabled > a:focus{color:#bbbaba;background-color:transparent;cursor:default;}
.pagination ul > li:first-child > a, .pagination ul > li:first-child > span{border-left-width:1px;-webkit-border-top-left-radius:4px;-moz-border-radius-topleft:4px;border-top-left-radius:4px;-webkit-border-bottom-left-radius:4px;-moz-border-radius-bottomleft:4px;border-bottom-left-radius:4px;}
.pagination ul > li:last-child > a, .pagination ul > li:last-child > span{-webkit-border-top-right-radius:4px;-moz-border-radius-topright:4px;border-top-right-radius:4px;-webkit-border-bottom-right-radius:4px;-moz-border-radius-bottomright:4px;border-bottom-right-radius:4px;}
.pagination-centered{text-align:center;}
.pagination-right{text-align:right;}
.pagination-large ul > li > a, .pagination-large ul > li > span{padding:11px 19px;font-size:17.5px;}
.pagination-large ul > li:first-child > a, .pagination-large ul > li:first-child > span{-webkit-border-top-left-radius:6px;-moz-border-radius-topleft:6px;border-top-left-radius:6px;-webkit-border-bottom-left-radius:6px;-moz-border-radius-bottomleft:6px;border-bottom-left-radius:6px;}
.pagination-large ul > li:last-child > a, .pagination-large ul > li:last-child > span{-webkit-border-top-right-radius:6px;-moz-border-radius-topright:6px;border-top-right-radius:6px;-webkit-border-bottom-right-radius:6px;-moz-border-radius-bottomright:6px;border-bottom-right-radius:6px;}
.pagination-mini ul > li:first-child > a, .pagination-mini ul > li:first-child > span, .pagination-small ul > li:first-child > a, .pagination-small ul > li:first-child > span{-webkit-border-top-left-radius:3px;-moz-border-radius-topleft:3px;border-top-left-radius:3px;-webkit-border-bottom-left-radius:3px;-moz-border-radius-bottomleft:3px;border-bottom-left-radius:3px;}
.pagination-mini ul > li:last-child > a, .pagination-mini ul > li:last-child > span, .pagination-small ul > li:last-child > a, .pagination-small ul > li:last-child > span{-webkit-border-top-right-radius:3px;-moz-border-radius-topright:3px;border-top-right-radius:3px;-webkit-border-bottom-right-radius:3px;-moz-border-radius-bottomright:3px;border-bottom-right-radius:3px;}
.pagination-small ul > li > a, .pagination-small ul > li > span{padding:2px 10px;font-size:11.9px;}
.pagination-mini ul > li > a, .pagination-mini ul > li > span{padding:0 6px;font-size:10.5px;}
.pager{margin:23px 0;list-style:none;text-align:center;*zoom:1;}
.pager:before, .pager:after{display:table;content:"";line-height:0;}
.pager:after{clear:both;}
.pager li{display:inline;}
.pager li > a, .pager li > span{display:inline-block;padding:5px 14px;background-color:#fff;border:1px solid #ddd;-webkit-border-radius:15px;-moz-border-radius:15px;border-radius:15px;}
.pager li > a:hover, .pager li > a:focus{text-decoration:none;background-color:#f5f5f5;}
.pager .next > a, .pager .next > span{float:right;}
.pager .previous > a, .pager .previous > span{float:left;}
.pager .disabled > a, .pager .disabled > a:hover, .pager .disabled > a:focus, .pager .disabled > span{color:#bbbaba;background-color:#fff;cursor:default;}
.modal-backdrop{position:fixed;top:0;right:0;bottom:0;left:0;z-index:1040;background-color:#000;}
.modal-backdrop.fade{opacity:0;}
.modal-backdrop, .modal-backdrop.fade.in{opacity:0.8;filter:alpha(opacity=80);}
.modal{position:fixed;top:10%;left:50%;z-index:1050;width:560px;margin-left:-280px;background-color:#fff;border:1px solid #999;border:1px solid rgba(0,0,0,0.3);*border:1px solid #999;-webkit-border-radius:6px;-moz-border-radius:6px;border-radius:6px;-webkit-box-shadow:0 3px 7px rgba(0,0,0,0.3);-moz-box-shadow:0 3px 7px rgba(0,0,0,0.3);box-shadow:0 3px 7px rgba(0,0,0,0.3);-webkit-background-clip:padding-box;-moz-background-clip:padding-box;background-clip:padding-box;outline:none;}
.modal.fade{-webkit-transition:opacity .3s linear, top .3s ease-out;-moz-transition:opacity .3s linear, top .3s ease-out;-o-transition:opacity .3s linear, top .3s ease-out;transition:opacity .3s linear, top .3s ease-out;top:-25%;}
.modal.fade.in{top:10%;}
.modal-header{padding:9px 15px;border-bottom:1px solid #eee;}
.modal-header .close{margin-top:2px;}
.modal-header h3{margin:0;line-height:30px;}
.modal-body{position:relative;overflow-y:auto;max-height:400px;padding:15px;}
.modal-form{margin-bottom:0;}
.modal-footer{padding:14px 15px 15px;margin-bottom:0;text-align:right;background-color:#f5f5f5;border-top:1px solid #ddd;-webkit-border-radius:0 0 6px 6px;-moz-border-radius:0 0 6px 6px;border-radius:0 0 6px 6px;-webkit-box-shadow:inset 0 1px 0 #fff;-moz-box-shadow:inset 0 1px 0 #fff;box-shadow:inset 0 1px 0 #fff;*zoom:1;}
.modal-footer:before, .modal-footer:after{display:table;content:"";line-height:0;}
.modal-footer:after{clear:both;}
.modal-footer .btn + .btn{margin-left:5px;margin-bottom:0;}
.modal-footer .btn-group .btn + .btn{margin-left:-1px;}
.modal-footer .btn-block + .btn-block{margin-left:0;}
.tooltip{position:absolute;z-index:1030;display:block;visibility:visible;font-size:11px;line-height:1.4;opacity:0;filter:alpha(opacity=0);}
.tooltip.in{opacity:0.8;filter:alpha(opacity=80);}
.tooltip.top{margin-top:-3px;padding:5px 0;}
.tooltip.right{margin-left:3px;padding:0 5px;}
.tooltip.bottom{margin-top:3px;padding:5px 0;}
.tooltip.left{margin-left:-3px;padding:0 5px;}
.tooltip-inner{max-width:200px;padding:8px;color:#fff;text-align:center;text-decoration:none;background-color:#000;-webkit-border-radius:4px;-moz-border-radius:4px;border-radius:4px;}
.tooltip-arrow{position:absolute;width:0;height:0;border-color:transparent;border-style:solid;}
.tooltip.top .tooltip-arrow{bottom:0;left:50%;margin-left:-5px;border-width:5px 5px 0;border-top-color:#000;}
.tooltip.right .tooltip-arrow{top:50%;left:0;margin-top:-5px;border-width:5px 5px 5px 0;border-right-color:#000;}
.tooltip.left .tooltip-arrow{top:50%;right:0;margin-top:-5px;border-width:5px 0 5px 5px;border-left-color:#000;}
.tooltip.bottom .tooltip-arrow{top:0;left:50%;margin-left:-5px;border-width:0 5px 5px;border-bottom-color:#000;}
.popover{position:absolute;top:0;left:0;z-index:1010;display:none;max-width:276px;padding:1px;text-align:left;background-color:#fff;-webkit-background-clip:padding-box;-moz-background-clip:padding;background-clip:padding-box;border:1px solid #ccc;border:1px solid rgba(0,0,0,0.2);-webkit-border-radius:6px;-moz-border-radius:6px;border-radius:6px;-webkit-box-shadow:0 5px 10px rgba(0,0,0,0.2);-moz-box-shadow:0 5px 10px rgba(0,0,0,0.2);box-shadow:0 5px 10px rgba(0,0,0,0.2);white-space:normal;}
.popover.top{margin-top:-10px;}
.popover.right{margin-left:10px;}
.popover.bottom{margin-top:10px;}
.popover.left{margin-left:-10px;}
.popover-title{margin:0;padding:8px 14px;font-size:14px;font-weight:normal;line-height:18px;background-color:#f7f7f7;border-bottom:1px solid #ebebeb;-webkit-border-radius:5px 5px 0 0;-moz-border-radius:5px 5px 0 0;border-radius:5px 5px 0 0;}
.popover-title:empty{display:none;}
.popover-content{padding:9px 14px;}
.popover .arrow, .popover .arrow:after{position:absolute;display:block;width:0;height:0;border-color:transparent;border-style:solid;}
.popover .arrow{border-width:11px;}
.popover .arrow:after{border-width:10px;content:"";}
.popover.top .arrow{left:50%;margin-left:-11px;border-bottom-width:0;border-top-color:#999;border-top-color:rgba(0,0,0,0.25);bottom:-11px;}
.popover.top .arrow:after{bottom:1px;margin-left:-10px;border-bottom-width:0;border-top-color:#fff;}
.popover.right .arrow{top:50%;left:-11px;margin-top:-11px;border-left-width:0;border-right-color:#999;border-right-color:rgba(0,0,0,0.25);}
.popover.right .arrow:after{left:1px;bottom:-10px;border-left-width:0;border-right-color:#fff;}
.popover.bottom .arrow{left:50%;margin-left:-11px;border-top-width:0;border-bottom-color:#999;border-bottom-color:rgba(0,0,0,0.25);top:-11px;}
.popover.bottom .arrow:after{top:1px;margin-left:-10px;border-top-width:0;border-bottom-color:#fff;}
.popover.left .arrow{top:50%;right:-11px;margin-top:-11px;border-right-width:0;border-left-color:#999;border-left-color:rgba(0,0,0,0.25);}
.popover.left .arrow:after{right:1px;border-right-width:0;border-left-color:#fff;bottom:-10px;}
.thumbnails{margin-left:-20px;list-style:none;*zoom:1;}
.thumbnails:before, .thumbnails:after{display:table;content:"";line-height:0;}
.thumbnails:after{clear:both;}
.row-fluid .thumbnails{margin-left:0;}
.thumbnails > li{float:left;margin-bottom:23px;margin-left:20px;}
.thumbnail{display:block;padding:4px;line-height:23px;border:1px solid #ddd;-webkit-border-radius:4px;-moz-border-radius:4px;border-radius:4px;-webkit-box-shadow:0 1px 3px rgba(0,0,0,0.055);-moz-box-shadow:0 1px 3px rgba(0,0,0,0.055);box-shadow:0 1px 3px rgba(0,0,0,0.055);-webkit-transition:all .2s ease-in-out;-moz-transition:all .2s ease-in-out;-o-transition:all .2s ease-in-out;transition:all .2s ease-in-out;}
a.thumbnail:hover, a.thumbnail:focus{border-color:#3e454c;-webkit-box-shadow:0 1px 4px rgba(0,105,214,0.25);-moz-box-shadow:0 1px 4px rgba(0,105,214,0.25);box-shadow:0 1px 4px rgba(0,105,214,0.25);}
.thumbnail > img{display:block;max-width:100%;margin-left:auto;margin-right:auto;}
.thumbnail .caption{padding:9px;color:#3e454c;}
.media, .media-body{overflow:hidden;*overflow:visible;zoom:1;}
.media, .media .media{margin-top:15px;}
.media:first-child{margin-top:0;}
.media-object{display:block;}
.media-heading{margin:0 0 5px;}
.media > .pull-left{margin-right:10px;}
.media > .pull-right{margin-left:10px;}
.media-list{margin-left:0;list-style:none;}
.label, .badge{display:inline-block;padding:2px 4px;font-size:11.844px;font-weight:bold;line-height:14px;color:#fff;vertical-align:baseline;white-space:nowrap;text-shadow:0 -1px 0 rgba(0,0,0,0.25);background-color:#bbbaba;}
.label{-webkit-border-radius:3px;-moz-border-radius:3px;border-radius:3px;}
.badge{padding-left:9px;padding-right:9px;-webkit-border-radius:9px;-moz-border-radius:9px;border-radius:9px;}
a.label:hover, a.badge:hover{color:#fff;text-decoration:none;cursor:pointer;}
.label-important, .badge-important{background-color:#b94a48;}
.label-important[href], .badge-important[href]{background-color:#953b39;}
.label-warning, .badge-warning{background-color:#f89406;}
.label-warning[href], .badge-warning[href]{background-color:#c67605;}
.label-success, .badge-success{background-color:#468847;}
.label-success[href], .badge-success[href]{background-color:#356635;}
.label-info, .badge-info{background-color:#3a87ad;}
.label-info[href], .badge-info[href]{background-color:#2d6987;}
.label-inverse, .badge-inverse{background-color:#272a31;}
.label-inverse[href], .badge-inverse[href]{background-color:#101215;}
.btn .label, .btn .badge{position:relative;top:-1px;}
.btn-mini .label, .btn-mini .badge{top:0;}
@-webkit-keyframes progress-bar-stripes{from{background-position:40px 0;}
to{background-position:0 0;}
}
@-moz-keyframes progress-bar-stripes{from{background-position:40px 0;}
to{background-position:0 0;}
}
@-ms-keyframes progress-bar-stripes{from{background-position:40px 0;}
to{background-position:0 0;}
}
@-o-keyframes progress-bar-stripes{from{background-position:0 0;}
to{background-position:40px 0;}
}
@keyframes progress-bar-stripes{from{background-position:40px 0;}
to{background-position:0 0;}
}
.progress{overflow:hidden;height:23px;margin-bottom:23px;background-color:#f7f7f7;background-image:-moz-linear-gradient(top,#f5f5f5,#f9f9f9);background-image:-webkit-gradient(linear,0 0,0 100%,from(#f5f5f5),to(#f9f9f9));background-image:-webkit-linear-gradient(top,#f5f5f5,#f9f9f9);background-image:-o-linear-gradient(top,#f5f5f5,#f9f9f9);background-image:linear-gradient(to bottom,#f5f5f5,#f9f9f9);background-repeat:repeat-x;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#fff5f5f5', endColorstr='#fff9f9f9', GradientType=0);-webkit-box-shadow:inset 0 1px 2px rgba(0,0,0,0.1);-moz-box-shadow:inset 0 1px 2px rgba(0,0,0,0.1);box-shadow:inset 0 1px 2px rgba(0,0,0,0.1);-webkit-border-radius:4px;-moz-border-radius:4px;border-radius:4px;}
.progress .bar{width:0%;height:100%;color:#fff;float:left;font-size:12px;text-align:center;text-shadow:0 -1px 0 rgba(0,0,0,0.25);background-color:#0e90d2;background-image:-moz-linear-gradient(top,#149bdf,#0480be);background-image:-webkit-gradient(linear,0 0,0 100%,from(#149bdf),to(#0480be));background-image:-webkit-linear-gradient(top,#149bdf,#0480be);background-image:-o-linear-gradient(top,#149bdf,#0480be);background-image:linear-gradient(to bottom,#149bdf,#0480be);background-repeat:repeat-x;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff149bdf', endColorstr='#ff0480be', GradientType=0);-webkit-box-shadow:inset 0 -1px 0 rgba(0,0,0,0.15);-moz-box-shadow:inset 0 -1px 0 rgba(0,0,0,0.15);box-shadow:inset 0 -1px 0 rgba(0,0,0,0.15);-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;-webkit-transition:width .6s ease;-moz-transition:width .6s ease;-o-transition:width .6s ease;transition:width .6s ease;}
.progress .bar + .bar{-webkit-box-shadow:inset 1px 0 0 rgba(0,0,0,.15), inset 0 -1px 0 rgba(0,0,0,.15);-moz-box-shadow:inset 1px 0 0 rgba(0,0,0,.15), inset 0 -1px 0 rgba(0,0,0,.15);box-shadow:inset 1px 0 0 rgba(0,0,0,.15), inset 0 -1px 0 rgba(0,0,0,.15);}
.progress-striped .bar{background-color:#149bdf;background-image:-webkit-gradient(linear,0 100%,100% 0,color-stop(.25,rgba(255,255,255,0.15)),color-stop(.25,transparent),color-stop(.5,transparent),color-stop(.5,rgba(255,255,255,0.15)),color-stop(.75,rgba(255,255,255,0.15)),color-stop(.75,transparent),to(transparent));background-image:-webkit-linear-gradient(45deg,rgba(255,255,255,0.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.15) 50%,rgba(255,255,255,0.15) 75%,transparent 75%,transparent);background-image:-moz-linear-gradient(45deg,rgba(255,255,255,0.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.15) 50%,rgba(255,255,255,0.15) 75%,transparent 75%,transparent);background-image:-o-linear-gradient(45deg,rgba(255,255,255,0.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.15) 50%,rgba(255,255,255,0.15) 75%,transparent 75%,transparent);background-image:linear-gradient(45deg,rgba(255,255,255,0.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.15) 50%,rgba(255,255,255,0.15) 75%,transparent 75%,transparent);-webkit-background-size:40px 40px;-moz-background-size:40px 40px;-o-background-size:40px 40px;background-size:40px 40px;}
.progress.active .bar{-webkit-animation:progress-bar-stripes 2s linear infinite;-moz-animation:progress-bar-stripes 2s linear infinite;-ms-animation:progress-bar-stripes 2s linear infinite;-o-animation:progress-bar-stripes 2s linear infinite;animation:progress-bar-stripes 2s linear infinite;}
.progress-danger .bar, .progress .bar-danger{background-color:#dd514c;background-image:-moz-linear-gradient(top,#ee5f5b,#c43c35);background-image:-webkit-gradient(linear,0 0,0 100%,from(#ee5f5b),to(#c43c35));background-image:-webkit-linear-gradient(top,#ee5f5b,#c43c35);background-image:-o-linear-gradient(top,#ee5f5b,#c43c35);background-image:linear-gradient(to bottom,#ee5f5b,#c43c35);background-repeat:repeat-x;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffee5f5b', endColorstr='#ffc43c35', GradientType=0);}
.progress-danger.progress-striped .bar, .progress-striped .bar-danger{background-color:#ee5f5b;background-image:-webkit-gradient(linear,0 100%,100% 0,color-stop(.25,rgba(255,255,255,0.15)),color-stop(.25,transparent),color-stop(.5,transparent),color-stop(.5,rgba(255,255,255,0.15)),color-stop(.75,rgba(255,255,255,0.15)),color-stop(.75,transparent),to(transparent));background-image:-webkit-linear-gradient(45deg,rgba(255,255,255,0.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.15) 50%,rgba(255,255,255,0.15) 75%,transparent 75%,transparent);background-image:-moz-linear-gradient(45deg,rgba(255,255,255,0.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.15) 50%,rgba(255,255,255,0.15) 75%,transparent 75%,transparent);background-image:-o-linear-gradient(45deg,rgba(255,255,255,0.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.15) 50%,rgba(255,255,255,0.15) 75%,transparent 75%,transparent);background-image:linear-gradient(45deg,rgba(255,255,255,0.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.15) 50%,rgba(255,255,255,0.15) 75%,transparent 75%,transparent);}
.progress-success .bar, .progress .bar-success{background-color:#5eb95e;background-image:-moz-linear-gradient(top,#62c462,#57a957);background-image:-webkit-gradient(linear,0 0,0 100%,from(#62c462),to(#57a957));background-image:-webkit-linear-gradient(top,#62c462,#57a957);background-image:-o-linear-gradient(top,#62c462,#57a957);background-image:linear-gradient(to bottom,#62c462,#57a957);background-repeat:repeat-x;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff62c462', endColorstr='#ff57a957', GradientType=0);}
.progress-success.progress-striped .bar, .progress-striped .bar-success{background-color:#62c462;background-image:-webkit-gradient(linear,0 100%,100% 0,color-stop(.25,rgba(255,255,255,0.15)),color-stop(.25,transparent),color-stop(.5,transparent),color-stop(.5,rgba(255,255,255,0.15)),color-stop(.75,rgba(255,255,255,0.15)),color-stop(.75,transparent),to(transparent));background-image:-webkit-linear-gradient(45deg,rgba(255,255,255,0.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.15) 50%,rgba(255,255,255,0.15) 75%,transparent 75%,transparent);background-image:-moz-linear-gradient(45deg,rgba(255,255,255,0.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.15) 50%,rgba(255,255,255,0.15) 75%,transparent 75%,transparent);background-image:-o-linear-gradient(45deg,rgba(255,255,255,0.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.15) 50%,rgba(255,255,255,0.15) 75%,transparent 75%,transparent);background-image:linear-gradient(45deg,rgba(255,255,255,0.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.15) 50%,rgba(255,255,255,0.15) 75%,transparent 75%,transparent);}
.progress-info .bar, .progress .bar-info{background-color:#4bb1cf;background-image:-moz-linear-gradient(top,#5bc0de,#339bb9);background-image:-webkit-gradient(linear,0 0,0 100%,from(#5bc0de),to(#339bb9));background-image:-webkit-linear-gradient(top,#5bc0de,#339bb9);background-image:-o-linear-gradient(top,#5bc0de,#339bb9);background-image:linear-gradient(to bottom,#5bc0de,#339bb9);background-repeat:repeat-x;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff5bc0de', endColorstr='#ff339bb9', GradientType=0);}
.progress-info.progress-striped .bar, .progress-striped .bar-info{background-color:#5bc0de;background-image:-webkit-gradient(linear,0 100%,100% 0,color-stop(.25,rgba(255,255,255,0.15)),color-stop(.25,transparent),color-stop(.5,transparent),color-stop(.5,rgba(255,255,255,0.15)),color-stop(.75,rgba(255,255,255,0.15)),color-stop(.75,transparent),to(transparent));background-image:-webkit-linear-gradient(45deg,rgba(255,255,255,0.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.15) 50%,rgba(255,255,255,0.15) 75%,transparent 75%,transparent);background-image:-moz-linear-gradient(45deg,rgba(255,255,255,0.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.15) 50%,rgba(255,255,255,0.15) 75%,transparent 75%,transparent);background-image:-o-linear-gradient(45deg,rgba(255,255,255,0.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.15) 50%,rgba(255,255,255,0.15) 75%,transparent 75%,transparent);background-image:linear-gradient(45deg,rgba(255,255,255,0.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.15) 50%,rgba(255,255,255,0.15) 75%,transparent 75%,transparent);}
.progress-warning .bar, .progress .bar-warning{background-color:#faa732;background-image:-moz-linear-gradient(top,#fbb450,#f89406);background-image:-webkit-gradient(linear,0 0,0 100%,from(#fbb450),to(#f89406));background-image:-webkit-linear-gradient(top,#fbb450,#f89406);background-image:-o-linear-gradient(top,#fbb450,#f89406);background-image:linear-gradient(to bottom,#fbb450,#f89406);background-repeat:repeat-x;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#fffab44f', endColorstr='#fff89406', GradientType=0);}
.progress-warning.progress-striped .bar, .progress-striped .bar-warning{background-color:#fbb450;background-image:-webkit-gradient(linear,0 100%,100% 0,color-stop(.25,rgba(255,255,255,0.15)),color-stop(.25,transparent),color-stop(.5,transparent),color-stop(.5,rgba(255,255,255,0.15)),color-stop(.75,rgba(255,255,255,0.15)),color-stop(.75,transparent),to(transparent));background-image:-webkit-linear-gradient(45deg,rgba(255,255,255,0.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.15) 50%,rgba(255,255,255,0.15) 75%,transparent 75%,transparent);background-image:-moz-linear-gradient(45deg,rgba(255,255,255,0.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.15) 50%,rgba(255,255,255,0.15) 75%,transparent 75%,transparent);background-image:-o-linear-gradient(45deg,rgba(255,255,255,0.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.15) 50%,rgba(255,255,255,0.15) 75%,transparent 75%,transparent);background-image:linear-gradient(45deg,rgba(255,255,255,0.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.15) 50%,rgba(255,255,255,0.15) 75%,transparent 75%,transparent);}
.accordion{margin-bottom:23px;}
.accordion-group{margin-bottom:2px;border:1px solid #e5e5e5;-webkit-border-radius:4px;-moz-border-radius:4px;border-radius:4px;}
.accordion-heading{border-bottom:0;}
.accordion-heading .accordion-toggle{display:block;padding:8px 15px;}
.accordion-toggle{cursor:pointer;}
.accordion-inner{padding:9px 15px;border-top:1px solid #e5e5e5;}
.carousel{position:relative;margin-bottom:23px;line-height:1;}
.carousel-inner{overflow:hidden;width:100%;position:relative;}
.carousel-inner > .item{display:none;position:relative;-webkit-transition:.6s ease-in-out left;-moz-transition:.6s ease-in-out left;-o-transition:.6s ease-in-out left;transition:.6s ease-in-out left;}
.carousel-inner > .item > img, .carousel-inner > .item > a > img{display:block;line-height:1;}
.carousel-inner > .active, .carousel-inner > .next, .carousel-inner > .prev{display:block;}
.carousel-inner > .active{left:0;}
.carousel-inner > .next, .carousel-inner > .prev{position:absolute;top:0;width:100%;}
.carousel-inner > .next{left:100%;}
.carousel-inner > .prev{left:-100%;}
.carousel-inner > .next.left, .carousel-inner > .prev.right{left:0;}
.carousel-inner > .active.left{left:-100%;}
.carousel-inner > .active.right{left:100%;}
.carousel-control{position:absolute;top:40%;left:15px;width:40px;height:40px;margin-top:-20px;font-size:60px;font-weight:100;line-height:30px;color:#fff;text-align:center;background:#222;border:3px solid #fff;-webkit-border-radius:23px;-moz-border-radius:23px;border-radius:23px;opacity:0.5;filter:alpha(opacity=50);}
.carousel-control.right{left:auto;right:15px;}
.carousel-control:hover, .carousel-control:focus{color:#fff;text-decoration:none;opacity:0.9;filter:alpha(opacity=90);}
.carousel-indicators{position:absolute;top:15px;right:15px;z-index:5;margin:0;list-style:none;}
.carousel-indicators li{display:block;float:left;width:10px;height:10px;margin-left:5px;text-indent:-999px;background-color:#ccc;background-color:rgba(255,255,255,0.25);border-radius:5px;}
.carousel-indicators .active{background-color:#fff;}
.carousel-caption{position:absolute;left:0;right:0;bottom:0;padding:15px;background:#272a31;background:rgba(0,0,0,0.75);}
.carousel-caption h4, .carousel-caption p{color:#fff;line-height:23px;}
.carousel-caption h4{margin:0 0 5px;}
.carousel-caption p{margin-bottom:0;}
.hero-unit{padding:60px;margin-bottom:30px;font-size:18px;font-weight:200;line-height:34.5px;color:inherit;background-color:#f5f5f6;-webkit-border-radius:6px;-moz-border-radius:6px;border-radius:6px;}
.hero-unit h1{margin-bottom:0;font-size:60px;line-height:1;color:inherit;letter-spacing:-1px;}
.hero-unit li{line-height:34.5px;}
.pull-right{float:right;}
.pull-left{float:left;}
.hide{display:none;}
.show{display:block;}
.invisible{visibility:hidden;}
.affix{position:fixed;}

body{position:relative;}
.ie8 body{min-width:980px;}
@media (max-width:767px){body.cherry-fixed-layout{padding-left:0 !important;padding-right:0 !important;}
}
@media (max-width:767px){body.cherry-fixed-layout .header, body.cherry-fixed-layout .content-holder, body.cherry-fixed-layout .footer{padding-left:20px;padding-right:20px;}
}
a{outline:none;}
a:focus{outline:none;}
.main-holder{position:relative;z-index:1;}
.cherry-fixed-layout .main-holder{margin:0 auto;max-width:980px;width:auto;background:#fafafa;}
@media (min-width:1200px){.cherry-fixed-layout .main-holder{max-width:1210px;}
}
@media (min-width:768px) and (max-width:979px){.cherry-fixed-layout .main-holder{max-width:764px;}
}
.header{position:relative;z-index:99;padding:30px 0;border-bottom:1px solid #DDD;background-color:#eee;}
.title{color:#F5F5F5;border-bottom:1px #fff solid;}
.pr30{padding-right:30px;}
.logo{position:relative;z-index:99;}
@media (min-width:768px) and (max-width:979px){.logo{width:60%;}
}
.logo_h__txt{margin:0;}
.logo_link{color:#049cdb;text-decoration:none;}
.logo_link:hover{text-decoration:none;}
.logo_tagline{text-transform:uppercase;font-size:10px;}
.search-form form{position:relative;}
.search-form_it{vertical-align:top;}
.search-form_is{vertical-align:top;}
@media (min-width:768px) and (max-width:979px){.sidebar .search-form_it{width:130px;}
}
.nav__primary{position:relative;z-index:2;}
.sf-menu, .sf-menu *{margin:0;padding:0;list-style:none;}
.sf-menu{line-height:1.0;}
.sf-menu ul{display:none;position:absolute;top:-999em;width:10em;}
.sf-menu ul li{width:100%;}
.sf-menu li:hover{visibility:inherit;}
.sf-menu li{position:relative;float:left;}
.sf-menu a{position:relative;display:block;}
.sf-menu li:hover ul, .sf-menu li.sfHover ul{top:100%;left:0;z-index:99;}
ul.sf-menu li:hover li ul, ul.sf-menu li.sfHover li ul{top:-999em;}
ul.sf-menu li li:hover ul, ul.sf-menu li li.sfHover ul{top:0;left:100%;}
ul.sf-menu li li:hover li ul, ul.sf-menu li li.sfHover li ul{top:-999em;}
ul.sf-menu li li li:hover ul, ul.sf-menu li li li.sfHover ul{top:0;left:10em;}
.sf-menu{float:right;}
.sf-menu > li{background:#ddd;text-align:center;}
.sf-menu > li > a{padding:10px 12px;border-top:1px solid #DDD;border-left:1px solid #fff;color:#13a;text-decoration:none;}
.sf-menu li .desc{display:block;font-size:0.9em;}
.sf-menu li li{background:#AABDE6;}
.sf-menu li li a{padding:10px 12px;border-top:1px solid #DDD;border-left:1px solid #fff;color:#13a;text-decoration:none;}
.sf-menu > li > a:hover, .sf-menu > li.sfHover> a, .sf-menu > li.current-menu-item > a, .sf-menu > li.current_page_item > a{background:#CFDEFF;}
.sf-menu li li > a:hover, .sf-menu li li.sfHover > a, .sf-menu li li.current-menu-item > a, .sf-menu li li.current_page_item > a{background:#CFDEFF;}
.sf-menu a.sf-with-ul{padding-right:2.25em;min-width:1px;}
.sf-sub-indicator{position:absolute;top:1.05em;right:.75em;display:block;overflow:hidden;width:10px;height:10px;background:url(../images/arrows-ffffff.png) no-repeat -10px -100px;text-indent:-999em;}
a > .sf-sub-indicator{background-position:0 -100px;}
a:focus > .sf-sub-indicator, a:hover > .sf-sub-indicator, a:active > .sf-sub-indicator, li:hover > a > .sf-sub-indicator, li.sfHover > a > .sf-sub-indicator{background-position:-10px -100px;}
.sf-menu ul .sf-sub-indicator{background-position:-10px 0;}
.sf-menu ul a > .sf-sub-indicator{background-position:0 0;}
.sf-menu ul a:focus > .sf-sub-indicator, .sf-menu ul a:hover > .sf-sub-indicator, .sf-menu ul a:active > .sf-sub-indicator, .sf-menu ul li:hover > a > .sf-sub-indicator, .sf-menu ul li.sfHover > a > .sf-sub-indicator{background-position:-10px 0;}
@media (max-width:767px){.sf-menu{display:none;}
}
.select-menu{display:none;border:1px solid #DDD;background-color:#e4e4e4;width:100%;height:30px;padding:5px;margin:0;cursor:pointer;outline:none;-webkit-border-radius:4px;-moz-border-radius:4px;border-radius:4px;}
.select-menu:focus{border-color:#DDD;}
.select-menu option{padding:5px;cursor:pointer;}
.select-menu option.main_item{font-weight:bold;}
.slider{position:relative;z-index:1;overflow:hidden;margin:0;padding:0;}
.accordion{position:relative;}
.accordion >ul{margin:0;display:none;visibility:hidden;position:relative;z-index:1;}
.accordion >ul >li .max_height{max-height:500px;}
.accordion >ul >li .accordion_caption{position:absolute;bottom:0;width:100%;min-height:50px;padding:15px;background:url("../images/black-opacity-60.png");}
.accordion >ul >li .accordion_caption h2{color:#FFF;}
@media (max-width:768px){.accordion >ul >li .accordion_caption{display:none;}
}
.accordion .accordion_loader{z-index:0;top:50%;left:50%;margin:-18px 0 0 -18px;width:36px;height:36px;position:absolute;}
.content-holder{position:relative;z-index:1;padding-bottom:50px;}
#content{padding-top:40px;}
#content.left{position:relative;z-index:9;float:right !important;margin-bottom:40px;}
.isStuck{-webkit-transform:translateZ(0);}
.title-section{padding:70px 0 0;}
.title-header{overflow:hidden;margin-bottom:1.5em;word-wrap:break-word;-webkit-hyphens:auto;-moz-hyphens:auto;-ms-hyphens:auto;-o-hyphens:auto;hyphens:auto;}
.title-desc{display:block;color:#999;font-size:11px;}
.breadcrumb__t{margin:0;word-wrap:break-word;-webkit-hyphens:auto;-moz-hyphens:auto;-ms-hyphens:auto;-o-hyphens:auto;hyphens:auto;}
.breadcrumb__t li{display:inline;}
.breadcrumb__t li.divider{font:0/0 a;color:transparent;text-shadow:none;background-color:transparent;border:0;}
.breadcrumb__t li.divider:after{content:' / ';color:#333333;font:12px/18px Arial, Helvetica, sans-serif;}
#sidebar{padding-top:40px;}
#sidebar h3{margin-bottom:20px;}
.testimonial{position:relative;margin-bottom:35px;padding:30px;border:1px solid #DDD;background:#f5f5f5;font-style:italic;font-family:Georgia, "Times New Roman", Times, serif;line-height:1.5em;-webkit-border-radius:2px;-moz-border-radius:2px;border-radius:2px;}
.testimonial_bq{margin:0;padding:0;border:none;}
.testimonial_content{overflow:hidden;background:url(../images/quotes.png) no-repeat 0 0;}
@media (min-width:768px) and (max-width:979px){.testimonial .featured-thumbnail{width:80px;height:80px;}
}
.testimonial small{font-family:"Helvetica Neue", Helvetica, Arial, sans-serif;font-style:normal;padding:12px 0 0;font-size:10.2px;}
.testimonial small span{display:inline;}
.testimonial .testi-url, .testimonial .testi-email{font-style:normal;}
@media (min-width:768px) and (max-width:979px){.testimonial{padding:15px;background-position:150px 10px;}
}
@media (max-width:767px){.testimonial{padding:15px;background-position:150px 10px;}
}
#primary{padding-top:40px;}
.entry-content{overflow:hidden;}
.entry-meta.float-right{float:right;}
.portfolio-meta{margin:0;padding:1em 0;border:none;border-top:1px solid #DDD;}
.portfolio-meta span{display:inline-block;line-height:20px;padding-right:15px;}
@media (max-width:767px){.portfolio-meta span{display:block;}
}
.portfolio-meta i{font-size:16px;margin-right:.5em;color:#999;}
.portfolio-meta i.icon-tag{margin-right:.3em;}
.portfolio-meta-list{margin:0 0 2em 0;padding:1em 0;border:none;border-top:1px solid #DDD;border-bottom:1px solid #DDD;}
.portfolio-meta-list li{margin:.5em 0 0 0;padding:0;border:none;background:none;list-style-type:none;text-transform:none;}
.portfolio-meta-list li:first-child{margin-top:0;}
.portfolio-meta-list li strong{display:inline;padding-right:.3em;}
.image-holder{position:relative;}
.image-holder img{max-width:100%;}
.grid_gallery{margin-bottom:-1px;position:relative;overflow:hidden;padding:0;}
.grid_gallery_inner{position:relative;overflow:hidden;width:100%;}
.grid_gallery_inner.isotope .gallery_item{padding:0;}
.grid_gallery_inner.isotope .gallery_item a{position:relative;padding:1px;}
.gallery_item{float:left;width:33%;margin:0;padding:0 1px 1px 0;}
.gallery_item.featured-thumbnail{border:none;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;-webkit-box-shadow:none;-moz-box-shadow:none;box-shadow:none;}
.single-gallery-item{margin:0 !important;}
.zoom-icon{position:absolute;top:0;right:0;bottom:0;left:0;display:block;background:rgba(0,0,0,0.4);opacity:0;cursor:pointer;-webkit-transition:0.2s;-moz-transition:0.2s;-o-transition:0.2s;transition:0.2s;}
.no-rgba .zoom-icon{visibility:hidden;background:url(../images/black-opacity-60.png);}
.zoom-icon:before{position:absolute;top:50%;left:50%;display:block;margin:-13px 0 0 -13px;width:25px;height:26px;background:url(../images/magnify-alt.png) 50% 50% no-repeat;content:"";}
.featured-thumbnail a:hover .zoom-icon, a.thumbnail:hover .zoom-icon, .thumbnail__portfolio a:hover .zoom-icon{opacity:1;}
.no-rgba .image-wrap:hover .zoom-icon, .featured-thumbnail a:hover .zoom-icon, a.thumbnail:hover .zoom-icon, .thumbnail__portfolio a:hover .zoom-icon{visibility:visible;}
.filter-wrapper strong{display:block;padding:8px 0;margin-right:5px;float:left;}
.filter-wrapper .nav{overflow:hidden;}
.nav-pills{float:left;}
@media (max-width:480px){.nav-pills li{float:none;}
}
.nav-pills li a{white-space:nowrap;}
@media (max-width:480px){.nav-pills li a{display:block;padding:5px;}
}
.filterable-portfolio{position:relative;visibility:hidden;overflow:hidden;margin:0 -10px;}
.filterable-portfolio .portfolio_item{display:block;float:left;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;margin:0 0 20px 0;padding:0 10px;width:0;}
.filterable-portfolio .portfolio_item.nomargin{margin-right:0;}
.filterable-portfolio .portfolio_item_holder{overflow:hidden;}
.filterable-portfolio .image-wrap{position:relative;display:block;overflow:hidden;}
.filterable-portfolio .image-wrap:before{top:50%;left:50%;margin:-16px 0 0 -16px;z-index:-1;}
.filterable-portfolio .folio_loader{top:50%;left:50%;margin:-10px 0 0 -10px;z-index:-1;}
.thumbnail__portfolio{margin:0;}
.video_preview.featured-thumbnail{margin:0 0 10px 0;padding:0px;width:100%;}
.video_preview >div{padding:4px;}
.video_preview a[rel="author"]{display:inline-block;}
.video_preview .post_author{display:block;}
.video_preview .post_date{display:block;}
.video_preview img{width:100%;}
.video_preview span.hover{position:absolute;top:50%;left:50%;margin:-41px 0 0 -35px;font-size:80px;color:#FFF;text-decoration:none;opacity:0.8;-webkit-perspective:1000;-moz-perspective:1000;-ms-perspective:1000;perspective:1000;-webkit-transition:all 0.5s ease;-moz-transition:all 0.5s ease;transition:all 0.5s ease;}
.video_preview a:hover span.hover{opacity:1;-webkit-perspective:1000;-moz-perspective:1000;-ms-perspective:1000;perspective:1000;-webkit-transform:rotateY(360deg);-moz-transform:rotateY(360deg);-ms-transform:rotateY(360deg);transform:rotateY(360deg);-webkit-transition:all 0.5s ease;-moz-transition:all 0.5s ease;transition:all 0.5s ease;}
.video_preview h4{padding:0 0 7px 5px;border-bottom:1px solid #DDD;}
.video_preview .post_author{float:left;padding:0 0 5px 5px;}
.video_preview .post_date{float:right;padding:0 5px 5px 0;}
.isotope-item{z-index:2;}
.isotope-hidden.isotope-item{z-index:1;pointer-events:none;}
.isotope, .isotope .isotope-item{-webkit-transition-duration:0.8s;-moz-transition-duration:0.8s;-ms-transition-duration:0.8s;-o-transition-duration:0.8s;transition-duration:0.8s;}
.isotope{-webkit-transition-property:height, width;-moz-transition-property:height, width;-ms-transition-property:height, width;-o-transition-property:height, width;transition-property:height, width;}
.isotope .isotope-item{-webkit-transition-property:-webkit-transform, opacity;-moz-transition-property:-moz-transform, opacity;-ms-transition-property:-ms-transform, opacity;-o-transition-property:top, left, opacity;transition-property:transform, opacity;}
.isotope.no-transition, .isotope.no-transition .isotope-item, .isotope .isotope-item.no-transition{-webkit-transition-duration:0s;-moz-transition-duration:0s;-ms-transition-duration:0s;-o-transition-duration:0s;transition-duration:0s;}
.post-author{margin-bottom:60px;padding:10px 20px 15px 20px;border:1px solid #DDD;background-color:#FAFAFA;}
.post-author_h{margin-bottom:20px;}
.post-author_link{margin-top:1.5em;}
.post-author_gravatar{float:left;margin:0 20px 0 0;}
.post-author_gravatar img{padding:5px;border:1px solid #DDD;background:#fff;}
.post-author .post-author_desc{overflow:hidden;margin-top:1em;}
.post-author .post-author_desc .post-author_link{font-size:15px;}
#recent-author-posts{margin-bottom:3em;}
@media (min-width:768px) and (max-width:979px){.team-holder .featured-thumbnail{width:80px;height:80px;}
}
@media (max-width:767px){.team-holder .featured-thumbnail{width:80px;height:80px;}
}
.team-holder .team-content{overflow:hidden;}
@media (min-width:768px) and (max-width:979px){.team-holder .team-content{overflow:visible;}
}
@media (max-width:767px){.team-holder .team-content{overflow:visible;}
}
.faq-list_h{position:relative;margin:0;padding:0 0 5px 28px;background:none;font-weight:normal;}
.faq-list_body{position:relative;margin:0 0 2em 0;padding:0 0 0 28px;}
.faq-list_body .marker{top:3px;}
.faq-list .marker{position:absolute;top:0;left:0;display:block;font-weight:bold;margin:0;}
.error404-holder{padding:30px 0 100px 0;}
.error404-holder_num{text-align:center;font-size:250px;line-height:1.2em;}
@media (max-width:480px){.error404-holder_num{font-size:120px;}
}
.error404-holder .hgroup_404{margin:0 0 2em 0;padding-top:50px;}
.error404-holder .hgroup_404 h1{margin-bottom:.2em;font-size:3em;}
.post__holder{overflow:hidden;margin-bottom:0px;}
.post__holder.single-post{overflow:hidden;margin-bottom:30px;width:100%;}
.post__holder .post-header .post-title{margin-bottom:30px;}
.post__holder .featured-thumbnail.large{margin-bottom:35px;}
.post__holder .post_content{padding-bottom:20px;}
.post__holder .post_content h1, .post__holder .post_content h2, .post__holder .post_content h3, .post__holder .post_content h4, .post__holder .post_content h5, .post__holder .post_content h6{margin:5px 0 15px 0;}
.post__holder .post_content p{margin:0 0 15px;}
.post-title{word-wrap:break-word;-webkit-hyphens:auto;-moz-hyphens:auto;-ms-hyphens:auto;-o-hyphens:auto;hyphens:auto;}
@media (max-width:480px){.post .featured-thumbnail{width:120px;height:auto;}
}
@media (max-width:480px){.post .featured-thumbnail.large{width:auto;}
}
.post_content{word-wrap:break-word;-webkit-hyphens:auto;-moz-hyphens:auto;-ms-hyphens:auto;-o-hyphens:auto;hyphens:auto;padding-bottom:20px;}
.post_content .excerpt, .post_content .full-post-content{margin-bottom:1.5em;}
.post_footer{clear:both;padding:15px 0 0 0;}
.post_wrapper{margin-bottom:40px;}
.post_meta{overflow:hidden;margin-bottom:1em;padding:.5em 0;border-top:1px solid #DDD;border-bottom:1px solid #DDD;font-size:.92em;}
.post_meta div[class^="post_"]{display:inline-block;line-height:20px;padding:2px 5px;}
@media (max-width:767px){.post_meta div[class^="post_"]{display:block;}
}
.post_meta div[class^="post_"] .not_voting{cursor:default;color:inherit;}
.post_meta div[class^="post_"] .not_voting span{color:inherit;}
.post_meta div[class^="post_"] .ajax_voting{color:inherit;}
.post_meta div[class^="post_"] .ajax_voting span{color:inherit;}
.post_meta div[class^="post_"] .user_voting{cursor:default;}
.post_meta div[class^="post_"] .user_voting i, .post_meta div[class^="post_"] .user_voting span{transition:all 0.2s ease-in-out;-webkit-transition:all 0.2s ease-out;}
.post_meta div[class^="post_"] .user_like{cursor:default;}
.post_meta div[class^="post_"] .user_like i, .post_meta div[class^="post_"] .user_like span{color:#2ecc71;}
.post_meta div[class^="post_"] .user_like i{transition:all 0.2s ease-in-out;-webkit-transition:all 0.2s ease-out;}
.post_meta div[class^="post_"] .user_dislike{cursor:default;}
.post_meta div[class^="post_"] .user_dislike i, .post_meta div[class^="post_"] .user_dislike span{color:#e74c3c;}
.post_meta div[class^="post_"] .user_dislike i{transition:all 0.2s ease-in-out;-webkit-transition:all 0.2s ease-out;}
.post_meta div[class^="post_"] .animation_item{position:absolute;top:0px;right:0px;}
.post_meta div[class^="post_"] a{text-transform:capitalize;}
.post_meta>div.post_meta_unite{display:block;border-top:1px solid #DDD;padding-top:.5em;margin-top:.5em;}
.post_meta>div.post_meta_unite:first-child{border-top:none;margin-top:0;padding-top:0;}
.post_meta .post_permalink{float:right;padding-right:0;}
@media (max-width:767px){.post_meta .post_permalink{float:left;}
}
.post_meta span.voting_count{padding-right:0;position:relative;}
.post_meta i{font-size:16px;margin-right:0em;padding-right:0.5em;color:#999;}
.post_meta .pull-right{padding-right:0;padding-left:15px;}
.post_meta hr{margin:.5em 0;}
.post_meta .post_dislike a, .post_meta .post_like a{text-decoration:none;}
.meta_type_icon > div.post_meta_unite{display:inline-block;float:left;border-top:none;padding:0 0 0em;margin-top:0;}
.meta_type_icon > div.post_meta_unite div[class^="post_"]{float:left;width:15px;text-align:center;padding:0 7px 25px;margin-bottom:-25px;}
.meta_type_icon > div.post_meta_unite div[class^="post_"] i{margin-right:0;padding-right:10px;width:15px;text-align:center;display:inline-block;}
.meta_type_icon > div.post_meta_unite div[class^="post_"] .tips{margin-left:-5px;margin-top:10px;padding:2px 7px;position:absolute;background:#eaeaea;color:#000;min-width:10px;border-radius:5px;visibility:hidden;animation:tips_out 0.3s ease-out;animation-fill-mode:forwards;-webkit-animation:tips_out 0.3s ease-out;-webkit-animation-fill-mode:forwards;}
.meta_type_icon > div.post_meta_unite div[class^="post_"] .tips:before{background:transparent;content:" ";width:0px;height:0px;border-style:solid;border-width:0 7px 7px 7px;border-color:transparent transparent #EAEAEA transparent;position:absolute;margin:-19px 0 0 5px;padding-top:10px;color:#eaeaea;left:0;}
.meta_type_icon > div.post_meta_unite div[class^="post_"]:hover .tips{visibility:visible;margin-top:15px;animation:tips_in 0.3s ease-out;animation-fill-mode:backwards;-webkit-animation:tips_in 0.3s ease-out;-webkit-animation-fill-mode:backwards;}
@media (max-width:768px){.post_meta .post_meta_unite{border-top:1px solid #DDD;display:block;padding:.5em 0;width:auto;border-left:none;overflow:hidden;box-sizing:inherit;float:none;}
.post_meta .post_meta_unite:first-child{border-top:none;padding-top:0;}
.post_meta .post_meta_unite.last-child{padding-bottom:0;}
.meta_type_icon .post_meta_unite span{padding-right:15px;text-align:left;float:none;width:100%;}
.meta_type_icon .post_meta_unite span .tips{position:absolute;display:inline-block;visibility:visible;margin:0;-webkit-animation:none;animation:none;padding:0;background:none;}
.meta_type_icon .post_meta_unite span .tips:before{display:none;}
.meta_type_icon .post_meta_unite span:hover .tips{margin:0;animation:none;-webkit-animation:none;}
}
@keyframes tips_in{0%{visibility:visible;pointer-events:none;opacity:0;margin-top:25px;}
100%{opacity:1;margin-top:15px;}
}
@-webkit-keyframes tips_in{0%{visibility:visible;pointer-events:none;opacity:0;margin-top:25px;}
100%{opacity:1;margin-top:15px;}
}
@keyframes tips_out{0%{visibility:visible;pointer-events:none;opacity:1;margin-top:15px;}
100%{visibility:hidden;margin-top:40px;opacity:0;}
}
@-webkit-keyframes tips_out{0%{visibility:visible;pointer-events:none;opacity:1;margin-top:15px;}
100%{visibility:hidden;margin-top:40px;opacity:0;}
}
.sticky{position:relative;z-index:9;overflow:visible;}
.quote-wrap{margin-bottom:25px;}
.format-quote .post_meta{padding-top:25px;}
.format-quote blockquote{font-family:Georgia, "Times New Roman", Times, serif;font-size:15px;line-height:1.4em;font-style:italic;color:#999;font-weight:normal;margin-bottom:10px;padding:10px 0 10px 25px;}
.format-quote cite{padding-left:30px;margin-bottom:20px;}
p.gravatar{float:left;margin-right:20px;}
.related-posts{overflow:hidden;margin:0 0 45px;padding:0;}
.related-posts_h{margin-bottom:20px;}
.related-posts_list{padding:0;margin:0 0 0 -4%;font-size:0;}
.related-posts_item{display:inline-block;width:21%;margin-left:4%;margin-bottom:20px;padding:0;list-style-type:none;overflow:hidden;vertical-align:top;font-size:12px;}
.related-posts .featured-thumbnail{float:none;overflow:visible;margin:0 0 10px 0;}
@media (max-width:480px){.related-posts_item{width:46%;}
}
.share-buttons{margin-bottom:45px;padding:10px 0;width:100%;height:21px;}
.share-buttons span, .share-buttons li{display:block;float:left;width:90px;}
.share-buttons span.google, .share-buttons li.google{width:68px;}
.share-buttons iframe{max-width:none;}
@media (max-width:480px){.share-buttons{display:none;}
}
.single-pager{margin:10px 0 30px;padding:5px 0;border-top:1px solid #DDD;border-bottom:1px solid #DDD;font-size:11px;}
.g-pagination{overflow:hidden;text-align:left;}
.g-pagination ul{overflow:hidden;margin:0;padding:.5em 0;list-style-type:none;}
.g-pagination ul li{display:inline;margin:0;padding:0 5px 0 0;}
.g-pagination ul li a{display:inline-block;width:10px;height:10px;border-radius:5px;background:#000;vertical-align:top;text-decoration:none;font-size:0;line-height:0;}
.g-pagination ul li.activeSlide a, .g-pagination ul li a:hover{background:#999;}
.g_controls{float:right;}
.g_controls a{display:inline-block;border-radius:4px;background:#000;color:#fff;vertical-align:top;text-decoration:none;font-size:11px;font-family:"Times New Roman", Times, serif;}
.g_controls a span{display:inline-block;padding:2px 6px 4px 6px;}
.g_controls a:hover{background:#999;}
.pagination__posts{margin:0;text-align:center;}
.blog .isotope{margin:0 -5px 20px;vertical-align:top;height:auto;visibility:hidden;}
@media (max-width:768px){.blog .isotope{margin-left:-1%;margin-right:-1%;}
}
@media (max-width:480px){.blog .isotope{margin-left:0;margin-right:0;}
}
.blog .isotope .post_wrapper{display:block;float:left;margin:5px;width:306px;}
@media (min-width:1200px){.blog .isotope .post_wrapper{width:383px;}
}
@media (min-width:768px) and (max-width:979px){.blog .isotope .post_wrapper{width:357px;}
}
@media (max-width:768px){.blog .isotope .post_wrapper{width:47.7%;margin:5px 1%;}
}
@media (max-width:480px){.blog .isotope .post_wrapper{width:100%;margin:5px 0;}
}
.blog .isotope .post_wrapper .post_content{padding-bottom:10px;}
.blog .isotope .post_wrapper .post__holder{border:1px solid #DDD;padding:6px;border-radius:5px;margin-bottom:0;}
.blog .isotope .post_wrapper .post__holder .post_meta{border-bottom:0;margin-bottom:0;padding-bottom:0;}
.comment-holder{padding:0;margin:0 0 20px;}
.comments-h{padding:0;margin:0 0 3px 0;}
.comment-list{position:relative;margin:0;padding:0;list-style-type:none;}
.comment{position:relative;margin:0;padding:0;background:none;list-style-type:none;text-transform:none;}
.comment .comment-body{position:relative;overflow:hidden;margin-bottom:15px;padding:20px;border:1px solid #DDD;background:#f5f5f5;zoom:1;}
.comment.bypostauthor .comment-body{background:#fafafa;}
.comment-author{float:left;margin:0 20px 0 0;}
.comment-author .author{display:block;padding-top:20px;width:65px;text-align:left;text-transform:capitalize;font-weight:bold;font-size:16px;}
.comment-meta{font-size:16px;float:right;padding:5px 0;}
.reply{float:right;margin-left:28px;font-size:16px;}
.reply .comment-reply-link{background:#c5c5c5;color:#fff;padding:5px 10px;}
.reply .comment-reply-link:hover{color:#005580;}
.reply a{display:inline-block;text-decoration:none !important;}
.allowed_tags{padding:15px;background:#eee;color:#666;font-size:11px;font-family:"Courier New", Courier, monospace;}
.allowed_tags strong{font-family:Tahoma, Geneva, sans-serif;}
#respond{padding-top:25px;}
#respond h3{margin-bottom:30px;}
#respond form .btn{margin-top:20px;}
#respond form .comment_submit{text-align:right;margin-bottom:30px;}
@media (min-width:768px) and (max-width:979px){.comment-list ul.children{margin:0;}
}
@media (max-width:767px){.comment-list ul.children{margin:0;}
}
.nocomments{margin:0;}
#commentform p.field{margin-bottom:12px;}
#commentform small{color:#8b8b8b;}
#commentform label{display:block;}
#commentform input[type="text"]{margin:0;width:400px;padding:10px;}
#commentform textarea{overflow:auto;margin:0;min-width:100%;min-height:180px;max-width:530px;width:100%;height:180px;padding:10px;border-color:#DDD;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;}
.children #commentform textarea{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;width:100%;max-width:100%;min-width:100px;}
@media (min-width:768px) and (max-width:979px){#commentform textarea{width:100%;max-width:100%;min-width:100%;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;}
}
@media (max-width:767px){#commentform input[type="text"]{width:100%;height:30px;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;}
#commentform textarea{width:100%;max-width:100%;min-width:100%;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;}
}
.widget{margin-bottom:30px;}
.widget.visible-all-devices, .widget.visible-desktop, .widget.visible-tablet, .widget.visible-phone, .widget.hidden-phone, .widget.hidden-desktop, .widget.hidden-table{position:relative;top:0;left:0;right:auto;width:auto;}
#calendar_wrap{padding:0;}
#wp-calendar{width:100%;}
#wp-calendar td{padding:6px 0;border:none;text-align:center;}
#wp-calendar caption{margin-bottom:5px;padding:4px 0;color:#0088cc;font-weight:bold;font-size:16px;text-align:center;}
#wp-calendar thead th{padding:7px 0;color:#0088cc;text-align:center;font-size:14px;}
#wp-calendar #prev{text-align:left;}
#wp-calendar #next{text-align:right;}
.textwidget{word-wrap:break-word;}
.comments-custom li{overflow:hidden;margin:0;padding:25px 0 25px 0;border-bottom:none;background:none;}
.comments-custom li:first-child{padding-top:0;border-top:none;}
.comments-custom_txt{padding:7px 0 0 0;border-top:1px solid #DDD;margin-top:7px;}
.comments-custom_txt a{text-decoration:none;}
.comments-custom_txt a:hover{text-decoration:underline;}
.comments-custom_h_title, .comments-custom_h_author{margin-bottom:5px;margin-top:0px;}
.comments-custom_h_author:first-letter{text-transform:uppercase;}
.comments-custom i{font-size:16px;margin-right:.5em;color:#999;float:left;min-width:15px;text-align:center;}
.comments-custom .ladle{float:left;padding-right:5px;}
.comments-custom .meta_format{margin-top:2px;font-size:14px;}
.post-list li{overflow:hidden;padding-top:1.5em;padding-bottom:1.5em;}
.post-list li:first-child{padding-top:0;border:none;}
.post-list .excerpt{margin-bottom:1em;}
.flickr_li{vertical-align:top;}
.flickr_li .thumbnail{position:relative;margin:0 0 6px 0;display:inline-block;}
.flickr_li:nth-child(3n-2){margin-left:0;}
.flickr_li.nomargin{margin-left:0;}
.ie8 .flickr_li.nomargin{margin-left:0;}
.ie8 .flickr_li img{height:60px;}
@media (min-width:768px) and (max-width:979px){.flickr_li .thumbnail{display:block;}
}
@media (max-width:767px){.flickr_li{float:left !important;width:auto !important;margin:0 14px 14px 0;}
.flickr_li .thumbnail{display:block;float:left;}
}
.banners_li{float:left;margin:0 3px 3px 0;}
.banners_img{width:125px;height:auto;}
.vcard span{display:block;}
.vcard .meta_format{margin-top:2px;font-size:12px;}
.vcard .meta_format i{font-size:14px;margin-right:.5em;color:#999;float:left;min-width:15px;text-align:center;margin-top:1px;}
.vcard .ladle{padding-right:5px;font-weight:normal;}
.vcard .ladle, .vcard .ladle+span{display:inline-block;}
.dark_background{background-color:#333;padding:10px;}
iframe .uiHeader h3{color:#fff;}
.social{margin:0;}
.social_link{-webkit-transition:0.25s;-moz-transition:0.25s;-o-transition:0.25s;transition:0.25s;display:inline-block;}
.social_link:hover{opacity:0.5;filter:alpha(opacity=50);}
.social_ico{display:inline-block;vertical-align:top;}
.social_label{display:inline-block;vertical-align:top;}
.social__row li{float:left;margin-left:5px;}
.social__row li:first-child{margin-left:0;}
.social__row a{float:left;}
.social__list li{margin-bottom:5px;}
.social__list a:hover{text-decoration:none;}
.recent-posts{overflow:hidden;margin:0 0 0 -20px !important;padding:0;border:none;}
.recent-posts_li{margin:0 0 20px 20px;padding:0;border:none;background:none;list-style-type:none;}
.recent-posts_li .featured-thumbnail{float:left;margin:0 20px 0 0;}
.recent-posts_li h5{margin-bottom:0;font-size:1em;}
.recent-posts_li .excerpt{margin-bottom:1.5em;}
.recent-posts_li .meta{display:block;overflow:hidden;margin-bottom:.5em;color:#888;text-transform:uppercase;font-size:10px;}
.recent-posts_li .post-date{float:left;}
.recent-posts_li .post-comments{float:right;}
.recent-posts .format-image{float:left;margin:0 20px 20px 0;}
.recent-posts .format-audio{margin-bottom:2em;}
.recent-posts .format-audio .audio-wrapper{margin-bottom:.5em;}
.recent-posts .format-video{float:left;width:300px;}
.popular-posts li{overflow:hidden;margin:0;padding:0 0 20px 0;}
.posts-grid{margin:0;}
.posts-grid li{margin-bottom:25px;}
.posts-grid li .featured-thumbnail{margin:0;}
.posts-grid li .featured-thumbnail img{width:100%;}
.posts-grid .post_meta span[class^="post_"]{margin-right:10px;}
.mini-posts-grid{margin:0;}
.mini-posts-grid li{margin:0 5px 5px 0;padding:0;border:none;background:none;float:left;}
.mini-posts-grid .featured-thumbnail{margin:0;}
.mini-posts-grid li.small{width:120px;height:120px;}
.mini-posts-grid li.smaller{width:100px;height:100px;}
.mini-posts-grid li.smallest{width:70px;height:70px;}
.mini-posts-grid li.small img{width:100%;height:auto;}
.mini-posts-grid.grid-align-center{text-align:center;font-size:0;line-height:0;}
.mini-posts-grid.grid-align-center li{float:none;display:inline-block;}
.mini-posts-grid.grid-align-right li{float:right;}
.mini-posts-list{margin:0 0 25px;padding:0;}
.mini-post-holder{list-style-type:none;padding:15px 0 0;margin:0 0 9px;border-top:1px solid #DDD;}
.mini-post-holder:first-child{border:none;padding:5px 0 0;}
.mini-post-holder .small{width:110px;height:110px;}
.mini-post-holder .smaller{width:90px;height:90px;}
.mini-post-holder .smallest{width:60px;height:60px;}
.mini-post-holder .small img{width:100%;height:auto;}
.mini-post-content{overflow:hidden;}
.mini-post-meta time{font-size:11px;line-height:1.2;}
.recent-comments li{margin:0;padding:0 0 .5em 0;border:none;}
.service-box{overflow:hidden;min-height:20px;padding:19px;margin-bottom:0;background-color:#f5f5f5;border:1px solid #DDD;-webkit-border-radius:4px;-moz-border-radius:4px;border-radius:4px;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,0.05);-moz-box-shadow:inset 0 1px 1px rgba(0,0,0,0.05);box-shadow:inset 0 1px 1px rgba(0,0,0,0.05);}
.service-box .icon{float:left;margin:0 10px 10px 0;}
.service-box h2{overflow:hidden;margin:0;}
.service-box h5{overflow:hidden;margin:0 0 25px;}
.service-box_txt{margin-bottom:20px;}
.service-box .btn-align{text-align:right;}
.service-box__call{color:#fff;background-color:#0c6abd;background-image:-moz-linear-gradient(top,#037cc7,#1950af);background-image:-webkit-gradient(linear,0 0,0 100%,from(#037cc7),to(#1950af));background-image:-webkit-linear-gradient(top,#037cc7,#1950af);background-image:-o-linear-gradient(top,#037cc7,#1950af);background-image:linear-gradient(to bottom,#037cc7,#1950af);background-repeat:repeat-x;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff037cc7', endColorstr='#ff1950af', GradientType=0);}
.service-box__call h2{float:left;width:75%;color:#fff;margin:10px 0 0;}
.service-box__call .btn-align{padding:0;width:25%;float:right;}
.carousel-cycle{position:relative;overflow:hidden;}
.post-cycle{width:100%;height:380px;overflow:hidden;}
.post-cycle_item{display:none;overflow:hidden;width:100%;height:100%;}
.post-cycle_item:first{display:block;}
.post-cycle_item .feature-thumbnail{float:none;margin:0 0 15px 0;}
.post-cycle_item .feature-thumbnail img{float:none;}
.post-controls{overflow:hidden;padding-top:10px;text-align:center;}
.post-controls li{display:inline;margin:0;padding:0 5px 0 0;}
.post-controls li a{display:inline-block;width:9px;height:9px;background:#000;vertical-align:top;text-decoration:none;-webkit-border-radius:5px;-moz-border-radius:5px;border-radius:5px;-webkit-transition:0.25s;-moz-transition:0.25s;-o-transition:0.25s;transition:0.25s;}
.post-controls li a:hover, .post-controls li.activeSlide a{background:#999;}
.post-controls .post-controls_link__prev{float:left;}
.post-controls .post-controls_link__next{float:right;}
.banner-wrap{overflow:hidden;margin:0 0 20px;padding:0;}
.banner-wrap .featured-thumbnail{float:none;overflow:hidden;margin:0 0 15px;padding:0;}
.banner-wrap .featured-thumbnail a{display:block;float:left;overflow:hidden;border:8px solid #DDD;text-align:center;-webkit-transition:0.25s;-moz-transition:0.25s;-o-transition:0.25s;transition:0.25s;}
.banner-wrap .featured-thumbnail a:hover{border-color:#DDD;}
.banner-wrap h5{margin:0 0 8px;color:#000;text-transform:capitalize;font-weight:bold;}
.banner-wrap .btn-link{padding:0;}
.testimonials .testi-item{overflow:hidden;margin-bottom:2em;padding-bottom:2em;background:none;}
.testimonials .testi-item blockquote{position:relative;display:block;margin:0;padding:30px;border:none;background:#dbdbdb;-webkit-border-radius:10px;-moz-border-radius:10px;border-radius:10px;-webkit-background-clip:padding-box;-moz-background-clip:padding-box;background-clip:padding-box;}
.testimonials .testi-item blockquote:before{position:absolute;bottom:-20px;left:30px;display:block;width:0;height:0;border-top:20px solid #dbdbdb;border-right:0 solid transparent;border-left:20px solid transparent;content:"";}
.testimonials .testi-item blockquote:after{position:absolute;top:10px;left:20px;display:block;width:41px;height:38px;background:url(../images/quotes.png) 0 0 no-repeat;content:"";}
.testimonials .testi-item blockquote > a{position:relative;z-index:2;color:#4e4e4e;text-decoration:none;overflow:hidden;vertical-align:top;}
.testimonials .testi-item blockquote > a:hover{color:#fff;}
.testimonials .testi-item .featured-thumbnail{position:relative;z-index:2;margin:0 20px 0 10px;width:60px;height:60px;}
.testimonials .testi-item .testi-meta{font-size:1em;display:block;padding-top:22px;padding-left:40px;}
.roundabout-holder{width:100%;position:relative;overflow:hidden;}
.roundabout-holder ul{padding:0;width:100%;height:250px;background:none;}
.roundabout-holder ul li{overflow:hidden;margin:0;padding:0;width:375px;height:inherit;border:none;background:none;text-align:center;cursor:pointer;}
@media (max-width:767px){.roundabout-holder ul li{width:220px !important;}
}
@media (max-width:480px){.roundabout-holder ul li{width:150px !important;}
}
.roundabout-holder ul li.roundabout-in-focus{cursor:default;}
@media (min-width:768px) and (max-width:979px){.roundabout-holder ul{width:100%;}
}
@media (max-width:767px){.roundabout-holder ul{width:100%;height:150px;}
}
@media (max-width:480px){.roundabout-holder ul{height:120px;}
}
.gallery{margin:0 auto;}
.gallery img{border:none !important;}
.gallery .gallery-caption{padding:0;margin:0;}
.gallery dl, .gallery dt{margin:0;}
.gallery br+br{display:none;}
.site_map{margin-bottom:10px;}
.site_map .icon-sitemap{padding-right:10px;}
.site_map h2{border-bottom:1px solid #DDD;padding-bottom:15px;}
.site_map_title{text-transform:capitalize;}
.site_map ul{list-style:none;margin:15px 0 0 5px;}
.site_map ul li{word-break:break-word;padding-bottom:5px;}
@media (max-width:480px){.site_map ul li{float:none;width:100%;padding-right:0%;}
}
.site_map .group{display:inline-block;padding-bottom:20px;width:102%;margin-left:-2%;}
.site_map .group .grid{width:23%;margin-left:2%;float:left;}
@media (max-width:480px){.site_map .group .grid{float:none;width:100%;margin-left:0%;}
}
.site_map .line{margin-bottom:10px;}
.site_map .line ul li{width:18%;margin-right:2%;display:inline-block;vertical-align:top;}
@media (max-width:480px){.site_map .line ul li{float:none;width:100%;margin-right:0%;}
}
.accordion-group, .accordion-inner, .nav-tabs, .nav-tabs > .active > a{border-color:#DDD;}
.footer{position:relative;z-index:100;padding:20px 0;border-top:1px solid #d9d9d9;background:#eee;}
nav.footer-nav{float:right;overflow:hidden;}
@media (min-width:768px) and (max-width:979px){nav.footer-nav{float:none;}
}
@media (max-width:767px){nav.footer-nav{float:none;}
}
nav.footer-nav ul{margin:0;padding:0;float:right;}
@media (min-width:768px) and (max-width:979px){nav.footer-nav ul{float:none;text-align:center;}
}
@media (max-width:767px){nav.footer-nav ul{float:none;text-align:center;}
}
nav.footer-nav ul .sub-menu{display:none;}
nav.footer-nav ul li{float:left;margin:0;padding-left:15px;list-style-type:none;}
@media (min-width:768px) and (max-width:979px){nav.footer-nav ul li{float:none;display:inline;padding:0 10px;}
}
@media (max-width:767px){nav.footer-nav ul li{float:none;display:inline;padding:0 5px;}
}
nav.footer-nav ul li a{text-decoration:none;}
nav.footer-nav ul li a:hover{color:#00334d;text-decoration:none;}
nav.footer-nav ul li.current-menu-item a{text-decoration:underline;}
.copyright{padding:10px 0;}
.footer-text{float:left;}
@media (max-width:767px){.footer-text{float:none;text-align:center;margin-bottom:20px;}
}
.btn [class^="icon-"], .btn [class*=" icon-"]{background:none;margin-right:0.25em;}
.btn{outline:none;}
.btn:focus{outline:none;}
.label [class^="icon-"], .label [class*=" icon-"]{background:none;margin-right:0.25em;}
.label{white-space:normal;word-wrap:break-word;-webkit-hyphens:auto;-moz-hyphens:auto;-ms-hyphens:auto;-o-hyphens:auto;hyphens:auto;}
.label p{margin:0;}
.alert p{margin:0;}
.alert .close{outline:none;}
.alert.cf-cookie-banner-wrap{position:fixed;z-index:9999;right:0;left:0;bottom:0;display:block;padding:0;margin:0;color:#fff;background:rgba(0,0,0,0.7);border:none;text-shadow:none;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;}
.no-rgba .alert.cf-cookie-banner-wrap{background:#000;}
.alert.cf-cookie-banner-wrap .container{padding:10px 0;}
.alert.cf-cookie-banner-wrap .close{color:#fff;opacity:0.7;filter:alpha(opacity=70);}
.alert.cf-cookie-banner-wrap .close:hover{opacity:1;filter:alpha(opacity=100);}
@media (max-width:979px) and (min-width:768px){.alert.cf-cookie-banner-wrap .close{right:0;}
}
@media (max-width:767px){.alert.cf-cookie-banner-wrap .close{right:0;}
}
@media (max-width:767px){.alert.cf-cookie-banner-wrap{padding-left:20px;padding-right:20px;}
}
.alignleft{float:left;margin:5px 20px 10px 0;}
.aligntextleft{text-align:left;}
.alignright{float:right;margin:5px 0 10px 20px;}
.aligntextright{text-align:right;}
.aligncenter, div.aligncenter{display:block;margin:5px auto 10px;text-align:center;}
.aligntextcenter{text-align:center;}
.alignnone{margin:5px 0 10px 0;}
.thumbnail .alignnone{margin:0;}
a img.alignleft{float:left;margin:5px 20px 10px 0;}
a img.alignright{float:right;margin:5px 0 10px 20px;}
a img.aligncenter{display:block;margin-left:auto;margin-right:auto;}
a img.alignnone{margin:5px 0 10px 0;}
article .post-content img{max-width:100%;}
.wp-caption{max-width:100%;}
.wp-caption-text{max-width:96%;padding:5px 3px 10px;text-align:center;}
.wp-caption.alignnone{max-width:100%;margin:5px 0 10px 0;}
.wp-caption.alignleft{margin:5px 20px 10px 0;}
.wp-caption.alignright{margin:5px 0 10px 20px;}
.wp-caption p.wp-caption-text{font-size:11px;line-height:17px;margin:0;padding:0 4px 5px;}
*[class*="thumbnail"]{border-color:#DDD;}
.featured-thumbnail{position:relative;float:left;overflow:hidden;margin:5px 20px 10px 0;}
.featured-thumbnail a{position:relative;display:block;}
.featured-thumbnail.large{overflow:hidden;margin-right:0;margin-bottom:1.5em;float:none;}
.featured-thumbnail.large img{width:100%;height:auto;}
figure.frame{padding:7px;border:1px solid #DDD;background:#fff;text-align:center;-webkit-border-radius:5px;-moz-border-radius:5px;border-radius:5px;}
.frame img.alignleft, .frame img.alignright{margin:0;padding:0;border:none;}
.list > ul{margin:0;}
.list.unstyled > ul li{margin:0 0 .5em 0;padding:0;border:none;background:none;list-style-type:none;}
.list.unstyled > ul li:before{display:none;}
.list.styled > ul{margin:0 0 1em 0;}
.list.styled > ul li{position:relative;margin:0 0 .5em 0;padding:0;border:none;background:none;list-style-type:none;}
.list li{position:relative;}
.list li:before{display:inline-block;margin-right:5px;width:14px;height:14px;content:attr(data-icon);font-family:'FontAwesome';line-height:14px;speak:none;*margin-right:.3em;}
.list > ul li:before{color:#999;}
.list.check-list > ul li:before{content:"\f00c";}
.list.check2-list > ul li:before{content:"\f078";}
.list.arrow-list > ul li:before{content:"\f054";}
.list.arrow2-list > ul li:before{content:"\f061";}
.list.star-list > ul li:before{content:"\f005";}
.list.plus-list > ul li:before{content:"\f067";}
.list.minus-list > ul li:before{content:"\f068";}
.lightbox{position:relative;display:block;}
.title-box{margin-bottom:1em;}
.title-box_icon{float:left;margin:0 20px 0 0;}
.title-box_primary{border:none;background:none;padding:0;margin:0;}
.title-box_secondary{border:none;background:none;padding:0;margin:0;}
#back-top{display:none;}
#back-top-wrapper{position:fixed;right:10px;bottom:10px;overflow:hidden;z-index:99;}
#back-top a{display:block;width:50px;color:#bbb;text-align:center;text-decoration:none;text-transform:uppercase;font:11px/100% Arial, Helvetica, sans-serif;-webkit-transition:1s;-moz-transition:1s;-o-transition:1s;transition:1s;}
#back-top a:hover{color:#000;}
#back-top a:hover span{background-color:#333;}
#back-top span{display:block;margin-bottom:7px;width:50px;height:50px;background:#FF4A05 url(../images/up-arrow.png) no-repeat center center;-webkit-transition:1s;-moz-transition:1s;-o-transition:1s;transition:1s;}
.tabs-wrapper{margin-bottom:20px;}
.dropcap{position:relative;display:block;float:left;overflow:hidden;margin:0 20px 20px 0;width:50px;height:50px;background:#3A87AD;color:#ffffff;text-align:center;text-transform:uppercase;font-weight:bold;font-size:36px;line-height:50px;-webkit-border-radius:5px;-moz-border-radius:5px;border-radius:5px;}
.hr{overflow:hidden;margin:30px 0px;height:1px;background:#eee;font-size:0;line-height:0;}
.sm_hr{overflow:hidden;margin:20px 0px;height:1px;background:#DDD;font-size:0;line-height:0;}
.spacer{overflow:hidden;height:30px;font-size:0;line-height:0;}
.vertical-divider{margin-left:20px;padding-left:40px;border-left:1px solid #DDD;}
.text-highlight{padding:.25em .2em;background-color:#FFA;color:#666;}
code.block{display:block;}
code.code-indent{display:block;margin:20px 0;}
code, pre{margin-bottom:20px;}
.google-map{position:relative;}
.google-map:before{z-index:-1;top:50%;left:50%;margin:-10px 0 0 -10px;}
.map_loader{position:absolute;top:50%;left:50%;margin:-16px 0 0 -16px;z-index:-1;}
input[type="submit"], input[type="reset"]{vertical-align:top;height:28px;}
select, textarea, input[type="text"], input[type="password"], input[type="datetime"], input[type="datetime-local"], input[type="date"], input[type="month"], input[type="time"], input[type="week"], input[type="number"], input[type="email"], input[type="url"], input[type="search"], input[type="tel"], input[type="color"], .uneditable-input{outline:none;}
select:-moz-placeholder, textarea:-moz-placeholder, input[type="text"]:-moz-placeholder, input[type="password"]:-moz-placeholder, input[type="datetime"]:-moz-placeholder, input[type="datetime-local"]:-moz-placeholder, input[type="date"]:-moz-placeholder, input[type="month"]:-moz-placeholder, input[type="time"]:-moz-placeholder, input[type="week"]:-moz-placeholder, input[type="number"]:-moz-placeholder, input[type="email"]:-moz-placeholder, input[type="url"]:-moz-placeholder, input[type="search"]:-moz-placeholder, input[type="tel"]:-moz-placeholder, input[type="color"]:-moz-placeholder, .uneditable-input:-moz-placeholder{color:#999;}
select:-ms-input-placeholder, textarea:-ms-input-placeholder, input[type="text"]:-ms-input-placeholder, input[type="password"]:-ms-input-placeholder, input[type="datetime"]:-ms-input-placeholder, input[type="datetime-local"]:-ms-input-placeholder, input[type="date"]:-ms-input-placeholder, input[type="month"]:-ms-input-placeholder, input[type="time"]:-ms-input-placeholder, input[type="week"]:-ms-input-placeholder, input[type="number"]:-ms-input-placeholder, input[type="email"]:-ms-input-placeholder, input[type="url"]:-ms-input-placeholder, input[type="search"]:-ms-input-placeholder, input[type="tel"]:-ms-input-placeholder, input[type="color"]:-ms-input-placeholder, .uneditable-input:-ms-input-placeholder{color:#999;}
select::-webkit-input-placeholder, textarea::-webkit-input-placeholder, input[type="text"]::-webkit-input-placeholder, input[type="password"]::-webkit-input-placeholder, input[type="datetime"]::-webkit-input-placeholder, input[type="datetime-local"]::-webkit-input-placeholder, input[type="date"]::-webkit-input-placeholder, input[type="month"]::-webkit-input-placeholder, input[type="time"]::-webkit-input-placeholder, input[type="week"]::-webkit-input-placeholder, input[type="number"]::-webkit-input-placeholder, input[type="email"]::-webkit-input-placeholder, input[type="url"]::-webkit-input-placeholder, input[type="search"]::-webkit-input-placeholder, input[type="tel"]::-webkit-input-placeholder, input[type="color"]::-webkit-input-placeholder, .uneditable-input::-webkit-input-placeholder{color:#999;}
select::-moz-placeholder, textarea::-moz-placeholder, input[type="text"]::-moz-placeholder, input[type="password"]::-moz-placeholder, input[type="datetime"]::-moz-placeholder, input[type="datetime-local"]::-moz-placeholder, input[type="date"]::-moz-placeholder, input[type="month"]::-moz-placeholder, input[type="time"]::-moz-placeholder, input[type="week"]::-moz-placeholder, input[type="number"]::-moz-placeholder, input[type="email"]::-moz-placeholder, input[type="url"]::-moz-placeholder, input[type="search"]::-moz-placeholder, input[type="tel"]::-moz-placeholder, input[type="color"]::-moz-placeholder, .uneditable-input::-moz-placeholder{color:#999;opacity:1;}
select.btn:focus, textarea.btn:focus, input[type="text"].btn:focus, input[type="password"].btn:focus, input[type="datetime"].btn:focus, input[type="datetime-local"].btn:focus, input[type="date"].btn:focus, input[type="month"].btn:focus, input[type="time"].btn:focus, input[type="week"].btn:focus, input[type="number"].btn:focus, input[type="email"].btn:focus, input[type="url"].btn:focus, input[type="search"].btn:focus, input[type="tel"].btn:focus, input[type="color"].btn:focus, .uneditable-input.btn:focus{outline:none;}
select:focus, textarea:focus, input[type="text"]:focus, input[type="password"]:focus, input[type="datetime"]:focus, input[type="datetime-local"]:focus, input[type="date"]:focus, input[type="month"]:focus, input[type="time"]:focus, input[type="week"]:focus, input[type="number"]:focus, input[type="email"]:focus, input[type="url"]:focus, input[type="search"]:focus, input[type="tel"]:focus, input[type="color"]:focus, .uneditable-input:focus{outline:none;}
label[for^=pwbox]{display:inline-block;}
.wpcf7-form p.field{position:relative;overflow:hidden;margin-bottom:15px;vertical-align:top;}
.wpcf7-form p.field input{margin:0;padding:6px 6px 7px 6px;width:100%;height:30px;line-height:15px;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;}
.wpcf7-form p.field input[type="file"]{position:relative;cursor:pointer;height:25px;-webkit-box-sizing:content-box;-moz-box-sizing:content-box;box-sizing:content-box;}
.wpcf7-form textarea{overflow:auto;margin:0;padding:6px 6px 7px 6px;width:100%;height:200px;line-height:15px;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;resize:none;overflow:auto;}
.wpcf7-form .submit-wrap{margin:0;padding:0;}
.wpcf7-form .submit-wrap input{margin-right:10px;}
span.wpcf7-form-control-wrap{display:block;}
.wpcf7-not-valid-tip{position:absolute;top:0 !important;right:0 !important;bottom:0 !important;left:0 !important;padding:4px 6px !important;width:auto !important;height:auto !important;background:#F2DEDE !important;border:1px solid #DDD !important;color:#B94A48 !important;-webkit-border-radius:2px;-moz-border-radius:2px;border-radius:2px;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;}
@media (min-width:768px) and (max-width:979px){.wpcf7-not-valid-tip{font-size:11px !important;}
}
div.wpcf7-response-output{margin:20px 0 !important;padding:8px 35px 8px 14px !important;border:1px solid #DDD !important;background-color:#FCF8E3;color:#C09853;text-shadow:0 1px 0 rgba(255,255,255,0.5);-webkit-border-radius:4px;-moz-border-radius:4px;border-radius:4px;}
div.wpcf7-validation-errors{background-color:#F2DEDE !important;border-color:#DDD !important;color:#B94A48 !important;}
div.wpcf7-mail-sent-ok{background:#DFF0D8 !important;border:1px solid #DDD !important;color:#468847 !important;}
embed, iframe, object, video{max-width:100%;}
.video-wrap{position:relative;overflow:hidden;margin-bottom:1.5em;padding-top:30px;padding-bottom:56.25%;height:0;}
.video-wrap iframe{position:absolute;top:0;left:0;width:100%;height:100%;}
.html5-video{padding:0;height:auto;}
.audio-wrap{margin-bottom:1.5em;}
div.jp-audio, div.jp-video{width:100%;color:#a7a7a7;line-height:2.2em;}
div.jp-video video, div.jp-video object{position:absolute;top:0;left:0;width:100%;height:100%;background-color:#000;}
div.jp-audio{width:100%;}
div.jp-video.fullwidth .jp-type-list-parent{position:relative;overflow:hidden;padding-bottom:56.25%;width:100%;height:0;}
div.jp-video.fullwidth.playlist{padding-bottom:0;height:auto;}
div.jp-video.fullwidth .jp-type-single, div.jp-video.fullwidth .jp-type-list{position:absolute;top:0;left:0;width:100%;height:100%;}
div.jp-video-full{position:static !important;position:relative;width:100%;height:100%;}
div.jp-video-full div.jp-jplayer{position:fixed;top:0;left:0;z-index:9999999;overflow:hidden;}
div.jp-video-full div.jp-gui{position:fixed;top:0;left:0;z-index:9999999;width:100%;height:100%;}
div.jp-video-full div.jp-interface{position:absolute;bottom:0;left:0;z-index:1000;}
div.jp-interface{position:relative;overflow:hidden;width:100%;height:35px;border-bottom:1px solid #4E4E4E;-webkit-transition:opacity .5s ease-in-out, margin .5s ease-in-out;-moz-transition:opacity .5s ease-in-out, margin .5s ease-in-out;-ms-transition:opacity .5s ease-in-out, margin .5s ease-in-out;-o-transition:opacity .5s ease-in-out, margin .5s ease-in-out;transition:opacity .5s ease-in-out, margin .5s ease-in-out;background-color:#484747;background-image:-moz-linear-gradient(top,#575656,#313030);background-image:-webkit-gradient(linear,0 0,0 100%,from(#575656),to(#313030));background-image:-webkit-linear-gradient(top,#575656,#313030);background-image:-o-linear-gradient(top,#575656,#313030);background-image:linear-gradient(to bottom,#575656,#313030);background-repeat:repeat-x;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff575656', endColorstr='#ff313030', GradientType=0);}
div.jp-interface li{padding-left:0;}
div.jp-video div.jp-interface{margin:0;opacity:0;filter:alpha(opacity=0);}
div.jp-video:hover div.jp-interface{margin:-36px 0 0;opacity:1;filter:alpha(opacity=100);}
div.jp-controls-holder{position:absolute;top:7px;left:0;overflow:hidden;width:100%;}
div.jp-interface ul.jp-controls{overflow:hidden;margin:0;padding:0;list-style-type:none;}
ul.jp-controls, div.jp-interface ul.jp-controls li{display:inline;float:left;}
ul.jp-controls a, div.jp-interface ul.jp-controls li a{display:block;overflow:hidden;padding-right:2px;background:url(../images/jp_spacer.png) 100% 1px no-repeat;text-indent:-9999px;}
ul.jp-controls a span, div.jp-interface ul.jp-controls li a span{display:block;overflow:hidden;text-indent:-9999px;}
a.jp-play span, a.jp-pause span{width:28px;height:28px;}
a.jp-play span{background:url(../images/jp_sprite.png) 0 0 no-repeat;}
a.jp-play:hover span{background-position:-28px 0;}
a.jp-pause span{display:none;background:url(../images/jp_sprite.png) 0 -28px no-repeat;}
a.jp-pause:hover span{background-position:-28px -28px;}
a.jp-stop span, a.jp-previous span, a.jp-next span{width:28px;height:28px;}
a.jp-stop span{background:url(../images/jp_sprite.png) 0 -56px no-repeat;}
a.jp-stop:hover span{background-position:-28px -56px;}
a.jp-previous span{background:url(../images/jp_sprite.png) -56px -28px no-repeat;}
a.jp-previous:hover span{background-position:-84px -28px;}
a.jp-next span{background:url(../images/jp_sprite.png) -56px 0 no-repeat;}
a.jp-next:hover span{background-position:-84px 0;}
div.jp-progress{position:absolute;top:0;left:0;overflow:hidden;width:100%;height:7px;border-bottom:1px solid #777;background-color:#303030;}
div.jp-seek-bar{width:0;height:100%;cursor:pointer;-webkit-box-shadow:inset 0 0 2px #464444;-moz-box-shadow:inset 0 0 2px #464444;box-shadow:inset 0 0 2px #464444;}
div.jp-play-bar{width:0;height:100%;background-color:#bababa;background-image:-moz-linear-gradient(top,#cecece,#9d9d9d);background-image:-webkit-gradient(linear,0 0,0 100%,from(#cecece),to(#9d9d9d));background-image:-webkit-linear-gradient(top,#cecece,#9d9d9d);background-image:-o-linear-gradient(top,#cecece,#9d9d9d);background-image:linear-gradient(to bottom,#cecece,#9d9d9d);background-repeat:repeat-x;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffcecece', endColorstr='#ff9d9d9d', GradientType=0);}
div.jp-seeking-bg{background:url(../images/jp_load.gif) 0 0 repeat-x;}
a.jp-mute, a.jp-unmute, a.jp-volume-max{position:relative;}
a.jp-mute, a.jp-unmute{margin:0 60px 0 0;}
a.jp-mute span{background:url(../images/jp_sprite.png) 0 -84px no-repeat;}
a.jp-mute:hover span{background-position:-28px -84px;}
a.jp-unmute span{display:none;background:url(../images/jp_sprite.png) 0 -112px no-repeat;}
a.jp-unmute:hover span{background-position:-28px -112px;}
div.jp-volume-bar{position:absolute;top:10px;right:8px;z-index:2;overflow:hidden;width:50px;height:7px;background-color:#202020;cursor:pointer;-webkit-box-shadow:1px 1px 0 #464444;-moz-box-shadow:1px 1px 0 #464444;box-shadow:1px 1px 0 #464444;-webkit-border-radius:3px;-moz-border-radius:3px;border-radius:3px;}
div.jp-audio div.jp-volume-bar{right:8px;}
div.jp-volume-bar-value{width:0;height:7px;-webkit-border-top-left-radius:3px;-moz-border-radius-topleft:3px;border-top-left-radius:3px;-webkit-border-bottom-left-radius:3px;-moz-border-radius-bottomleft:3px;border-bottom-left-radius:3px;background-color:#777777;background-image:-moz-linear-gradient(top,#848484,#646464);background-image:-webkit-gradient(linear,0 0,0 100%,from(#848484),to(#646464));background-image:-webkit-linear-gradient(top,#848484,#646464);background-image:-o-linear-gradient(top,#848484,#646464);background-image:linear-gradient(to bottom,#848484,#646464);background-repeat:repeat-x;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff848484', endColorstr='#ff646464', GradientType=0);}
div.jp-current-time, div.jp-time-sep, div.jp-duration{margin-top:6px;font-size:0.85em;}
div.jp-current-time{display:inline;float:right;color:#ffffff;}
div.jp-time-sep{display:inline;float:right;margin-right:5px;margin-left:5px;text-align:center;}
div.jp-duration{display:inline;float:right;margin-right:130px;text-align:right;}
div.jp-audio div.jp-duration{margin-right:100px;}
@media (max-width:480px){div.jp-volume-bar, .jp-toggles, div.jp-duration{display:none !important;}
}
div.jp-title{color:#fff;text-align:center;}
div.jp-title, div.jp-playlist{width:100%;}
div.jp-type-single div.jp-title, div.jp-type-playlist div.jp-title, div.jp-type-single div.jp-playlist{border-top:none;}
div.jp-title ul, div.jp-playlist ul{margin:0;padding:0;list-style-type:none;}
div.jp-title li{padding:5px 0 0;font-weight:bold;}
div.jp-video-full div.jp-title li{padding:1px 0;}
div.jp-playlist li{position:relative;background:#222;border-top:1px solid #DDD;margin:0;padding:0;height:33px;}
div.jp-playlist li:first-child{border:none;}
div.jp-playlist li a{display:block;padding:6px 25px;text-decoration:none;}
div.jp-playlist li a.jp-playlist-current{background:url(../images/jp_playlist_li_cur.png) no-repeat scroll 10px center transparent;}
div.jp-playlist li a:hover, div.jp-playlist li.jp-playlist-current a{color:#8C8C8C;}
div.jp-playlist li div{display:inline;}
div.jp-playlist a.jp-playlist-item-remove{display:inline;float:right;margin-right:10px;color:#666666;text-align:right;font-weight:bold;}
div.jp-playlist a.jp-playlist-item-remove:hover{color:#0d88c1;}
div.jp-playlist span.jp-free-media{display:inline;float:right;margin-right:10px;text-align:right;}
div.jp-playlist span.jp-free-media a{color:#666666;}
div.jp-playlist span.jp-free-media a:hover{color:#0d88c1;}
span.jp-artist{color:#fefefe;font-size:.9em;}
div.jp-video-play{background-color:rgba(0,0,0,0);display:block;position:absolute;top:0;left:0;width:100%;height:100%;cursor:pointer;}
div.jp-video-full div.jp-video-play{z-index:1000;height:100%;}
a.jp-video-play-icon{position:absolute;top:50%;left:50%;display:block;margin-top:-25px;margin-left:-40px;width:80px;height:50px;background:url(../images/jp_play.png) 0 0 no-repeat;text-indent:-9999px;opacity:0.7;-webkit-transition:opacity .5s ease-in-out;-moz-transition:opacity .5s ease-in-out;-ms-transition:opacity .5s ease-in-out;-o-transition:opacity .5s ease-in-out;transition:opacity .5s ease-in-out;}
div.jp-video-play:hover a.jp-video-play-icon{opacity:1;}
div.jp-jplayer{background-color:#000000;}
ul.jp-toggles{z-index:1;float:right;overflow:hidden;margin:0 auto;padding:0;list-style-type:none;}
ul.jp-toggles li{display:block;float:left;}
ul.jp-toggles li a{padding-left:2px;background:url(../images/jp_spacer.png) 0 1px no-repeat;}
ul.jp-toggles li a, ul.jp-toggles li a span{display:block;width:28px;height:28px;text-indent:-9999px;}
a.jp-full-screen span{background:url(../images/jp_sprite.png) -56px -56px no-repeat;}
a.jp-full-screen:hover span{background-position:-84px -56px;}
a.jp-restore-screen span{background:url(../images/jp_sprite.png) -56px -84px no-repeat;}
a.jp-restore-screen:hover span{background-position:-84px -84px;}
.jp-no-solution{position:absolute;top:10px;left:50%;display:none;margin-left:-202px;padding:5px;width:390px;border:2px solid #DDD;background-color:#404040;color:#000000;font-size:.8em;}
.jp-no-solution a{color:#000;}
.jp-no-solution span{display:block;text-align:center;font-weight:bold;font-size:1em;}
.wrapper{overflow:hidden;position:relative;width:100%;}
.extra-wrap{overflow:hidden;}
.row > br, .row > p{display:none;}
[class*="span"]{position:relative;}
.clear{clear:both;display:block;overflow:hidden;visibility:hidden;width:0;height:0;}
@media (max-width:480px){.pp_pic_holder.pp_default{width:100% !important;left:0 !important;overflow:hidden;}
div.pp_default .pp_content_container .pp_left{padding-left:0 !important;}
div.pp_default .pp_content_container .pp_right{padding-right:0 !important;}
.pp_content{width:100% !important;height:auto !important;}
.pp_fade{width:100% !important;height:100% !important;}
a.pp_expand, a.pp_contract, .pp_hoverContainer, .pp_gallery, .pp_top, .pp_bottom{display:none !important;}
#pp_full_res img{width:100% !important;height:auto !important;}
.pp_details{width:94% !important;padding-left:3%;padding-right:4%;padding-top:10px;padding-bottom:10px;background-color:#fff;margin-top:-2px !important;}
a.pp_close{right:10px !important;top:10px !important;}
}
.post_networks h1, .post_networks h2, .post_networks h3, .post_networks h4, .post_networks h5, .post_networks h6{border-bottom:1px solid #DDD;padding-bottom:8px;}
.post_networks >ul >li{float:left;display:block;}
.post_networks >ul >li span{margin-right:10px;}
.spinner_32, .thumbnail, .accordion_loader, .google-map, .flexslider, .camera_loader, .preloader{min-height:36px;background:url('../images/loading_32.gif') 50% 50% no-repeat;background:url('../images/loading_32.gif') 50% 50% no-repeat, url('../images/loading_bg_32.png') 50% 50% no-repeat;}
.spinner_16, div.ajax-loader, .thumbnail[rel^="prettyPhoto"]{min-height:20px;background:url('../images/loading_16.gif') 50% 50% no-repeat;background:url('../images/loading_16.gif') 50% 50% no-repeat, url('../images/loading_bg_16.png') 50% 50% no-repeat;}
.camera_loader{border:none;opacity:0.3;}
.preloader{margin-bottom:20px;}
img.ajax-loader{display:none;}
div.ajax-loader{position:relative;display:none;vertical-align:top;margin-top:4px;width:20px;height:20px;}
.clearfix{*zoom:1;}
.clearfix:before, .clearfix:after{display:table;content:"";line-height:0;}
.clearfix:after{clear:both;}
.hide-text{font:0/0 a;color:transparent;text-shadow:none;background-color:transparent;border:0;}
.input-block-level{display:block;width:100%;min-height:28px;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;}
.forabg{background-color:#FFF;}
ul.topiclist{display:block;list-style-type:none;margin:0;}
ul.topiclist{display:block;list-style-type:none;margin:0;}
ul.forums{padding:0;}
ul.topiclist li{display:block;list-style-type:none;color:#75899c;margin:0;padding:0px 20px;}
ul.topiclist dl{position:relative;}
ul.topiclist li.row dl{padding:20px 0;}
ul.topiclist dt{display:block;float:left;width:50%;font-size:1em;padding-left:5px;padding-right:5px;}
ul.topiclist dd{display:block;float:left;padding:0;}
ul.topiclist dfn{position:absolute;left:-999px;width:990px;}
ul.topiclist li.row dt a.subforum{position:relative;white-space:nowrap;padding:0;}
.forum-image{float:left;padding-top:5px;margin-right:5px;}
li.row{border-bottom:1px solid #E5E5E5;}
ul.topiclist li.row:last-child{border-bottom:0;}
li.row strong{font-weight:normal;color:#000000;}
li.row:hover{}
li.row:hover dd{}
li.header dt, li.header dd{line-height:50px;border-left-width:0;margin:0;color:#FFFFFF;padding-top:0px;padding-bottom:0px;font-size:1em;font-family:'Noto Sans', sans-serif;}
li.header dt{}
li.header dt.header-name{font-size:1.077em;}
li.header dd{}
li.header dl.icon{min-height:0;}
li.header dl.icon dt{padding-left:0;padding-right:58px;}
dl.icon{min-height:35px;background-position:0 20px;background-repeat:no-repeat;}
dl.icon dt{padding-left:53px;background-repeat:no-repeat;background-position:0 20px;}
dd.posts, dd.topics, dd.views{width:8%;text-align:center;font-size:1em;}
dl.icon dt ol,
dl.icon dt ul{list-style-position:inside;margin-left:1em;}
dl.icon dt li{display:list-item;list-style-type:inherit;}
dd.lastpost{width:25%;font-size:1em;}
dd.redirect{font-size:1em;line-height:2.5em;}
dd.moderation{font-size:1em;}
ul.topiclist li.header{height:50px;padding:0 20px;}
.section-ucp ul.topiclist li.header,
#cp-main ul.topiclist li.header{height:auto;}
.section-ucp ul.topiclist li.header dd,
.section-ucp ul.topiclist li.header dt{margin-bottom:0 !important;}
dd.lastpost span, ul.topiclist dd.searchby span, ul.topiclist dd.info span, ul.topiclist dd.time span, dd.redirect span, dd.moderation span{display:block;padding-left:5px;}
dd.time{width:auto;line-height:200%;font-size:1em;}
dd.extra{width:12%;line-height:200%;text-align:center;font-size:1em;}
dd.mark{float:right !important;width:9%;text-align:center;line-height:200%;font-size:1.2em;}
dd.info{width:30%;}
dd.option{width:15%;line-height:200%;text-align:center;font-size:1em;}
dd.searchby{width:47%;font-size:1em;line-height:1em;}
ul.topiclist dd.searchextra{margin-left:5px;padding:0.2em 0;font-size:1em;color:#333333;border-left:none;clear:both;width:98%;overflow:hidden;}
.topic-actions{margin-bottom:15px;height:40px;min-height:40px;}
div[class].topic-actions{height:auto;}
/*!
 * Bootstrap Responsive v2.3.0
 *
 * Copyright 2012 Twitter, Inc
 * Licensed under the Apache License v2.0
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Designed and built with all the love in the world @twitter by @mdo and @fat.
 */
.clearfix {
  *zoom: 1;
}
.clearfix:before,
.clearfix:after {
  display: table;
  content: "";
  line-height: 0;
}
.clearfix:after {
  clear: both;
}
.hide-text {
  font: 0/0 a;
  color: transparent;
  text-shadow: none;
  background-color: transparent;
  border: 0;
}
.input-block-level {
  display: block;
  width: 100%;
  min-height: 30px;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
@-ms-viewport {
  width: device-width;
}
.hidden {
  display: none;
  visibility: hidden;
}
.visible-phone {
  display: none !important;
}
.visible-tablet {
  display: none !important;
}
.hidden-desktop {
  display: none !important;
}
.visible-desktop {
  display: inherit !important;
}
@media (min-width: 768px) and (max-width: 979px) {
  .hidden-desktop {
    display: inherit !important;
  }
  .visible-desktop {
    display: none !important ;
  }
  .visible-tablet {
    display: inherit !important;
  }
  .hidden-tablet {
    display: none !important;
  }
}
@media (max-width: 767px) {
  .hidden-desktop {
    display: inherit !important;
  }
  .visible-desktop {
    display: none !important;
  }
  .visible-phone {
    display: inherit !important;
  }
  .hidden-phone {
    display: none !important;
  }
}
.visible-print {
  display: none !important;
}
@media print {
  .visible-print {
    display: inherit !important;
  }
  .hidden-print {
    display: none !important;
  }
}
@media (min-width: 1200px) {
  .row {
    margin-left: -30px;
    *zoom: 1;
  }
  .row:before,
  .row:after {
    display: table;
    content: "";
    line-height: 0;
  }
  .row:after {
    clear: both;
  }
  [class*="span"] {
    float: left;
    min-height: 1px;
    margin-left: 30px;
  }
  .container,
  .navbar-static-top .container,
  .navbar-fixed-top .container,
  .navbar-fixed-bottom .container {
    width: 1170px;
  }
  .span12 {
    width: 1170px;
  }
  .span11 {
    width: 1070px;
  }
  .span10 {
    width: 970px;
  }
  .span9 {
    width: 870px;
  }
  .span8 {
    width: 770px;
  }
  .span7 {
    width: 670px;
  }
  .span6 {
    width: 570px;
  }
  .span5 {
    width: 470px;
  }
  .span4 {
    width: 370px;
  }
  .span3 {
    width: 270px;
  }
  .span2 {
    width: 170px;
  }
  .span1 {
    width: 70px;
  }
  .offset12 {
    margin-left: 1230px;
  }
  .offset11 {
    margin-left: 1130px;
  }
  .offset10 {
    margin-left: 1030px;
  }
  .offset9 {
    margin-left: 930px;
  }
  .offset8 {
    margin-left: 830px;
  }
  .offset7 {
    margin-left: 730px;
  }
  .offset6 {
    margin-left: 630px;
  }
  .offset5 {
    margin-left: 530px;
  }
  .offset4 {
    margin-left: 430px;
  }
  .offset3 {
    margin-left: 330px;
  }
  .offset2 {
    margin-left: 230px;
  }
  .offset1 {
    margin-left: 130px;
  }
  .row-fluid {
    width: 100%;
    *zoom: 1;
  }
  .row-fluid:before,
  .row-fluid:after {
    display: table;
    content: "";
    line-height: 0;
  }
  .row-fluid:after {
    clear: both;
  }
  .row-fluid [class*="span"] {
    display: block;
    width: 100%;
    min-height: 30px;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    float: left;
    margin-left: 2.564102564102564%;
    *margin-left: 2.5109110747408616%;
  }
  .row-fluid [class*="span"]:first-child {
    margin-left: 0;
  }
  .row-fluid .controls-row [class*="span"] + [class*="span"] {
    margin-left: 2.564102564102564%;
  }
  .row-fluid .span12 {
    width: 100%;
    *width: 99.94680851063829%;
  }
  .row-fluid .span11 {
    width: 91.45299145299145%;
    *width: 91.39979996362975%;
  }
  .row-fluid .span10 {
    width: 82.90598290598291%;
    *width: 82.8527914166212%;
  }
  .row-fluid .span9 {
    width: 74.35897435897436%;
    *width: 74.30578286961266%;
  }
  .row-fluid .span8 {
    width: 65.81196581196582%;
    *width: 65.75877432260411%;
  }
  .row-fluid .span7 {
    width: 57.26495726495726%;
    *width: 57.21176577559556%;
  }
  .row-fluid .span6 {
    width: 48.717948717948715%;
    *width: 48.664757228587014%;
  }
  .row-fluid .span5 {
    width: 40.17094017094017%;
    *width: 40.11774868157847%;
  }
  .row-fluid .span4 {
    width: 31.623931623931625%;
    *width: 31.570740134569924%;
  }
  .row-fluid .span3 {
    width: 23.076923076923077%;
    *width: 23.023731587561375%;
  }
  .row-fluid .span2 {
    width: 14.52991452991453%;
    *width: 14.476723040552828%;
  }
  .row-fluid .span1 {
    width: 5.982905982905983%;
    *width: 5.929714493544281%;
  }
  .row-fluid .offset12 {
    margin-left: 105.12820512820512%;
    *margin-left: 105.02182214948171%;
  }
  .row-fluid .offset12:first-child {
    margin-left: 102.56410256410257%;
    *margin-left: 102.45771958537915%;
  }
  .row-fluid .offset11 {
    margin-left: 96.58119658119658%;
    *margin-left: 96.47481360247316%;
  }
  .row-fluid .offset11:first-child {
    margin-left: 94.01709401709402%;
    *margin-left: 93.91071103837061%;
  }
  .row-fluid .offset10 {
    margin-left: 88.03418803418803%;
    *margin-left: 87.92780505546462%;
  }
  .row-fluid .offset10:first-child {
    margin-left: 85.47008547008548%;
    *margin-left: 85.36370249136206%;
  }
  .row-fluid .offset9 {
    margin-left: 79.48717948717949%;
    *margin-left: 79.38079650845607%;
  }
  .row-fluid .offset9:first-child {
    margin-left: 76.92307692307693%;
    *margin-left: 76.81669394435352%;
  }
  .row-fluid .offset8 {
    margin-left: 70.94017094017094%;
    *margin-left: 70.83378796144753%;
  }
  .row-fluid .offset8:first-child {
    margin-left: 68.37606837606839%;
    *margin-left: 68.26968539734497%;
  }
  .row-fluid .offset7 {
    margin-left: 62.393162393162385%;
    *margin-left: 62.28677941443899%;
  }
  .row-fluid .offset7:first-child {
    margin-left: 59.82905982905982%;
    *margin-left: 59.72267685033642%;
  }
  .row-fluid .offset6 {
    margin-left: 53.84615384615384%;
    *margin-left: 53.739770867430444%;
  }
  .row-fluid .offset6:first-child {
    margin-left: 51.28205128205128%;
    *margin-left: 51.175668303327875%;
  }
  .row-fluid .offset5 {
    margin-left: 45.299145299145295%;
    *margin-left: 45.1927623204219%;
  }
  .row-fluid .offset5:first-child {
    margin-left: 42.73504273504273%;
    *margin-left: 42.62865975631933%;
  }
  .row-fluid .offset4 {
    margin-left: 36.75213675213675%;
    *margin-left: 36.645753773413354%;
  }
  .row-fluid .offset4:first-child {
    margin-left: 34.18803418803419%;
    *margin-left: 34.081651209310785%;
  }
  .row-fluid .offset3 {
    margin-left: 28.205128205128204%;
    *margin-left: 28.0987452264048%;
  }
  .row-fluid .offset3:first-child {
    margin-left: 25.641025641025642%;
    *margin-left: 25.53464266230224%;
  }
  .row-fluid .offset2 {
    margin-left: 19.65811965811966%;
    *margin-left: 19.551736679396257%;
  }
  .row-fluid .offset2:first-child {
    margin-left: 17.094017094017094%;
    *margin-left: 16.98763411529369%;
  }
  .row-fluid .offset1 {
    margin-left: 11.11111111111111%;
    *margin-left: 11.004728132387708%;
  }
  .row-fluid .offset1:first-child {
    margin-left: 8.547008547008547%;
    *margin-left: 8.440625568285142%;
  }
  input,
  textarea,
  .uneditable-input {
    margin-left: 0;
  }
  .controls-row [class*="span"] + [class*="span"] {
    margin-left: 30px;
  }
  input.span12,
  textarea.span12,
  .uneditable-input.span12 {
    width: 1156px;
  }
  input.span11,
  textarea.span11,
  .uneditable-input.span11 {
    width: 1056px;
  }
  input.span10,
  textarea.span10,
  .uneditable-input.span10 {
    width: 956px;
  }
  input.span9,
  textarea.span9,
  .uneditable-input.span9 {
    width: 856px;
  }
  input.span8,
  textarea.span8,
  .uneditable-input.span8 {
    width: 756px;
  }
  input.span7,
  textarea.span7,
  .uneditable-input.span7 {
    width: 656px;
  }
  input.span6,
  textarea.span6,
  .uneditable-input.span6 {
    width: 556px;
  }
  input.span5,
  textarea.span5,
  .uneditable-input.span5 {
    width: 456px;
  }
  input.span4,
  textarea.span4,
  .uneditable-input.span4 {
    width: 356px;
  }
  input.span3,
  textarea.span3,
  .uneditable-input.span3 {
    width: 256px;
  }
  input.span2,
  textarea.span2,
  .uneditable-input.span2 {
    width: 156px;
  }
  input.span1,
  textarea.span1,
  .uneditable-input.span1 {
    width: 56px;
  }
  .thumbnails {
    margin-left: -30px;
  }
  .thumbnails > li {
    margin-left: 30px;
  }
  .row-fluid .thumbnails {
    margin-left: 0;
  }
}
@media (min-width: 768px) and (max-width: 979px) {
  .row {
    margin-left: -20px;
    *zoom: 1;
  }
  .row:before,
  .row:after {
    display: table;
    content: "";
    line-height: 0;
  }
  .row:after {
    clear: both;
  }
  [class*="span"] {
    float: left;
    min-height: 1px;
    margin-left: 20px;
  }
  .container,
  .navbar-static-top .container,
  .navbar-fixed-top .container,
  .navbar-fixed-bottom .container {
    width: 724px;
  }
  .span12 {
    width: 724px;
  }
  .span11 {
    width: 662px;
  }
  .span10 {
    width: 600px;
  }
  .span9 {
    width: 538px;
  }
  .span8 {
    width: 476px;
  }
  .span7 {
    width: 414px;
  }
  .span6 {
    width: 352px;
  }
  .span5 {
    width: 290px;
  }
  .span4 {
    width: 228px;
  }
  .span3 {
    width: 166px;
  }
  .span2 {
    width: 104px;
  }
  .span1 {
    width: 42px;
  }
  .offset12 {
    margin-left: 764px;
  }
  .offset11 {
    margin-left: 702px;
  }
  .offset10 {
    margin-left: 640px;
  }
  .offset9 {
    margin-left: 578px;
  }
  .offset8 {
    margin-left: 516px;
  }
  .offset7 {
    margin-left: 454px;
  }
  .offset6 {
    margin-left: 392px;
  }
  .offset5 {
    margin-left: 330px;
  }
  .offset4 {
    margin-left: 268px;
  }
  .offset3 {
    margin-left: 206px;
  }
  .offset2 {
    margin-left: 144px;
  }
  .offset1 {
    margin-left: 82px;
  }
  .row-fluid {
    width: 100%;
    *zoom: 1;
  }
  .row-fluid:before,
  .row-fluid:after {
    display: table;
    content: "";
    line-height: 0;
  }
  .row-fluid:after {
    clear: both;
  }
  .row-fluid [class*="span"] {
    display: block;
    width: 100%;
    min-height: 30px;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    float: left;
    margin-left: 2.7624309392265194%;
    *margin-left: 2.709239449864817%;
  }
  .row-fluid [class*="span"]:first-child {
    margin-left: 0;
  }
  .row-fluid .controls-row [class*="span"] + [class*="span"] {
    margin-left: 2.7624309392265194%;
  }
  .row-fluid .span12 {
    width: 100%;
    *width: 99.94680851063829%;
  }
  .row-fluid .span11 {
    width: 91.43646408839778%;
    *width: 91.38327259903608%;
  }
  .row-fluid .span10 {
    width: 82.87292817679558%;
    *width: 82.81973668743387%;
  }
  .row-fluid .span9 {
    width: 74.30939226519337%;
    *width: 74.25620077583166%;
  }
  .row-fluid .span8 {
    width: 65.74585635359117%;
    *width: 65.69266486422946%;
  }
  .row-fluid .span7 {
    width: 57.18232044198895%;
    *width: 57.12912895262725%;
  }
  .row-fluid .span6 {
    width: 48.61878453038674%;
    *width: 48.56559304102504%;
  }
  .row-fluid .span5 {
    width: 40.05524861878453%;
    *width: 40.00205712942283%;
  }
  .row-fluid .span4 {
    width: 31.491712707182323%;
    *width: 31.43852121782062%;
  }
  .row-fluid .span3 {
    width: 22.92817679558011%;
    *width: 22.87498530621841%;
  }
  .row-fluid .span2 {
    width: 14.3646408839779%;
    *width: 14.311449394616199%;
  }
  .row-fluid .span1 {
    width: 5.801104972375691%;
    *width: 5.747913483013988%;
  }
  .row-fluid .offset12 {
    margin-left: 105.52486187845304%;
    *margin-left: 105.41847889972962%;
  }
  .row-fluid .offset12:first-child {
    margin-left: 102.76243093922652%;
    *margin-left: 102.6560479605031%;
  }
  .row-fluid .offset11 {
    margin-left: 96.96132596685082%;
    *margin-left: 96.8549429881274%;
  }
  .row-fluid .offset11:first-child {
    margin-left: 94.1988950276243%;
    *margin-left: 94.09251204890089%;
  }
  .row-fluid .offset10 {
    margin-left: 88.39779005524862%;
    *margin-left: 88.2914070765252%;
  }
  .row-fluid .offset10:first-child {
    margin-left: 85.6353591160221%;
    *margin-left: 85.52897613729868%;
  }
  .row-fluid .offset9 {
    margin-left: 79.8342541436464%;
    *margin-left: 79.72787116492299%;
  }
  .row-fluid .offset9:first-child {
    margin-left: 77.07182320441989%;
    *margin-left: 76.96544022569647%;
  }
  .row-fluid .offset8 {
    margin-left: 71.2707182320442%;
    *margin-left: 71.16433525332079%;
  }
  .row-fluid .offset8:first-child {
    margin-left: 68.50828729281768%;
    *margin-left: 68.40190431409427%;
  }
  .row-fluid .offset7 {
    margin-left: 62.70718232044199%;
    *margin-left: 62.600799341718584%;
  }
  .row-fluid .offset7:first-child {
    margin-left: 59.94475138121547%;
    *margin-left: 59.838368402492065%;
  }
  .row-fluid .offset6 {
    margin-left: 54.14364640883978%;
    *margin-left: 54.037263430116376%;
  }
  .row-fluid .offset6:first-child {
    margin-left: 51.38121546961326%;
    *margin-left: 51.27483249088986%;
  }
  .row-fluid .offset5 {
    margin-left: 45.58011049723757%;
    *margin-left: 45.47372751851417%;
  }
  .row-fluid .offset5:first-child {
    margin-left: 42.81767955801105%;
    *margin-left: 42.71129657928765%;
  }
  .row-fluid .offset4 {
    margin-left: 37.01657458563536%;
    *margin-left: 36.91019160691196%;
  }
  .row-fluid .offset4:first-child {
    margin-left: 34.25414364640884%;
    *margin-left: 34.14776066768544%;
  }
  .row-fluid .offset3 {
    margin-left: 28.45303867403315%;
    *margin-left: 28.346655695309746%;
  }
  .row-fluid .offset3:first-child {
    margin-left: 25.69060773480663%;
    *margin-left: 25.584224756083227%;
  }
  .row-fluid .offset2 {
    margin-left: 19.88950276243094%;
    *margin-left: 19.783119783707537%;
  }
  .row-fluid .offset2:first-child {
    margin-left: 17.12707182320442%;
    *margin-left: 17.02068884448102%;
  }
  .row-fluid .offset1 {
    margin-left: 11.32596685082873%;
    *margin-left: 11.219583872105325%;
  }
  .row-fluid .offset1:first-child {
    margin-left: 8.56353591160221%;
    *margin-left: 8.457152932878806%;
  }
  input,
  textarea,
  .uneditable-input {
    margin-left: 0;
  }
  .controls-row [class*="span"] + [class*="span"] {
    margin-left: 20px;
  }
  input.span12,
  textarea.span12,
  .uneditable-input.span12 {
    width: 710px;
  }
  input.span11,
  textarea.span11,
  .uneditable-input.span11 {
    width: 648px;
  }
  input.span10,
  textarea.span10,
  .uneditable-input.span10 {
    width: 586px;
  }
  input.span9,
  textarea.span9,
  .uneditable-input.span9 {
    width: 524px;
  }
  input.span8,
  textarea.span8,
  .uneditable-input.span8 {
    width: 462px;
  }
  input.span7,
  textarea.span7,
  .uneditable-input.span7 {
    width: 400px;
  }
  input.span6,
  textarea.span6,
  .uneditable-input.span6 {
    width: 338px;
  }
  input.span5,
  textarea.span5,
  .uneditable-input.span5 {
    width: 276px;
  }
  input.span4,
  textarea.span4,
  .uneditable-input.span4 {
    width: 214px;
  }
  input.span3,
  textarea.span3,
  .uneditable-input.span3 {
    width: 152px;
  }
  input.span2,
  textarea.span2,
  .uneditable-input.span2 {
    width: 90px;
  }
  input.span1,
  textarea.span1,
  .uneditable-input.span1 {
    width: 28px;
  }
}
@media (max-width: 767px) {
  body {
    padding-left: 20px;
    padding-right: 20px;
  }
  .navbar-fixed-top,
  .navbar-fixed-bottom,
  .navbar-static-top {
    margin-left: -20px;
    margin-right: -20px;
  }
  .container-fluid {
    padding: 0;
  }
  .dl-horizontal dt {
    float: none;
    clear: none;
    width: auto;
    text-align: left;
  }
  .dl-horizontal dd {
    margin-left: 0;
  }
  .container {
    width: auto;
  }
  .row-fluid {
    width: 100%;
  }
  .row,
  .thumbnails {
    margin-left: 0;
  }
  .thumbnails > li {
    float: none;
    margin-left: 0;
  }
  [class*="span"],
  .uneditable-input[class*="span"],
  .row-fluid [class*="span"] {
    float: none;
    display: block;
    width: 100%;
    margin-left: 0;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
  }
  .span12,
  .row-fluid .span12 {
    width: 100%;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
  }
  .row-fluid [class*="offset"]:first-child {
    margin-left: 0;
  }
  .input-large,
  .input-xlarge,
  .input-xxlarge,
  input[class*="span"],
  select[class*="span"],
  textarea[class*="span"],
  .uneditable-input {
    display: block;
    width: 100%;
    min-height: 30px;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
  }
  .input-prepend input,
  .input-append input,
  .input-prepend input[class*="span"],
  .input-append input[class*="span"] {
    display: inline-block;
    width: auto;
  }
  .controls-row [class*="span"] + [class*="span"] {
    margin-left: 0;
  }
  .modal {
    position: fixed;
    top: 20px;
    left: 20px;
    right: 20px;
    width: auto;
    margin: 0;
  }
  .modal.fade {
    top: -100px;
  }
  .modal.fade.in {
    top: 20px;
  }
}
@media (max-width: 480px) {
  .nav-collapse {
    -webkit-transform: translate3d(0, 0, 0);
  }
  .page-header h1 small {
    display: block;
    line-height: 20px;
  }
  input[type="checkbox"],
  input[type="radio"] {
    border: 1px solid #ccc;
  }
  .form-horizontal .control-label {
    float: none;
    width: auto;
    padding-top: 0;
    text-align: left;
  }
  .form-horizontal .controls {
    margin-left: 0;
  }
  .form-horizontal .control-list {
    padding-top: 0;
  }
  .form-horizontal .form-actions {
    padding-left: 10px;
    padding-right: 10px;
  }
  .media .pull-left,
  .media .pull-right {
    float: none;
    display: block;
    margin-bottom: 10px;
  }
  .media-object {
    margin-right: 0;
    margin-left: 0;
  }
  .modal {
    top: 10px;
    left: 10px;
    right: 10px;
  }
  .modal-header .close {
    padding: 10px;
    margin: -10px;
  }
  .carousel-caption {
    position: static;
  }
}
@media (max-width: 979px) {
  body {
    padding-top: 0;
  }
  .navbar-fixed-top,
  .navbar-fixed-bottom {
    position: static;
  }
  .navbar-fixed-top {
    margin-bottom: 20px;
  }
  .navbar-fixed-bottom {
    margin-top: 20px;
  }
  .navbar-fixed-top .navbar-inner,
  .navbar-fixed-bottom .navbar-inner {
    padding: 5px;
  }
  .navbar .container {
    width: auto;
    padding: 0;
  }
  .navbar .brand {
    padding-left: 10px;
    padding-right: 10px;
    margin: 0 0 0 -5px;
  }
  .nav-collapse {
    clear: both;
  }
  .nav-collapse .nav {
    float: none;
    margin: 0 0 10px;
  }
  .nav-collapse .nav > li {
    float: none;
  }
  .nav-collapse .nav > li > a {
    margin-bottom: 2px;
  }
  .nav-collapse .nav > .divider-vertical {
    display: none;
  }
  .nav-collapse .nav .nav-header {
    color: #777777;
    text-shadow: none;
  }
  .nav-collapse .nav > li > a,
  .nav-collapse .dropdown-menu a {
    padding: 9px 15px;
    font-weight: bold;
    color: #777777;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
  }
  .nav-collapse .btn {
    padding: 4px 10px 4px;
    font-weight: normal;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius: 4px;
  }
  .nav-collapse .dropdown-menu li + li a {
    margin-bottom: 2px;
  }
  .nav-collapse .nav > li > a:hover,
  .nav-collapse .nav > li > a:focus,
  .nav-collapse .dropdown-menu a:hover,
  .nav-collapse .dropdown-menu a:focus {
    background-color: #f2f2f2;
  }
  .navbar-inverse .nav-collapse .nav > li > a,
  .navbar-inverse .nav-collapse .dropdown-menu a {
    color: #999999;
  }
  .navbar-inverse .nav-collapse .nav > li > a:hover,
  .navbar-inverse .nav-collapse .nav > li > a:focus,
  .navbar-inverse .nav-collapse .dropdown-menu a:hover,
  .navbar-inverse .nav-collapse .dropdown-menu a:focus {
    background-color: #111111;
  }
  .nav-collapse.in .btn-group {
    margin-top: 5px;
    padding: 0;
  }
  .nav-collapse .dropdown-menu {
    position: static;
    top: auto;
    left: auto;
    float: none;
    display: none;
    max-width: none;
    margin: 0 15px;
    padding: 0;
    background-color: transparent;
    border: none;
    -webkit-border-radius: 0;
    -moz-border-radius: 0;
    border-radius: 0;
    -webkit-box-shadow: none;
    -moz-box-shadow: none;
    box-shadow: none;
  }
  .nav-collapse .open > .dropdown-menu {
    display: block;
  }
  .nav-collapse .dropdown-menu:before,
  .nav-collapse .dropdown-menu:after {
    display: none;
  }
  .nav-collapse .dropdown-menu .divider {
    display: none;
  }
  .nav-collapse .nav > li > .dropdown-menu:before,
  .nav-collapse .nav > li > .dropdown-menu:after {
    display: none;
  }
  .nav-collapse .navbar-form,
  .nav-collapse .navbar-search {
    float: none;
    padding: 10px 15px;
    margin: 10px 0;
    border-top: 1px solid #f2f2f2;
    border-bottom: 1px solid #f2f2f2;
    -webkit-box-shadow: inset 0 1px 0 rgba(255,255,255,.1), 0 1px 0 rgba(255,255,255,.1);
    -moz-box-shadow: inset 0 1px 0 rgba(255,255,255,.1), 0 1px 0 rgba(255,255,255,.1);
    box-shadow: inset 0 1px 0 rgba(255,255,255,.1), 0 1px 0 rgba(255,255,255,.1);
  }
  .navbar-inverse .nav-collapse .navbar-form,
  .navbar-inverse .nav-collapse .navbar-search {
    border-top-color: #111111;
    border-bottom-color: #111111;
  }
  .navbar .nav-collapse .nav.pull-right {
    float: none;
    margin-left: 0;
  }
  .nav-collapse,
  .nav-collapse.collapse {
    overflow: hidden;
    height: 0;
  }
  .navbar .btn-navbar {
    display: block;
  }
  .navbar-static .navbar-inner {
    padding-left: 10px;
    padding-right: 10px;
  }
}
@media (min-width: 980px) {
  .nav-collapse.collapse {
    height: auto !important;
    overflow: visible !important;
  }
}
</style> 

<link rel="stylesheet" type="text/css" media="all" href="http://4um.pl/templates/default/css/style.css"/>

<link rel="stylesheet" type="text/css" media="all" href="http://4um.pl/templates/default/css/forum.min.css"/>

<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<meta name="generator" content="Net4Engine 1.0 Alfa"/>
<link rel='canonical' href='http://4um.pl'/>
<link rel='shortlink' href='http://4um.pl'/>


<style type="text/css">h1{font:normal 40px/35px Open Sans;color:#272a31;}h2{font:normal 40px/38px Open Sans;color:#272a31;}h3{font:normal 20px/24px Open Sans;color:#3e454c;}h4{font:normal 14px/20px Arial,Helvetica,sans-serif;color:#333333;}h5{font:normal 12px/18px Arial,Helvetica,sans-serif;color:#333333;}h6{font:normal 12px/18px Arial,Helvetica,sans-serif;color:#333333;}body{font-weight:normal;}.logo_h__txt,.logo_link{font:normal 50px/50px Open Sans;color:#3498db;}.sf-menu>li>a{font:normal 14px/22px Open Sans;color:#FFFFFF;}.nav.footer-nav a{font:normal 15px/20px Open Sans;color:#515765;}</style>
<!--[if lt IE 8]>
		<div id="ie7-alert" style="width: 100%; text-align:center;">
			<img src="http://tmbhtest.com/images/ie7.jpg" alt="Upgrade IE 7" width="640" height="344" border="0" usemap="#Map" />
			<map name="Map" id="Map"><area shape="rect" coords="496,201,604,329" href="http://www.microsoft.com/windows/internet-explorer/default.aspx" target="_blank" alt="Download Interent Explorer" /><area shape="rect" coords="380,201,488,329" href="http://www.apple.com/safari/download/" target="_blank" alt="Download Apple Safari" /><area shape="rect" coords="268,202,376,330" href="http://www.opera.com/download/" target="_blank" alt="Download Opera" /><area shape="rect" coords="155,202,263,330" href="http://www.mozilla.com/" target="_blank" alt="Download Firefox" /><area shape="rect" coords="35,201,143,329" href="http://www.google.com/chrome" target="_blank" alt="Download Google Chrome" />
			</map>
		</div>
	<![endif]-->

<!--[if gte IE 9]>
<script type="text/javascript">
	jQuery(function(){
		jQuery('.sf-menu').mobileMenu({defaultText: "Nawiguj do..."});
	});
</script>
<!--<![endif]-->

</head>
<body class="home page page-id-203 page-template page-template-page-home page-template-page-home-php">

<div id="motopress-main" class="main-holder">
 
		<header class="motopress-wrapper header"> 
			<div class="container">
				<div class="row">
					<div class="span12" data-motopress-wrapper-file="wrapper/wrapper-header.php" data-motopress-wrapper-type="header" data-motopress-id="561bce2a180a5">
						<div class="extraheader_0">
							<div class="row">
								<div class="span12" data-motopress-type="dynamic-sidebar" data-motopress-sidebar-id="header-sidebar-2">
									<div id="nav_menu-2">
										<div class="menu-extra_header_menu-container">
											<ul id="menu-extra_header_menu" class="menu">
																								<li id="menu-item-1923" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1923"><a href="http://4um.pl/profile/program">Profil</a></li>
												<li id="menu-item-1923" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1923"><a href="http://4um.pl/settings">Ustawienia</a></li>
												<li id="menu-item-1923" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1923"><a href="http://4um.pl/messages">Wiadomości</a></li>
																									<li id="menu-item-1923" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1923"><a href="http://4um.pl/admin">Panel zarządzania</a></li>
																								<li id="menu-item-1923" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1923"><a href="http://4um.pl/action/logout/">Wyloguj</a></li>
																							</ul>
										</div>
									</div> 
								</div>
							</div>	
						</div>
						<div class="extraheader_1">
							<div class="row">
								<div class="span6" >
									<div class="logo pull-left">
										<a href="http://4um.pl" class="logo_h logo_h__img"><img src="http://www.net4um.net/upload/logo%20%281%29.png" alt="4um Engine" title=""></a>
									</div>
								</div>
								<div class="span6 hidden-phone" data-motopress-type="static" data-motopress-static-file="search/">
							 
									<div class="search-form search-form__h hidden-phone clearfix">
										<form id="search-header" class="navbar-form pull-right" method="get" action="search/" accept-charset="utf-8">
											<input type="text" name="s" placeholder="Szukana fraza" class="search-form_it">
											<button type="submit" class="search-form_is">
											<i class="icon-search"></i>
											</button>
										</form>
									</div>
								</div>
							</div>
						</div>
						<div class="menu_holder">
							<div class="row">
								<div class="span12">
									<div class="extra_menu" data-motopress-type="static" data-motopress-static-file="static/static-nav.php">
		 
										<nav class="nav nav__primary clearfix">
											5
										</nav>  
									</div>
								</div>
							</div>
						</div> 
					</div>
				</div>
			</div>
		</header>
		<div class="motopress-wrapper content-holder clearfix" >
			<div class="container">
				<div class="row">
					<div class="span12" data-motopress-wrapper-type="content">
						<div class="row">
							<div class="span12" data-motopress-type="static" data-motopress-static-file="static/static-slider.php">
								<div class="slider_off"> </div>
							</div>
						</div>
						<div class="row">
							<div class="span12" data-motopress-type="loop" data-motopress-loop-file="loop/loop-page.php">
								<div id="post-203" class="post-203 page type-page status-publish hentry">

<?php }
}
