<?php namespace App\Helpers;

class Node {


      private static function getpid(){

          return intval(file_get_contents(config('node.pid')));

      }

      private static function is_started(){
          $node_pid = self::getpid();
          return $node_pid > 0;
      }

      public static function restart(){
          $res = self::stop();
          $res .= "<br>";
          $res .= self::start();
          return $res;
      }

      public static function start(){

        if(self::is_started()){
          return "Already running";
        }
      
      $file = config('node.entrypoint');

      $node_pid = exec("NODEPHP_PORT=".config('node.port')." ".config('node.bin'). " $file >nodeout 2>&1 & echo $!");
      $res =  $node_pid > 0 ? "Done. PID=$node_pid\n" : "Failed.\n";
      file_put_contents(config('node.pid'), $node_pid, LOCK_EX);
      sleep(1); //Wait for node to spin up

      return $res.'<br>'.file_get_contents("nodeout");
    }

    public static function stop(){

      if(!self::is_started()){
        return "Not running";
      }
      $node_port = config('node.port');
      $node_pid= self::getpid();
      $res =  "Stopping Node.js with PID=$node_pid:\n";
      $ret = -1;
      passthru("kill $node_pid", $ret);
      // passthru("fuser -k $node_port/tcp",$ret);

      file_put_contents(config('node.pid'),'', LOCK_EX);
      $ret === 0 ? "Done.\n" : "Failed. Error: $ret\n";
      return $res.'<br>'.$ret;

      }
}