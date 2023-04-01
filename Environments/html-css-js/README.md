# HTML CSS
This is a ready made HTML/CSS/JavaScript project to have fun with.
Just clone it:
```shell
git clone git@gitlab.com:playground3813112/html-css-js.git
```
Switch into the project directory:
```shell
cd html-css-js
```
...create a new branch and check it out at once:
```shell
git checkout -b <mysuperbranch>
```
For playing around you can use VScode with Live Server, an JetBrains IDE or Docker.
If you use Docker, run:
```shell
docker-compose up -d
```
Open your browser and visit your project with this URL:
```shell
http://localhost:3000/
```
If you are done with playing around, stop the Docker environment with:
```shell
docker-compose down
```

## Hot Reloading
Hot reloading means, that your browser refresh automatically.  
There are two ways to work with that depending what tools you are using.  

By default your browser reloads if you save the file you are working on.  
If you use Vim or NeoVim, there is a tweak to reload the browser without saving.  
Open your `.vimrc` file:
```shell
vim ~/.vimrc
```
Set up automatic sourcing of `.vimrc` if you have changed something:
```shell
" Automatically source .vimrc on safe:
augroup autosourcing
    autocmd!
    autocmd BufWritePost .vimrc source %
augroup END
```
Then set autosave on every change in a file:
```shell
" Autosave file on every change in it:
autocmd TextChanged,TextChangedI <buffer> silent write
```
Then save and close `.vimrc` file with `shift zz`.

## File and Directory Structure
Your starting point is
* index.html
* /assets/css/main.css
* /assets/images/*
* /assets/js/main.js

If you like to see if the main.js file is working, open the development tools of your browser (`F12`) and click on
`console`.

### Files you don't have to mind about

**Dockerfile.browsersync**  
This file provides hot reload with the tool BrowserSync for Docker.  

**Dockerfile.nginx**  
This provides the webserver to visit the project in browser for Docker.  

**browsersync.sh**  
A shell script used by BrowserSync.  

**docker-compose.yml**  
Orchestrates the Docker environment.

**package.json**  
File of Node.JS to load the BrowserSync dependencies.
