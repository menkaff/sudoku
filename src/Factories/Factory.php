<?php

namespace Menkaff\Sudoku\Factories;

class Factory
{
    public function makeRows(array $array): array
    {

        return $array;

    }

    public function makeColumns(array $array): array
    {
        $columns = [[], [], [], [], [], [], [], [], []];
        for ($i = 0; $i < 9; $i++) {
            for ($j = 0; $j < 9; $j++) {
                $columns[$i][] = $array[$j][$i];
            }
        }
        return $columns;
    }

    public function makeBoxes(array $array): array
    {
        $boxes = [[], [], [], [], [], [], [], [], []];
        $k = 0;
        for ($i = 0; $i < 9; $i++) {
            if ($i % 3 == 0 && $i != 0) {
                $k += 3;
            }

            for ($j = 0; $j < 3; $j++) {
                $boxes[$k][] = $array[$i][$j];
            }
            for ($j = 3; $j < 6; $j++) {
                $boxes[$k + 1][] = $array[$i][$j];
            }
            for ($j = 6; $j < 9; $j++) {
                $boxes[$k + 2][] = $array[$i][$j];
            }

        }
        return $boxes;
    }
}
