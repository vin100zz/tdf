<?php

class DBAccess
{
//=========================================================================
	public static function query($iQuery)
	{
		$db = new SQLite3("tdf.s3db");
		$dbResult = $db->query($iQuery);
		$result = array();
		while($row = $dbResult->fetchArray(SQLITE3_ASSOC))
		{
			$utf8row = array();
			foreach($row as $key => $val)
			{
				$utf8row[$key] = utf8_encode($val);
			}
			$result[] = $utf8row;
		}
		return $result;
	}
//=========================================================================
	public static function querySingle($iQuery)
	{
		$db = new SQLite3("tdf.s3db");
		$row = $db->querySingle($iQuery, true);
		$utf8row = array();
		foreach($row as $key => $val)
		{
			$utf8row[$key] = utf8_encode($val);
		}
		return $utf8row;
	}
//=========================================================================
	public static function exec($iQuery)
	{
		$db = new SQLite3("tdf.s3db");
		return $db->exec($iQuery);
	}
}

?>