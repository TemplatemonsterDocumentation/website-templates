# Preparation
Before starting to work with a template, you need to prepare. It is recommended to perform the next preparation steps:

## Software
For proper work with the website template, we recommend downloading all the required software. The list of the necessary software is available on the template's preview page.
The requirements for various templates can be subject to change, so we will list the most basic ones:
1. First of all, the correct software is required for extracting the password-protected archive **sources_#########.zip**. You can use **WinZip 9+** (Windows) and **Stuffit Expander 10+** (Mac). It is a mandatory software.
2. You may also need **Adobe Photoshop** (CS3 or higher). it is used for editing the source files **\*.psd** and is required for modifying the graphic design and images of the template.
3. For editing the source code of template files, you need to use the code editor, e.g. **Sublime Text**, **Notepad++**, **Atom**, etc.
4. To upload files to a hosting server, you will need an FTP manager, e.g. a file manager in the control panel of your hosting provider or desktop applications, such as **Total Commander**, **FileZilla**, **CuteFTP**, etc.
5. If you are a developer or want to compile the source code, you will also need to install [**Node.js**](https://nodejs.org).

## Hosting
You can just run the file **index.html** directly from the site folder, but you will not see all template features. For the website to be properly displayed, you need to upload the template to a hosting server.
When an active server is available, it is necessary to check its accordance with the requirements of **Website Template**, stated on the template's preview page. For a majority of templates, the only mandatory requirement is **PHP 5.2+**.
Also, you can install **Website Template** on your computer using a local server. You can use **WAMP**, **AppServ**, **MAMP** and other similar software to create a local hosting server. Any of them is installed like a simple application.

You can use the following guides for configuring your local server:
- [How to install **AppServ** web development environment](https://www.templatemonster.com/help/how-to-install-appserv-web-development-environment.html)
- [How to install **WAMP** web development environment](https://www.templatemonster.com/help/how-to-install-wamp-web-development-environment.html)
- [How to install **XAMP** web development environment](https://www.templatemonster.com/help/how-to-install-xamp-web-development-environment.html)

## Uploading a template to hosting
To make your website live, you need to upload all content directories **dist/** (or **dist/\<website template>/** in project with multiple templates) from your local computer to a hosting server.
{{alert-info}} Pay attention: a root directory of a website depends on the internal structure of your hosting server. If you upload **dist/** (or **dist/\<website template>/**) folder to the hosting server, then the root of your website will be **http://your_domain_name/dist**. For the root of your website to be **http://your_domain_name** , please open the **dist/** (or **dist/\<website template>/**) folder and add its content to your hosting server.
{{alert-danger}} Attention: do not upload **dev/** folder or any source file of the template to your hosting server.
