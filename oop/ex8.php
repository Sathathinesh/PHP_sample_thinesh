<?php
class Domain {
  protected static function getWebsiteName() {
    return "example";
  }
}

class DomainWeb extends Domain {
  public $websiteName;
  public function __construct() {
    $this->websiteName = parent::getWebsiteName();
  }
}

$domainWeb = new DomainWeb;
echo $domainWeb -> websiteName;
?>