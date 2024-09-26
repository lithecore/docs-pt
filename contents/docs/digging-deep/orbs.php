---
title: Orb
description: "A classe `\Lithe\Orbs\Orb` é uma parte essencial do sistema Lithe, projetada para gerenciar instâncias de classes de forma eficiente e organizada. Ela permite encapsular instâncias, possibilitando que sejam facilmente acessadas e reutilizadas em diferentes partes da aplicação. Com o uso da classe `Orb`, você pode evitar a criação redundante de objetos, garantindo que cada instância seja registrada e acessada de maneira controlada."
---

## Registrando Instâncias

O método `register` é responsável por criar ou registrar uma instância da classe especificada. Ele aceita o nome da classe (ou uma instância já existente) e um parâmetro opcional para a chave de registro. Isso é especialmente útil para garantir que você tenha um único ponto de acesso para cada instância, facilitando a gestão de dependências.

```php
// Registrando uma nova instância da classe User
Lithe\Orbs\Orb::register(User::class);

// Registrando uma instância existente
$userInstance = new User();
Lithe\Orbs\Orb::register($userInstance);
```

Com isso, a instância da classe `User` pode ser acessada a partir de qualquer lugar na aplicação, permitindo um design mais coeso e modular.

---

## Obtendo Instâncias

Para acessar uma instância previamente registrada, você pode usar o método `instance`. Ele recebe a chave correspondente à instância desejada e pode opcionalmente desregistrar a instância ao mesmo tempo. Isso é útil em cenários onde você deseja garantir que a instância não será mais utilizada após o seu uso.

```php
// Obtendo a instância da classe User
$userInstance = Lithe\Orbs\Orb::instance(User::class);

// Obtendo e desregistrando a instância
$anotherInstance = Lithe\Orbs\Orb::instance(User::class, true);
```

Dessa forma, você tem controle total sobre a vida útil das instâncias na sua aplicação.

---

## Removendo Instâncias

Caso você precise remover uma instância registrada, utilize o método `unregister`. Isso é útil para liberar memória ou para garantir que uma instância não seja mais acessível após sua utilização.

```php
// Removendo a instância da classe User
Lithe\Orbs\Orb::unregister(User::class);
```

Esse método evita que instâncias desnecessárias permaneçam na memória, contribuindo para uma aplicação mais eficiente.

---

A classe `Orb` fornece uma maneira prática e eficiente de gerenciar instâncias de classes em sua aplicação Lithe. Com métodos como `register`, `instance` e `unregister`, você pode garantir que suas instâncias sejam encapsuladas e acessíveis de forma controlada, melhorando a organização e a modularidade do seu código.

Utilizar a classe `Orb` é uma estratégia eficaz para o gerenciamento de dependências, promovendo um design de software mais limpo e escalável.

Se precisar de mais alguma coisa, é só avisar!
