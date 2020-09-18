<?php

    namespace app\controller;
    use app\core\Dispatch;

    class editorController extends Dispatch
    {
        protected $data;
        protected $data_imagens;

        public function __construct()
        {
            $content = file_get_contents('map.json');
            $json = json_decode($content, true);
            $this->data = $json;

            $content_imagens = file_get_contents('public/assets/uploads/name_file.json');
            $json_imagens = json_decode($content_imagens, true);
            $this->data_imagens = $json_imagens;
        }

        public function index(Array $req, Array $res): void
        {
            $this->view('editor', 'Editor Map', [
                'json' => $this->data,
                'json_imagens_name' => $this->data_imagens
            ]);
        }

        public function treatmant_data(Array $req, Array $res): void
        {
            foreach($_POST as $key => $value){
                $explode = explode('-', $key);

                if($this->data[$explode[0]][$explode[1]][$explode[2]] == $this->data[$explode[0]][$explode[1]][$explode[2]]){
                    $this->data[$explode[0]][$explode[1]][$explode[2]] = $value;
                }else{
                    echo "error";
                }
            }

            if(file_put_contents('map.json', json_encode($this->data))){
                $res['redirect']('editor_content');
            }else{
                $res['json']('error');
            }
        }   

        public function upload_payload(Array $request, Array $response): void
        {   
            $send_dir = 'public/assets/img/';
            $upload_dir = $send_dir.basename($_FILES['userfile']['name']);
            if(move_uploaded_file($_FILES['userfile']['tmp_name'], $upload_dir)){
                $this->data_imagens[] = basename($_FILES['userfile']['name']);
                if(file_put_contents('public/assets/uploads/name_file.json', json_encode($this->data_imagens))){
                    $response['redirect']('editor_content');
                }else{
                    $response['json']('error to envolve archive');
                }
            }else{
                $response['json']('error in upload img');
            }
        } 

        public function delete_image(Array $request, Array $response): void
        {   
            $id_img = $_POST['id_value_image'];
            $dir_file_name = 'public/assets/img/';

            if(unlink($dir_file_name.$this->data_imagens[$id_img])){
                unset($this->data_imagens[$id_img]);
                if(file_put_contents('public/assets/uploads/name_file.json', json_encode($this->data_imagens))){
                    $response['redirect']('editor_content');
                }else{
                    $response['json']('A error was ocorred');
                }
            }else{
                $response['json']('A error was ocorred in delete file archive');
            }
        } 

    }