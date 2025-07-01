# The Giant Bomb Wiki

We should add stuff here.

## Running the wiki for the first time

- Have docker desktop installed and running
- Run `chmod +x ./entrypoint.sh` in the root of this repo - might not need this.
- Run `docker compose up -d` in the root of this repo.
- Go to http://localhost:8080/ in your browser. The installer will run automatically on first start.
- The values you need for the database connection are in the docker-compose.yml file - "db" is your host, etc.
- Make your admin account, and save the password!
- You will get to a screen that will save a LocalSettings.php file to your Downloads folder. Move that into the /config folder.
- Before doing anything else, run `docker compose restart`.
- You should now be able to access the wiki at http://localhost:8080/ and you should see the Gamepress skin enabled.

## Skins

- TODO: Learn about these!
- You can disable/enable skins by editing the LocalSettings.php file. See https://www.mediawiki.org/wiki/Manual:LocalSettings.php

## skins.GiantBomb
- Add the GiantBomb skin to your `LocalSettings.php` file
  - At the bottom of `LocalSettings.php` add the following:
    - `wfLoadSkin( 'GiantBomb' );`
    - `$wgDefaultSkin = "giantbomb";`
- Built using Vue 3 and TypeScript
- Install all dependencies:
  - `cd skins/GiantBomb && npm install`
- Use `npm run dev` to build all Vue's and restart docker container in your browser
- `App.vue` is main entry point
  - Renders Vue container into `GiantBombTemplate.php`
- Use `/resources/css/styles.css` for all CSS overrides
- Perform local styling directly onto Vue components 

## TODO's

- ~~We should probably remove a lot of the stuff in this repo that could be generated/downloaded from MediaWiki via cli. Probably.~~
- Get started on proof of concept approaches to theming the wiki
- Get started building out some of the complex relationships between categories like we have on the current wiki
