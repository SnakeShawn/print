<?php
namespace API\Model;
use Think\Model\ViewModel;

class FileViewModel extends ViewModel {
	public $viewFields = array(
		'file' => array(
			'id',
			'use_id',
			'pri_id',
			'name',
			'url',
			'time',
			'status',
			'copies',
			'color',
			'double_side',
			'requirements',
		),
		'user' => array(
			'name' => 'use_name',
			'student_number',
			'phone',
			'_on' => 'user.id=file.use_id',
		),
	);
}
