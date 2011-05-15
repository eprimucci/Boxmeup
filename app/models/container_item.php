<?php
class ContainerItem extends AppModel {
	public $name = 'ContainerItem';
	public $displayField = 'name';
	public $actsAs = array('Sphinx');
	public $validate = array(
		'container_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'Please select a container.',
			),
		),
		'body' => array(
			'empty' => array(
				'rule' => 'notEmpty',
				'message' => 'Please enter some content for the item.'
			)
		),
		'quantity' => array(
			'empty' => array(
				'rule' => 'notEmpty',
				'message' => 'Please enter a quantity.'
			),
			'numeric' => array(
				'rule' => 'numeric',
				'message' => 'Must be a numeric value.'
			)
		),
		'tag_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
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
	
	public $pagination_limit = 20;
	
	public function getPaginatedContainerItems(&$controller, $container_uuid) {
		$controller->paginate = array(
			'conditions' => array(
				'ContainerItem.container_id' => $container_uuid,
			),
			'contain' => array(),
			'order' => 'ContainerItem.modified DESC',
			'limit' => $this->pagination_limit
		);
		return $controller->paginate($this);
	}

	public function getContainerSlug($container_uuid) {
		return $this->Container->field('slug', array('uuid' => $container_uuid));
	}
	
	public function getRecentItems($user_id) {
		return $this->find('all', array(
			'limit' => 5,
			'order' => 'ContainerItem.created DESC',
			'contain' => array('Container'),
			'conditions' => array('Container.user_id' => $user_id)
		));
	}
}
?>