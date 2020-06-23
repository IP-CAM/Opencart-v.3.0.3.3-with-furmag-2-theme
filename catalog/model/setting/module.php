<?php
class ModelSettingModule extends Model {
	public function getModule($module_id) {
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "module WHERE module_id = '" . (int)$module_id . "'");
		
		if ($query->row) {
			return json_decode($query->row['setting'], true);
		} else {
			return array();	
		}
	}		
	public function getModulesByCode($code) {
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "module WHERE code = '" . $code . "'");
		if ($query->rows) {
			return $query->rows;
		} else {
			return array();	
		}
	}		
}