<?php

namespace App\Entity;

use App\Repository\ServiceRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: ServiceRepository::class)]
class Service
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    
    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:"Le nom du service est requis.")]
    #[Assert\Length(
        min:5,
        max:25,
        minMessage:"Le nom du service doit comporter au moins 5 caractères.",
        maxMessage:"Le nom du service ne peut pas dépasser 15 caractères."
    )]
    private ?string $nomService = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:"La description est requise.")]
    #[Assert\Length(
        max:100,
        maxMessage:"La description ne peut pas dépasser 25 caractères."
    )]
    private ?string $description = null;

    #[ORM\Column]
    private ?bool $disponibilite = null;

    #[ORM\ManyToOne(inversedBy: 'Services')]
    #[ORM\JoinColumn(name:"categorie_id",referencedColumnName:"id")]
    private ?Categorie $Categorie = null;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(name:"commentaire_id",referencedColumnName:"id")]
    private ?Commentaire $Commentaire = null;

    #[ORM\ManyToOne(inversedBy: 'Services')]
    #[ORM\JoinColumn(name:"association_id",referencedColumnName:"id")]
    private ?Association $association = null;

    #[ORM\ManyToMany(targetEntity: Volontaire::class, mappedBy: 'condidature')]
    private Collection $volontaires;

    public function __construct()
    {
        $this->volontaires = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomService(): ?string
    {
        return $this->nomService;
    }

    public function setNomService(string $nomService): static
    {
        $this->nomService = $nomService;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function isDisponibilite(): ?bool
    {
        return $this->disponibilite;
    }

    public function setDisponibilite(bool $disponibilite): static
    {
        $this->disponibilite = $disponibilite;

        return $this;
    }

    public function getCategorie(): ?Categorie
    {
        return $this->Categorie;
    }

    public function setCategorie(?Categorie $Categorie): static
    {
        $this->Categorie = $Categorie;

        return $this;
    }

    public function getCommentaire(): ?Commentaire
    {
        return $this->Commentaire;
    }

    public function setCommentaire(?Commentaire $Commentaire): static
    {
        $this->Commentaire = $Commentaire;

        return $this;
    }

    public function getAssociation(): ?Association
    {
        return $this->association;
    }

    public function setAssociation(?Association $association): static
    {
        $this->association = $association;

        return $this;
    }

    /**
     * @return Collection<int, Volontaire>
     */
    public function getVolontaires(): Collection
    {
        return $this->volontaires;
    }

    public function addVolontaire(Volontaire $volontaire): static
    {
        if (!$this->volontaires->contains($volontaire)) {
            $this->volontaires->add($volontaire);
            $volontaire->addCondidature($this);
        }

        return $this;
    }

    public function removeVolontaire(Volontaire $volontaire): static
    {
        if ($this->volontaires->removeElement($volontaire)) {
            $volontaire->removeCondidature($this);
        }

        return $this;
    }
}
