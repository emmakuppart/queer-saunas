<?php

/**
 * Template for displaying the header
 *
 * @package ekaexampletheme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    <?php include 'reset.css'; ?>
    <?php include 'style.css'; ?>
  </style>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header>
    <div class="top-bar">
        <div class="content-container top-bar-content">
            <nav class="menu-items">
                <a href="">Tallinn</a>
                <a href="">Malmö</a>
            </nav>
        </div>
    </div>
</header>