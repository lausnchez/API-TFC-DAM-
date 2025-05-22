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

### Ejemplo JSON:
```json
{
  "name": "Fuego Infernal",
  "description": "Una carta que inflige daño masivo de fuego.",
  "type": "Ataque",
  "power": 85
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
  "name": "Quemadura",
  "description": "Reduce salud progresivamente durante 3 turnos."
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

### Ejemplo JSON:
```json
{
  "name": "Poción Curativa",
  "description": "Recupera 50 puntos de salud.",
  "type": "consumible"
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

### Ejemplo JSON:
```json
{
  "name": "Arkan",
  "level": 12,
  "class": "Mago",
  "experience": 3200
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

### Ejemplo JSON:
```json
{
  "name": "Dragón Rojo",
  "level": 20,
  "hp": 1500,
  "attack": 180
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
  "id_card": 1,
  "id_effect": 2
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
  "card1": 1,
  "card2": 2,
  "card_result": 3
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
  "id_character": 2,
  "id_card": 4
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
  "id_character": 2,
  "id_item": 3
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
  "id_enemy": 2,
  "id_effect": 4
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
  "id_item": 3,
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
  "item1": 1,
  "item2": 2,
  "item_result": 4
}
```
---
