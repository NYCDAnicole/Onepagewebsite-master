<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Web 3 Example 7 PHP</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
</head>

<body>

<?php
      
       // Any PHP script is built out of a series of statements.
       // A statement can be an assignment, a function call,
       // a loop, a conditional statement, or even a statement that
       // does nothing (an empty statement). Statements usually
       // end with a semicolon. In addition, statements can be grouped
       // into a statement-group by encapsulating a group of
       // statements with curly braces.
      
       // “If” statements let your PHP scripts make decisions.
       // We'll start off with a few simple examples. These
       // will illustrate how I will use “if” statements for
       // the rest of the semester. 
      
       // In PHP, the “if” statement can be written in a few different
       // ways. I will always use the same form for every example
       // I create this semester. I mention this as you may see other
       // PHP code using “if” statements that look a little different
       // from what I am presenting.
      
       // I am going to stick with the same form to keep things
       // simple and avoid confusion. As long as the “if” statements
       // look the same, you need to know only one
       // form this semester, so this should make it easier for you to follow.
      
       // All of the “if” statements this should semester should
       // look like this:
       // if ( expression ) {
    //               ...code statements...
       // }
      
       // Unless they look like this:
       // if ( expression ) {
    //               ...code statements true...
       // } else {
       //            ...code statements false...
       // }
      
       // Examine these closely. Where it says expression, we will
       // write code that will be evaluated by PHP. If the expression
       // is true, PHP will execute the code statements found between
       // the curly brackets following if.
      
       // If the expression is false, the script skips the code in the
       // curly brackets.
      
       // In the second example, which includes "else," if the expression
       // is false, PHP executes the code found in the curly brackets
       // following "else."
      
       // The first example allows PHP to execute a single block of
       // code only if an expression is true; otherwise the code
       // is ignored.
       // The second example executes the first block of code if
       // the expression is true and alternately executes the
       // second block of code if the expression is false.
      
       // Here are a few examples to illustrate:
      
       // If the variables $a and $b are equal echo a message.
       // The double equal (==) means comparison equal. This symbol,
       // which is both characters together without a space, asks
       // the question "Are the values on either side the same?"
       // The single equal sign (=) is the assignment operator; it sets
       // a value! Using the single equal sign here would not work,
       // and it would set the value of $a to the value of $b.
       // if ( $a == $b ) {
       //            echo "A and B are equal";
       // }
      
       // Here I have used the rand() function to generate a random
       // number between 0 and 1, and put that value into $n.
       // Next, the “if” statement looks at the value generated and
       // echos heads or tails depending on the value.
      
       // $n = rand( 0, 1 );
       // if ( $n == 1 ) {
       //            echo "Heads";
       // } else {
       //            echo "tails";
       // }
      
       // Here I have used the assignment operator (=) to set the
       // value of $n, and the comparison operator (==) to compare
       // the value of $n to another value (1).
      
      
?>

<hr />
<p><a href="http://www.php.net/manual/en/language.control-
structures.php#control-structures.if">If</a></p>
</body>
</html>