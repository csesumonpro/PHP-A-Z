<h2>Comments</h2>
<hr>
<p>
    PHP supports 'C', 'C++' and Unix shell-style (Perl style) comments. For example:

</p>
<?php
echo 'This is a test'; // This is a one-line c++ style comment
/* This is a multi line comment
   yet another line of comment */
echo 'This is yet another test';
echo 'One Final Test'; # This is a one-line shell-style comment
?>

<p>The "one-line" comment styles only comment to the end of the line or the current block of PHP code, whichever comes first. This means that HTML code after // ... ?> or # ... ?> WILL be printed: ?> breaks out of PHP mode and returns to HTML mode, and // or # cannot influence that. If the asp_tags configuration directive is enabled, it behaves the same with // %> and # %>. However, the </script> tag doesn't break out of PHP mode in a one-line comment.</p>
