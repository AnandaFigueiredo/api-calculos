# 🧮 Math API - Engenharia de Software II

Este repositório contém uma API simples desenvolvida em PHP (Single File), criada como parte da **Etapa 01** do segundo seminário da disciplina de **Engenharia de Software II**.

A API fornece operações matemáticas básicas (soma, subtração, multiplicação e divisão) através de requisições HTTP GET, retornando os resultados em formato JSON.

---

## 🌐 Acesso à API (Deploy)

A API está publicada e acessível para testes através do seguinte endereço:

**Base URL:**
> `https://mathapi.infinityfree.me/api.php?method=`

---

## 📖 Documentação

### Parâmetros da Requisição
Todas as chamadas devem ser feitas utilizando o método **GET**.

| Parâmetro | Tipo     | Obrigatório | Descrição                                      |
|-----------|----------|-------------|------------------------------------------------|
| `method`  | `string` | Sim         | A operação desejada (`soma`, `subtracao`, etc) |
| `a`       | `float`  | Sim         | O primeiro número da operação                  |
| `b`       | `float`  | Sim         | O segundo número da operação                   |

### Formato da Resposta
A API retorna sempre um objeto **JSON**:

```json
{
  "result": <valor_do_resultado_ou_mensagem>
}
