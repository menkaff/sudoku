
## PHP Sudoku Test

  

The classical Sudoku is a game, where the player needs to fill the gaps in a matrix of numbers in a way that three constraints are met:

Every number between 1 and 9 can only be present exactly once in each of the

  

* nine rows

* nine columns

* nine 3x3 boxes

### Document

Fill your data as each line is a row of your solved sudoku

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
Then make an instance of the Factory of this package and build the Sudoku entity as below : 

    $factory =  new  Factory();
    
    $sudoku =  new  Sudoku($factory);
    $sudoku->build($sudokuArray);

And finally validate that solved sudoku is correct or not!

    $sudokuValidator =  new  Validator();
    
    if ($sudokuValidator->validate($sudoku)) {
    echo  "true \n";
    } else {
    echo  "false \n";
    }
