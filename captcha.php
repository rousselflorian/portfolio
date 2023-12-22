<?php
session_start();

// Générer un texte aléatoire pour le CAPTCHA
$chaine = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
$captchaText = substr(str_shuffle($chaine), 0, 6);
?>