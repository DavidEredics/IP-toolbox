<?php

require_once('IpToolbox.php');

$iptoolbox = new IpToolbox;

$ip =(isset($_SERVER['HTTP_X_FORWARDED_FOR']) ? $_SERVER['HTTP_X_FORWARDED_FOR'] : $_SERVER['REMOTE_ADDR']);
$iptoolbox->setIp($ip);

if (isset($_GET['q1'])) {
  switch ($_GET['q1']) {
    case 'json':
      header('Content-Type: application/json');
      if (isset($_GET['q2'])) {
        switch ($_GET['q2']) {
          case 'ip':
            $json = ['ip' => $iptoolbox->ip()];
            break;
          default:
            $json = ['ip' => $iptoolbox->ip()];
            break;
        }
      } else {
        $json = ['ip' => $iptoolbox->ip()];
      }
      echo json_encode($json);
      break;
    case 'ip':
      header('Content-Type: text/plain');
      echo $iptoolbox->ip();
      break;
    default:
      header('Content-Type: text/plain');
      echo $iptoolbox->ip();
      break;
  }
} else {
  header('Content-Type: text/plain');
  echo $iptoolbox->ip();
}
