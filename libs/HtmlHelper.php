<?php

class HtmlHelper
{
	public static function getSelect($arr) {
		if(!is_array($arr)) 
			return print('Give me array pls');
		$select = '<select>';
		foreach($arr as $item) {
			$select .= '<option>' . $item . '</option>';
		}
		$select .= '</select>';

		return print($select);
	}

	public static function getSelectMulti($arr) {
		if(!is_array($arr))
			return print('Give me array pls');
		$select = '<select multiple name="multi">';
		foreach($arr as $item) {
			$select .= '<option>' . $item . '</option>';
		}
		$select .= '</select>';

		return print($select);
	}
	
	public static function getTable($a, $b, $arr=[]) {
		$table = '<table>';
		if(count($arr)>0) {
			$table .= '<tr>';
			foreach($arr as $item) {
				$table .= '<th>' . $item . '</th>';
			}
			$table .= '</tr>';
		}
		if($a && $b && ($a > 0 && $b > 0)) {
			for($i = 1; $i <= $a; $i++) {
				$table .= '<tr>';
				for($j = 1; $j <= $b; $j++) {
					$table .= '<td>' . $i * $j . '</td>';
				}
				$table .= '</tr>';
			}
			$table .= '</table>';
			return print($table);
		} else {
			return print('Bad values');
		}
	}

	public static function getList($arr, $a) {
		if(!is_array($arr)) 
			return print('Give me array PLS');
		$ul = '<' . $a . '>';
		foreach($arr as $item) {
			$ul .= '<li>' . $item . '</li>';
		}
		$ul .= '</' . $a . '>';
		
		return print($ul);
	}

	public static function getListTermin($arr) {
		if(!is_array($arr))
			return print('Give me array PLS');
		$dl = '<dl>';
		foreach($arr as $key => $value) {
			$dl .= '<dt>' . $key . '</dt>';
			$dl .= '<dd>' . $value . '</dd>';
		}
		$dl .= '</dl>';

		return print($dl);
	}

	public static function getRadioButton($arr) {
		if(!is_array($arr))
			return print('Give me array PLS');
		$fieldset = '<fieldset>';
		$i = 1;
		foreach($arr as $item) {
			$fieldset .= '<input type="radio" id="radio' .$i.'">';
			$fieldset .= '<label for="radio' . $i . '">' . $item . '</label>';
			$i++;
		}

		$fieldset .= '</fieldset>';
		return print($fieldset);
	}

	public static function getCheckbox($arr) {
		if(!is_array($arr)) 
			return print('Give me array PLS');
		$i = 1;
		foreach($arr as $item) {
			$checkbox .= '<label for="checkbox'.$i.'">' . $item . '</label>';
			$checkbox .= '<input type="checkbox" id="checkbox'.$i.'">';
			$i++;
		} 
		return print($checkbox);
	}
}

















