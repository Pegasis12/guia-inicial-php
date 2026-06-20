# Guia Inicial PHP

Repositório de estudos práticos de PHP — do zero até formulários web, sessões, manipulação de ficheiros e tratamento de erros. Cada pasta `aula_XXX` contém exemplos executáveis com comentários explicativos em português, organizados como um percurso progressivo de aprendizagem.

> **64 aulas** · **208 ficheiros PHP** · PHP 8+ · Ambiente Laragon/localhost

---

## Sobre o projeto

Este repositório documenta o percurso completo de aprendizagem de PHP através de código real. Não é apenas teoria: cada conceito vem acompanhado de ficheiros `.php` que podes abrir, executar e modificar.

A estrutura segue uma lógica **bottom-up**:

```
Fundamentos → Tipos → Arrays → Operadores → Condicionais → Ciclos
    → Funções → Modularização → Sessões/Cookies → Ficheiros
        → Super globais → Formulários → Validação → Erros → Exercícios finais
```

**O que está coberto:** sintaxe PHP, tipos de dados, estruturas de controlo, funções, includes, sessões, cookies, filesystem, super globais, formulários HTML e validação server-side, tratamento de erros e exceções.

**O que ainda não está coberto:** Programação Orientada a Objetos (OOP), bases de dados (MySQL/PDO) e Composer — referenciados como próximos passos.

---

## Requisitos

