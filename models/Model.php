<?php

abstract class Model
{
	private array $_extra = [];

	abstract function primaryKey(): string;

	public static function getTableName(): string
	{
		return strtolower((new ReflectionClass(static::class))->getShortName());
	}

	public static function all(): array
	{
		return array_map(function ($data) {
			unset($data['_extra']);
			return new static(...$data);
		}, get_table(static::getTableName()));
	}

	public static function find($key): static
	{
		$data = get_table(static::getTableName())[$key];
		unset($data['_extra']);
		return new static(...$data);
	}

	public static function create(array $data): static
	{
		return (new static(...$data))->save();
	}

	public function update(array $data): static
	{
		$this->delete();

		return $this->create($data);
	}

	public function save(): static
	{
		$database = get_database();

		$table = $database[static::getTableName()] ?? [];

		$table[$this->primaryKey()] = get_object_vars($this);

		$database[static::getTableName()] = $table;

		set_database($database);

		return $this;
	}

	public function delete() {
		$database = get_database();

		$table = $database[static::getTableName()] ?? [];

		unset($table[$this->primaryKey()]);

		$database[static::getTableName()] = $table;

		set_database($database);
	}

	public function __toString(): string
	{
		return json_encode(get_object_vars($this));
	}

	public function __call($method, $args): mixed
	{
		if (strpos($method, 'get') === 0) {
			$property = lcfirst(substr($method, 3));
			if (property_exists($this, $property)) {
				return $this->{$property};
			}
		}

		if (strpos($method, 'set') === 0) {
			$property = lcfirst(substr($method, 3));
			if (property_exists($this, $property)) {
				$this->$property = $args[0];
			}
		}

		return "Sorry, {$method} method doesn't exits.";
	}

	public function __get($property): mixed
	{
		if (array_key_exists($property, $this->_extra)) {
			return $this->_extra[$property];
		}

		return "Sorry, {$property} property doesn't exist.";
	}

	public function __set($property, $value): void
	{
		$this->_extra[$property] = $value;
	}
}