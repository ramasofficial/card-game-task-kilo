# Requirements

## Task 1:  Estimate XXXX - Arnas K.A
Create something like the draw phase of the yu gi oh card game.
Create an endpoint games/{code}/draw. When requested, draw a card from the deck.
The deck contains all the cards in the database.
Drawing should be done in random.
Also, once drawn, the same card cannot be drawn again.
When drawn, illustrate the card on the page.

___
[Name]

[Other props]
___
[Name]

[Other props]
___
[Name]

[Other props]
___

## Task 2: Estimate XXXX
Create a card endpoint.
Create an endpoint that enables the user to create any type of card from the list below.

----------
Classification

Entity: Card.
Types: Monster, Spell, Trap.

Monster
- (string)      name
- (string|null) effect
- (int)         attack_points
- (int)         defense_points
- (string)      color - the same for all monster cards

Spell
- (string)      name
- (string)      effect
- (string)      color - the same for all spell cards

Trap
- (string)      name
- (string)      effect
- (string)      color - the same for all trap cards
- (string)      trigger

----------
## Details:

A monster card can have an effect but there should also be an option to add a plain monster card that does not have an effect.
A monster card should have attack points, defense points and a name that are different for each monster card.
All monster cards should have the same color.

A monster card should have a name and effect that are different for each spell card.
All spell cards should have the same color.

A trap card should have a name, effect and a trigger that are different for each trap card.
All trap cards should have the same color.

----

Please use Laravel or Symfony.

Try to spend at most 12 hours on the task - if you think you can't manage, feel free to take a shortcut, but describe what it was and why did you take it. Also, let us know what else you could do, if you had more time.

Let us know if there is anything which is not clear.

# Result
<img src="https://github.com/ramasofficial/card-game-task-kilo/blob/master/Screenshot_1.png" alt="Result" />
