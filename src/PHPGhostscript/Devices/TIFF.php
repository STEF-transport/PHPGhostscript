<?php

namespace daandesmedt\PHPGhostscript\Devices;

class TIFF implements DeviceInterface
{

    /**
     * Device output
     *
     * @var string
     */
    protected $device = 'tiff';

    public function getDevice(): string
    {
        return $this->device;
    }

    public function getArguments(): array
    {
        return [];
    }

}
