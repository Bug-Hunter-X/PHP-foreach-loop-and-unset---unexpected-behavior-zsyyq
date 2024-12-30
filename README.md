# PHP foreach loop and unset() unexpected behavior

This repository demonstrates a common but subtle bug in PHP when using the `unset()` function within a `foreach` loop that iterates over an array.  Modifying the array during iteration can lead to unexpected results.  The code in `bug.php` shows the problematic behavior, while `bugSolution.php` provides a corrected version.

## Bug Description

When `unset()` is called on an element in a `foreach` loop, it removes the element from the array. This changes the array's internal structure and the loop's index. The next iteration will then skip the element that would have been next in the original array, thus potentially skipping elements.