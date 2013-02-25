<?php /* Smarty version Smarty-3.1.8, created on 2012-11-15 16:24:05
         compiled from "/home/content/65/8545965/html/projects/app/webroot/dbfacephp/application//views/advrep_tabular.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18780269950a57995803178-69618511%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '89ce7ec52e8c2ec8e397f6a345bef930d3e985c6' => 
    array (
      0 => '/home/content/65/8545965/html/projects/app/webroot/dbfacephp/application//views/advrep_tabular.tpl',
      1 => 1352280010,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18780269950a57995803178-69618511',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'phpload' => 0,
    'update' => 0,
    'appid' => 0,
    'rpf' => 0,
    'tablename' => 0,
    'left_columnname' => 0,
    'right_columnname' => 0,
    'jointype' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50a57995a23e31_26297623',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50a57995a23e31_26297623')) {function content_50a57995a23e31_26297623($_smarty_tpl) {?><?php if (!is_callable('smarty_function_ci_lang')) include '/home/content/65/8545965/html/projects/app/webroot/dbfacephp/application/libraries/Smarty/libs/plugins/function.ci_lang.php';
?><html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/> <?php if ($_smarty_tpl->tpl_vars['phpload']->value){?> <link type="text/css" href="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/css/load.php?load=db.css,te.css,c/thickbox.css,rview-common.css" rel="stylesheet"/><script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/js/load.php?load=jquery.js,prototype.js,rview.js,thickbox.js,Utils.js,tommick.js,swfobject.js"></script> <?php }else{ ?> <link type="text/css" media="all" rel="stylesheet" href="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/css/db.css"/><link type="text/css" href="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/css/te.css" rel="stylesheet"/><link type="text/css" href="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/css/c/thickbox.css" rel="stylesheet"/><link type="text/css" href="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/css/rview-common.css" rel="stylesheet"/><script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/js/jquery.js"></script><script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/js/prototype.js"></script><script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/js/rview.js"></script><script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/js/thickbox.js"></script><script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/js/Utils.js"></script><script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/js/tommick.js"></script><script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/js/swfobject.js"></script> <?php }?> <script type="text/javascript">
    var ptEle = null;
    function set_pickdt_url(ele) {
      ptEle = ele;
      var je =$j(ele);
      var columnname=je.parent().find("select")[0].value;
      je.attr('href', ROOT_URL+'?c=req&m=columndata&columnname='+columnname+'&width=350&height=300');
    }
    
    function datalist_choose(ele) {
      if (ptEle != null) {
        var returnData= new Array();
        $j('table.searchResults').find("input:checked").each(function(i) {
          returnData.push(this.value);
        });
        var datalist = returnData.join(",");
        $j(ptEle).parent().find("input")[0].value=datalist;
        var opEle=$j(ptEle).parent().find("select")[1];
        if (opEle.value=='ignore') {
          if (returnData.length == 1) {
            opEle.value="=";
          } else if (returnData.length > 1) {
            opEle.value="in";
          }
        }
      }
      tb_remove();
    }
    function calendar_prev() {
      var year = parseInt($('calendar_year').value);
      var month = parseInt($('calendar_month').value);
      if (month == 1) {
        year = year - 1;
        month = 12;
      } else {
        month -= 1;
      }
      $('calendar_year').value=year;
      $('calendar_month').value=month;
      analyticsCalendar();
    }
    function calendar_next() {
      var year = parseInt($('calendar_year').value);
      var month = parseInt($('calendar_month').value);  
      if (month == 12) {
        year = year+1;
        month = 1;
      } else {
        month += 1;
      }
      $('calendar_year').value=year;
      $('calendar_month').value=month;
      analyticsCalendar();    
    }
    function switchView(ele) {
      if (ele.id == 'ZDBSummarySelEl') {
        $j('#summaryViewFields').show();
        $j('#filterFields').hide();
        $j('#ZDBSummarySelEl').attr('class', 'graphSelSummaryView');
        $j('#ZDBFilterSelEl').attr('class', 'filterDesel');
      } else {
        $j('#summaryViewFields').hide();
        $j('#filterFields').show();
        $j('#ZDBSummarySelEl').attr('class', 'graphDeselSummaryView');
        $j('#ZDBFilterSelEl').attr('class', 'filterSel');      
      }
    }
    function checkPanelNDrop(ele) {
      if (ele.className == 'ZDBDNDFieldUncheck') {
        ele.className = 'ZDBDNDFieldChecked';
      } else {
        ele.className = 'ZDBDNDFieldUncheck';
      }
    }
    function removeDragFieldEl(ele, evt) {
      var pe = getParentWithAttr(ele, 'dragfield');
      $j(pe).remove();
    }
    function createDropEle(ele, dropTarget, fun) {
      var defaultfun = dropTarget.attr('defaultfun');
      if (fun) {
        defaultfun = fun;
      }
      var tpl = new Template($('template_dropview').innerHTML);
      var show = {displayname: ele.getAttribute('displayname'), columnname: ele.getAttribute('columnname'), fx: defaultfun, columntype: ele.getAttribute('columntype')};
      return jQuery(tpl.evaluate(show));
    }
    
    function showMenu(ele, evt) {
      var curpos = getElementPos(ele);
      var funEle = getParentWithAttr(ele, 'funlist');
      var columnEle = getParentWithAttr(ele, 'columntype');
      if (funEle) {
        var funlist = getA(funEle, 'funlist');
        
        if (funlist.length > 0) {
          $j('.funcMenuInnerBox').find("tr").hide();
          var columntype = getA(columnEle, 'columntype');
          var funs = funlist.split(",");
          if (columntype == 102 && funlist.indexOf('datefun') >= 0) {
            $j('.funcMenuInnerBox').find("tr.r_date").show();
          } else {
            for(var i=0; i < funs.length; i++) {
              $j('#menuitem_'+funs[i]).show();
            }
          }
          $j(".funcMenuItemSel").attr('class', 'funcMenuItem');
          var cur=$j(ele).html();
          $j(".funcMenuItem").each(function(i){
            if ($j(this).attr('funname') == cur) {
              $j(this).attr("class", "funcMenuItemSel");
            }
          });
        }
        initMenuEvent();
      }
   
      var leftX = curpos.x;
      var topY = curpos.y+ele.offsetHeight+2;
      $j('#funcMenuBox').css('left', leftX+"px");
      $j('#funcMenuBox').css('top', topY+"px");
      
      $j('#funcMenuBox').toggle();
      $j('#funcMenuBox')[0].trigger = ele;
    }
    
    function analyticsReport() {
      var rpf = $('rpf').value;
      if (rpf == 'tabular') {
        return analyticsTabular();
      } else if (rpf == 'summary') {
        return analyticsSummary();
      } else if (rpf == 'pivot') {
        return analyticsPivot();
      } else if (rpf == 'chart') {
        return analyticsChart();
      } else if (rpf =='calendar') {
        return analyticsCalendar();
      }
    }
   
    function doSaveReport() {
      var rpf = $('rpf').value;
      if (rpf == 'tabular') {
        return saveTabular();
      } else if (rpf == 'summary') {
        return saveSummary();
      } else if (rpf == 'pivot') {
        return analyticsPivot(true);
      } else if (rpf == 'chart') {
        return analyticsChart(true);
      } else if (rpf =='calendar') {
        return analyticsCalendar(true);
      }
    }
    var reppropdivHTML="";
    function saveReport() {
      if (reppropdivHTML=="") {
        reppropdivHTML=$('reppropdiv').innerHTML;
        $j('#reppropdiv').remove();
      }
      showDialog(reppropdivHTML, "position=absolute, left=150, top=80, closeButton=no, modal=yes",null);
    }
    
    function analyticsPivot(saveit) {
      var container_column_fields = $j('#container_column_fields');
      var container_row_fields = $j('#container_row_fields');
      var container_data_fields = $j('#container_pivotdata_fields');
      
      var column_field_eles = container_column_fields.children("div").not(".droptip");
      var column_field_fun_eles = container_column_fields.find("td.dragElOperation");
      
      var row_field_eles = container_row_fields.children("div").not(".droptip");
      var row_field_fun_eles = container_row_fields.find("td.dragElOperation");
      
      var data_field_eles = container_data_fields.children("div").not(".droptip");
      var data_field_fun_eles = container_data_fields.find("td.dragElOperation");
      
      //if (column_field_eles.length == 0 && row_field_eles.length == 0) {
        // TODO reset
      //  return;
      //}
      $j('#loading').css('left', findPosX($('ZDBAnalysisRefresh'))).css('top', findPosY($('ZDBAnalysisRefresh'))).show();
      var columns = new Array(column_field_eles.length);
      column_field_eles.each(function(i) {
        columns[i] = "column[]="+getA(this, 'columnname');
      });
      var columnfuns = new Array(column_field_fun_eles.length);
      column_field_fun_eles.each(function(i) {
        columnfuns[i] = "columnfun[]="+$j(this).html();
      });
      var rows = new Array(row_field_eles.length);
      row_field_eles.each(function(i) {
        rows[i] = "row[]="+getA(this, 'columnname');
      }); 
      var rowfuns = new Array(row_field_fun_eles.length);
      row_field_fun_eles.each(function(i) {
        rowfuns[i] = "rowfun[]="+$j(this).html();
      });      
      var datas = new Array(data_field_eles.length);
      data_field_eles.each(function(i) {
        datas[i] = "data[]="+getA(this, 'columnname');
      });       
      var datafuns = new Array(data_field_fun_eles.length);
      data_field_fun_eles.each(function(i) {
        datafuns[i] = "datafun[]="+$j(this).html();
      });
      var params = $('mainForm').serialize();
      params += "&"+columns.join("&");
      params += "&"+columnfuns.join("&");
      params += "&"+rows.join("&");
      params += "&"+rowfuns.join("&");
      params += "&"+datas.join("&");
      params += "&"+datafuns.join("&");
      params += analyticsFilterQuery();
      if (saveit) {
        params += "&actiontag=save";
        params += "&"+analyticsAppInfo();
        <?php if ($_smarty_tpl->tpl_vars['update']->value){?>
        params += "&update=1&appid="+$('appid').value;
        <?php }?>        
      }      
      
      $('mainForm').request({ 
        method: 'post',
        parameters: params,
        onComplete: function(transport) {
          if (saveit) {
            if (transport.responseText == 1) {
              alert("The matrix report saved!");
              refreshmenu();
            } else {
              alert("Sorry, unexpected exception occurses, the report can not be saved!");
            }
            $('loading').hide();
          } else {        
            $('ZDBChartPlaceHolder').update(transport.responseText);
            $('loading').hide();
          }
        }
      });
    }
    
    function analyticsCalendar(saveit) {
      var container_basedfield = $j('#container_basedfield');
      var container_displayedfield = $j('#container_displayedfield');

      var basedfield_eles = container_basedfield.children("div").not(".droptip");
      var basedfield_fun_eles = container_basedfield.find("td.dragElOperation");
      var displayedfield_eles = container_displayedfield.children("div").not(".droptip");
      var displayedfield_fun_eles = container_displayedfield.find("td.dragElOperation");
      
      if (basedfield_eles.length == 0 && displayedfield_eles.length == 0) {
        alert("You need drop a column as based field and displayed field(s)!");
        return;
      }
      $j('#loading').css('left', findPosX($('ZDBAnalysisRefresh'))).css('top', findPosY($('ZDBAnalysisRefresh'))).show();
      var basedfield="";
      var basedfieldfun="";
      var displayfields = new Array(displayedfield_eles.length);
      var displayfieldfuns = new Array(displayedfield_fun_eles.length);
      if (basedfield_eles.length > 0 && basedfield_fun_eles.length > 0) {
        basedfield = "basedfield="+jQuery(basedfield_eles[0]).attr('columnname');
        basedfieldfun = "basedfieldfun="+jQuery(basedfield_fun_eles[0]).html();
      }
      if (displayedfield_eles.length > 0 && displayedfield_fun_eles.length > 0) {
        displayedfield_eles.each(function(i){
          displayfields[i] = "displayfields[]="+getA(this, 'columnname');
        });
        
        displayedfield_fun_eles.each(function(i){
          displayfieldfuns[i] = "displayfieldfuns[]="+$j(this).html();
        });
      }  
      var year=$('calendar_year').value;
      var month=$('calendar_month').value;
      
      var params = $('mainForm').serialize();
      if (basedfield!="") params += "&"+basedfield;
      if (basedfieldfun!="") params += "&"+basedfieldfun;   
      if (displayfields.length > 0) params += "&"+displayfields.join("&");
      if (displayfieldfuns.length > 0) params += "&"+displayfieldfuns.join("&");
      if (year && month) params += "&initmonth="+year+"-"+month;
      
      params += analyticsFilterQuery();
      if (saveit) {
        params += "&actiontag=save";
        params += "&"+analyticsAppInfo();
        <?php if ($_smarty_tpl->tpl_vars['update']->value){?>
        params += "&update=1&appid="+$('appid').value;
        <?php }?>
      }
      
      $('mainForm').request({ 
        method: 'post',
        parameters: params,
        onComplete: function(transport) {
          if (saveit) {
            if (transport.responseText == 1) {
              alert("The calendar report saved!");
              refreshmenu();
            } else {
              alert("Sorry, unexpected exception occurses, the report can not be saved!");
            }
            $('loading').hide();
          } else {
            $('ZDBChartPlaceHolder').update(transport.responseText);
            $('loading').hide();
          }
        }
      });
    }
    
    function analyticsChart(saveit) {
      var container_xaxis = $j('#container_xaxis');
      var container_yaxis = $j('#container_yaxis');
      var charttype;
      $j('#graphToolBar').find("td").each(function(i) {
          $j(this).attr("class", getA(this, 'baseclass'));
          if (getA(this, 'advselect') == 'true') {
            charttype = getA(this, 'ct');
          }
       });
       if (!charttype) {
         alert("please choose a chart type!");
         return;
       }
      var xaxis_eles = container_xaxis.children("div").not(".droptip");
      var xaxis_fun_eles = container_xaxis.find("td.dragElOperation");
      var yaxis_eles = container_yaxis.children("div").not(".droptip");
      var yaxis_fun_eles = container_yaxis.find("td.dragElOperation");
      
      if (xaxis_eles.length == 0 && yaxis_eles.length == 0) {
        alert("You need drop a column as xaxis o yaxis!");
        return;
      }
      $j('#loading').css('left', findPosX($('ZDBAnalysisRefresh'))).css('top', findPosY($('ZDBAnalysisRefresh'))).show();
      var xaxis="";
      var xaxisfun="";
      var yaxiss = new Array(yaxis_eles.length);
      var yaxisfuns = new Array(yaxis_fun_eles.length);
      if (xaxis_eles.length > 0 && xaxis_fun_eles.length > 0) {
        xaxis = "xaxis="+jQuery(xaxis_eles[0]).attr('columnname');
        xaxisfun = "xaxisfun="+jQuery(xaxis_fun_eles[0]).html();
      }

      if (yaxis_eles.length > 0 && yaxis_fun_eles.length > 0) {
        yaxis_eles.each(function(i){
          yaxiss[i] = "yaxis[]="+getA(this, 'columnname');
        });
        
        yaxis_fun_eles.each(function(i){
          yaxisfuns[i] = "yaxisfun[]="+$j(this).html();
        });
      }  
      var params = $('mainForm').serialize();
      if (xaxis!="") params += "&"+xaxis;
      if (xaxisfun!="") params += "&"+xaxisfun;   
      if (yaxiss.length > 0) params += "&"+yaxiss.join("&");
      if (yaxisfuns.length > 0) params += "&"+yaxisfuns.join("&");
      params += "&ct="+charttype;
      params += "&xaxislabel="+$('xaxislabel').value;
      params += "&yaxislabel="+$('yaxislabel').value;
      params += analyticsFilterQuery();
      if (saveit) {
        params += "&actiontag=save";
        params += "&"+analyticsAppInfo();
        <?php if ($_smarty_tpl->tpl_vars['update']->value){?>
        params += "&update=1&appid="+$('appid').value;
        <?php }?>
      }
      
      $('mainForm').request({ 
        method: 'post',
        parameters: params,
        onComplete: function(transport) {
          if (saveit) {
            if (transport.responseText == 1) {
              alert("The chart report saved!");
              refreshmenu();
            } else {
              alert("Sorry, unexpected exception occurses, the report can not be saved!");
            }
            $('loading').hide();
          } else {
            var json = transport.responseText.evalJSON(true);
            $('defaultSummaryView').hide();
            $('chartprevdiv').show();
            var chart = new FusionCharts("<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/img/charts/icharts.swf", "flashobj", "600", "300", "0", "1");
            chart.addVariable('chartclass', json.charttype);
  		      chart.setDataXML(encodeDataXML(json.dataXML)); 
            chart.render("chartdiv");
            $('loading').hide();
          }
        }
      });           
    }
    
    function analyticsSummary() {
      var container_groupby_fields = $j('#container_groupby_fields');
      var container_summary_fields = $j('#container_summary_fields');
      
      var groupby_field_eles = container_groupby_fields.children("div").not(".droptip");
      var groupby_field_fun_eles = container_groupby_fields.find("td.dragElOperation");
      if (groupby_field_eles.length == 0) {
        alert("You must select one grouping by column at least!");
        return;
      }
      $j('#loading').css('left', findPosX($('ZDBAnalysisRefresh'))).css('top', findPosY($('ZDBAnalysisRefresh'))).show();
      var groupbys = new Array(groupby_field_eles.length);
      var groupbyfuns = new Array(groupby_field_fun_eles.length);
      groupby_field_eles.each(function(i) {
        groupbys[i] = "groupby[]="+getA(this, 'columnname');
      });
      groupby_field_fun_eles.each(function(i) {
        groupbyfuns[i] = "groupbyfun[]="+$j(this).html();
      });
      var summary_fields_eles = container_summary_fields.children("div").not(".droptip");
      var summaryfun_fields_eles = container_summary_fields.find("td.dragElOperation");
      var summaries = new Array(summary_fields_eles.length);
      var summaryfuns = new Array(summaryfun_fields_eles.length);
      summary_fields_eles.each(function(i){
        summaries[i] = "summary[]="+getA(this, 'columnname');
      });
      summaryfun_fields_eles.each(function(i){
        summaryfuns[i] = "summaryfun[]="+$j(this).html();
      });
      var params = $('mainForm').serialize();
      params += "&"+groupbys.join("&");
      params += "&"+groupbyfuns.join("&");
      params += "&"+summaries.join("&");
      params += "&"+summaryfuns.join("&");
      params += analyticsFilterQuery();
      $('mainForm').request({ 
        method: 'post',
        parameters: params,
        onComplete: function(transport) {
          $('ZDBChartPlaceHolder').update(transport.responseText);
          $('loading').hide();
        }
      });      
    }
    
    function saveTabular() {
      var container_select_fields = $j('#container_select_fields');
      var container_footer_fields = $j('#container_footer_fields');
      
      var select_field_eles = container_select_fields.children("div").not(".droptip");
      var select_field_fun_eles = container_select_fields.find("td.dragElOperation");
      if (select_field_eles.length == 0) {
        alert("You must select one column at least!");
        return;
      }
      var selects = new Array(select_field_eles.length);
      var select_funs = new Array(select_field_fun_eles.length);
      select_field_eles.each(function(i){
        selects[i] = "select[]="+getA(this, 'columnname');
      });
      select_field_fun_eles.each(function(i){
        select_funs[i] = "selectfun[]="+$j(this).html();
      });
      var order_fields_eles = container_footer_fields.children("div").not(".droptip");
      var order_types_eles = container_footer_fields.find("td.dragElOperation");

      var orders = new Array(order_fields_eles.length);
      var ordertypes = new Array(order_types_eles.length);
      order_fields_eles.each(function(i){
        orders[i] = "order[]="+getA(this, 'columnname');
      });
      order_types_eles.each(function(i){
        ordertypes[i] = "ordertype[]="+$j(this).html();
      });
            
      var params = $('mainForm').serialize();
      params += "&"+selects.join("&");
      params += "&"+select_funs.join("&");
      params += "&"+orders.join("&");
      params += "&"+ordertypes.join("&");
      params += "&rowlimit="+$('rowlimit').value;
      params += analyticsFilterQuery();
      params += "&actiontag=save";
      params += "&"+analyticsAppInfo();
      <?php if ($_smarty_tpl->tpl_vars['update']->value){?>
      params += "&update=1&appid="+$('appid').value;
      <?php }?>
      $('mainForm').request({ 
        method: 'post',
        parameters: params,
        onComplete: function(transport) {
          if (transport.responseText == 1) {
            alert("The tabular report saved");
            refreshmenu();
          } else {
            alert("Sorry, unexpected exception occurses, the report can not be saved!");
          }
        }
      });
    }
    
    function saveSummary() {
      var container_groupby_fields = $j('#container_groupby_fields');
      var container_summary_fields = $j('#container_summary_fields');
      
      var groupby_field_eles = container_groupby_fields.children("div").not(".droptip");
      var groupby_field_fun_eles = container_groupby_fields.find("td.dragElOperation");
      if (groupby_field_eles.length == 0) {
        alert("You must select one grouping by column at least!");
        return;
      }

      var groupbys = new Array(groupby_field_eles.length);
      var groupbyfuns = new Array(groupby_field_fun_eles.length);
      groupby_field_eles.each(function(i) {
        groupbys[i] = "groupby[]="+getA(this, 'columnname');
      });
      groupby_field_fun_eles.each(function(i) {
        groupbyfuns[i] = "groupbyfun[]="+$j(this).html();
      });
      var summary_fields_eles = container_summary_fields.children("div").not(".droptip");
      var summaryfun_fields_eles = container_summary_fields.find("td.dragElOperation");
      var summaries = new Array(summary_fields_eles.length);
      var summaryfuns = new Array(summaryfun_fields_eles.length);
      summary_fields_eles.each(function(i){
        summaries[i] = "summary[]="+getA(this, 'columnname');
      });
      summaryfun_fields_eles.each(function(i){
        summaryfuns[i] = "summaryfun[]="+$j(this).html();
      });
      var params = $('mainForm').serialize();
      params += "&"+groupbys.join("&");
      params += "&"+groupbyfuns.join("&");
      params += "&"+summaries.join("&");
      params += "&"+summaryfuns.join("&");
      params += analyticsFilterQuery();
      params += "&actiontag=save";
      params += "&"+analyticsAppInfo();
      <?php if ($_smarty_tpl->tpl_vars['update']->value){?>
      params += "&update=1&appid="+$('appid').value;
      <?php }?>      
      $('mainForm').request({ 
        method: 'post',
        parameters: params,
        onComplete: function(transport) {
          if (transport.responseText == 1) {
            alert("The summary report saved");
            refreshmenu();
          } else {
            alert("Sorry, unexpected exception occurses, the report can not be saved!");
          }
        }
      });      
    }    
    
    function analyticsTabular() {
      var container_select_fields = $j('#container_select_fields');
      var container_footer_fields = $j('#container_footer_fields');
      
      var select_field_eles = container_select_fields.children("div").not(".droptip");
      var select_field_fun_eles = container_select_fields.find("td.dragElOperation");
      if (select_field_eles.length == 0) {
        alert("You must select one column at least!");
        return;
      }
      $j('#loading').css('left', findPosX($('ZDBAnalysisRefresh'))).css('top', findPosY($('ZDBAnalysisRefresh'))).show();
      var selects = new Array(select_field_eles.length);
      var select_funs = new Array(select_field_fun_eles.length);
      select_field_eles.each(function(i){
        selects[i] = "select[]="+getA(this, 'columnname');
      });
      select_field_fun_eles.each(function(i){
        select_funs[i] = "selectfun[]="+$j(this).html();
      });
      var order_fields_eles = container_footer_fields.children("div").not(".droptip");
      var order_types_eles = container_footer_fields.find("td.dragElOperation");

      var orders = new Array(order_fields_eles.length);
      var ordertypes = new Array(order_types_eles.length);
      order_fields_eles.each(function(i){
        orders[i] = "order[]="+getA(this, 'columnname');
      });
      order_types_eles.each(function(i){
        ordertypes[i] = "ordertype[]="+$j(this).html();
      });
            
      var params = $('mainForm').serialize();
      params += "&"+selects.join("&");
      params += "&"+select_funs.join("&");
      params += "&"+orders.join("&");
      params += "&"+ordertypes.join("&");
      params += "&rowlimit="+$('rowlimit').value;
      params += analyticsFilterQuery();
      
      $('mainForm').request({ 
        method: 'post',
        parameters: params,
        onComplete: function(transport) {
          $('ZDBChartPlaceHolder').update(transport.responseText);
          $('loading').hide();
        }
      });
    }
    
    function adv_newfilter(ele) {
      var trEle = $j(getParentWithAttr(ele,"filterrow"));
      trEle.clone().insertAfter(trEle);
    }
    
    function adv_delfilter(ele) {
      var tblBody = document.getElementById("filterFields_tbl");
      if (tblBody.rows.length <= 1) {
        return;
      }
      $j(getParentWithAttr(ele,"filterrow")).remove();
    }
    function analyticsAppInfo() {
      return "appname="+$('appname').value+"&apptitle="+$('apptitle').value+"&appdesc="+$('appdesc').value;
    }
    function analyticsFilterQuery() {
      var sqlconditions = $j('.sqlcondition');
      var sqlops = $j('.sqlop');
      var sqlvalues = $j('.sqlvalue');
      var sqljoins = $j('.sqljoin');
      var qs = "";
      for(var i=0; i<sqlconditions.length; i++) {
        var c = sqlconditions[i].value;
        var o = sqlops[i].value;
        var v = sqlvalues[i].value;
        var j = sqljoins[i].value;
        if (c != "") {
          qs += "&sqlcondition[]="+c+"&sqlop[]="+o+"&sqlvalue[]="+v+"&sqljoin[]="+j;
        }
      }
      return qs;
    }
    
    function initMenuEvent() {
      $j('.funcMenuItem').mouseover(function(){
        $j(this).attr("class", "funcMenuItemHover"); 
      }).mouseout(function(){
        $j(this).attr("class", "funcMenuItem"); 
      }).click(function(){
        var funname = getA(this, 'funname');
        $j('#funcMenuBox')[0].trigger.innerHTML = funname;
        $j('#funcMenuBox').hide();
      }); 
      $j('.funcMenuItemSel').mouseover(function(){
        $j(this).attr("class", "funcMenuItemSelHover"); 
      }).mouseout(function(){
        $j(this).attr("class", "funcMenuItemSel"); 
      }).click(function(){
        var funname = getA(this, 'funname');
        $j('#funcMenuBox')[0].trigger.innerHTML = funname;
        $j('#funcMenuBox').hide();
      });       
    }
    
    function setChartClass(chartclass) {
       analyticsChart();
    }
    <?php if ($_smarty_tpl->tpl_vars['update']->value){?>
    $j(document).ready(function() {
      // load the application info
      $j.getJSON('<?php echo $_smarty_tpl->getConfigVariable('dbfacephp_base_url');?>
/index.php?c=app&m=load_advrep', {appid: '<?php echo $_smarty_tpl->tpl_vars['appid']->value;?>
'}, function(json) {
        // reset the filter data
        var sqlconditions = json.sqlconditions;
        var sqlops = json.sqlops;
        var sqlvalues = json.sqlvalues;
        var sqljoins = json.sqljoins;
        for(var i=0; i<sqlconditions.length-1; i++) {
          $j($j('#filterFields_tbl').find('a')[1]).trigger('click');
        }
        var ele_sqlconditions = $j('#filterFields_tbl').find(".sqlcondition");
        var ele_sqlops = $j('#filterFields_tbl').find(".sqlop");
        var ele_sqlvalues = $j('#filterFields_tbl').find(".sqlvalue");
        var ele_sqljoins = $j('#filterFields_tbl').find(".sqljoin");
        for(var i=0; i<ele_sqlconditions.length; i++) {
          ele_sqlconditions.val(sqlconditions[i]);
          ele_sqlops.val(sqlops[i]);
          ele_sqlvalues.val(sqlvalues[i]);
          ele_sqljoins.val(sqljoins[i]);
        }
        if (json.rpf=='tabular') {
           var selects = json.selects;
           var selectfuns = json.selectfuns;
           if (selects && selects.length > 0) {
             var tmpEle = jQuery('#container_select_fields').find('div.droptip');
             var selFields = jQuery('#container_select_fields');
             
             for(var i=0; i<selects.length; i++) {
               if (tmpEle) {
                 createDropEle($('drag_'+selects[i]), selFields, selectfuns[i]).insertBefore(tmpEle);
               } else {
                 createDropEle($('drag_'+selects[i]), selFields, selectfuns[i]).appendTo(selFields);
               }
             }
           }
           var orders = json.orders;
           var ordertypes = json.ordertypes;
           if (orders && orders.length > 0) {
             var tmpEle = jQuery('#container_footer_fields').find('div.droptip');
             var selFields = jQuery('#container_footer_fields');
             for(var i=0; i<orders.length; i++) {
               if (tmpEle) {
                 createDropEle($('drag_'+orders[i]), selFields, ordertypes[i]).insertBefore(tmpEle);
               } else {
                 createDropEle($('drag_'+orders[i]), selFields, ordertypes[i]).appendTo(selFields);
               }
             }           
           }
           var rowlimit = json.rowlimit;
           if (!isNaN(parseInt(rowlimit))) {
             $('rowlimit_select').value='custom';
             $('rowlimit').show().value=rowlimit;
           }
        } else if (json.rpf=='summary') {
           var groupbys = json.groupbys;
           var groupbyfuns = json.groupbyfuns;
           if (groupbys && groupbys.length > 0) {
             var tmpEle = jQuery('#container_groupby_fields').find('div.droptip');
             var selFields = jQuery('#container_groupby_fields');
             
             for(var i=0; i<groupbys.length; i++) {
               if (tmpEle) {
                 createDropEle($('drag_'+groupbys[i]), selFields, groupbyfuns[i]).insertBefore(tmpEle);
               } else {
                 createDropEle($('drag_'+groupbys[i]), selFields, groupbyfuns[i]).appendTo(selFields);
               }
             }
           }
           var summarys = json.summarys;
           var summaryfuns = json.summaryfuns;
           if (summarys && summarys.length > 0) {
             var tmpEle = jQuery('#container_summary_fields').find('div.droptip');
             var selFields = jQuery('#container_summary_fields');
             for(var i=0; i<summarys.length; i++) {
               if (tmpEle) {
                 createDropEle($('drag_'+summarys[i]), selFields, summaryfuns[i]).insertBefore(tmpEle);
               } else {
                 createDropEle($('drag_'+summarys[i]), selFields, summaryfuns[i]).appendTo(selFields);
               }
             }
           }
        } else if (json.rpf=='chart') {
           var xaxiss = json.xaxiss;
           var xaxisfuns = json.xaxisfuns;
           if (xaxiss) {
             var tmpEle = jQuery('#container_xaxis').find('div.droptip');
             var selFields = jQuery('#container_xaxis');
             if (tmpEle) {
               createDropEle($('drag_'+xaxiss), selFields, xaxisfuns).insertBefore(tmpEle);
             } else {
               createDropEle($('drag_'+xaxiss), selFields, xaxisfuns).appendTo(selFields);
             }
           }
           var yaxiss = json.yaxiss;
           var yaxisfuns = json.yaxisfuns;
           if (yaxiss && yaxiss.length > 0) {
             var tmpEle = jQuery('#container_yaxis').find('div.droptip');
             var selFields = jQuery('#container_yaxis');
             for(var i=0; i<yaxiss.length; i++) {
               if (tmpEle) {
                 createDropEle($('drag_'+yaxiss[i]), selFields, yaxisfuns[i]).insertBefore(tmpEle);
               } else {
                 createDropEle($('drag_'+yaxiss[i]), selFields, yaxisfuns[i]).appendTo(selFields);
               }
             }
           }
           $('xaxislabel').value=json.xaxislabel;
           $('yaxislabel').value=json.yaxislabel;
        } else if (json.rpf=='pivot') {
           var columns = json.columns;
           var columnfuns = json.columnfuns;
           if (columns && columns.length > 0) {
             var tmpEle = jQuery('#container_column_fields').find('div.droptip');
             var selFields = jQuery('#container_column_fields');
             for(var i=0; i<columns.length; i++) {
               if (tmpEle) {
                 createDropEle($('drag_'+columns[i]), selFields, columnfuns[i]).insertBefore(tmpEle);
               } else {
                 createDropEle($('drag_'+columns[i]), selFields, columnfuns[i]).appendTo(selFields);
               }
             }
           }
           var rows = json.rows;
           var rowfuns = json.rowfuns;
           if (rows && rows.length > 0) {
             var tmpEle = jQuery('#container_row_fields').find('div.droptip');
             var selFields = jQuery('#container_row_fields');
             for(var i=0; i<rows.length; i++) {
               if (tmpEle) {
                 createDropEle($('drag_'+rows[i]), selFields, rowfuns[i]).insertBefore(tmpEle);
               } else {
                 createDropEle($('drag_'+rows[i]), selFields, rowfuns[i]).appendTo(selFields);
               }
             }
           } 
           var datas = json.datas;
           var datafuns = json.datafuns;
           if (datas && datas.length > 0) {
             var tmpEle = jQuery('#container_pivotdata_fields').find('div.droptip');
             var selFields = jQuery('#container_pivotdata_fields');
             for(var i=0; i<datas.length; i++) {
               if (tmpEle) {
                 createDropEle($('drag_'+datas[i]), selFields, datafuns[i]).insertBefore(tmpEle);
               } else {
                 createDropEle($('drag_'+datas[i]), selFields, datafuns[i]).appendTo(selFields);
               }
             }
           }            
        } else if (json.rpf=='calendar') {
           var basedfield = json.basedfield;
           var basedfieldfun = json.basedfieldfun;
           if (basedfield) {
             var tmpEle = jQuery('#container_basedfield').find('div.droptip');
             var selFields = jQuery('#container_basedfield');
             if (tmpEle) {
               createDropEle($('drag_'+basedfield), selFields, basedfield).insertBefore(tmpEle);
             } else {
               createDropEle($('drag_'+basedfield), selFields, basedfieldfun).appendTo(selFields);
             }
           }
           var displayfields = json.displayfields;
           var displayfieldfuns = json.displayfieldfuns;
           if (displayfields && displayfields.length > 0) {
             var tmpEle = jQuery('#container_displayedfield').find('div.droptip');
             var selFields = jQuery('#container_displayedfield');
             for(var i=0; i<displayfields.length; i++) {
               if (tmpEle) {
                 createDropEle($('drag_'+displayfields[i]), selFields, displayfieldfuns[i]).insertBefore(tmpEle);
               } else {
                 createDropEle($('drag_'+displayfields[i]), selFields, displayfieldfuns[i]).appendTo(selFields);
               }
             }
           }
           var initmonth=json.initmonth;
           var tmpdatas = initmonth.split("-");
           if (tmpdatas && tmpdatas.length == 2) {
             $('calendar_year').value=tmpdatas[0];
             $('calendar_month').value=tmpdatas[1];
           }
        
        
        }
      });  
    });
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['rpf']->value=='chart'){?>
    $j(document).ready(function(){
      $j('#graphToolBar').find("td").mouseover(function(){
        if (getA(this, 'advselect') != "true") {
          $j(this).attr("class", getA(this, 'baseclass')+" hover"); 
        }
      }).mouseout(function(){
        if (getA(this, 'advselect') != "true") {
          $j(this).attr("class", getA(this, 'baseclass')); 
        }
      }).mousedown(function(){
        if (getA(this, 'advselect') != "true") {
          $j('#graphToolBar').find("td").each(function(i) {
            $j(this).attr("class", getA(this, 'baseclass'));
            $j(this).attr("advselect", "false");
          });         
          $j(this).attr("class", getA(this, 'baseclass')+" pressed"); 
          $j(this).attr("advselect", "true");
          setChartClass();
        }
      }).mouseup(function() {
        if (getA(this, 'toggle') == "true") {
          $j(this).attr("class", getA(this, 'baseclass')+" pressed"); 
        } else {
          $j(this).attr("class", getA(this, 'baseclass')); 
        }
      });
    });
    <?php }?>
  </script></head><body><div id="navcolumn" style="margin-left:5px;width:95%"><a href="<?php echo $_smarty_tpl->getConfigVariable('dbfacephp_base_url');?>
/index.php?c=home&m=dashboard"><?php echo smarty_function_ci_lang(array('key'=>'strDashboard'),$_smarty_tpl);?>
</a> ><a href="<?php echo $_smarty_tpl->getConfigVariable('dbfacephp_base_url');?>
/index.php?c=app&m=create_step1">Application</a> > <?php if ($_smarty_tpl->tpl_vars['rpf']->value=='tabular'){?>Tabular Report<?php }elseif($_smarty_tpl->tpl_vars['rpf']->value=='chart'){?>Chart Report<?php }elseif($_smarty_tpl->tpl_vars['rpf']->value=='summary'){?>Summary Report<?php }elseif($_smarty_tpl->tpl_vars['rpf']->value=='pivot'){?>Matrix Report<?php }elseif($_smarty_tpl->tpl_vars['rpf']->value=='calendar'){?>Calendar Report<?php }?></div><form name="mainForm" id="mainForm" method="POST" action="<?php echo $_smarty_tpl->getConfigVariable('dbfacephp_base_url');?>
/index.php?c=app&m=advrep_preview"><input type="hidden" id="appid" name="appid" value="<?php echo $_smarty_tpl->tpl_vars['appid']->value;?>
"/><input type="hidden" id="rpf" name="rpf" value="<?php echo $_smarty_tpl->tpl_vars['rpf']->value;?>
"/> <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['tablename']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?> <input type="hidden" name="tablename[]" value="<?php echo $_smarty_tpl->tpl_vars['tablename']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']];?>
"/> <?php endfor; endif; ?> <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['left_columnname']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?> <input type="hidden" name="left_columnname[]" value="<?php echo $_smarty_tpl->tpl_vars['left_columnname']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']];?>
"/> <?php endfor; endif; ?> <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['right_columnname']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?> <input type="hidden" name="right_columnname[]" value="<?php echo $_smarty_tpl->tpl_vars['right_columnname']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']];?>
"/> <?php endfor; endif; ?> <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['jointype']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?> <input type="hidden" name="jointype[]" value="<?php echo $_smarty_tpl->tpl_vars['jointype']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']];?>
"/> <?php endfor; endif; ?> </form><table width="100%" cellspacing="0" cellpadding="0" border="0" style="margin-top:2px;margin-left:5px;width:95%"><tbody><tr><td width="1" valign="top"><img width="1" src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/img/1px_trans.gif"/></td><td valign="top" style="width:192px"><?php echo $_smarty_tpl->getSubTemplate ("advrep_clist.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</td><td valign="top"><div><div elname="workAreaParent"><div elname="graphFieldHolder"><div elname="dropAreaPanel"><table width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td width="33px" elname="graphButton" onclick="javascript:switchView(this);" id="ZDBSummarySelEl" class="graphSelSummaryView"><img width="33px" src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/img/1px_trans.gif"/></td><td valign="top" style="padding-top: 5px; padding-bottom: 3px;" class="dropAreaBG" rowspan="2"> <?php echo $_smarty_tpl->getSubTemplate ("advrep_filter.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 <?php echo $_smarty_tpl->getSubTemplate ("advrep_summary.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 </td><td class="dropAreaRightBG" rowspan="2"></td></tr><tr><td class="filterDesel" elname="filterButton" onclick="javascript:switchView(this);" id="ZDBFilterSelEl"></td></tr></tbody></table></div></div><div elname="workArea"><?php echo $_smarty_tpl->getSubTemplate ("advrep_help.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><div class="showGraphRefresh" onclick="javascript:analyticsReport();" id="ZDBAnalysisRefresh">Click Here to Generate Report</div></div></div></td></tr></tbody></table><span id="template_dropview" style="display:none"><div dragfield='true' class="zdbdragfield" columntype="#{columntype}" columnname="#{columnname}"><table width="193px" height="20" cellspacing="0" cellpadding="0" align="left"><tbody><tr><td width="10" height="19" class="dragelementleft" style="cursor: pointer;"/><td width="70" nowrap="nowrap" height="19" align="left" elname="fieldName" class="dragElBG">#{displayname}</td><td width="15" valign="middle" nowrap="nowrap" height="19" align="left" class="fx"></td><td valign="middle" align="left" class="dragElBG"><table cellspacing="0" cellpadding="0" align="right" class="dragElFuncBg" menuparent="true"><tbody><tr><td nowrap="nowrap" elname="operation" onclick="javascript:showMenu(this,event)" class="dragElOperation">#{fx}</td><td width="10px" valign="middle" nowrap="nowrap" height="13px" align="left" onclick="javascript:$j(this).prev('td').trigger('click');"><img width="8px" height="10px" class="dropDownMenuImg" src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/img/1px_trans.gif"/></td></tr></tbody></table></td><td valign="middle" align="center" style="cursor: pointer;" onclick="javascript:removeDragFieldEl(this,event)" class="dragElClose"/></tr></tbody></table></div></span>
<?php echo $_smarty_tpl->getSubTemplate ("advrep_menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("inc/loading.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('loadingmsg'=>'Generating Report, please wating...','width'=>'250px'), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("aw_reportpro.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("analytics.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</body></html><?php }} ?>