<?php 
//5 11 10 17


function DoTheStuffIamTheStuff($text){ 
 $wordcounterarr = array();
 $text = Job17($text,$wordcounterarr);
 $text = Job5($text);
 $text = Job10($text);
 $text = Task11($text);
 return $text;
}

/*  Тире, вставленное минусом между двумя пробелами заменять на среднее тире (&ndash;), двойной
/*  минуc между пробелами заменять на &mdash; и привязывать его к предыдущему слову неразрывным
/*  пробелом. */
function Job5($text){
    $text = preg_replace('/(\s-\s)/u',"&nbsp;&ndash; ",$text);
    $text = preg_replace('/(\s--\s)/u','&nbsp;&mdash; ', $text); 
    return $text;
};

function Job10($text)
{
$stripped = strip_tags($text);
$arr = preg_split("/(\.)/ui",$stripped);
$max_str ="";
foreach($arr as $str){
if(strlen($str)>strlen($max_str))
$max_str=$str;
}
$max_str = mb_substr($max_str,0,80);
$arr = preg_split("/(\s)/ui",$max_str);
$res = preg_replace("/(".$arr[count($arr)-2]."\s".$arr[count($arr)-1].")/ui","<a href='#linker'>".$arr[count($arr)-2]." ".$arr[count($arr)-1]."...</a>",$max_str);
$text = preg_replace("/".$arr[count($arr)-2]."(?=\s".$arr[count($arr)-1].")/ui","<p id='linker'>".$arr[count($arr)-2]."</p>",$text);
$text = $res."<br><br><br>".$text;
return $text;
}

 function  Task11($text){
	$dom = new DOMDocument();
	$page = $dom->loadHTML($text);
	$headers1 = $dom->getElementsByTagName('h1');
	$headers2 = $dom->getElementsByTagName('h2');
	$headers3 = $dom->getElementsByTagName('h3');
	$a=0;$b=0;$c=0;

	$pattern = '#\s?<h[123][^>]*>(.*?)</h[123][^>]*>\s?#';
	preg_match_all($pattern, $text, $matches);
	$pattern1 = '#\s?<h[1][^>]*>(.*?)</h[1][^>]*>\s?#';
	$pattern2 = '#\s?<h[2][^>]*>(.*?)</h[2][^>]*>\s?#';
	$pattern3 = '#\s?<h[3][^>]*>(.*?)</h[3][^>]*>\s?#';
	echo "<ul>";
	foreach($matches as $item){
		for($i=0;$i<count($item);$i++){
			if(preg_match($pattern1, $item[$i])){
				echo "<li><a href='#ref-". $i ."'>" . $item[$i] . "</a></li>";
				$headers1[$a]->removeAttribute('id');
				$headers1[$a]->setAttribute('id', "ref-$i");
				$a++;
			} else if(preg_match($pattern2, $item[$i])){
				echo "<ul><li><a href='#ref-". $i ."'>" . $item[$i] . "</a></li></ul>";
				$headers2[$b]->removeAttribute('id');
				$headers2[$b]->setAttribute('id', "ref-$i");
				$b++;
			} else if(preg_match($pattern3, $item[$i])) {
				echo "<ul><ul><li><a href='#ref-". $i ."'>" . $item[$i] . "</a></li></ul></ul>";
				$headers3[$c]->removeAttribute('id');
				$headers3[$c]->setAttribute('id', "ref-$i");
				$c++;
			}
		}
	}
	return $text;
}


// 17 - Подсветить в тексте технические повторы. Если дважды подряд вставлено одно и то же слово,
// второе вхождение должно быть подсвечено желтым фоном. Если слово вставлено 3, 4, более раз
// подряд, все вхождения после первого подсвечиваются.

function Job17($text,&$wordcounterarr){
	$cleanedtext = strip_tags($text);
	$cleanedtext = preg_replace("/(\&nbsp\;)|(\&ndash\;)/ui"," ",$cleanedtext);
	$words = preg_split('/([^\w+]+|\bно\b|\bв\b|\bесли\b|\bи\b|\bпо\b|\bа\b|\bже\b|\d+|\b\w{1,3}\b)/ui',mb_strtolower($cleanedtext));
	foreach ($words as $word){
	if(empty($word)) continue;
	if(!isset($wordcounterarr[$word])) {
	$wordcounterarr[$word]=1; continue;}
	if($wordcounterarr[$word]==1){
	$text = preg_replace('/((?<=('.$word.'\W)|('.$word.'\W{2}))(?<!\>)\b'.$word.'\b)/ui', '<my-yellow>'.$word.'</my-yellow>' ,$text);
	}
	$wordcounterarr[$word]++;
	}
	return $text;
	}