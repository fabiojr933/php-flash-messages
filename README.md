# php-flash-messages

Armazena mensagens nos dados da sessão até que sejam recuperadas. Oferece conformidade com PSR-4, compatibilidade com Bootstrap, mensagens persistentes e muito mais.



## 🚀 Instalaçãoo
Comece instalando o pacote via Composer.
```
composer require fabiojr933/php-flash-messages
```

Em seguida, como mencionado acima, as classes CSS padrão para sua mensagem flash são otimizadas para Bootstrap. Portanto, você pode incorporar o CSS do Bootstrap em seu arquivo HTML ou de layout, ou escrever seu próprio CSS com base nessas classes.

### 📋 Pré-requisitos

exemplo no controller 

```
use Fabiojr933\PhpFlashMessages\Messages;
$flash = new Messages();
public function store()
{
    $flash->setFlash('success', 'Operação realizada com sucesso!');
    $flash->setFlash('error', 'Ocorreu um erro inesperado!');
    flash('Welcome Aboard!');
    return home();
}
```

exemplo no HTML para recuperar as mensagens

```

<?php
require 'vendor/autoload.php';
use Fabiojr933\PhpFlashMessages\Messages;
$flash = new Messages();

// Criar mensagem para teste
$flash->setFlash('success', 'Operação realizada com sucesso!');
$flash->setFlash('error', 'Ocorreu um erro inesperado!');
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exemplo Flash Messages</title>

    <!-- Bootstrap 5 CSS -->
    <link 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">

    <h2 class="mb-4">Exemplo de Mensagens Flash</h2>

    <!-- Exibir mensagens -->
    <?php if ($flash->hasFlash('success')): ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?= $flash->getFlash('success'); ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    <?php endif; ?>

    <?php if ($flash->hasFlash('error')): ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <?= $flash->getFlash('error'); ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    <?php endif; ?>

    <a href="?test=1" class="btn btn-primary mt-3">Gerar mensagens flash</a>

</div>

<!-- Bootstrap 5 JS -->
<script 
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
</script>

</body>
</html>
```


