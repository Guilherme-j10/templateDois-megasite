<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta name="theme-color" content="#1968c2"> 
        <meta name="apple-mobile-web-app-status-bar-style" content="#1968c2">
        <meta name="msapplication-navbutton-color" content="#1968c2">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?= $title; ?></title>
        <link rel="stylesheet" href="<?= OTHERS.'css/style.css'; ?>">
        <link rel="stylesheet" href="<?= OTHERS.'css/css/all.css'; ?>">
    </head>
    <body>
        <form class="div_box" action="<?= SITE_NAME.'/editor_content_data'; ?>" method="POST">
            <header>
                <h1>EDITOR MAP JSON</h1>
            </header>
            <?php $i = 0; ?>
            <?php foreach($dados['json'] as $key => $value): ?> 
                <section class="standard">
                    <h1><?= $key; ?></h1>
                    <?php foreach($dados['json'][$key] as $chave => $valor): ?>
                        <div class="sub">
                            <h2><?= $chave ?></h2>
                            <div class="inputs">
                                <?php foreach($dados['json'][$key][$chave] as $chave_dois => $valor_dois): ?>
                                    <div class="line">
                                        <label><?= $chave_dois; ?>:</label>
                                        <input type="text" name="<?= $key.'-'.$chave.'-'.$chave_dois; ?>" required value="<?= $valor_dois; ?>">
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </section>        
            <?php endforeach; ?>
            <input type="submit" value="ENVIAR DADOS">
        </form>
        <button id="call">IMAGENS</button>
        <div class="modal_container" id="modal">
            <div class="modal_upload_imagens">
                <header>
                    <span>
                        <i class="fas fa-upload"></i>
                        <h1>Upload de imagens</h1>
                    </span>
                    <form class="upload_form" enctype="multipart/form-data" action="<?= SITE_NAME.'upload_images'; ?>" method="POST">
                        <label for="file">Escolher arquivo</label>    
                        <input id="file" style="display: none;" required name="userfile" type="file" />
                        <input type="submit" value="Enviar arquivo" />
                    </form>
                </header>
                <div class="vitrine">
                    <?php foreach($dados['json_imagens_name'] as $chave => $valor): ?>
                        <form action="<?= SITE_NAME.'delete_image'; ?>" method="POST" class="image_box">
                            <input type="hidden" name="id_value_image" value="<?= $chave; ?>">
                            <button type="submit"><i class="fas fa-trash-alt"></i></button>
                            <img src="<?= IMAGES.$valor; ?>" alt="">
                            <h3>Link da iamgem: </h3>
                            <div class="copy_code_transference" style="display: flex; justify-content: center; align-items: center;">
                                <input type="text" class="input_text" readonly value="<?= IMAGES.$valor; ?>">
                                <span class="btn_copy" style="margin-left:10px; background-color: #333; width: 40px; height: 40px; display: flex; justify-content: center; align-items: center; color: #fff; border-radius: 5px; cursor: pointer;" class="copy_info" id="copy"><i class="far fa-copy"></i></span>
                            </div> 
                        </form>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <script>
            function show_modal_upload(){

                let call = document.getElementById('call');
                let modal = document.getElementById('modal');

                call.addEventListener('click', () => {
                    modal.style.display = 'flex';
                });

                window.addEventListener('click', (e) => {
                    if(e.target.className == 'modal_container'){
                        modal.style.display = 'none';
                    }
                });

            }

            show_modal_upload();

            function copy_info(){
                let btn_copy = document.getElementsByClassName('btn_copy');
                let text = document.getElementsByClassName('input_text');

                for(let i = 0; i < btn_copy.length; i++){
                    btn_copy[i].addEventListener('click', () => {
                        text[i].select();
                        document.execCommand('copy');
                    })
                }
            }

            copy_info();
        </script>
    </body>
</html>