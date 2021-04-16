<?php

require_once "controllers/template.controller.php";
require_once "controllers/route.controller.php";

require_once "controllers/casa.controller.php";
require_once "models/casa.model.php";

require_once "controllers/form.controller.php";
require_once "models/form.model.php";

$plantilla = new TemplateController();
$plantilla -> template();