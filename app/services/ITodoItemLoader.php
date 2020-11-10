<?php

namespace services;

use models\TodoItem;

interface ITodoItemLoader {
	/**
	 * Retourne une liste de todo-items
	 *
	 * @return TodoItem[]
	 */
	public function all(): array;

	/**
	 * Supprime un todo-item par son id
	 *
	 * @param int $id
	 * @return bool
	 */
	public function remove(string $id): bool;

	/**
	 *
	 * @param TodoItem $item
	 * @return bool
	 */
	public function update(TodoItem $item): bool;

	/**
	 * Ajoute un Todo-item
	 *
	 * @param TodoItem $item
	 */
	public function add(TodoItem $item): void;

	/**
	 * Supprime tous les items
	 */
	public function clear(): void;
}

