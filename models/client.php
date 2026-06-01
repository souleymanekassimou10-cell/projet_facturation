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
		$stmt = $this->pdo->query('SELECT * FROM client ORDER BY id_client DESC');
		return $stmt->fetchAll();
	}

	public function findById(int $id_client): ?array
	{
		$stmt = $this->pdo->prepare('SELECT * FROM client WHERE id_client = ?');
		$stmt->execute([$id_client]);

		$client = $stmt->fetch();
		return $client ?: null;
	}
}
