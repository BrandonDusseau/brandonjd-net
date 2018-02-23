---
anchor: ical-display
title: iCal Display
start_date: 2015
end_date: 2015
images:
  -
    file: cal/main.png
    desc: Assignments and exams from multiple calendars are displayed, as well as the current date and time.
type: Web Application
technologies: ["PHP", "JS", "HTML", "CSS"]
link: https://github.com/brandondusseau/ics-display/
link_title: GitHub Repository
order: 9
---
While I was at school, I utilized Google Calendar to track which assignment due
dates and exams I had coming up, as something of a to-do list. As someone who
is motivated by seeing tasks get completed, I grew frustrated with the
inflexibility of the traditional calendar that Google provided. I could not
show that a task had been completed, or was late, without deleting the event.

I wrote this simple 10-foot style interface to display upcoming events from
only the calendars I wanted. I added the ability to read special tags from
event descriptions which would cause events to be shown as complete, or
urgent.

The application uses a PHP backend to read an iCal file from Google's server
(though any iCal file would work). The frontend uses JavaScript to periodically
reload the calendar content and make necessary formatting changes.
