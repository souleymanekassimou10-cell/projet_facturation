<?php

class Client
{
	private PDO $pdo;

	public function __construct(PDO $pdo)
	{
		$this->pdo = $pdo;
	}

	public function all(): array
	{
		$stmt = $this->pdo->query('SELECT * FROM client ORDER BY id DESC');
		return $stmt->fetchAll();
	}

	public function findById(int $id): ?array
	{
		$stmt = $this->pdo->prepare('SELECT * FROM client WHERE id = ?');
		$stmt->execute([$id]);

		$client = $stmt->fetch();
		return $client ?: null;
	}
}
