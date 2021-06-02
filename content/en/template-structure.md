# Template structure

This section includes information about the structure of project folders and files.

## Project with a single template

- @fa-folder **dev** - contains all files in their initial form (an abbreviation of 'development')
    - @fa-folder **components** - the folder with components
        - @fa-folder **\<component>** - the folder name matches the component name and includes the source files (any number of such folders is allowed)
            - @fa-file **\*.pug**
            - @fa-file **\*.scss**
            - @fa-file **\*.css**
            - @fa-file **\*.js**
            - @fa-file **\*.min.js**
            - @fa-file **\*.php**
    - @fa-file **\*.html** - template pages
- @fa-folder **dist** - contains the optimized files to be sent to a server (abbreviation of 'distribution')
    - @fa-folder **components** - the folder with components
        - @fa-folder **\<component>** - the folder name matches the component name and includes the source files (any number of such folders is allowed but there can't be any **\*.pug** and **\*.scss** files)
            - @fa-file **\*.css**
            - @fa-file **\*.min.js**
            - @fa-file **\*.php**
    - @fa-file **\*.html** - template pages
- @fa-file **package.json** - file containing all necessary information about the project
- @fa-file **gulpfile.js** - file for generating Gulp tasks
- @fa-file **config.js** - file with parameters for executable Gulp tasks

## Project with multiple templates

- @fa-folder **dev** - contains all files in their initial form (an abbreviation of 'development')
    - @fa-folder **\<website template>** - folder with the website template, there will be 2 and more of them
        - @fa-folder **components** - the folder with components
            - @fa-folder **\<component>** - the folder name matches the component name and includes the source files (any number of such folders is allowed)
                - @fa-file **\*.pug**
                - @fa-file **\*.scss**
                - @fa-file **\*.css**
                - @fa-file **\*.js**
                - @fa-file **\*.min.js**
                - @fa-file **\*.php**
        - @fa-file **\*.html** - template pages
        - @fa-file **build.js** - file for building a specific template (may be absent)
- @fa-folder **dist** - contains the optimized files to be sent to a server (abbreviation of 'distribution')
    - @fa-folder **\<website template>** - folder with the website template, there will be 2 and more of them
        - @fa-folder **components** - the folder with components
            - @fa-folder **\<component>** - the folder name matches the component name and includes the source files (any number of such folders is allowed but there can't be any **\*.pug** and **\*.scss** files)
                - @fa-file **\*.css**
                - @fa-file **\*.min.js**
                - @fa-file **\*.php**
        - @fa-file **\*.html** - template pages
- @fa-file **package.json** - file containing all necessary information about the project
- @fa-file **gulpfile.js** - file for generating Gulp tasks
- @fa-file **config.js** - file with parameters for executable Gulp tasks
