# Biblioteca de Notificação via e-mail utilizando o phpMailer

Essa biblioteca tem por função enviar e-mail utilizando a biblioteca phpmailer. Fazer essa ação de forma descomplicada é essencial para qualquer sistema.

Para fazer a instalação da biblioteca, execute o seguinte comando:

```sh
composer require gustavoweb/composer_teste
```

Para fazer o uso da biblioteca, basta requerir o autoload do composer, invocar a classe e fazer a chamada do método:

```sh
<?php

require __DIR__ . '/vendor/autoload.php';

USE Notification\Email;

$email = new Email(2, "mail.host.com", "your@email.com", "your-pass", "smtp secure (tls/ssl)", "port (587)",
    "from@email.com", "From Name");

$email->sendEmail("SUbject", "Content", "reply@email.com", "Replay Name", "address@email.com", "Address Name");
```

Note que toda a configuração do envio do e-mail está utilizando o método mágico construtor! Uma vez invocado o método construtor dentro da sua aplicação, seu sistema estar'á apto a efetuar os disparos.

### Developers
* [Flavisnei Favalessa]: <mailto:flavisnei@gmail.com>
* [phpMailer] - Lib to send E-mail

License
----

MIT

**Mais um curso da UpInside Treinamentos, faça bom uso!**

[//]:#
[Flavisnei Favalessa]: <mailto:flavisnei@gmail.com>
