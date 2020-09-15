<?php

class Hoover
{
    public function getContent($url) {
        $content = NULL;
        // if the content is null
        if(!$content) {
            // if our url string does not begin with 'http'
            if(stripos($url, 'http') !== 0) {
                // then we add to the url 'http://'
                $url = 'http://' . $url;
            }

            // we create a new instance of the DOMDocument class
            $content = new DOMDocument('1.0', 'utf-8');
            // we set the preserveWhiteSpace property of our
            // content object to false
            $content -> preserveWhiteSpace = FALSE;
            // we use @ to suppress warnings generated from
            // improperly configurated web pages
            // we load the HTML file indicated by $url
            @$content -> loadHTMLFile($url);

        }
        // we return the content that we got from $url
        return $content;
    }

    public function getElementsByTagName($url, $tag) {
        $count = 0;
        // We make an array with values of tags and attributes (name and value)
        $result = [];
        // We apply the getElementsByTagName() method on an instance of the
        // DOMDocument class.
        // getElementsByTagName - Searches for all elements with given local
        // tag name. This method returns a new instance of class DOMNodeList
        // containing all the elements with a given local tag name.
        $elements = $this -> getContent($url)
                            -> getElementsByTagName($tag);
        // We iterate over the nodes in $elements
        foreach($elements as $node) {
            // We get the value of the tag
            // '/\s+/' = we replace one or more witespaces with ' ' in $node -> nodeValue
            // We also eliminate whitespaces from the start/end'  word    ' using trim()
            $result[$count]['value'] = trim(preg_replace('/\s+/', ' ', $node -> nodeValue));
            // If the node has attributes, we make an array with them
            if($node -> hasAttributes()) {
                foreach($node -> attributes as $name => $attr) {
                    // We assign to the array the name of the attribute as key
                    // and value of the attribute as value
                    $result[$count]['attributes'][$name] = $attr -> value;
                }
            }
            // We move to the next element
            $count++;
        }
        // We return the array of tags
        return $result;
    }

    public function getAttribute($url, $attr) {
        // Array with values of the attribute
        $result = [];
        // We retrieve all the elements with the given tag name
        // * means all elements within the element tree
        $elements = $this -> getContent($url)
                            -> getElementsByTagName('*');
        // We iterate over the nodes in $elements
        foreach($elements as $node) {
            // If the node has the attribute we specified
            if($node -> hasAttribute($attr)) {
                // We retrieve the value of the attribute
                $value = $node -> getAttribute($attr);
                $result[] = trim($value);
            }
        }
        // We return an array with values of the attribute
        return $result;
    }
}

define('DEFAULT_URL', 'http://www.imdb.com');
define('DEFAULT_TAG', 'a');

$scan = new Hoover();
$url = strip_tags($_GET['url'] ?? DEFAULT_URL);
$tag = strip_tags($_GET['tag'] ?? DEFAULT_TAG);

echo 'Dump of Tags: ' . PHP_EOL;
// var_dump($scan -> getElementsByTagName($url, $tag));
var_dump($scan -> getAttribute($url, 'src'));



















