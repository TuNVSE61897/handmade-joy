
<?php



function checkEntrustEventEnough(array $numMat, $course, array $stat, $timeAFK) {

	    switch ($course) {
		case 'None':
            break;
        case 'Joy Bell':
				$numMat[0] = $numMat[0]+ceil($timeAFK/($stat[0]*30));
			break;
        case 'Joy Doll':
				$numMat[1] = $numMat[1]+ceil($timeAFK/($stat[0]*30));
            break;
        case 'Grace Bell':
				$numMat[2] = $numMat[2]+ceil($timeAFK/($stat[1]*15));
            break;
        case 'Grace Doll':
				$numMat[3] = $numMat[3]+ceil($timeAFK/($stat[1]*15));
            break;
		case 'Bravery Bell':
				$numMat[4] = $numMat[4]+ceil($timeAFK/($stat[2]*5));
        break;
		case 'Bravery Doll':
				$numMat[5] = $numMat[5]+ceil($timeAFK/($stat[2]*5));
            break;
		case 'Ink Bell':
				$numMat[6] = $numMat[6]+ceil($timeAFK/($stat[3]*1));
            break;
		case 'Ink Doll':
				$numMat[7] = $numMat[7]+ceil($timeAFK/($stat[3]*1));
            break;
		case 'Club':
				$numMat[0] = $numMat[0]-((ceil($timeAFK/114)-1)*2);
				$numMat[2] = $numMat[2]-((ceil($timeAFK/114)-1)*5);
				$numMat[4] = $numMat[4]-((ceil($timeAFK/114)-1)*15);
				$numMat[6] = $numMat[6]-((ceil($timeAFK/114)-1)*75);
        break;
		case 'Ceremony':
				$numMat[1] = $numMat[1]-((ceil($timeAFK/74)-1)*2);
				$numMat[3] = $numMat[3]-((ceil($timeAFK/74)-1)*3);
				$numMat[5] = $numMat[5]-((ceil($timeAFK/74)-1)*8);
				$numMat[7] = $numMat[7]-((ceil($timeAFK/74)-1)*40);
            break;
		case 'Advertise':
				$numMat[1] = $numMat[1]-((ceil($timeAFK/120)-1)*4);
				$numMat[2] = $numMat[2]-((ceil($timeAFK/120)-1)*8);
            break;
		case 'Fun':
				$numMat[0] = $numMat[0]-((ceil($timeAFK/90)-1)*3);
				$numMat[3] = $numMat[3]-((ceil($timeAFK/90)-1)*6);
            break;
		case 'Help':
				$numMat[5] = $numMat[5]-((ceil($timeAFK/63)-1)*14);
				$numMat[6] = $numMat[6]-((ceil($timeAFK/63)-1)*70);
        break;
		case 'Business':
				$numMat[4] = $numMat[4]-((ceil($timeAFK/40.5)-1)*9);
				$numMat[7] = $numMat[7]-((ceil($timeAFK/40.5)-1)*45);
            break;
		case 'Advance Leisure':
				$numMat[0] = $numMat[0]-((ceil($timeAFK/84)-1)*2);
				$numMat[1] = $numMat[1]-((ceil($timeAFK/84)-1)*2);
            break;
		case 'Advance Social':
				$numMat[2] = $numMat[2]-((ceil($timeAFK/63)-1)*3);
				$numMat[3] = $numMat[3]-((ceil($timeAFK/63)-1)*3);
            break;
		case 'Advance Fight':
				$numMat[4] = $numMat[4]-((ceil($timeAFK/52)-1)*8);
				$numMat[5] = $numMat[5]-((ceil($timeAFK/52)-1)*8);
        break;
		case 'Advance Literature':
				$numMat[6] = $numMat[6]-((ceil($timeAFK/23.5)-1)*18);
				$numMat[7] = $numMat[7]-((ceil($timeAFK/23.5)-1)*18);
            break;
		case 'Medium Leisure':
				$numMat[0] = $numMat[0]-((ceil($timeAFK/60)-1)*2);
            break;
		case 'Medium Social':
				$numMat[3] = $numMat[3]-((ceil($timeAFK/45)-1)*3);
            break;
		case 'Medium Fight':
				$numMat[5] = $numMat[5]-((ceil($timeAFK/28.5)-1)*6);
        break;
		case 'Medium Literature':
				$numMat[6] = $numMat[6]-((ceil($timeAFK/14.25)-1)*15);
            break;
		case 'Basic Fight':
				$numMat[4] = $numMat[4]-((ceil($timeAFK/5)-1)*1);
            break;
	    case 'Basic Literature':
				$numMat[7] = $numMat[7]-((ceil($timeAFK/3)-1)*3);
            break;
        default:
            break;
    }

    return $numMat;
}

