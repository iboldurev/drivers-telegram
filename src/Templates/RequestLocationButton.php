<?php

declare(strict_types=1);

namespace FondBot\Drivers\Telegram\Templates;

use FondBot\Templates\Keyboard\Button;
use Illuminate\Contracts\Support\Arrayable;

class RequestLocationButton extends Button implements Arrayable
{
    /**
     * Get name.
     *
     * @return string
     */
    public function getName(): string
    {
        return 'RequestLocationButton';
    }

    /**
     * Get the instance as an array.
     *
     * @return array
     */
    public function toArray(): array
    {
        return [
            [
                'text' => $this->label,
                'request_location' => true,
            ],
        ];
    }
}
