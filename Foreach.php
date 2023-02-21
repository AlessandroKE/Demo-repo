<?php

$articles=["First post","Another post","Read this!"];
//The foreach loop iterates through each element of the $articles array and assigns it to the variable $article. 
//Then, the echo statement outputs the value of $article, followed by a comma and a space.
foreach ($articles as $article) {
    echo $article, ", ";
}
//OUTPUT:
//First post, Another post, Read this!, 