function calItems(array $totalMat, $course, array $stat, $timeAFK) {

	    switch ($course) {
		case 'None':
            break;
        case 'Joy Bell':
				$totalMat[0] = $totalMat[0]+ceil($timeAFK/($stat[0]*30));
			break;
        case 'Joy Doll':
				$totalMat[1] = $totalMat[1]+ceil($timeAFK/($stat[0]*30));
            break;
        case 'Grace Bell':
				$totalMat[2] = $totalMat[2]+ceil($timeAFK/($stat[1]*15));
            break;
        case 'Grace Doll':
				$totalMat[3] = $totalMat[3]+ceil($timeAFK/($stat[1]*15));
            break;
		case 'Bravery Bell':
				$totalMat[4] = $totalMat[4]+ceil($timeAFK/($stat[2]*5));
        break;
		case 'Bravery Doll':
				$totalMat[5] = $totalMat[5]+ceil($timeAFK/($stat[2]*5));
            break;
		case 'Ink Bell':
				$totalMat[6] = $totalMat[6]+ceil($timeAFK/($stat[3]*1));
            break;
		case 'Ink Doll':
				$totalMat[7] = $totalMat[7]+ceil($timeAFK/($stat[3]*1));
            break;		
        default:
            break;
    }

    return $totalMat;
}

function checkStatBonus(array $inputStat) {
	
		$a = [ 1, 2, 3, 4 ];
		$outputStat = [1,1,1,1];

	    for($i = 0;$i < count($inputStat);$i++){
			switch ($inputStat[$i]) {
				case '0':
					$outputStat[$i] = 1;
					break;
				case '1':
					$outputStat[$i] = 1;
					break;
				case '2':
					$outputStat[$i] = 0.95;
					break;
				case '3':
					$outputStat[$i] = 0.95;
					break;
				case '4':
					$outputStat[$i] = 0.9;
					break;
				case '5':
					$outputStat[$i] = 0.9;
					break;	
				case '6':
					$outputStat[$i] = 0.85;
					break;	
				case '7':
					$outputStat[$i] = 0.8;
					break;
				case '8':
					$outputStat[$i] = 0.75;
					break;	
				default:
					break;
				}
			//echo $users[$i]."\n";
		}
		
		    return $outputStat;
		
    }

/*$folderName = 'avas';

if (file_exists($folderName)) {
    foreach (new DirectoryIterator($folderName) as $fileInfo) {
        if ($fileInfo->isDot()) {
            continue;
        }
        if ($fileInfo->isFile() && time() - $fileInfo->getCTime() >= 60 * 30) {
            unlink($fileInfo->getRealPath());
        }
    }
}*/

//    include 'PHPImage.php';

list($a, $b, $c) = ['a', 'b',  'c'];
list($numJoyB, $numJoyD, $numGraceB, $numGraceD, $numBraveB, $numBraveD, $numInkB, $numInkD) = [0,0,0,0,0,0,0,0];
$arrayMat = [$numJoyB, $numJoyD, $numGraceB, $numGraceD, $numBraveB, $numBraveD, $numInkB, $numInkD];

list($totalJoyB, $totalJoyD, $totalGraceB, $totalGraceD, $totalBraveB, $totalBraveD, $totalInkB, $totalInkD) = [0,0,0,0,0,0,0,0];
$arrayTotalMat = [$totalJoyB, $totalJoyD, $totalGraceB, $totalGraceD, $totalBraveB, $totalBraveD, $totalInkB, $totalInkD];
$warn = "ok?";

//Get stats of heirs and check bonus
list($joy1, $grace1, $brave1, $ink1) = checkStatBonus(array($_GET["joy1"],$_GET["grace1"],$_GET["brave1"],$_GET["ink1"]));
list($joy2, $grace2, $brave2, $ink2) = checkStatBonus(array($_GET["joy2"],$_GET["grace2"],$_GET["brave2"],$_GET["ink2"]));
list($joy3, $grace3, $brave3, $ink3) = checkStatBonus(array($_GET["joy3"],$_GET["grace3"],$_GET["brave3"],$_GET["ink3"]));

