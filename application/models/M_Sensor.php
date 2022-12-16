<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class M_Sensor extends CI_Model
	{
		public function getDataSensor(){
			$this->db->select('*');
			$this->db->from('tb_sensor');
			$query = $this->db->get();
			return $query->result();
		}

		public function getDataSensorLast(){
			$this->db->select('*');
			$this->db->from('tb_sensor');
			$query = $this->db->get();
			return $query->row();
		}

		public function EditDataSensor($data)
		{
			$this->db->update('tb_sensor',$data);
		}
	}


?>