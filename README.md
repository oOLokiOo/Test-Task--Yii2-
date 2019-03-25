# Test Task (Based on Yii2 Framework + Composer, NPM, Bootstrap, LESS, Gulp)

*@author Ivan Volkov aka oOLokiOo <ivan.volkov.older@gmail.com>*

REQUIREMENTS & INSTALLING
-------------------------

- Clone the Project from Github:
```
git clone https://github.com/oOLokiOo/Test-Task--Yii2-.git
cd Test-Task--Yii2-
```
- Install **Composer** for your OS - https://getcomposer.org/download/ 
- Install **Node.js** & **NPM** for your OS - https://www.npmjs.com/get-npm/ 
- Project based on **"yii2-app-basic"** - https://github.com/yiisoft/yii2-app-basic/ (from Documentaion - https://www.yiiframework.com/doc/guide/2.0/en/start-installation)
- From root project folder - run:
```
composer install
```
- Setup DB config & run migrations:
edit - **"/config/db.php"** and from root project folder - run:
```
npm run migrate
```
- Add test Data to DB (for editable ajax table, by task requires)
From root project folder, repeatedly - run:
```
yii adduser
```

- Last steps:
```
npm run dev
```

<p>
Add the project to VHosts your web server and run it in Browser.
Test it and Enjoy! ;)
</p>

Links for test:<br />
/index.php (Slicing + custom jQuery effect)<br />
/?r=site/login (Registred Users List page block - Ajax Editable Table)

Homepage JS gallery custom script:<br />
/web/js/utils.js