<?php
function balance(string $left, string $right): string
{
    $left = (substr_count($left, '!') * 2) + (substr_count($left, '?') * 3);
    $right = (substr_count($right, '!') * 2) + (substr_count($right, '?') * 3);

    switch($left <=> $right)
    {
        case -1:
            return 'Right';
        case 1:
            return 'Left';
        default:
            return 'Balance';
    }
}

print balance("!!","??");
print '</br>';
print balance("!??","?!!");
print '</br>';
print balance("!?!!","?!?") ;
print '</br>';
print balance("!!???!????","??!!?!!!!!!!");
