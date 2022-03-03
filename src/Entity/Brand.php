<?php

namespace App\Entity;

use App\Repository\BrandRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=BrandRepository::class)
 */
class Brand
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $brand_name;

    /**
     * @ORM\OneToMany(targetEntity=Item::class, mappedBy="brand_id", orphanRemoval=true)
     */
    private $n;

    public function __construct()
    {
        $this->n = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBrandName(): ?string
    {
        return $this->brand_name;
    }

    public function setBrandName(string $brand_name): self
    {
        $this->brand_name = $brand_name;

        return $this;
    }

    /**
     * @return Collection<int, Item>
     */
    public function getN(): Collection
    {
        return $this->n;
    }

    public function addN(Item $n): self
    {
        if (!$this->n->contains($n)) {
            $this->n[] = $n;
            $n->setBrandId($this);
        }

        return $this;
    }

    public function removeN(Item $n): self
    {
        if ($this->n->removeElement($n)) {
            // set the owning side to null (unless already changed)
            if ($n->getBrandId() === $this) {
                $n->setBrandId(null);
            }
        }

        return $this;
    }
}
