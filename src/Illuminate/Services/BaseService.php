<?php 
namespace Illuminate\Services;

abstract class BaseService {
   
    protected $model;

    public function getModelName()
    {
        return get_class($this->model);
    }
    public function __toString()
    {
        return $this->model;
    }

    /**
	 * __get magic
	 *
	 * Allows models to access CI's loaded classes using the same
	 * syntax as controllers.
	 *
	 * @param	string	$key
	 */
	public function __get($key)
	{
		// Debugging note:
		//	If you're here because you're getting an error message
		//	saying 'Undefined Property: system/core/Model.php', it's
		//	most likely a typo in your model code.
		return get_instance()->$key;
    }
} 