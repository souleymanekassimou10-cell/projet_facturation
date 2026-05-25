<?php

class Facture
{
	private PDO $pdo;

	public function __construct(PDO $pdo)
	{
		$this->pdo = $pdo;
	}

	public function all(): array
	{
		$stmt = $this->pdo->query('SELECT * FROM facture ORDER BY id DESC');
		return $stmt->fetchAll();
	}

	public function findById(int $id): ?array
	{
		$stmt = $this->pdo->prepare('SELECT * FROM facture WHERE id = ?');
		$stmt->execute([$id]);

		$facture = $stmt->fetch();
		return $facture ?: null;
	}
}
