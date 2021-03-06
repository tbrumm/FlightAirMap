<?php
require_once('../require/settings.php');

class settings {
	public static function modify_settings($settings) {
		$settings_filename = '../require/settings.php';
		$content = file_get_contents($settings_filename);
		$fh = fopen($settings_filename,'w');
		foreach ($settings as $settingname => $value) {
			if ($value == 'TRUE' || $value == 'FALSE') {
			    $pattern = '/\$'.$settingname." = ".'(TRUE|FALSE)'."/";
			    $replace = '\$'.$settingname." = ".$value."";
			} elseif (is_array($value)) {
			    $pattern = '/\$'.$settingname." = array(".'(.*)'.")/";
			    foreach ($value as $data) {
				if (!isset($array_value)) {
				    $array_value = "'".$data."'";
				} else {
				    $array_value = ",'".$data."'";
				}
			    }
			    $replace = '\$'.$settingname." = array(".$array_value.")";
			} else {
			    $pattern = '/\$'.$settingname." = '".'(.*)'."'/";
			    $replace = '\$'.$settingname." = '".$value."'";
			}
			$rep_cnt = 0;
			$content = preg_replace($pattern,$replace,$content,1,$rep_cnt);
			
			// If setting is not in settings.php (for update)
			if ($rep_cnt == 0) {
				$content = preg_replace('/\?>/',$replace."\n?>");
			}

		}
		fwrite($fh,$content);
		fclose($fh);
	}
}

//settings::modify_setting('globalName','titi');
?>