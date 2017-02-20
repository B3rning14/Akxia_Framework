<?php
  function get_ip()
  {
    return file_get_contents('https://api.ipify.org');
  }

  function get_ip_info()
  {
    return json_decode(file_get_contents('http://ipinfo.io/'. get_ip()));
  }
?>