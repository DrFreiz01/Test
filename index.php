<!DOCTYPE html>
<html>
<head>
	<title>Site</title>
</head>
<body>

<?php 

final class Item {
	
	private $id;
	private $name;
	private $status;
	private $changed;

   function __construct() {
 	
   }

   public function init() {
    $object["name"] = "Vasay";
    $object["status"] = "Done";
    
	$this->name = $object["name"];
    $this->status = $object["status"];
   	}
   	
   	function __get($param) 
   	{
   	    return $this->$param;
   	}
   	
}

$admin = new Item();
$admin -> init();
echo $admin -> name;
	
$admin = new Item();
$admin -> init();
echo $admin -> status;
?>

 </body>
</html>
