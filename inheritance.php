<?php

namespace inheritance;

abstract class  Computer {
	private $operatingSystem;
	
	public abstract  function getName(); 

	public function setOperatingSystem($operatingSystem) {
		$this->$operatingSystem;
	}

	public function getOperatingSystem() {
		return $this->$operatingSystem;
	}
}

class Workstation extends Computer {

	function __construc() {
		echo "Constructor called for Workstation\n";	
	}

	public function getName() {
		echo "This is a Workstation\n";
	}

	protected function upgradeOS($name, $id, $version) {
		echo "This is a protected method - ";
		echo "Upgrading " , $name , " to version " , $version  , "\n";
	}

	public function getSystemDetails() {
		$this->getMotherBoardDetails();
		$this->getRAMDetails();
		$this->getProcessorDetails();
	}

	private function getProcessorDetails() {
		echo "This is private method for getting Processor details\n";
	}

	private function getRAMDetails() {
		echo "This is private method for getting RAM details\n";
	}

	private function getMotherBoardDetails() {
		echo "This is private method for getting MotherBoard\n";
	}
}

class Server extends Computer {
	
	protected $hardwareConfiguration;

	protected $serverName;

        public function getServerName() {
                return $this->serverName;
        }

        public function setServerName($serverName) {
		echo "Called from setServerName from Server class\n";
		$this->serverName = $serverName;
        }

	public function setHardWareConfiguration($hardware) {
		$this->hardwareConfiguration = $hardware;
	}

	public function getHardwareConfiguration() {
		return $this->hardwareConfiguration;
	}

        public function getName() {
                echo "This is a Server\n";
        }
}

class Mac extends Workstation {
	private static $instances = 0;

	private $id;

	public function setId($id) {
		$this->id = $id;
	}

	public function getId() {
		return $this->id;
	}

	public function __construct() {
       		self::$instances++;
		echo "Created ", self::$instances , " for Mac\n";
		$this->id = rand();
	}

	public static function getMacCount() {
		return self::$instances;
	}
 
	public function getName() {
		echo "This is a Mac\n";
	}

	public function upgradeMacOS($version) {
		$this->upgradeOS("MacOS", $this->id, $version);
	}
}

class PC extends Workstation {
	public function getName() {
                echo "This is a PC\n";
        }
}

class WebServer extends Server {
        public function getName() {
                echo "This is a WebServer\n";
        }

        public function setServerName($serverName) {
		echo "Called from WebServer class\n";
		parent::setServerName($serverName);
        }
}

class DatabaseServer extends Server {
        public function getName() {
                echo "This is a Database Server\n";
        }

        public function setServerName($serverName) {
                $this->serverName = $serverName;
        }
}

?>
