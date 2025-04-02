<?php

namespace App\Entity;

use App\Repository\FaqRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FaqRepository::class)]
class Faq
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $titre_faq = null;

    #[ORM\Column(length: 255)]
    private ?string $liste_question = null;

    #[ORM\Column]
    private ?int $numero_question = null;

    #[ORM\Column(length: 100)]
    private ?string $question = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $reponse = null;

    /**
     * @var Collection<int, Thematique>
     */
    #[ORM\ManyToMany(targetEntity: Thematique::class, inversedBy: 'faqs')]
    private Collection $thematique;

    public function __construct()
    {
        $this->relationfaq = new ArrayCollection();
        $this->thematique = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitreFaq(): ?string
    {
        return $this->titre_faq;
    }

    public function setTitreFaq(string $titre_faq): static
    {
        $this->titre_faq = $titre_faq;

        return $this;
    }

    public function getListeQuestion(): ?string
    {
        return $this->liste_question;
    }

    public function setListeQuestion(string $liste_question): static
    {
        $this->liste_question = $liste_question;

        return $this;
    }

    public function getNumeroQuestion(): ?int
    {
        return $this->numero_question;
    }

    public function setNumeroQuestion(int $numero_question): static
    {
        $this->numero_question = $numero_question;

        return $this;
    }

    public function getQuestion(): ?string
    {
        return $this->question;
    }

    public function setQuestion(string $question): static
    {
        $this->question = $question;

        return $this;
    }

    public function getReponse(): ?string
    {
        return $this->reponse;
    }

    public function setReponse(string $reponse): static
    {
        $this->reponse = $reponse;

        return $this;
    }

    /**
     * @return Collection<int, Thematique>
     */
    public function getThematique(): Collection
    {
        return $this->thematique;
    }

    public function addThematique(Thematique $thematique): static
    {
        if (!$this->thematique->contains($thematique)) {
            $this->thematique->add($thematique);
        }

        return $this;
    }

    public function removeThematique(Thematique $thematique): static
    {
        $this->thematique->removeElement($thematique);

        return $this;
    }

}
