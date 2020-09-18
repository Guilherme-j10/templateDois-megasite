<?php

    namespace app\controller;
    use app\core\Dispatch;

    class templateController extends Dispatch
    {
        protected $data;

        public function __construct()
        {
            $content = file_get_contents('map.json');
            $json = json_decode($content, true);

            $this->data = $json;
        }

        public function index(Array $request, Array $response): void
        {
            $this->view('index', 'Home', [
                'json' => $this->data
            ]);
        }

        public function contato(Array $request, Array $response): void
        {
            $this->view('contato', 'Contato', [
                'json' => $this->data
            ]);
        }

        public function send_message(Array $request, Array $response):void 
        {
            $nome = $_POST['nome'];
            $telefone = $_POST['telefone'];
            $assunto = $_POST['assunto'];
            $email = $_POST['email'];
            $msg = $_POST['msg'];
            $to = $_POST['send_to'];

            $message_email = new \SendGrid\Mail\Mail();
            $message_email->setFrom("megaconecta2020@gmail.com", "Mega conecta");
            $message_email->setSubject("{$assunto}");
            $message_email->addTo($to, $nome);
            $message_email->addContent('text/html', "
                <strong>NOME: </strong>{$nome}<br>
                <strong>TELEFONE: </strong>{$telefone}<br>
                <strong>E-MAIL: </strong>{$email}<br>
                <strong>ASSUNTO: </strong>{$assunto}<br>
                <strong>MENSAGEM: </strong>{$msg}
            ");

            $sendgrid = new \SendGrid('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');
            
            if($sendgrid->send($message_email)){
                $response['send']('
                    <script> window.onload = () => {window.history.back();} </script>
                ');
            }
        }
    }