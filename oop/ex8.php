<?php
class domain {
  protected static function getWebsiteName() {
    return "example";
  }
}

class domainWeb extends domain {
  public $websiteName;
  public function __construct() {
    $this->websiteName = parent::getWebsiteName();
  }
}

$domainWeb = new domainWeb;
echo $domainWeb -> websiteName;
?>