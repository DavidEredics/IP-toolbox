<?php

class IpToolbox
{
  private $ip;

  function setIp($ip) {
    if (strstr($ip, ', ')) {
      $ips = explode(', ', $ip);
      $ip = $ips[0];
    }
    $this->ip = $ip;
  }

  function ip() {
    return $this->ip;
  }
  
  function hostname() {
    return gethostbyaddr($this->ip);
  }

}
