# Working with the project

To begin your work with a project, it is required to install the additional components:
- install [**Node.js**](https://nodejs.org) (LTS version, or version 10.0.0 or higher).
- install [**Gulp**](https://gulpjs.com) globally (version 4.0.0 or higher).
- launch the console, go to the template's root directory and enter `npm i` command to install the modules from `package.json` file.

After installing all the necessary components, you can use the console commands:
- `gulp default` or `gulp` - runs the task with the local server, **\*.scss** compilators, and **\*.pug** files
- `gulp sass` - compiling all **\*.scss** files of a project/template
- `gulp pug` - compiling all **\*.pug** files of a project/template
- `gulp babel` - compiling and minifying all **\*.js** files of a project/template
- `gulp lint::sass` - error checking of all **\*.scss** project/template files
- `gulp lint::pug` - error checking of all **\*.pug** project/template files
- `gulp lint::js` - error checking of all **\*.js** project/template files
- `gulp validate-html` - error checking of all **\*.html** project/template files
- `gulp build` - full automatic distribution assembly (if a project has several templates, **dist** folder is deleted completely and generated again)
- `gulp 'build::<template name>'` - automatic distribution assembly for a template with a specific name if a project has several templates
