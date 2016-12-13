<?php
namespace Nagahshi\Monsternizer;
class Avatar
{

  private $host;
  private $param;

  function __construct()
  {
    $this->host = 'https://www.gravatar.com/avatar/';
    $this->param = '?d=monsterid';
  }

  public function getImage($email)
  {
    try {
      if(!$email) throw new Exception("Error cannot get image in gravatar", 1);
      if(!filter_var($email, FILTER_VALIDATE_EMAIL)) throw new Exception("is not a valid email ", 1);
      $encoded = md5(strtolower(trim($email)));
      return file_get_contents($this->host.$encoded.$this->param);
    } catch (Exception $e) {
      return $e->getMessageBag();
    }
  }

}
