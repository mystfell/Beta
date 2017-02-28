<?php

namespace Myst\Repositories\Eloquent\Abstracts;

use Myst\Interfaces\Abstracts\IModelRepository;

abstract class ModelRepository implements IModelRepository {

	/**
	 * @var Model
	 */
	protected $model;

	/**
	 * Add where clause to the query.
	 *
	 * @param $attribute string
	 * @param $type string
	 * @param $value string
	 * @return $this
	 */
	public function where($attribute, $type, $value) {
		$this->model = $this->model->where($attribute, $type, $value);
		return $this;
	}

	/**
	 * Add a whereHas clause to the query.
	 *
	 * @param $relation string
	 * @param $closure Closure
	 * @return $this
	 */
	public function whereHas($relation, $closure) {
		$this->model = $this->model->whereHas($relation, $closure);
		return $this;
	}

	/**
	 * Add orWhere clause to the query.
	 *
	 * @param $attribute string
	 * @param $type string
	 * @param $value string
	 * @return $this
	 */
	public function orWhere($attribute, $type, $value) {
		$this->model = $this->model->orWhere($attribute, $type, $value);
		return $this;
	}

	/**
	 * Add orderBy clause to the query.
	 *
	 * @param $attribute string
	 * @param $order string DESC
	 * @return $this
	 */
	public function orderBy($attribute, $order = 'DESC') {
		$this->model = $this->model->orderBy($attribute, $order);
		return $this;
	}

	/**
	 * Add skip clause to the query.
	 * 
	 * @param $amount integer
	 * @return $this
	 */
	public function skip($amount) {
		$this->model = $this->model->skip($amount);
		return $this;
	}

	/**
	 * Add take clause to the query.
	 * 
	 * @param $amount integer
	 * @return $this
	 */
	public function take($amount) {
		$this->model = $this->model->take($amount);
		return $this;
	}

	/**
	 * Get the models relationships.
	 *
	 * @param $relationships array
	 * @return $this
	 */
	public function with(array $relationships) {
		$this->model = $this->model->with($relationships);
		return $this;
	}

	/**
	 * Fetch one record.
	 *
	 * @return $this->model
	 */
	public function first() {
		$this->model = $this->model->first();
		return $this->model;
	}

	/**
	 * Fetch multiple records.
	 *
	 * @return $this
	 */
	public function get() {
		$this->model = $this->model->get();
		return $this->model;
	}

	/**
	 * Fetch all the records.
	 *
	 * @return $this->model
	 */
	public function all() {
		$this->model = $this->model->all();
		return $this->model;
	}

	/**
	 * Paginate the records.
	 *
	 * @param $amount integer 10
	 * @return $this->model
	 */
	public function paginate($amount = 10) {
		$this->model = $this->model->paginate($amount);
		return $this->model;
	}

	/**
	 * Create a new record.
	 *
	 * @param $data array
	 * @return $this->model
	 */
	public function create(array $data) {
		$this->model = $this->model->create($data);
		return $this->model;
	}

	/**
	 * Update a record.
	 *
	 * @param $data array
	 * @return $this->model
	 */
	public function update(array $data) {
		$this->model = $this->model->update($data);
		return $this->model;
	}

	/**
	 * Delete a record.
	 *
	 * @return $this->model
	 */
	public function delete() {
		$this->model = $this->model->delete();
		return $this->model;
	}

	/**
	 * Truncate the entire model.
	 *
	 * @return
	 */
	public function truncate() {
		$this->model->truncate();
		return;
	}
	
}