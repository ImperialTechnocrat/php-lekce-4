<?php
function saySomething()
{
echo 'hi!';
return true;
}

if (false && saySomething())
{
echo 'statement evaluated to true';
}