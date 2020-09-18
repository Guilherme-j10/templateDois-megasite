<?php

    use elevenstack\expressphp\Express as express;

    $app = new express(false);

    $app->namespace('app/controller/');
    $app->type_aplication('web');

    $app->get('/', function($req, $res){
        $res['redirect']('home');
    });

    $app->get('/home', 'templateController:index');

    //envia os email atraves do formulario
    $app->post('/contato_contato', 'templateController:send_message');

    //rota do editor
    $app->get('/editor_content', 'editorController:index');
    $app->post('/editor_content_data', 'editorController:treatmant_data');

    //rotas das imagens
    $app->post('/upload_images', 'editorController:upload_payload');
    $app->post('/delete_image', 'editorController:delete_image');

    $app->error($app->getRoute_request(), function($response){
        $response['send']('Page not found');
    });

    