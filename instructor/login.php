<?
session_start();
If ($_SESSION["business_instructor"] !== "tempLogin"){
	if ($_POST["username"] !== "") {
		if ($_POST["username"] === "business" && $_POST["password"] === "analytics") {
			$_SESSION["business_instructor"] = "tempLogin";
			header('Location: http://www.depauw.edu/learn/econexcel/busanalytics/instructor/instructor_resources.php');		
		} else {
			$_SESSION["business_error"] === "Wrong Username or Password";
			echo "Wrong Username or Password";
		}
	} else{
		header('Location: http://www.depauw.edu/learn/econexcel/busanalytics/instructor/index.htm');
	}

} else {
	header('Location: http://www.depauw.edu/learn/econexcel/busanalytics/instructor/instructor_resources.php');
}

?>