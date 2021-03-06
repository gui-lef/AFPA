<?php

	namespace App\models;

	class Form {

		public function __construct(  ) {}

		public function getInputText($name, $type, $id,$label,$placeholder = ""){
			return '<div class="form-group">
    <label for="'.$id.'">'.$label.'</label>
    <input type="'.$type.'" class="form-control" id="'.$id.'" name="'.$name.'" placeholder="'.$placeholder.'">
        </div>';
		}

		public function getButton($type, $value, $class, $id=""){
			return '<button type="'.$type.'" id="'.$id.'" class="'.$class.'">'.$value.'</button>';
		}
	}
