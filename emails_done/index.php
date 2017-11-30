<?php
    error_reporting(E_ALL^E_DEPRECATED);
    ini_set('display_errors', "on");

    class Emails{

        public static $_email = 'test@meska.hu';
        public static $_year = 2017;

        public function index(){
            $email = $_GET['email'];

            if($email != ''){
                switch($email){
                    case 'fav_newsletter' :
                        $this->fav_newsletter();
                        break;
                    case 'conversation_notif' :
                        $this->conversation_notif();
                        break;
                    default :
                        die('Hibás e-mail paraméter!');
                }
            }else{ ?>
                <a href="/emails_done/index.php?email=fav_newsletter">fav_newsletter</a><br>
                <a href="/emails_done/index.php?email=conversation_notif">belső üzenet értesítő</a><br>
            <?php
            }
        }

        private function fav_newsletter(){
            include_once('fav_newsletter.php');
        }

        private function conversation_notif(){
            $recipient = 'Teszt Elek';
            $sender = 'Bőrönd Ödön';
            $domain = 'meska';
            $message = 'Lorem Ipsum';
            $pid = 111;
            $product_name = 'teszt termék';
            $isgroup = false;
            $message_id = 111;

            include_once('conversation_notif.php');
        }
    }

    class App_Controller{
        public static $_protocolStatic = 'https';
        public static $_urlPrefixStatic = 'https://www.meska.hu';
    }

    class App_Helper_Domain
    {
    public static function hungarize($domain, $withArticle = false, $affix = false, $upperArticle = false)
    {
        $ret = '';
        switch ($domain){
            case 'meska':
                if ($withArticle){
                    if ($upperArticle){
                        $ret .= 'A ';
                    } else {
                        $ret .= 'a ';
                    }
                }
                $ret .= 'Mesk';
                if ($affix){
                    if ($affix == 'n'){
                        $ret .= 'án';
                    }
                    if ($affix == 'ra'){
                        $ret .= 'ára';
                    }
                } else {
                    $ret .= 'a';
                }
                break;
            case 'alkotokboltja':
                if ($withArticle){
                    if ($upperArticle){
                        $ret .= 'Az ';
                    } else {
                        $ret .= 'az ';
                    }
                }
                $ret .= 'Alkotók boltj';
                if ($affix){
                    if ($affix == 'n'){
                        $ret .= 'án';
                    }
                    if ($affix == 'ra'){
                        $ret .= 'ára';
                    }
                } else {
                    $ret .= 'a';
                }
                break;
            case 'izporta':
                if ($withArticle){
                    if ($upperArticle){
                        $ret .= 'Az ';
                    } else {
                        $ret .= 'az ';
                    }
                }
                $ret .= 'Ízport';
                if ($affix){
                    if ($affix == 'n'){
                        $ret .= 'án';
                    }
                    if ($affix == 'ra'){
                        $ret .= 'ára';
                    }
                } else {
                    $ret .= 'a';
                }
                break;
        }
        return $ret;
    }

    public static function getDomainRoot($host){
        //Hogyha parancssorbol van meghivva (Cron)
        if ($host == null){
            return "hu";
        }

        //ha wgettel van meghivva - (Cron) meska.hu:8087
        if (strstr($host, ":")){
            $host = substr($host, 0, strpos($host, ":"));
        }

        $ret = '';
        $temp = explode('.', $host);
        $ret = array_pop($temp);
        return $ret;
    }

    public static function isTestDomain() {
        $d = explode('.', $_SERVER['HTTP_HOST']);
        return $d[0] == 'test' || $d[0] == 'www' && $d[1] == 'test' || array_pop($d) == 'test';
    }
    }

$asd = new Emails();
$asd->index();

