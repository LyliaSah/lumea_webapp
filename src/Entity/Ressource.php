<?php

namespace App\Entity;

use App\Repository\RessourceRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RessourceRepository::class)]
class Ressource
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $visuel_article = null;

    #[ORM\Column(length: 50)]
    private ?string $titre_article = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $article = null;

    #[ORM\Column(length: 50)]
    private ?string $titre_ressource = null;

    #[ORM\ManyToOne(inversedBy: 'ressources')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Thematique $thematique = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getVisuelArticle(): ?string
    {
        return $this->visuel_article;
    }

    public function setVisuelArticle(string $visuel_article): static
    {
        $this->visuel_article = $visuel_article;

        return $this;
    }

    public function getTitreArticle(): ?string
    {
        return $this->titre_article;
    }

    public function setTitreArticle(string $titre_article): static
    {
        $this->titre_article = $titre_article;

        return $this;
    }

    public function getArticle(): ?string
    {
        return $this->article;
    }

    public function setArticle(string $article): static
    {
        $this->article = $article;

        return $this;
    }

    public function getTitreRessource(): ?string
    {
        return $this->titre_ressource;
    }

    public function setTitreRessource(string $titre_ressource): static
    {
        $this->titre_ressource = $titre_ressource;

        return $this;
    }

    public function getThematique(): ?Thematique
    {
        return $this->thematique;
    }

    public function setThematique(?Thematique $thematique): static
    {
        $this->thematique = $thematique;

        return $this;
    }
}
