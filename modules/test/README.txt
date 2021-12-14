Massive Calculator Test Suite
----------------------------------------------

If your function returns an array with 2 strings then the test should compare the 2 string array.

If your function returns an array with an integer and a string then in order to eliminate the rounding errors
of the computer in the integer section, use the calculation itself in the integer section and then the proper string in the 
string section.

With any rounding that you do then you don't need to do the calculation in the comparable test. If you are using the prec method from the FormulaBase class then your integer will be rounded and then converted to a string.

If you are doing some square root calculations, then your function should have a try/catch block. in order to test this 
function properly you will need to have a test that will return an integer that is above 0 with the proper string in the array 
and test to make sure that the caught exception displays the proper error message for anything that is less than 0 for the square
root.

If your return integer is less than 5 decimal places you dont need to do the calculation in the comaparable array.
