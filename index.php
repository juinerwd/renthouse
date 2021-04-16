<?php

require_once "controllers/template.controller.php";
require_once "controllers/route.controller.php";

require_once "models/user.model.php";
require_once "controllers/user.controller.php";

require_once "controllers/casa.controller.php";
require_once "models/casa.model.php";

require_once "controllers/form.controller.php";
require_once "models/form.model.php";

// require_once "extensions/vendor/autoload";

$plantilla = new TemplateController();
$plantilla -> template();