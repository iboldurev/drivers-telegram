<?php

declare(strict_types=1);

namespace FondBot\Drivers\Telegram\Types;

use FondBot\Drivers\Type;
use FondBot\Templates\Keyboard\ReplyButton;

class KeyboardButton extends Type
{
    private $text;
    private $requestContact;
    private $requestLocation;

    public static function create(ReplyButton $replyButton)
    {
        return (new static)
            ->setText($replyButton->getLabel())
            ->setRequestContact($replyButton->getParameters()->get('request_contact'))
            ->setRequestLocation($replyButton->getParameters()->get('request_location'));
    }

    public function getText(): string
    {
        return $this->text;
    }

    public function setText(string $text): self
    {
        $this->text = $text;

        return $this;
    }

    public function getRequestContact(): ?bool
    {
        return $this->requestContact;
    }

    public function setRequestContact(?bool $requestContact): self
    {
        $this->requestContact = $requestContact;

        return $this;
    }

    public function getRequestLocation(): ?bool
    {
        return $this->requestLocation;
    }

    public function setRequestLocation(?bool $requestLocation): self
    {
        $this->requestLocation = $requestLocation;

        return $this;
    }

    public function toNative()
    {
        return collect([
            'text' => $this->text,
            'request_location' => $this->requestLocation,
            'request_contact' => $this->requestContact,
        ])
            ->filter(function ($value) {
                return $value !== null;
            });
    }
}