| Requisito | Detalhe |
|-----------|---------|
| PHP | **8.0+** (usa `match`, named arguments, union types) |
| Servidor web | [Laragon](https://laragon.org/), XAMPP, WAMP ou `php -S` |
| Editor | Qualquer IDE (VS Code, Cursor, PHPStorm) |

---

## Como usar

1. Clona o repositório para a pasta do teu servidor local:

```bash
git clone https://github.com/Pegasis12/guia-inicial-php.git
```

2. Coloca o projeto na raiz do servidor (ex.: `c:\laragon\www\guia-inicial-php`).

3. Abre no browser o ficheiro que quiseres estudar:

```
http://localhost/guia-inicial-php/aula_010/index_1.php
```

4. Para scripts de terminal (ex.: aula 011):

```bash
php aula_011/index.php
```

5. Percorre as aulas pela ordem numérica — cada módulo constrói sobre o anterior.

---

## Índice por módulos

### Módulo 1 — Introdução e ambiente
| Aula | Tema | Ficheiros |
|------|------|-----------|
| [aula_010](aula_010/) | Primeiros passos: `echo`, tags `<?php ?>`, PHP dentro de HTML, short echo `<?= ?>` | `index_1.php`, `index_2.php` |
| [aula_011](aula_011/) | PHP no terminal: `print`, `PHP_EOL`, execução via CLI | `index.php` |
| [aula_012](aula_012/) | Comentários: `//`, `#`, `/* */` | `index_1.php`, `script.php` |

```php
// aula_010 — echo interpreta HTML dentro da string
echo '<h1>PHP</h1>';
?>
<h1>HTML</h1>  <!-- HTML fora das tags PHP -->
```

---

### Módulo 2 — Variáveis e constantes
| Aula | Tema | Conceitos-chave |
|------|------|-----------------|
| [aula_013](aula_013/) | Declaração de variáveis | `$variavel`, case-sensitive, regras de nomenclatura |
| [aula_014](aula_014/) | Uso de variáveis | Reatribuição, operações, interpolação `"$var"` vs `'$var'` |
| [aula_015](aula_015/) | Constantes | `define()`, imutabilidade, convenção MAIÚSCULAS |

---

### Módulo 3 — Tipos de dados
| Aula | Tema | Conceitos-chave |
|------|------|-----------------|
| [aula_016](aula_016/) | Tipos escalares | `bool`, `int`, `float`, `string`; `gettype()`, `var_dump()` |
| [aula_017](aula_017/) | Booleanos | `true`/`false`, `is_bool()`, conversão implícita |
| [aula_018](aula_018/) | Inteiros | Positivos, negativos, `PHP_INT_MIN`, `PHP_INT_MAX` |
| [aula_019](aula_019/) | Floats | Casas decimais, separador `_` (`1_150.65`) |
| [aula_020](aula_020/) | NULL | Tipo especial, `unset()`, variável inexistente |
| [aula_021](aula_021/) | Strings | Aspas simples/duplas, concatenação `.`, acesso por índice `$str[0]`, índices negativos |

---

### Módulo 4 — Arrays
| Aula | Tema | Conceitos-chave |
|------|------|-----------------|
| [aula_022](aula_022/) | Arrays básicos | `array()` vs `[]`, índices numéricos/customizados, `print_r()` |
| [aula_023](aula_023/) | Arrays multidimensionais | Arrays associativos aninhados, arrays 2D |
| [aula_024](aula_024/) | Funções de array | `count()`, `array_push/pop/shift/unshift`, `implode()`, `array_slice()` |

---

### Módulo 5 — Operadores
| Aula | Tema | Conceitos-chave |
|------|------|-----------------|
| [aula_025](aula_025/) | Operadores matemáticos | `+ - * / % **`, `fdiv()`, `fmod()` |
| [aula_026](aula_026/) | Exercícios de operadores | Prática com atribuição e operadores compostos |
| [aula_027](aula_027/) | Operadores de string | Concatenação `.`, `.=` |
| [aula_028](aula_028/) | Operadores de atribuição | `=`, `+=`, `-=`, `*=`, `/=`, `%=`, `**=` |
| [aula_029](aula_029/) | Comparação | `==`, `===`, `!=`, `<=>`, ternário `?:`, null coalescing `??` |
| [aula_030](aula_030/) | Supressão de erros `@` | Operador `@` (desaconselhado em produção) |
| [aula_031](aula_031/) | Incremento/decremento | `++`, `--`, pré vs pós |
| [aula_032](aula_032/) | Operadores lógicos | `&&`, `\|\|`, `!`, short-circuit evaluation |
| [aula_033](aula_033/) | Precedência | Ordem de operações, parênteses |

---

### Módulo 6 — Estruturas condicionais
| Aula | Tema | Conceitos-chave |
|------|------|-----------------|
| [aula_034](aula_034/) | if / else / elseif | Fluxo condicional, sintaxe alternativa em HTML (`if(): … endif`) |
| [aula_035](aula_035/) | Exercícios HTML + PHP | Listas `<ul>` a partir de arrays, `array_reverse()`, `sort()` |
| [aula_036](aula_036/) | switch | `case`, `break`, `default` |
| [aula_037](aula_037/) | match (PHP 8) | Nova estrutura condicional, comparação com `switch` |
| [aula_038](aula_038/) | Operador ternário | Expressões condicionais inline |

```php
// aula_037 — match retorna um valor (PHP 8+)
$resultado = match($status_encomenda) {
    "em processamento" => "A encomenda ainda está sendo tratada.",
    "anulada", "cancelada" => "A encomenda foi anulada ou cancelada.",
    "enviada" => "A encomenda foi enviada.",
    default => "Estado da encomenda ainda desconhecido"
};
```

---

### Módulo 7 — Ciclos
| Aula | Tema | Conceitos-chave |
|------|------|-----------------|
| [aula_039](aula_039/) | while / do-while | Repetição condicional, sintaxe alternativa em HTML |
| [aula_040](aula_040/) | for | Inicialização/condição/incremento, iteração em arrays |
| [aula_041](aula_041/) | foreach | Arrays indexados e associativos, vazamento de variável |
| [aula_042](aula_042/) | break / continue | Interrupção e salto de iteração |
| [aula_043](aula_043/) | Exercícios integrados | Tabuada em HTML com `for` e `foreach` |

---

### Módulo 8 — Funções
| Aula | Tema | Conceitos-chave |
|------|------|-----------------|
| [aula_044](aula_044/) | Introdução | Definição, chamada, `return`, case-insensitive |
| [aula_045](aula_045/) | Parâmetros avançados | Opcionais, named arguments (PHP 8), return types, `strict_types`, union types |
| [aula_046](aula_046/) | Escopo | Global vs local, `global`, sombra de variáveis |

```php
// aula_045 — named arguments (PHP 8)
function apresentar($a, $b, $c = 100) {
    return "$a | $b | $c";
}
echo apresentar(c: 1, b: 2, a: 3); // 3 | 2 | 1
```

---

### Módulo 9 — Modularização de código
| Aula | Tema | Conceitos-chave |
|------|------|-----------------|
| [aula_047](aula_047/) | include / require | `include`, `require`, `_once`, diferença aviso vs fatal error |
| [aula_048](aula_048/) | Exemplo prático | Páginas reutilizáveis (`about`, `contact`), evitar duplicação |
| [aula_049](aula_049/) | Paths e estrutura | Caminhos relativos, header/footer reutilizáveis, organização em pastas |

---

### Módulo 10 — Sessões
| Aula | Tema | Conceitos-chave |
|------|------|-----------------|
| [aula_050](aula_050/) | Introdução | `session_start()`, `$_SESSION`, persistência entre requests |
| [aula_051](aula_051/) | CRUD de sessão | Adicionar/remover variáveis, `session_destroy()`, app multi-página |
| [aula_052](aula_052/) | Configuração avançada | `session_name()`, `session_set_cookie_params()`, persistência |

---

### Módulo 11 — Cookies
| Aula | Tema | Conceitos-chave |
|------|------|-----------------|
| [aula_053](aula_053/) | Cookies | `setcookie()`, expiração, `$_COOKIE`, remoção; tema claro/escuro via cookie |

---

### Módulo 12 — Manipulação de ficheiros
| Aula | Tema | Conceitos-chave |
|------|------|-----------------|
| [aula_054](aula_054/) | Introdução + listagem | `scandir()`, `is_file()`, `__DIR__` |
| [aula_055](aula_055/) | Info e escrita | `filesize()`, `pathinfo()`, `file_put_contents()` |
| [aula_056](aula_056/) | Leitura | `file_get_contents()`, `fopen`/`fgets`/`feof`/`fclose`, `fwrite` |
| [aula_057](aula_057/) | CSV | `fopen`, `fputcsv`, formatação de dados tabulares |
| [aula_058](aula_058/) | Operações | `copy()`, `rename()`, `unlink()` |

```php
// aula_056 — leitura parcial de ficheiro
$dados = file_get_contents("dados.txt", offset: 6, length: 40);
echo nl2br($dados); // nl2br converte quebras de linha em <br>
```

---

### Módulo 13 — Super globais
| Aula | Tema | Conceitos-chave |
|------|------|-----------------|
| [aula_059](aula_059/) | Constantes mágicas | `__LINE__`, `__FILE__`, `__DIR__`, `__FUNCTION__` |
| [aula_060](aula_060/) | Super globais | `$GLOBALS`, `global`, `$_SERVER`, `$_SESSION` |
| [aula_061](aula_061/) | `$_GET` | Query strings, captura de parâmetros, `isset()`, segurança |

---

### Módulo 14 — Formulários web
| Aula | Tema | Conceitos-chave |
|------|------|-----------------|
| [aula_062](aula_062/) | Introdução | `$_POST`, `method="POST"`, `REQUEST_METHOD` |
| [aula_063](aula_063/) | GET vs POST | Diferenças, submissão por GET e POST |
| [aula_064](aula_064/) | Tipos de input | text, password, select, checkbox, radio, textarea + Bootstrap |
| [aula_065](aula_065/) | Validação — parte 1 | 3 níveis (HTML5, JS, servidor), regras de validação |
| [aula_066](aula_066/) | Validação — parte 2 | Erros no formulário, repopulação via sessão, `show_error()`/`show_value()` |

```php
// aula_066 — bloquear acesso direto ao script de submissão
if ($_SERVER["REQUEST_METHOD"] != "POST") {
    header("location: form.php");
    return;
}
```

---

### Módulo 15 — Validação de dados
| Aula | Tema | Conceitos-chave |
|------|------|-----------------|
| [aula_067](aula_067/) | Funções de validação | `is_string()`, `is_numeric()`, `empty()`, `strlen()`, `filter_var()`, `preg_match()` |

---

### Módulo 16 — Tratamento de erros
| Aula | Tema | Conceitos-chave |
|------|------|-----------------|
| [aula_068](aula_068/) | Configuração de erros | `error_reporting()`, constantes E_*, `ini_set()`, `error_log()`, `phpinfo()` |
| [aula_069](aula_069/) | Exceções | `throw new Exception`, `try/catch/finally`, `Throwable` |

---

## Exercícios práticos

Exercícios formais com enunciado e solução implementada:

### [aula_070_exercicio](aula_070_exercicio/) — Formulário + validação + sessão

Formulário com dois inputs numéricos. O `tratamento.php` deve:

1. Bloquear acesso direto (mostrar erro).
2. Validar que ambos os valores são numéricos positivos; se não, redirecionar com erro.
3. Se válidos, apresentar a multiplicação dos dois valores.

---

### [aula_071_exercicio](aula_071_exercicio/) — Leitura e classificação de ficheiro

Ler `dados.dat` linha a linha e classificar em arrays:

- Números positivos → `$numeros_positivos`
- Números negativos → `$numeros_negativos`
- Zero → ignorar
- Textos alfanuméricos → `$textos`
- Textos contendo `'TESTE'` → `$textos_teste`

---

### [aula_073_exercicio](aula_073_exercicio/) — Função com divisão segura

Criar função que divide dois números aleatórios. Se divisão por zero, retornar `null` e exibir `"Divisão por zero"`. Formato: `10 : 2 = 5`.

---

### [aula_074_exercicio](aula_074_exercicio/) — Formulário self-processing

Formulário tratado no mesmo `index.php`:

- Campo vazio → erro `"Campo de texto vazio"`
- Valor numérico → guardar em `dados_numericos.txt`
- Valor string → guardar em `dados_string.txt`

---

### Exercícios embutidos (sem enunciado separado)

| Local | Descrição |
|-------|-----------|
| [aula_035](aula_035/) | 6 exercícios: listas HTML a partir de arrays, reverse, sort |
| [aula_043](aula_043/) | Tabuada do 5 em HTML; tabuada do 327 com foreach |
| [aula_054/exercicio_1](aula_054/exercicio_1/) | Listagem de ficheiros com `scandir` |
| [aula_055/exercicio_2](aula_055/exercicio_2/) | Tabuada do 3 (1–1000) escrita em ficheiro |
| [aula_051–052](aula_051/) | App multi-página de gestão de sessão |
| [aula_053/exemplo_2](aula_053/exemplo_2/) | Tema claro/escuro persistido em cookie |

---

## Referência rápida — funcionalidades PHP cobertas

### Output e sintaxe
- Tags PHP, `echo`, `print`, short echo `<?= ?>`
- PHP embutido em HTML com sintaxe alternativa (`if():`, `for():`, `foreach():`, `endif`)

### Tipos e inspeção
- `bool`, `int`, `float`, `string`, `null`
- `gettype()`, `var_dump()`, `print_r()`, `isset()`, `empty()`

### Arrays
- Indexados, associativos, multidimensionais
- `push/pop/shift/unshift`, `slice`, `reverse`, `sort`, `implode`

### Operadores
- Aritméticos, string, atribuição composta, comparação (`===`, `<=>`, `??`, ternário)
- Lógicos, incremento, precedência

### Controlo de fluxo
- `if/else/elseif`, `switch`, `match` (PHP 8), ternário
- `while`, `do-while`, `for`, `foreach`, `break`, `continue`

### Funções
- Parâmetros opcionais e nomeados, return types, strict types, escopo `global`

### Web / HTTP
- `$_GET`, `$_POST`, `$_SESSION`, `$_SERVER`, `$_COOKIE`, `$GLOBALS`
- Sessões, cookies, formulários HTML com validação server-side

### Filesystem
- `file_put_contents`, `file_get_contents`, `fopen/fgets/fputs/fclose`
- `scandir`, `is_file`, `filesize`, `pathinfo`, `fputcsv`, `copy`, `rename`, `unlink`
- Constantes mágicas: `__DIR__`, `__FILE__`, `__LINE__`, `__FUNCTION__`

### Validação e erros
- `filter_var`, `preg_match`, `is_string`, `is_numeric`
- `error_reporting`, `ini_set`, `error_log`
- `try/catch/finally`, `throw new Exception`

---

## Estrutura de pastas

```
guia-inicial-php/
├── aula_010/          # Primeiros passos
├── aula_011/          # PHP no terminal
├── ...
├── aula_069/          # Exceções
├── aula_070_exercicio/  # Exercício: formulário + validação
├── aula_071_exercicio/  # Exercício: leitura de ficheiro
├── aula_073_exercicio/  # Exercício: divisão segura
├── aula_074_exercicio/  # Exercício: formulário self-processing
└── README.md
```

> **Nota:** não existe `aula_072` — a numeração salta de 071 para 073.

---

## Próximos passos sugeridos

- [ ] Programação Orientada a Objetos (classes, herança, interfaces)
- [ ] Bases de dados com MySQL e PDO
- [ ] Composer e autoloading PSR-4
- [ ] Frameworks (Laravel, Symfony) ou micro-frameworks (Slim)

---

## Autor

**Pegasis12** — [github.com/Pegasis12](https://github.com/Pegasis12)

Repositório de estudos pessoais. Sinta-se à vontade para explorar, forkar e aprender.
