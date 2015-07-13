<?php

  require '../vendor/autoload.php';
  
  use Gedcomx\Extensions\FamilySearch\Rs\Client\FamilySearchClient;
  
  session_start();
  
  $clientOptions = array(
    'environment' => 'sandbox',
    'clientId' => 'a02j0000007s2BiAAI',
    'redirectURI' => 'http://' . $_SERVER['HTTP_HOST'] . '/OAuth2Code.php'
  );
  
  if(isset($_SESSION['fs_access_token'])){
    $clientOptions['accessToken'] = $_SESSION['fs_access_token'];
  }
  
  $client = new FamilySearchClient($clientOptions);