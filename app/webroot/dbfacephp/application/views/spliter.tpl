<html><script type="text/javascript">
  function collapseMenu() {
    var curCols = top.document.getElementById("mainset").cols;
    if (curCols == "178,5,*") {
      top.document.getElementById("mainset").cols = "0,5,*";
      document.getElementById('arrowImage').src="[{#s_base#}]/dbfacephp/img/bl.gif";
    } else {
      top.document.getElementById("mainset").cols = "178,5,*";
      document.getElementById('arrowImage').src="[{#s_base#}]/dbfacephp/img/al.gif";
    }
  }
</script><body><div><a onclick="javascript:collapseMenu();"><img id="arrowImage" src="[{#s_base#}]/dbfacephp/img/al.gif"></img></a></div></body></html>