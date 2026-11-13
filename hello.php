<?php
header('Content-Type: application/json');
$name = htmlspecialchars($_GET['name'] ?? 'World');
echo json_encode([
  'function'    => 'hello',
  'version'     => 'v1',
  'message'     => "Hello, $name! Executed on demand.",
  'executed_at' => date('c'),
  'host'        => gethostname()
]);
