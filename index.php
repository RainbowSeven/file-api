<?php 
require_once __DIR__.'/vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;

$app = new Silex\Application();

$app['debug'] = true;

$app->get('/', function () {
    return '<form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="upload"><input type="submit"></form>';
});

$app->post('/', function (Request $request) {
    $file = $request->files->get('upload');
    $firstName = $request->request->get('firstName');
    $lastName = $request->request->get('lastName');
    $folderName = $firstName[''] +

    if (!file_exists(__DIR__.'/files'.)) {
        mkdir('path/to/directory', 0777, true);
    }
// could throw a Symfony\Component\HttpFoundation\File\Exception\FileException 
// will overwrite existing file 
    $file->move(__DIR__.'/files', $file->getClientOriginalName());

    return 'Done.';
});

$app->run();
