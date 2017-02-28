<?php

namespace Myst\Interfaces\Abstracts;

interface IModelRepository {

	/**
	 * Add where clause to the query.
	 *
	 * @param $attribute string
	 * @param $type string
	 * @param $value string
	 * @return $this
	 */
	public function where($attribute, $type, $value);

	/**
	 * Add a whereHas clause to the query.
	 *
	 * @param $relation string
	 * @param $closure Closure
	 * @return $this
	 */
	public function whereHas($relation, $closure);

	/**
	 * Add orWhere clause to the query.
	 *
	 * @param $attribute string
	 * @param $type string
	 * @param $value string
	 * @return $this
	 */
	public function orWhere($attribute, $type, $value);

	/**
	 * Add orderBy clause to the query.
	 *
	 * @param $attribute string
	 * @param $order string DESC
	 * @return $this
	 */
	public function orderBy($attribute, $order = 'DESC');

	/**
	 * Add skip clause to the query.
	 * 
	 * @param $amount integer
	 * @return $this
	 */
	public function skip($amount);

	/**
	 * Add take clause to the query.
	 * 
	 * @param $amount integer
	 * @return $this
	 */
	public function take($amount);

	/**
	 * Get the models relationships.
	 *
	 * @param $relationships array
	 * @return $this
	 */
	public function with(array $relationships);

	/**
	 * Fetch one record.
	 *
	 * @return $this->model
	 */
	public function first() ;

	/**
	 * Fetch multiple records.
	 *
	 * @return $this->model
	 */
	public function get();

	/**
	 * Fetch all the records.
	 *
	 * @return $this->model
	 */
	public function all();

	/**
	 * Paginate the records.
	 *
	 * @param $amount integer 10
	 * @return $this->model
	 */
	public function paginate($amount = 10);

	/**
	 * Create a new record.
	 *
	 * @param $data array
	 * @return $this->model
	 */
	public function create(array $data);

	/**
	 * Update a record.
	 *
	 * @param $data array
	 * @return $this->model
	 */
	public function update(array $data);

	/**
	 * Delete a record.
	 *
	 * @return $this->model
	 */
	public function delete();

	/**
	 * Truncate the entire model.
	 *
	 * @return
	 */
	public function truncate();

}