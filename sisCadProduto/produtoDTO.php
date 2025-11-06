<?php
    class produtoDTO{
        private  $id;
        private  $nome;
        private  $valor;
        private  $quantidade;
        private  $descricao;
        
        public function _construct(){

        }

        public function _setId($id){
            $this->id = $id;
        }
        public function _getId($id){
            return $this->id;
        }

        public function _setNome($nome){
            $this->nome = $nome;
        }
        public function _getNome($nome){
            return $this->nome;
        }

        public function _setValor($valor){
            $this->valor = $valor;
        }
        public function _getValor($valor){
            return $this->valor;
        }

        public function _setQuantidade($quantidade){
            $this->quantidade = $quantidade;
        }
        public function _getQuantidade($quantidade){
            return $this->quantidade;
        }

        public function _setDescricao($descricao){
            $this->descricao = $descricao;
        }
        public function _getDescricao($descricao){
            return $this->descricao;
        }


    }
?>