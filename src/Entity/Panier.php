<?php

namespace App\Entity;

class Panier
{
    private array $panier = [];

    public function add(array $article): void
    {
        $id = $article['id'];
        if (isset($this->panier[$id])) {
            $this->panier[$id]['quantite'] += $article['quantite'];
        } else {
            $this->panier[$id] = $article;
        }
    }

    public function addOne(array $article): void
    {
        $id = $article['id'];
        if (isset($this->panier[$id])) {
            $this->panier[$id]['quantite'] += 1;
        } else {
            $article['quantite'] = 1;
            $this->panier[$id] = $article;
        }
    }

    public function delete(array $article): void
    {
        $id = $article['id'];
        if (isset($this->panier[$id])) {
            unset($this->panier[$id]);
        }
    }

    public function deleteOne(array $article): void
    {
        $id = $article['id'];
        if (isset($this->panier[$id])) {
            if ($this->panier[$id]['quantite'] > 1) {
                $this->panier[$id]['quantite'] -= 1;
            } else {
                unset($this->panier[$id]);
            }
        }
    }

    public function getPanier(): array
    {
        return $this->panier;
    }

    public function clearPanier(): void
    {
        $this->panier = [];
    }

    public function getTotalItems(): int
    {
        $totalItems = 0;
        foreach ($this->panier as $article) {
            $totalItems += $article['quantite'];
        }
        return $totalItems;
    }

    public function getTotalAmount(): float
    {
        $totalAmount = 0.0;
        foreach ($this->panier as $article) {
            $totalAmount += $article['prix'] * $article['quantite'];
        }
        return $totalAmount;
    }

    public function clear()
    {
        // Vider le panier
        $this->panier = [];
    }

    public function updateQuantity($id, $quantity)
    {
        // Mise à jour de la quantité d'un article
        if (isset($this->panier[$id])) {
            $this->panier[$id]['quantite'] = $quantity;
        }
    }
}
