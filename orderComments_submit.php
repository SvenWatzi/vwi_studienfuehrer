<?php

include "saveSubjectToVariable.php";

?>

<?php

if($_POST['commentorder'] == "date_newFirst"){
	echo ("<SCRIPT LANGUAGE='JavaScript'>window.location.href='index.php?subject=$subject&sortBy=dateDESC';</SCRIPT>");
}

if($_POST['commentorder'] == "date_newLast"){
	echo ("<SCRIPT LANGUAGE='JavaScript'>window.location.href='index.php?subject=$subject&sortBy=dateASC';</SCRIPT>");
}

if($_POST['commentorder'] == "rating_bestFirst"){
	echo ("<SCRIPT LANGUAGE='JavaScript'>window.location.href='index.php?subject=$subject&sortBy=ratingASC';</SCRIPT>");
}

if($_POST['commentorder'] == "rating_worstFirst"){
	echo ("<SCRIPT LANGUAGE='JavaScript'>window.location.href='index.php?subject=$subject&sortBy=ratingDESC';</SCRIPT>");
}

?>