//Get afk time
$timeAFK = $_GET["duration"];

//Get course list and check if entrust events are valid
$courseList1 = array($_GET["h1s1"],$_GET["h1s2"],$_GET["h1s3"]);
$courseList2 = array($_GET["h2s1"],$_GET["h2s2"],$_GET["h2s3"]);
$courseList3 = array($_GET["h3s1"],$_GET["h3s2"],$_GET["h3s3"]);
foreach ($courseList1 as $course1) {
        $arrayMat = checkEntrustEventEnough($arrayMat, $course1, array($joy1, $grace1, $brave1, $ink1), $timeAFK);
}
foreach ($courseList2 as $course2) {
        $arrayMat = checkEntrustEventEnough($arrayMat, $course2, array($joy2, $grace2, $brave2, $ink2), $timeAFK);
}
foreach ($courseList3 as $course3) {
        $arrayMat = checkEntrustEventEnough($arrayMat, $course3, array($joy3, $grace3, $brave3, $ink3), $timeAFK);
}

//Create Warning
$warn = "";
if ($arrayMat[0] < 0) {
	$warn = $warn . "Not enough Joy Bell for Entrusted Event. <br>";
}
if ($arrayMat[1] < 0) {
	$warn = $warn . "Not enough Joy Doll for Entrusted Event. <br>";
}
if ($arrayMat[2] < 0) {
	$warn = $warn . "Not enough Grace Bell for Entrusted Event. <br>";
}
if ($arrayMat[3] < 0) {
	$warn = $warn . "Not enough Grace Doll for Entrusted Event. <br>";
}
if ($arrayMat[4] < 0) {
	$warn = $warn . "Not enough Bravery Bell for Entrusted Event. <br>";
}
if ($arrayMat[5] < 0) {
	$warn = $warn . "Not enough Bravery Doll for Entrusted Event. <br>";
}
if ($arrayMat[6] < 0) {
	$warn = $warn . "Not enough Ink Bell for Entrusted Event. <br>";
}
if ($arrayMat[7] < 0) {
	$warn = $warn . "Not enough Ink Doll for Entrusted Event. <br>";
}

foreach ($courseList1 as $course1) {
        $arrayTotalMat = calItems($arrayTotalMat, $course1, array($joy1, $grace1, $brave1, $ink1), $timeAFK);
}
foreach ($courseList2 as $course2) {
        $arrayTotalMat = calItems($arrayTotalMat, $course2, array($joy2, $grace2, $brave2, $ink2), $timeAFK);
}
foreach ($courseList3 as $course3) {
        $arrayTotalMat = calItems($arrayTotalMat, $course3, array($joy3, $grace3, $brave3, $ink3), $timeAFK);
}

$toyLock = $arrayTotalMat[0]*300 + $arrayTotalMat[2]*150 + $arrayTotalMat[4]*50 + $arrayTotalMat[6]*10;
$toyBlock = $arrayTotalMat[1]*120 + $arrayTotalMat[3]*60 + $arrayTotalMat[5]*10 + $arrayTotalMat[7]*2;
$joyCloth = $arrayTotalMat[0]*15 + $arrayTotalMat[1]*12;
$graceCloth = $arrayTotalMat[2]*10 + $arrayTotalMat[3]*8;
$braveCloth = $arrayTotalMat[4]*5 + $arrayTotalMat[5]*5;
$inkCloth = $arrayTotalMat[6]*2 + $arrayTotalMat[7]*2;

$calMsg = "You will need: <br> $toyLock Toy Lock, $toyBlock Toy Block, <br> $joyCloth Joy Cloth, $graceCloth Grace Cloth, <br> $braveCloth Bravery Cloth, $inkCloth Ink Cloth";

$result = $warn . "<br><br>" . $calMsg;

