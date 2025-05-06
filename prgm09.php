<?php

$books = array("The Great Gatsby"=> array("auther"=>"F. Scott Fitzgerald", "year"=>1925),
"The Catcher in the Rye"=> array("auther"=>"J.D. Salinger", "year"=>1951), 
"The To Kill a Mockingbird"=> array("auther"=>"Harper Lee", "year"=>1960),
"The 1984"=> array("auther"=>"George Orwell", "year"=>1949)
);

echo "The books in the array are:<br> <br>";

foreach($books as $book => $details){
    echo "Book: $book<br>";
    echo "Author: " . $details['auther'] . "<br>";
    echo "Year: " . $details['year'] . "<br><br>";
    // Displaying the details of each book
}


?>