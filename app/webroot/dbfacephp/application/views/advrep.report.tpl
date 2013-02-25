<html><head><meta http-equiv='content-type' content='text/html;charset=UTF-8'/><link href="[{#s_base#}]/dbfacephp/css/style-default.css" rel="stylesheet" type="text/css"><link href="[{#s_base#}]/dbfacephp/css/c/theme.css" rel="stylesheet" type="text/css"><script type="text/javascript" src="[{#s_base#}]/dbfacephp/js/rview.js"></script><script type="text/javascript" src="[{#s_base#}]/dbfacephp/js/prototype.js"></script><script type="text/javascript" src="[{#s_base#}]/dbfacephp/js/jquery.js"></script><script type="text/javascript" src="[{#s_base#}]/dbfacephp/js/Utils.js"></script><script type="text/javascript" src="[{#s_base#}]/dbfacephp/js/swfobject.js"></script><script type="text/javascript" src="[{#s_base#}]/dbfacephp/js/tommick.js"></script><script type="text/javascript">
    $j(document).ready(function() {
      $j.getJSON('[{#dbfacephp_base_url#}]/index.php?c=app&appid=[{$appid}]&showchart=true', function(json) {
        var chart = new FusionCharts("[{#s_base#}]/dbfacephp/img/charts/icharts.swf", "flashobj", "600", "[{if $iframe}]300[{else}]500[{/if}]", "0", "1");
        chart.addVariable('chartclass', json.charttype);
        chart.setDataXML(encodeDataXML(json.dataXML)); 
        chart.render("chartdiv");
      });
    });
  </script></head><body><div id="bodyColumn">
[{if !$iframe}]
[{if $showtoolbar}]
<div id="navcolumn"><a href="[{#dbfacephp_base_url#}]/index.php?c=home&m=dashboard">Dashboard</a> > [{$appname}]<img src='[{#s_base#}]/dbfacephp/img/help.gif' align='absmiddle' onmouseover='javascript:openHelpTip(this, 6, "[{$appid}]");' onmouseout='javascript:closeHelpTip();'/></div><div class="clear" style="margin-bottom:5px;"></div>
[{/if}]
[{/if}]
<div id="chartdiv"></div></div>
[{include file="analytics.tpl"}]
</body></html>