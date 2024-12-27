# PHP: Unexpected Behavior with NULL Function Parameters

This repository demonstrates a common error in PHP: unexpected behavior when function parameters are NULL. The `bug.php` file shows the initial code with the issue, while `bugSolution.php` provides a corrected version.

## Problem

In many PHP functions, not explicitly checking for NULL values before using them can lead to unexpected errors or incorrect results. This can be particularly problematic if your function performs calculations or operations that don't handle NULL values gracefully.

## Solution

The solution is to explicitly check for NULL values at the beginning of the function using strict comparison (`===`) to handle them appropriately (e.g., return NULL, throw an exception, or use a default value).