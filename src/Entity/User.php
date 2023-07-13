<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="user")
 */
class User
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(name="id", type="integer", nullable=false)
     */
    protected int $id;

    /**
     * @ORM\Column(name="last_name", type="string", nullable=true)
     */
    protected ?string $lastName;

    /**
     * @ORM\Column(name="first_name", type="string", nullable=true)
     */
    protected ?string $firstName;

    /**
     * @ORM\Column(name="age", type="integer", nullable=true)
     */
    protected ?int $age;

    /**
     * @ORM\Column(name="sex", type="string", nullable=true)
     */
    protected ?string $sex;

    /**
     * @ORM\Column(name="address", type="string", nullable=true)
     */
    protected ?string $address;

    /**
     * @ORM\Column(name="city", type="string", nullable=true)
     */
    protected ?string $city;

    /**
     * @ORM\Column(name="phone_number", type="string", nullable=true)
     */
    protected ?string $phoneNumber;

    public function getId(): int
    {
        return $this->id;
    }

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function setLastName(string $lastName): void
    {
        $this->lastName = $lastName;
    }

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): void
    {
        $this->firstName = $firstName;
    }

    public function getAge(): ?int
    {
        return $this->age;
    }

    public function setAge(int $age): void
    {
        $this->age = $age;
    }

    public function getSex(): ?string
    {
        return $this->sex;
    }

    public function setSex(string $sex): void
    {
        $this->sex = $sex;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(string $address): void
    {
        $this->address = $address;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(string $city): void
    {
        $this->city = $city;
    }

    public function getPhoneNumber(): ?string
    {
        return $this->phoneNumber;
    }

    public function setPhoneNumber(string $phoneNumber): void
    {
        $this->phoneNumber = $phoneNumber;
    }
}
