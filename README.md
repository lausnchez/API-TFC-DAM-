# URL DE LA API: https://tfgvideojuego.lausnchez.es/

## 🃏 Cards

| Método | Ruta             | Acción      |
|--------|------------------|-------------|
| GET    | /card            | index       |
| GET    | /card/{id}       | show        |
| POST   | /card            | store       |
| PUT    | /card/{id}       | update      |
| PATCH  | /card/{id}       | update (parcial) |
| DELETE | /card/{id}       | destroy     |

* Target es un enum que solo puede ser 'unique','all', o 'self'.
* Una carta puede contener efectos, fusiones, y characters a los que pertenece

### Ejemplo JSON:
```json
{
    "name": "",
    "description": "",
    "cost": 0,
    "currency_cost": 0,
    "image": "",
    "target": "",
    "rarity": 0.0
}

{
    "name": "Llama Mística",
    "description": "Inflige daño de fuego al objetivo.",
    "cost": 2,
    "currency_cost": 15,
    "image": "https://ejemplo.com/cards/llama_mistica.png",
    "target": "unique",
    "rarity": 0.25
}
```
---

## 🎯 Effects

| Método | Ruta              | Acción      |
|--------|-------------------|-------------|
| GET    | /effect           | index       |
| GET    | /effect/{id}      | show        |
| POST   | /effect           | store       |
| PUT    | /effect/{id}      | update      |
| PATCH  | /effect/{id}      | update (parcial) |
| DELETE | /effect/{id}      | destroy     |

### Ejemplo JSON:
```json
{
    "name": "",
    "description": "",
    "active_turns": 0,
    "value": 0
}

{
    "name": "Veneno",
    "description": "Inflige daño durante varios turnos.",
    "active_turns": 3,
    "value": 5
}
```
---

## 🧰 Items

| Método | Ruta            | Acción      |
|--------|-----------------|-------------|
| GET    | /item           | index       |
| GET    | /item/{id}      | show        |
| POST   | /item           | store       |
| PUT    | /item/{id}      | update      |
| PATCH  | /item/{id}      | update (parcial) |
| DELETE | /item/{id}      | destroy     |

* Un effect puede contener cards, enemies, o items a los que pertenece.

### Ejemplo JSON:
```json
{
    "name": "",
    "description": "",
    "currency_cost": 0,
    "rarity": 0.0
}

{
    "name": "Poción de Vida",
    "description": "Recupera 50 puntos de salud.",
    "currency_cost": 20,
    "rarity": 0.4
}
```
---

## 🧙 Characters (Jugadores)

| Método | Ruta               | Acción      |
|--------|--------------------|-------------|
| GET    | /character         | index       |
| GET    | /character/{id}    | show        |
| POST   | /character         | store       |
| PUT    | /character/{id}    | update      |
| PATCH  | /character/{id}    | update (parcial) |
| DELETE | /character/{id}    | destroy     |

* Un character puede contener cards o items que le pertenecen

### Ejemplo JSON:
```json
{
    "name": "",
    "health": 0,
    "currency": 0,
    "stamina": 0,
    "max_items": 0,
    "sprite": ""
}

{
    "name": "Valen el Guerrero",
    "health": 100,
    "currency": 50,
    "stamina": 30,
    "max_items": 5,
    "sprite": "https://ejemplo.com/sprites/valen.png"
}
```
---

## 👹 Enemies

| Método | Ruta           | Acción      |
|--------|----------------|-------------|
| GET    | /enemy         | index       |
| POST   | /enemy         | store       |
| GET    | /enemy/{id}    | show        |
| PUT    | /enemy/{id}    | update      |
| PATCH  | /enemy/{id}    | update (parcial) |
| DELETE | /enemy/{id}    | destroy     |

* Un enemy puede contener los efectos que le pertenecen

### Ejemplo JSON:
```json
{
    "name": "",
    "health": 0,
    "sprite": "",
    "rarity": 0.0,
    "type": "",
    "floor": 0
}

{
    "name": "Troll de la Cueva",
    "health": 150,
    "sprite": "https://ejemplo.com/sprites/troll.png",
    "rarity": 0.1,
    "type": "normal",
    "floor": 3
}
```
---

