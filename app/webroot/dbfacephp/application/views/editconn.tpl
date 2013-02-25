<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/><link href="[{#s_base#}]/dbfacephp/css/style-default.css" rel="stylesheet" type="text/css"><link href="[{#s_base#}]/dbfacephp/css/jquery.autocomplete.css" rel="stylesheet" type="text/css"><script type="text/javascript" src="[{#s_base#}]/dbfacephp/js/prototype.js"></script><script type="text/javascript" src="[{#s_base#}]/dbfacephp/js/jquery.js"></script><script type="text/javascript" src="[{#s_base#}]/dbfacephp/js/jquery/jquery.autocomplete.js"></script><script type="text/javascript" src="[{#s_base#}]/dbfacephp/js/tommick.js"></script><script type="text/javascript" src="[{#s_base#}]/dbfacephp/js/Utils.js"></script><script type="text/javascript" src="[{#s_base#}]/dbfacephp/js/rview.js"></script><script type="text/javascript">
    function setdbname(a) {
      $('dbname').value=a;
      $j('#dblist').slideUp('fast');
    }
    
    function toggle_dblist() {
      $('cogwheel').show();
      $j.getJSON('[{#dbfacephp_base_url#}]/index.php?c=req&m=getdblist&ret=json&'+$('mainForm').serialize(), function(json) {
        $('cogwheel').hide();
        if (!json.success) {
          $j('#dblist').html("<div id='error'><img src='[{#s_base#}]/dbfacephp/img/common/errorsmall.gif' align='absmiddle'/>&nbsp;"+json.message+"&nbsp;<a style='align:right' href='javascript:;' onclick=\"javascript:$j('#dblist').slideUp('fast')\"><img src='[{#s_base#}]/dbfacephp/img/close24.png' alt='close the message' title='close the message' align='absmiddle'/></a></div>").slideDown('fast');
        } else {
          var dbnames = new Array();
          var dbs=json.dbs;
          var html="<ul style='list-style-type: none;padding:0;margin:0'>";
          for(var i=0; i<dbs.length; i++) {
            dbnames.push(dbs[i].Database);
            html+="<li><input type='radio' name='sel_db' id='sel_db_"+i+"' onclick='setdbname(\""+dbs[i].Database+"\")'/><label for='sel_db_"+i+"'>"+dbs[i].Database+"</label></li>";
          }
          html+="</ul>";
          $j('#dblist').html(html).slideDown('fast');
          $j("#dbname").autocompleteArray(dbnames);
        }
      });
    }
    $j(document).ready(function() {
      $j("#host").autocompleteArray(new Array('localhost', '127.0.0.1', '192.168.0.1'));
      $j("#port").autocompleteArray(new Array('3306'));
      $j("#username").autocompleteArray(new Array('root'));
    });
  </script></head><body><div id="bodyColumn"><div id="navcolumn"><a href="[{#dbfacephp_base_url#}]/index.php?c=home&m=dashboard">[{ci_lang key='strDashboard'}]</a> ><a href="[{#dbfacephp_base_url#}]/index.php?c=conn&m=listconn">[{ci_lang key='strAdministration'}]</a> > Edit connection</div><form action="[{#dbfacephp_base_url#}]/index.php?c=conn" method="post" id='mainForm' name='mainForm'><input type="hidden" name="requestID" value="create"><input type="hidden" name="dbid" value="[{$dbinfo.dbid}]"><div id="error" style="display:none"></div><table border="0" cellpadding="0" cellspacing="0" id="connTable" class="otherDisplay2"><tr><td colspan="2"><b>Please refill the following fields to edit the connection.</b></td></tr><tr><td width="20%" class="bodyTextBold"><label for="alias">Alias:</label></td><td width="70%"><input name="alias" id="alias" type="text" class="config-textfield" value="[{$dbinfo.aliasname}]" size="30"/></td></tr><tr><td width="20%" class="bodyTextBold"><label for="host">Host:</label></td><td width="70%"><input name="host" type="text" class="config-textfield" id="host" value="[{$dbinfo.host}]" size="30"/><br/></td></tr><tr><td width="20%" class="bodyTextBold"><label for="port">Port:</label></td><td width="70%"><input name="port" type="text" class="config-textfield" id="port" value="[{$dbinfo.port}]" size="30"/><br/></td></tr><tr><td width="20%" class="bodyTextBold"><label for="username">Username:</label></td><td width="70%"><input name="username" type="text" class="config-textfield" id="username" value="[{$dbinfo.dbuser}]" size="30"/></td></tr><tr><td width="20%" class="bodyTextBold"><label for="alias">password:</label></td><td width="70%"><input name="password" type="password" class="config-textfield" id="password" size="30" value="[{$dbinfo.dbpassword}]"/></td></tr><tr><td width="20%" class="bodyTextBold"><label for="dbname">Database Name:</label></td><td width="70%"><input name="dbname" type="text" class="config-textfield" id="dbname" value="[{$dbinfo.dbname}]" size="30"/>&nbsp;<a class='subopen' href="javascript:toggle_dblist();">Pick</a><span id="cogwheel" style="display:none"><img src="[{#s_base#}]/dbfacephp/img/cogwheel.gif" align="absmiddle"/></span><br/><span id="dblist" style="display:none"></span></tr><tr><td colspan="2"><hr/></td></tr><tr><td style="text-align:center" colspan="2"><input type="button" onclick="javascript:testconn();" class="input-button" value="Test Connection"/><input type="button" onclick="javascript:editconn();" class="input-button" value="Confirm"/><input type="button" onclick="document.location='[{#dbfacephp_base_url#}]/index.php?c=conn&m=listconn'" class="input-button gray" value="Back"/></td></tr></table></form></div></body></html>