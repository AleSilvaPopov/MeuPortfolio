# **Meu Portfólio:** [Portfolio](https://https://alepopov.gt.tc/)

Este é o código-fonte do meu portfólio pessoal, desenvolvido para apresentar meus projetos, habilidades e informações de contato. O site é construído de forma modular usando PHP para componentização e gerenciamento de dados, e estilizado com Tailwind CSS.

## 🚀 Tecnologias Utilizadas

* **PHP:** Usado para a lógica de backend, como a inclusão de componentes (cabeçalho, rodapé, seções) e a renderização dinâmica de dados (projetos, links) a partir de arrays.
* **HTML5:** Utilizado para a estrutura semântica do site.
* **Tailwind CSS:** Framework CSS "utility-first" usado para a estilização visual. O projeto utiliza o Tailwind via CDN, não necessitando de um processo de *build*.

## ✨ Funcionalidades

* **Design Componentizado:** O site é dividido em componentes reutilizáveis (`header.php`, `hero.php`, `projetos.php`), todos incluídos no `index.php`.
* **Gerenciamento Dinâmico de Dados:** Projetos, links de navegação e redes sociais são armazenados em arrays PHP, tornando o site fácil de atualizar sem precisar mexer no HTML.
* **Renderização Condicional:**
    * O status dos projetos (Finalizado vs. Em progresso) é exibido dinamicamente com base em um valor booleano.
    * Links externos na navegação (Github, Beecrowd) recebem automaticamente o atributo `target="_blank"`.
* **Rodapé Dinâmico:** O ano no *copyright* do rodapé é gerado automaticamente com a função `date('Y')` do PHP.

## 📂 Estrutura de Arquivos

A estrutura do projeto é organizada para separar a lógica de apresentação dos dados.

```
/
├── index.php         (Arquivo principal que reúne todos os componentes)
├── componentes/
│   ├── header.php    (Cabeçalho e links de navegação)
│   ├── hero.php      (Seção de apresentação e links de redes sociais)
│   └── projetos.php  (Seção que lista dinamicamente os projetos)
└── img/
    (Pasta para imagens como avatar, ícones e screenshots de projetos)
```

## ⚙️ Instalação e Execução

Para rodar este projeto localmente, você precisa de um ambiente que execute PHP (como XAMPP, WAMP, MAMP ou o servidor embutido do PHP).

1.  Clone este repositório:
    ```sh
    git clone [https://github.com/seu-usuario/seu-repositorio.git](https://github.com/seu-usuario/seu-repositorio.git)
    ```
2.  Navegue até a pasta do projeto.
3.  Inicie um servidor PHP local. Você pode usar o servidor embutido do PHP:
    ```sh
    php -S localhost:8000
    ```
4.  Abra seu navegador e acesse `http://localhost:8000`.

Como o Tailwind CSS está sendo carregado via CDN (como visto no `index.php`), não é necessário nenhum passo de instalação de dependências ou *build* de CSS.

## ✏️ Como Personalizar

A principal vantagem deste projeto é a facilidade de atualização. Todos os dados dinâmicos estão centralizados em arrays no topo dos seus respectivos arquivos de componente.

### 1. Adicionar/Editar Links no Cabeçalho

Para alterar os links de navegação (Projetos, Github, etc.), edite o array `$itens` em `componentes/header.php`:

```php
<?php
    $itens = [
        ['href' => '#projetos', 'texto' => 'Projetos'],
        ['href' => '[https://github.com/AleSilvaPopov](https://github.com/AleSilvaPopov)' , 'texto' => 'Github'],
        // Adicione uma nova linha aqui
        ['href' => '[https://link-novo.com](https://link-novo.com)', 'texto' => 'Novo Link'],
    ];
?>
```

### 2. Adicionar/Editar Redes Sociais

Para alterar os links da seção "Hero" (Instagram, WhatsApp), edite o array `$itens` em `componentes/hero.php`:

```php
<?php
$itens = [
    ['href' => '[https://www.instagram.com/alesilvayx/](https://www.instagram.com/alesilvayx/)', 'src' => '/img/instagram_icon.png', 'alt' => 'Instagram Logo'],
    ['href' => '[https://wa.me/5511963826052/?text=oi](https://wa.me/5511963826052/?text=oi)', 'src' => '/img/whatsapp_icon.png', 'alt' => 'WhatsApp Logo'],
    // Adicione um novo link aqui
    ['href' => '[https://linkedin.com/in/seu-perfil](https://linkedin.com/in/seu-perfil)', 'src' => '/img/linkedin.png', 'alt' => 'Linkedin Logo'],
];
?>
```

### 3. Adicionar um Novo Projeto

Para adicionar um novo projeto ao portfólio, basta adicionar um novo item ao array `$projetos` em `componentes/projetos.php`. Siga a estrutura existente:

```php
<?php 
    $projetos = [
            [
                "titulo" => "Meu Novo Projeto Incrível",
                "ano" => 2025,
                "finalizado" => true, // Mude para false se estiver "Em progresso"
                "descricao" => "Uma breve descrição do que este projeto faz, quais problemas resolve e as tecnologias usadas.",
                "stack" => ["PHP", "JavaScript", "TailwindCSS"], // As tags de tecnologia
                "img" => "/img/screenshot-novo-projeto.png", // Caminho para a imagem
                "link" => "[https://github.com/seu-usuario/novo-projeto](https://github.com/seu-usuario/novo-projeto)", // Link para o repositório ou demo
            ],
            [
                "titulo" => "Meu Portfólio",
                "ano" => 2025,
                // ... resto dos projetos ...
            ],
        ];
?>
```

## 👤 Autor

Feito por **Alexandre Popov**.

* **GitHub:** [@AleSilvaPopov](https://github.com/AleSilvaPopov)
* **Beecrowd:** [Perfil 1114399](https://judge.beecrowd.com/pt/profile/1114399)
* **Instagram:** [@alesilvayx](https://www.instagram.com/alesilvayx/)

