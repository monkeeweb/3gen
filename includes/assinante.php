<?php

	set_include_path(ini_get("include_path").".;e:\\home\\penteadomendonca\\web\\includes");
	
	require_once("database.php");
	
	class Assinante 
	{
	
		protected static $table_name="cadastro";
		protected static $db_fields = array('id', 'nome', 'email', 'receber');
		
		public $id;
		public $nome;
		public $email;
		public $receber;
		
		public static function find_all()
		{
			return self::find_by_sql("SELECT * FROM ".self::$table_name);
		}
		
		public static function find_by_id($id=0)
		{
			$result_array = self::find_by_sql("SELECT * FROM ".self::$table_name." WHERE id={$id} LIMIT 1");
			return !empty($result_array) ? array_shift($result_array) : false;
		}
		
		public static function find_by_sql($sql="")
		{
			global $database;
			$result_set = $database->query($sql);
			$object_array = array();
			while ($row = $database->fetch_array($result_set))
			{
				$object_array[] = self::instantiate($row);
			}
			return $object_array;
		}
		
		public static function count_all()
		{
			global $database;
			$sql = "SELECT COUNT(*) FROM ".self::$table_name;
			$result_set = $database->query($sql);
			$row = $database->fetch_array($result_set);
			return array_shift($row);
		}
		
		private static function instantiate($record)
		{
			$object = new self;
			foreach ($record as $attribute=>$value)
			{
				if($object->has_attribute($attribute))
				{
					$object->$attribute = $value;
				}
			}
			return $object;
		}
		
		private function has_attribute($attribute)
		{
			return array_key_exists($attribute, $this->attributes());
		
		}
		
		protected function attributes()
		{
			$attributes = array();
			foreach(self::$db_fields as $field)
			{
				if(property_exists($this, $field))
				{
					$attributes[$field] = $this->$field;
				}
			}
			return $attributes;
		}
		
		protected function sanitized_attributes()
		{
			global $database;
			$clean_attributes = array();
			foreach ($this->attributes() as $key => $value)
			{
				$clean_attributes[$key] = $database->escape_value($value);
			}
			return $clean_attributes;
		}
		
		public function save()
		{
			return isset($this->id) ? $this->update() : $this->create();
		}
		
		public function create()
		{
			global $database;
			$attributes = $this->sanitized_attributes();
			$sql = "INSERT INTO ".self::$table_name." (";
			$sql .= join(", ", array_keys($attributes));
			$sql .= ") VALUES ('";
			$sql .= join("', '", array_values($attributes));
			$sql .= "')";
			if ($database->query($sql))
			{
				$this->id = $database->insert_id();
				return true;
			} else {
				return false;
			}
		}
		
		public function update()
		{
			global $database;
			$attributes = $this->sanitized_attributes();
			$attribute_pairs = array();
			foreach ($attributes as $key => $value)
			{
				$attribute_pairs[] = "{$key}='{$value}'";
			}
			$sql = "UPDATE ".self::$table_name." SET ";
			$sql .= join(", ", $attribute_pairs);
			$sql .= " WHERE id=". $database->escape_value($this->id);
			$database->query($sql);
			return ($database->affected_rows() == 1) ? true : false;
		}
		
		public function delete()
		{
			global $database;
			$sql = "DELETE FROM ".self::$table_name;
			$sql .= " WHERE id=". $database->escape_value($this->id);
			$sql .= " LIMIT 1";
			$database->query($sql);
			return ($database->affected_rows() == 1) ? true : false;
		}
		
		public function check_email_address($email)
		{
			if (!ereg("^[^@]{1,64}@[^@]{1,255}$", $email))
			{
				return false;
			}
			
			$email_array = explode("@", $email);
			$local_array = explode(".", $email_array[0]);
			
			for ($i = 0; $i < sizeof($local_array); $i++)
			{
				if (!ereg("^(([A-Za-z0-9!#$%&'*+/=?^_`{|}~-][A-Za-z0-9!#$%&↪'*+/=?^_`{|}~\.-]{0,63})|(\"[^(\\|\")]{0,62}\"))$", $local_array[$i]))
				{
					return false;
				}
			}
			
			if (!ereg("^\[?[0-9\.]+\]?$", $email_array[1]))
			{
				$domain_array = explode(".", $email_array[1]);
				if (sizeof($domain_array) < 2)
				{
					return false;
				}
				
				for ($i = 0; $i < sizeof($domain_array); $i++)
				{
					if (!ereg("^(([A-Za-z0-9][A-Za-z0-9-]{0,61}[A-Za-z0-9])|↪([A-Za-z0-9]+))$", $domain_array[$i]))
					{
						return false;
					}
				}
			}
			return true;
		}
	
	}

?>