/*
//getOptions($_GET["optionsSkins"], $_GET["optionsFaces"], $_GET["optionsHairs"], $_GET["optionsHairColors"], $_GET["scarf"], $_GET["letter"]);
$haveGlass = $_GET["glass"];
$shirt = rand(1, 6); //choose random shirt
//define the width and height of our images
define("WIDTH", 1000);
define("HEIGHT", 1000);
$dest_image = imagecreatetruecolor(WIDTH, HEIGHT);

//make sure the transparency information is saved
imagesavealpha($dest_image, true);

//create a fully transparent background (127 means fully transparent)
$trans_background = imagecolorallocatealpha($dest_image, 0, 0, 0, 127);

//fill the image with a transparent background
imagefill($dest_image, 0, 0, $trans_background);

//take create image resources out of the 3 pngs we want to merge into destination image
$bgPath = 'images/background-xmas.jpg';
$skinPath = 'images/skin/' . $skin . '.png';
$letterPath = 'images/letter/' . $letter . '.png';
$facePath = 'images/face/' . $face . '.png';
$hairPath = 'images/hair/' . $hair . '.png';
$shirtPath = 'images/shirt/' . $shirt . '.png';
$scarfPath = 'images/scarf/' . $scarf . '.png';

switch ($color) {
    case 'blonde':
        $rgb = array(255 - 250, 255 - 246, 255 - 189);
        //   $rgb = array(250, 246, 189);
        break;
    case 'red':
        $rgb = array(255 - 228, 255 - 77, 255 - 46);
        // $rgb = array(228, 77, 46);
        break;
    case 'pink':
        $rgb = array(255 - 211, 255 - 3, 255 - 111);
        // $rgb = array(212, 71,153);
        break;
    case 'cyan':
        $rgb = array(255 - 101, 255 - 199, 255 - 198);
        // $rgb = array(101, 199,198);
        break;
    case 'black':
        $rgb = array(255 - 30, 255 - 30, 255 - 30);
        break;
     case 'brown':
        $rgb = array(255 - 119, 255 - 59, 255 - 50);
        break;
     case 'purple':
        $rgb = array(255 - 111, 255 - 43, 255 - 144);
        break;
    default:
        $rgb = array(255 - 250, 255 - 246, 255 - 189);
        break;
}

//create image
$bgImg = imagecreatefromjpeg($bgPath);
$shirtImg = imagecreatefrompng($shirtPath);
$skinImg = imagecreatefrompng($skinPath);
$letterImg = imagecreatefrompng($letterPath);
$faceImg = imagecreatefrompng($facePath);
$scarfImg = imagecreatefrompng($scarfPath);
$hairImg = imagecreatefrompng($hairPath);

//change hair color
//$rgb = array(255-$rgb[0],255-$rgb[1],255-$rgb[2]);
imagefilter($hairImg, IMG_FILTER_NEGATE);
imagefilter($hairImg, IMG_FILTER_COLORIZE, $rgb[0], $rgb[1], $rgb[2]);
imagefilter($hairImg, IMG_FILTER_NEGATE);
imagealphablending($hairImg, false);
imagesavealpha($hairImg, true);

//copy each png file on top of the destination (result) png
imagecopy($dest_image, $bgImg, 0, 0, 0, 0, WIDTH, HEIGHT);
imagecopy($dest_image, $shirtImg, 0, 0, 0, 0, WIDTH, HEIGHT);
imagecopy($dest_image, $skinImg, 0, 0, 0, 0, WIDTH, HEIGHT);
imagecopy($dest_image, $letterImg, 0, 0, 0, 0, WIDTH, HEIGHT);
imagecopy($dest_image, $faceImg, 0, 0, 0, 0, WIDTH, HEIGHT);
imagecopy($dest_image, $scarfImg, 0, 0, 0, 0, WIDTH, HEIGHT);

//Have glass
if ($haveGlass == "yes") {
    $glassPath = 'images/glass/glass.png';
    $glassImg = imagecreatefrompng($glassPath);
    imagecopy($dest_image, $glassImg, 0, 0, 0, 0, WIDTH, HEIGHT);
}

imagecopy($dest_image, $hairImg, 0, 0, 0, 0, WIDTH, HEIGHT);

$datetime = new DateTime();
$result = $datetime->format('Y-m-d H:i:s');
$result = str_replace(":", "", $result);
$result = str_replace(" ", "_", $result);

$path = "avas/" . $result . ".png";

//send the appropriate headers and output the image in the browser
header('Content-Type: image/png');

imagepng($dest_image, $path);
//imagedestroy($im);
//destroy all the image resources to free up memory
//imagedestroy($bgImg);
imagedestroy($skinImg);
imagedestroy($faceImg);
imagedestroy($hairImg);
imagedestroy($shirtImg);
imagedestroy($scarfImg);
imagedestroy($dest_image);

//      $image = new PHPImage();
//     $image->draw($path);
//    $image->save($path, false, true);
*/
echo nl2br($result);
?>
