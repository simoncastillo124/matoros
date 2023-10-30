<?php
session_start();
session_destroy();


header('Location: ../views/forms/login.php');