<?php

declare(strict_types=1);

namespace FondBot\Drivers\Telegram\Types;

class OrderInfo
{
    private $name;
    private $phoneNumber;
    private $email;
    private $shippingAddress;

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): OrderInfo
    {
        $this->name = $name;

        return $this;
    }

    public function getPhoneNumber(): ?string
    {
        return $this->phoneNumber;
    }

    public function setPhoneNumber(?string $phoneNumber): OrderInfo
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): OrderInfo
    {
        $this->email = $email;

        return $this;
    }

    public function getShippingAddress(): ?ShippingAddress
    {
        return $this->shippingAddress;
    }

    public function setShippingAddress(?ShippingAddress $shippingAddress): OrderInfo
    {
        $this->shippingAddress = $shippingAddress;

        return $this;
    }
}