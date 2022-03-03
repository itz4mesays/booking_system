<?php

namespace App\Entity;

use App\Repository\ItemRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ItemRepository::class)
 */
class Item
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Brand::class, inversedBy="n")
     * @ORM\JoinColumn(nullable=false)
     */
    private $brand_id;

    /**
     * @ORM\Column(type="string", length=55)
     */
    private $type;

    /**
     * @ORM\Column(type="integer")
     */
    private $max_passenger_num;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBrandId(): ?Brand
    {
        return $this->brand_id;
    }

    public function setBrandId(?Brand $brand_id): self
    {
        $this->brand_id = $brand_id;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getMaxPassengerNum(): ?int
    {
        return $this->max_passenger_num;
    }

    public function setMaxPassengerNum(int $max_passenger_num): self
    {
        $this->max_passenger_num = $max_passenger_num;

        return $this;
    }
}
