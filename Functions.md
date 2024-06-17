# Functions
Practise link here: https://www.udemy.com/course/php-from-scratch-course/learn/lecture/41057764#notes

## Challenge 1
```
   #Normal Function
    function farenheitToCelsius ($tempF){
        return ($tempF*5/9 -32);
    };
    echo('Regular function '.farenheitToCelsius(100));
    echo("\n");
    #Anon Function
    $baseTemp = 50;
    $ftc = function()use(&$baseTemp){
        return (($baseTemp-32) *5/9 );
    };
    
    echo('Anon function: '.$ftc());
    echo("\n");
    #Lambda Function
    $ftcLamda = fn()=>(($baseTemp-32) *5/9 );
    echo('Lambda Function: '.$ftcLamda());
    echo("\n");
```

## Challenge 2

```
function printNamesToUpperCase($names){
        foreach($names as $name){
            echo(strtoupper($name." ,"));
        }
    }
    
    $arrayNames= ["Jian","Tho","Emilia","Emma"];
    printNamesToUpperCase($arrayNames);
    echo("\n");
```


## Challenge 3

```
$sentence="The quick brown fox jumped over the lazy dog";
    
    function findLongestWord($sentence){
        $wordArray = explode(" ", $sentence);
        $longest = 0;
        $longestIdx=0;
        for($i=0 ; $i <count($wordArray); $i++){
            $curLen = strlen($wordArray[$i]);
            if ($curLen > $longest){
                $longest = $curLen;
                $longestIdx = $i;
            }

        }
        return $wordArray[$longestIdx];
    }
    
    echo("The longest words in the sentence={".$sentence."} is={".findLongestWord($sentence)."} \n");
```
