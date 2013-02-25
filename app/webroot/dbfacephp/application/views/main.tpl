<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN" "http://www.w3.org/TR/html4/frameset.dtd"><html><head><title>tmWorks R-View --- take your database to web.</title><meta http-equiv="Pragma" content="no-cache"/><meta http-equiv="Cache-Control" content="no-cache"/><link REL="SHORTCUT ICON" href="[{#s_base#}]/dbfacephp/img/favorite.ico" type="image/x-icon"/><link type="text/css" href="[{#s_base#}]/dbfacephp/css/style-default.css" rel="stylesheet"><script type="text/javascript" src="[{#s_base#}]/dbfacephp/js/jquery.js"></script><script type="text/javascript" src="[{#s_base#}]/dbfacephp/js/tommick.js"></script><script type="text/javascript" src="[{#s_base#}]/dbfacephp/js/global.js"></script><script type="text/javascript" src="[{#s_base#}]/dbfacephp/js/rview.js"></script><script type="text/javascript" src="[{#s_base#}]/dbfacephp/js/Utils.js"></script><script type="text/javascript">
    $(document).ready(function(){
      alert($('#left').clientHeight);
    }); 
  </script></head><body>
[{include file="header.tpl"}]
[{if $dbinfo}]
<div id="contain" style="margin-top:5px"><div id="left" style="width:178px;overflow-y:auto;float:left;overflow-y:scroll;"></div><div id="right"><div>
dsfsafdsafdsa
</div></div></div>
[{else}]
[{include file="createconn.tpl"}]
[{/if}] </body></html>