<?php

namespace Menkaff\Sudoku\Validators;

use Menkaff\Sudoku\Entities\Sudoku;

class Validator
{

    public function validate(Sudoku $sudoku)
    {
        if ($this->validateFlatArray($sudoku->getRows())
            && $this->validateFlatArray($sudoku->getColumns())
            && $this->validateFlatArray($sudoku->getBoxes())) {
            return true;
        }
        return false;
    }

    private function validateFlatArray(array $flatArray)
    {
        for ($row = 0; $row < 9; $row++) {
            sort($flatArray[$row]);

            for ($column = 0; $column < 8; $column++) {
                $number = $flatArray[$row][$column];
                $nextNumber = $flatArray[$row][$column + 1];

                if ($number == $nextNumber) {
                    return false;
                }

                if (
                    !is_int($number)
                    ||
                    $number <= 0
                    ||
                    !($number && $number < 10)

                ) {
                    return false;
                }

            }
        }

        return true;
    }
}
