<?php

class IpToolbox
{
  public $ip;

  function set_ip($ip) {
    if (strstr($ip, ', ')) {
      $ips = explode(', ', $ip);
      $ip = $ips[0];
    }
    $this->ip = $ip;
  }

  function Ip() {
    header('Content-Type: text/plain');
    echo $this->ip;
  }

  function Json() {
    $json = ['ip' => $this->ip];
    header('Content-Type: application/json');
    echo json_encode($json);
  }
}

$iptoolbox = new IpToolbox;

$ip =(isset($_SERVER['HTTP_X_FORWARDED_FOR']) ? $_SERVER['HTTP_X_FORWARDED_FOR'] : $_SERVER['REMOTE_ADDR']);
$iptoolbox->set_ip($ip);

if (isset($_GET['q1'])) {
  switch ($_GET['q1']) {
    case 'json':
      if (isset($_GET['q2'])) {
        switch ($_GET['q2']) {
          case 'ip':
            $iptoolbox->Json();
            break;
          default:
            $iptoolbox->Json();
            break;
        }
      } else {
        $iptoolbox->Json();
      }
      break;
    case 'ip':
      $iptoolbox->Ip();
      break;
    default:
      $iptoolbox->Ip();
      break;
  }
} else {
  $iptoolbox->Ip();
}
