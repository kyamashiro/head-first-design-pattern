<?php


namespace Command;


class Volume
{
    private int $size;

    /**
     * Volume constructor.
     * @param int $size
     */
    public function __construct(int $size)
    {
        if ($size < 0 && 100 < $size) {
            throw new \InvalidArgumentException('音量は0~100の間に設定してください');
        }
        $this->size = $size;
    }

    /**
     * @return int
     */
    public function getSize(): int
    {
        return $this->size;
    }

    /**
     * @param int $size
     * @return $this
     */
    public function change(int $size): self
    {
        return new self($size);
    }
}