<?php

declare(strict_types=1);

namespace FondBot\Drivers\Telegram\Templates;

use FondBot\Templates\Keyboard\Button;

class RequestContactButton implements Button
{
    private $label;

    /**
     * Get name.
     *
     * @return string
     */
    public function getName(): string
    {
        return 'RequestContactButton';
    }

    /**
     * Get label.
     *
     * @return string
     */
    public function getLabel(): string
    {
        return $this->label;
    }

    /**
     * Set label.
     *
     * @param string $label
     *
     * @return RequestContactButton
     */
    public function setLabel(string $label): RequestContactButton
    {
        $this->label = $label;

        return $this;
    }
}