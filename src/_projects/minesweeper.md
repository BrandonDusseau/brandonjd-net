---
anchor: minesweeper
title: Minesweeper Classic
start_date: 2015
end_date: 2016
images:
  -
    file: ms/inprogress.png
    desc: A game in play.
  -
    file: ms/menu.png
    desc: An intermediate-level game board with the menu open, demonstrating game options.
  -
    file: ms/win.png
    desc: An completed beginner-level game, with the leaderboard window open.
  -
    file: ms/lose.png
    desc: A failed expert-level game.
  -
    file: ms/about.png
    desc: The game with the about dialog open.
  -
    file: ms/help.png
    desc: The game with the help dialog open.
type: Web Application
technologies: JavaScript (jQuery), CSS3, HTML5
link: https://github.com/brandondusseau/minesweeper-classic
link_title: GitHub Repository
order: 8
---
In 2015 I was playing around with an old laptop, and while playing Minesweeper it occurred to me that it might
be fun to implement the full game in JavaScript. Over the next few months, on and off, I built this fully-functional
Microsoft Minesweeper clone. My goal was to try to replicate the look and behavior of the Windows 2000 version of Minesweeper as much as possible. For the most part, it was easy, but jQuery's event management made window management challenging.

In the end, I was able to implement all features of Minesweeper, as well as many features of the Explorer shell's
window management. This includes window movement, window stacking, and modal dialogs. If you'd like to try it out,
I have a [live version](/minesweeper) available here on my website.
