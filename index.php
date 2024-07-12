<?php
use Bitrix\Main\Context;
use Bitrix\Main\Web\HttpClient;

class GoogleIframeApp extends \Bitrix\Main\Engine\Controller
{
    public function indexAction()
    {
        // URL do site que você deseja carregar no iframe
        $url = "https://www.google.com";

        // Criando um cliente HTTP para obter o conteúdo do site
        $httpClient = new HttpClient();
        $content = $httpClient->get($url);

        // Renderiza o conteúdo do site dentro de um iframe
        return '<iframe srcdoc="' . htmlspecialchars($content) . '" width="100%" height="600"></iframe>';
    }
}
