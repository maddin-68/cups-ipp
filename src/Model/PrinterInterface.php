<?php

namespace Maddin\Cups\Model;

/**
 * Interface PrinterInterface
 *
 * @package Maddin-68\Cups\Model
 */
interface PrinterInterface
{

    /**
     * @return string
     */
    public function getUri();

    /**
     * @param string $uri
     *
     * @return Printer
     */
    public function setUri($uri);

    /**
     * @return string
     */
    public function getName();

    /**
     * @param string $name
     *
     * @return Printer
     */
    public function setName($name);

    /**
     * @return array
     */
    public function getAttributes();

    /**
     * @param array $attributes
     *
     * @return Printer
     */
    public function setAttributes($attributes);

    /**
     * @return string
     */
    public function getStatus();

    /**
     * @param string $status
     *
     * @return Printer
     */
    public function setStatus($status);
}
