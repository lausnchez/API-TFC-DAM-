<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>API Laura & Joshua</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="api-doc.css">

        <!-- Styles -->
        <style>
            #central_block{
                margin-left: 25% ;
                width: 50%;
            }
            table{
                width: 100%;
                border-collapse: collapse;
            }
            th,td{
                border: 1px solid darkgrey;
                height: 30px;
                padding: 10px;
            }
            tr:nth-child(even){
                background: #fafafa;
            }
            th{
                background-color: #f2f2f2;
            }
            h2{
                width: 97%;
                background-color: #1b5687;
                height: 30px;
                padding: 10px;
                padding-left: 20px;
                color: white;
                border-radius: 10px;
            }
            pre{
                background-color: #303030;
                padding: 10px;
                color: lightblue;
                border-radius: 10px;
            }
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
            <div id="central_block">
                <h1>Elementos base</h1>
                <hr>
                <!-- CARDS -->
                <div>
                    <h2>Cards</h2>
                    <table>
                       <thead>
                           <th>Método</th>
                           <th>Ruta</th>
                           <th>Acción</th>
                       </thead>
                       <tbody>
                           <tr><td>GET</td><td><b>/card</b></td><td>Recoge todas las cartas</td></tr>
                          <tr><td>GET</td><td><b>/card/{id}</b></td><td>Recoge una carta por ID</td></tr>
                          <tr><td>POST</td><td><b>/card</b></td><td>Crea una carta</td></tr>
                          <tr><td>PUT</td><td><b>/card/{id}</b></td><td>Actualiza una carta</td></tr>
                          <tr><td>PATCH</td><td><b>/card/{id}</b></td><td>Actualiza parcialmente una carta</td></tr>
                          <tr><td>DELETE</td><td><b>/card/{id}</b></td><td>Elimina una carta</td></tr>
                       </tbody> 
                    </table>
                    <p>* Target es un enum que solo puede ser 'unique','all', o 'self'.<br>* Una carta puede contener efectos, fusiones, y characters a los que pertenece</p>
                    <pre><code>
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
                    </code></pre>      
                </div>
                <!-- EFFECTS-->
                <div>
                    <h2>Effects</h2>
                    <table>
                       <thead>
                           <th>Método</th>
                           <th>Ruta</th>
                           <th>Acción</th>
                       </thead>
                       <tbody>
                           <tr><td>GET</td><td><b>/effect</b></td><td>Recoge todos los efectos</td></tr>
                          <tr><td>GET</td><td><b>/effect/{id}</b></td><td>Recoge un efecto por ID</td></tr>
                          <tr><td>POST</td><td><b>/effect</b></td><td>Crea un efecto</td></tr>
                          <tr><td>PUT</td><td><b>/effect/{id}</b></td><td>Actualiza un efecto</td></tr>
                          <tr><td>PATCH</td><td><b>/effect/{id}</b></td><td>Actualiza parcialmente un efecto</td></tr>
                          <tr><td>DELETE</td><td><b>/effect/{id}</b></td><td>Elimina un efecto</td></tr>
                       </tbody> 
                    </table>
                    <p>* Un effect puede contener cards, enemies, o items a los que pertenece.</p>
                    <pre><code>
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
                    </code></pre>      
                </div>
                <!-- ITEMS-->
                <div>
                    <h2>Items</h2>
                    <table>
                       <thead>
                           <th>Método</th>
                           <th>Ruta</th>
                           <th>Acción</th>
                       </thead>
                       <tbody>
                           <tr><td>GET</td><td><b>/item</b></td><td>Recoge todos los items</td></tr>
                          <tr><td>GET</td><td><b>/item/{id}</b></td><td>Recoge un item por ID</td></tr>
                          <tr><td>POST</td><td><b>/item</b></td><td>Crea un item</td></tr>
                          <tr><td>PUT</td><td><b>/item/{id}</b></td><td>Actualiza un item</td></tr>
                          <tr><td>PATCH</td><td><b>/item/{id}</b></td><td>Actualiza parcialmente un item</td></tr>
                          <tr><td>DELETE</td><td><b>/item/{id}</b></td><td>Elimina un item</td></tr>
                       </tbody> 
                    </table>
                    <p>* Un item puede contener characters, effects o fusiones a los que pertenece.</p>
                    <pre><code>
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
                    </code></pre>      
                </div>    
                <!-- CHARACTERS-->
                <div>
                    <h2>Characters</h2>
                    <table>
                       <thead>
                           <th>Método</th>
                           <th>Ruta</th>
                           <th>Acción</th>
                       </thead>
                       <tbody>
                           <tr><td>GET</td><td><b>/character</b></td><td>Recoge todos los personajes</td></tr>
                          <tr><td>GET</td><td><b>/character/{id}</b></td><td>Recoge un personaje por ID</td></tr>
                          <tr><td>POST</td><td><b>/character</b></td><td>Crea un personaje</td></tr>
                          <tr><td>PUT</td><td><b>/character/{id}</b></td><td>Actualiza un personaje</td></tr>
                          <tr><td>PATCH</td><td><b>/character/{id}</b></td><td>Actualiza parcialmente un personaje</td></tr>
                          <tr><td>DELETE</td><td><b>/character/{id}</b></td><td>Elimina un personaje</td></tr>
                       </tbody> 
                    </table>
                    <p>* Un character puede contener cards o items que le pertenecen</p>
                    <pre><code>
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
                    </code></pre>      
                </div>
                <!-- ENEMIES-->
                <div>
                    <h2>Enemies</h2>
                    <table>
                       <thead>
                           <th>Método</th>
                           <th>Ruta</th>
                           <th>Acción</th>
                       </thead>
                       <tbody>
                           <tr><td>GET</td><td><b>/enemy</b></td><td>Recoge todos los enemies</td></tr>
                          <tr><td>GET</td><td><b>/enemy/{id}</b></td><td>Recoge un enemy por ID</td></tr>
                          <tr><td>POST</td><td><b>/enemy</b></td><td>Crea un enemy</td></tr>
                          <tr><td>PUT</td><td><b>/enemy/{id}</b></td><td>Actualiza un enemy</td></tr>
                          <tr><td>PATCH</td><td><b>/enemy/{id}</b></td><td>Actualiza parcialmente un enemy</td></tr>
                          <tr><td>DELETE</td><td><b>/enemy/{id}</b></td><td>Elimina un enemy</td></tr>
                       </tbody> 
                    </table>
                    <p>* Un enemy puede contener los efectos que le pertenecen</p>
                    <pre><code>
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
                    </code></pre>      
                </div>
                <h1>Relaciones</h1>
                <hr>
                <!--CARD EFFECT-->
                <div>
                    <h2>CardEffect</h2>
                    <table>
                       <thead>
                           <th>Método</th>
                           <th>Ruta</th>
                           <th>Acción</th>
                       </thead>
                       <tbody>
                           <tr><td>GET</td><td><b>/card-effect</b></td><td>Recoge todas las relaciones card_effect</td></tr>
                           <tr><td>GET</td><td><b>/card-effect/{id}</b></td><td>Recoge una relación card_effect por ID</td></tr>
                           <tr><td>POST</td><td><b>/card-effect</b></td><td>Crea una relación card_effect</td></tr>
                           <tr><td>PUT</td><td><b>/card-effect/{id}</b></td><td>Actualiza una relación card_effect</td></tr>
                           <tr><td>PATCH</td><td><b>/card-effect/{id}</b></td><td>Actualiza parcialmente una relación card_effect</td></tr>
                           <tr><td>DELETE</td><td><b>/card-effect/{id}</b></td><td>Elimina una relación card_effect</td></tr>
                       </tbody> 
                    </table>
                    <p>* Una relación card_effect vincula una carta con un efecto.</p>
                    <pre><code>
    {
      "id_card": 0,
      "id_effect": 0
    }

    {
      "id_card": 1,
      "id_effect": 3
    }
                    </code></pre>      
                </div>
                <!--CARD FUSION-->
                <div>
                    <h2>CardFusion</h2>
                    <table>
                       <thead>
                           <th>Método</th>
                           <th>Ruta</th>
                           <th>Acción</th>
                       </thead>
                       <tbody>
                           <tr><td>GET</td><td><b>/card-fusion</b></td><td>Recoge todas las fusiones de cartas</td></tr>
                           <tr><td>GET</td><td><b>/card-fusion/{id}</b></td><td>Recoge una fusión por ID</td></tr>
                           <tr><td>POST</td><td><b>/card-fusion</b></td><td>Crea una nueva fusión de cartas</td></tr>
                           <tr><td>PUT</td><td><b>/card-fusion/{id}</b></td><td>Actualiza una fusión de cartas</td></tr>
                           <tr><td>PATCH</td><td><b>/card-fusion/{id}</b></td><td>Actualiza parcialmente una fusión</td></tr>
                           <tr><td>DELETE</td><td><b>/card-fusion/{id}</b></td><td>Elimina una fusión de cartas</td></tr>
                       </tbody> 
                    </table>
                    <pre><code>
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
                    </code></pre>      
                </div>
                <!--CHARACTER CARD-->
                <div>
                    <h2>CharacterCard</h2>
                    <table>
                       <thead>
                           <th>Método</th>
                           <th>Ruta</th>
                           <th>Acción</th>
                       </thead>
                       <tbody>
                           <tr><td>GET</td><td><b>/character-card</b></td><td>Recoge todas las relaciones character_card</td></tr>
                           <tr><td>GET</td><td><b>/character-card/{id}</b></td><td>Recoge una relación character_card por ID</td></tr>
                           <tr><td>POST</td><td><b>/character-card</b></td><td>Crea una relación character_card</td></tr>
                           <tr><td>PUT</td><td><b>/character-card/{id}</b></td><td>Actualiza una relación character_card</td></tr>
                           <tr><td>PATCH</td><td><b>/character-card/{id}</b></td><td>Actualiza parcialmente una relación character_card</td></tr>
                           <tr><td>DELETE</td><td><b>/character-card/{id}</b></td><td>Elimina una relación character_card</td></tr>
                       </tbody> 
                    </table>
                    <pre><code>
    {
      "id_card": 0,
      "id_character": 0
    }

    {
      "id_card": 5,
      "id_character": 2
    }
                    </code></pre>      
                </div>
                <!--CHARACTER ITEM-->
                <div>
                    <h2>CharacterItem</h2>
                    <table>
                       <thead>
                           <th>Método</th>
                           <th>Ruta</th>
                           <th>Acción</th>
                       </thead>
                       <tbody>
                           <tr><td>GET</td><td><b>/character-item</b></td><td>Recoge todas las relaciones character_item</td></tr>
                           <tr><td>GET</td><td><b>/character-item/{id}</b></td><td>Recoge una relación character_item por ID</td></tr>
                           <tr><td>POST</td><td><b>/character-item</b></td><td>Crea una relación character_item</td></tr>
                           <tr><td>PUT</td><td><b>/character-item/{id}</b></td><td>Actualiza una relación character_item</td></tr>
                           <tr><td>PATCH</td><td><b>/character-item/{id}</b></td><td>Actualiza parcialmente una relación character_item</td></tr>
                           <tr><td>DELETE</td><td><b>/character-item/{id}</b></td><td>Elimina una relación character_item</td></tr>
                       </tbody> 
                    </table>
                    <pre><code>
    {
      "id_item": 0,
      "id_character": 0
    }

    {
      "id_item": 7,
      "id_character": 3
    }
                    </code></pre>      
                </div>
                <!-- ENEMY ABILITIES-->
                <div>
                    <h2>EnemyAbilities</h2>
                    <table>
                       <thead>
                           <th>Método</th>
                           <th>Ruta</th>
                           <th>Acción</th>
                       </thead>
                       <tbody>
                           <tr><td>GET</td><td><b>/enemy-abilities</b></td><td>Recoge todas las relaciones enemy_abilities</td></tr>
                           <tr><td>GET</td><td><b>/enemy-abilities/{id}</b></td><td>Recoge una relación enemy_abilities por ID</td></tr>
                           <tr><td>POST</td><td><b>/enemy-abilities</b></td><td>Crea una relación enemy_abilities</td></tr>
                           <tr><td>PUT</td><td><b>/enemy-abilities/{id}</b></td><td>Actualiza una relación enemy_abilities</td></tr>
                           <tr><td>PATCH</td><td><b>/enemy-abilities/{id}</b></td><td>Actualiza parcialmente una relación enemy_abilities</td></tr>
                           <tr><td>DELETE</td><td><b>/enemy-abilities/{id}</b></td><td>Elimina una relación enemy_abilities</td></tr>
                       </tbody> 
                    </table>
                    <pre><code>
    {
      "id_enemy": 0,
      "id_effect": 0
    }

    {
      "id_enemy": 4,
      "id_effect": 2
    }
                    </code></pre>      
                </div>
                <!--ITEM EFFECT-->
                <div>
                    <h2>ItemEffect</h2>
                    <table>
                       <thead>
                           <th>Método</th>
                           <th>Ruta</th>
                           <th>Acción</th>
                       </thead>
                       <tbody>
                           <tr><td>GET</td><td><b>/item-effect</b></td><td>Recoge todas las relaciones item_effect</td></tr>
                           <tr><td>GET</td><td><b>/item-effect/{id}</b></td><td>Recoge una relación item_effect por ID</td></tr>
                           <tr><td>POST</td><td><b>/item-effect</b></td><td>Crea una relación item_effect</td></tr>
                           <tr><td>PUT</td><td><b>/item-effect/{id}</b></td><td>Actualiza una relación item_effect</td></tr>
                           <tr><td>PATCH</td><td><b>/item-effect/{id}</b></td><td>Actualiza parcialmente una relación item_effect</td></tr>
                           <tr><td>DELETE</td><td><b>/item-effect/{id}</b></td><td>Elimina una relación item_effect</td></tr>
                       </tbody> 
                    </table>
                    <pre><code>
    {
      "id_item": 0,
      "id_effect": 0
    }

    {
      "id_item": 10,
      "id_effect": 5
    }
                    </code></pre>      
                </div>
                <!--ITEM FUSION-->
                <div>
                    <h2>ItemFusion</h2>
                    <table>
                       <thead>
                           <th>Método</th>
                           <th>Ruta</th>
                           <th>Acción</th>
                       </thead>
                       <tbody>
                           <tr><td>GET</td><td><b>/item-fusion</b></td><td>Recoge todas las fusiones de ítems</td></tr>
                           <tr><td>GET</td><td><b>/item-fusion/{id}</b></td><td>Recoge una fusión por ID</td></tr>
                           <tr><td>POST</td><td><b>/item-fusion</b></td><td>Crea una fusión de ítems</td></tr>
                           <tr><td>PUT</td><td><b>/item-fusion/{id}</b></td><td>Actualiza una fusión</td></tr>
                           <tr><td>PATCH</td><td><b>/item-fusion/{id}</b></td><td>Actualiza parcialmente una fusión</td></tr>
                           <tr><td>DELETE</td><td><b>/item-fusion/{id}</b></td><td>Elimina una fusión</td></tr>
                       </tbody> 
                    </table>
                    <pre><code>
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
                    </code></pre>      
                </div>
        </div>
</table>
    </body>
</html>
