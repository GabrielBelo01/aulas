<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
    class Pessoa {
        public $nome;
        public $idade;

        public function apresentar(){
            return "Olá, meu nome é $this->nome e tenho $this->idade anos.";
        }
    }
    ?>
</body>
</html>