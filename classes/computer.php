<?php


class computer
{

    // autogenerate
    private int $id;
    private string $brand;
    private string $graphicsCard;
    private string $processor;
    private string $os;
    private string $color;
    // optional default false
    private bool $keyboard;
    private bool $mouse;
    private int $memory;
    // owner
    private User $owner;

    public function __construct(string $brd, string $graphCard, string $pross, string $os, string $color)
    {
        $this->setBrand($brd);
        $this->setGraphicsCard($graphCard);
        $this->setProcessor($pross);
        $this->setOs($os);
        $this->setColor($color);
        // optional default values
        $this->setMemory(8);
        $this->setKeyboard(false);
        $this->setMouse(false);
        // ID (auto generated)
        $this->id = time();

    }


    /**
     * return computer's Id
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return String
     */
    public function getBrand(): string
    {
        return $this->brand;
    }

    /**
     * @param String $brand
     */
    public function setBrand(string $brand): void
    {
        $this->brand = $brand;
    }

    /**
     * @return String
     */
    public function getGraphicsCard(): string
    {
        return $this->graphicsCard;
    }

    /**
     * @param String $graphicsCard
     */
    public function setGraphicsCard(string $graphicsCard): void
    {
        $this->graphicsCard = $graphicsCard;
    }

    /**
     * @return bool
     */
    public function isKeyboard(): bool
    {
        return $this->keyboard;
    }

    /**
     * @param bool $keyboard
     */
    public function setKeyboard(bool $keyboard): void
    {
        $this->keyboard = $keyboard;
    }

    /**
     * @return bool
     */
    public function isMouse(): bool
    {
        return $this->mouse;
    }

    /**
     * @param bool $mouse
     */
    public function setMouse(bool $mouse): void
    {
        $this->mouse = $mouse;
    }

    /**
     * @return int
     */
    public function getMemory(): int
    {
        return $this->memory;
    }

    /**
     * @param int $memory
     */
    public function setMemory(int $memory): void
    {
        $this->memory = $memory;
    }

    /**
     * @return String
     */
    public function getProcessor(): string
    {
        return $this->processor;
    }

    /**
     * @param String $processor
     */
    public function setProcessor(string $processor): void
    {
        $this->processor = $processor;
    }

    /**
     * @return String
     */
    public function getOs(): string
    {
        return $this->os;
    }

    /**
     * @param String $os
     */
    public function setOs(string $os): void
    {
        $this->os = $os;
    }

    /**
     * @return String
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @param String $color
     */

    /**
     * @param string $color
     */
    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    /**
     *
     */
    public function start(){
        echo $this->getBrand()." started...<br>";
    }

    /**
     *
     */
    public function shutdown(){
        echo $this->getBrand()." computer off...<br>";
    }

    /**
     *
     */
    public function sleep(){
        echo $this->getBrand()." computer sleeping...<br>";
    }

    public function setOwner(User $user) {
        $this->owner = $user;
    }

    public function getOwner(): User {
        return $this->owner;
    }
}

