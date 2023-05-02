<?php
require 'website_data.php';

?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?=$website_description?>">
    <meta property="og:description" content="<?=$website_description?>">
    <meta property="og:title" content="<?=$website_title?>" />
    <title><?=$website_title?></title>
    <meta name="description" content="<?=$website_description?>">
    <meta name="keywords" content="<?=$website_keywords?>">
    <meta name="author" content="<?=$website_author?>">
    <meta name="robots" content="index,follow">
    <meta property="publisher" content="<?=$website_author?>" />
    <meta property="og:url" content="<?=$website_url?><?=$uri?>" />
    <meta property="og:type" content="website" />
    <meta property="og:locale" content="pt_BR" />
    <meta property="og:region" content="Brasil" />
    <meta property="og:author" content="<?=$website_author?>" />
    <meta property="og:site_name" content="<?=$website_name?>" />
    <link rel="canonical" href="<?=$website_url?><?=$uri?>" />
    <base href="/">
    <title><?=$website_title?></title>
    <?php foreach($website_stylesheets as $key=>$stylesheets) { ?>
    <link rel="stylesheet" href="<?=$stylesheets?>">
    <?php } ?>

</head>
