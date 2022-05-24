<?php

    require_once("Feedback.php");
    require_once("ORMFeedback.php");


    class C_Feedback extends Feedback {

        private Feedback $feedback;

        public function __construct() {
            $this->feedback = new Feedback();
        }

        public function sendFeedback($datas) {
            $this->feedback->setSexe($datas->get('sexe'));
            $this->feedback->setNote($datas->get('note'));
            $this->feedback->setAvis($datas->get('avis'));

            if(ORMFeedback::sendFeedback($this->feedback)) {
              require_once("views/feedback/v_check.php");
            }

            require_once('views/search.php');
        }
    }
