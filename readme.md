# Driver Test : 2165
If you want to *play* this game, you can do so here: https://zeel01.github.io/dt2165/index.html

## What is this?
Driver Test: 2165 is one of my first complete coding projects. It's a simple game with simple rules, navigate a car along a course of random obstacles without crashing. The longer you go, the higher your score.

### The history of dt2165
This project is a critical part of my journey as a developer, and a critical part of why I am where I am today. Allow me to tell you a story.

My interest in software development started in middle school and early High School. At the time, I was playing an online game called "Spybattle: 2165" - it's a quite simple browser-based text only game. I started my programming journey there, writing userscripts (small JavaScript programs that browser extensions allow you to run on top of websites) to enhance that game. You might have noticed the name! Yes, I set the "story" of dt2165 in th same year that Spybattle is set, though that's where any similarities end.

In high school, I was obsessed with computers and any kind fo electronics. It should come as no surpise that I installed apps and games on my Ti-84 graphing calculator. One such game was a very simple pixelated driving game in which the player uses the arrow buttons on the calculator to move a car left and right across the screen to avoid obstacles. As the game progresses, the score inscreases, and so does the speed of the game. I really enjoyed this game, I could sort of zone out and play it without really thinking.

Toward the end of highschool, came the search for a college. Enter Fully Sail University - my first choice, but a financial long-shot. My application was accepted, but that was only the first hurdle. It's not just an expensive school, but an expensive area in Florida where I would need to pay for an apartment. Full Sail offers the "Creative Minds Scholorship" to prospective students, it's a pretty sizable scholorship, and it involves entering a project into the contest. For the game development major I was interested in, that means creating a game of my own.

Armed with a concept, a name that nobody would understand the reference in, and a tutorial about writing a breakout clone in Java, I got to work. I based the gameplay on that Ti-84 game, and I drew all my own pixel-art cars and obstacles. Start to finish, the game took me a week to write - spring break of my senior year. I don't fully recall why I chose to write the game in Java, I think it was a combination of available graphics libraries and the ability to run the program either directly on a desktop environment or embed it in a web page. But the original dt2165 was written entirely in Java, and that is the version which I submitted for the scholorship.

And I won! The news was both extremely exciting, but also... troubling. The scholorship was big, but the price tag was bigger. Ultimately, despite winnig, I had to turn the scholorship down and go to a less expensive school. It just wasn't possible for me or my family to afford the rest of the tuition, much less room and board. Instead, I went to The University of Akron, and that decision has shaped the trajectory of my life. Where I live, where I work, meeting my wife... none of it would be the same if I had decied differently, taken out some crazy big loans, and moved to Florida.

This repository isn't Java, you might have noticed. After the scholorship competition, I didn't put dt2165 away for good. Instead I used it as I learned new things. I re-wrote the entire game from scratch in JavaScript, though the gameplay and mechanics are the same, and my hand-made graphical assets are the same ones I used in the Java version that I submitted.

### About The Software
The JavaScript version of Driver Test: 2165 is written in Object-Oriented JavaScript, and uses the "new" `<canvas>` API. The word "new" in quotes because this was nearly a decade ago. There are no dependencies, other than a "modern" internet browser. This was written before big graphics libraries like PIXI.js were available, so the graphics are handled directly through the canvas API, it's also a bit older than the modern `class` syntax for creating JS classes, so it uses the older `function` as a construtor means of creating classes.

There is also a critical bug - the game runs at the framerate of the user's screen, this includes not only rendering but the logical calculations of the game. When it was created, this wasn't a big deal, screens didn't have the kind of framrates they do today. However on a modern computer, this makes the game *far* more difficult. At some point I intend to make some upgrades to this project and correct this defect, but I will probably leave this version available with quirks intact.