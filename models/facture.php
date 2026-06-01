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
		$stmt = $this->pdo->query('SELECT * FROM facture ORDER BY id_fact DESC');
		return $stmt->fetchAll();
	}

	public function findById(int $id_fact): ?array
	{
		$stmt = $this->pdo->prepare('SELECT * FROM facture WHERE id_fact = ?');
		$stmt->execute([$id_fact]);

		$facture = $stmt->fetch();
		return $facture ?: null;
	}
}
