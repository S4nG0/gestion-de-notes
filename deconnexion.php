<?php
include 'config/config.php';

session_destroy();

header('Location: index.php');