<?php

namespace services;

use Ubiquity\utils\http\USession;
use models\TodoItem;

class TodoSessionLoader implements ITodoItemLoader {
	const SESSION_KEY = 'todo-items';
	public function all(): array {
		return USession::get ( self::SESSION_KEY, [ ] );
	}
	public function update(TodoItem $item): bool {
	}
	public function remove(string $id): bool {
		$items = $this->all ();
		foreach ( $items as $index => $item ) {
			if ($item->getId () === $id) {
				unset ( $items [$index] );
				USession::set ( self::SESSION_KEY, $items );
				return true;
			}
		}
		return false;
	}
	public function add(TodoItem $item): void {
		$item->setId ( \uniqid () );
		USession::addOrRemoveValueFromArray ( self::SESSION_KEY, $item, true );
	}
	public function clear(): void {
		USession::delete ( self::SESSION_KEY );
	}
}














