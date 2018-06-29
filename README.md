# 1. Installing Node

WordPressify requires Node v7.5+. This is the only global dependency. You can download Node **[here](https://nodejs.org/)**.

Node.js is a JavaScript runtime built on Chrome’s V8 JavaScript engine. Node.js uses an event-driven, non-blocking I/O model that makes it lightweight and efficient. Node.js’ package ecosystem, npm, is the largest ecosystem of open source libraries in the world.

# 2. Set Up Project
To install WordPressify you need to clone the repository from GitHub:
```
git clone https://github.com/luangjokaj/wordpressify
```
- This will clone the repository on your local machine. Navigate to the newly created folder and install the dependencies:

**INSTALL DEPENDENCIES**

```
npm install
```

**CHANGE TEMPLATE NAME**

- At this point WordPressify is installed and ready to be used for the first time. Before starting, open **gulpfile.js** and edit your template name:

```javascript
/* -------------------------------------------------------------------------------------------------
Theme Name
 ------------------------------------------------------------------------------------------------- */
const themeName = 'wordpressify';
//--------------------------------------------------------------------------------------------------
```

**INSTALL WORDPRESS**

- On the first run we need to install WordPress, we do this once by running the command:

```
npm run install:wordpress
```

- It will fetch the latest WordPress version, which is the build we use for the development server.

**START WORKFLOW**

- We are ready to start our development server with the command:

```
npm run dev
```

- If you are running a fresh instance of WordPress, the installation wizard will set up a **wp-config.php** file containing database credentials, site name etc.
- You are ready to go! Happy coding!

**WORDPRESS PLUGINS**

- If you want to add or build WordPress plugins, you can do that from the directory:

```
src/plugins/
```

**PRODUCTION TEMPLATE**

- To generate your distribution files run the command:

```
npm run prod
```

- The template will be saved as a zip file in:

```
dist/wordpressify.zip
```