<?php
App::uses('ConnectionManager', 'Model');

class HierarchicalReportComponent extends Component {

    function report( $spec=Null, $next_selector=Null )
    {
    	switch($spec['display_as'])
	{
	    case 'section':
	        return $this->section_report( $spec, $next_selector ? $next_selector:Null );
	    case 'table':
	        return $this->table_report( $spec, $next_selector ? $next_selector:Null );
	}
    }

    var $section = 0;
    function section_report( $s, $next_selector = Null )
    {
		$db =& ConnectionManager::getDataSource("default");

    	$this->section++;
        $sql = $s['sql'];
        if ($next_selector) $sql = preg_replace( '/__next_selector__/', $next_selector, $sql );
        //( $r = mysql_query( $sql ) ) || die( "FAILED: $sql" );
        ( $r = $db->query( $sql ) ) || die( "FAILED: $sql" );
	$o = '';
        //while( $d = mysql_fetch_array( $r ) )
        foreach( $r as $d )
        {
            if (isset($s['title'])) 
		$o .= "section}>{$d[$s['title']]}section}>";
            if (isset($s['subreport']))
                $o .= $this->report( $s['subreport'], $d[$s['next_selector']] );
        }
		$this->section--;
        return $o;
    }
    
    function table_report( $s, $next_selector = Null )
    {
   		$db =& ConnectionManager::getDataSource("default");

		$hidden_columns = array();
		if (isset($s['hidden_columns'])) $hidden_columns = $s['hidden_columns'];

		$column_headings = array();
		if (isset($s['column_headings'])) $column_headings = $s['column_headings'];

		$links = array();
		if (isset($s['links'])) $links = $s['links'];

		$sorting_columns = array();
		if (isset($s['sorting_columns'])) $sorting_columns = $s['sorting_columns'];

        $sql = $s['sql'];
        if ($next_selector) $sql = preg_replace( '/__next_selector__/', $next_selector, $sql );
        ( $r = $db->query( $sql ) ) || die( "FAILED: $sql" );
        debug($r);
        $first_row = true;
        $o = '';
        //while( $d = mysql_fetch_assoc( $r ) )
        foreach( $r as $d )
        {
            if ($first_row==true )
            {
                $o .= '';
				foreach($d as $key=>$value) 
				{
					if (in_array($key, $hidden_columns)) continue;

					$title = $this->_subst($key,$column_headings);

					if (in_array($key, $sorting_columns))
					{
						$url = $s['sorting_url'];
						if ($s['sorting_on']==$key)
						{
							$url = $this->_merge( $url, array('order_by'=>$key, 'asc_desc'=>($s['sorting_direction']=='DESC'?'ASC':'DESC') ) );
							$title = "$title";
						}
						else
						{
							$url = $this->_merge( $url, array('order_by'=>$key, 'asc_desc'=>'ASC') );
							$title = "$title";
						}
					}
					$o .= ''.$title.'';
                }
				$o .= '';
                $first_row = false;
				reset($d);
            }
            $o .= '';
			foreach($d as $key=>$value)
			{
				if (isset($links[$key]))
				{
					$link = $this->_merge( $links[$key], $d );
					$value = ''.$value.'';
				}
				if (! in_array($key, $hidden_columns)) $o .= ''.$value.'';
			}
            $o .= '';
        }
        if (isset($s['summation_sql']))  /* applies only to tables */
        {
            // summation code
            // insert the sql statement right into the query
            $summation_sql = preg_replace( '/__sql__/', $sql, $s['summation_sql'] );
			if (!preg_match('/as .+$/', $summation_sql))
	    	$summation_sql .= ' AS abcdefghi';
            //( $res = mysql_query( $summation_sql ) ) || die("FAILED: $summation_sql");
            ( $res = $db->query( $summation_sql ) ) || die("FAILED: $summation_sql");
	        foreach( $res as $row ) {
            	//$row = mysql_fetch_assoc( $res );
            	$o .= '';
				foreach($row as $key=>$value) $o .= ' '.$value.'';
				$o .= '';
			}
		}
        $o .= '';
        return $o;
    }

	function _subst( $key, $substs )
	{
		if (isset($substs[$key])) return $substs[$key];
		return $key;
	}
	function _merge( $template, $substs )
	{
		$keys = array_keys($substs);
		for($i=count($keys)-1;$i>=0;$i--) $keys[$i]='__'.$keys[$i].'__';
		return str_replace( $keys, array_values($substs), $template );
	}

}

?>