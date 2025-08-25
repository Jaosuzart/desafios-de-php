# Desafios de PHP — Curso em Vídeo
> Coleção dos meus estudos resolvendo desafios iniciais de PHP do **Curso em Vídeo**: conversor básico, formulários, números (real e inteiros), reajuste de preço e uso de superglobais.
## 🔗 Estrutura

- `Conversor_basico/`
- `Formulario/`
- `Numero real/`
- `Numeros inteiros/`
- `Reajustar preco/`
- `Super globais/`
## 🧰 Tecnologias 

- PHP 8+ (compatível com servidor embutido `php -S`)
- HTML5 + CSS3
## ▶️ Como rodar localmente
**Opção A — servidor embutido do PHP (recomendado):**
1. Clone o repositório.
2. Entre na pasta do desafio que quer testar.
3. Rode:
   ```bash
   php -S localhost:8000
Abra http://localhost:8000 no navegador.
Dica: em Windows, prefira pastas sem espaço no nome do diretório de publicação (ou ajuste a URL).
🧪 Desafios 
1) Conversor básico
Objetivo: ler um valor e apresentar a conversão (ex.: de um valor base para outra referência).
Conceitos: $_GET/$_POST, forms, sanitização com FILTER_VALIDATE_FLOAT, number_format.
Extra: tratar vírgula/ponto (str_replace(',', '.', $valor) ou locale).
2) Formulário
Objetivo: enviar, validar e reapresentar dados (form “grudento”/sticky).
Conceitos: method="post", filter_input com filtros e options, mensagens de erro, required.
3) Número real
Objetivo: ler float e exibir com formatação adequada.
Conceitos: FILTER_VALIDATE_FLOAT, number_format($n, 2, ',', '.').
4) Números inteiros
Objetivo: operar com inteiros (ex.: antecessor/sucessor, paridade, divisibilidade).
Conceitos: FILTER_VALIDATE_INT, operadores aritméticos e módulo (%), condicionais.
5) Reajustar preço
Objetivo: calcular preço com percentual de aumento/desconto.
Fórmula base: novo = preco * (1 + percentual/100) (para desconto, use -percentual).
Conceitos: floats, formatação monetária, bordas (percentual negativo/muito alto).
6) Super globais
Objetivo: demonstrar $_GET, $_POST, $_SERVER, $_SESSION, $_COOKIE.
Exemplos úteis:
Ler parâmetros da URL ($_GET['foo'] ?? '').
Persistir dados na sessão (session_start(); $_SESSION['visitas']++).
Registrar preferências com cookie (nome/tema).
Mostrar agente/rota com $_SERVER.
🗂️ Padrões do projeto
Pastas separadas por desafio.
HTML semântico e CSS simples.
Validação/sanitização na entrada e formatação na saída.