## 🔁 CardEffect

| Método | Ruta                 | Acción      |
|--------|----------------------|-------------|
| GET    | /card-effect         | index       |
| POST   | /card-effect         | store       |
| GET    | /card-effect/{id}    | show        |
| PUT    | /card-effect/{id}    | update      |
| PATCH  | /card-effect/{id}    | update      |
| DELETE | /card-effect/{id}    | destroy     |

### Ejemplo JSON:
```json
{
    "id_card": 0,
    "id_effect": 0
}

{
    "id_card": 1,
    "id_effect": 3
}
```
---

## 🧬 CardFusion

| Método | Ruta                 | Acción      |
|--------|----------------------|-------------|
| GET    | /card-fusion         | index       |
| POST   | /card-fusion         | store       |
| GET    | /card-fusion/{id}    | show        |
| PUT    | /card-fusion/{id}    | update      |
| PATCH  | /card-fusion/{id}    | update      |
| DELETE | /card-fusion/{id}    | destroy     |

### Ejemplo JSON:
```json
{
    "card1": 0,
    "card2": 0,
    "card_result": 0
}

{
    "card1": 1,
    "card2": 2,
    "card_result": 10
}
```
---

## 📇 CharacterCard

| Método | Ruta                   | Acción      |
|--------|------------------------|-------------|
| GET    | /character-card        | index       |
| POST   | /character-card        | store       |
| GET    | /character-card/{id}   | show        |
| DELETE | /character-card/{id}   | destroy     |

### Ejemplo JSON:
```json
{
  "id_card": 0,
  "id_character": 0
}

{
  "id_card": 5,
  "id_character": 2
}
```
---

## 💼 CharacterItem

| Método | Ruta                   | Acción      |
|--------|------------------------|-------------|
| GET    | /character-item        | index       |
| POST   | /character-item        | store       |
| GET    | /character-item/{id}   | show        |
| PATCH  | /character-item/{id}   | update      |
| DELETE | /character-item/{id}   | destroy     |

### Ejemplo JSON:
```json
{
  "id_item": 0,
  "id_character": 0
}

{
  "id_item": 7,
  "id_character": 3
}
```
---

## 🧠 EnemyAbility

| Método | Ruta                    | Acción      |
|--------|-------------------------|-------------|
| GET    | /enemy-ability          | index       |
| POST   | /enemy-ability          | store       |
| GET    | /enemy-ability/{id}     | show        |
| PATCH  | /enemy-ability/{id}     | update      |
| DELETE | /enemy-ability/{id}     | destroy     |

### Ejemplo JSON:
```json
{
  "id_enemy": 0,
  "id_effect": 0
}

{
  "id_enemy": 4,
  "id_effect": 2
}
```
---

## ⚗️ ItemEffect

| Método | Ruta                | Acción      |
|--------|---------------------|-------------|
| GET    | /item-effect        | index       |
| POST   | /item-effect        | store       |
| GET    | /item-effect/{id}   | show        |
| PATCH  | /item-effect/{id}   | update      |
| DELETE | /item-effect/{id}   | destroy     |

### Ejemplo JSON:
```json
{
  "id_item": 0,
  "id_effect": 0
}

{
  "id_item": 10,
  "id_effect": 5
}
```
---

## 🧪 ItemFusion

| Método | Ruta                | Acción      |
|--------|---------------------|-------------|
| GET    | /item-fusion        | index       |
| POST   | /item-fusion        | store       |
| GET    | /item-fusion/{id}   | show        |
| PUT    | /item-fusion/{id}   | update      |
| PATCH  | /item-fusion/{id}   | update      |
| DELETE | /item-fusion/{id}   | destroy     |

### Ejemplo JSON:
```json
{
  "item1": 0,
  "item2": 0,
  "item_fusion": 0
}

{
  "item1": 3,
  "item2": 5,
  "item_fusion": 8
}
```
---
