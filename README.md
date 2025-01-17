# PHP fopen() Error Handling
This repository demonstrates a common error in PHP related to the `fopen()` function and provides a solution. The `bug.php` file shows an example of the error, while `bugSolution.php` presents a corrected version.

**Bug:** The code attempts to use the return value of `fopen()` without checking if it was successful (i.e. did not return false). This leads to problems if the file doesn't exist or is inaccessible.

**Solution:** Explicitly check the return value of `fopen()` to make sure it is a valid resource before proceeding. Use appropriate error handling to manage cases where file opening fails.