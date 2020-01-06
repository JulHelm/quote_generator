<?php  

// An array with all quotes is generated: (with tag category)
$quotes = [];
$quotes[] = [
        "quote" => "Life is a journey, not a destination.", 
        "source" => "Ralph Waldo Emerson", 
        "citation" => "...from the internet!", 
        "year" => "1322",
        "tag" => "wisom"];
$quotes[] = [
        "quote" => "It is not length of life, but depth of life", 
        "source" => "Ralph Waldo Emerson", 
        "citation" => "...from the internet!", 
        "year" => "1755",
        "tag" => "truth"];
$quotes[] = [
        "quote" => "Don't part with your illusions. When they are gone, you may still exist, but you have ceased to live.", 
        "source" => "Mark Twain", 
        "citation" => "...from the internet!", 
        "year" => "1890",];
$quotes[] = [
        "quote" => "It’s not about ideas. It’s about making ideas happen.", 
        "source" => "Scott Belsky", 
        "citation" => "fluentu.com", 
        "year" => "",];
$quotes[] = [
        "quote" => "Always deliver more than expected.", 
        "source" => "Larry Page", 
        "citation" => "", 
        "year" => "",];

$bg_colors = ["#36b55c", "red", "blue"];

// Function that randomly pickes a quote out of the array given and return it
function getRandomQuote($array){
    $random_number = rand(0, 4);
    return $array[$random_number];
}

// Function that prints the picked quote according to the quotes structure
function printQuote($array){
    $quote_object = getRandomQuote($array);
    $result = '
        <p class="quote">' . $quote_object["quote"] . '</p> 
        <p class="source">' . $quote_object["source"] . '</p>'; 
    if ($quote_object["citation"]) {
        $result = $result . '<span class="citation">' . $quote_object["citation"] . '</span>';
    }
    if ($quote_object["year"]) {
        $result = $result . '<span class="year">' . $quote_object["year"] . '</span>';
    }
    // added optional tag element to output if set
    if ($quote_object["tag"]) {
        $result = $result . '<span class="tag">' . $quote_object["tag"] . '</span>';
    }
    echo $result;
}

// Funtion to generate a random bg color from the array $bg_colors:
function new_bg_color($bg_colors){
    $random_number = rand(0, 2);
    return $bg_colors[$random_number];
}
