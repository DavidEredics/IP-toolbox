<?php

require_once('IpToolbox.php');

$iptoolbox = new IpToolbox;

$ip =(isset($_SERVER['HTTP_X_FORWARDED_FOR']) ? $_SERVER['HTTP_X_FORWARDED_FOR'] : $_SERVER['REMOTE_ADDR']);
$iptoolbox->setIp($ip);

if (isset($_GET['q1']) && $_GET['q1'] != "") {
  switch ($_GET['q1']) {
    case 'json':
      header('Content-Type: application/json');
      if (isset($_GET['q2']) && $_GET['q2'] != "") {
        switch ($_GET['q2']) {
          case 'ip':
            $json = ['ip' => $iptoolbox->ip()];
            break;
          case 'hostname':
          case 'host':
            $json = ['hostname' => $iptoolbox->hostname()];
            break;
          default:
            http_response_code(404);
            $json = ['error' => "Path not found"];
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
    case 'hostname':
    case 'host':
      header('Content-Type: text/plain');
      echo $iptoolbox->hostname();
      break;
    default:
      http_response_code(404);
      header('Content-Type: text/plain');
      echo "Path not found";
      break;
  }
} else {
  header('Content-Type: text/plain');
  echo $iptoolbox->ip();
}
