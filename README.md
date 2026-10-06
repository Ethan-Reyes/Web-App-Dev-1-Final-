# Online Resume (PHP + UIkit)

This is my online resume for my Web App Development I class. It's a one-page site that uses PHP, the UIkit framework, and a little bit of JavaScript.

## What's in it

- **A resume** with a summary, education, skills, work experience, and projects
- **A skills list built with PHP.** The skills live in a PHP array and a `foreach` loop prints them out, same idea as my Module 4 assignment
- **An accordion** from UIkit for my work experience, so you click a job to open it
- **A date button** written in plain JavaScript that shows and hides today's date
- **A contact form** that uses PHP to show you what was submitted
- **Hover animations** on the buttons and project cards
- **A responsive layout** with Flexbox and CSS Grid, so it works on phones and computers

## About the contact form

The form sends its data with POST and PHP displays it back on the page. I use `htmlspecialchars()` on everything it prints, so someone can't type code into the form and have it run on the page.

It doesn't send an email or save anything anywhere, since the assignment was just about displaying the submitted info. Adding either one would be a good next step.

## How to run it

PHP has to be installed on your computer. You can't just open `index.php` in a browser, because the PHP needs a server to run.

1. Open a terminal in the project folder (the one with `index.php`)
2. Run `php -S localhost:8000`
3. Go to `http://localhost:8000` in your browser
4. Press Ctrl+C in the terminal when you're done

The UIkit framework loads from a CDN, so you need an internet connection or the page will look unstyled.

## Files

```
index.php    the
