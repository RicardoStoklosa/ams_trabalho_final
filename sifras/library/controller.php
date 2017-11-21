<?php
/*****************************************************************************
    SiFraS: Simple PHP Framework for Students
    Copyright (C) 2016  Leandro Israel Pinto

    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program.  If not, see <http://www.gnu.org/licenses/>.
*****************************************************************************/

Class Controller{
	public $_post = array();
	public $_get = array();
	function __construct(){
		$this->escapeInput();
	}

	private function removeChars($v){
		$v = str_replace("'","", $v);
		$v = str_replace("\"","",$v);
		$v = str_replace("<","", $v);
		$v = str_replace(">","", $v);
		return $v;
	}
	
	function escapeInput($filter=null){
		foreach ($_GET as $key => $value)   // STORE $_GET VALUES
        {
            $this->_get[$key] = $this->removeChars($value);
        }
        
		foreach ($_POST as $key => $value)   // STORE $_GET VALUES
        {
            $this->_post[$key] = $this->removeChars($value);
        }
	}
}