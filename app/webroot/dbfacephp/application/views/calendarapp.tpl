<html><head><link type="text/css" title="blue" media="all" rel="stylesheet" href="[{#s_base#}]/dbfacephp/css/db.css"/><link type="text/css" href="[{#s_base#}]/dbfacephp/css/te.css" rel="stylesheet"/><script type="text/javascript" src="[{#s_base#}]/dbfacephp/js/jquery.js"></script><script type="text/javascript" src="[{#s_base#}]/dbfacephp/js/prototype.js"></script><script type="text/javascript" src="[{#s_base#}]/dbfacephp/js/rview.js"></script><script type="text/javascript" src="[{#s_base#}]/dbfacephp/js/Utils.js"></script><script type="text/javascript" src="[{#s_base#}]/dbfacephp/js/tommick.js"></script><script type="text/javascript">
    var year = '[{$yearnum}]';
    var month = '[{$monthnum}]';
    function calendar_prev() {
      var year1 = parseInt(year);
      var month1 = parseInt(month);
      if (month1 == 1) {
        year1 = year1 - 1;
        month1 = 12;
      } else {
        month1 -= 1;
      }
      document.mainForm.ym.value=year1+"-"+month1;
      document.mainForm.submit();
    }
    function calendar_next() {
      var year1 = parseInt(year);
      var month1 = parseInt(month);  
      if (month1 == 12) {
        year1 = year1+1;
        month1 = 1;
      } else {
        month1 += 1;
      }
      document.mainForm.ym.value=year1+"-"+month1;
      document.mainForm.submit();
    }  
  </script></head><body>
[{if !$iframe}]
<div id="navcolumn" style="margin-left:5px;width:95%"><a href="[{#dbfacephp_base_url#}]/index.php?c=home&m=dashboard">Dashboard</a> > [{$appname}]</div>
[{/if}]
<form name="mainForm" method="post" action="[{#dbfacephp_base_url#}]/index.php?c=app&appid=[{$appid}]"/> [{if $iframe}]<input type="hidden" name='iframe' value="[{$iframe}]"/>[{/if}] <input type="hidden" name="ym" value=""/></form><div style="margin-left:5px;margin-top:5px;width:95%">
[{include file="advrep_calendar.tpl"}]
</div>
[{include file="analytics.tpl"}]
</body></html>