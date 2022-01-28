<?php

namespace Menkaff\Sudoku\Tests;

use Menkaff\Sudoku\Entities\Sudoku;
use Menkaff\Sudoku\Factories\Factory;
use Menkaff\Sudoku\Validators\Validator;
use PHPUnit\Framework\TestCase;

class SudokuTest extends TestCase
{
    public function testCanValidateValidSudoku(): void
    {
        $sudokuArray = [
            [1, 8, 2, 5, 4, 3, 6, 9, 7],
            [9, 6, 5, 1, 7, 8, 3, 4, 2],
            [7, 4, 3, 9, 6, 2, 8, 1, 5],
            [3, 7, 4, 8, 9, 6, 5, 2, 1],
            [6, 2, 8, 4, 5, 1, 7, 3, 9],
            [5, 1, 9, 2, 3, 7, 4, 6, 8],
            [2, 9, 7, 6, 8, 4, 1, 5, 3],
            [4, 3, 1, 7, 2, 5, 9, 8, 6],
            [8, 5, 6, 3, 1, 9, 2, 7, 4],
        ];
        $factory = new Factory();

        $sudoku = new Sudoku($factory);
        $sudoku->build($sudokuArray);
        $sudokuValidator = new Validator();
        $this->assertTrue($sudokuValidator->validate($sudoku));

    }

    public function testCantValidateInvalidSudoku(): void
    {
        $sudokuArray = [
            [1, 8, 2, 5, 4, 3, 6, 9, 7],
            [9, 6, 5, 1, 7, 8, 3, 4, 2],
            [7, 4, 3, 9, 6, 2, 8, 1, 5],
            [3, 7, 4, 8, 9, 6, 5, 2, 1],
            [6, 2, 8, 4, 5, 1, 7, 3, 9],
            [5, 1, 9, 2, 3, 7, 4, 6, 8],
            [2, 9, 7, 6, 8, 4, 1, 5, 3],
            [4, 3, 1, 7, 2, 5, 9, 8, 6],
            [8, 5, 6, 3, 1, 9, 8, 7, 4],
        ];
        $factory = new Factory();

        $sudoku = new Sudoku($factory);
        $sudoku->build($sudokuArray);
        $sudokuValidator = new Validator();
        $this->assertFalse($sudokuValidator->validate($sudoku));

    }

}
