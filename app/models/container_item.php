<?php
class ContainerItem extends AppModel {
	public $name = 'ContainerItem';
	public $displayField = 'name';
	public $validate = array(
		'container_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'Please select a container.',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'body' => array(
			'empty' => array(
				'rule' => 'notEmpty',
				'message' => 'Please enter some content for the item.'
			)
		),
		'tag_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	public $belongsTo = array(
		'Container' => array(
			'className' => 'Container',
			'foreignKey' => 'container_id',
			'conditions' => '',
			'fields' => '',
			'order' => 'Container.created',
            'counterCache' => true
		),
		'Tag' => array(
			'className' => 'Tag',
			'foreignKey' => 'tag_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	public function getContainerSlug($container_uuid) {
		return $this->Container->field('slug', array('uuid' => $container_uuid));
	}
}
?>