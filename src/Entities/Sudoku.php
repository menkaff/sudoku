<?php

namespace Menkaff\Sudoku\Entities;

use Menkaff\Sudoku\Factories\Factory;

class Sudoku
{

    private $rows;
    private $columns;
    private $boxes;
    private $factory;

    public function __construct(Factory $factory)
    {
        $this->factory = $factory;
    }

    public function build(array $array)
    {
        $this->rows = $this->factory->makeRows($array);
        $this->columns = $this->factory->makeColumns($array);
        $this->boxes = $this->factory->makeBoxes($array);
    }

    public function getRows(): array
    {
        return $this->rows;
    }

    public function getColumns(): array
    {
        return $this->columns;
    }

    public function getBoxes(): array
    {
        return $this->boxes;
    }
}
