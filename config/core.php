<?php
function pr($dt) {
    echo '<pre>';
    print_r ($dt);
}
define ('APP_SETTINGS', [
    'APP_NAME' => 'E-Commerce CRM',
    'APP_TITLE' => 'E-Commerce CRM'
]);

define ('APP_FOLDER', '/phptraining/curdapp');

define ('PATHS', [
    'ASSETS' =>  APP_FOLDER . '/assets',
    'CSS' => APP_FOLDER . '/assets/css',
    'JS' => APP_FOLDER . '/assets/js',
    'IMG' => APP_FOLDER . '/assets/img',
    'FILE' => APP_FOLDER . '/assets/file',
]);

function includeCSS(string $fileName, array $config = []): string {
    $path = PATHS['CSS'] . '/' . $fileName . '.css';
    return "<link href='$path' rel='stylesheet'>";
}

function includeJS(string $fileName, array $config = []): string {
}