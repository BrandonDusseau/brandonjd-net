---
anchor: np2wall
title: Neptune's Pride 2 Wallboard
start_date: 2016
end_date: 2017
images:
  -
    file: np2/open_game.png
    desc: An example of a running game. Players and stats are on the left, while a game timer and map of players is on the right.
  -
    file: np2/pending_game.png
    desc: A game that hasn't yet been started, with just a few players.
  -
    file: np2/ended_game.jpg
    desc: An ended game, displayed on a real monitor.
type: Web Application
technologies: ["PHP", "JS", "HTML", "CSS"]
link: https://github.com/BrandonDusseau/np2-wallboard
link_title: GitHub Repository
order: 11
---
This project utilizes the undocumented API in the online game "Neptune's Pride
2" to present game data on a 10-foot style display. I created the wallboard
during an office-wide game so that we could all track game progress with
minimal distraction.

The wallboard shows players' current status and resources in the game, as well
as their positions on the star map, and the current game timers. It also
features a game selection screen and automatic reload of game data.

This project served as an experiment in the use of CSS flexbox. The display
as a whole is able to scale with the window, and the player list is able to
reconfigure its layout based on how many players are in the game.
