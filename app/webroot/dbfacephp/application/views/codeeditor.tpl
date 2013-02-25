<html><head><link href="[{#s_base#}]/dbfacephp/css/style-default.css" rel="stylesheet" type="text/css"><script type="text/javascript" src="[{#s_base#}]/dbfacephp/js/prototype.js"></script><script src="[{#s_base#}]/dbfacephp/js/tommick.js" language="javascript"></script><script src="[{#s_base#}]/dbfacephp/js/Utils.js" language="javascript"></script><script src="[{#s_base#}]/dbfacephp/js/rview.js" language="javascript"></script><script src="[{#s_base#}]/dbfacephp/js/codepress.js" language="javascript"></script><script type="text/javascript">
  finishedTrigger = init;
  document.observe("dom:loaded", function() {

  });
  function init() {
    codepress.setCode(window.opener.codepress.getCode());
  }
  function copyback() {
    window.opener.codepress.setCode(codepress.getCode());
  }
</script></head><body onunload="javascript:copyback();"><textarea id="sqlContent" class="codepress sql linenumbers-on" style="width:100%;height:100%"></textarea></body></html>